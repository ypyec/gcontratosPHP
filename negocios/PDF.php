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
        $fechaInicio, $fechaFin, $montoPersona, $xIva, $xIr, $paisContrato, $xGastos, $xFormaPago,
        $nombreBanco, $numeroCuenta, $tipoCuenta, $swift, $XDireccionPersona, $ciudadPersona,
        $paisPersona, $fechaFirma, $nombreArea, $proyectoNombre, $usuarioNombre, $xFechaElaboracion)
    {
        // Read text file
        $txt = file_get_contents($file);
        $txt = str_replace(['persona.Nombres', 'persona.Apellidos', 'persona.Id',
            'persona.Profesion', 'persona.XExperienca', 'consultoriaPersona', 'xDescripcion',
            'xObligacionesAdicionales', 'xDuracion', 'fechaInicio', 'fechaFin',
            'montoPersona', 'xIva', 'xIr', 'paisContrato', 'xGastos', 'xFormaPago',
            'cuenta.NombreBanco', 'cuenta.Numero', 'cuenta.Tipo', 'cuenta.Swift',
            'persona.XDireccion', 'persona.Ciudad', 'persona.Pais', 'fechaFirma',
            'proyecto.Programa', 'proyecto.Nombre', 'xUsuario', 'xFechaElaboracion'], [$nombre,
            $apellido, $idPersona, $profesionPersona, $XExperiencaPersona, $consultoriaPersona,
            $xDescripcionPersona, $xObligacionesAdicionalesPersona, $xDuracionPersona, $fechaInicio,
            $fechaFin, $montoPersona, $xIva, $xIr, $paisContrato, $xGastos, $xFormaPago, $nombreBanco,
            $numeroCuenta, $tipoCuenta, $swift, $XDireccionPersona, $ciudadPersona, $paisPersona,
            $fechaFirma, $nombreArea, $proyectoNombre, $usuarioNombre, $xFechaElaboracion],
            $txt);
        // Times 12
        $this->SetFont('Times', '', 12);
        // Output justified text
        $this->MultiCell(0, 5, $txt);
        // Line break
        $this->Ln();
    }

    function ImprimirPDF($numeroContrato, $tituloContrato, $nombre, $apellido, $idPersona, $profesionPersona, $XExperiencaPersona,
        $consultoriaPersona, $xDescripcionPersona, $xObligacionesAdicionalesPersona, $xDuracionPersona,
        $fechaInicio, $fechaFin, $montoPersona, $xIva, $xIr, $paisContrato, $xGastos, $xFormaPago,
        $nombreBanco, $numeroCuenta, $tipoCuenta, $swift, $XDireccionPersona, $ciudadPersona,
        $paisPersona, $fechaFirma, $nombreArea, $proyectoNombre, $usuarioNombre, $xFechaElaboracion)
    {
        $this->AddPage();
        $this->Titulo('../pdf/titulo.txt', $numeroContrato, $tituloContrato);
        $this->Cuerpo('../pdf/cuerpo.txt', $nombre, $apellido, $idPersona, $profesionPersona, $XExperiencaPersona,
        $consultoriaPersona, $xDescripcionPersona, $xObligacionesAdicionalesPersona, $xDuracionPersona,
        $fechaInicio, $fechaFin, $montoPersona, $xIva, $xIr, $paisContrato, $xGastos, $xFormaPago,
        $nombreBanco, $numeroCuenta, $tipoCuenta, $swift, $XDireccionPersona, $ciudadPersona,
        $paisPersona, $fechaFirma, $nombreArea, $proyectoNombre, $usuarioNombre, $xFechaElaboracion);
        
    }
}
//$pdf->Output('../pdf/contrato.pdf','F');
/*$pdf = new PDF();
$pdf->AddPage();
$pdf->Titulo('../pdf/titulo.txt', 1, 'TEST');
$pdf->Cuerpo('../pdf/cuerpo.txt', 'test', 'test', 'test', 'test', 'test', 'test',
    'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test',
    'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test','test');
$pdf->Output();*/

?>
