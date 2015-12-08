<html>
<body>
<p>
<?php

ini_set('display_errors', 'On');

error_reporting(-1);

include '/var/www/html/form2/config.php';

$validating_regex = array(
	"FIRST_NAME" => "/(^[a-zA-Z ]+$)/",
	"LAST_NAME" => "/(^[a-zA-Z ]+$)/",	
	"HOME_PHONE_1" => "/(^\d{3}$)/",
	"HOME_PHONE_2" => "/(^\d{3}$)/",
	"HOME_PHONE_3" => "/(^\d{4}$)/",
	"CELL_PHONE_1" => "/(^\d{3}$)/",
	"CELL_PHONE_2" => "/(^\d{3}$)/",
	"CELL_PHONE_3" => "/(^\d{4}$)/",
	"EMAIL" => "/(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})/",
	"ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"STATE" => "/^[A-Z]{2}$/",
	"ZIP" => "/(^\d{5}$)/",
	"DOB_1" => "/(\d{1,2})/",
	"DOB_2" => "/(\d{1,2})/",
	"DOB_3" => "/(\d{4})/",
	"SSN" => "/\d{9}/",
	"EMPLOYER_ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"EMPLOYER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"EMPLOYER_STATE" => "/^[A-Z]{2}$/",
	"EMPLOYER_ZIP" => "/(^\d{5}$)/",
	"WORK_PHONE_1" => "/(^\d{3}$)/",
	"WORK_PHONE_2" => "/(^\d{3}$)/",
	"WORK_PHONE_3" => "/(^\d{4}$)/",
	"PHYSICIAN_FIRST" => "/(^[a-zA-Z ]+$)/",
	"PHYSICIAN_LAST" => "/(^[a-zA-Z ]+$)/",
	"PHYSICIAN_ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"PHYSICIAN_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"PHYSICIAN_STATE" => "/^[A-Z]{2}$/",
	"PHYSICIAN_ZIP" => "/(^\d{5}$)/",
	"PHYSICIAN_PHONE_1" => "/(^\d{3}$)/",
	"PHYSICIAN_PHONE_2" => "/(^\d{3}$)/",
	"PHYSICIAN_PHONE_3" => "/(^\d{4}$)/",
	"SPOUSE_FIRST" => "/(^[a-zA-Z ]+$)/",
	"SPOUSE_LAST" => "/(^[a-zA-Z ]+$)/",
	"SPOUSE_CELL_PHONE_1" => "/(^\d{3}$)/",
	"SPOUSE_CELL_PHONE_2" => "/(^\d{3}$)/",
	"SPOUSE_CELL_PHONE_3" => "/(^\d{4}$)/",
	"SPOUSE_WORK_PHONE_1" => "/(^\d{3}$)/",
	"SPOUSE_WORK_PHONE_2" => "/(^\d{3}$)/",
	"SPOUSE_WORK_PHONE_3" => "/(^\d{4}$)/",
	"MOTHER_FIRST" => "/(^[a-zA-Z ]+$)/",
	"MOTHER_LAST" => "/(^[a-zA-Z ]+$)/",
	"MOTHER_DOB_1" => "/(\d{1,2})/",
	"MOTHER_DOB_2" => "/(\d{1,2})/",
	"MOTHER_DOB_3" => "/(\d{4})/",
	"MOTHER_ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"MOTHER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"MOTHER_STATE" => "/^[A-Z]{2}$/",
	"MOTHER_ZIP" => "/(^\d{5}$)/",
	"MOTHER_EMPLOYER_ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"MOTHER_EMPLOYER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"MOTHER_EMPLOYER_STATE" => "/^[A-Z]{2}$/",
	"MOTHER_EMPLOYER_ZIP" => "/(^\d{5}$)/",
	"MOTHER_WORK_PHONE_1" => "/(^\d{3}$)/",
	"MOTHER_WORK_PHONE_2" => "/(^\d{3}$)/",
	"MOTHER_WORK_PHONE_3" => "/(^\d{4}$)/",
	"FATHER_FIRST" => "/(^[a-zA-Z ]+$)/",
	"FATHER_LAST" => "/(^[a-zA-Z ]+$)/",
	"FATHER_DOB_1" => "/(\d{1,2})/",
	"FATHER_DOB_2" => "/(\d{1,2})/",
	"FATHER_DOB_3" => "/(\d{4})/",
	"FATHER_ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"FATHER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"FATHER_STATE" => "/^[A-Z]{2}$/",
	"FATHER_ZIP" => "/(^\d{5}$)/",
	"FATHER_EMPLOYER_ADDRESS_1" => "/(\d{1,7}\s\w{0,2}(\.)\s(\b\w*\b\s){1,3}\w*\.)/",
	"FATHER_EMPLOYER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"FATHER_EMPLOYER_STATE" => "/^[A-Z]{2}$/",
	"FATHER_EMPLOYER_ZIP" => "/(^\d{5}$)/",
	"FATHER_WORK_PHONE_1" => "/(^\d{3}$)/",
	"FATHER_WORK_PHONE_2" => "/(^\d{3}$)/",
	"FATHER_WORK_PHONE_3" => "/(^\d{4}$)/",
	"EMERGENCY_CONTACT_FIRST" => "/(^[a-zA-Z ]+$)/",
	"EMERGENCY_CONTACT_LAST" => "/(^[a-zA-Z ]+$)/",
	"EMERGENCY_CONTACT_PHONE_1" => "/(^\d{3}$)/",
	"EMERGENCY_CONTACT_PHONE_2" => "/(^\d{3}$)/",
	"EMERGENCY_CONTACT_PHONE_3" => "/(^\d{4}$)/",
	"TODAY_DATE_1" => "/(\d{1,2})/",
	"TODAY_DATE_2" => "/(\d{1,2})/",
	"TODAY_DATE_3" => "/(\d{4})/",
	"ROI_PERSON_1_FIRST" => "/(^[a-zA-Z ]+$)/",
	"ROI_PERSON_1_LAST" => "/(^[a-zA-Z ]+$)/",
	"ROI_PERSON_2_FIRST" => "/(^[a-zA-Z ]+$)/",
	"ROI_PERSON_2_LAST" => "/(^[a-zA-Z ]+$)/",
	"ROI_DATE_1" => "/(\d{1,2})/",
	"ROI_DATE_2" => "/(\d{1,2})/",
	"ROI_DATE_3" => "/(\d{4})/",
);

$error_dictionary = array(
	"FIRST_NAME" => "Please make sure that the first name has only letters and spaces.",
	"LAST_NAME" => "Please make sure that the last name has only letters and spaces.",	
	"PHONE_1" => "Please make sure the there are 3 digits in the first section of the phone number.",
	"PHONE_2" => "Please make sure the there are 3 digits in the second section of the phone number.",
	"PHONE_3" => "Please make sure the there are 4 digits in the third section of the phone number.",
	"EMAIL" => "Please enter a valid email address.",
	"ADDRESS_1" => "Please enter a valid address.",
	"CITY" => "Please enter a valid city name.",
	"STATE" => "Please enter a valid state.",
	"ZIP" => "Please make sure the there are 5 digits in the zip code.",
	"DOB_1" => "Please Enter a valid date of birth.",
	"DOB_2" => "Please Enter a valid date of birth.",
	"DOB_3" => "Please Enter a valid date of birth.",
	"SSN" => "Please make sure there are 9 digits in your SSN.",
	"EMPLOYER_ADDRESS_1" => "Please enter a valid employer address.",
	"EMPLOYER_CITY" => "Please enter a valid employer city name.",
	"EMPLOYER_STATE" => "Please enter a valid employer state.",
	"EMPLOYER_ZIP" => "Please make sure there are 5 digits in the employer zip code.",
	"PHYSICIAN_ADDRESS_1" => "Please enter a valid physician address.",
	"PHYSICIAN_CITY" => "Please enter a valid physician city name.",
	"PHYSICIAN_STATE" => "Please enter a valid physician state.",
	"PHYSICIAN_ZIP" => "Please make sure there are 5 digits in the physician zip code.",
	"PHYSICIAN_PHONE_1" => "Please make sure the there are 3 digits in the first section of your physician's phone number.",
	"PHYSICIAN_PHONE_2" => "Please make sure the there are 3 digits in the second section of your physician's phone number.",
	"PHYSICIAN_PHONE_3" => "Please make sure the there are 4 digits in the third section of your physician's phone number.",
	"SPOUSE_FIRST" => "Please make sure that the spouse first name has only letters and spaces.",
	"SPOUSE_LAST" => "Please make sure that the spouse last name has only letters and spaces.",	
	"SPOUSE_HOME_PHONE_1" => "Please make sure the there are 3 digits in the first section of your spouse's home phone number.",
	"SPOUSE_HOME_PHONE_2" => "Please make sure the there are 3 digits in the second section of your spouse's home phone number.",
	"SPOUSE_HOME_PHONE_3" => "Please make sure the there are 4 digits in the third section of your spouse's home phone number.",
	"SPOUSE_WORK_PHONE_1" => "Please make sure the there are 3 digits in the first section of your spouse's work phone number.",
	"SPOUSE_WORK_PHONE_2" => "Please make sure the there are 3 digits in the second section of your spouse's work phone number.",
	"SPOUSE_WORK_PHONE_3" => "Please make sure the there are 4 digits in the third section of your spouse's work phone number.",
	"MOTHER_FIRST" => "Please make sure that the mother's first name has only letters and spaces.",
	"MOTHER_LAST" => "Please make sure that the mother's last name has only letters and spaces.",
	"MOTHER_DOB_1" => "Please Enter a valid date of birth for the mother.",
	"MOTHER_DOB_2" => "Please Enter a valid date of birth for the mother.",
	"MOTHER_DOB_3" => "Please Enter a valid date of birth for the mother.",
	"MOTHER_ADDRESS_1" => "Please enter a valid Mother's address.",
	"MOTHER_CITY" => "Please enter a valid Mother city name.",
	"MOTHER_STATE" => "Please enter a valid Mother state.",
	"MOTHER_ZIP" => "Please make sure there are 5 digits in the Mother zip code.",
	"MOTHER_EMPLOYER_ADDRESS_1" => "Please enter a valid mother's employer address.",
	"MOTHER_EMPLOYER_CITY" => "Please enter a valid mother's employer city name.",
	"MOTHER_EMPLOYER_STATE" => "Please enter a valid mother's employer state.",
	"MOTHER_EMPLOYER_ZIP" => "Please make sure there are 5 digits in the mother's employer zip code.",
	"MOTHER_WORK_PHONE_1" => "Please make sure the there are 3 digits in the first section of your mother's employer's phone number.",
	"MOTHER_WORK_PHONE_2" => "Please make sure the there are 3 digits in the second section of your mother's employer's phone number.",
	"MOTHER_WORK_PHONE_3" => "Please make sure the there are 4 digits in the third section of your mother's employer's phone number.",
	"FATHER_FIRST" => "Please make sure that the father's first name has only letters and spaces.",
	"FATHER_LAST" => "Please make sure that the father's last name has only letters and spaces.",
	"FATHER_DOB_1" => "Please Enter a valid date of birth for the father.",
	"FATHER_DOB_2" => "Please Enter a valid date of birth for the father.",
	"FATHER_DOB_3" => "Please Enter a valid date of birth for the father.",
	"FATHER_ADDRESS_1" => "Please enter a valid father's address.",
	"FATHER_CITY" => "Please enter a valid father city name.",
	"FATHER_STATE" => "Please enter a valid father state.",
	"FATHER_ZIP" => "Please make sure there are 5 digits in the father's zip code.",
	"FATHER_EMPLOYER_ADDRESS_1" => "Please enter a valid father's employer address.",
	"FATHER_EMPLOYER_CITY" => "Please enter a valid father's employer city name.",
	"FATHER_EMPLOYER_STATE" => "Please enter a valid father's employer state.",
	"FATHER_EMPLOYER_ZIP" => "Please make sure there are 5 digits in the father's employer zip code.",
	"FATHER_WORK_PHONE_1" => "Please make sure the there are 3 digits in the first section of the father's employer's phone number.",
	"FATHER_WORK_PHONE_2" => "Please make sure the there are 3 digits in the second section of the father's employer's phone number.",
	"FATHER_WORK_PHONE_3" => "Please make sure the there are 4 digits in the third section of the father's employer's phone number.",
	"EMERGENCY_CONTACT_FIRST" => "Please make sure that the emergency contact's first name has only letters and spaces.",
	"EMERGENCY_CONTACT_LAST" => "Please make sure that the emergency contact's last name has only letters and spaces.",
	"EMERGENCY_CONTACT_PHONE_1" => "Please make sure the there are 3 digits in the first section of the emergency contact's phone number.",
	"EMERGENCY_CONTACT_PHONE_2" => "Please make sure the there are 3 digits in the second section of the emergency contact's phone number.",
	"EMERGENCY_CONTACT_PHONE_3" => "Please make sure the there are 4 digits in the third section of the emergency contact's phone number.",
	"TODAY_DATE_1" => "Please enter a valid date for today's date",
	"TODAY_DATE_2" => "Please enter a valid date for today's date",
	"TODAY_DATE_3" => "Please enter a valid date for today's date",
	"ROI_PERSON_1_FIRST" => "Please make sure that the first release of information person's first name has only letters and spaces.",
	"ROI_PERSON_1_LAST" => "Please make sure that the first release of information person's last name has only letters and spaces.",
	"ROI_PERSON_2_FIRST" => "Please make sure that the second release of information person's first name has only letters and spaces.",
	"ROI_PERSON_2_LAST" => "Please make sure that the second release of information person's last name has only letters and spaces.",
	"ROI_DATE_1" => "Please enter a valid date for release of information",
	"ROI_DATE_2" => "Please enter a valid date for release of information",
	"ROI_DATE_3" => "Please enter a valid date for release of information",
);

$left_blank = array(
	"SOURCE" => 0,
	"EMPLOYER_ADDRESS_1" => 0,
	"EMPLOYER_CITY" => 0,
	"EMPLOYER_STATE" => 0,
	"EMPLOYER_ZIP" => 0,
	"PHYSICIAN_ADDRESS_1" => 0,
	"PHYSICIAN_CITY" => 0,
	"PHYSICIAN_STATE" => 0,
	"PHYSICIAN_ZIP" => 0,
	"PHYSICIAN_PHONE_1" => 0,
	"PHYSICIAN_PHONE_2" => 0,
	"PHYSICIAN_PHONE_3" => 0,
	"SPOUSE_FIRST" => 0,
	"SPOUSE_LAST" => 0,
	"SPOUSE_CELL_PHONE_1" => 0,
	"SPOUSE_CELL_PHONE_2" => 0,
	"SPOUSE_CELL_PHONE_3" => 0,
	"SPOUSE_WORK_PHONE_1" => 0,
	"SPOUSE_WORK_PHONE_2" => 0,
	"SPOUSE_WORK_PHONE_3" => 0,
	"SPOUSE_SSN" => 0,
	"MOTHER_FIRST" => 0,
	"MOTHER_LAST" => 0,
	"MOTHER_DOB_1" => 0,
	"MOTHER_DOB_2" => 0,
	"MOTHER_DOB_3" => 0,
	"MOTHER_ADDRESS_1" => 0,
	"MOTHER_CITY" => 0,
	"MOTHER_STATE" => 0,
	"MOTHER_ZIP" => 0,
	"MOTHER_SSN" => 0,
	"MOTHER_EMPLOYER_ADDRESS_1" => 0,
	"MOTHER_EMPLOYER_CITY" => 0,
	"MOTHER_EMPLOYER_STATE" => 0,
	"MOTHER_EMPLOYER_ZIP" => 0,
	"MOTHER_EMPLOYER_PHONE_1" => 0,
	"MOTHER_EMPLOYER_PHONE_2" => 0,
	"MOTHER_EMPLOYER_PHONE_3" => 0,
	"FATHER_FIRST" => 0,
	"FATHER_LAST" => 0,
	"FATHER_DOB_1" => 0,
	"FATHER_DOB_2" => 0,
	"FATHER_DOB_3" => 0,
	"FATHER_ADDRESS_1" => 0,
	"FATHER_CITY" => 0,
	"FATHER_STATE" => 0,
	"FATHER_ZIP" => 0,
	"FATHER_SSN" => 0,
	"FATHER_EMPLOYER_ADDRESS_1" => 0,
	"FATHER_EMPLOYER_CITY" => 0,
	"FATHER_EMPLOYER_STATE" => 0,
	"FATHER_EMPLOYER_ZIP" => 0,
	"FATHER_EMPLOYER_PHONE_1" => 0,
	"FATHER_EMPLOYER_PHONE_2" => 0,
	"FATHER_EMPLOYER_PHONE_3" => 0,
	"PHYSICIAN_ADDRESS_1" => 0,
	"PHYSICIAN_CITY" => 0,
	"PHYSICIAN_STATE" => 0,
	"PHYSICIAN_ZIP" => 0,
	"PHYSICIAN_PHONE_1" => 0,
	"PHYSICIAN_PHONE_2" => 0,
	"PHYSICIAN_PHONE_3" => 0,
	"ROI_PERSON_1_FIRST" => 0,
	"ROI_PERSON_1_LAST" => 0,
	"ROI_PERSON_1_RELATIONSHIP" => 0,
	"ROI_PERSON_2_FIRST" => 0,
	"ROI_PERSON_2_LAST" => 0,
	"ROI_PERSON_2_RELATIONSHIP" => 0,
	"ROI_SIGNIATURE" => 0,	
	"ROI_DATE_1" => 0,
	"ROI_DATE_2" => 0,
	"ROI_DATE_3" => 0,
);

$error_report = "";

foreach ($validating_regex as $key => $regex) {
	if ((!preg_match($regex, $_POST[$key])) OR ($_POST[$key] == "" AND !array_key_exists($key, $left_blank))) {
		$error_report .= $error_dictionary[$key] . "\n";
	}
}

if ("" != $error_dictionary) {
    //return to form, but with it filled out like they had it, and include the $error_output
}

echo "<html><body><p>Thanks for completing this form, " . htmlspecialchars($_POST["FIRST_NAME"]) . '!</p></body></html>'; 

//$db = new SQLite3($columbiaDB);
$db = new SQLite3('/var/www/Columbia.db');

echo 'Your information has been received!<br/>';
$results = $db->query('SELECT first_name FROM kennewick_new_patients');
while ($row = $results->fetchArray()) {
    echo $row['FIRST_NAME'] . '<br/>'; 
}

function encrypt_text($value, $key1, $key2)
  { if(!$value || !$key1 || !$key2) return false;
 
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key1, $value, MCRYPT_MODE_ECB, $key2);
   return trim(base64_encode($crypttext));
}
 
function decrypt_text($value, $key1, $key2)
{
   if(!$value || !$key1 || !$key2) return false;
 
   $crypttext = base64_decode($value);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key1, $crypttext, MCRYPT_MODE_ECB, $key2);
   return trim($decrypttext);
}

$rand_code = (rand());

//var_dump( $_POST );
//exit;

$escaped_values = array();

foreach ($_POST as $field => $answer) {
$escaped_values[$field] = SQLite3::escapeString($answer);
} 

$db->exec("INSERT INTO kennewick_new_patients (FIRST_NAME, LAST_NAME, CELL_PHONE, HOME_PHONE, EMAIL, ADDRESS, CITY, STATE, ZIP, DOB, GENDER, SSN, STUDENT, EMPLOYER, EMPLOYER_ADDRESS, EMPLOYER_CITY, EMPLOYER_STATE, EMPLOYER_ZIP, WORK_PHONE, REFERRING_PHYSICIAN, PHYSICIAN_ADDRESS, PHYSICIAN_CITY, PHYSICIAN_STATE, PHYSICIAN_ZIP, PHYSICIAN_PHONE, SPOUSE_EMPLOYER, SPOUSE_CELL_PHONE, SPOUSE_WORK_PHONE, MOTHER_FIRST, MOTHER_LAST, MOTHER_ADDRESS, MOTHER_CITY, MOTHER_STATE, MOTHER_ZIP, MOTHER_EMPLOYER, MOTHER_EMPLOYER_ADDRESS, MOTHER_EMPLOYER_CITY, MOTHER_EMPLOYER_STATE, MOTHER_EMPLOYER_ZIP, MOTHER_EMPLOYER_PHONE, FATHER_FIRST, FATHER_LAST, FATHER_ADDRESS, FATHER_CITY, FATHER_STATE, FATHER_ZIP, FATHER_EMPLOYER, FATHER_EMPLOYER_ADDRESS, FATHER_EMPLOYER_CITY, FATHER_EMPLOYER_STATE, FATHER_EMPLOYER_ZIP, FATHER_EMPLOYER_PHONE, EMERGENCY_CONTACT_FIRST, EMERGENCY_CONTACT_LAST, EMERGENCY_CONTACT_PHONE, SIGNIATURE, TODAY_DATE, ROI_PERSON_1_FIRST, ROI_PERSON_1_LAST, ROI_PERSON_1_RELATIONSHIP, ROI_PERSON_2_FIRST, ROI_PERSON_2_LAST, ROI_PERSON_2_RELATIONSHIP, ROI_SIGNIATURE, ROI_DATE, SPOUSE_FIRST, SPOUSE_LAST, MOTHER_DOB, FATHER_DOB, ROI, AUTH) VALUES ('". $escaped_values["FIRST_NAME"] ."','". $escaped_values["LAST_NAME"] ."' , '(". $escaped_values["CELL_PHONE_1"] .")". $escaped_values["CELL_PHONE_2"] ."-". $escaped_values["CELL_PHONE_3"] ."','(". $escaped_values["HOME_PHONE_1"] .")". $escaped_values["HOME_PHONE_2"] ."-". $escaped_values["HOME_PHONE_3"] ."','". $escaped_values["EMAIL"] ."','". $escaped_values["ADDRESS_1"] ." ". $escaped_values["ADDRESS_2"] ."','". $escaped_values["CITY"] ."','". $escaped_values["STATE"] ."','". $escaped_values["ZIP"] ."','". encrypt_text($escaped_values["DOB_1"] ."/". $escaped_values["DOB_2"] ."/". $escaped_values["DOB_3"],$key1,$key2) ."','". $escaped_values["GENDER"] ."','". encrypt_text($escaped_values["SSN"],$key1,$key2) ."','". $escaped_values["STUDENT"] ."','". $escaped_values["EMPLOYER"] ."','". $escaped_values["EMPLOYER_ADDRESS_1"] ." ". $escaped_values["EMPLOYER_ADDRESS_2"] ."','". $escaped_values["EMPLOYER_CITY"] ."','". $escaped_values["EMPLOYER_STATE"] ."','". $escaped_values["EMPLOYER_ZIP"] ."','(". $escaped_values["WORK_PHONE_1"] .")". $escaped_values["WORK_PHONE_2"] ."-". $escaped_values["WORK_PHONE_3"] ."','". $escaped_values["PHYSICIAN_FIRST"] ." ". $escaped_values["PHYSICIAN_LAST"] ."','". $escaped_values["PHYSICIAN_ADDRESS_1"] ." ". $escaped_values["PHYSICIAN_ADDRESS_2"] ."','". $escaped_values["PHYSICIAN_CITY"] ."','". $escaped_values["PHYSICIAN_STATE"] ."','". $escaped_values["PHYSICIAN_ZIP"] ."','(". $escaped_values["PHYSICIAN_PHONE_1"] .")". $escaped_values["PHYSICIAN_PHONE_2"] ."-". $escaped_values["PHYSICIAN_PHONE_3"] ."','". $escaped_values["SPOUSE_EMPLOYER"] ."','(". $escaped_values["SPOUSE_CELL_PHONE_1"] .")". $escaped_values["SPOUSE_CELL_PHONE_2"] ."-". $escaped_values["SPOUSE_CELL_PHONE_3"] ."','(". $escaped_values["SPOUSE_WORK_PHONE_1"] .")". $escaped_values["SPOUSE_WORK_PHONE_2"] ."-". $escaped_values["SPOUSE_WORK_PHONE_3"] ."','". $escaped_values["MOTHER_FIRST"] ."','". $escaped_values["MOTHER_LAST"] ."','". $escaped_values["MOTHER_ADDRESS_1"] ." ". $escaped_values["MOTHER_ADDRESS_2"] ."','". $escaped_values["MOTHER_CITY"] ."','". $escaped_values["MOTHER_STATE"] ."','". $escaped_values["MOTHER_ZIP"] ."','". $escaped_values["MOTHER_EMPLOYER"] ."','". $escaped_values["MOTHER_EMPLOYER_ADDRESS_1"] ." ". $escaped_values["MOTHER_EMPLOYER_ADDRESS_2"] ."','". $escaped_values["MOTHER_EMPLOYER_CITY"] ."','". $escaped_values["MOTHER_EMPLOYER_STATE"] ."','". $escaped_values["MOTHER_EMPLOYER_ZIP"] ."','(". $escaped_values["MOTHER_WORK_PHONE_1"] .")". $escaped_values["MOTHER_WORK_PHONE_2"] ."-". $escaped_values["MOTHER_WORK_PHONE_3"] ."','". $escaped_values["FATHER_FIRST"] ."','". $escaped_values["FATHER_LAST"] ."','". $escaped_values["FATHER_ADDRESS_1"] ." ". $escaped_values["FATHER_ADDRESS_2"] ."','". $escaped_values["FATHER_CITY"] ."','". $escaped_values["FATHER_STATE"] ."','". $escaped_values["FATHER_ZIP"] ."','". $escaped_values["FATHER_EMPLOYER"] ."','". $escaped_values["FATHER_EMPLOYER_ADDRESS_1"] ." ". $escaped_values["FATHER_EMPLOYER_ADDRESS_2"] ."','". $escaped_values["FATHER_EMPLOYER_CITY"] ."','". $escaped_values["FATHER_EMPLOYER_STATE"] ."','". $escaped_values["FATHER_EMPLOYER_ZIP"] ."','(". $escaped_values["FATHER_WORK_PHONE_1"] .")". $escaped_values["FATHER_WORK_PHONE_2"] ."-". $escaped_values["FATHER_WORK_PHONE_3"] ."','". $escaped_values["EMERGENCY_CONTACT_FIRST"] ."','". $escaped_values["EMERGENCY_CONTACT_LAST"] ."','(". $escaped_values["EMERGENCY_CONTACT_PHONE_1"] .")". $escaped_values["EMERGENCY_CONTACT_PHONE_2"] ."-". $escaped_values["EMERGENCY_CONTACT_PHONE_3"] ."','". $escaped_values["SIGNIATURE"] ."','". $escaped_values["TODAY_DATE_1"] ."/". $escaped_values["TODAY_DATE_2"] ."/". $escaped_values["TODAY_DATE_3"] ."','". $escaped_values["ROI_PERSON_1_FIRST"] ."','". $escaped_values["ROI_PERSON_1_LAST"] ."','". $escaped_values["ROI_PERSON_1_RELATIONSHIP"] ."','". $escaped_values["ROI_PERSON_2_FIRST"] ."','". $escaped_values["ROI_PERSON_2_LAST"] ."','". $escaped_values["ROI_PERSON_2_RELATIONSHIP"] ."','". $escaped_values["ROI_SIGNIATURE"] ."','". $escaped_values["ROI_DATE_1"] ."/". $escaped_values["ROI_DATE_2"] ."/". $escaped_values["ROI_DATE_3"] ."','". $escaped_values["SPOUSE_FIRST"] ."','". $escaped_values["SPOUSE_LAST"] ."','". encrypt_text($escaped_values["MOTHER_DOB_1"] ."/". $escaped_values["MOTHER_DOB_2"] ."/". $escaped_values["MOTHER_DOB_3"],$key1,$key2) ."','". encrypt_text($escaped_values["FATHER_DOB_1"] ."/". $escaped_values["FATHER_DOB_2"] ."/". $escaped_values["FATHER_DOB_3"],$key1,$key2) ."','". $escaped_values["ROI"] ."','". $rand_code ."')"); 


?>
</p>
</body>
</html>
