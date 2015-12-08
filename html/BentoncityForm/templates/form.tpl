<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>New Patient Registration</title>
<link rel="stylesheet" type="text/css" href="../view.css" media="all">
<script type="text/javascript" src="../view.js"></script>
<script type="text/javascript" src="../calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="../top.png" alt="">
	<div id="form_container">
	
		<h1><a>New Patient Registration</a></h1>
		<form id="form_1008734" class="appnitro"  method="post" action="../htdocs/NewPatient.php">
					<div class="form_description">
			<h2>New Patient Registration</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="PATIENT_NAME">Patient's Name </label>
		<span>
			<input id="FIRST_NAME" name= "FIRST_NAME" class="element text" maxlength="255" size="8" value="{$user_data.FIRST_NAME}"/>
			<label>First</label>
		</span>
		<span>
			<input id="LAST_NAME" name= "LAST_NAME" class="element text" maxlength="255" size="14" value="{$user_data.LAST_NAME}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="PHONE">Primary Phone </label>
		<span>
			<input id="PHONE_1" name="PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.PHONE_1}" type="text"> -
			<label for="PHONE_1">(###)</label>
		</span>
		<span>
			<input id="PHONE_2" name="PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.PHONE_2}" type="text"> -
			<label for="PHONE_2">###</label>
		</span>
		<span>
	 		<input id="PHONE_3" name="PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.PHONE_3}" type="text">
			<label for="PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_7" >
		<label class="description" for="CELL_PHONE">Secondary Phone </label>
		<span>
			<input id="CELL_PHONE_1" name="CELL_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.CELL_PHONE_1}" type="text"> -
			<label for="CELL_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="CELL_PHONE_2" name="CELL_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.CELL_PHONE_2}" type="text"> -
			<label for="CELL_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="CELL_PHONE_3" name="CELL_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.CELL_PHONE_3}" type="text">
			<label for="CELL_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_3" >
		<label class="description" for="EMAIL">Email </label>
		<div>
			<input id="EMAIL" name="EMAIL" class="element text medium" type="text" maxlength="255" value="{$user_data.EMAIL}"/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="ADDRESS">Address </label>
		
		<div>
			<input id="ADDRESS_1" name="ADDRESS_1" class="element text large" value="{$user_data.ADDRESS_1}" type="text">
			<label for="ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="ADDRESS_2" name="ADDRESS_2" class="element text large" value="{$user_data.ADDRESS_2}" type="text">
			<label for="ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="CITY" name="CITY" class="element text medium" value="{$user_data.CITY}" type="text">
			<label for="CITY">City</label>
		</div>
	
		<div class="right">
			<input id="STATE" name="STATE" class="element text medium" value="{$user_data.STATE}" type="text">
			<label for="STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="ZIP" name="ZIP" class="element text medium" maxlength="15" value="{$user_data.ZIP}" type="text">
			<label for="ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_5" >
		<label class="description" for="DOB">Date of Birth </label>
		<span>
			<input id="DOB_1" name="DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.DOB_1}" type="text"> /
			<label for="DOB_1">MM</label>
		</span>
		<span>
			<input id="DOB_2" name="DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.DOB_2}" type="text"> /
			<label for="DOB_2">DD</label>
		</span>
		<span>
	 		<input id="DOB_3" name="DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.DOB_3}" type="text">
			<label for="DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "DOB_3",
			baseField    : "DOB",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_52" >
		<label class="description" for="GENDER">Gender </label>
		<span>
			<input id="GENDER_M" name="GENDER" class="element radio" type="radio" value="M" {if $user_data.GENDER eq 'M'}checked{/if}/>
<label class="choice" for="GENDER_M">Male</label>
<input id="GENDER_F" name="GENDER" class="element radio" type="radio" value="F" {if $user_data.GENDER eq 'F'}checked{/if}/>
<label class="choice" for="GENDER_F">Female</label>

		</span> 
		</li>		<li id="li_70" >
		<label class="description" for="STUDENT">Are you a student? </label>
		<span>
			<input id="STUDENT_Y" name="STUDENT" class="element radio" type="radio" value="Y" {if $user_data.STUDENT eq 'Y'}checked{/if}/>
<label class="choice" for="STUDENT_Y">Yes</label>
<input id="STUDENT_N" name="STUDENT" class="element radio" type="radio" value="N" {if $user_data.STUDENT eq 'N'}checked{/if}/>
<label class="choice" for="STUDENT_N">No</label>

		</span> 
		</li>		<li id="li_6" >
		<label class="description" for="SSN">S.S. Number </label>
		<div>
			<input id="SSN" name="SSN" class="element text medium" type="text" maxlength="255" value="{$user_data.SSN}"/> 
		</div> 
		</li>		<li class="section_break">
			<h3> </h3>
			<p></p>
		</li>
					<li id="li_8" >
		<label class="description" for="EMPLOYER">Employer </label>
		<div>
			<input id="EMPLOYER" name="EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.EMPLOYER}"/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="EMPLOYER_ADDRESS">Employer Address </label>
		
		<div>
			<input id="EMPLOYER_ADDRESS_1" name="EMPLOYER_ADDRESS_1" class="element text large" value="{$user_data.EMPLOYER_ADDRESS_1}" type="text">
			<label for="EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="EMPLOYER_ADDRESS_2" name="EMPLOYER_ADDRESS_2" class="element text large" value="{$user_data.EMPLOYER_ADDRESS_2}" type="text">
			<label for="EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="EMPLOYER_CITY" name="EMPLOYER_CITY" class="element text medium" value="{$user_data.EMPLOYER_CITY}" type="text">
			<label for="EMPLOYER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="EMPLOYER_STATE" name="EMPLOYER_STATE" class="element text medium" value="{$user_data.EMPLOYER_STATE}" type="text">
			<label for="EMPLOYER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="EMPLOYER_ZIP" name="EMPLOYER_ZIP" class="element text medium" maxlength="15" value=""{$user_data.EMPLOYER_ZIP} type="text">
			<label for="EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_72" >
		<label class="description" for="WORK_PHONE">Work Phone </label>
		<span>
			<input id="WORK_PHONE_1" name="WORK_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.WORK_PHONE_1}" type="text"> -
			<label for="WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="WORK_PHONE_2" name="WORK_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.WORK_PHONE_2}" type="text"> -
			<label for="WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="WORK_PHONE_3" name="WORK_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.WORK_PHONE_3}" type="text">
			<label for="WORK_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_10" >
		<label class="description" for="REFERRING_PHYSICIAN">Referring Physician </label>
		<div>
			<input id="REFERRING_PHYSICIAN" name="REFERRING_PHYSICIAN" class="element text medium" type="text" maxlength="255" value="{$user_data.REFERRING_PHYSICIAN}"/> 
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="PHYSICIAN_ADDRESS">Physician's Address </label>
		
		<div>
			<input id="PHYSICIAN_ADDRESS_1" name="PHYSICIAN_ADDRESS_1" class="element text large" value="{$user_data.PHYSICIAN_ADDRESS_1}" type="text">
			<label for="PHYSICIAN_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="PHYSICIAN_ADDRESS_2" name="PHYSICIAN_ADDRESS_2" class="element text large" value="{$user_data.PHYSICIAN_ADDRESS_2}" type="text">
			<label for="PHYSICIAN_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="PHYSICIAN_CITY" name="PHYSICIAN_CITY" class="element text medium" value="{$user_data.PHYSICIAN_CITY}" type="text">
			<label for="PHYSICIAN_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="PHYSICIAN_STATE" name="PHYSICIAN_STATE" class="element text medium" value="{$user_data.PHYSICIAN_STATE}" type="text">
			<label for="PHYSICIAN_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="PHYSICIAN_ZIP" name="PHYSICIAN_ZIP" class="element text medium" maxlength="15" value="{$user_data.PHYSICIAN_ZIP}" type="text">
			<label for="PHYSICIAN_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_12" >
		<label class="description" for="PHYSICIAN_PHONE">Physician's Phone </label>
		<span>
			<input id="PHYSICIAN_PHONE_1" name="PHYSICIAN_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.PHYSICIAN_PHONE_1}" type="text"> -
			<label for="PHYSICIAN_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="PHYSICIAN_PHONE_2" name="PHYSICIAN_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.PHYSICIAN_PHONE_2}" type="text"> -
			<label for="PHYSICIAN_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="PHYSICIAN_PHONE_3" name="PHYSICIAN_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.PHYSICIAN_PHONE_3}" type="text">
			<label for="PHYSICIAN_PHONE_3">####</label>
		</span>
		 
		</li>		<li class="section_break">

</li>		

<h3>If Married</h3>
			<p></p>
		</li>		<li id="li_14" >
		<label class="description" for="SPOUSE_NAME">Spouse's Name </label>
		<span>
			<input id="SPOUSE_FIRST" name= "SPOUSE_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.SPOUSE_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="SPOUSE_LAST" name= "SPOUSE_LAST" class="element text" maxlength="255" size="14" value="{$user_data.SPOUSE_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_15" >
		<label class="description" for="SPOUSE_EMPLOYER">Employer </label>
		<div>
			<input id="SPOUSE_EMPLOYER" name="SPOUSE_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.SPOUSE_EMPLOYER}"/> 
		</div> 
		</li>		<li id="li_16" >
		<label class="description" for="SPOUSE_CELL_PHONE">Cell Phone </label>
		<span>
			<input id="SPOUSE_CELL_PHONE_1" name="SPOUSE_CELL_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.SPOUSE_CELL_PHONE_1}" type="text"> -
			<label for="SPOUSE_CELL_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="SPOUSE_CELL_PHONE_2" name="SPOUSE_CELL_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.SPOUSE_CELL_PHONE_2}" type="text"> -
			<label for="SPOUSE_CELL_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="SPOUSE_CELL_PHONE_3" name="SPOUSE_CELL_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.SPOUSE_CELL_PHONE_3}" type="text">
			<label for="SPOUSE_CELL_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_17" >
		<label class="description" for="SPOUSE_WORK_PHONE">Work Phone </label>
		<span>
			<input id="SPOUSE_WORK_PHONE_1" name="SPOUSE_WORK_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.SPOUSE_WORK_PHONE_1}" type="text"> -
			<label for="SPOUSE_WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="SPOUSE_WORK_PHONE_2" name="SPOUSE_WORK_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.SPOUSE_WORK_PHONE_2}" type="text"> -
			<label for="SPOUSE_WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="SPOUSE_WORK_PHONE_3" name="SPOUSE_WORK_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.SPOUSE_WORK_PHONE_3}" type="text">
			<label for="SPOUSE_WORK_PHONE_3">####</label>
		</span>
		 
		</li>
					<li class="section_break">
			<h3>Please Complete if Patient is a Minor</h3>
			<p></p>
		</li>		<li id="li_20" >
		<label class="description" for="MOTHER_NAME">Mother/Guardian's Name </label>
		<span>
			<input id="MOTHER_FIRST" name= "MOTHER_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.MOTHER_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="MOTHER_LAST" name= "MOTHER_LAST" class="element text" maxlength="255" size="14" value="{$user_data.MOTHER_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_21" >
		<label class="description" for="MOTHER_ADDRESS">Address </label>
		
		<div>
			<input id="MOTHER_ADDRESS_1" name="MOTHER_ADDRESS_1" class="element text large" value="{$user_data.MOTHER_ADDRESS_1}" type="text">
			<label for="MOTHER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="MOTHER_ADDRESS_2" name="MOTHER_ADDRESS_2" class="element text large" value="{$user_data.MOTHER_ADDRESS_2}" type="text">
			<label for="MOTHER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="MOTHER_CITY" name="MOTHER_CITY" class="element text medium" value="{$user_data.MOTHER_CITY}" type="text">
			<label for="MOTHER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="MOTHER_STATE" name="MOTHER_STATE" class="element text medium" value="{$user_data.MOTHER_STATE}" type="text">
			<label for="MOTHER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="MOTHER_ZIP" name="MOTHER_ZIP" class="element text medium" maxlength="15" value="{$user_data.MOTHER_ZIP}" type="text">
			<label for="MOTHER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_22" >
		<label class="description" for="MOTHER_DOB">Date of Birth </label>
		<span>
			<input id="MOTHER_DOB_1" name="MOTHER_DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.MOTHER_DOB_1}" type="text"> /
			<label for="MOTHER_DOB_1">MM</label>
		</span>
		<span>
			<input id="MOTHER_DOB_2" name="MOTHER_DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.MOTHER_DOB_2}" type="text"> /
			<label for="MOTHER_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="MOTHER_DOB_3" name="MOTHER_DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.MOTHER_DOB_3}" type="text">
			<label for="MOTHER_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "MOTHER_DOB_3",
			baseField    : "MOTHER_DOB",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_23" >
		<label class="description" for="MOTHER_EMPLOYER">Employer </label>
		<div>
			<input id="MOTHER_EMPLOYER" name="MOTHER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.MOTHER_EMPLOYER}"/> 
		</div> 
		</li>		<li id="li_24" >
		<label class="description" for="MOTHER_EMPLOYER_ADDRESS">Employer's Address </label>
		
		<div>
			<input id="MOTHER_EMPLOYER_ADDRESS_1" name="MOTHER_EMPLOYER_ADDRESS_1" class="element text large" value="{$user_data.MOTHER_EMPLOYER_ADDRESS_1}" type="text">
			<label for="MOTHER_EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="MOTHER_EMPLOYER_ADDRESS_2" name="MOTHER_EMPLOYER_ADDRESS_2" class="element text large" value="{$user_data.MOTHER_EMPLOYER_ADDRESS_2}" type="text">
			<label for="MOTHER_EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="MOTHER_EMPLOYER_CITY" name="MOTHER_EMPLOYER_CITY" class="element text medium" value="{$user_data.MOTHER_EMPLOYER_CITY}" type="text">
			<label for="MOTHER_EMPLOYER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="MOTHER_EMPLOYER_STATE" name="MOTHER_EMPLOYER_STATE" class="element text medium" value="{$user_data.MOTHER_EMPLOYER_STATE}" type="text">
			<label for="MOTHER_EMPLOYER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="MOTHER_EMPLOYER_ZIP" name="MOTHER_EMPLOYER_ZIP" class="element text medium" maxlength="15" value="{$user_data.MOTHER_EMPLOYER_ZIP}" type="text">
			<label for="MOTHER_EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_25" >
		<label class="description" for="MOTHER_EMPLOYER_PHONE">Work Phone </label>
		<span>
			<input id="MOTHER_EMPLOYER_PHONE_1" name="MOTHER_EMPLOYER_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.MOTHER_EMPLOYER_PHONE_1}" type="text"> -
			<label for="MOTHER_EMPLOYER_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="MOTHER_EMPLOYER_PHONE_2" name="MOTHER_EMPLOYER_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.MOTHER_EMPLOYER_PHONE_2}" type="text"> -
			<label for="MOTHER_EMPLOYER_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="MOTHER_EMPLOYER_PHONE_3" name="MOTHER_EMPLOYER_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.MOTHER_EMPLOYER_PHONE_3}" type="text">
			<label for="MOTHER_EMPLOYER_PHONE_3">####</label>
		</span>
		 
		</li>		
				<li class="section_break">
			<h3> </h3>
			<p></p>
		</li>
				<li id="li_26" >
		<label class="description" for="FATHER_NAME">Father/Guardian's Name </label>
		<span>
			<input id="element_26_1" name= "FATHER_FIRST" class="FATHER_FIRST" maxlength="255" size="8" value="{$user_data.FATHER_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="FATHER_LAST" name= "FATHER_LAST" class="element text" maxlength="255" size="14" value="{$user_data.FATHER_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_27" >
		<label class="description" for="FATHER_ADDRESS">Address </label>
		
		<div>
			<input id="FATHER_ADDRESS_1" name="FATHER_ADDRESS_1" class="element text large" value="" {$user_data.FATHER_ADDRESS_1}type="text">
			<label for="FATHER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="FATHER_ADDRESS_2" name="FATHER_ADDRESS_2" class="element text large" value="{$user_data.FATHER_ADDRESS_2}" type="text">
			<label for="FATHER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="FATHER_CITY" name="FATHER_CITY" class="element text medium" value="{$user_data.FATHER_CITY}" type="text">
			<label for="FATHER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="FATHER_STATE" name="FATHER_STATE" class="element text medium" value="{$user_data.FATHER_STATE}" type="text">
			<label for="FATHER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="FATHER_ZIP" name="FATHER_ZIP" class="element text medium" maxlength="15" value="{$user_data.FATHER_ZIP}" type="text">
			<label for="FATHER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_28" >
		<label class="description" for="FATHER_DOB">Date of Birth </label>
		<span>
			<input id="FATHER_DOB_1" name="FATHER_DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.FATHER_DOB_1}" type="text"> /
			<label for="FATHER_DOB_1">MM</label>
		</span>
		<span>
			<input id="FATHER_DOB_2" name="FATHER_DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.FATHER_DOB_2}" type="text"> /
			<label for="FATHER_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="FATHER_DOB_3" name="FATHER_DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.FATHER_DOB_3}" type="text">
			<label for="FATHER_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "FATHER_DOB_3",
			baseField    : "FATHER_DOB",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_29" >
		<label class="description" for="FATHER_EMPLOYER">Employer </label>
		<div>
			<input id="FATHER_EMPLOYER" name="FATHER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.FATHER_EMPLOYER}"/> 
		</div> 
		</li>		<li id="li_30" >
		<label class="description" for="FATHER_EMPLOYER_ADDRESS">Employer's Address </label>
		
		<div>
			<input id="FATHER_EMPLOYER_ADDRESS_1" name="FATHER_EMPLOYER_ADDRESS_1" class="element text large" value="{$user_data.FATHER_EMPLOYER_ADDRESS_1}" type="text">
			<label for="FATHER_EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="FATHER_EMPLOYER_ADDRESS_2" name="FATHER_EMPLOYER_ADDRESS_2" class="element text large" value="{$user_data.FATHER_EMPLOYER_ADDRESS_2}" type="text">
			<label for="FATHER_EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="FATHER_EMPLOYER_CITY" name="FATHER_EMPLOYER_CITY" class="element text medium" value="{$user_data.FATHER_EMPLOYER_CITY}" type="text">
			<label for="FATHER_EMPLOYER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="FATHER_EMPLOYER_STATE" name="FATHER_EMPLOYER_STATE" class="element text medium" value="{$user_data.FATHER_EMPLOYER_STATE}" type="text">
			<label for="FATHER_EMPLOYER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="FATHER_EMPLOYER_ZIP" name="FATHER_EMPLOYER_ZIP" class="element text medium" maxlength="15" value="{$user_data.FATHER_EMPLOYER_ZIP}" type="text">
			<label for="FATHER_EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_31" >
		<label class="description" for="FATHER_EMPLOYER_PHONE">Work Phone </label>
		<span>
			<input id="FATHER_EMPLOYER_PHONE_1" name="FATHER_EMPLOYER_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.FATHER_EMPLOYER_PHONE_1}" type="text"> -
			<label for="FATHER_EMPLOYER_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="FATHER_EMPLOYER_PHONE_2" name="FATHER_EMPLOYER_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.FATHER_EMPLOYER_PHONE_2}" type="text"> -
			<label for="FATHER_EMPLOYER_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="FATHER_EMPLOYER_PHONE_3" name="FATHER_EMPLOYER_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.FATHER_EMPLOYER_PHONE_3}" type="text">
			<label for="FATHER_EMPLOYER_PHONE_3">####</label>
		</span>
		 
		</li>		<li class="section_break">
			<h3>Insurance Information</h3>
			<p>Please bring your insurance card to your first visit</p>
		</li>		<li id="li_33" >
		<label class="description" for="PRIMARY_INSURANCE_NAME">Primary Insurance Carrier's name </label>
		<div>
			<input id="PRIMARY_INSURANCE_NAME" name="PRIMARY_INSURANCE_NAME" class="element text medium" type="text" maxlength="255" value="{$user_data.PRIMARY_INSURANCE_NAME}"/> 
		</div> 
		</li>		<li id="li_34" >
		<label class="description" for="PRIMARY_INSURANCE_ADDRESS">Address </label>
		
		<div>
			<input id="PRIMARY_INSURANCE_ADDRESS_1" name="PRIMARY_INSURANCE_ADDRESS_1" class="element text large" value="{$user_data.PRIMARY_INSURANCE_ADDRESS_1}" type="text">
			<label for="PRIMARY_INSURANCE_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="PRIMARY_INSURANCE_ADDRESS_2" name="PRIMARY_INSURANCE_ADDRESS_2" class="element text large" value="{$user_data.PRIMARY_INSURANCE_ADDRESS_2}" type="text">
			<label for="PRIMARY_INSURANCE_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="PRIMARY_INSURANCE_CITY" name="PRIMARY_INSURANCE_CITY" class="element text medium" value="{$user_data.PRIMARY_INSURANCE_CITY}" type="text">
			<label for="PRIMARY_INSURANCE_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="PRIMARY_INSURANCE_STATE" name="PRIMARY_INSURANCE_STATE" class="element text medium" value="{$user_data.PRIMARY_INSURANCE_STATE}" type="text">
			<label for="PRIMARY_INSURANCE_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="PRIMARY_INSURANCE_ZIP" name="PRIMARY_INSURANCE_ZIP" class="element text medium" maxlength="15" value="{$user_data.PRIMARY_INSURANCE_ZIP}" type="text">
			<label for="PRIMARY_INSURANCE_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_35" >
		<label class="description" for="PI_SUBSCRIBER_NAME">Subscriber's Name </label>
		<span>
			<input id="PI_SUBSCRIBER_FIRST" name= "PI_SUBSCRIBER_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.PI_SUBSCRIBER_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="PI_SUBSCRIBER_LAST" name= "PI_SUBSCRIBER_LAST" class="element text" maxlength="255" size="14" value="{$user_data.PI_SUBSCRIBER_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_37" >
		<label class="description" for="PI_SUBSCRIBER_ID">Subscriber's ID Number </label>
		<div>
			<input id="PI_SUBSCRIBER_ID" name="PI_SUBSCRIBER_ID" class="element text medium" type="text" maxlength="255" value="{$user_data.PI_SUBSCRIBER_ID}"/> 
		</div> 
		</li>		<li id="li_38" >
		<label class="description" for="PI_SUBSCRIBER_GROUP_NUMBER">Group Number </label>
		<div>
			<input id="PI_SUBSCRIBER_GROUP_NUMBER" name="PI_SUBSCRIBER_GROUP_NUMBER" class="element text medium" type="text" maxlength="255" value="{$user_data.PI_SUBSCRIBER_GROUP_NUMBER}"/> 
		</div>                                                
		</li>	
					<li class="section_break">
			<h3> </h3>
			<p></p>
		</li>
					<li id="li_40" >
		<label class="description" for="SECONDARY_INSURANCE_NAME">Secondary Insurance Carrier's Name </label>
		<div>
			<input id="SECONDARY_INSURANCE_NAME" name="SECONDARY_INSURANCE_NAME" class="element text medium" type="text" maxlength="255" value="{$user_data.SECONDARY_INSURANCE_NAME}"/> 
		</div> 
		</li>		<li id="li_41" >
		<label class="description" for="SECONDARY_INSURANCE_ADDRESS">Address </label>
		
		<div>
			<input id="SECONDARY_INSURANCE_ADDRESS_1" name="SECONDARY_INSURANCE_ADDRESS_1" class="element text large" value="{$user_data.SECONDARY_INSURANCE_ADDRESS_1}" type="text">
			<label for="SECONDARY_INSURANCE_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="SECONDARY_INSURANCE_ADDRESS_2" name="SECONDARY_INSURANCE_ADDRESS_2" class="element text large" value="{$user_data.SECONDARY_INSURANCE_ADDRESS_2}" type="text">
			<label for="SECONDARY_INSURANCE_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="SECONDARY_INSURANCE_CITY" name="SECONDARY_INSURANCE_CITY" class="element text medium" value="{$user_data.SECONDARY_INSURANCE_CITY}" type="text">
			<label for="SECONDARY_INSURANCE_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="SECONDARY_INSURANCE_STATE" name="SECONDARY_INSURANCE_STATE" class="element text medium" value="{$user_data.SECONDARY_INSURANCE_STATE}" type="text">
			<label for="SECONDARY_INSURANCE_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="SECONDARY_INSURANCE_ZIP" name="SECONDARY_INSURANCE_ZIP" class="element text medium" maxlength="15" value="{$user_data.SECONDARY_INSURANCE_ZIP}" type="text">
			<label for="SECONDARY_INSURANCE_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_42" >
		<label class="description" for="SI_SUBSCRIBER_NAME">Subscriber's Name </label>
		<span>
			<input id="SI_SUBSCRIBER_FIRST" name= "SI_SUBSCRIBER_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.SI_SUBSCRIBER_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="SI_SUBSCRIBER_LAST" name= "SI_SUBSCRIBER_LAST" class="element text" maxlength="255" size="14" value="{$user_data.SI_SUBSCRIBER_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_44" >
		<label class="description" for="SI_SUBSCRIBER_ID">Subscriber's ID Number </label>
		<div>
			<input id="SI_SUBSCRIBER_ID" name="SI_SUBSCRIBER_ID" class="element text medium" type="text" maxlength="255" value="{$user_data.SI_SUBSCRIBER_ID}"/> 
		</div> 
		</li>		<li id="li_45" >
		<label class="description" for="SI_SUBSCRIBER_GROUP_NUMBER">Group Number </label>
		<div>
			<input id="SI_SUBSCRIBER_GROUP_NUMBER" name="SI_SUBSCRIBER_GROUP_NUMBER" class="element text medium" type="text" maxlength="255" value="{$user_data.SI_SUBSCRIBER_GROUP_NUMBER}"/> 
		</div> 
		</li>		<li id="li_53" >
		<label class="description" for="NEED_TREATMENT_FOR">Is treatment a result of a(n): </label>
		<span>
			<input id="NEED_TREATMENT_FOR_1" name="NEED_TREATMENT_FOR" class="element radio" type="radio" value="OTI" {if $user_data.NEED_TREATMENT_FOR eq 'OTI'}checked{/if} />
<label class="choice" for="NEED_TREATMENT_FOR_1">On the Job Injury</label>
<input id="NEED_TREATMENT_FOR_2" name="NEED_TREATMENT_FOR" class="element radio" type="radio" value="Auto" {if $user_data.NEED_TREATMENT_FOR eq 'Auto'}checked{/if}/>
<label class="choice" for="NEED_TREATMENT_FOR_2">Auto</label>
<input id="NEED_TREATMENT_FOR_3" name="NEED_TREATMENT_FOR" class="element radio" type="radio" value="Accident" {if $user_data.NEED_TREATMENT_FOR eq 'Accident'}checked{/if}/>
<label class="choice" for="NEED_TREATMENT_FOR_3">Accident</label>

		</span> 
		</li>		<li id="li_47" >
		<label class="description" for="DATE_OF_INJURY">Date of Injury </label>
		<span>
			<input id="DATE_OF_INJURY_1" name="DATE_OF_INJURY_1" class="element text" size="2" maxlength="2" value="{$user_data.DATE_OF_INJURY_1}" type="text"> /
			<label for="DATE_OF_INJURY_1">MM</label>
		</span>
		<span>
			<input id="DATE_OF_INJURY_2" name="DATE_OF_INJURY_2" class="element text" size="2" maxlength="2" value="{$user_data.DATE_OF_INJURY_2}" type="text"> /
			<label for="DATE_OF_INJURY_2">DD</label>
		</span>
		<span>
	 		<input id="DATE_OF_INJURY_3" name="DATE_OF_INJURY_3" class="element text" size="4" maxlength="4" value="{$user_data.DATE_OF_INJURY_3}" type="text">
			<label for="DATE_OF_INJURY_3">YYYY</label>
		</span>
	
		<span id="calendar_47">
			<img id="cal_img_47" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "DATE_OF_INJURY_3",
			baseField    : "DATE_OF_INJURY",
			displayArea  : "calendar_47",
			button		 : "cal_img_47",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_48" >
		<label class="description" for="CLAIM_NUMBER">Claim Number </label>
		<div>
			<input id="CLAIM_NUMBER" name="CLAIM_NUMBER" class="element text medium" type="text" maxlength="255" value="{$user_data.CLAIM_NUMBER}"/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Emergency Contact Information</h3>
			<p></p>
		</li>		<li id="li_49" >
		<label class="description" for="EMERGENCY_CONTACT">Emergency Contact (not living with you) </label>
		<span>
			<input id="EMERGENCY_CONTACT_FIRST" name= "EMERGENCY_CONTACT_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.EMERGENCY_CONTACT_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="EMERGENCY_CONTACT_LAST" name= "EMERGENCY_CONTACT_LAST" class="element text" maxlength="255" size="14" value="{$user_data.EMERGENCY_CONTACT_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_50" >
		<label class="description" for="EMERGENCY_CONTACT_PHONE">Phone </label>
		<span>
			<input id="EMERGENCY_CONTACT_PHONE_1" name="EMERGENCY_CONTACT_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.EMERGENCY_CONTACT_PHONE_1}" type="text"> -
			<label for="EMERGENCY_CONTACT_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="EMERGENCY_CONTACT_PHONE_2" name="EMERGENCY_CONTACT_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.EMERGENCY_CONTACT_PHONE_2}" type="text"> -
			<label for="EMERGENCY_CONTACT_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="EMERGENCY_CONTACT_PHONE_3" name="EMERGENCY_CONTACT_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.EMERGENCY_CONTACT_PHONE_3}" type="text">
			<label for="EMERGENCY_CONTACT_PHONE_3">####</label>
		</span>
		 
		</li>
			<li class="section_break">
			<h3>I authorize Columbia Physical Therapy, Inc. P.S. to use and disclose health and medical information for the purposes of treatment, payment and health care operations. Under all circumstances I assume final responsibility for my account understanding that in the event my
account becomes delinquent, I agree to pay accrued finance charges, court costs and attorney fees. I consent to physical therapy services
prescribed by any physician. I authorize payment of medical benefits by my insurance company to Columbia Physical Therapy, Inc. PS, for
services rendered. I have received this practice’s <a href="http://www.columbiaphysicaltherapypasco.com/hippa-privacy-policy/" target="_blank">Notice of Privacy Practices</a> written in plain language. </h3>
			<p></p>
		</li>		

		<li id="li_51" >
		<label class="description" for="SIGNATURE">Signature </label>
		<div>
			<input id="SIGNATURE" name="SIGNATURE" class="element text medium" type="text" maxlength="255" value="{$user_data.SIGNATURE}" required/> 
		</div><p class="guidelines" id="guide_37"><small>Type your full name here to sign</small></p> 
		</li>

		<li id="li_52" >
		<label class="description" for="element_46">Today's Date </label>
		<span>
			<input id="TODAY_DATE_1" name="TODAY_DATE_1" class="element text" size="2" maxlength="2" value="{$user_data.TODAY_DATE_1}" type="text"> /
			<label for="TODAY_DATE_1">MM</label>
		</span>
		<span>
			<input id="TODAY_DATE_2" name="TODAY_DATE_2" class="element text" size="2" maxlength="2" value="{$user_data.TODAY_DATE_2}" type="text"> /
			<label for="TODAY_DATE_2">DD</label>
		</span>
		<span>
	 		<input id="TODAY_DATE_3" name="TODAY_DATE_3" class="element text" size="4" maxlength="4" value="{$user_data.TODAY_DATE_3}" type="text">
			<label for="TODAY_DATE_3">YYYY</label>
		</span>
	
		<span id="calendar_53">
			<img id="cal_img_53" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "TODAY_DATE_3",
			baseField    : "TODAY_DATE",
			displayArea  : "calendar_53",
			button		 : "cal_img_53",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		

		<li id="li_54" >
		<label class="description" for="OVER_18"> </label>
		<span>
			<input id="OVER_18" name="OVER_18" class="element checkbox" type="checkbox" value="Yes" required {if $user_data.OVER_18 eq 'Yes'}checked{/if}/>
<label class="choice" for="OVER_18">I Certify that I am at least 18 years of Age and am legally able to sign this medical form.</label>

		</span> 
		</li>

		<li class="section_break">
			<h3>Patient History</h3>
			<p></p>
		</li>		<li id="li_71" >
		<label class="description" for="INJURY">What is your problem or injury? </label>
		<div>
			<input id="INJURY" name="INJURY" class="element text large" type="text" maxlength="255" value="{$user_data.INJURY}"/> 
		</div> 
		</li>		<li id="INJURY_HOW" >
		<label class="description" for="INJURY_HOW">How did your problem or injury begin? </label>
		<div>
			<input id="INJURY_HOW" name="INJURY_HOW" class="element text large" type="text" maxlength="255" value="{$user_data.INJURY_HOW}" required/> 
		</div> 
		</li>		<li id="li_73" >
		<label class="description" for="INJURY_START">How long ago did it begin? </label>
		<div>
			<input id="INJURY_START" name="INJURY_START" class="element text medium" type="text" maxlength="255" value="{$user_data.INJURY_START}" required/> 
		</div> 
		</li>		<li id="li_74" >
		<label class="description" for="WORK_TYPE">What is your type of work? </label>
		<div>
			<input id="WORK_TYPE" name="WORK_TYPE" class="element text medium" type="text" maxlength="255" value="{$user_data.WORK_TYPE}" required/> 
		</div> 
		</li>		<li id="li_78" >
		<label class="description" for="WORKING_NOW">Are you working? </label>
		<span>
			<input id="WORKING_NOW_1" name="WORKING_NOW" class="element radio" type="radio" value="Y" {if $user_data.WORKING_NOW eq 'Y'}checked{/if}/>
<label class="choice" for="WORKING_NOW_1">Yes</label>
<input id="WORKING_NOW_2" name="WORKING_NOW" class="element radio" type="radio" value="N" {if $user_data.WORKING_NOW eq 'N'}checked{/if}/>
<label class="choice" for="WORKING_NOW_2">No</label>

		</span> 
		</li>		<li id="li_79" >
		<label class="description" for="NOT_WORKING_REASON">If no, is it because of your problem? </label>
		<span>
			<input id="NOT_WORKING_REASON_1" name="NOT_WORKING_REASON" class="element radio" type="radio" value="Y" {if $user_data.NOT_WORKING_REASON eq 'Y'}checked{/if}/>
<label class="choice" for="NOT_WORKING_REASON_1">Yes</label>
<input id="NOT_WORKING_REASON_2" name="NOT_WORKING_REASON" class="element radio" type="radio" value="N" {if $user_data.NOT_WORKING_REASON eq 'N'}checked{/if}/>
<label class="choice" for="NOT_WORKING_REASON_2">No</label>

		</span> 
		</li>		<li id="li_80" >
		<label class="description" for="SYMPTOM_FREE">Before this injury, were you completely free of symptoms? </label>
		<span>
			<input id="SYMPTOM_FREE_1" name="SYMPTOM_FREE" class="element radio" type="radio" value="Y" {if $user_data.SYMPTOM_FREE eq 'Y'}checked{/if}/>
<label class="choice" for="SYMPTOM_FREE_1">Yes</label>
<input id="SYMPTOM_FREE_2" name="SYMPTOM_FREE" class="element radio" type="radio" value="N" {if $user_data.SYMPTOM_FREE eq 'N'}checked{/if}/>
<label class="choice" for="SYMPTOM_FREE_2">No</label>

		</span> 
		</li>		<li id="li_81" >
		<label class="description" for="SIMILAR_SYMPTOM">Have you ever had anything similar before? </label>
		<span>
			<input id="SIMILAR_SYMPTOM_1" name="SIMILAR_SYMPTOM" class="element radio" type="radio" value="Y" {if $user_data.SIMILAR_SYMPTOM eq 'Y'}checked{/if}/>
<label class="choice" for="SIMILAR_SYMPTOM_1">Yes</label>
<input id="SIMILAR_SYMPTOM_2" name="SIMILAR_SYMPTOM" class="element radio" type="radio" value="N" {if $user_data.SIMILAR_SYMPTOM eq 'N'}checked{/if}/>
<label class="choice" for="SIMILAR_SYMPTOM_2">No</label>

		</span> 
		</li>		<li id="li_82" >
		<label class="description" for="TREATMENT">What, if any, treatments have you had for this current problem? </label>
		<span>
			<input id="TREATMENT_1" name="TREATMENT[]" class="element checkbox" type="checkbox" value="PT" {if $pt_treatment eq 'true'}checked{/if}/>
<label class="choice" for="TREATMENT_1">Physical Therapy</label>
<input id="TREATMENT_2" name="TREATMENT[]" class="element checkbox" type="checkbox" value="chiropractic" {if $chiropractic_treatment eq 'true'}checked{/if}/>
<label class="choice" for="TREATMENT_2">Chiropractic</label>
<input id="TREATMENT_3" name="TREATMENT[]" class="element checkbox" type="checkbox" value="medical" {if $medical_treatment eq 'true'}checked{/if}/>
<label class="choice" for="TREATMENT_3">Medical</label>
<input id="TREATMENT_4" name="TREATMENT[]" class="element checkbox" type="checkbox" value="other" {if $other_treatment eq 'true'}checked{/if}/>
<label class="choice" for="TREATMENT_4">Other</label>

		</span> 
		</li>		<li id="li_83" >
		<label class="description" for="EASE_PAIN">What eases your pain? </label>
		<span>
			<input id="EASE_PAIN_1" name="EASE_PAIN[]" class="element checkbox" type="checkbox" value="sit" {if $sit_ease eq 'true'}checked{/if}/>
<label class="choice" for="EASE_PAIN_1">Sitting</label>
<input id="EASE_PAIN_2" name="EASE_PAIN[]" class="element checkbox" type="checkbox" value="stand" {if $stand_ease eq 'true'}checked{/if}/>
<label class="choice" for="EASE_PAIN_2">Standing</label>
<input id="EASE_PAIN_3" name="EASE_PAIN[]" class="element checkbox" type="checkbox" value="walk" {if $walk_ease eq 'true'}checked{/if}/>
<label class="choice" for="EASE_PAIN_3">Walking</label>
<input id="EASE_PAIN_4" name="EASE_PAIN[]" class="element checkbox" type="checkbox" value="lie" {if $lie_ease eq 'true'}checked{/if}/>
<label class="choice" for="EASE_PAIN_4">Lying Down</label>

		</span> 
		</li>		<li id="PAIN_WORSE" >
		<label class="description" for="PAIN_WORSE">What makes your pain worse? </label>
		<span>
			<input id="PAIN_WORSE_1" name="PAIN_WORSE[]" class="element checkbox" type="checkbox" value="sit" {if $sit_worse eq 'true'}checked{/if}/>
<label class="choice" for="PAIN_WORSE_1">Sitting</label>
<input id="PAIN_WORSE_2" name="PAIN_WORSE[]" class="element checkbox" type="checkbox" value="stand" {if $stand_worse eq 'true'}checked{/if}/>
<label class="choice" for="PAIN_WORSE_2">Standing</label>
<input id="PAIN_WORSE_3" name="PAIN_WORSE[]" class="element checkbox" type="checkbox" value="walk" {if $walk_worse eq 'true'}checked{/if}/>
<label class="choice" for="PAIN_WORSE_3">Walking</label>
<input id="PAIN_WORSE_4" name="PAIN_WORSE[]" class="element checkbox" type="checkbox" value="lie" {if $lie_worse eq 'true'}checked{/if}/>
<label class="choice" for="PAIN_WORSE_4">Lying Down</label>

		</span> 
		</li>		<li id="li_85" >
		<label class="description" for="PINS_NEEDLES">Do you have any feelings of pins and needles or numbness? </label>
		<span>
			<input id="PINS_NEEDLES_1" name=PINS_NEEDLES" class="element radio" type="radio" value="Y" {if $user_data.PINS_NEEDLES eq 'Y'}checked{/if}/>
<label class="choice" for="PINS_NEEDLES_1">Yes</label>
<input id="PINS_NEEDLES_2" name="PINS_NEEDLES" class="element radio" type="radio" value="N" {if $user_data.PINS_NEEDLES eq 'N'}checked{/if}/>
<label class="choice" for="PINS_NEEDLES_2">No</label>

		</span> 
		</li>		<li id="OTHER_PROBLEMS" >
		<label class="description" for="OTHER_PROBLEMS">Do you have any other problems? </label>
		<span>
			<input id="OTHER_PROBLEMS_1" name="OTHER_PROBLEMS" class="element radio" type="radio" value="Y" {if $user_data.OTHER_PROBLEMS eq 'Y'}checked{/if}/>
<label class="choice" for="OTHER_PROBLEMS_1">Yes</label>
<input id="OTHER_PROBLEMS_2" name="OTHER_PROBLEMS" class="element radio" type="radio" value="N" {if $user_data.OTHER_PROBLEMS eq 'N'}checked{/if}/>
<label class="choice" for="OTHER_PROBLEMS_2">No</label>

		</span> 
		</li>		<li id="li_87" >
		<label class="description" for="MEDICATIONS">Are you taking any medications? </label>
		<span>
			<input id="MEDICATIONS_1" name="MEDICATIONS" class="element radio" type="radio" value="Y" {if $user_data.MEDICATIONS eq 'Y'}checked{/if}/>
<label class="choice" for="MEDICATIONS_1">Yes</label>
<input id="MEDICATIONS_2" name="MEDICATIONS" class="element radio" type="radio" value="N" {if $user_data.MEDICATIONS eq 'N'}checked{/if}/>
<label class="choice" for="MEDICATIONS_2">No</label>

		</span> 
		</li>		<li id="li_96" >
		<label class="description" for="MEDICATION_LIST">Please list: </label>
		<div>
			<input id="MEDICATION_LIST" name="MEDICATION_LIST" class="element text large" type="text" maxlength="255" value="{$user_data.MEDICATION_LIST}"/> 
		</div> 
		</li>		<li id="DISCOMFORT" >
		<label class="description" for="DISCOMFORT">Where are you having discomfort? </label>
		<span>
			<input id="DISCOMFORT_1" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="head" {if $head_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_1">Head</label>
<input id="DISCOMFORT_2" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="right neck" {if $right_neck_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_2">Neck- Right Side</label>
<input id="DISCOMFORT_3" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="left neck" {if $left_neck_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_3">Neck- Left Side</label>
<input id="DISCOMFORT_4" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R shoulder" {if $Rshoulder_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_4">Right Shoulder</label>
<input id="DISCOMFORT_5" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L shoulder" {if $Lshoulder_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_5">Left Shoulder</label>
<input id="DISCOMFORT_6" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R arm" {if $Rarm_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_6">Right Arm</label>
<input id="DISCOMFORT_7" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L arm" {if $Larm_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_7">Left Arm</label>
<input id="DISCOMFORT_8" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R elbow" {if $Relbow_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_8">Right Elbow</label>
<input id="DISCOMFORT_9" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L elbow" {if $Lelbow_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_9">Left Elbow</label>
<input id="DISCOMFORT_10" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R wrist" {if $Rwrist_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_10">Right Wrist</label>
<input id="DISCOMFORT_11" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L wrist" {if $Lwrist_discomfor eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_11">Left Wrist</label>
<input id="DISCOMFORT_12" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R hand" {if $rhand_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_12">Right Hand</label>
<input id="DISCOMFORT_13" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L hand" {if $lhand_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_13">Left Hand</label>
<input id="DISCOMFORT_14" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R U back" {if $ruback_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_14">Right Upper Back</label>
<input id="DISCOMFORT_15" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R M back" {if $rmback_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_15">Right Middle Back</label>
<input id="DISCOMFORT_16" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R L back" {if $rlback_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_16">Right Lower Back</label>
<input id="DISCOMFORT_17" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L U back" {if $luback_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_17">Left Upper back</label>
<input id="DISCOMFORT_18" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L M back" {if $lmback_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_18">Left Middle Back</label>
<input id="DISCOMFORT_19" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L L back" {if $llback_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_19">Left Lower Back</label>
<input id="DISCOMFORT_20" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R chest" {if $rchest_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_20">Chest- Right Side</label>
<input id="DISCOMFORT_21" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L chest" {if $lchest_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_21">Chest- Left side</label>
<input id="DISCOMFORT_22" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="M chest" {if $mchest_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_22">Chest- Middle</label>
<input id="DISCOMFORT_23" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L abdomen" {if $labdomen_discomfor eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_23">Abdomen- Left Side</label>
<input id="DISCOMFORT_24" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R abdomen" {if $rabdomen_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_24">Abdomen- Right Side</label>
<input id="DISCOMFORT_25" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="M abdomen" {if $mabdomen_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_25">Abdomen- Middle</label>
<input id="DISCOMFORT_26" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R hip" {if $rhip_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_26">Right Hip</label>
<input id="DISCOMFORT_27" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L hip" {if $lhip_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_27">Left Hip</label>
<input id="DISCOMFORT_28" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="pelvis" {if $pelvis_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_28">Pelvis</label>
<input id="DISCOMFORT_29" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R thigh" {if $rthigh_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_29">Right Thigh</label>
<input id="DISCOMFORT_30" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L thigh" {if $lthigh_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_30">Left Thigh</label>
<input id="DISCOMFORT_31" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R knee" {if $rknee_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_31">Right Knee</label>
<input id="DISCOMFORT_32" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L knee" {if $lknee_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_32">Left Knee</label>
<input id="DISCOMFORT_33" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R low leg" {if $rlowleg_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_33">Right Lower Leg</label>
<input id="DISCOMFORT_34" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L low leg" {if $llowleg_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_34">Left Lower Leg</label>
<input id="DISCOMFORT_35" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R ankle" {if $rankle_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_35">Right Ankle</label>
<input id="DISCOMFORT_36" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L ankle" {if $lankle_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_36">Left Ankle</label>
<input id="DISCOMFORT_37" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="R foot" {if $rfoot_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_37">Right Foot</label>
<input id="DISCOMFORT_38" name="DISCOMFORT[]" class="element checkbox" type="checkbox" value="L foot" {if $lfoot_discomfort eq 'true'}checked{/if}/>
<label class="choice" for="DISCOMFORT_38">Left Foot</label>

		</span> 

		<li class="section_break">
			<h2>Medical History Questionnaire</h2>
			<p></p>
		</li>		<li id="li_104" >
		<label class="description" for="AGE">What is your Age? </label>
		<div>
			<input id="AGE" name="AGE" class="element text medium" type="text" maxlength="255" value="{$user_data.AGE}"/> 
		</div> 
		</li>		<li id="li_138" >
		<label class="description" for="HAND">Right or Left Handed? </label>
		<span>
			<input id="HAND_1" name="HAND" class="element radio" type="radio" value="Right" {if $user_data.HAND eq 'Right'}checked{/if}/>
<label class="choice" for="HAND_1">Right</label>
<input id="HAND_2" name="HAND" class="element radio" type="radio" value="Left" {if $user_data.HAND eq 'Left'}checked{/if}/>
<label class="choice" for="HAND_2">Left</label>
<input id="HAND_3" name="HAND" class="element radio" type="radio" value="Ambidextrous" {if $user_data.HAND eq 'Ambi'}checked{/if}/>
<label class="choice" for="HAND_3">Ambidextrous</label>

		</span> 
		</li>		<li id="li_108" >
		<label class="description" for="OCCUPATION">What is your occupation? </label>
		<div>
			<input id="OCCUPATION" name="OCCUPATION" class="element text medium" type="text" maxlength="255" value="{$user_data.OCCUPATION}"/> 
		</div> 
		</li>		<li id="li_109" >
		<label class="description" for="LEISURE">Leisure activities: </label>
		<div>
			<input id="LEISURE" name="LEISURE" class="element text medium" type="text" maxlength="255" value="{$user_data.LEISURE}"/> 
		</div> 
		</li>		<li id="li_139" >
		<label class="description" for="HEALTH">Please rate your health: </label>
		<span>
			<input id="HEALTH_1" name="HEALTH" class="element radio" type="radio" value="excellent" {if $user_data.HEALTH eq 'excellent'}checked{/if}/>
<label class="choice" for="HEALTH_1">Excellent</label>
<input id="HEALTH_2" name="HEALTH" class="element radio" type="radio" value="good" {if $user_data.HEALTH eq 'good'}checked{/if}/>
<label class="choice" for="HEALTH_2">Good</label>
<input id="HEALTH_3" name="HEALTH" class="element radio" type="radio" value="fair" {if $user_data.HEALTH eq 'fair'}checked{/if}/>
<label class="choice" for="HEALTH_3">Fair</label>
<input id="HEALTH_4" name="HEALTH" class="element radio" type="radio" value="poor" {if $user_data.HEALTH eq 'poor'}checked{/if}/>
<label class="choice" for="HEALTH_4">Poor</label>

		</span> 
		</li>		<li id="li_140" >
		<label class="description" for="EXERCISE">Do you exercise beyond normal daily activities and chores? </label>
		<span>
			<input id="EXERCISE_1" name="EXERCISE" class="element radio" type="radio" value="Y" {if $user_data.EXERCISE eq 'Y'}checked{/if}/>
<label class="choice" for="EXERCISE_1">Yes</label>
<input id="EXERCISE_2" name="EXERCISE" class="element radio" type="radio" value="N" {if $user_data.EXERCISE eq 'N'}checked{/if}/>
<label class="choice" for="EXERCISE_2">No</label>

		</span> 
		</li>		<ul><li id="li_110" >
		<label class="description" for="EXERCISE_DESCRIPTION">If yes, please describe the exercise: </label>
		<div>
			<input id="EXERCISE_DESCRIPTION" name="EXERCISE_DESCRIPTION" class="element text medium" type="text" maxlength="255" value="{$user_data.EXERCISE_DESCRIPTION}"/> 
		</div> 
		</li>		<li id="li_111" >
		<label class="description" for="EXERCISE_FREQUENCY">On average, how many days per week do you exercise? </label>
		<div>
			<input id="EXERCISE_FREQUENCY" name="EXERCISE_FREQUENCY" class="element text small" type="text" maxlength="255" value="{$user_data.EXERCISE_FREQUENCY}"/> 
		</div> 
		</li>		<li id="li_112" >
		<label class="description" for="EXERCISE_LENGTH">How many minutes per exercise session? </label>
		<div>
			<input id="EXERCISE_LENGTH" name="EXERCISE_LENGTH" class="element text small" type="text" maxlength="255" value="{$user_data.EXERCISE_LENGTH}"/> 
		</div> 
		</li>	</ul>	<li class="section_break">
			<h3>Medical History</h3>
			<p></p>
		</li>		<li id="li_141" >
		<label class="description" for="DIAGNOSIS">Have you EVER been diagnosed as having the following condition(s)? Please check all that apply. </label>
		<span>
			<input id="DIAGNOSIS_1" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="stroke" {if $stroke_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_1">Stroke</label>
<input id="DIAGNOSIS_2" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="migraine" {if $migraine_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_2">Migraines</label>
<input id="DIAGNOSIS_3" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="high bp" {if $highbp_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_3">High Blood Pressure</label>
<input id="DIAGNOSIS_4" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="emphysema" {if $emphysema_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_4">Emphysema</label>
<input id="DIAGNOSIS_5" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="tuberculosis" {if $tuberculosis_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_5">Tuberculosis</label>
<input id="DIAGNOSIS_6" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="rh arthritis" {if $rharthritis_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_6">Rheumatoid arthritis</label>
<input id="DIAGNOSIS_7" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="kidney disease" {if $kidney_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_7">Kidney disease</label>
<input id="DIAGNOSIS_8" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="hepatitis" {if $hepatitis_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_8">Hepatitis</label>
<input id="DIAGNOSIS_9" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="thyroid" {if $thyroid_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_9">Thyroid problems</label>
<input id="DIAGNOSIS_10" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="digestive" {if $digestive_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_10">Digestive problems</label>
<input id="DIAGNOSIS_11" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="falls" {if $falls_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_11">Unexplained falls</label>
<input id="DIAGNOSIS_12" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="genetic" {if $genetic_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_12">Genetic disorders</label>
<input id="DIAGNOSIS_13" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="stomach/ulcer" {if $stomach_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_13">Stomach/ulcer problems</label>
<input id="DIAGNOSIS_14" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="developmental" {if $developmental_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_14">Developmental/Growth problems</label>
<input id="DIAGNOSIS_15" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="infections" {if $infections_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_15">Repeated infections</label>
<input id="DIAGNOSIS_16" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="chemical" {if $chemical_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_16">Chemical dependency (e.g. alcoholism)</label>
<input id="DIAGNOSIS_17" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="seizure" {if $seizure_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_17">Seizure disorders</label>
<input id="DIAGNOSIS_18" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="depression" {if $depression_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_18">Depression</label>
<input id="DIAGNOSIS_19" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="heart" {if $heart_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_19">Heart condition</label>
<input id="DIAGNOSIS_20" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="asthma" {if $asthma_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_20">Asthma</label>
<input id="DIAGNOSIS_21" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="diabetes" {if $diabetes_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_21">Diabetes/High blood sugar</label>
<input id="DIAGNOSIS_22" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="low blood sugar" {if $lowbloodsugar_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_22">Low blood sugar</label>
<input id="DIAGNOSIS_23" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="other arthritis" {if $otherarthritis_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_23">Other arthritic disease</label>
<input id="DIAGNOSIS_24" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="circulatory" {if $circulatory_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_24">Cirulatory problems</label>
<input id="DIAGNOSIS_25" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="skin" {if $skin_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_25">Skin problems</label>
<input id="DIAGNOSIS_26" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="bowel" {if $bowel_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_26">Bowel or bladder problems</label>
<input id="DIAGNOSIS_27" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="cognitive" {if $cognitive_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_27">Cognitive dysfunction</label>
<input id="DIAGNOSIS_28" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="ms" {if $ms_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_28">Multiple sclerosis</label>
<input id="DIAGNOSIS_29" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="osteoporosis" {if $osteoporosis_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_29">Osteoporosis</label>
<input id="DIAGNOSIS_30" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="anemia" {if $anemia_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_30">Anemia</label>
<input id="DIAGNOSIS_31" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="allergies" {if $allergies_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_31">Allergies</label>
<input id="DIAGNOSIS_32" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="cancer" {if $cancer_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_32">Cancer</label>
<input id="DIAGNOSIS_33" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="other neuro" {if $otherneuro_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_33">Other neurological problems</label>
<input id="DIAGNOSIS_34" name="DIAGNOSIS[]" class="element checkbox" type="checkbox" value="other" {if $other_diagnosis eq 'true'}checked{/if}/>
<label class="choice" for="DIAGNOSIS_34">Other</label>

		</span> 
		</li>		<li id="li_114" >
		<label class="description" for="ALLERGIES"> If you have been diagnosed with allergies, please specify: </label>
		<div>
			<input id="ALLERGIES" name="ALLERGIES" class="element text medium" type="text" maxlength="255" value="{$user_data.ALLERGIES}"/> 
		</div> 
		</li>		<li id="li_115" >
		<label class="description" for="CANCER">If you have been diagnosed with cancer, please specify: </label>
		<div>
			<input id="CANCER" name="CANCER" class="element text medium" type="text" maxlength="255" value="{$user_data.CANCER}"/> 
		</div> 
		</li>		<li id="li_116" >
		<label class="description" for="NEURO_PROBLEMS">If you have been diagnosed with other neurological problems, please specify: </label>
		<div>
			<input id="NEURO_PROBLEMS" name="NEURO_PROBLEMS" class="element text medium" type="text" maxlength="255" value="{$user_data.NEURO_PROBLEMS}"/> 
		</div> 
		</li>		<li id="li_117" >
		<label class="description" for="OTHER_PROBLEMS_1">If you have been diagnosed with any other problems, please specify: </label>
		<div>
			<input id="OTHER_PROBLEMS" name="OTHER_PROBLEMS" class="element text medium" type="text" maxlength="255" value="{$user_data.OTHER_PROBLEMS_1}"/> 
		</div> 
		</li>		<li id="li_149" >
		<label class="description" for="PREGNANT">Are you pregnant, or think you might be pregnant? </label>
		<span>
			<input id="PREGNANT_1" name="PREGNANT" class="element radio" type="radio" value="Y" {if $user_data.PREGNANT eq 'Y'}checked{/if}/>
<label class="choice" for="PREGNANT_1">Yes</label>
<input id="PREGNANT_2" name="PREGNANT" class="element radio" type="radio" value="N" {if $user_data.PREGNANT eq 'Y'}checked{/if}/>
<label class="choice" for="PREGNANT_2">No</label>

		</span> 
		</li>		<li id="li_142" >
		<label class="description" for="SYMPTOMS">Within the last year, have you had any of the following symptoms? 
Please check all that apply </label>
		<span>
			<input id="SYMPTOMS_1" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="nausea" {if $nausea_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_1">Nausea/vomiting</label>
<input id="SYMPTOMS_2" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="dizzy" {if $dizzy_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_2">Dizziness</label>
<input id="SYMPTOMS_3" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="fever" {if $fever_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_3">Fever</label>
<input id="SYMPTOMS_4" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="weight loss" {if $weight_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_4">Unexplained weight loss/gain</label>
<input id="SYMPTOMS_5" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="night sweat" {if $nightsweat_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_5">Night sweats</label>
<input id="SYMPTOMS_6" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="diarrhea" {if $diarrhea_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_6">Diarrhea/Constipation</label>
<input id="SYMPTOMS_7" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="sweat" {if $sweat_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_7">Unexplained sweating</label>
<input id="SYMPTOMS_8" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="fatigue" {if $fatigue_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_8">Unexplained fatigue</label>
<input id="SYMPTOMS_9" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="pale" {if $pale_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_9">Unexplained paleness</label>
<input id="SYMPTOMS_10" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="chest pain" {if $chestpain_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_10">Chest pain</label>
<input id="SYMPTOMS_11" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="lost balance" {if $balance_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_11">Loss of balance</label>
<input id="SYMPTOMS_12" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="hoarse" {if $hoarse_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_12">Hoarseness</label>
<input id="SYMPTOMS_13" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="tremors" {if $tremors_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_13">Tremors</label>
<input id="SYMPTOMS_14" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="infection" {if $infection_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_14">Infection</label>
<input id="SYMPTOMS_15" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="coordination" {if $coordination_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_15">Coordination difficulty</label>
<input id="SYMPTOMS_16" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="appetite" {if $appetite_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_16">Loss of appetite</label>
<input id="SYMPTOMS_17" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="swallow" {if $swallow_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_17">Difficulty swallowing</label>
<input id="SYMPTOMS_18" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="vision" {if $vision_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_18">Vision problems</label>
<input id="SYMPTOMS_19" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="cough" {if $cough_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_19">Cough</label>
<input id="SYMPTOMS_20" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="difficulty walking" {if $walking_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_20">Difficulty walking</label>
<input id="SYMPTOMS_21" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="headache" {if $headache_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_21">Headaches</label>
<input id="SYMPTOMS_22" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="difficulty sleeping" {if $sleeping_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_22">Difficulty sleeping</label>
<input id="SYMPTOMS_23" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="chills" {if $chills_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_23">Chills</label>
<input id="SYMPTOMS_24" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="blackout" {if $blackout_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_24">Blackout</label>
<input id="SYMPTOMS_25" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="short breath" {if $shortbreath_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_25">Shortness of breath</label>
<input id="SYMPTOMS_26" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="joint pain/swelling" {if $joint_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_26">Joint pain or swelling</label>
<input id="SYMPTOMS_27" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="pain at night" {if $nightpain_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_27">Pain at night</label>
<input id="SYMPTOMS_28" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="hearing" {if $hearing_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_28">Hearing problems</label>
<input id="SYMPTOMS_29" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="heart palpitations" {if $palpitations_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_29">Heart palpitations</label>
<input id="SYMPTOMS_30" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="weakness in limbs" {if $weaklimbs_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_30">Weakness in limbs</label>
<input id="SYMPTOMS_31" name="SYMPTOMS[]" class="element checkbox" type="checkbox" value="urinary problems" {if $urinary_symptoms eq 'true'}checked{/if}/>
<label class="choice" for="SYMPTOMS_31">Urinary problems</label>

		</span> 
		</li>		<li class="section_break">
			<h3>Surgical History</h3>
			<p></p>
		</li>		<li id="li_119" >
		<label class="description" for="SURGERIES_DATE_1">Please list all surgeries/hospitalizations including dates and reasons.<br/>
Date </label>
		<span>
			<input id="SURGERIES_DATE_1_1" name="SURGERIES_DATE_1_1" class="element text" size="2" maxlength="2" value="{$user_data.SURGERIES_DATE_1_1}" type="text"> /
			<label for="SURGERIES_DATE_1_1">MM</label>
		</span>
		<span>
			<input id="SURGERIES_DATE_1_2" name="SURGERIES_DATE_1_2" class="element text" size="2" maxlength="2" value="{$user_data.SURGERIES_DATE_1_2}" type="text"> /
			<label for="SURGERIES_DATE_1_2">DD</label>
		</span>
		<span>
	 		<input id="SURGERIES_DATE_1_3" name="SURGERIES_DATE_1_3" class="element text" size="4" maxlength="4" value="{$user_data.SURGERIES_DATE_1_3}" type="text">
			<label for="SURGERIES_DATE_1_3">YYYY</label>
		</span>
	
		<span id="calendar_119">
			<img id="cal_img_119" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "SURGERIES_DATE_1_3",
			baseField    : "SURGERIES_DATE_1",
			displayArea  : "calendar_119",
			button		 : "cal_img_119",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_120" >
		<label class="description" for="SURGERY_REASON_1">Surgery/hospitalization/reason </label>
		<div>
			<input id="SURGERY_REASON_1" name="SURGERY_REASON_1" class="element text medium" type="text" maxlength="255" value="{$user_data.SURGERY_REASON_1}"/> 
		</div> 
		</li>		<li id="li_121" >
		<label class="description" for="SURGERIES_DATE_2">Date </label>
		<span>
			<input id="SURGERIES_DATE_2_1" name="SURGERIES_DATE_2_1" class="element text" size="2" maxlength="2" value="{$user_data.SURGERIES_DATE_2_1}" type="text"> /
			<label for="SURGERIES_DATE_2_1">MM</label>
		</span>
		<span>
			<input id="SURGERIES_DATE_2_2" name="SURGERIES_DATE_2_2" class="element text" size="2" maxlength="2" value="{$user_data.SURGERIES_DATE_2_2}" type="text"> /
			<label for="SURGERIES_DATE_2_2">DD</label>
		</span>
		<span>
	 		<input id="SURGERIES_DATE_2_3" name="SURGERIES_DATE_2_3" class="element text" size="4" maxlength="4" value="{$user_data.SURGERIES_DATE_2_3}" type="text">
			<label for="SURGERIES_DATE_2_3">YYYY</label>
		</span>
	
		<span id="calendar_121">
			<img id="cal_img_121" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "SURGERIES_DATE_2_3",
			baseField    : "SURGERIES_DATE_2",
			displayArea  : "calendar_121",
			button		 : "cal_img_121",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_122" >
		<label class="description" for="SURGERY_REASON_2">Surgery/hospitalization/reason </label>
		<div>
			<input id="SURGERY_REASON_2" name="SURGERY_REASON_2" class="element text medium" type="text" maxlength="255" value="{$user_data.SURGERY_REASON_2}"/> 
		</div> 
		</li>		<li id="li_123" >
		<label class="description" for="SURGERIES_DATE_3">Date </label>
		<span>
			<input id="SURGERIES_DATE_3_1" name="SURGERIES_DATE_3_1" class="element text" size="2" maxlength="2" value="{$user_data.SURGERIES_DATE_3_1}" type="text"> /
			<label for="SURGERIES_DATE_3_1">MM</label>
		</span>
		<span>
			<input id="SURGERIES_DATE_3_2" name="SURGERIES_DATE_3_2" class="element text" size="2" maxlength="2" value="{$user_data.SURGERIES_DATE_3_2}" type="text"> /
			<label for="SURGERIES_DATE_3_2">DD</label>
		</span>
		<span>
	 		<input id="SURGERIES_DATE_3_3" name="SURGERIES_DATE_3_3" class="element text" size="4" maxlength="4" value="{$user_data.SURGERIES_DATE_3_3}" type="text">
			<label for="SURGERIES_DATE_3_3">YYYY</label>
		</span>
	
		<span id="calendar_123">
			<img id="cal_img_123" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "SURGERIES_DATE_3_3",
			baseField    : "SURGERIES_DATE_3",
			displayArea  : "calendar_123",
			button		 : "cal_img_123",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_124" >
		<label class="description" for="SURGERY_REASON_3">Surgery/hospitalization/reason </label>
		<div>
			<input id="SURGERY_REASON_3" name="SURGERY_REASON_3" class="element text medium" type="text" maxlength="255" value="{$user_data.SURGERY_REASON_3}"/> 
		</div> 
		</li>		<li id="li_125" >
		<label class="description" for="MUSCULOSKELETAL_INJURIES_1">Are you being or have you been treated for musculoskeletal injuries (fracture, dislocations, repetitive strains, joint instability)? <br/>
If so, please state:<br/>
Date </label>
		<span>
			<input id="MUSCULOSKELETAL_INJURIES_1_1" name="MUSCULOSKELETAL_INJURIES_1_1" class="element text" size="2" maxlength="2" value="{$user_data.MUSCULOSKELETAL_INJURIES_1_1}" type="text"> /
			<label for="MUSCULOSKELETAL_INJURIES_1_1">MM</label>
		</span>
		<span>
			<input id="MUSCULOSKELETAL_INJURIES_1_2" name="MUSCULOSKELETAL_INJURIES_1_2" class="element text" size="2" maxlength="2" value="{$user_data.MUSCULOSKELETAL_INJURIES_1_2}" type="text"> /
			<label for="MUSCULOSKELETAL_INJURIES_1_2">DD</label>
		</span>
		<span>
	 		<input id="MUSCULOSKELETAL_INJURIES_1_3" name="MUSCULOSKELETAL_INJURIES_1_3" class="element text" size="4" maxlength="4" value="{$user_data.MUSCULOSKELETAL_INJURIES_1_3}" type="text">
			<label for="MUSCULOSKELETAL_INJURIES_1_3">YYYY</label>
		</span>
	
		<span id="calendar_125">
			<img id="cal_img_125" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "MUSCULOSKELETAL_INJURIES_1_3",
			baseField    : "MUSCULOSKELETAL_INJURIES_1",
			displayArea  : "calendar_125",
			button		 : "cal_img_125",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_126" >
		<label class="description" for="INJURY_1">Injury </label>
		<div>
			<input id="INJURY_1" name="INJURY_1" class="element text medium" type="text" maxlength="255" value="{$user_data.INJURY_1}"/> 
		</div> 
		</li>		<li id="li_127" >
		<label class="description" for="MUSCULOSKELETAL_INJURIES_2">Date </label>
		<span>
			<input id="MUSCULOSKELETAL_INJURIES_2_1" name="MUSCULOSKELETAL_INJURIES_2_1" class="element text" size="2" maxlength="2" value="{$user_data.MUSCULOSKELETAL_INJURIES_2_1}" type="text"> /
			<label for="MUSCULOSKELETAL_INJURIES_2_1">MM</label>
		</span>
		<span>
			<input id="MUSCULOSKELETAL_INJURIES_2_2" name="MUSCULOSKELETAL_INJURIES_2_2" class="element text" size="2" maxlength="2" value="{$user_data.MUSCULOSKELETAL_INJURIES_2_2}" type="text"> /
			<label for="MUSCULOSKELETAL_INJURIES_2_2">DD</label>
		</span>
		<span>
	 		<input id="MUSCULOSKELETAL_INJURIES_2_3" name="MUSCULOSKELETAL_INJURIES_2_3" class="element text" size="4" maxlength="4" value="{$user_data.MUSCULOSKELETAL_INJURIES_2_3}" type="text">
			<label for="MUSCULOSKELETAL_INJURIES_2_3">YYYY</label>
		</span>
	
		<span id="calendar_55">
			<img id="cal_img_55" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "MUSCULOSKELETAL_INJURIES_2_3",
			baseField    : "MUSCULOSKELETAL_INJURIES_2",
			displayArea  : "calendar_55",
			button		 : "cal_img_55",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_128" >
		<label class="description" for="INJURY_2">Injury </label>
		<div>
			<input id="INJURY_2" name="INJURY_2" class="element text medium" type="text" maxlength="255" value="{$user_data.INJURY_2}"/> 
		</div> 
		</li>		<li id="li_129" >
		<label class="description" for="PRESCRIPTIONS">Please list any PRESCRIPTION medications you are currently taking (including pills, injections, patches, etc.) </label>
		<div>
			<input id="PRESCRIPTIONS" name="PRESCRIPTIONS" class="element text medium" type="text" maxlength="255" value="{$user_data.PRESCRIPTIONS}"/> 
		</div> 
		</li>		<li id="li_130" >
		<label class="description" for="OTC">Please list any OVER-THE-COUNTER MEDICATIONS you are taking: </label>
		<div>
			<input id="OTC" name="OTC" class="element text medium" type="text" maxlength="255" value="{$user_data.OTC}"/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Family History</h3>
			<p></p>
		</li>		<li id="li_143" >
		<label class="description" for="FAMILY">Has anyone in your family (parents, sisters, brothers, grandparents) ever been treated for any of the following?
Please check all that apply </label>
		<span>
			<input id="FAMILY_1" name="FAMILY[]" class="element checkbox" type="checkbox" value="stroke" {if $stroke_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_1">Stroke</label>
<input id="FAMILY_2" name="FAMILY[]" class="element checkbox" type="checkbox" value="parkinsons" {if $parkinsons_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_2">Parkinson's disease</label>
<input id="FAMILY_3" name="FAMILY[]" class="element checkbox" type="checkbox" value="mental illnes" {if $mental_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_3">Mental illnes</label>
<input id="FAMILY_4" name="FAMILY[]" class="element checkbox" type="checkbox" value="high bp" {if $highbp_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_4">High blood pressure</label>
<input id="FAMILY_5" name="FAMILY[]" class="element checkbox" type="checkbox" value="breathing problems" {if $breathing_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_5">Breathing problems</label>
<input id="FAMILY_6" name="FAMILY[]" class="element checkbox" type="checkbox" value="arthritis" {if $arthritis_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_6">Arthritic disease</label>
<input id="FAMILY_7" name="FAMILY[]" class="element checkbox" type="checkbox" value="anemia" {if $anemia_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_7">Anemia</label>
<input id="FAMILY_8" name="FAMILY[]" class="element checkbox" type="checkbox" value="thyroid" {if $thyroid_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_8">Thyroid problems</label>
<input id="FAMILY_9" name="FAMILY[]" class="element checkbox" type="checkbox" value="learning disability" {if $learning_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_9">Learning disabilities</label>
<input id="FAMILY_10" name="FAMILY[]" class="element checkbox" type="checkbox" value="genetic" {if $genetic_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_10">Genetic disorders</label>
<input id="FAMILY_11" name="FAMILY[]" class="element checkbox" type="checkbox" value="chemical dependency" {if $chemical_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_11">Chemical dependency (e.g. alcoholism)</label>
<input id="FAMILY_12" name="FAMILY[]" class="element checkbox" type="checkbox" value="seizure" {if $seizure_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_12">Seizure disorder</label>
<input id="FAMILY_13" name="FAMILY[]" class="element checkbox" type="checkbox" value="ms" {if $ms_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_13">Multiple sclerosis</label>
<input id="FAMILY_14" name="FAMILY[]" class="element checkbox" type="checkbox" value="cancer" {if $cancer_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_14">Cancer</label>
<input id="FAMILY_15" name="FAMILY[]" class="element checkbox" type="checkbox" value="heart condition" {if $heart_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_15">Heart condition</label>
<input id="FAMILY_16" name="FAMILY[]" class="element checkbox" type="checkbox" value="diabetes" {if $diabetes_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_16">Diabetes</label>
<input id="FAMILY_17" name="FAMILY[]" class="element checkbox" type="checkbox" value="kidney disease" {if $kidney_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_17">Kidney disease</label>
<input id="FAMILY_18" name="FAMILY[]" class="element checkbox" type="checkbox" value="vascular problems" {if $vascular_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_18">Vascular problems</label>
<input id="FAMILY_19" name="FAMILY[]" class="element checkbox" type="checkbox" value="skin problems" {if $skin_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_19">Skin problems</label>
<input id="FAMILY_20" name="FAMILY[]" class="element checkbox" type="checkbox" value="cognitive" {if $cognitive_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_20">Cognitive dysfunction</label>
<input id="FAMILY_21" name="FAMILY[]" class="element checkbox" type="checkbox" value="other neuro problems" {if $otherneuro_family eq 'true'}checked{/if}/>
<label class="choice" for="FAMILY_21">Other neurological problems</label>

		</span> 
		</li>		<li id="li_132" >
		<label class="description" for="FAMILY_OTHER_NEURO">If anyone in your family has had other neurological problems, please specify: </label>
		<div>
			<input id="FAMILY_OTHER_NEURO" name="FAMILY_OTHER_NEURO" class="element text medium" type="text" maxlength="255" value="{$user_data.FAMILY_OTHER_NEURO}"/> 
		</div> 
		</li>		<li id="li_133" >
		<label class="description" for="CAFFEINE">How much caffeinated coffee or other caffeinated beverages do you drink per day? (Number of cups/cans/bottles) </label>
		<div>
			<input id="CAFFEINE" name="CAFFEINE" class="element text small" type="text" maxlength="255" value="{$user_data.CAFFEINE}"/> 
		</div> 
		</li>		<li id="li_144" >
		<label class="description" for="SMOKE">Do you Smoke? </label>
		<span>
			<input id="SMOKE_1" name="SMOKE" class="element radio" type="radio" value="Y" {if $user_data.SMOKE eq 'Y'}checked{/if}/>
<label class="choice" for="SMOKE_1">Yes</label>
<input id="SMOKE_2" name="SMOKE" class="element radio" type="radio" value="N" {if $user_data.SMOKE eq 'N'}checked{/if}/>
<label class="choice" for="SMOKE_2">No</label>

		</span> 
		</li>		<li id="li_134" >
		<label class="description" for="SMOKE_PACKS">If yes, how many packs per day? </label>
		<div>
			<input id="SMOKE_PACKS" name="SMOKE_PACKS" class="element text small" type="text" maxlength="255" value="{$user_data.SMOKE_PACKS}"/> 
		</div> 
		</li>		<li id="li_145" >
		<label class="description" for="ALCOHOL">Do you drink alcohol? </label>
		<span>
			<input id="ALCOHOL_1" name="ALCOHOL" class="element radio" type="radio" value="Y" {if $user_data.ALCOHOL eq 'Y'}checked{/if}/>
<label class="choice" for="ALCOHOL_1">Yes</label>
<input id="ALCOHOL_2" name="ALCOHOL" class="element radio" type="radio" value="N" {if $user_data.ALCOHOL eq 'Y'}checked{/if}/>
<label class="choice" for="ALCOHOL_2">No</label>

		</span> 
		</li>		<li id="li_135" >
		<label class="description" for="ALCOHOL_DAYS">If yes, how many days per week do you drink? </label>
		<div>
			<input id="ALCOHOL_DAYS" name="ALCOHOL_DAYS" class="element text small" type="text" maxlength="255" value="{$user_data.ALCOHOL_DAYS}"/> 
		</div> 
		</li>		<li id="li_136" >
		<label class="description" for="ALCOHOL_NUMBER">If yes, how many drinks per sitting? 
Note: one beer, or one glass of wine equals 1 drink </label>
		<div>
			<input id="ALCOHOL_NUMBER" name="ALCOHOL_NUMBER" class="element text small" type="text" maxlength="255" value="{$user_data.ALCOHOL_NUMBER}"/> 
		</div> 
		</li>		<li id="li_137" >
		<label class="description" for="MARIJUANA">If you use marijuana or other substances, how often? </label>
		<div>
			<input id="MARIJUANA" name="MARIJUANA" class="element text small" type="text" maxlength="255" value="{$user_data.MARIJUANA}" type="text"> days/week 
		</div> 
		</li>		<li class="section_break">
			<h2>Please carefully read the following:</h2>
			<p></p>
		</li>		<li id="li_150" >
		<div style="overflow:auto; height: 200px; width: 155%; padding: 8px; box-shadow: -1px 2px 2px gray; border-style: solid; border-width: 1px; border-color: gray;">
			<p>
			Welcome to Benton City Physical Therapy!</p> <p>Thank you for choosing  Benton City Physical Therapy for your physical and occupational therapy care!</p> <p>Our goal is to provide you with the highest quality care in a professional and caring atmosphere.
			</p>
			<p>
			We encourage you to take and active role in your recovery process. Your treatment will be tailored to your specific needs; however, open, honest communication is the only way this will happen effectively. If you have questions concerning your diagnosis or are uncomfortable with any part of your treatment, please let us know. We are open to feedback and will  make any necessary changes to make your recovery process as pleasant as possible. If you have any personal goals you would like to accomplish or specific activities you would like to return to, we would like to incorporate them into your treatment goals as well. 
			</p>
			<p>
			We request that you give us 24 hours notice when you are unable to attend your scheduled  treatment session. This courteous act will allow another client time, from our waiting list, to be seen in the open treatment spot. We understand that unavoidable conflicts may occasionally occur.
			</p>
			<p>
			Please understand that you are responsible to know your insurance benefits and if a co-pay is required.
			</p>
			<p>
			Again, if you ever have any questions or concerns, we are here for you. We hope to exceeed your expectations, here, at Benton City Physical Therapy and are pleased to work with you on a speedy recovery. 
			</p>
		</div> 
		</li>
		</li>
		<li> </li>
		<li> </li>
		<li id="li_151" >
		<label class="description" for="WELCOME_SIGNATURE">I have read and understand the above information. I will ask for clarification if I have any questions concerning my treatment and will take responsibilityfor my recovery progress and for knowing my insurance benefits and co-pay. </label><br/>
		<div>
			<input id="WELCOME_SIGNATURE" name="WELCOME_SIGNATURE" class="element text medium" type="text" maxlength="255" value="{$user_data.WELCOME_SIGNATURE}" required/> 
			<label for="WELCOME_SIGNATURE">First and last name</label>
		</div> 
		</li>

		<li id="li_152" >
		<label class="description" for="element_46">Today's Date </label>
		<span>
			<input id="WELCOME_DATE_1" name="WELCOME_DATE_1" class="element text" size="2" maxlength="2" value="{$user_data.WELCOME_DATE_1}" type="text"> /
			<label for="WELCOME_DATE_1">MM</label>
		</span>
		<span>
			<input id="WELCOME_DATE_2" name="WELCOME_DATE_2" class="element text" size="2" maxlength="2" value="{$user_data.WELCOME_DATE_2}" type="text"> /
			<label for="WELCOME_DATE_2">DD</label>
		</span>
		<span>
	 		<input id="WELCOME_DATE_3" name="WELCOME_DATE_3" class="element text" size="4" maxlength="4" value="{$user_data.WELCOME_DATE_3}" type="text">
			<label for="WELCOME_DATE_3">YYYY</label>
		</span>
	
		<span id="calendar_54">
			<img id="cal_img_54" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "WELCOME_DATE_3",
			baseField    : "WELCOME_DATE",
			displayArea  : "calendar_54",
			button		 : "cal_img_54",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>	
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1008734" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
		
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="../bottom.png" alt="">
	</body>
</html>