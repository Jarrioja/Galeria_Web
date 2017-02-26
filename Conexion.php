
<?php
class conecta{
    function Conectarse()
    {
        if (!($link=mysqli_connect("localhost","root","","septimaclase")))
        {
        header ("Error con conexión a MySQL");
        exit();
    }
    return $link;
    }
}

?>