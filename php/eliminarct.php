<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM sv01clnte WHERE sv01cedc=".$_GET["sv01cedc"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../verct.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../verct.php';</script>";

			}
}else{
	if (isset($_POST['sv01cdtpc'])) {
			
			include "conexion.php";
			
			$sql = "DELETE FROM sv01clnte WHERE sv01cedc=".$_POST["sv01cdtpc"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ClienteMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ClienteMostrar.php';</script>";

			}
	}
}

?>