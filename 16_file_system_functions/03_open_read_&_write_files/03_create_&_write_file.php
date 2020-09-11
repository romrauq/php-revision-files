<?php
	# The fopen() function
	// Allows for a file to be placed into a variable or "handle".
	// The handle can be used to run continous functions on the file contained within.

	$file = "text_files/03_text.txt"; 

	# Opening a file for writing:
	// Open file and save to handle;
	$handle = fopen($file, "w"); // Open file to be written. (creates new file if file doesnt already exist.)
	$text = "Hello, This file was created and this text has been written to the created file!";
	fwrite($handle, $text); // Write to file by passing handle variable and string variable.
	fclose($handle); // Close file.

	?>