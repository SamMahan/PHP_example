<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <!--<link rel="stylesheet" href="{$WEB_URL}css/bootstrap.css" />-
    <link rel="stylesheet" href="{$WEB_URL}css/bootstrap-theme.min.css" />-->
    <link rel="stylesheet" href="{$WEB_URL}css/style.css" />
    {if $currUser}
<div id = "metadata" data-userid ="{$currUser->user_id}" data-name="{$currUser->name}"> </div>
{/if}
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
              {if !$currUser}
                <li class="active"><a href="#" data-toggle = "modal" data-target="#login-modal">Login</a></li>
                <li><a href="#" data-toggle = "modal" data-target = "#register-modal">Sign up</a></li>
              {/if}
              {if $currUser}
              <li class="active"><a href="#" data-toggle = "modal" data-target="#post-modal">make a post!</a></li>
              {/if}
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
{if $currUser != false}

<div class="container-fluid">
  <div class = "row">
  <div class = "col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <h2> Welcome, {$currUser->name}!</h2>
  </div>
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
            </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>{$val->content}</p>
              </div>
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
        </div>

          {/foreach}

    </div>
</div>

<!-- Bootstrap core JavaScript ======================================================
     Placed at the end of the document so the pages load faster                   -->

{$smarty.const.LIBS}

{if $currUser}



{/if}


</body>
{include file="modal.tpl"}
</html>
