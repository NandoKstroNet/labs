-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/08/2013 às 16h27min
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `agenda_nandokstro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ag_atividades`
--

CREATE TABLE IF NOT EXISTS `ag_atividades` (
  `ativi_id` int(11) NOT NULL AUTO_INCREMENT,
  `ativi_nomecliente` varchar(80) DEFAULT NULL,
  `ativi_emailcliente` varchar(80) DEFAULT NULL,
  `ativi_telefonecliente` varchar(80) DEFAULT NULL,
  `ativi_datadaatividade` date DEFAULT NULL,
  `ativi_horadaatividade` time DEFAULT NULL,
  `ativi_descricao` longtext,
  `ativi_status` char(1) DEFAULT NULL,
  PRIMARY KEY (`ativi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
