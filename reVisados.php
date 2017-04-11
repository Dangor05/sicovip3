<?php session_start();
$cit=$_SESSION['sv07cdtp'];
$codu=$_SESSION['sv05codu'];
include ("php/obtrevisado.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sicovip</title>
	<link rel="stylesheet" type="text/css" href="public\bootstrap\bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css">
	<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>

</head>
<script type="text/javascript">
    function Letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [8, 37, 39, 46, 6];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
      }
}
</script>
<script type="text/javascript">
function Numeros(e)
{
var key = window.Event ? e.which : e.keyCode
return ((key >= 48 && key <= 57) || (key==8))
}
</script>

<body>
	 <?php    
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } ?>
<div class="container">
<div class="row">
<div class="col-md-4">
    <h2>Visado</h2>
<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php" enctype="multipart/form-data">
  <div class="form-group">
  <label for="">Consecutivo</label>
   <input type="text" class="form-control" readonly="" onkeypress="return Letras(event)" value="<?php echo $person->sv08conse; ?>" name="sv08conse" required>
  </div>
  <div class="form-group">
  <label for="">Topografo</label>
  <input type="text" readonly="" class="form-control" value="<?php echo $person->sv01cedc; ?>" name="sv01cedc" required>
  </div>
  <div class="form-group">
  <label for="">Propietario</label>
   <input type="text" readonly="" class="form-control" value="<?php echo $person->sv03cedp; ?>" name="sv03cedp" required>
  </div>
  <div class="form-group">
  <label for="">N° Finca</label>
   <input type="text" readonly="" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="sv04nfin" required>
  </div>
  <div class="form-group">
    <label for="">Nº Minuta</label>
    <input type="text" class="form-control" readonly="" value="<?php echo $person->sv09npln; ?>" name="sv09npln">
  </div>
  <div class="form-group">
    <label for="">Nº Folio Real</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09nfol; ?>" name="sv09nfol">
  </div>
  <div class="form-group">
    <label for="">Localizacion Municipal</label>
    <input type="text" class="form-control" onkeypress="return Numeros(event)" value="<?php echo $person->sv09npre; ?>" name="sv09npre">
  </div>
    <div class="form-group">
    <label for="">Oficio</label>
    <input type="file" class="form-control-file" name="sv09mnt">
  </div>
  <div class="form-group">
    <label for="">Fecha</label>
    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="sv09fvdp">
  </div>
  <div class="form-group">
    <label for="">Impuestos</label>
 <select name="sv02code" class="form-control" name="sv02code" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
  </div>
    <div class="form-group">
    <label for="">Estado</label>
 <select name="sv02std" class="form-control" name="sv02std" >
 <option value="8">Oficio</option>
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
 </select>
  </div>
  <div class="form-group">
    <label for="">Revisado por:</label>
    <input type="text" class="form-control" readonly="" value="<?php echo $_SESSION['sv07cdtp'];?>" name="sv07cdtp">
    </div>
  <button type="submit" class="btn btn-default">Revisado</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>

</div>
</div>
</div>
<script type="text/javascript" src="public\js\bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>