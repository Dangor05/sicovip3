<?php 

	include('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["sv07cdtp"])){
		header("../Home.php");
	}
	//print "<script>alert(\"El nombre o contraseña son incorrectos.\");window.location='../index.php';</script>";
	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($con,$_POST['usuario']);
		$pass = mysqli_real_escape_string($con,$_POST['password']);
		
		
		$password = sha1($pass);
		
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
				//print "<script>alert(\"El nombre o contraseña son incorrectos.\");window.location='../index.php';</script>";
				$stm="SELECT sv01cdtpc, sv01cedc, sv01nomc, sv01emc  FROM sv01clnte WHERE sv01cdtpc = '$usuario' AND sv01pass = '$password'";
				$res=$con->query($stm);
				$rows=$res->num_rows;
				if ($rows>0) {
					$f=$res->fetch_assoc();
					$_SESSION['tp']=$f['sv01cdtpc'];
					$_SESSION['cd']=$f['sv01cedc'];
					$_SESSION['em']=$f['sv01emc'];
					$con->close();
					//$stm->close();
					header("location:../inicio.php");
				}
				print "<script>alert(\"El nombre o contraseña son incorrectos.\");window.location='../index.php';</script>";
			}
	}
?>