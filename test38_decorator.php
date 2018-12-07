<?php

/*===== Декоратор =======================================================*/
abstract  class Soda {
	abstract function getCost();
	abstract function getVolume();
}

class Cola05L extends Soda
{
	function getCost(){
		return 8;
	}

	function getVolume(){
		return 0.5;
	}
}

class Cola1L extends Soda
{
	protected $Cola;

	function __construct(Soda $cola){
		$this->Cola = $cola;
	}

	function getCost(){
		return ($this->Cola->getCost() + ($this->Cola->getCost()) * 0.6);
	}

	function getVolume(){
		return $this->getVolume() + 0.5;
	}
}

class Cola15L extends Soda
{
	protected $Cola;

	function __construct(Soda $cola){
		$this->Cola = $cola;
	}

	function getCost(){
		return $this->Cola->getCost() + ($this->Cola->getCost() * 0.4);
	}

	function getVolume(){
		return $this->Cola->getVolume() + 0.5;
	}
}

class Cola2L extends Soda
{
	protected $Cola;

	function __construct(Soda $cola){
		$this->Cola = $cola;
	}

	function getCost(){
		return $this->Cola->getCost() + ($this->Cola->getCost() * 0.2);
	}

	function getVolume(){
		return $this->Cola->getVolume() + 0.5;
	}
}

$drink = new Cola05L ();
echo $drink->getCost();
echo "<br>";
$drink = new Cola1L ($drink);
echo $drink->getCost();
echo "<br>";
$drink = new Cola15L ($drink);
echo $drink->getCost();
echo "<br>";
$drink = new Cola2L ($drink);
echo $drink->getCost();
echo "<br>";

echo "<pre>";
var_dump($drink) ;
echo "</pre>";


/*=======================================================================*/

?>