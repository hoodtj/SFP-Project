<?php

namespace Sfp{
	
class Even
{
		//Create function which opens file and assigns it to variable $file
		//While function grabs arrays from $file
	function content(){
	$file = fopen("C:\Users\hoodt\Desktop\SFP_PHP_TEST\assets\numbers.csv", "r");
		while(! feof($file){
			print_r(fgetcsv($file));
		}
	fclose($file);
	}
}
	$obj = new Even;		//Assign class to new variable
	echo count($obj);		//Display the count of number of arrays
}
?>