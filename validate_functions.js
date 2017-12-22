function validateForm(form) 
{
    fail = validateForename(form.forename.value);
    fail += validateSurename(form.surname.value);
    fail += validateUsername(form.username.value);
    fail += validatePassword(form.password.value);
    fail += validateAge(form.age.value);
    fail += validateEmail(form.email.value);
    
    
    if (fail == "") 
        return true;
    
    alert(fail); 
    return false; 
}

function validateForename(field)
{
    field = field.replace(/\s/g, '');
    return (field == "") ? "�� ������� ���.\n" : "";
}

function validateSurename(field)
{
    return (field == "") ? "�� ������� �������.\n" : "";
}

function validateUsername(field)
{
    if(field == "") 
        return "�� ������� ��� ������������.\n";
    else if(field.length < 5)
        return "� ����� ������������ ������ ���� �� ����� 5 ��������.\n";
    else if(/[^a-aA-Z0-9_-]/.test(field))
        return "� ����� ������������ ��������� ������ a-z, A-Z, 0-9, - � _.\n";
    return "";    
}

function validatePassword(field)
{
    if(field == "") 
        return "�� ������ ������.\n";
    else if(field < 6)
        return "� ������ ������ ���� �� ������ 6 ��������"
    else if(!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field))
        return "������ ������� 1 �������� ������� ������ a-z, A-Z, 0-9.\n"
    return ""                
}

function validateAge(field)
{
    if((field == "") || isNan(field) )
        return "�� ������ ������.\n";
    else if( (field < 18) || (field > 110) )
        return "������� ������ ���� ����� 18 � 110.\n"
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