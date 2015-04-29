<?php

	/**
	 * recursive fibonacci function without memoization
	 * 
	 * examples with results:	
	 * 	getFibonacci(1) -> 1
	 * 	getFibonacci(7) -> 13
	 * 	getFibonacci(17) -> 1597
	 */

	function getFibonacci($number){
		if ($number <= 1){
			return $number;
		}
		
		else{
			return getFibonacci($number - 1) + getFibonacci($number - 2);
		}
	}

	$number = 17;
	$fibonacciValue = getFibonacci($number);
	echo "fibonacci number: $fibonacciValue<br>"; 
?>