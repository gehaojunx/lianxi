<?php 

class Math{
	public static function sum($n)
	{
		$sum = $n;
		$sum ($sum+=selt::sum(n:$n-1));
		return $sum;
	}
}
$n = Math::sum(100);
var_dump($n);