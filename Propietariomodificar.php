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
	<form role="form" method="post" action="php/actualizarp.php">
  <div class="form-group">
    <label for="sv03cedp">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03cedp; ?>" name="sv03cedp" >
  </div>
  <div class="form-group">
    <label for="sv03nomp">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03nomp; ?>" name="sv03nomp" >
  </div>
  <div class="form-group">
    <label for="sv03apdp">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03apdp; ?>" name="sv03apdp" >
  </div>
  <div class="form-group">
    <label for="sv03emp">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->sv03emp; ?>" name="sv03emp" >
  </div>
  <div class="form-group">
    <label for="sv03telp">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03telp; ?>" name="sv03telp" >
  </div>
   <div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="sv06codp" class="form-control" value="<?php echo $person->sv06codp; ?>" name="sv06codp" >
    <option value="1">Fisico</option>
    <option value="2">Juridico</option>
 </select>
</div>

<input type="hidden" name="id" value="<?php echo $person->sv03cedp; ?>">
   <a class="btn btn-default" href="Home.php">Regresar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default">Actualizar</button>
</form>


</div>
</body>

</html>