<?php

class A{

	function b( $obj, $obj2 ){
		$this->c = new Class(); // Композиция (new Class создан и живет только в данном классе )
		$this->d[] = $obj; //( $obj создан за пределами класса и живет сам по себе) - Агрегация
		$obj2->foo(); // Ассоциация
	}

}


/*===== Фабрика ================================================================================*/
abstract class Employee {
	protected $name ;
	private static $types = array( ' Minion ' , ' CluedUp ' , ' Wel lConnected ');

	static function recrui t ( $name ) {
		$num = rand ( 1 , count ( self::$types ) ) - 1 ;
		$class = self::$types [ $num] ;
		return new $class ( $name ) ;
	}

	function construct ( $name ) {
		$this->name = $name;
		abstract function fire ( )
	}
}

// Новый класс типа Employee . . .
class WellConnected extends Employee
{
	function fire ( ) {
		print "( $this->name } : позвони папику \ n " ;
}

/*
Как видите, этому метод передается строка с именем сотрудника. которая используется 
для создания экземпляра конкретного подтипа Employee, выбранного случайным образом. 
Теперь мы можем делегировать детали создания экземпляра объекта метод recrui t ( ) 
касса Employee. */

$boss = new NastyBoss ( ) ;
$boss->addEmployee ( Employee::recruit ( " Игорь " ) ;
$boss->addEmployee ( Employee::recruit ( " Владимр" ) ;
$boss->addEmployee ( Employee::recruit ( " Мария" ) ;
/*==============================================================================================*/


/*===== Singleton ==============================================================================*/
class Preferences{
	private $props = array ( ) ;
	private static $instance;
	private function _construct() { };

	public static function getInstance() {
		if( empty(self::$instance) ) {
			self::$instance = new Preferences();
		}
		return self::$instance ;
	}

	public function setProperty ($key, $val ) {
		$this->props[$key] = $val;
	}

	public function getProperty ( $key ) {
		return $this->props($key);
	}
}
/*==============================================================================================*/


/*===== Singleton ==============================================================================*/

/*==============================================================================================*/


/*===== Singleton ==============================================================================*/

/*==============================================================================================*/

/*===== Singleton ==============================================================================*/

/*==============================================================================================*/

/*===== Singleton ==============================================================================*/

/*==============================================================================================*/



?>