<html>
	<head>
		<title>SICOVIP</title>
<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<script src="public/js/jquery-1.11.0.min.js"></script>
<script src="public/js/jquery-1.11.3.min.js"></script>
<script src="public/js/jquery-ui.js"></script>
	</head>
	<body>
	<?php 
 session_start();
      if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } ?>
  <div class="container">
  <div class="row">
  <div class="col-md-4">
		<h2>Actualizar documentos</h2>
    <br>

<?php
include ('php/obtreq.php');
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/agreReins.php" enctype="multipart/form-data">
  <div class="container">
      <div class="form-group row">
          <label for="selecc" class="col-xs-2 form-label">Seleccione el archivo que requiere actualizar:</label>
           <div class="col-xs-2">
              <select name="opcion" class="form-control" id="opci" name="opcion" required>
              <option value="1">Todos</option>
              <option value="2">Plano</option>
              <option value="3">Cartas de Agua</option>
              <option value="4">AutoCad</option>
              </select>
             </div>
             </div>
      <div class="form-group row">
    <label class="col-xs-1 col-form-label" for="sv08conse">Consecutivo</label>
    <div class="col-xs-2">
    <p><?php echo $cn;?></p>
    <input type="hidden" id="ced" class="form-control" value="<?php echo $person->sv03cedp;?> " name="cedp">
    </div>
     </div>
  <div class="form-group row">
    <label for="sv08conse" class="col-xs-1 col-form-label" >N° Finca:</label>
    <div class="col-xs-2">
      <input type="text" id="fin" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
      </div>
  </div>
  <div class="form-group row">
    <label for="sv08fumt" class="col-xs-1 col-form-label" >Plano Agrimensura:</label>
    <div class="col-xs-2">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04apln;?>" name="pln" >
    </div>
    </div>
    <div class="form-group row">
    <label for="sv08fumt" class="col-xs-1 col-form-label" >Carta de Agua</label>
    <div class="col-xs-2">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04aact; ?>" name="acta">
    </div>
  </div>
  <div class="form-group row">
    <label for="sv01cedc" class="col-xs-1 col-form-label" >AUTOCAD</label>
    <div class="col-xs-2">
    <input type="file"  class="form-control-file" value="<?php echo $person->sv04acta; ?>" name="aact">
  </div>
  </div>
   <button type="submit" class="btn btn-default">Actualizar</button>
      </div>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; mysqli_close($con);?>

</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>