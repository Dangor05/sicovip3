<?php

include "conexion.php";
if (isset($_GET['s'])) {
	$user=$_GET['s'];
$sql1= "select * from sv03ptario
        where sv03cedp= '$user' ";
$query = $con->query($sql1);
}else{
	$query=null;
}

?>

<?php if($query->num_rows>0):?>
<div class="container">
		<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-responsive">
<thead>
	 <th>Cedula</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Email</th>
	<th>Telefono</th>
	<th>Tipo propietario</th>
	<th></th>
	

</thead>
<?php while ($r=$query->fetch_array()):?>
	<?php $_SESSION['pr']=$r["sv03cedp"]; ?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv03emp"]; ?></td>
	<td><?php echo $r["sv03telp"]; ?></td>
	<td><?php if($r["sv06codp"]==1){echo "Fisico";}else{echo "Juridico";} ; ?></td>
	<td style="width:150px;">
		<a href="./tramit.php" class="btn btn-sm btn-primary">Tramitar</a>
		</td>
</tr>
<?php endwhile;?>
</table>
</div>
</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>
