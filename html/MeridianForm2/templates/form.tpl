<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>New Patient Form</title>
<link rel="stylesheet" type="text/css" href="../view.css" media="all">
<script type="text/javascript" src="../view.js"></script>
<script type="text/javascript" src="../calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="../top.png" alt="">
	<div id="form_container">
	
		<h1><a>New Patient Form</a></h1>
		<form id="form_1033495" class="appnitro"  method="post" action="../htdocs/NewPatient.php">
					<div class="form_description">
			<h2>New Patient Form</h2>
			<p></p>
		</div>						
			<ul >
			
				<li id="Patient's Name" >
		<label class="description" for="Patient's Name">Patient's Name </label>
		<span>
			<input id="FIRST_NAME" name= "FIRST_NAME" class="element text" maxlength="255" size="8" value="{$user_data.FIRST_NAME}" required/>
			<label>First</label>
		</span>
		<span>
			<input id="LAST_NAME" name= "LAST_NAME" class="element text" maxlength="255" size="14" value="{$user_data.LAST_NAME}" required/>
			<label>Last</label>
		</span> 
		</li>		
		
		<li id="ADDRESS" >
		<label class="description" for="ADDRESS">Address </label>
		
		<div>
			<input id="ADDRESS_1" name="ADDRESS_1" class="element text large" value="{$user_data.ADDRESS_1}" type="text" required>
			<label for="ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="ADDRESS_2" name="ADDRESS_2" class="element text large" value="{$user_data.ADDRESS_2}" type="text">
			<label for="ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="CITY" name="CITY" class="element text medium" value="{$user_data.CITY}" type="text" required>
			<label for="CITY">City</label>
		</div>
	
		<div class="right">
			<input id="STATE" name="STATE" class="element text medium" value="{$user_data.STATE}" type="text" required>
			<label for="STATE">State</label>
		</div>
	
		<div class="left">
			<input id="ZIP" name="ZIP" class="element text medium" maxlength="15" value="{$user_data.ZIP}" type="text" required>
			<label for="ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		
		
		<li id="HOME_PHONE" >
		<label class="description" for="HOME_PHONE">Primary Phone </label>
		<span>
			<input id="HOME_PHONE_1" name="HOME_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.HOME_PHONE_1}" type="text" required> -
			<label for="HOME_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="HOME_PHONE_2" name="HOME_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.HOME_PHONE_2}" type="text" required> -
			<label for="HOME_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="HOME_PHONE_3" name="HOME_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.HOME_PHONE_3}" type="text" required>
			<label for="HOME_PHONE_3">####</label>
		</span>
		 
		</li>		
		
		<li id="CELL_PHONE" >
		<label class="description" for="element_4">Secondary Phone </label>
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
		 
		</li>		

		<li id="li_5" >
		<label class="description" for="EMAIL">Email </label>
		<div>
			<input id="EMAIL" name="EMAIL" class="element text medium" type="text" maxlength="255" value="{$user_data.EMAIL}"/> 
		</div> 
		</li>		
		
		<li id="li_6" >
		<label class="description" for="DOB">Date of Birth </label>
		<span>
			<input id="DOB_1" name="DOB_1" class="element text" size="2" maxlength="2" value="{$user_data.DOB_1}" type="text" required> /
			<label for="DOB_1">MM</label>
		</span>
		<span>
			<input id="DOB_2" name="DOB_2" class="element text" size="2" maxlength="2" value="{$user_data.DOB_2}" type="text" required> /
			<label for="DOB_2">DD</label>
		</span>
		<span>
	 		<input id="DOB_3" name="DOB_3" class="element text" size="4" maxlength="4" value="{$user_data.DOB_3}" type="text" required>
			<label for="DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "DOB_3",
			baseField    : "DOB",
			displayArea  : "DOB",
			button		 : "cal_img_6",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		
		
		<li id="li_24" >
		<label class="description" for="GENDER">Gender </label>
		<span>
			<input id="GENDER_M" name="GENDER" class="element radio" type="radio" value="M" {if $user_data.GENDER eq 'M'}checked{/if}/>
<label class="choice" for="GENDER_M">Male</label>
<input id="GENDER_F" name="GENDER" class="element radio" type="radio" value="F" {if $user_data.GENDER eq 'F'}checked{/if}/>
<label class="choice" for="GENDER_F">Female</label>

		</span> 
		</li>		
		
		<li id="li_7" >
		<label class="description" for="SSN">Social Security Number </label>
		<div>
			<input id="SSN" name="SSN" class="element text medium" type="text" maxlength="255" value="{$user_data.SSN}"/> 
		</div><p class="guidelines" id="guide_7"><small>xxx-xx-xxxx</small></p> 
		</li>		
		
		<li class="section_break">
			<h3>Employment</h3>
			<p></p>
		</li>				
		
		<li id="li_9" >
		<label class="description" for="EMPLOYER">Employer Name </label>
		<div>
			<input id="EMPLOYER" name="EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.EMPLOYER}"/> 
		</div> 
		</li>		
		
		<li id="li_10" >
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
		 
		</li>		
		
		<li id="li_11" >
		<label class="description" for="EMPLOYER_ADDRESS">Employer's Address </label>
		
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
			<label for="element_11_3">City</label>
		</div>
	
		<div class="right">
			<input id="EMPLOYER_STATE" name="EMPLOYER_STATE" class="element text medium" value="{$user_data.EMPLOYER_STATE}" type="text">
			<label for="element_11_4">State</label>
		</div>
	
		<div class="left">
			<input id="EMPLOYER_ZIP" name="EMPLOYER_ZIP" class="element text medium" maxlength="15" value="{$user_data.EMPLOYER_ZIP}" type="text">
			<label for="EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		
		
		<li class="section_break">
			<h3>Physician Information</h3>
			<p></p>
		</li>		
		
		<li id="li_13" >
		<label class="description" for="PHYSICIAN">Referring Physician </label>
		<span>
			<input id="PHYSICIAN_FIRST" name= "PHYSICIAN_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.PHYSICIAN_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="PHYSICIAN_LAST" name= "PHYSICIAN_LAST" class="element text" maxlength="255" size="14" value="{$user_data.PHYSICIAN_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		

		<li id="li_14" >
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
			<label for="PHYSICIAN_STATE">State</label>
		</div>
	
		<div class="left">
			<input id="PHYSICIAN_ZIP" name="PHYSICIAN_ZIP" class="element text medium" maxlength="15" value="{$user_data.PHYSICIAN_ZIP}" type="text">
			<label for="PHYSICIAN_ZIP">Postal / Zip Code</label>
		</div>
	 
		</li>		

		<li id="li_15" >
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
		 
		</li>	

		<li id="li_46" >
		<label class="description" for="PHYSICIAN_FAX">Physician's Fax </label>
		<span>
			<input id="PHYSICIAN_FAX_1" name="PHYSICIAN_FAX_1" class="element text" size="3" maxlength="3" value="{$user_data.PHYSICIAN_FAX_1}" type="text"> -
			<label for="PHYSICIAN_FAX_1">(###)</label>
		</span>
		<span>
			<input id="PHYSICIAN_FAX_2" name="PHYSICIAN_FAX_2" class="element text" size="3" maxlength="3" value="{$user_data.PHYSICIAN_FAX_2}" type="text"> -
			<label for="PHYSICIAN_FAX_2">###</label>
		</span>
		<span>
	 		<input id="PHYSICIAN_FAX_3" name="PHYSICIAN_FAX_3" class="element text" size="4" maxlength="4" value="{$user_data.PHYSICIAN_FAX_3}" type="text">
			<label for="PHYSICIAN_FAX_3">####</label>
		</span>
		 
		</li>		

		<li class="section_break">
			<h3>Marital Information</h3>
			<p></p>
		</li>		

		<li id="li_17" >
		<label class="description" for="SPOUSE">Spouse's Name </label>
		<span>
			<input id="SPOUSE_FIRST" name= "SPOUSE_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.SPOUSE_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="SPOUSE_LAST" name= "SPOUSE_LAST" class="element text" maxlength="255" size="14" value="{$user_data.SPOUSE_LAST}"/>
			<label>Last</label>
		</span> 
		</li>		

		<li id="li_47" >
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
	
		<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "SPOUSE_DOB_3",
			baseField    : "SPOUSE_DOB",
			displayArea  : "SPOUSE_DOB",
			button		 : "cal_img_6",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>

		<li id="li_48" >
		<label class="description" for="SPOUSE_SSN">Social Security Number </label>
		<div>
			<input id="SPOUSE_SSN" name="SPOUSE_SSN" class="element text medium" type="text" maxlength="255" value="{$user_data.SPOUSE_SSN}"/> 
		</div><p class="guidelines" id="guide_7"><small>xxx-xx-xxxx</small></p> 
		</li>

		<li id="li_18" >
		<label class="description" for="SPOUSE_EMPLOYER">Spouse's Employer </label>
		<div>
			<input id="SPOUSE_EMPLOYER" name="SPOUSE_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.SPOUSE_EMPLOYER}"/> 
		</div> 
		</li>		

		<li id="li_19" >
		<label class="description" for="SPOUSE_EMPLOYER_ADDRESS">Employer's Address </label>
		
		<div>
			<input id="SPOUSE_EMPLOYER_ADDRESS_1" name="SPOUSE_EMPLOYER_ADDRESS_1" class="element text large" value="{$user_data.SPOUSE_EMPLOYER_ADDRESS_1}" type="text">
			<label for="SPOUSE_EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="SPOUSE_EMPLOYER_ADDRESS_2" name="SPOUSE_EMPLOYER_ADDRESS_2" class="element text large" value="{$user_data.SPOUSE_EMPLOYER_ADDRESS_2}" type="text">
			<label for="SPOUSE_EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="SPOUSE_EMPLOYER_CITY" name="SPOUSE_EMPLOYER_CITY" class="element text medium" value="{$user_data.SPOUSE_EMPLOYER_CITY}" type="text">
			<label for="SPOUSE_EMPLOYER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="SPOUSE_EMPLOYER_STATE" name="SPOUSE_EMPLOYER_STATE" class="element text medium" value="{$user_data.SPOUSE_EMPLOYER_STATE}" type="text">
			<label for="SPOUSE_EMPLOYER_STATE">State</label>
		</div>
	
		<div class="left">
			<input id="SPOUSE_EMPLOYER_ZIP" name="SPOUSE_EMPLOYER_ZIP" class="element text medium" maxlength="15" value="{$user_data.SPOUSE_EMPLOYER_ZIP}" type="text">
			<label for="SPOUSE_EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	 
		</li>			

		<li id="li_20" >
		<label class="description" for="SPOUSE_WORK_PHONE">Spouse's Work Phone </label>
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
			<h3>Please complete if patient is a minor</h3>
			<p></p>
		</li>		

		<li id="li_22" >
		<label class="description" for="MOTHER">Parent/Guardian's Name </label>
		<span>
			<input id="MOTHER_FIRST" name= "MOTHER_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.MOTHER_FIRST}"/>
			<label>First</label>
		</span>
		<span>
			<input id="MOTHER_LAST" name= "MOTHER_LAST" class="element text" maxlength="255" size="14" value="{$user_data.MOTHER_LAST}"/>
			<label>Last</label>
		</span> 
		</li>			

		<li id="li_23" >
		<label class="description" for="MOTHER_ADDRESS">Parent's Address </label>
		
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
			<label for="MOTHER_STATE">State </label>
		</div>
	
		<div class="left">
			<input id="MOTHER_ZIP" name="MOTHER_ZIP" class="element text medium" maxlength="15" value="{$user_data.MOTHER_ZIP}" type="text">
			<label for="MOTHER_ZIP">Postal / Zip Code</label>
		</div>
	 
		</li>		

		<li id="li_24" >
		<label class="description" for="MOTHER_SSN">Parent's Social Security Number </label>
		<div>
			<input id="MOTHER_SSN" name="MOTHER_SSN" class="element text medium" type="text" maxlength="255" value="{$user_data.MOTHER_SSN}"/> 
		</div><p class="guidelines" id="guide_7"><small>xxx-xx-xxxx</small></p> 
		</li>

		<li id="li_26" >
		<label class="description" for="MOTHER_EMPLOYER">Parent's Employer </label>
		<div>
			<input id="MOTHER_EMPLOYER" name="MOTHER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="{$user_data.MOTHER_EMPLOYER}"/> 
		</div> 
		</li>		

		<li id="li_28" >
		<label class="description" for="MOTHER_WORK_PHONE">Parent's Work Phone </label>
		<span>
			<input id="MOTHER_WORK_PHONE_1" name="MOTHER_WORK_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.MOTHER_WORK_PHONE_1}" type="text"> -
			<label for="MOTHER_WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="MOTHER_WORK_PHONE_2" name="MOTHER_WORK_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.MOTHER_WORK_PHONE_2}" type="text"> -
			<label for="MOTHER_WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="MOTHER_WORK_PHONE_3" name="MOTHER_WORK_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.MOTHER_WORK_PHONE_3}" type="text">
			<label for="MOTHER_WORK_PHONE_3">####</label>
		</span>
		 
		</li>		

		<li id="li_29" >
		<label class="description" for="CUSTODY">Custody </label>
		<span>
			<input id="CUSTODY_1" name="CUSTODY" class="element checkbox" type="checkbox" value="Joint" {if $user_data.CUSTODY eq 'Joint'}checked{/if}/>
<label class="choice" for="CUSTODY_1">Joint</label>
			<input id="CUSTODY_2" name="CUSTODY" class="element checkbox" type="checkbox" value="Mother" {if $user_data.CUSTODY eq 'Mother'}checked{/if}/>
<label class="choice" for="CUSTODY_2">Mother</label>
			<input id="CUSTODY_3" name="CUSTODY" class="element checkbox" type="checkbox" value="Father" {if $user_data.CUSTODY eq 'Father'}checked{/if}/>
<label class="choice" for="CUSTODY_3">Father</label>
			<input id="CUSTODY_4" name="CUSTODY" class="element checkbox" type="checkbox" value="Other" {if $user_data.CUSTODY eq 'Other'}checked{/if}/>
<label class="choice" for="CUSTODY_4">Other</label>

		</span> 
		</li>

		<li class="section_break">
			<h3>Emergency Contact Information</h3>
			<p></p>
		</li>		

		<li id="li_34" >
		<label class="description" for="element_34">Emergency Contact </label>
		<span>
			<input id="EMERGENCY_CONTACT_FIRST" name= "EMERGENCY_CONTACT_FIRST" class="element text" maxlength="255" size="8" value="{$user_data.EMERGENCY_CONTACT_FIRST}" required/>
			<label>First</label>
		</span>
		<span>
			<input id="EMERGENCY_CONTACT_LAST" name= "EMERGENCY_CONTACT_LAST" class="element text" maxlength="255" size="14" value="{$user_data.EMERGENCY_CONTACT_LAST}" required/>
			<label>Last</label>
		</span> 
		</li>		

		<li id="li_49" >
		<label class="description" for="RELATIONSHIP">Relationship </label>
		<div>
			<input id="RELATIONSHIP" name="RELATIONSHIP" class="element text medium" type="text" maxlength="255" value="{$user_data.RELATIONSHIP}" required/> 
		</div> 
		</li>

		<li id="li_36" >
		<label class="description" for="EMERGENCY_CONTACT_PHONE">Emergency Contact's Phone </label>
		<span>
			<input id="EMERGENCY_CONTACT_PHONE_1" name="EMERGENCY_CONTACT_PHONE_1" class="element text" size="3" maxlength="3" value="{$user_data.EMERGENCY_CONTACT_PHONE_1}" type="text" required> -
			<label for="EMERGENCY_CONTACT_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="EMERGENCY_CONTACT_PHONE_2" name="EMERGENCY_CONTACT_PHONE_2" class="element text" size="3" maxlength="3" value="{$user_data.EMERGENCY_CONTACT_PHONE_2}" type="text" required> -
			<label for="EMERGENCY_CONTACT_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="EMERGENCY_CONTACT_PHONE_3" name="EMERGENCY_CONTACT_PHONE_3" class="element text" size="4" maxlength="4" value="{$user_data.EMERGENCY_CONTACT_PHONE_3}" type="text" required>
			<label for="EMERGENCY_CONTACT_PHONE_3">####</label>
		</span>
		 
		</li>		

		<li class="section_break">
			<h3>I authorize Meridian Physical Therapy, Inc. P.S. to use and disclose health and medical information for the purposes of treatment, payment and health care operations. Under all circumstances I assume final responsibility for my account understanding that in the event my account becomes delinquent, I agree to pay accrued finance charges, court costs and attorney fees. I consent to physical therapy services prescribed by any physician. I authorize payment of medical benefits by my insurance company to Columbia Physical Therapy, Inc. PS, for services rendered. I have received this practice’s <a href="http://www.meridianpt.net/hippa-privacy-policy/" target="_blank">Notice of Privacy Practices</a> written in plain language. </h3>
			<p></p>
		</li>		

		<li id="li_37" >
		<label class="description" for="SIGNIATURE">Signiature </label>
		<div>
			<input id="SIGNIATURE" name="SIGNIATURE" class="element text medium" type="text" maxlength="255" value="{$user_data.SIGNIATURE}" required/> 
		</div><p class="guidelines" id="guide_37"><small>Type your full name here to sign</small></p> 
		</li>

		<li id="li_46" >
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
	
		<span id="calendar_46">
			<img id="cal_img_46" class="datepicker" src="../calendar.gif" alt="Pick a date.">	
		</span>
		{literal}
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "TODAY_DATE_3",
			baseField    : "TODAY_DATE",
			displayArea  : "calendar_46",
			button		 : "cal_img_46",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		{/literal}
		 
		</li>		

		<li id="li_49" >
		<label class="description" for="OVER_18"> </label>
		<span>
			<input id="OVER_18" name="OVER_18" class="element checkbox" type="checkbox" value="Yes" required {if $user_data.OVER_18 eq 'Yes'}checked{/if}/>
<label class="choice" for="OVER_18">I Certify that I am at least 18 years of Age and am legally able to sign this medical form.</label>

		</span> 
		</li>

		<li class="section_break">
			<h3></h3>
			<p></p>
		</li>	

		<li id="li_50" >
		<label class="description" for="HEIGHT">Height </label>
		<span>
			<input id="FEET" name= "FEET" class="element text" maxlength="255" size="4" value="{$user_data.FEET}"/>
			<label>Feet</label>
		</span>
		<span>
			<input id="INCHES" name= "INCHES" class="element text" maxlength="255" size="4" value="{$user_data.INCHES}"/>
			<label>Inches</label>
		</span> 
		</li>		<li id="li_51" >
		<label class="description" for="WEIGHT">Weight </label>
		<div>
			<input id="WEIGHT" name="WEIGHT" class="element text small" type="text" maxlength="255" value="{$user_data.WEIGHT}"/> 
			<label>Pounds</label>
		</div> 
		</li>		<li id="li_52" >
		<label class="description" for="BLOOD_PRESSURE">Blood Pressure </label>
		<div>
			<input id="BLOOD_PRESSURE" name="BLOOD_PRESSURE" class="element text small" type="text" maxlength="255" value="{$user_data.BLOOD_PRESSURE}"/> 
		</div> 
		</li>			
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1033495" />
			    
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
