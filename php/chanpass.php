<?php 

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$idusuario = $_POST['idusuario'];
$token = $_POST['token'];

if( $password1 != "" && $password2 != "" && $idusuario != "" && $token != "" ){

	$pass1=sha1($password1);

	include("conexion.php");
	$consulta = " SELECT * FROM sv11res WHERE sv11tok = '$token' ";

	$resultado = $con->query($consulta);
	if( $resultado->num_rows > 0 ){
		$usuario = $resultado->fetch_assoc();
		if( sha1( $usuario['sv07cdtp'] == $idusuario ) ){
			if( $password1 == $password2 ){
				$sql = "UPDATE sv07tpgfo SET sv07pass = '$pass1' WHERE sv07cdtp = ".$usuario['sv07cdtp'];
				$resultado = $con->query($sql);
				if($resultado =! null){
					$sql = "DELETE FROM sv11res WHERE sv11tok = '$token';";
					$resultado = $con->query( $sql );
				
				print "<script>alert(\" La contraseña se actualizó con exito.\");window.location='../index.php';</script>";
				}
				else{

					print "<script>alert(\"Ocurrió un error al actualizar la contraseña, intentalo más tarde.\");window.location='../Restablecer.php';</script>";
			
				}
			}
			else{

				print "<script>alert(\" Las contraseñas no coinciden.\");window.location='../Restablecer.php';</script>";
			}

		}
		else{

			print "<script>alert(\" El token no es válido.\");window.location='../Restablecer.php';</script>";
		}	
	}
	else{

		print "<script>alert(\" El token no es válido.\");window.location='../Restablecer.php';</script>";
	}
}else{
	header('Location:login.php');
}
?>