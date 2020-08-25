<?php

# There are three types of arrays: Indexed, Associative & Multidimensional Arrays:

	// Creating an indexed array (method 1):
	$arr1 = array("John","Peter","Tim");

	// Creating an indexed array (method 2):
	$arr2 = ["Jean", 1, true, 3.15];

	// Adding an array item to an existing array:
	$arr2[3] = "Saul";

	// Creating an indexed array (method 3):
	$arr3[0] = "Adam";
	$arr3[1] = "Dave";
	$arr3[2] = "Will";

	# Note: count(), print_r() & var_dump():
	echo "count() returns: " . count($arr2); // Returns the number of items in the array.
	echo "<br><br>";
	print_r($arr2); // Returns the array information of index and items of an array in key-value pairs. 
	echo "<br><br>";
	var_dump($arr2); // Returns the datatype (array0 of the array passed, its item indexes, item values and the individual datatypes of each item.
	
?>