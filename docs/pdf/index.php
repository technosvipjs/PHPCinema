<?php
require 'fpdf.php';

class PDF extends FPDF
{
    
function Header()
{

    $this->Image('images/logo.jpg',10,6,30);

    $this->SetFont('Arial','B',15);

    $this->Cell(80);

    $this->Cell(55,10,'Your Movie Ticket',1,0,'C');

    $this->Ln(20);
}


function Footer()
{
    
    $this->SetY(-18);

    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',15);

$pdf->Cell(0,16,'Thank you for your Purchase.',0,1);
$pdf->Cell(0,16,'The movie "Matrix Revolution 3D" is schedualed for 21/10/2014',0,1);
$pdf->Cell(0,16,'Your tickets are for line 6, seats 4-5',0,1);
$pdf->Cell(0,16,'Enjoy your Movie.',0,1);
$pdf->Cell(0,16,'Israeli Scam Tickets Inc.',0,1);

$pdf->Image('images/tickets.jpg',60,130,80);

$pdf->Output();
?>


