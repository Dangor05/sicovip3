<?php 
session_start();
if (isset($_SESSION['cd'])) {
	if (isset($_GET['id'])) {
	 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Resinpeccion</title>
 	<link rel="stylesheet" type="text/css" href="public\bootstrap\bootstrap\css\bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css">
 	<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
 	<script type="text/javascript" src="public/JS/validaciones.js"></script>
 </head>
 <body>
 <header>
 	<?php include("php/navcli.php"); ?>
 	<?php include("php/obtrequisi.php"); ?>
 </header>
 	<div class="container">
 	<div class="row">
 	<div class="col-md-3">
 	 <?php if($person!=null):?>
  		<form action="php/agreReinspeccion.php" enctype="multipart/form-data" method="POST" onsubmit="return valrequi()">
 			<div class="container">
 			<div class="form-group row">
          <label for="selecc" class="col-xs-2 form-label">Seleccione el archivo que requiere actualizar:</label>
           <div class="col-xs-2">
              <select name="opcion" class="form-control" id="opci" name="opcion" required>
              <option value="1">Todos</option>
              <option value="2">Plano</option>
              <option value="3">Cartas de Agua</option>
              <option value="4">AutoCad</option>
              </select>
             </div>
             </div>
 			<div class="form-group row">
    <label class="col-xs-1 col-form-label" for="sv08conse">Consecutivo</label>
    <div class="col-xs-2">
    <p><?php echo $cn;?></p>
    <input type="hidden" id="ced" class="form-control" value="<?php echo $person->sv03cedp;?> " name="cedp">
    </div>
     </div>
  <div class="form-group row">
    <label for="sv08conse" class="col-xs-1 col-form-label" >N° Finca:</label>
    <div class="col-xs-2">
      <input type="text" id="fin" class="form-control" readonly="" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
      </div>
  </div>
  <div class="form-group row">
    <label for="sv08fumt" class="col-xs-1 col-form-label" >Plano Agrimensura:</label>
    <div class="col-xs-2">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04apln;?>" name="pln" >
    </div>
    </div>
    <div class="form-group row">
    <label for="sv08fumt" class="col-xs-1 col-form-label" >Carta de Agua</label>
    <div class="col-xs-2">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04acta; ?>" name="acta">
    </div>
  </div>
  <div class="form-group row">
    <label for="sv01cedc" class="col-xs-1 col-form-label" >AUTOCAD</label>
    <div class="col-xs-2">
    <input type="file"  class="form-control-file" value="<?php echo $person->sv04aact; ?>" name="aact">
  </div>
  </div>
   <button type="submit" class="btn btn-default">Actualizar</button>
 			</div>
 		</form>
 				<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
 	</div>
 	</div>
 	</div>
 </body>
 </html>
 <?php } 
}else {print "<script>alert(\"Debes iniciar de para solicitar una reinspeccion.\");window.location='index.php';</script>"; }?>