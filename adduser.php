<?php
    
    $forename = $surname = $username = $password = $age = $email = "";
    
    if (isset($_POST['forename']))
        $forename = fix_string($_POST['forename']);
    if (isset($_POST['surname']))
        $surname = fix_string($_POST['surname']);
    if (isset($_POST['username']))
        $username = fix_string($_POST['username']);
    if (isset($_POST['password']))
        $password = fix_string($_POST['password']);
    if (isset($_POST['age']))
        $age = fix_string($_POST['age']);
    if (isset($_POST['email']))
        $email = fix_string($_POST['email']);
        
    $fail = validate_forename($forename);
    $fail .= validate_surname($surname);
    $fail .= validate_username($username);
    $fail .= validate_password($password);
    $fail .= validate_age($age);
    $fail .= validate_email($email);
    
    echo "<!DOCTYPE html>\n
            <html>
            <head>
            <title>������ �����</title>";
            
    if($fail== "") 
    {
        echo"</head>
                <body>
                    �������� ����� ������ �������: 
                    $forename, $surname, $username, $password, $age,$email.
                </body>
            </html>";
            // � ���� ����� ������������ ���� ����� ��������� � ���� ������
            // � ��������������� �������������� ���-���������� ��� ������
        exit;
    }
// ������ ��������� HTML� ��� JavaScript
    echo <<<_END
    <!-- ������HTML � JavaScript -->
    <style>
        .signup {
            border: 1px solid #999999;
            font: normal 14px helvetica; color:#444444;
        }
    </style>
    <script>
        function validate(form)
        {
            fail = validateForename(form.forename.value)
            fail += validateSurname(form.surname.value)
            fail += validateUsername(form.username.value)
            fail += validatePassword(form.password.value)
            fail += validateAge(form.age.value)
            fail += validateEmail(form.email.value)
            
            if (fail == "") 
                return true
            else 
            { 
                alert(fail); 
                return false 
            }
        }
        
        function validateForename(field) 
        {
            return (field == "") ? "�� ������� ���.\n" : ""
        }
        
        function validateSurname(field) 
        {
            return(field== "") ? "�� ������� �������.\n" : ""
        }
        
        function validateUsername(field) 
        {
            if (field == "") 
                return "�� ������� ��� ������������.\n"
            else if(field.length< 5)
                return "� ����� ������������ ������ ���� �� ����� 5 ��������.\n"
            else if (/[^a-zA-Z0-9_-]/.test(field))
                return"� ����� ������������ ��������� ������ a-z, A-Z, 0-9, - � _.\n"
            return ""
        }
        
        function validatePassword(field) 
        {
            if (field == "") 
                return "�� ������ ������.\n"
            else if (field.length < 6)
                return"� ������ ������ ���� �� ����� 6 ��������.\n"
            else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) || ! /[0-9]/.test(field))
                return"������ ������� 1 ������� �� ������� ������ a-z, A-Z� 0-9.\n"
            return ""
        }
        
        function validateAge(field) 
        {
            if (isNaN(field)) 
                return "�� ������ �������.\n"
            else if(field< 18 || field> 110)
                return"������� ������ ���� ����� 18 � 110.\n"
            return ""
        }
        
        function validateEmail(field) 
        {
            if (field == "") 
                return "�� ������ ����� ����������� �����.\n"
            else if (!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || 
            /[^a-zA-Z0-9.@_-]/.test(field))
                return"����������� ����� ����� �������� ������.\n"
            return ""
        }
     </script>
     </head>
        <body>
            <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
                <th colspan="2" align="center">��������������� �����</th>
                <tr>
                    <td colspan="2">� ���������, � ����� ����� <br>
                        ������� ��������� ������: <p><font color=red size=1><i>$fail</i></font></p>
                    </td>
                </tr>
                    <form method="post" action="adduser.php" onSubmit="return validate(this)">
                        <tr>
                            <td>���</td>
                            <td><input type="text" maxlength="32" name="forename" placeholder="forename"> </td>
                        </tr>
                        <tr>
                            <td>�������</td>
                            <td><input type="text" maxlength="32" name="surname" value="surname"> </td>
                        </tr>
                        <tr>
                            <td>���������������� ���</td>
                            <td><input type="text" maxlength="16" name="username" value="username"></td>
                        </tr>
                        <tr>
                            <td>������</td>
                            <td><input type="text" maxlength="12" name="password" value="password"> </td>
                        </tr>
                        <tr>
                            <td>�������</td>
                            <td><input type="text" maxlength="3" name="age" value="age"> </td>
                        </tr>
                        <tr>
                            <td>����������� �����</td>
                            <td><input type="text" maxlength="64" name="email" value="email"> </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="������������������"></td>
                        </tr>
                    </form>
            </table>
        </body>
     </html>
_END;
    function validate_forename($field)
    {
        return ($field == "") ? "�� ������� ���<br>" : "";
    }
    
    function validate_surname($field) 
    {
        
        return($field== "") ? "�� ������� �������<br>" : "";
    }
    
    function validate_username($field) 
    {
        if ($field == "") 
            return "�� ������� ��� ������������<br>";
        else if (strlen($field) < 5)
            return "� ����� ������������ ������ ���� �� ����� 5 ��������<br>";
        else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
            return "� ����� ������������ ����������� ������ �����, �����, - � _<br>";
        return "";
    }
    
    function validate_password($field) 
    {
        if ($field == "") 
            return "�� ������ ������<br>";
        else if (strlen($field) < 6)
            return "� ������ ������ ���� �� ����� 6 ��������<br>";
        else if ( !preg_match("/[a-z]/", $field) || !preg_match("/[A-Z]/", $field) ||
        !preg_match("/[0-9]/", $field))
            return "������ ������� 1 ������� �� ������� ������ a-z, A-Z � 0-9<br>";
        return "";
    }
    
    function validate_age($field) 
    {
        if ($field == "") 
            return "�� ������ �������<br>";
        else if ($field < 18 || $field > 110)
            return "������� ������ ���� ����� 18 � 110<br>";
        return "";
    }
    
    function validate_email($field) 
    {
        if ($field == "") 
            return "�� ������ ����� ����������� �����<br>";
        else if (!((strpos($field, ".") > 0) && (strpos($field, "@") > 0)) ||
        preg_match("/[^a-zA-Z0-9.@_-]/", $field))
            return "����������� ����� ����� �������� ������<br>";
        return "";
    }
    
    function fix_string($string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return htmlentities ($string);
    }
    
?>





