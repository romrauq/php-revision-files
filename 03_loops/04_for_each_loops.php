<?php
	# for each loops are used to loop through arrays:
	# Parameters: Array name, array item variable

	$avengers = ["Tony Stark", "Bruce Banner", "Peter Parker", "Steve Rogers"];

	foreach($avengers as $hero){
		echo $hero;
		echo "<br>";
	}

	echo "<br><br>";

	# Parameters: Array name, array item key variable, array item key value 
	$people = ["Dennis"=>"Aloof", "Henry"=> "Nonchalant", "Hubert"=>"Vindicttive", "John"=>"Psycho"];

	foreach($people as $person => $condition){
		echo $person . " is " . $condition;
		echo "<br>";
	}

?>