<?php 
include("conexion.php");
$cn=$_GET['con'];
$user=$_GET['nfin'];
$sql1= "SELECT a.sv04nfin, a.sv04apln,a.sv04aact,a.sv04acta, c.sv03cedp FROM sv04reqtos a, sv08trmte b, sv03ptario c 
WHERE a.sv04nfin =b.sv04nfin 
AND c.sv03cedp= b.sv03cedp 
AND a.sv04nfin ='$user' ";
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}
}


?>