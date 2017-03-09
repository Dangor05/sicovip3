<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from sv03ptario";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<div class="well well-sm text-lefh">
 <div class="content-loader">
	 <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
    <th>Cedula</th>
	<th>Nombre</th>
	<th>Email</th>
	<th>Telefono</th>
	<th>Tipo propietario</th>
	<th></th>
</thead>

<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?> <?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv03emp"]; ?></td>
	<td><?php echo $r["sv03telp"]; ?></td>
	<td><?php echo $r["sv06codp"]== 1 ? 'Fisico' : 'Juridico' ; ?></td>
	
	<td style="width:150px;">
		<a href="./editarp.php?sv03cedp=<?php echo $r["sv03cedp"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["sv03cedp"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["sv03cedp"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminarp.php?sv03cedp="+<?php echo $r["sv03cedp"];?>;

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
