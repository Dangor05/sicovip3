<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Assets/datatables.min.css">
<script src="<?php echo URL;?>public/js/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('index');
			$("#btn-add").hide();
			$("#btn-view").show();
			window.location.href="<?php echo URL;?>Persona/index";
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('mostrar');
			$("body").fadeIn('slow');
			window.location.href="<?php echo URL;?>Persona/mostrar";
		});
	});
	
});
</script>
</head>
<body>
	<div class="container">
			<h2>Tramites en espera de inspección</h2>
<br><br>
<form role="form" method="post" action="Cliente.php"> 

<button type="submit" class="btn btn-default">Nuevo Tramite</button>
</form>
<br>
        <h2 class="form-signin-heading"> Persona</h2><hr />
        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Agregar Persona</button>
        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Ver Personas</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
         <th>Consecutivo</th>
         <th>Fecha</th>
         <th>Topografo</th>
         <th>Propietario</th>
         <th>N° Finca</th>
         <th>Plano Agrimensura</th>
         <th>Cartas de Agua</th>
         <th>Autocat</th>
         <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($this->tramites as $elementos)
		{
			?>

			<tr>
			<td><?php echo $elementos["sv08conse"]; ?></td>
			<td><?php echo $elementos["sv08fchs"]=date("d-m-Y"); ?></td>
			<td><?php echo $elementos["sv01cedc"]; ?></td>
			<td><?php echo $elementos["sv03cedp"]; ?></td>
			<td><?php echo $elementos["sv04nfin"]; ?></td>
			<td><a href="php/plan.php?id=<?php echo $elementos['sv03cedp']?>&plan=<?php echo $elementos['sv04apln']?>"><?php echo $elementos["sv04apln"];?></a></td>
			<td><a href="php/aut.php?id=<?php echo $elementos['sv03cedp']?>&aut=<?php echo $elementos['sv04aact']?>"><?php echo $elementos["sv04aact"]?></a></td>
			<td><a href="php/cta.php?id=<?php echo $elementos['sv03cedp']?>&cta=<?php echo $elementos['sv04acta']?>"><?php echo $r["sv04acta"]?></a></td>
			<td><?php if($elementos["sv02code"] == 7){echo 'En Proceso';}?></td>>
			<!--variable de sesion-->
			
			<td align="center">
			<a id="" onclick="Carga()" class="edit-link" href="" title="Edit">
			<img src="../Imagenes/edit.png" width="20px" />
            </a></td>
			<td align="center"><a id="<?php echo $elementos['id']; ?>" class="delete-link" href="<?php echo URL;?>Persona/eliminar" title="Delete">
			<img src="../Imagenes/delete.png" width="20px" />
            </a></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
 </div>

</div>

 <br />
    
    <div class="container">
      
        <div class="alert alert-info">
       
        </div>

    </div>
    

    
<script src="../Public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/datatables.min.js"></script>
<script type="text/javascript" src="../assets/crud.js"></script>

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
</body>

</html>