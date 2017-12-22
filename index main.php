<!DOCTYPE html>
<html>
    <head>
        <meta charset="win1251">
        <title>Syntax</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>

<?php

//----------------------------------------------------------------------------------------    
    $objA = new ParentClass();
    
//    $objA->SumNumbersA();
//    $objA->SumTheNumber();
//    $objA->SumTheNumberFive();
//    $objA->MaxMinArray();
//    $objA->WorkOnIndexes();
    $objA->NameOperation();
    
//----------------------------------------------------------------------------------------
class Parent2
{
    private $buffer1 = 0;
    
    public function setBuffer()
    {
        $Buffer = 1;
    }
}
    class ParentClass
    {
        public $Int = 1024;
        private $Priv = "private";
        protected $Prot = "protected";
        protected $Buff = array(1, 2, 3, 4, 5);
        const Pi = 3.14;
        
        /*����������� ��������� ������� �����
        ������������ ���������, ������� ���������� ���������� ��������� �����
         �� ��������� ������������� ��������. ��������� ����� ����� ���� �� 0 �� 360.
        */
        public function ArrowPosition( $Degrees)
        {
            
        }
        
        /*�������� ������������ �������� ���
        ���� ������� ����� �������� �������� ������������ �������� ���, �. �. 
        ������: ������ ���� �������� � ��� �������: ������ �. �.
        */
        public function NameOperation()
        {
            $Person = array(
                "�������" => "������",
                "���" => "����",
                "��������" => "��������"
            );
            
            $Person["�������� ���������"] = "�����";
            $Person["�����"] = "�������";
            
            echo $Person["�������"] . " ";
            echo $Person["���"][0] . ". ";
            echo $Person["��������"][0] . ". ";
            
            echo "<br>";
            
            echo "<pre>";
            print_r($Person);
            echo "</pre>";
            
            echo "<hr>";
            echo "<pre>";
            print_r($_GET);
            echo "</pre>";
        }
        
        /*��� ����� ������� ������ � ��������� ��� ���������� ������� �� 1
         �� 100 (�-� rand). �����, ��������� ������������ ��� ���������, �������
          ������ ���� � � ������� ������ �������. ����� ������� �� ����� ��������, 
          ������� ������ ���� � � ������� �� ������ ������.
        */
        public function WorkOnIndexes()
        {
            define("SIZE", 100);
            $Buffer[Size];
            $Result = 1;
            
            for($i=0; $i<SIZE; $i++)
            {
                $Buffer[$i] = rand(-10, 5);
                echo $Buffer[$i] . " ";
                if( ($Buffer[$i] > 0) && (($i % 2) == 0))
                {
                    $Result = $Result * $Buffer[$i];
                }
            }
            
            echo $Buffer[$i] . "<br>";
            echo $Result . "<br>";
            
            for($i=0; $i<SIZE; $i++)
            {
                if( ($Buffer[$i] > 0) && (($i % 2) == 1))
                {
                    echo $Buffer[$i] . " ";
                }
            }
        }
        
        
        /*
        ���� ������� � ������� ������, ��������� ��� ���������� ���������� 
        (����� ������������ ������� rand), ����� ������������ � ����������� 
        �������� ������� � �������� �� �������.
        */
        public function MaxMinArray()
        {
            define("Size", 100);
         //   $Array = array(Size);
            $Array[Size];
            $Max = 0;
            $MaxIndex = 0;
            $Min = 0;
            $MinIndex = 0;
                        
            for($i=0; $i<Size; $i++)
            {
                $Array[$i] = rand(0 , 100);
                echo $Array[$i] . " ";
            }   
            echo "<br>";
            
            $Max = $Array[0];
            $Min = $Array[0];
            
            for($i=1; $i<Size; $i++)
            {
                if($Max<$Array[$i])
                {
                    $Max = $Array[$i];
                    $MaxIndex = $i;
                }
                if($Min>$Array[$i])
                {
                    $Min = $Array[$i]; 
                    $MinIndex = $i;
                }
            }
            $Array[$MinIndex] = $Max;
            $Array[$MaxIndex] = $Min;
            
            echo "MinIndex = " . $MinIndex . "<br>";
            echo "Min =" . $Min . "<hr>";
            echo "MaxIndex = " . $MaxIndex . "<br>";
            echo "Max =" . $Max . "<br>";
              
        }
        /*
        ������������ ���������, ������� �� ����� 20 .. 45 �������� ��, 
        ������� ������� �� 5 � ������� ����� ���� �����. ���������� ������������
         ������� fmod ��� ����������� "������� �����" ��� "�� �������".
        */
        public function SumTheNumberFive()
        {
            $dividend = 25;
            $summa = 0;
            
            for($i = 25; $i < 45; $i++)
            {
                $result = fmod($i, 5);
                
                if($result == 0)
                {
                    $summa += $i; 
                    echo $i . "<br>";
                }
                
            }
            echo $summa;
        }
        /*
        ��� ����� ����������� ���������, ������� ������� �� ���������� ���������
         �����-������ ��������� ���� ����� � ��������� ���� �����. ��������: ����� 
         5 � ����� 442158755745 ����������� 4 ����
        */   
        public function SumTheNumber()
        {
            $number = "12341234";
            $lookNumber = 3;
            $sum = 0;
            
            for($i=0; $i <= strlen($number); $i++)
            {
                if($number[$i] == $lookNumber)
                    $sum++;
                
            }
            echo $sum;
        }
        
        function __construct(){
            $Int = 2048;
            $Priv = "private";
            $Prot = "protected";        
            echo "����������� �������� <hr>";
        }
        
        function __destruct(){
            echo "<hr> ���������� �������� <br>";
        }

        public function SumNumbersA()
        { 
            echo $this->Int . " <br>";
            echo $this->Priv . " <br>";
            echo $this->Prot . " <br>";
            echo"������� �������� <br>";
        }        
    }

?>
    </body>
</html>









<!--

 class CommonClass extends ParentClass
    {
       function AbstFunc(){
        return "����������� ������� ���������� � ��������� <br>";
       }
    }
    
    
abstract class ParentClass
{
    public $Int = 1024;
    private $Priv = "private";
    protected $Prot = "protected";
    
    function __construct(){
        $Int = 2048;
        $Priv = "private";
        $Prot = "protected";        
        echo "����������� �������� <br>";
    }
    
    function __destruct(){
        echo "���������� �������� <br>";
    }

    public function SumNumbersA()
    { 
        echo $this->Int . " <br>";
        echo $this->Priv . " <br>";
        echo $this->Prot . " <br>";
        echo"������� �������� <br>";
    }
    
    abstract protected function AbstFunc();        
}
-->
    
    