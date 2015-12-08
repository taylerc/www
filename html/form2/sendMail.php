<?php

//This program sends an email to the office manager of the clinic for which the patient filled out the form, with a link to the createPDF file for that patient.

include('/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php');

//accesses the database
$db = new SQLite3($columbiaDB);

//array associates the tables for each clinic with the email address for the office manager at that clinic
$tables = array(
	'pasco_new_patients' => 'bgcolumbiapt@gmail.com',
	'kennewick_new_patients' => 'kennewick@columbiapt.net',
	'meridian_north_new_patients' => 'bpiercedpt@gmail.com',
	'richland_new_patients' => 'richland@columbiapt.net',
	'moses_new_patients' => 'moseslake@columbiapt.net',
	'meridian_new_patients' => 'meridianpt12@gmail.com',
	'benton_new_patients' => 'bentoncitypt@gmail.com',
	'west_richland_new_patients' => 'wrichlandpt@yahoo.com',
	'grandview_new_patients' => 'grandview@columbiapt.net',
	'santiam_new_patients' => 'santiampt@comcast.net',
	'clarkston_new_patients' => 'clarkstonpt@msn.com'
);

//array associates the right table and pdf form for each clinic
$SCRIPTNAME = array(
	'pasco_new_patients' => 'createPDF', 
	'kennewick_new_patients' => 'createPDFkennewick',
	'meridian_north_new_patients' => 'createPDFMeridianNorth',
	'richland_new_patients' => 'createPDFrichland',
	'moses_new_patients' => 'createPDFmoseslake',
	'meridian_new_patients' => 'createPDFMeridian',
	'benton_new_patients' => 'createPDFBentoncity',
	'west_richland_new_patients' => 'createPDFWestrichland',
	'grandview_new_patients' => 'createPDFGrandview',
	'santiam_new_patients' => 'createPDFSantiam',
	'clarkston_new_patients' => 'createPDFClarkston'
);


foreach ($tables as $table_name => $email){

	//calls the ID and AUTH numbers from the db for the link in the email, and the first and last name of the patient for the information of the office manager
	$results = $db->query('SELECT ID, FIRST_NAME, LAST_NAME, AUTH FROM '. $table_name .' where EMAIL_SENT IS NULL');

	//creates the email to be sent to office managers. 
	while ($row = $results->fetchArray()) {

		$to = $email;
		$subject = 'New Patient form for ' . htmlspecialchars($row["FIRST_NAME"]) . ' ' . htmlspecialchars($row["LAST_NAME"]);
		$message = 'This is an auto-generated email, please do not respond.' . "\r\n" . "\r\n" .
		'Hello,' . "\r\n" . "\r\n" .
		'Please click the link below to access the new patient form for: ' . "\r\n" . "\r\n" . htmlspecialchars($row["FIRST_NAME"]) . ' ' .      htmlspecialchars($row["LAST_NAME"]) . "\r\n" . "\r\n" .
		'http://www.columbiaphysicaltherapyinc.com/form2/'. $SCRIPTNAME[$table_name] .'.php?ID='. htmlspecialchars($row["ID"]) . '&AUTH='. htmlspecialchars($row["AUTH"]);
		$message = wordwrap($message, 70, "\r\n");
		$headers = 'From: support@columbiapt.net';

		mail($to, $subject, $message, $headers); 
		$db->exec("UPDATE $table_name SET EMAIL_SENT = 'TRUE' where ID = " . $row['ID']);
	}
}

echo '<html><body><p>Email has been sent.</p></body></html>';

?>
