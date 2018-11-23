<?php 
header("content-type:text/html;charset=utf8");
$pdo =new PDO('mysql:host=localhost;dbname=month_10;charset=utf8','root','root');
$redis = new Redis();
$redis->connect('127.0.0.1',"6379");
$name= $_POST['name'];
$password = $_POST['password'];
$code = $_POST['code'];
$rediscode = $redis->get("code");
if($rediscode==$code){
	$res = $pdo->exec($sql);
}
if ($res) {
	$data = array("code"=>2,"msg"=>"注册成功");
}else{
   $data = array("code"=>1,"msg"=>"注册验证码有误");
}else{
	$data = array("code"=>0,"msg"=>"注册失败,验证码过期");
}

 ?>