<?php

//This file displays the form.tpl to the user, and then once the user has filled out the form, validates the information the user entered. If the information is validated, the information is imported into the database. If the information is not validated, the user is returned to the form, with their information still filled out, but with each of the errors written in red at the top of the form so they can correct it. This program also sanitizes (renders harmless any harmful characters or commands) that a user might enter into a field.

//ini_set('display_errors', 'On');

//error_reporting(-1);

//includes the config file and necessary files for smarty to run. 
include('/home1/columch7/public_html/columbiaphysicaltherapyinc/form2/config.php');
include('/home1/columch7/public_html/smarty-3.1.27/libs/Smarty.class.php');

//Creates a smarty object and designates associated folders. 
$smarty = new Smarty;

$smarty->template_dir = '/home1/columch7/public_html/columbiaphysicaltherapyinc/MoseslakeForm/templates/';
$smarty->compile_dir  = '/home1/columch7/public_html/columbiaphysicaltherapyinc/MoseslakeForm/templates_c/';
$smarty->config_dir   = '/home1/columch7/public_html/columbiaphysicaltherapyinc/MoseslakeForm/configs/';
$smarty->cache_dir    = '/home1/columch7/public_html/columbiaphysicaltherapyinc/MoseslakeForm/cache/';

//Regex for Validating fields that the user fills out.
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
	"ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"STATE" => "/^[a-zA-Z]{2}$/",
	"ZIP" => "/(^\d{5}$)/",
	"DOB_1" => "/(\d{1,2})/",
	"DOB_2" => "/(\d{1,2})/",
	"DOB_3" => "/(\d{4})/",
	"SSN" => "/\d{3}-\d{2}-\d{4}/",
	"EMPLOYER_ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"EMPLOYER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"EMPLOYER_STATE" => "/^[a-zA-Z]{2}$/",
	"EMPLOYER_ZIP" => "/(^\d{5}$)/",
	"WORK_PHONE_1" => "/(^\d{3}$)/",
	"WORK_PHONE_2" => "/(^\d{3}$)/",
	"WORK_PHONE_3" => "/(^\d{4}$)/",
	"PHYSICIAN_FIRST" => "/(^[a-zA-Z ]+$)/",
	"PHYSICIAN_LAST" => "/(^[a-zA-Z ]+$)/",
	"PHYSICIAN_ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"PHYSICIAN_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"PHYSICIAN_STATE" => "/^[a-zA-Z]{2}$/",
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
	"MOTHER_ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"MOTHER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"MOTHER_STATE" => "/^[a-zA-Z]{2}$/",
	"MOTHER_ZIP" => "/(^\d{5}$)/",
	"MOTHER_DOB_1" => "/(\d{1,2})/",
	"MOTHER_DOB_2" => "/(\d{1,2})/",
	"MOTHER_DOB_3" => "/(\d{4})/",
	"MOTHER_EMPLOYER_ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"MOTHER_EMPLOYER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"MOTHER_EMPLOYER_STATE" => "/^[a-zA-Z]{2}$/",
	"MOTHER_EMPLOYER_ZIP" => "/(^\d{5}$)/",
	"MOTHER_WORK_PHONE_1" => "/(^\d{3}$)/",
	"MOTHER_WORK_PHONE_2" => "/(^\d{3}$)/",
	"MOTHER_WORK_PHONE_3" => "/(^\d{4}$)/",
	"FATHER_FIRST" => "/(^[a-zA-Z ]+$)/",
	"FATHER_LAST" => "/(^[a-zA-Z ]+$)/",
	"FATHER_ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"FATHER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"FATHER_STATE" => "/^[a-zA-Z]{2}$/",
	"FATHER_ZIP" => "/(^\d{5}$)/",
	"FATHER_DOB_1" => "/(\d{1,2})/",
	"FATHER_DOB_2" => "/(\d{1,2})/",
	"FATHER_DOB_3" => "/(\d{4})/",
	"FATHER_EMPLOYER_ADDRESS_1" => "/([0-9]{1,7} [A-Za-z0-9\.]{1,45})/",
	"FATHER_EMPLOYER_CITY" => "/(^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$)/",
	"FATHER_EMPLOYER_STATE" => "/^[a-zA-Z]{2}$/",
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
	"ROI_PERSON_3_FIRST" => "/(^[a-zA-Z ]+$)/",
	"ROI_PERSON_3_LAST" => "/(^[a-zA-Z ]+$)/",
	"ROI_DATE_1" => "/(\d{1,2})/",
	"ROI_DATE_2" => "/(\d{1,2})/",
	"ROI_DATE_3" => "/(\d{4})/"
);

//Errors associated with the validation above.
$error_dictionary = array(
	"FIRST_NAME" => "<html><body><span class=error>Please make sure that the first name has only letters and spaces.</span></body></html>",
	"LAST_NAME" => "<html><body><span class=error>Please make sure that the last name has only letters and spaces.</span></body></html>",	
	"PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of the phone number.</span></body></html>",
	"PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of the phone number.</span></body></html>",
	"PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of the phone number.</span></body></html>",
	"EMAIL" => "<html><body><span class=error>Please enter a valid email address.</span></body></html>",
	"ADDRESS_1" => "<html><body><span class=error>Please enter a valid address.</span></body></html>",
	"CITY" => "<html><body><span class=error>Please enter a valid city name.</span></body></html>",
	"STATE" => "<html><body><span class=error>Please enter a valid state.</span></body></html>",
	"ZIP" => "<html><body><span class=error>Please make sure the there are 5 digits in the zip code.</span></body></html>",
	"DOB_1" => "<html><body><span class=error>Please Enter a valid date of birth.</span></body></html>",
	"DOB_2" => "<html><body><span class=error>Please Enter a valid date of birth.</span></body></html>",
	"DOB_3" => "<html><body><span class=error>Please Enter a valid date of birth.</span></body></html>",
	"SSN" => "<html><body><span class=error>Please make sure there are 9 digits in your SSN, and that you have placed dashes correctly.</span></body></html>",
	"EMPLOYER_ADDRESS_1" => "<html><body><span class=error>Please enter a valid employer address.</span></body></html>",
	"EMPLOYER_CITY" => "<html><body><span class=error>Please enter a valid employer city name.</span></body></html>",
	"EMPLOYER_STATE" => "<html><body><span class=error>Please enter a valid employer state.</span></body></html>",
	"EMPLOYER_ZIP" => "<html><body><span class=error>Please make sure there are 5 digits in the employer zip code.</span></body></html>",
	"WORK_PHONE_1" => "<html><body><span class=error>Please enter a valid work phone number</span></body></html>",
	"WORK_PHONE_2" => "<html><body><span class=error>Please enter a valid work phone number</span></body></html>",
	"WORK_PHONE_3" => "<html><body><span class=error>Please enter a valid work phone number</span></body></html>",
	"PHYSICIAN_ADDRESS_1" => "<html><body><span class=error>Please enter a valid physician address.</span></body></html>",
	"PHYSICIAN_CITY" => "<html><body><span class=error>Please enter a valid physician city name.</span></body></html>",
	"PHYSICIAN_STATE" => "<html><body><span class=error>Please enter a valid physician state.</span></body></html>",
	"PHYSICIAN_ZIP" => "<html><body><span class=error>Please make sure there are 5 digits in the physician zip code.</span></body></html>",
	"PHYSICIAN_PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of your physician's phone number.</span></body></html>",
	"PHYSICIAN_PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of your physician's phone number.</span></body></html>",
	"PHYSICIAN_PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of your physician's phone number.</span></body></html>",
	"SPOUSE_FIRST" => "<html><body><span class=error>Please make sure that the spouse first name has only letters and spaces.</span></body></html>",
	"SPOUSE_LAST" => "<html><body><span class=error>Please make sure that the spouse last name has only letters and spaces.</span></body></html>",	
	"SPOUSE_HOME_PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of your spouse's home phone number.</span></body></html>",
	"SPOUSE_HOME_PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of your spouse's home phone number.</span></body></html>",
	"SPOUSE_HOME_PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of your spouse's home phone number.</span></body></html>",
	"SPOUSE_WORK_PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of your spouse's work phone number.</span></body></html>",
	"SPOUSE_WORK_PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of your spouse's work phone number.</span></body></html>",
	"SPOUSE_WORK_PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of your spouse's work phone number.</span></body></html>",
	"MOTHER_FIRST" => "<html><body><span class=error>Please make sure that the mother's first name has only letters and spaces.</span></body></html>",
	"MOTHER_LAST" => "<html><body><span class=error>Please make sure that the mother's last name has only letters and spaces.</span></body></html>",
	"MOTHER_ADDRESS_1" => "<html><body><span class=error>Please enter a valid Mother's address.</span></body></html>",
	"MOTHER_CITY" => "<html><body><span class=error>Please enter a valid Mother city name.</span></body></html>",
	"MOTHER_STATE" => "<html><body><span class=error>Please enter a valid Mother state.</span></body></html>",
	"MOTHER_ZIP" => "<html><body><span class=error>Please make sure there are 5 digits in the Mother zip code.</span></body></html>",
	"MOTHER_DOB_1" => "<html><body><span class=error>Please Enter a valid mother's date of birth.</span></body></html>",
	"MOTHER_DOB_2" => "<html><body><span class=error>Please Enter a valid mother's date of birth.</span></body></html>",
	"MOTHER_DOB_3" => "<html><body><span class=error>Please Enter a valid mother's date of birth.</span></body></html>",
	"MOTHER_EMPLOYER_ADDRESS_1" => "<html><body><span class=error>Please enter a valid mother's employer address.</span></body></html>",
	"MOTHER_EMPLOYER_CITY" => "<html><body><span class=error>Please enter a valid mother's employer city name.</span></body></html>",
	"MOTHER_EMPLOYER_STATE" => "<html><body><span class=error>Please enter a valid mother's employer state.</span></body></html>",
	"MOTHER_EMPLOYER_ZIP" => "<html><body><span class=error>Please make sure there are 5 digits in the mother's employer zip code.</span></body></html>",
	"MOTHER_WORK_PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of your mother's employer's phone number.</span></body></html>",
	"MOTHER_WORK_PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of your mother's employer's phone number.</span></body></html>",
	"MOTHER_WORK_PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of your mother's employer's phone number.</span></body></html>",
	"FATHER_FIRST" => "<html><body><span class=error>Please make sure that the father's first name has only letters and spaces.</span></body></html>",
	"FATHER_LAST" => "<html><body><span class=error>Please make sure that the father's last name has only letters and spaces.</span></body></html>",
	"FATHER_ADDRESS_1" => "<html><body><span class=error>Please enter a valid father's address.</span></body></html>",
	"FATHER_CITY" => "<html><body><span class=error>Please enter a valid father city name.</span></body></html>",
	"FATHER_STATE" => "<html><body><span class=error>Please enter a valid father state.</span></body></html>",
	"FATHER_ZIP" => "<html><body><span class=error>Please make sure there are 5 digits in the father's zip code.</span></body></html>",
	"FATHER_DOB_1" => "<html><body><span class=error>Please Enter a valid father's date of birth.</span></body></html>",
	"FATHER_DOB_2" => "<html><body><span class=error>Please Enter a valid father's date of birth.</span></body></html>",
	"FATHER_DOB_3" => "<html><body><span class=error>Please Enter a valid father's date of birth.</span></body></html>",
	"FATHER_EMPLOYER_ADDRESS_1" => "<html><body><span class=error>Please enter a valid father's employer address.</span></body></html>",
	"FATHER_EMPLOYER_CITY" => "<html><body><span class=error>Please enter a valid father's employer city name.</span></body></html>",
	"FATHER_EMPLOYER_STATE" => "<html><body><span class=error>Please enter a valid father's employer state.</span></body></html>",
	"FATHER_EMPLOYER_ZIP" => "<html><body><span class=error>Please make sure there are 5 digits in the father's employer zip code.</span></body></html>",
	"FATHER_WORK_PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of the father's employer's phone number.</span></body></html>",
	"FATHER_WORK_PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of the father's employer's phone number.</span></body></html>",
	"FATHER_WORK_PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of the father's employer's phone number.</span></body></html>",
	"EMERGENCY_CONTACT_FIRST" => "<html><body><span class=error>Please make sure that the emergency contact's first name has only letters and spaces.</span></body></html>",
	"EMERGENCY_CONTACT_LAST" => "<html><body><span class=error>Please make sure that the emergency contact's last name has only letters and spaces.</span></body></html>",
	"EMERGENCY_CONTACT_PHONE_1" => "<html><body><span class=error>Please make sure the there are 3 digits in the first section of the emergency contact's phone number.</span></body></html>",
	"EMERGENCY_CONTACT_PHONE_2" => "<html><body><span class=error>Please make sure the there are 3 digits in the second section of the emergency contact's phone number.</span></body></html>",
	"EMERGENCY_CONTACT_PHONE_3" => "<html><body><span class=error>Please make sure the there are 4 digits in the third section of the emergency contact's phone number.</span></body></html>",
	"TODAY_DATE_1" => "<html><body><span class=error>Please enter a valid date for today's date</span></body></html>",
	"TODAY_DATE_2" => "<html><body><span class=error>Please enter a valid date for today's date</span></body></html>",
	"TODAY_DATE_3" => "<html><body><span class=error>Please enter a valid date for today's date</span></body></html>",
	"ROI_PERSON_1_FIRST" => "<html><body><span class=error>Please make sure that the first release of information person's first name has only letters and spaces.</span></body></html>",
	"ROI_PERSON_1_LAST" => "<html><body><span class=error>Please make sure that the first release of information person's last name has only letters and spaces.</span></body></html>",
	"ROI_PERSON_2_FIRST" => "<html><body><span class=error>Please make sure that the second release of information person's first name has only letters and spaces.</span></body></html>",
	"ROI_PERSON_2_LAST" => "<html><body><span class=error>Please make sure that the second release of information person's last name has only letters and spaces.</span></body></html>",
	"ROI_PERSON_3_FIRST" => "<html><body><span class=error>Please make sure that the third release of information person's first name has only letters and spaces.</span></body></html>",
	"ROI_PERSON_3_LAST" => "<html><body><span class=error>Please make sure that the third release of information person's last name has only letters and spaces.</span></body></html>",
	"ROI_DATE_1" => "<html><body><span class=error>Please enter a valid date for release of information</span></body></html>",
	"ROI_DATE_2" => "<html><body><span class=error>Please enter a valid date for release of information</span></body></html>",
	"ROI_DATE_3" => "<html><body><span class=error>Please enter a valid date for release of information</span></body></html>",
);

//Fields that are allowed to be left blank
$left_blank = array(
	"CELL_PHONE_1" => 0,
	"CELL_PHONE_2" => 0,
	"CELL_PHONE_3" => 0,
	"EMAIL" => 0,
	"SSN" => 0,
	"EMPLOYER_ADDRESS_1" => 0,
	"EMPLOYER_CITY" => 0,
	"EMPLOYER_STATE" => 0,
	"EMPLOYER_ZIP" => 0,
	"WORK_PHONE_1" => 0,
	"WORK_PHONE_2" => 0,
	"WORK_PHONE_3" => 0,
	"PHYSICIAN_FIRST" => 0,
	"PHYSICIAN_LAST" => 0,
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
	"MOTHER_FIRST" => 0,
	"MOTHER_LAST" => 0,
	"MOTHER_ADDRESS_1" => 0,
	"MOTHER_CITY" => 0,
	"MOTHER_STATE" => 0,
	"MOTHER_ZIP" => 0,
	"MOTHER_DOB" => 0,
	"MOTHER_EMPLOYER_ADDRESS_1" => 0,
	"MOTHER_EMPLOYER_CITY" => 0,
	"MOTHER_EMPLOYER_STATE" => 0,
	"MOTHER_EMPLOYER_ZIP" => 0,
	"MOTHER_WORK_PHONE_1" => 0,
	"MOTHER_WORK_PHONE_2" => 0,
	"MOTHER_WORK_PHONE_3" => 0,
	"FATHER_FIRST" => 0,
	"FATHER_LAST" => 0,
	"FATHER_ADDRESS_1" => 0,
	"FATHER_CITY" => 0,
	"FATHER_STATE" => 0,
	"FATHER_ZIP" => 0,
	"FATHER_DOB" => 0,
	"FATHER_EMPLOYER_ADDRESS_1" => 0,
	"FATHER_EMPLOYER_CITY" => 0,
	"FATHER_EMPLOYER_STATE" => 0,
	"FATHER_EMPLOYER_ZIP" => 0,
	"FATHER_WORK_PHONE_1" => 0,
	"FATHER_WORK_PHONE_2" => 0,
	"FATHER_WORK_PHONE_3" => 0,
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
	"ROI_PERSON_3_FIRST" => 0,
	"ROI_PERSON_3_LAST" => 0,
	"ROI_PERSON_3_RELATIONSHIP" => 0,
	"ROI_SIGNIATURE" => 0,	
	"ROI_DATE_1" => 0,
	"ROI_DATE_2" => 0,
	"ROI_DATE_3" => 0,
);

$error_report = "";

//Loop for validating the information- returns an error if a field is filled out, and does not match the regex, or if it is left blank and is required.
foreach ($validating_regex as $key => $regex) {
	if (!((preg_match($regex, $_POST[$key])) OR ($_POST[$key] == "" AND array_key_exists($key, $left_blank)))) {
		$error_report .= $error_dictionary[$key] . "<br/>";
	}
}

//displays an empty form for new visitor
if(empty($_POST)){
	$smarty->display('/home1/columch7/public_html/columbiaphysicaltherapyinc/MoseslakeForm/templates/form.tpl');
}

//displays the form, filled out with user's data, with the error report at the top if errors are found.
elseif("" != $error_report){
	print($error_report);
	$smarty->assign('user_data', $_POST);
	$smarty->display('/home1/columch7/public_html/columbiaphysicaltherapyinc/MoseslakeForm/templates/form.tpl');
}

//If there are no errors, the user is shown a thank-you screen, and their data is imported into the database.
else{
	echo "<html><body><p>Thanks for completing this form, " . htmlspecialchars($_POST["FIRST_NAME"]) . '! <br/>Your information has been received.<br/></p></body></html>';

	//calls SQLite functionality
	$db = new SQLite3($columbiaDB);

	//creates function to encrypt text 
	function encrypt_text($value, $key1, $key2){ 
		if(!$value || !$key1 || !$key2) return false;
		$crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key1, $value, MCRYPT_MODE_ECB, $key2);
		return trim(base64_encode($crypttext));
	}
 
	//creates function to decrypt text 
	function decrypt_text($value, $key1, $key2){
		if(!$value || !$key1 || !$key2) return false;
		$crypttext = base64_decode($value);
		$decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key1, $crypttext, MCRYPT_MODE_ECB, $key2);
		return trim($decrypttext);
	}


	//creates a random code for use in the insert line
	$rand_code = (rand());

	//var_dump( $_POST );
	//exit;

	//creates an array for the escaped values generated in the loop below
	$escaped_values = array();

	//loop takes the user's data and escapes any harmful characters (sterilization) and inserts them into the $escaped_values array
	foreach ($_POST as $field => $answer) {
		$escaped_values[$field] = SQLite3::escapeString($answer);
	} 

	//inserts data from the user into the database.
	$db->exec("INSERT INTO moses_new_patients (
		FIRST_NAME, 
		LAST_NAME, 
		CELL_PHONE, 
		HOME_PHONE, 
		EMAIL, 
		ADDRESS, 
		CITY, 
		STATE, 
		ZIP, 
		DOB, 
		GENDER, 
		SSN, 
		STUDENT, 
		EMPLOYER, 
		EMPLOYER_ADDRESS, 
		EMPLOYER_CITY, 
		EMPLOYER_STATE, 
		EMPLOYER_ZIP, 
		WORK_PHONE, 
		REFERRING_PHYSICIAN, 
		PHYSICIAN_ADDRESS, 
		PHYSICIAN_CITY, 
		PHYSICIAN_STATE, 
		PHYSICIAN_ZIP, 
		PHYSICIAN_PHONE, 
		SPOUSE_FIRST, 
		SPOUSE_LAST,
		SPOUSE_EMPLOYER, 
		SPOUSE_CELL_PHONE, 
		SPOUSE_WORK_PHONE, 
		MOTHER_FIRST, 
		MOTHER_LAST, 
		MOTHER_ADDRESS, 
		MOTHER_CITY, 
		MOTHER_STATE, 
		MOTHER_ZIP, 
		MOTHER_EMPLOYER, 
		MOTHER_EMPLOYER_ADDRESS, 
		MOTHER_EMPLOYER_CITY, 
		MOTHER_EMPLOYER_STATE, 
		MOTHER_EMPLOYER_ZIP, 
		MOTHER_EMPLOYER_PHONE, 
		FATHER_FIRST, 
		FATHER_LAST, 
		FATHER_ADDRESS, 
		FATHER_CITY, 
		FATHER_STATE, 
		FATHER_ZIP, 
		FATHER_EMPLOYER, 
		FATHER_EMPLOYER_ADDRESS, 
		FATHER_EMPLOYER_CITY, 
		FATHER_EMPLOYER_STATE, 
		FATHER_EMPLOYER_ZIP, 
		FATHER_EMPLOYER_PHONE, 
		EMERGENCY_CONTACT_FIRST, 
		EMERGENCY_CONTACT_LAST, 
		EMERGENCY_CONTACT_PHONE, 
		SIGNIATURE, 
		TODAY_DATE, 
		ROI_PERSON_1_FIRST, 
		ROI_PERSON_1_LAST, 
		ROI_PERSON_1_RELATIONSHIP, 
		ROI_PERSON_2_FIRST, 
		ROI_PERSON_2_LAST, 
		ROI_PERSON_2_RELATIONSHIP, 
		ROI_PERSON_3_FIRST, 
		ROI_PERSON_3_LAST, 
		ROI_PERSON_3_RELATIONSHIP,
		ROI_SIGNIATURE, 
		ROI_DATE,  
		ROI, 
		AUTH,
		MOTHER_DOB,
		FATHER_DOB) 
	VALUES (	
		'". $escaped_values["FIRST_NAME"] ."',
		'". $escaped_values["LAST_NAME"] ."' , 
		'(". $escaped_values["CELL_PHONE_1"] .")". $escaped_values["CELL_PHONE_2"] ."-". $escaped_values["CELL_PHONE_3"] ."',
		'(". $escaped_values["HOME_PHONE_1"] .")". $escaped_values["HOME_PHONE_2"] ."-". $escaped_values["HOME_PHONE_3"] ."',
		'". $escaped_values["EMAIL"] ."',
		'". $escaped_values["ADDRESS_1"] ." ". $escaped_values["ADDRESS_2"] ."',
		'". $escaped_values["CITY"] ."',
		'". $escaped_values["STATE"] ."',
		'". $escaped_values["ZIP"] ."',
		'". encrypt_text($escaped_values["DOB_1"] ."/". $escaped_values["DOB_2"] ."/". $escaped_values["DOB_3"],$key1,$key2) ."',
		'". $escaped_values["GENDER"] ."',
		'". encrypt_text($escaped_values["SSN"],$key1,$key2) ."',
		'". $escaped_values["STUDENT"] ."',
		'". $escaped_values["EMPLOYER"] ."',
		'". $escaped_values["EMPLOYER_ADDRESS_1"] ." ". $escaped_values["EMPLOYER_ADDRESS_2"] ."',
		'". $escaped_values["EMPLOYER_CITY"] ."',
		'". $escaped_values["EMPLOYER_STATE"] ."',
		'". $escaped_values["EMPLOYER_ZIP"] ."',
		'(". $escaped_values["WORK_PHONE_1"] .")". $escaped_values["WORK_PHONE_2"] ."-". $escaped_values["WORK_PHONE_3"] ."',
		'". $escaped_values["PHYSICIAN_FIRST"] ." ". $escaped_values["PHYSICIAN_LAST"] ."',
		'". $escaped_values["PHYSICIAN_ADDRESS_1"] ." ". $escaped_values["PHYSICIAN_ADDRESS_2"] ."',
		'". $escaped_values["PHYSICIAN_CITY"] ."',
		'". $escaped_values["PHYSICIAN_STATE"] ."',
		'". $escaped_values["PHYSICIAN_ZIP"] ."',
		'(". $escaped_values["PHYSICIAN_PHONE_1"] .")". $escaped_values["PHYSICIAN_PHONE_2"] ."-". $escaped_values["PHYSICIAN_PHONE_3"] ."',
		'". $escaped_values["SPOUSE_FIRST"] ."',
		'". $escaped_values["SPOUSE_LAST"] ."',
		'". $escaped_values["SPOUSE_EMPLOYER"] ."',
		'(". $escaped_values["SPOUSE_CELL_PHONE_1"] .")". $escaped_values["SPOUSE_CELL_PHONE_2"] ."-". $escaped_values["SPOUSE_CELL_PHONE_3"] ."',
		'(". $escaped_values["SPOUSE_WORK_PHONE_1"] .")". $escaped_values["SPOUSE_WORK_PHONE_2"] ."-". $escaped_values["SPOUSE_WORK_PHONE_3"] ."',
		'". $escaped_values["MOTHER_FIRST"] ."',
		'". $escaped_values["MOTHER_LAST"] ."',
		'". $escaped_values["MOTHER_ADDRESS_1"] ." ". $escaped_values["MOTHER_ADDRESS_2"] ."',
		'". $escaped_values["MOTHER_CITY"] ."',
		'". $escaped_values["MOTHER_STATE"] ."',
		'". $escaped_values["MOTHER_ZIP"] ."',
		'". $escaped_values["MOTHER_EMPLOYER"] ."',
		'". $escaped_values["MOTHER_EMPLOYER_ADDRESS_1"] ." ". $escaped_values["MOTHER_EMPLOYER_ADDRESS_2"] ."',
		'". $escaped_values["MOTHER_EMPLOYER_CITY"] ."',
		'". $escaped_values["MOTHER_EMPLOYER_STATE"] ."',
		'". $escaped_values["MOTHER_EMPLOYER_ZIP"] ."',
		'(". $escaped_values["MOTHER_WORK_PHONE_1"] .")". $escaped_values["MOTHER_WORK_PHONE_2"] ."-". $escaped_values["MOTHER_WORK_PHONE_3"] ."',
		'". $escaped_values["FATHER_FIRST"] ."',
		'". $escaped_values["FATHER_LAST"] ."',
		'". $escaped_values["FATHER_ADDRESS_1"] ." ". $escaped_values["FATHER_ADDRESS_2"] ."',
		'". $escaped_values["FATHER_CITY"] ."',
		'". $escaped_values["FATHER_STATE"] ."',
		'". $escaped_values["FATHER_ZIP"] ."',
		'". $escaped_values["FATHER_EMPLOYER"] ."',
		'". $escaped_values["FATHER_EMPLOYER_ADDRESS_1"] ." ". $escaped_values["FATHER_EMPLOYER_ADDRESS_2"] ."',
		'". $escaped_values["FATHER_EMPLOYER_CITY"] ."',
		'". $escaped_values["FATHER_EMPLOYER_STATE"] ."',
		'". $escaped_values["FATHER_EMPLOYER_ZIP"] ."',
		'(". $escaped_values["FATHER_WORK_PHONE_1"] .")". $escaped_values["FATHER_WORK_PHONE_2"] ."-". $escaped_values["FATHER_WORK_PHONE_3"] ."',
		'". $escaped_values["EMERGENCY_CONTACT_FIRST"] ."',
		'". $escaped_values["EMERGENCY_CONTACT_LAST"] ."',
		'(". $escaped_values["EMERGENCY_CONTACT_PHONE_1"] .")". $escaped_values["EMERGENCY_CONTACT_PHONE_2"] ."-". $escaped_values["EMERGENCY_CONTACT_PHONE_3"] ."',
		'". $escaped_values["SIGNIATURE"] ."',
		'". $escaped_values["TODAY_DATE_1"] ."/". $escaped_values["TODAY_DATE_2"] ."/". $escaped_values["TODAY_DATE_3"] ."',
		'". $escaped_values["ROI_PERSON_1_FIRST"] ."',
		'". $escaped_values["ROI_PERSON_1_LAST"] ."',
		'". $escaped_values["ROI_PERSON_1_RELATIONSHIP"] ."',
		'". $escaped_values["ROI_PERSON_2_FIRST"] ."',
		'". $escaped_values["ROI_PERSON_2_LAST"] ."',
		'". $escaped_values["ROI_PERSON_2_RELATIONSHIP"] ."',
		'". $escaped_values["ROI_PERSON_3_FIRST"] ."',
		'". $escaped_values["ROI_PERSON_3_LAST"] ."',
		'". $escaped_values["ROI_PERSON_3_RELATIONSHIP"] ."',
		'". $escaped_values["ROI_SIGNIATURE"] ."',
		'". $escaped_values["ROI_DATE_1"] ."/". $escaped_values["ROI_DATE_2"] ."/". $escaped_values["ROI_DATE_3"] ."',
		'". $escaped_values["ROI"] ."',
		'". $rand_code ."',
		'". encrypt_text($escaped_values["MOTHER_DOB_1"] ."/". $escaped_values["MOTHER_DOB_2"] ."/". $escaped_values["MOTHER_DOB_3"],$key1,$key2) ."',
		'". encrypt_text($escaped_values["FATHER_DOB_1"] ."/". $escaped_values["FATHER_DOB_2"] ."/". $escaped_values["FATHER_DOB_3"],$key1,$key2) ."')"); 
}

?>
