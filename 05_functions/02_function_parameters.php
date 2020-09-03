<?php 
	# Functions can have parameter that allow it to take arguments.
	# Parameters are basically placeholders for arguments.
	# Arguments are values that can be placed within a function.
	#-------------------------------------------------------------------------------------------------
	// Creating a function that performs summation with arguments placed in its parameters:
	function addNumbers($a, $b){
		$sum = $a + $b;
		echo "The sum of $a and $b is: $sum ";
		echo "<br>";
	}
	// Running the function with arguments:
	addNumbers(3, 6);

	// Creating a function that greets a user :
	function greetUser($name){
		echo "Hello $name";
		echo "<br>";
	}
	// Running the function with arguments:
	greetUser("Steve");
	#-------------------------------------------------------------------------------------------------
	# Functions can have their parameters have a default value.
	# The default value of the parameter will be used if no arguments are used when the function is called.

	// A function with a default parameter value:
	function myFunction($name = "World"){
		echo "Hello $name";
		echo "<br>";
	}

	// Executing the created function without entering an argument:
	myFunction(); // Will output  "Hello World"

	// Executing the created function with an argument:
	myFunction("John") // Overwrites default value & prints "Hello John"
	#-------------------------------------------------------------------------------------------------

?>