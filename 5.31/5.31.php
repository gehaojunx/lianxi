<?php 
	function test($a,$b)
	{
		if ($a == $b) {
			return 0;
		}
		return ($a<$b)?-1:1;
	}
	$a = array(3,2,5,6,1);
	usort($a, "test");
	foreach ($a as $key => $value) {
		$echo "$key:$value\n";
	}
	$cz = stripos($a);
	print_r(array_multisort($cz));