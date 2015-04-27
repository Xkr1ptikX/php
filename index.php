<?php

	function greet($name){
		echo "Hello " . $name . ".<br>";
	}

	function printArray($array){
		for ($i = 0; $i < sizeof($array); $i++){
			echo "index " . ($i + 1) . ": " . $array[$i] . "<br>";
		}
	}
	
	greet("Jason");

	$names = array("Jason", "Milena", "Isabel", "Spike");
	printArray($names);

?>