<?php 

	
	$age2 = 15;
	$score2 = 20;

	// A regualr nested if statement:
	if($age2 > 10){
		if($score2 < 10){
			echo "$age2 Average Score! (regular if statement output.)";
		}else{
			echo "$age2 Good Score! (regular if statement output.)";
		}
	}else{
		if($score2 > 10){
			echo "$age: Exceptional Score! (regular if statement output.)";
		}else{
			echo "$age: Low Score! (regular if statement output.)";
		}
	}

	echo "<br><br>";

	# The above nested if statement can be written using the ternary shorthand syntax as well:
	$age = 15;
	$score = 20;

	echo ($age > 10 ? ($score < 10 ? "$age: Average score! (Ternary if statement output)" : "$age: Good Score! (Ternary if statement output)") : ($score > 10 ? "$age: Exceptional Score! (Ternary if statement output)" : "$age: Low Score! (Ternary if statement output)"))
		
?>