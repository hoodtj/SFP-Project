<?php

namespace Sfp{
	
class Even
{
	function content(){
	$file = fopen("C:\Users\hoodt\Desktop\SFP_PHP_TEST\assets\numbers.csv", "r");
		while(! feof($file){
			print_r(fgetcsv($file));
		}
	fclose($file);
	}
}
	$obj = new Even;
		
	var_dump($obj);
	echo count($obj);
}
?>