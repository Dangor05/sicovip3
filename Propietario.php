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
        
<form Class="form" action="php/addPropie.php" method="POST" > 
     <center><h3>Registro Propietario</h3></center>
  <div class="form-group">

   <label for="cedp">Cedula</label>&nbsp
   <input type='text' class="form-control" name='cedp' maxlength="10" required></div>
<div  class="form-group">
	  <label for="nomp">Nombre</label>&nbsp
    <input type='text' class="form-control" name='nomp' maxlength="15" required></div>
<div class="form-group">
    <label for="apdp">Apellidos</label>&nbsp
    <input type='text' class="form-control" name='apelp' maxlength="25" required></div>
<div class="form-group">
    <label for="emp">Email</label>&nbsp
   <input type='email' class="form-control" name='emap' maxlength="20" required></div>
<div class="form-group">
    <label for="telp">Telefono</label>&nbsp
   <input type='text'class="form-control" name='telp' maxlength="10" required=""></div>
<div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="tipro" class="form-control" name="tipro" >
    <option value="1">Fisico</option>
    <option value="2">Juridico</option></select></div>

<br>
  <a href="Cliente.php" class="btn btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-default">Continuar</button>
    
  </form>
  </div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>