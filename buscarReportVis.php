
<html>
	<head>
		<title>Reportes</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script >
			$(document).ready(function(){
				$("#exportar").click(function(e){
					e.preventDefault();
					window.print();
				});
			});
		</script>
	</head>
	<body>
	<?php 	   session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }?>
<div class="container-fluid">
<!--<button id="exportar">Imprimir</button>-->
<div class="row">
<div class="col-md-12">
<a href="verReportVis.php"> 	
<button type="button" class="btn btn-default" ><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</button> </a>&nbsp;<button id="exportar" class="btn btn-info">Imprimir</button>


		<h2>Reporte Fecha Visado.</h2>


<?php include "php/busqReportVis.php"; ?>

</div>
</div>
</div>
<script type="text/javascript" src="public\js\bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();

    $('#example')
    .removeClass( 'display' )
    .addClass('table table-bordered');
});
</script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        setInterval(function () {
        $('#example').ajax.reload(null, false);
        }, 2000);
    });
    </script>
	</body>
</html>