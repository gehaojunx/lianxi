<?php 

class Integer
{
	public static function inte($arr){
		$arr1=[];
		$arr2=[];
		foreach ($arr as $k=>$v)
		{
			if ($v%2 == 1) {
			
			$arr1[] = $v;
		}else{
			$arr2[] = $v;
		}
	}

	return array_merge($arr1,$arr2);
}
public static function tj($num){
	if ($num == 1) {
		return 1;
	}
	if ($num == 2) {
		return 2;
	}
	return self::tj($num-1)+ self ::tj($num-2);
	}
}