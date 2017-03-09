<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from sv07tpgfo";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
     <th>Codigo IT</th>
    <th>Cedula</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Estado</th>
	<th>Usuario</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
    <td><?php echo $r["sv07cdtp"]; ?></td>
	<td><?php echo $r["sv07cedt"]; ?></td>
	<td><?php echo $r["sv07nomt"]; ?></td>
	<td><?php echo $r["sv07apdt"]; ?></td>
	<td><?php echo $r["sv07estd"]== 1 ? 'Activo' : 'Inactivo'; ?></td>
	<td><?php if($r["sv05codu"] == 1){ echo 'Administrador';}elseif ($r["sv05codu"] == 2){echo 'Usuario-Top';}else{echo 'plataforma';} ?></td>
	
	
	<td style="width:250px;">
		<a href="./editart.php?sv07cdtp=<?php echo $r["sv07cdtp"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["sv07cdtp"];?>" class="btn btn-sm btn-danger">Desactivar</a>
		<script>
		$("#del-"+<?php echo $r["sv07cdtp"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/DesacUsu.php?sv07cdtp="+<?php echo $r["sv07cdtp"];?>;

			}

		});
		</script>
		<a href="#" id="act-<?php echo $r["sv07cdtp"];?>" class="btn btn-sm btn-default">Activar</a>
		<script>
		$("#act-"+<?php echo $r["sv07cdtp"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/actiUsu.php?sv07cdtp="+<?php echo $r["sv07cdtp"];?>;

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
