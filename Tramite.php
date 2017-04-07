<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {

  include("php/expli.php");
   
     $Cedt = $_SESSION['Cedt'];
     $Cedp = $_SESSION['Cedp'];
     $mail= $_SESSION['mail'];
     ?>
<?php if ($cons!=null):?>
<html>
  <head>
    <title>Tramite</title>
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
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="public/JS/validaciones.js"></script>
  </head>
  <body>
    <?php 
  if ($_SESSION['sv05codu'] == 1) {
    include('php/navbar.php');  
    }else if ($_SESSION['sv05codu'] == 2) {
    include('php/navh2.php');
      }  ?>
  <div class="container">
<div class="row">
<div class="col-md-4">
  <form action="php/agTramite.php" method="post" enctype="multipart/form-data"> 
<div class="form-group">
 <label for="sv03cedp">Nº Ced Propietario</label>&nbsp
 <!--<p><?php// echo $_SESSION['Cedp']; ?></p>-->
  <input type="text" class="form-control" value="<?php echo $GLOBALS['Cedp'];?>" readonly name ="Cedpr"></div>

<div class="form-group"> 
 <label for="sv01cedt">Nº Ced Topografo</label>&nbsp
 <!--<p><?php //echo $_SESSION['Cedt']; ?></p>-->
 <input type="text" class="form-control" value="<?php echo $GLOBALS['Cedt'];?>" readonly name="cedc"></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº consecutivo:</label>&nbsp
 <input type="text" class="form-control" value="<?php echo $cons; ?>" readonly="" name="conse" required></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº Finca:</label>&nbsp
<input type="text" class="form-control" name="fin" placeholder="Nº Finca" required onkeypress="return Numeros(event)"></div>

  <div class="form-group"> 
 <label for="sv03ptario">Plano:</label>&nbsp
  <input type="file" class="form-control-file" name="pla" placeholder="Plano"></div>

  <div class="form-group"> 
 <label for="sv03ptario">Cartas de Agua:</label>&nbsp
 <input type="file" class="form-control-file" name="car" placeholder="Cartas de Agua" required></div>

  <div class="form-group"> 
 <label for="sv03ptario">AUTOCAD:</label>&nbsp
 <input type="file" class="form-control-file" name="dib" placeholder="AUTOCAD" required></div>
   <div class="form-group"> 
 <input type="hidden" class="form-control" value="<?php echo $GLOBALS['mail'];?>" name="mail"></div>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  <button type="submit" class="btn btn-success">Finalizar Tramite</button>
  
  </form>
<?php else:?>
  <p class="alert alert-danger">404 no se encuentra</p>
<?php endif; mysqli_close($con);?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>