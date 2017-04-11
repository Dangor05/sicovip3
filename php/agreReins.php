<?php 
include ('conexion.php');
if (!empty($_FILES) && !empty($_POST)) {
	if(isset($_POST['nfin'])) {
	 if (isset($_POST['cedp'])) {
	  	if (isset($_FILES['pln'])) {
	  		if (isset($_FILES['aact'])) {
	  			if (isset($_FILES['acta'])) {
	  				if (isset($_POST['opcion'])) {
	  							$path="C:\apache\htdocs\SICOVIP\archivos/".$_POST['cedp']."\ ";
		$opcion=$_POST['opcion'];
		//$sv08conse=$_POST['conse'];
		$sv03cedp=$_POST['cedp'];
		$sv04nfin=$_POST['nfin'];
		$sv04apl=$_FILES['pln'];
		$apl=$_FILES['pln']['name'];
		$sv04acta=$_FILES['acta'];
		$acta=$_FILES['acta']['name'];
		$sv04aact=$_FILES['aact'];
		$aact=$_FILES['aact']['name'];

				$stmt="SELECT sv04apln, sv04aact, sv04acta FROM sv04reqtos WHERE sv04nfin='$sv04nfin'";
		$exec=$con->query($stmt);
		if($exec->num_rows>0) {
			while ($r=$exec->fetch_array()) {
				$cart=$r['sv04acta'];
				$dib=$r['sv04aact'];
				$pln=$r['sv04apln'];
				break;				
			}
		}

		if ($opcion==1) {
			$stm=$con->prepare("UPDATE sv04reqtos SET sv04apln=?, sv04aact=?, sv04acta=? WHERE sv04nfin=?");
			$stm->bind_param("ssss", $apl, $aact, $acta,$sv04nfin);
			$stm->execute();
			if ($stm->error) {
			print "<script>alert(\"Jodase!!\");window.location='../verlista.php';</script>";
		}else{
		move_uploaded_file($sv04apl['tmp_name'],$path.$apl);
		move_uploaded_file($sv04acta['tmp_name'],$path.$acta);
		move_uploaded_file($sv04aact['tmp_name'],$path.$aact);
		$stm->close();
		$con->close();
		print "<script>alert(\"Agregado exitosamente.\");window.location='../verlista.php';</script>";
		}
		}
		elseif ($opcion==2) {
			echo $apl;
					$sql ="UPDATE sv04reqtos SET sv04apln='$apl', sv04aact='$dib', sv04acta='$cart' WHERE sv04nfin='$sv04nfin'";
					$query=$con->query($sql);
					if($query!=null){
						move_uploaded_file($sv04apl['tmp_name'],$path.$apl);
						mysqli_close($con);
						print "<script>alert(\"Exito!!.\");window.location='../verlista.php';</script>";
						
			}else{
				mysqli_close($con);
				print "<script>alert(\"A la Verga!!.\");window.location='../verlista.php';</script>";

			}
					}
		elseif ($opcion==4) {
					$sql1 = "UPDATE sv04reqtos SET sv04apln='$pln', sv04aact='$aact', sv04acta='$cart' WHERE sv04nfin='$sv04nfin'";
			$query1=$con->query($sql1);
				if($query1!=null){
		move_uploaded_file($sv04aact['tmp_name'],$path.$aact);
		mysqli_close($con);

			print "<script>alert(\"Agregado exitosamente.\");window.location='../verlista.php';</script>";
		
			}else{
				mysqli_close($con);
				print "<script>alert(\"Mierda.\");window.location='../verlista.php';</script>";

			}
		}
		elseif ($opcion==3) {
			$sql1 = "UPDATE sv04reqtos SET sv04apln='$pln', sv04aact='$dib', sv04acta='$acta' WHERE sv04nfin='$sv04nfin'";
			$query1=$con->query($sql1);
			if($query1!=null){
				move_uploaded_file($sv04acta['tmp_name'],$path.$acta);
				mysqli_close($con);

				print "<script>alert(\"Agregado exitosamente.\");window.location='../verlista.php';</script>";
				echo "yes";
			}else{
				mysqli_close($con);
				print "<script>alert(\"Verga.\");window.location='../verlista.php';</script>";

			}
		}
	  				}else{echo "es la opcio";}
	  			}else{echo "es la acta";}
	  		}else{echo "es el aact";}
	  	}else{echo "es el plano";}
	  } else{echo "es la cedula";} 
	} else{echo "es la finca";}
	
}


 ?>