<?php

//ini_set('display_errors', 'On');

//error_reporting(-1);

include '/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php';
//include '/var/www/html/form2/config.php';

require_once($fpdf);
require_once($fpdi);

// initiate FPDI
$pdf = new FPDI();

function decrypt_text($value, $key1, $key2)
{
   if(!$value || !$key1 || !$key2) return false;
 
   $crypttext = base64_decode($value);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key1, $crypttext, MCRYPT_MODE_ECB, $key2);
   return trim($decrypttext);
}

// get the page count

//$pageCount = $pdf->setSourceFile('New-patient-registration.pdf');
$pageCount = $pdf->setSourceFile('grandviewforms.pdf');

// iterate through page 1
if ($pageNo = 1) {
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

$results = $db->query('SELECT * FROM grandview_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);

$row = $results->fetchArray();

//print var_dump($row);
//exit();

//Name
    $pdf->SetFont('Helvetica');
    $pdf->SetXY(33, 24);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

//Phone
    $pdf->SetXY(145, 23.5);
    $pdf->Write(10, $row["PHONE"]);

//Street Address
    $pdf->SetXY(22.5, 30.2);
    $pdf->Write(10, $row["ADDRESS"]);

//Cell Phone
    $pdf->SetXY(145, 29.7);
    $pdf->Write(10, $row["CELL_PHONE"]);

//City
    $pdf->SetXY(17, 36.2);
    $pdf->Write(10, $row["CITY"]);

//State
    $pdf->SetXY(106, 36.1);
    $pdf->Write(10, $row["STATE"]);

//Zip
    $pdf->SetXY(153, 36);
    $pdf->Write(10, $row["ZIP"]);

//DOB
    $pdf->SetXY(39, 43);
    $pdf->Write(10, decrypt_text($row["DOB"],$key1,$key2)); 

if ('M' == $row["GENDER"]){
//Gender: Male
    $pdf->SetXY(85.1, 42.9);
    $pdf->Write(10, 'X');
} else{
//Gender: Female
    $pdf->SetXY(99.7, 42.9);
    $pdf->Write(10, 'X');
}

//SSN
    $pdf->SetXY(146, 42.9);
    $pdf->Write(10, decrypt_text($row["SSN"],$key1,$key2));

//Employer
    $pdf->SetXY(25, 49.6);
    $pdf->Write(10, $row["EMPLOYER"]);

//Work Phone
    $pdf->SetXY(149, 49.4);
    $pdf->Write(10, $row["WORK_PHONE"]);

//Employer address
if (strlen($row["EMPLOYER_ADDRESS"]) < 22){
    $pdf->SetXY(37, 55.8);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(37, 55.8);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
}

//Employer city
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(94, 55.8);
    $pdf->Write(10, $row["EMPLOYER_CITY"]);

//Employer State
    $pdf->SetXY(138, 55.8);
    $pdf->Write(10, $row["EMPLOYER_STATE"]);

//Employer zip
    $pdf->SetXY(168, 55.8);
    $pdf->Write(10, $row["EMPLOYER_ZIP"]);

//Physician
    $pdf->SetXY(40, 62.2);
    $pdf->Write(10, $row["REFERRING_PHYSICIAN"]);

//Physician address
    $pdf->SetXY(130, 62.1);
    $pdf->Write(10, $row["PHYSICIAN_ADDRESS"]);

//Physician city
    $pdf->SetXY(16, 68.5);
    $pdf->Write(10, $row["PHYSICIAN_CITY"]);

//Physician state
    $pdf->SetXY(75, 68.5);
    $pdf->Write(10, $row["PHYSICIAN_STATE"]);

//Physician zip
    $pdf->SetXY(106, 68.5);
    $pdf->Write(10, $row["PHYSICIAN_ZIP"]);

//Physician phone
    $pdf->SetXY(147, 68.5);
    $pdf->Write(10, $row["PHYSICIAN_PHONE"]);

//Spouse name
    $pdf->SetXY(52, 74.7);
    $pdf->Write(10, $row["SPOUSE_NAME"]);

//Spouse employer
    $pdf->SetXY(128, 74.7);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER"]);

//Spouse Home Phone
    $pdf->SetXY(35, 81);
    $pdf->Write(10, $row["SPOUSE_HOME_PHONE"]);

//Spouse work phone
    $pdf->SetXY(100, 81);
    $pdf->Write(10, $row["SPOUSE_WORK_PHONE"]);

//Spouse dob
    $pdf->SetXY(152, 81);
    $pdf->Write(10, decrypt_text($row["SPOUSE_DOB"],$key1,$key2));

//Mother's name
    $pdf->SetXY(58, 89.4);
    $pdf->Write(10, $row["MOTHER_FIRST"] . " " . $row["MOTHER_LAST"]);

//Mother's address
    $pdf->SetXY(126, 89.4);
    $pdf->Write(10, $row["MOTHER_ADDRESS"]);

//Mother's city
    $pdf->SetXY(23, 95.8);
    $pdf->Write(10, $row["MOTHER_CITY"]);

//Mother's State
    $pdf->SetXY(74, 95.8);
    $pdf->Write(10, $row["MOTHER_STATE"]);

//Mother's zip
    $pdf->SetXY(111, 95.8);
    $pdf->Write(10, $row["MOTHER_ZIP"]);

//Mother's DOB
    $pdf->SetXY(154, 95.8);
    $pdf->Write(10, decrypt_text($row["MOTHER_DOB"],$key1,$key2));

//Mother's employer
    $pdf->SetXY(31, 102);
    $pdf->Write(10, $row["MOTHER_EMPLOYER"]);

//Mother's employer address
    $pdf->SetXY(113.5, 102);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ADDRESS"]);

//Mother's employer city
    $pdf->SetXY(23, 108.2);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_CITY"]);

//Mother's employer state
    $pdf->SetXY(74, 108.2);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_STATE"]);

//Mother's employer zip
    $pdf->SetXY(105, 108.2);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_ZIP"]);

//Mother's employer phone
    $pdf->SetXY(147, 108.2);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_PHONE"]);

//Father's name
    $pdf->SetXY(57, 114.4);
    $pdf->Write(10, $row["FATHER_FIRST"] . " " . $row["FATHER_LAST"]);

//Father's address
    $pdf->SetXY(126, 114.4);
    $pdf->Write(10, $row["FATHER_ADDRESS"]);

//Father's city
    $pdf->SetXY(23, 121);
    $pdf->Write(10, $row["FATHER_CITY"]);

//Father's State
    $pdf->SetXY(74, 121);
    $pdf->Write(10, $row["FATHER_STATE"]);

//Father's zip
    $pdf->SetXY(111, 121);
    $pdf->Write(10, $row["FATHER_ZIP"]);

//Father's DOB
    $pdf->SetXY(154, 121);
    $pdf->Write(10, decrypt_text($row["FATHER_DOB"],$key1,$key2));

//Father's employer
if (strlen($row["FATHER_EMPLOYER"]) < 25) {
    $pdf->SetXY(31, 127.3);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(31, 127.3);
    $pdf->Write(10, $row["FATHER_EMPLOYER"]);
}

//Father's employer address
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(102, 127.3);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ADDRESS"]);

//Father's employer city
    $pdf->SetXY(23, 133.6);
    $pdf->Write(10, $row["FATHER_EMPLOYER_CITY"]);

//Father's employer state
    $pdf->SetXY(74, 133.6);
    $pdf->Write(10, $row["FATHER_EMPLOYER_STATE"]);

//Father's employer zip
    $pdf->SetXY(105, 133.6);
    $pdf->Write(10, $row["FATHER_EMPLOYER_ZIP"]);

//Father's employer phone
    $pdf->SetXY(147, 133.6);
    $pdf->Write(10, $row["FATHER_EMPLOYER_PHONE"]);

//Primary Insurance
    $pdf->SetXY(71, 145);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_NAME"]);

//Primary Insurance Address
if(strlen("PRIMARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetXY(140, 145);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 31){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(140, 145);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} elseif (strlen("PRIMARY_INSURANCE_ADDRESS") < 34){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(140, 145);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(140, 145);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_ADDRESS"]);
}
//Primary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(42, 151.5);
    $pdf->Write(10, $row["PI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Primary Insurance Subscriber's Employer
    $pdf->SetXY(128, 151.3);
    $pdf->Write(10, $row["PI_SUBSCRIBER_EMPLOYER"]);

//Primary Insurance Subscriber's ID
    $pdf->SetXY(52, 157.6);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_ID"],$key1,$key2));

//Primary Insurance Subscriber's Group Number
    $pdf->SetXY(110, 157.6);
    $pdf->Write(10, $row["PI_SUBSCRIBER_GROUP_NUMBER"]);

//Primary Insurance Subscriber's DOB
    $pdf->SetXY(163, 157.6);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_DOB"],$key1,$key2));

//Secondary Insurance
    $pdf->SetXY(74, 163.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_NAME"]);

//Secondary Insurance Address
    if(strlen("SECONDARY_INSURANCE_ADDRESS") < 27){
    $pdf->SetXY(140, 163.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 31){
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(140, 163.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} elseif (strlen("SECONDARY_INSURANCE_ADDRESS") < 34){
    $pdf->SetFont('Helvetica','',8);
    $pdf->SetXY(140, 163.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',7);
    $pdf->SetXY(140, 163.8);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_ADDRESS"]);
}

//Secondary Insurance Subscriber's Name
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(42, 170.2);
    $pdf->Write(10, $row["SI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//Secondary Insurance Subscriber's Employer
    $pdf->SetXY(128, 170.2);
    $pdf->Write(10, $row["SI_SUBSCRIBER_EMPLOYER"]);

//Secondary Insurance Subscriber's ID
    $pdf->SetXY(52, 176);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_ID"],$key1,$key2));

//Secondary Insurance Subscriber's Group Number
    $pdf->SetXY(110, 176);
    $pdf->Write(10, $row["SI_SUBSCRIBER_GROUP_NUMBER"]);

//Secondary Insurance Subscriber's DOB
    $pdf->SetXY(163, 176);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_DOB"],$key1,$key2));

//Injury is a Result of:
if ($row["NEED_TREATMENT_FOR"] == 'OTI') {
//On the Job Injury
    $pdf->SetXY(75.2, 182.8);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Auto') {
//Auto
    $pdf->SetXY(125.8, 182.6);
    $pdf->Write(10, 'X');
} elseif ($row["NEED_TREATMENT_FOR"] == 'Accident'){
//Accident
    $pdf->SetXY(151.2, 182.6);
    $pdf->Write(10, 'X');
}

//Date of Injury
    $pdf->SetXY(63, 189);
    $pdf->Write(10, $row["DATE_OF_INJURY"]);

//Claim Number
    $pdf->SetXY(112, 189);
    $pdf->Write(10, decrypt_text($row["CLAIM_NUMBER"],$key1,$key2));

//Emergency Contact
    $pdf->SetXY(55.5, 201);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_FIRST"] . " " . $row["EMERGENCY_CONTACT_LAST"]);

//Emergency Contact Phone Number
    $pdf->SetXY(155, 201);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_PHONE"]);

//Signature
    	$pdf->SetXY(28, 228);
   	$pdf->Write(10, $row["SIGNATURE"]);

//Today's Date
	$pdf->SetXY(167, 228);
   	$pdf->Write(10, $row["TODAY_DATE"]);

//ROI
if ($row["ROI"] == 'All') {
//On the Job Injury
    $pdf->SetXY(10.1, 242.2);
    $pdf->Write(10, 'X');
} elseif ($row["ROI"] == 'Appointment') {
//Auto
    $pdf->SetXY(82.3, 242.2);
    $pdf->Write(10, 'X');
}

//ROI Person 1
    $pdf->SetXY(9, 249.7);
    $pdf->Write(10, $row["ROI_PERSON_1_FIRST"] . " " . $row["ROI_PERSON_1_LAST"] . ", " . $row["ROI_PERSON_1_RELATIONSHIP"]);

//ROI Person 2
    $pdf->SetXY(74, 249.5);
    $pdf->Write(10, $row["ROI_PERSON_2_FIRST"] . " " . $row["ROI_PERSON_2_LAST"] . ", " . $row["ROI_PERSON_2_RELATIONSHIP"]);

//ROI Person 3
    $pdf->SetXY(138, 249.5);
    $pdf->Write(10, $row["ROI_PERSON_3_FIRST"] . " " . $row["ROI_PERSON_3_LAST"] . ", " . $row["ROI_PERSON_3_RELATIONSHIP"]);

}

//////////////////2///////////////////////////2////////////////2///////////////////2//////////////////////2/////////////////////2//////////

// iterate through page 2
if ($pageNo = 2) {
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

$results = $db->query('SELECT * FROM grandview_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);

$row = $results->fetchArray();

//print var_dump($row);
//exit();

//Name
    $pdf->SetFont('Helvetica');
    $pdf->SetXY(22, 26.5);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);
	
//Date
	$pdf->SetXY(158, 26);
    $pdf->Write(10, $row["TODAY_DATE"]);

//Injury
	$pdf->SetXY(74, 36);
    $pdf->Write(10, $row["INJURY"]);

//Injury how	
	$pdf->SetXY(86, 46.5);
    $pdf->Write(10, $row["INJURY_HOW"]);

//Injury START	
	$pdf->SetXY(65, 56.6);
    $pdf->Write(10, $row["INJURY_START"]);

//Type of work	
	$pdf->SetXY(66, 66.7);	
    $pdf->Write(10, $row["WORK_TYPE"]);

//Working now?	
if ('Y' == $row["WORKING_NOW"]){
	$pdf->SetXY(129.2, 76.3);	
    	$pdf->Write(10, 'X');
}elseif ('N' == $row["WORKING_NOW"]){
	$pdf->SetXY(145, 76.3);	
    	$pdf->Write(10, 'X');
}

//Not working reason	
if ('Y' == $row["NOT_WORKING_REASON"]){
	$pdf->SetXY(129.2, 81.3);	
    	$pdf->Write(10, 'X');
}elseif ('N' == $row["NOT_WORKING_REASON"]){
	$pdf->SetXY(145, 81.3);	
    	$pdf->Write(10, 'X');
}

//Symptom free?	
if ('Y' == $row["SYMPTOM_FREE"]){
	$pdf->SetXY(129.2, 91.3);	
    $pdf->Write(10, 'X');
}elseif ('N' == $row["SYMPTOM_FREE"]){
	$pdf->SetXY(145, 91.3);	
    $pdf->Write(10, 'X');
}

//Similar symptoms??	
if ('Y' == $row["SIMILAR_SYMPTOM"]){
	$pdf->SetXY(129.2, 101.3);	
    $pdf->Write(10, 'X');
}elseif ('N' == $row["SIMILAR_SYMPTOM"]){
	$pdf->SetXY(145, 101.3);	
    $pdf->Write(10, 'X');
}

//Treatment	
if (strstr($row["TREATMENT"], 'PT')){
	$pdf->SetXY(38.5, 117);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["TREATMENT"], 'chiropractic')){
	$pdf->SetXY(74.5, 116.7);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["TREATMENT"], 'medical')){
	$pdf->SetXY(105, 116.5);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["TREATMENT"], 'other')){
	$pdf->SetXY(127.2, 116.5);	
    	$pdf->Write(10, 'X');
}

//Eases Pain	
if (strstr( $row["EASE_PAIN"], 'sit')){
	$pdf->SetXY(78.7, 126.7);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["EASE_PAIN"], 'stand')){
	$pdf->SetXY(97, 126.7);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["EASE_PAIN"], 'walk')){
	$pdf->SetXY(118.8, 126.7);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["EASE_PAIN"], 'lie')){
	$pdf->SetXY(140.2, 126.7);	
    	$pdf->Write(10, 'X');
}

//Makes pain worse
if (strstr( $row["PAIN_WORSE"], 'sit')){
	$pdf->SetXY(78.7, 136.9);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["PAIN_WORSE"], 'stand')){
	$pdf->SetXY(97, 136.8);	
   	$pdf->Write(10, 'X');
}if (strstr( $row["PAIN_WORSE"], 'walk')){
	$pdf->SetXY(118.8, 136.7);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["PAIN_WORSE"], 'lie')){
	$pdf->SetXY(140.2, 136.7);	
    	$pdf->Write(10, 'X');
}

//Feelings of Needles or numbness	
if ('Y' == $row["PINS_NEEDLES"]){
	$pdf->SetXY(17, 152.2);	
    	$pdf->Write(10, 'X');
}elseif ('N' == $row["PINS_NEEDLES"]){
	$pdf->SetXY(30, 152.2);	
    	$pdf->Write(10, 'X');
}

//Other problems	
if ('Y' == $row["OTHER_PROBLEMS"]){
	$pdf->SetXY(17, 167.5);	
    $pdf->Write(10, 'X');
}elseif ('N' == $row["OTHER_PROBLEMS"]){
	$pdf->SetXY(30, 167.2);	
    	$pdf->Write(10, 'X');
}

//Medications	
if ('Y' == $row["MEDICATIONS"]){
	$pdf->SetXY(17, 182.2);	
    	$pdf->Write(10, 'X');
}elseif ('N' == $row["MEDICATIONS"]){
	$pdf->SetXY(30, 182.2);	
    	$pdf->Write(10, 'X');
}

//Medications List
	$pdf->SetXY(38, 187);	
    $pdf->Write(10, $row["MEDICATION_LIST"]);

//DISCOMFORT
if (strstr( $row["DISCOMFORT"], 'head')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(126.2, 147.3);	
    	$pdf->Write(10, 'X');
}if (strstr( $row["DISCOMFORT"], 'right neck')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(178.6, 159.3);	
   	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'left neck')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(175.6, 159.3);	
  	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R shoulder')){
	$pdf->SetTextColor(255, 0, 0);	
	$pdf->SetXY(114.7, 167.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L shoulder')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(137.8, 167.3);	
   	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R arm')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(114.3, 177.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L arm')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(138.3, 177.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R elbow')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(190.1, 185.8);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L elbow')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(165.3, 185.8);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R wrist')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(194.3, 202.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L wrist')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(159.8, 202.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'Right Hand')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(107.5, 207.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'Left Hand')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(144.3, 207.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R U back')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(179.3, 167.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R M back')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(182.3, 177);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R L back')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(182.3, 185.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L U back')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(176, 167.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L M back')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(173, 177.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L L back')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(173, 185.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R chest')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(120.5, 172.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L chest')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(132.7, 172.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'M chest')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(126.4, 172.3);	
 	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L abdomen')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(132.7, 189.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R abdomen')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(120.5, 189.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'M abdomen')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(126.4, 189.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R hip')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(116.3, 202.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L Hip')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(136.3, 202.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'pelvis')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(126.4, 200.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R thigh')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(120.3, 210.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L thigh')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(132.3, 210.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R knee')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(123.5, 226);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L knee')){	
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(129.3, 226);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R low leg')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(123, 237.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L low leg')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(129.8, 237.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R ankle')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(179.3, 246.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L ankle')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(173.3, 246.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'R foot')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(179.3, 255.3);	
    	$pdf->Write(10, 'X');
}if (strstr($row["DISCOMFORT"], 'L foot')){
	$pdf->SetTextColor(255, 0, 0);
	$pdf->SetXY(172.3, 255.3);	
    	$pdf->Write(10, 'X');
}

}

//////////////////3///////////////////////////3////////////////3///////////////////////////////3////////////////////////////3/////////////

// iterate through page 2
if ($pageNo = 3) {
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

$results = $db->query('SELECT * FROM grandview_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);

$row = $results->fetchArray();

//print var_dump($row);
//exit();

//Name
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Helvetica');
    $pdf->SetXY(33, 16.4);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

//Primary Insurance Company
    $pdf->SetXY(47, 25.7);
    $pdf->Write(10, $row["PRIMARY_INSURANCE_NAME"]);

//Secondary Insurance Company
    $pdf->SetXY(150, 25.7);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_NAME"]);

//Primary Insurance Phone
    $pdf->SetXY(47, 34.5);
    $pdf->Write(10, $row["INSURANCE_PHONE"]);

//Secondary Insurance Phone
    $pdf->SetXY(150, 35);
    $pdf->Write(10, $row["SECONDARY_INSURANCE_PHONE"]);

//PI policy holder
    $pdf->SetXY(19, 56.5);
    $pdf->Write(10, $row["PI_SUBSCRIBER_FIRST"] . " " . $row["PI_SUBSCRIBER_LAST"]);

//PI policy holder DOB
    $pdf->SetXY(33, 65.5);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_DOB"], $key1, $key2));

//PI policy holder SSN
    $pdf->SetXY(40, 74.5);
    $pdf->Write(10, decrypt_text($row["PI_SUBSCRIBER_SSN"], $key1, $key2));

//PI policy or claim number
    $pdf->SetXY(40, 83.5);
    $pdf->Write(10, decrypt_text($row["CLAIM_NUMBER"], $key1, $key2));

//Date of injury
    $pdf->SetXY(40, 92);
    $pdf->Write(10, $row["DATE_OF_INJURY"]);

//SI policy holder
    $pdf->SetXY(123, 56.5);
    $pdf->Write(10, $row["SI_SUBSCRIBER_FIRST"] . " " . $row["SI_SUBSCRIBER_LAST"]);

//SI policy holder DOB
    $pdf->SetXY(145, 65.5);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_DOB"], $key1, $key2));

//SI policy holder SSN
    $pdf->SetXY(145, 74.5);
    $pdf->Write(10, decrypt_text($row["SI_SUBSCRIBER_SSN"], $key1, $key2));

//SI policy or claim number
    $pdf->SetXY(145, 83.5);
    $pdf->Write(10, decrypt_text($row["CLAIM_NUMBER"], $key1, $key2));

//Date of injury
    $pdf->SetXY(145, 92);
    $pdf->Write(10, $row["DATE_OF_INJURY"]);

}

// Output the new PDF
$pdf->Output();
