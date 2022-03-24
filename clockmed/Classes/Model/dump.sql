CREATE TABLE IF NOT EXISTS `Medicamento` (
  `idMedicamento` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `codigoBarras` VARCHAR(60) NOT NULL,
  `dataCadastro` DATE NOT NULL,
  `imagem` VARCHAR(150) NULL,
  `observacoes` TEXT NULL,
  `ativo` TINYINT NULL,
  PRIMARY KEY (`idMedicamento`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `codigoBarras_UNIQUE` ON `Medicamento` (`codigoBarras` ASC);


CREATE TABLE IF NOT EXISTS `Substancia` (
  `idSubstancia` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `dataCadastro` DATE NOT NULL,
  `observacoes` TEXT NULL,
  `Ativo` TINYINT NULL COMMENT 'Não é necessario informar no cadastro a data de cadastro e nem se está ativo porque será inserido automaticamente sem receber os paramestros',
  `idMedicamento` INT NOT NULL,
  PRIMARY KEY (`idSubstancia`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `ReceitaMedica` (
  `idReceitaMedica` INT NOT NULL,
  PRIMARY KEY (`idReceitaMedica`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB
