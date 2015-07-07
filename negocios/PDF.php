<?php

require '../ws/fpdf17/fpdf.php';
class PDF extends FPDF
{
    function Header()
    {
        global $title;

        // Arial bold 15
        $this->SetFont('Helvetica', 'BU', 11);
        // Calculate width of title and position
        $w = $this->GetStringWidth($title) + 6;
        $this->SetX((210 - $w) / 2);
        // Title
        $this->Cell($w, 9, $title, 1, 1, 'C', true);
        // Line break
        $this->Ln(10);
    }

    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Text color in gray
        $this->SetTextColor(128);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    function ChapterTitle($num, $label)
    {
        // Arial 12
        $this->SetFont('Arial', '', 12);
        // Background color
        $this->SetFillColor(200, 220, 255);
        // Title
        $this->Cell(0, 6, "Chapter $num : $label", 0, 1, 'L', true);
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
$pdf->PrintChapter(1, 'A RUNAWAY REEF', '../pdf/Hola.txt');
$pdf->PrintChapter(2, 'THE PROS AND CONS', '../pdf/Hola.txt');
$pdf->Output();

?>

agregarLineasEnBlanco(document, 4);

private static Font titulo = new Font(Font.FontFamily.HELVETICA, 11, Font.BOLD | Font.UNDERLINE);
        private static Font subtitulo = new Font(Font.FontFamily.HELVETICA, 11, Font.BOLD);
        private static Font normal = new Font(Font.FontFamily.HELVETICA, 11);
		
		    //TITULO
		    document.Add(new Paragraph("CONTRATO DE PRESTACI�N DE SERVICIOS \n" + "N� CS-FFLA-" + numero, titulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //INTRODUCCION
		    document.Add(new Paragraph("Comparecen a la celebraci�n del presente contrato, por una parte, " +
				    "la Fundaci�n Futuro Latinoamericano (FFLA), representada legalmente por la se�ora Marianela Curi," +
				    " en su calidad de Directora Ejecutiva, parte a la cual se denominar� para efectos de este contrato, LA CONTRATANTE; y, por otra, " +
				    persona.Nombres + " " + persona.Apellidos + ", con documento de identidad n�mero " + persona.Id + ", en adelante LA CONTRATISTA. Los comparecientes, " +
				    "h�biles para contratar y obligarse, acuerdan lo siguiente:", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //PRIMERA
		    document.Add(new Paragraph("PRIMERA: ANTECEDENTES.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("1.	La CONTRATANTE, Fundaci�n Futuro Latinoamericano (FFLA), es una persona jur�dica, ecuatoriana, de derecho privado, " +
				    "con finalidad social y p�blica, sin fines de lucro, constituida el 1� de noviembre de 1993.  Fue aprobada por el Ministerio de Inclusi�n " +
				    "Econ�mica y Social (MIES) (anterior Ministerio de Bienestar Social) de Ecuador mediante Acuerdo Ministerial N� 000160 del 17 de febrero de " +
				    "1994, publicado en el Registro Oficial N� 422 de 18 de abril de 1994. Sus Estatutos fueron posteriormente reformados y aprobados mediante " +
				    "Acuerdos Ministeriales N� 3329 del 4 de septiembre del 2001, N� 0553 del 6 de febrero del 2008 y N N� 754 del 27 de septiembre del 2011." + 
				    "\n \n" + "2.	La CONTRATISTA es " + persona.Profesion + ", " + persona.XExperienca + ".", normal));
	
		    agregarLineasEnBlanco(document, 1);
		
		    //SEGUNDA
		    document.Add(new Paragraph("SEGUNDA: OBJETO.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("El objeto de este contrato es la prestaci�n, por parte de la CONTRATISTA, del servicio de " + consultoria + " a favor de la " +
				    "CONTRATANTE, que comprende " + xDescripcion + ".\n \n" + "Los servicios antes descritos constituyen servicios t�cnicos especializados, que ser�n " +
				    "prestados en forma personal, eficiente y oportuna, ante el requerimiento y la coordinaci�n v�a telef�nica, e-mail y/o por escrito de la " +
				    "CONTRATANTE con la CONTRATISTA, misma que cuenta con la infraestructura necesaria para prestar el servicio arriba descrito.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //TERCERA
		    document.Add(new Paragraph("TERCERA: OBLIGACIONES DE LA CONTRATISTA.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("En virtud del presente contrato, la CONTRATISTA se compromete a cumplir con las obligaciones detalladas en los T�rminos de " +
				    "Referencia (TdR) adjuntos, que forman parte integrante del presente contrato. \n\n" +
				    "Adicionalmente la CONTRATISTA deber�: \n\n" +
				    "�	Entregar un informe final de sus actividades previo al pago final.\n\n" +
				    "�	Cumplir con todas las pol�ticas y disposiciones escritas o verbales emitidas por FFLA, observar en forma rigurosa las obligaciones inherentes " +
				    "a su servicio profesional y no hacer competencia desleal a FFLA.\n\n" +
				    "�	Dedicar toda su capacidad profesional a la ejecuci�n de los servicios contratados, debiendo reflejar en todos y en cada uno de sus actos una buena imagen.\n\n" +
				    "�	Abstenerse de dar opiniones a terceras personas al respecto de FFLA o sobre cualquier informaci�n que hubiere llegado a su conocimiento en raz�n " +
				    "de los servicios que desarrolla.\n\n" +
				    "�	No utilizar para fines personales o no autorizados, cualquier marca o nombre comercial, derechos de autor, publicaciones o bienes de propiedad de FFLA.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //CUARTA
		    document.Add(new Paragraph("CUARTA: DE LAS OBRAS PROTEGIDAS POR EL DERECHO DE AUTOR Y CONEXOS.", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Los derechos patrimoniales de todos los productos que se generen del presente contrato, y que " +
				    "constituyan obras protegidas por el Derecho de Autor, ser�n de titularidad de FFLA.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //QUINTA
		    document.Add(new Paragraph("QUINTA: OBLIGACIONES DE LA CONTRATANTE.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("�	Realizar el pago de los honorarios acordados de forma puntual.\n\n" +
				    "�	Entregar oportunamente la informaci�n y documentaci�n necesarias para que la CONTRATISTA pueda prestar sus servicios. \n\n" +
				    "�	" + xObligacionesAdicionales + ".", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //SEXTA
		    document.Add(new Paragraph("SEXTA: DURACI�N.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("El presente contrato tendr� una vigencia de hasta " + xDuracion + " d�as iniciando el " + fechaInicio + " y concluyendo m�ximo el " +
				    fechaFin + "; no obstante, podr� ser renovado por com�n acuerdo de las partes.\n \n" +
				    "Sin embargo, se lo podr� dar por terminado en forma anticipada y en cualquier momento, por las siguientes circunstancias:\n\n" +
				    "a.	De mutuo acuerdo entre las partes;\n\n" +
				    "b.	En caso de incumplimiento de una de las partes de cualquiera de las cl�usulas en las que se contiene el presente contrato; y,\n\n" +
				    "c.	En general, unilateralmente cualquiera de las partes, sin justa causa, podr� dar por terminado anticipadamente el presente contrato sin " +
				    "necesidad de requerimiento judicial y sin lugar a indemnizaci�n de ning�n tipo, siendo suficiente una simple comunicaci�n por escrito con por " +
				    "lo menos 8 d�as de anticipaci�n a la fecha se�alada para su terminaci�n.\n \n" +
				    "En caso de terminaci�n unilateral anticipada, la CONTRATISTA deber� justificar proporcionalmente la prestaci�n de los servicios para los cuales " +
				    "fue contratado y la CONTRATANTE igualmente, deber� liquidar los valores respectivos por los servicios que se encuentren efectivamente prestados " +
				    "a la fecha de su terminaci�n.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //SEPTIMA
		    document.Add(new Paragraph("S�PTIMA: HONORARIOS.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("El honorario ser� de " + monto + ", " + xIva + ", " + xIr + ". \n \n" + "El trabajo se ejecutar� en " + pais + 
		    ". \n \n" + "El monto del contrato " + 
		    xGastos + " incluye gastos de viaje.\n\n" + "El pago de los honorarios se realizar� de la siguiente forma: \n" + xFormaPago, normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Toda factura emitida en Ecuador deber� cumplir con las disposiciones establecidas por la ley ecuatoriana, se emitir� " +
				    "entre el 1 y el 25 de cada mes y se entregar� a LA CONTRATANTE m�ximo 1 d�a posterior a su emisi�n. Los datos para la facturaci�n son:\n" +
				    "Fundaci�n Futuro Latinoamericano \n" +
				    "RUC: 1791262689001 \n" +
				    "Direcci�n: Guip�zcoa E16-02 y Av. Coru�a, Quito \n" +
				    "Tel�fono: 2236351", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Si fuera necesario incurrir en costos menores, como parte de la prestaci�n de los servicios de la CONTRATISTA, �stos ser�n " +
				    "facturados por separado, una vez que sean revisados y aprobados previamente por la CONTRATANTE.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Los pagos se realizar�n por transferencia bancaria de acuerdo a la siguiente informaci�n:", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Nombre del banco: " + cuenta.NombreBanco + "\n" +
				    "N� de cuenta: " + cuenta.Numero + "\n" +
				    "Tipo de cuenta: " + cuenta.Tipo + "\n" +
				    "C�digo SWIFT: " + cuenta.Swift + "\n" +
				    "Nombre en la cuenta: " + persona.Nombres + " " + persona.Apellidos + "\n" +
				    "C�dula/RUC en cuenta: " + persona.Id + "\n" +
				    "Direcci�n del beneficiario: " + persona.XDireccion, normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("En caso de incumplimiento injustificado del plazo estipulado en este contrato para la entrega de los " +
				    "trabajos o productos, la CONTRATISTA pagar� a la CONTRATANTE una multa equivalente al uno por mil (0.1%) del total del " +
				    "contrato por cada d�a de retraso.  Esta multa ser� retenida autom�ticamente de los valores pendientes de pago.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Si el monto de la multa excediere el 5% del valor total de contrato, la CONTRATANTE podr� darlo por " +
				    "terminado en forma anticipada y unilateral y proceder� a realizar la liquidaci�n respectiva.", normal));
	
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("El cobro de la multa estipulada no exonerar� a la CONTRATISTA del pago de indemnizaciones por da�os y " +
				    "perjuicios que tal retardo ocasione al CONTRATANTE.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Las multas no se aplicar�n en casos de fuerza mayor ocasionados por terceros siempre que est�n debidamente " +
				    "documentados.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //OCTAVA
		    document.Add(new Paragraph("OCTAVA: IMPUESTOS.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Ser�n de cuenta de cada una de las partes, la declaraci�n y pago de todos los tributos, que se generen con " +
				    "ocasi�n del presente contrato de prestaci�n de servicios.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //NOVENA
		    document.Add(new Paragraph("NOVENA: CONFIDENCIALIDAD.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
	
		    document.Add(new Paragraph("Las partes respetar�n la confidencialidad sobre las pol�ticas, procedimientos, f�rmulas, t�cnicas de administraci�n " +
				    "e informaci�n legal, financiera, etc. que, con ocasi�n de la prestaci�n de los servicios aqu� descritos, llegaren a tener conocimiento, " +
				    "incluso har�n que sus empleados, agentes y subcontratistas la mantengan, siendo responsables del cumplimiento de esta obligaci�n " +
				    "por parte de aquellos.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //DECIMA
		    document.Add(new Paragraph("D�CIMA: SITUACI�N DE LAS PARTES.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Se entiende claramente que, dentro de este Contrato, los contratantes constituyen partes distintas, individuales, " +
				    "independientes y aut�nomas, por lo cual su �nica vinculaci�n es a trav�s de este instrumento.", normal));
	
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("En este sentido las partes no son, ni ser�n, consideradas como socios, accionistas, agentes, representantes, distribuidores " +
				    "o empresarios, motivo por el cual ninguno de ellos podr� obligar a comprometer al otro, en ning�n tipo de contrato, convenio, acuerdo, petici�n, " +
				    "acto, promesa u obligaci�n en general.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Ninguna de las partes podr� hacer responsable a la otra, de sus actos, deudas u obligaciones contra�das.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //DECIMA PRIMERA
		    document.Add(new Paragraph("D�CIMA PRIMERA: RESPONSABILIDADES.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Las partes se obligan a cumplir lo establecido en este contrato. El incumplimiento, por parte de cualquiera de �stas, de alguna de " +
				    "las cl�usulas de este instrumento permitir� a la otra parte, la conclusi�n inmediata del mismo y el cobro de una indemnizaci�n, por los da�os y perjuicios " +
				    "que se ocasionaren. Si para el cumplimiento de este contrato la CONTRATISTA debe contratar personal, la responsabilidad respecto de ellos es exclusiva de la " +
				    "CONTRATISTA, por lo que en forma expresa libera a la CONTRATANTE de cualquier responsabilidad laboral.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //DECIMA SEGUNDA
		    document.Add(new Paragraph("DECIMA SEGUNDA: DOMICILIO.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("1.	La CONTRATANTE tiene su domicilio en la calle Guip�zcoa E16-02 y Av. Coru�a, Quito - Ecuador." + 
				    "\n \n" + "2.	La CONTRATISTA est� domiciliada en " + persona.XDireccion + ", " + persona.Ciudad + ", " + persona.Pais + ".", normal));
	
		    agregarLineasEnBlanco(document, 1);
		
		    //DECIMA TERCERA
		    document.Add(new Paragraph("D�CIMA TERCERA: CONTROVERSIAS.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("En el evento de presentarse cualquier controversia relacionada con o derivada de este contrato y su " +
				    "ejecuci�n, y que no pueda ser resuelta mediante mutuo acuerdo entre las partes, directamente o a trav�s de una mediaci�n en " +
				    "el Centro de Arbitraje y Mediaci�n de la C�mara de Comercio de Quito, las partes renuncian fuero y domicilio y se someten a " +
				    "la resoluci�n de un Tribunal de Arbitraje de la C�mara de Comercio de Quito, que se sujetar� a lo dispuesto en " +
				    "la Ley de Arbitraje y Mediaci�n vigente.", normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    //DECIMA CUARTA
		    document.Add(new Paragraph("D�CIMA CUARTA: ACEPTACI�N.-", subtitulo));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("Las partes declaran aceptar el contenido de este contrato, incluyendo los documentos anexos, por as� convenir " +
				    "a sus intereses. Para constancia de lo acordado, las partes suscriben el presente contrato en la ciudad de Quito, " +
				    "el d�a " + fechaFirma + ".", normal));
		
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
				    persona.Nombres + " " + persona.Apellidos + "\n" +
				    persona.Id, normal));
		

		
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
				    "Responsable contrato en FFLA: " + usuario + "\n" +
				    "Fecha de elaboraci�n: " + xFechaElaboracion, normal));
		
		    agregarLineasEnBlanco(document, 1);
		
		    document.Add(new Paragraph("REGISTRO DAF:", subtitulo));
		
		    document.Add(new Paragraph("Recibe para aprobaci�n final: ___________\n" +
				    "Entrega a DE para firma: __________\n" +
				    "Recibe con firma de DE: __________\n" +
				    "Entrega para firma de Contratista: ___________\n" +
				    "Recibe con firma de Contratista: ___________", normal));
	    }

        private static void agregarContenidoEmpresa(Document document, string usuario)
        {

            agregarLineasEnBlanco(document, 4);

            //TITULO
            document.Add(new Paragraph("CONTRATO DE PRESTACI�N DE SERVICIOS \n" + "N� CS-FFLA-" + numero, titulo));

            agregarLineasEnBlanco(document, 1);

            //INTRODUCCION
            document.Add(new Paragraph("Comparecen a la celebraci�n del presente contrato, por una parte, " +
                    "la Fundaci�n Futuro Latinoamericano (FFLA), representada legalmente por la se�ora Marianela Curi," +
                    " en su calidad de Directora Ejecutiva, parte a la cual se denominar� para efectos de este contrato, LA CONTRATANTE; y, por otra, " +
                    empresa.Nombe + " con documento de identidad n�mero " + empresa.Ruc + ", y como representante legal de la misma " + persona.Nombres + 
                    " " + persona.Apellidos + ", con documento de identidad n�mero " + persona.Id + ", en adelante LA CONTRATISTA. Los comparecientes, " +
                    "h�biles para contratar y obligarse, acuerdan lo siguiente:", normal));

            agregarLineasEnBlanco(document, 1);

            //PRIMERA
            document.Add(new Paragraph("PRIMERA: ANTECEDENTES.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("1.	La CONTRATANTE, Fundaci�n Futuro Latinoamericano (FFLA), es una persona jur�dica, ecuatoriana, de derecho privado, " +
                    "con finalidad social y p�blica, sin fines de lucro, constituida el 1� de noviembre de 1993.  Fue aprobada por el Ministerio de Inclusi�n " +
                    "Econ�mica y Social (MIES) (anterior Ministerio de Bienestar Social) de Ecuador mediante Acuerdo Ministerial N� 000160 del 17 de febrero de " +
                    "1994, publicado en el Registro Oficial N� 422 de 18 de abril de 1994. Sus Estatutos fueron posteriormente reformados y aprobados mediante " +
                    "Acuerdos Ministeriales N� 3329 del 4 de septiembre del 2001, N� 0553 del 6 de febrero del 2008 y N N� 754 del 27 de septiembre del 2011." +
                    "\n \n" + "2.	La CONTRATISTA es " + empresa.Especializacion + ", " + empresa.XExperienca + ".", normal));

            agregarLineasEnBlanco(document, 1);

            //SEGUNDA
            document.Add(new Paragraph("SEGUNDA: OBJETO.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("El objeto de este contrato es la prestaci�n, por parte de la CONTRATISTA, del servicio de " + consultoria + " a favor de la " +
                    "CONTRATANTE, que comprende " + xDescripcion + ".\n \n" + "Los servicios antes descritos constituyen servicios t�cnicos especializados, que ser�n " +
                    "prestados en forma personal, eficiente y oportuna, ante el requerimiento y la coordinaci�n v�a telef�nica, e-mail y/o por escrito de la " +
                    "CONTRATANTE con la CONTRATISTA, misma que cuenta con la infraestructura necesaria para prestar el servicio arriba descrito.", normal));

            agregarLineasEnBlanco(document, 1);

            //TERCERA
            document.Add(new Paragraph("TERCERA: OBLIGACIONES DE LA CONTRATISTA.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("En virtud del presente contrato, la CONTRATISTA se compromete a cumplir con las obligaciones detalladas en los T�rminos de " +
                    "Referencia (TdR) adjuntos, que forman parte integrante del presente contrato. \n\n" +
                    "Adicionalmente la CONTRATISTA deber�: \n\n" +
                    "�	Entregar un informe final de sus actividades previo al pago final.\n\n" +
                    "�	Cumplir con todas las pol�ticas y disposiciones escritas o verbales emitidas por FFLA, observar en forma rigurosa las obligaciones inherentes " +
                    "a su servicio profesional y no hacer competencia desleal a FFLA.\n\n" +
                    "�	Dedicar toda su capacidad profesional a la ejecuci�n de los servicios contratados, debiendo reflejar en todos y en cada uno de sus actos una buena imagen.\n\n" +
                    "�	Abstenerse de dar opiniones a terceras personas al respecto de FFLA o sobre cualquier informaci�n que hubiere llegado a su conocimiento en raz�n " +
                    "de los servicios que desarrolla.\n\n" +
                    "�	No utilizar para fines personales o no autorizados, cualquier marca o nombre comercial, derechos de autor, publicaciones o bienes de propiedad de FFLA.", normal));

            agregarLineasEnBlanco(document, 1);

            //CUARTA
            document.Add(new Paragraph("CUARTA: DE LAS OBRAS PROTEGIDAS POR EL DERECHO DE AUTOR Y CONEXOS.", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Los derechos patrimoniales de todos los productos que se generen del presente contrato, y que " +
                    "constituyan obras protegidas por el Derecho de Autor, ser�n de titularidad de FFLA.", normal));

            agregarLineasEnBlanco(document, 1);

            //QUINTA
            document.Add(new Paragraph("QUINTA: OBLIGACIONES DE LA CONTRATANTE.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("�	Realizar el pago de los honorarios acordados de forma puntual.\n\n" +
                    "�	Entregar oportunamente la informaci�n y documentaci�n necesarias para que la CONTRATISTA pueda prestar sus servicios. \n\n" +
                    "�	" + xObligacionesAdicionales + ".", normal));

            agregarLineasEnBlanco(document, 1);

            //SEXTA
            document.Add(new Paragraph("SEXTA: DURACI�N.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("El presente contrato tendr� una vigencia de hasta " + xDuracion + " d�as iniciando el " + fechaInicio + " y concluyendo m�ximo el " +
                    fechaFin + "; no obstante, podr� ser renovado por com�n acuerdo de las partes.\n \n" +
                    "Sin embargo, se lo podr� dar por terminado en forma anticipada y en cualquier momento, por las siguientes circunstancias:\n\n" +
                    "a.	De mutuo acuerdo entre las partes;\n\n" +
                    "b.	En caso de incumplimiento de una de las partes de cualquiera de las cl�usulas en las que se contiene el presente contrato; y,\n\n" +
                    "c.	En general, unilateralmente cualquiera de las partes, sin justa causa, podr� dar por terminado anticipadamente el presente contrato sin " +
                    "necesidad de requerimiento judicial y sin lugar a indemnizaci�n de ning�n tipo, siendo suficiente una simple comunicaci�n por escrito con por " +
                    "lo menos 8 d�as de anticipaci�n a la fecha se�alada para su terminaci�n.\n \n" +
                    "En caso de terminaci�n unilateral anticipada, la CONTRATISTA deber� justificar proporcionalmente la prestaci�n de los servicios para los cuales " +
                    "fue contratado y la CONTRATANTE igualmente, deber� liquidar los valores respectivos por los servicios que se encuentren efectivamente prestados " +
                    "a la fecha de su terminaci�n.", normal));

            agregarLineasEnBlanco(document, 1);

            //SEPTIMA
            document.Add(new Paragraph("S�PTIMA: HONORARIOS.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("El honorario ser� de " + monto + ", " + xIva + ", " + xIr + ". \n \n" + "El trabajo se ejecutar� en " + pais +
            ". \n \n" + "El monto del contrato " +
            xGastos + " incluye gastos de viaje.\n\n" + "El pago de los honorarios se realizar� de la siguiente forma: \n" + xFormaPago, normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Toda factura emitida en Ecuador deber� cumplir con las disposiciones establecidas por la ley ecuatoriana, se emitir� " +
                    "entre el 1 y el 25 de cada mes y se entregar� a LA CONTRATANTE m�ximo 1 d�a posterior a su emisi�n. Los datos para la facturaci�n son:\n" +
                    "Fundaci�n Futuro Latinoamericano \n" +
                    "RUC: 1791262689001 \n" +
                    "Direcci�n: Guip�zcoa E16-02 y Av. Coru�a, Quito \n" +
                    "Tel�fono: 2236351", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Si fuera necesario incurrir en costos menores, como parte de la prestaci�n de los servicios de la CONTRATISTA, �stos ser�n " +
                    "facturados por separado, una vez que sean revisados y aprobados previamente por la CONTRATANTE.", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Los pagos se realizar�n por transferencia bancaria de acuerdo a la siguiente informaci�n:", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Nombre del banco: " + cuenta.NombreBanco + "\n" +
                    "N� de cuenta: " + cuenta.Numero + "\n" +
                    "Tipo de cuenta: " + cuenta.Tipo + "\n" +
                    "C�digo SWIFT: " + cuenta.Swift + "\n" +
                    "Nombre en la cuenta: " + empresa.Nombe + "\n" +
                    "C�dula/RUC en cuenta: " + empresa.Ruc + "\n" +
                    "Direcci�n del beneficiario: " + empresa.XDireccion + ", " + empresa.Ciudad + ", " + empresa.Pais + ".", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("En caso de incumplimiento injustificado del plazo estipulado en este contrato para la entrega de los " +
                    "trabajos o productos, la CONTRATISTA pagar� a la CONTRATANTE una multa equivalente al uno por mil (0.1%) del total del " +
                    "contrato por cada d�a de retraso.  Esta multa ser� retenida autom�ticamente de los valores pendientes de pago.", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Si el monto de la multa excediere el 5% del valor total de contrato, la CONTRATANTE podr� darlo por " +
                    "terminado en forma anticipada y unilateral y proceder� a realizar la liquidaci�n respectiva.", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("El cobro de la multa estipulada no exonerar� a la CONTRATISTA del pago de indemnizaciones por da�os y " +
                    "perjuicios que tal retardo ocasione al CONTRATANTE.", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Las multas no se aplicar�n en casos de fuerza mayor ocasionados por terceros siempre que est�n debidamente " +
                    "documentados.", normal));

            agregarLineasEnBlanco(document, 1);

            //OCTAVA
            document.Add(new Paragraph("OCTAVA: IMPUESTOS.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Ser�n de cuenta de cada una de las partes, la declaraci�n y pago de todos los tributos, que se generen con " +
                    "ocasi�n del presente contrato de prestaci�n de servicios.", normal));

            agregarLineasEnBlanco(document, 1);

            //NOVENA
            document.Add(new Paragraph("NOVENA: CONFIDENCIALIDAD.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Las partes respetar�n la confidencialidad sobre las pol�ticas, procedimientos, f�rmulas, t�cnicas de administraci�n " +
                    "e informaci�n legal, financiera, etc. que, con ocasi�n de la prestaci�n de los servicios aqu� descritos, llegaren a tener conocimiento, " +
                    "incluso har�n que sus empleados, agentes y subcontratistas la mantengan, siendo responsables del cumplimiento de esta obligaci�n " +
                    "por parte de aquellos.", normal));

            agregarLineasEnBlanco(document, 1);

            //DECIMA
            document.Add(new Paragraph("D�CIMA: SITUACI�N DE LAS PARTES.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Se entiende claramente que, dentro de este Contrato, los contratantes constituyen partes distintas, individuales, " +
                    "independientes y aut�nomas, por lo cual su �nica vinculaci�n es a trav�s de este instrumento.", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("En este sentido las partes no son, ni ser�n, consideradas como socios, accionistas, agentes, representantes, distribuidores " +
                    "o empresarios, motivo por el cual ninguno de ellos podr� obligar a comprometer al otro, en ning�n tipo de contrato, convenio, acuerdo, petici�n, " +
                    "acto, promesa u obligaci�n en general.", normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Ninguna de las partes podr� hacer responsable a la otra, de sus actos, deudas u obligaciones contra�das.", normal));

            agregarLineasEnBlanco(document, 1);

            //DECIMA PRIMERA
            document.Add(new Paragraph("D�CIMA PRIMERA: RESPONSABILIDADES.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Las partes se obligan a cumplir lo establecido en este contrato. El incumplimiento, por parte de cualquiera de �stas, de alguna de " +
                    "las cl�usulas de este instrumento permitir� a la otra parte, la conclusi�n inmediata del mismo y el cobro de una indemnizaci�n, por los da�os y perjuicios " +
                    "que se ocasionaren. Si para el cumplimiento de este contrato la CONTRATISTA debe contratar personal, la responsabilidad respecto de ellos es exclusiva de la " +
                    "CONTRATISTA, por lo que en forma expresa libera a la CONTRATANTE de cualquier responsabilidad laboral.", normal));

            agregarLineasEnBlanco(document, 1);

            //DECIMA SEGUNDA
            document.Add(new Paragraph("DECIMA SEGUNDA: DOMICILIO.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("1.	La CONTRATANTE tiene su domicilio en la calle Guip�zcoa E16-02 y Av. Coru�a, Quito - Ecuador." +
                    "\n \n" + "2.	La CONTRATISTA est� domiciliada en " + empresa.XDireccion + ", " + empresa.Ciudad + ", " + empresa.Pais + ".", normal));

            agregarLineasEnBlanco(document, 1);

            //DECIMA TERCERA
            document.Add(new Paragraph("D�CIMA TERCERA: CONTROVERSIAS.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("En el evento de presentarse cualquier controversia relacionada con o derivada de este contrato y su " +
                    "ejecuci�n, y que no pueda ser resuelta mediante mutuo acuerdo entre las partes, directamente o a trav�s de una mediaci�n en " +
                    "el Centro de Arbitraje y Mediaci�n de la C�mara de Comercio de Quito, las partes renuncian fuero y domicilio y se someten a " +
                    "la resoluci�n de un Tribunal de Arbitraje de la C�mara de Comercio de Quito, que se sujetar� a lo dispuesto en " +
                    "la Ley de Arbitraje y Mediaci�n vigente.", normal));

            agregarLineasEnBlanco(document, 1);

            //DECIMA CUARTA
            document.Add(new Paragraph("D�CIMA CUARTA: ACEPTACI�N.-", subtitulo));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("Las partes declaran aceptar el contenido de este contrato, incluyendo los documentos anexos, por as� convenir " +
                    "a sus intereses. Para constancia de lo acordado, las partes suscriben el presente contrato en la ciudad de Quito, " +
                    "el d�a " + fechaFirma + ".", normal));

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
                    persona.Nombres + " " + persona.Apellidos + "\n" +
                    persona.Id, normal));



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
                    "Responsable contrato en FFLA: " + usuario + "\n" +
                    "Fecha de elaboraci�n: " + xFechaElaboracion, normal));

            agregarLineasEnBlanco(document, 1);

            document.Add(new Paragraph("REGISTRO DAF:", subtitulo));

            document.Add(new Paragraph("Recibe para aprobaci�n final: ___________\n" +
                    "Entrega a DE para firma: __________\n" +
                    "Recibe con firma de DE: __________\n" +
                    "Entrega para firma de Contratista: ___________\n" +
                    "Recibe con firma de Contratista: ___________", normal));
                    
                    
                    
                    
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