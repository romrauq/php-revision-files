<?php
	# The fopen() function
	// Allows for a file to be placed into a variable or "handle".
	// The handle can be used to run continous functions on the file contained within.

	$file = "text_files/02_text.txt";

	# Opening a file for writing:
	// Open file and save to handle;
	$handle = fopen($file, "w"); // Open file to be written.
	$text = "Hello, I have been written to the file!";
	fwrite($handle, $text); // Write to file by passing handle variable and string variable.
	fclose($handle); // Close file.

	 

?>