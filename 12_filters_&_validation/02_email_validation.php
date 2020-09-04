<?php 
	# The function filter_input() is used to validate the data recieved from an input filed to be sent to a server.

	# In this case, we're checking to see if the email data value recieved from an input field is a valid email.
	
	# filter_input() takes three (3) arguments:
		// First, the method type of the data being sent (INPUT_GET/INPUT_POST). 
		// Second, the name of the input field you are validating the data from.
		// Third, a validate argument to specify the type of data it to validate. 

	// Condition to check if data has been entered into the input field:
	if(filter_has_var(INPUT_POST, 'email')){
		$email = $_POST['email'];

		// Condition to validate the email value recieved from input field:
		if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
			echo "The email address: <b>$email</b> is valid!";
		} else {
			echo "The email address: <b>$email</b> is not valid!";
		}
	}else{
		echo "Please enter a valid email address below:";
	}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="email">
	<button type="submit">Submit</button>
</form>