-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: test_asset
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

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
-- Table structure for table `tbl_application_server_master`
--

DROP TABLE IF EXISTS `tbl_application_server_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_application_server_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appli_server` varchar(45) NOT NULL,
  `appli_server_name` varchar(45) NOT NULL,
  `hardware_processor` varchar(255) DEFAULT NULL,
  `appli_server_ipaddress` varchar(45) NOT NULL,
  `appli_server_sec_ipaddress` varchar(45) NOT NULL,
  `appli_server_project_main_db` varchar(45) NOT NULL,
  `appli_project_handledby` varchar(45) NOT NULL,
  `Remarks` varchar(45) NOT NULL,
  `server_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_application_server_master`
--

LOCK TABLES `tbl_application_server_master` WRITE;
/*!40000 ALTER TABLE `tbl_application_server_master` DISABLE KEYS */;
INSERT INTO `tbl_application_server_master` VALUES (1,'localserver','etvbnap','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','122.15.10.200','','etvbnap,etvbharatfa','madhu','ntg','on');
/*!40000 ALTER TABLE `tbl_application_server_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_employee_master`
--

DROP TABLE IF EXISTS `tbl_employee_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_employee_master` (
  `employee_master_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_code` varchar(45) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  PRIMARY KEY (`employee_master_id`),
  UNIQUE KEY `id_UNIQUE` (`employee_master_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_employee_master`
--

LOCK TABLES `tbl_employee_master` WRITE;
/*!40000 ALTER TABLE `tbl_employee_master` DISABLE KEYS */;
INSERT INTO `tbl_employee_master` VALUES (1,'9310158','RATNA SUHASINI YELAMANCHILI'),(2,'9310872','V NAGABHUSHANA SARMA SAMAVEDAM'),(3,'9312021','JAYA RAJU BASIPOGULA'),(4,'9312066','SUDHAKAR KANCHIBHOTLA'),(5,'9312357','BHAVANI LINGAMANENI'),(6,'9313241','RAGHU KODALI'),(7,'9313286','SUBBARAGHAVA RAO PAMIDIPATI'),(8,'9313760','JAGADEESH RAMINENI'),(9,'9315082','RAVI KIRAN PILLI'),(10,'9316318','NAISA PRASAD ANIPINDI'),(11,'9317220','PRASAD T'),(12,'9317380','V T H NAGESWARA RAO GRANDHI'),(13,'9318159','SURESH BABU MADUGULA'),(14,'9318985','CHINNA  NAGESWARA RAO KOMMINENI'),(15,'9319429','YADAGIRI PUNNA'),(16,'9319639','ADILAKSHMI KANCHUSTAMBHAM'),(17,'9319710','V RANGANADHAM CHAKRAVARTHULA'),(18,'9319950','CHALAPATHI RAO CHIRUVOLU'),(19,'9320145','BALA SIVA BRAHMAM KANURU'),(20,'9320596','MARAIAH PADASANABOINA'),(21,'9321446','LAKSHMI NARAYANA KANDUKURI'),(22,'9321821','GOPALA KRISHNA BOKKA'),(23,'9323077','SURESH KUMAR THANEERU'),(24,'9324171','SESHA GIRI GOGINENI'),(25,'9324557','MALLESH MADUPATHI'),(26,'9324879','RAVI KIRAN SOMARAJU'),(27,'9325245','SREE VALLI KOLLI'),(28,'9325262','DEEPTHI GOGINENI'),(29,'9325410','VEERA SURYA MANIKANTA YELUGUBANTI'),(30,'9325469','V SURYA PRAKASH KAKARAPALLI'),(31,'9325584','JYOTSHNA MADDALA'),(32,'9325620','KRISHNAGOPALA CHARY THUMOZU'),(33,'9325844','BHUMESWARI BOMMA'),(34,'9325861','KUMARA SWAMY BOGA'),(35,'9325889','KUMARA SWAMY KARNE'),(36,'9325892','GAYATHRI MANDADI'),(37,'9325911','MANOHAR GANUPURU'),(38,'9325925','NAGESWARA RAO NELLURI'),(39,'9326207','VIJAY KUMAR SEEMAKURTHY'),(40,'9326224','RANA PRATHAP KOTAGIRI'),(41,'9326241','RAJESH KUMAR BOPPA'),(42,'9326336','VENKATESH PULAGAM'),(43,'9326340','SRAVANTHI ANKATHI'),(44,'9326353','SRIHARSHA KONERU'),(45,'9326370','AKHILA THUPPARI'),(46,'9326529','SHABABU SHAIK CHAPALA'),(47,'9326532','LAHARI KOLLI'),(48,'9326546','SAI LAKSHMI KAJA'),(49,'9326563','DILIP KUMAR ELISETTY'),(50,'9326658','MADHAVI MARRI'),(51,'9326661','MADHU VANGOORI'),(52,'9326725','JANARDHAN RAO BUDUMURU'),(53,'9326739','CHANDANA GIDUGU'),(54,'9326756','BHAVYA VANKAYALAPATI'),(55,'9326760','HEMANTH HARIBABU'),(56,'9326773','MANASA VULISA'),(57,'9326885','SIVA SUBRAMANYAM KARANAM CHARAN');
/*!40000 ALTER TABLE `tbl_employee_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_hardwaredetails_master`
--

DROP TABLE IF EXISTS `tbl_hardwaredetails_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_hardwaredetails_master` (
  `hw_id` int(40) NOT NULL AUTO_INCREMENT,
  `hw_make` varchar(45) DEFAULT NULL,
  `hw_model` varchar(45) DEFAULT NULL,
  `hw_processor` varchar(255) DEFAULT NULL,
  `hw_ram` varchar(45) DEFAULT NULL,
  `hw_Hdd` varchar(45) DEFAULT NULL,
  `hw_type` varchar(255) NOT NULL,
  PRIMARY KEY (`hw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_hardwaredetails_master`
--

LOCK TABLES `tbl_hardwaredetails_master` WRITE;
/*!40000 ALTER TABLE `tbl_hardwaredetails_master` DISABLE KEYS */;
INSERT INTO `tbl_hardwaredetails_master` VALUES (1,'Dell','PowerEdge R540','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','16GB','3TB','Server');
/*!40000 ALTER TABLE `tbl_hardwaredetails_master` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-07 16:58:50
