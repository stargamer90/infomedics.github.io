<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("Select d1.amount
	,n.ngo_name,d.donor_firstname from donation d1 join ngo n join donor d
	where d1.ngo_id = n.ngo_id and d1.donor_id = d.donor_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='welfarefoundation' 
AND `TABLE_NAME`='donation'
and `COLUMN_NAME` in (  'amount' ,  'donor_id' , 'ngo_id' )");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('logo.jpg',10,2,28);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(60,10,'Event List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		
		$pdf->Cell(40,20,"Amount",1);
		
		//$pdf->Cell(70,20,"Created date",1);

		$pdf->Cell(40,20,"Donor name",1);
		$pdf->Cell(40,20,"NGO Name",1);

		//$pdf->Cell(60,20,"Contact No",1);
foreach($result as $row) 
{
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(40,10,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>