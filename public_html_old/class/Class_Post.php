<?php

class Post {
  public  $post_id;
  public  $content;
  public $created_by;
  public $created;
  public $post_fk;
  public $user_fk;

  public function __construct($DbData = "") {
      $this -> post_id = $DbData["post_id"];
      $this -> content = $DbData["content"];
      $this -> created_by = $DbData["created_by"];
      $this -> created = $DbData["created"];
      $this -> post_fk = $DbData["post_fk"];
      $this -> user_fk = $DbData["user_fk"];

  }

  public function __set($name, $value) {
      if (property_exists($this, $name)){
          $this -> $name = $value;
      }
  }

  public function __get($name) {
      if (property_exists($this, $name)) {
          return $this -> $name;
      }
    }

  public static function create($Data, $PostFk = null){
    global $pdo;
    $postFkInsert = null;
    if(array_key_exists("post_fk", $Data)){
      $postFkInsert = $Data["post_fk"];
    }
    $q = "INSERT INTO post VALUES(
      content = :con,
      created_by = :cb,
      post_fk = :pfk,
      user_fk = :ufk)";
    $stmt = $pdo->prepare($q);

    $stmt->bindParam(":con", $Data["content"]);
    $stmt->bindParam(":cb", $Data["created_by"]);
    $stmt->bindParam(":pfk", $postFkInsert);
    $stmt->bindParam("ufk", $Data["user_fk"]);

    $stmt->execute();

    $err = $stmt->errorInfo();
    if($err[0]!= null){
      echo Implode($err, "::");
      return false;
    }else{
      $id = $pdo->lastInsertId();

      return Post::getPost($id);
    }

  }

  public static function getPost($id){
    global $pdo;
    $q = "SELECT * FROM post WHERE post_id = :id";
    $stmt = $pdo->prepare($q);

    $stmt -> bindParam(":id", $id);
    $stmt -> execute();

    $err = $stmt->errorInfo();
    if($err[0]!= null){
      echo Implode($err, "::");
      return false;
    }else{
      $row = $stmt-fetch(PDO::FETCH_ASSOC);

      return new Post($row);
    }
  }

  public static function getOriginals(){
    global $pdo;
    $return = [];

    $q = "SELECT * FROM post WHERE post_fk = null";
    $stmt = $pdo->prepare($q);
    $stmt -> execute();

    $err = $stmt->errorInfo();
    if($err[0]!= null){
      echo Implode($err, "::");
      return false;
    }else{
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $return[] = new Post($row);
      }

    }
  }

  public function getComments(){
    global $pdo;
    $return = [];
    $id = $this -> post_id;

    //I can insert  the $id parameter without binding it because I am using the object's
    //ID property, a value generated by the database,  not outside user input
    $q = "SELECT * FROM post WHERE post_fk = $id";
    $stmt = $pdo->prepare($q);
    $stmt -> execute();

    $err = $stmt->errorInfo();
    if($err[0]!= null){
      echo Implode($err, "::");
      return false;
    }else{
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $return[] = new Post($row);
      }
      return $return;
    }
  }

  }
