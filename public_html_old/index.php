<?php
require_once "../private_html/config.inc.php";
require_once PRIVATE_PATH . "dbconfig.inc.php";

$sql = "SELECT Course_OID, Course_Name,
                 T.First_Name AS Teacher_First_Name, T.Last_Name AS Teacher_Last_Name,
                 Student_OID, S.First_Name AS Student_First_Name,
                    S.Last_Name AS Student_Last_Name, Email
          FROM Course JOIN Teacher AS T ON Teacher_FK = Teacher_OID
          JOIN Grade ON Course_OID = Course_FK
          JOIN Student AS S ON Student_OID = Student_FK
          ORDER BY Course_Name , S.Last_Name, S.First_Name";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$oldCourse = -1;
$courseList = array();
$results = false;
while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $results = true;
    //if new course
    if($oldCourse != $row['Course_OID']) {
        if($oldCourse != -1){
            //    add student array to the previous course array
            $course["Students"] = $students;
            //    add previous course array to the big array
            $courseList[$oldCourse] = $course;
        }
        //    start new course
        //        add database course name and teacher
        $course = array(
            "Course_Name" => $row['Course_Name'],
            "Teacher_First_Name" => $row['Teacher_First_Name'],
            "Teacher_Last_Name" => $row['Teacher_Last_Name'],
            "Course_OID"=>$row['Course_OID']
        );
        //        save course id to oldCourse
        $oldCourse = $row['Course_OID'];
        //    start a brand new student array
        $students = array();
        //----------
    }
    //add student to the student array
    $students[$row['Student_OID']] = array(
        "Student_First_Name" => $row['Student_First_Name'],
        "Student_Last_Name" => $row['Student_Last_Name'],
        "Email" => $row['Email']
    );
}
// Add the last built course to the courses array
//    add student array to the previous course array
$course["Students"] = $students;
//    add previous course array to the big array
$courseList[$oldCourse] = $course;

$smarty->assign("results", $results);
$smarty->assign("courseList", $courseList);
$smarty->display("courseList.tpl");
