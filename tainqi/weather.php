<?php 
header("content-type:text/html;charset=utf8");
// $redis = new Redis();
// $redis->count("127.0.0.1",6379);
$city = $_POST['city'];
$url= "http://api.k780.com:88/?app=weather.future&weaid=$city&&appkey=10003&sign=b59bc3ef6191eb9f747dd4e83c99f2a4&format=json";
// if ($redis->get("data".$city)) {
	// $data = $redis->get("data".$city);
// }else{
	$data = file_get_contents($url);
	// $redis->set("data".$city,$data);
// }
$data = json_decode($data,true);
$res = $data['result'];
echo json_encode($res);
 ?>