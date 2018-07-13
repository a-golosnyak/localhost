    <!DOCTYPE html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=cp1251" />
	<meta name="author" content="admin" /> 
    <link href="style.css" rel="stylesheet">

	<title>Untitled 1</title>
</head>

<body>
<!--    <form action="report.php" method="POST">
    
        <p>Имя: <input name="name" type="text" value="And"></p>
        <p>Фамилия: <input name="surname" type="text" value="Gol" ></p>
        <p>E-mail: <input name="email" type="text" value="aa@mail.ru"></p>
        <p>Сообщение: <br /><textarea name="message" cols="30" rows="5" >qwqwd</textarea></p>
        <p><input type='submit' value='Отправить'></p>
         
        <script type="text/javascript">
            document.write("Today is " + Date() );
            document.write("<hr>" );
        </script>
    </form> -->
    
    <?php
        $f = $c = '';

        if (isset($_POST['f'])) 
            $f = sanitizeString($_POST['f']);
        if (isset($_POST['c'])) 
            $c = sanitizeString($_POST['c']);
        
        if ($f != '')
        {
            $c = intval((5 / 9) * ($f - 32));
            $out = "$f °f equals $c °c";
        }
        elseif($c != '')
        {
            $f = intval((9 / 5) * $c + 32);
            $out = "$c °c equals $f °f";
        }
        else $out = "";
        
        echo <<<_END
        <html>
        <head>
        <title>Temperature Converter</title>
        </head>
        <body>
        <pre>
          Enter either Fahrenheit or Celsius and click on Convert
            
          <b>$out</b>
          <form method="post" action="convert.php">
            Fahrenheit <input type="text" name="f" size="7">
               Celsius <input type="text" name="c" size="7">
                       <input type="submit" value="Convert">
          </form>
        </pre>
        </body>
        </html>
_END;
        
        function sanitizeString($var)
        {
        $var = stripslashes($var);
        $var = strip_tags($var);
        $var = htmlentities($var);
        return $var;
        }
        
    ?> 
    
</body>
</html>