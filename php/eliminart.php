<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM sv07tpgfo WHERE sv07cdtp=".$_GET["sv07cdtp"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../vert.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../vert.php';</script>";

			}
}

?>