-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE =
        'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema car_market
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema car_market
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `car_market` DEFAULT CHARACTER SET utf8mb4;
USE `car_market`;

-- -----------------------------------------------------
-- Table `car_market`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `car_market`.`user`
(
    `id`           INT(11)      NOT NULL AUTO_INCREMENT COMMENT 'Номер',
    `name`         VARCHAR(100) NOT NULL COMMENT 'Имя пользователя',
    `city`         VARCHAR(100) NOT NULL COMMENT 'Город',
    `phone_number` VARCHAR(100) NOT NULL COMMENT 'Номер телефона',
    `role`         VARCHAR(100) NOT NULL COMMENT 'Роль на рынке',
    PRIMARY KEY (`id`),
    INDEX `id` (`id` ASC) VISIBLE
)
    ENGINE = InnoDB
    AUTO_INCREMENT = 2
    DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `car_market`.`car`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `car_market`.`car`
(
    `id`            INT(11)      NOT NULL AUTO_INCREMENT COMMENT 'Номер',
    `year_of_issue` INT(11)      NOT NULL COMMENT 'Дата выпуска',
    `condition`     VARCHAR(100) NOT NULL COMMENT 'Состояние',
    `mileage`       INT(11)      NOT NULL COMMENT '\\r\\nПробег',
    `fuel_type`     VARCHAR(100) NOT NULL COMMENT 'Тип топлива',
    `volume`        INT(11)      NOT NULL COMMENT 'Объем л.',
    `color`         VARCHAR(100) NOT NULL COMMENT 'Цвет',
    `body_type`     VARCHAR(100) NOT NULL COMMENT 'Тип кузова',
    `transmission`  VARCHAR(100) NOT NULL COMMENT 'Тип коробки передач',
    `drive_unit`    VARCHAR(100) NOT NULL COMMENT 'Тип привода',
    `price`         INT(11)      NOT NULL COMMENT 'Цена',
    `user_id`       INT(11)      NOT NULL COMMENT 'Номер пользователя',
    PRIMARY KEY (`id`),
    INDEX `id` (`id` ASC) VISIBLE,
    INDEX `user_id` (`user_id` ASC) VISIBLE,
    CONSTRAINT `car_ibfk_1`
        FOREIGN KEY (`user_id`)
            REFERENCES `car_market`.`user` (`id`)
            ON UPDATE CASCADE
)
    ENGINE = InnoDB
    AUTO_INCREMENT = 2
    DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;
