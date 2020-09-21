<?php

	# Creating a PHP class with private properties:
	class Country{
		private $name; // This property can only be accessed within this class.
		private $continent; // This property can only be accessed within this class.

		// Creating public setter methods (functions) will enable us to access and modify private properties:
		public function setName($name){
			$this->name = $name;
		}
		public function setContinent($continent){
			$this->continent = $continent;
		}

		// Creating public return methods (functions) will enable us to access and get the values of private properties:
		public function getName(){
			return $this->name .'<br>';
		}
		public function getContinent(){
			return $this->continent .'<br>';
		}
	}


	$myCountry = new Country;
	$myCountry->setName("Ghana");
	$myCountry->setContinent("Africa");
	echo $myCountry->getName();
	echo $myCountry->getContinent();