<?php 

    session_start();
    
    include_once ('Conexion.php');
    
    $con = new Conecta();

?>


<!DOCTYPE html>
<html>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
         <link rel="stylesheet" href="../css/estilohome.css" type="text/css">
   
    <body>
    <br/>
<br/>
<br/>
<br/>
    <center>
        <center>
                     <table width="153" border="0" bgcolor="#212741" style="text-align:center" height="80">
    <tr>
      <td width="147"><h2 style="color:#FFF">NOTAS</h2></td>
    </tr>
  </table>
	</center>
    <br/>
<br/>
<br/>
<br/>
<br/>
       <?php
       
            if(isset ($_SESSION['profesor'])){
                
                $Sql = "SELECT idUsuario,login,nota from usuario ";
                
               $result = mysqli_query($con->conectarse(),$Sql) or die("Error en la Busquedad");;
                ?>
                
                <table border="15" bordercolor="#4c8f96" >
                    <tr>
                        <th>Cedula</th>
                        <th>Nota</th>
                        <th>Modificar</th>
                        <th>Eliminar Alumno</th>
                    </tr>
                    
                 <?php
                 
                 while ($row=  mysqli_fetch_array($result)){
                   ?>                     
                    
                    <tr>
                        <td><?php echo $row['login'] ?></td>
                        <td><?php echo $row['nota'] ?></td>
                        <td><a href="Modificar.php?id=<?php echo $row['idUsuario']; ?>">Modificar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $row['idUsuario']; ?>">Eliminar</a></td>
                    </tr> 

                  <?php                       
                 } 
                 ?>      
                </table>
                
            <?php    
            }
            mysqli_close($con->conectarse());
       ?>
      
       <a href="cerrarsesion.php"><input type="button" name="regresar" value="Cerrar Sesion"></a> 

    </center></body>
</html>
