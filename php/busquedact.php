<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from sv01clnte 
        where sv01cedc like '%$_GET[s]%' or 
              sv01cdtpc like '%$_GET[s]%'  ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover table-responsive">
<thead>
	 <th>Cedula</th>
	 <th>Codigo IT</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Telefono</th>
	
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv01cedc"]; ?></td>
	<td><?php echo $r["sv01cdtpc"]; ?></td>
	<td><?php echo $r["sv01nomc"]; ?></td>
	<td><?php echo $r["sv01apdc"]; ?></td>
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
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>
