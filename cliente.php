<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link rel="stylesheet" type="text/css" href="Public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="Public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Assets/datatables.min.css">
<script src="<?php echo URL;?>public/js/jquery-1.11.0.min.js"></script>
</head>
<body>
	<div class="container">
	   <form role="form-inline" action="php/addCliente.php" method="POST" > 
     <div = class="group">
 
  <center><h3>Registro Cliente</h3></center>  
  <div class="form-group" >
  <label for="sv01cedc">Cedula</label>&nbsp
   <input type='text' class="form-control" name='cedt' required><br></div>
  <div class="form-group"> 
 <label for="sv01cdtpc">Codigo IT</label>&nbsp
   <input type='text' class="form-control" name='cit' <br><br></div>

  <div class="form-group">
  <label for="sv01nomc">Nombre</label>&nbsp
    <input type='text' class="form-control" name='nomt'><br></div>

  <div class="form-group">
  <label for="sv01apdc">Apellidos</label>&nbsp
  <input type='text'class="form-control" name='apelt'><br></div>

   <div class="form-group">
   <label for="sv01emc">Email</label>&nbsp
   <input type='email'class="form-control" name='emat'><br></div>

   <div class="form-group">
   <label for="sv01telc">Telefono</label>
   <input type='tel' class="form-control" name='telt'><br></div>
   </div>
<a class="btn btn-default" href="Home.php">Regresar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Continuar</button>
    
  </form>


</div>
</body>

</html>