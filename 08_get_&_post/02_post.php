<?php
	# POST requests send data through the HTTP header of the page.
	# POST requests are a much more secure way to send data.
	# Harmful scripts can be executed by passing them through the input field.
	# Unwanted script can be prevented by passing input values of the superglobals as arguments of the htmlentities() function.
	
	
	// issest() checks if a value has been assigned to it's argument:
		if (isset($_POST['name'])) {
				// echo $_POST['name'];

				// print_r($_POST);

				$name = htmlentities($_POST['name']); 
				$email = htmlentities($_POST['email']);
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

	<title>POST Request</title>
</head>
<body>
	<div class="header">
		<h1>
			Using POST Requests
		</h1>
	</div>
	<form method="POST" action="02_post.php">
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
