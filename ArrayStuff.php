<?php

	// including functions from index.php
	include 'index.php';

	$numArray = array(4, 1, 9);
	
	echo "starting array: ";
	printArray($numArray);
	
	for ($i = 0; $i < 20; $i++){
		array_push($numArray, rand(1, 10));
	}
	
	echo "unsorted: ";
	printArray($numArray);
	
	
	
	// my own sorting function
// 	$numArray = doBubbleSort($numArray);
	
	echo "sorted: ";
	printArray($numArray);

?>