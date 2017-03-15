<?php

if(!empty($_POST)){
	if (isset($_POST['sv03cedp']) && isset($_POST['sv03nomp']) && isset($_POST['sv03apdp']) && isset($_POST['sv03emp']) && isset($_POST['sv03telp']) && $_POST['sv06codp']) 
	{
		//
				include "conexion.php";
$sv03cedp=$_POST['sv03cedp'];  
$sv03nomp=$_POST['sv03nomp'];  
$sv03apdp=$_POST['sv03apdp'];  
$sv03emp=$_POST['sv03emp'];   
$sv03telp=$_POST['sv03telp'];
$sv06codp = $_POST['sv06codp']; 
			
			$sql = "INSERT INTO sv03ptario (sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp) values 
                   ('$sv03cedp','$sv03nomp','$sv03apdp','$sv03emp','$sv03telp','$sv06codp')";



			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../PropietarioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../PropietarioMostrar.php';</script>";

			}
	}

	$sv03cedp=$_POST['sv03cedp'];
	$sv03nomp=$_POST['sv03nomp'];
	$sv03apdp=$_POST['sv03apdp'];
	$sv03emp=$_POST['sv03emp'];
	$sv03telp=$_POST['sv03telp'];

	include("conexion.php");
			
			$sql = "INSERT INTO sv03ptario (sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp) values 
                   ('$sv03cedp','$sv03nomp','$sv03apdp','$sv03emp','$sv03telp','1')";



			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../PropietarioMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../PropietarioMostrar.php';</script>";

			}
	}	
?>