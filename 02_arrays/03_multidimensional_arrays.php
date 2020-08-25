<?php
	# Multidemensional Arrays

	// Creating Multidimensional Arrays (method 1):
	$arr1 = array(
		array("John", "Peter", "James"),
		array("Sally", "Jane", "Hannah"),
	);
	
	var_dump($arr1);
	echo "<br><br>";

	// Creating Multidimensional Arrays (method 2):
	$arr2 = [["Rice", "Beans", "Potatoes"], ["Chicken", "Steak", "Sausages"]];
	var_dump($arr2);
	echo "<br><br>";

	//You can have a multidimensional array which contains associative arrays:
	$arr3 = [
		["Peter"=>"Doctor", "Sally"=>"Housewife", "Jim"=>"Driver"],
		["Hospital"=>"High", "Home"=>"Low", "Road"=>"medium"]
	];
	var_dump($arr3);

?>