<?php

/*===== Фабрика ==========================================================*/

class NastyBoss(){
	private $employees = array();

	function addEmployee(Employee $employee){
		$this->employees[] = $employee;
	}

	function projectFails(){
		if(count($this->employees)>0) {
			$emp=array_pop($this->employees);
			$emp->fire();
		}
	}
}

abstract class Employee {
	protected $name ;
	private static $types = array( ' Minion ' , ' CluedUp ' , ' WellConnected ');

	static function recruit ( $name ) {
		$num = rand ( 1 , count ( self::$types ) ) - 1 ;
		$class = self::$types [ $num] ;
		return new $class ( $name ) ;
	}

	function construct($name) {
		$this->name = $name;
		abstract function fire ()
	}

	abstract function fire();
}

// Новый класс типа Employee . . .
class WellConnected extends Employee
{
	function fire ( ) {
		print "( $this->name } : позвони папику \ n " ;
	}
}

/*
Как видите, этому метод передается строка с именем сотрудника. которая используется 
для создания экземпляра конкретного подтипа Employee, выбранного случайным образом. 
Теперь мы можем делегировать детали создания экземпляра объекта метод recruit() 
касса Employee. */

$boss = new NastyBoss ( ) ;
$boss->addEmployee ( Employee::recruit ( " Игорь " ) ;
$boss->addEmployee ( Employee::recruit ( " Владимр" ) ;
$boss->addEmployee ( Employee::recruit ( " Мария" ) ;
/*=======================================================================*/



?>