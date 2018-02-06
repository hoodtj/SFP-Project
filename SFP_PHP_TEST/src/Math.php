<?php

namespace Sfp{
	
class Math
	{
	$file = fopen("C:\Users\hoodt\Desktop\SFP_PHP_TEST\assets\tabular.csv", "r");
	while(! feof($file){
		$array = fgetcsv($file);		
		$avg = array_sum($array(1)) / count($array);	//Assign average to variable $avg
		
		if ($array(2) == TRUE){							//If column ACCEPT is true dispay
			echo round($avg, 10);						//average to the 10th precision
		}
		else{
			return false;
		}
	}	
	fclose($file);
	}
}

?>