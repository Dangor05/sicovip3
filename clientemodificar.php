<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Assets/datatables.min.css">
<script src="<?php echo URL;?>public/js/jquery-1.11.0.min.js"></script>
</head>
<body>
  <div class="container">
  <form role="form" method="post" action="php/actualizarct.php">
  <div class="form-group">
     <label for="sv01cedc">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01cedc; ?>"  name="sv01cedc" >
  </div>
   <div class="form-group">
    <label for="sv01cdtpc">Codigo IT</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01cdtpc; ?>"  name="sv01cdtpc" >
  </div>
  <div class="form-group">
    <label for="sv01nomc">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01nomc; ?>"  name="sv01nomc" >
  </div>
  <div class="form-group">
    <label for="sv01apdc">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01apdc; ?>"  name="sv01apdc" >
  </div>
  <div class="form-group">
    <label for="sv01emc">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->sv01emc; ?>"  name="sv01emc" >
  </div>
  <div class="form-group">
    <label for="sv01telc">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01telc; ?>"  name="sv01telc" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->sv07cdtp; ?>">
  <a class="btn btn-default" href="Home.php">Regresar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default">Actualizar</button>
</form>
</div>
</body>

</html>