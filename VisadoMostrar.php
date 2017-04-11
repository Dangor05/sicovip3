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
</head>
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
<body>
<?php     if ($_SESSION['sv05codu'] == 1) {
           include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } 
      include ("php/getvisados.php");
      if($query->num_rows>0):?>
      <div class="container-fluid">

           <button class="btn btn-success" id="btnAgregar" type="button"  data-toggle="modal" data-target="#modal-1"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Nuevo Visado</button>
     <br><br>
      <div class="table-responsive">   
    <div style="width: 98%" class="well well-sm text-left">
    
   <div class="content-loader">
        
      <table align="CENTER" cellspacing="0" style="width: 100%" id="example" class="table table-striped table-hover">
        <thead>
        <tr>
        <th>Propietario</th>
         <th>Consecutivo</th>
        <th>N°Minuta</th>
        <th>N°Finca</th>
        <th>N°Folio</th>
        <th>Localizacion</th>
        <th>Revision</th>
        <th>Impuestos</th>
        <th>Estado</th>  
        <th>Oficio</th>
        <th>CIT</th>
        <th></th>
        <th></th>
        
        <!--<th>Cliente</th>-->
        
        </tr>
        </thead>
        <tbody>
        <?php
        while ($r=$query->fetch_array()):
            ?>
  <!--<td><?php echo $r["sv01cedc"]; ?></td>-->
            <tr>
        <td style="width: 5%;"><?php echo $r["sv03cedp"]; ?></td>
        <td style="width: 5%;"><?php echo $r["sv08conse"]; ?></td>
        <td style="width: 9%;"><?php echo $r["sv09npln"]; ?></td>
        <td style="width: 5%;"><?php echo $r["sv04nfin"]; ?></td>
        <td style="width: 5%;"><?php echo $r["sv09nfol"]; ?></td>
        <td style="width: 5%;"><?php echo $r["sv09npre"]; ?></td>
        <td style="width: 5%;"><?php echo $r["sv09fvdp"]; ?></td>
        <td style="width: 5%;"><?php echo $r["impu"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
        <td style="width: 5%;"><?php if($r["estado"]==5){echo 'Aprobado';}elseif($r["estado"]==6){echo 'Rechazado';}elseif($r["estado"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
       <td style="width: 10%;"><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"];?></a></td>
       <td><?php echo $r["sv07cdtp"]; ?></td>
         <!--variable de sesion-->
            
            <td align="center">
             <button class="btn btn-info" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-2"> <span class="glyphicon glyphicon-edit"></span> &nbsp; Editar</button>
             </td>
             <td align="center"> <button class="btn btn-danger" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"><span class="glyphicon glyphicon-trash"></span></button></td>
                       </tr>
            <?php endwhile; ?>
        </tbody>
        </table>
       </div>
        </div>
        <!--</div>-->
<?php else:?>
    <p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
</div>

<br />
    <div class="container">
    <div class="modal fade" id="modal-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
           <div class="modal-header">
            <button type 1="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Visado</h3>
           </div>
           <div class="modal-body ">
    <form name="Diagnostico" method="POST"  action="php/agregar.php" enctype="multipart/form-data">
   

          <div class="form-group row">
         <label for="sv09npln" class="col-xs-2 col-form-label">N° Minuta:</label>
             <div class="col-xs-4">
                <input class="form-control" type="text" id="npln" name="svnpln" required>
             </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">N° Folio:</label>
            <div class="col-xs-4">
            <input class="form-control" required="required" type="text" id="fol" name="svnfol">
            </div>
            </div>

            <div class="form-group row">

            <label for="example-text-input" class="col-xs-2 col-form-label">Localizacion Municipal:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="pred" onkeypress="return Numeros(event)" name="svnpre" required>
          </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">Fecha Visado:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv09fvdp" name="svfvdp" value="<?php echo date("Y-m-d");?>">
          </div>
          </div>

          <div class="form-group row">
             <label for="example-text-input" class="col-xs-2 col-form-label">Consecutivio:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="svconse" name="sv08conse" required>
          </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">Propietario:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv03cedp" name="svcedp" required="">
          </div>
         
        </div>
          <div class="form-group row">
           <label for="example-text-input" class="col-xs-2 col-form-label">N° Finca:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv04nfin" name="svnfin" required="">
          </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">Cliente:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv01cedc" name="svcedc" required="">
          </div>


          </div>
          <div class="form-group row">

        <label for="example-text-input" class="col-xs-2 col-form-label">Impuestos:</label>
          <div class="col-xs-4">
            <select name="sv02code" class="form-control" name="svcode" >
            <option value="1">Al dia</option>
            <option value="2">Retrasado</option>
             </select>
          </div>


             <label for="example-text-input" class="col-xs-2 col-form-label">Estado:</label>
          <div class="col-xs-4">
            <select name="svstd" class="form-control" name="svstd" >
            <option value="8">Oficio</option>
            <option value="5">Aprobado</option>
            <option value="6">Rechazado</option>
            </select>

          </div>


          </div>
          <div class="form-group row">
           <label for="example-text-input" class="col-xs-2 col-form-label">Oficio:</label>
             <div class="col-xs-5">
                <input class="form-control-file" type="file" id="svmnt" name="sv09mnt">
             </div>
          </div>
          <div class="form-group row">
         <label for="example-text-input" class="col-xs-2 col-form-label">Plano:</label>
          <div class="col-xs-5">
            <input class="form-control-file" type="file" id="sv04plan" readonly="" name="svplan">
          </div>
                </div>
                <div class="form-group row">
          <label for="example-text-input" class="col-xs-2 col-form-label">Topografo:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv07cdtp" readonly="" name="svcdtp" value="<?php echo $_SESSION['sv07cdtp'];?>">
            <input class="form-control" type="hidden" id="svcodu" name="sv05codu" value="<?php echo $_SESSION['sv05codu'];?>">
          </div>
                </div>
    <div class="form-group row"><br>
      
    </div>
    <div class="form-group row">
    <div class="col-xs-3"></div>
     <div class="col-xs-2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button type="submit" class="btn btn-success">Agregar</button>
       </div>
       <div class="col-xs-1"></div>
       <div class="col-xs-5">
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
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Visado</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Diagnostico" method="post" action="php/actualizar.php" enctype="multipart/form-data">
              
          <div class="form-group row">
         <label for="example-text-input" class="col-xs-2 col-form-label">N° Minuta:</label>
             <div class="col-xs-4">
                <input class="form-control" type="text" id="sv09npln" readonly="" name="sv09npln" value="">
             </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">N° Folio:</label>
            <div class="col-xs-4">
            <input class="form-control" required="required" type="text" id="sv09nfol" name="sv09nfol">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-2 col-form-label">Localizacion Municipal:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv09npre" onkeypress="return Numeros(event)" name="sv09npre" value="">
          </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">Fecha Visado:</label>
          <div class="col-xs-4">
            <input class="form-control" type="date" id="sv09fvdp" name="sv09fvdp" value="<?php echo date("Y-m-d");?>">
          </div>

            </div>

             <div class="form-group row">
             <label for="example-text-input" class="col-xs-2 col-form-label">Consecutivio:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv08conse" readonly="" name="sv08conse" value="">
          </div>

          <label for="example-text-input" class="col-xs-2 col-form-label">Propietario:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv03cedp" readonly="" name="sv03cedp" value="">
          </div>
        </div>

          <div class="form-group row">
      <label for="example-text-input" class="col-xs-2 col-form-label">N° Finca:</label>
       <div class="col-xs-4">
       <input class="form-control" type="text" id="sv04nfin" readonly="" name="sv04nfin" value="">
          </div>


        </div>
          <div class="form-group row">


             <label for="example-text-input" class="col-xs-2 col-form-label">Impuestos:</label>
          <div class="col-xs-4">
            <select name="sv02code" class="form-control" name="sv02code" >
            <option value="1">Al dia</option>
            <option value="2">Retrasado</option>
            </select>
          </div>

        <label for="example-text-input" class="col-xs-2 col-form-label">Estado:</label>
          <div class="col-xs-4">
            <select name="sv02std" class="form-control" name="sv02std" >
            <option value="5">Aprobado</option>
            <option value="6">Rechazado</option>
            <option value="8">Oficio</option>
            </select>
        </div>



        </div>
        <div class="form-group row">
                    <label for="example-text-input" class="col-xs-2 col-form-label">Oficio:</label>
             <div class="col-xs-4">
                <input class="form-control-file" type="file" id="sv09mnt" name="sv09mnt" value="">
                </div>
        </div>
        <div class="form-group row"> 
         <label for="example-text-input" class="col-xs-2 col-form-label">Plano:</label>
          <div class="col-xs-4">
            <input class="form-control-file" type="file" id="sv04plan" readonly="" name="sv04plan">
          </div></div>
        <div class="form-group row">
                       <label for="example-text-input" class="col-xs-2 col-form-label">Topografo:</label>
          <div class="col-xs-4">
            <input class="form-control" type="text" id="sv07cdtp" readonly="" name="sv07cdtp" value="">
          </div>
        </div>

        <div class="form-group row"><br></div>
        <div class="form-group row">
        <div class="col-xs-2"></div>
         <div class="col-xs-5">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button type="submit" class="btn btn-success">Modificar</button>
          </div>
           <div class="col-xs-5">         
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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
        <form action="php/eliminar.php" method="POST" id="form" class="form-horizontal">
          <input type="hidden" value="" name="book_id"/>
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">N° Minuta</label>
              <div class="col-md-9">
                <input class="form-control" type="text" value="" id="sv09npln" name="sv09npln">
              </div>
              <div class="form-group row">
              <div class="col-xs-2">
              <input type="hidden" class="form-control" id="conse" value="" name="sv08conse" required>
              </div>
              </div>
            </div>
            

          </div>
           <div class="modal-footer" >
            <div class="col-xs-5">
           
            </div>
                <a href="" class="btn btn-default" data-dismiss="modal">Cancelar</a>
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
         var _cedp = $(_trEdit).find('td:eq(0)').text();
         var _con = $(_trEdit).find('td:eq(1)').text();
        var _pln = $(_trEdit).find('td:eq(2)').text();
        var _fin = $(_trEdit).find('td:eq(3)').text();
        var _fol = $(_trEdit).find('td:eq(4)').text();
        var _pre = $(_trEdit).find('td:eq(5)').text();
        var _fch = $(_trEdit).find('td:eq(6)').text();
        var _imp = $(_trEdit).find('td:eq(7)').text();
        var _std = $(_trEdit).find('td:eq(8)').text();
        var _mnt = $(_trEdit).find('td:eq(9)').text();
        var _top = $(_trEdit).find('td:eq(10)').text();

       
        
        //var _cedc = $(_trEdit).find('td:eq(6)').text();
         
        

        
        
        $('input[name="sv09npln"]').val(_pln);
        $('input[name="sv09nfol"]').val(_fol);
        $('input[name="sv09npre"]').val(_pre);
        $('input[name="sv09mnt"]').val(_mnt);
        $('input[name="sv09fvdp"]').val(_fch); 
        $('input[name="sv08conse"]').val(_con);
        //$('input[name="sv01cedc"]').val(_cedc);
        $('input[name="sv03cedp"]').val(_cedp);
        $('input[name="sv04nfin"]').val(_fin);
        $('input[name="sv02code"]').val(_imp);
        $('input[name="sv02std"]').val(_std);
        $('input[name="sv07cdtp"]').val(_top);         
    }); 
}
</script>
</body>

</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>