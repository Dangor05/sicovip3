<?php
include('conexion.php');
if(!empty($_POST)){
	if(isset($_POST['npln']) && isset($_POST['nfol']) && isset($_POST['npred']) && isset($_POST['fch']) && isset($_POST['conse']) && isset($_POST['cedc']) && isset($_POST['cedp']) && isset($_POST['nfin']) && isset($_POST['impu'])&& isset($_POST['cit']) && isset($_POST['codu']) && isset($_POST['std']))
	{
$npln=$_POST['npln'];   
$nfol=$_POST['nfol'];   
$npre=$_POST['npred'];   
$mnt=$_FILES['mnt'];    
$fvdp=$_POST['fch'];   
$conse=$_POST['conse'];   
$cedc=$_POST['cedc'];  
$cedp=$_POST['cedp'];	
$nfin=$_POST['nfin']; 
$impu=$_POST['impu']; 		
$cdtp=$_POST['cit']; 
$codu=$_POST['codu'];
$code=$_POST['std'];

$dir ='C:\apache\htdocs\SICOVIP\archivos/'.$cedp.'/';

			$sql = "INSERT INTO sv09vsdo (sv09npln,sv09nfol,sv09npre,sv09mnt,sv09fvdp,sv09fumv,sv08conse,sv01cedc,sv03cedp,sv04nfin,sv02code,sv07cdtp,sv05codu) 
			values ('$npln','$nfol','$npre','".$mnt['name']."','$fvdp',NOW(),'$conse','$cedc','$cedp','$nfin','$impu','$cdtp','$codu')";

			$consu = "UPDATE sv08trmte SET sv02code ='$code' WHERE  sv08conse='$conse'";


			$query=$con->query($sql);
			$senten=$con->query($consu);
			if($query!=null && $senten!=null){
		move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
		
		mysqli_close($con);

	header("Location:../Home.php");
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../Home.php';</script>";

			}
		/*}*/
	}
	else{
		echo "ay";
	}
}

?>