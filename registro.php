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

        <form class="form-signin">
            <h2 class="form-signin-heading">Porfavor ingresa tus datos</h2>
            <label for="inputUsuario" class="sr-only">usuario</label>
            <input type="text" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
          
            <label for="inputNombre" class="sr-only">Nombre(s)</label>
            <input type="text" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
          
            <label for="inputApp" class="sr-only">Apellido paterno</label>
            <input type="text" id="inputApp" class="form-control" placeholder="Apellido paterno" required autofocus>
          
            <label for="inputApm" class="sr-only">Apellido materno</label>
            <input type="text" id="inputApm" class="form-control" placeholder="Apellido materno" required autofocus>
          
            
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            
            <label for="inputpass" class="sr-only">password</label>
            <input type="password" id="inputpass" class="form-control" placeholder="Password" required autofocus>
            
            <label for="inputrepass" class="sr-only">password</label>
            <input type="password" id="inputrepass" class="form-control" placeholder="Repetir password" required autofocus>
            
            
            
            <button class="btn btn-lg btn-primary btn-block boton" type="submit" style="">Registrar</button>
        </form>

    </div>
    <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
