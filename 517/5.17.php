<?php 

public static function GetUglyNumber_Solution($index)
{
	if(number_format($index)) {
		while ($index%2<=value) {
			return "能被二整除";
		}
		while ($index%3<=value) {
			return "能被三整除";
		}
		while ($index%5<=value) {
			return "能被五整除";
		}
		return $index;
	}
	return "这个数是丑数";
}