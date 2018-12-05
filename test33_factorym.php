<?php

/*===== Фабрика ==========================================================*/
/**
 * 
 */
abstract class Vehicle 
{
	abstract function GetCarType();
	abstract function GetEngineVolume();
}

class Car extends Vehicle
{
	protected $carType;
	protected $engineVolume;

	function __construct($carType, $engineVolume){
		$this->carType = $carType;
		$this->engineVolume = $engineVolume;
	}

	function GetCarType() {
		return $this->carType;
	}

	function GetEngineVolume() {
		return $this->engineVolume;
	}

	function __toString() : string {
		echo "function to string ";
	}
}

class CarFactory
{
	static function makeCar($carType, $engineVolume) {
		return new Car($carType, $engineVolume);
	}
}

$car[] = CarFactory::makeCar("Car", "1.6");
$car[] = CarFactory::makeCar("Bus", "4.0");
$car[] = CarFactory::makeCar("Bycycle", "0.0");
$car[] = CarFactory::makeCar("Cycle", "0.6");
$car[] = CarFactory::makeCar("Truck", "10.0");

echo "<pre>";
print_r( $car);
echo "</pre>";

/*=======================================================================*/



?>