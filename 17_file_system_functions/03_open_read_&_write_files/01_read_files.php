<?php
	# The fopen() function:
	// Allows for a file to be placed into a variable or "handle".
	// The handle can be used to run continous functions on the file contained within.

	$file = "text_files/01_text.txt";

	# Opening a file for reading:
	// Open file and save to handle;
	$handle = fopen($file, "r"); // Open file to be read.
	$data = fread($handle, filesize($file)); // Save the file's read data and save to variable. 
	echo $data; // Output file data.
	fclose($handle); // Close file.

?>