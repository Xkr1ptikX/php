<?php

	// bubble sort
	function doBubbleSort($array){
		for ($i = 0; $i < sizeof($array); $i++){
			for ($j = 0; $j < sizeof($array) - 1; $j++){
				if ($array[$j] > $array[$j + 1]){
					$temp = $array[$j];
					$array[$j] = $array[$j + 1];
					$array[$j + 1] = $temp;
				}
			}
		}
		
		return $array;
	}
	
	// function for printing an array
	function printArray($array){
		echo "{";
		for ($i = 0; $i < sizeof($array); $i++){
			echo $array[$i];
			if ($i < sizeof($array) - 1){
				echo ", ";
			}
		}
		echo "}<br>";
	}
	
	// main method
	$numArray = array(99, 54, 8, 19, 25, 1, 42, 37, 3);
	
	echo "unsorted array: ";
	printArray($numArray);

	$numArray = doBubbleSort($numArray);
	
	echo "sorted array: ";
	printArray($numArray);
?>