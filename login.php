<?php 
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesion</title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
	<script src="public/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
</head>
<body>
<?php include "php/navbarLogin.php"; ?>
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">

			<h2>Bienvenido</h2>
			&nbsp&nbsp&nbsp
			<div align="center"><img src="imag/sc.jpg" width="160" height="140"></div>
			<div align="center">
				<h3>Inicio de Sesion</h3>
			</div>
			        <form action="php/modLogin.php" method="POST" > 
            <div align=center class="form-group"><label>Usuario:</label>&nbsp
            <input name="usuario" class="form-control" type="text" placeholder="" required></div>
            <div class="form-group" ALIGN=center><label>Password:</label>&nbsp
            <input name="password" type="password" class="form-control" placeholder="Contraseña" required></div>
            <div ALIGN=center><input name="login" class="btn btn-primary btn-block btn-large" type="submit" value="login">
            <br>
            <span><a href="Resetpass.php">¿Olvidaste tu contraseña?</a></span>
            </div> 

            
        </form>
	</div>
	</div>
	</div>

	 <br>
	
</body>
</html>