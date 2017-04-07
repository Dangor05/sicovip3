<?php

include "conexion.php";
 
$user_id=null;
$sql1= "SELECT DISTINCT  a.sv03cedp, a.sv03nomp, a.sv03apdp,
                		 b.sv04nfin,b.sv04apln,b.sv04aact,b.sv04acta,
                 		 DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                  		 d.sv02code
  
		 FROM sv03ptario a, sv04reqtos b, sv08trmte d,sv09vsdo e
		  
		 WHERE d.sv03cedp= a.sv03cedp
		 AND b.`sv04nfin`=d.`sv04nfin`
	
		 AND sv08fchs   BETWEEN '$_GET[S]'  AND  '$_GET[FS]'";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="container-fluid">
	<div class="well well-sm text-lefh">

<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">

<thead>

	<th>Cedula</th>
	<th>Nombre Apellidos</th>
	<th>N°Finca</th>
	<th>Fecha solitud</th>
	<th>Estado</th>
	
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv08fchs"]; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	

</tr>
<?php endwhile;mysqli_close($con);?>
</table>
</div>
</div>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
