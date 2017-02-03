<?php

include ("./Model/Cliente_model.php");
$model = new Cliente_model();

$id=$_POST['sv01cedc'];

$model->delCliente($id);
  ?>