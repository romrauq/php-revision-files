<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/styles.css">
	<title>Contact Form</title>
</head>
<body>

	<div class="navbar">
		<div class="nav-logo">
			<a href="#">Abraxas Media</a>
		</div>
	</div>

	<div class="form-container">
		<div class="header">
			<h2>Send Us An Email</h2>
		</div>

		<div class="email-output">
				<?php ?>
		</div>

		<form method="POST" action="./resources/php/process_email.php">
			<div class="input-container">
				<label class="labels" for="name">Name:</label>
					<input type="text" name="name">
			</div>

			<div class="input-container">
				<label class="labels" for="email">Email:</label>
					<input type="text" name="email">
			</div>

			<div class="input-container">
				<label class="labels" for="message">Message:</label>
					<textarea name="message"></textarea>
			</div>
			
			<input type="submit" name="submit" value="Send Email">
		</form>

		</div>
</body>
</html>