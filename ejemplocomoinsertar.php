<?php

	$r_clave=$_POST["clave"];
	$r_nom=$_POST["producto"];
	$r_formula=$_POST["formula"];
	$r_tipo=$_POST["tipo"];
	$r_presentacion=$_POST["presentacion"];
	$r_cantidad=$_POST["cantidad"];
	$r_costo=$_POST["costo"];
	$r_descrip=$_POST["descripcion"];
	
	

	//conexion a la BD
	include("conexion.php");
	$query="insert into tbl_medicamentos(c_clv_p,c_nom_f,c_nom_p,c_tipo_p,c_pre_p,c_cant_p,c_costo_p,c_descrip) values ('$r_clave','$r_formula',
	'$r_nom','$r_tipo','$r_presentacion','$r_cantidad','$r_costo','$r_descrip')";
	
	mysql_query($query);
	
	echo "<p>producto almacenado </p>";
	
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
