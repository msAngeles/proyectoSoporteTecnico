<?php

$nombre=$_POST['nombre'];
$app=$_POST['app'];
$apm=$_POST['apm'];
$telf=$_POST['telf'];
$email=$_POST['email'];

//conexion a la BD
	include("conexion.php");
	$query="UPDATE usuario SET nombre='$nombre',app='$app',apm='$apm',email='$telf',telf='$email' WHERE nombUsuario='miriam'";
	
	mysql_query($query);
	
	echo '<script>alert("Usuario modificado");
 window.location="editarPerfil.php"; </script>';
	
	mysql_close();
		
	

?>