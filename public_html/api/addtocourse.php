<?PHP
global $pdo
$p = "INSERT INTO grade VALUES(Student_Fk = :st, Course_Fk = :cfk)";

$st = $pdo->prepare($q);
$st->bindParam(":st",$_POST["Student_Id"]);
$st->bindParam(":cfk",$_POST["Course_Id"]);
if($st->execute()){
  $results = true;
}
else{
  $results = "bad insert";
}
echo $results
?>
