
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logosreportes/adm.png',15,8,33);
     $this->Ln(10);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'REPORTE ADMINISTRADORES',0,0,'C');
      $this->Ln(20);
    $this->Cell(40,10,'Fecha y Hora:' .date("d-m-Y / H:i:s").'',0);
    
    // Salto de línea
    $this->Ln(20);
    $this->Cell(20,10,'ID',1,0,'C',0);
    $this->Cell(35,10,'NOMBRE',1,0,'C',0);
    $this->Cell(35,10,'APELLIDO',1,0,'C',0);
    $this->Cell(55,10,'DIRECCION',1,0,'C',0);
    $this->Cell(35,10,'TELEFONO',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',12);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
    
    
}
}
require 'conectreportBD.php';
$consulta = "SELECT * FROM adm";
$resultado= $mysqli->query($consulta);



$pdf = new PDF();
$pdf->AliasNbpages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);

while ($row= $resultado->fetch_assoc()){
    $pdf->Cell(20,10,$row['id'],1,0,'C',0);
    $pdf->Cell(35,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(35,10,$row['apellido'],1,0,'C',0);
    $pdf->Cell(55,10,$row['direccion'],1,0,'C',0);
    $pdf->Cell(35,10,$row['telefono'],1,1,'C',0);
}




$pdf->Output();
?>