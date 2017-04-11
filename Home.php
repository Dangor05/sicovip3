<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>

<script type="text/javascript" src="public/JS/validaciones.js"></script>
</head>
<body>
<?php       if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }      include("php/getnewTramite.php");
      if($query->num_rows>0): ?>
	<div class="container-fluid">
			<h2>Tramites en espera de inspección</h2>
<form role="form" method="post" action="Cliente.php"> 

<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Nuevo Tramite</button>

</form>
<br>

    <div style="width: 90%" class="well well-sm text-lefh">
        
        <div class="table-responsive">
        <table align="CENTER" cellspacing="0" style="width: 100%" id="example" class="table table-striped table-hover">
        <thead>
        <tr>
          <th>Propietario</th>
         <th>Consecutivo</th>
          <th>N° Finca</th>
          <th>Solicitud</th>       
         <th>Plano Agrimensura</th>
         <th>Cartas de Agua</th>
         <th>AUTOCAD</th>
         <th>Estado</th>
         <th></th>
         <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
      while ($elementos=$query->fetch_array()):?>

			<tr>
      <td><?php echo $elementos["sv03cedp"]; ?></td>
      <td style="width: 10%"><?php echo $elementos["sv08conse"]; ?></td>
      <td style="width: 10%"><?php echo $elementos["sv04nfin"]; ?></td>
      <td style="width: 5%"><?php echo $elementos["sv08fchs"]; ?></td>
      
      
      <td style="width: 15%"><a href="php/plan.php?id=<?php echo $elementos['sv03cedp']?>&plan=<?php echo $elementos['sv04apln']?>"><?php echo $elementos["sv04apln"];?></a></td>
      <td style="width: 15%"><a href="php/aut.php?id=<?php echo $elementos['sv03cedp']?>&aut=<?php echo $elementos['sv04aact']?>"><?php echo $elementos["sv04aact"]?></a></td>
      <td style="width: 15%"><a href="php/cta.php?id=<?php echo $elementos['sv03cedp']?>&cta=<?php echo $elementos['sv04acta']?>"><?php echo $elementos["sv04acta"]?></a></td>
      <td style="width: 10%"><?php if($elementos["sv02code"] == 7){echo 'En Proceso';}?></td>
      <!--variable de sesion-->
      
      <td align="center" style="width: 5%">
      <a href="Visado.php?conse=<?php echo $elementos["sv08conse"];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> &nbsp;Procesar</a>
      <td align="center"><button class="btn btn-sm btn-warning" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Editar</button></td>
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
        <div class="modal-dialog">

                <div class="modal-content">
                
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Agregar visado</h3>
                     </div>

         <div class="modal-body ">
            
         <form name="Propietario" method="POST" action="php/addVisado.php" enctype="multipart/form-data">
        <div class="container">      
          <div class="form-group row">
          <div class="col-xs-2">
          <label for="">Consecutivo</label>
   <input type="" class="form-control" id="conse" value="" name="conse" readonly="readonly" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
  <input type="hidden" class="form-control" id="cedc" value="" name="cedc" required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
  <label for="">Cedula</label>
   <input type="" class="form-control" id="cedp" value="" name="cedp" readonly="readonly"  required>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
   <input type="hidden" class="form-control" id="nfin" value="" name="nfin" required>
  </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-2">
    <label for="">Nº Plano</label>
    <input type="text" class="form-control" id="nplan" name="npln" required>
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
   <label for="">Localizacion Municipal</label>
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
 <option value="8">Oficio</option>qq
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
 </select>
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-2">
    <label for="">Revisado por:</label>
    <input type="text" class="form-control" id="cit" value="<?php echo $_SESSION['sv07cdtp'];?>" name="cit">
    <input type="hidden" class="form-control" id="codu" value="<?php echo $_SESSION['sv05codu']; ?>" name="codu">
  </div>
  </div>         
       <div class="form-group row"><br>
          
        </div>
        <div class="form-group row">
         <div class="col-xs-5">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Visar</button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
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
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Tramite</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Propietario" method="POST" action="php/actuaTramite.php" enctype="multipart/form-data">
       
        <p class="col-form-label">Seleccion el archivo que quiere actualizar:</p>
          <div class="form-group row">
           <div class="col-xs-3">
              <select name="opcion" class="form-control" id="opci" name="opcion" required>
              <option value="1">Todos</option>
              <option value="2">Plano</option>
              <option value="4">Cartas de Agua</option>
              <option value="3">AutoCad</option>
              </select>
             </div>
             </div>

         
          <div class="form-group row">
          <input type="hidden" class="form-control" id="cedp" value="" name="cedp">
  </div>
  <div class="form-group row">
         <label for="example-text-input" class="col-xs-3 col-form-label">Consecutivo:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="conse" readonly="" name="conse" value="">
             </div>
             </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-3 col-form-label">N° Finca:</label>
            <div class="col-xs-7">
            <input class="form-control" required="required" readonly="" type="text" id="nfin" name="nfin" value="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Plano Agrimensura:</label>
          <div class="col-xs-7">
            <input type="file" id="pln" name="pln" value="">
          </div>
          </div>
           <div class="form-group row">
        <label for="example-text-input" class="col-xs-3 col-form-label">Carta de Agua:</label>
          <div class="col-xs-3">
            <input  type="file" id="aact" name="aact" value="">
          </div>
          </div>
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-3 col-form-label">AUTOCAD:</label>
             <div class="col-xs-7">
                <input  type="file" id="acta" name="acta" value="">
             </div>
           </div>  
           <input type="hidden" name="cedp" value="">        
       <div class="form-group row"><br></div>

        <div class="form-group row">
         <div class="col-xs-9">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button type="submit" class="btn btn-success ">Modificar</button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
          </div>
          </div>

        </div>
        
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->

    

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

<script type="text/javascript">
    function seleccionarTabla() {
    var _trEdit = null;
    $(document).on('click', '#btnModi',function(){
        _trEdit = $(this).closest('tr');
        var _cedp = $(_trEdit).find('td:eq(0)').text();
        var _con = $(_trEdit).find('td:eq(1)').text();
        var _nfin = $(_trEdit).find('td:eq(2)').text();
        var _fch = $(_trEdit).find('td:eq(3)').text();
        var _pln = $(_trEdit).find('td:eq(4)').text();
        var _cta = $(_trEdit).find('td:eq(5)').text();
        var _aut = $(_trEdit).find('td:eq(6)').text();
        var _std = $(_trEdit).find('td:eq(7)').text();
        var _cedc = $(_trEdit).find('td:eq(8)').text();
        
        

        
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
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>