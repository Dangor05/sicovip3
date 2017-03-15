<?php
include "conexion.php";

$user_id=null;
$sql1= "SELECT sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass, sv07emt from sv07tpgfo where sv07cdtp = ".$_SESSION['sv07cdtp'];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?><?php if($person!=null):?>
<form role="form" method="post" action="php/actualiUsu.php">
  <div class="form-group">
    <label for="sv07cdtp">Codigo IT</label>
     <p><?php echo $person->sv07cdtp; ?></p>
    <input type="hidden" class="form-control"  value="<?php echo $person->sv07cdtp; ?>" name="sv07cdtp" >
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <p><?php echo $person->sv07cedt; ?></p>
    <input type="hidden" class="form-control" value="<?php echo $person->sv07cedt; ?>" name="sv07cedt" >
  </div>
    <div class="form-group">
    <label for="sv07nomt">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07nomt; ?>" name="sv07nomt" >
  </div>
  <div class="form-group">
    <label for="sv07apdt">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07apdt; ?>"  name="sv07apdt" >
  </div>
    <div class="form-group">
    <label for="sv07apdt">Correo:</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07emt; ?>"  name="sv07emt" >
  </div>
  <div class="form-group">
    <label for="sv07pass">Pass</label>
    <input type="password" class="form-control" value="<?php echo $person->sv07pass; ?>" name="sv07pass" >
  </div>
    <div class="form-group">
    <label for="sv07pass">Repita contraseña</label>
    <input type="password" class="form-control" name="valpass" >
  </div>

<input type="hidden" name="id" value="<?php echo $person->sv07cdtp; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>