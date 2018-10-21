<?php /* Smarty version Smarty-3.1.15, created on 2018-04-09 12:25:51
         compiled from "C:\@CloudDrives\GoogleDrive\SD\Playground\cis401\public_html\templates\courseList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78365acb938a81cd48-77309309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ddbedbcc1b0899b2e6fa7422b993570c36f3e90' => 
    array (
      0 => 'C:\\@CloudDrives\\GoogleDrive\\SD\\Playground\\cis401\\public_html\\templates\\courseList.tpl',
      1 => 1523291148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78365acb938a81cd48-77309309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5acb938a8c4d00_01056855',
  'variables' => 
  array (
    'WEB_URL' => 0,
    'results' => 0,
    'courseList' => 0,
    'course' => 0,
    'studentID' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acb938a8c4d00_01056855')) {function content_5acb938a8c4d00_01056855($_smarty_tpl) {?><!DOCTYPE html>
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
                <li class="active"><a href="index.php">Course Listings</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Course Listings</h1>
            <?php if (!$_smarty_tpl->tpl_vars['results']->value) {?>
                <div class="alert alert-danger">
                    There are no course listings available at this time.
                </div>
            <?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_smarty_tpl->tpl_vars['courseID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['courseList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
 $_smarty_tpl->tpl_vars['courseID']->value = $_smarty_tpl->tpl_vars['course']->key;
?>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Course: <?php echo $_smarty_tpl->tpl_vars['course']->value['Course_Name'];?>
</h2>
                        <p>Teacher: <?php echo $_smarty_tpl->tpl_vars['course']->value['Teacher_First_Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['course']->value['Teacher_Last_Name'];?>
</p>
                    </div>
                    <div class="panel-body">
                        <?php if ($_smarty_tpl->tpl_vars['course']->value['Students']===false) {?>
                            <div class="alert alert-warning">There are no students in this course</div>
                        <?php } else { ?>
                            <table>
                                <tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>
                                <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_smarty_tpl->tpl_vars['studentID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['course']->value['Students']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
 $_smarty_tpl->tpl_vars['studentID']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
                                    <tr><td>
                                            <a href="viewStudent.php?id=<?php echo $_smarty_tpl->tpl_vars['studentID']->value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['student']->value['Student_First_Name'];?>

                                            </a>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value['Student_Last_Name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value['Email'];?>
</td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php }?>
                    </div>
                </div>
            <?php } ?>
            <?php }?>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</body>
</html><?php }} ?>
