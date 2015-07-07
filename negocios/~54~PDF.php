<?php

require '../ws/fpdf17/fpdf.php';
class PDF extends FPDF
{
    function Titulo($file, $numero, $titulo)
    {
        // Read text file
        $txt = file_get_contents($file);
        $txt = str_replace(['$numero', '$titulo'], [$numero, $titulo], $txt);
        // Arial 12
        $this->SetFont('Arial', '', 12);
        // Title
        $this->MultiCell(0, 6, $txt, 0, 'C');
        // Line break
        $this->Ln(1);
    }

    function Cuerpo($file, $nombre, $apellido, $idPersona, $profesionPersona, $XExperiencaPersona,
        $consultoriaPersona, $xDescripcionPersona, $xObligacionesAdicionalesPersona, $xDuracionPersona,
        $fechaInicio, $fechaFin, $montoPersona, $xIva, $xIr, $paisContrato, $xGastos, $xFormaPago, $nombreBanco, $numeroCuenta, $tipoCuenta, $swift, $XDireccionPersona, $ciudadPersona, $paisPersona, $fechaFirma)
    {
        // Read text file
        $txt = file_get_contents($file);
        $txt = str_replace(['persona.Nombres', 'persona.Apellidos', 'persona.Id',
            'persona.Profesion', 'persona.XExperienca', 'consultoriaPersona', 'xDescripcion',
            'xObligacionesAdicionales', 'xDuracion', 'fechaInicio', 'fechaFin',
            'montoPersona', 'xIva', 'xIr', 'paisContrato', 'xGastos','xFormaPago', 'cuenta.NombreBanco', 'cuenta.Numero', 'cuenta.Tipo', 'cuenta.Swift', 'persona.XDireccion', 'persona.Ciudad', 'persona.Pais', 'fechaFirma'], [$nombre, $apellido,
            $idPersona, $profesionPersona, $XExperiencaPersona, $consultoriaPersona, $xDescripcionPersona,
            $xObligacionesAdicionalesPersona, $xDuracionPersona, $fechaInicio, $fechaFin, $montoPersona,
            $xIva, $xIr, $paisContrato, $xGastos, $xFormaPago, $nombreBanco, $numeroCuenta, $tipoCuenta, $swift, $XDireccionPersona, $ciudadPersona, $paisPersona, $fechaFirma], $txt);
        // Times 12
        $this->SetFont('Times', '', 12);
        // Output justified text
        $this->MultiCell(0, 5, $txt);
        // Line break
        $this->Ln();
        // Mention in italics
        $this->SetFont('', 'I');
        $this->Cell(0, 5, '(end of excerpt)');
    }

    function ImprimirPDF($archivoTitulo, $numeroContrato, $tituloContrato)
    {
        $this->AddPage();
        $this->Titulo($archivoTitulo, $numeroContrato, $tituloContrato);
        $this->Cuerpo($archivoCuerpo);
    }
    function test(){
        $this->AddPage();
        $this->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(50,5,'111 Here',1,0,'L',0);
$this->Cell(50,5,'222 Here',1,0,'L',0);

                $this->Ln();

$this->Cell(40,5,'Solid Here','LR',0,'C',0);  // cell with left and right borders
$this->Cell(50,5,'[ o ] che1','LR',0,'L',0);
$this->Cell(50,5,'[ x ] che2','LR',0,'L',0);

                $this->Ln();

$this->Cell(40,5,'','LBR',0,'L',0);   // empty cell with left,bottom, and right borders
$this->Cell(50,5,'[ x ] def3','LRB',0,'L',0);
$this->Cell(50,5,'[ o ] def4','LRB',0,'L',0);

                $this->Ln();
                $this->Ln();
                $this->Ln();
    }
}
//$pdf->Output('../pdf/contrato.pdf','F');
$pdf = new PDF();

$pdf->test();
//$pdf->PrintPDF(2, 'THE PROS AND CONS', '../pdf/Hola.txt');
$pdf->Output();

?>

agregarLineasEnBlanco(document, 4);

private static Font titulo = new Font(Font.FontFamily.HELVETICA, 11, Font.BOLD | Font.UNDERLINE);
        private static Font subtitulo = new Font(Font.FontFamily.HELVETICA, 11, Font.BOLD);
        private static Font normal = new Font(Font.FontFamily.HELVETICA, 11);
ENMIENDA

private static Font titulo = new Font(Font.FontFamily.HELVETICA, 11, Font.BOLD | Font.UNDERLINE);
        private static Font subtitulo = new Font(Font.FontFamily.HELVETICA, 11, Font.BOLD);
        private static Font normal = new Font(Font.FontFamily.HELVETICA, 11);
        
agregarLineasEnBlanco(document, 4);
		
		//TITULO
		document.Add(new Paragraph("CONTRATO DE PRESTACI�N DE SERVICIOS N� " + contNumero, titulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("ENMIENDA No.  " + numero, titulo));
		
		agregarLineasEnBlanco(document, 1);
		
		//INTRODUCCION
		document.Add(new Paragraph("Por este medio se procede a enmendar el Contrato de Prestaci�n de Servicios suscrito el " + xFechaContrato + 
				" as� como todas las enmiendas que se hubieren suscritas hasta la fecha entre Fundaci�n Futuro Latinoamericano (FFLA) y " + 
				xNombre + ", de la siguiente manera :", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//SEGUNDA
		document.Add(new Paragraph("SEGUNDA: OBJETO.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("El objeto de este contrato es la prestaci�n, por parte de la CONTRATISTA, del servicio de " + consultoria + " a favor de la " +
				"CONTRATANTE, que comprende " + xDescripcion + ".", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//TERCERA
		document.Add(new Paragraph("TERCERA: OBLIGACIONES DE LA CONTRATISTA.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("La CONTRATISTA se compromete a cumplir con las obligaciones detalladas en los T�rminos de Referencia (TdR) adjuntos, que " +
				"forman parte integrante de la presente enmienda.", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//SEXTA
		document.Add(new Paragraph("SEXTA: DURACI�N.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("El Contrato de Prestaci�n de Servicios inici� el " + xFechaInicio + " y terminar� el " +
				fechaFin + ".", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//SEPTIMA
		document.Add(new Paragraph("S�PTIMA: HONORARIOS.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("El honorario ser� de " + monto + ", " + xIva + ", " + xIr + ". \n \n" + "El monto del contrato " + 
		xGastos + " incluye gastos de viaje.\n\n" + "El pago de los honorarios se realizar� de la siguiente forma: \n" + xFormaPago, normal));
		
		agregarLineasEnBlanco(document, 3);
		
		//CONCLUSION
		document.Add(new Paragraph("Todas las dem�s condiciones del contrato y sus respectivas enmiendas permanecen sin modificaci�n. \n\n" +
				"Para constancia de lo acordado, las partes suscriben la presente enmienda el " + fechaFirma + ", en tres ejemplares de id�ntico texto y valor.", normal));
		
		agregarLineasEnBlanco(document, 3);
		
		/*
		 * FIRMAS
		 */
		PdfPTable tabla = new PdfPTable(2);
		
		PdfPCell contratante1 = new PdfPCell(new Phrase("CONTRATANTE", subtitulo));
		
		PdfPCell contratista1 = new PdfPCell(new Phrase("CONTRATISTA", subtitulo));
		
		PdfPCell contratante2 = new PdfPCell(new Phrase("\n \n \n" +
				"____________________________\n" +
				"Marianela Curi \n" +
				"Directora Ejecutiva \n" +
				"Fundaci�n Futuro Latinoamericano", normal));
		
		PdfPCell contratista2 = new PdfPCell(new Phrase("\n \n \n" +
				"____________________________\n" + 
				xNombre + "\n" +
				xId, normal));


        contratante1.BorderWidth = 0f;
        contratista1.BorderWidth = 0f;
        contratante2.BorderWidth = 0f;
        contratista2.BorderWidth = 0f;
		
		tabla.AddCell(contratante1);
		tabla.AddCell(contratista1);
		tabla.AddCell(contratante2);
		tabla.AddCell(contratista2);
		
		document.Add(tabla);
		
		agregarLineasEnBlanco(document, 2);
		
		/*
		 * INFORMACION INTERNA FFLA
		 */
		document.Add(new Paragraph("INFORMACION INTERNA FFLA:", subtitulo));
        document.Add(new Paragraph("Iniciativa Estrat�gica o Programa: " + proyecto.Programa + "\n" +
                    "Proyecto: " + proyecto.Nombre + "\n" +
                    "L�nea Presupuestaria: " + proyecto.LineaPresupuestaria + "\n" +
                    "Fondos: " + proyecto.Fondos + "\n" +
                    "Responsable enmienda en FFLA: " + usuario + "\n" +
                    "Fecha de elaboraci�n: " + xFechaElaboracion, normal));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("REGISTRO DAF:", subtitulo));
		
		document.Add(new Paragraph("Recibe para aprobaci�n final: ___________\n" +
				"Entrega a DE para firma: __________\n" +
				"Recibe con firma de DE: __________\n" +
				"Entrega para firma de Contratista: ___________\n" +
				"Recibe con firma de Contratista: ___________", normal));