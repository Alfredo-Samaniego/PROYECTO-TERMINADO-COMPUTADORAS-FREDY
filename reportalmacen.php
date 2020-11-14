
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logosreportes/almacen.png',15,8,33);
     $this->Ln(10);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'REPORTE ALMACEN',0,0,'C');
      $this->Ln(20);
    $this->Cell(40,10,'Fecha y Hora:' .date("d-m-Y / H:i:s").'',0);
    
    // Salto de línea
    $this->Ln(20);
    $this->Cell(35,10,'NOMBRE',1,0,'C',0);
    $this->Cell(35,10,'CANTIDAD',1,0,'C',0);
    $this->Cell(30,10,'PRECIO',1,0,'C',0);
    $this->Cell(30,10,'PRECIOV',1,0,'C',0);
    $this->Cell(30,10,'FECHA',1,0,'C',0);
    $this->Cell(30,10,'RECIBIO',1,1,'C',0);
    
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
$consulta = "SELECT * FROM almacen";
$resultado= $mysqli->query($consulta);



$pdf = new PDF();
$pdf->AliasNbpages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);

while ($row= $resultado->fetch_assoc()){
    $pdf->Cell(35,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(35,10,$row['cantidad'],1,0,'C',0);
    $pdf->Cell(30,10,$row['precio'],1,0,'C',0);
    $pdf->Cell(30,10,$row['preciov'],1,0,'C',0);
    $pdf->Cell(30,10,$row['fecha'],1,0,'C',0);
    $pdf->Cell(30,10,$row['recibio'],1,1,'C',0);
}




$pdf->Output();
?>