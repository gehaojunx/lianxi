<?php 
function Combine($arr_A, $arr_B)
{
	$arr_A=[1,3,6,9];
	$arr_B=[2,4,5,8,20];
	array_multisort($arr_A.$arr_B);
	return Combine($arr_A,$arr_B);
}