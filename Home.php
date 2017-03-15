<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])):?>
<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
<body>
<?php       if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }else if ($_SESSION['sv05codu'] == 3) {
        include('php/navh3.php');
      }

      include("php/getnewTramite.php");
      if($query->num_rows>0): ?>
	<div class="container">
			<h2>Tramites en espera de inspección</h2>
<br>

<form role="form" method="post" action="Cliente.php"> 

<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Nuevo Tramite</button>

</form>
<br><br>

    <div class="well well-sm text-lefh">
        
        <div class="content-loader">
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
         <th>Consecutivo</th>
         <th>Fecha</th>
         <th>Topografo</th>
         <th>Propietario</th>
         <th>N° Finca</th>
         <th>Plano Agrimensura</th>
         <th>Cartas de Agua</th>
         <th>Autocat</th>
         <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php
      while ($elementos=$query->fetch_array()):?>

			<tr>
			<td><?php echo $elementos["sv08conse"]; ?></td>
			<td><?php echo $elementos["sv08fchs"]=date("d-m-Y"); ?></td>
			<td><?php echo $elementos["sv01cedc"]; ?></td>
			<td><?php echo $elementos["sv03cedp"]; ?></td>
			<td><?php echo $elementos["sv04nfin"]; ?></td>
			<td><a href="php/plan.php?id=<?php echo $elementos['sv03cedp']?>&plan=<?php echo $elementos['sv04apln']?>"><?php echo $elementos["sv04apln"];?></a></td>
			<td><a href="php/aut.php?id=<?php echo $elementos['sv03cedp']?>&aut=<?php echo $elementos['sv04aact']?>"><?php echo $elementos["sv04aact"]?></a></td>
			<td><a href="php/cta.php?id=<?php echo $elementos['sv03cedp']?>&cta=<?php echo $elementos['sv04acta']?>"><?php echo $elementos["sv04acta"]?></a></td>
			<td><?php if($elementos["sv02code"] == 7){echo 'En Proceso';}?></td>
			<!--variable de sesion-->
			
			<td align="center">
             <button class="btn btn-info" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-2"> <span class="glyphicon glyphicon-edit"></span> &nbsp; visar</button></td>
            <td align="center"> 
            <button class="btn btn-sm btn-warning" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Editar</button></td>
			</tr>
			<?php
		endwhile;
		?>
        </tbody>
        </table>
 </div>
 </div>
 <?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div>
        <div class="container">
        <div class="modal fade" id="modal-2" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Agregar visado</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Propietario" method="POST" action="php/agregar.php">
        <div class="container">
        
         
          <div class="form-group row">
   <input type="hidden" class="form-control" id="conse" value="" name="conse" required>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
  <input type="hidden" class="form-control" id="cedc" value="" name="cedc" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
   <input type="hidden" class="form-control" id="cedp" value="" name="cedp" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
   <input type="hidden" class="form-control" id="nfin" value="" name="nfin" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="form-group row">
    <div class="col-xs-2">
    <label for="">Nº Plano</label>
    <input type="text" class="form-control" id="nplan" name="nplan" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="">Nº Folio</label>
    <input type="text" class="form-control" id="nfol" name="nfol" required>
  </div>
  </div>
  <div class="form-group row">
<div class="col-xs-2">  
   <label for="">Nº Predio</label>
   <input type="text" class="form-control" id="npred" name="npred" required>
  </div>
  </div>
   <div class="form-group row">
    <div class="col-xs-2">
    <label for="">Minuta</label>
    <input type="file" id="mnt" name="mnt">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="">Fecha</label>
    <input type="date" class="form-control" id="fch" value="<?php echo date("Y-m-d");?>" name="fch" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="">Impuestos</label>
 <select name="impu" class="form-control" id="impu" name="impu" required>
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
  </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
    <label for="">Estado</label>
 <select name="std" class="form-control" id="std" name="std" required>
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
 </select>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="">Revisado por:</label>
    <input type="text" class="form-control" id="cit" value="<?php echo $_SESSION['sv07cdtp'];?>" name="cit">
    <input type="hidden" class="form-control" id="codu" value="" name="codu">
  </div>
  </div>         
       <div class="form-group row"><br>
          
        </div>
        <div class="form-group row">
         <div class="col-xs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Terminar</button>
          </div>
          <div class="col-xs-5"><a href="" class="btn btn-danger" data-dismiss="modal">Close</a>
          </div>
        </div>
        </div>
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->

    <div class="container">
        <div class="modal fade" id="modal-4" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Tramite</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Propietario" method="POST" action="php/upTramite.php" enctype="multipart/form-data">
        <div class="container">
        
         
          <div class="form-group row">
          <input type="hidden" class="form-control" id="cedp" value="" name="cedp">
  </div>
  <div class="form-group row">
         <label for="example-text-input" class="col-xs-1 col-form-label">Consecutivo:</label>
             <div class="col-xs-2">
                <input class="form-control" type="text" id="conse" name="conse" value="">
             </div>
             </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-1 col-form-label">N° Finca:</label>
            <div class="col-xs-2">
            <input class="form-control" required="required" type="text" id="nfin" name="nfin" value="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Plano Agrimensura:</label>
          <div class="col-xs-2">
            <input class="form-control" type="file" id="pln" name="pln" value="">
          </div>
          </div>
           <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">Carta de Agua:</label>
          <div class="col-xs-2">
            <input class="form-control" type="file" id="aact" name="aact" value="">
          </div>
          </div>
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-1 col-form-label">AutoCat:</label>
             <div class="col-xs-2">
                <input class="form-control" type="file" id="acta" name="acta" value="">
             </div>
           </div>          
       <div class="form-group row"><br>
          
        </div>
        <div class="form-group row">
         <div class="col-xs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Modificar</button>
          </div>
          <div class="col-xs-5"><a href="" class="btn btn-danger" data-dismiss="modal">Close</a>
          </div>
        </div>
        </div>
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->

    
<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/datatables.min.js"></script>
<script type="text/javascript" src="../assets/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>

<script type="text/javascript">
    function seleccionarTabla() {
    var _trEdit = null;
    $(document).on('click', '#btnModi',function(){
        _trEdit = $(this).closest('tr');
        var _con = $(_trEdit).find('td:eq(0)').text();
        var _fch = $(_trEdit).find('td:eq(1)').text();
        var _cedc = $(_trEdit).find('td:eq(2)').text();
        var _cedp = $(_trEdit).find('td:eq(3)').text();
        var _nfin = $(_trEdit).find('td:eq(4)').text();
        var _pln = $(_trEdit).find('td:eq(5)').text();
        var _cta = $(_trEdit).find('td:eq(6)').text();
        var _aut = $(_trEdit).find('td:eq(7)').text();
        var _std = $(_trEdit).find('td:eq(8)').text();
        
         $('input[name="conse"]').val(_con);
        $('input[name=""]').val(_fch);
        $('input[name="cedc"]').val(_cedc);
        $('input[name="cedp"]').val(_cedp);
        $('input[name="nfin"]').val(_nfin);
        $('input[name="pln"]').val(_pln);
        $('input[name="aact"]').val(_cta);
        $('input[name="acta"]').val(_aut);
        $('input[name=""]').val(_std);
    }); 
}
</script>
</body>

</html>
<?php else:?>
 <script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>
<?php endif;?>