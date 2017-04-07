<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
	?>
<html>
	<head>
		<title>Visado</title>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
	</head>
	<body>
	<?php 
	       if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }
	 ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Archivos Visados</h2>
<!-- Button trigger modal -->
  <!--<a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>-->
<br><br>
 

<?php include "php/concli.php"; ?>
</div>
</div>
</div>

<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="assets/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>

	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>