-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema comm
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema comm
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `comm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `comm` ;

-- -----------------------------------------------------
-- Table `comm`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comm`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(255) NULL DEFAULT NULL,
  `password` VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `comm`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comm`.`articles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL DEFAULT NULL,
  `text` VARCHAR(3000) NULL DEFAULT NULL,
  `users_id` INT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `users_id` (`users_id` ASC) VISIBLE,
  CONSTRAINT `articles_ibfk_1`
    FOREIGN KEY (`users_id`)
    REFERENCES `comm`.`users` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
