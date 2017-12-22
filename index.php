<?php

    require_once 'login.php';
    $connection = new mysqli($db_hostname, $db_username, $db_password, $db_database);
    
    if ($connection->connect_error) 
        die($connection->connect_error);
        
    if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
    {
        $un_temp = mysql_entities_fix_string($connection,$_SERVER['PHP_AUTH_USER']);
        $pw_temp = mysql_entities_fix_string($connection,$_SERVER['PHP_AUTH_PW']);
        
        $query = "SELECT * FROM users WHERE username='$un_temp'";
        $result = $connection->query($query);
        
        if (!$result) 
            die($connection->error);
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();
            $salt1 = "qm&h*";
            $salt2 = "pg!@";
            $token = hash('ripemd128', "$salt1$pw_temp$salt2");
            
            if ($token == $row[3]) 
            {
                session_start();
                
                if (!isset($_SESSION['count'])) 
                    $_SESSION['count'] = 0;
                else 
                    ++$_SESSION['count'];
                    
                echo $_SESSION['count'];

                $_SESSION['username'] = $un_temp;
                $_SESSION['password'] = $pw_temp;
                $_SESSION['forename'] = $row[0];
                $_SESSION['surname'] = $row[1];
                echo "$row[0] $row[1] : Привет . $row[0] . теперь вы зарегистрированы под именем '$row[2]'";
                echo "<br>";
                echo $_SERVER['REMOTE_ADDR'];
                
                die("<p><a href='continue.php'> Щелкните здесь для продолжения</a></p>");                                
            }
            else 
                die("Неверная комбинация имя пользователя — пароль");
        }
        else 
            die("Неверная комбинация имя пользователя — пароль");
    }
    else
    {
        header('WWW-Authenticate: Basic realm="Restricted Section"');
        header('HTTP/1.0 401 Unauthorized');
            die("Пожалуйста, введите имя пользователя и пароль");
    }
    $connection->close();
    
    
    function mysql_entities_fix_string($connection, $string)
    {
        return htmlentities(mysql_fix_string($connection, $string));
    }
    
    function mysql_fix_string($connection, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $connection->real_escape_string($string);
    }

?>