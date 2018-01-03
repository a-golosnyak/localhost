<!DOCTYPE html>
<html>
	<head>
		<title>Использование метода is</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
		<div><button id='but1'>Вывод маcсивов Javascript</button></div>
		<p id='Array1_Js'></p>
		<p id='Array2_Js'></p>
		
		<div><button id='but2'>Вывод масcивов PHP</button></div>
		<p id='Array1_PHP'></p>
		<p id='Array2_PHP'></p>

		<script>		
			$('#but1').click(function()
			{
				Array1 = [
					'Mercesess',
					'BMW',
					'Ford', 
				]
				Array2 = new Array(
					'Toyota',
					'Lada',
					'Cherry'
				)
				$('#Array1_Js').html('Вывод массива JavaScript в строку: ' + Array1.join())
				$('#Array2_Js').html('Вывод массива JavaScript в строку: ' + Array2.join())
			})

			$('#but2').click(function()
			{

			})
		</script>

		<?php
			$buffer = Array(
				'Mercesess',
				'BMW',
				'Ford',
				);
			foreach($buffer as $car)
				echo($car . '<br>');

			echo("Hello");
		?>

	</body>
</html>