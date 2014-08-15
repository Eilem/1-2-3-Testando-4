SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `123_testando_4` ;
CREATE SCHEMA IF NOT EXISTS `123_testando_4` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `123_testando_4` ;

-- -----------------------------------------------------
-- Table `123_testando_4`.`projeto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`projeto` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`projeto` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `descricao` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`documentacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`documentacao` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`documentacao` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `projeto_id` INT NOT NULL ,
  `tipo` ENUM('1','2') NULL COMMENT '1- Teste , 2- Software' ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_documentacao_projeto1` (`projeto_id` ASC) ,
  CONSTRAINT `fk_documentacao_projeto1`
    FOREIGN KEY (`projeto_id` )
    REFERENCES `123_testando_4`.`projeto` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`software`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`software` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`software` (
  `id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_software_documentacao1`
    FOREIGN KEY (`id` )
    REFERENCES `123_testando_4`.`documentacao` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`caso_de_uso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`caso_de_uso` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`caso_de_uso` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `software_id` INT NOT NULL ,
  `nome` VARCHAR(150) NOT NULL ,
  `identificacao` VARCHAR(12) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) ,
  INDEX `fk_caso_de_uso_software1` (`software_id` ASC) ,
  CONSTRAINT `fk_caso_de_uso_software1`
    FOREIGN KEY (`software_id` )
    REFERENCES `123_testando_4`.`software` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`teste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`teste` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`teste` (
  `id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_teste_documentacao1`
    FOREIGN KEY (`id` )
    REFERENCES `123_testando_4`.`documentacao` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`caso_de_teste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`caso_de_teste` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`caso_de_teste` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `teste_id` INT NOT NULL ,
  `caso_de_uso_id` INT NOT NULL ,
  `nome` VARCHAR(150) NOT NULL ,
  `objetivo` VARCHAR(255) NULL ,
  INDEX `fk_plano_de_teste_caso_de_uso` (`caso_de_uso_id` ASC) ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) ,
  INDEX `fk_caso_de_teste_teste1` (`teste_id` ASC) ,
  CONSTRAINT `fk_plano_de_teste_caso_de_uso`
    FOREIGN KEY (`caso_de_uso_id` )
    REFERENCES `123_testando_4`.`caso_de_uso` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_caso_de_teste_teste1`
    FOREIGN KEY (`teste_id` )
    REFERENCES `123_testando_4`.`teste` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`teste_de_validacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`teste_de_validacao` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`teste_de_validacao` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `campo` VARCHAR(45) NULL ,
  `tipo` VARCHAR(45) NULL ,
  `resultado` VARCHAR(45) NULL ,
  `obrigatorio` ENUM('1','2') NULL COMMENT '1 - Sim , 2- Não' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`validacao_teste_relacionado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`validacao_teste_relacionado` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`validacao_teste_relacionado` (
  `caso_de_teste_id` INT NOT NULL ,
  `teste_de_validacao_id` INT NOT NULL ,
  PRIMARY KEY (`caso_de_teste_id`, `teste_de_validacao_id`) ,
  INDEX `fk_plano_de_teste_has_teste_de_validacao_teste_de_validacao1` (`teste_de_validacao_id` ASC) ,
  INDEX `fk_plano_de_teste_has_teste_de_validacao_plano_de_teste1` (`caso_de_teste_id` ASC) ,
  CONSTRAINT `fk_plano_de_teste_has_teste_de_validacao_plano_de_teste1`
    FOREIGN KEY (`caso_de_teste_id` )
    REFERENCES `123_testando_4`.`caso_de_teste` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_plano_de_teste_has_teste_de_validacao_teste_de_validacao1`
    FOREIGN KEY (`teste_de_validacao_id` )
    REFERENCES `123_testando_4`.`teste_de_validacao` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`item_de_teste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`item_de_teste` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`item_de_teste` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `caso_de_teste_id` INT NOT NULL ,
  `passo_a_passo` TEXT NOT NULL ,
  `resultado_esperado` VARCHAR(45) NOT NULL ,
  `pre_condicao` VARCHAR(255) NULL ,
  `outra_preparacao` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_caso_de_teste_plano_de_teste1` (`caso_de_teste_id` ASC) ,
  CONSTRAINT `fk_caso_de_teste_plano_de_teste1`
    FOREIGN KEY (`caso_de_teste_id` )
    REFERENCES `123_testando_4`.`caso_de_teste` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `123_testando_4`.`plano_de_teste`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `123_testando_4`.`plano_de_teste` ;

CREATE  TABLE IF NOT EXISTS `123_testando_4`.`plano_de_teste` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `teste_id` INT NOT NULL ,
  `nome` VARCHAR(45) NULL ,
  `descricao` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_plano_de_teste_teste1` (`teste_id` ASC) ,
  CONSTRAINT `fk_plano_de_teste_teste1`
    FOREIGN KEY (`teste_id` )
    REFERENCES `123_testando_4`.`teste` (`id` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
