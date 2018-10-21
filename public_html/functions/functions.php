<?php

function setSession($User){
  $_SESSION["user"] = serialize($User);

}

function getSession(){
  $_SESSION["user"] = serialize(User::getUser(1));
  if (array_key_exists("user", $_SESSION)){
    return unserialize($_SESSION["user"]);
  }

}




 ?>
