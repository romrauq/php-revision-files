<?php
	# REQUEST can be used to retrieve data whether its form action is a GET request or a POST request.
	# This method is not commonly used.
	# GET requests will still send data through the URL of the page.
	# POST requests will still send data through the HTTP header of the page.

	// issest() checks if a value has been assigned to it's argument:
		if (isset($_REQUEST['name'])) {
				// print_r($_REQUEST);

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

	<title>$_REQUEST</title>
</head>
<body>
	<div class="header">
		<h1>
			Using $_REQUEST
		</h1>
	</div>
	<form method="POST" action="03_request.php">
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
