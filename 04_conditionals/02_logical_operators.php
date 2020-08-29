<?php

	// Logical Operators:
	
	# and / &&	-		Logical AND operator (both conditions have to be true)
	# or / ||		-		Logical OR operator (at least one condition has to be true)
	# xor				-		Logical XOR operator (at least one condtion has to be true but not both conditions)

	$num1 = 50;
	if ($num1 > 30 && $num1 < 100){
		echo "The variable $num1 fits all the logiacal conditions";
		echo "<br>";
	}else{
		echo "The variable $num1 does not fit all/any of the logiacal conditions";
		echo "<br>";
	}

	$num2 = 15;
	if ($num2 == 15 || $num == 33){
		echo "The variable $num2 fits one of the logical conditions.";
		echo "<br>";
	}else{
		echo "The variable $num2 does not fit any of the logical conditions";
		echo "<br>";
	}

	$num3 = 55;
	if ($num3 < 30 xor $num3 > 50){
		echo "The variable $num3 fits at least one of the logical conditions.";
	echo "<br>";
	}else{
		echo "The variable $num3 either fits both of the logical conditions or, it does not fit any one of the logical conditions";
	echo "<br>";
	}
		
?>