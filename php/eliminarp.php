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
	if(!empty($_POST)){
	if (isset($_POST['sv03cedp'])) {
			$sv03cedp=$_POST['sv03cedp'];
			include ("conexion.php");
			
		$stm=$con->prepare("CALL EliminarPropietario(?);");
		$stm->bind_param("s",$sv03cedp);
		$stm->execute();

		if ($stm->error) {
			echo "Fallo al eliminar".$res;
		}

		$stm->close();
		$con->close(); 

		print "<script>alert(\"Actualizado exitosamente.\");window.location='../PropietarioMostrar.php';</script>";
	}
	else{
		echo "VERga!!";
	}
}
}
?>