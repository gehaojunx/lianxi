<?php 

public static function calFn($n，$m)
{
	$n = min;
	$m = max;
	for ($i=n; $i <m; $i++) { 
		array_count_values($n,$m);
	}
	return $n,$m;
}
print_r($n,$m);