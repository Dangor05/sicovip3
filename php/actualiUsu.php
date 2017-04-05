<?php 
if(!empty($_POST)){
     if (isset($_POST['sv07cdtp']) && isset($_POST['sv07cedt']) && isset($_POST['sv07nomt']) && isset($_POST['sv07apdt']) && isset($_POST['sv07pass']) && isset($_POST['sv07emt']) && isset($_POST['valpass']) ) {

          include "conexion.php";
     $sv07cdtp=mysqli_real_escape_string($con,$_POST['sv07cdtp']);
     $sv07cedt=mysqli_real_escape_string($con,$_POST['sv07cedt']);
     $sv07nomt=mysqli_real_escape_string($con,$_POST['sv07nomt']);
     $sv07apdt=mysqli_real_escape_string($con,$_POST['sv07apdt']);
     $pass=mysqli_real_escape_string($con,$_POST['sv07pass']);
     $sv07emt=$_POST['sv07emt'];
     $pass2=$_POST['valpass'];

     if ($pass2==$pass) {
          $sv07pass=sha1($pass);
          $sql="UPDATE sv07tpgfo SET sv07nomt='$sv07nomt',sv07apdt='$sv07apdt',sv07pass='$sv07pass', sv07emt='$sv07emt' WHERE sv07cdtp='$sv07cdtp';";
                     
               $query = $con->query($sql);
               if($query!=null){
                    header("location:../config.php");
                    mysqli_close($con);
               }else{
                    print "<script>alert(\"No se pudo actualizar.\");window.location='../config.php';</script>";

               }
     }    else
     {
          print "<script>alert(\"La contraseñas no son igual, por favor escriba bien sus contraseña.\");window.location='../config.php';</script>";
     }
     } else{

          echo "las vistas!!";
     }
	
}


?>