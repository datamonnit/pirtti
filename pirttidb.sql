-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: pirttidb
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB-0+deb9u1

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
-- Table structure for table `esiopetushakemus`
--

DROP TABLE IF EXISTS `esiopetushakemus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `esiopetushakemus` (
  `huoltajasahkoposti` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `huoltajapuhelin` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `pvm` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `hash` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `paivakoti` varchar(50) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esiopetushakemus`
--

LOCK TABLES `esiopetushakemus` WRITE;
/*!40000 ALTER TABLE `esiopetushakemus` DISABLE KEYS */;
/*!40000 ALTER TABLE `esiopetushakemus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `otsikko` varchar(45) CHARACTER SET latin1 NOT NULL,
  `time` varchar(45) CHARACTER SET latin1 NOT NULL,
  `image_text` varchar(45) CHARACTER SET latin1 NOT NULL,
  `img_path` varchar(45) CHARACTER SET latin1 NOT NULL,
  `img_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `img_type` varchar(45) CHARACTER SET latin1 NOT NULL,
  `img_path_thumb` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paivahoitohakemus`
--

DROP TABLE IF EXISTS `paivahoitohakemus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paivahoitohakemus` (
  `huoltajasahkoposti` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `huoltajapuhelin` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `pvm` date NOT NULL,
  `hash` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `paivakoti` varchar(20) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paivahoitohakemus`
--

LOCK TABLES `paivahoitohakemus` WRITE;
/*!40000 ALTER TABLE `paivahoitohakemus` DISABLE KEYS */;
/*!40000 ALTER TABLE `paivahoitohakemus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-24 10:21:36
