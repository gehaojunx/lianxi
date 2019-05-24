<?php 

function Add($num1, $num2)
{
	$num1 = 1;
	$num2 = 2;
	$sum = array_merge_recursive($num1,$num2);
	return $sum;
}