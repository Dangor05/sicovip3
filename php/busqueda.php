<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from sv09vsdo 
        where sv09npln like '%$_GET[s]%' or 
              sv09nfol like '%$_GET[s]%' or 
              sv09npre like '%$_GET[s]%' or 
              sv08conse like '%$_GET[s]%' or 
              sv03cedp like '%$_GET[s]%' or
              sv04nfin like  '%$_GET[s]%' ";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover table-responsive">
<thead>
	 <th>N plano</th>
	<th>N Folio</th>
	<th>N Predio</th>
	<th>Minuta</th>
	<th>Fecha Visado</th>
	<th>F ultima Mod</th>
	<th>Consecutivo</th>
	<th>Ced Propie</th>
	<th>N Finca</th>
	<th>Estado Impuestos</th>
	<th>Estado CartasAgua</th>
	<th>Estado visado</th>
	<th>Cod Topografo</th>
	<th>Tipo Usuario</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv09npln"]; ?></td>
	<td><?php echo $r["sv09nfol"]; ?></td>
	<td><?php echo $r["sv09npre"]; ?></td>
	<td><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a></td>
	<td><?php echo $r["sv09fvdp"]; ?></td>
	<td><?php echo $r["sv09fumv"]; ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><?php echo $r["sv07cdtp"]; ?></td>
	<td><?php echo $r["sv05codu"] == 1 ? 'Administrador' : 'Usuario-Top'; ?></td>

	
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
<?php endwhile; mysqli_close($con);?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
