<?php
	# The function filter_input_array() is used to handle validation on multiple field input values.

	// Array to contain the different validation arguments:
	$filters = array(
		"email" => FILTER_VALIDATE_EMAIL,
		 "number" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" => 1,
					"max_range" => 100,
				)
		 )
	);

	// Outputting the validated input values recieved from the form POST request:
	print_r(filter_input_array(INPUT_POST, $filters));
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="email">
	<input type="text" name="number">

	<button type="submit">Submit</button>
</form>