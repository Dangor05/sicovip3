<?php session_start();
if (isset($_SESSION['cd'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Busqueda Propietario</title>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	<header>
		<?php include("php/navini.php"); ?>
	</header>
<div class="container">
<div class="row">
<div class="col-md-12">
<a href="buscarpro	.php"> 	
<button type="button" class="btn btn-default" ><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</button> </a>
		<h2>Buscar propietario</h2>
		<div class="alert alert-info">
			<strong><p class="text-lefh text-white">Ingrese el numero de cedula del propietario que desea agregar a la solicitud de tramite</p></strong>
		</div>

		<form class="navbar-form navbar-left" role="search" action="./buscarp.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Cedula">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
    </form>
    <br>
    <br>
    <br>


<?php include "php/busquedap.php"; ?>
</div>
</div>
</div>

<script type="text/javascript" src="public\bootstrap\js\bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="public\JS\valpro.js"></script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>