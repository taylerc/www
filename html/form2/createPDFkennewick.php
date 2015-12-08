<?php

//This program creates a new pdf using a blank pdf template of the clinic's new patient form, and then pulls the user's information from the database, and overlays it on the form in the correct spaces. 

include '/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php';

require_once($fpdf);
require_once($fpdi);

// initiate FPDI
$pdf = new FPDI();

// get the page count

//$pageCount = $pdf->setSourceFile('New-patient-registration.pdf');
$pageCount = $pdf->setSourceFile('New-Patient-info-Kennewick1.pdf');

// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
	// import a page
	$templateId = $pdf->importPage($pageNo);
	// get the size of the imported page
	$size = $pdf->getTemplateSize($templateId);
    	
	// create a page (landscape or portrait depending on the imported page size)
	if ($size['w'] > $size['h']) {
		$pdf->AddPage('L', array($size['w'], $size['h']));
	} 
	else {
		$pdf->AddPage('P', array($size['w'], $size['h']));
	}

	// use the imported page
	$pdf->useTemplate($templateId);
    
	//Calls the database
	$db = new SQLite3($columbiaDB);

	//obtains ID and AUTH numbers from the link
	$ID = $_GET["ID"];
	$AUTH = $_GET["AUTH"];

	//Selects the contents of the row that matches the ID and AUTH numbers in the link.
	$results = $db->query('SELECT * FROM kennewick_new_patients where ID = ' . $ID . ' and AUTH = ' .$AUTH);

	//text decryption function.
	function decrypt_text($value, $key1, $key2){
		if(!$value || !$key1 || !$key2) return false;
 
		$crypttext = base64_decode($value);
		$decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key1, $crypttext, MCRYPT_MODE_ECB, $key2);
		return trim($decrypttext);
	}

	//loads the data from the table into the array $row
	$row = $results->fetchArray();

	//print var_dump($row);
	//exit();

	//instructions for where and how to place each piece of information on the pdf form

	//Name
	$pdf->SetFont('Arial');
	$pdf->SetXY(36, 45);
	$pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

	//Phone
	$pdf->SetXY(147, 45);
	$pdf->Write(10, $row["HOME_PHONE"]);

	//Cell Phone
	if (strlen($row["CELL_PHONE"]) > 3){
		$pdf->SetXY(142, 51.5);
		$pdf->Write(10, $row["CELL_PHONE"]); 
	} 

	//Street Address
	$pdf->SetXY(27, 51.5);
	$pdf->Write(10, $row["ADDRESS"]);

	//Email
	$pdf->SetXY(136, 58);
	$pdf->Write(10, $row["EMAIL"]);

	//City	 
	$pdf->SetXY(19, 58);
	$pdf->Write(10, $row["CITY"]);

	//State
	$pdf->SetXY(75, 58);	
	$pdf->Write(10, $row["STATE"]);

	//Zip
	$pdf->SetXY(102, 58);
	$pdf->Write(10, $row["ZIP"]);

	//DOB
	if ($row["DOB"] !== '//'){
		$pdf->SetXY(33, 64.5);
		$pdf->Write(10, decrypt_text($row["DOB"],$key1,$key2)); 
	}

	if ('M' == $row["GENDER"]){
		//Gender: Male
		$pdf->SetXY(75.3, 65);
		$pdf->Write(10, 'X');
	}
	else{
		//Gender: Female
		$pdf->SetXY(101, 65);
		$pdf->Write(10, 'X');
	}

	//SSN
	$pdf->SetXY(136, 64.5);
	$pdf->Write(10, decrypt_text($row["SSN"],$key1,$key2));

	//Student
	if ('Y' == $row["STUDENT"]){
		$pdf->SetXY(100, 71.5);
		$pdf->Write(10, 'X');
	}

	//Employer
	$pdf->SetXY(28, 71);
	$pdf->Write(10, $row["EMPLOYER"]);

	//Employer address
	if (strlen($row["EMPLOYER_ADDRESS"]) < 30){
		$pdf->SetXY(43, 77.5);
		$pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
	} 
	else {
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(43, 77.5);
		$pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
	}

	//Employer city
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(110, 77.5);
	$pdf->Write(10, $row["EMPLOYER_CITY"]);

	//Employer State
	$pdf->SetXY(157, 77.5);
	$pdf->Write(10, $row["EMPLOYER_STATE"]);

	//Employer zip
	$pdf->SetXY(175, 77.5);
	$pdf->Write(10, $row["EMPLOYER_ZIP"]);

	//Work Phone
	if (strlen($row["WORK_PHONE"]) > 3){
		$pdf->SetXY(147, 71);
		$pdf->Write(10, $row["WORK_PHONE"]);  
	} 

	//Physician
	$pdf->SetXY(42, 84);
	$pdf->Write(10, $row["REFERRING_PHYSICIAN"]);

	//Physician address
	$pdf->SetXY(156, 84);
	$pdf->Write(10, $row["PHYSICIAN_ADDRESS"]);

	//Physician city
	$pdf->SetXY(20, 90.5);
	$pdf->Write(10, $row["PHYSICIAN_CITY"]);

	//Physician state
	$pdf->SetXY(77, 90.5);
	$pdf->Write(10, $row["PHYSICIAN_STATE"]);

	//Physician zip
	$pdf->SetXY(104, 90.5);
	$pdf->Write(10, $row["PHYSICIAN_ZIP"]);

	//Physician phone
	if (strlen($row["PHYSICIAN_PHONE"]) > 3){
		$pdf->SetXY(140, 90.5);
		$pdf->Write(10, $row["PHYSICIAN_PHONE"]);
	}

	//Spouse name
	$pdf->SetXY(52, 97);
	$pdf->Write(10, $row["SPOUSE_FIRST"] . " " . $row["SPOUSE_LAST"]);

	//Spouse employer
	$pdf->SetXY(143, 97);
	$pdf->Write(10, $row["SPOUSE_EMPLOYER"]);

	//Spouse Home Phone
	if (strlen($row["SPOUSE_CELL_PHONE"]) > 3){
		$pdf->SetXY(30, 103);
		$pdf->Write(10, $row["SPOUSE_CELL_PHONE"]);
	}

	//Spouse work phone
	if (strlen($row["SPOUSE_WORK_PHONE"]) > 3){
		$pdf->SetXY(97, 103);
		$pdf->Write(10, $row["SPOUSE_WORK_PHONE"]);
	}

	//Mother's name
	$pdf->SetXY(52, 116);
	$pdf->Write(10, $row["MOTHER_FIRST"] . " " . $row["MOTHER_LAST"]);

	//Mother's address
	$pdf->SetXY(135, 116);
	$pdf->Write(10, $row["MOTHER_ADDRESS"]);

	//Mother's city
	$pdf->SetXY(19, 122.5);
	$pdf->Write(10, $row["MOTHER_CITY"]);

	//Mother's State
	$pdf->SetXY(108, 122.5);
	$pdf->Write(10, $row["MOTHER_STATE"]);

	//Mother's zip
	$pdf->SetXY(135, 122.5);
	$pdf->Write(10, $row["MOTHER_ZIP"]);

	//Mother's DOB
	if (decrypt_text($row["MOTHER_DOB"],$key1,$key2) !== '//'){
		$pdf->SetXY(175, 122.5);
		$pdf->Write(10, decrypt_text($row["MOTHER_DOB"],$key1,$key2));
	} 

	//Mother's employer
	$pdf->SetXY(28, 129);
	$pdf->Write(10, $row["MOTHER_EMPLOYER"]);

	//Mother's employer address
	$pdf->SetXY(135, 129);
	$pdf->Write(10, $row["MOTHER_EMPLOYER_ADDRESS"]);

	//Mother's employer city
	$pdf->SetXY(20, 135.5);
	$pdf->Write(10, $row["MOTHER_EMPLOYER_CITY"]);

	//Mother's employer state
	$pdf->SetXY(89 , 135.5);
	$pdf->Write(10, $row["MOTHER_EMPLOYER_STATE"]);

	//Mother's employer zip
	$pdf->SetXY(116, 135.5);
	$pdf->Write(10, $row["MOTHER_EMPLOYER_ZIP"]);

	//Mother's employer phone
	if (strlen($row["MOTHER_EMPLOYER_PHONE"]) > 3){
		$pdf->SetXY(150, 135.5);
		$pdf->Write(10, $row["MOTHER_EMPLOYER_PHONE"]);
	}

	//Father's name
	$pdf->SetXY(52, 142);
	$pdf->Write(10, $row["FATHER_FIRST"] . " " . $row["FATHER_LAST"]);

	//Father's address
	$pdf->SetXY(135, 142);
	$pdf->Write(10, $row["FATHER_ADDRESS"]);

	//Father's city
	$pdf->SetXY(19, 148.5);
	$pdf->Write(10, $row["FATHER_CITY"]);

	//Father's State
	$pdf->SetXY(108, 148.5);
	$pdf->Write(10, $row["FATHER_STATE"]);

	//Father's zip
	$pdf->SetXY(135, 148.5);
	$pdf->Write(10, $row["FATHER_ZIP"]);

	//Father's DOB
	if (decrypt_text($row["FATHER_DOB"],$key1,$key2) !== '//'){
		$pdf->SetXY(175, 148.5);
		$pdf->Write(10, decrypt_text($row["FATHER_DOB"],$key1,$key2));
	} 

	//Father's employer
	if (strlen($row["FATHER_EMPLOYER"]) < 35) {
		$pdf->SetXY(28, 155);
		$pdf->Write(10, $row["FATHER_EMPLOYER"]);
	} 
	else {
		$pdf->SetFont('Arial','',10);
		$pdf->SetXY(28, 155);
		$pdf->Write(10, $row["FATHER_EMPLOYER"]);
	}

	//Father's employer address
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(119, 155);
	$pdf->Write(10, $row["FATHER_EMPLOYER_ADDRESS"]);

	//Father's employer city
	$pdf->SetXY(20, 161.5);
	$pdf->Write(10, $row["FATHER_EMPLOYER_CITY"]);

	//Father's employer state
	$pdf->SetXY(89, 161.5);
	$pdf->Write(10, $row["FATHER_EMPLOYER_STATE"]);

	//Father's employer zip
	$pdf->SetXY(116, 161.5);
	$pdf->Write(10, $row["FATHER_EMPLOYER_ZIP"]);

	//Father's employer phone
	if (strlen($row["FATHER_EMPLOYER_PHONE"]) > 3){
		$pdf->SetXY(151, 161);
		$pdf->Write(10, $row["FATHER_EMPLOYER_PHONE"]);
	}

	//Emergency Contact
	$pdf->SetXY(52, 172);
	$pdf->Write(10, $row["EMERGENCY_CONTACT_FIRST"] . " " . $row["EMERGENCY_CONTACT_LAST"]);

	//Emergency Contact Phone Number
	$pdf->SetXY(151, 172);
	$pdf->Write(10, $row["EMERGENCY_CONTACT_PHONE"]);

	//Signiature 1
	$pdf->SetXY(28, 204);
	$pdf->Write(10, $row["SIGNIATURE"]);  

	//Today's Date
	$pdf->SetXY(160, 204);
	$pdf->Write(10, $row["TODAY_DATE"]);  

	if ('All' == $row["ROI"]){
		//All Medical and Billing Information  
		$pdf->SetXY(11.7, 214.5);
		$pdf->Write(10, 'X');
	}
	elseif ('Appointment' == $row["ROI"]){
		//Appointment Info only
		$pdf->SetXY(75.2, 214.5);
		$pdf->Write(10, 'X');
	}

	//ROI Person 1
	$pdf->SetXY(12, 223);
	$pdf->Write(10, $row["ROI_PERSON_1_FIRST"] . " " . $row["ROI_PERSON_1_LAST"]);  

	//ROI Person 1 Relationship
	$pdf->SetXY(126, 223);
	$pdf->Write(10, $row["ROI_PERSON_1_RELATIONSHIP"]);  

	//ROI Person 2
	$pdf->SetXY(12, 236);
	$pdf->Write(10, $row["ROI_PERSON_2_FIRST"] . " " . $row["ROI_PERSON_2_LAST"]);  

	//ROI Person 2 Relationship
	$pdf->SetXY(126, 236);
	$pdf->Write(10, $row["ROI_PERSON_2_RELATIONSHIP"]);  

	//ROI Signiature
	$pdf->SetXY(12, 249);
	$pdf->Write(10, $row["ROI_SIGNIATURE"]);  

	//ROI Signiature Date
	if (strlen($row["ROI_DATE"]) > 2) {
		$pdf->SetXY(126, 249);
		$pdf->Write(10, $row["ROI_DATE"]);  
	}

}

// Output the new PDF
$pdf->Output();

?>
