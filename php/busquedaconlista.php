<?php

include "conexion.php";
$user_id=null;
$sql1= "   SELECT DISTINCT a.sv03apdp,a.sv03nomp,a.sv03cedp,
                b.sv04nfin,b.sv04apln,b.sv04aact,b.sv04acta,
                c.sv08conse,c.sv08fchs,c.sv08fumt,c.sv04nfin,c.sv02code
    
    FROM sv03ptario a, sv04reqtos b,sv08trmte c
    WHERE a.sv03cedp=c.sv03cedp AND b.sv04nfin=c.sv04nfin  AND  c.`sv03cedp`=$_GET[s]
	ORDER BY sv08fchs DESC";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table-bordered table-hover table-responsive">
<thead>
	<th>Cedula propietario</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>NFinca</th>
	<th>Plano</th>
	<th>Autocat</th>
	<th>CartaAgua</th>
	<th>Consecutivo</th>
	<th>F_solicitud</th>
	<th>F_Modificacion</th>
	<th>Estado Impuestos</th>
	<th>Estado CartasAgua</th>
	<th>Estado visado</th>
	
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td><a href="php/aut.php?id=<?php echo $r['sv03cedp']?>&aut=<?php echo $r['sv04aact']?>"><?php echo $r["sv04aact"];?></a></td>
	<td><a href="php/cta.php?id=<?php echo $r['sv03cedp']?>&cta=<?php echo $r['sv04acta']?>"><?php echo $r["sv04acta"];?></a></td>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv08fchs"]; ?></td>
	<td><?php echo $r["sv08fumt"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
	<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
	
		
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>
