<?php
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
echo "...";




?>