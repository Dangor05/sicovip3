<?php 
include ("./Model/Topo_model.php");
$model = new Topo_Model();

	 $cdtp=$_POST['sv07cdtp'];
     $cedt=$_POST['sv07cedt'];
     $nomt=$_POST['sv07nomt'];
     $apdt=$_POST['sv07apdt'];
     $pass=$_POST['sv07pass'];

     $act = array('cod' =>$cdtp , 'ced'=>$cedt , 'nom'=> $nomt, 'apd'=>$apdt, 'pass'=> $pass);
     
     $model->upUse($act);
 ?>