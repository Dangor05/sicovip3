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
<form role="form" method="post" action="php/agregart.php">
<div class="form-group">
    <label for="sv07cdtp">Codigo IT</label>
    <input type="text" class="form-control" name="sv07cdtp" required>
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <input type="text" class="form-control" name="sv07cedt" required>
  </div>
    <div class="form-group">
    <label for="sv07nomt">Nombre</label>
    <input type="text" class="form-control" name="sv07nomt" required>
  </div>
  <div class="form-group">
    <label for="sv07apdt">Apellidos</label>
    <input type="text" class="form-control" name="sv07apdt" required>
  </div>
 <div class="form-group">
    <label for="sv07estd">Estado cuenta</label>
    <select name="sv07estd" class="form-control" name="sv07estd" >
    <option value="1">Activo</option>
    <option value="2">Inactivo</option>
 </select>
</div>
  <div class="form-group">
    <label for="sv07pass">Pass</label>
    <input type="text" class="form-control" name="sv07pass" required>
  </div>
 <div class="form-group">
    <label for="sv05codu">Tipo Usuario</label>
    <select name="sv05codu" class="form-control" name="sv05codu" >
    <option value="1">Administrador </option>
    <option value="2">Topografo</option>
 </select>
</div>
   
  <button type="submit" class="btn btn-default">Agregar</button>
</form>

</div>
</body>

</html>