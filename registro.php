<?php
    SESSION_START();
    include 'conexion.php';
    if(ISSET($_SESSION['usuario'])) {
        echo '<script> window.location="index.php"; </script>';
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/signin.css" rel="stylesheet">


</head>

<body>
    <div class="container">

        <form class="form-signin" method="post" action="insertarUsuario.php">
            <h2 class="form-signin-heading">Porfavor ingresa tus datos</h2>
            <label for="" class="sr-only">usuario</label>
            <input name=" inputUsuario" type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus maxlength="15" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">
          
            <label for="inputNombre" class="sr-only">Nombre(s)</label>
            <input name="inputNombre" type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus maxlength="30" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">
          
            <label for="inputApp" class="sr-only">Apellido paterno</label>
            <input name="inputApp" type="text" id="inputApp" class="form-control" placeholder="Apellido paterno" required autofocus maxlength="30" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras">
          
            <label for="inputApm" class="sr-only">Apellido materno</label>
            <input name="inputApm" type="text" id="inputApm" class="form-control" placeholder="Apellido materno" required autofocus maxlength="30" pattern="[a-zA-Z a-zA-Z]*" title="solo puedes introducir letras" >
          
            
            <label for="inputEmail" class="sr-only">Email</label>
            <input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus maxlength="50" title="micuenta@ejemplo.com">
            
            <label for="telf" class="sr-only">Telefono</label>
            <input name="telf" type="text" id="telf" class="form-control" placeholder="telfefono" required autofocus pattern="[0-9]+{10}" title="solo puedes introducir numeros"  maxlength="10">
            
            <label for="inputpass" class="sr-only">password</label>
            <input name="inputpass" type="password" id="inputpass" class="form-control" placeholder="Password" required autofocus maxlength="16">
            
            <label for="inputrepass" class="sr-only">password</label>
            <input name="inputrepass" type="password" id="inputrepass" class="form-control" placeholder="Repetir password" required autofocus maxlength="16">
            
            
            
            <button class="btn btn-lg btn-primary btn-block boton" type="submit" style="">Registrar</button>
        </form>

    </div>
    <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
</body>

</html>