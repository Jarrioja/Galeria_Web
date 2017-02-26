<?php 
	include_once('Conexion.php');
	$con = new conecta;
?>
<?php 
	$login = $_REQUEST['login'];
	
	$sSql = "SELECT cedula FROM `profesor` WHERE cedula = '$login'";
	
	$resultado = mysqli_query($con->Conectarse(),$sSql) or die ("Error al buscar");
	$sSql2 = "SELECT login FROM `usuario` WHERE login = '$login'";
	
	$resultadop = mysqli_query($con->Conectarse(),$sSql2) or die ("Error al buscar");
	
	if(mysqli_fetch_array($resultado) || mysqli_fetch_array($resultadop)){
		echo "false";
		}else{
			echo "true";
			}
	mysqli_close($con->Conectarse());
?>