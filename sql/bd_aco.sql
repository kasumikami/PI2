-- MySQL Script generated by MySQL Workbench
-- Sun May 17 18:12:42 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bd_aco
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `bd_aco` ;

-- -----------------------------------------------------
-- Schema bd_aco
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_aco` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;
USE `bd_aco` ;

-- -----------------------------------------------------
-- Table `bd_aco`.`administrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_aco`.`administrador` ;

CREATE TABLE IF NOT EXISTS `bd_aco`.`administrador` (
  `idADM` INT NOT NULL AUTO_INCREMENT,
  `nomeADM` VARCHAR(45) NOT NULL,
  `loginADM` INT(11) NOT NULL,
  `senhaADM` VARCHAR(45) NOT NULL,
  `nivelADM` INT NOT NULL,
  PRIMARY KEY (`idADM`),
  UNIQUE INDEX `loginADM_UNIQUE` (`loginADM` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `bd_aco`.`biblioteca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_aco`.`biblioteca` ;

CREATE TABLE IF NOT EXISTS `bd_aco`.`biblioteca` (
  `idBIB` INT NOT NULL AUTO_INCREMENT,
  `nomeBIB` VARCHAR(100) NOT NULL,
  `emailBIB` VARCHAR(75) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `horarioFuncionamento` VARCHAR(100) NOT NULL,
  `loginBIB` VARCHAR(4) NOT NULL,
  `senhaBIB` VARCHAR(45) NOT NULL,
  `nivel` INT NOT NULL,
  PRIMARY KEY (`idBIB`),
  UNIQUE INDEX `emailBIB_UNIQUE` (`emailBIB` ASC),
  UNIQUE INDEX `telefoneBIB_UNIQUE` (`telefone` ASC),
  UNIQUE INDEX `loginBIB_UNIQUE` (`loginBIB` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `bd_aco`.`categoria_obra`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_aco`.`categoria_obra` ;

CREATE TABLE IF NOT EXISTS `bd_aco`.`categoria_obra` (
  `idCAT` INT NOT NULL AUTO_INCREMENT,
  `nomeCAT` VARCHAR(45) NOT NULL,
  `administrador_idADM` INT NULL DEFAULT NULL,
  PRIMARY KEY (`idCAT`),
  INDEX `fk_categoria_obra_administrador1_idx` (`administrador_idADM` ASC),
  UNIQUE INDEX `nomeCAT_UNIQUE` (`nomeCAT` ASC),
  CONSTRAINT `fk_categoria_obra_administrador1`
    FOREIGN KEY (`administrador_idADM`)
    REFERENCES `bd_aco`.`administrador` (`idADM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `bd_aco`.`leitor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_aco`.`leitor` ;

CREATE TABLE IF NOT EXISTS `bd_aco`.`leitor` (
  `idLEITOR` INT NOT NULL AUTO_INCREMENT,
  `nomeLEITOR` VARCHAR(100) NOT NULL,
  `emailLEITOR` VARCHAR(75) NOT NULL,
  `tipo_usuario_idUSUARIO` INT NOT NULL,
  PRIMARY KEY (`idLEITOR`),
  UNIQUE INDEX `emailLEITOR_UNIQUE` (`emailLEITOR` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


-- -----------------------------------------------------
-- Table `bd_aco`.`obra_literaria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_aco`.`obra_literaria` ;

CREATE TABLE IF NOT EXISTS `bd_aco`.`obra_literaria` (
  `idOBRA` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `autor` VARCHAR(100) NOT NULL,
  `anoPub` DATE NOT NULL,
  `edicao` INT(10) UNSIGNED NOT NULL,
  `editora` VARCHAR(45) NOT NULL,
  `isbn` INT(4) NOT NULL,
  `qtCopias` INT(10) UNSIGNED NOT NULL,
  `categoria_obra_idCAT` INT NOT NULL,
  `biblioteca_idBIB` INT NOT NULL,
  PRIMARY KEY (`idOBRA`),
  INDEX `fk_obra_literaria_categoria_obra1_idx` (`categoria_obra_idCAT` ASC),
  INDEX `fk_obra_literaria_biblioteca1_idx` (`biblioteca_idBIB` ASC),
  CONSTRAINT `fk_obra_literaria_categoria_obra1`
    FOREIGN KEY (`categoria_obra_idCAT`)
    REFERENCES `bd_aco`.`categoria_obra` (`idCAT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_obra_literaria_biblioteca1`
    FOREIGN KEY (`biblioteca_idBIB`)
    REFERENCES `bd_aco`.`biblioteca` (`idBIB`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
