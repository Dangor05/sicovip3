
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
	<?php 	   session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarconvis.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2convis.php');
      } ?>
	
<div class="container">
<div class="row">
<div class="col-md-5">
		<h2>Reportes de solicitudes.</h2>
<!-- Button trigger modal -->

<form class="form-inline" class="navbar-form navbar-left" role="search" action="buscarReportCIT.php">
    

	 <div class="Form-group" class="col-sm-10">
	  	   <h4>Codigo IT</h4><input type="text"  name="S" class="form-control" placeholder="Buscar">
		 <div id="next_button" align="left"><button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button> </div>
     
	 </div>
	 
      </form>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>

