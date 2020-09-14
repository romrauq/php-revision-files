<?php
	# Below is a method of updating & then checking for existing set cookies from recieved user data.


	$updatedName = "Shadow";

	// Updating name value cookie:
	setcookie("name", $updatedName, time() + 3600); // This will update the name value cookie upon page refresh.

	if(isset($_COOKIE['name'])){
		echo "<b>" . $_COOKIE['name'] . "</b> has been set.<br>";
	}else{
		echo "User cookies have not been set.<br>";
	}

	// Checking for existing cookies:
	if(count($_COOKIE) > 0 && count($_COOKIE) == 1){
		echo "There is " . count($_COOKIE) . " saved cookie.<br>";
	}

?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cookies | Page 2</title>
	</head>
	<body>
		<p>Refresh the page <a href="page2.php">here</a> to reflect any updated cookie values.</p>
		<p>Continue to <a href="page3.php">Page 3</a>.</p>
	</body>
	</html>