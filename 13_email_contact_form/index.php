<?php 

	// Message variables:
	$msg = '';
	$msgClass = '';

	// Actions to run after submit button is clicked:
	if (filter_has_var(INPUT_POST, 'submit')) {
			
		// Assign input data into variables:
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		# Check required fields/validation:
		if (!empty($name) && !empty($email) && !empty($message)) {
		# Condition to run is input fields are not empty:
				// Check email validity:
				if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					# Email validation failed:
					$msg = 'Please enter a valid email address';
					$msgClass = 'warning-class';
				}else{
					# Email validation passed actions:
					// Variable to email details:
					$recipientEmail = 'abraxismediasupport@gmail.com';
					$subject = "Contact Request from $name";
					$emailBody = "<h2>Contact Request</h2>
							<h4>Name</h4><p>$name</p>
							<h4>Email</h4><p>$email</p>
							<h4>Message</h4><p>$message</p>
					";

					// Email headers:
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

					// Additional headers:
					$headers .= "From: $name<$email>" . "\r\n";

					if(mail($recipientEmail, $subject, $emailBody, $headers)){
						// Email sent:
						$msg = 'Your email has been sent';
						$msgClass = 'success-class';
					}else{
						// Email failed:
						$msg = 'Your email was not sent';
						$msgClass = 'warning-class';
					}
				}
		}else{
			// Actions when all input fields are not filled: 
			$msg = 'Please fill in all fields';
			$msgClass = 'warning-class';
		}
	}
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