<?php
	
	// putting it in a variable, $rand, produced the exact same number with each 
	// iteration of the for loop and with each echo statement
	$rand = rand(1, 100);
	
	echo $rand . "<br>";
	echo $rand . "<br>";
	echo $rand . "<br>";
	echo $rand . "<br>";
	echo $rand . "<br>";
	echo $rand . "<br>";
	
	echo "<br>";
	
	for ($i = 0; $i < 10; $i++){
		echo $rand . "<br>";
	}
	
	echo "<br>";
	
	// calling it in this manner produces unique numbers with each iteration
	for ($i = 0; $i < 15; $i++){
		echo rand(1, 100) . "<br>";
	}

?>