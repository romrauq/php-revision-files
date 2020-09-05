<?php
	# The function filter_var_array() is used to handle validation on the different items an array variable.

	// Array containing items to be validated:
	$arr = array(
		"name" => "john smith",
		"age" => "27",
		"email" => "johnsmith@gmail.com"
	);

	// Variable to contain arrays of validation for the items name, age & email:
	$filters = array(
		"name" => array(
			"filter" => FILTER_CALLBACK, // This allows us to apply a funtion onto the value.
			"options" => "ucwords"
		),
		"age" =>  array(
			"filter" => FILTER_VALIDATE_INT,
			"options" => array(
				"min_range" => 1,
				"max_range" => 120
			)
			),
			"email" => array(
				"filter" => FILTER_VALIDATE_EMAIL
			)
	);

	// Outputting the validated array items:
	print_r(filter_var_array($arr, $filters))
?>

