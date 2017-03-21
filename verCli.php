<html>
	<head>
		<title>Visado</title>
<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<script src="public/js/jquery-1.11.0.min.js"></script>
<script src="public/js/jquery-1.11.3.min.js"></script>
<script src="public/js/jquery-ui.js"></script>
	</head>
	<body>
	<?php include "php/navbarCli.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
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
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;Buscar</button>
    </form>

</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
