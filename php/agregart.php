<?php

if(!empty($_POST)){

include "conexion.php";
     
     $sv07cdtp=$_POST['svcdtp'];
     $sv07cedt=$_POST['svcedt'];
     $sv07nomt=$_POST['svnomt'];
     $sv07apdt=$_POST['svapdt'];
     $sv07estd=$_POST['svestd'];
     $pass=$_POST['sv07pass'];
     $sv07emt=$_POST['svemt'];
     $sv05codu=$_POST['svcodu'];

     $sv07pass=sha1($pass);
       $sql =  "INSERT INTO sv07tpgfo (sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv07emt,sv05codu) values 
        ('$sv07cdtp','$sv07cedt','$sv07nomt','$sv07apdt','$sv07estd','$sv07pass','$sv07emt','$sv05codu')";



			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Agregado exitosamente.\");window.location='../UsuariosMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../UsuariosMostrar.php';</script>";

			}
		//}
	}	
//}



?>