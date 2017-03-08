<html>
	<head>
		<title>Visado</title>
    <link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
    <script src="public/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php    session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }  ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Visados</h2>
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
<form role="form" method="post" action="php/agregar.php" enctype="multipart/form-data">
<div class="form-group">
    <label for="sv09npln">Numero plano</label>
    <input type="text" class="form-control" name="sv09npln" required>
  </div>
  <div class="form-group">
    <label for="sv09nfol">Numero Folio</label>
    <input type="text" class="form-control" name="sv09nfol" required>
  </div>
  <div class="form-group">
    <label for="sv09npre">Numero predio</label>
    <input type="text" class="form-control" name="sv09npre" required>
  </div>
  <div class="form-group">
    <label for="sv09mnt">Minuta</label>
    <input type="file"  name="sv09mnt" >
  </div>
  <div class="form-group">
    <label for="sv09fvdp">Fecha visado</label>
    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="sv09fvdp" required>
  </div>
  <div class="form-group">
    <label for="sv09fumv">Fecha UM</label>
    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="sv09fumv" required>
  </div>
  <div class="form-group">
    <label for="sv08conse">Consecutivo</label>
    <input type="text" class="form-control" name="sv08conse" >
  </div>
  <div class="form-group">
    <label for="sv01cedc">Ced Cliente-Top</label>
    <input type="text" class="form-control" name="sv01cedc" >
  </div>
  <div class="form-group">
    <label for="sv03cedp">Ced Propietario</label>
    <input type="text" class="form-control" name="sv03cedp" >
  </div>
  <div class="form-group">
    <label for="sv04nfin">N Finca</label>
    <input type="text" class="form-control" name="sv04nfin" >
  </div>
  <div class="form-group">
    <label for="sv02code">Estado Impuestos</label>
    <select name="sv02code" class="form-control" name="sv02code" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
</div>
 <div class="form-group">
    <label for="sv02code">Estado Cartas</label>
    <select name="sv02code" class="form-control" name="sv02code" >
  <option value="1">Presenta</option>
 <option value="2">No Presenta</option>
  </select>
</div>
  <div class="form-group">
    <label for="sv02code">Estado Visado</label>
    <select name="sv02code" class="form-control" name="sv02code" >
  <option value="1">Aprobado</option>
 <option value="2">Rechazado</option>
 <option value="3">En proceso</option>
 </select>
</div>
  <div class="form-group">
    <label for="sv07cdtp">Cod Topografo</label>
    <input type="text" class="form-control" name="sv07cdtp" >
  </div>
  <div class="form-group">
    <label for="sv05codu">Tip Usuario</label>
    <select name="sv05codu" class="form-control" name="sv05codu" >
    <option value="1">Administrador</option>
    <option value="2">Usuario-Top</option>
    
 </select>
</div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>