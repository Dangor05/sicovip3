<html>
	<head>
		<title>SICOVIP</title>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script> 
<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
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
	  	   <input type="text" name="s" class="form-control" placeholder="Buscar" required>
      </div>
      <button type="submit" class="btn btn-default">&nbsp;Buscar &nbsp;<i class="glyphicon glyphicon-search"></i></button>
    </form>

</div>
</div>
</div>

    <div class="container">
    <div class="modal fade" id="modal-1" role="dialog">
      <div class="modal-dialog modal-sm"><!--sm-->
        <div class="modal-content">
           <div class="modal-header" align="center">
            <button type 1="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Bienvenidos</h3>
           </div>
           <div class="modal-body ">
           <form action="php/modLogin.php" method="POST" > 
            
             <div class="imgcontainer"  align="center">
                <img src="imag/user1.ico" alt="Avatar" class="avatar">
            </div>

            <br>
            
            <div class="form-group" align="center"><label>Usuario:</label>&nbsp
            <input name="usuario" class="form-control" maxlength="9" type="text" placeholder="" required></div>
            <div class="form-group" ALIGN=center><label>Contraseña:</label>&nbsp
            <input name="password" type="password" minlength="5" class="form-control" placeholder="Contraseña" required></div>
            <div ALIGN=center><input name="login" class="btn btn-success btn-block btn-md" type="submit" value="login">
            <br>
            </div> 

            
        </form>
        <div class="modal-footer">
        <div align="center"> 
        <span><a class="btn btn-link" href="Terminos.html">Registrate</a></span>
        <br>
         <span><a href="Resetpass.php">¿Olvidaste tu contraseña?</a></span>
         </div>

        </div>
        <div style="position:right;"><button class="btn btn-danger" data-dismiss="modal">Cancelar</button></div>
        
             
           </div>
           </div>
           </div>
           </div>
           </div><!--fin modal -->
<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
