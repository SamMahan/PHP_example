<?php
require_once "../private_html/config.inc.php";
$currUser = getSession();
$opPosts = POST::getOriginals();
//echo $opPosts."--------";
$smarty->assign("currUser", $currUser);
$smarty->assign("opPosts", $opPosts);
$smarty->display("posts.tpl");
?>
