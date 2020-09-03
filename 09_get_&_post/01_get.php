<?php
	# GET requests send data through the URL of the page.
	# Harmful scripts can be executed by passing them through the input field.
	# Unwanted script can be prevented by passing input values of the superglobals as arguments of the htmlentities() function.


	// issest() checks if a value has been assigned to it's argument:
		if (isset($_GET['name'])) {
				// echo $_GET['name'];
				 
				// print_r($_GET);

				//htmlentities() converts html brackets into harmless text entities thus preventing any unwanted execution of scripts.
				$name = htmlentities($_GET['name']); 
				$email = htmlentities($_GET['email']);
				echo "Name of user: " . $name;
				echo "<br>";
				echo "Email address of user: " . $email;
		} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
	<title>GET Request</title>
</head>
<body>
		<div class="header">
			<h1>Using GET Requests</h1>
		</div>

	<form method="GET" action="01_get.php">
		<div>
			<label style="display: block;" for="name">Name</label>
			<input type="text" name="name" required>
		</div>
		<div>
			<label style="display: block;" for="email">Email</label>
			<input type="text" name="email" required>
		</div>

		<input style="display: block; margin-top: 5px;" type="submit" value="Submit">
	</form>	
</body>
</html>
