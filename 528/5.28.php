<?php 	

function Find($target, $array)
{
    $target = 7 ;
     $array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
    array_multisort($array);
    array_merge($target,$array);
    Find($target,$array);
}