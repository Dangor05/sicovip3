<?php
include ('php/conexion.php');
session_start();
$cit=$_SESSION['sv07cdtp'];
$codu=$_SESSION['sv05codu'];


$user_id=null;
$sql1= "select sv08conse, sv01cedc, sv03cedp, sv04nfin from sv08trmte where sv08conse = ".$_GET['conse'];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }

?>
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
  <?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
    <h2>Inspeccion</h2>
<?php if($person!=null):?>

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
  <button type="submit" class="btn btn-default">Revisado</button>
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