<?php 
include ('conexion.php');
$stm="UPDATE sv08trmte SET sv02code='8' WHERE sv08conse=".$_GET['conse'];
$sent= $con->query($stm);
if ($sent!=null) {
	$sql1= "SELECT sv08conse, sv01cedc, sv03cedp, sv04nfin, sv02code FROM sv08trmte WHERE sv08conse = ".$_GET['conse'];
$query = $con->query($sql1);
}
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
  $con->close();
  $query->close();
   ?>