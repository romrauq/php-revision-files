<?php
# Class Inheritance is when a subclass inherits the properties and methods of a main class.

// Main Class
class Person{
	private $name;
	private $email;

	public function __construct($name, $email){
		$this->name = $name;
		$this->email = $email;
		echo "New <b>" . __CLASS__ . "</b> object created!<br>";
		echo $this->getName();
		echo $this->getEmail();
	}

	public function setName($name){
		$this->name = $name;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getName(){
		return $this->name .  "<br>";
	}
	public function getEmail(){
		return $this->email . "<br>";
	}

}

// Subclass:
class Student extends Person{
	private $school;

	public function __construct($name, $email, $school){
		parent:: __construct($name, $email, $school);
		$this->school = $school;
		echo $this->getSchool();
		echo "This new " . __CLASS__ . " object, is a subclass of the Person class.<br>" ;
	}

	public function setSchool($school){
		$this->school = $school;
	}
	public function getSchool(){
		return $this->school . "<br>";
	}
}
	
$student1 = new Student("Joe Sparks", "joesparkz@gmail.com", "Hero Highschool"); 
?>