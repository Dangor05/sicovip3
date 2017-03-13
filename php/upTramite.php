<?php 
include('conexion.php');


if(!empty($_POST) && !empty($_FILE))
	{
		$Conse = mysqli_real_escape_string($mysqli,$_POST['conse']);
		$nfin = mysqli_real_escape_string($mysqli,$_POST['nfin']);
		$cdpr = mysqli_real_escape_string($mysqli,$_POST['cedp']);
		$plano = mysqli_real_escape_string($mysqli,$_FILE['pln']);
		$carta = mysqli_real_escape_string($mysqli,$_FILE['aact']);
		$autC = mysqli_real_escape_string($mysqli,$_FILE['acta']);
	$dir='Archivo/'.$cdpr.'/';

	$sql1 = "UPDATE sv04reqtos SET sv04apl='".$plano['name']."',sv04aact='".$autC['name']."',sv04acta='".$carta['name']."' WHERE sv04nfin='$nfin'";
	$query1=$mysqli->query($sql1);
	if($query1!=null){
		move_uploaded_file($plano['tmp_name'],$dir.$plano['name']);
		move_uploaded_file($carta['tmp_name'],$dir.$carta['name']);
		move_uploaded_file($autoC['tmp_name'],$dir.$autoC['name']);
		mysqli_close($con);

				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
	}

?>