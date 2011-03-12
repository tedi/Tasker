SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `taskerdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `taskerdb`;

-- -----------------------------------------------------
-- Table `taskerdb`.`category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`category` (
  `category_id` INT NOT NULL ,
  `category_description` VARCHAR(45) NULL ,
  PRIMARY KEY (`category_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `user_category` INT NULL ,
  `user_deleted` BINARY NULL ,
  `is_admin` BINARY NULL ,
  PRIMARY KEY (`user_id`) ,
  INDEX `fk_users_category1` (`user_category` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`status`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`status` (
  `status_id` INT NOT NULL ,
  `status_description` VARCHAR(45) NULL ,
  PRIMARY KEY (`status_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`priority`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`priority` (
  `priority_id` INT NOT NULL ,
  `priority_description` VARCHAR(45) NULL ,
  PRIMARY KEY (`priority_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`projects`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`projects` (
  `project_id` INT NOT NULL AUTO_INCREMENT ,
  `project_name` VARCHAR(45) NULL ,
  `project_description` TEXT NULL ,
  `project_owner` INT NULL ,
  `project_status` VARCHAR(45) NULL ,
  `project_priority` VARCHAR(45) NULL ,
  `project_due_date` DATETIME NULL ,
  `project_deleted` BINARY NULL ,
  PRIMARY KEY (`project_id`) ,
  INDEX `fk_projects_users` (`project_owner` ASC) ,
  INDEX `fk_projects_status1` (`project_status` ASC) ,
  INDEX `fk_projects_priority1` (`project_priority` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`tasks`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`tasks` (
  `task_id` INT NOT NULL AUTO_INCREMENT ,
  `task_name` VARCHAR(45) NOT NULL ,
  `task description` TEXT NULL ,
  `project_id` INT NOT NULL ,
  `task_creator` INT NULL ,
  `task_assigned` INT NULL ,
  `task_completed` BINARY NULL ,
  `task_due_date` DATETIME NULL ,
  `task_deleted` BINARY NULL ,
  `task_priority` INT NULL ,
  `task_status` INT NULL ,
  INDEX `fk_tasks_projects1` (`project_id` ASC) ,
  INDEX `fk_tasks_users1` (`task_assigned` ASC) ,
  INDEX `fk_tasks_users2` (`task_creator` ASC) ,
  PRIMARY KEY (`task_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`messages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`messages` (
  `message_id` INT NOT NULL AUTO_INCREMENT ,
  `message_author` INT NOT NULL ,
  `message_title` VARCHAR(45) NULL ,
  `message_body` TEXT NULL ,
  `parent_id` INT NULL ,
  `project_id` INT NULL ,
  `task_id` INT NULL ,
  `message_time` TIMESTAMP NULL ,
  `message_deleted` BINARY NULL ,
  PRIMARY KEY (`message_id`) ,
  INDEX `fk_messages_users1` (`message_author` ASC) ,
  INDEX `fk_messages_projects1` (`project_id` ASC) ,
  INDEX `fk_messages_tasks1` (`task_id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taskerdb`.`project_members`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `taskerdb`.`project_members` (
  `user_id` INT NOT NULL ,
  `project_id` INT NOT NULL ,
  INDEX `fk_project_members_users1` (`user_id` ASC) ,
  INDEX `fk_project_members_projects1` (`project_id` ASC) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
