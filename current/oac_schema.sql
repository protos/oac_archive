SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `oac_archive` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `oac_archive`;

-- -----------------------------------------------------
-- Table `oac_archive`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`users` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(50) NOT NULL ,
  `full_name` VARCHAR(40) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `view_level_flag` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`compilers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`compilers` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`compilers` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(40) NOT NULL ,
  `user_id` INT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `user_id`
    FOREIGN KEY (`user_id` )
    REFERENCES `oac_archive`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `user_id` ON `oac_archive`.`compilers` (`user_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`audio_album_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`audio_album_types` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`audio_album_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`login_levels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`login_levels` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`login_levels` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`audio_albums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`audio_albums` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`audio_albums` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `audio_album_type_id` INT NOT NULL ,
  `specified_audio_album_type` VARCHAR(50) NULL ,
  `oac_ref_no` VARCHAR(45) NOT NULL ,
  `source` VARCHAR(50) NULL ,
  `date_acquired` DATE NULL ,
  `collection_title` VARCHAR(50) NULL ,
  `title` VARCHAR(50) NOT NULL ,
  `description` TEXT NULL ,
  `artists` VARCHAR(70) NULL ,
  `series` VARCHAR(50) NULL ,
  `label` VARCHAR(50) NULL ,
  `publishers_catalogue_no` VARCHAR(45) NULL ,
  `multipe_cds` BOOLEAN NULL ,
  `release_date` DATE NULL ,
  `recording_venue` VARCHAR(50) NULL ,
  `size` VARCHAR(50) NULL ,
  `duration` VARCHAR(50) NULL ,
  `matrix_no` VARCHAR(45) NULL ,
  `producer` VARCHAR(50) NULL ,
  `copyright_start_date` DATE NULL ,
  `copyright_holders` VARCHAR(50) NULL ,
  `artists_url` VARCHAR(70) NULL ,
  `recording_engineer` VARCHAR(50) NULL ,
  `comments` TEXT NULL ,
  `keywords` TEXT NULL ,
  `digitizing_engineer` VARCHAR(50) NULL ,
  `equipment` VARCHAR(50) NULL ,
  `software_package` VARCHAR(50) NULL ,
  `digital_artefact_link` VARCHAR(70) NULL ,
  `oac_shop_url` VARCHAR(70) NULL ,
  `login_level_id` INT NOT NULL ,
  `compiler_id` INT NOT NULL ,
  `specified_compiler` VARCHAR(50) NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `compiler_id`
    FOREIGN KEY (`compiler_id` )
    REFERENCES `oac_archive`.`compilers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `audio_album_type_id`
    FOREIGN KEY (`audio_album_type_id` )
    REFERENCES `oac_archive`.`audio_album_types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `login_level_id`
    FOREIGN KEY (`login_level_id` )
    REFERENCES `oac_archive`.`login_levels` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `compiler_id` ON `oac_archive`.`audio_albums` (`compiler_id` ASC) ;

CREATE INDEX `audio_album_type_id` ON `oac_archive`.`audio_albums` (`audio_album_type_id` ASC) ;

CREATE INDEX `login_level_id` ON `oac_archive`.`audio_albums` (`login_level_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`audio_tracks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`audio_tracks` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`audio_tracks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `track_no` INT NOT NULL ,
  `title` VARCHAR(50) NULL ,
  `primary_performers` VARCHAR(80) NULL ,
  `primary_instruments` VARCHAR(80) NULL ,
  `genre` VARCHAR(80) NULL ,
  `duration` VARCHAR(80) NULL ,
  `performance_date` DATE NULL ,
  `composer` VARCHAR(50) NULL ,
  `copyright_start_date` DATE NULL ,
  `copyright_holder` VARCHAR(50) NULL ,
  `comments` TEXT NULL ,
  `digital_artefact_link` VARCHAR(80) NULL ,
  `synonyms` TEXT NULL ,
  `keywords` TEXT NULL ,
  `audio_album_id` INT NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `audio_album_id`
    FOREIGN KEY (`audio_album_id` )
    REFERENCES `oac_archive`.`audio_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `audio_album_id` ON `oac_archive`.`audio_tracks` (`audio_album_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`doc_languages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`doc_languages` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`doc_languages` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`doc_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`doc_types` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`doc_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`video_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`video_types` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`video_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`video_albums`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`video_albums` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`video_albums` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `video_type_id` INT NOT NULL ,
  `specified_video_type` VARCHAR(45) NULL ,
  `oac_ref_no` VARCHAR(45) NOT NULL ,
  `source` VARCHAR(50) NULL ,
  `date_acquired` DATE NULL ,
  `collection_title` VARCHAR(45) NULL ,
  `title` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL ,
  `artists` TEXT NULL ,
  `series` VARCHAR(45) NULL ,
  `label` VARCHAR(45) NULL ,
  `publishers_catalogue_no` VARCHAR(45) NULL ,
  `release_date` DATE NULL ,
  `recording_venue` TEXT NULL ,
  `size` VARCHAR(45) NULL ,
  `duration` VARCHAR(45) NULL ,
  `director` VARCHAR(45) NULL ,
  `producer` VARCHAR(45) NULL ,
  `production_crew` VARCHAR(75) NULL ,
  `studio` VARCHAR(45) NULL ,
  `copyright_holder` VARCHAR(45) NULL ,
  `copyright_start_date` DATE NULL ,
  `artist_url` VARCHAR(65) NULL ,
  `comments` TEXT NULL ,
  `keywords` TEXT NULL ,
  `engineer` VARCHAR(45) NULL ,
  `equipment` VARCHAR(45) NULL ,
  `software_package` VARCHAR(45) NULL ,
  `oac_url` VARCHAR(75) NULL ,
  `specified_compiler` VARCHAR(45) NULL ,
  `digital_artefact_link` VARCHAR(75) NULL ,
  `audio_album_id` INT NULL ,
  `login_level_id` INT NOT NULL ,
  `compiler_id` INT NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `compiler_id`
    FOREIGN KEY (`compiler_id` )
    REFERENCES `oac_archive`.`compilers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `video_type_id`
    FOREIGN KEY (`video_type_id` )
    REFERENCES `oac_archive`.`video_types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `audio_album_id`
    FOREIGN KEY (`audio_album_id` )
    REFERENCES `oac_archive`.`audio_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `login_level_id`
    FOREIGN KEY (`login_level_id` )
    REFERENCES `oac_archive`.`login_levels` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `compiler_id` ON `oac_archive`.`video_albums` (`compiler_id` ASC) ;

CREATE INDEX `video_type_id` ON `oac_archive`.`video_albums` (`video_type_id` ASC) ;

CREATE INDEX `audio_album_id` ON `oac_archive`.`video_albums` (`audio_album_id` ASC) ;

CREATE INDEX `login_level_id` ON `oac_archive`.`video_albums` (`login_level_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`documents`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`documents` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`documents` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `oac_ref_no` VARCHAR(45) NOT NULL ,
  `doc_type_id` INT NOT NULL ,
  `specified_doc_type` VARCHAR(45) NULL ,
  `collection_title` VARCHAR(50) NULL ,
  `source` VARCHAR(50) NULL ,
  `aquisition_date` DATE NULL ,
  `title` VARCHAR(50) NOT NULL ,
  `edition` VARCHAR(50) NULL ,
  `authors` VARCHAR(50) NULL ,
  `contributors` TEXT NULL ,
  `publisher` VARCHAR(50) NULL ,
  `publication_date` DATE NULL ,
  `isbn_issn` VARCHAR(45) NULL ,
  `series` VARCHAR(50) NULL ,
  `description` TEXT NULL ,
  `doc_language_id` INT NULL ,
  `subject` VARCHAR(50) NULL ,
  `copies` VARCHAR(50) NULL ,
  `location` VARCHAR(50) NULL ,
  `oac_url` VARCHAR(80) NULL ,
  `digital_size` VARCHAR(50) NULL ,
  `comments` TEXT NULL ,
  `contents_page` VARCHAR(40) NULL ,
  `keywords` TEXT NULL ,
  `copyright_start_date` DATE NULL ,
  `copyright_holder` VARCHAR(50) NULL ,
  `digital_artefact_link` VARCHAR(75) NULL ,
  `compiler_id` INT NOT NULL ,
  `specified_compiler` VARCHAR(50) NULL ,
  `video_album_id` INT NULL ,
  `audio_album_id` INT NULL ,
  `login_level_id` INT NOT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `compiler_id`
    FOREIGN KEY (`compiler_id` )
    REFERENCES `oac_archive`.`compilers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `doc_language_id`
    FOREIGN KEY (`doc_language_id` )
    REFERENCES `oac_archive`.`doc_languages` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `doc_type_id`
    FOREIGN KEY (`doc_type_id` )
    REFERENCES `oac_archive`.`doc_types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `audio_album_id`
    FOREIGN KEY (`audio_album_id` )
    REFERENCES `oac_archive`.`audio_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `video_album_id`
    FOREIGN KEY (`video_album_id` )
    REFERENCES `oac_archive`.`video_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `login_level_id`
    FOREIGN KEY (`login_level_id` )
    REFERENCES `oac_archive`.`login_levels` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `compiler_id` ON `oac_archive`.`documents` (`compiler_id` ASC) ;

CREATE INDEX `doc_language_id` ON `oac_archive`.`documents` (`doc_language_id` ASC) ;

CREATE INDEX `doc_type_id` ON `oac_archive`.`documents` (`doc_type_id` ASC) ;

CREATE INDEX `audio_album_id` ON `oac_archive`.`documents` (`audio_album_id` ASC) ;

CREATE INDEX `video_album_id` ON `oac_archive`.`documents` (`video_album_id` ASC) ;

CREATE INDEX `login_level_id` ON `oac_archive`.`documents` (`login_level_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`photo_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`photo_types` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`photo_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`photographs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`photographs` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`photographs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `oac_ref_no` VARCHAR(45) NOT NULL ,
  `photo_type_id` INT NOT NULL ,
  `specified_photo_type` VARCHAR(45) NULL ,
  `collection_title` VARCHAR(50) NULL ,
  `source` VARCHAR(60) NULL ,
  `aquisition_date` DATETIME NULL ,
  `title` VARCHAR(45) NOT NULL ,
  `photographer` VARCHAR(45) NULL ,
  `camera` VARCHAR(45) NULL ,
  `subject_detail` VARCHAR(60) NULL ,
  `date_taken` DATE NULL ,
  `copies` VARCHAR(45) NULL ,
  `copyright_start_date` DATE NULL ,
  `copyright_holder` VARCHAR(50) NULL ,
  `location` VARCHAR(45) NULL ,
  `comments` TEXT NULL ,
  `engineer` VARCHAR(45) NULL ,
  `digital_size` VARCHAR(45) NULL ,
  `equipment` VARCHAR(45) NULL ,
  `software_package` VARCHAR(45) NULL ,
  `digital_artefact_link` VARCHAR(45) NULL ,
  `oac_url` VARCHAR(70) NULL ,
  `audio_album_id` INT NULL ,
  `compiler_id` INT NOT NULL ,
  `keywords` TEXT NULL ,
  `specified_compiler` VARCHAR(45) NULL ,
  `login_level_id` INT NOT NULL ,
  `document_id` INT NULL ,
  `video_album_id` INT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `compiler_id`
    FOREIGN KEY (`compiler_id` )
    REFERENCES `oac_archive`.`compilers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `photo_type_id`
    FOREIGN KEY (`photo_type_id` )
    REFERENCES `oac_archive`.`photo_types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `audio_album_id`
    FOREIGN KEY (`audio_album_id` )
    REFERENCES `oac_archive`.`audio_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `document_id`
    FOREIGN KEY (`document_id` )
    REFERENCES `oac_archive`.`documents` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `video_album_id`
    FOREIGN KEY (`video_album_id` )
    REFERENCES `oac_archive`.`video_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `login_level_id`
    FOREIGN KEY (`login_level_id` )
    REFERENCES `oac_archive`.`login_levels` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `compiler_id` ON `oac_archive`.`photographs` (`compiler_id` ASC) ;

CREATE INDEX `photo_type_id` ON `oac_archive`.`photographs` (`photo_type_id` ASC) ;

CREATE INDEX `audio_album_id` ON `oac_archive`.`photographs` (`audio_album_id` ASC) ;

CREATE INDEX `document_id` ON `oac_archive`.`photographs` (`document_id` ASC) ;

CREATE INDEX `video_album_id` ON `oac_archive`.`photographs` (`video_album_id` ASC) ;

CREATE INDEX `login_level_id` ON `oac_archive`.`photographs` (`login_level_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`video_tracks`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`video_tracks` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`video_tracks` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `track_no` INT NOT NULL ,
  `title` VARCHAR(45) NULL ,
  `primary_performers` VARCHAR(70) NULL ,
  `primary_instruments` VARCHAR(70) NULL ,
  `genre` VARCHAR(50) NULL ,
  `duration` VARCHAR(45) NULL ,
  `composer` VARCHAR(45) NULL ,
  `performance_date` DATE NULL ,
  `copyright_holders` VARCHAR(50) NULL ,
  `copyright_start_date` DATE NULL ,
  `comments` TEXT NULL ,
  `keywords` TEXT NULL ,
  `digital_artefact_link` VARCHAR(60) NULL ,
  `video_album_id` INT NOT NULL ,
  `synonyms` TEXT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `video_album_id`
    FOREIGN KEY (`video_album_id` )
    REFERENCES `oac_archive`.`video_albums` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `video_album_id` ON `oac_archive`.`video_tracks` (`video_album_id` ASC) ;


-- -----------------------------------------------------
-- Table `oac_archive`.`map_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`map_types` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`map_types` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `oac_archive`.`maps`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `oac_archive`.`maps` ;

CREATE  TABLE IF NOT EXISTS `oac_archive`.`maps` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `oac_ref_no` VARCHAR(45) NOT NULL ,
  `map_type_id` INT NOT NULL ,
  `specified_map_type` VARCHAR(45) NULL ,
  `source` VARCHAR(45) NULL ,
  `date_acquired` DATE NULL ,
  `collection_title` VARCHAR(45) NULL ,
  `title` VARCHAR(45) NOT NULL ,
  `scale` VARCHAR(45) NULL ,
  `producer` VARCHAR(45) NULL ,
  `date_produced` DATE NULL ,
  `date_published` DATE NULL ,
  `edition_date` DATE NULL ,
  `sheet_number` INT NULL ,
  `coordinates` VARCHAR(45) NULL ,
  `special_purpose` VARCHAR(45) NULL ,
  `sheet_size` VARCHAR(45) NULL ,
  `publishers_cat_no` VARCHAR(45) NULL ,
  `copyright_start_date` DATE NULL ,
  `copyright_holders` VARCHAR(50) NULL ,
  `description` TEXT NULL ,
  `comments` TEXT NULL ,
  `keywords` TEXT NULL ,
  `digital_artefact_link` VARCHAR(50) NULL ,
  `copies` VARCHAR(45) NULL ,
  `compiler_id` INT NOT NULL ,
  `specified_compiler` VARCHAR(50) NULL ,
  `login_level_id` INT NOT NULL ,
  `document_id` INT NULL ,
  `created` DATETIME NOT NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `map_type_id`
    FOREIGN KEY (`map_type_id` )
    REFERENCES `oac_archive`.`map_types` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `compiler_id`
    FOREIGN KEY (`compiler_id` )
    REFERENCES `oac_archive`.`compilers` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `login_level_id`
    FOREIGN KEY (`login_level_id` )
    REFERENCES `oac_archive`.`login_levels` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `document_id`
    FOREIGN KEY (`id` )
    REFERENCES `oac_archive`.`documents` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = MyISAM;

CREATE INDEX `map_type_id` ON `oac_archive`.`maps` (`map_type_id` ASC) ;

CREATE INDEX `compiler_id` ON `oac_archive`.`maps` (`compiler_id` ASC) ;

CREATE INDEX `login_level_id` ON `oac_archive`.`maps` (`login_level_id` ASC) ;

CREATE INDEX `document_id` ON `oac_archive`.`maps` (`id` ASC) ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
