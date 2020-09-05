<?php
	# The function filter_input() is used to validate the data recieved from an input filed to be sent to a server.

	#	Types/examples of filter_input() validation arguments:
			// FILTER_VALIDATE_BOOLEAN
			// FILTER_VALIDATE_EMAIL
			// FILTER_VALIDATE_FLOAT
			// FILTER_VALIDATE_INT
			// FILTER_VALIDATE_URL
			// FILTER_VALIDATE_IP
			// FILTER_VALIDATE_REGEXP

	# Test variables:
		$bool = true; // The value "false" returns as though value not a boolean. (find out why)
		$email = "felicia@gmail.com"; 
		$float = 2.55;
		$integer = 45;
		$ip_address = '192.168.8.1';
		$regex;
		$url = "https://www.google.com";

	# Variable value validate conditions:
	if (filter_var($bool, FILTER_VALIDATE_BOOLEAN)) {
		echo "Valid boolean value!";
		echo "<br><br>";
	}else{
		echo "Invalid boolean value!";
		echo "<br><br>";
	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Valid email value!";
		echo "<br><br>";
	}else{
		echo "Invalid email value!";
		echo "<br><br>";
	}

	if (filter_var($float, FILTER_VALIDATE_FLOAT)) {
		echo "Valid float value!";
		echo "<br><br>";
	}else{
		echo "Invalid float value!";
		echo "<br><br>";
	}

	if (filter_var($integer, FILTER_VALIDATE_INT)) {
		echo "Valid integer value!";
		echo "<br><br>";
	}else{
		echo "Invalid integer value!";
		echo "<br><br>";
	}

	if (filter_var($url, FILTER_VALIDATE_URL)) {
		echo "Valid url value!";
		echo "<br><br>";
	}else{
		echo "Invalid url value!";
		echo "<br><br>";
	}

	if (filter_var($ip_address, FILTER_VALIDATE_IP)) {
		echo "Valid IP address value!";
		echo "<br><br>";
	}else{
		echo "Invalid IP address value!";
		echo "<br><br>";
	}

	// if (filter_var($regex, FILTER_VALIDATE_REGEXP)) {
	// 	echo "Valid IP regex value!";
	// }else{
	// 	echo "Invalid IP regex value!";
	// 	echo "<br><br>";
	// }

?>

