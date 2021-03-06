<?php

include '/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php';
//include '/var/www/html/form2/config.php';

require_once($fpdf);
require_once($fpdi);

// initiate FPDI
$pdf = new FPDI();

// get the page count

//$pageCount = $pdf->setSourceFile('New-patient-registration.pdf');
$pageCount = $pdf->setSourceFile('intake2014-m.pdf');

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

$results = $db->query('SELECT * FROM meridian_new_patients where ID =' . $ID . ' and AUTH = ' .$AUTH);
//$results = $db->query('SELECT * FROM meridian_north_new_patients where ID =' . $ID);

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
    $pdf->SetXY(30, 42.1);
    $pdf->Write(10, $row["FIRST_NAME"] . " " . $row["LAST_NAME"]);

//Street Address
    $pdf->SetXY(22, 49.5);
    $pdf->Write(10, $row["ADDRESS"]);

//Email
    $pdf->SetXY(130, 61);
    $pdf->Write(10, $row["EMAIL"]);

//City
    $pdf->SetXY(15, 61.5);
    $pdf->Write(10, $row["CITY"]);

//State
    $pdf->SetXY(72.5, 61.5);
    $pdf->Write(10, $row["STATE"]);

//Zip
    $pdf->SetXY(100, 61.5);
    $pdf->Write(10, $row["ZIP"]);

//Primary Phone
    $pdf->SetXY(142, 42.1);
    $pdf->Write(10, $row["HOME_PHONE"]);

//Secondary Phone
    if (strlen($row["CELL_PHONE"]) > 3){
    $pdf->SetXY(142, 49);
    $pdf->Write(10, $row["CELL_PHONE"]);
}

//Work Phone
    if (strlen($row["WORK_PHONE"]) > 3){
    $pdf->SetXY(142, 54);
    $pdf->Write(10, $row["WORK_PHONE"]);
}

//DOB
    $pdf->SetXY(30, 68.5);
    $pdf->Write(10, decrypt_text($row["DOB"],$key1,$key2)); 

if ('M' == $row["GENDER"]){
//Gender: Male
    $pdf->SetXY(70, 68);
    $pdf->Write(10, 'X');
}
else{
//Gender: Female
    $pdf->SetXY(89.4, 68);
    $pdf->Write(10, 'X');
}

//SSN
    $pdf->SetXY(156, 68.5);
    $pdf->Write(10, decrypt_text($row["SSN"],$key1,$key2));

//Employer
    $pdf->SetXY(128, 94);
    $pdf->Write(10, $row["EMPLOYER"]);

//Employer Phone
    if (strlen($row["WORK_PHONE"]) > 3){
    $pdf->SetXY(139, 101);
    $pdf->Write(10, $row["WORK_PHONE"]);
}

//Employer address
if (strlen($row["EMPLOYER_ADDRESS"]) < 27){
    $pdf->SetXY(142, 108);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
} else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(142, 108.5);
    $pdf->Write(10, $row["EMPLOYER_ADDRESS"]);
}

//Employer city
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(119, 115.5);
    $pdf->Write(10, $row["EMPLOYER_CITY"]);

//Employer State
    $pdf->SetXY(157.5, 115.5);
    $pdf->Write(10, $row["EMPLOYER_STATE"]);

//Employer zip
    $pdf->SetXY(182, 115.5);
    $pdf->Write(10, $row["EMPLOYER_ZIP"]);

//Physician
    $pdf->SetXY(40, 75.5);
    $pdf->Write(10, $row["REFERRING_PHYSICIAN"]);

//Physician address
    $pdf->SetXY(36, 83);
    $pdf->Write(10, $row["PHYSICIAN_ADDRESS"]);

//Physician city
    $pdf->SetXY(101, 83);
    $pdf->Write(10, $row["PHYSICIAN_CITY"]);

//Physician state
    $pdf->SetXY(145, 83);
    $pdf->Write(10, $row["PHYSICIAN_STATE"]);

//Physician zip
    $pdf->SetXY(180, 83);
    $pdf->Write(10, $row["PHYSICIAN_ZIP"]);

//Physician phone
    if (strlen($row["PHYSICIAN_PHONE"]) > 3){
    $pdf->SetXY(122, 75.5);
    $pdf->Write(10, $row["PHYSICIAN_PHONE"]);
}

//Physician Fax
    if (strlen($row["PHYSICIAN_FAX"]) > 3){
    $pdf->SetXY(168, 75.5);
    $pdf->Write(10, $row["PHYSICIAN_FAX"]);
}

//Spouse name
    if (strlen($row["SPOUSE_FIRST"] . " " . $row["SPOUSE_LAST"]) < 19){
    $pdf->SetXY(33, 104);
    $pdf->Write(10, $row["SPOUSE_FIRST"] . " " . $row["SPOUSE_LAST"]);
}
    else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(33, 104);
    $pdf->Write(10, $row["SPOUSE_FIRST"] . " " . $row["SPOUSE_LAST"]);
}

//Spouse DOB
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(85.5, 104);
    $pdf->Write(10, decrypt_text($row["SPOUSE_DOB"],$key1,$key2));

//Spouse employer
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(32, 121.5);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER"]);

//Spouse work phone
    if (strlen($row["SPOUSE_WORK_PHONE"]) > 3){
    $pdf->SetXY(70, 137.8);
    $pdf->Write(10, $row["SPOUSE_WORK_PHONE"]);
}

//Spouse work Address
if (strlen($row["SPOUSE_EMPLOYER_ADDRESS"]) < 30){
    $pdf->SetXY(37.5, 129.5);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER_ADDRESS"]);
}
else {
    $pdf->SetFont('Helvetica','',10);
    $pdf->SetXY(37.5, 129.5);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER_ADDRESS"]);
}

//Spouse city, state, zip
    $pdf->SetFont('Helvetica','',7.5);
    $pdf->SetXY(31, 138.5);
    $pdf->Write(10, $row["SPOUSE_EMPLOYER_CITY"]);

//Spouse ssn
    $pdf->SetFont('Helvetica','',12);
    $pdf->SetXY(38, 112.8);
    $pdf->Write(10, decrypt_text($row["SPOUSE_SSN"],$key1,$key2));

//Mother's name
    $pdf->SetXY(150, 135);
    $pdf->Write(10, $row["MOTHER_FIRST"] . " " . $row["MOTHER_LAST"]);

//Mother's address
    $pdf->SetXY(125, 143);
    $pdf->Write(10, $row["MOTHER_ADDRESS"]);

//Mother's city, state zip
    if (strlen($row["MOTHER_CITY"]) > 1){
    $pdf->SetXY(133, 151.4);
    $pdf->Write(10, $row["MOTHER_CITY"] . ", " . $row["MOTHER_STATE"] . " " . $row["MOTHER_ZIP"]);
}

//Mother's SSN
    $pdf->SetXY(150, 159.4);
    $pdf->Write(10, decrypt_text($row["MOTHER_SSN"],$key1,$key2));

//Mother's employer
    $pdf->SetXY(127, 167.9);
    $pdf->Write(10, $row["MOTHER_EMPLOYER"]);

//Mother's employer phone
    if (strlen($row["MOTHER_EMPLOYER_PHONE"]) > 3){
    $pdf->SetXY(133, 176.2);
    $pdf->Write(10, $row["MOTHER_EMPLOYER_PHONE"]);
}

//Custody
    if ('Joint' == $row["CUSTODY"]){
        $pdf->SetXY(126.5, 184);
        $pdf->Write(10, 'X');
}
elseif ('Mother' == $row["CUSTODY"]){
    	$pdf->SetXY(140.5, 184);
    	$pdf->Write(10, 'X');
}
elseif ('Father' == $row["CUSTODY"]){
    	$pdf->SetXY(158.3, 184);
    	$pdf->Write(10, 'X');
}
elseif ('Other' == $row["CUSTODY"]){
        $pdf->SetXY(174.3, 184);
    	$pdf->Write(10, 'X');
}

//Emergency Contact
    $pdf->SetXY(20, 161.8);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_FIRST"] . " " . $row["EMERGENCY_CONTACT_LAST"]);

//Relationship
    $pdf->SetXY(30, 169);
    $pdf->Write(10, $row["RELATIONSHIP"]);

//Emergency Contact Phone Number
    $pdf->SetXY(67, 169);
    $pdf->Write(10, $row["EMERGENCY_CONTACT_PHONE"]);

//Height
    $pdf->SetXY(126.5, 218.5);
    //$pdf->Write(10, $row["HEIGHT"]);
    $pdf->Write(10, '5\' 8"');

//Weight
    $pdf->SetXY(155, 218.5);
    $pdf->Write(10, $row["WEIGHT"]);

//Blood Pressure
    $pdf->SetXY(140, 224);
    $pdf->Write(10, $row["BLOOD_PRESSURE"]);

//Signature
    	$pdf->SetXY(23, 230.5);
   	$pdf->Write(10, $row["SIGNIATURE"]);

//Today's Date
	$pdf->SetXY(20, 235.3);
   	$pdf->Write(10, $row["TODAY_DATE"]);

}

// Output the new PDF
$pdf->Output();
