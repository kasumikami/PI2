-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Maio-2020 às 22:06
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `idADM` int(11) NOT NULL AUTO_INCREMENT,
  `nomeADM` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `loginADM` varchar(6) COLLATE utf8_general_ci NOT NULL,
  `senhaADM` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `nivelADM` int(2) NOT NULL,
  PRIMARY KEY (`idADM`),
  UNIQUE KEY `loginADM_UNIQUE` (`loginADM`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idADM`, `nomeADM`, `loginADM`, `senhaADM`, `nivelADM`) VALUES
(1, 'milla', '2001', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `biblioteca`
--

DROP TABLE IF EXISTS `biblioteca`;
CREATE TABLE IF NOT EXISTS `biblioteca` (
  `idBIB` int(11) NOT NULL AUTO_INCREMENT,
  `nomeBIB` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `emailBIB` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8_general_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `horarioFuncionamento` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `loginBIB` varchar(10) COLLATE utf8_general_ci NOT NULL,
  `senhaBIB` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `nivelBIB` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`idBIB`),
  UNIQUE KEY `emailBIB_UNIQUE` (`emailBIB`),
  UNIQUE KEY `telefoneBIB_UNIQUE` (`telefone`),
  UNIQUE KEY `loginBIB_UNIQUE` (`loginBIB`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `biblioteca`
--

INSERT INTO `biblioteca` (`idBIB`, `nomeBIB`, `emailBIB`, `telefone`, `endereco`, `horarioFuncionamento`, `loginBIB`, `senhaBIB`, `nivelBIB`) VALUES
(1, 'Biblioteca Nacional de Brasí­lia', 'bnb@cultura.df.gov.br', '6132325656', 'Setor Cultural da República, Área CÍ­vica, Lote s/n Edifício da Biblioteca Nacional, DF, 70070-150', 'seg-sex 8h-20h / sáb-dom 8h-14h', 'bnb333', '11fc3f2dd22d702c349bd6498b0d9170bb79515e', 2),
(2, 'Biblioteca Governador Eurico Rezende', 'udf@teste.com', '6123238989', 'SEP/SUL EQ704 / 904 Conj.A, Brasí­lia DF - CEP 70390-045', '7h30 a 22h30', 'udfbib', '4e05d4fa6439a3daf2b853e3df1858d42e861df1', 2),
(3, 'Biblioteca Teste', 'emailteste@gmail.com', '6188887777', 'Rua X, Bloco AA', 'seg-sex 9h-19h / sÃ¡b-dom 9h-14h', 'tst123', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_obra`
--

DROP TABLE IF EXISTS `categoria_obra`;
CREATE TABLE IF NOT EXISTS `categoria_obra` (
  `idCAT` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCAT` varchar(45) COLLATE utf8_general_ci NOT NULL,
  `administrador_idADM` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCAT`),
  UNIQUE KEY `nomeCAT_UNIQUE` (`nomeCAT`),
  KEY `fk_categoria_obra_administrador1_idx` (`administrador_idADM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

DROP TABLE IF EXISTS `leitor`;
CREATE TABLE IF NOT EXISTS `leitor` (
  `idLEITOR` int(11) NOT NULL AUTO_INCREMENT,
  `nomeLEITOR` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `emailLEITOR` varchar(75) COLLATE utf8_general_ci NOT NULL,
  `nivelLEITOR` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`idLEITOR`),
  UNIQUE KEY `emailLEITOR_UNIQUE` (`emailLEITOR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra_literaria`
--

DROP TABLE IF EXISTS `obra_literaria`;
CREATE TABLE IF NOT EXISTS `obra_literaria` (
  `idOBRA` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `anoPub` date NOT NULL,
  `edicao` int(3) UNSIGNED NOT NULL,
  `editora` varchar(1000) COLLATE utf8_general_ci NOT NULL,
  `isbn` varchar(20) COLLATE utf8_general_ci NOT NULL,
  `qtCopias` int(10) UNSIGNED NOT NULL,
  `categoria_obra_idCAT` int(11) NOT NULL,
  `biblioteca_idBIB` int(11) NOT NULL,
  PRIMARY KEY (`idOBRA`),
  KEY `fk_obra_literaria_categoria_obra1_idx` (`categoria_obra_idCAT`),
  KEY `fk_obra_literaria_biblioteca1_idx` (`biblioteca_idBIB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categoria_obra`
--
ALTER TABLE `categoria_obra`
  ADD CONSTRAINT `fk_categoria_obra_administrador1` FOREIGN KEY (`administrador_idADM`) REFERENCES `aco`.`administrador` (`idADM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `obra_literaria`
--
ALTER TABLE `obra_literaria`
  ADD CONSTRAINT `fk_obra_literaria_biblioteca1` FOREIGN KEY (`biblioteca_idBIB`) REFERENCES `biblioteca` (`idBIB`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_obra_literaria_categoria_obra1` FOREIGN KEY (`categoria_obra_idCAT`) REFERENCES `categoria_obra` (`idCAT`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
