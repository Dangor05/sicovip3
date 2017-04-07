<?php 
session_start();
if (isset($_SESSION['tp'])) {
$cedp=$_SESSION['pr'];
$cedt=$_SESSION['cd'];
$eml=$_SESSION['em'];
 ?>
 <?php
 include("php/expli.php");
  if ($cons!=null):?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sicovip</title>
	  <link rel="stylesheet" type="text/css" href="public\bootstrap\css\bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="public\bootstrap\css\bootstrap-theme.min.css">
      <script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
      <script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
      <script type="text/javascript" src="public/JS/validaciones.js"></script>
</head>
<body>
	<header>
		<?php include ("php/navcli.php"); ?>
	</header>
	<div class="container">
	<div class="row">
	<div class="col-md-4">

	  <form action="php/agreTrami.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  <label for="sv03cedp">Nº Ced Propietario</label>&nbsp
	  <!--<p><?php// echo $_SESSION['Cedp']; ?></p>-->
	  <input type="text" class="form-control" readonly value="<?php echo $cedp;?>" name ="pr"></div>
	  <div class="form-group"> 
	  <label for="sv01cedt">Nº Ced Topografo</label>&nbsp
	  <!--<p><?php //echo $_SESSION['Cedt']; ?></p>-->
	  <input type="text" class="form-control" value="<?php echo $cedt;?>" readonly="" name="cedc"></div>
	  <div class="form-group">
	  <label for="sv03ptario">Nº consecutivo:</label>&nbsp
	  <input type="text" class="form-control" readonly="" value="<?php echo $cons; ?>" name="conse" required></div>
	  <div class="form-group">
	  <label for="sv03ptario">Nº Finca:</label>&nbsp
	  <input type="text" class="form-control" name="fin" placeholder="Nº Finca" required onkeypress="return Numeros(event)"></div>
	  <div class="form-group">
	  <label for="sv03ptario">Plano Agrimensura:</label>&nbsp
	  <input type="file"  name="pln" placeholder="Plano" ></div>
	  <div class="form-group">
	  <label for="sv03ptario">Carta de Agua:</label>&nbsp
	  <input type="file" name="car" placeholder="Cartas de Agua" ></div>
	  <div class="form-group">
	  <label for="sv03ptario">AUTOCAD:</label>&nbsp
	  <input type="file" name="dib" placeholder="Autocat" ></div>
	  <div class="form-group">
	  <input type="hidden" class="form-control" value="<?php echo $eml;?>" name="mail"></div>
	  <a href="Propietario.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Volver</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <button type="submit" class="btn btn-primary">Finalizar Tramite</button>
	  </form>
	  <?php else:?>
  <p class="alert alert-danger">404 no se encuentra</p>
<?php endif;?>
		
	</div>
	</div>
	</div>

</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>