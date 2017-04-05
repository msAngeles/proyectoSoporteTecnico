<?php
	session_start(); 
	include 'conexion.php';

		if(isset($_POST['btn_login'])){
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
			$log = mysql_query("SELECT * FROM usuario WHERE nombUsuario='$usuario'"); //pass blob
            
			if (mysql_num_rows($log)>0) {
				$row = mysql_fetch_array($log);
				$_SESSION["usuario"] = $row['nombUsuario'];
				echo '<script> window.location="panel.php"; </script>';
                
			}
			else{
				echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
				echo '<script> window.location="login.php"; </script>';
			}
		}
?>
