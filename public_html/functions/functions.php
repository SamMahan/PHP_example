<?php

function setSession($User){
  $_SESSION["user"] = serialize($User);

}

function getSession(){
  if (array_key_exists("user", $_SESSION)){
    return unserialize($_SESSION["user"]);
  }else{
    return false;
  }

}




 ?>
