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

?>