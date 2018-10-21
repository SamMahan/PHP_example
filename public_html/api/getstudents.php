<?PHP
require_once "../../private_html/config.inc.php";
require_once "../../private_html/dbconfig.inc.php";
global $pdo;
if($_SERVER['REQUEST_METHOD'] == "POST"){
$data= $_POST;



$q = "SELECT DISTINCT student.Student_OID, student.First_Name, Student.Last_Name, student.Email From Student
INNER JOIN grade ON Student_OID = student_FK INNER JOIN course ON course_OID = course_FK WHERE Student_OID Not IN(SELECT student.Student_OID From Student
INNER JOIN grade ON Student_OID = student_FK INNER JOIN course ON course_OID = course_FK where course_OID =:c)";

$st = $pdo->prepare($q);
$st->bindParam(":c", $_POST['Course_Id']);
if($st->execute()){
  $result = $st->fetchAll(PDO::FETCH_ASSOC);

}else{
  $result = $st->error();
}

echo json_encode($result);
}
?>
