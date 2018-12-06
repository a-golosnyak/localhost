<?php

/*===== Строитель =======================================================*/

class Cocktail
{
	protected $size ;

	protected $cola = false;
	protected $lemonJuice = false;
	protected $salt = false;
	protected $beer = false;
	protected $tomatoJuice = false;

	function __construct(CocktailBuilder $builder){
		$this->cola = $builder->cola;
		$this->lemonJuice = $builder->lemonJuice;
		$this->salt = $builder->salt;
		$this->carrot = $builder->carrot;
		$this->beer = $builder->beer;
	}
}

class CocktailBuilder
{
	public $size ;

	public $cola = false;
	public $lemonJuice = false;
	public $salt = false;
	public $beer = false;
	public $tomatoJuice = false;

	function __construct($size){
		$this->size = $size;
	}

	function addCola(){
		$this->cola = true;
		return $this;
	}
	function addLemonJuice(){
		$this->lemonJuice = true;
		return $this;
	}
	function addSalt(){
		$this->salt = true;
		return $this;
	}
	function addBeer(){
		$this->beer = true;
		return $this;
	}
	function addTomatoJuice(){
		$this->tomatoJuice = true;
		return $this;
	}

	function shake(){
		return new Cocktail($this);
	}
}

$mexicanaBeer = (new CocktailBuilder(300))
					->addLemonJuice()
					->addSalt()
					->addBeer()
					->shake();

echo "<pre>";
var_dump($mexicanaBeer) ;
echo "</pre>";

/*=======================================================================*/



?>