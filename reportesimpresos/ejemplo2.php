<?php
//incluimos los ficheros
require('./fpdf182/fpdf.php');

class PDFDiseno extends FPDF{
    // Cabeza
    function Header()
    {
        // Logo o imagen
        $this->Image('./img/LogoEmpresa.png', 10, 8, 33);

        // Tipo de letra
        $this->SetFont('Arial', 'B', 15);

        // nos movemos a la celda
        $this->Cell(80);

        // incluimos el nombre de la empresa
        $this->Cell(30, 10, 'Python SRL', 0, 0, 'C');

        // damos un salto de linea
        $this->Ln(20);
    }

    function Footer()
    {
        // definimos posicion
        $this->SetY(-15);

        // definir tipo de letra
        $this->SetFont('Arial', 'I', 8);
        
        // Definir texto de pie de pagina
        $this->Cell(0, 10, 'Pag. '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }


}

// Constructor
$pdf = new PDFDiseno();
$pdf ->AliasNbPages();
// creamos una nueva pagina
$pdf -> AddPage();
// especificamos tipo de letra y tamaño
$pdf -> SetFont('Times', '', 12);
// Imprimir en el documento
$pdf -> Cell(40, 10, 'Trabajando con Reportes', 0, 1);

for ($i=0; $i <=140; $i++) { 
    $pdf -> Cell(80, 10, 'Hecho en la clase de diseno', 0, 1);
}

// Cierre de documento
$pdf -> Output();

?>