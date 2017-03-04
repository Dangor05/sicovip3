<?php

if(!empty($_POST)){

     $sv07cdtp=$_POST['sv07cdtp'];
     $sv07cedt=$_POST['sv07cedt'];
     $sv07nomt=$_POST['sv07nomt'];
     $sv07apdt=$_POST['sv07apdt'];
     $sv07estd=$_POST['sv07estd'];
     $sv07pass=$_POST['sv07pass'];
     $sv05codu=$_POST['sv05codu'];

	include "conexion.php";
			
			$sql="UPDATE `sv07tpgfo` SET `sv07cedt`='$sv07cedt',`sv07nomt`='$sv07nomt',`sv07apdt`='$sv07apdt',`sv07estd`='$sv07estd',`sv07pass`='$sv07pass',`sv05codu`='$sv05codu' WHERE `sv07cdtp`='$sv07cdtp'";
			
		 
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../vert.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo actualizar.\");window.location='../vert.php';</script>";

			}
		
}


?>