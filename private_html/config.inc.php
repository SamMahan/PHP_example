<?php
/* ====================================================================================
   config.inc.php
   ------------------------------------------------------------------------------------
   This file must be included at the beginning of every PHP file!

   Define main path constants. All other path related constants defined in other files
   are based on these constants.

   $local, when set to true, indicates we are working in a development environment and
   the path related constants are set accordingly.
*/
$local = true;

#
# Define BASE_PATH
#
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp)-1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('WEB_PATH', BASE_PATH . 'public_html/');
define('WEB_URL', "http://localhost/PHP_example/public_html/");
#
# Set PHP configuration options
define('CLASS_ROOT', BASE_PATH . 'public_html/class/');
#
# Set common constants
define('PRIVATE_PATH', BASE_PATH . 'private_html/');
#
# Set Smarty constants
define('SMARTY_ROOT', WEB_PATH . 'Smarty-3.1.15/');
define('SMARTY_TEMPLATES', WEB_PATH . 'templates/');
define('SMARTY', SMARTY_ROOT . 'libs/Smarty.class.php');

/*
 * The following has been added to resolve the problem of relying on the system's timezone settings.
 */
date_default_timezone_set('America/New_York');

# Define the Smarty template/presentation framework.
define("LIBS", '<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>');
/* ------------------------------------------------------------------------------------
 * This application uses Smarty, a template/presentation framework which can be
 * downloaded from www.Smarty.net
 */
require_once SMARTY;
$smarty = new Smarty;
$smarty -> setTemplateDir(SMARTY_TEMPLATES);
$smarty -> setCompileDir(SMARTY_ROOT . 'templates_c');
$smarty -> setCacheDir(SMARTY_ROOT . 'cache');
$smarty -> setConfigDir(SMARTY_ROOT . 'configs');
$smarty -> assign('WEB_URL', WEB_URL);

require_once "dbconfig.inc.php";

require_once "../public_html/class/Class_Post.php";
require_once "../public_html/class/Class_User.php";

require_once "../public_html/functions/functions.php";
