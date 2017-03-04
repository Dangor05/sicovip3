<html>
	<head>
		<title>Configuraciones</title>
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
	session_start();
	      if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } 

	 ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Actualizar</h2>
		<br>

<?php include "php/configura.php";?>

</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>