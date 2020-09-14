<?php
	session_start();

	$_SESSION['name'] = "(Updated Name)"; // Updates session data value for the variable $name. 

	print_r($_SESSION);	// Outputs current session data as an associative array:

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 3</title>
</head>
<body>
	<h2>Hello <?php echo $name?>, your session (name) has been updated.</h2>
	<h2>Email: <?php echo $email?></h2>
	<p>Return to <a href="./page2.php">page 2</a> (NB: Your session would have been updated there as well.)</p>
	<p>Continue to <a href="page4.php">page 4</a></p>
</body>
</html>