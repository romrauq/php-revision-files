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