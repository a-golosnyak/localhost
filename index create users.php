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
    

    <?php>
    
    require_once 'login.php';
    $connection = new mysqli($hn, $un, $pw, $db);
    
    if ($connection->connect_error) 
        die($connection->connect_error);
        
    $query = "CREATE TABLE users (
    forename VARCHAR(32) NOT NULL,
    surname VARCHAR(32) NOT NULL,
    username VARCHAR(32) NOT NULL UNIQUE,
    password VARCHAR(32) NOT NULL
    )";
    
    $result = $connection->query($query);
    
    if (!$result) 
        die($connection->error);
        
    $salt1 = "qm&h*";
    $salt2 = "pg!@";
    $forename = 'Bill';
    $surname = 'Smith';
    $username = 'bsmith';
    $password = 'mysecret';
    $token = hash('ripemd128', "$salt1$password$salt2");
    
    add_user($connection, $forename, $surname, $username, $token);
    
    $forename = 'Pauline';
    $surname = 'Jones';
    $username = 'pjones';
    $password = 'acrobat';
    $token = hash('ripemd128', "$salt1$password$salt2");
    
    add_user($connection, $forename, $surname, $username, $token);
    
    function add_user($connection, $fn, $sn, $un, $pw)
    {
        $query = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
        $result = $connection->query($query);
        
        if (!$result) 
            die($connection->error);
    }
    
    ?> 
    
</body>
</html>