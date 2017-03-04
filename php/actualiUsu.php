<?php 
if(!empty($_POST)){
include "conexion.php";
     $sv07cdtp=mysqli_real_escape_string($con,$_POST['sv07cdtp']);
     $sv07cedt=mysqli_real_escape_string($con,$_POST['sv07cedt']);
     $sv07nomt=mysqli_real_escape_string($con,$_POST['sv07nomt']);
     $sv07apdt=mysqli_real_escape_string($con,$_POST['sv07apdt']);
     $sv07pass=mysqli_real_escape_string($con,$_POST['sv07pass']);
     

	
			
			$sql="UPDATE `sv07tpgfo` SET `sv07nomt`='$sv07nomt',`sv07apdt`='$sv07apdt',`sv07pass`='$sv07pass' WHERE `sv07cdtp`='$sv07cdtp'";
				 
			$query = $con->query($sql);
			if($query!=null){
				header("location:../vert.php");
				mysqli_close($con);
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../vert.php';</script>";

			}
		
}


?>