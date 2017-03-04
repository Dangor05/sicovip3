<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from sv07tpgfo  
       where sv07cdtp like '%$_GET[s]%' or 
             sv07cedt like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover table-responsive">
<thead>
    <th>Codigo IT</th>
    <th>Cedula</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Estado</th>
	<th>pass</th>
	<th>codu</th>
	
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv07cdtp"]; ?></td>
	<td><?php echo $r["sv07cedt"]; ?></td>
	<td><?php echo $r["sv07nomt"]; ?></td>
	<td><?php echo $r["sv07apdt"]; ?></td>
	<td><?php echo $r["sv07estd"]== 1 ? 'Activo' : 'Inactivo';  ?></td>
	<td><?php echo $r["sv07pass"]; ?></td>
	<td><?php echo $r["sv05codu"] == 1 ? 'Administrador' : 'Usuario-Top'; ?></td>
	
	<td style="width:150px;">
		<a href="./editart.php?sv07cdtp=<?php echo $r["sv07cdtp"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["sv07cdtp"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["sv07cdtp"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminart.php?sv07cdtp="+<?php echo $r["sv07cdtp"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>
