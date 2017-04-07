<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<html>
	<head>
		<title>Visado</title>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
	</head>
	<body>
	<?php 
	     
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }

	 ?>

     <div class="container">
         <div class=" row">
         <h2>Visados</h2>
         <div class="col-md-12">
             <form method="post" class="navbar-form navbar-left" role="search" action="./buscarvis.php">
     <h3>Busque por:</h3>
     <div class="form-group row">
     <select name="vis" class="form-control" name="vis" >
    <option value="1">Cedula</option>
    <option value="2">Consecutivo</option>
    <option value="3">N° Finca</option>
    <option value="4">N° Plano</option>
    </select>
     </div>&nbsp&nbsp&nbsp&nbsp
     <div class="form-group">
           <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;Buscar &nbsp;<i class="glyphicon glyphicon-search"></i></button>
    </form>

         </div>
     </div>
     </div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
		
<!-- Button trigger modal -->
 <!-- <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>-->
<br><br>


<?php include "php/convis.php"; ?>
</div>
</div>
</div>

<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
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
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>