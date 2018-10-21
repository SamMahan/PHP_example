<?php

class User {
  protected $user_id;
  protected $email;
  protected $name;
  protected $password;

  public function __construct($dbData = "") {
      $this -> user_id = $dbData["user_id"];
      $this -> name = $dbData["name"];
      $this -> email = $dbData["email"];
      $this -> password = $dbData["password"];
      $this -> created = $dbData["created"];

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

  public static function getUser($id){
    global $pdo;
    $q = "SELECT * FROM user WHERE user_id = :id";
    $stmt = $pdo->prepare($q);

    $stmt -> bindParam(":id", $id);
    $stmt -> execute();

    $err = $stmt->errorInfo();
    if($err[0]!= 0){
      echo Implode($err, "::");
      return false;
    }else{
      $return = $stmt->fetch(PDO::FETCH_ASSOC);
      $userdata = $return;
      echo "-------->>".Implode($userdata, "::")."<<---------";
      return new User($userdata);

    }

  }

  public static  function login($email, $password){
    global $pdo;
    $ldata = [];
    $q = "SELECT * FROM user WHERE email = :em AND password = :pas)";
    $stmt = $pdo -> prepare($q);
    $stmt -> bindParam(":em", $email);
    $stmt -> bindParam(":pas", $password);

    $stmt -> execute();

    $err = $stmt->errorInfo();
    if($err[0]!= null){
      echo Implode($err, "::");
      return false;
    }else{
      $return = $stmt-fetch(PDO::FETCH_ASSOC);
      $userdata = $return [1];
      return new User($userdata);

    }
  }

  public static function create($data){
    global $pdo;
    $ldata = [];
    $q = "INSERT INTO user VALUES(:nm, :em, :pas)";
    $stmt = $pdo -> prepare($q);
    $stmt -> bindParam(":nm", $data["name"]);
    $stmt -> bindParam(":em", $data["email"]);

  // DO NOT DO ThiS HASH YOUR PASSWORD FIRST
  // I'm just lazy and this app is usable as a demo only
    $stmt -> bindParam(":pas", $data["password"]);

  $stmt ->execute();
  $err = $stmt ->errorInfo();
  if($err[0]!= null){
    echo Implode($err, "::");
    return false;
  }else{
    $id = $pdo->lastInsertId();
    return User::getUser($id);

  }
}

  public function makePost($Data){

    return UserFactory::makePost($Data, $this-> user_id);
  }

}
class UserFactory {
    public static function makePost($Data,$UserId){
      $Data["user_fk"] = $User_Id;
      return Post::create($Data);
    }
}
