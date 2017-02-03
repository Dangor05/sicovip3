<?php 
include ("./Model/Topo_model.php");
$model = new Topo_Model();

if(isset($_GET['id']) )
		{
			$id=$_GET['id'];

			$model->actUser($id);
		}

 ?>