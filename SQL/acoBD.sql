-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Maio-2020 às 00:55
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `idADM` int(11) NOT NULL AUTO_INCREMENT,
  `idLOGIN` int(6) NOT NULL,
  `nomeADM` varchar(100) NOT NULL,
  `senhaADM` varchar(45) NOT NULL,
  `tipo_usuario_idUSUARIO` int(11) NOT NULL,
  PRIMARY KEY (`idADM`),
  UNIQUE KEY `idADM_UNIQUE` (`idADM`),
  UNIQUE KEY `senhaADM_UNIQUE` (`senhaADM`),
  UNIQUE KEY `idLOGIN_UNIQUE` (`idLOGIN`),
  KEY `fk_administrador_tipo_usuario1_idx` (`tipo_usuario_idUSUARIO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idADM`, `idLOGIN`, `nomeADM`, `senhaADM`, `tipo_usuario_idUSUARIO`) VALUES
(1, 721499, 'milla', 'root', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

DROP TABLE IF EXISTS `biblioteca`;
CREATE TABLE IF NOT EXISTS `biblioteca` (
  `idbiblioteca` int(11) NOT NULL,
  `idLOGIN` int(6) NOT NULL,
  `nomeBIB` varchar(100) NOT NULL,
  `emailBIB` varchar(45) NOT NULL,
  `telefoneBIB` varchar(20) NOT NULL,
  `enderecoBIB` varchar(100) NOT NULL,
  `horarioFuncionamento` varchar(45) NOT NULL,
  `senhaBIBLIOTECA` varchar(45) NOT NULL,
  `rede_social_idRS` int(11) DEFAULT NULL,
  `tipo_usuario_idUSUARIO` int(11) NOT NULL,
  PRIMARY KEY (`idbiblioteca`),
  UNIQUE KEY `idbiblioteca_UNIQUE` (`idbiblioteca`),
  UNIQUE KEY `emailBIB_UNIQUE` (`emailBIB`),
  UNIQUE KEY `senhaBIBLIOTECA_UNIQUE` (`senhaBIBLIOTECA`),
  UNIQUE KEY `idLOGIN_UNIQUE` (`idLOGIN`),
  KEY `fk_biblioteca_rede_social1_idx` (`rede_social_idRS`),
  KEY `fk_biblioteca_tipo_usuario1_idx` (`tipo_usuario_idUSUARIO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rede_social`
--

DROP TABLE IF EXISTS `rede_social`;
CREATE TABLE IF NOT EXISTS `rede_social` (
  `idRS` int(11) NOT NULL AUTO_INCREMENT,
  `nomeRS` varchar(45) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`idRS`),
  UNIQUE KEY `idrede_social_UNIQUE` (`idRS`),
  UNIQUE KEY `nomeRS_UNIQUE` (`nomeRS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `idUSUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUSUARIO` varchar(45) NOT NULL,
  PRIMARY KEY (`idUSUARIO`),
  UNIQUE KEY `nomeUSuario_UNIQUE` (`nomeUSUARIO`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`idUSUARIO`, `nomeUSUARIO`) VALUES
(1, 'adm'),
(2, 'biblioteca'),
(3, 'leitor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
