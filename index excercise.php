    <!DOCTYPE html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=cp1251" />
	<meta name="author" content="admin" /> 
    <link href="style.css" rel="stylesheet">

	<title>Untitled 1</title>
</head>

<body>
    <form action="report.php" method="POST">
    
        <p>���: <input name="name" type="text" value="And"></p>
        <p>�������: <input name="surname" type="text" value="Gol" ></p>
        <p>E-mail: <input name="email" type="text" value="aa@mail.ru"></p>
        <p>���������: <br /><textarea name="message" cols="30" rows="5" >qwqwd</textarea></p>
        <p><input type='submit' value='���������'></p>
        
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
    
    <?php   //--- ������ � ������� ------------------------------------------------------
        $fh = fopen("textfile.txt", 'w') or die("������� ���� �� �������");
        
        $text = <<<_END
������1
C�����2
C�����3
_END;
        echo "<pre>";
        echo $text;
        echo "<br>";
        
        fwrite($fh, $text) or die("���� ������");
        
        echo "���� ������� �������";
        fclose($fh);
        
        if (!copy('textfile.txt', 'textfile2.txt')) 
            echo " ����������� ����������";
        else 
            echo"���� ������� ���������� � 'testfile2.txt'";
            
        fseek($fh, 10, SEEK_END);    
        fclose($fh);
    ?>
    
    <?php   //--- �������� ����������� ---------------------------------------------------
    echo <<<_END
    <html>
        <head>
            <title>PHP-����� ��� �������� ������ �� ������</title>
        </head>
        <body>
            <form method='post' action='index.php' enctype='multipart/form-data'>
                �������� ����: 
                <input type='file' name='filename' size='10'>
                <input type='submit' value='���������'>
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
                echo "��������� ����������� '$name' ��� ������ '$n':<br>";
                echo "<img src='$n'>";
            }
            else 
                echo "'$name' � ������������ ���� �����������";
        }
        else 
            echo "�������� ����������� �� ���������";
                
        echo "</body></html>";
        ?>
        
        
        <?php   // exec.php
        
        $cmd = "dir"; // Windows
        // $cmd = "ls"; // Linux, Unix & Mac
        exec(escapeshellcmd($cmd), $output, $status);
        if ($status) 
            echo "������� exec �� ���������";
        else
        {
            echo "<pre>";
            
            foreach($output as $line) 
                echo htmlspecialchars("$line\n");
                
            echo "</pre>";}
        ?>
    
    
</body>
</html>