<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
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
<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
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

       <script>
 $(document).ready(function(){   
        /*$( "#ced" ).autocomplete({
              source: function(resquest, response){
                $.ajax({
                  url:"srchClient.php",
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
          });*/
        $( "#ced" ).keyup(function(){
            if($( "#ced" ).val()){
              $.ajax({
                  method:"post",
                  url:"php/autClient.php",
                  dataType:"json",
                  data:{q:$(this).val()},
                  done:function(data){
                    var jsonobj=JSON.parse(data);
                    console.info(jsonobj);
                  }
                });
            }
        });
                 
      });
        </script>
</head>
<body>
  <?php
     if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }  ?>
  <div class="container">
  <div  class="row">
<div  class="col-md-4">
  <div class="col-md-12 col-md-offset-4">
    <form class="form-inline" method="GET" class="navbar-form navbar-left" role="search" action="Cliente.php">
      <div class="Form-group" class="col-sm-10">
       <h4>Buscar</h4><input type="text"  name="ced" class="form-control" placeholder="5-000-000">   <div class="Form-group" >
    
     <button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;Buscar</button> 
    
     </div>
   </div>   
      </form>
      <?php include("php/buscacli.php"); ?>
     <form role="form-inline" action="php/addCliente.php" method="POST" onsubmit="return valciente()" > 
     <div = class="group">
 
  <center><h3>Registro Cliente</h3></center>  
  <div class="form-group" >
  <label for="sv01cedc">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" value="<?php echo $ced; ?>"  name='cedt' maxlength="10" onkeypress="return Numeros(event)" required></div>
  <div class="form-group"> 
 <label for="sv01cdtpc">Codigo IT</label>&nbsp
   <input type='text' class="form-control" id="cit" value="<?php echo $cit; ?>" name='cit' maxlength="6" required></div>

  <div class="form-group">
  <label for="sv01nomc">Nombre</label>&nbsp
    <input type='text' class="form-control" id="nom" value="<?php echo $nom; ?>" name='nomt' maxlength="12" onkeypress="return Letras(event)" required></div>

  <div class="form-group">
  <label for="sv01apdc">Apellidos</label>&nbsp
  <input type='text' class="form-control" id="ape" value="<?php echo $apl; ?>" name='apelt' maxlength="20" onkeypress="return Letras(event)" required></div>

   <div class="form-group">
   <label for="sv01emc">Email</label>&nbsp
   <input type='email' Sclass="form-control" id="ema" value="<?php echo $eml; ?>" name='emat' required></div>

   <div class="form-group">
   <label for="sv01telc">Telefono</label>
   <input type='text' class="form-control" id="tel" value="<?php echo $tel; ?>" name='telt' onkeypress="return Numeros(event)" required></div>
   </div>
<a class="btn btn-danger" href="Home.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Continuar</button>
    
  </form>

  </div>
</div>
</div>
</div>

<script type="text/javascript" src="public/JS/validaciones.js"></script>
</body>

</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>