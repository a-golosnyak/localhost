<?php

/*===== Абстрактная Фабрика =============================================*/

abstract class Vehicle
{
	abstract function getVehicleType();
}

class Motorcycle extends Vehicle
{
	function getVehicleType(){
		return "Here is motorcycle";
	}
}

class Truck extends Vehicle
{
	function getVehicleType(){
		return "Here is truck";
	}
}


abstract class Driver
{
	abstract function GetDescription();
}

class Rider extends Driver
{
	function GetDescription () {
		return "It is motorcycle rider";
	}
}

class TruckDriver extends Driver
{
	function GetDescription () {
		return "It is truck driver";
	}
}


abstract class Factory
{
	abstract function CreateVehicle();
	abstract function CreateDriver();
}

class MotoKitFactory extends Factory
{
	function CreateVehicle(){
		return new Motorcycle();
	} 

	function CreateDriver()	{
		return new Rider();
	}
}

class FreightFactory extends Factory
{
	function CreateVehicle(){
		return new Truck();
	} 

	function CreateDriver()	{
		return new TruckDriver();
	}
}



$motoFactory = new MotoKitFactory();
$roadFactory = new FreightFactory();

$vehicle[] = $motoFactory->CreateVehicle();
$driver[] = $motoFactory->CreateDriver();

$vehicle[] = $roadFactory->CreateVehicle();
$driver[] = $roadFactory->CreateDriver();

echo "<pre>";
var_dump($vehicle);
var_dump($driver);
echo "<pre>";


/*=======================================================================*/



?>