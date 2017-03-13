<?php

if(!empty($_POST)){

$sv09npln=$_POST['sv09npln'];   
$sv09nfol=$_POST['sv09nfol'];   
$sv09npre=$_POST['sv09npre'];   
$sv09mnt=$_FILES['sv09mnt'];    
$sv09fvdp=$_POST['sv09fvdp'];   
$sv09fumv=$_POST['sv09fumv']; //revisar 
$sv08conse=$_POST['sv08conse'];   
$sv01cedc=$_POST['sv01cedc'];  
$sv03cedp=$_POST['sv03cedp'];	
$sv04nfin=$_POST['sv04nfin']; 
$sv02code=$_POST['sv02code']; 		
$sv07cdtp=$_POST['sv07cdtp']; 
$sv05codu=$_POST['sv05codu'];
//$dir ='C:\xampp\htdocs\pruebas\Sicovip\archivos/'.$sv03cedp.'/';
$dir ='C:\apache\htdocs\SICOVIP\archivos/'.$sv03cedp.'/';
		include "conexion.php";
			
			$sql = "UPDATE sv09vsdo SET sv09nfol='$sv09nfol',sv09npre='$sv09npre',sv09mnt='".$sv09mnt['name']."',sv09fvdp='$sv09fvdp',sv09fumv='$sv09fumv',sv08conse='$sv08conse',sv01cedc='$sv01cedc',sv03cedp='$sv03cedp',sv04nfin='$sv04nfin',sv02code='$sv02code',sv07cdtp='$sv07cdtp',sv05codu='$sv05codu' WHERE sv09npln='$sv09npln'";
			 
				$query = $con->query($sql);
			if($query!=null){
				move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
				mysqli_close($con);
				header("location='../ver.php';</script>");
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		//}
	//}
}


?>