<?php

$var_inputUsuario=$_POST['inputUsuario'];
$var_inputNombre=$_POST['inputNombre'];
$var_inputApp=$_POST['inputApp'];
$var_inputApm=$_POST['inputApm'];
$var_inputEmail=$_POST['inputEmail'];
$var_inputpass=$_POST['inputpass'];
$var_telf=$_POST['telf'];

	

	//conexion a la BD
	include("conexion.php");

    $image = addslashes(file_get_contents("img/user.jpg"));

	$query="INSERT INTO usuario(idUsuario, nombUsuario, nombre, app, apm, pass, email,telf,foto) VALUES (null,'$var_inputUsuario','$var_inputNombre','$var_inputApp','$var_inputApm',AES_ENCRYPT('$var_inputpass','$var_inputUsuario'),'$var_inputEmail','$var_telf','$image')";
	
	mysql_query($query);
	
	echo '<script> window.location="login.php"; </script>';
	
	mysql_close();
		
	

?>










<!DOCTYPE HTML>

<html>
	<head lang="es">
		<title>. . : : F A R M A C I A : : . .</title>
		<meta charset="utf-8" />
		<meta name="description" content="Insertas productos a la farmacia"/>
		<link rel="Stylesheet" href=" " type="text/css" media="screen"/>
	</head>
	
<style type="text/css">
.uno {
	color:#FFF;	
	font-style:normal;
	font-size:36px;
	font-family:

	
}
}
</style>

	<body bgcolor="#000000"> 
		 <br>
		 <br>
		 <br>   
		<center>
        	<p class="uno">
            	. . : : P r o d u c t o   i n s e r t a d o : : . .
            </p>
		</center>

	</body>

</html>
