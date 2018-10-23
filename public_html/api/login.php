<?PHP
require_once "../../private_html/config.inc.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
$data= $_POST["data"];
$data = json_decode($data);

$code = 200;
$user = User::login($data.email, $data.password);

if($user){
  setSession($user);
}else{
  $code = 400;
}

http_response_code($code);
}
?>
