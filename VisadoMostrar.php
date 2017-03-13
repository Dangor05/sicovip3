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
<link href="public\Bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\Bootstrap\css\bootstrap\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>   
</head>
<body>
<?php session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarp.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2p.php');
      } 
      include ("php/getvisados.php");
      if($query->num_rows>0):?>
      <div class="container">
    <div class="well well-sm text-lefh">
    <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>N°Plano</th>
        <th>N°Folio</th>
        <th>N°Predio</th>
        <th>Minuta</th>
        <th>Fecha</th>
        <th>Consecutico</th>
        <th>Propietario</th>
        <th>N°Finca</th>
        <th>Impuestos</th>
        <th>Cartas Agua</th>
        <th>Estado</th>
        <th>Topografo</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($r=$query->fetch_array()):
            ?>

            <tr>
    <td><?php echo $r["sv09npln"]; ?></td>
    <td><?php echo $r["sv09nfol"]; ?></td>
    <td><?php echo $r["sv09npre"]; ?></td>
    <td><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"];?></a></td>
    <td><?php echo $r["sv09fvdp"]; ?></td>
    <td><?php echo $r["sv08conse"]; ?></td>
    <td><?php echo $r["sv03cedp"]; ?></td>
    <td><?php echo $r["sv04nfin"]; ?></td>
    <td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
    <td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
    <td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
    <td><?php echo $r["sv07cdtp"]; ?></td>
         <!--variable de sesion-->
            
            <td align="center">
             <button class="btn btn-info" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-2"> <span class="glyphicon glyphicon-edit"></span> &nbsp;</button></td>
            <td align="center"> 
            <button class="btn btn-danger" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Eliminar</button></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        </table>
        </div>
        </div>
<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div>

<br />

<div class="container">
        <div class="modal fade" id="modal-2" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Visado</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Diagnostico" method="POST" action="">
        <div class="container">
        
         
          <div class="form-group row">
         <label for="example-text-input" class="col-xs-1 col-form-label">N° Plano:</label>
             <div class="col-xs-2">
                <input class="form-control" type="text" id="id" name="id" value="">
             </div>
             </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-1 col-form-label">N° Folio:</label>
            <div class="col-xs-2">
            <input class="form-control" required="required" type="date" id="fecha" name="fecha">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">N° Predio:</label>
          <div class="col-xs-2">
            <input class="form-control" type="text" id="Descripcion" name="Descripcion" value="">
          </div>
          </div>
                   
          <div class="form-group row">
          <label for="example-text-input" class="col-xs-1 col-form-label">Minuta:</label>
             <div class="col-xs-2">
                <input class="form-control" type="text" id="idFun" name="idFun" value="<?php echo $_SESSION['funcionario'];?>">
                </div>
             </div>
             <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Fecha Visado:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
          <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Consecutivio:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
          <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Cliente:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
          <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Propietario:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
          <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">N° Finca:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
            <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Impuestos:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
                     <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Cartas de agua:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
               <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Estado:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
                 <div class="form-group row">
             <label for="example-text-input" class="col-xs-1 col-form-label">Topografo:</label>
          <div class="col-xs-3">
            <input class="form-control" type="text" id="idPac" name="idPac" value="">
          </div>
        </div>
        <div class="form-group row"><br>
          
        </div>
        <div class="form-group row">
         <div class="col-xs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Modificar</button>
          </div>
          <div class="col-xs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="btn btn-danger" onclick="javascript:history.back()"">Cancelar</button>
          </div>
        </div>
        </div>
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->
    

<script src="/public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
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