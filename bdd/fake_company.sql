-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2015 at 11:16 AM
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
-- Stand-in structure for view `help`
--
CREATE TABLE IF NOT EXISTS `help` (
`Numero de Contrato` int(11)
,`Enmiendas` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `t_area`
--

CREATE TABLE IF NOT EXISTS `t_area` (
  `A_ID` int(11) NOT NULL AUTO_INCREMENT,
  `A_NOMBRE` varchar(200) NOT NULL,
  PRIMARY KEY (`A_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_contrato`
--

CREATE TABLE IF NOT EXISTS `t_contrato` (
  `CON_NUMERO` int(11) NOT NULL,
  `CON_FECHA_INI` date NOT NULL,
  `CON_FECHA_FIN` date NOT NULL,
  `CON_CONSULTORIA` varchar(200) NOT NULL,
  `CON_MONTO` double NOT NULL,
  `CON_PAIS` varchar(200) NOT NULL,
  `USU_ID` int(11) NOT NULL,
  `EMP_RUC` varchar(200) DEFAULT NULL,
  `PER_ID` int(11) NOT NULL,
  `PROY_ID` int(11) NOT NULL,
  `CON_LINK` varchar(2000) DEFAULT NULL,
  `CON_FECHA_FIRMA` date NOT NULL,
  PRIMARY KEY (`CON_NUMERO`),
  KEY `USU_ID` (`USU_ID`),
  KEY `EMP_RUC` (`EMP_RUC`),
  KEY `PER_ID` (`PER_ID`),
  KEY `PROY_ID` (`PROY_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_empresa`
--

CREATE TABLE IF NOT EXISTS `t_empresa` (
  `EMP_RUC` varchar(200) NOT NULL,
  `EMP_NOMBRE` varchar(200) NOT NULL,
  `EMP_ESPECIALIDAD` varchar(200) NOT NULL,
  `EMP_TELEFONO` varchar(200) NOT NULL,
  `EMP_CIUDAD` varchar(200) NOT NULL,
  `EMP_PAIS` varchar(200) NOT NULL,
  `EMP_CARGO` varchar(200) NOT NULL,
  `PER_ID` int(11) NOT NULL,
  PRIMARY KEY (`EMP_RUC`),
  KEY `PER_ID` (`PER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t_enmienda`
--

CREATE TABLE IF NOT EXISTS `t_enmienda` (
  `ENM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ENM_NUMERO` int(11) NOT NULL,
  `ENM_FECHA_FIN` date NOT NULL,
  `ENM_CONSULTORIA` varchar(200) NOT NULL,
  `ENM_MONTO` double NOT NULL,
  `USU_ID` int(11) NOT NULL,
  `CON_NUMERO` int(11) NOT NULL,
  `ENM_LINK` varchar(2000) NOT NULL,
  `ENM_FECHA_FIRMA` date NOT NULL,
  PRIMARY KEY (`ENM_ID`),
  KEY `USU_ID` (`USU_ID`),
  KEY `CON_ID` (`CON_NUMERO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_persona`
--

CREATE TABLE IF NOT EXISTS `t_persona` (
  `PER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PER_NOMBRE` varchar(200) DEFAULT NULL,
  `PER_APELLIDO` varchar(200) NOT NULL,
  `PER_PROFESION` varchar(200) NOT NULL,
  `PER_TELEFONO` varchar(200) NOT NULL,
  `PER_CIUDAD` varchar(200) NOT NULL,
  `PER_PAIS` varchar(200) NOT NULL,
  `PER_CARGO` varchar(200) NOT NULL,
  PRIMARY KEY (`PER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1721531958 ;

--
-- Dumping data for table `t_persona`
--

INSERT INTO `t_persona` (`PER_ID`, `PER_NOMBRE`, `PER_APELLIDO`, `PER_PROFESION`, `PER_TELEFONO`, `PER_CIUDAD`, `PER_PAIS`, `PER_CARGO`) VALUES
(1721531950, 'Andres', 'Ruiz', 'Estudiante', '241959', 'Quito', 'Ecuador', 'NA'),
(1721531957, NULL, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_proyecto`
--

CREATE TABLE IF NOT EXISTS `t_proyecto` (
  `PROY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROY_NOMBRE` varchar(200) NOT NULL,
  `A_ID` int(11) NOT NULL,
  PRIMARY KEY (`PROY_ID`),
  KEY `A_ID` (`A_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_usuario`
--

CREATE TABLE IF NOT EXISTS `t_usuario` (
  `USU_ID` int(11) NOT NULL,
  `USU_NOMBRE` varchar(200) NOT NULL,
  `USU_MAIL` varchar(200) NOT NULL,
  PRIMARY KEY (`USU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vcontratocompleta`
--
CREATE TABLE IF NOT EXISTS `vcontratocompleta` (
`Numero de contrato` int(11)
,`Fecha de firma` date
,`Nombre Contratista` varchar(200)
,`ID Contratista` varchar(200)
,`Especialización Contratista` varchar(200)
,`Consultoria` varchar(200)
,`Fecha de Inicio` date
,`Fecha de Fin` date
,`Honorarios` double
,`Pais de ejecución` varchar(200)
,`Proyecto` varchar(200)
,`Responsable del contrato` int(11)
,`Enmiendas` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vempresas`
--
CREATE TABLE IF NOT EXISTS `vempresas` (
`RUC` varchar(200)
,`Nombre` varchar(200)
,`ID del Representante` int(11)
,`Nombre del Representante` double
,`Especialidad` varchar(200)
,`Pais` varchar(200)
,`Ciudad` varchar(200)
,`Telefono` varchar(200)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `venmiendacompleta`
--
CREATE TABLE IF NOT EXISTS `venmiendacompleta` (
`Numero de Contrato` int(11)
,`Fecha de Contrato` date
,`Numero de Enmienda` int(11)
,`Fecha de Enmienda` date
,`Nombre Contratista` varchar(200)
,`ID Contratista` varchar(200)
,`Consultoria` varchar(200)
,`Fecha de Inicio Contrato` date
,`Fecha Fin` date
,`Honorarios` double
,`Proyecto` varchar(200)
,`Responsable del contrato` varchar(200)
);
-- --------------------------------------------------------

--
-- Structure for view `help`
--
DROP TABLE IF EXISTS `help`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `help` AS select `t_contrato`.`CON_NUMERO` AS `Numero de Contrato`,count(`t_enmienda`.`ENM_NUMERO`) AS `Enmiendas` from (`t_contrato` left join `t_enmienda` on((`t_contrato`.`CON_NUMERO` = `t_enmienda`.`CON_NUMERO`))) group by `t_contrato`.`CON_NUMERO`;

-- --------------------------------------------------------

--
-- Structure for view `vcontratocompleta`
--
DROP TABLE IF EXISTS `vcontratocompleta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcontratocompleta` AS select `contrato`.`CON_NUMERO` AS `Numero de contrato`,`contrato`.`CON_FECHA_FIRMA` AS `Fecha de firma`,(case when isnull(`contrato`.`EMP_RUC`) then ((`p`.`PER_NOMBRE` + ' ') + `p`.`PER_APELLIDO`) else `e`.`EMP_NOMBRE` end) AS `Nombre Contratista`,(case when isnull(`contrato`.`EMP_RUC`) then `contrato`.`PER_ID` else `contrato`.`EMP_RUC` end) AS `ID Contratista`,(case when isnull(`contrato`.`EMP_RUC`) then `p`.`PER_PROFESION` else `e`.`EMP_ESPECIALIDAD` end) AS `Especialización Contratista`,(case when (`cons`.`Enmiendas` = 0) then `contrato`.`CON_CONSULTORIA` else `enmienda`.`ENM_CONSULTORIA` end) AS `Consultoria`,`contrato`.`CON_FECHA_INI` AS `Fecha de Inicio`,(case when (`cons`.`Enmiendas` = 0) then `contrato`.`CON_FECHA_FIN` else `enmienda`.`ENM_FECHA_FIN` end) AS `Fecha de Fin`,(case when (`cons`.`Enmiendas` = 0) then `contrato`.`CON_MONTO` else `enmienda`.`ENM_MONTO` end) AS `Honorarios`,`contrato`.`CON_PAIS` AS `Pais de ejecución`,`proyecto`.`PROY_NOMBRE` AS `Proyecto`,`contrato`.`USU_ID` AS `Responsable del contrato`,`cons`.`Enmiendas` AS `Enmiendas` from ((`help` `cons` join (((`t_contrato` `contrato` left join `t_enmienda` `enmienda` on((`enmienda`.`CON_NUMERO` = `contrato`.`CON_NUMERO`))) left join `t_empresa` `e` on((`contrato`.`EMP_RUC` = `e`.`EMP_RUC`))) left join `t_persona` `p` on((`contrato`.`PER_ID` = `p`.`PER_ID`)))) join `t_proyecto` `proyecto`) where (('Numero de Contrato' = `contrato`.`CON_NUMERO`) and ((`cons`.`Enmiendas` = `enmienda`.`ENM_NUMERO`) or (`cons`.`Enmiendas` = 0)) and (`contrato`.`PROY_ID` = `proyecto`.`PROY_ID`) and ((`contrato`.`EMP_RUC` = `e`.`EMP_RUC`) or (`contrato`.`PER_ID` = `p`.`PER_ID`)));

-- --------------------------------------------------------

--
-- Structure for view `vempresas`
--
DROP TABLE IF EXISTS `vempresas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vempresas` AS select `t_empresa`.`EMP_RUC` AS `RUC`,`t_empresa`.`EMP_NOMBRE` AS `Nombre`,`t_empresa`.`PER_ID` AS `ID del Representante`,((`t_persona`.`PER_NOMBRE` + ' ') + `t_persona`.`PER_APELLIDO`) AS `Nombre del Representante`,`t_empresa`.`EMP_ESPECIALIDAD` AS `Especialidad`,`t_empresa`.`EMP_PAIS` AS `Pais`,`t_empresa`.`EMP_CIUDAD` AS `Ciudad`,`t_empresa`.`EMP_TELEFONO` AS `Telefono` from (`t_persona` join `t_empresa` on((`t_persona`.`PER_ID` = `t_empresa`.`PER_ID`)));

-- --------------------------------------------------------

--
-- Structure for view `venmiendacompleta`
--
DROP TABLE IF EXISTS `venmiendacompleta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `venmiendacompleta` AS select `t_enmienda`.`CON_NUMERO` AS `Numero de Contrato`,`c`.`CON_FECHA_FIRMA` AS `Fecha de Contrato`,`t_enmienda`.`ENM_NUMERO` AS `Numero de Enmienda`,`t_enmienda`.`ENM_FECHA_FIRMA` AS `Fecha de Enmienda`,(case when isnull(`c`.`EMP_RUC`) then ((`p`.`PER_NOMBRE` + ' ') + `p`.`PER_APELLIDO`) else `e`.`EMP_NOMBRE` end) AS `Nombre Contratista`,(case when isnull(`c`.`EMP_RUC`) then `c`.`PER_ID` else `c`.`EMP_RUC` end) AS `ID Contratista`,`t_enmienda`.`ENM_CONSULTORIA` AS `Consultoria`,`c`.`CON_FECHA_INI` AS `Fecha de Inicio Contrato`,`t_enmienda`.`ENM_FECHA_FIN` AS `Fecha Fin`,`t_enmienda`.`ENM_MONTO` AS `Honorarios`,`pr`.`PROY_NOMBRE` AS `Proyecto`,`t_usuario`.`USU_NOMBRE` AS `Responsable del contrato` from (((((`t_enmienda` join `t_contrato` `c` on((`t_enmienda`.`CON_NUMERO` = `c`.`CON_NUMERO`))) left join `t_empresa` `e` on((`c`.`EMP_RUC` = `e`.`EMP_RUC`))) left join `t_persona` `p` on((`c`.`PER_ID` = `p`.`PER_ID`))) left join `t_usuario` on((`t_enmienda`.`USU_ID` = `t_usuario`.`USU_ID`))) join `t_proyecto` `pr`) where ((`c`.`PROY_ID` = `pr`.`PROY_ID`) and ((`c`.`EMP_RUC` = `e`.`EMP_RUC`) or (`c`.`PER_ID` = `p`.`PER_ID`)));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_contrato`
--
ALTER TABLE `t_contrato`
  ADD CONSTRAINT `t_contrato_ibfk_1` FOREIGN KEY (`USU_ID`) REFERENCES `t_usuario` (`USU_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_contrato_ibfk_2` FOREIGN KEY (`EMP_RUC`) REFERENCES `t_empresa` (`EMP_RUC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_contrato_ibfk_3` FOREIGN KEY (`PER_ID`) REFERENCES `t_persona` (`PER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_contrato_ibfk_4` FOREIGN KEY (`PROY_ID`) REFERENCES `t_proyecto` (`PROY_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_empresa`
--
ALTER TABLE `t_empresa`
  ADD CONSTRAINT `t_empresa_ibfk_1` FOREIGN KEY (`PER_ID`) REFERENCES `t_persona` (`PER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_enmienda`
--
ALTER TABLE `t_enmienda`
  ADD CONSTRAINT `t_enmienda_ibfk_1` FOREIGN KEY (`USU_ID`) REFERENCES `t_usuario` (`USU_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_enmienda_ibfk_2` FOREIGN KEY (`CON_NUMERO`) REFERENCES `t_contrato` (`CON_NUMERO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_proyecto`
--
ALTER TABLE `t_proyecto`
  ADD CONSTRAINT `t_proyecto_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `t_area` (`A_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
