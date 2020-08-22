<?php
	// Printing a string to the window:
	echo "Hello!";

	// Assigning string values to variables:
	$string1 = "The Emperor";
	$string2 = "Protects";

	// Assigning number values to variables
	$num1 = 4;
	$num2 = 15;

	// String concatenation:
	$string3 = $string1 . " " . $string2;

	// Number computation:
	$num3 = $num1 + $num2;

	// Passing variables in single quotes
	$creedusImperialis = '$string1 $string2'; //Returns [$string1 $string2]
	
	$imperialCreed = "$string1 $string2"; // Returns [The Emperor Protects]
	
	echo "<br>";
	echo $imperialCreed;

	// Creating a const variable:
	define("EMPEROR", "God of Mankind"); // Variable name: EMPEROR, Value: "God of Mankind", case sensitive: false (default)

	define("Chaos", "Anathema of Humanity", true); //Variable name: Chaos, Value: "Anathema of Humanity", case sensitive: true
?>