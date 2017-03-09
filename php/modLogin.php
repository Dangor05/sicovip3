<?php 

	include('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["sv07cdtp"])){
		header("../verlista.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($con,$_POST['usuario']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		
		
		//$sha1_pass = sha1($password);
		
		$sql = "SELECT sv07cdtp, sv05codu, sv07estd  FROM sv07tpgfo WHERE sv07cdtp = '$usuario' AND sv07pass = '$password'";
		$result=$con->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['sv07cdtp'] = $row['sv07cdtp'];
			$_SESSION['sv05codu'] = $row['sv05codu'];
			$std = $row['sv07estd'];
			mysqli_close($con);
			
						if($std==1)
			{
				header("Location: ../Home.php"); 
			}

			else{
			print "<script>alert(\"El usuario no tiene permisos de ingresar al sistema.\");window.location='../Index.php';</script>";
		}
		
			} else {
						print "<script>alert(\"El nombre o contraseña son incorrectos.\");window.location='../index.php';</script>";
		}
	}
?>