<?php

include "conexion.php";
 
$user_id=null;
$sql1= "  SELECT DISTINCT  a.`sv03cedp`, a.`sv03nomp`, a.`sv03apdp`,
                         b.`sv04nfin`,b.`sv04apln`,b.`sv04aact`,b.sv04acta, d.sv08fchs,
                         e.`sv08conse`,e.`sv09npln`,e.`sv09nfol`,e.`sv09npre`,e.`sv09fvdp`,e.`sv09mnt`,e.`sv02code`,e.`sv07cdtp`
 
 FROM sv03ptario a, sv04reqtos b, sv06tipprop c, sv08trmte d,sv09vsdo e, `sv05tipusu` u
  
 WHERE d.`sv03cedp`= a.`sv03cedp`
 AND e.`sv08conse`= d.`sv08conse`
 AND  u.`sv05codu`= e.`sv05codu`
 AND b.`sv04nfin` = e.`sv04nfin`
 AND sv07cdtp='$_GET[S]'";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<div class="table-responsive">
<table class=" table-bordered table-hover">

<thead>
	<th>ID Propietario</th> 
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Nfinca</th>
	<th>Fecha solitud</th>
	<th>Conse</th>
	<th>Nplano</th>
	<th>NFolio</th>
	<th>Npredio</th>
	<th>Fecha Visado</th>
	<th>Estado Impuestos</th>
	<th>Estado CartasAgua</th>
	<th>Estado visado</th>
	<th>Cod Top</th>
	<!--<th>nombre Top</th>-->
	
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	
    <td><?php echo $r["sv08fchs"]; ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv09npln"]; ?></td>
	<td><?php echo $r["sv09nfol"]; ?></td>
	<td><?php echo $r["sv09npre"]; ?></td>
	<td><?php echo $r["sv09fvdp"]; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><?php echo $r["sv07cdtp"]; ?></td>

</tr>
<?php endwhile; mysqli_close($con);?>
</table>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
