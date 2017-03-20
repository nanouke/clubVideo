-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema clubvideo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clubvideo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clubvideo` DEFAULT CHARACTER SET latin1 ;
USE `clubvideo` ;

-- -----------------------------------------------------
-- Table `clubvideo`.`employe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubvideo`.`employe` (
  `employeid` INT(11) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `nomutilisateur` VARCHAR(45) NOT NULL,
  `motpasse` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`employeid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clubvideo`.`produit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubvideo`.`produit` (
  `produitid` INT(11) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `prixlocation` DOUBLE NOT NULL,
  `disponible` INT(11) NOT NULL,
  `categorie` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`produitid`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clubvideo`.`transaction`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubvideo`.`transaction` (
  `transactionid` INT(11) NOT NULL,
  `employeid` INT(11) NOT NULL,
  `nomclient` VARCHAR(45) NOT NULL,
  `prenomclient` VARCHAR(45) NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`transactionid`),
  INDEX `transaction_employe_idx` (`employeid` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `clubvideo`.`transactionproduit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubvideo`.`transactionproduit` (
  `transactionid` INT(11) NOT NULL,
  `produitid` INT(11) NOT NULL,
  INDEX `transproduit_produit_idx` (`produitid` ASC),
  INDEX `transproduit_employe_idx` (`transactionid` ASC),
  CONSTRAINT `transproduit_employe`
    FOREIGN KEY (`transactionid`)
    REFERENCES `clubvideo`.`transaction` (`transactionid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `transproduit_produit`
    FOREIGN KEY (`produitid`)
    REFERENCES `clubvideo`.`produit` (`produitid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
