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
		$this->getGas();
	}
	public function driveCar($location){
		if ($this->_runningState = true){
			$this->_gasGauge -= 20;
			echo "You have arrived at ".$location.".<br />";
			
			switch($this->_gasGauge){
				case 80:
					echo "You still have plenty of gas!<br />";
					break;
				case 60:
					echo "You have about a half-tank of gas left.<br />";
					break;
				case 40:
					echo "You have about a half-tank of gas left<br />";
					break;
				case 20:
					echo "You are almost out of gas.<br />";
					break;
				case 0:
					$this->_runningState = false;
					echo "You are out of gas!<br />";
					$this->callTowTruck();
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
class Motorcycle extends Vehicle{
	//put new properties and methods here	
}

?>