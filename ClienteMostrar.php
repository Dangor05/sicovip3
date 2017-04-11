<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
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
<script type="text/javascript">
    function Letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [8, 37, 39, 46, 6];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
      }
}
</script>
<script type="text/javascript">
function Numeros(e)
{
var key = window.Event ? e.which : e.keyCode
return ((key >= 48 && key <= 57) || (key==8))
}
</script>

</head>
<body>
 <?php      
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } 
      include ("php/getCliente.php");
      if($query->num_rows>0):
      ?>
	<div class="container">

       <button class="btn btn-success" id="btnAgregar" type="button"  data-toggle="modal" data-target="#modal-1"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Nuevo Topografo</button>
     <br><br>
     

      <div class="table-responsive">
	<div style="width: 950px" class="well well-sm text-left">
    
    <div class="content-loader">
        
        <table align="center" cellspacing="0" style="width:900px;" id="example" class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Codigo</th>
        <th>Email</th>
        <th>Telefono</th>
        <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($r=$query->fetch_array()):?>

            <tr>
            <td><?php echo $r['sv01cedc']; ?></td>
            <td><?php echo $r['sv01nomc']; ?></td>
            <td class="col-sm-2"><?php echo $r['sv01apdc']; ?></td>
            <td class="col-sm-1"><?php echo $r['sv01cdtpc']; ?></td>
            <td class="col-sm-1"><?php echo $r['sv01emc']; ?></td>
            <td><?php echo $r['sv01telc'];?></td>
            <!--variable de sesion-->
            <td style="width:75px;" align="center">
             <button class="btn btn-info" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-2"> <span class="glyphicon glyphicon-edit"></span> &nbsp;Modificar</button></td>
            </tr>
            <?php
        endwhile;
        ?>
        </tbody>
        </table>
        </div>
        </div>
</div>
<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif; ?>

</div>

<br />
    
<div class="container">
      
<div class="alert alert-info">
       
</div>

</div>

    <div class="container">
    <div class="modal fade" id="modal-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
            <button type 1="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Topografo</h3>
           </div>
           <div class="modal-body ">
    <form name="Diagnostico" method="POST" action="php/agregarct.php" onsubmit="return validar();">
    
    
     
<div class="form-group row">
         <label for="example-text-input" class="col-xs-3 col-form-label">CIT:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="ced" name="svcdtpc" required>
             </div>
             </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-3 col-form-label">Cedula:</label>
            <div class="col-xs-7">
            <input class="form-control" required="required" type="text" id="cit" name="svcedc" onkeypress="return Numeros(event)" required>
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Nombre:</label>
          <div class="col-xs-7">
            <input class="form-control" type="text" id="nom" name="svnomc" required onkeypress="return Letras(event)">
          </div>

        </div>
            <div class="form-group row">
        <label for="example-text-input" class="col-xs-3 col-form-label">Apellido:</label>
          <div class="col-xs-7">
            <input class="form-control" type="text" id="apl" name="svapdc" required onkeypress="return Letras(event)">
          </div>
          </div>
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-3 col-form-label">Email:</label>
             <div class="col-xs-7">
                <input class="form-control" type="email" id="ema" name="svemc" required>
             </div>
             </div>
             <div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Telefono:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="tel" name="svtelc" onkeypress="return Numeros(event)" required>
             </div>
        </div>
              <div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Contraseña:</label>
             <div class="col-xs-7">
                <input class="form-control" type="password" id="pass" name="svpass" required>
             </div>
        </div>
              <div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Repetir contraseña:</label>
             <div class="col-xs-7">
                <input class="form-control" type="password" id="vpass" name="valpass" required>
             </div>
        </div>
    <div class="form-group row"><br>
      
    </div>
    <div class="form-group row">
     <div class="col-xs-9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="submit" class="btn btn-success">Agregar</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
      </div>
      </div>
    
    </form>

    </div>
    </div>
    </div>
  </div>
  </div><!--fin modal -->


        <div class="container">
        <div class="modal fade" id="modal-2" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Topografo</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Propietario" method="POST" action="php/actualizarct.php" onsubmit="return validar();">
        
        
         
<div class="form-group row">
         <label for="example-text-input" class="col-xs-3 col-form-label">Cedula:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="ced" readonly="" name="sv01cedc" value="">
             </div>
</div>
<div class="form-group row">
          <label for="example-text-input" class="col-xs-3 col-form-label">CIT:</label>
            <div class="col-xs-7">
            <input class="form-control" required="required" readonly="" type="text" id="cit" name="sv01cdtpc"  value="">
            </div>
</div>
<div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Nombre:</label>
          <div class="col-xs-7">
            <input class="form-control" required type="text" id="nom" name="sv01nomc" value="" onkeypress="return Letras(event)">
          </div>
</div>
 <div class="form-group row">
        <label for="example-text-input" class="col-xs-3 col-form-label">Apellido:</label>
          <div class="col-xs-7">
            <input class="form-control" type="text" id="ape" name="sv01apdc" value="" onkeypress="return Letras(event)">
          </div>
 </div>
 <div class="form-group row">
              <label for="example-text-input" class="col-xs-3 col-form-label">Email:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="ema" name="sv01emc" value="">
             </div>
</div>
<div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Telefono:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="tel" name="sv01telc" value="" onkeypress="return Numeros(event)">
            </div>
</div>
                
<div class="form-group row"><br> </div>
        <div class="form-group row">
         <div class="col-xs-9">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Modificar</button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
          </div>      
          </div>
        
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->

    
    <div class="modal fade" id="modal-4" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Eliminar</h3>
      </div>
      <div class="modal-body form">
        <form action="php/eliminarct.php" method="POST" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Cedula</label>
              <div class="col-md-9">
                <input class="form-control" type="text" value="" id="sv01cdtpc" name="sv01cedc">
              </div>
            </div>
            

          </div>
           <div class="modal-footer" >
            <div class="col-xs-5">
           
            </div>
                <a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>
              <button id="enviar" name="enviar" type="submit" class="btn btn-success">Eliminar</button>
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
<script type="text/javascript" src="public\JS\valcli.js"></script>

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
        var _ced = $(_trEdit).find('td:eq(0)').text();
        var _nom = $(_trEdit).find('td:eq(1)').text();
        var _apl = $(_trEdit).find('td:eq(2)').text();
        var _cit = $(_trEdit).find('td:eq(3)').text();
        var _eml = $(_trEdit).find('td:eq(4)').text();
        var _tel = $(_trEdit).find('td:eq(5)').text();
        
        
        $('input[name="sv01cdtpc"]').val(_cit);
        $('input[name="sv01cedc"]').val(_ced);
        $('input[name="sv01nomc"]').val(_nom);
        $('input[name="sv01apdc"]').val(_apl);
        $('input[name="sv01emc"]').val(_eml); 
        $('input[name="sv01telc"]').val(_tel);        
    }); 
}
</script>
</body>

</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>