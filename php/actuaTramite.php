<?php 
include ('conexion.php');
if (!empty($_FILES) && !empty($_POST)) {
	if(isset($_POST['conse']) && isset($_POST['nfin']) && isset($_POST['cedp']) && isset($_FILES['pln']) && isset($_FILES['aact']) && isset($_FILES['acta']) && isset($_POST['opcion']))
	{
		$path="C:\apache\htdocs\SICOVIP\archivos/".$_POST['cedp']."\ ";
		$opcion=$_POST['opcion'];
		$sv08conse=$_POST['conse'];
		$sv03cedp=$_POST['cedp'];
		$sv04nfin=$_POST['nfin'];
		$sv04apl=$_FILES['pln'];
		$apl=$_FILES['pln']['name'];
		$sv04acta=$_FILES['acta'];
		$acta=$_FILES['acta']['name'];
		$sv04aact=$_FILES['aact'];
		$aact=$_FILES['aact']['name'];

		if ($opcion==1) {
			$stm=$con->prepare("UPDATE sv04reqtos SET sv04apln=?, sv04aact=?, sv04acta=? WHERE sv04nfin=?");
			$stm->bind_param("ssss",$sv04nfin, $apl, $aact, $acta);
			$stm->execute();
			if ($stm->error) {
			print "<script>alert(\"Jodase!!\");window.location='../Home.php';</script>";
		}else{
		move_uploaded_file($sv04apl['tmp_name'],$path.$apl);
		move_uploaded_file($sv04acta['tmp_name'],$path.$acta);
		move_uploaded_file($sv04aact['tmp_name'],$path.$aact);
		$stm->close();
		$con->close();
		print "<script>alert(\"Agregado exitosamente.\");window.location='../Home.php';</script>";
		}
		}
		elseif ($opcion==2) {
					$sql ="UPDATE sv04reqtos SET sv04apln='".$sv04apl['name']."' WHERE sv04nfin='$sv04nfin'";
					$query=$con->query($sql);
					if($query!=null){
						move_uploaded_file($sv04apl['tmp_name'],$path.$apl);
						mysqli_close($con);
						print "<script>alert(\"Exito!!.\");window.location='../Home.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"A la Verga!!.\");window.location='../Home.php';</script>";

			}
					}
		elseif ($opcion==3) {
					$sql1 = "UPDATE sv04reqtos SET sv04aact='$aact' WHERE sv04nfin='$sv04nfin'";
			$query1=$con->query($sql1);
				if($query1!=null){
		move_uploaded_file($sv04aact['tmp_name'],$path.$aact);
		mysqli_close($con);

				print "<script>alert(\"Agregado exitosamente.\");window.location='../Home.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"Mierda.\");window.location='../Home.php';</script>";

			}
		}
		elseif ($opcion==4) {
			$sql1 = "UPDATE sv04reqtos SET sv04acta='$acta' WHERE sv04nfin='$sv04nfin'";
			$query1=$con->query($sql1);
			if($query1!=null){
				move_uploaded_file($sv04acta['tmp_name'],$path.$acta);
				mysqli_close($con);

				print "<script>alert(\"Agregado exitosamente.\");window.location='../Home.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"Verga.\");window.location='../Home.php';</script>";

			}
		}


		//$sql="UPDATE sv04reqtos SET sv04apl='$apl', sv04aact='$aact', sv04acta='$acta' WHERE sv04nfin='$sv04nfin'";

		/*$stm=$con->prepare("UPDATE sv04reqtos SET sv04apl=?, sv04aact=?, sv04acta=? WHERE sv04nfin=?");
		$stm->bind_param("ssss",$sv04nfin, $apl, $aact, $acta);
		$stm->execute();
		if ($stm->error) {
			print "<script>alert(\"No se pudo.\");window.location='../Home.php';</script>";
		}else{
		move_uploaded_file($sv04apl['tmp_name'],$path.$apl);
		move_uploaded_file($sv04acta['tmp_name'],$path.$acta);
		move_uploaded_file($sv04aact['tmp_name'],$path.$aact);
		$stm->close();
		$con->close();
		print "<script>alert(\"Agregado exitosamente.\");window.location='../Home.php';</script>";
		}*/

	}
}


 ?>