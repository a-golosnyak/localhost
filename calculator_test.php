
<?php
require 'Calculator.php';
//require_once 'c:\Users\AND\AppData\Roaming\Composer\vendor\Autoload.php';

class CalculatorTests extends PHPUnit\Framework\TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
        $this->assertEquals(4, $result);
    }
 
}
?>