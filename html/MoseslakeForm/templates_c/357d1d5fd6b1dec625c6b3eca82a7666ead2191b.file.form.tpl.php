<?php /* Smarty version Smarty-3.1-DEV, created on 2015-08-06 12:30:10
         compiled from "/var/www/html/KennewickForm/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181103723555bbf9b431fa54-75360264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '357d1d5fd6b1dec625c6b3eca82a7666ead2191b' => 
    array (
      0 => '/var/www/html/KennewickForm/templates/form.tpl',
      1 => 1438889342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181103723555bbf9b431fa54-75360264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55bbf9b439eaa4_94160137',
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bbf9b439eaa4_94160137')) {function content_55bbf9b439eaa4_94160137($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>New Patient Form (Kennewick)</title>
<link rel="stylesheet" type="text/css" href="http://localhost/KennewickForm/view.css" media="all">
<script type="text/javascript" src="http://localhost/KennewickForm/view.js"></script>
<script type="text/javascript" src="http://localhost/KennewickForm/calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="http://localhost/KennewickForm/top.png" alt="">
	<div id="form_container">
	
		<h1><a>New Patient Form (Kennewick)</a></h1>
		<form id="form_1033495" class="appnitro"  method="post" action="http://localhost/KennewickForm/htdocs/NewPatient.php">
					<div class="form_description">
			<h2>New Patient Form (Kennewick)</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="Patient's Name" >
		<label class="description" for="Patient's Name">Patient's Name </label>
		<span>
			<input id="FIRST_NAME" name= "FIRST_NAME" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FIRST_NAME'];?>
" required/>
			<label>First</label>
		</span>
		<span>
			<input id="LAST_NAME" name= "LAST_NAME" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['LAST_NAME'];?>
" required/>
			<label>Last</label>
		</span> 
		</li>		<li id="ADDRESS" >
		<label class="description" for="ADDRESS">Address </label>
		
		<div>
			<input id="ADDRESS_1" name="ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ADDRESS_1'];?>
" type="text" required>
			<label for="ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="ADDRESS_2" name="ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ADDRESS_2'];?>
" type="text">
			<label for="ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="CITY" name="CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['CITY'];?>
" type="text" required>
			<label for="CITY">City</label>
		</div>
	
		<div class="right">
			<input id="STATE" name="STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['STATE'];?>
" type="text" required>
			<label for="STATE">State</label>
		</div>
	
		<div class="left">
			<input id="ZIP" name="ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ZIP'];?>
" type="text" required>
			<label for="ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="HOME_PHONE" >
		<label class="description" for="HOME_PHONE">Primary Phone </label>
		<span>
			<input id="HOME_PHONE_1" name="HOME_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['HOME_PHONE_1'];?>
" type="text" required> -
			<label for="HOME_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="HOME_PHONE_2" name="HOME_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['HOME_PHONE_2'];?>
" type="text" required> -
			<label for="HOME_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="HOME_PHONE_3" name="HOME_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['HOME_PHONE_3'];?>
" type="text" required>
			<label for="HOME_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="CELL_PHONE" >
		<label class="description" for="element_4">Secondary Phone </label>
		<span>
			<input id="CELL_PHONE_1" name="CELL_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['CELL_PHONE_1'];?>
" type="text"> -
			<label for="CELL_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="CELL_PHONE_2" name="CELL_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['CELL_PHONE_2'];?>
" type="text"> -
			<label for="CELL_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="CELL_PHONE_3" name="CELL_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['CELL_PHONE_3'];?>
" type="text">
			<label for="CELL_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_5" >
		<label class="description" for="EMAIL">Email </label>
		<div>
			<input id="EMAIL" name="EMAIL" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMAIL'];?>
"/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="DOB">Date of Birth </label>
		<span>
			<input id="DOB_1" name="DOB_1" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['DOB_1'];?>
" type="text" required> /
			<label for="DOB_1">MM</label>
		</span>
		<span>
			<input id="DOB_2" name="DOB_2" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['DOB_2'];?>
" type="text" required> /
			<label for="DOB_2">DD</label>
		</span>
		<span>
	 		<input id="DOB_3" name="DOB_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['DOB_3'];?>
" type="text" required>
			<label for="DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_6">
			<img id="cal_img_6" class="datepicker" src="http://localhost/KennewickForm/calendar.gif" alt="Pick a date.">	
		</span>
		
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
		
		 
		</li>		<li id="li_24" >
		<label class="description" for="GENDER">Gender </label>
		<span>
			<input id="GENDER_M" name="GENDER" class="element radio" type="radio" value="M" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['GENDER']=='M'){?>checked<?php }?>/>
<label class="choice" for="GENDER_M">Male</label>
<input id="GENDER_F" name="GENDER" class="element radio" type="radio" value="F" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['GENDER']=='F'){?>checked<?php }?>/>
<label class="choice" for="GENDER_F">Female</label>

		</span> 
		</li>		<li id="li_7" >
		<label class="description" for="SSN">Social Security Number </label>
		<div>
			<input id="SSN" name="SSN" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SSN'];?>
"/> 
		</div><p class="guidelines" id="guide_7"><small>xxx-xx-xxxx</small></p> 
		</li>		<li class="section_break">
			<h3>Employment</h3>
			<p></p>
		</li>		<li id="li_25" >
		<label class="description" for="STUDENT">Are you a student? </label>
		<span>
			<input id="STUDENT_Y" name="STUDENT" class="element radio" type="radio" value="Y" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['STUDENT']=='Y'){?>checked<?php }?>/>
<label class="choice" for="STUDENT_Y">Yes</label>
<input id="STUDENT_N" name="STUDENT" class="element radio" type="radio" value="N" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['STUDENT']=='N'){?>checked<?php }?>/>
<label class="choice" for="STUDENT_N">No</label>

		</span> 
		</li>		<li id="li_9" >
		<label class="description" for="EMPLOYER">Employer Name </label>
		<div>
			<input id="EMPLOYER" name="EMPLOYER" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMPLOYER'];?>
"/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="WORK_PHONE">Work Phone </label>
		<span>
			<input id="WORK_PHONE_1" name="WORK_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['WORK_PHONE_1'];?>
" type="text"> -
			<label for="WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="WORK_PHONE_2" name="WORK_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['WORK_PHONE_2'];?>
" type="text"> -
			<label for="WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="WORK_PHONE_3" name="WORK_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['WORK_PHONE_3'];?>
" type="text">
			<label for="WORK_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_11" >
		<label class="description" for="EMPLOYER_ADDRESS">Employer's Address </label>
		
		<div>
			<input id="EMPLOYER_ADDRESS_1" name="EMPLOYER_ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMPLOYER_ADDRESS_1'];?>
" type="text">
			<label for="EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="EMPLOYER_ADDRESS_2" name="EMPLOYER_ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMPLOYER_ADDRESS_2'];?>
" type="text">
			<label for="EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="EMPLOYER_CITY" name="EMPLOYER_CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMPLOYER_CITY'];?>
" type="text">
			<label for="element_11_3">City</label>
		</div>
	
		<div class="right">
			<input id="EMPLOYER_STATE" name="EMPLOYER_STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMPLOYER_STATE'];?>
" type="text">
			<label for="element_11_4">State</label>
		</div>
	
		<div class="left">
			<input id="EMPLOYER_ZIP" name="EMPLOYER_ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMPLOYER_ZIP'];?>
" type="text">
			<label for="EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li class="section_break">
			<h3>Physician Information</h3>
			<p></p>
		</li>		<li id="li_13" >
		<label class="description" for="PHYSICIAN">Referring Physician </label>
		<span>
			<input id="PHYSICIAN_FIRST" name= "PHYSICIAN_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_FIRST'];?>
"/>
			<label>First</label>
		</span>
		<span>
			<input id="PHYSICIAN_LAST" name= "PHYSICIAN_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_LAST'];?>
"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_14" >
		<label class="description" for="PHYSICIAN_ADDRESS">Physician's Address </label>
		
		<div>
			<input id="PHYSICIAN_ADDRESS_1" name="PHYSICIAN_ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_ADDRESS_1'];?>
" type="text">
			<label for="PHYSICIAN_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="PHYSICIAN_ADDRESS_2" name="PHYSICIAN_ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_ADDRESS_2'];?>
" type="text">
			<label for="PHYSICIAN_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="PHYSICIAN_CITY" name="PHYSICIAN_CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_CITY'];?>
" type="text">
			<label for="PHYSICIAN_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="PHYSICIAN_STATE" name="PHYSICIAN_STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_STATE'];?>
" type="text">
			<label for="PHYSICIAN_STATE">State</label>
		</div>
	
		<div class="left">
			<input id="PHYSICIAN_ZIP" name="PHYSICIAN_ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_ZIP'];?>
" type="text">
			<label for="PHYSICIAN_ZIP">Postal / Zip Code</label>
		</div>
	 
		</li>		<li id="li_15" >
		<label class="description" for="PHYSICIAN_PHONE">Physician's Phone </label>
		<span>
			<input id="PHYSICIAN_PHONE_1" name="PHYSICIAN_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_PHONE_1'];?>
" type="text"> -
			<label for="PHYSICIAN_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="PHYSICIAN_PHONE_2" name="PHYSICIAN_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_PHONE_2'];?>
" type="text"> -
			<label for="PHYSICIAN_PHONE2">###</label>
		</span>
		<span>
	 		<input id="PHYSICIAN_PHONE_3" name="PHYSICIAN_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['PHYSICIAN_PHONE_3'];?>
" type="text">
			<label for="PHYSICIAN_PHONE_3">####</label>
		</span>
		 
		</li>		<li class="section_break">
			<h3>Marital Information</h3>
			<p></p>
		</li>		<li id="li_17" >
		<label class="description" for="SPOUSE">Spouse's Name </label>
		<span>
			<input id="SPOUSE_FIRST" name= "SPOUSE_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_FIRST'];?>
"/>
			<label>First</label>
		</span>
		<span>
			<input id="SPOUSE_LAST" name= "SPOUSE_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_LAST'];?>
"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_18" >
		<label class="description" for="SPOUSE_EMPLOYER">Spouse's Employer </label>
		<div>
			<input id="SPOUSE_EMPLOYER" name="SPOUSE_EMPLOYER" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_EMPLOYER'];?>
"/> 
		</div> 
		</li>		<li id="li_19" >
		<label class="description" for="SPOUSE_CELL_PHONE">Spouse's Cell Phone </label>
		<span>
			<input id="SPOUSE_CELL_PHONE_1" name="SPOUSE_CELL_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_CELL_PHONE_1'];?>
" type="text"> -
			<label for="SPOUSE_CELL_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="SPOUSE_CELL_PHONE_2" name="SPOUSE_CELL_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_CELL_PHONE_2'];?>
" type="text"> -
			<label for="SPOUSE_CELL_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="SPOUSE_CELL_PHONE_3" name="SPOUSE_CELL_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_CELL_PHONE_3'];?>
" type="text">
			<label for="SPOUSE_CELL_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_20" >
		<label class="description" for="SPOUSE_WORK_PHONE">Spouse's Work Phone </label>
		<span>
			<input id="SPOUSE_WORK_PHONE_1" name="SPOUSE_WORK_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_WORK_PHONE_1'];?>
" type="text"> -
			<label for="SPOUSE_WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="SPOUSE_WORK_PHONE_2" name="SPOUSE_WORK_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_WORK_PHONE_2'];?>
" type="text"> -
			<label for="SPOUSE_WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="SPOUSE_WORK_PHONE_3" name="SPOUSE_WORK_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SPOUSE_WORK_PHONE_3'];?>
" type="text">
			<label for="SPOUSE_WORK_PHONE_3">####</label>
		</span>
		 
		</li>		<li class="section_break">
			<h3>If patient is a minor</h3>
			<p></p>
		</li>		<li id="li_22" >
		<label class="description" for="MOTHER">Mother/Guardian's Name </label>
		<span>
			<input id="MOTHER_FIRST" name= "MOTHER_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_FIRST'];?>
"/>
			<label>First</label>
		</span>
		<span>
			<input id="MOTHER_LAST" name= "MOTHER_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_LAST'];?>
"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_48" >
		<label class="description" for="MOTHER_DOB">Mother's Date of Birth </label>
		<span>
			<input id="MOTHER_DOB_1" name="MOTHER_DOB_1" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_DOB_1'];?>
" type="text"> /
			<label for="MOTHER_DOB_1">MM</label>
		</span>
		<span>
			<input id="MOTHER_DOB_2" name="MOTHER_DOB_2" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_DOB_2'];?>
" type="text"> /
			<label for="MOTHER_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="MOTHER_DOB_3" name="MOTHER_DOB_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_DOB_3'];?>
" type="text">
			<label for="MOTHER_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_48">
			<img id="cal_img_48" class="datepicker" src="http://localhost/KennewickForm/calendar.gif" alt="Pick a date.">	
		</span>
		
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "MOTHER_DOB_3",
			baseField    : "MOTHER_DOB",
			displayArea  : "MOTHER_DOB",
			button		 : "cal_img_48",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		
		 
		</li>		<li id="li_23" >
		<label class="description" for="MOTHER_ADDRESS">Mother's Address </label>
		
		<div>
			<input id="MOTHER_ADDRESS_1" name="MOTHER_ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_ADDRESS_1'];?>
" type="text">
			<label for="MOTHER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="MOTHER_ADDRESS_2" name="MOTHER_ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_ADDRESS_2'];?>
" type="text">
			<label for="MOTHER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="MOTHER_CITY" name="MOTHER_CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_CITY'];?>
" type="text">
			<label for="MOTHER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="MOTHER_STATE" name="MOTHER_STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_STATE'];?>
" type="text">
			<label for="MOTHER_STATE">State </label>
		</div>
	
		<div class="left">
			<input id="MOTHER_ZIP" name="MOTHER_ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_ZIP'];?>
" type="text">
			<label for="MOTHER_ZIP">Postal / Zip Code</label>
		</div>
	 
		</li>		<li id="li_26" >
		<label class="description" for="MOTHER_EMPLOYER">Mother's Employer </label>
		<div>
			<input id="MOTHER_EMPLOYER" name="MOTHER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_EMPLOYER'];?>
"/> 
		</div> 
		</li>		<li id="li_27" >
		<label class="description" for="MOTHER_EMPLOYER_ADDRESS">Mother's Employer's Address </label>
		
		<div>
			<input id="MOTHER_EMPLOYER_ADDRESS_1" name="MOTHER_EMPLOYER_ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_EMPLOYER_ADDRESS_1'];?>
" type="text">
			<label for="MOTHER_EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="MOTHER_EMPLOYER_ADDRESS_2" name="MOTHER_EMPLOYER_ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_EMPLOYER_ADDRESS_2'];?>
" type="text">
			<label for="MOTHER_EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="MOTHER_EMPLOYER_CITY" name="MOTHER_EMPLOYER_CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_EMPLOYER_CITY'];?>
" type="text">
			<label for="MOTHER_EMPLOYER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="MOTHER_EMPLOYER_STATE" name="MOTHER_EMPLOYER_STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_EMPLOYER_STATE'];?>
" type="text">
			<label for="MOTHER_EMPLOYER_STATE">State </label>
		</div>
	
		<div class="left">
			<input id="MOTHER_EMPLOYER_ZIP" name="MOTHER_EMPLOYER_ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_EMPLOYER_ZIP'];?>
" type="text">
			<label for="MOTHER_EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_28" >
		<label class="description" for="MOTHER_WORK_PHONE">Mother's Work Phone </label>
		<span>
			<input id="MOTHER_WORK_PHONE_1" name="MOTHER_WORK_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_WORK_PHONE_1'];?>
" type="text"> -
			<label for="MOTHER_WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="MOTHER_WORK_PHONE_2" name="MOTHER_WORK_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_WORK_PHONE_2'];?>
" type="text"> -
			<label for="MOTHER_WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="MOTHER_WORK_PHONE_3" name="MOTHER_WORK_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['MOTHER_WORK_PHONE_3'];?>
" type="text">
			<label for="MOTHER_WORK_PHONE_3">####</label>
		</span>
		 
		</li>		<li id="li_29" >
		<label class="description" for="FATHER">Father's Name </label>
		<span>
			<input id="FATHER_FIRST" name= "FATHER_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_FIRST'];?>
"/>
			<label>First</label>
		</span>
		<span>
			<input id="FATHER_LAST" name= "FATHER_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_LAST'];?>
"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_47" >
		<label class="description" for=FATHER_DOB">Father's Date of Birth </label>
		<span>
			<input id="FATHER_DOB_1" name="FATHER_DOB_1" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_DOB_1'];?>
" type="text"> /
			<label for="FATHER_DOB_1">MM</label>
		</span>
		<span>
			<input id="FATHER_DOB_2" name="FATHER_DOB_2" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_DOB_2'];?>
" type="text"> /
			<label for="FATHER_DOB_2">DD</label>
		</span>
		<span>
	 		<input id="FATHER_DOB_3" name="FATHER_DOB_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_DOB_3'];?>
" type="text">
			<label for="FATHER_DOB_3">YYYY</label>
		</span>
	
		<span id="calendar_47">
			<img id="cal_img_47" class="datepicker" src="http://localhost/KennewickForm/calendar.gif" alt="Pick a date.">	
		</span>
		
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "FATHER_DOB_3",
			baseField    : "FATHER_DOB",
			displayArea  : "FATHER_DOB",
			button		 : "cal_img_47",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		
		 
		</li><li id="li_30" >
		<label class="description" for="FATHER_ADDRESS">Father's Address </label>
		
		<div>
			<input id="FATHER_ADDRESS_1" name="FATHER_ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_ADDRESS_1'];?>
" type="text">
			<label for="FATHER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="FATHER_ADDRESS_2" name="FATHER_ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_ADDRESS_2'];?>
" type="text">
			<label for="FATHER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="FATHER_CITY" name="FATHER_CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_CITY'];?>
" type="text">
			<label for="FATHER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="FATHER_STATE" name="FATHER_STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_STATE'];?>
" type="text">
			<label for="FATHER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="FATHER_ZIP" name="FATHER_ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_ZIP'];?>
" type="text">
			<label for="FATHER_ZIP">Postal / Zip Code</label>
		</div>
	
		</li>		<li id="li_31" >
		<label class="description" for="FATHER_EMPLOYER">Father's Employer </label>
		<div>
			<input id="FATHER_EMPLOYER" name="FATHER_EMPLOYER" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_EMPLOYER'];?>
"/> 
		</div> 
		</li>		<li id="li_32" >
		<label class="description" for="element_32">Father's Employer's Address </label>
		
		<div>
			<input id="FATHER_EMPLOYER_ADDRESS_1" name="FATHER_EMPLOYER_ADDRESS_1" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_EMPLOYER_ADDRESS_1'];?>
" type="text">
			<label for="FATHER_EMPLOYER_ADDRESS_1">Street Address</label>
		</div>
	
		<div>
			<input id="FATHER_EMPLOYER_ADDRESS_2" name="FATHER_EMPLOYER_ADDRESS_2" class="element text large" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_EMPLOYER_ADDRESS_2'];?>
" type="text">
			<label for="FATHER_EMPLOYER_ADDRESS_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="FATHER_EMPLOYER_CITY" name="FATHER_EMPLOYER_CITY" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_EMPLOYER_CITY'];?>
" type="text">
			<label for="FATHER_EMPLOYER_CITY">City</label>
		</div>
	
		<div class="right">
			<input id="FATHER_EMPLOYER_STATE" name="FATHER_EMPLOYER_STATE" class="element text medium" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_EMPLOYER_STATE'];?>
" type="text">
			<label for="FATHER_EMPLOYER_STATE">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="FATHER_EMPLOYER_ZIP" name="FATHER_EMPLOYER_ZIP" class="element text medium" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_EMPLOYER_ZIP'];?>
" type="text">
			<label for="FATHER_EMPLOYER_ZIP">Postal / Zip Code</label>
		</div>
	 
		</li>		<li id="li_33" >
		<label class="description" for="FATHER_EMPLOYER_PHONE">Father's Work Phone </label>
		<span>
			<input id="FATHER_WORK_PHONE_1" name="FATHER_WORK_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_WORK_PHONE_1'];?>
" type="text"> -
			<label for="FATHER_WORK_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="FATHER_WORK_PHONE_2" name="FATHER_WORK_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_WORK_PHONE_2'];?>
" type="text"> -
			<label for="FATHER_WORK_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="FATHER_WORK_PHONE_3" name="FATHER_WORK_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['FATHER_WORK_PHONE_3'];?>
" type="text">
			<label for="FATHER_WORK_PHONE_3">####</label>
		</span>
		 
		</li>		<li class="section_break">
			<h3>Emergency Contact Information</h3>
			<p></p>
		</li>		<li id="li_34" >
		<label class="description" for="element_34">Emergency Contact </label>
		<span>
			<input id="EMERGENCY_CONTACT_FIRST" name= "EMERGENCY_CONTACT_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMERGENCY_CONTACT_FIRST'];?>
" required/>
			<label>First</label>
		</span>
		<span>
			<input id="EMERGENCY_CONTACT_LAST" name= "EMERGENCY_CONTACT_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMERGENCY_CONTACT_LAST'];?>
" required/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_36" >
		<label class="description" for="EMERGENCY_CONTACT_PHONE">Emergency Contact's Phone </label>
		<span>
			<input id="EMERGENCY_CONTACT_PHONE_1" name="EMERGENCY_CONTACT_PHONE_1" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMERGENCY_CONTACT_PHONE_1'];?>
" type="text" required> -
			<label for="EMERGENCY_CONTACT_PHONE_1">(###)</label>
		</span>
		<span>
			<input id="EMERGENCY_CONTACT_PHONE_2" name="EMERGENCY_CONTACT_PHONE_2" class="element text" size="3" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMERGENCY_CONTACT_PHONE_2'];?>
" type="text" required> -
			<label for="EMERGENCY_CONTACT_PHONE_2">###</label>
		</span>
		<span>
	 		<input id="EMERGENCY_CONTACT_PHONE_3" name="EMERGENCY_CONTACT_PHONE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['EMERGENCY_CONTACT_PHONE_3'];?>
" type="text" required>
			<label for="EMERGENCY_CONTACT_PHONE_3">####</label>
		</span>
		 
		</li>		<li class="section_break">
			<h3>I authorize Columbia Physical Therapy, Inc. P.S. to use and disclose health and medical information for the purposes of treatment, payment and health care operations. Under all circumstances I assume final responsibility for my account understanding that in the event my
account becomes delinquent, I agree to pay accrued finance charges, court costs and attorney fees. I consent to physical therapy services
prescribed by any physician. I authorize payment of medical benefits by my insurance company to Columbia Physical Therapy, Inc. PS, for
services rendered. I have received this practice’s <a href="http://www.columbiaphysicaltherapykennewick.com/hippa-privacy-policy/" target="_blank">Notice of Privacy Practices</a> written in plain language. </h3>
			<p></p>
		</li>		<li id="li_37" >
		<label class="description" for="SIGNIATURE">Signiature </label>
		<div>
			<input id="SIGNIATURE" name="SIGNIATURE" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['SIGNIATURE'];?>
" required/> 
		</div><p class="guidelines" id="guide_37"><small>Type your full name here to sign</small></p> 
		</li>		<li id="li_46" >
		<label class="description" for="element_46">Today's Date </label>
		<span>
			<input id="TODAY_DATE_1" name="TODAY_DATE_1" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['TODAY_DATE_1'];?>
" type="text"> /
			<label for="TODAY_DATE_1">MM</label>
		</span>
		<span>
			<input id="TODAY_DATE_2" name="TODAY_DATE_2" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['TODAY_DATE_2'];?>
" type="text"> /
			<label for="TODAY_DATE_2">DD</label>
		</span>
		<span>
	 		<input id="TODAY_DATE_3" name="TODAY_DATE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['TODAY_DATE_3'];?>
" type="text">
			<label for="TODAY_DATE_3">YYYY</label>
		</span>
	
		<span id="calendar_46">
			<img id="cal_img_46" class="datepicker" src="http://localhost/KennewickForm/calendar.gif" alt="Pick a date.">	
		</span>
		
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
		
		 
		</li>		<li id="li_49" >
		<label class="description" for="OVER_18"> </label>
		<span>
			<input id="OVER_18" name="OVER_18" class="element checkbox" type="checkbox" value="Yes" required <?php if ($_smarty_tpl->tpl_vars['user_data']->value['OVER_18']=='Yes'){?>checked<?php }?>/>
<label class="choice" for="OVER_18">I Certify that I am at least 18 years of Age and am legally able to sign this medical form.</label>

		</span> 
		</li><li class="section_break">
			<h3>Authorization for Release of Information: 

I authorize release of medical information to the person(s) named below:</h3>
			<p></p>
		</li>		<li id="li_47" >
		<label class="description" for="ROI"> </label>
		<span>
			<input id="ALL" name="ROI" class="element checkbox" type="checkbox" value="All" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ROI']=='All'){?>checked<?php }?>/>
<label class="choice" for="ALL">All Medical And Billing Information</label>
<input id="APPOINTMENT" name="ROI" class="element checkbox" type="checkbox" value="Appointment" <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ROI']=='Appointment'){?>checked<?php }?>/>
<label class="choice" for="APPOINTMENT">Appointment Information Only</label>

		</span> 
		</li>		<li id="li_40" >
		<label class="description" for="element_40">Name </label>
		<span>
			<input id="ROI_PERSON_1_FIRST" name= "ROI_PERSON_1_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_PERSON_1_FIRST'];?>
"/>
			<label>First</label>
		</span>
		<span>
			<input id="ROI_PERSON_1_LAST" name= "ROI_PERSON_1_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_PERSON_1_LAST'];?>
"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_41" >
		<label class="description" for="element_41">Relationship </label>
		<div>
			<input id="ROI_PERSON_1_RELATIONSHIP" name="ROI_PERSON_1_RELATIONSHIP" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_PERSON_1_RELATIONSHIP'];?>
"/> 
		</div> 
		</li>		<li id="li_42" >
		<label class="description" for="element_42">Name </label>
		<span>
			<input id="ROI_PERSON_2_FIRST" name= "ROI_PERSON_2_FIRST" class="element text" maxlength="255" size="8" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_PERSON_2_FIRST'];?>
"/>
			<label>First</label>
		</span>
		<span>
			<input id="ROI_PERSON_2_LAST" name= "ROI_PERSON_2_LAST" class="element text" maxlength="255" size="14" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_PERSON_2_LAST'];?>
"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_43" >
		<label class="description" for="element_43">Relationship </label>
		<div>
			<input id="ROI_PERSON_2_RELATIONSHIP" name="ROI_PERSON_2_RELATIONSHIP" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_PERSON_2_RELATIONSHIP'];?>
"/> 
		</div> 
		</li>		<li id="li_44" >
		<label class="description" for="element_44">Signiature </label>
		<div>
			<input id="ROI_SIGNIATURE" name="ROI_SIGNIATURE" class="element text medium" type="text" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_SIGNIATURE'];?>
"/> 
		</div><p class="guidelines" id="guide_44"><small>Type your full name to sign for release of medical information</small></p> 
		</li>		<li id="li_45" >
		<label class="description" for="element_45">Today's Date </label>
		<span>
			<input id="ROI_DATE_1" name="ROI_DATE_1" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_DATE_1'];?>
" type="text"> /
			<label for="ROI_DATE_1">MM</label>
		</span>
		<span>
			<input id="ROI_DATE_2" name="ROI_DATE_2" class="element text" size="2" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_DATE_2'];?>
" type="text"> /
			<label for="ROI_DATE_2">DD</label>
		</span>
		<span>
	 		<input id="ROI_DATE_3" name="ROI_DATE_3" class="element text" size="4" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['ROI_DATE_3'];?>
" type="text">
			<label for="ROI_DATE_3">YYYY</label>
		</span>
	
		<span id="calendar_45">
			<img id="cal_img_45" class="datepicker" src="http://localhost/KennewickForm/calendar.gif" alt="Pick a date.">	
		</span>
		
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "ROI_DATE_3",
			baseField    : "ROI_DATE",
			displayArea  : "calendar_45",
			button		 : "cal_img_45",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		
		 
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
	<img id="bottom" src="http://localhost/KennewickForm/bottom.png" alt="">
	</body>
</html>
<?php }} ?>