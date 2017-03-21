<?php 
include("php/conexion.php");
	$sql1= "SELECT  b.sv03cedp,b.sv03nomp, b.sv03apdp, c.sv04apln,e.sv02code,d.sv09mnt, DATE_FORMAT(d.sv09fvdp ,'%Y/%m/%d') AS sv09fvdp
FROM sv03ptario b, sv04reqtos c, sv09vsdo d, sv08trmte e
 WHERE c.sv04nfin=d.`sv04nfin`
  AND b.sv03cedp=e.sv03cedp
   AND e.`sv08conse`=d.`sv08conse`";

$query = $con->query($sql1);
if($query->num_rows>0)
{
	while ($r=$query->fetch_array()){

		$fchv=$r["sv09fvdp"];
		$fchr=date("d-m-Y");
		echo $r["sv09fvdp"];
		echo "<br>";
		echo $r["sv03cedp"];
		echo "<br>";
		echo $r["sv03nomp"];
		echo "<br>";
		echo $r["sv03apdp"];
		echo "<br>";
		echo $r["sv04apln"];
		echo "<br>";
		if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';}
		echo "<br>";
		echo $r["sv09mnt"];
	}

	$datetime1 = new DateTime($fchv);
$datetime2 = new DateTime("2016/11/08");
$interval = date_diff($datetime1, $datetime2);
$dias=$interval->format('%R%a días');
if ($dias<=5) {?>
		<p class='alert alert-danger'>Por favor realice los cambios respectivos y sirvase a reenviar el correo o presentar en las oficinas para la debida reinspeccion</p>
		
	<?php } else {?>
		<p class='alert alert-info'>Sus documentos no cumplen con  los debidos requisitos para el visado atp</p>
<?php }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
</head>
<body>
		<p class='alert alert-danger'>Por favor realice los cambios respectivos y sirvase a reenviar el correo o presentar en las oficinas para la debida reinspeccion</p>
		
	<?php } else {?>
		<p class='alert alert-info'>Sus documentos no cumplen con  los debidos requisitos para el visado atp</p>
<?php }
}
?>
</body>
</html>