<?php

require('fpdf/fpdf.php');
include('php/conexion.php');
$sql=" SELECT DISTINCT  a.`sv03cedp`, a.`sv03nomp`, a.`sv03apdp`,
                         b.`sv04nfin`,b.`sv04apln`,b.`sv04aact`,b.sv04acta, d.sv08fchs,
                         e.`sv08conse`,e.`sv09npln`,e.`sv09nfol`,e.`sv09npre`,e.`sv09fvdp`,e.`sv09mnt`,e.`sv02code`,e.`sv07cdtp`
 
 FROM sv03ptario a, sv04reqtos b, sv06tipprop c, sv08trmte d,sv09vsdo e, `sv05tipusu` u
  
 WHERE d.`sv03cedp`= a.`sv03cedp`
 AND e.`sv08conse`= d.`sv08conse`
 AND  u.`sv05codu`= e.`sv05codu`
 AND b.`sv04nfin` = e.`sv04nfin`
";
$query=mysqli_query($con,$sql) or die(mysqli_error());

$pdf = new FPDF();
$pdf->AddPage();
$y_axis_initial = 25;

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(100,6,'Topografo registro de visados',1,0,'C');

$pdf->Ln(10);
$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'Cedula',1,0,'C',1);
$pdf->Cell(30,6,'Nombre',1,0,'C',1);
$pdf->Cell(40,6,'Apellidos',1,0,'C',1);
$pdf->Cell(30,6,'N Finca',1,0,'C',1);
$pdf->Cell(40,6,'F.Solicitud',1,0,'C',1);
$pdf->Cell(30,6,'Consecutivo',1,0,'C',1);
$pdf->Cell(60,6,'N plano',1,0,'C',1);
$pdf->Cell(30,6,'N Folio',1,0,'C',1);
$pdf->Cell(60,6,'N predio',1,0,'C',1);
$pdf->Cell(30,6,'FVisado',1,0,'C',1);
$pdf->Cell(30,6,'Minuta',1,0,'C',1);
$pdf->Cell(40,6,'Estado',1,0,'C',1);
$pdf->Cell(30,6,'Topog',1,0,'C',1);



$pdf->Ln(10);


while ($row=mysqli_fetch_array($query)) { 

	
	
	            $Cedula=$row['sv03cedp'];
				$Nombre=$row['sv03nomp'];
				$Apellidos=$row['sv03apdp'];
				$NFinca=$row['sv04nfin'];
				$FSolicitud=$row['sv08fchs'];
				$Consecutivo=$row['sv08conse'];
				$Nplano=$row['sv09npln'];
				$NFolio=$row['sv09nfol'];
				$Npredio=$row['sv09npre'];
				$FVisado=$row['sv09fvdp'];
				$Minuta=$row['sv09mnt'];
				$Estado=$row['sv02code'];
				$Topog=$row['sv07cdtp'];

	$pdf->Cell(10,15,$Cedula,1,0,'L',0);
	$pdf->Cell(20,15,$Nombre,1,0,'L',0);
	$pdf->Cell(30,15,$Apellidos,1,0,'L',0);
	$pdf->Cell(10,15,$NFinca,1,0,'L',0);
	$pdf->Cell(20,15,$FSolicitud,1,0,'L',0);
	$pdf->Cell(10,15,$Consecutivo,1,0,'L',0);
	$pdf->Cell(20,15,$Nplano,1,0,'L',0);
	$pdf->Cell(15,15,$NFolio,1,0,'L',0);
	$pdf->Cell(15,15,$Npredio,1,0,'L',0);
	$pdf->Cell(10,15,$FVisado,1,0,'L',0);
	$pdf->Cell(20,15,$Minuta,1,0,'L',0);
	$pdf->Cell(8,15,$Estado,1,0,'L',0);
	$pdf->Cell(10,15,$Topog,1,0,'L',0);


	$pdf->Ln(15); 

}
	mysqli_close($con);
	$pdf->Output();




?>