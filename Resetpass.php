<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="denker">

    <title> Resetear contraseña </title>
    <link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
    <script src="public/js/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="js/jquery.min.js"></script>

  </head>

  <body>
  <nav class="navbar navbar-inverse" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  
    <a class="navbar-brand" href="./"><b>SICOVIP</b></a>
   </div>
</nav>
    <div class="container" role="main">
      <br/><br/><br/><br/><br/><br/><br/>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form id="frmRestablecer" action="php/valmail.php" method="post">
          <div class="panel panel-default">
            <div class="panel-heading"> Restaurar contraseña </div>
            <div class="panel-body">
              <p></p>
              <div class="form-group">
                <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-succes">Recuperar</button>
                <!--<input type="submit" class="btn btn-primary" value="Recuperar contraseña" -->
              </div>
            </div>
          </div>
        </form>
        <div id="mensaje">
          
        </div>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
  </body>
</html>