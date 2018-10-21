<?php /* Smarty version Smarty-3.1.15, created on 2018-10-20 23:39:53
         compiled from "C:\MAMP\htdocs\PHP_example\public_html\templates\posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8603258395bcbf1a2e54280-42882093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f92febb521c6dc0e200c09bf182f0906e8d627f1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\PHP_example\\public_html\\templates\\posts.tpl',
      1 => 1540093191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8603258395bcbf1a2e54280-42882093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5bcbf1a2f1f096_67838563',
  'variables' => 
  array (
    'WEB_URL' => 0,
    'currUser' => 0,
    'opPosts' => 0,
    'val' => 0,
    'opUser' => 0,
    'val2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcbf1a2f1f096_67838563')) {function content_5bcbf1a2f1f096_67838563($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/style.css" />

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">PHP example</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Login</a></li>
                <li><a href="#about">Sign up</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<?php if ($_smarty_tpl->tpl_vars['currUser']->value!=false) {?>

<div class="container-fluid">
  <div class = "col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <h1> Welcome, <?php echo $_smarty_tpl->tpl_vars['currUser']->value->name;?>
!</h1>

</div>
<?php }?>

<div class="container-fluid">
    <div class="row">
    <!-- makes new post -->
      <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['opPosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
        <?php $_smarty_tpl->tpl_vars["opUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['val']->value->getUser(), null, 0);?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class = "row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h4> <?php echo $_smarty_tpl->tpl_vars['opUser']->value->name;?>
 </h4>
            <div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p><?php echo $_smarty_tpl->tpl_vars['val']->value->content;?>
</p>
              <div>
              <hr/>
              <!-- makes new comment foreah post -->
              <?php  $_smarty_tpl->tpl_vars['val2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value->getComments(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val2']->key => $_smarty_tpl->tpl_vars['val2']->value) {
$_smarty_tpl->tpl_vars['val2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['val2']->key;
?>
              <?php if ($_smarty_tpl->tpl_vars['val2']->value!=false) {?>
              <div class = "col-lg-11 col-md-11 col-sm-11 col-xs-11 col-offset-1">
                <h5><?php echo $_smarty_tpl->tpl_vars['val2']->value->getUser()->name;?>
</h5><p> -> <?php echo $_smarty_tpl->tpl_vars['val2']->value->content;?>
</p>
              </div>
              <?php }?>
              <?php } ?>
          </div>
          <?php } ?>

        </div>

                            <a class = "newUser" data-toggle="modal" data-target="gModal"> <button id=""> pick a student</button></a>
                          <!--  <a href<i class = "fa fa-plus"> </i>-->



        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--<script src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
lib/Bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
js/bootstrap.js"></script>-->
<?php echo @constant('LIBS');?>

<script src="ajax.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
