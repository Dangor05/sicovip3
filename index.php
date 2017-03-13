<?php

?>
<html>
	<head>
		<title>SICOVIP</title>
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
	<?php include "php/navbarLogin.php"; ?>
	
		<div class="container">
	<div class="row">
	<div class="col-md-12">
	

			<h2>Bienvenido</h2>
			&nbsp&nbsp&nbsp
			
			
			<DIV ALIGN=center><IMG SRC="imag/sc.jpg" width="160" height="140"></DIV>
		<DIV ALIGN=center><h3>Inicio de sesion</h3></DIV>
	</head>
   
        <form action="php/modLogin.php" method="POST" > 
            <div ALIGN=center><label>Usuario:</label>&nbsp
            <input id="usuario" name="usuario" type="text" placeholder="Ejem: 501110111" required></div>
            <br />
            <div ALIGN=center><label>Password:</label>&nbsp
            <input id="password" name="password" type="password"placeholder="su contraseña" required></div>
            <br />
            <div ALIGN=center><input name="login" type="submit" value="login">
            <span>¿Olvidaste tu contraseña? <a href="Resetpass.php">Recordar Password</a></span>
            </div> 

            
        </form> 
        
        <br />
        
        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>

			<br>
			

	</div>
	</div>
	</div>
	</body>
</html>