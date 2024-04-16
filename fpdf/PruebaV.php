<?php

require('./fpdf.php');

class PDF extends FPDF
{

   // Cabecera de página
   function Header()
   {
      include '../modelo/conexion.php';
      
      $this->Image('bg.jpeg', 185, 5, 20); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
      $this->SetFont('Arial', 'B', 19);
      $this->Cell(0, 15, 'VENTA DE PRODUCTOS', 0, 0, 'C');
      $this->Ln(30);
      // Información del producto
      $this->SetFont('Arial', 'B', 12);
      $this->Cell(30);
      $this->Cell(0, 10, 'Nombre: ' , 0, 1);
      $this->Cell(30);
      $this->Cell(0, 10, 'Marca: ', 0, 1);
      $this->Cell(30);
      $this->Cell(0, 10, 'Cantidad a vender: ', 0, 1);
      $this->Cell(30);
      $this->Cell(0, 10, 'Precio: ', 0, 1);
      $this->Cell(30);
      $this->Cell(0, 10, 'Descripcion: ', 0, 1);
      
   }

   // Pie de página
   function Footer()
   {
      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
      $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo(), 0, 0, 'C'); //pie de pagina(numero de pagina)

      $this->SetY(-15); // Posición: a 1,5 cm del final
      $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
      $hoy = date('d/m/Y');
      $this->Cell(355, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
   }
}

// Crear una instancia de la clase PDF
$pdf = new PDF();

// Agregar una página
$pdf->AddPage();
// Salida del PDF
$pdf->Output('venta.pdf', 'I');
