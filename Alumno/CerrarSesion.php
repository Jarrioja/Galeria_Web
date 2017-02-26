<?php
session_start();

session_destroy();



echo "<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Alumnos</title>
<link rel='stylesheet' href='../css/estilohome.css' type='text/css'>
</head>

<body>
<br/>
<br/>
<br/>
<br/>";



    echo"<br/>
<br/>
<br/>
<br/><center><h2>Usted a Cerrado Sesion... Gracias por su visita</h2></center>";
	
	echo"<br><br>";

        echo "<meta http-equiv='refresh' content='02; URL=../Index.php'>";
        
         
        
        
        echo"<center><a href='../Index.php' target='izq'>Regresar</a><br></center>";
    
echo "</body></html>";

?>
