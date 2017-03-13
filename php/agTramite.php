<?php
   include('conexion.php');


if(!empty($_POST))
	{
		$cedpr=mysqli_escape_string($con,$_POST['Cedpr']);
		$cedcli=mysqli_escape_string($con,$_POST['cedc']);
		$conse=mysqli_escape_string($con,$_POST['conse']);
		$nfin=mysqli_escape_string($con,$_POST['fin']);
		$email=mysqli_escape_string($con,$_POST['mail']);
		$plano=$_FILES['pla'];
		$carta=$_FILES['car'];
		$autC=$_FILES['dib'];
		
//$rut ='C:\xampp\htdocs\pruebas\Sicovip\archivos/'.$cedpr.'/';
$dir ='C:\apache\htdocs\SICOVIP\archivos/'.$cedpr.'/';


$sql1 = "INSERT INTO sv04reqtos(sv04nfin,sv04apln,sv04aact,sv04acta) 
VALUES ('$nfin','".$plano['name']."','".$autC['name']."','".$carta['name']."')";
	$query1=$con->query($sql1);
$sql2 = "INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code) 
VALUES ('$conse',NOW(),NOW(),'$cedcli','$cedpr','$nfin','7')";
	$query2=$con->query($sql2);
	if($query2!=null){

		if(file_exists($dir)){

		move_uploaded_file($plano['tmp_name'],$dir.$plano['name']);
		move_uploaded_file($carta['tmp_name'],$dir.$carta['name']);
		move_uploaded_file($autC['tmp_name'],$dir.$autC['name']);
		mysqli_close($con);

		include('phpmailer.php');

		//header("Location:../Home.php");
		header("Location:../reset.php");
			} else{

		mkdir($dir,7055);
		move_uploaded_file($plano['tmp_name'],$dir.$plano['name']);
		move_uploaded_file($carta['tmp_name'],$dir.$carta['name']);
		move_uploaded_file($autC['tmp_name'],$dir.$autC['name']);
		mysqli_close($con);

		include('phpmailer.php');

		unset($cedcli);
		unset($cedpr);
		unset($email);
		header("Location:../reset.php");
			}
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../Tramite.php';</script>";

			}
	}
	else {

		print "<script>alert(\"No se pudo realizar el tramite, por favor revise que todos los datos esten bien.\");window.location='../Tramite.php';</script>";
	}

?>