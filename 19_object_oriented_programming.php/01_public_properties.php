<?php

	# Creating a PHP class named "Car" with some public properties:
	class Car{
	# Class properties:
		public $brand; // Public properties can be accessed globally.
		public $model; // Public properties can be accessed globally.
	}

	// Instantiating a Car object:
	$johnsCar = New Car;
	// Assigning values to created object:
	$johnsCar->brand = "Mercedes Benz";
	$johnsCar->model = "S Class";

	// Accessing and outputing object property values:
	echo $johnsCar->brand . "<br>" . $johnsCar->model;
