<?php
include ("conexion.php");
if (isset($_POST['codigo']) && isset($_POST['usu'])) {
	
	$token=$_POST['codigo'];
	$usu=$_POST['usu'];

	$stm="SELECT *FROM sv11res WHERE sv11tok='$token'";
	$resp=$con->query($stm);
	if ($resp->num_rows > 0) {
		$r=$resp->fetch_assoc();
		if ($r['sv07cdtp'] == $usu) {
			session_start();
			$_SESSION['tok']=$token;
			header("Location: ../Resetpass.php"); 
		}
		else {
			header('Location:index.php');
		}
	}
	else{
		echo "VErga!!";
	}
}


  ?>