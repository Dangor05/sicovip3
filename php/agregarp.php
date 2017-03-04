<?php

if(!empty($_POST)){
		include "conexion.php";
$sv03cedp=$_POST['sv03cedp'];  
$sv03nomp=$_POST['sv03nomp'];  
$sv03apdp=$_POST['sv03apdp'];  
$sv03emp=$_POST['sv03emp'];   
$sv03telp=$_POST['sv03telp'];
$sv06codp=$_POST['sv06codp']; 
			
			$sql = "INSERT INTO sv03ptario (`sv03cedp`, `sv03nomp`, `sv03apdp`, `sv03emp`, `sv03telp`, `sv06codp`) values 
                   ('$sv03cedp','$sv03nomp','$sv03apdp','$sv03emp','$sv03telp','$sv06codp')";



			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../verp.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../verp.php';</script>";

			}
		//}
	}	
//}



?>