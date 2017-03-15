<?php

include "conexion.php";

$user_id=null;
$sql1= "SELECT a.sv09npln, a.sv09nfol, a.sv09npre,a.sv09mnt,
a.sv09fvdp, a.sv08conse, a.sv01cedc,
a.sv03cedp,a.sv04nfin,a.sv07cdtp, a.sv02code, b.sv02code
 FROM sv09vsdo a,  sv08trmte b WHERE a.sv08conse = b.sv08conse AND a.sv03cedp = b.sv03cedp";
$query = $con->query($sql1);
?>