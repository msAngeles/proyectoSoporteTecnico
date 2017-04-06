<?php

$var_inputUsuario=$_POST['inputUsuario'];
$var_inputNombre=$_POST['inputNombre'];
$var_inputApp=$_POST['inputApp'];
$var_inputApm=$_POST['inputApm'];
$var_inputEmail=$_POST['inputEmail'];

//conexion a la BD
	include("conexion.php");
	$query="UPDATE usuario SET nombre='$var_inputUsuario',app='$var_inputNombre',apm='$var_inputApp',email='$var_inputApm',telf='$var_inputEmail' WHERE nombUsuario='miriam'";
	
	mysql_query($query);
	
	echo '<script> window.location="login.php"; </script>';
	
	mysql_close();
		
	

?>