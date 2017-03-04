<?php
include "conexion.php";

$user_id=null;
$sql1= "select *from sv09vsdo where sv09npln = ".$_GET["sv09npln"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}
}
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php" enctype="multipart/form-data">
  <div class="form-group">
 <label for="sv09npln">Numero plano</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09npln; ?>" name="sv09npln" >
  </div>
  <div class="form-group">
    <label for="sv09nfol">Numero Folio</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09nfol; ?>" name="sv09nfol" >
  </div>
  <div class="form-group">
    <label for="sv09npre">Numero predio</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09nfol; ?>" name="sv09npre" >
  </div>
  <div class="form-group">
    <label for="sv09mnt">Minuta</label>
    <input type="file"  value="<?php echo $person->sv09mnt; ?>" name="sv09mnt" >
  </div>
  <div class="form-group">
    <label for="sv09fvdp">Fecha visado</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09fvdp; ?>" name="sv09fvdp" >
  </div>
  <div class="form-group">
    <label for="sv09fumv">Fecha UM</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09fumv; ?>" name="sv09fumv" >
  </div>
  <div class="form-group">
    <label for="sv08conse">Consecutivo</label>
    <input type="text" class="form-control" value="<?php echo $person->sv08conse; ?>" name="sv08conse" >
  </div>
  <div class="form-group">
    <label for="sv01cedc">Ced Cliente-Top</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01cedc; ?>" name="sv01cedc" >
  </div>
  <div class="form-group">
    <label for="sv03cedp">Ced Propietario</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03cedp; ?>" name="sv03cedp" >
  </div>
  <div class="form-group">
    <label for="sv04nfin">N Finca</label>
    <input type="text" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="sv04nfin" >
  </div>
   <div class="form-group">
    <label for="sv02code">Estado Impuestos</label>
    <select name="sv02code" class="form-control" value="<?php echo $person->sv02code; ?>"  name="sv02code" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
</div>
 <div class="form-group">
    <label for="sv02code">Estado Cartas</label>
    <select name="sv02code" class="form-control" value="<?php echo $person->sv02code; ?>"  name="sv02code" >
  <option value="1">Presenta</option>
 <option value="2">No Presenta</option>
  </select>
</div>
  <div class="form-group">
    <label for="sv02code">Estado Visado</label>
    <select name="sv02code" class="form-control" value="<?php echo $person->sv02code; ?>"  name="sv02code" >
  <option value="1">Aprobado</option>
 <option value="2">Rechazado</option>
 <option value="3">En proceso</option>
 </select>
</div>
  <div class="form-group">
    <label for="sv07cdtp">Cod Topografo</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07cdtp; ?>"  name="sv07cdtp" >
  </div>
  <div class="form-group">
    <label for="sv05codu">Tip Usuario</label>
    <select name="sv05codu" class="form-control" value="<?php echo $person->sv05codu; ?>"  name="sv05codu" >
    <option value="1">Administrador</option>
    <option value="2">Usuario-Top</option>
     </select>
</div>
 
<input type="hidden" name="id" value="<?php echo $person->sv09npln; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>