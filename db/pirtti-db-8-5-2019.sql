-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pirtti_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  `html_content` mediumtext COLLATE utf8_swedish_ci,
  `class` varchar(45) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'index','<h1>Päiväkotiyhdistys Pirtti ry</h1><p>Päiväkotiyhdistys Pirtti ry omistaa ja hallinnoi Päiväkoti Pirttiä ja Moision päiväkotia Mikkelissä. Päiväkotiyhdistyksen hallinnosta ja taloudesta vastaa johtokunta, johon kuuluu puheenjohtajan lisäksi kuusi varsinaista jäsentä ja neljä varajäsentä. Johtokunta kokoontuu tarpeen mukaan ja kokouksissa sihteerinä ja asioiden esittelijänä toimii päiväkodin johtaja. Johtokunnan jäsenet ovat Etelä-Savon sairaanhoitopiirin henkilökuntaa ja päiväkodeissa hoidossa olevien lasten vanhempia. <br><br>Päiväkotien yhteisenä johtajana toimii Heli Joensuu. <br><br>Molemmissa päiväkodeissa annetaan myös esiopetussuunnitelman mukaista esiopetusta.</p>','red'),(2,'moisio','<p><strong>Moision päiväkoti</strong> on Päiväkotyhdistys Pirtti ry:n ylläpitämä yksityinen päiväkoti Mikkelissä. Päiväkoti on aloittanut toimintansa vuonna 1968. Moision päiväkoti sijaitsee luonnon keskellä Moision kaupunginosassa. Yhteistyö Moision sairaalan kanssa mahdollistaa meille liikuntasalin käytön viikoittain lasten liikuntatuokioilla. \nMikkelin kaupunki valvoo päiväkodin toimintaa ja sen toimintaa ohjaavat samat lait ja asetukset kuin kunnallista varhaiskasvatusta. Päiväkodissamme on käytössä yksityisen päiväkotihoidon palveluseteli. Perhe hakee palveluseteliä Mikkelin kaupungilta saatuaan päivähoitopaikan päiväkodista. Varhaiskasvatuksen asiakasmaksut määräytyvät kunnallisten maksumääritysperusteiden mukaan. Asiakasmaksuun lisätään yksityisen päivähoidon omavastuulisä, joka on kokopäivähoidossa olevilta 30 euroa kuukaudessa. </p>','red'),(3,'moisio','<p>Moision päiväkodissa toimii kolme lapsiryhmää 2-6 – vuotiaille lapsille.</p><ul><li>Pikku Myyt, 2-3 -vuotiaat (4 päivähoitopaikkaa)</li><li>Muumipeikot, 4-5 -vuotiaat (8 paivahoitopaikkaa)</li><li>Nuuskamuikkuset, esikoulu (8-10 esiopetuspaikkaa)</li></ul>','green'),(4,'moisio','<p>Henkilökuntaan kuuluu kaksi lastentarhanopettajaa, lastenhoitaja sekä avustaja.\nToiminnassamme painotamme lapsikeskeisyyttä, turvallisuutta sekä luonto- ja ympäristökasvatusta.\nPäiväkodin aukioloaika on ma-pe 6.30 – 17 .</p>','green'),(5,'pirtti','<p><strong>Päiväkoti Pirtti</strong> on Päiväkotyhdistys Pirtti ry:n ylläpitämä yksityinen päiväkoti Mikkelissä. Päiväkoti on aloittanut toimintansa vuonna 1977. Päiväkoti Pirtti sijaitsee Tikanpellon alueella Tuppuralan kaupunginosassa. \nMikkelin kaupunki valvoo päiväkodin toimintaa ja sen toimintaa ohjaavat samat lait ja asetukset kuin kunnallista varhaiskasvatusta. Päiväkodissamme on käytössä yksityisen päiväkotihoidon palveluseteli. Perhe hakee palveluseteliä Mikkelin kaupungilta saatuaan päivähoitopaikan päiväkodista. Varhaiskasvatuksen asiakasmaksut määräytyvät kunnallisten maksumääritysperusteiden mukaan. Kunnalliseen asiakasmaksuun lisätään yksityisen päivähoidon omavastuulisä, joka on kokopäivähoidossa olevilta 30 euroa kuukaudessa.\nPäiväkoti Pirtissä toimii viisi lapsiryhmää 1-6 – vuotiaille lapsille. </p>','red'),(6,'pirtti','<p><h1>Ryhmät:</h1><ul><li>Nuput, 1-3 -vuotiaat (8 päivähoitopaikkaa)</li><li>Metsätähdet, 3-4 -vuotiaat (8 päivähoitopaikkaa)</li><li>Sinikellot, 4-5 -vuotiaat (14-16 päivähoitopaikkaa)</li><li>Esikot, esikoulu (8-10 esiopetuspaikkaa)</li></ul></p>','green'),(7,'pirtti','<p>Henkilökuntaan kuuluu neljä lastentarhanopettajaa, kolme lastenhoitajaa sekä avustaja.</p>','green');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

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
  `otsikko` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `time` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image_text` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_path` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_name` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_type` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img_path_thumb` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'Heippa','2019-05-07 10:18:45','TÃ¤ssÃ¤ kuva!','uploads/kissa.jpg','kissa.jpg','image/jpeg','thumbs/thumb_kissa.jpg');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery_user`
--

DROP TABLE IF EXISTS `gallery_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_user`
--

LOCK TABLES `gallery_user` WRITE;
/*!40000 ALTER TABLE `gallery_user` DISABLE KEYS */;
INSERT INTO `gallery_user` VALUES (6,'miklas','7ec613c5ad719ea864ab5eb8a5fb3cd6','maczulskijmiklas@gmail.com'),(7,'tuomas','d8578edf8458ce06fbc5bb76a58c5ca4','tuomas.puro@esedu.fi');
/*!40000 ALTER TABLE `gallery_user` ENABLE KEYS */;
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

-- Dump completed on 2019-05-08 10:39:37
