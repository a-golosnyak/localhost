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
            document.write("<br>" );
        </script>
    </form>
    
    <?php
            
        $Integer = 10;
        $Str = "3";
        echo $Integer . $Str;
        echo "<br>";
    ?>
    
    <?php   //--- Работа с файлами ------------------------------------------------------
        $fh = fopen("textfile.txt", 'w') or die("Создать файл не удалось");
        
        $text = <<<_END
Строка1
Cтрока2
Cтрока3
_END;
        echo "<pre>";
        echo $text;
        echo "<br>";
        
        fwrite($fh, $text) or die("Сбой записи");
        
        echo "Файл записан успешно";
        fclose($fh);
        
        if (!copy('textfile.txt', 'textfile2.txt')) 
            echo " Копирование невозможно";
        else 
            echo"Файл успешно скопирован в 'testfile2.txt'";
            
        fseek($fh, 10, SEEK_END);    
        fclose($fh);
    ?>
    
    <?php   //--- Загрузка изображения ---------------------------------------------------
    echo <<<_END
    <html>
        <head>
            <title>PHP-форма для загрузки файлов на сервер</title>
        </head>
        <body>
            <form method='post' action='index.php' enctype='multipart/form-data'>
                Выберите файл: 
                <input type='file' name='filename' size='10'>
                <input type='submit' value='Загрузить'>
            </form>
_END;
        if ($_FILES)
        {
            $name = $_FILES['filename']['name'];
            
            switch($_FILES['filename']['type'])
            {
                case 'image/jpeg': $ext = 'jpg'; break;
                case 'image/gif': $ext = 'gif'; break;
                case 'image/png': $ext = 'png'; break;
                case 'image/tiff': $ext = 'tif'; break;
                default: $ext = ''; break;
            }
            if ($ext)
            {
                $n = "image.$ext";
                move_uploaded_file($_FILES['filename']['tmp_name'], $n);
                echo "Загружено изображение '$name' под именем '$n':<br>";
                echo "<img src='$n'>";
            }
            else 
                echo "'$name' — неприемлемый файл изображения";
        }
        else 
            echo "Загрузки изображения не произошло";
                
        echo "</body></html>";
        ?>
        
        
        <?php   // exec.php
        
        $cmd = "dir"; // Windows
        // $cmd = "ls"; // Linux, Unix & Mac
        exec(escapeshellcmd($cmd), $output, $status);
        if ($status) 
            echo "Команда exec не выполнена";
        else
        {
            echo "<pre>";
            
            foreach($output as $line) 
                echo htmlspecialchars("$line\n");
                
            echo "</pre>";}
        ?>
    
    
</body>
</html>