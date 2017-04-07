<?php

include "conexion.php";
 
$user_id=null;
$sql1= "SELECT DISTINCT a.`sv03cedp`,a.`sv03nomp`,a.`sv03apdp`,
		   b.`sv04nfin`,
		   c.`sv08fchs`,
		    t.sv09fvdp, t.`sv02code`,
		    d.`sv01cedc`, d.`sv01cdtpc`

		FROM  sv03ptario a, 
		      sv04reqtos b,
		      sv08trmte c,
		      sv01clnte d,
		      sv09vsdo t
		 
		WHERE c.`sv04nfin`= t.sv04nfin 
		AND a.sv03cedp = t.sv03cedp
		AND  b.`sv04nfin`= t.`sv04nfin`
		AND t.sv01cedc=d.`sv01cedc`
		
		AND d.`sv01cdtpc`='$_GET[S]'";
               
				
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
	<th>Solicitud</th>
	<th>Revision</th>
	<th>Estado</th>
	
	
		
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv08fchs"];?></td>
	<td><?php echo $r["sv09fvdp"]; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	
		

	
</tr>
<?php endwhile;mysqli_close($con);?>
</table>
</div>
</div>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
