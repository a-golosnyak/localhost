


<?php

    $var = "1234";
    $sum = 0;
    
    echo strlen($var) . "<br/>";
    
    for($i=0; $i<=strlen($var); $i++)
    {
        $sum += $var[$i];
        
        echo $var[$i] . " ";
    }
    echo $var . "<br/>" . $sum . "<br/>";
    
    echo "Privet";

?>