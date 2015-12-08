<?php

include '/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php';
//include '/var/www/html/form2/config.php';

require_once($fpdf);
require_once($fpdi);

// initiate FPDI
$pdf = new FPDI();

// get the page count

//$pageCount = $pdf->setSourceFile('New-patient-registration.pdf');
$pageCount = $pdf->setSourceFile('New-patient-WR.pdf');

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
$db = new SQLite3($columbiaDB);

$ID = $_GET["ID"];
$AUTH = $_GET["AUTH"];

$results = $db->query('SELECT * FROM west_richland_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);

//$results = $db->query('SELECT * FROM Pasco_new_patients where ID=24');

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
    $pdf->SetXY(38, 42);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

//Phone
    $pdf->SetXY(153, 42);
    $pdf->Write(10, $row["PHONE"]);

//Street Address
    $pdf->SetXY(26.5, 48.4);
    $pdf->Write(10, $row["ADDRESS"]);

//Cell Phone
    $pdf->SetXY(141, 48.4);
    $pdf->Write(10, $row["CELL_PHONE"]);

//City
    $pdf->SetXY(20, 54.8);
    $pdf->Write(10, $row["CITY"]);

//State
    $pdf->SetXY(111, 54.8);
    $pdf->Write(10, $row["STATE"]);

//Zip
    $pdf->SetXY(160, 54.8);
    $pdf->Write(10, $row["ZIP"]);

//DOB
    $pdf->SetXY(45, 61.4);
    $pdf->Write(10, decrypt_text($row["DOB"],$key1,$key2)); 

if ('M' == $row["GENDER"]){
//Gender: Male
    $pdf->SetXY(92.8, 61.4);
    $pdf->Write(10, 'X');
} else{
//Gender: Female
    $pdf->SetXY(108.4, 61.4);
    $pdf->Write(10, 'X');
}

//SSN
    $pdf->SetXY(156, 61.4);
    $pdf->Write(10, decrypt_text($row["SSN"],$key1,$key2));

//Employer
    $pdf->SetXY(29, 67.7);
    $pdf->Write(10, $row["EMPLOYER"]);

//Work Phone
    $pdf->SetXY(160, 67.7);
    $pdf->Write(10, $row["WORK_PHONE"]);

//Employer address
if (strlen($row["EMPLOYER_ADDRESS"]) < 22){
    $pdf->SetXY(43, 74.3);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(43, 74.3);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
}

//Employer city
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(109, 74.3);
    $pdf->Write(10, $row["EMPLOYER_CITY"]);

//Employer State
    $pdf->SetXY(166, 74.3);
    $pdf->Write(10, $row["EMPLOYER_STATE"]);

//Employer zip
    $pdf->SetXY(184, 74.3);
    $pdf->Write(10, $row["EMPLOYER_ZIP"]);

//Physician
    $pdf->SetXY(45, 80.7);
    $pdf->Write(10, $row["REFERRING_PHYSICIAN"]);

//Physician address
    $pdf->SetXY(139, 80.7);
    $pdf->Write(10, $row["PHYSICIAN_ADDRESS"]);

//Physician city
    $pdf->SetXY(19.5, 87.5);
    $pdf->Write(10, $row["PHYSICIAN_CITY"]);

//Physician state
    $pdf->SetXY(76, 87.5);
    $pdf->Write(10, $row["PHYSICIAN_STATE"]);

//Physician zip
    $pdf->SetXY(108, 87.5);
    $pdf->Write(10, $row["PHYSICIAN_ZIP"]);

//Physician phone
    $pdf->SetXY(150, 87.5);
    $pdf->Write(10, $row["PHYSICIAN_PHONE"]);

//Spouse name
    $pdf->SetXY(58.5, 94);
    $pdf->Write(10, $row["SPOUSE_NAME"]);

//Spouse employer
    $pdf->SetXY(135, 94);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER"]);

//Spouse Home Phone
    $pdf->SetXY(38, 100.4);
    $pdf->Write(10, $row["SPOUSE_HOME_PHONE"]);

//Spouse work phone
    $pdf->SetXY(100, 100.4);
    $pdf->Write(10, $row["SPOUSE_WORK_PHONE"]);

//Spouse ssn
    $pdf->SetXY(152, 100.4);
    $pdf->Write(10, decrypt_text($row["SPOUSE_SSN"],$key1,$key2));

//Mother's name
    $pdf->SetXY(64, 113);
    $pdf->Write(10, $row["MOTHER_FIRST"] . " " . $row["MOTHER_LAST"]);

//Mother's address
    $pdf->SetXY(127, 113);
    $pdf->Write(10, $row["MOTHER_ADDRESS"]);

//Mother's city
    $pdf->SetXY(25, 119.5);
    $pdf->Write(10, $row["MOTHER_CITY"]);

//Mother's State
    $pdf->SetXY(90, 119.5);
    $pdf->Write(10, $row["MOTHER_STATE"]);

//Mother's zip
    $pdf->SetXY(121, 119.5);
    $pdf->Write(10, $row["MOTHER_ZIP"]);

//Mother's SSN
    $pdf->SetXY(154, 119.5);
    $pdf->Write(10, decrypt_text($row["MOTHER_SSN"],$key1,$key2));

//Mother's employer
    $pdf->SetXY(33, 126);
    $pdf->Write(10, $row["MOTHER_EMPLOYER"]);

//Mother's employer address
    $pdf->SetXY(116, 126);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ADDRESS"]);

//Mother's employer city
    $pdf->SetXY(25, 133);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_CITY"]);

//Mother's employer state
    $pdf->SetXY(90, 133);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_STATE"]);

//Mother's employer zip
    $pdf->SetXY(121, 133);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ZIP"]);

//Mother's employer phone
    $pdf->SetXY(157, 133);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_PHONE"]);

//Father's name
    $pdf->SetXY(62, 139.4);
    $pdf->Write(10, $row["FATHER_FIRST"] . " " . $row["FATHER_LAST"]);

//Father's address
    $pdf->SetXY(127, 139.4);
    $pdf->Write(10, $row["FATHER_ADDRESS"]);

//Father's city
    $pdf->SetXY(25, 145.8);
    $pdf->Write(10, $row["FATHER_CITY"]);

//Father's State
    $pdf->SetXY(90, 145.8);
    $pdf->Write(10, $row["FATHER_STATE"]);

//Father's zip
    $pdf->SetXY(121, 145.8);
    $pdf->Write(10, $row["FATHER_ZIP"]);

//Father's SSN
    $pdf->SetXY(154, 145.8);
    $pdf->Write(10, decrypt_text($row["FATHER_SSN"],$key1,$key2));

//Father's employer
if (strlen($row["FATHER_EMPLOYER"]) < 25) {
    $pdf->SetXY(33, 152.3);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(33, 152.3);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
}

//Father's employer address
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(116, 152.3);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ADDRESS"]);

//Father's employer city
    $pdf->SetXY(25, 159);
    $pdf->Write(10, $row["FATHER_EMPLOYER_CITY"]);

//Father's employer state
    $pdf->SetXY(90, 159);
    $pdf->Write(10, $row["FATHER_EMPLOYER_STATE"]);

//Father's employer zip
    $pdf->SetXY(121, 159);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ZIP"]);

//Father's employer phone
    $pdf->SetXY(157, 159);
    $pdf->Write(10, $row["FATHER_EMPLOYER_PHONE"]);

//Primary Insurance
    $pdf->SetXY(74.5, 180.4);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_NAME"]);

//Primary Insurance Address
if(strlen("PRIMARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetXY(144, 180.4);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 31){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(144, 180.4);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 34){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(144, 180.4);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(144, 180.4);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
}
//Primary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(45, 187);
    $pdf->Write(10, $row["PI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Primary Insurance Subscriber's Employer
    $pdf->SetXY(134, 187);
    $pdf->Write(10, $row["PI_SUBSCRIBER_EMPLOYER"]);

//Primary Insurance Subscriber's ID
    $pdf->SetXY(52, 193);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_ID"],$key1,$key2));

//Primary Insurance Subscriber's Group Number
    $pdf->SetXY(112, 193);
    $pdf->Write(10, $row["PI_SUBSCRIBER_GROUP_NUMBER"]);

//Primary Insurance Subscriber's DOB
    $pdf->SetXY(172, 193);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_DOB"],$key1,$key2));

//Secondary Insurance
    $pdf->SetXY(81, 199.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_NAME"]);

//Secondary Insurance Address
    if(strlen("SECONDARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetXY(144, 199.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 31){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(144, 200);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 34){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(144, 200);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(144, 200);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
}

//Secondary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(45, 206.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Secondary Insurance Subscriber's Employer
    $pdf->SetXY(134, 206.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_EMPLOYER"]);

//Secondary Insurance Subscriber's ID
    $pdf->SetXY(52, 213);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_ID"],$key1,$key2));

//Secondary Insurance Subscriber's Group Number
    $pdf->SetXY(112, 213);
    $pdf->Write(10, $row["SI_SUBSCRIBER_GROUP_NUMBER"]);

//Secondary Insurance Subscriber's DOB
    $pdf->SetXY(172, 213);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_DOB"],$key1,$key2));

//Injury is a Result of:
if ($row["NEED_TREATMENT_FOR"] == 'OTI') {
//On the Job Injury
    $pdf->SetXY(75.5, 219.6);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Auto') {
//Auto
    $pdf->SetXY(126, 219.6);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Accident'){
//Accident
    $pdf->SetXY(154, 219.6);
    $pdf->Write(10, 'X');
}

//Date of Injury
    $pdf->SetXY(65, 226);
    $pdf->Write(10, $row["DATE_OF_INJURY"]);

//Claim Number
    $pdf->SetXY(110, 226);
    $pdf->Write(10, decrypt_text($row["CLAIM_NUMBER"],$key1,$key2));

//Emergency Contact
    $pdf->SetXY(94, 236.5);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_FIRST"] . " " . $row["EMERGENCY_CONTACT_LAST"]);

//Emergency Contact Phone Number
    $pdf->SetXY(176, 236.5);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_PHONE"]);

//Signature
    	$pdf->SetXY(30, 267);
   	$pdf->Write(10, $row["SIGNATURE"]);

//Today's Date
	$pdf->SetXY(165, 267);
   	$pdf->Write(10, $row["TODAY_DATE"]);

}

// Output the new PDF
$pdf->Output();
