<?php 
include ("./Model/Topo_model.php");
$model = new Topo_Model();

	if(isset($_POST['sv07cdtp']) && isset($_POST['sv07cedt']) && isset($_POST['sv07nomt']) && isset($_POST['sv07apdt']) && isset($_POST['sv07estd']) && isset($_POST['sv07pass']) && isset($_POST['sv05codu']))
		{
		$cdtp=$_POST['sv07cdtp'];
		$cedt=$_POST['sv07cedt'];
		$nomt=$_POST['sv07nomt'];
		$apdt=$_POST['sv07apdt'];
		$estd=$_POST['sv07estd'];
		$pass=$_POST['sv07pass'];
		$codu=$_POST['sv05codu'];

		$upd = array('cod' =>$cdtp , 'ced'=>$cedt , 'nom'=> $nomt, 'apd'=>$apdt, 'estd'=>$estd, 'pass'=> $pass, 'codu'=>$codu);

		$model->updUser($upd);
}
 ?>