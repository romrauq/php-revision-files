<?php

class Person{
	private $name;
	private $age;
	private $email;

	# A constructor magic method is executed whenever a new object of this class is instantiated.
	public function __construct($name, $age, $email){
		echo "New <b>" . __CLASS__ . "</b> object created!<br>"; // The __CLASS__ magic method returns the name of this class.
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
		echo $this->getName();
		echo $this->getAge();
		echo $this->getEmail();
		# NB: $this is a psuedo-variable which refers to the calling object. 
	}

	#CLASS METHODS:
	// Setters:
	public function setName($name){
		$this->name = $name;
	}
	public function setAge($age){
		$this->age = $age;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	// Getters:
	public function getName(){
		return "Name: " . $this->name . '<br>';
	}
	public function getAge(){
		return "Age: " . $this->age . '<br>';
	}
	public function getEmail(){
		return $this->email . '<br>';
	}

}

// New object instantiation with value arguments:
$person1 = new Person("John Smith", 31, "johnsmith@gmail.com");