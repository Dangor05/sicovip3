<?php
include "conexion.php";

$user_id=null;
$sql1= "select *from sv03ptario where sv03cedp = ".$_GET["sv03cedp"];
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

<form role="form" method="post" action="php/actualizarp.php">
  <div class="form-group">
    <label for="sv03cedp">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03cedp; ?>" name="sv03cedp" >
  </div>
  <div class="form-group">
    <label for="sv03nomp">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03nomp; ?>" name="sv03nomp" >
  </div>
  <div class="form-group">
    <label for="sv03apdp">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03apdp; ?>" name="sv03apdp" >
  </div>
  <div class="form-group">
    <label for="sv03emp">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->sv03emp; ?>" name="sv03emp" >
  </div>
  <div class="form-group">
    <label for="sv03telp">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person->sv03telp; ?>" name="sv03telp" >
  </div>
   <div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="sv06codp" class="form-control" value="<?php echo $person->sv06codp; ?>" name="sv06codp" >
    <option value="1">Fisico</option>
    <option value="2">juridico</option>
 </select>
</div>

<input type="hidden" name="id" value="<?php echo $person->sv03cedp; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>