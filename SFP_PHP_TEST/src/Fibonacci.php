<?php

namespace Sfp{
	
class Fibonacci
	{
$file = fopen(("C:\Users\hoodt\Desktop\SFP_PHP_TEST\assets\fibonacci.csv", "r");
	while(! feof($file)){
		$info = fgetcsv($file);
		for(i = 0, i < $info, $i += 9){		//For loop which runs till argument is false
		echo $info[$i] </br>;				//Displays each result of for loop
		}
	}
fclose($file);
}
?>