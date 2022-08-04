# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: afl
# Generation Time: 2022-08-04 09:46:51 +0000
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
  `Season` int(4) NOT NULL,
  `Premier` varchar(50) NOT NULL DEFAULT '',
  `Runner-Up` varchar(50) NOT NULL DEFAULT '',
  `Score` varchar(26) NOT NULL DEFAULT '',
  `Image` varchar(1000) DEFAULT 'https://res.cloudinary.com/yaffa-publishing/image/fetch/q_auto:best,c_fit,w_630,f_auto/http%3A%2F%2Fyaffa-cdn.s3.amazonaws.com%2Fadnews%2Flive%2Fimages%2FdmImage%2FSourceImage%2Fafl-logo3.jpg',
  `Delete` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `grandfinals` WRITE;
/*!40000 ALTER TABLE `grandfinals` DISABLE KEYS */;

INSERT INTO `grandfinals` (`id`, `Season`, `Premier`, `Runner-Up`, `Score`, `Image`, `Delete`)
VALUES
	(1,2021,'Melbourne Demons','Western Bulldogs','21.14 (140) d. 10.6 (66)','https://www.casey.vic.gov.au/sites/default/files/styles/coc_full_width/public/user-files/MFC%20Premiers.jpg?h=fdd2aaa4&itok=tSCZCpF5',0),
	(2,2020,'Richmond Tigers','Geelong Cats','12.9 (81) d. 7.8 (50)','https://resources.afl.com.au/photo-resources/2020/10/24/2d4ec1b4-a9f9-429f-b1d5-3265379b7b2d/wYkJexKd.jpg%20+%20?width=952&height=592',0),
	(3,2019,'Richmond Tigers','GWS Giants','17.12 (114) d. 3.7 (25)','https://cdn.newsapi.com.au/image/v1/9fe80263e57bb72fe2b2620f08649e36',0),
	(4,2018,'West Coast Eagles','Collingwood Magpies','11.13 (79) d. 11.8 (74)','https://resources.westcoasteagles.com.au/photo-resources/2019/12/01/837ca53f-86f1-493b-b7d5-6444e28ba639/UJynTaue.jpg?width=952&height=592',0),
	(5,2017,'Richmond Tigers','Adelaide Crows','16.12 (108) d. 8.12 (60)','https://content.api.news/v3/images/bin/d31899310bba7ec4b6f7d282c5daaab0',0),
	(6,2016,'Western Bulldogs','Sydney Swans','13.11 (89) d. 10.7 (67)','https://resources.afl.com.au/photo-resources/2021/09/23/d84eb4ce-db75-4179-901f-0f38f931328b/GFSyWB16AT-4465.jpg?width=1200&height=630',0),
	(7,2015,'Hawthorn Hawks','West Coast Eagles','16.11 (107) d. 8.13 (61)','https://www.abc.net.au/news/image/6825676-3x2-700x467.jpg',0),
	(8,2014,'Hawthorn Hawks','Sydney Swans','21.11 (137) d. 11.8 (74)','https://i.guim.co.uk/img/static/sys-images/Guardian/Pix/pictures/2014/9/27/1411806793203/c19ac51b-5bb5-4c46-9863-990e55b2d9d7-2060x1236.jpeg?width=620&quality=85&fit=max&s=b150f70df21103b3ff2f9be869c25e48',0),
	(9,2013,'Hawthorn Hawks','Fremantle Dockers','11.11 (77) d. 8.14 (62)','https://resources.afl.com.au/photo-resources/2021/07/22/e1a61c50-1940-4ff9-be6b-ea3be8f115e2/FUn0GAq5.jpg?width=1240',0),
	(10,2012,'Sydney Swans','Hawthorn Hawks','14.7 (91) d. 11.15 (81)','https://fromthesidelinenews.files.wordpress.com/2012/09/swanspremiers.jpg',0),
	(11,2011,'Geelong Cats','Collingwood Magpies','18.11 (119) d. 12.9 (81)','https://resources.geelongcats.com.au/photo-resources/2019/11/30/dace2111-1ba2-40b5-8ba3-bdaaa2c7c9fb/MhxDbsjn.jpg?width=952&height=592',0),
	(12,2010,'Collingwood Magpies','St. Kilda Saints','16.12 (108) d. 7.10 (52)','https://content.api.news/v3/images/bin/3c2c1ca0067f89802b7278282059e4e3',0),
	(13,2009,'Geelong Cats','St. Kilda Saints','12.8 (80) d. 9.14 (68)','https://resources.geelongcats.com.au/photo-resources/2019/11/27/91ad82fe-baa8-4fc2-9c8b-4ecfd9f81d88/WleTmcNP.jpg?width=500',0),
	(14,2008,'Hawthorn Hawks','Geelong Cats','18.7 (115) d. 11.23 (89)','http://bpvms-img-001-uptls.akamaized.net/web/images/20210513120655a_1024x576.jpg',0),
	(15,2007,'Geelong Cats','Port Adelaide Power','24.19 (163) d. 6.8 (44)','https://content.api.news/v3/images/bin/3154805b72b18c98214906602eb28fae',0),
	(16,2006,'West Coast Eagles','Sydney Swans','12.13 (85) d. 12.12 (84)','https://images.perthnow.com.au/publication/3E5B4C364151F7B56B3BC4811C05F057/062e2a73376d2efa6f26202acab6b848.jpeg',0),
	(17,2005,'Sydney Swans','West Coast Eagles','8.10 (58) d. 7.12 (54)','https://resources.afl.com.au/photo-resources/2019/12/02/c4f64b4b-805c-4098-9583-22f03fdf1194/CDjgoxPL.jpg?width=952&height=592',0),
	(18,2004,'Port Adelaide Power','Brisbane Lions','7.11 (113) d. 10.13 (73)','https://i.pinimg.com/originals/e1/a0/f9/e1a0f9caeebaecf9a0e1f799bd87baa1.jpg',0),
	(19,2003,'Brisbane Lions','Collingwood Magpies','20.14 (134) d. 12.12 (84)','https://i0.wp.com/afllegends.com.au/wp-content/uploads/2019/06/2003_Premiership.jpg?fit=600%2C400&ssl=1',0),
	(20,2002,'Brisbane Lions','Collingwood Magpies','10.15 (75) d. 9.12 (66)','https://s.afl.com.au/staticfile/AFL%20Tenant/BrisbaneLions/Images/Article%20Images/web%20pp%202002%20gf%20teamshot.jpg',0),
	(21,2001,'Brisbane Lions','Essendon Bombers','15.18 (108) d. 12.10 (82)','https://afllegends.com.au/wp-content/uploads/2019/06/2001_Premiership.jpg',0),
	(25,2000,'Essendon Bombers','Melbourne Demons','19.21 (135) d. 11.9 (75)','https://res.cloudinary.com/yaffa-publishing/image/fetch/q_auto:best,c_fit,w_630,f_auto/http%3A%2F%2Fyaffa-cdn.s3.amazonaws.com%2Fadnews%2Flive%2Fimages%2FdmImage%2FSourceImage%2Fafl-logo3.jpg',0),
	(28,1999,'North Melbourne Kangaroos','Carlton Cats','19.10 (124) d. 12.17 (89)','https://res.cloudinary.com/yaffa-publishing/image/fetch/q_auto:best,c_fit,w_630,f_auto/http%3A%2F%2Fyaffa-cdn.s3.amazonaws.com%2Fadnews%2Flive%2Fimages%2FdmImage%2FSourceImage%2Fafl-logo3.jpg',1),
	(29,1999,'North Melbourne Kangaroos','Carlton Cats','19.10 (124) d. 12.17 (89)','https://res.cloudinary.com/yaffa-publishing/image/fetch/q_auto:best,c_fit,w_630,f_auto/http%3A%2F%2Fyaffa-cdn.s3.amazonaws.com%2Fadnews%2Flive%2Fimages%2FdmImage%2FSourceImage%2Fafl-logo3.jpg',1);

/*!40000 ALTER TABLE `grandfinals` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
