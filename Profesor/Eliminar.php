<?php
session_start();

include_once ('Conexion.php');

$con = new Conecta();
?>


<?php
if(isset ($_GET['id'])){
                
                
              $id=$_GET['id'];
                
              $Sql = "Select login,clave,nota from usuario where idUsuario = '$id'";
                
                
                
             $result = mysqli_query($con->conectarse(),$Sql)or die("Error en la Busquedad");
              
              
                
                    if($row = mysqli_fetch_array($result)){
                        
                        
                        
                    
          
?>
<!DOCTYPE html>
<html><script src="jquery.js"></script>
        <script src="jquery.validate.js"></script>
        <link rel="StyleSheet" href="estilo.css" type="text/css" />
        
        
        
        <script type="text/javascript">


	$("document").ready(validacion);
	function validacion(){
		$("#formulario").validate({
		rules:{
			nota:{
				required:true
				,number:true,
				rangelength: [1, 2],
				range: [0, 20]
				}
		
		},
		messages:{
			
			nota:{
				required:"INGRESE LA NOTA",
				number:"SOLO NUMEROS",
				rangelength: "ERROR",
				range: "LA NOTA DEBE SER DEL 0 AL 20"
				
			},
			        
			
		}
	
		});
	}
</script>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja &amp; Argenis Paz</title>
        <link rel="stylesheet" href="../css/estilohome.css" type="text/css">
    </head>
    <body>
    <br/>
<br/>
<br/>
<br/>
    <center>
         <center>
                     <table width="500" border="0" bgcolor="#212741" style="text-align:center" height="80">
    <tr>
      <td width="147"><h2 class="logo" style="color:#FFF">¿Esta seguro de ELIMINAR al Alumno de C.I: <?php echo $row['login']?>? </h2></td>
    </tr>
  </table>
	</center>
    <br/>
<br/>
<br/>
<br/>
<br/>
                        
                     
        
        <form name="formulario" action="" method="POST">
            <table border="15" bordercolor="#4c8f96" >
                <!--<tr>
                    <td height="28">Cedula:</td>
                    <td><?php echo $row['login']?></td>
                </tr>-->
                <center>
                    <tr>                       
                        <td><input style="font-style:!important; color: WHITE;background-color:RED;height:50px; width:100px" type="submit" name="enviar" value="ELIMINAR"/>
                         </td>                 
                    </tr>
                    
                 <TD> <a href="profesor.php">
                          <input type="button" name="regresar" value="REGRESAR">
                        </a></td> </center>  
            </table>
            
        </form>
            
          <?php

        if(isset ($_POST['enviar'])){    
                
                
         $Sql = "DELETE FROM usuario WHERE idUsuario='$id'"; 
                
            
         mysqli_query($con->conectarse(),$Sql) or die("Error al modificar nota");?>
         
                    <?php
         mysqli_close($con->conectarse());
            
           echo "<br/><br/><br/><br/><br/><center><table width='320' border='0' bgcolor='#212741' style='text-align:center' height='80'>
    <tr>
      <td width='314'><h2 style='color:#FFF'>Eliminado Correctamente <br/> Actualizando Nota<br>
Por favor Espere...</h2></td>
    </tr>
  </table></center>"; 
  
  ?> <meta http-equiv="refresh" content="02; URL=Profesor.php" />
        
		         <?php
        }
     ?>  
        <?php
        }
      }
        ?>
        </center>
    </body>
</html>


     
     
                      