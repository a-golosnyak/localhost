    <!DOCTYPE html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=cp1251" />
	<meta name="author" content="admin" /> 
    <link href="style.css" rel="stylesheet">

	<title>Untitled 1</title>
</head>

<body>
    <form action="report.php" method="POST">
    
        <p>Имя: <input name="name" type="text" value="And"></p>
        <p>Фамилия: <input name="surname" type="text" value="Gol" ></p>
        <p>E-mail: <input name="email" type="text" value="aa@mail.ru"></p>
        <p>Сообщение: <br /><textarea name="message" cols="30" rows="5" >qwqwd</textarea></p>
        <p><input type='submit' value='Отправить'></p>
        
        <script type="text/javascript">
            document.write("Today is " + Date() );
            document.write("<hr>" );
        </script>
    </form>
    
    <?php
        $connection = new mysqli('localhost', 'root', '', 'publications');

        if($connection->connect_error)
        {
//            die($connection->connect_error);
            echo "Подключения не произошло";
        }
        else
        {
            echo "Подключились!";
        }
        
        $result = $connection->query("SELECT * FROM classics");
        
        echo "<pre>";
//       
        for($i; $i < 5; $i++)
        {
            $result->data_seek($i);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            echo "Author: " .   $row['author'] .    "<br>";
            echo "Title: " .    $row['title'] .     "<br>";
            echo "Category: " . $row['category'] .  "<br>";
            echo "Year: " .     $row['year'] .      "<br>";
            echo "Id: " .       $row['id'] .        "<br> <br>";
            
        }
        echo "</pre>";
        $result->close();
        $connection->close();
    ?> 
    
</body>
</html>