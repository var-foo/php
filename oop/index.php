<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Object Oriented Examples';
	$page['description'] = 'Natation on classes and object is in this file.';
	// include the header
	include('../includes/header.php');
?>

<?php include("vehicle.php"); ?>

<?php
	// Create a new vehicle
	$myCar = new Vehicle();
	$myCar->make = "Chevrolet";
	$myCar->model = "Silverado";
	$myCar->year = "1996";
	$myCar->color = "black";
	// Do something with the car
	$myCar->startCar();
	$myCar->driveCar("home");
	$myCar->driveCar("work");
	$myCar->driveCar("Store");
	$myCar->driveCar("home");
	$myCar->driveCar("Target");
	$myCar->turnOffCar();
	echo $myCar->getCarInfo(); 

?>

<?php include('../includes/footer.php'); ?>