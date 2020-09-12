<?php
	// Printing a string to the document window:
	echo "Hello World!";
	
	/* Naming rules for variables in PHP:
		1. Variable names should be prefixed by "$".
		2. Variable names should only begin with a letter or an underscore.
		3. Variable names should contain only letters, numbers and underscores.
		4. Variables are case sensitive.
	*/

	// Assigning string values to variables:
	$string1 = "The Emperor";
	$string2 = "Protects";

	// Assigning number values to variables
	$num1 = 4;
	$num2 = 15;

	// String concatenation:
	$string3 = $string1 . " " . $string2;

	// String escaping using the backslash:
	$string4 = "Sally asked, \"where is John?\"";
	$string5 = 'John\'s apartment.';

	// Passing single quotes within double quotes & and double within single quotes:
	$string7 = 'Sally asked, "where is John?"';
	$string8 = "John's apartment";


	// Number computation:
	$num3 = $num1 + $num2; // Addition
	

	// Passing variables in single quotes:
	$creedoImperialis = '$string1 $string2'; // Echo $creedoImperialis returns [$string1 $string2]
	
	// Passing variables in double quotes:
	$imperialCreed = "$string1 $string2"; // Echo $imperialCreed Returns "The Emperor Protects"
	
	// Creating a const variable:
	define("EMPEROR", "The God of Mankind"); // Variable name: EMPEROR, Value: "God of Mankind", (case insensitive: false default)

	define("Chaos", "The Anathema of Mankind", true); //Variable name: Chaos, Value: "Anathema of Humanity", case insensitive: true

	echo "<br>"; // Outputs a line break.
	echo EMPEROR;
	echo "<br>"; // Outputs a line break.
	echo Chaos;
?>