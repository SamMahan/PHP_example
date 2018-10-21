<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <link rel="stylesheet" href="{$WEB_URL}css/bootstrap.css" />
    <link rel="stylesheet" href="{$WEB_URL}css/bootstrap-theme.css" />
    <link rel="stylesheet" href="{$WEB_URL}css/style.css" />
    <script src="{$WEB_URL}js/bootstrap.js"></script>
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
                <li class="active"><a href="{$WEB_URL}index.php">Course Listings</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Student Details</h1>
            {if isset($message)}
                <div class="alert alert-danger">
                    {$message}
                </div>
            {else}
                <div class="panel panel-primary">
                    <div class="panel-heading">
                            <a href="#" id="First_Name" class = "editable-click" data-type="text" data-Student_OID="{$student.Student_OID}" data-url="./api/updateStudent.php" data-title="Enter username"><h2>{$student.First_Name}</h2></a>
                            <a href="#" id="Last_Name" class = "editable-click" data-type="text" data-Student_OID="{$student.Student_OID}" data-url="./api/updateStudent.php" data-title="Enter username"><h2> {$student.Last_Name}</h2></a>
                    </div>
                    <div class="panel-body">
                        <a href="#" id="Email" class = "editable-click" data-type="text" data-Student_OID="{$student.Student_OID}" data-url="./api/updateStudent.php" data-title="Enter username"><p>Email: {$student.Email}</p></a>
                        <a href="#" id="Grade" class = "editable-click" data-type="text" data-Student_OID="{$student.Student_OID}" data-url="./api/updateStudent.php" data-title="Enter username"><p>Grade Level: {$student.Grade_Level}</p></a>
                    </div>
                </div>
            {/if}
            <a href="dbExample.php">Return to Course List</a>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{$WEB_URL}lib/Bootstrap/js/bootstrap.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>
