<?php 
include('conexion.php');
if (!empty($_POST['cedp']) && !empty($_POST['nomp']) && !empty($_POST['apelp']) && !empty($_POST['emap']) && !empty($_POST['telp']) && !empty($_POST['tipro']) ) {

	if (isset($_POST['cedp']) && isset($_POST['nomp']) && isset($_POST['apelp']) && isset($_POST['emap']) && isset($_POST['telp']) && isset($_POST['tipro']) ) {
	
	$cedp=$_POST['cedp'];
	$nomp=$_POST['nomp'];
	$apelp=$_POST['apelp'];
	$emlp=$_POST['emap'];
	$telp=$_POST['telp'];
	$tipro=$_POST['tipro'];

	$sch="SELECT sv03cedp FROM sv03ptario WHERE sv03cedp='$cedp'";
	$stm=$con->query($sch);
	if ($stm->num_rows>0) {
                 session_start();
                 $_SESSION['pr'] = $cedp;
                 mysqli_close($con);
				header("Location: ../Tramite.php"); 
	}else{

	$stm=$con->prepare("CALL AgregarPropietario(?,?,?,?,?,?)");
	$stm->bind_param("ssssii",$cedp,$nomp,$apelp,$emlp,$telp,$tipro);
	$stm->execute();
	$stm->close();
	if ($stm->error) {
		echo "Fallo al agregar";
	}else{
		session_start();
		$_SESSION['pr']=$cedp;
		header("location: ../tramit.php");
	}
}
}
else{
	echo "No es el isset";
}
}
else{
	echo "es el empty";
}

 ?>