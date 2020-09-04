<?php 
	# The function filter_var() is used to filter out specific details from the data being sent to a server.

	# filter_var takes two (2) arguments:
	// First, the variable containing the data being sent to the server.
	// The second argument specifies the the type of sanitation to be performed on the data being sent to the server.

	#	Types/examples of filter_var() sanitization arguments:
		// FILTER_SANITIZE_EMAIL
		// FILTER_SANITIZE_ENCODED
		// FILTER_SANITIZE_NUMBER_FLOAT
		// FILTER_SANITIZE_NUMBER_INT
		// FILTER_SANITIZE_SPECIAL_CHARS
		// FILTER_SANITIZE_STRING
		// FILTER_SANITIZE_URL

	# filter_var() takes three (2) arguments: 
	// 1. The variable which will contain the data to be filtered. 
	// 2. The statement to specify which type of data it is validating. 


	if(filter_has_var(INPUT_POST, 'email')){

		// User inut is assigned to the $email variable:
		$email = $_POST['email'];

		// Illegal characters are removed from the value of the email input value reassinged to the variable $email:
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		// The variable $email with sanitized email text value is passed through the filter_var() function to be validated as an email.
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "Success! A valid email address has been entered.";
		}else{
			echo "Please enter a valid email address!";
		}
	}else{
		echo "Please enter a valid email address below:";
	}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="email">
	<button type="submit">Submit</button>
</form>