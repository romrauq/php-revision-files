<?php
	session_start();

	session_destroy(); // Completely removes all stored sessions.
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['name'] : 'guest@gmail.com';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 5 </title>
</head>
<body>

<h1>Your session has been entirely cleared.</h1>

<p>Hello <?php echo $name ?>.</p>
<p>Email: <?php echo $email ?></p>

<p>Return to <a href="../index.php">Hompage</a></p>
</body>
</html>