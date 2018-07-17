<?php

//=== Fibonacci ==============================================================================
function fibonacci($val)
{
	if($val < 3)
		return 1;
	else
		return fibonacci($val-1) + fibonacci($val-2);
}

echo "Fibonacci function started <br>";

for($n = 1; $n<=16; $n++)
{
	echo (fibonacci($n) . " ");
}
echo "...<hr>";

//=== put Array ==============================================================================
echo "Put array by foreach <br>";

$cars = array( 'BMW', 'Audi', 'Mercedes', 'Porsche' );

foreach ($cars as $car) {
	echo "$car . <br />";
}
echo "...<hr>";

//=== Форма для отправки файла на сервер =====================================================
echo "Put file to server  <br>";
?>

<form action="27_action.php" method="post">
	<input type="file" name="file">
	<input type="submit" value="Загрузить">
</form>

<?php
echo "...<hr>";
//============================================================================================
echo "Put array by foreach <br>";
echo "...<hr>";
//============================================================================================
echo "Put array by foreach <br>";
echo "...<hr>";
//============================================================================================
echo "Put array by foreach <br>";
echo "...<hr>";
//============================================================================================
echo "Put array by foreach <br>";

?>