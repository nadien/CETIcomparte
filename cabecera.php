<?php 
include 'includes/config.php';
include 'barra_lateral.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Sergio Amed Álvarez Gómez">
    <link rel="icon" href="../../favicon.ico">

    <title>CETI comparte</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Estilos CETICOMPARte-->
    <link href="dist/css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
      
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">CETI comparte</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="#about">descargas</a></li>
            <li><a href="#contact">Contacto</a></li>
	<li class="login"><a href="#login">Entrar </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<hr /	>
  
<!-- contenedor -->
  <div class="jumbotron">
    <div class="container">

    <h4> Hola, estoy probando el contenedor </h4>

	</div>

 

    </div><!-- contenedoir -->

 <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
		  
            <a href="#" class="list-group-item active"><?php echo @$barrera['contenido']; ?></a>
            <a href="#" class="list-group-item"><?php echo @$barrera['contenido']; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra['id']; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra[3]; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra[4]; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra[6]; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra[7]; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra[8]; ?> </a>
            <a href="#" class="list-group-item"><?php echo @$barra[9]; ?> </a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->



   
