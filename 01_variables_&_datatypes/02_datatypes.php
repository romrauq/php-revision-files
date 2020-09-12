<?php
	# PHP variables can contain different types of data.
	# Datatypes are simply the different types of data a variable can hold.
	
	// PHP Variable Datatypes:
		$string = "I am a String"; 						// String
		$num = 42;														// Number
		$float = 4.5;													// Float
		$bool = true;													// Boolean
		$arr = ["A string", 42, 4.5, true];		// Array
		class Person{
			private $name;
			public function __construct($name){
				$this->name = $name;
			}
			public function setname($name){
				$this->name = $name;
			}
			public function getName(){
				return $this->name;
			}
		}
		$obj =	new Person("John");						// Object
		$null = null;													// Null
		$resource = function (){							// Resource
			return "Hello world";
		};

		// Outputting 
		$padding = "<br><br>";
		var_dump($string);
		echo $padding;
		var_dump($num);
		echo $padding;
		var_dump($float);
		echo $padding;
		var_dump($bool);
		echo $padding;
		var_dump($arr);
		echo $padding;
		var_dump($obj);
		echo $padding;
		var_dump($null);
		echo $padding;
		var_dump($resource);
		echo $padding;


?>