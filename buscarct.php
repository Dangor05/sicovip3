
<html>
	<head>
		<title>.: Busqueda Cliente :.</title>
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
		   session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarct.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2ct.php');
      }  ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>BUSCAR</h2>


<?php include "php/busquedact.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>