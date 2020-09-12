<?php

	session_start(); // Starts	session for this page.

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 2</title>
</head>
<body>
	<h1>Your session has been saved.</h1>
	<p>Thank you <?php echo $name ?>.</p> 
	<p>Your email: <?php echo $email ?> has been registered!</p>
	<p>Continue to <a href="page3.php">page 3</a></p>
</body>
</html>