<?php 
include ("./Model/Propietario_model.php");

$propei = new Propietario_model();

		$cedp=$_POST['sv03cedp'];
		$nomp=$_POST['sv03nomp'];
		$apdp=$_POST['sv03apdp'];
		$emp=$_POST['sv03emp'];
		$telp=$_POST['sv03telp'];
		$codp=$_POST['sv06codp']; 

		$acPro = array('cedp' =>$cedp,'nomp'=>$nomp, 'apdp'=>$apdp, 'emp'=>$emp,'telp'=>$telp, 'codp'=>$codp);
		$propei->upPropietario($acPro);
 ?>