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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_application_server_master`
--

LOCK TABLES `tbl_application_server_master` WRITE;
/*!40000 ALTER TABLE `tbl_application_server_master` DISABLE KEYS */;
INSERT INTO `tbl_application_server_master` VALUES (1,'localserver','etvbnap','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','122.15.10.200','','etvbnap,etvbharatfa,etvbharatstores,fa','madhu,raghava','ntg','on'),(2,'localserver','stores','Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz','172.17.15.106','','eenadustores, storesfa','lakshminarayana','ntg','on');
/*!40000 ALTER TABLE `tbl_application_server_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_asset_details`
--

DROP TABLE IF EXISTS `tbl_asset_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_asset_details` (
  `asset_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(45) NOT NULL,
  `Applicable` varchar(45) NOT NULL,
  `device_allocated` varchar(45) NOT NULL,
  `Ast_belongs` varchar(45) NOT NULL,
  `Ast_dvc_code` varchar(45) NOT NULL,
  `hardware_details` varchar(45) NOT NULL,
  `device_serial_no` varchar(45) NOT NULL,
  `OS` varchar(45) NOT NULL,
  `is_item_refundable` varchar(45) NOT NULL,
  `Allocated_ipaddress` varchar(45) NOT NULL,
  `laptopwithacc` varchar(45) DEFAULT NULL,
  `laptopoptions` varchar(45) DEFAULT NULL,
  `dvc_recv` varchar(45) NOT NULL,
  `dvc_put_to_user` varchar(45) NOT NULL,
  `Ast_location` varchar(45) NOT NULL,
  PRIMARY KEY (`asset_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asset_details`
--

LOCK TABLES `tbl_asset_details` WRITE;
/*!40000 ALTER TABLE `tbl_asset_details` DISABLE KEYS */;
INSERT INTO `tbl_asset_details` VALUES (1,'Servers','','nap-etvb','EtvB','','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','41XDHY2','Centos','0','122.15.10.200',NULL,NULL,'2019-08-20','2019-08-30','etvbharat'),(2,'Servers','','stores','Eenadu','DS-3860','Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz','asdfgzxcvf','Centos','0','172.17.15.106',NULL,NULL,'2019-09-10','2019-09-17','rfc');
/*!40000 ALTER TABLE `tbl_asset_details` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_hardwaredetails_master`
--

LOCK TABLES `tbl_hardwaredetails_master` WRITE;
/*!40000 ALTER TABLE `tbl_hardwaredetails_master` DISABLE KEYS */;
INSERT INTO `tbl_hardwaredetails_master` VALUES (1,'Dell','PowerEdge R540','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','16GB','3TB','Server'),(2,'Hp','ProLiant DL380 Gen9','Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz','16GB','2TB','Server');
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

-- Dump completed on 2021-03-07 22:20:29
