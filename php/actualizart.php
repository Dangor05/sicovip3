<?php

if(!empty($_POST)){

	if (isset($_POST['sv07cdtp']) && isset($_POST['sv07cedt']) && isset($_POST['sv07nomt']) && isset($_POST['sv07apdt']) && isset($_POST['sv07estd']) && isset($_POST['sv07pass']) && isset($_POST['sv07emt']) && isset($_POST['sv05codu']) && isset($_POST['pass2']) ) {

     $sv07cdtp=$_POST['sv07cdtp'];
     $sv07cedt=$_POST['sv07cedt'];
     $sv07nomt=$_POST['sv07nomt'];
     $sv07apdt=$_POST['sv07apdt'];
     $sv07estd=$_POST['sv07estd'];
     $pass=$_POST['sv07pass'];
     $sv05codu=$_POST['sv05codu'];
     $sv07emt=$_POST['sv07emt'];
     $pass2=$_POST['pass2'];

     if ($pass==$pass2) {

     	$sv07pass=sha1($pass);
     		include "conexion.php";
			
			$sql="UPDATE `sv07tpgfo` SET `sv07cedt`='$sv07cedt',`sv07nomt`='$sv07nomt',`sv07apdt`='$sv07apdt',`sv07estd`='$sv07estd',`sv07pass`='$sv07pass',sv07emt='$sv07emt',`sv05codu`='$sv05codu' WHERE `sv07cdtp`='$sv07cdtp'";
			
		 
			$query = $con->query($sql);
			if($query!=null){
				mysqli_close($con);
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../UsuariosMostrar.php';</script>";
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo actualizar.\");window.location='../UsuariosMostrar.php';</script>";

			}
     }else{
     	 print "<script>alert(\"La contraseñas no son igual, por favor escriba bien sus contraseña.\");window.location='../UsuariosMostrar.php';</script>";
     }




		}//Fin del isset

		else{
			echo "aasjdh"; 
		}
		
}


?>