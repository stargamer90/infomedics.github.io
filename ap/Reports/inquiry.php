<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select i.customer_name,i.email,i.phone_no,c.category_name from inquiry i join category c where i.category_id=c.category_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='outdoor_kings' 
AND `TABLE_NAME`='booking'
and `COLUMN_NAME` in ('customer_name','email','phone_no','category_name')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('okwhite.jpeg',7,1,50);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(60,10,'Booking List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		
		$pdf->Cell(60,20,"cutomer Name",1);
		$pdf->Cell(60,20,"email",1);
		//$pdf->Cell(70,20,"Created date",1);
		$pdf->Cell(60,20,"phone no",1);
		$pdf->Cell(60,20,"Category Name",1);
		//$pdf->Cell(40,20,"Start Date",1);
		//$pdf->Cell(40,20,"End Date",1);
		//$pdf->Cell(60,20,"Contact No",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(60,10,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>