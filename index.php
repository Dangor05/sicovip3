<html>
	<head>
		<title>SICOVIP</title>
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
<div class="col-sm-1"></div>
<div class="col-md-12">
		<h2>Consulta de Visados</h2>

<form method="post" class="navbar-form navbar-left" role="search" action="./buscarcli.php">
     <h3>Cedula</h3>
     <div class="form-group row">
     <select name="vis" class="form-control" name="vis" >
    <option value="1">Cedula</option>
    <option value="2">Consecutivo</option>
    <option value="3">N° Finca</option>
    <option value="4">N° Plano</option>
    </select>
     </div>&nbsp&nbsp&nbsp&nbsp
	 <div class="form-group">
	  	   <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;Buscar &nbsp;<i class="glyphicon glyphicon-search"></i></button>
    </form>

</div>
</div>
</div>

    <div class="container">
    <div class="modal fade" id="modal-1" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
           <div class="modal-header" align="center">
            <button type 1="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Bienvenidos</h3>
           </div>
           <div class="modal-body ">
    <form name="Diagnostico" method="POST" action="php/modLogin.php">
    <div class="container">
    <div class="form-group row">
        <label for="example-text-input">Usuario:</label><br>
          <div class="col-xs-2">
            <span class="glyphicon glyphicon-user"><input class="form-control" type="text" id="u" name="usuario" required></span>
          </div>
          </div>

          <div class="form-group row">
        <label for="example-text-input">Contraseña:</label><br>
          <div class="col-xs-2">
          <span class="glyphicon glyphicon-eye-close"><input class="glyphicon glyphicon-eye-close form-control" type="password" id="apl" name="password" required></span>
          </div>
          </div>
  

   <div class="form-group row"><br>
      
    </div>
    <div class="form-group">
     <button type="submit" class="btn btn-primary">Entrar</button> 
     <span><a class="btn btn-info" href="Resetpass.php">¿Olvidaste tu contraseña?</a></span>
                    
    </div>
    </div>
    </form>

    </div>
    </div>
    </div>
  </div>
  </div><!--fin modal -->
<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
