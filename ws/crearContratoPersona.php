<?php
	
	include_once '../negocios/negoPersona.php';
	include_once '../negocios/negoCuentaBanco.php';
	include_once '../negocios/negoContrato.php';
	include_once '../negocios/negoProyecto.php';
	include_once '../negocios/negoUsuario.php';
	
	$persona = new NegoPersona();
	$cuenta = new NegoCuentaBanco();
	$contrato = new NegoContrato();
	$proyecto = new NegoProyecto();
	$usuario = new NegoUsuario();

	
	$persona->setId();
	// //Datos personales
 //    contrato.Persona.Nombres = txtNombres.Text;
 //    contrato.Persona.Apellidos = txtApellidos.Text;
 //    contrato.Persona.Id = txtDocumento.Text;
 //    contrato.PersID = contrato.Persona.Id;
 //    contrato.Persona.Telefono = txtTelefono.Text;
 //    contrato.Persona.XDireccion = txtDireccion.Text;
 //    contrato.Persona.Ciudad = txtCiudad.Text;
 //    contrato.Persona.Pais = cmbPais.Text;
 //    contrato.Persona.Profesion = txtProfesion.Text;
 //    //objeto
 //    contrato.Persona.XExperienca = rtxtExperiencia.Text;
 //    contrato.Consultoria = txtConsultoria.Text;
 //    contrato.XDescripcion = rtxtDescripcion.Text;
 //    if (rbtnExisten.Checked)
 //        contrato.XObligacionesAdicionales = rtxtObligaciones.Text;
 //    //duracion y honorarios
 //    contrato.FechaInicio = fechaInicio.Text;
 //    contrato.FechaFin = fechaFin.Text;
 //    int duracion = (int)fechaFin.Value.Subtract(fechaInicio.Value).TotalDays;
 //    contrato.XDuracion = duracion + 1;
 //    contrato.Monto = txtMonto.Text;
 //    contrato.Pais = cmbPaisEjec.Text;
 //    if (rbtnIVAt.Checked)
 //        contrato.XIva = "incluye IVA";
 //    else
 //        contrato.XIva = "más IVA";
 //    if (rbtnIRt.Checked)
 //        contrato.XIr = "incluye IR";
 //    else
 //        contrato.XIr = "más IR";
 //    if (rbtnGastost.Checked)
 //        contrato.XGastos = "si";
 //    else
 //        contrato.XGastos = "no";
 //    contrato.XFormaPago = rtxtForma.Text;
 //    //datos bancarios
 //    contrato.Cuenta.NombreBanco = txtBanco.Text;
 //    contrato.Cuenta.Numero = txtCuenta.Text;
 //    contrato.Persona.CtaNumero = contrato.Cuenta.Numero;
 //    if (rbtnNacional.Checked)
 //        contrato.Cuenta.Tipo = cmbTipo.Text;
 //    else
 //        contrato.Cuenta.Swift = txtSWIFT.Text;
 //    //Datos Internos
 //    contrato.FechaFirma = fechaFirma.Text;
 //    contrato.Proyecto.Programa = txtIE.Text;
 //    contrato.Proyecto.Nombre = comboBox1.Text;
 //    contrato.Proyecto.LineaPresupuestaria = txtLinea.Text;
 //    contrato.Proyecto.Fondos = txtFondos.Text;
 //    contrato.UsuID = Program.s;
 //    contrato.XFechaElaboracion = fechaElab.Text;

?>