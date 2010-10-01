-- MySQL dump 10.13  Distrib 5.1.48, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: slabs
-- ------------------------------------------------------
-- Server version	5.1.48

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
-- Table structure for table `slabs_issue`
--

DROP TABLE IF EXISTS `slabs_issue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_issue` (
  `is_id` int(11) NOT NULL AUTO_INCREMENT,
  `is_code` varchar(30) NOT NULL,
  `sc_id` int(11) NOT NULL,
  `is_date` date NOT NULL,
  `se_id` int(11) DEFAULT NULL,
  `st_id` int(11) NOT NULL,
  `is_title` varchar(20) NOT NULL,
  `is_report` text NOT NULL,
  `py_id` int(11) NOT NULL,
  PRIMARY KEY (`is_id`),
  KEY `sc_id` (`sc_id`),
  KEY `se_id` (`se_id`),
  KEY `st_id` (`st_id`),
  KEY `py_id` (`py_id`),
  CONSTRAINT `slabs_issue_ibfk_1` FOREIGN KEY (`sc_id`) REFERENCES `slabs_service_category` (`sc_id`),
  CONSTRAINT `slabs_issue_ibfk_2` FOREIGN KEY (`se_id`) REFERENCES `slabs_service` (`se_id`),
  CONSTRAINT `slabs_issue_ibfk_3` FOREIGN KEY (`st_id`) REFERENCES `slabs_status` (`st_id`),
  CONSTRAINT `slabs_issue_ibfk_5` FOREIGN KEY (`py_id`) REFERENCES `slabs_priority` (`py_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_issue`
--

LOCK TABLES `slabs_issue` WRITE;
/*!40000 ALTER TABLE `slabs_issue` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_issue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_parts_in_report`
--

DROP TABLE IF EXISTS `slabs_parts_in_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_parts_in_report` (
  `slabs_report_rp_id` int(11) NOT NULL,
  `slabs_parts_pa_id` int(11) NOT NULL,
  PRIMARY KEY (`slabs_report_rp_id`,`slabs_parts_pa_id`),
  KEY `fk_slabs_report_has_slabs_parts_slabs_parts1` (`slabs_parts_pa_id`),
  CONSTRAINT `fk_slabs_report_has_slabs_parts_slabs_report1` FOREIGN KEY (`slabs_report_rp_id`) REFERENCES `slabs_report` (`rp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_slabs_report_has_slabs_parts_slabs_parts1` FOREIGN KEY (`slabs_parts_pa_id`) REFERENCES `mydb`.`slabs_parts` (`pa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_parts_in_report`
--

LOCK TABLES `slabs_parts_in_report` WRITE;
/*!40000 ALTER TABLE `slabs_parts_in_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_parts_in_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_person`
--

DROP TABLE IF EXISTS `slabs_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_person` (
  `cs_id` int(11) NOT NULL AUTO_INCREMENT,
  `cs_name` varchar(20) NOT NULL,
  `cs_phone` varchar(30) DEFAULT NULL,
  `cs_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_person`
--

LOCK TABLES `slabs_person` WRITE;
/*!40000 ALTER TABLE `slabs_person` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_priority`
--

DROP TABLE IF EXISTS `slabs_priority`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_priority` (
  `py_id` int(11) NOT NULL AUTO_INCREMENT,
  `py_description` varchar(20) NOT NULL,
  `py_color` varchar(11) NOT NULL,
  PRIMARY KEY (`py_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_priority`
--

LOCK TABLES `slabs_priority` WRITE;
/*!40000 ALTER TABLE `slabs_priority` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_priority` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_report`
--

DROP TABLE IF EXISTS `slabs_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_report` (
  `rp_id` int(11) NOT NULL AUTO_INCREMENT,
  `rp_date` date NOT NULL,
  `is_id` int(11) NOT NULL,
  `rp_report` text NOT NULL,
  `st_id` int(11) NOT NULL,
  PRIMARY KEY (`rp_id`),
  KEY `is_id` (`is_id`),
  KEY `st_id` (`st_id`),
  CONSTRAINT `slabs_report_ibfk_1` FOREIGN KEY (`is_id`) REFERENCES `slabs_issue` (`is_id`),
  CONSTRAINT `slabs_report_ibfk_2` FOREIGN KEY (`st_id`) REFERENCES `slabs_status` (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_report`
--

LOCK TABLES `slabs_report` WRITE;
/*!40000 ALTER TABLE `slabs_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_service`
--

DROP TABLE IF EXISTS `slabs_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_service` (
  `se_id` int(11) NOT NULL AUTO_INCREMENT,
  `se_description` varchar(20) NOT NULL,
  `se_serialnumber` varchar(20) DEFAULT '-',
  `ps_id` int(11) NOT NULL,
  PRIMARY KEY (`se_id`),
  KEY `fk_slabs_service_1` (`ps_id`),
  CONSTRAINT `fk_slabs_service_1` FOREIGN KEY (`ps_id`) REFERENCES `slabs_person` (`cs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_service`
--

LOCK TABLES `slabs_service` WRITE;
/*!40000 ALTER TABLE `slabs_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_service_category`
--

DROP TABLE IF EXISTS `slabs_service_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_service_category` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_descr` varchar(11) NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_service_category`
--

LOCK TABLES `slabs_service_category` WRITE;
/*!40000 ALTER TABLE `slabs_service_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_service_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slabs_status`
--

DROP TABLE IF EXISTS `slabs_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slabs_status` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_descr` varchar(11) NOT NULL,
  `st_color` varchar(11) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slabs_status`
--

LOCK TABLES `slabs_status` WRITE;
/*!40000 ALTER TABLE `slabs_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `slabs_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-10-02  0:24:42
