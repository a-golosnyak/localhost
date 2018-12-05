<?php


/*===== Singleton =======================================================*/

class Car
{
	static $instance;
	public $instanceName;

	function __construct() {}

	static function getInstance($name){
		if(empty(self::$instance))
		{
			$var = new Car();
			$var->instanceName = $name;
			self::$instance = $var;
			return $var;
		}

		return self::$instance;
	}
}

$car = Car::getInstance("Honda");
$car ->instanceName = "Lexus";
$car = Car::getInstance("Nissan");

echo "<pre>";
var_dump($car);
echo "</pre>"

?>