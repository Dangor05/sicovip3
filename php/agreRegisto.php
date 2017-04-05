<?php 

if(!empty($_POST))
{
	if (isset($_POST['cedt']) && isset($_POST['cit']) && isset($_POST['nomt']) && isset($_POST['apelt']) && isset($_POST['emat']) && isset($_POST['telt']) && isset($_POST['pass']) && isset($_POST['vpass'])) {
			$cedt=$_POST['cedt'];
			$cod=$_POST['cit'];
			$nom=$_POST['nomt'];
			$apel=$_POST['apelt'];
			$eml=$_POST['emat'];
			$tel=$_POST['telt'];
			$pas=$_POST['pass'];
			$vps=$_POST['vpass'];
			include('conexion.php');

			$sch="SELECT sv01cedc FROM sv01clnte WHERE sv01cedc='$cedt'";
			$stm=$con->query($sch);
			if ($stm->num_rows>0) {
				print "<script>alert(\"El usuario ya esta registrado.\");window.location='../registro.php';</script>";
			}else{
				if ($pas==$vps) {

					$pass=sha1($pas);
					$stmt= "INSERT INTO sv01clnte(sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc,sv01pass)VALUES ('$cedt','$cod','$nom','$apel','$eml','$tel','$pass')";
					$sen=$con->query($stmt);
					if ($sen!=null) {
						session_destroy();
						session_start();
					$_SESSION['tp']=$cod;
					$_SESSION['cd']=$cedt;
					$_SESSION['em']=$eml;
						$con->close();
						header("location: ../inicio.php");
		}else{
			print "<script>alert(\"No se pudo registrar.\");window.location='../registro.php';</script>";
		}
				}
				else{
					print "<script>alert(\"Las contraseñas no son igual, por favor, verifique que coincidan.\");window.location='../registro.php';</script>";
				}
				
			}
		}
	

	$sch="SELECT sv01cedc FROM sv01clnte WHERE sv01cedc='$Cedt'";
	$stm=$con->query($sch);
	if ($stm->num_rows>0) {
		          session_start();
                 $_SESSION['Cedt'] = $Cedt;
                 $_SESSION['mail'] = $EmailT;
                 mysqli_close($con);
                 header("Location: ../Propietario.php");
	}else{
    

	$sql1 = "INSERT INTO sv01clnte(sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc) 
	VALUES ('$Cedt','$CodIT','$NomT','$ApelT','$EmailT','$TelT')";
	


	$query1=$con->query($sql1);

	if($query1!=null){
		                
                 session_start();
                 $_SESSION['Cedt'] =   $Cedt;
                 $_SESSION['mail'] = $EmailT;
                 mysqli_close($con);
                 header("Location: ../Propietario.php"); 
			}else{
				mysqli_close($con);
				echo "Error";
				//print "<script>alert(\"No se pudo agregar.\");window.location='../Cliente.php';</script>";

			}
}
}

?>