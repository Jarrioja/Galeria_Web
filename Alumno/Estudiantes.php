<?php
    session_start();

    include_once ('Conexion.php');
    $con= new Conecta();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
         <link rel="stylesheet" href="../css/estilohome.css" type="text/css">
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
<?php

        if(isset ($_SESSION['alumno'])){

            $id = $_SESSION['id'];
            
            $Sql = "SELECT login,nota from usuario where idUsuario='$id'";
            
             $resultado = mysqli_query($con->conectarse(),$Sql) or die("Error en la Busquedad");
             
                if($reg = mysqli_fetch_array($resultado)){
                    
                    echo "<center><br>";
                    
                    echo "<table width='153' border='0' bgcolor='#212741' style='text-align:center' height='80'>
    <tr>
      <td width='147'><h2 style='color:#FFF'>CONSULTA DE NOTAS</h2></td>
    </tr>
  </table>
	</center>";
                    
                   echo "<br/><br/><br/><br/><br/><br/><br/>";
                    
                    echo "<center><table border='15' bordercolor='#4c8f96' width='300px'>
                        
                             <tr>
                               <th>Cedula</th>
                                <th>NOTA</th>
                                
                             </tr>
                             <tr>
                                <td align='center'>".$reg['login']."</td>
                                <td align='center'>".$reg['nota']."</td>
                             
                                </tr>
                               </table></center>";
                    
                }else{
                    
                    echo "<h1>No hay registro </h1>";
                    
                }

        }else{
            
            echo "<h2>Debe Iniciar Sesion</h2>";

        }
        echo "</center>";
        
        mysqli_close($con->conectarse());
?>
<center><a href="cerrarsesion.php"><input type="button" name="regresar" value="Cerrar Sesion"></a></center>

</body>
</html>