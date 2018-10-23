<?php /* Smarty version Smarty-3.1.15, created on 2018-10-23 14:52:49
         compiled from "C:\MAMP\htdocs\PHP_example\public_html\templates\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3436629165adab47bce2dd3-47453788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '206f0eb54ee406185b8d574e95bbab759d64e321' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\PHP_example\\public_html\\templates\\modal.tpl',
      1 => 1540320453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3436629165adab47bce2dd3-47453788',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5adab47bd13bf2_64910049',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5adab47bd13bf2_64910049')) {function content_5adab47bd13bf2_64910049($_smarty_tpl) {?><div id="login-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">

          <form>
            <h3>email</h3>
            <input type="text" name="email"><br>
            <h3>password</h3>
            <input type="text" name="password">
  </form>
      <div class="modal-footer">
        <button type = "button" class="btn btn-default" id = "login">Login</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>

<!--to register-->
<div id="register-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">register</h4>
      </div>
      <div class="modal-body">

          <form>
            <h3>username</h3>
            <input type="text" id="lusername"><br>
            <h3>email</h3>
            <input type="text" id="lemail"><br>
            <h3>password</h3>
            <input type="text" id="lpassword">
  </form>
      <div class="modal-footer">
        <button type = "button" class="btn btn-default" id = "register">register</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
<?php }} ?>
