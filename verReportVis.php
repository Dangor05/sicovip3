
<html>
	<head>
		<title>Reportes</title>
		<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
<script src="public/js/jquery-1.11.0.min.js"></script>
<script src="public/js/jquery-1.11.3.min.js"></script>
<script src="public/js/jquery-ui.js"></script>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	<?php	   session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarconvis.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2convis.php');
      } ?>
	
<div class="container">
<div class="row">
<div class="col-md-5">
		<h2>Reportes de Visados.</h2>
<!-- Button trigger modal -->

<form class="form-inline" class="navbar-form navbar-left" role="search" action="buscarReportVis.php">
    
	 <div class="Form-group" class="col-sm-7">
	  	   <h4>Desde</h4><input type="date"  name="V" class="form-control" placeholder="Buscar">
		     
		   <h4>Hasta</h4><input type="date" name="VS" class="form-control" placeholder="Buscar">
		 <div id="next_button" align="left"><button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button> </div>
     
	 </div>
	 
      </form>
	 
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>

	