<?php

include "conexion.php";

$user_id=null;
$sql1= "select sv08conse,DATE_FORMAT(sv08fchs ,'%d-%m-%Y') AS sv08fchs, sv01cedc, sv03cedp, sv04nfin, sv02code  from sv08trmte";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
	<th>Conse</th>
	<th>F Soli</th>
	<th>Ced Cli</th>
	<th>Ced Prop</th>
	<th>N Fin</th>
	<th>Estado</th>
	
</thead>



<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv08fchs"]; ?></td>
	<td><?php echo $r["sv01cedc"]; ?></td>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	
	

	<td style="width:150px;">
		<!--<a href="./editar.php?sv09npln=<?php echo $r["sv09npln"];?>" class="btn btn-sm btn-warning">Editar</a>-->
		<a href="#" id="del-<?php echo $r["sv08conse"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["sv08conse"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminartram.php?sv09npln="+<?php echo $r["sv08conse"];?>;

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
<?php endif;mysqli_close($con);?>
