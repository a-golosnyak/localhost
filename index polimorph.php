<?php

/**
 * @author aaaaa
 * @copyright 2017
 */
 
    $Audi = new Car();
    $BMW = new Car();
    $Augusta = new Moto();
    
    $Audi->CheckDors();
    $BMW->CheckDors();
    $Augusta->CheckDors();
    
    $Autopark[10] = new Car();
    
    $Autopark[0];
    
    class Car
    {
        protected $Wheels;
        private $Doors;
        
        function __construct() {
            
            $this->Doors = 4;
            $this->Wheels = 4;
        }
        public function __destruct() {
            
        }
        
        public function CheckDors()
        {
            echo "Car has ". $this->Doors ." doors and " . $this->Wheels ." wheels.<br>";
        }
    }

    class Moto extends Car
    {
        function __construct() {
//            parent::__construct();
            $this->Wheels = 2;
        }
        
        public function CheckDors()
        {  
            echo "Motocycle doesn't has doors. Just " .$this->Wheels. "wheels <br>" ;
        }
    }

?>