<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sicovip</title>
	<link rel="stylesheet" type="text/css" href="public\bootstrap\bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css">
	<script type="text/javasricpt" src="public\bootstrap\bootstrap\js\bootstrap.min.js"></script>
	<script type="text/javasricpt" src="public\JS\jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="public\JS\validaciones.js"></script>
</head>
<body>
<header>
	 <nav class="navbar navbar-inverse" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  
    <a class="navbar-brand" href="./"><b>SICOVIP</b></a>
  </div>
</div>
</nav>
</header>
	<div class="container">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-md-4">
	<form role="form-inline" action="php/agreRegisto.php" method="POST" onsubmit="return valciente()" > 
     <div class="form-group">
   <center><h3>Registro</h3></center>  
  <div class="form-group" >
  <label for="sv01cedc">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" name='cedt' maxlength="10" onkeypress="return Numeros(event)" required></div>
  <div class="form-group"> 
 <label for="sv01cdtpc">Codigo IT</label>&nbsp
   <input type='text' class="form-control" name='cit' maxlength="6" onkeypress="return Numeros(event)" required></div>

  <div class="form-group">
  <label for="sv01nomc">Nombre</label>&nbsp
    <input type='text' class="form-control" name='nomt' maxlength="12" onkeypress="return Letras(event)" required></div>

  <div class="form-group">
  <label for="sv01apdc">Apellidos</label>&nbsp
  <input type='text'class="form-control" name='apelt' maxlength="30" onkeypress="return Letras(event)" required></div>

   <div class="form-group">
   <label for="sv01emc">Email</label>&nbsp
   <input type='email'class="form-control" name='emat' required></div>

   <div class="form-group">
   <label for="sv01telc">Telefono</label>
   <input type='text' class="form-control" name='telt' onkeypress="return Numeros(event)" required></div>

      <div class="form-group">
   <label for="pass">Contraseña</label>
   <input type='password' class="form-control" id="pass" name='pass' required></div>

      <div class="form-group">
   <label for="pass">Vuelva escribr la contraseña:</label>
   <input type='password' class="form-control" id="vpass" name='vpass' required></div>


   </div>
<a class="btn btn-danger" href="index.php"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Cancelar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary text-right">Continuar</button>
    
  </form>

	</div>
	</div>
	</div>
</body>
</html>