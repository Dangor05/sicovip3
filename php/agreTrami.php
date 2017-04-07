<?php 
if (!empty($_FILES['pln']) && !empty($_FILES['car']) && !empty($_FILES['dib']) && !empty($_POST['conse']) && !empty($_POST['fin']) && !empty($_POST['pr']) && !empty($_POST['cedc']) && !empty($_POST['mail']) ) {

	if (isset($_POST['conse']) && isset($_POST['fin']) && isset($_POST['pr']) && isset($_POST['cedc']) &&isset($_POST['mail']) && isset($_FILES['pln']) && isset($_FILES['car']) && isset($_FILES['dib'])) {
		
		include ("conexion.php");

		$conse=$_POST['conse'];
		$cedpr=$_POST['pr'];
		$cedcli=$_POST['cedc'];
		$nfin=$_POST['fin'];
		$email=$_POST['mail'];
		$pln=$_FILES['pln']['name'];
		$apln=$_FILES['pln'];
		$car=$_FILES['car']['name'];
		$crta=$_FILES['car'];
		$dib=$_FILES['dib']['name'];
		$aut=$_FILES['dib'];
		$path='C:\apache\htdocs\SICOVIP\archivos/'.$cedpr.'/';

		$stm="INSERT INTO sv04reqtos(sv04nfin,sv04apln,sv04aact,sv04acta)VALUES ('$nfin','$pln','$dib','$car')";
		$stmt="INSERT INTO sv08trmte(sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)VALUES ('$conse',NOW(),NOW(),'$cedcli','$cedpr','$nfin','7')";
		$exec=$con->query($stm);
		$exct=$con->query($stmt);
		if ($stm!=NULL && $stmt!=NULL) {
					if(file_exists($path)){

		move_uploaded_file($apln['tmp_name'],$path.$pln);
		move_uploaded_file($crta['tmp_name'],$path.$car);
		move_uploaded_file($aut['tmp_name'],$path.$dib);
		$con->close();

		include('phpmailer.php');


		header("Location:../inicio.php");
		} else{

		mkdir($path,7055);
		move_uploaded_file($apln['tmp_name'],$path.$pln);
		move_uploaded_file($crta['tmp_name'],$path.$car);
		move_uploaded_file($aut['tmp_name'],$path.$dib);
		$con->close();



		include('phpmailer.php');

		     session_start();
		     unset($_SESSION['pr']);
		     header("Location:../inicio.php");
			}
		}
	}else{
		echo "algo no existe";
	}
}else{
	echo "algo viene vacio";
}

 ?>