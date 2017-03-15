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
    <?php include "php/navbart.php"; 
    include ("php/getTopo.php");
      if($query->num_rows>0): ?>
	<div class="container">
     <button class="btn btn-success" id="btnAgregar" type="button"  data-toggle="modal" data-target="#modal-1"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Nuevo Usuario</button>
     <br><br>
      <br/>
	<div class="well well-sm text-right">
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Codigo IT</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Estado</th>
        <th>Usuario</th>
        <th>Correo</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($r=$query->fetch_array()):?>

            <tr>
            <td><?php echo $r["sv07cdtp"]; ?></td>
            <td><?php echo $r["sv07cedt"]; ?></td>
            <td><?php echo $r["sv07nomt"]; ?></td>
            <td><?php echo $r["sv07apdt"]; ?></td>
            <td><?php echo $r["sv07estd"]== 1 ? 'Activo' : 'Inactivo'; ?></td>
            <td><?php if($r["sv05codu"] == 1){ echo 'Administrador';}elseif ($r["sv05codu"] == 2){echo 'Usuario-Top';}else{echo 'Plataforma';} ?></td>
            <td><?php echo $r['sv07emt'];?></td>
            <!--variable de sesion-->
            
            <td align="center">
             <button class="btn btn-info" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-2"> <span class="glyphicon glyphicon-edit"></span> &nbsp; Modificar</button></td>
            <td align="center"> 
            <button class="btn btn-danger" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Desactivar</button></td>
            <td align="center"> 
            <button class="btn btn-success" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-5"> <span class="glyphicon glyphicon-trash-align-center"></span>Activar</button></td>
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

<br />
    
<!--Modals-->
    <div class="container">
    <div class="modal fade" id="modal-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
            <button type 1="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Usuario</h3>
           </div>
           <div class="modal-body ">
    <form name="Diagnostico" method="POST" action="php/agregart.php">
    <div class="container">
    
     
          <div class="form-group row">
         <label for="example-text-input" class="col-xs-1 col-form-label">CIT:</label>
             <div class="col-xs-2">
                <input class="form-control" type="text" id="sv07cdtp" name="sv07cdtp" required>
             </div>
           </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-1 col-form-label">Cedula:</label>
            <div class="col-xs-2">
            <input class="form-control" required="required" type="text" id="sv07cedt" name="sv07cedt">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Nombre:</label>
          <div class="col-xs-2">
            <input class="form-control" type="text" id="sv07nomt" name="sv07nomt" required>
          </div>
          </div>
        <div class="form-group row">
            <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">Apellidos:</label>
          <div class="col-xs-2">
            <input class="form-control" type="text" id="sv07apdt" name="sv07apdt" required>
          </div>
          </div>
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-1 col-form-label">Estado:</label>
             <div class="col-xs-2">
              <select name="sv07estd" class="form-control" id="impu" name="sv07estd" required>
                 <option value="1">Activo</option>
                 <option value="2">Inactivo</option>
                 </select>
             </div>
             </div>
             <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Correo Electronico:</label>
             <div class="col-xs-2">
              <input class="form-control" type="email" id="sv07emt" name="sv07emt" required>
              </div>
        </div> 
             <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Password:</label>
             <div class="col-xs-2">
              <input class="form-control" type="password" id="sv07pass" name="sv07pass" required>
              </div>
        </div> 
         <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Repetir password:</label>
             <div class="col-xs-2">
              <input class="form-control" type="password" id="pass2" name="pass2" required>
              </div>
        </div> 
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-1 col-form-label">Tipo:</label>
             <div class="col-xs-2">
              <select name="sv05codu" class="form-control" id="impu" name="sv05codu" required>
                 <option value="1">Administrador</option>
                 <option value="2">Usuario</option>
                 </select>
             </div>
             </div>
    <div class="form-group row"><br>
      
    </div>
    <div class="form-group row">
     <div class="col-xs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="submit" class="btn btn-success">Agregar</button>
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
<!-- Fin Modals-->

<!--Modals-->
        <div class="container">
        <div class="modal fade" id="modal-2" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Usuario</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Propietario" method="POST" action="php/actualizart.php">
        <div class="container">
        
         
          <div class="form-group row">
         <label for="example-text-input" class="col-xs-1 col-form-label">CIT:</label>
             <div class="col-xs-2">
                <input class="form-control" type="text" id="sv07cdtp" name="sv07cdtp" value="" required>
             </div>
           </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-1 col-form-label">Cedula:</label>
            <div class="col-xs-2">
            <input class="form-control" required="required" type="text" id="sv07cedt" name="sv07cedt" value="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Nombre:</label>
          <div class="col-xs-2">
            <input class="form-control" type="text" id="sv07nomt" name="sv07nomt" required>
          </div>
          </div>
        <div class="form-group row">
            <div class="form-group row">
        <label for="example-text-input" class="col-xs-1 col-form-label">Apellidos:</label>
          <div class="col-xs-2">
            <input class="form-control" type="text" id="sv07apdt" name="sv07apdt" required>
          </div>
          </div>
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-1 col-form-label">Estado:</label>
             <div class="col-xs-2">
              <select name="sv07estd" class="form-control" id="impu" name="sv07estd" required>
                 <option value="1">Activo</option>
                 <option value="2">Inactivo</option>
                 </select>
             </div>
             </div>
             <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Correo Electronico:</label>
             <div class="col-xs-2">
              <input class="form-control" type="email" id="sv07emt" name="sv07emt" required>
              </div>
        </div>
             <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Password:</label>
             <div class="col-xs-2">
              <input class="form-control" type="password" id="sv07pass" name="sv07pass" required>
              </div>
        </div> 
         <div class="form-group row">
            <label for="example-text-input" class="col-xs-1 col-form-label">Repetir password:</label>
             <div class="col-xs-2">
              <input class="form-control" type="password" id="pass2" name="pass2" required>
              </div>
        </div> 
          <div class="form-group row">
              <label for="example-text-input" class="col-xs-1 col-form-label">Tipo:</label>
             <div class="col-xs-2">
              <select name="sv05codu" class="form-control" id="impu" name="sv05codu" required>
                 <option value="1">Administrador</option>
                 <option value="2">Usuario</option>
                 </select>
             </div>
             </div>
       <div class="form-group row"><br>
          
        </div>
        <div class="form-group row">
         <div class="col-xs-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Modificar</button>
          </div>
          <a href="" class="btn btn-danger" data-dismiss="modal">Close</a>
                       </div>
        </div>
        </div>
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->
<!-- Fin Modals-->

<!--Modals-->
    <div class="modal fade" id="modal-4" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Desactivar</h3>
      </div>
      <div class="modal-body form">
        <form action="php/DesacUsu.php" method="POST" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Cedula</label>
              <div class="col-md-9">
                <input class="form-control" type="text" value="" id="sv07cdtp" name="sv07cdtp">
              </div>
            </div>
            

          </div>
           <div class="modal-footer" >
            <div class="col-xs-5">
           
            </div>
                <a href="" class="btn btn-danger" data-dismiss="modal">Close</a>
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
<!-- Fin Modals-->

<!--Modals-->
    <div class="modal fade" id="modal-5" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Activar</h3>
      </div>
      <div class="modal-body form">
        <form action="php/actiUsu.php" method="POST" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">Cedula</label>
              <div class="col-md-9">
                <input class="form-control" type="text" value="" id="sv07cdtp" name="sv07cdtp">
              </div>
            </div>
            

          </div>
           <div class="modal-footer" >
            <div class="col-xs-5">
           
            </div>
                <a href="" class="btn btn-danger" data-dismiss="modal">Close</a>
              <button id="enviar" name="enviar" type="submit" class="btn btn-success">Activar     </button>
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
<!-- Fin Modals-->
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
        var _cit = $(_trEdit).find('td:eq(0)').text();
        var _ced = $(_trEdit).find('td:eq(1)').text();
        var _nom = $(_trEdit).find('td:eq(2)').text();
        var _apl = $(_trEdit).find('td:eq(3)').text();
        var _std = $(_trEdit).find('td:eq(4)').text();
        var _pass = $(_trEdit).find('td:eq(5)').text();
        var _emt = $(_trEdit).find('td:eq(6)').text();
        
        
        $('input[name="sv07cdtp"]').val(_cit);
        $('input[name="sv07cedt"]').val(_ced);
        $('input[name="sv07nomt"]').val(_nom);
        $('input[name="sv07apdt"]').val(_apl);
        $('input[name="sv07estd"]').val(_std); 
        $('input[name="sv07pass"]').val(_pass);
        $('input[name="sv07emt"]').val(_emt);        
    }); 
}
</script>

</body>

</html>