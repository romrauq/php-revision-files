<?php 

	# Create connection to database:
	$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); // Args= (Host, username, password, database name)

	# Checking connection for error:
	if(mysqli_connect_errno()){
		// Error
		echo "Failed to connect to MySQL " . mysqli_connect_errno();
	}else{
		// Connection successful:
		// echo "Successfully connected to database!";
	}