
<html>
	<head>
		<title>Cliente-top</title>
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
      include "php/navbarct.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2ct.php');
      } ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Cliente-Top</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Cliente</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregarct.php">
<div class="form-group">
    <label for="sv01cedc">Cedula</label>
    <input type="text" class="form-control" name="sv01cedc" required>
  </div>
   <div class="form-group">
    <label for="sv01cdtpc">Codigo IT</label>
    <input type="text" class="form-control"  name="sv01cdtpc" >
  </div>
  <div class="form-group">
    <label for="sv01nomc">Nombre</label>
    <input type="text" class="form-control" name="sv01nomc" required>
  </div>
  <div class="form-group">
    <label for="sv01apdc">Apellidos</label>
    <input type="text" class="form-control" name="sv01apdc" required>
  </div>
  <div class="form-group">
    <label for="sv01emc">Email</label>
    <input type="email" class="form-control" name="sv01emc" required>
  </div>
  <div class="form-group">
    <label for="sv01telc">Telefono</label>
    <input type="text" class="form-control" name="sv01telc" required>
  </div>
   
  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tablact.php"; ?>
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