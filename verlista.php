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
		<script src="public/js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php 
     if ($_SESSION['sv05codu'] == 1) {
      	include "php/navbarconlista.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2conlista.php');
      }
 ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Planos a Visar</h2>

<br><br>



<?php include "php/Htabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>
