<?php 
	# Core functions are in built functions that come with the programming language.

	# These are examples of some core functions of PHP:
	// count() 
	// print_r() 
	// var_dump()
	
	$var1 = "Smith";
	$arr1 = ["Geller Field", "Lasgun", "Dreadnought Armor", "Astra Militarum"];


	echo count($var1); // Returns the number of items in the variable.
	echo "<br><br>";
	print_r($arr1); // Returns the array information of index and items of an array in key-value pairs. 
	echo "<br><br>";
	var_dump($var1); // Returns the datatype (string), value of the variable passed & its length.
	echo "<br>";
	var_dump($arr1); // Returns the datatype size of the variable passed (array), its item indexes, item values and the individual datatypes of each item.

?>