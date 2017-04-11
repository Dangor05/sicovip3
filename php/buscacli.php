<?php 
include ("conexion.php");

if (isset($_GET['ced'])) {

		$cedp=$_GET['ced'];
		$sch="SELECT sv01cedc, sv01cdtpc, sv01nomc, sv01apdc, sv01emc, sv01telc FROM sv01clnte WHERE sv01cedc='$cedp'";
	$query=$con->query($sch);
	if ($query->num_rows>0) {
		while ($r=$query->fetch_array()) {
			$ced=$r['sv01cedc'];
			$cit=$r['sv01cdtpc'];
			$nom=$r['sv01nomc'];
			$apl=$r['sv01apdc'];
			$eml=$r['sv01emc'];
			$tel=$r['sv01telc'];
			break;
		}

	}else {
			$ced=null;
			$nom=null;
			$apl=null;
			$eml=null;
			$tel=null;
			$cit=null;
	}

}else{
		$cedp=null;
			$ced=null;
			$nom=null;
			$apl=null;
			$eml=null;
			$tel=null;
			$cit=null;
}


 ?>