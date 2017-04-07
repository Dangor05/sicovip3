<?php
session_start();
if(isset ($_SESSION['cd'])) {
?>
<html>
	<head>
		<title>Reportes</title>
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
	
	<?php include("php/navini.php"); ?>
	
<div class="container">
<div class="row">
<div class="col-md-5">
		<h2>Reportes de solicitudes.</h2>
<!-- Button trigger modal -->

<form class="form-inline" class="navbar-form navbar-left" role="search" action="buscarReportClient.php">
    

	 <div class="Form-group" class="col-sm-10">
	  	   <h4>Codigo IT-Cliente</h4>
	  	   <input type="text"  name="S" class="form-control" placeholder="Buscar" required>   <div class="Form-group" >
		 <div id="next_button" align="left">
		 <button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;&nbsp;Buscar</button> 
		 </div>
     
	 </div>
	 
      </form>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>