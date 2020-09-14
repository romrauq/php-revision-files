<?php

class Person{
	private $name;
	private $age;
	private $email;

	public function __construct($name, $age, $email){
		echo "New <b>" . __CLASS__ . "</b> object created!<br>"; // __CLASS__ returns the name of this class.
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
		echo $this->getName();
		echo $this->getAge();
		echo $this->getEmail();
	}

	# Deconstructor magic methods destroy an object when executed.
	# It can normally used when an object finishes its lifecyle.
	// Deconstructor function; __destruct()
	public function __destruct(){
		echo "<b>" . __CLASS__ . "</b> object destroyed! <br>";
	}
	
	
	// SETTERS:
	public function setName($name){
		$this->name = $name;
	}
	public function setAge($age){
		$this->age = $age;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	// GETTERS:
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

// New object instantiations with value arguments:
$person1 = new Person("John Smith", 31, "johnsmith@gmail.com");
$person2 = new Person("Ethan Hawke",29, "ethanhawke@yahoo.com");

