<?php 

	if(filter_has_var(INPUT_POST, 'number')){
		$num = $_POST['number'];

		$num = filter_var($num, FILTER_SANITIZE_NUMBER_INT);

		if(filter_var($num, FILTER_VALIDATE_INT)){
			echo "$num is a number.";
		}else{
			echo "You did not enter a number value.";
		}
	}else{
		echo "Please enter a valid number:";
	}

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="number">
	<button type="submit">Submit</button>
</form>