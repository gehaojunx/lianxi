<?php 
function NumberOf1($n){
	$n = 10;
	for ($i=0;$i<$n;$i++) 
	{ 
		$char = print_r(bin2hex($n));
		$pos = in_array($char,$n);
	}
	
}