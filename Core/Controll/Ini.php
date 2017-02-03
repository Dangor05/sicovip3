<?php

include ("./Model/Index_model.php");

$inis = new Index_model();

		if (isset($_POST['username']) && isset($_POST['password']) ) {
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$log = array('user' =>$user , 'pass' => $pass );
			$inis->ini($log);
			}
?>