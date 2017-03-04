<?php

include "conexion.php";

$user_id=null;
	$sql1= "SELECT  b.sv03cedp,b.sv03nomp,b.sv03apdp,
					d.`sv08conse`, 
					c.sv04nfin,c.sv04apln,c.sv04aact,c.sv04acta,
					d.`sv02code`,d.sv09mnt

	 FROM sv03ptario b, sv04reqtos c, sv09vsdo d, sv08trmte e

	 WHERE  c.sv04nfin=d.`sv04nfin` AND
			b.sv03cedp=d.sv03cedp   AND
			e.`sv08conse`=d.`sv08conse` and
			 b.`sv03cedp`=$_GET[s]";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover table-responsive">
<thead>
	<th>Cedula propietario</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>NFinca</th>
	<th>Plano</th>
	<th>Autocat</th>
	<th>CartaAgua</th>
	<th>Estado Impuestos</th>
	<th>Estado CartasAgua</th>
	<th>Estado visado</th>
	<th>Minuta</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td><a href="php/aut.php?id=<?php echo $r['sv03cedp']?>&aut=<?php echo $r['sv04aact']?>"><?php echo $r["sv04aact"];?></a></td>
	<td><a href="php/cta.php?id=<?php echo $r['sv03cedp']?>&cta=<?php echo $r['sv04acta']?>"><?php echo $r["sv04acta"];?></a></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a></td>
		<td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; mysqli_close($con);?>
