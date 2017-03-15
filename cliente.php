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
       <script>
          $(document).ready(function(){   
        $( "#ced" ).autocomplete({
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
          });
                 
      });
        </script>
</head>
<body>
  <?php    session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }  ?>
  <div class="container">
  <div  class="row">
<div  class="col-md-4">
     <form role="form-inline" action="php/addCliente.php" method="POST" > 
     <div = class="group">
 
  <center><h3>Registro Cliente</h3></center>  
  <div class="form-group" >
  <label for="sv01cedc">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" name='cedt' maxlength="10" required></div>
  <div class="form-group"> 
 <label for="sv01cdtpc">Codigo IT</label>&nbsp
   <input type='text' class="form-control" name='cit' maxlength="6" required></div>

  <div class="form-group">
  <label for="sv01nomc">Nombre</label>&nbsp
    <input type='text' class="form-control" name='nomt' maxlength="12"></div>

  <div class="form-group">
  <label for="sv01apdc">Apellidos</label>&nbsp
  <input type='text'class="form-control" name='apelt' maxlength="20"></div>

   <div class="form-group">
   <label for="sv01emc">Email</label>&nbsp
   <input type='email'class="form-control" name='emat'></div>

   <div class="form-group">
   <label for="sv01telc">Telefono</label>
   <input type='number' class="form-control" name='telt'></div>
   </div>
<a class="btn btn-default" href="Home.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Continuar</button>
    
  </form>


</div>
</body>

</html>