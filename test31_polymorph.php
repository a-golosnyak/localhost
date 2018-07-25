<?php

//============================================================================================
echo " Polymorphism <br>";

class transport{
	private $motorVolume = '1';

	function __construct()
	{
		$this->motorVolume = '1.6';
	}

	function getMotorVolume(){
		return $this->motorVolume;
	}
}

class electro extends transport
{
	function getMotorVolume()
	{
		return "Here is no internal combustion engine";
	}
}


$bus = new transport();
$cycle = new electro();

echo $bus->getMotorVolume();
echo "<br>";
echo $cycle->getMotorVolume();
echo "<br>";


echo "<hr>";
//============================================================================================
echo "  <br>";


echo "...<hr>";
//============================================================================================
echo " Function with array and key divided by 5<br>";
echo "...<hr>";
//============================================================================================
echo " Looking for a simple numbers <br>";
echo "...<hr>";
//============================================================================================
echo "Put array by foreach <br>";

?>