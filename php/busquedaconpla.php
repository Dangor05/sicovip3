<?php
<?php
function fecha($fchv, $id, $dc){
	$datetime1 = new DateTime($fchv);
	$datetime2 = new DateTime("now");
	$interval = date_diff($datetime1, $datetime2);
	$dias=$interval->format('%R%a días');
if ($dias<=5) {?>
<div class='alert alert-warning'>
		<p>Estimado Señor, sus documentos no cumplen con los requisitos para obtener el sello APT, por favor sirvase a descargar la minuta y hacer los cambios respetivos para la </p> <a href="reinspeccion.php?id=<?php echo $id;?>&dn=<?php echo $dc; ?>">reinspeccion</a></div>
		
	<?php } else {?>
		<p class='alert alert-info'>Sus documentos no cumplen con  los debidos requisitos para el visado atp</p>
<?php }

}

include "conexion.php";

$user_id=null;
	$sql1= "SELECT b.sv03cedp,b.sv03nomp, b.sv03apdp, c.sv04apln,e.sv02code,d.sv09mnt, d.sv09fvdp
FROM sv03ptario b, sv04reqtos c, sv09vsdo d, sv08trmte e
 WHERE c.sv04nfin=d.`sv04nfin`
  AND b.sv03cedp=e.sv03cedp
   AND e.sv08conse=d.sv08conse
    AND	d.sv09npln =".$_POST['s'];

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="container-fluid">
	<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="10%" id="example" class="table table-striped table-hover table-responsive">
<thead>
	<th width="15%">Cedula propietario</th>
	<th width="15%">Nombre</th>
	<th width="15%">Apellidos</th>
	<th width="20%">Plano</th>
	<th width="10%">Estado</th>
	<th>Minuta</th>
	</thead>
<?php while ($r=$query->fetch_array()):?>
	<?php $fchv=$r["sv09fvdp"];
	$std=$r["sv02code"];
	$id=$r["sv08conse"];
	$dc=$r["sv04nfin"];
	?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"];?></a></td>
	</tr>
<?php endwhile; mysqli_close($con);?>
</table>
</div>
</div>
</div>
<?php if ($std==6) {
	fecha($fchv, $id, $dc);
} ?>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif?>
