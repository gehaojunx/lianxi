<?php 
header("content-type:text/html;charset=utf8");
$pdo =new PDO('mysql:host=localhost;dbname=month_10;charset=utf8','root','root');
$name= $_POST['name'];
$password = $_POST['password'];
$sql = "select * from month_10 where name=$name and password=$password";
if ($data=$pdo->query($sql)->fetch()) {
	echo "<script>alert('登录成功');location.href=''</script>";
}else{
	echo "<script>alert('登录失败');location.href=''</script>";
}

 ?>