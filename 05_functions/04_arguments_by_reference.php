<?php 

	$myNumber = 5;

	//This function takes in an argument's value: 
	function addSeven($num){
		$num += 7;
	}

	//This function takes an argument by reference:
	function addTen(&$num){
		$num += 10;
	}


	addSeven($myNumber);
		echo "Value: $myNumber <br>"; //myNumber value remains the same.


	addTen($myNumber);
		echo "Value: $myNumber <br>"; //myNumber value is modified before use.
?>
