<?php 

function CountSteps($x,$y)
{
	$x = 1;
	$y = 1;
	$xy = bin2hex($x,$y);
	$xx = array_sum($xy);
	var_dump($xx);
}