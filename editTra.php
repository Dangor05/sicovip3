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
<div class="col-md-6">
		<h2>EDITAR</h2>

<?php
include("php/conexion.php");
$user_id=null;
$sql1= "select sv04nfin, sv04apln,sv04aact,sv04acta from sv04reqtos where sv04nfin = ".$_GET['nfin'];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
  $ex=$_GET['con'];
  $pr=$_GET['pr'];
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/upTramite.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="sv08conse">Consecutivo</label>
    <input type="hidden" value="<?php echo $pr ;?>">
    <p><?php echo $ex;?></p>
    </div>
  <div class="form-group">
    <label for="sv08conse">N° Finca</label>
    <p><?php echo $person->sv04nfin;?></p>
    <input type="hidden" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
  </div>
  <div class="form-group">
    <label for="sv08fchs">Plano Agrimensura</label>
    <input type="file" value="<?php echo $person->sv04apln; ?>" name="pln" required>
  </div>
  <div class="form-group">
    <label for="sv08fumt">Carta de Agua</label>
    <input type="file" value="<?php echo $person->sv04aact; ?>" name="aact" required>
  </div>
  <div class="form-group">
    <label for="sv01cedc">Autocat</label>
    <input type="file" value="<?php echo $person->sv04acta; ?>" name="acta" required>
  </div>
  <input type="hidden" name="id" value="<?php echo $person->sv04nfin; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
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