<?PHP
require_once "../../private_html/config.inc.php";
require_once "../../private_html/dbconfig.inc.php";
global $pdo;
if($_SERVER['REQUEST_METHOD'] == "POST"){
$data= $_POST;



$q = "INSERT INTO grade (Student_FK ,Course_Fk) VALUES(:sfk, :cfk)";

$st = $pdo->prepare($q);
$st->bindParam(":cfk", $_POST['Course_Id']);
$st->bindParam(":sfk",$_POST['Student_Id']);
if($st->execute()){
$result = true;


}else{
  $result = $st->error();
}

echo json_encode($result);
}
?>
