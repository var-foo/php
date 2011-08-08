<?php
	// Create an array of page variables because this is faster
	// than multiple variables for page stuff.
	$page = array();
	$page['title'] = 'Object Oriented Examples';
	$page['description'] = 'Natation on classes and object is in this file.';
	// include the header
	include('../includes/header.php');
?>

<?php

//Create a class
class Vehicle{
	//define properties
	public $make;
	public $model;
	public $color;
	public $year;
	private $_runningState;
	private $_gasGauge;
	
	//Constructor to make sure every new car starts out turned off with a full tank of gas.
	public function __construct(){
		$this->_runningState = false;
		$this->_gasGauge = 100;
	}
	
	// define methods
	public function startCar(){
		$this->_runningState = true;
		echo "Starting car...Car Started!<br />";
	}
	public function getGas(){
		$this->_gasGauge = 100;
		echo "Gas tank filled! Happy motoring!<br />";
	}
	public function turnOffCar(){
		$this->_runningState = false;	
		echo "Car is no longer running!<br />";
		
	}
	public function callTowTruck(){
		echo "The tow truck has been called. You owe him \$8,000!<br />";
	}
	private function driveCar($location){
		if ($this->_runningState = true){
			$this->_gasGauge -= 20;
			echo "You have arrived at ".$location.".<br />";
			
			switch($this->gasGauge){
				case 90 || 80 || 70:
					echo "You still have plenty of gas!<br />";
					break;
				case 60 || 50 || 40:
					echo "You have about a half-tank of gas left.<br />";
					break;
				case 30 || 20 || 10:
					echo "You are almost out of gas.<br />";
					break;
				case ($this->gasGauge == 0):
					echo "You are out of gas!<br />";
					$this->callTowTruck();
					$this->getGas();
					break;
				default:
					echo "Your gas gauge is broken!";
					break;
					
			}
			

		} else {
			echo "Your car is not running. You need to start the car before you drive it!";
		}
	}
	public function getCarInfo(){
		echo "Make: ".$this->make."<br />Model: ".$this->model."<br />Year: ".$this->year."<br />Color: ".$this->color;
	} 
}

//Now we're going to extend this class to include motorcycles
class Motorcycle extends Car{
	//put new properties and methods here	
}

?>

<?php
	// Create a new car
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
	$myCar->getGas();
	$myCar->driveCar("home");
	$myCar->turnOffCar();
	echo $myCar->getCarInfo(); 

?>

<?php include('../includes/footer.php'); ?>