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

<form role="form" method="post" action="<?php echo URL;?>Propieratario/agrePropietario.php">
<div class="form-group">
    <label for="sv03cedp">Cedula</label>
    <input type="text" class="form-control" name="sv03cedp" required>
  </div>
  <div class="form-group">
    <label for="sv03nomp">Nombre</label>
    <input type="text" class="form-control" name="sv03nomp" required>
  </div>
  <div class="form-group">
    <label for="sv03apdp">Apellidos</label>
    <input type="text" class="form-control" name="sv03apdp" required>
  </div>
  <div class="form-group">
    <label for="sv03emp">Email</label>
    <input type="email" class="form-control" name="sv03emp" required>
  </div>
  <div class="form-group">
    <label for="sv03telp">Telefono</label>
    <input type="text" class="form-control" name="sv03telp" required>
  </div>
   <div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="sv06codp" class="form-control" name="sv06codp" >
    <option value="1">Fisico</option>
    <option value="2">juridico</option>
 </select>
</div>
<a class="btn btn-default" href="Home.php">Regresar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Continuar</button>
</form>


</div>
</body>

</html>