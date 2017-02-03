<?php 
include ("./Model/visado_model.php");
$model = new Visado_model();

if (isset($_POST['sv09npln']) && isset($_POST['sv09nfol']) && isset($_POST['sv09npre'])
	 && isset($_POST['sv09fvdp']) && isset($_POST['sv09fumv']) && isset($_POST['sv08conse']) 
	 && isset($_POST['sv01cedc']) && isset($_POST['sv03cedp']) && isset($_POST['sv04nfin']) 
	 && isset($_POST['sv02code']) && isset($_POST['sv07cdtp']) && isset($_POST['sv05codu'])) 
	{

	$npln=$_POST['sv09npln'];
	$nfol=$_POST['sv09nfol'];
	$npre=$_POST['sv09npre'];
	$mnt=$_FILES['sv09mnt']['name'];
	$mntd= $_FILES['sv09mnt'];
	$fvdp=$_POST['sv09fvdp'];
	$conse=$_POST['sv08conse'];
	$cedc=$_POST['sv01cedc'];
	$cedp=$_POST['sv03cedp'];
	$nfin=$_POST['sv04nfin'];
	$code=$_POST['sv02code'];
	$cdtp=$_POST['sv07cdtp'];
	$codu=$_POST['sv05codu'];

	$agVis = array('npla' =>$npln, 'nfol'=>$nfol, 'npre'=> $npre,'$mnt'=>$mnt, 'fvdp'=>$fvdp, 'conse'=>$conse,
	             'cedc'=>$cedc, 'cedp'=>$cedp, 'nfin'=>$nfin, 'code'=>$code, 'cdtp'=>$cdtp, 'codu'=>$codu);
	$model->addVisado($vis);
	if ($mntd!=null) {
	 	$model->agreMinuta($cedp,$mntd);
	 }
	 }

 ?>