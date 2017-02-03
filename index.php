<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>assets/datatables.min.css">
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
			window.location.href="<?php echo URL;?>Index/index";
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('mostrar');
			$("body").fadeIn('slow');
			window.location.href="<?php echo URL;?>Index/mostrar";
		});
	});
	
});
</script>
</head>
<body>
	<div class ="well">
			<div class="nav navbar-nav navbar-right">
			<span>Inicio de sesion / &nbsp<a href="<?php echo URL;?>Index/login">Iniciar sesion</a></span>
		</div>

		<h2>Municipalidad de Santa Cruz</h2>
		<h3>Departamento de Catastro y Topografia</h3>
	</div>
	<div class="container">
	<form class="navbar-form navbar-left" role="search" action="Index/busque">
     <h3 class="form-signin-heading">Cedula</h3>
	 <div class="form-group">
	  	   <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
    </form>
         
            <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Ver Personas</button>
        <hr />
        
        <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
        <th>Propietario</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>NFinca</th>
        <th>Plano</th>
        <th>Consecutivo</th>
        <th>F_solicitud</th>
        <th>Estado Impuestos</th>
        <th>Estado Plano</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($this->personas as $elementos)
		{
			?>

			<tr>
			<td><?php echo $r["sv03cedp"]; ?></td>
			<td><?php echo $r["sv03nomp"]; ?></td>
			<td><?php echo $r["sv03apdp"]; ?></td>
			<td><?php echo $r["sv04nfin"]; ?></td>
			<td><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
			<td><?php echo $r["sv08conse"]; ?></td>
			<td><?php echo $r["sv08fchs"]; ?></td>
			<td><?php echo $r["sv02code"]== 1 ? 'Al dia' : 'Retrasado' ; ?></td>
			<td><?php echo $r["sv02code"]== 1 ? 'Presenta' : 'No Presenta' ; ?></td>
			<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';} ?></td>
			</tr>
			<?php
		}
		?>
        </tbody>
        </table>
        
        </div>


		</div>			
		</form>
	</div>

</body>

</html>