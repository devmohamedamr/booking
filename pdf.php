<?php
if(!isset($_SESSION))
{
    session_start();
}
$id = $_SESSION['id'];
$name = $_SESSION['ename'];
$phone = $_SESSION['phone'];
$size = $_SESSION['size'];
require('lib/pdf/fpdf.php');
class PDF extends FPDF
{
// Page header
    function Header()
    {

        // Logo
        $this->Image('Design/front/image/aRCHERY.3.jpg',10,6,50);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Funday For Abasia Institute');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','B',15);
        // Page number
        //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        $this->Image('Design/front/image/cs.png',100,150,30);
        $this->Image('Design/front/image/sh.png',50,150,30);
    }
}

// Instanciation of inherited class

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',15);
    $pdf->Cell(0,10,"your id is  $id ",0,1);
    $pdf->Cell(0,10,"your name is  $name ",0,1);
    $pdf->Cell(0,10,"your phone is $phone",0,1);
    $pdf->Cell(0,10,"your size is $size ",0,1);
    if( isset($_SESSION['tshirt'])>0)
    {
        $pdf->Cell(0,10," t-shirt ",0,1);
    }
    if( isset($_SESSION['color'])>0)
    {
        $pdf->Cell(0,10," color ",0,1);
    }
    if( isset($_SESSION['palon'])>0)
    {
        $pdf->Cell(0,10," palon ",0,1);
    }
    if( isset($_SESSION['kalket'])>0)
    {
        $pdf->Cell(0,10," klaket ",0,1);
    }
    $pdf->Cell(70,50,'sponsors ',0,5);
    $pdf->Output();
//Design/front/image/aRCHERY.3.jpg
