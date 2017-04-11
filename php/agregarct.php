<?php

if(!empty($_POST)){

		include "conexion.php";
     $sv01cedc=$_POST['svcedc'];
     $sv01cdtpc=$_POST['svcdtpc'];
     $sv01nomc=$_POST['svnomc'];
     $sv01apdc=$_POST['svapdc'];
     $sv01emc=$_POST['svemc'];
     $sv01telc=$_POST['svtelc'];
     $pass=$_POST['svpass'];
     $passw=$_POST['valpass'];

     	$sch="SELECT sv01cedc, sv01cdtpc FROM sv01clnte WHERE sv01cedc='$sv01cedc' and sv01cdtpc='$sv01cdtpc'";
	$stm=$con->query($sch);
	if ($stm->num_rows>0) {

		print "<script>alert(\"Este usuario ya esta registrado.\");window.location='../ClienteMostar.php';</script>";
	}else{

		     if ($passw==$pass) {

     	$sv01pass=sha1($pass);

     	$sql = "INSERT INTO sv01clnte(sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc,sv01pass) VALUES                               ('$sv01cedc','$sv01cdtpc','$sv01nomc','$sv01apdc','$sv01emc','$sv01telc','$sv01pass')";

			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ClienteMostar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../ClienteMostar.php';</script>";

			}
     }
     else{
     	print "<script>alert(\"La contraseñas no son igual, por favor escriba bien sus contraseña.\");window.location='../ClienteMostar.php';</script>";
     }
	}

}




?>