-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: elearning
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdps` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'aiman.elbou@gmail.com','elbouayadi1234'),(2,'mohammed.elkh@gmail.com','1234567890'),(3,'lahcen.hass@gmail.com','elhasnaoui');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cours`
--

DROP TABLE IF EXISTS `cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours` (
  `id_cour` int(11) NOT NULL AUTO_INCREMENT,
  `nom` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cour`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours`
--

LOCK TABLES `cours` WRITE;
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
INSERT INTO `cours` VALUES (30,'Programmation C','Ce cours sert a prends les principe de programmation C','GI'),(31,'Programmation JAVA','Ce cours sert a prends les principe de programmation JAVA','GI'),(32,'Base Donnes','Ce cours sert a prends les principe de Base Donnees','GI'),(33,'Securiter Réseau','Ce cours sert a prends les principe de securité Reseau','TSI'),(34,'Organisation d entreprise','Ce cours sert a prends les principe d organisation d entreprise','TM'),(35,'Droits','Ce cours sert a prends les principe Droits','FBA'),(36,'Gestion de Projet','Ce cours sert a prends les principe d Organisation d entreprise','TM'),(37,'Mécanique des fluides','Ce cours sert a prends les principe de Mécanique des fluides','GTE'),(38,'Physique générale','Ce cours sert a prends les principe de Physique générale','GTE'),(39,'Electronique Numérique','Ce cours sert a prends les principe de Physique générale','GIM'),(40,'Organisation et Méthodes et maintenance','Ce cours sert a prends les principe d Organisation et Méthodes et maintenance','GIM'),(41,'Electronique Analogique','Ce cours sert a prends les principe d Electronique Analogique','GIM'),(42,'Technique du batiment','Ce cours sert a prends les principe de Technique du batiment','GC'),(43,'Calcul des Structures','Ce cours sert a prends les principe de Calcul des Structures','GC'),(44,'Architecture et Topographie','Ce cours sert a prends les principe d Architecture et Topographie','GC'),(45,'Comptabilité et outils de gestion','Ce cours sert a prends les principe de Comptabilité et outils de gestion','TCC'),(46,'Outils d aide a la décision','Ce cours sert a prends les principe d Outils d aide a la décision','TCC'),(47,'Macro economie','ce cours pour la filiere tcc','TCC'),(48,'Deve web avancée','ce cours sert a donner les princip du web avancé','TCC'),(49,'gestion éé l','ce cours sert a rien','TCC');
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demande`
--

DROP TABLE IF EXISTS `demande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `demande` (
  `code_massar` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `date_naiss` date NOT NULL,
  `filiere` varchar(4) NOT NULL,
  `num_tele` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdps` text NOT NULL,
  `type_user` enum('etudiant','professeur') NOT NULL,
  `etat` enum('-1','0','1') NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`code_massar`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demande`
--

LOCK TABLES `demande` WRITE;
/*!40000 ALTER TABLE `demande` DISABLE KEYS */;
INSERT INTO `demande` VALUES (1,'abdou','akheraz','2015-01-01','GI',456546,'abdou@gmail.com','0000','etudiant','-1','Meknes'),(2,'agadiri','imad','2015-01-01','GI',456546,'imad@gmail.com','0000','etudiant','-1','agadir'),(3,'manal','benchlikha','2015-01-01','GC',456546,'benchlikha@gmail.com','0000','professeur','-1','casablanca'),(4,'oudghiri','lamiae','2015-01-01','TM',456546,'lamiae@gmail.com','0000','etudiant','-1','Rabat'),(5,'oudghiri','khansae','2015-01-01','GI',456546,'khansae@gmail.com','0000','etudiant','-1','taza'),(6,'badouri','lamiae','2015-01-01','FBA',456546,'lamia@gmail.com','0000','professeur','-1','marakech'),(7,'badouri','safae','2015-01-01','TCC',456546,'safae@gmail.com','0000','etudiant','-1','tanger'),(8,'achbihi','kenza','2015-01-01','TSI',456546,'kenza@gmail.com','0000','etudiant','-1','sale'),(9,'leknit','achraf','2015-01-01','GI',456546,'achraf@gmail.com','0000','professeur','-1','Ouejda'),(10,'ayoubi','safwa','2015-01-01','TM',456546,'safwa@gmail.com','0000','etudiant','0','houcima'),(11,'alaoui','imane','2015-01-01','TM',456546,'imane@gmail.com','0000','professeur','1','Meknes'),(12,'akhawayni','ayoub','2015-01-01','GE',456546,'ayoub@gmail.com','0000','etudiant','1','Fes'),(13,'nhari','ayoub','2020-03-06','GC',654824,'ayoub.nh@gmail.com','123456','etudiant','-1','Meknes'),(14,'popo','amin','2020-03-06','TSI',456546,'popo@gmail.com','popo123','etudiant','-1','RABAT'),(15,'sanousi','mohamed','2020-02-28','TSI',45654,'sanousi@gmail.com','simans','professeur','-1','MEKNES'),(16,'salhi','anas','2020-03-12','GIM',5412,'salhi@gmail.com','0000','professeur','-1','TANGER'),(17,'izm','amina','2001-01-11','GI',451,'izm@gmail.com','1111','etudiant','-1','MEKNES'),(18,'laasili','basma','1111-11-11','GIM',47862,'bassma@gmail.com','0000','professeur','-1','Meknes'),(19,'laasili','soufian','1111-11-11','GIM',45555,'bassma@gmail.com','0000','etudiant','-1','Meknes'),(20,'laasili','soufian','1111-11-11','GIM',45555,'bassma@gmail.com','0000','etudiant','-1','Meknes'),(21,'laasili','soufian','1111-11-11','GIM',45555,'bassma@gmail.com','0000','etudiant','-1','Meknes'),(22,'corona','corona','2020-03-20','GIM',0,'corona@gmail.com','corona','professeur','-1','china'),(23,'corona','corona','2020-03-20','GIM',0,'corona@gmail.com','corona','professeur','-1','china');
/*!40000 ALTER TABLE `demande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `code_massar` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `filiere` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_tele` int(11) DEFAULT NULL,
  `adresse` mediumtext COLLATE utf8mb4_unicode_ci,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdps` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'etudiant',
  PRIMARY KEY (`code_massar`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES (1,'OMARI','AYOUB','2000-12-25','GI',615489745,'Meknes','ayoub.om@gmail.com','ayoub125125','etudiant'),(3,'HASSANI','MANAL','2001-08-07','GIM',614985235,'MEKNES','manal.hassani14@gmail.com','1234','etudiant'),(27,'elhassani','hesna','2020-03-20','FBA',645466,'Meknes','hessna@gmail.com','0000','etudiant'),(23,'elbouayadi','ayman','2020-02-13','GC',84651,'tanger','hassan.el@gmail.com','1234','etudiant'),(9,'EL ACHI','AYMAN','1999-11-30','GE',615357595,'SALE','ayman.elachi@gmail.com','1234','etudiant'),(10,'REHALI','MARYAME','2000-01-18','GIM',695754545,'MEKNES','maryame.rahali@gmail.com','1234','etudiant'),(11,'BOUHALI','IMANE','1999-09-17','TCC',635393887,'MEKNES','imane.bouhali12@gmail.com','1234','etudiant'),(12,'ZERYOUH','KHAOULA','2000-12-22','TM',625284719,'MEKNES','khaoula.zrh@gmail.com','1234','etudiant'),(14,'JAMALI','TAHA','2000-11-07','GI',654318974,'SIDI KACEM','taha.jamali@gmail.com','1234','etudiant'),(28,'akhawayni','ayoub','2015-01-01','GE',456546,'Fes','ayoub@gmail.com','0000','etudiant'),(16,'MAANINOU','KHAOULA','2000-04-18','GIM',625974581,'KENITRA','khaoula.maaninou@gmail.com','1234','etudiant'),(17,'OUFKIR','MANAL','2001-08-24','GC',615348974,'CASABLANCA','manal.oufkir@gmail.com','1234','etudiant'),(18,'BOURIKA','MARYAME','2000-02-17','GE',619475654,'TANGER','maryame.bourika@gmail.com','1234','etudiant'),(21,'Hammam','Maryame','2001-12-15','TM',615458954,'MEKNES','maryhamama45@gmail.com','1234','etudiant');
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id_pdf` int(11) NOT NULL AUTO_INCREMENT,
  `id_filiere` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_prof` int(11) NOT NULL,
  `commantaire` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cour` int(11) DEFAULT NULL,
  `type_cour` enum('cour','tp') COLLATE utf8mb4_unicode_ci DEFAULT 'cour',
  `nbr_telechargement` int(11) DEFAULT '0',
  `date_ajoute` datetime DEFAULT CURRENT_TIMESTAMP,
  `nom_pdf` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf_lien` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pdf`),
  KEY `id_filiere` (`id_filiere`),
  KEY `code_prof` (`code_prof`),
  KEY `id_cour` (`id_cour`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` VALUES (1,'TCC',6,'un commantaire',47,'tp',0,'2020-03-23 21:53:03','','../aaa/aaa/aa'),(3,'TCC',6,'aaaaaaaaa',47,'tp',0,'2020-03-23 22:19:22','tittttre','../file/TCC/TP2.pdf'),(8,'TCC',6,'zzzz',47,'tp',0,'2020-03-23 22:55:31','TP_3.pdf','../file/TCC/TP_3.pdf'),(7,'TCC',6,'un tp de xx',47,'tp',4,'2020-03-23 22:44:27','TP_Etat.pdf','../file/TCC/TP_Etat.pdf'),(6,'TCC',6,'aaaaaaaaa',47,'tp',2,'2020-03-23 22:22:55','TP2.pdf','../file/TCC/TP2.pdf'),(9,'TCC',6,'s',47,'tp',0,'2020-03-23 22:56:39','TP_Activité.pdf','../file/TCC/TP_Activité.pdf'),(13,'TCC',6,'koulchiiiiiiii',48,'cour',0,'2020-03-26 20:44:24','HTML-partie1.pdf','../file/TCC/HTML-partie1.pdf');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `filiere` (
  `filiere_id` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filiere` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filiere_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`filiere_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filiere`
--

LOCK TABLES `filiere` WRITE;
/*!40000 ALTER TABLE `filiere` DISABLE KEYS */;
INSERT INTO `filiere` VALUES ('GI','GENIE INFORMATIQUE','bonjour c estu petite desc a propos de la filiere'),('TM','TECHNIQUE DE MANAGEMENT','bonjour c estu petite desc a propos de la filiere'),('TSI','TECHNIQUE DE SON ET D IMAGE','bonjour c estu petite desc a propos de la filiere'),('GIM','GENIE INDUSTRIEL ET MAINTENANCE','bonjour c estu petite desc a propos de la filiere'),('GC','GENEIE CIVIL','bonjour c estu petite desc a propos de la filiere'),('GE','GENIE ELECTRIQUE','bonjour c estu petite desc a propos de la filiere'),('GTE','GENIE TERMIQUE ET ENERGETIQUE','bonjour c estu petite desc a propos de la filiere'),('FBA','FINANCE BANQUE ET ASSURANCE','c est une filiere de FBA'),('TCC','TECHNIQUE DE COMMUNICATION COMMERCIALISATION','bonjour c estu petite desc a propos de la filiere'),('IA','Inteligence artificiel','Filiere de inteligence artificiel');
/*!40000 ALTER TABLE `filiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `login_etd`
--

DROP TABLE IF EXISTS `login_etd`;
/*!50001 DROP VIEW IF EXISTS `login_etd`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `login_etd` AS SELECT 
 1 AS `code_massar`,
 1 AS `nom_complet`,
 1 AS `mdps`,
 1 AS `type`,
 1 AS `email`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `login_prof`
--

DROP TABLE IF EXISTS `login_prof`;
/*!50001 DROP VIEW IF EXISTS `login_prof`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `login_prof` AS SELECT 
 1 AS `code_massar_prof`,
 1 AS `nom_cmplt`,
 1 AS `login`,
 1 AS `mdps`,
 1 AS `type`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `type` enum('etudiant','professeur','visiteur') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'hassan benani','ceci est un test ','hassa@gmail.com',6544741,'visiteur',-1),(2,'LOUKILI HASSAN','un message de mois prof hassan','hassan.loukili@gmail.com',603254861,'professeur',6),(3,'LOUKILI HASSAN','un test n 2 depuis hassan loukili','hassan.loukili@gmail.com',603254861,'professeur',6);
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professeur` (
  `code_massar_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `filiere` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_tele` int(11) DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdps` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'professeur',
  `adresse` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`code_massar_prof`),
  KEY `filiere` (`filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professeur`
--

LOCK TABLES `professeur` WRITE;
/*!40000 ALTER TABLE `professeur` DISABLE KEYS */;
INSERT INTO `professeur` VALUES (6,'LOUKILI','HASSAN','1987-07-24','TCC',603254861,'hassan.loukili@gmail.com','1234','professeur','Tanger'),(24,'alaoui','imane','2015-01-01','TM',456546,'imane@gmail.com','0000','professeur',NULL),(8,'BOUDIRI','MOHAMED','1983-08-30','GC',605887411,'mohamed.boudiri@gmail.com','1234','professeur',NULL),(9,'SEBANI','BOUCHTA','1985-09-14','GE',612349856,'bouchta.sebani@gmail.com','1234','professeur',NULL),(10,'TAOUIL','KARAM','1987-10-02','GIM',654123265,'karam.taouil@gmail.com','1234','professeur',NULL),(11,'FEKKAK','HASSAN','1970-05-01','GI',678946525,'hassan.fekkak@gmail.com','1234','professeur',NULL),(12,'ABOUKHADIJA','IDRISS','1978-06-11','GI',632156784,'idriss.abou@gmail.com','1234','professeur',NULL),(13,'EL ANDALOUSI','MOUAD','1972-04-22','TSI',615544898,'mouad.elandalousi@gmail.com','1234','professeur',NULL),(14,'BENKIRAN','ABDELAH','1973-04-25','TCC',607258495,'abdelah.ben@gmail.com','1234','professeur',NULL),(15,'EL RHAZRANI','WISSAL','1991-03-24','GC',631654895,'wissal.elrhz@gmail.com','1234','professeur',NULL),(17,'ROUBAI','CHAFIKA','1989-10-13','GIM',694326548,'chafika.roub@gmail.com','1234','professeur',NULL),(18,'SOUBAI','BOUCHRA','1987-11-20','GC',654987451,'bouchra.soubai@gmail.com','1234','professeur',NULL),(19,'KHATOURI','ILHAM','1981-10-10','GR',614748525,'ilham.khat@gmail.com','1234','professeur',NULL),(20,'WAKRIM','JAWAD','1982-05-12','FBA',654876525,'jawad.wak@gmail.com','1234','professeur',NULL),(21,'ROUSSI','SANAE','1974-04-02','GI',699788488,'sanae.roussi@gmail.com','1234','professeur',NULL),(23,'hassani','aya','2020-03-25','GI',89456,'hassani@gmail.com','0000','professeur',NULL),(1,'ELASOULI','ABDERAHMAN','1988-04-05','FBA',658459874,'elasouli.abd@gmail.com','2222','professeur',NULL),(2,'ELAHMADI','ABDELKADER','1987-04-05','FBA',625455475,'elahmadi.abd@gmail.com','1234','professeur',NULL);
/*!40000 ALTER TABLE `professeur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `login_etd`
--

/*!50001 DROP VIEW IF EXISTS `login_etd`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login_etd` AS select `etudiant`.`code_massar` AS `code_massar`,concat(`etudiant`.`nom`,' ',`etudiant`.`prenom`) AS `nom_complet`,`etudiant`.`mdps` AS `mdps`,`etudiant`.`type` AS `type`,`etudiant`.`email` AS `email` from `etudiant` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `login_prof`
--

/*!50001 DROP VIEW IF EXISTS `login_prof`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = cp850 */;
/*!50001 SET character_set_results     = cp850 */;
/*!50001 SET collation_connection      = cp850_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `login_prof` AS select `professeur`.`code_massar_prof` AS `code_massar_prof`,concat(`professeur`.`nom`,' ',`professeur`.`prenom`) AS `nom_cmplt`,`professeur`.`email` AS `login`,`professeur`.`mdps` AS `mdps`,`professeur`.`type` AS `type` from `professeur` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-03 22:14:57
