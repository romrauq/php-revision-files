<?php
	# Below is a method of deleting & then checking for any cookies from recieved user data.


	// Delete cookie:
	setcookie("name", '', time() - 3600); // Using elapsed time for the expiration argument will delete the cookie upon page refresh.

	if(isset($_COOKIE['name'])){
		echo "<b>Cookie name value:</b> " . $_COOKIE['name'] . "<br>";
	}else{
		echo "<b>Cookies have been deleted!</b><br>";
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
		<title>Cookies | Page 3</title>
	</head>
	<body>
		<p><a href="page3.php">Refresh</a> to delete cookies.</p>
		<p>Return <a href="index.php">Home</a>.</p>
	</body>
	</html>