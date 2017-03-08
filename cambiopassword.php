<?php 

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$idusuario = $_POST['idusuario'];
$token = $_POST['token'];

if( $password1 != "" && $password2 != "" && $idusuario != "" && $token != "" ){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="author" content="Dangor">
		<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/datatables.min.css">
		<script src="public/js/jquery-1.11.0.min.js"></script>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.theme.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
  </head>

  <body>
    <div class="container" role="main">
      <div class="col-md-2"></div>
      <div class="col-md-8">
<?php

	include("php/conexion.php");
	$consulta = " SELECT * FROM sv11res WHERE sv11tok = '$token' ";

	$resultado = $con->query($consulta);
	if( $resultado->num_rows > 0 ){
		$usuario = $resultado->fetch_assoc();
		if( sha1( $usuario['sv07cdtp'] == $idusuario ) ){
			if( $password1 == $password2 ){
				$sql = "UPDATE sv07tpgfo SET sv07pass = '".sha1($password1)."' WHERE sv07cdtp = ".$usuario['sv07cdtp'];
				$resultado = $con->query($sql);
				if($resultado =! null){
					$sql = "DELETE FROM sv11res WHERE sv11tok = '$token';";
					$resultado = $conexion->query( $sql );
				?>
					<p> La contraseña se actualizó con exito. </p>
				<?php
				}
				else{
				?>
					<p> Ocurrió un error al actualizar la contraseña, intentalo más tarde </p>
				<?php
				}
			}
			else{
			?>
			<p> Las contraseñas no coinciden </p>
			<?php
			}

		}
		else{
?>
<p> El token no es válido </p>
<?php
		}	
	}
	else{
?>
<p> El token no es válido </p>
<?php
	}
	?>
	</div>
<div class="col-md-2"></div>
	</div> <!-- /container -->
<script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}
else{
	header('Location:login.php');
}
?>