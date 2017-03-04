<?php
include "conexion.php";

$user_id=null;
$sql1= "select *from sv01clnte where sv01cedc = ".$_GET["sv01cedc"];
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
<form role="form" method="post" action="php/actualizarct.php">
  <div class="form-group">
     <label for="sv01cedc">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01cedc; ?>"  name="sv01cedc" >
  </div>
   <div class="form-group">
    <label for="sv01cdtpc">Codigo IT</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01cdtpc; ?>"  name="sv01cdtpc" >
  </div>
  <div class="form-group">
    <label for="sv01nomc">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01nomc; ?>"  name="sv01nomc" >
  </div>
  <div class="form-group">
    <label for="sv01apdc">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01apdc; ?>"  name="sv01apdc" >
  </div>
  <div class="form-group">
    <label for="sv01emc">Email</label>
    <input type="email" class="form-control" value="<?php echo $person->sv01emc; ?>"  name="sv01emc" >
  </div>
  <div class="form-group">
    <label for="sv01telc">Telefono</label>
    <input type="text" class="form-control" value="<?php echo $person->sv01telc; ?>"  name="sv01telc" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->sv07cdtp; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>