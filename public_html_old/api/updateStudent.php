<?PHP
require_once "../../private_html/config.inc.php";
require_once "../../private_html/dbconfig.inc.php";
global $pdo;
if($_SERVER['REQUEST_METHOD'] == "POST"){
$data= $_POST;
$Fields = array();
$Values = array();
foreach($_POST as $key=>$value){
  $Fields[] = ":"+$key;
  $Values[] = $value;
}
$eFields = explode(", ", $Fields);
$eValues = explode(", ", $Values)
$q = "INSERT INTO student ( $eFields) VALUES ($eValues)"

$st = $pdo->prepare($q);
for($i = 0; i<$Fields.length; i++){
  $st->bindParam("$eFields", $eValues);
}

if($st->execute()){
$result = true;


}else{
  $result = $st->error();
}

echo json_encode($result);
}
?>
