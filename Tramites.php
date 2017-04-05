<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sicovip</title>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>

<script type="text/javascript" src="public/JS/validaciones.js"></script>
    </head>
    <body>
      <?php    
        
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }

        include ("php/getTramite.php");
        if($query->num_rows>0):?>
        <div class="container">
        <div class="well well-sm text-right">
                <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Conse</th>
        <th>F Soli</th>
        <th>Ced Cli</th>
        <th>Ced Prop</th>
        <th>N Fin</th>
        <th>Estado</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        
        //foreach($this->trami as $r)
        while ($r=$query->fetch_array()):
        
            ?>

            <tr>
             <td><?php echo $r["sv08conse"]; ?></td>
             <td><?php echo $r["sv08fchs"]; ?></td>
             <td><?php echo $r["sv01cedc"]; ?></td>
             <td><?php echo $r["sv03cedp"]; ?></td>
             <td><?php echo $r["sv04nfin"]; ?></td>
             <td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
            <!--variable de sesion-->
            
           <td align="center"> 
            <button class="btn btn-danger" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Eliminar</button></td>
            </tr>
            <?php
        endwhile;?>
        </tbody>
        </table>
        
        </div>
            </div>
            </div>
            <?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

<div class="modal fade" id="modal-4" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Eliminar</h3>
      </div>
      <div class="modal-body form">
        <form action="<?php echo URL;?>php/eliminartram.php" method="POST" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Consecutivo: </label>
              <div class="col-md-9">
                <input class="form-control" type="text" value="" id="id" name="conse">
              </div>
            </div>
            

          </div>
           <div class="modal-footer" >
                      <div class="col-xs-5">
                     
                      </div>
                            <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                            <button id="enviar" name="enviar" type="submit" class="btn btn-success">Eliminar     </button>
            </div>
            </form>
            </div>
                       <div class="modal-footer" >
                       <div class="col-xs-5">
                       </div>
                       </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
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
<script type="text/javascript">
    function seleccionarTabla() {
    var _trEdit = null;
    $(document).on('click', '#btnModi',function(){
        _trEdit = $(this).closest('tr');
        var _conse = $(_trEdit).find('td:eq(0)').text();
        var _fch = $(_trEdit).find('td:eq(1)').text();
        var _cedc = $(_trEdit).find('td:eq(2)').text();
        var _cedp = $(_trEdit).find('td:eq(3)').text();
        
        
        $('input[name="conse"]').val(_conse);
        $('input[name="fch"]').val(_fch);
        $('input[name="cedc"]').val(_cedc);
        $('input[name="cedp"]').val(_cedp);       
    }); 
}
</script>
          
               
     </body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>