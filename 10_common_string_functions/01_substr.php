<?php

	# substr() - returns a portion of a string.
	// Arguments: substr(variable, start index)
	$myString = "Hello Ejay";
	$output1 = substr($myString, 3);
	echo $output1; 
	echo "<br>";

	// Arguments: substr(variable, start index, end index)
	$output2 = substr($myString, 3, 5);
	echo $output2;
	echo "<br>";

	// negative start indexes cause the substring start to be counted from the end of the string.
	$output3 = substr($myString, -6);
	echo $output3;


?>