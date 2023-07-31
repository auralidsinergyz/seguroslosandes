<?php 
session_start();
$data = $_SESSION['data'];
echo $prov = "Proveedores de ".$_SESSION['prov'];
$j=0;
ob_start();
require('http://www.seguroslosandes.com/wp-content/themes/SLA/fpdf/fpdf.php');
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,1);

$pdf->Image('http://www.seguroslosandes.com/wp-content/themes/SLA/fpdf/Logo_SLA.jpg',10,5,60,10,'JPG');

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,88,60);
$pdf->SetY(20);
$pdf->Cell(280,5,utf8_decode($prov),0,0,'C');

$pdf->SetY(25);
$pdf->SetTextColor(255,255,255);
$pdf->SetDrawColor(0, 88, 60);
$pdf->SetFillColor(0, 88, 60);
$pdf->Cell(30,5,utf8_decode('ESTADO'),1,0,'C',true);
$pdf->Cell(30,5,utf8_decode('CIUDAD'),1,0,'C',true);
$pdf->Cell(95,5,utf8_decode('PROVEEDOR'),1,0,'C',true);
$pdf->Cell(30,5,utf8_decode('TELÉFONO'),1,0,'C',true);
$pdf->Cell(95,5,utf8_decode('DIRECCIÓN'),1,0,'C',true);

$pdf->Ln();
foreach($data as $row){
	$j=0;
	foreach($row as $col){
		if($j%2==0){
			if($j==4 || $j==8){
				$pdf->SetFont('Arial','B',6);
				$pdf->SetTextColor(0,0,0);
				//$pdf->SetCellPaddings(1,1,1,1);
				$pdf->Cell(95,5,utf8_decode($col),1,0,'C');
			}else{
				$pdf->SetFont('Arial','B',6);
				$pdf->SetTextColor(0,0,0);
				$pdf->Cell(30,5,utf8_decode($col),1,0,'C');
			}
		}
		$j++;
	}
	$pdf->Ln();
}
$pdf->SetFont('Arial','B',10);
$pdf->SetY(-11);
$pdf->Cell(280,5,utf8_decode('Seguros Los Andes, C.A., Inscrita en la Superintendencia de Seguros, Ministerio del Poder Popular para Economía y Finanzas'),0,0,'C');
$pdf->Ln();
$pdf->Cell(280,5,utf8_decode('bajo el Número 44, Miembro de la Cámara Aseguradora de Venezuela. RIF. J-07001737-6'),0,0,'C');
//$pdf->Cell(50,5,$resultado['campo1'],0,0,'C',true);
$pdf->Output();
ob_end_flush();
?>