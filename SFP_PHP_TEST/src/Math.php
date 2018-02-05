<?php

namespace Sfp{
	
class Math
	{
	$file = fopen("C:\Users\hoodt\Desktop\SFP_PHP_TEST\assets\tabular.csv", "r");
	while(! feof($file){
		$array = array_column($file);
		$avg = array_sum($array(1)) / count($array);
		
		if ($array(2) == TRUE){
			echo round($avg, 10);
		}
		else{
			return false;
		}
	}	
	fclose($file);
	}
}

?>