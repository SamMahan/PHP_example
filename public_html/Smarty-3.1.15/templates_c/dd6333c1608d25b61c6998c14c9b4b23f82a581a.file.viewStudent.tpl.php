<?php /* Smarty version Smarty-3.1.15, created on 2018-04-09 12:23:25
         compiled from "C:\@CloudDrives\GoogleDrive\SD\Playground\cis401\public_html\templates\viewStudent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118365acb937d73cfa0-37602344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6333c1608d25b61c6998c14c9b4b23f82a581a' => 
    array (
      0 => 'C:\\@CloudDrives\\GoogleDrive\\SD\\Playground\\cis401\\public_html\\templates\\viewStudent.tpl',
      1 => 1523290956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118365acb937d73cfa0-37602344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_URL' => 0,
    'message' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5acb937d7b9fd4_91897254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb937d7b9fd4_91897254')) {function content_5acb937d7b9fd4_91897254($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/bootstrap-theme.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
css/style.css" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
js/bootstrap.js"></script>
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
            <a class="navbar-brand" href="#">Student Course Example</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
index.php">Course Listings</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Student Details</h1>
            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            <?php } else { ?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2><?php echo $_smarty_tpl->tpl_vars['student']->value['First_Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['student']->value['Last_Name'];?>
</h2>
                    </div>
                    <div class="panel-body">
                        <p>Email: <?php echo $_smarty_tpl->tpl_vars['student']->value['Email'];?>
</p>
                        <p>Grade Level: <?php echo $_smarty_tpl->tpl_vars['student']->value['Grade_Level'];?>
</p>
                    </div>
                </div>
            <?php }?>
            <a href="dbExample.php">Return to Course List</a>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['WEB_URL']->value;?>
lib/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
