<?php

    session_start();
    
    if (isset($_SESSION['username']))
    {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $forename = $_SESSION['forename'];
        $surname = $_SESSION['surname'];
        
        destroy_session_and_data();
                
        echo "� ������������, $forename.<br>
                ���� ������ ���$forename $surname.<br>
                ���� ��� ������������ '$username'
                � ��� ������ '$password'.";
    }
    else
    {
        echo"����������, ��� ����� <a href='index.php'>�������� �����</a>.";
        phpinfo();
    }
        
        
    function destroy_session_and_data()
    {
        $_SESSION = array();
        if (session_id() != "" || isset($_COOKIE[session_name()]))
            setcookie(session_name(), '', time() - 2592000, '/');
            session_destroy();
    }
?>