<script>
    function ajaxRequest()
    {
        try// Браузер не относится к семейству IE?
        { // Да
            var request = new XMLHttpRequest()
        }
        catch(e1)
        {
            try // ЭтоIE 6+?
            { // Да
                request = new ActiveXObject("Msxml2.XMLHTTP")
            }
            catch(e2)
            {
                try // ЭтоIE 5?
                { // Да
                    request = new ActiveXObject("Microsoft.XMLHTTP")
                }
                catch(e3) // Данный браузер не поддерживает AJAX
                {
                    request = false
                }
            }
        }
        return request
    }
</script>