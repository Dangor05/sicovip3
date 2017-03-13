
<html>
	<head>
		<title>Topografo</title>
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
	<?php include "php/navbart.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Topografos</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Topografo</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregart.php">
<div class="form-group">
    <label for="sv07cdtp">Codigo IT</label>
    <input type="text" class="form-control" name="sv07cdtp" required>
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <input type="text" class="form-control" name="sv07cedt" required>
  </div>
    <div class="form-group">
    <label for="sv07nomt">Nombre</label>
    <input type="text" class="form-control" name="sv07nomt" required>
  </div>
  <div class="form-group">
    <label for="sv07apdt">Apellidos</label>
    <input type="text" class="form-control" name="sv07apdt" required>
  </div>
 <div class="form-group">
    <label for="sv07estd">Estado cuenta</label>
    <select name="sv07estd" class="form-control" name="sv07estd" >
    <option value="1">Activo</option>
    <option value="2">Inactivo</option>
 </select>
</div>
  <div class="form-group">
    <label for="sv07pass">Pass</label>
    <input type="text" class="form-control" name="sv07pass" required>
  </div>
 <div class="form-group">
    <label for="sv05codu">Tipo Usuario</label>
    <select name="sv05codu" class="form-control" name="sv05codu" >
    <option value="1">Administrador </option>
    <option value="2">Topografo</option>
 </select>
</div>
   
  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tablat.php"; ?>
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
<script type="text/javascript">
$(document).ready(function(){

    $(".edit-link").click(function Carga() 
    {
        $("#example tbody tr").each(function (index) 
        {
            var campo1, campo2, campo3 campo4, campo5, campo6;
            $(this).children("td").each(function (index2) 
            {
                switch (index2) 
                {
                    case 0: campo1 = $(this).text();
                            break;            
                }
                $(this).css("background-color", "#ECF8E0");
            });
        });
        alert(campo1);
    });
 });  
</script>
	</body>
</html>