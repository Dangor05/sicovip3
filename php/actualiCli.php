<?php 
include("conexion.php");
if (isset($_POST['sv01cdtpc']) && isset($_POST['sv01cedc']) && isset($_POST['sv01nomc']) && isset($_POST['sv01apdc']) && isset($_POST['sv01telc']) && isset($_POST['sv01emc']) && isset($_POST['sv01pass']) && isset($_POST['valpass']) ) {
	
	$ced=$_POST['sv01cedc'];
	$cit=$_POST['sv01cdtpc'];
	$nom=$_POST['sv01nomc'];
	$apl=$_POST['sv01apdc'];
	$tel=$_POST['sv01telc'];
	$eml=$_POST['sv01emc'];
	$pass=$_POST['sv01pass'];
	$passw=$_POST['valpass'];

	if ($passw==$pass) {
		$svpass=sha1($pass);
		$stm="UPDATE sv01clnte set sv01cdtpc='$cit',sv01nomc='$nom',sv01apdc='$apl',sv01emc='$eml',sv01telc='$tel',sv01pass='$svpass' WHERE sv01cedc='$ced'";
		$sen=$con->query($stm);
		if ($sen!=null) {
			$con->close();
			header("location: ../inicio.php");
		}else{
			print "<script>alert(\"No se pudo actualizar.\");window.location='../configurar.php';</script>";
		}
	}
	else{
		print "<script>alert(\"Las contraseñas no son igual, por favor, verifique que coincidan.\");window.location='../config.php';</script>";
	}
}
else{
	echo "Hay algo mal";
}
 ?>}
