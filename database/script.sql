-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_ayudame
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_ayudame
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_ayudame` DEFAULT CHARACTER SET latin1 ;
USE `db_ayudame` ;

-- -----------------------------------------------------
-- Table `db_ayudame`.`users_perfiles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`users_perfiles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_users` INT(11) NOT NULL,
  `id_perfiles` INT(11) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COMMENT = 'Relaciones entre los usuarios y sus perfiles';


-- -----------------------------------------------------
-- Table `db_ayudame`.`users_direcciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`users_direcciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_users` INT(11) NOT NULL,
  `id_direcciones` INT(11) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COMMENT = 'Relaciones entre usuarios y direcciones';


-- -----------------------------------------------------
-- Table `db_ayudame`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `users_perfiles_id` INT(11) NOT NULL,
  `users_direcciones_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_users_perfiles_idx` (`users_perfiles_id` ASC),
  INDEX `fk_users_users_direcciones1_idx` (`users_direcciones_id` ASC),
  CONSTRAINT `fk_users_users_perfiles`
    FOREIGN KEY (`users_perfiles_id`)
    REFERENCES `db_ayudame`.`users_perfiles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_users_direcciones1`
    FOREIGN KEY (`users_direcciones_id`)
    REFERENCES `db_ayudame`.`users_direcciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `db_ayudame`.`paises`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`paises` (
  `id` INT(11) NOT NULL,
  `siglas` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
COMMENT = 'Paises';


-- -----------------------------------------------------
-- Table `db_ayudame`.`provincias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`provincias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `siglas` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paises_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_provincias_paises1_idx` (`paises_id` ASC),
  CONSTRAINT `fk_provincias_paises1`
    FOREIGN KEY (`paises_id`)
    REFERENCES `db_ayudame`.`paises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_ayudame`.`localidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`localidades` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `id_provincia` VARCHAR(100) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `provincias_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_localidades_provincias1_idx` (`provincias_id` ASC),
  CONSTRAINT `fk_localidades_provincias1`
    FOREIGN KEY (`provincias_id`)
    REFERENCES `db_ayudame`.`provincias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COMMENT = 'Localidades';


-- -----------------------------------------------------
-- Table `db_ayudame`.`direcciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`direcciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `calle` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `adicional01` VARCHAR(45) NOT NULL,
  `adicional02` VARCHAR(45) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `users_id` INT(11) NOT NULL,
  `localidades_id` INT(11) NOT NULL,
  `provincias_id` INT NOT NULL,
  `paises_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_direcciones_users1_idx` (`users_id` ASC),
  INDEX `fk_direcciones_localidades1_idx` (`localidades_id` ASC),
  INDEX `fk_direcciones_provincias1_idx` (`provincias_id` ASC),
  INDEX `fk_direcciones_paises1_idx` (`paises_id` ASC),
  CONSTRAINT `fk_direcciones_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `db_ayudame`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_direcciones_localidades1`
    FOREIGN KEY (`localidades_id`)
    REFERENCES `db_ayudame`.`localidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_direcciones_provincias1`
    FOREIGN KEY (`provincias_id`)
    REFERENCES `db_ayudame`.`provincias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_direcciones_paises1`
    FOREIGN KEY (`paises_id`)
    REFERENCES `db_ayudame`.`paises` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COMMENT = 'Tabla de direcciones de usuarios';


-- -----------------------------------------------------
-- Table `db_ayudame`.`perfiles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ayudame`.`perfiles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(100) NOT NULL,
  `descripción` VARCHAR(100) NOT NULL,
  `create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `users_perfiles_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_perfiles_users_perfiles1_idx` (`users_perfiles_id` ASC),
  CONSTRAINT `fk_perfiles_users_perfiles1`
    FOREIGN KEY (`users_perfiles_id`)
    REFERENCES `db_ayudame`.`users_perfiles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
