<?php 

public static function FindNumsAppearOnce($array)
{
	$array = [2,4,3,6,3,2,5,5];
	$arr = array_multisort($array);
	$res = substr($array, $arr);

}
return $res;
