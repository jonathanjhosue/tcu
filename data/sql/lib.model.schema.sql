
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- tcu
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tcu`;


CREATE TABLE `tcu`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`codigo` VARCHAR(10)  NOT NULL,
	`nombre` VARCHAR(255)  NOT NULL,
	`imagen` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `tcu_U_1` (`codigo`),
	UNIQUE KEY `tcu_U_2` (`nombre`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- persona
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `persona`;


CREATE TABLE `persona`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`nombre` VARCHAR(70)  NOT NULL,
	`telefono1` VARCHAR(20)  NOT NULL,
	`telefono2` VARCHAR(20),
	`correo` VARCHAR(70)  NOT NULL,
	`datos` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `persona_FI_1` (`user_id`),
	CONSTRAINT `persona_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `sf_guard_user` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- encargado
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `encargado`;


CREATE TABLE `encargado`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`persona_id` INTEGER  NOT NULL,
	`correo` VARCHAR(50)  NOT NULL,
	`horario` VARCHAR(100),
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `encargado_U_1` (`correo`),
	INDEX `encargado_FI_1` (`persona_id`),
	CONSTRAINT `encargado_FK_1`
		FOREIGN KEY (`persona_id`)
		REFERENCES `persona` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sitio
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sitio`;


CREATE TABLE `sitio`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(70)  NOT NULL,
	`descripcion` VARCHAR(255)  NOT NULL,
	`direccion` VARCHAR(255)  NOT NULL,
	`imagen` VARCHAR(255),
	`web` VARCHAR(255),
	`telefono` VARCHAR(20),
	`correo` VARCHAR(70),
	PRIMARY KEY (`id`),
	UNIQUE KEY `sitio_U_1` (`nombre`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- articulo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `articulo`;


CREATE TABLE `articulo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(100)  NOT NULL,
	`descripcion` VARCHAR(255)  NOT NULL,
	`texto` TEXT  NOT NULL,
	`persona_id` INTEGER  NOT NULL,
	`fuente` VARCHAR(255),
	`tags` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `articulo_U_1` (`nombre`),
	INDEX `articulo_FI_1` (`persona_id`),
	CONSTRAINT `articulo_FK_1`
		FOREIGN KEY (`persona_id`)
		REFERENCES `persona` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- galeria
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `galeria`;


CREATE TABLE `galeria`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(70)  NOT NULL,
	`descripcion` VARCHAR(255)  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- archivo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `archivo`;


CREATE TABLE `archivo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(70)  NOT NULL,
	`descripcion` VARCHAR(255)  NOT NULL,
	`archivo` VARCHAR(255)  NOT NULL,
	`persona_id` INTEGER  NOT NULL,
	`tipo_id` INTEGER  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `archivo_FI_1` (`persona_id`),
	CONSTRAINT `archivo_FK_1`
		FOREIGN KEY (`persona_id`)
		REFERENCES `persona` (`id`),
	INDEX `archivo_FI_2` (`tipo_id`),
	CONSTRAINT `archivo_FK_2`
		FOREIGN KEY (`tipo_id`)
		REFERENCES `tipo` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- foto
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `foto`;


CREATE TABLE `foto`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(70)  NOT NULL,
	`descripcion` VARCHAR(255),
	`imagen` VARCHAR(255)  NOT NULL,
	`persona_id` INTEGER  NOT NULL,
	`galeria_id` INTEGER  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `foto_FI_1` (`persona_id`),
	CONSTRAINT `foto_FK_1`
		FOREIGN KEY (`persona_id`)
		REFERENCES `persona` (`id`),
	INDEX `foto_FI_2` (`galeria_id`),
	CONSTRAINT `foto_FK_2`
		FOREIGN KEY (`galeria_id`)
		REFERENCES `galeria` (`id`)
		ON DELETE CASCADE
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tipo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo`;


CREATE TABLE `tipo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(50)  NOT NULL,
	`imagen` VARCHAR(255),
	PRIMARY KEY (`id`),
	UNIQUE KEY `tipo_U_1` (`nombre`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- seccion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `seccion`;


CREATE TABLE `seccion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(15)  NOT NULL,
	`descripcion` VARCHAR(255)  NOT NULL,
	`imagen` VARCHAR(255),
	`es_activa` TINYINT default 1 NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `seccion_U_1` (`nombre`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- subseccion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `subseccion`;


CREATE TABLE `subseccion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(15)  NOT NULL,
	`texto` TEXT  NOT NULL,
	`seccion_id` INTEGER  NOT NULL,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `subseccion_FI_1` (`seccion_id`),
	CONSTRAINT `subseccion_FK_1`
		FOREIGN KEY (`seccion_id`)
		REFERENCES `seccion` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- enlace
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `enlace`;


CREATE TABLE `enlace`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(100)  NOT NULL,
	`descripcion` VARCHAR(255)  NOT NULL,
	`web` VARCHAR(255)  NOT NULL,
	`imagen` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
