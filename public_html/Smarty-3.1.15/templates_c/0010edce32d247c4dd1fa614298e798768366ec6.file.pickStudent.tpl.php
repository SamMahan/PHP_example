<?php /* Smarty version Smarty-3.1.15, created on 2018-04-20 23:37:17
         compiled from "C:\MAMP\htdocs\PHP_example\public_html\templates\pickStudent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12753704755adab1ed409462-53756322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0010edce32d247c4dd1fa614298e798768366ec6' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\PHP_example\\public_html\\templates\\pickStudent.tpl',
      1 => 1524279615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12753704755adab1ed409462-53756322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5adab1ed5914e5_24317828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adab1ed5914e5_24317828')) {function content_5adab1ed5914e5_24317828($_smarty_tpl) {?><div class = "row">
<h3 class = "title"> Pick a student to add to the course</h3>

</div>
<div class = "row">
<div class="dropdown">
 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pick a student
 <span class="caret"></span></button>
 <ul class="dropdown-menu">
   <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
   <li class = "addable_student" data-id = "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['value']->value["Last_Name"];?>
 , <?php echo $_smarty_tpl->tpl_vars['value']->value["First_Name"];?>
 </li>
   <?php } ?>
 </ul>
</div>
</div>
<!--turbolinks-->
<?php }} ?>
