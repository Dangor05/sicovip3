<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<html>
  <head>
    <title>Propietario</title>
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
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarp.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2p.php');
      } ?>
<div class="container">
<div class="row">
<div class="col-md-12">
    <h2>Propietarios</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar propietario</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregarp.php">
<div class="form-group">
    <label for="sv03cedp">Cedula</label>
    <input type="text" class="form-control" name="sv03cedp" required>
  </div>
  <div class="form-group">
    <label for="sv03nomp">Nombre</label>
    <input type="text" class="form-control" name="sv03nomp" required>
  </div>
  <div class="form-group">
    <label for="sv03apdp">Apellidos</label>
    <input type="text" class="form-control" name="sv03apdp" required>
  </div>
  <div class="form-group">
    <label for="sv03emp">Email</label>
    <input type="email" class="form-control" name="sv03emp" required>
  </div>
  <div class="form-group">
    <label for="sv03telp">Telefono</label>
    <input type="text" class="form-control" name="sv03telp" required>
  </div>
   <div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="sv06codp" class="form-control" name="sv06codp" >
    <option value="1">Fisico</option>
    <option value="2">juridico</option>
 </select>
</div>
 
  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tablap.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="assets/crud.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();

    $('#example')
    .removeClass( 'display' )
    .addClass('table table-bordered');
});
</script>
  </body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>