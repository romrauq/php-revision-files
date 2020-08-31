<?php  

	# NESTED IF STATEMENT
	
	$num = 34;
	
	// Parent if statement:
	if ($num > 10) {
		// Another if statement nested within an if statement:
		if ($num < 50) {
			echo "$num is greater than 10 & less than 50";
		}
	}
?>