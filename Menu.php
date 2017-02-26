<?php
session_start();

    include_once ('Conexion.php');
    $con= new Conecta();
?>

<?php

             $login = $_REQUEST['login'];
			 $clave = $_REQUEST['clave'];
		$query = "SELECT * FROM usuario where login = '$login'";
	$registroA = mysqli_query($con->Conectarse(),$query) or die (mysqli_error()."<br/>".mysqli_errno());
	
	$regA=  mysqli_fetch_array($registroA);
                      $nombre = $regA['login'];
	
	if($nombre != ""){
      if( $clave != $regA['clave'] ){echo "<head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
        <link rel='stylesheet' href='css/estilohome.css' type='text/css'>
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
			  <center><table width='314' border='0' bgcolor='#212741' style='text-align:center' height='80'>
    <tr>
    
      <td width='304'><h2 class='logo' style='color:#FFF'>CLAVE O USUARIO ERRONEO</h2></td>
    </tr>
  </table><meta http-equiv='refresh' content='02; URL=Index.php'><a href='Index.php' target='izq'><h2>Regresar<h2></a></center>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>                     
     <div id='footer'>
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
    </body>
</html>";
	  }
					else{
                      $_SESSION['alumno'] = $nombre;
                      
                      $_SESSION['id'] = $regA['idUsuario'];
                      ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
        <link rel="stylesheet" href="css/estilohome.css" type="text/css">
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
    <div align="center">
      
          
    </div>
    <center>
    <table width="314" border="0" bgcolor="#212741" style="text-align:center" height="80">
    <tr>
      <td width="304"><h2 class="logo" style="color:#FFF">Bienvenido Estudiante Su Cedulas es:  <?php echo $_SESSION['alumno']; ?></h2></td>
    </tr>
  </table>
  <br>
                      <br><br/><br/><br/><br/><br/>
  </center>
                            <div align="center">
   
   <table width="1800" border="0">
  <tr>
    <td bgcolor="#212741" width="38%" align="right" height="60"><a href="Profesor/IndexP.php">
      <a href='Alumno/Estudiantes.php' target='cuerpo'><input type="submit" name="enviar" value="Consultar Notas" /></a>
    </td>
    <td bgcolor="#4c8f96"><a href='CerrarSesion.php'><input type="submit" name="enviar" value="Cerrar Sesion" /></a>
    </td>
  </tr>
</table> 

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>                     
     <div id="footer">
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
    </body>
</html>
                     
                       <?php 
           
            
           
        
            
        ?>
                     </div>
      
                       
             <?php 
     
         
           
		   
					}}else{
		  $query = "SELECT * FROM profesor where cedula = '$login'";
	$registro = mysqli_query($con->Conectarse(),$query) or die (mysqli_error()."<br/>".mysqli_errno());
	$reg=  mysqli_fetch_array($registro);
	
	                    $nombre = $reg['nombre'];  
		  if($nombre != ""){
			  if( $clave != $reg['claveProfesor'] ){echo "
			  <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
        <link rel='stylesheet' href='css/estilohome.css' type='text/css'>
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
			  <center><table width='314' border='0' bgcolor='#212741' style='text-align:center' height='80'>
    <tr>
    
      <td width='304'><h2 class='logo' style='color:#FFF'>CLAVE O USUARIO ERRONEO</h2></td>
    </tr>
  </table><meta http-equiv='refresh' content='02; URL=Index.php'><a href='Index.php' target='izq'><h2>Regresar<h2></a></center>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>                     
     <div id='footer'>
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
    </body>
</html>
  ";} else{
			  					   
                      $_SESSION['profesor'] = $nombre;
                     ?>
                     
                      
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
        <link rel="stylesheet" href="css/estilohome.css" type="text/css">
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
    <div align="center">
      
          
    </div>
    <center> 
    </div>
    <center>
       <table width="314" border="0" bgcolor="#212741" style="text-align:center" height="80">
    <tr>
    
      <td width="304"><h2 class="logo" style="color:#FFF">Bienvenido Sr(a) <?php echo $_SESSION['profesor']; ?></h2></td>
    </tr>
  </table>
	</center>
    
                      <div align="center">
                        <p><br>
                      <br><br/><br/><br/>
                      <table width="1800" border="0">
  <tr>
    <td bgcolor="#212741" width="38%" align="right" height="60"><a href="Profesor/IndexP.php">
      <a href='Profesor/Profesor.php' target='cuerpo'><input type="submit" name="enviar" value="Profesor" /></a>
    </td>
    <td bgcolor="#4c8f96"><a href='CerrarSesion.php'><input type="submit" name="enviar" value="Cerrar Sesion" /></a>
    </td>
  </tr>
</table> 
		   <?php
			  }}else{ echo "<head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
        <link rel='stylesheet' href='css/estilohome.css' type='text/css'>
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
			  <center><table width='314' border='0' bgcolor='#212741' style='text-align:center' height='80'>
    <tr>
    
      <td width='304'><h2 class='logo' style='color:#FFF'>CLAVE O USUARIO ERRONEO</h2></td>
    </tr>
  </table><meta http-equiv='refresh' content='02; URL=Index.php'><a href='Index.php' target='izq'><h2>Regresar<h2></a></center>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>                     
     <div id='footer'>
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
    </body>
</html>";}}
              mysqli_close($con->conectarse());    
?>
      
                      </div>
                      
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>                     
     <div id="footer">
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
    </body>
</html>
