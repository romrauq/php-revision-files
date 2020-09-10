<?php

// Cars Array:
$cars[] = "Opel";
$cars[] = "Toyota";
$cars[] = "Lada";
$cars[] = "Range Rover";
$cars[] = "Mercedes Benz";
$cars[] = "Tata";
$cars[] = "Land Rover";
$cars[] = "Mazda";
$cars[] = "BMW";
$cars[] = "Maserati";
$cars[] = "Lamboghini";
$cars[] = "Ferrari";
$cars[] = "Hyundai";
$cars[] = "Nissan";
$cars[] = "Buick";
$cars[] = "Chevrolet";
$cars[] = "Lincoln";
$cars[] = "Ford";
$cars[] = "Mistubushi";


// Get query string:
$q = $_REQUEST['q'];

$suggestion = '';

// Get Suggestions:
if($q != ""){
	$q = strtolower($q);
	$len = strlen($q);

	foreach($cars as $car){
		if(stristr($q, substr($car, 0, $len))){
			if($suggestion === ""){
				$suggestion = $car;
			}else{
				$suggestion .= ", $car";
			}
		}
	}
}

echo ($suggestion === "") ? "Car name not found in database" : $suggestion;
?>