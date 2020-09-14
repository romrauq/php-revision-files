<?php
	# An assumed file in an assumed directory:
	$path = 'directory_0/directory_1/my_file.php';


	# Returning the filename (with file extension) of a file:
	echo basename($path); // Returns "my_file.php"
echo "<br>";

	# Returning the filename (without file extension) of a file:
	echo basename($path, ".php"); // Returns "my_file"
echo "<br>";

	# Returning the directory(s) of a file path:
	echo dirname($path); // Returns "directory_0/directory_1"
echo "<br>";

	// Checking if a file exists in the current directory:
	echo file_exists("test_file.txt"); // Returns 1 (boolean "true")
echo "<br>";

	// Checking if a folder exists in the current directory:
	echo file_exists("test_folder"); // Returns 1 (boolean "true")
echo "<br>";

# Returning the absolute path of the file passed:
	echo realpath("test_file.txt");
echo "<br>";

# Checks if file is in current directory:
	// Similar to file_exists() but cannot be used to check for folders.
	echo is_file("test_file.txt");
echo "<br>";

# Checking if a file in the current directory is writetable:
	if(is_writable("test_file.txt")){
		echo "text_file.txt is writable.";
	}else{
		echo "test_file1.txt is not writable.";
	}
echo "<br>";
	if(is_writable("test_file2.txt")){
		echo "test_file1.txt is writable.";
	}else{
		echo "test_file1.txt 'read only' and not writable.";
	}
echo "<br>";

# Checking if a file in the current directory is readable:
	if(is_readable("test_file.txt")){
		echo "text_file.txt is readable.";
	}else{
		echo "test_file1.txt is not readable.";
	}
echo "<br>";
	if(is_readable("test_file2.txt")){
		echo "test_file1.txt is readable.";
	}else{
		echo "test_file1.txt is not readable.";
	}
echo "<br>";

# Getting the file size:
	echo filesize("test_file.txt");
echo "<br>";

?>