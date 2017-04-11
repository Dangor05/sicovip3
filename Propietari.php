<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
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
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.min.js"></script>
   
    <script>
          $(document).ready(function(){   
        $( "#ced" ).autocomplete({
              source: function(resquest, response){
                $.ajax({
                  url:"srchOwn.php",
                  dataType:"json",
                  data:{q:resquest.term},
                  success:function(data){
                    response(data);
                  }
                });
              } ,
              minLength: 1,
              select:function(event ui){
                alert("selecciono: "+ ui.item.label);
              }
          });
                 
      });
        </script>
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
  <?php        if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }  ?>
<div class="container">
<div  class="row">
<div  class="col-md-4">
<form class="form-inline" method="GET" class="navbar-form navbar-left" role="search" action="Propietari.php">
    

   <div class="Form-group" class="col-sm-10">
         <h4>Buscar</h4><input type="text"  name="cedp" class="form-control" placeholder="Buscar">   <div class="Form-group" >
     <div id="next_button" align="left">
     <button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;Buscar</button> 
     </div>
     </div>
   </div>
   
      </form>
<?php include("php/buscapro.php"); ?>
       
<form Class="form" action="php/addPropie.php" method="POST" onsubmit="return validar();" > 
     <center><h3>Registro Propietario</h3></center>
  <div class="form-group">
   <label for="ced">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" name='cedp' value="<?php echo $ced; ?>" maxlength="15" onkeypress="return Numeros(event)" required></div>
<div  class="form-group">
	  <label for="nom">Nombre</label>&nbsp
    <input type='text' class="form-control" id="nom" name='nomp' value="<?php echo $nom; ?>" maxlength="25" required onkeypress="return Letras(event)" required></div>
<div class="form-group">
    <label for="apl">Apellidos</label>&nbsp
    <input type='text' class="form-control" id="apl" name='apelp' value="<?php echo $apl; ?>" maxlength="25" required onkeypress="return Letras(event)"></div>
<div class="form-group">
    <label for="eml">Email</label>&nbsp
   <input type='email' class="form-control" id="eml" name='emap' value="<?php echo $eml; ?>" maxlength="50" required ></div>
<div class="form-group">
    <label for="tel">Telefono</label>&nbsp
   <input type='tel' class="form-control" id="tel" name='telp' value="<?php echo $tel; ?>" maxlength="10" onkeypress="return Numeros(event)" required=""></div>
<div class="form-group">
    <label for="tip">Tipo Usuario</label>
    <select name="tipro" class="form-control" id="tip" name="tipro" >
    <option value="1">Fisico</option>
    <option value="2">Juridico</option></select></div>

<br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   &nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-default">Continuar</button>
    
  </form>
  </div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="public/JS/validaciones.js"></script>
</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>