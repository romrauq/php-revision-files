<?php 
	# The function filter_var() is used to filter out specific details from the data being sent to a server.

	# filter_var() takes two (2) arguments:
	// First, the variable containing the data being sent to the server.
	// Second, the statement to specify the type of sanitation to be performed on the data being sent to the server.

	#	Types/examples of filter_var() sanitization arguments:
		// FILTER_SANITIZE_EMAIL
		// FILTER_SANITIZE_ENCODED
		// FILTER_SANITIZE_NUMBER_FLOAT
		// FILTER_SANITIZE_NUMBER_INT
		// FILTER_SANITIZE_SPECIAL_CHARS
		// FILTER_SANITIZE_STRING
		// FILTER_SANITIZE_URL


# Test variables:
		$email = 'jo(hn;sm/\ith;@gmail.com'; 
		$encoded;
		$float = 4.5;
		$number = '45sffdae4564fbytu';
		$specialChars = '&^#W$*()&%HV$NBHG';
		$string = 'He3llo0 Wo0rld';
		$url = 'https://www.google.com';

	# Varaible value sanitize conditions:
		echo filter_var($email, FILTER_SANITIZE_EMAIL);

?>