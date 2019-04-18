<?php 
header("content-type:text/html;charset=utf8");
function Choushu($nums)
{
	if (!$nums) {
		echo "输入一个数";
	}
	while ($nums%2==0) 
	{
		$nums = $nums/2;
		echo "除以2直到不能整除，";
	}
	while ($nums%3==0) 
	{
		$nums = $nums/3;
		echo "除以3直到不能整除，";
	}
	while ($nums%5==0) 
	{
		$nums = $nums/5;
		echo "除以5直到商为1或者不能整除";
	}
	if ($nums==1) 
	{
		echo "<br/>";
		echo "这个数是丑数";
	}else{
		echo "<br/>";
		echo "这个数不是丑数";
	}
}
Choushu(1855);