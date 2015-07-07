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
-- Structure for view `vempresas`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vempresas` AS select `t_empresa`.`EMP_RUC` AS `RUC`,`t_empresa`.`EMP_NOMBRE` AS `Nombre`,`t_empresa`.`PER_ID` AS `ID del Representante`,((`t_persona`.`PER_NOMBRE` + ' ') + `t_persona`.`PER_APELLIDO`) AS `Nombre del Representante`,`t_empresa`.`EMP_ESPECIALIDAD` AS `Especialidad`,`t_empresa`.`EMP_PAIS` AS `Pais`,`t_empresa`.`EMP_CIUDAD` AS `Ciudad`,`t_empresa`.`EMP_TELEFONO` AS `Telefono` from (`t_persona` join `t_empresa` on((`t_persona`.`PER_ID` = `t_empresa`.`PER_ID`)));

--
-- VIEW  `vempresas`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
