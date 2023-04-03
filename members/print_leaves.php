<?php 
// include('lib/dbcon.php');
require('pdf/fpdf.php');
// include('pdf/fpdf.php');
$conn = mysqli_connect('localhost','root','','rockwell') or die("cannot connect to the database");


// $db = new dbObj();

$heading = array('id'=>'ID', 'fname'=>'First Name','lname'=>'Last Name','requested'=>'Requested','LeaveType'=>'Leave Type','ToDate'=>'To Date','FromDate'=>'From Date','file'=>'File','Description'=>'Description','Status'=>'Status');
$result = mysqli_query($conn,"select * from leaves");
$data = mysqli_query($conn, "show columns from leaves");

// $pdf = new PDF();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
foreach($data as $new_header){
    $pdf->Cell(20,10,$heading[$new_header['Field']],1);
}
foreach($result as $row){
    $pdf->Ln();
    foreach($row as $column){
        $pdf->cell(20,10,$column,1);
    }
}
$pdf->Output();
?> 