<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM sv09vsdo WHERE sv09npln=".$_GET["sv09npln"];
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver.php';</script>";

			}
}
else{
	if (isset($_POST['sv09npln']) && isset($_POST['sv08conse'])) {
			
			include "conexion.php";


			
			$sql = "DELETE FROM sv09vsdo WHERE sv09npln=".$_POST["sv09npln"];
			$consu = "UPDATE sv08trmte SET sv02code ='8' WHERE  sv08conse=".$_POST["sv08conse"];
			$senten=$con->query($consu);
			$query = $con->query($sql);
			if($query!=null && $senten !=null){
				mysqli_close($con);
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../VisadoMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo eliminar.\");window.location='../VisadoMostrar.php';</script>";

			}
	}
}

?>