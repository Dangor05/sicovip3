<?php

if(!empty($_POST)){

     $sv01cedc=$_POST['sv01cedc'];
     $sv01cdtpc=$_POST['sv01cdtpc'];
     $sv01nomc=$_POST['sv01nomc'];
     $sv01apdc=$_POST['sv01apdc'];
     $sv01emc=$_POST['sv01emc'];
     $sv01telc=$_POST['sv01telc'];

	include "conexion.php";
			
			$sql="UPDATE `sv01clnte` SET `sv01cdtpc`='$sv01cdtpc',`sv01nomc`='$sv01nomc',`sv01apdc`='$sv01apdc',`sv01emc`='$sv01emc',`sv01telc`='$sv01telc' WHERE `sv01cedc`='$sv01cedc'";

			
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../verct.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo actualizar.\");window.location='../verct.php';</script>";

			}
		
}


?>