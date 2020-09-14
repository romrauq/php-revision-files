<?php
	# Creating new directories/folders:
	mkdir("created_directory");

	# Deleting a directory/folder (if it is empty):
	rmdir("created_directory");

	# Copying a file:
	copy("test_file.txt", "test_file_copy.txt"); // copies argument 1 and names copy as argument 2.
	copy("test_file_copy.txt", "test_file_3.txt"); // copies argument 1 and names copy as argument 2.

	# Renaming a file:
	rename("test_file_copy.txt", "test_file_renamed.txt");

	# Deleting a file:
	unlink("test_file_3.txt"); // Deletes file "test_file3.txt" if it exists in directory.

	# Returning text content from file to string:
	echo "<b>test_file.txt: </b>" . file_get_contents("test_file.txt");
echo "<br>";
	
	# Overwriting string content in a file:
	$input = "Goodbye World";
	copy("test_file.txt", "test_file_write.txt");
	file_put_contents("test_file_write.txt", $input);
	echo "<b>test_file_write.txt: </b>" . file_get_contents("test_file_write.txt");
echo "<br>";

	# How to append a string to an existing file:
	copy("test_file.txt", "test_file_append.txt");

	// String to be appending saved in varaiable:
	$append_str = " GoodBye World!";
	// Copy contents of file to be appended and stor in variable:
	$current = file_get_contents("test_file_append.txt");
	// Append input string value to current string variable value:
	$current .= $append_str;
	// Overwrite main file with the appended variable's value.
	file_put_contents("test_file_append.txt", $current); 
echo "<b>test_file_append.txt: </b>" . file_get_contents("test_file_append.txt");

?>