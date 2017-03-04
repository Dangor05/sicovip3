<html>
	<head>
		<title>Reportes</title>
<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
<script src="public/js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
		<script >
			$(document).ready(function(){
				$("#exportar").click(function(e){
					e.preventDefault();
					window.print();
				});
			});
		</script>
	
	</head>
	<body>
	<?php
	   session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarconvis.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2convis.php');
      }   ?>
<div class="container">
<!--<a href="exportar.php" class="btn" >Imprimir</a>-->
<button id="exportar">Imprimir</button>
<div class="row">
<div class="col-md-12">
		<h2>Reporte por Topografo.</h2>


<?php include "php/busqReportCIT.php"; ?>

</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>