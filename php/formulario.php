<?php
include "conexion.php";
$id=$_GET["sv09npln"];
$user_id=null;
$sql1= "select *from sv09vsdo where sv09npln ='$id'";
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

<form role="form" method="post" action="php/actualizar.php" enctype="multipart/form-data" onsubmit="return validar();">
  <div class="form-group">
 <label for="sv09npln">N° Minuta</label>
    <input type="text" class="form-control" readonly="" id="npln" value="<?php echo $person->sv09npln; ?>" name="sv09npln" >
  </div>
  <div class="form-group">
    <label for="sv09nfol">N° Folio Real</label>
    <input type="text" class="form-control" id="fol" value="<?php echo $person->sv09nfol; ?>" name="sv09nfol" >
  </div>
  <div class="form-group">
    <label for="sv09npre">Localizacion Municipal</label>
    <input type="text" class="form-control" id="pred" onkeypress="return Numeros(event)" value="<?php echo $person->sv09npre; ?>" name="sv09npre" >
  </div>
  <div class="form-group">
    <label for="sv09mnt">Oficio</label>
    <input type="file"  value="<?php echo $person->sv09mnt; ?>" name="sv09mnt" >
  </div>
  <div class="form-group">
    <label for="sv09fvdp">Revisado</label>
    <input type="text" class="form-control" value="<?php echo $person->sv09fvdp; ?>" name="sv09fvdp" >
  </div>
  <div class="form-group">
    <label for="sv09fumv">Modificado</label>
    <input type="text" class="form-control" readonly value="<?php echo $person->sv09fumv; ?>" name="sv09fumv" >
  </div>
  <div class="form-group">
    <label for="sv08conse">Consecutivo</label>
    <input type="text" class="form-control" value="<?php echo $person->sv08conse; ?>" name="sv08conse" readonly >
  </div>
  <div class="form-group">
    <label for="sv01cedc">Ced Cliente-Top</label>
    <input type="text" class="form-control" readonly value="<?php echo $person->sv01cedc; ?>" name="sv01cedc" readonly>
  </div>
  <div class="form-group">
    <label for="sv03cedp">Ced Propietario</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03cedp; ?>" name="sv03cedp" readonly >
  </div>
  <div class="form-group">
    <label for="sv04nfin">N° Finca</label>
    <input type="text" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="sv04nfin" readonly>
  </div>
  <div class="form-group"> 
 <label for="sv03ptario">Plano:</label>&nbsp
  <input type="file" class="form-control-file" name="sv04plan" placeholder="sv04plan" >
  </div>
   <div class="form-group">
    <label for="sv02code">Estado Impuestos</label>
    <select name="sv02code" class="form-control" value="<?php echo $person->sv02code; ?>"  name="sv02code" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
</div>
  <div class="form-group">
    <label for="sv02code">Estado Visado</label>
    <select name="sv02std" class="form-control" value="<?php echo $person->sv02code; ?>"  name="sv02std" >
    <option value="8">Oficio</option>
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
  </select>
</div>
  <div class="form-group">
    <label for="sv07cdtp">Cod Topografo</label>
    <input type="text" class="form-control" readonly value="<?php echo $person->sv07cdtp; ?>"  name="sv07cdtp" >
  </div>

  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>