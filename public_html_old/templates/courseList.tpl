<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link rel="stylesheet" href="{$WEB_URL}css/bootstrap.css" />
    <link rel="stylesheet" href="{$WEB_URL}css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="{$WEB_URL}css/style.css" />

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
            {if !$results}
                <div class="alert alert-danger">
                    There are no course listings available at this time.
                </div>
            {else}
            {foreach $courseList as $courseID => $course}
                <div data-id="{$courseID}"class="panel panel-primary">
                    <div class="panel-heading">

                        <h2>Course: {$course.Course_Name}</h2>
                        <p>Teacher: {$course.Teacher_First_Name} {$course.Teacher_Last_Name}</p>

                    </div>
                    <div class="panel-body">
                        {if $course.Students === false}
                            <div class="alert alert-warning">There are no students in this course</div>
                        {else}
                            <table>
                                <tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>
                                {foreach $course.Students as $studentID => $student}
                                    <tr><td>
                                            <a href="viewStudent.php?id={$studentID}">
                                                {$student.Student_First_Name}
                                            </a>
                                        </td>
                                        <td>{$student.Student_Last_Name}</td>
                                        <td>{$student.Email}</td>
                                    </tr>
                                {/foreach}
                            </table>
                            <a class = "newUser" data-toggle="modal" data-target="gModal"> <button id="{$course.Course_OID}"> pick a student</button></a>
                          <!--  <a href<i class = "fa fa-plus"> </i>-->

                        {/if}
                    </div>
                </div>
            {/foreach}
            {/if}

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--<script src="{$WEB_URL}lib/Bootstrap/js/bootstrap.min.js"></script>
<script src="{$WEB_URL}js/bootstrap.js"></script>-->
{$smarty.const.LIBS}
<script src="ajax.js"></script>
{include file="modal.tpl"}
</body>
</html>
