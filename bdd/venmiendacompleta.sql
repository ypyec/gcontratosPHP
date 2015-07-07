-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2015 at 08:18 PM
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
-- Structure for view `venmiendacompleta`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `venmiendacompleta` AS select `t_enmienda`.`CON_NUMERO` AS `Numero de Contrato`,`c`.`CON_FECHA_FIRMA` AS `Fecha de Contrato`,`t_enmienda`.`ENM_NUMERO` AS `Numero de Enmienda`,`t_enmienda`.`ENM_FECHA_FIRMA` AS `Fecha de Enmienda`,(case when isnull(`c`.`EMP_RUC`) then ((`p`.`PER_NOMBRE` + ' ') + `p`.`PER_APELLIDO`) else `e`.`EMP_NOMBRE` end) AS `Nombre Contratista`,(case when isnull(`c`.`EMP_RUC`) then `c`.`PER_ID` else `c`.`EMP_RUC` end) AS `ID Contratista`,`t_enmienda`.`ENM_CONSULTORIA` AS `Consultoria`,`c`.`CON_FECHA_INI` AS `Fecha de Inicio Contrato`,`t_enmienda`.`ENM_FECHA_FIN` AS `Fecha Fin`,`t_enmienda`.`ENM_MONTO` AS `Honorarios`,`pr`.`PROY_NOMBRE` AS `Proyecto`,`t_usuario`.`USU_NOMBRE` AS `Responsable del contrato` from (((((`t_enmienda` join `t_contrato` `c` on((`t_enmienda`.`CON_NUMERO` = `c`.`CON_NUMERO`))) left join `t_empresa` `e` on((`c`.`EMP_RUC` = `e`.`EMP_RUC`))) left join `t_persona` `p` on((`c`.`PER_ID` = `p`.`PER_ID`))) left join `t_usuario` on((`t_enmienda`.`USU_ID` = `t_usuario`.`USU_ID`))) join `t_proyecto` `pr`) where ((`c`.`PROY_ID` = `pr`.`PROY_ID`) and ((`c`.`EMP_RUC` = `e`.`EMP_RUC`) or (`c`.`PER_ID` = `p`.`PER_ID`)));

--
-- VIEW  `venmiendacompleta`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
