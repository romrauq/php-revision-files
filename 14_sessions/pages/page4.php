<?php
	session_start();

	unset($_SESSION['name']); // Removes the session data received from the iput with the name = "name". 
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';

	$email = $_SESSION['email'];
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 4</title>
</head>
<body>
<h2>Hello <?php echo $name ?>, your session has been partly cleared.</h2>
<h2>Email: <?php echo $email ?></h2>

<p>Return to <a href="page3.php">page 3</a></p>
<p>Continue to <a href="page5.php">page 5</a></p>

</body>
</html>