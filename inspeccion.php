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
	<form role="form" method="post" action="php/addVisado.php" enctype="multipart/form-data">
  <div class="form-group">
  <a href="./verlista.php"></a>
   <input type="hidden" class="form-control" value="<?php echo $person->sv08conse; ?>" name="conse" required>
  </div>
  <div class="form-group">
  <input type="hidden" class="form-control" value="<?php echo $person->sv01cedc; ?>" name="cedc" required>
  </div>
  <div class="form-group">
   <input type="hidden" class="form-control" value="<?php echo $person->sv03cedp; ?>" name="cedp" required>
  </div>
  <div class="form-group">
   <input type="hidden" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
  </div>
  <div class="form-group">
    <label for="">Nº Plano</label>
    <input type="text" class="form-control" name="nplan">
  </div>
  <div class="form-group">
    <label for="">Nº Folio</label>
    <input type="text" class="form-control" name="nfol">
  </div>
  <div class="form-group">
    <label for="">Nº Predio</label>
    <input type="text" class="form-control" name="npred">
  </div>
    <div class="form-group">
    <label for="">Minuta</label>
    <input type="file" name="mnt">
  </div>
  <div class="form-group">
    <label for="">Fecha</label>
    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="fch">
  </div>
  <div class="form-group">
    <label for="">Impuestos</label>
 <select name="impu" class="form-control" name="impu" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
  </div>
    <div class="form-group">
    <label for="">Estado</label>
 <select name="std" class="form-control" name="std" >
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
 </select>
  </div>
  <div class="form-group">
    <label for="">Revisado por:</label>
    <input type="text" class="form-control" value="<?php echo $GLOBALS['cit'];?>" name="cit">
    <input type="hidden" class="form-control" value="<?php echo $GLOBALS['codu'];?>" name="codu">
  </div>
<a class="btn btn-default" href="Home.php">Regresar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Revisar</button>
</form>


</div>
</body>

</html>