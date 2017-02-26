<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/estilohome.css" type="text/css">
<title>SISTEMA DE NOTAS - PHP AVANZADO - Jesus Arrioja & Argenis Paz</title>
<script src="jquery.js"></script>
        <script src="jquery.validate.js"></script>
        <link rel="StyleSheet" href="css/estil.css" type="text/css" />
      <script type="text/javascript">
$("document").ready(validacion);
	function validacion(){
		$("#formulario").validate({
		rules:{
			login:{
				required:true,
				rangelength: [7, 8],
				//remote:"ComprobarLogin.php",
					
			},
			clave:{
				required:true,
				//remote:"Comprobarclave.php",
				
					
			}
		
		},
		messages:{
			
			login:{
				required:"INGRESE SU CEDULA",
				remote:"REGISTRO NO EXISTE",
				rangelength: "MINIMO 7 Y MAXIMO 8 DIGITOS"
			},
			clave:{
				required:"INGRESE SU PASSWORD",
				remote:"PASSWORD ERRADA",
				
				
				
			}
                      
			
		}
	
		});
	}
</script>
    



    </head>
    <body>
    <br/>
	<br/>
	<br/>
	<br/>
    <center>
  <table width="213" border="0" bgcolor="#212741" style="text-align:center" height="80">
    <tr>
      <td width="207"><h2 class="logo" style="color:#FFF">Bienvenidos</h2></td>
    </tr>
  </table>
  </center>
<br />
<center>
<h2>Registrate Aqui</h2>
</center>
<br/>       
    <div a align="center"id="menu">  
            
            
            <form name="formulario" id="formulario" action="Menu.php" method="post"  >
            <table border="15" bordercolor="#212741" >
                <tr>
                    <td>Ingrese su Cedula:</td>
                    <td><input type="text" name="login" id="login"></td>
                </tr>
                
                <tr>
                    <td>Ingrese su Password:</td>
                    <td><input type="password" name="clave" id="clave"></td>
                    
                </tr>
                
                <tr>
                    <td><div align="center"><a href="Index.php">
                    <input type="reset" name="limpiar"   value="Limpiar" />
                      </a></div></td>
                    <td><div align="center">
                      <input type="submit" name="enviar" value="Enviar" />
                  </div></td>
                </tr>
            </table>
            <div align="center"></div>
           </form >
            <table width="1800" border="0">
  <tr>
    <td bgcolor="#4c8f96" width="38%" align="right" height="60">
<Form action="Alumno/RegistrarA.html">
            <input type="submit" name="Alum" value=" Registrar Alumno" />
  </Form> 
</td>
    <td bgcolor="#212741"><a href="Alumno/IndexA.php">
  
            <Form action="Profesor/RegistrarP.html">
            <input type="submit" name="Prof" value=" Registrar Profesor" />
            </Form>   
            </td>
  </tr>
</table> <br />
    </div>
<br/>
<br/>
<br/>
<br/>	
<br/>
<br/>
<br/>
<br/>
</center>
<div id="footer">
		<div>
			<p>&nbsp;</p>
		</div>
	</div>
    </body>
</html>

