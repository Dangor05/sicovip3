<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Assets/datatables.min.css">
<script src="<?php echo URL;?>public/js/jquery-1.11.0.min.js"></script>
</head>
<body>
	<div class="container">
	<form action="/" method="post" enctype="multipart/form-data"> 
<div class="form-group">
 <label for="sv03cedp">Nº Ced Propietario</label>&nbsp
 <p><?php echo $_SESSION['Cedp']; ?></p>
<!--<input type="text" class="form-control" value="<?php echo $GLOBALS['Cedp'];?>" name ="Cedpr"><br>--></div>

<div class="form-group"> 
 <label for="sv01cedt">Nº Ced Topografo</label>&nbsp
 <p><?php //echo $_SESSION['Cedt']; ?></p>
 <!--<input type="text" class="form-control" value="<?php echo $GLOBALS['Cedt'];?>" name="cedc"><br>--></div>
  <div class="form-group"> 
 <label for="sv03ptario">Nº consecutivo:</label>&nbsp
 <!--<input type="text" class="form-control" value="<?php echo $cons; ?>" name="conse" required><br>--></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº Finca:</label>&nbsp
<input type="text" class="form-control" name="fin" placeholder="Nº Finca" required><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">Plano:</label>&nbsp
  <input type="file"  name="pla" placeholder="Plano" ><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">Cartas de Agua:</label>&nbsp
 <input type="file" name="car" placeholder="Cartas de Agua" ><br></div>

  <div class="form-group"> 
 <label for="sv03ptario">AutoCat:</label>&nbsp
 <input type="file" name="dib" placeholder="Autocat" ><br><br></div>
<a class="btn btn-default" href="Home.php">Regresar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Continuar</button>
  
  </form>


</div>
</body>

</html>