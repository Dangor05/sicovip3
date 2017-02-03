<?php  
include ("./Model/Cliente_model.php");
$model = new Cliente_model();

		$cedc=$_POST['sv01cedc'];
		$cdtpc=$_POST['sv01cdtpc'];
		$nomc=$_POST['sv01nomc'];
		$apdc=$_POST['sv01apdc'];
		$emc=$_POST['sv01emc'];
		$telc=$_POST['sv01telc'];

		$acCli = array('cedc' =>$cedc ,'cdtpc'=>$cdtpc, 'nomc'=>$nomc, 'apdc'=>$apdc, 'emc'=>$emc, 'telc'=>$telc);
		$model->upCliente($acCli);
?>