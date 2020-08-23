<?php
	// Printing a string to the document window:
	echo "Hello!";
	
	/* Varaible naming rules in PHP:
		1. Variable names should be prefixed by "$".
		2. Variable names should only begin with a letter or an underscore.
		3. Variable names should contain only letters, numbers and underscores.
		4. Variables are case sensitive.
	*/

	// PHP Variable Datatypes:
		$string = "I am a String"; 						// String
		$num = 42;														// Number
		$float = 4.5;													// Float
		$bool = true;													// Boolean
		$arr = ["A string", 42, 4.5, true];		// Array
		$obj;																	// Object (to be provided later)
		$nil = null;													// Null
																					// Resource

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
	$num3 = $num1 + $num2;

	// Passing variables in single quotes:
	$creedusImperialis = '$string1 $string2'; //Returns [$string1 $string2]
	
	// Passing variables in double quotes:
	$imperialCreed = "$string1 $string2"; // Returns [The Emperor Protects]
	
	// Creating a const variable:
	define("EMPEROR", "God of Mankind"); // Variable name: EMPEROR, Value: "God of Mankind", case sensitive: false (default)

	define("Chaos", "Anathema of Humanity", true); //Variable name: Chaos, Value: "Anathema of Humanity", case sensitive: true

	echo "<br>";
	echo chaos;
?>