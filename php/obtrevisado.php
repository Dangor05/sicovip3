<?php 
include ('conexion.php');
//$stm="UPDATE sv08trmte SET sv02code='8' WHERE sv08conse=".$_GET['conse'];
//$sent= $con->query($stm);
//if ($sent!=null) {
	$sql1= "SELECT a.sv09npln, a.sv09nfol, a.sv09npre,a.sv09mnt,
DATE_FORMAT(a.sv09fvdp,'%d-%m-%Y') AS sv09fvdp, a.sv08conse, a.sv01cedc,
a.sv03cedp,a.sv04nfin,a.sv07cdtp, a.sv02code AS impu, b.sv02code AS estado
 FROM sv09vsdo a,  sv08trmte b WHERE a.sv08conse = b.sv08conse AND a.sv03cedp = b.sv03cedp AND b.`sv08conse`= ".$_GET['conse'];
$query = $con->query($sql1);
//}
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