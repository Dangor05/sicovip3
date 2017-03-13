
<html>
	<head>
		<title>Busqueda Visado</title>
<<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
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
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php    session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarconvis.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2convis.php');
      } ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<a class="btn btn-default" href="verVisado.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>
		<h2>BUSCAR</h2>


<?php include "php/busquedaconvis.php"; ?>  

</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>