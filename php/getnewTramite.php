<?php

include('conexion.php');

$user_id=null;
$sql1= "SElECT a.sv08conse, DATE_FORMAT(a.sv08fchs,'%d-%m-%Y') AS sv08fchs, a.sv01cedc, a.sv03cedp, a.sv04nfin, a.sv02code, b.sv04apln, b.sv04aact, b.sv04acta FROM sv08trmte a, sv04reqtos b WHERE a.sv04nfin=b.sv04nfin AND a.sv02code='7' ORDER BY a.sv08fchs ASC";
$query = $con->query($sql1);
?>