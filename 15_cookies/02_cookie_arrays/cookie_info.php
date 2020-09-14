<?php
	# 

	if(isset($_COOKIE['user'])){
		$user = unserialize($_COOKIE['user']);

		echo "<b>Name cookie value:</b> " . $user['name'] . "<br>";
		echo "<b>Email cookie value:</b> " . $user['email'] . "<br>";
		echo "<b>Location cookie value:</b> " . $user['location'] . "<br>";

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