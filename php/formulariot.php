<?php
include "conexion.php";

$user_id=null;
$sql1= "select *from sv07tpgfo where sv07cdtp = ".$_GET["sv07cdtp"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?><?php if($person!=null):?>
<form role="form" method="post" action="php/actualizart.php">
  <div class="form-group">
    <label for="sv07cdtp">Codigo IT</label>
    <input type="text" class="form-control"  value="<?php echo $person->sv07cdtp; ?>" name="sv07cdtp" >
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07cedt; ?>" name="sv07cedt" >
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
    <label for="sv07estd">Estado cuenta</label>
    <select name="sv07estd" class="form-control" value="<?php echo $person->sv07estd; ?>" name="sv07estd" >
    <option value="1">Activo</option>
    <option value="2">Inactivo</option>
 </select>
</div>
  <div class="form-group">
    <label for="sv07pass">Pass</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07pass; ?>" name="sv07pass" >
  </div>
 <div class="form-group">
    <label for="sv05codu">Tipo Usuario</label>
    <select name="sv05codu" class="form-control" value="<?php echo $person->sv05codu; ?>"name="sv05codu" >
    <option value="1">Administrador </option>
    <option value="2">Topografo</option>
 </select>
</div>
  

<input type="hidden" name="id" value="<?php echo $person->sv07cdtp; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>