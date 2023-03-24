<?php
$id = $_GET['id'];
include('config.php');
$database = new Database();
if($id == 0)
{
$result = $database->runQuery("SELECT u.first_name ,u.last_name , a.area_name , p.package_name , c.category_name , 
       b.start_date , b.end_date from package p,area a,user u,category c,booking b 
		where p.package_id=b.package_id and a.area_id=b.area_id and 
		u.user_id=b.user_id and c.category_id=b.category_id");
}
else
{
$result = $database->runQuery("SELECT u.first_name ,u.last_name , a.area_name , p.package_name , c.category_name , 
       b.start_date , b.end_date from package p,area a,user u,category c,booking b 
		where p.package_id=b.package_id and a.area_id=b.area_id and 
		u.user_id=b.user_id and c.category_id=b.category_id	and b.category_id=$id");

}
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='outdoor_kings' 
AND `TABLE_NAME`='booking'
and `COLUMN_NAME` in ('first_name','category_name','package_name','area_name','start_date','end_date')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('okwhite.jpeg',7,1,50);
    // Move to the right
    $pdf->Cell(80);			
    // Title
	if($id==0)
	{
		$pdf->Cell(60,10,'All Booking List',1,0,'C');
    }
	else
	{
		$pdf->Cell(60,10,'Category wise Booking List',1,0,'C');
	}
	
	// Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		
		$pdf->Cell(40,20,"First Name",1);
		$pdf->Cell(40,20,"Last Name",1);
		$pdf->Cell(40,20,"Area Name",1);
		$pdf->Cell(40,20,"Package name",1);
		$pdf->Cell(40,20,"Category Name",1);
		//$pdf->Cell(70,20,"Created date",1);
		$pdf->Cell(40,20,"Start Date",1);
		$pdf->Cell(40,20,"End Date",1);
		//$pdf->Cell(60,20,"Contact No",1);
foreach($result as $row) {
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