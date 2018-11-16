<?php 
$redis = new redis;
$redis ->connect('127.0.0.1',6379);
$city=$_GET['city'];
if ($redis->exists($city)) {
	$str=$redis->get($city);
	echo "from redis";
	echo "$str";
}else{
	$key='e7736ec1010242c7bf7e97d37881a511';
	$url='https://free-api.heweather.com/s6/weather/forecast?location=$city&key=$key';

	$str = curl_get($url);
	$data= json_decode($str,true);
	$data= $data['']
}

 ?>