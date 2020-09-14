<?php
	# SESSIONS: This is one way to carry infomation or data across multiple pages.
	# It allows for the values received on one page to be available/accessible to be used on another page.
	# Unlike cookies, session data is not stored on the users computer/device but is stored on the server.

	
	if (isset($_POST['submit'])) {
		session_start(); // Starts	session for this page.

		// Set a session variable:
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		// Redirecting to another php page using the header() function:
		header('location: pages/page2.php');

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./resources/css/styles.css">
	<title>Document</title>
</head>
<body>
	<div class="form-container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
			<div class="input-container">
				<label class="labels" for="name">Name:</label>
					<input type="text" name="name" >
			</div>

			<div class="input-container">
				<label class="labels" for="email">Email:</label>
					<input type="text" name="email" >
			</div>
	
			<input type="submit" name="submit" value="SUBMIT FORM">
		</form>
	</div>
</body>
</html>