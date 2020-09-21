<?php
	# Cookies: Are another way to carry user infomation or data across multiple pages.
	# It allows for the values received on one page to be available/accessible to be used on another page.
	# Unlike sessions, cookie data is not stored on a server but is stored a users computer/device.

	# Below is a method of setting cookies from recieved user data.


	if(isset($_POST['submit'])){
		$name = htmlentities($_POST['name']);
		$expirationTime = time()+3600;

		// Setting cookies by using the setcookie() function. Args: (cookie name, cookie value, expiration time (in seconds)).
		setcookie("name", $name, $expirationTime);

		// Redirecting upon submit to another page using the header() function:
		header('Location: page2.php');
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

			<input type="submit" name="submit" value="SUBMIT FORM">
		</form>
	</div>
</body>
</html>