<?php

if(!empty($_POST)){

		if (isset($_POST['sv01cedc']) && isset($_POST['sv01cdtpc']) && isset($_POST['sv01nomc']) &&
			isset($_POST['sv01apdc']) && isset($_POST['sv01emc']) && isset($_POST['sv01telc'])) {

     $sv01cedc=$_POST['sv01cedc'];
     $sv01cdtpc=$_POST['sv01cdtpc'];
     $sv01nomc=$_POST['sv01nomc'];
     $sv01apdc=$_POST['sv01apdc'];
     $sv01emc=$_POST['sv01emc'];
     $sv01telc=$_POST['sv01telc'];

	include "conexion.php";
			

		$stm=$con->prepare("CALL ActualizarCliente(?,?,?,?,?,?);");
		$stm->bind_param("sssssi",$sv01cedc,$sv01cdtpc, $sv01nomc, $sv01apdc, $sv01emc, $sv01telc);
		$stm->execute();

		if ($stm->error) {
			echo "Fallo al agregar".$res->error;
		}

		$stm->close();
		$con->close(); 

		print "<script>alert(\"Actualizado exitosamente.\");window.location='../ClienteMostrar.php';</script>";

	}	else{
		echo "revisa las vistas pendejo!!";
	}
}


?>