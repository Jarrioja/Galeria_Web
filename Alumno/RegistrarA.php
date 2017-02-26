<?php
	include_once('Conexion.php');
	$con = new conecta;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
<link rel="stylesheet" href="../css/estiloa.css" type="text/css">
</head>

<body>
</body>
	<center>
        <br />
        <br />
        <br />
		<?php
			$login = $_REQUEST['login'];
			$clave = $_REQUEST['clave'];
						
			$sSqlInsertar= "INSERT INTO usuario VALUES(NULL,'$login','$clave',NULL)";
			
			
			mysqli_query($con->Conectarse(),$sSqlInsertar) or die( "error al insertar Usuario");
			mysqli_close($con->Conectarse());
			
		?>
        <table>
        <table width="314" border="0" bgcolor="#4c8f96" style="text-align:center" height="80">
    <tr>
      <td width="304"><h2 class="logo" style="color:#FFF">Registro Exitoso!</h2></td>
    </tr>
  </table>
        <br/>
        <meta http-equiv="refresh" content="03; URL=../index.php" />
        <a href="../index.php"> Ir al inicio </a>
        </center>

</html>