<?php

	# A do while loop will execute a contained script once before checking the condition to executing the script again in a loop.
	# Parameters: loop condition

	$num = 1;
	do {
		echo "Iteration count: " . $num;
		echo "<br>";
		$num++;
	} while ($num < 5);

?>