<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<html>
	<head>
		<title>SICOVIP</title>

		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
		<script src="public/js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body>
	<?php 
			if ($_SESSION['sv05codu'] == 1) {
			include('php/navbar.php');	
			}else if ($_SESSION['sv05codu'] == 2) {
				include('php/navh2.php');
			}else if ($_SESSION['sv05codu'] == 3) {
				include('php/navh3.php');
			}	?>
	<div class="container">
	<div class="row">
<div class="col-md-12">
		<h2>Tramites en espera de inspección</h2>
<br><br>
<form role="form" method="post" action="Cliente.php"> 

<button type="submit" class="btn btn-default">Nuevo Tramite</button>

</form>
<br>
<?php include ('php/Htabla.php'); ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>
