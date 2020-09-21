<?php
	# Serialized cookie arrays need to be unserialized in order to access the data within.

	print_r($_COOKIE['user']); // Serialized cookie.
	echo "<br><br>";

	if(isset($_COOKIE['user'])){
		// Unserializing a cookie string back to a readable array and saving the array value into a variable: 
		$user = unserialize($_COOKIE['user']);

		print_r($user); // $user now contains a readable array.
		echo "<br><br>";

		echo "<b>Name cookie value:</b> " . $user['name'] . "<br>"; // Accessing name cookie value from $user array.
		echo "<b>Email cookie value:</b> " . $user['email'] . "<br>"; // Accessing email cookie value from $user array.
		echo "<b>Location cookie value:</b> " . $user['location'] . "<br>"; // Accessing location cookie value from $user array.
	}else{
		echo "User cookies have not been set.<br>";
	}

	// Checking for existing cookies:
	if(count($_COOKIE) > 0 && count($_COOKIE) == 1){
		echo "There is ". count($_COOKIE) ." saved cookie.<br>";
	}elseif(count($_COOKIE) > 1){
		echo "There are ". count($_COOKIE) ." saved cookies.<br>";
	}else{
		echo "There are no saved cookies.";
	}
?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cookies | Details</title>
	</head>
	<body>
		<p>Return to <a href="index.php">Home</a>.</p>
	</body>
	</html>