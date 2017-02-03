<?php 
include ("./Model/Tramite_model.php");
$model = new Tramite_model();

		$cedpr=$_POST['Cedpr'];
		$cedcli=$_POST['cedc'];
		$con=$_POST['conse'];
		$nfin=$_POST['fin'];
		$eml=$_POST['mail'];
		$plan=$_FILES['pla']['name'];
		$pln=$_FILES['pla'];
		$crt=$_FILES['car']['name'];
		$crta=$_FILES['car'];
		$aut=$_FILES['dib']['name'];
		$dib=$_FILES['dib'];

		$agTra = array('cedp' => $cedpr,'cedc'=>$cedcli, 'cons'=>$con, 'nfin'=>$nfin, 'eml'=>$eml,'pln'=>$plan, 'cta'=>$crt, 'aut'=>$aut);
		
		$model->addTramite($agTra);
 ?>