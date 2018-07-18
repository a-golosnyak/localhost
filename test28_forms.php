<?php

//=== Форма для отправки текста в файл ======================================================
//echo "Put text to server  <br>";

if(isset($_POST["name"]) && !empty($_POST["name"]))
{
//	header('Location:  http://index.php');
	$enteredtext = "Name: " . $_POST['name'] . "\n" . "Message: " . $_POST["message"] . "\r";

	echo "If is true <br>";
	$file = "storage.txt";

	$handle = fopen($file, 'a');

	if($handle == false)
	{
		echo "Не могу открыть файл";
	}
	if(fwrite($handle, $enteredtext) == false)
	{
		echo " Не получается сохранить текст <br>";
	}
}
?>

<form action="test27_fibonacci_sbsd.php" method="post">
	<input type="text" name="name">
	<br>
	<input type="textarea" name="message">
	<br>
	<button type="submit">Загрузить</button>
</form>

<?php
echo "...<hr>";
//============================================================================================
echo " Function with switch condition <br>";
	Function boo ($val)
	{
		switch($val)
		{
			case 2:
				echo "Двойка";
			break;

			case 3:
				echo "Тройка";
			break;

			default:
				echo "Нет такого варианта";
			break;
		}
		echo '<br>';
	}

	boo(2);
	boo(3);
	boo(4);

echo "...<hr>";
//============================================================================================
echo " Function with array and key divided by 5<br>";

	$arr = [3, 8, 15, 25, 16, 11, 10, 5, 7, 30];

	for ($i=0; $i <count($arr) ; $i++) 
	{ 
		if( ($arr[$i] % 5) == 0)
			echo $arr[$i] . '   ';		
	}

echo "...<hr>";
//============================================================================================
echo " Looking for a simple numbers <br>";
	
	$buffer = array();
	
	$k ="простое";

	for ($i=2; $i < 100; $i++) 
	{ 
		for ($j=2; $j<$i; $j++) 
		{ 
			if(($i % $j) == 0 )
				$k ="не простое";
		}

		if($k == "простое")
			$buffer[] = $i;
		else
			$k ="простое";
	}

	foreach ($buffer as $buff) 
	{
		echo $buff . " " ;
	}

echo "...<hr>";
//============================================================================================
echo "Put array by foreach <br>";

?>