<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select u.first_name,u.address,a.area_name,u.email from user u join area a where u.area_id=a.area_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='outdoor_kings' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('first_name','address','area_id','email')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('okwhite.jpeg',7,1,50);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(60,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		
		$pdf->Cell(70,20,"First Name",1);
		//$pdf->Cell(20,20,"Last Name",1);
		$pdf->Cell(70,20,"address",1);
		$pdf->Cell(70,20,"Area name",1);
		$pdf->Cell(70,20,"email",1);
		//$pdf->Cell(20,20,"Number",1);
		//$pdf->Cell(60,20,"registered date",1);
		//$pdf->Cell(60,20,"Contact No",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(70,10,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>