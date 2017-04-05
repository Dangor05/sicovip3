
<html>
	<head>
		<title>Busqueda Visado</title>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<!--<link rel="stylesheet" type="text/css" href="public\css\login.css">-->
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script> 
	</head>
	<body>

<?php include "php/navindex.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<a class="btn btn-default" href="index.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>
		<h2>BUSCAR</h2>
		<br>


<?php 
if (isset($_POST['vis'])) {
	if ($_POST['vis']==1) {
	include "php/busquedaconcli.php";
}elseif ($_POST['vis']==2) {
	include "php/busquedaconse.php";
}elseif ($_POST['vis']==3) {
	include "php/busquedaconfin.php";
}else{
	include "php/busquedaconpla.php";
}
}
 ?>  



</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

