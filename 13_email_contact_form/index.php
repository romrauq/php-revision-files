<?php 

	// Adding php email processing file as a required file:
	require './resources/php/email_process.php';	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resources/css/styles.css">
	<title>Email Contact Form</title>
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

		<?php if($msg !=''): ?>
			<div class="email-output <?php echo $msgClass; ?>"><?php echo $msg ?></div>
		<?php endif; ?>

		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
			<div class="input-container">
				<label class="labels" for="name">Name:</label>
					<input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>

			<div class="input-container">
				<label class="labels" for="email">Email:</label>
					<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</div>

			<div class="input-container">
				<label class="labels" for="message">Message:</label>
					<textarea name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>
			
			 <input type="submit" name="submit" value="Send Email">
		</form>

		</div>
</body>
</html>