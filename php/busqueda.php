<?php

include "conexion.php";

$user_id=null;
$sql1= "SELECT sv09npln,sv09nfol,sv09npre,sv09mnt,DATE_FORMAT(sv09fvdp,'%d-%m-%Y') AS sv09fvdp,DATE_FORMAT(sv09fumv,'%d-%m-%Y') AS sv09fumv,sv08conse,sv03cedp,sv04nfin,sv02code,sv07cdtp
FROM sv09vsdo
        where
          sv09npln like '%$_GET[s]%' or 
          sv09nfol like '%$_GET[s]%' or 
          sv09npre like '%$_GET[s]%' or 
          sv08conse like '%$_GET[s]%' or 
          sv03cedp like '%$_GET[s]%' or
          sv04nfin like  '%$_GET[s]%' ";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="container-fluid">
	<div class="well well-sm text-lefh">
    <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
	 <th>N Plano</th>
	<th>N Folio</th>
	<th>N Predio</th>
	<th>Minuta</th>
	<th>Fecha Visado</th>
	<th>Ultima Mod</th>
	<th>Consecutivo</th>
	<th>Propietario</th>
	<th>N Finca</th>
	<th>Impuestos</th>
	<th>Estado</th>
	<th>Topografo</th>
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
	<td><?php if($r["sv02code"]==1){echo 'Aprobado';}elseif($r["sv02code"]==2){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><?php echo $r["sv07cdtp"]; ?></td>
		
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
</div>
</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
