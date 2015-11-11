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
	
	// for creation of array size $size with random values from $min to $max
	function createRandomArray($min, $max, $size){
		$numArray = array();
		
		for ($i = 0; $i < $size; $i++){
			array_push($numArray, rand($min, $max));
		}
		
		return $numArray;
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
	$numArray = createRandomArray(1, 1000, 1000); 
	$numArray2 = $numArray;
	echo "array size: " . sizeof($numArray) . "<br>";
	
// 	echo "unsorted array: ";
// 	printArray($numArray);
	
	/***************************************************************/
	
	// timing the sort
	$timeStart1 = microtime(true);
	
	// php built in sorting function, not sure what kind of sort they implement
	sort($numArray);
	
	// end timing of the sort
	$timeEnd1 = microtime(true);
	
	echo "php sort time: " . $timeEnd1 - $timeStart1 . " seconds<br>"; 

	/***************************************************************/
	
	// testing to make sure the second array was indeed a copy and not just pointing 
	// to the same array
// 	printArray($numArray);
// 	printArray($numArray2);
	
	// timing the sort
	$timeStart2 = microtime(true);
	
	// below is a call to my own bubble sort function
	$numArray = doBubbleSort($numArray);
	
	// end timing of the sort
	$timeEnd2 = microtime(true);
	
	echo "bubble sort time: " . $timeEnd2 - $timeStart2 . " seconds<br>";
	
// 	echo "sorted array: ";
// 	printArray($numArray);

	/***************************************************************/
?>