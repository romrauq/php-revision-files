<?php 
	# The function filter_has_var() checks whether a GET/POST value has been inputted.

	# filter_has_var() takes two (2) arguments: 
		// 1. First, the method type in which the data is being sent (INPUT_GET, INPUT_POST). 
		// 2. Second, the name of the input field of the data being sent.


	//Checking for entered data: 
	if(filter_has_var(INPUT_POST, 'name')){
		$name = $_POST['name'];

		echo "The input value: <b>$name</b> has been submitted.";
		echo "<br>";
	}else{
		echo "No value has been submitted!";
	}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>