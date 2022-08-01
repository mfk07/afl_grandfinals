# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: afl
# Generation Time: 2022-08-01 09:01:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table grandfinals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `grandfinals`;

CREATE TABLE `grandfinals` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Season` int(11) NOT NULL,
  `Premier` varchar(1000) NOT NULL DEFAULT '',
  `Runner-Up` varchar(1000) NOT NULL DEFAULT '',
  `Score` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `grandfinals` WRITE;
/*!40000 ALTER TABLE `grandfinals` DISABLE KEYS */;

INSERT INTO `grandfinals` (`id`, `Season`, `Premier`, `Runner-Up`, `Score`)
VALUES
	(1,2021,'Melbourne Demons','Western Bulldogs','21.14 (140) d. 10.6 (66)'),
	(2,2020,'Richmond Tigers','Geelong Cats','12.9 (81) d. 7.8 (50)'),
	(3,2019,'Richmond Tigers','GWS Giants','17.12 (114) d. 3.7 (25)'),
	(4,2018,'West Coast Eagles','Collingwood Magpies','11.13 (79) d. 11.8 (74)'),
	(5,2017,'Richmond Tigers','Adelaide Crows','16.12 (108) d. 8.12 (60)'),
	(6,2016,'Western Bulldogs','Sydney Swans','13.11 (89) d. 10.7 (67)'),
	(7,2015,'Hawthorn Hawks','West Coast Eagles','16.11 (107) d. 8.13 (61)'),
	(8,2014,'Hawthorn Hawks','Sydney Swans','21.11 (137) d. 11.8 (74)'),
	(9,2013,'Hawthorn Hawks','Fremantle Dockers','11.11 (77) d. 8.14 (62)'),
	(10,2012,'Sydney Swans','Hawthorn Hawks','14.7 (91) d. 11.15 (81)'),
	(11,2011,'Geelong Cats','Collingwood Magpies','18.11 (119) d. 12.9 (81)'),
	(12,2010,'Collingwood Magpies','St. Kilda Saints','16.12 (108) d. 7.10 (52)'),
	(13,2009,'Geelong Cats','St. Kilda Saints','12.8 (80) d. 9.14 (68)');

/*!40000 ALTER TABLE `grandfinals` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
