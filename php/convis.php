<?php

include "conexion.php";

$user_id=null;
$sql1= " SELECT DISTINCT  a.`sv03cedp`, a.`sv03nomp`, a.`sv03apdp`,
                         b.`sv04nfin`,b.`sv04apln`,b.`sv04aact`,b.sv04acta, d.sv08fchs,
                         e.`sv08conse`,e.`sv09npln`,e.`sv09nfol`,e.`sv09npre`,e.`sv09fvdp`,e.`sv09mnt`,e.`sv02code`,e.`sv07cdtp`
 
 FROM sv03ptario a, sv04reqtos b, sv06tipprop c, sv08trmte d,sv09vsdo e, `sv05tipusu` u
  
 WHERE d.`sv03cedp`= a.`sv03cedp`
 AND e.`sv08conse`= d.`sv08conse`
 AND  u.`sv05codu`= e.`sv05codu`
 AND b.`sv04nfin` = e.`sv04nfin`";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class=" table-bordered table-hover table-responsive">
<thead>
	<th style="width: 50%;">Propietario</th>
	<th style="width: 10%;">Nfinca</th>
	<th style="width: 10%;">Plano</th>
	<th style="width: 10%;">Solitud</th>
	<th style="width: 10%;">Conse</th>
	<th style="width: 8%;">NºPlano</th>
	<th style="width: 10%;">Folio</th>
	<th>Predio</th>
	<th>Fecha</th>
	<th>Minuta</th>
	<th style="width: 10%;">Impuestos</th>
	<th>CartasAgua</th>
	<th>Estado</th>
	<th>CIT</th>

	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"];?> <?php echo $r["sv03nomp"]; ?> <?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td><?php echo $r["sv08fchs"]=date("d-m-Y"); ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv09npln"]; ?></td>
	<td><?php echo $r["sv09nfol"]; ?></td>
	<td><?php echo $r["sv09npre"]; ?></td>
	<td><?php echo $r["sv09fvdp"]=date("d-m-Y"); ?></td>
	<td><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a>
	<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><?php echo $r["sv07cdtp"]; ?></td>
	<td style="width:150px;">
	<a href="./editar.php?sv09npln=<?php echo $r["sv09npln"];?>" class="btn btn-sm btn-warning">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>