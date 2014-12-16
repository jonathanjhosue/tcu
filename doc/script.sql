-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.34


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema tcudesechos
--

CREATE DATABASE IF NOT EXISTS tcudesechos;
USE tcudesechos;

--
-- Definition of table `tcudesechos`.`archivo`
--

DROP TABLE IF EXISTS `tcudesechos`.`archivo`;
CREATE TABLE  `tcudesechos`.`archivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `persona_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `archivo_FI_1` (`persona_id`),
  KEY `archivo_FI_2` (`tipo_id`),
  CONSTRAINT `archivo_FK_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  CONSTRAINT `archivo_FK_2` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`archivo`
--

/*!40000 ALTER TABLE `archivo` DISABLE KEYS */;
LOCK TABLES `archivo` WRITE;
INSERT INTO `tcudesechos`.`archivo` VALUES  (1,'video tcu','Animación creada para niños','',1,2,'2009-05-27 12:14:05','2009-07-16 18:23:18'),
 (2,'Presentación TCU','Presentación con información referente al tcu Educación para el manejo de desechos en la región occidental del valle central','fbdc9b7a18df56fd3b8d012c13c0fc47484369f2.ppt',2,6,'2009-05-28 13:44:52','2009-05-28 13:44:52');
UNLOCK TABLES;
/*!40000 ALTER TABLE `archivo` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`articulo`
--

DROP TABLE IF EXISTS `tcudesechos`.`articulo`;
CREATE TABLE  `tcudesechos`.`articulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fuente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articulo_U_1` (`nombre`),
  KEY `articulo_FI_1` (`persona_id`),
  CONSTRAINT `articulo_FK_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`articulo`
--

/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
LOCK TABLES `articulo` WRITE;
INSERT INTO `tcudesechos`.`articulo` VALUES  (1,'Escolares visitaron feria ambiental en el Museo Reonal de San Ramón','El Museo Regional de San Ramón fue el escenario zada por la Colectiva de Mujeres Rescatando Nudestra Ecología (Coferene), en la cuald se presentdaron diferentes proyectos de la región que trabajan por el medio ambiente.','<p>El Museo Regional de San Ram&oacute;n fue el escenario de una Feria Ambiental organizada por la Colectiva de Mujeres Rescatando Nuestra Ecolog&iacute;a (Coferene), en la cual se presentaron diferentes proyectos de la regi&oacute;n que trabajan por el medio ambiente. <br /><br />Varias instituciones, organizaciones y asociaciones mostraron al p&uacute;blico y especialmente a varios grupos de estudiantes de diferentes escuelas de la regi&oacute;n, c&oacute;mo se puede vivir en armon&iacute;a con el ambiente. <br /><br />El proyecto de Trabajo Comunal Universitario (TCU) Educaci&oacute;n para el Manejo de Desechos de la Sede de Occidente, particip&oacute; con un puesto de informaci&oacute;n y tambi&eacute;n con una obra de teatro especialmente preparada para los ni&ntilde;os y ni&ntilde;as que visitaron la actividad. <br /><br />Seg&uacute;n Ismael Guido, encargado de este proyecto, los estudiantes del TCU ofrec&iacute;an a los visitantes informaci&oacute;n sobre el tipo de materiales que se pueden reciclar, el tiempo de descomposici&oacute;n de cada uno de ellos, los centros de acopio y los proyectos en los cuales se pueden involucrar los escolares como el de Bandera Azul.</p>\r\n<p>La Cooperativa Agr&iacute;cola e Industrial Victoria, ubicada en el cant&oacute;n de Grecia, estuvo presente con su proyecto de producci&oacute;n de biodiesel con aceite de cocina. Durante todo el d&iacute;a, representantes de esta Cooperativa realizaron demostraciones sobre el proceso de producci&oacute;n de biodiesel.</p>\r\n<p><br /> Este es un proyecto que se lleva a cabo en las escuelas y sodas de la regi&oacute;n, en donde Coopevictoria recoge el aceite que desecha y el combustible producido a partir de este aceite es utilizado para poner en marcha su maquinaria. <br /><br />Otro de los proyectos participantes fue el del Grupo de Mujeres Trinidad S.A, que expuso artesan&iacute;a hechas con productos reciclables de la marca Papier, con la que comercializan bolsos, fajas, billeteras y otros productos realizados con papel desechable. <br /><br /> Tambi&eacute;n participaron con puestos informativos el Ministerio de Ambiente, Energ&iacute;a y Telecomuniaciones, la empresa Florex con productos de limpieza biodegradables, la Fundaci&oacute;n Neotr&oacute;pica, APREFLOFAS que es una organizaci&oacute;n no gubernamental ambientalista y productores de artesan&iacute;as que utilizan diferentes materiales reciclables.</p>',1,'Grettel Rojas Vásquez. Periodista Sede de Occidente','reciclaje, evento','2009-05-27 12:14:05','2009-06-13 15:52:11'),
 (2,'que es el reciclaje','El reciclaje es la transformación de las formas y presentaciones habituales de los objetos de cartón, papel, lata, vidrio, algunos plásticos y residuos orgánicos, en materias primas que la industria de manufactura puede utilizar de nuevo.','<p>El <strong>reciclaje</strong> es la transformaci&oacute;n de las formas y presentaciones habituales de los objetos de cart&oacute;n, papel, lata, vidrio, algunos pl&aacute;sticos y residuos org&aacute;nicos, en materias primas que la industria de manufactura puede utilizar de nuevo.</p>\r\n<p>Tambi&eacute;n se refiere al conjunto de actividades que pretenden reutilizar partes de art&iacute;culos que en su conjunto han llegado al t&eacute;rmino de su vida &uacute;til, pero que admiten un uso adicional para alguno de sus componentes o elementos.</p>\r\n<p>El reciclar es una actividad necesaria para las personas, incluye salubridad y otras acciones. Es una buena forma de proteger el ambiente.</p>\r\n<p>Al proceso (simple o complejo, dependiendo del material) necesario para disponer de estas partes o elementos, y prepararlos para su nueva utilizaci&oacute;n, se le conoce como reciclaje.</p>\r\n<p>La producci&oacute;n de mercanc&iacute;as y productos, que hace crecer el consumo y como consecuencia el aumento de desechos de diverso tipo &mdash;algunos de los cuales no pueden simplemente acumularse o desecharse, pues representan un peligro real o potencial para la salud&mdash;, ha obligado a las sociedades modernas a desarrollar diferentes m&eacute;todos de tratamiento de tales desechos, con lo que la aplicaci&oacute;n del reciclaje encuentra justificaci&oacute;n suficiente para ponerse en pr&aacute;ctica.</p>\r\n<p>En una visi&oacute;n \"eco-l&oacute;gica\" del mundo, el reciclaje es la &uacute;nica medida en el objetivo de la disminuci&oacute;n de residuos. Tanto el t&eacute;rmino como sus actividades se han vuelto de dominio p&uacute;blico y se aplican en muchas &aacute;reas productivas, econ&oacute;micas, sociales e incluso pol&iacute;ticas y humanas.</p>\r\n<p>El reciclaje es el tercer paso de cuatro en un proceso de eliminaci&oacute;n de residuos. En cuanto a su respeto ambiental se clasifican de mayor a menor en: El primero y m&aacute;s importante ser&iacute;a la reducci&oacute;n, es decir, producir la menor cantidad de desecho posible. El segundo ser&iacute;a la reutilizaci&oacute;n, o volver a usar un objeto para el fin con el que se cre&oacute;. El mejor ejemplo ser&iacute;an las botellas de vidrio retornables. El tercero ser&iacute;a el reciclaje, como veis no es el m&aacute;s importante, ni siquiera el m&aacute;s respetuoso con el medio, pero si el que m&aacute;s negocio genera a su alrededor. El cuarto ser&iacute;a la recuperaci&oacute;n energ&eacute;tica en plantas como las incineradoras. Gozan de muy mala prensa.</p>',2,'wikipedia','reciclaje','2009-05-27 12:14:05','2009-05-28 13:59:46'),
 (3,'prueba','o de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba te','<p>textxto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba.</p>\r\n<p>texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba texto de prueba</p>\r\n<p>texto de prueba texto de prueba texto de prueba.</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>',2,'','','2009-06-03 16:14:17','2009-10-05 10:16:43');
UNLOCK TABLES;
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`encargado`
--

DROP TABLE IF EXISTS `tcudesechos`.`encargado`;
CREATE TABLE  `tcudesechos`.`encargado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `horario` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `encargado_U_1` (`correo`),
  KEY `encargado_FI_1` (`persona_id`),
  CONSTRAINT `encargado_FK_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`encargado`
--

/*!40000 ALTER TABLE `encargado` DISABLE KEYS */;
LOCK TABLES `encargado` WRITE;
INSERT INTO `tcudesechos`.`encargado` VALUES  (1,2,'ismael.guido@ucr.ac.cr','Lunes 2-5','2009-05-28 16:10:03');
UNLOCK TABLES;
/*!40000 ALTER TABLE `encargado` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`enlace`
--

DROP TABLE IF EXISTS `tcudesechos`.`enlace`;
CREATE TABLE  `tcudesechos`.`enlace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`enlace`
--

/*!40000 ALTER TABLE `enlace` DISABLE KEYS */;
LOCK TABLES `enlace` WRITE;
INSERT INTO `tcudesechos`.`enlace` VALUES  (1,'Acción Social','Departamento de Acción social de la ucr.','www.accion-social.ucr.ac.cr','a34aa9c588a128be71aed69782e805888776e33d.png','2009-05-27 12:14:05','2009-07-16 18:27:39'),
 (2,'Universidad de Costa Rica','Universidad de Costa Rica, sede central.','www.ucr.ac.cr','ecb028ed3fae5e26e2911b849af013097d2166d8.png','2009-05-27 12:14:05','2009-05-27 12:14:05'),
 (3,'ematricula','Matricula web de la universidad de Costa Rica.','www.ematricula.ucr.ac.cr','9919344b6c739778052efb7ba4b6301742a6eae7.png','2009-05-27 12:14:05','2009-07-16 18:26:42');
UNLOCK TABLES;
/*!40000 ALTER TABLE `enlace` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`foto`
--

DROP TABLE IF EXISTS `tcudesechos`.`foto`;
CREATE TABLE  `tcudesechos`.`foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `persona_id` int(11) NOT NULL,
  `galeria_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foto_FI_1` (`persona_id`),
  KEY `foto_FI_2` (`galeria_id`),
  CONSTRAINT `foto_FK_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  CONSTRAINT `foto_FK_2` FOREIGN KEY (`galeria_id`) REFERENCES `galeria` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`foto`
--

/*!40000 ALTER TABLE `foto` DISABLE KEYS */;
LOCK TABLES `foto` WRITE;
INSERT INTO `tcudesechos`.`foto` VALUES  (1,'playa azul 01','video Manejo de desechos. |\r\nYou have a minimum of 3 years experience in web development with PHP or Java and\r\nyou wish to participate to development of Web 2.0 sites using\r\nthe best frameworks available\r\n','playa-azul-0151.jpg',1,1,'2009-05-27 12:14:05','2009-07-16 15:49:22'),
 (3,'playa azul 02','','playa-azul-0239.jpg',1,1,'2009-05-28 13:34:54','2009-06-10 19:18:30'),
 (4,'playa azul 03','','playa-azul-0333.jpg',1,1,'2009-05-28 13:39:21','2009-06-10 19:19:14'),
 (5,'playa azul 04','','playa-azul-0468.jpg',1,1,'2009-05-28 13:39:34','2009-07-16 15:49:54'),
 (6,'playa azul 05','','playa-azul-0515.jpg',1,1,'2009-05-28 13:39:56','2009-07-16 15:50:23'),
 (7,'playa azul 06','','playa-azul-0654.jpg',1,1,'2009-05-28 13:40:13','2009-07-16 15:50:42'),
 (21,'union01','','11.jpg',1,2,'2009-07-16 16:01:27','2009-07-16 16:01:27'),
 (22,'union02','','91.jpg',1,2,'2009-07-16 16:01:41','2009-07-16 16:01:41'),
 (23,'union03','','93.jpg',1,2,'2009-07-16 16:02:00','2009-07-16 16:02:00'),
 (24,'union04','','23.jpg',1,2,'2009-07-16 16:02:13','2009-07-16 16:02:13'),
 (25,'union05','','63.jpg',1,2,'2009-07-16 16:02:29','2009-07-16 16:02:29'),
 (26,'union06','','78.jpg',1,2,'2009-07-16 16:02:48','2009-07-16 16:02:48'),
 (27,'union07','','17.jpg',1,2,'2009-07-16 16:03:07','2009-07-16 16:03:07'),
 (28,'union08','','18.jpg',1,2,'2009-07-16 16:03:18','2009-07-16 16:03:18'),
 (29,'union09','','58.jpg',1,2,'2009-07-16 16:03:35','2009-07-16 16:03:35'),
 (30,'union10','','26.jpg',1,2,'2009-07-16 16:03:49','2009-07-16 16:03:49'),
 (31,'union11','','87.jpg',1,2,'2009-07-16 16:04:09','2009-07-16 16:04:09'),
 (32,'union12','','94.jpg',1,2,'2009-07-16 16:04:25','2009-07-16 16:04:25'),
 (33,'union13','','union1349.jpg',1,2,'2009-07-16 16:04:49','2009-07-16 16:05:09'),
 (34,'union14','','union1447.jpg',1,2,'2009-07-16 16:05:27','2009-07-16 16:06:02'),
 (35,'union15','','30.jpg',1,2,'2009-07-16 16:06:16','2009-07-16 16:06:16'),
 (37,'union17','','63.jpg',1,2,'2009-07-16 16:06:43','2009-07-16 16:06:43'),
 (49,'f1','','feriacof1-jpg64234.jpg',1,3,'2009-10-19 13:16:06','2009-10-19 13:16:06'),
 (50,'f2','','feriacof2-jpg51561.jpg',1,3,'2009-10-19 13:18:52','2009-10-19 13:21:16'),
 (51,'f3','','feriacof3-jpg91170.jpg',1,3,'2009-10-19 13:21:28','2009-10-19 13:21:28'),
 (52,'f5','','feriacof4-jpg87624.jpg',1,3,'2009-10-19 13:21:39','2009-10-19 13:21:39'),
 (53,'f4','','feriacof05-jpg89272.jpg',1,3,'2009-10-19 13:21:53','2009-10-19 13:21:53'),
 (54,'e1','','expo1-jpg76846.jpg',1,4,'2009-10-19 13:24:30','2009-10-19 13:24:30'),
 (55,'e10','','expo10-jpg82163.jpg',1,4,'2009-10-19 13:24:42','2009-10-19 13:24:42'),
 (56,'e11','','expo11-jpg42607.jpg',1,4,'2009-10-19 13:24:53','2009-10-19 13:24:53'),
 (57,'e12','','expo12-jpg68002.jpg',1,4,'2009-10-19 13:25:04','2009-10-19 13:25:04'),
 (58,'e13','','expo13-jpg11887.jpg',1,4,'2009-10-19 13:25:15','2009-10-19 13:25:15'),
 (59,'e14','','expo14-jpg24715.jpg',1,4,'2009-10-19 13:25:25','2009-10-19 13:25:25'),
 (60,'e15','','expo15-jpg55027.jpg',1,4,'2009-10-19 13:25:43','2009-10-19 13:25:43'),
 (61,'e16','','expo16-jpg61621.jpg',1,4,'2009-10-19 13:25:56','2009-10-19 13:25:56'),
 (62,'e17','','expo17-jpg71440.jpg',1,4,'2009-10-19 13:26:12','2009-10-19 13:26:12'),
 (63,'e18','','expo18-jpg76255.jpg',1,4,'2009-10-19 13:26:24','2009-10-19 13:26:24'),
 (64,'e19','','expo19-jpg14014.jpg',1,4,'2009-10-19 13:26:36','2009-10-19 13:26:36'),
 (65,'e2','','expo2-jpg85608.jpg',1,4,'2009-10-19 13:26:51','2009-10-19 13:26:51'),
 (66,'e3','','expo3-jpg14096.jpg',1,4,'2009-10-19 13:27:11','2009-10-19 13:27:11'),
 (67,'e20','','expo20-jpg13044.jpg',1,4,'2009-10-19 13:27:22','2009-10-19 13:27:22'),
 (68,'e4','','expo4-jpg60964.jpg',1,4,'2009-10-19 13:28:05','2009-10-19 13:28:05'),
 (69,'e5','','expo5-jpg76031.jpg',1,4,'2009-10-19 13:42:35','2009-10-19 13:42:35'),
 (70,'e6','','expo6-jpg57626.jpg',1,4,'2009-10-19 13:42:58','2009-10-19 13:42:58'),
 (71,'e7','','expo7-jpg98665.jpg',1,4,'2009-10-19 13:43:12','2009-10-19 13:43:12'),
 (72,'e8','','expo8-jpg22145.jpg',1,4,'2009-10-19 13:43:23','2009-10-19 13:43:23'),
 (73,'e9','','expo9-jpg21404.jpg',1,4,'2009-10-19 13:43:36','2009-10-19 13:43:36');
UNLOCK TABLES;
/*!40000 ALTER TABLE `foto` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`galeria`
--

DROP TABLE IF EXISTS `tcudesechos`.`galeria`;
CREATE TABLE  `tcudesechos`.`galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`galeria`
--

/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
LOCK TABLES `galeria` WRITE;
INSERT INTO `tcudesechos`.`galeria` VALUES  (1,'Playa Azul','Fotografías tomadas en esos lugares\r\n','2009-05-27 12:14:05','2009-06-03 16:36:28'),
 (2,'Taller La Unión','Taller que se realizó en la comunidad de La Unión en San Ramón','2009-07-16 16:00:50','2009-07-16 16:00:50'),
 (3,'Feria Ambiental Coferene 2009','Feria  realizada en el museo de San Ramón','2009-10-19 11:50:56','2009-10-19 11:50:56'),
 (4,'ExpoUCR2009','Expo UCR','2009-10-19 13:24:00','2009-10-19 13:24:00');
UNLOCK TABLES;
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`persona`
--

DROP TABLE IF EXISTS `tcudesechos`.`persona`;
CREATE TABLE  `tcudesechos`.`persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `telefono1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telefono2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `datos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_FI_1` (`user_id`),
  CONSTRAINT `persona_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`persona`
--

/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
LOCK TABLES `persona` WRITE;
INSERT INTO `tcudesechos`.`persona` VALUES  (1,2,'Jonathan Sánchez Ugalde','24434812','24434812','jhozue@hotmail.com','Estudiante de Informática Empresarial. |\r\n','2009-05-27 12:14:05','2009-10-19 13:46:01'),
 (2,1,'Ismael Guido Granados','24379900','','ismael@hotmail.com','Encargado de TCU manejo de desechos. ','2009-05-27 12:14:05','2009-07-16 15:03:21'),
 (4,2,'uno','1234','1324','jho@df.com','sfa','2009-10-19 14:36:52','2009-10-19 14:36:52');
UNLOCK TABLES;
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`seccion`
--

DROP TABLE IF EXISTS `tcudesechos`.`seccion`;
CREATE TABLE  `tcudesechos`.`seccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `es_activa` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seccion_U_1` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`seccion`
--

/*!40000 ALTER TABLE `seccion` DISABLE KEYS */;
LOCK TABLES `seccion` WRITE;
INSERT INTO `tcudesechos`.`seccion` VALUES  (1,'Inicio','Portada (Inicio) del sitio de TCU.','../img/inicio.png',1,'2009-05-27 12:14:05','2009-05-27 12:14:05'),
 (2,'Noticias','Novedades del tcu, noticias y articulos publicados.','../img/noticias.png',1,'2009-05-27 12:14:05','2009-05-27 12:14:05'),
 (3,'Archivos','Archivos, documentos e información relacionados con el tcu.','../img/archivo.png',1,'2009-05-27 12:14:05','2009-05-27 12:14:05'),
 (4,'Galerías','Imágenes, videos y presentaciones multimedia del tcu','../img/galerias.png',1,'2009-05-27 12:14:05','2009-05-27 12:14:05'),
 (5,'Sitios','Lugares, empresas e instituciones donde resiven materiales de desecho, | \nya sea para reciclaje o para un adecuado tratamiento.\n','../img/sitios.png',1,'2009-05-27 12:14:05','2009-05-27 12:14:05'),
 (6,'Contactos','Información para contactos y encargados.','../img/contactos.png',1,'2009-05-27 12:14:05','2009-05-27 12:14:05');
UNLOCK TABLES;
/*!40000 ALTER TABLE `seccion` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_asset`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_asset`;
CREATE TABLE  `tcudesechos`.`sf_asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder_id` int(11) NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_folder_filename` (`folder_id`,`filename`),
  CONSTRAINT `sf_asset_FK_1` FOREIGN KEY (`folder_id`) REFERENCES `sf_asset_folder` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_asset`
--

/*!40000 ALTER TABLE `sf_asset` DISABLE KEYS */;
LOCK TABLES `sf_asset` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_asset` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_asset_folder`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_asset_folder`;
CREATE TABLE  `tcudesechos`.`sf_asset_folder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tree_left` int(11) NOT NULL DEFAULT '0',
  `tree_right` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relative_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_relative_path` (`relative_path`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_asset_folder`
--

/*!40000 ALTER TABLE `sf_asset_folder` DISABLE KEYS */;
LOCK TABLES `sf_asset_folder` WRITE;
INSERT INTO `tcudesechos`.`sf_asset_folder` VALUES  (1,1,2,'media','media','2009-05-29 12:12:42','2009-05-29 12:12:42');
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_asset_folder` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_group`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_group`;
CREATE TABLE  `tcudesechos`.`sf_guard_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_group_U_1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_group`
--

/*!40000 ALTER TABLE `sf_guard_group` DISABLE KEYS */;
LOCK TABLES `sf_guard_group` WRITE;
INSERT INTO `tcudesechos`.`sf_guard_group` VALUES  (1,'admin','Administrator group');
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_group` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_group_permission`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_group_permission`;
CREATE TABLE  `tcudesechos`.`sf_guard_group_permission` (
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_FI_2` (`permission_id`),
  CONSTRAINT `sf_guard_group_permission_FK_1` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_group_permission_FK_2` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_group_permission`
--

/*!40000 ALTER TABLE `sf_guard_group_permission` DISABLE KEYS */;
LOCK TABLES `sf_guard_group_permission` WRITE;
INSERT INTO `tcudesechos`.`sf_guard_group_permission` VALUES  (1,1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_group_permission` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_permission`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_permission`;
CREATE TABLE  `tcudesechos`.`sf_guard_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_permission_U_1` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_permission`
--

/*!40000 ALTER TABLE `sf_guard_permission` DISABLE KEYS */;
LOCK TABLES `sf_guard_permission` WRITE;
INSERT INTO `tcudesechos`.`sf_guard_permission` VALUES  (1,'admin','Administrator permission');
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_permission` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_remember_key`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_remember_key`;
CREATE TABLE  `tcudesechos`.`sf_guard_remember_key` (
  `user_id` int(11) NOT NULL,
  `remember_key` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`ip_address`),
  CONSTRAINT `sf_guard_remember_key_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_remember_key`
--

/*!40000 ALTER TABLE `sf_guard_remember_key` DISABLE KEYS */;
LOCK TABLES `sf_guard_remember_key` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_remember_key` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_user`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_user`;
CREATE TABLE  `tcudesechos`.`sf_guard_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `algorithm` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_user_U_1` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_user`
--

/*!40000 ALTER TABLE `sf_guard_user` DISABLE KEYS */;
LOCK TABLES `sf_guard_user` WRITE;
INSERT INTO `tcudesechos`.`sf_guard_user` VALUES  (1,'administrador','sha1','c60d83741d29b5449e0738a07f815afa','394a9c93e4aace5c10e65f42a3b79a80cc176f68','2009-05-27 12:14:05','2009-10-19 20:04:24',1,1),
 (2,'jonathan','sha1','58f5705a5c672e368da39660b05d4714','f2ad1d0b7df30fcd2748268ed81cf2b5d2d823d7','2009-05-27 12:14:05','2009-06-13 20:16:14',1,1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_user` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_user_group`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_user_group`;
CREATE TABLE  `tcudesechos`.`sf_guard_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_FI_2` (`group_id`),
  CONSTRAINT `sf_guard_user_group_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_group_FK_2` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_user_group`
--

/*!40000 ALTER TABLE `sf_guard_user_group` DISABLE KEYS */;
LOCK TABLES `sf_guard_user_group` WRITE;
INSERT INTO `tcudesechos`.`sf_guard_user_group` VALUES  (1,1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_user_group` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sf_guard_user_permission`
--

DROP TABLE IF EXISTS `tcudesechos`.`sf_guard_user_permission`;
CREATE TABLE  `tcudesechos`.`sf_guard_user_permission` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_FI_2` (`permission_id`),
  CONSTRAINT `sf_guard_user_permission_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_permission_FK_2` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sf_guard_user_permission`
--

/*!40000 ALTER TABLE `sf_guard_user_permission` DISABLE KEYS */;
LOCK TABLES `sf_guard_user_permission` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `sf_guard_user_permission` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`sitio`
--

DROP TABLE IF EXISTS `tcudesechos`.`sitio`;
CREATE TABLE  `tcudesechos`.`sitio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correo` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sitio_U_1` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`sitio`
--

/*!40000 ALTER TABLE `sitio` DISABLE KEYS */;
LOCK TABLES `sitio` WRITE;
INSERT INTO `tcudesechos`.`sitio` VALUES  (1,'Fortech','Encargada del reciclaje, reutilización y procesamiento de desechos tecnológicos.\r\n','Cartago, Costa Rica','fortech.png','www.fortech.cr','2573-8634','contacto@fortech.cr'),
 (2,'Coopevictoria','Colabora con recolección de aceites para fabricación de biodisel. ','San Isidro, Grecia, Alajuela, Costa Rica','coopevictoria.jpg','www.coopevictoria.com',' (506)4941866','victoria@coopevictoria.com');
UNLOCK TABLES;
/*!40000 ALTER TABLE `sitio` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`subseccion`
--

DROP TABLE IF EXISTS `tcudesechos`.`subseccion`;
CREATE TABLE  `tcudesechos`.`subseccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subseccion_FI_1` (`seccion_id`),
  CONSTRAINT `subseccion_FK_1` FOREIGN KEY (`seccion_id`) REFERENCES `seccion` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`subseccion`
--

/*!40000 ALTER TABLE `subseccion` DISABLE KEYS */;
LOCK TABLES `subseccion` WRITE;
INSERT INTO `tcudesechos`.`subseccion` VALUES  (1,'Introducción','<p>Este TCU mitiga el problema de la contaminaci&oacute;n por mal manejo de desechos s&oacute;lidos a trav&eacute;s del consumo racional y del manejo adecuado de desechos.</p>\r\n<p>Quienes matriculen este proyecto elaborar&aacute;n talleres y campa&ntilde;as educativas para ni&ntilde;os(as), ofrecer&aacute;n charlas sobre la importancia de seleccionar y separar los desechos s&oacute;lidos, confeccionar&aacute;n m&oacute;dulos de manejo de desechos, construir&aacute;n lombriciarios para el aprovechamiento de desechos org&aacute;nicos y establecer&aacute;n alianzas con instituciones gubernamentales y ONGs, entre otros.</p>\r\n<p>Poblaci&oacute;n beneficiaria:<br /> Centros educativos, centros de acopio y municipalidades en los cantones de Grecia, San Ram&oacute;n, Poas, Sarch&iacute;, Naranjo y Palmares. <br /> <br /> Ubicaci&oacute;n:<br /> Alajuela (Grecia). <br /> <br /> Disciplinas participantes:<br />Laboratorista Qu&iacute;mico, Ense&ntilde;anza Del Castellano y Literatura, Ense&ntilde;anza Del Ingles, Educaci&oacute;n Primaria, Educaci&oacute;n Preescolar, Trabajo Social, Econom&iacute;a Agr&iacute;cola</p>',1,NULL,'2009-10-05 18:40:21'),
 (2,'Objetivos','<h2>Objetivo General</h2>\r\n<p>Contribuir mediante la educaci&oacute;n con el manejo adecuado de los desechos en los cantones de la Regi&oacute;n Occidental del Valle Central con el fin de promover el desarrollo de alternativas y herramientas para la selecci&oacute;n, recolecci&oacute;n y disposici&oacute;n final de los desechos s&oacute;lidos</p>\r\n<h2>Objetivos</h2>\r\n<ol>\r\n<li> Colaborar en la promoci&oacute;n de acciones educativas y puestas en pr&aacute;ctica con ni&ntilde;os y ni&ntilde;as de educaci&oacute;n preescolar, primaria y secundaria orientadas al manejo adecuado de los desechos s&oacute;lidos y su continuidad en el tiempo.<br /> Metas:      \r\n<ul>\r\n<li>Implementaci&oacute;n de una campa&ntilde;a educativa con ni&ntilde;os, ni&ntilde;as y adolescentes de al menos 1 centro educativo de cada uno de los cantones involucrados en el proyecto / </li>\r\n<li>Instalaci&oacute;n de  centros de acopio permanentes en al menos cinco centro educativo donde haya participaci&oacute;n del proyecto. </li>\r\n</ul>\r\n</li>\r\n<li> Contribuir en la promoci&oacute;n de procesos educativos, en la poblaci&oacute;n de los cantones de la Regi&oacute;n Occidental del Valle Central, para la recuperaci&oacute;n y recolecci&oacute;n selectiva y disposici&oacute;n final de los desechos s&oacute;lidos.<br /> Metas:      \r\n<ul>\r\n<li>Implementaci&oacute;n de al menos cinco talleres sobre la importancia del manejo de desechos en las comunidades de la zona de influencia. </li>\r\n<li>Cooperaci&oacute;n de al menos 50 comerciantes comprometidos en la separaci&oacute;n permanente de desechos.<br /> Indicadores: </li>\r\n<li>Cooperaci&oacute;n de al menos 50 hogares en la separaci&oacute;n permanente de desecho.<br /> Indicadores: </li>\r\n</ul>\r\n</li>\r\n<li> Establecer alianzas con entidades gubernamentales (MINAE, Ministerio de Salud, Ministerio de Educaci&oacute;n P&uacute;blica), Municipalidades, empresas privadas y ONG\'s, que tengan relaci&oacute;n con el manejo adecuado de desechos s&oacute;lidos, para transmitirlo a los pobladores de los cantones de la regi&oacute;n Occidental del Valle Central.<br /> Metas:      \r\n<ul>\r\n<li>Coordinar al menos 2 campa&ntilde;as para la recolecta de desechos no tradicionales (llantas y desechos tecnol&oacute;gicos) </li>\r\n<li>Elaboraci&oacute;n de planes para el manejo de desechos en al menos cuatro cantones de la regi&oacute;n (Grecia, Valverde Vega, Naranjo y Palmares). </li>\r\n<li> Implementaci&oacute;n de al menos cuatro campa&ntilde;as cantonales de recolecci&oacute;n selectiva de desechos (Grecia, Valverde Vega, Naranjo y San Ram&oacute;n).</li>\r\n</ul>\r\n</li>\r\n</ol>',1,'2009-05-27 12:14:05','2009-05-28 13:28:30'),
 (3,'Información','<h2>Informaci&oacute;n</h2>\r\n<p>Un manejo adecuado de los desechos s&oacute;lidos ayuda a mantener una vida y un ambiente saludables. <br /> &ldquo;Toda persona tiene derecho a un ambiente sano y ecol&oacute;gicamente equilibrado. Por ello, est&aacute; legitimada para denunciar los actos que infrinjan ese derecho y para reclamar la reparaci&oacute;n del da&ntilde;o causado...&rdquo; Art&iacute;culo 50 de la Constituci&oacute;n Pol&iacute;tica.</p>\r\n<h2>Las 5 R (erres)</h2>\r\n<p>Las 5 R (erres) son las siglas de Reducir, Rechazar, Reutilizar, Reparar y Reciclar desechos; m&eacute;todos propuestos para el manejo adecuado de los desechos y, as&iacute;, evitar la contaminaci&oacute;n del medio ambiente.</p>\r\n<ul class=\"normal\">\r\n<li>Rechazar:	 No aceptar productos con exceso de empaques de pl&aacute;stico, aluminio o poroplast.</li>\r\n<li>Reducir: Disminuir el volumen de los desechos. Algunas t&eacute;cnicas son: comprimirlos, aprovechar la utilidad del producto al m&aacute;ximo, evitar la compra de botellas no retornables.</li>\r\n<li>Reutilizar:	 Usar repetidamente alg&uacute;n recurso o ma- terial para un fin similar o distinto, por ejemplo rellenar los envases de vidrio. Es lo mejor que puede hacerse con los desechos ya existentes.</li>\r\n<li>Recuperar-Reparar:	 Todo es desechable y nada es eterno, pero es posible alargar la vida &uacute;til de muchos productos mediante un buen mantenimiento y adecuada reparaci&oacute;n.</li>\r\n<li>Reciclar:	 Es la transformaci&oacute;n de los desechos en un producto nuevo.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h2>&iquest;Qu&eacute; es la basura?</h2>\r\n<p>Son los residuos que se producen como consecuen- cia de actividades humanas (dom&eacute;sticas, industriales, comerciales o de servicios) y que ya no tienen utilidad. Los basureros causan problemas ambientales que afectan el suelo, el agua y el aire. Con el tiempo, por la descomposici&oacute;n, se producir&aacute;n nuevos componen- tes qu&iacute;micos que contaminar&aacute;n el medio, ya que el suelo perder&aacute; muchas de sus propiedades originales, al igual que otros recursos importantes, como el agua subterr&aacute;nea.<br /> La acumulaci&oacute;n de basura a cielo abierto es una de las causas principales de plagas tales como ratones, moscas, cucarachas que transmiten enfermedades y que afectan la salud de la poblaci&oacute;n.</p>\r\n<p>Clasificaci&oacute;n:</p>\r\n<ul>\r\nSeg&uacute;n el tipo de material de desecho:\r\n<li> Org&aacute;nico: es degradado por acci&oacute;n biol&oacute;gica. Lo conforman residuos que se descomponen con el tiempo y se integran al suelo, como los residuos de plantas y animales. </li>\r\n<li> Inorg&aacute;nicos: formados por desechos no biodegrada- bles, por lo que no se pueden descomponer (provenientes de la materia inerte); pueden ser pl&aacute;stico, vidrio, lata, hierro, cer&aacute;mica, materiales sint&eacute;ticos, metales. </li>\r\n</ul>\r\n<ul>\r\nSeg&uacute;n el tiempo que tardan sus materiales en degradarse:<br />\r\n<li> Los desechos biodegradables se descomponen en forma natural, en un tiempo relativamente corto; por     ejemplo, alimentos, plantas, animales.</li>\r\n<li> Los desechos no biodegradables no se descomponen f&aacute;cilmente sino que tardan mucho tiempo en hacerlo. Por ejemplo, el vidrio tarda unos 4.000 a&ntilde;os, el pl&aacute;s- tico tarda de 100 a 1.000 a&ntilde;os, una lata de refresco     tarda unos 10 a&ntilde;os y un chicle unos cinco a&ntilde;os</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h2>&iquest;Qu&eacute; es reciclar?</h2>\r\n<p>Es el proceso por el que los materiales de desperdicio son recolectados y transformados en nuevos mate- riales que pueden ser utilizados o vendidos como nuevos productos o materias primas.<br /> Los objetivos del reciclaje son los siguientes:</p>\r\n<ul>\r\n<li>Ahorrar energ&iacute;a.</li>\r\n<li>Conservar los recursos naturales.</li>\r\n<li>Disminuir el volumen de desechos perjudiciales.</li>\r\n<li>Proteger el medio ambiente.</li>\r\n<li>Disminuir la contaminaci&oacute;n.</li>\r\n<li>Alargar la vida de los materiales.</li>\r\n<li>Reducir el 80% del espacio que ocupan los desperdicios al convertirse en basura.</li>\r\n<li>Facilitar la recolecci&oacute;n de basura.</li>\r\n<li>Evitar la producci&oacute;n de los 90 millones de toneladas 	 de basura que cada persona acumula en su vida.</li>\r\n<li>Disminuir el pago de impuestos por concepto de recolecci&oacute;n de basura (incluido en el pago predial).</li>\r\n<li>Vivir en un mundo m&aacute;s limpio.</li>\r\n<li>Proteger nuestra salud</li>\r\n</ul>',1,'2009-05-27 12:14:05','2009-05-28 13:29:43');
UNLOCK TABLES;
/*!40000 ALTER TABLE `subseccion` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`tcu`
--

DROP TABLE IF EXISTS `tcudesechos`.`tcu`;
CREATE TABLE  `tcudesechos`.`tcu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tcu_U_1` (`codigo`),
  UNIQUE KEY `tcu_U_2` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`tcu`
--

/*!40000 ALTER TABLE `tcu` DISABLE KEYS */;
LOCK TABLES `tcu` WRITE;
INSERT INTO `tcudesechos`.`tcu` VALUES  (1,'TC-388','Manejo de desechos en la región occidental el valle central','/img/desechos.png','2009-05-27 12:14:05','2009-05-27 12:14:05');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tcu` ENABLE KEYS */;


--
-- Definition of table `tcudesechos`.`tipo`
--

DROP TABLE IF EXISTS `tcudesechos`.`tipo`;
CREATE TABLE  `tcudesechos`.`tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipo_U_1` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tcudesechos`.`tipo`
--

/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
LOCK TABLES `tipo` WRITE;
INSERT INTO `tcudesechos`.`tipo` VALUES  (1,'Imágen','imagen.png'),
 (2,'Video','video.png'),
 (3,'Documento','documento.png'),
 (4,'Audio','audio.png'),
 (5,'Web','web.png'),
 (6,'Presentación','presentacion.png'),
 (7,'Juego','juego.png'),
 (8,'Comprimido','rar.png'),
 (9,'Otros','otros.png');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
