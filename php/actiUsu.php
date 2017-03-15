<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "UPDATE sv07tpgfo  SET sv07estd='1' WHERE sv07cdtp=".$_GET["sv07cdtp"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Activado exitosamente.\");window.location='../vert.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo Activado.\");window.location='../vert.php';</script>";

			}
}else{
	if (isset($_POST['sv07cdtp'])) {
			
			include "conexion.php";
			
			$sql = "UPDATE sv07tpgfo  SET sv07estd='1' WHERE sv07cdtp=".$_POST["sv07cdtp"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Activado exitosamente.\");window.location='../UsuaioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo Activado.\");window.location='../UsuarioMostrar.php';</script>";

	}
}
}

?>