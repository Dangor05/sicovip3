<?php

if(!empty($_POST)){
		if (isset($_POST['sv03cedp']) && isset($_POST['sv03nomp']) && isset($_POST['sv03apdp']) && isset($_POST['sv03emp']) && isset($_POST['sv03telp']) && isset($_POST['sv06codp'])) {

		$sv03cedp=$_POST['sv03cedp'];
		$sv03nomp=$_POST['sv03nomp'];
		$sv03apdp=$_POST['sv03apdp'];
		$sv03emp=$_POST['sv03emp'];
		$sv03telp=$_POST['sv03telp'];
		//$sv06codp=$_POST['sv06codp']; 
		include "conexion.php";

		            $sql="UPDATE sv03ptario SET sv03nomp='$sv03nomp',sv03apdp='$sv03apdp',sv03emp='$sv03emp',sv03telp='$sv03telp' WHERE `sv03cedp`='$sv03cedp'";
					 
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../PropietarioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo .\");window.location='../PropietarioMostrar.php';</script>";

			}


	}else{
	echo "las vistas";}
}

/*
$sv03cedp=$_POST['sv03cedp'];  
$sv03nomp=$_POST['sv03nomp'];  
$sv03apdp=$_POST['sv03apdp'];  
$sv03emp=$_POST['sv03emp'];   
$sv03telp=$_POST['sv03telp'];
$sv06codp=$_POST['sv06codp']; 

	include "conexion.php";
			
			
            $sql="UPDATE `sv03ptario` SET `sv03nomp`='$sv03nomp',`sv03apdp`='$sv03apdp',`sv03emp`='$sv03emp',`sv03telp`='$sv03telp',`sv06codp`='$sv06codp' WHERE `sv03cedp`='$sv03cedp'";
					 
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../PropietarioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo actualizar.\");window.location='../PropietarioMostrar.php';</script>";

			}
		*/



?>