
<?php
require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logosreportes/compras.png',15,8,33);
     $this->Ln(10);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'REPORTE COMPRAS',0,0,'C');
      $this->Ln(20);
    $this->Cell(40,10,'Fecha y Hora:' .date("d-m-Y / H:i:s").'',0);
    
    // Salto de línea
    $this->Ln(20);
   
    $this->Cell(45,10,'IDPRODUCTO',1,0,'C',0);
    $this->Cell(45,10,'DESCRIPCION',1,0,'C',0);
    $this->Cell(35,10,'CANTIDAD',1,0,'C',0);
    $this->Cell(35,10,'PRECIO',1,0,'C',0);
    $this->Cell(35,10,'SUBTOTAL',1,1,'C',0);
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
$consulta = "SELECT * FROM compra";
$resultado= $mysqli->query($consulta);



$pdf = new PDF();
$pdf->AliasNbpages();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);

while ($row= $resultado->fetch_assoc()){
    
     $pdf->Cell(45,10,$row['idproducto'],1,0,'C',0);
    $pdf->Cell(45,10,$row['descripcion'],1,0,'C',0);
    $pdf->Cell(35,10,$row['cantidad'],1,0,'C',0);
    $pdf->Cell(35,10,$row['precio'],1,0,'C',0);
    $pdf->Cell(35,10,$row['subtotal'],1,1,'C',0);
}




$pdf->Output();
?>