<?php session_start();
if (isset($_SESSION['cd'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sicovip</title>
	<link rel="stylesheet" type="text/css" href="public\bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public\bootstrap\css\bootstrap-theme.min.css">
	<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
</head>
<header>
	<?php include("php/navini.php"); ?>
</header>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="form-group row">
	<div class="col-md-1">

	</div>
	<br>
<div class="col-md-5">
<h2>Consulta de Visados</h2>

<form method="post" class="navbar-form navbar-left" role="search" action="./buscarcli.php">
     <h3>Cedula</h3>
     <div class="form-group row">
     <select name="vis" class="form-control" name="vis" >
    <option value="1">Cedula</option>
    <option value="2">Consecutivo</option>
    <option value="3">N° Finca</option>
    <option value="4">N° Plano</option>
    </select>
     </div>&nbsp&nbsp&nbsp&nbsp
	 <div class="form-group">
	  	   <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;Buscar &nbsp;<i class="glyphicon glyphicon-search"></i></button>
    </form>
</div>



</div>
</div>
</div>
</div><!--Fin Container-->
</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>