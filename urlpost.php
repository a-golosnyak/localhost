<?php

    if (isset($_POST['data'])) 
    {
        $Ansver = " sdc ";
        $Data = $_POST['data'];
        $Time = time();
        
        switch($Data)
        {
            case "1":
                $Ansver = 1024;
                $Ansver = $Time;
                break;
                
            case "2":
                $Ansver = 2048;
                break;
                
            case "3":
                $Ansver = 4096;
                break;
                
            case "4":
                $Ansver = 8192;
                break;
                
            default:
                $Ansver = "Undefined data";
                $Ansver = $Data;
                break;
        }
        echo $Ansver;
    }
    else
    {
        echo '$_POST[data] is absend';
    }
     
    function SanitizeString($var)
    {
        $var = strip_tags($var);
        $var = htmlentities($var);
        return stripslashes($var);
    }

?>