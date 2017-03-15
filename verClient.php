<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
	?>
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
	<?php 
	   session_start();
     if ($_SESSION['sv05codu'] == 1) {
     include "php/navbarconcli.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2concli.php');
      } 
	 ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Consulta Visados</h2>
<!-- Button trigger modal -->
  <!--<a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>-->
<br><br>
 

<?php include "php/concli.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>