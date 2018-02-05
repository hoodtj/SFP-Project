<?php

namespace Sfp{
	
class Fibonacci
	{
$file = fopen(("C:\Users\hoodt\Desktop\SFP_PHP_TEST\assets\fibonacci.csv", "r");
	while(! feof($file)){
		print_r(fgetcsv($file));
		for(i = 0, i < $file, $i += 9){
		echo $file[$i] </br>;
		}
	}
fclose($file);
}
?>