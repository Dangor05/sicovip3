<?php

if(!empty($_POST)){
include "conexion.php";

$sv09npln=$_POST['sv09npln'];   
$sv09nfol=$_POST['sv09nfol'];   
$sv09npre=$_POST['sv09npre'];   
$sv09mnt=$_FILES['sv09mnt'];    
$sv09fvdp=$_POST['sv09fvdp'];   
$sv09fumv=$_POST['sv09fumv'];//revisar 
$sv08conse=$_POST['sv08conse'];   
$sv01cedc=$_POST['sv01cedc'];  
$sv03cedp=$_POST['sv03cedp'];	
$sv04nfin=$_POST['sv04nfin']; 
$sv02code=$_POST['sv02code']; 		
$sv07cdtp=$_POST['sv07cdtp']; 
$sv05codu=$_POST['sv05codu'];



//$dir ='C:\xampp\htdocs\pruebas\Sicovip\archivos/'.$sv03cedp.'/';
$dir ='C:\apache\htdocs\SICOVIP\archivos/'.$sv03cedp.'/';


$sql = "INSERT INTO sv09vsdo (sv09npln,sv09nfol,sv09npre,sv09mnt,sv09fvdp,sv09fumv,sv08conse,sv01cedc,sv03cedp,sv04nfin,sv02code,sv07cdtp,sv05codu) values 
                                      ('$sv09npln','$sv09nfol','$sv09npre','".$sv09mnt['name']."','$sv09fvdp','NOW()','$sv08conse','$sv01cedc','$sv03cedp','$sv04nfin','$sv02code','$sv07cdtp','$sv05codu')";

	
$query = $con->query($sql);
			if($query!=null){
					move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
		
		mysqli_close($con);

	header("Location:../ver.php");
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
	}
	else {

		print "<script>alert(\"No se pudo realizar el tramite.\");window.location='../ver.php';</script>";
	}

?>
		