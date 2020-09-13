<?php
//incluimos los ficheros
require('./fpdf182/fpdf.php');

// Constructor
$pdf = new FPDF();

// creamos una nueva pagina
$pdf -> AddPage();

// especificamos tipo de letra y tamaño
$pdf -> SetFont('Arial', 'B', 16);

// Imprimir en el documento
$pdf -> Cell(40, 10, 'Trabajando con Reportes', 0, 1);
$pdf -> Cell(80, 10, 'Hecho en la clase de diseno', 1, 1);

// Cierre de documento
$pdf -> Output();

?>