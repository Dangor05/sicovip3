<?php 
session_start();
$usu=$_SESSION['id']; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    <meta name="author" content="denker">
    <title> Restablecer contraseña </title>
<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<script src="public/js/jquery-1.11.0.min.js"></script>
<script src="public/js/jquery-1.11.3.min.js"></script>
<script src="public/js/jquery-ui.js"></script>
  </head>

  <body>
  <header>
 <?php include "php/navindex.php"; ?>
  </header>
    <div class="container" role="main">
    <div class="row">
    <div class="col-md-12">
    <br>
    <br>
    <br>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="php/verificod.php" method="post"><!--action="cambiopassword.php"-->
          <div class="panel panel-default">
            <div class="panel-heading"><center> <strong> Verificar codigo</strong></center></div>
            <div class="panel-body">
              <p>En la casilla de abajo por favor escriba el codigo que se le envio a su correo para verificar su registro dentro del sistema.</p>
              <div class="form-group">
                <label for="password">Codigo:</label>
                <input type="text" class="form-control" name="codigo" required>
                <input type="text" name="usu" value="<?php echo $usu;?>">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Verificar" >
              </div>
            </div>
          </div>
        </form>  
      </div>
      <div class="col-md-4"></div>
      </div>
      </div>

    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
