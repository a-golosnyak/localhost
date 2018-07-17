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

if(isset($_FILES['uploadfile']))
{
	echo "Файл заходит <br>";
	$fileType_ = explode("/",  $_FILES['uploadfile']['type']);		// Разбиваем поле type
	$fileType = $fileType_[0];										// Тут лежит тип
	$fileFormat = $fileType_[1];									// Тут формат
	$fileName = "upload_" . date("Y-M-D his");						// Имя формируем с датой

	$fileName = $fileName . '.' . $fileFormat;

	if(copy($_FILES['uploadfile']['tmp_name'], $fileName))
		echo "Looks like success<br>";
	else
		echo "Shit happens<br>";


}
?>
<form action="test27_fibonacci_sbsd.php" method="post" enctype=multipart/form-data>
	<input type="file" name="uploadfile">
	<button type="submit">Загрузить</button>
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