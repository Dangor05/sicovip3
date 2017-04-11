<?php
session_start();
if(isset ($_SESSION['tp'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>SICOVIP</title>
      <link rel="stylesheet" type="text/css" href="public\bootstrap\css\bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="public\bootstrap\css\bootstrap-theme.min.css">
      <script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
      <script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
      <script type="text/javascript" src="public/JS/validaciones.js"></script>
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

  </head>
  <body>
  <?php include("php/navcli.php"); ?>
<div class="container">
<div  class="row">
<div  class="col-md-4">
        
<form Class="form" action="php/agrePropie.php" method="POST" onsubmit="return validar();" > 
     <center><h3>Registro Propietario</h3></center>
  <div class="form-group">

   <label for="cedp">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" name='cedp' maxlength="10" onkeypress="return Numeros(event)" required></div>
<div  class="form-group">
	  <label for="nomp">Nombre</label>&nbsp
    <input type='text' class="form-control" id="nom" name='nomp' maxlength="15" required onkeypress="return Letras(event)"></div>
<div class="form-group">
    <label for="apdp">Apellidos</label>&nbsp
    <input type='text' class="form-control" id="apl" name='apelp' maxlength="25" onkeypress="return Letras(event)"></div>
<div class="form-group">
    <label for="emp">Email</label>&nbsp
   <input type='email' class="form-control" id="eml" name='emap' maxlength="50" required ></div>
<div class="form-group">
    <label for="telp">Telefono</label>&nbsp
   <input type='text' class="form-control" id="tel" name='telp' maxlength="10" onkeypress="return Numeros(event)" required=""></div>
<div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="tipro" class="form-control" id="tip" name="tipro" >
    <option value="1">Fisico</option>
    <option value="2">Juridico</option></select></div>

<br>
  <a href="inicio.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Cancelar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-default">Continuar</button>
    
  </form>
  </div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="pubic\JS\valpro.js"></script>
</body>
</html>
<?php }else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>