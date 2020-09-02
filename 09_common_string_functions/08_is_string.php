<?php 

	# is_string() - tests an argument and returns boolean true if argument is a string and false if not a string.
	
	// USE EXAMPLE:
	$testValues = ["Bobby", 14, true, "Bill", null, '33', '', false, " ", 0];

	foreach($testValues as $value){
		if(is_string($value)){
			echo "$value is a string. <br>";
		}else{ 
			echo "$value is not a string. <br>";
		}
	}

?>