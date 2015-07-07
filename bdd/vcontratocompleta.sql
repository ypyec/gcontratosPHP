-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2015 at 08:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fake_company`
--

-- --------------------------------------------------------

--
-- Structure for view `vcontratocompleta`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcontratocompleta` AS select `contrato`.`CON_NUMERO` AS `Numero de contrato`,`contrato`.`CON_FECHA_FIRMA` AS `Fecha de firma`,(case when isnull(`contrato`.`EMP_RUC`) then concat_ws(' ',`p`.`PER_NOMBRE`,`p`.`PER_APELLIDO`) else `e`.`EMP_NOMBRE` end) AS `Nombre Contratista`,(case when isnull(`contrato`.`EMP_RUC`) then `contrato`.`PER_ID` else `contrato`.`EMP_RUC` end) AS `ID Contratista`,(case when isnull(`contrato`.`EMP_RUC`) then `p`.`PER_PROFESION` else `e`.`EMP_ESPECIALIDAD` end) AS `Especializaci&oacuten Contratista`,(case when (`cons`.`Enmiendas` = 0) then `contrato`.`CON_CONSULTORIA` else `enmienda`.`ENM_CONSULTORIA` end) AS `Consultoria`,`contrato`.`CON_FECHA_INI` AS `Fecha de Inicio`,(case when (`cons`.`Enmiendas` = 0) then `contrato`.`CON_FECHA_FIN` else `enmienda`.`ENM_FECHA_FIN` end) AS `Fecha de Fin`,(case when (`cons`.`Enmiendas` = 0) then `contrato`.`CON_MONTO` else `enmienda`.`ENM_MONTO` end) AS `Honorarios`,`contrato`.`CON_PAIS` AS `Pais de ejecuci&oacuten`,`proyecto`.`PROY_NOMBRE` AS `Proyecto`,`contrato`.`USU_ID` AS `Responsable del contrato`,`cons`.`Enmiendas` AS `Enmiendas`,`contrato`.`CON_CALIFICACION` AS `Calificacion` from ((`help` `cons` join (((`t_contrato` `contrato` left join `t_enmienda` `enmienda` on((`enmienda`.`CON_NUMERO` = `contrato`.`CON_NUMERO`))) left join `t_empresa` `e` on((`contrato`.`EMP_RUC` = `e`.`EMP_RUC`))) left join `t_persona` `p` on((`contrato`.`PER_ID` = `p`.`PER_ID`)))) join `t_proyecto` `proyecto`) where (((`cons`.`Enmiendas` = `enmienda`.`ENM_NUMERO`) or (`cons`.`Enmiendas` = 0)) and (`contrato`.`PROY_ID` = `proyecto`.`PROY_ID`) and ((`contrato`.`EMP_RUC` = `e`.`EMP_RUC`) or (`contrato`.`PER_ID` = `p`.`PER_ID`)));

--
-- VIEW  `vcontratocompleta`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
