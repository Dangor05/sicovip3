<?php

if(!empty($_POST)){

		include "conexion.php";
     $sv01cedc=$_POST['sv01cedc'];
     $sv01cdtpc=$_POST['sv01cdtpc'];
     $sv01nomc=$_POST['sv01nomc'];
     $sv01apdc=$_POST['sv01apdc'];
     $sv01emc=$_POST['sv01emc'];
     $sv01telc=$_POST['sv01telc'];
			
               $sql = "INSERT INTO sv01clnte(sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc) values 
                               ('$sv01cedc','$sv01cdtpc','$sv01nomc','$sv01apdc','$sv01emc','$sv01telc')";

			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../verct.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../verct.php';</script>";

			}
		//}
	}	
//}



?>