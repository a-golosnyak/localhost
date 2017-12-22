<!DOCTYPE html>
<html>
    <head>
        <meta charset="win1251">
        <title>Поле для загрузки файлов</title>
        <link href="style.css" rel="stylesheet">


    </head>
    <body>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') 
            {                
                echo "Пакет получен" ."<br>";
                
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                        
                if(!empty($name) && !empty($surname) && !empty($email) && !empty($message)) 
                {
                    $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 
            
                    if(check_length($name, 2, 25) && check_length($surname, 2, 50) && check_length($message, 2, 1000) && $email_validate) 
                    { 
                        echo $name."<br />".$surname."<br />".$email."<br />".$message."<br />"; //
                    }
                    else
                    {
                        echo "Данные не корректны";
                    }
                }
                else
                {
                    echo "Данные не введены";
                }
                echo "<br>";
                
                echo empty($name);
                
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                        
            }
        ?>

    </body>


</html>
    
        <?php
            function clean($value = "") 
            {
                $value = trim($value);
                $value = stripslashes($value);
                $value = strip_tags($value);
                $value = htmlspecialchars($value);
                
                return $value;
            }
            
            function check_length($value = "", $min, $max)
            {
                $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
                return !$result;
            }
        ?>
        
        
        
        
        
        
        