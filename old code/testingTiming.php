
<?php
	/**
	 * basic setup for timing/clocking a portion of code
	 */

	// start timing
	$time_start = microtime(true);
	
	// Sleep for a while
	usleep(10000*1000);
	
	// end timing
	$time_end = microtime(true);
	
	// get the difference 
	$time = $time_end - $time_start;
	
	//print
	echo "Did nothing in $time seconds\n";
?>