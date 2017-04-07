<?php

if(!empty($_POST)){
	if (isset($_POST['sv09npln']) && isset($_POST['sv09nfol']) && isset($_POST['sv09npre']) && isset($_FILES['sv09mnt']) && isset($_POST['sv09fvdp']) && isset($_POST['sv08conse']) && isset($_POST['sv01cedc']) && isset($_POST['sv03cedp']) && isset($_POST['sv04nfin']) && isset($_POST['sv02code']) && isset($_POST['sv02std']) && isset($_POST['sv07cdtp']))
	 {

		include "conexion.php";

$sv09npln=$_POST['sv09npln'];   
$sv09nfol=$_POST['sv09nfol'];   
$sv09npre=$_POST['sv09npre'];   
$sv09mnt=$_FILES['sv09mnt'];    
$sv09fvdp=$_POST['sv09fvdp'];   
//$sv09fumv=$_POST['sv09fumv'];//revisar 
$sv08conse=$_POST['sv08conse'];   
$sv01cedc=$_POST['sv01cedc'];  
$sv03cedp=$_POST['sv03cedp'];	
$sv04nfin=$_POST['sv04nfin']; 
$sv02code=$_POST['sv02code']; 		
$sv07cdtp=$_POST['sv07cdtp']; 
$sv05codu=$_POST['sv05codu'];
$sv04apln=$_FILES['sv04plan'];
$sv02std=$_POST['sv02std'];



//$dir ='C:\xampp\htdocs\pruebas\Sicovip\archivos/'.$sv03cedp.'/';
$dir ='C:\apache\htdocs\SICOVIP\archivos/'.$sv03cedp.'/';


$sql = "INSERT INTO sv09vsdo (sv09npln,sv09nfol,sv09npre,sv09mnt,sv09fvdp,sv09fumv,sv08conse,sv01cedc,sv03cedp,sv04nfin,sv02code,sv07cdtp,sv05codu) values 
                                      ('$sv09npln','$sv09nfol','$sv09npre','".$sv09mnt['name']."','$sv09fvdp',NOW(),'$sv08conse','$sv01cedc','$sv03cedp','$sv04nfin','$sv02code','$sv07cdtp','$sv05codu')";

$consu = "INSERT INTO sv08trmte (sv08conse,sv08fchs,sv08fumt,sv01cedc,sv03cedp,sv04nfin,sv02code)VALUES ('$sv08conse',NOW(), NOW(),'$sv01cedc','$sv03cedp','$sv04nfin','$sv02std')";
$stmt="INSERT INTO sv04reqtos (sv04nfin) values('$sv04nfin')";

if ($sv04apln!=null) {
	$stm ="INSERT INTO sv04reqtos (sv04nfin, sv04apln) values('$sv04nfin','".$sv04apln['name']."')";

	$exec=$con->query($stm);
	$senten=$con->query($consu);
	$query=$con->query($sql);
	

		if($query!=null && $senten!=null && $exec!=null){
		move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
		move_uploaded_file($sv04apln['tmp_name'],$dir.$sv04apln['name']);		
		mysqli_close($con);

	header("Location:../VisadoMostrar.php");
}else{
	$con->close();
	//print "<script>alert(\"No se pudo Agregar.\");window.location='../VisadoMostrar.php';</script>";
	echo"Es la otra cosa";
}

	}


	else{
			$exec=$con->query($stmt);
			$senten=$con->query($consu);
			$query=$con->query($sql);
			
			if($exec!=null && $query!=null && $senten!=null){
			move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
			$con->close();
			header("Location:../VisadoMostrar.php");
			}else{
			$con->close();
				//print "<script>alert(\"No se pudo agregar.\");window.location='../VisadoMostrar.php';</script>";

			}
	}
	
}
}

?>
	