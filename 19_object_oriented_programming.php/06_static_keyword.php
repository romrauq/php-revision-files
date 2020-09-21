<?php
# The "static" keyword enables us to get the values of properties within a class without instantiating new objects.

// Main Class
class Person{
	public static $name = "Bruce Wayne"; // The keyword "static" is added to public property declarations to make it static. 
	private static $psuedo = "Batman"; // The keyword "static" is added to private property declarations to make it static. 

	public static function getPsuedonym(){
		return self::$psuedo;	// The returned property is prefixed with "self::"
	}
}

echo Person::$name; // To return a public property value, the Class name is called followed by "::" and then the property name.
echo "<br>";
echo Person::getPsuedonym(); // To return a method value of a private property, the Class name is called followed by "::" and then the method. 
?>