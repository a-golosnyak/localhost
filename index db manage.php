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
        $connection = new mysqli('localhost', 'root', '', 'publications');

        if($connection->connect_error)
            echo "Подключения не произошло";
        else
            echo "Подключились!";
        
        if(isset($_POST['delete']) && isset($_POST['id']) )
        {
            $id = get_post($connection, 'id');
            $query = "DELETE FROM classics WHERE id=$id";
            $result = $connection->query($query);
            if($result == NULL)
                echo "Сбой при удалении данных: $query<br>" . $connection->error . "<br><br>";
        }
        
        if (isset($_POST['author']) &&
            isset($_POST['title']) &&
            isset($_POST['category']) &&
            isset($_POST['year']) &&
            isset($_POST['id']))
            {
                $author     = get_post($connection, 'author');
                $title      = $connection->real_escape_string($_POST['title']);
                $category   = $connection->real_escape_string($_POST['category']);
                $year       = $connection->real_escape_string($_POST['year']);
                $id         = $connection->real_escape_string($_POST['id']);
                
                $query  = "INSERT INTO classics VALUES" . "('$author', '$title', '$category', '$year', '$isbn')";
                $result = $connection->query($query); 
                
                if ($result == NULL) 
                    echo "Сбой при вставке данных: $query<br>" . $connection->error . "<br><br>";
            }
            
        echo <<<_END
        <form action="index.php" method="post">
        <pre>
        Author <input type="text" name="author">
        Title  <input type="text" name="title">
        Category <input type="text" name="category">
        Year <input type="text" name="year">
        Id <input type="text" name="id">
        <input type="submit" value="ADD RECORD"> // кнопка// ДОБАВИТЬ ЗАПИСЬ</pre></form>
_END;
        $query = "SELECT * FROM classics";
        $result = $connection->query($query);
            
        if(!isset($result))
        {
            echo "Сбой запроса";
        }
        
        for($i=0; $i<$result->num_rows; ++$i)
        {
            $result->data_seek($i);
            $row = $result->fetch_array(MYSQLI_NUM);
        
            echo <<<_END
            <pre>
                Author $row[0]
                Title $row[1]
                Category $row[2]
                Year $row[3]
                Id $row[4]
            </pre>
            <form action="index.php" method="post">
            <input type="hidden" name="delete" value="yes">
            <input type="hidden" name="id" value="$row[4]">
            <input type="submit" value="DELETE RECORD"></form>
_END;
            }
        
        $result->close();
        $connection->close();
        
        function get_post($conn, $var)
        {
        return $conn->real_escape_string($_POST[$var]);
        }
        
    ?> 
    
</body>
</html>