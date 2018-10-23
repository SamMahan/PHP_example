<?PHP
require_once "../../private_html/config.inc.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
$data= $_POST["data"];
$data = json_decode($data);
$userdata = [];
foreach($data as $key=>$val){
  $userdata["$key"] = $val;
}
$code = 200;
$user = Post::create($userdata);

if($user){
  setSession($user);
}else{
  $code = 400;
}

http_response_code($code);
}
?>
