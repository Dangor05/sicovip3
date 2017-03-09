<?php

include "conexion.php";

$user_id=null;
$sql1= "select *from sv09vsdo";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
	 <th>Plano</th>
	<th>Folio</th>
	<th>Predio</th>
	<th>Minuta</th>
	<th>Fecha Visado</th>
	<th>Consecutivo</th>
	<th>Ced Propie</th>
	<th>N Finca</th>
	<th>Impuestos</th>
	<th>CartasAgua</th>
	<th>Estado</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv09npln"]; ?></td>
	<td><?php echo $r["sv09nfol"]; ?></td>
	<td><?php echo $r["sv09npre"]; ?></td>
	<td><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a></td>
	<td><?php echo $r["sv09fvdp"]; ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>



	<td style="width:150px;">
		<a href="./editar.php?sv09npln=<?php echo $r["sv09npln"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["sv09npln"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["sv09npln"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?sv09npln="+<?php echo $r["sv09npln"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; mysqli_close($con);?>
