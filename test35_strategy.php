<?php 

class Lesson
{	
	private $length;
	private $costStrategy;

	function __construct($length, CostStrategy $strategy){
		$this->length = $length;
		$this->costStrategy = $strategy;
	}

	function cost()	{
		return $this->costStrategy->cost($this);
	}

	function getLenght() {
		return $this->length;
	}
}


abstract class CostStrategy
{
	abstract function cost(Lesson $lesson);
}

class CostStrategyPerLesson extends CostStrategy
{
	function cost(Lesson $lesson){
		return ($lesson->getLenght() * 200);
	}
}

class CostStrategyPerHour extends CostStrategy
{
	function cost(Lesson $lesson){
		return ($lesson->getLenght() * 100);
	}
}

$lesson = new Lesson(5, new CostStrategyPerLesson());

echo $lesson->cost();

/*
echo "<pre>";
var_dump($lesson);
echo "</pre>"
*/

?>