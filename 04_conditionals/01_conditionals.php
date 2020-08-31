<?php
	# Conditionals are used to test values.
	 
	// <		-	less than.
	// >		- greater than.
	// <=	- less than or equal to.
	// >=	- greater than or equal to.
	// ==	- "equal to" comparison operator (doesn't check if datatypes are equal)
	// !=	- "not equal to" comparison operator.
	// === - strict "equal to " comparison operator (also checks if datatypes of compared values are the same).
	// !==	- strict "not equal to" comparison operator.

	$num = 5; // Change the number value of this variable.

	if($num < 5){
		echo "$num value is less than 5.";
		echo "<br>";
	}else{
		echo "$num is not less than 5.";
		echo "<br>";
	};

	if($num > 5){
		echo "$num value greater than 5.";
		echo "<br>";
	}else{
		echo "$num is not greater than 5.";
		echo "<br>";
	};

	if($num <= 10){
		echo "$num is less than or equal to 10.";
		echo "<br>";
	}else{
		echo "$num is greater than 10.";
		echo "<br>";
	}

	if($num >= 10){
		echo "$num is greater than or equal to 10.";
		echo "<br>";
	}else{
		echo "$num less than 10.";
		echo "<br>";
	}

	if($num == 42){
		echo "$num is equal to test condition value.";
		echo "<br>";
	}else{
		echo "$num is not equal to test condition.";
		echo "<br>";
	}

	if($num != 77){
		echo "$num is not equal to test condition value.";
		echo "<br>";
	}else{
		echo "$num is equal to test condition value";
		echo "<br>";
	}

	if($num === 500){
		echo "$num is absolutely equal to test condition value.";
		echo "<br>";
	}else{
		echo "$num is not equal to test condition value";
		echo "<br>";
	}

	if($num !== 95){
		echo "$num is absolutely not equal to test condition value.";
		echo "<br>";
	}else{
		echo "$num is absolutely equal to test condition value";
		echo "<br>";
	}

?>