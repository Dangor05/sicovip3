<?php 
include("conexion.php");
$last="SELECT MAX(sv10codcon), sv10fech FROM sv10ctlcon;";
$resp = $con->query($last);
$cons=null;
if ($resp->num_rows>=0) {
  while ($r=$resp->fetch_array()) {

    $cons=$r[1]=date("dmY").$r[0];
    
  }
}
 ?>