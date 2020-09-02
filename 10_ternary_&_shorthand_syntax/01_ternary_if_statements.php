<?php 

	$status = false;

	// A regular if statement:
	if($status){
		echo "<b>Regular If statement output</b>: Active Status";
		echo "<br>";
	}else{
		echo "<b>Regular If statement output</b>: Inactive Status";
		echo "<br>";
	}

	# The above if statement can be written in a much simpler way (using a ternary operators):	
	echo ($status) ? "<b>Ternary Operator Output:</b> Active Status" . "<br>": "<b>Ternary Operator Output:</b> Inactive Status" . "<br>";

		

?>