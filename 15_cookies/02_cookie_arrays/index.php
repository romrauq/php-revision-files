<?php
	# Below is a method of setting multiple cookie values from user input.


	if(isset($_POST['submit'])){
		// Variables to recieve data values from input fields: 
		$name = htmlentities($_POST['name']); 
		$email = htmlentities($_POST['email']);
		$location = htmlentities($_POST['location']);

		// Variables are then stored in an associative array:
		$user = ["name" => $name, "email" => $email, "location" => $location];
		# Cookies take string values not arrays so we will need to preapre the array to be saved as a string.

		// Using the serialize() function to prepare the array data to be stored as a string for cookie input
		$user = serialize($user);

		// Creating a cookie with name "user" with the $user variable passed in which contains a string value. 
		setcookie("user", $user, $expirationTime);

		// Redirecting to another page upon submit using the header() function:
		header('Location: cookie_info.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./resources/css/styles.css">
	<title>Cookies | Home</title>
</head>
<body>

	<div class="form-container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
			<div class="input-container">
				<label class="labels" for="name">Enter Your Name:</label>
					<input type="text" name="name" >
			</div>

			<div class="input-container">
				<label class="labels" for="email">Enter Your Email:</label>
					<input type="text" name="email" >
			</div>

			<div class="input-container">
				<label class="labels" for="location">Enter Your Location:</label>
					<input type="text" name="location" >
			</div>

			<input type="submit" name="submit" value="SUBMIT FORM">
		</form>
	</div>
</body>
</html>