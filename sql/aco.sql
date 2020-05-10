
-- -----------------------------------------------------
-- Table `acobd`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `acobd`.`administrador` (
  `loginADM` INT NOT NULL AUTO_INCREMENT,
  `nomeADM` VARCHAR(45) NOT NULL,
  `senhaADM` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`loginADM`),
  UNIQUE INDEX `senhaADM_UNIQUE` (`senhaADM` ASC),
  UNIQUE INDEX `idLOGIN_UNIQUE` (`loginADM` ASC)
  )ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `acobd`.`leitor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `acobd`.`leitor` (
  `idleitor` INT NOT NULL AUTO_INCREMENT,
  `nomeLEITOR` VARCHAR(100) NOT NULL,
  `emailLEITOR` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idleitor`),
  UNIQUE INDEX `idleitor_UNIQUE` (`idleitor` ASC)  ,
  UNIQUE INDEX `emailLEITOR_UNIQUE` (`emailLEITOR` ASC)
  )ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `acobd`.`biblioteca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `acobd`.`biblioteca` (
  `idBIB` INT NOT NULL AUTO_INCREMENT,
  `loginBIB` VARCHAR(6) NOT NULL,
  `nomeBIB` VARCHAR(45) NOT NULL,
  `emailBIB` VARCHAR(45) NOT NULL,
  `telefoneBIB` VARCHAR(20) NOT NULL,
  `enderecoBIB` VARCHAR(100) NOT NULL,
  `horarioFuncionamento` VARCHAR(45) NOT NULL,
  `senhaBIBLIOTECA` VARCHAR(45) NOT NULL,
  UNIQUE INDEX `emailBIB_UNIQUE` (`emailBIB` ASC),
  UNIQUE INDEX `senhaBIBLIOTECA_UNIQUE` (`senhaBIBLIOTECA` ASC),
  UNIQUE INDEX `idLOGIN_UNIQUE` (`loginBIB` ASC),
  PRIMARY KEY (`idBIB`)
  )ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `acobd`.`categoria_obra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `acobd`.`categoria_obra` (
  `idcategoria_obra` INT NOT NULL,
  `nome_categoria` VARCHAR(45) NOT NULL,
  `administrador_loginADM` INT NOT NULL,
  UNIQUE INDEX `idcategoria_obra_UNIQUE` (`idcategoria_obra` ASC)  ,
  UNIQUE INDEX `nome_categoria_UNIQUE` (`nome_categoria` ASC)  ,
  PRIMARY KEY (`idcategoria_obra`),
  INDEX `fk_categoria_obra_administrador1_idx` (`administrador_loginADM` ASC)  ,
  CONSTRAINT `fk_categoria_obra_administrador1`
    FOREIGN KEY (`administrador_loginADM`)
    REFERENCES `acobd`.`administrador` (`loginADM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `acobd`.`obra_literaria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `acobd`.`obra_literaria` (
  `idobra_literaria` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `ano_publicacao` VARCHAR(4) NOT NULL,
  `edicao` INT(2) NOT NULL,
  `editora` VARCHAR(45) NOT NULL,
  `isbn` VARCHAR(45) NOT NULL,
  `qtd_copias` INT(4) NULL,
  `biblioteca_loginBIB` INT NOT NULL,
  `categoria_obra_idcategoria_obra` INT NOT NULL,
  PRIMARY KEY (`idobra_literaria`),
  UNIQUE INDEX `idobra_literaria_UNIQUE` (`idobra_literaria` ASC)  ,
  INDEX `fk_obra_literaria_categoria_obra1_idx` (`categoria_obra_idcategoria_obra` ASC)  ,
  INDEX `fk_obra_literaria_biblioteca1_idx` (`biblioteca_loginBIB` ASC)  ,
  CONSTRAINT `fk_obra_literaria_categoria_obra1`
    FOREIGN KEY (`categoria_obra_idcategoria_obra`)
    REFERENCES `acobd`.`categoria_obra` (`idcategoria_obra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_obra_literaria_biblioteca1`
    FOREIGN KEY (`biblioteca_loginBIB`)
    REFERENCES `acobd`.`biblioteca` (`loginBIB`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

