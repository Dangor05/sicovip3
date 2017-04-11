<?php

include('conexion.php');
/*$stm=" SELECT c.sv03cedp, c.sv03nomp, c.sv03apdp, a.sv08conse, b.sv04nfin, DATE_FORMAT(a.sv08fchs,'%d-%m-%Y') AS sv08fchs, a.sv02code,b.sv04apln, b.sv04aact, b.sv04acta
   FROM sv08trmte a, sv04reqtos b, sv03ptario c         
         WHERE a.sv04nfin=b.sv04nfin
         AND a.`sv03cedp`=c.`sv03cedp`          
         AND a.sv02code='6' ORDER BY a.sv08fchs ASC";*/
$user_id=null;
$sql1= "SELECT c.sv03cedp, c.sv03nomp, c.sv03apdp, a.sv08conse, b.sv04nfin, DATE_FORMAT(a.sv08fchs,'%d-%m-%Y') AS sv08fchs, a.sv02code,b.sv04apln, b.sv04aact, b.sv04acta
   FROM sv08trmte a, sv04reqtos b, sv03ptario c         
         WHERE a.sv04nfin=b.sv04nfin
         AND a.sv03cedp=c.sv03cedp
         AND a.sv02code='6' ORDER BY a.sv08fchs ASC";
$query = $con->query($sql1);
?>
<?php if($query->num_rows>0):?>

	<div class="well well-sm text-lefh">
 <div class="content-loader">
 <div class="table-responsive">
<table align="center" cellspacing="0" width="90%" id="example" class="table table-striped table-hover small">
<thead>
    <th>Cedula</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Consecutivo</th>
	<th>Finca</th>
	<th>Fecha</th>
	<th>Estado</th>
	<th>Plano</th>
	<th>Carta de Agua</th>
	<th>AUTOCAD</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>	
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv08fchs"]; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
	<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td><a href="php/cta.php?id=<?php echo $r['sv03cedp']?>&cta=<?php echo $r['sv04acta']?>"><?php echo $r["sv04acta"]?></a></td>
	<td><a href="php/aut.php?id=<?php echo $r['sv03cedp']?>&aut=<?php echo $r['sv04aact']?>"><?php echo $r["sv04aact"]?></a></td>
	<td style="width:150px;">
		<a href="reVisados.php?conse=<?php echo $r["sv08conse"];?>" class="btn btn-sm btn-info">Procesar</a>
		<a href="editTra.php?nfin=<?php echo $r["sv04nfin"];?>&con=<?php echo $r['sv08conse']?>&pr=<?php echo $r['sv03cedp']?>" class="btn btn-sm btn-warning">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
</div>
</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; mysqli_close($con);?>

<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="assets/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
