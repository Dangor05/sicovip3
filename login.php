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
</head>
<body>
	<div class="container">
	<h2>Bienvenido</h2>
			&nbsp&nbsp&nbsp
			
			
			<DIV ALIGN=center><IMG SRC="<?php echo URL;?>imag/sc.jpg" width="160" height="140"></DIV>
		<DIV class="formTitle" ALIGN=center><h3>Inicio de sesion</h3></DIV>
	</head>
   
        <form action="Index/ini" method="POST" > 
            <div ALIGN=center><label>Usuario:</label>&nbsp
            <input id="usuario" name="usuario" type="text" placeholder="Ejem: 501110111" required></div>
            <br />
            <div ALIGN=center><label>Password:</label>&nbsp
            <input id="password" name="password" type="password"placeholder="su contraseña" required></div>
            <br />
            <div ALIGN=center><input name="login" type="submit" value="login"></div> 
        </form> 
        
        <br />
        
        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>

			<br>
			



</div>
</body>

</html>