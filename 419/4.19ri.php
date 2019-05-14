<?php 

header("content-type:text/html;charset=utf8");

function index($n, $m)
{
	$list = rang(1,$n);
	$num = 1;
	while (count($list)>1) {
		foreach ($list as $k => $v) {
			if ($num == $m) {
				unset($list[$k]);
				$num = 1;
				continue;
			}
			$num++;
		}
	}
	return $list
}