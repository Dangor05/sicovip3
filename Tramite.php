
<?php 
include("php/conexion.php");
$last="SELECT MAX(sv10codcon), sv10fech FROM sv10ctlcon;";
$resp = $con->query($last);
$cons=null;
if ($resp->num_rows>=0) {
  while ($r=$resp->fetch_array()) {

    $cons=$r[1]=date("Ymd").$r[0];
    
  }
}
     session_start();
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
<div class="col-md-6">
  <form action="php/agTramite.php" method="post" enctype="multipart/form-data"> 
<div class="form-group">
 <label for="sv03cedp">Nº Ced Propietario</label>&nbsp
 <!--<p><?php// echo $_SESSION['Cedp']; ?></p>-->
  <input type="text" class="form-control" value="<?php echo $GLOBALS['Cedp'];?>" name ="Cedpr"><br></div>

<div class="form-group"> 
 <label for="sv01cedt">Nº Ced Topografo</label>&nbsp
 <!--<p><?php //echo $_SESSION['Cedt']; ?></p>-->
 <input type="text" class="form-control" value="<?php echo $GLOBALS['Cedt'];?>" name="cedc"><br></div>

  <div class="form-group"> 
 <input type="hidden" class="form-control" value="<?php echo $GLOBALS['mail'];?>" name="mail"><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº consecutivo:</label>&nbsp
 <input type="text" class="form-control" value="<?php echo $cons; ?>" name="conse" required><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº Finca:</label>&nbsp
<input type="text" class="form-control" name="fin" placeholder="Nº Finca" required><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">Plano:</label>&nbsp
  <input type="file"  name="pla" placeholder="Plano" ><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">Cartas de Agua:</label>&nbsp
 <input type="file" name="car" placeholder="Cartas de Agua" ><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">AutoCat:</label>&nbsp
 <input type="file" name="dib" placeholder="Autocat" ><br><br></div>
     <a href="Propietario.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  <button type="submit" class="btn btn-default">Finalizar Tramite</button>
  
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