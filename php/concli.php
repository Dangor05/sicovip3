<?php

include "conexion.php";

$user_id=null;
$sql1= "SELECT DISTINCT b.sv03cedp,b.sv03nomp,b.sv03apdp,
                d.`sv08conse`, 
                c.sv04nfin,c.sv04apln,c.sv04aact,c.sv04acta,
                e.`sv02code`,d.sv09mnt

 FROM sv03ptario b, sv04reqtos c, sv09vsdo d, sv08trmte e

 WHERE  c.sv04nfin=d.`sv04nfin` AND
        b.sv03cedp=d.sv03cedp   AND
        e.`sv08conse`=d.sv08conse";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div  style="width: 90%" class="well well-sm text-lefh">
	<div class="table-responsive">
 
<table align="CENTER" cellspacing="0" style="width: 100%" id="example" class="table table-striped table-hover small">
<thead> 
	<th>Cedula</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>N°Finca</th>
	<th>Plano</th>
	<th>AUTOCAD</th>
	<th>CartaAgua</th>
	<th>Estado</th>
	<th>Minuta</th>
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td style="width: 10%"><?php echo $r["sv03cedp"]; ?></td>
	<td style="width: 10%"><?php echo $r["sv03nomp"]; ?></td>
	<td style="width: 15%"><?php echo $r["sv03apdp"]; ?></td>
	<td style="width: 10%"><?php echo $r["sv04nfin"]; ?></td>
	<td style="width: 10%"><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td style="width: 10%"><a href="php/aut.php?id=<?php echo $r['sv03cedp']?>&aut=<?php echo $r['sv04aact']?>"><?php echo $r["sv04aact"];?></a></td>
	<td style="width: 10%"><a href="php/cta.php?id=<?php echo $r['sv03cedp']?>&cta=<?php echo $r['sv04acta']?>"><?php echo $r["sv04acta"];?></a></td>
		<td style="width: 7%"><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
	<td style="width: 10%"><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a></td>
		
	</td>
</tr>
<?php endwhile;?>
</table>

</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>
