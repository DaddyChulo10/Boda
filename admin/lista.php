<?php
require_once('pdf/fpdf.php');
include('php/conexion/conexion.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30, 0, 'Lista de Invitados', 0, 0, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);

$consult = $conexion->query("SELECT * FROM invitados");

foreach ($consult as $row) {
    $pdf->Cell(0, 7, utf8_decode('- Nombre: '. $row['familia'].' Por parte de: '.$row['novios'] .' Invitados: '.$row['invitados'].' Niños: '.$row['niños'] ), 0, 1);
}


$pdf->Output();
