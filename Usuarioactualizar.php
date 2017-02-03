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
	<form role="form" method="post" action="php/actualiUsu.php">
  <div class="form-group">
    <label for="sv07cdtp">Codigo IT</label>
     <p><?php echo $person->sv07cdtp; ?></p>
    <input type="hidden" class="form-control"  value="<?php echo $person->sv07cdtp; ?>" name="sv07cdtp" >
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <p><?php echo $person->sv07cedt; ?></p>
    <input type="hidden" class="form-control" value="<?php echo $person->sv07cedt; ?>" name="sv07cedt" >
  </div>
    <div class="form-group">
    <label for="sv07nomt">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07nomt; ?>" name="sv07nomt" >
  </div>
  <div class="form-group">
    <label for="sv07apdt">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07apdt; ?>"  name="sv07apdt" >
  </div>
  <div class="form-group">
    <label for="sv07pass">Pass</label>
    <input type="password" class="form-control" value="<?php echo $person->sv07pass; ?>" name="sv07pass" >
  </div>

<input type="hidden" name="id" value="<?php echo $person->sv07cdtp; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>


</div>
</body>

</html>