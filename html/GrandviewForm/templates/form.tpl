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
		<label class="description" for="PHONE">Home Phone </label>
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
		 
		</li>		<li id="li_3" >
		<label class="description" for="CELL_PHONE">Cell Phone </label>
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
		</li>		<li id="li_54" >
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
		<label class="description" for="SPOUSE_HOME_PHONE">Home Phone </label>
		<span>
			<input id="SPOUSE_HOME_PHONE_1" name="SPOUSE_HOME_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.SPOUSE_HOME_PHONE_1}" type="text"> -
			<label for="SPOUSE_HOME_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="SPOUSE_HOME_PHONE_2" name="SPOUSE_HOME_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.SPOUSE_HOME_PHONE_2}" type="text"> -
			<label for="SPOUSE_HOME_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="SPOUSE_HOME_PHONE_3" name="SPOUSE_HOME_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.SPOUSE_HOME_PHONE_3}" type="text">
			<label for="SPOUSE_HOME_PHONE_3">####</label>
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
		 
		</li>		<li id="li_60" >
		<label class="description" for="SPOUSE_DOB">Date of Birth </label>
		<span>
			<input id="SPOUSE_DOB_1" name="SPOUSE_DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.SPOUSE_DOB_1}" type="text"> /
			<label for="SPOUSE_DOB_1">MM</label>
		</span>
		<span>
			<input id="SPOUSE_DOB_2" name="SPOUSE_DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.SPOUSE_DOB_2}" type="text"> /
			<label for="SPOUSE_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="SPOUSE_DOB_3" name="SPOUSE_DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.SPOUSE_DOB_3}" type="text">
			<label for="SPOUSE_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_60">
			<img id="cal_img_60" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "SPOUSE_DOB_3",
			baseField    : "SPOUSE_DOB",
			displayArea  : "calendar_60",
			button		 : "cal_img_60",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
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
	
		<span id="calendar_22">
			<img id="cal_img_22" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "MOTHER_DOB_3",
			baseField    : "MOTHER_DOB",
			displayArea  : "calendar_22",
			button		 : "cal_img_22",
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
		<label class="description" for="MOTHER_EMPLOYER_PHONE">Employer's Phone </label>
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
	
		<span id="calendar_28">
			<img id="cal_img_28" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "FATHER_DOB_3",
			baseField    : "FATHER_DOB",
			displayArea  : "calendar_28",
			button		 : "cal_img_28",
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
		<label class="description" for="FATHER_EMPLOYER_PHONE">Employer's Phone </label>
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
		</li>		<li id="li_61" >
		<label class="description" for="INSURANCE_PHONE">Insurance carrier's Phone </label>
		<span>
			<input id="INSURANCE_PHONE_1" name="INSURANCE_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.INSURANCE_PHONE_1}" type="text"> -
			<label for="INSURANCE_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="INSURANCE_PHONE_2" name="INSURANCE_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.INSURANCE_PHONE_2}" type="text"> -
			<label for="INSURANCE_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="INSURANCE_PHONE_3" name="INSURANCE_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.INSURANCE_PHONE_3}" type="text">
			<label for="INSURANCE_PHONE_3">####</label>
		</span>
		 
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
		</li>		<li id="li_36" >
		<label class="description" for="PI_SUBSCRIBER_EMPLOYER">Employer Name </label>
		<div>
			<input id="PI_SUBSCRIBER_EMPLOYER" name="PI_SUBSCRIBER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.PI_SUBSCRIBER_EMPLOYER}"/> 
		</div> 
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
		</li>		<li id="li_39" >
		<label class="description" for="PI_SUBSCRIBER_DOB">Date of Birth </label>
		<span>
			<input id="PI_SUBSCRIBER_DOB_1" name="PI_SUBSCRIBER_DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.PI_SUBSCRIBER_DOB_1}" type="text"> /
			<label for="PI_SUBSCRIBER_DOB_1">MM</label>
		</span>
		<span>
			<input id="PI_SUBSCRIBER_DOB_2" name="PI_SUBSCRIBER_DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.PI_SUBSCRIBER_DOB_2}" type="text"> /
			<label for="PI_SUBSCRIBER_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="PI_SUBSCRIBER_DOB_3" name="PI_SUBSCRIBER_DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.PI_SUBSCRIBER_DOB_3}" type="text">
			<label for="PI_SUBSCRIBER_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_39">
			<img id="cal_img_39" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "PI_SUBSCRIBER_DOB_3",
			baseField    : "PI_SUBSCRIBER_DOB",
			displayArea  : "calendar_39",
			button		 : "cal_img_39",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_63" >
		<label class="description" for="PI_SUBSCRIBER_SSN">S.S. Number </label>
		<div>
			<input id="PI_SUBSCRIBER_SSN" name="PI_SUBSCRIBER_SSN" class="element text medium" type="text" maxlength="255" value="{$user_data.PI_SUBSCRIBER_SSN}"/> 
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
		</li>		<li id="li_62" >
		<label class="description" for="SECONDARY_INSURANCE_PHONE">Secondary Insurance carrier's Phone </label>
		<span>
			<input id="SECONDARY_INSURANCE_PHONE_1" name="SECONDARY_INSURANCE_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.SECONDARY_INSURANCE_PHONE_1}" type="text"> -
			<label for="SECONDARY_INSURANCE_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="SECONDARY_INSURANCE_PHONE_2" name="SECONDARY_INSURANCE_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.SECONDARY_INSURANCE_PHONE_2}" type="text"> -
			<label for="SECONDARY_INSURANCE_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="SECONDARY_INSURANCE_PHONE_3" name="SECONDARY_INSURANCE_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.SECONDARY_INSURANCE_PHONE_3}" type="text">
			<label for="SECONDARY_INSURANCE_PHONE_3">####</label>
		</span>
		 
		</li>				<li id="li_41" >
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
		</li>		<li id="li_43" >
		<label class="description" for="SI_SUBSCRIBER_EMPLOYER">Employer Name </label>
		<div>
			<input id="SI_SUBSCRIBER_EMPLOYER" name="SI_SUBSCRIBER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.SI_SUBSCRIBER_EMPLOYER}"/> 
		</div> 
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
		</li>		<li id="li_46" >
		<label class="description" for="SI_SUBSCRIBER_DOB">Date of Birth </label>
		<span>
			<input id="SI_SUBSCRIBER_DOB_1" name="SI_SUBSCRIBER_DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.SI_SUBSCRIBER_DOB_1}" type="text"> /
			<label for="SI_SUBSCRIBER_DOB_1">MM</label>
		</span>
		<span>
			<input id="SI_SUBSCRIBER_DOB_2" name="SI_SUBSCRIBER_DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.SI_SUBSCRIBER_DOB_2}" type="text"> /
			<label for="SI_SUBSCRIBER_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="SI_SUBSCRIBER_DOB_3" name="SI_SUBSCRIBER_DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.SI_SUBSCRIBER_DOB_3}" type="text">
			<label for="SI_SUBSCRIBER_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_46">
			<img id="cal_img_46" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "SI_SUBSCRIBER_DOB_3",
			baseField    : "SI_SUBSCRIBER_DOB",
			displayArea  : "calendar_46",
			button		 : "cal_img_46",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		<li id="li_64" >
		<label class="description" for="SI_SUBSCRIBER_SSN">S.S. Number </label>
		<div>
			<input id="SI_SUBSCRIBER_SSN" name="SI_SUBSCRIBER_SSN" class="element text medium" type="text" maxlength="255" value="{$user_data.SI_SUBSCRIBER_SSN}"/> 
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
			<h3>I authorize Grandview Physical Therapy, Inc. P.S. to use and disclose health and medical information for the purposes of treatment, payment and health care operations. Under all circumstances I assume final responsibility for my account understanding that in the event my account becomes delinquent, I agree to pay accrued finance charges, court costs and attorney fees. I consent to physical therapy services prescribed by any physician. I authorize payment of medical benefits by my insurance company to Columbia Physical Therapy, Inc. PS, for services rendered. I have received this practice’s <a href="http://www.grandviewphysicaltherapist.com/hipaa-privacy-policy/" target="_blank">Notice of Privacy Practices</a> written in plain language. </h3>
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
			<h3>Authorization for Release of Information: 

I authorize release of medical information to the person(s) named below:</h3>
			<p></p>
		</li>		

		<li id="li_97" >
		<label class="description" for="ROI"> </label>
		<span>
			<input id="ALL" name="ROI" class="element checkbox" type="checkbox" value="All" {if $user_data.ROI eq 'All'}checked{/if}/>
<label class="choice" for="ALL">All Medical And Billing Information</label>
<input id="APPOINTMENT" name="ROI" class="element checkbox" type="checkbox" value="Appointment" {if $user_data.ROI eq 'Appointment'}checked{/if}/>
<label class="choice" for="APPOINTMENT">Appointment Information Only</label>

		</span> 
		</li>		

		<li id="li_90" >
		<label class="description" for="element_90">Name </label>
		<span>
			<input id="ROI_PERSON_1_FIRST" name= "ROI_PERSON_1_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.ROI_PERSON_1_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="ROI_PERSON_1_LAST" name= "ROI_PERSON_1_LAST" class="element text" maxlength="255" size="14" value="{$user_data.ROI_PERSON_1_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		

		<li id="li_91" >
		<label class="description" for="element_91">Relationship </label>
		<div>
			<input id="ROI_PERSON_1_RELATIONSHIP" name="ROI_PERSON_1_RELATIONSHIP" class="element text medium" type="text" maxlength="255" value="{$user_data.ROI_PERSON_1_RELATIONSHIP}"/> 
		</div> 
		</li>		

		<li id="li_92" >
		<label class="description" for="element_92">Name </label>
		<span>
			<input id="ROI_PERSON_2_FIRST" name= "ROI_PERSON_2_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.ROI_PERSON_2_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="ROI_PERSON_2_LAST" name= "ROI_PERSON_2_LAST" class="element text" maxlength="255" size="14" value="{$user_data.ROI_PERSON_2_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		

		<li id="li_93" >
		<label class="description" for="element_93">Relationship </label>
		<div>
			<input id="ROI_PERSON_2_RELATIONSHIP" name="ROI_PERSON_2_RELATIONSHIP" class="element text medium" type="text" maxlength="255" value="{$user_data.ROI_PERSON_2_RELATIONSHIP}"/> 
		</div> 
		</li>	
		<li id="li_94" >
		<label class="description" for="element_94">Name </label>
		<span>
			<input id="ROI_PERSON_3_FIRST" name= "ROI_PERSON_3_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.ROI_PERSON_2_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="ROI_PERSON_3_LAST" name= "ROI_PERSON_3_LAST" class="element text" maxlength="255" size="14" value="{$user_data.ROI_PERSON_2_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		

		<li id="li_95" >
		<label class="description" for="element_95">Relationship </label>
		<div>
			<input id="ROI_PERSON_3_RELATIONSHIP" name="ROI_PERSON_3_RELATIONSHIP" class="element text medium" type="text" maxlength="255" value="{$user_data.ROI_PERSON_3_RELATIONSHIP}"/> 
		</div> 
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

		</span>  </li>
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
