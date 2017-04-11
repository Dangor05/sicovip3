<?php 
include ("conexion.php");

if (isset($_GET['ced'])) {

		$cedp=$_GET['ced'];
		$sch="SELECT sv03cedp, sv03nomp, sv03apdp, sv03emp, sv03telp, sv06codp FROM sv03ptario WHERE sv03cedp='$cedp'";
	$query=$con->query($sch);
	if ($query->num_rows>0) {
		while ($r=$query->fetch_array()) {
			$ced=$r['sv03cedp'];
			$nom=$r['sv03nomp'];
			$apl=$r['sv03apdp'];
			$eml=$r['sv03emp'];
			$tel=$r['sv03telp'];
			$tip=$r['sv06codp'];
			break;
		}

	}else {
			$ced=null;
			$nom=null;
			$apl=null;
			$eml=null;
			$tel=null;
			$tip=null;
	}

}else{
		$cedp=null;
		$ced=null;
		$nom=null;
		$apl=null;
		$eml=null;
		$tel=null;
		$tip=null;
}


 ?>