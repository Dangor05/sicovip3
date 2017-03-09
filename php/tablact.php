<?php

include "conexion.php";
// table-striped table-bordered
$user_id=null;
$sql1= "select * from sv01clnte";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
    <th>Cedula</th>
    <th>Codigo IT</th>
	<th>Nombre</th>
	<th>Email</th>
	<th>Telefono</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv01cedc"]; ?></td>
	<td><?php echo $r["sv01cdtpc"]; ?></td>
	<td><?php echo $r["sv01nomc"]; ?> <?php echo $r["sv01apdc"]; ?></td>
	<td><?php echo $r["sv01emc"]; ?></td>
	<td><?php echo $r["sv01telc"]; ?></td>
	
	<td style="width:150px;">
		<a href="./editarct.php?sv01cedc=<?php echo $r["sv01cedc"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["sv01cedc"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["sv01cedc"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminarct.php?sv01cedc="+<?php echo $r["sv01cedc"];?>;

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
