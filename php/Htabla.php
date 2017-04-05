<?php

include('conexion.php');

$user_id=null;
$sql1= "SElECT a.sv08conse, a.sv08fchs, a.sv01cedc, a.sv03cedp, a.sv04nfin, a.sv02code, b.sv04apln, b.sv04aact, b.sv04acta FROM sv08trmte a, sv04reqtos b WHERE a.sv04nfin=b.sv04nfin AND a.sv02code='7' ORDER BY a.sv08fchs ASC";
$query = $con->query($sql1);
?>
<?php if($query->num_rows>0):?>
<div class="well well-sm text-lefh">
 <div class="content-loader">
<table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
<thead>
    <th>Consecutivo</th>
	<th>Fecha</th>
	<th>Topografo</th>
	<th>Propietario</th>
	<th>N° Finca</th>
	<th>Plano Agrimensura</th>
	<th>Cartas de Agua</th>
	<th>Autocat</th>
	<th>Estado</th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv08fchs"]=date("d-m-Y"); ?></td>
	<td><?php echo $r["sv01cedc"]; ?></td>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td><a href="php/aut.php?id=<?php echo $r['sv03cedp']?>&aut=<?php echo $r['sv04aact']?>"><?php echo $r["sv04aact"]?></a></td>
	<td><a href="php/cta.php?id=<?php echo $r['sv03cedp']?>&cta=<?php echo $r['sv04acta']?>"><?php echo $r["sv04acta"]?></a></td>
	<td><?php if($r["sv02code"] == 7){echo 'En Proceso';}?></td>
	<td style="width:150px;">
		<a href="Visado.php?conse=<?php echo $r["sv08conse"];?>" class="btn btn-sm btn-warning">Visar</a>
		<a href="editTra.php?nfin=<?php echo $r["sv04nfin"];?>&con=<?php echo $r['sv08conse']?>&pr=<?php echo $r['sv03cedp']?>" class="btn btn-sm btn-danger">Editar</a>
	</td>
</tr>
<?php endwhile;?>
</table>
</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; mysqli_close($con);?>

<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="assets/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
<script type="text/javascript">
$(document).ready(function(){

	$(".edit-link").click(function Carga() 
    {
        $("#example tbody tr").each(function (index) 
        {
            var campo1, campo2, campo3;
            $(this).children("td").each(function (index2) 
            {
                switch (index2) 
                {
                    case 0: campo1 = $(this).text();
                            break;            
                }
                $(this).css("background-color", "#ECF8E0");
            });
        });
        alert(campo1);
    });
 });  
</script>