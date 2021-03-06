<?php

include '/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php';
//include '/var/www/html/form2/config.php';

require_once($fpdf);
require_once($fpdi);

// initiate FPDI
$pdf = new FPDI();

// get the page count

$pageCount = $pdf->setSourceFile('New-Patient-Info-santiam.pdf');

// iterate through all pages
for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
    // import a page
    $templateId = $pdf->importPage($pageNo);
    // get the size of the imported page
    $size = $pdf->getTemplateSize($templateId);
    	
    // create a page (landscape or portrait depending on the imported page size)
    if ($size['w'] > $size['h']) {
        $pdf->AddPage('L', array($size['w'], $size['h']));
    } else {
        $pdf->AddPage('P', array($size['w'], $size['h']));
    }

    // use the imported page
    $pdf->useTemplate($templateId);

	$pdf->SetAutoPageBreak(false);
    
$db = new SQLite3($columbiaDB);

$ID = $_GET["ID"];
$AUTH = $_GET["AUTH"];

$results = $db->query('SELECT * FROM santiam_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);

function decrypt_text($value, $key1, $key2)
{
   if(!$value || !$key1 || !$key2) return false;
 
   $crypttext = base64_decode($value);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key1, $crypttext, MCRYPT_MODE_ECB, $key2);
   return trim($decrypttext);
}

$row = $results->fetchArray();

//print var_dump($row);
//exit();

//Name
    $pdf->SetFont('Helvetica');
    $pdf->SetXY(38, 33.5);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

//Returning Patient
if ('Y' == $row["RETURNING_PATIENT"]){
    $pdf->SetXY(93.7, 20.2);
    $pdf->Write(10, 'X');
} elseif ('N' == $row["RETURNING_PATIENT"]){
    $pdf->SetXY(120.2, 20.2);
    $pdf->Write(10, 'X');
}

//Phone
    $pdf->SetXY(153, 33);
    $pdf->Write(10, $row["PHONE"]);

//Street Address
    $pdf->SetXY(26.5, 40);
    $pdf->Write(10, $row["ADDRESS"]);

//Cell Phone
    $pdf->SetXY(153, 39.5);
    $pdf->Write(10, $row["CELL_PHONE"]);

//City
    $pdf->SetXY(20, 46.5);
    $pdf->Write(10, $row["CITY"]);

//State
    $pdf->SetXY(118, 46.2);
    $pdf->Write(10, $row["STATE"]);

//Zip
    $pdf->SetXY(160, 46);
    $pdf->Write(10, $row["ZIP"]);

//DOB
    $pdf->SetXY(42, 53);
    $pdf->Write(10, decrypt_text($row["DOB"],$key1,$key2)); 

if ('M' == $row["GENDER"]){
//Gender: Male
    $pdf->SetXY(93.8, 52.8);
    $pdf->Write(10, 'X');
} else{
//Gender: Female
    $pdf->SetXY(111.8, 52.8);
    $pdf->Write(10, 'X');
}

//SSN
    $pdf->SetXY(156, 52.5);
    $pdf->Write(10, decrypt_text($row["SSN"],$key1,$key2));

//Employer
    $pdf->SetXY(30, 59.7);
    $pdf->Write(10, $row["EMPLOYER"]);

//Work Phone
    $pdf->SetXY(160, 59.2);
    $pdf->Write(10, $row["WORK_PHONE"]);

//Employer address
if (strlen($row["EMPLOYER_ADDRESS"]) < 22){
    $pdf->SetXY(42, 66);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(42, 66);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
}

//Employer city
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(109, 66);
    $pdf->Write(10, $row["EMPLOYER_CITY"]);

//Employer State
    $pdf->SetXY(151, 65.8);
    $pdf->Write(10, $row["EMPLOYER_STATE"]);

//Employer zip
    $pdf->SetXY(176, 65.8);
    $pdf->Write(10, $row["EMPLOYER_ZIP"]);

//Physician
    $pdf->SetXY(45, 72.5);
    $pdf->Write(10, $row["REFERRING_PHYSICIAN"]);

//Physician address
    $pdf->SetXY(44, 79);
    $pdf->Write(10, $row["PHYSICIAN_ADDRESS"]);

//Physician city
    $pdf->SetXY(109, 79);
    $pdf->Write(10, $row["PHYSICIAN_CITY"]);

//Physician state
    $pdf->SetXY(151, 79);
    $pdf->Write(10, $row["PHYSICIAN_STATE"]);

//Physician zip
    $pdf->SetXY(176, 78.5);
    $pdf->Write(10, $row["PHYSICIAN_ZIP"]);

//Physician phone
    $pdf->SetXY(155, 72.2);
    $pdf->Write(10, $row["PHYSICIAN_PHONE"]);

//Spouse name
    $pdf->SetXY(58.5, 85.5);
    $pdf->Write(10, $row["SPOUSE_NAME"]);

//Spouse employer
    $pdf->SetXY(142, 85.2);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER"]);

//Spouse Home Phone
    $pdf->SetXY(38, 92);
    $pdf->Write(10, $row["SPOUSE_HOME_PHONE"]);

//Spouse work phone
    $pdf->SetXY(100, 92);
    $pdf->Write(10, $row["SPOUSE_WORK_PHONE"]);

//Spouse ssn
    $pdf->SetXY(155, 92);
    $pdf->Write(10, decrypt_text($row["SPOUSE_SSN"],$key1,$key2));

//Mother's name
    $pdf->SetXY(55, 105.2);
    $pdf->Write(10, $row["MOTHER_FIRST"] . " " . $row["MOTHER_LAST"]);

//Mother's phone
    $pdf->SetXY(155, 105);
    $pdf->Write(10, $row["MOTHER_PHONE"]);

//Mother's address
    $pdf->SetXY(26, 110.7);
    $pdf->Write(10, $row["MOTHER_ADDRESS"]);

//Mother's city
    $pdf->SetXY(95, 110.7);
    $pdf->Write(10, $row["MOTHER_CITY"]);

//Mother's State
    $pdf->SetXY(151, 110.7);
    $pdf->Write(10, $row["MOTHER_STATE"]);

//Mother's zip
    $pdf->SetXY(176, 110.7);
    $pdf->Write(10, $row["MOTHER_ZIP"]);

//Mother's SSN
    $pdf->SetXY(20, 117.5);
    $pdf->Write(10, decrypt_text($row["MOTHER_SSN"],$key1,$key2));

//Mother's employer
    $pdf->SetXY(68, 117.5);
    $pdf->Write(10, $row["MOTHER_EMPLOYER"]);

//Mother's employer address
    $pdf->SetXY(41, 124);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ADDRESS"]);

//Mother's employer city
    $pdf->SetXY(108, 124);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_CITY"]);

//Mother's employer state
    $pdf->SetXY(151, 123.8);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_STATE"]);

//Mother's employer zip
    $pdf->SetXY(176, 123.8);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ZIP"]);

//Mother's employer phone
    $pdf->SetXY(157, 117.5);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_PHONE"]);

//Father's name
    $pdf->SetXY(55, 130.4);
    $pdf->Write(10, $row["FATHER_FIRST"] . " " . $row["FATHER_LAST"]);

//Father's phone
    $pdf->SetXY(155, 130.4);
    $pdf->Write(10, $row["FATHER_PHONE"]);

//Father's address
    $pdf->SetXY(26, 136);
    $pdf->Write(10, $row["FATHER_ADDRESS"]);

//Father's city
    $pdf->SetXY(95, 136);
    $pdf->Write(10, $row["FATHER_CITY"]);

//Father's State
    $pdf->SetXY(151, 136);
    $pdf->Write(10, $row["FATHER_STATE"]);

//Father's zip
    $pdf->SetXY(176, 136);
    $pdf->Write(10, $row["FATHER_ZIP"]);

//Father's SSN
    $pdf->SetXY(20, 142.5);
    $pdf->Write(10, decrypt_text($row["FATHER_SSN"],$key1,$key2));

//Father's employer
if (strlen($row["FATHER_EMPLOYER"]) < 25) {
    $pdf->SetXY(68, 142.5);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(68, 142.5);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
}

//Father's employer address
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(42, 149);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ADDRESS"]);

//Father's employer city
    $pdf->SetXY(108, 149);
    $pdf->Write(10, $row["FATHER_EMPLOYER_CITY"]);

//Father's employer state
    $pdf->SetXY(151, 149);
    $pdf->Write(10, $row["FATHER_EMPLOYER_STATE"]);

//Father's employer zip
    $pdf->SetXY(176, 149);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ZIP"]);

//Father's employer phone
    $pdf->SetXY(157, 142.5);
    $pdf->Write(10, $row["FATHER_EMPLOYER_PHONE"]);

//Primary Insurance
    $pdf->SetXY(70, 165);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_NAME"]);

//Primary Insurance Address
if(strlen("PRIMARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetXY(144, 165);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 31){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(144, 165);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 34){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(144, 165);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(144, 165);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
}
//Primary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(46, 171.5);
    $pdf->Write(10, $row["PI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Primary Insurance Subscriber's Employer
    $pdf->SetXY(144, 171.5);
    $pdf->Write(10, $row["PI_SUBSCRIBER_EMPLOYER"]);

//Primary Insurance Subscriber's ID
    $pdf->SetXY(52, 178);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_ID"],$key1,$key2));

//Primary Insurance Subscriber's Group Number
    $pdf->SetXY(112, 178);
    $pdf->Write(10, $row["PI_SUBSCRIBER_GROUP_NUMBER"]);

//Primary Insurance Subscriber's DOB
    $pdf->SetXY(157, 177.8);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_DOB"],$key1,$key2));

//Secondary Insurance
    $pdf->SetXY(75, 184.5);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_NAME"]);

//Secondary Insurance Address
    if(strlen("SECONDARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetXY(143, 184.5);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 31){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(143, 184.5);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 34){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(143, 184.5);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(143, 184.5);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
}

//Secondary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(46, 191);
    $pdf->Write(10, $row["SI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Secondary Insurance Subscriber's Employer
    $pdf->SetXY(144, 191);
    $pdf->Write(10, $row["SI_SUBSCRIBER_EMPLOYER"]);

//Secondary Insurance Subscriber's ID
    $pdf->SetXY(52, 197.5);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_ID"],$key1,$key2));

//Secondary Insurance Subscriber's Group Number
    $pdf->SetXY(112, 197.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_GROUP_NUMBER"]);

//Secondary Insurance Subscriber's DOB
    $pdf->SetXY(157, 197.5);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_DOB"],$key1,$key2));

//Injury is a Result of:
if ($row["NEED_TREATMENT_FOR"] == 'OTI') {
//On the Job Injury
    $pdf->SetXY(65.5, 204);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Auto') {
//Auto
    $pdf->SetXY(110.5, 204);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Accident'){
//Accident
    $pdf->SetXY(137, 204);
    $pdf->Write(10, 'X');
}

//Date of Injury
    $pdf->SetXY(55, 210.5);
    $pdf->Write(10, $row["DATE_OF_INJURY"]);

//Claim Number
    $pdf->SetXY(130, 210.5);
    $pdf->Write(10, decrypt_text($row["CLAIM_NUMBER"],$key1,$key2));

//Emergency Contact
    $pdf->SetXY(89, 221);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_FIRST"] . " " . $row["EMERGENCY_CONTACT_LAST"]);

//Emergency Contact Phone Number
    $pdf->SetXY(167, 221);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_PHONE"]);

//Signature
    	$pdf->SetXY(30, 256.5);
   	$pdf->Write(10, $row["SIGNATURE"]);

//Today's Date
	$pdf->SetXY(165, 256.5);
   	$pdf->Write(10, $row["TODAY_DATE"]);

}

// Output the new PDF
$pdf->Output();
?>
