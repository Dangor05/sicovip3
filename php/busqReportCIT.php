<?php

include "conexion.php";
 
$user_id=null;
$sql1= "  SELECT DISTINCT  a.sv03cedp, a.sv03nomp, a.sv03apdp,
                         b.sv04nfin,b.sv04apln,b.sv04aact,b.sv04acta, DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                         e.sv08conse,e.sv09npln,e.sv09nfol,e.sv09npre,DATE_FORMAT(e.sv09fvdp,'%d-%m-%Y') AS sv09fvdp,e.sv09mnt,d.sv02code,e.sv07cdtp
 
 FROM sv03ptario a, sv04reqtos b, sv06tipprop c, sv08trmte d,sv09vsdo e, `sv05tipusu` u
  
 WHERE d.sv03cedp= a.sv03cedp
 AND e.sv08conse= d.sv08conse
 AND  u.sv05codu= e.sv05codu
 AND b.sv04nfin = e.sv04nfin
 AND sv07cdtp='$_GET[S]'";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="container-fluid">
<div class="well well-sm text-lefh">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">

<thead>
	<th>Cedula</th> 
	<th>Nombre Apellidos</th>
	<th>Consecutivo</th>
	<th>Solitud</th>
	<th>Revision</th>
	<th>Estado</th>
	<th>CIT</th>
	<!--<th>nombre Top</th>-->
	
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>
    <td><?php echo $r["sv08fchs"]=date("d-m-Y"); ?></td>	
	<td><?php echo $r["sv09fvdp"]; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	<td><?php echo $r["sv07cdtp"]; ?></td>

</tr>
<?php endwhile; mysqli_close($con);?>
</table>
</div>
</div>

<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
