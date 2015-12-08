<?php /* Smarty version Smarty-3.1-DEV, created on 2015-07-31 15:21:14
         compiled from "/var/www/html/KennewickForm/templates/NewPatient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102886435155bbf4da402459-90512215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e0584a590e6246b22e57f386f1150e8eee5dae6' => 
    array (
      0 => '/var/www/html/KennewickForm/templates/NewPatient.tpl',
      1 => 1438373588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102886435155bbf4da402459-90512215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_55bbf4da4473f3_86775724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bbf4da4473f3_86775724')) {function content_55bbf4da4473f3_86775724($_smarty_tpl) {?><html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

Address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>

</pre>

</body>
</html>
<?php }} ?>