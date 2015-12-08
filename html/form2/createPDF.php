<?php

//include '/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php';
include '/Library/WebServer/Documents/www/html/form2/config.php';

require_once($fpdf_local);
require_once($fpdi_local);


// initiate FPDI
$pdf = new FPDI();

// get the page count

//$pageCount = $pdf->setSourceFile('New-patient-registration.pdf');
$pageCount = $pdf->setSourceFile('New-patient-registration.pdf');

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
    
//$db = new SQLite3('/home1/columch7/public_html/Columbia.db');
$db = new SQLite3($columbiaDB_local);

$ID = $_GET["ID"];
$AUTH = $_GET["AUTH"];

$results = $db->query('SELECT * FROM pasco_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);

//$results = $db->query('SELECT * FROM Pasco_new_patients where ID=24');


$row = $results->fetchArray();

//print var_dump($row);
//exit();

function decrypt_text($value, $key1, $key2)
{
   if(!$value || !$key1 || !$key2) return false;
 
   $crypttext = base64_decode($value);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key1, $crypttext, MCRYPT_MODE_ECB, $key2);
   return trim($decrypttext);
}

//Name
    $pdf->SetFont('Helvetica');
    $pdf->SetXY(41, 28);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

//Phone
    $pdf->SetXY(153, 28);
    $pdf->Write(10, $row["PHONE"]);

//Street Address
    $pdf->SetXY(29, 35.5);
    $pdf->Write(10, $row["ADDRESS"]);

//Email
    $pdf->SetXY(141, 35.5);
    $pdf->Write(10, $row["EMAIL"]);

//City
    $pdf->SetXY(23, 43);
    $pdf->Write(10, $row["CITY"]);

//State
    $pdf->SetXY(110, 43);
    $pdf->Write(10, $row["STATE"]);

//Zip
    $pdf->SetXY(160, 43);
    $pdf->Write(10, $row["ZIP"]);

//DOB
    $pdf->SetXY(45, 50.3);
    $pdf->Write(10, decrypt_text($row["DOB"],$key1,$key2)); 

if ('M' == $row["GENDER"]){
//Gender: Male
    $pdf->SetXY(91.5, 50.3);
    $pdf->Write(10, 'X');
}
else{
//Gender: Female
    $pdf->SetXY(108, 50.3);
    $pdf->Write(10, 'X');
}

//SSN
    $pdf->SetXY(156, 50.3);
    $pdf->Write(10, decrypt_text($row["SSN"],$key1,$key2));

//Employer
    $pdf->SetXY(32, 57.8);
    $pdf->Write(10, $row["EMPLOYER"]);

//Source
    $pdf->SetXY(143, 57.8);
    $pdf->Write(10, $row["SOURCE"]);

//Employer address
if (strlen($row["EMPLOYER_ADDRESS"]) < 22){
    $pdf->SetXY(45, 65);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(45, 65);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
}

//Employer city
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(99, 65);
    $pdf->Write(10, $row["EMPLOYER_CITY"]);

//Employer State
    $pdf->SetXY(143, 65);
    $pdf->Write(10, $row["EMPLOYER_STATE"]);

//Employer zip
    $pdf->SetXY(175, 65);
    $pdf->Write(10, $row["EMPLOYER_ZIP"]);

//Physician
    $pdf->SetXY(49, 72);
    $pdf->Write(10, $row["REFERRING_PHYSICIAN"]);

//Physician address
    $pdf->SetXY(138, 72);
    $pdf->Write(10, $row["PHYSICIAN_ADDRESS"]);

//Physician city
    $pdf->SetXY(23, 79.5);
    $pdf->Write(10, $row["PHYSICIAN_CITY"]);

//Physician state
    $pdf->SetXY(79, 79.5);
    $pdf->Write(10, $row["PHYSICIAN_STATE"]);

//Physician zip
    $pdf->SetXY(111, 79.5);
    $pdf->Write(10, $row["PHYSICIAN_ZIP"]);

//Physician phone
    $pdf->SetXY(145, 79.5);
    $pdf->Write(10, $row["PHYSICIAN_PHONE"]);

//Spouse name
    $pdf->SetXY(62, 87);
    $pdf->Write(10, $row["SPOUSE_FIRST"] . " " . $row["SPOUSE_LAST"]);

//Spouse employer
    $pdf->SetXY(135, 87);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER"]);

//Spouse Home Phone
    $pdf->SetXY(38, 94.5);
    $pdf->Write(10, $row["SPOUSE_HOME_PHONE"]);

//Spouse work phone
    $pdf->SetXY(100, 94.5);
    $pdf->Write(10, $row["SPOUSE_WORK_PHONE"]);

//Spouse ssn
    $pdf->SetXY(152, 94.5);
    $pdf->Write(10, decrypt_text($row["SPOUSE_SSN"],$key1,$key2));

//Mother's name
    $pdf->SetXY(68, 104);
    $pdf->Write(10, $row["MOTHER_FIRST"] . " " . $row["MOTHER_LAST"]);

//Mother's address
    $pdf->SetXY(144, 104);
    $pdf->Write(10, $row["MOTHER_ADDRESS"]);

//Mother's city
    $pdf->SetXY(28, 111.5);
    $pdf->Write(10, $row["MOTHER_CITY"]);

//Mother's State
    $pdf->SetXY(91, 111.5);
    $pdf->Write(10, $row["MOTHER_STATE"]);

//Mother's zip
    $pdf->SetXY(121, 111.5);
    $pdf->Write(10, $row["MOTHER_ZIP"]);

//Mother's SSN
    $pdf->SetXY(154, 111.5);
    $pdf->Write(10, decrypt_text($row["MOTHER_SSN"],$key1,$key2));

//Mother's employer
    $pdf->SetXY(38, 119);
    $pdf->Write(10, $row["MOTHER_EMPLOYER"]);

//Mother's employer address
    $pdf->SetXY(120, 119);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ADDRESS"]);

//Mother's employer city
    $pdf->SetXY(28, 126);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_CITY"]);

//Mother's employer state
    $pdf->SetXY(91, 126);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_STATE"]);

//Mother's employer zip
    $pdf->SetXY(121, 126);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ZIP"]);

//Mother's employer phone
    $pdf->SetXY(157, 126);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_PHONE"]);

//Father's name
    $pdf->SetXY(68, 133.5);
    $pdf->Write(10, $row["FATHER_FIRST"] . " " . $row["FATHER_LAST"]);

//Father's address
    $pdf->SetXY(144, 133.5);
    $pdf->Write(10, $row["FATHER_ADDRESS"]);

//Father's city
    $pdf->SetXY(28, 140.5);
    $pdf->Write(10, $row["FATHER_CITY"]);

//Father's State
    $pdf->SetXY(91, 140.5);
    $pdf->Write(10, $row["FATHER_STATE"]);

//Father's zip
    $pdf->SetXY(121, 140.5);
    $pdf->Write(10, $row["FATHER_ZIP"]);

//Father's SSN
    $pdf->SetXY(154, 140.5);
    $pdf->Write(10, decrypt_text($row["FATHER_SSN"],$key1,$key2));

//Father's employer
if (strlen($row["FATHER_EMPLOYER"]) < 25) {
    $pdf->SetXY(38, 148);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(38, 148);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
}

//Father's employer address
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(107, 148);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ADDRESS"]);

//Father's employer city
    $pdf->SetXY(28, 155.5);
    $pdf->Write(10, $row["FATHER_EMPLOYER_CITY"]);

//Father's employer state
    $pdf->SetXY(91, 155.5);
    $pdf->Write(10, $row["FATHER_EMPLOYER_STATE"]);

//Father's employer zip
    $pdf->SetXY(121, 155.5);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ZIP"]);

//Father's employer phone
    $pdf->SetXY(157, 155);
    $pdf->Write(10, $row["FATHER_EMPLOYER_PHONE"]);

//Primary Insurance
    $pdf->SetXY(86, 168);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_NAME"]);

//Primary Insurance Address
if(strlen("PRIMARY_INSURANCE_ADDRESS") < 19){
    $pdf->SetXY(162, 168);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 22){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(162, 168);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(162, 168);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(162, 168);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
}
//Primary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(54, 175.5);
    $pdf->Write(10, $row["PI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Primary Insurance Subscriber's Employer
    $pdf->SetXY(140, 175.5);
    $pdf->Write(10, $row["PI_SUBSCRIBER_EMPLOYER"]);

//Primary Insurance Subscriber's ID
    $pdf->SetXY(52, 183);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_ID"],$key1,$key2));

//Primary Insurance Subscriber's Group Number
    $pdf->SetXY(112, 183);
    $pdf->Write(10, $row["PI_SUBSCRIBER_GROUP_NUMBER"]);

//Primary Insurance Subscriber's DOB
    $pdf->SetXY(172, 183);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_DOB"],$key1,$key2));

//Secondary Insurance
    $pdf->SetXY(90, 190);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_NAME"]);

//Secondary Insurance Address
    if(strlen("SECONDARY_INSURANCE_ADDRESS") < 19){
    $pdf->SetXY(162, 190);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 22){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(162, 190);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(162, 190);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(162, 190);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
}

//Secondary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(54, 197.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Secondary Insurance Subscriber's Employer
    $pdf->SetXY(140, 197.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_EMPLOYER"]);

//Secondary Insurance Subscriber's ID
    $pdf->SetXY(52, 204.5);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_ID"],$key1,$key2));

//Secondary Insurance Subscriber's Group Number
    $pdf->SetXY(112, 204.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_GROUP_NUMBER"]);

//Secondary Insurance Subscriber's DOB
    $pdf->SetXY(172, 204.5);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_DOB"],$key1,$key2));

//Injury is a Result of:
if ($row["NEED_TREATMENT_FOR"] == 'OTI') {
//On the Job Injury
    $pdf->SetXY(83, 212);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Auto') {
//Auto
    $pdf->SetXY(134, 212);
    $pdf->Write(10, 'X');
} else {
//Accident
    $pdf->SetXY(159, 212);
    $pdf->Write(10, 'X');
}

//Date of Injury
    $pdf->SetXY(72, 219.5);
    $pdf->Write(10, $row["DATE_OF_INJURY"]);

//Claim Number
    $pdf->SetXY(120, 219.5);
    $pdf->Write(10, decrypt_text($row["CLAIM_NUMBER"],$key1,$key2));

//Emergency Contact
    $pdf->SetXY(99, 230.5);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_FIRST"] . " " . $row["EMERGENCY_CONTACT_LAST"]);

//Emergency Contact Phone Number
    $pdf->SetFont('Helvetica','', 10.5);
    $pdf->SetXY(179, 230.5);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_PHONE"]);

//Signature
	$pdf->SetFont('Helvetica','',12);
    	$pdf->SetXY(32, 263);
   	$pdf->Write(10, $row["SIGNATURE"]);

//Today's Date
	$pdf->SetXY(165, 263);
   	$pdf->Write(10, $row["TODAY_DATE"]);

}

// Output the new PDF
$pdf->Output();
