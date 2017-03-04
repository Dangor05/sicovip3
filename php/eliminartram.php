<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM sv08trmte WHERE sv08conse=".$_GET["sv08conse"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../vertram.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../vertram.php';</script>";

			}
}

?>