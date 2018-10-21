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
            <a class="navbar-brand" href="#">PHP example</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Login</a></li>
                <li><a href="#about">Sign up</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
{if $currUser != false}

<div class="container-fluid">
  <div class = "col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <h1> Welcome, {$currUser->name}!</h1>

</div>
{/if}

<div class="container-fluid">
    <div class="row">
    <!-- makes new post -->
      {foreach $opPosts as $key => $val}
        {assign "opUser" $val->getUser()}
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class = "row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h4> {$opUser->name} </h4>
            <div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>{$val->content}</p>
              <div>
              <hr/>
              <!-- makes new comment foreah post -->
              {foreach $val->getComments() as $key2 => $val2}
              {if $val2 != false}
              <div class = "col-lg-11 col-md-11 col-sm-11 col-xs-11 col-offset-1">
                <h5>{$val2->getUser()->name}</h5><p> -> {$val2->content}</p>
              </div>
              {/if}
              {/foreach}
          </div>
          {/foreach}

        </div>

                            <a class = "newUser" data-toggle="modal" data-target="gModal"> <button id="{**$course.Course_OID*}"> pick a student</button></a>
                          <!--  <a href<i class = "fa fa-plus"> </i>-->



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
