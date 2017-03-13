<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM sv03ptario WHERE sv03cedp=".$_GET["sv03cedp"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../verp.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../verp.php';</script>";

			}
}else{
	if (isset($_POST['ced'])) {
			
			include "conexion.php";
			
			$sql = "DELETE FROM sv03ptario WHERE sv03cedp=".$_POST["ced"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../PropietarioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../PropietarioMostrar.php';</script>";

			}
	}
}
?>