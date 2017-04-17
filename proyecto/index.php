<?php
  session_start();
  include 'conexion.php';

  if(isset($_SESSION['usuario'])) {
    $nombre=$_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
            <ul class="nav navbar-nav navbar-right">
            <li><a href="perfil.php">Mi Perfil</a></li>
            <li><a href="logout.php">Salir</a></li>
            <li><a href="#">Ayuda</a></li>
          </ul>
            
             <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Altas</a></li>
            <li><a href="#">Bajas</a></li>
            <li><a href="#">Consulta</a></li>
            
          </ul>
          
        </div>
      </div>
    </nav>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    
    
  </body>
</html>

<?php
  }else{
	 echo '<script> window.location="login.php"; </script>';
  }
?>