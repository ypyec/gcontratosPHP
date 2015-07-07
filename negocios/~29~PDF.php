<?php

require '../ws/fpdf17/fpdf.php';
class PDF extends FPDF
{
    function ChapterTitle($file,$numero, $titulo)
    {
        $this->AddPage();
        // Read text file
        $txt = file_get_contents($file);
        $txt = str_replace(['$numero','$titulo'],[$numero,$titulo],$txt);
        // Arial 12
        $this->SetFont('Arial', '', 12);
        // Title
        $this->MultiCell(0, 6, $txt, 0, 1, 'C');
        // Line break
        $this->Ln(4);
    }

    function ChapterBody($file)
    {
        // Read text file
        $txt = file_get_contents($file);
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

    function PrintChapter($num, $title, $file)
    {
        $this->AddPage();
        $this->ChapterTitle($num, $title);
        $this->ChapterBody($file);
    }
}
//$pdf->Output('../pdf/contrato.pdf','F');
$pdf = new PDF();
$title = '20000 Leagues Under the Seas';
$pdf->SetTitle($title);
$pdf->SetAuthor('Jules Verne');
$pdf->ChapterTitle('../pdf/titulo.txt',1 ,'A RUNAWAY REEF');
//$pdf->PrintChapter(2, 'THE PROS AND CONS', '../pdf/Hola.txt');
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
		document.Add(new Paragraph("CONTRATO DE PRESTACIÓN DE SERVICIOS Nº " + contNumero, titulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("ENMIENDA No.  " + numero, titulo));
		
		agregarLineasEnBlanco(document, 1);
		
		//INTRODUCCION
		document.Add(new Paragraph("Por este medio se procede a enmendar el Contrato de Prestación de Servicios suscrito el " + xFechaContrato + 
				" así como todas las enmiendas que se hubieren suscritas hasta la fecha entre Fundación Futuro Latinoamericano (FFLA) y " + 
				xNombre + ", de la siguiente manera :", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//SEGUNDA
		document.Add(new Paragraph("SEGUNDA: OBJETO.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("El objeto de este contrato es la prestación, por parte de la CONTRATISTA, del servicio de " + consultoria + " a favor de la " +
				"CONTRATANTE, que comprende " + xDescripcion + ".", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//TERCERA
		document.Add(new Paragraph("TERCERA: OBLIGACIONES DE LA CONTRATISTA.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("La CONTRATISTA se compromete a cumplir con las obligaciones detalladas en los Términos de Referencia (TdR) adjuntos, que " +
				"forman parte integrante de la presente enmienda.", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//SEXTA
		document.Add(new Paragraph("SEXTA: DURACIÓN.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("El Contrato de Prestación de Servicios inició el " + xFechaInicio + " y terminará el " +
				fechaFin + ".", normal));
		
		agregarLineasEnBlanco(document, 1);
		
		//SEPTIMA
		document.Add(new Paragraph("SÉPTIMA: HONORARIOS.-", subtitulo));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("El honorario será de " + monto + ", " + xIva + ", " + xIr + ". \n \n" + "El monto del contrato " + 
		xGastos + " incluye gastos de viaje.\n\n" + "El pago de los honorarios se realizará de la siguiente forma: \n" + xFormaPago, normal));
		
		agregarLineasEnBlanco(document, 3);
		
		//CONCLUSION
		document.Add(new Paragraph("Todas las demás condiciones del contrato y sus respectivas enmiendas permanecen sin modificación. \n\n" +
				"Para constancia de lo acordado, las partes suscriben la presente enmienda el " + fechaFirma + ", en tres ejemplares de idéntico texto y valor.", normal));
		
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
				"Fundación Futuro Latinoamericano", normal));
		
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
        document.Add(new Paragraph("Iniciativa Estratégica o Programa: " + proyecto.Programa + "\n" +
                    "Proyecto: " + proyecto.Nombre + "\n" +
                    "Línea Presupuestaria: " + proyecto.LineaPresupuestaria + "\n" +
                    "Fondos: " + proyecto.Fondos + "\n" +
                    "Responsable enmienda en FFLA: " + usuario + "\n" +
                    "Fecha de elaboración: " + xFechaElaboracion, normal));
		
		agregarLineasEnBlanco(document, 1);
		
		document.Add(new Paragraph("REGISTRO DAF:", subtitulo));
		
		document.Add(new Paragraph("Recibe para aprobación final: ___________\n" +
				"Entrega a DE para firma: __________\n" +
				"Recibe con firma de DE: __________\n" +
				"Entrega para firma de Contratista: ___________\n" +
				"Recibe con firma de Contratista: ___________", normal));