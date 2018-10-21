<?php
require_once "../private_html/config.inc.php";
require_once PRIVATE_PATH . "dbconfig.inc.php";

if(!isset($_GET['id'])){
    $smarty->assign("message", "No id selected.");
    $smarty->display("viewStudent.tpl");
    exit();
}
$studentID = $_GET['id'];
$query = "SELECT * FROM Student WHERE Student_OID = :id";
$statement = $pdo->prepare($query);
$statement->bindParam(":id", $studentID);
$statement->execute();
if($statement->rowCount() != 1){
    $smarty->assign("message", "No record found for the student with the id of "
        . $studentID);
    $smarty->display("viewStudent.tpl");
    exit();
}
//$smarty->assign("WEB_URL", "http://localhost/291web/");

$smarty->assign("student", $statement->fetch(PDO::FETCH_ASSOC));
$smarty->display("viewStudent.tpl");