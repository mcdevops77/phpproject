-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: test_asset
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.8-MariaDB

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
-- Table structure for table `complaint1`
--

DROP TABLE IF EXISTS `complaint1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `complaint` varchar(45) NOT NULL,
  `employeeID` bigint(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint1`
--

LOCK TABLES `complaint1` WRITE;
/*!40000 ALTER TABLE `complaint1` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaint1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `Ast_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_belongs` varchar(255) DEFAULT NULL,
  `Ast_category` varchar(255) DEFAULT NULL,
  `cat_vendor_type` varchar(255) DEFAULT NULL,
  `cat_vendor_model` varchar(255) DEFAULT NULL,
  `Ast_dvc_code` varchar(255) DEFAULT NULL,
  `Ast_reg_user` varchar(255) DEFAULT NULL,
  `Ast_dvc_recv` date NOT NULL,
  `Ast_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Ast_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,'Eenadu','UserSysconfig','dell','dell-3040','DS-1768','testing','2019-12-08','RFC'),(2,'Eenadu','UserSysconfig','dell','dell-7040','DS-12344','test','2019-12-08','MC');
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_assets`
--

DROP TABLE IF EXISTS `tbl_assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assets` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_belongs` varchar(255) DEFAULT NULL,
  `Ast_category` varchar(255) DEFAULT NULL,
  `Ast_dvc_code` varchar(255) DEFAULT NULL,
  `Ast_model` varchar(255) DEFAULT NULL,
  `Ast_hw_details` varchar(255) DEFAULT NULL,
  `Ast_dvc_serialno` varchar(65) DEFAULT NULL,
  `Ast_dvc_alloted` varchar(255) DEFAULT NULL,
  `Ast_reg_user` varchar(255) DEFAULT NULL,
  `Ast_reg_user_ipaddress` text DEFAULT NULL,
  `Ast_dvc_recv` date NOT NULL,
  `Ast_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets`
--

LOCK TABLES `tbl_assets` WRITE;
/*!40000 ALTER TABLE `tbl_assets` DISABLE KEYS */;
INSERT INTO `tbl_assets` VALUES (1,'Eenadu','UserSysconfig','DS-1713','HCL','CORE2DUO','fg2pxh2','SyncSystem','clssyncpc','172.17.12.20','2019-10-11','MC'),(2,'Eenadu','User SystemConfig','DS-3861','Dell','Dell -> 7040','FG2PXH2','CentosTesting','siva','172.17.12.129','2020-11-12','MC'),(3,'1','1','','1','1','','','','','0000-00-00',''),(4,'1','1','','1','','','','','','0000-00-00',''),(5,'1','1','','1','1','','','','','0000-00-00','');
/*!40000 ALTER TABLE `tbl_assets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_assets_new`
--

DROP TABLE IF EXISTS `tbl_assets_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assets_new` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_belongs` varchar(255) DEFAULT NULL,
  `Ast_category` varchar(255) DEFAULT NULL,
  `Ast_dvc_code` varchar(255) DEFAULT NULL,
  `make_type` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `hardware_details` varchar(255) DEFAULT NULL,
  `device_serial_no` varchar(255) DEFAULT NULL,
  `OS` varchar(255) DEFAULT NULL,
  `device_allocated` varchar(255) DEFAULT NULL,
  `is_item_refundable` tinyint(1) DEFAULT NULL,
  `reg_user` varchar(255) DEFAULT NULL,
  `Allocated_ipaddress` tinytext DEFAULT NULL,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets_new`
--

LOCK TABLES `tbl_assets_new` WRITE;
/*!40000 ALTER TABLE `tbl_assets_new` DISABLE KEYS */;
INSERT INTO `tbl_assets_new` VALUES (2,'MC','System','DS-10556','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe','Windows-10','user',1,'nag','172.17.12.107,192.168.22.212','2020-12-24','2020-12-24','RFC'),(3,'Eenadu','System','DS-10556','lenovo','Core2Duo','i5-5th Gen','zxcdwqe','Centos','user',1,'siva','172.17.12.107','2020-12-24','2020-12-24','RFC'),(4,'MC','Servers','DS-10558','Dell','Dell -> 7070','i5-5th Gen','zxcdwqe','RHEL','user',0,'siva','172.17.12.107','2020-12-24','2020-12-24','RFC'),(22,'Eenadu','Servers','DS-1020','Hp','Core2Duo','intel@i7','asdfg22','centos','usr',0,'test','172.17.12.10','2020-12-05','2020-12-12','mc'),(23,'Eenadu','System','DS-3867','Dell','Dell -> 7040','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcvfdsa','Windows-10','devp',0,'siva','172.17.12.128','2020-12-25','2020-12-18','mc'),(24,'Eenadu','System','DS-3867','Dell','Dell -> 7040','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcvfdsa','Windows-10','devp',0,'siva','172.17.12.128','2020-12-25','2020-12-18','mc'),(25,'Eenadu','Servers','DS-10200','Hp','Core2Duo','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcqwert','Fedora','Nap',0,'nap live','172.17.20.124','2020-12-21','2020-12-29','mc'),(26,'Eenadu','Servers','DS-10200','Hp','Core2Duo','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcqwert','Fedora','Nap',0,'nap live','172.17.20.124','2020-12-21','2020-12-29','mc'),(27,'MC','Servers','DS-10208','HCL','Core2Duo','intel@i3','zxcqwert','Windows-7','sync',0,'napsync','172.17.12.123','2020-12-19','2020-12-05','mc'),(28,'MC','System','DS-1245','HCL','Core2Duo','intel@i3,8GB,500GB','qedfgbn-cjklio-mnhy6','Fedora','network',0,'testing','172.17.12.1','2021-01-02','2021-01-07','Mc'),(29,'MC','System','DS-1245','HCL','Core2Duo','intel@i3,8GB,500GB','qedfgbn-cjklio-mnhy6','Fedora','network',0,'testing','172.17.12.1','2021-01-02','2021-01-07','Mc'),(30,'Eenadu','System','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devp',0,'me','172.17.12.133','2021-01-09','2021-01-16','rfc'),(31,'Eenadu','System','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'mee','172.17.12.133','2021-01-09','2021-01-16','rfc'),(32,'Eenadu','System','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'mee','172.17.12.133','2021-01-09','2021-01-16','rfc'),(33,'Eenadu','System','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'mee','172.17.12.133','2021-01-09','2021-01-16','rfc'),(34,'Eenadu','System','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'mee','172.17.12.133','2021-01-09','2021-01-16','rfc'),(35,'Eenadu','System','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'mee','172.17.12.133','2021-01-09','2021-01-16','rfc'),(36,'MC','System','DS-1056','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe112','Windows-10','network',0,'charan','172.17.12.128','2020-12-24','2020-12-24','RFC'),(37,'MC','System','DS-1056','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe112','Windows-10','network',0,'charan siva','172.17.12.128','2020-12-24','2020-12-24','RFC'),(39,'Eenadu','Servers','DS-10567','Hp','Prolaint ML G5','i5-5th Gen','zxcdwqe112','Windows-10','network',0,'soc test','172.17.12.128','2020-12-24','2020-12-24','RFC'),(40,'UKML','Servers','DS-3098','Hp','Core2Duo','intel@i3,8GB,500GB','cn-aaafe33-iiop','Ubuntu','Soc test',0,'K.charan','172.17.12.133','2021-01-16','2021-01-23','rfc');
/*!40000 ALTER TABLE `tbl_assets_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_assets_new_td`
--

DROP TABLE IF EXISTS `tbl_assets_new_td`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assets_new_td` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(255) NOT NULL,
  `Applicable` varchar(255) NOT NULL,
  `Ast_belongs` varchar(255) NOT NULL,
  `Ast_dvc_code` varchar(255) NOT NULL,
  `make_type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `hardware_details` varchar(255) NOT NULL,
  `device_serial_no` varchar(255) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `device_allocated` varchar(255) NOT NULL,
  `is_item_refundable` varchar(255) NOT NULL,
  `reg_user` varchar(255) NOT NULL,
  `Allocated_ipaddress` tinytext NOT NULL,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets_new_td`
--

LOCK TABLES `tbl_assets_new_td` WRITE;
/*!40000 ALTER TABLE `tbl_assets_new_td` DISABLE KEYS */;
INSERT INTO `tbl_assets_new_td` VALUES (1,'System','0','Eenadu','DS-1010','Dell','Dell -> 3040','intel@i3','zxcfderty','Windows-10','network monitoring','0','admin','172.17.12.107','2021-01-15','2021-01-16','mc'),(2,'Servers','','MC','DS-1010','Hp','Prolaint ML G6','intel@i3','zxcfderty','Ubuntu','network monitoring','0','admin','172.17.12.107','2021-01-09','2021-01-10','mc'),(3,'System','1','MC','64754747','Hp','Dell -> 3040','htr','ghd','Windows-10','gfjfj','1','hfm','172.17.15.172','2021-01-14','2021-01-12','ngfn'),(4,'Servers','','Eenadu','DS^123$$5','Dell','Dell -> 3040','intel@i3','zxcfderty','Windows-10','network monitoring','0','nag','172.17.12.107','2021-01-15','2021-01-16','mc'),(5,'System','0','Eenadu','DS^123$$5','HCL','Core2Duo','intel@i3','zxcfderty','Windows-10','network monitoring','0','nag','172.17.12.107','2021-01-07','2021-01-09','mc'),(6,'System','0','MC','DS^123$$5','HCL','Core2Duo','intel@i3','zxcfderty','Windows-10','network monitoring','1','admin','172.17.12.107','2021-01-02','2021-01-09','mc'),(7,'Servers','','EtvB','DS^123$e','Hp','Prolaint ML G5','intel@i3','zxcfderty','RHEL','network monitoring','0','admin','172.17.12.107','2021-01-07','2021-01-09','mc'),(8,'Servers','','EtvB','DS^123$$5','Dell','Dell -> 3020','intel@i3','zxcfderty','RHEL','network monitoring','0','admin','172.17.12.107','2021-01-02','2021-01-09','mc'),(9,'Servers','','colorama','DS-1010','Hp','Prolaint ML G5','intel@i3','zxcfderty','Ubuntu','network monitoring','0','admin','172.17.12','2021-01-12','2021-01-16','mc');
/*!40000 ALTER TABLE `tbl_assets_new_td` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_assets_td_new`
--

DROP TABLE IF EXISTS `tbl_assets_td_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assets_td_new` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(255) NOT NULL,
  `Applicable` varchar(255) NOT NULL,
  `Ast_belongs` varchar(255) NOT NULL,
  `Ast_dvc_code` varchar(255) NOT NULL,
  `make_type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `hardware_details` varchar(255) NOT NULL,
  `device_serial_no` varchar(255) NOT NULL,
  `OS` varchar(45) NOT NULL,
  `device_allocated` varchar(45) NOT NULL,
  `is_item_refundable` varchar(45) NOT NULL,
  `reg_user` varchar(45) NOT NULL,
  `Allocated_ipaddress` varchar(45) NOT NULL,
  `laptopwithacc` tinyint(10) DEFAULT NULL,
  `laptopoptions` varchar(255) DEFAULT NULL,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`Ast_dvc_code`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets_td_new`
--

LOCK TABLES `tbl_assets_td_new` WRITE;
/*!40000 ALTER TABLE `tbl_assets_td_new` DISABLE KEYS */;
INSERT INTO `tbl_assets_td_new` VALUES (1,'Monitors','','','','Hp','','','zxcfderty','','','1','','',0,'','1970-01-01','1970-01-01',''),(2,'Monitors','','','','Dell','','','fwfqegeghh','','','1','','',0,'','1970-01-01','1970-01-01',''),(3,'Monitors','','','','Dell','','','fwfqegeghh','','','1','','',0,'','1970-01-01','1970-01-01',''),(4,'System','0','Eenadu','DS-1010','Dell','Dell -> 3020','intel@i3','zxcfderty','Centos','testing','0','admin','172.17.12.107',0,'','2021-01-12','2021-01-16','mc'),(5,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'1','2021-01-02','2021-01-10','mc'),(6,'Servers','','MC','DS-1010','Hp','Prolaint ML G5','intel@i3','gewghrhrhrh','Centos','network monitoring','0','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(7,'laptop','','Eenadu','DS-1010','Dell','Dell -> 7070','intel@i3','zxcfderty','Windows-10','user','1','admin','172.17.12.107',1,'','2021-01-09','2021-01-10','mc'),(8,'Keyboards','','','','Hp','','','zxcfderty','','','','','',0,'','1970-01-01','1970-01-01',''),(9,'laptop','','','','','','','','','','','','',1,'','1970-01-01','1970-01-01',''),(10,'System','1','Eenadu','DS-1010','Dell','Dell -> 3020','intel@i3','gewghrhrhrh','Windows-10','user','1','admin','172.17.12.111',0,'','2021-01-07','2021-01-09','mc'),(11,'laptop','','Eenadu','DS-1010','Dell','Dell -> 3020','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-15','2021-01-16','mc'),(12,'laptop','','Eenadu','DS-1010','Dell','Dell -> 3020','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-15','2021-01-16','mc'),(13,'laptop','','Eenadu','DS-1010','Dell','Dell -> 3020','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-15','2021-01-16','mc'),(14,'laptop','','Eenadu','DS-1010','Dell','Dell -> 3020','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-15','2021-01-16','mc'),(15,'System','1','Eenadu','DS-1010','Dell','Dell -> 7070','intel@i3','zxcfderty','Windows-10','user','1','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(16,'laptop','','Eenadu','MC-201901','Dell','DDR2-2GB','intel@i3','zxcfderty','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-01','2021-01-09','mc'),(17,'Keyboards','','','','Hp','','','','','','','','',0,'','1970-01-01','1970-01-01',''),(18,'Keyboards','','','','Dell','','','','','','','','',0,'','1970-01-01','1970-01-01',''),(19,'Keyboards','','','','Dell','','','','','','','','',0,'','1970-01-01','1970-01-01',''),(20,'Keyboards','','','','','','','','','','','','',0,'','1970-01-01','1970-01-01',''),(21,'Keyboards','','','','','','','','','','','','',0,'','1970-01-01','1970-01-01',''),(22,'Keyboards','','','','','','','','','','','','',0,'','1970-01-01','1970-01-01',''),(23,'System','0','MC','DS-1010','Dell','Dell -> 7040','intel@i3','gewghrhrhrhv','Windows-7','network monitoring','0','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(24,'Servers','','MC','DS-101011','Hp','Prolaint ML G6','intel@i3','gewghrhrhrhv','Ubuntu','testing','0','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(25,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','zxcfderty','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(26,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrhv','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(27,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','fwfqegeghh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-12','2021-01-16','mc'),(28,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-02','2021-01-09','mc'),(29,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-02','2021-01-09','mc'),(30,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'','2021-01-02','2021-01-09','mc'),(31,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'1','2021-01-09','2021-01-16','mc'),(32,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'1','2021-01-09','2021-01-16','mc'),(33,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','gewghrhrhrh','Windows-10','user','0','admin','172.17.12.107',0,'1','2021-01-09','2021-01-16','mc'),(34,'laptop','','MC','MC-201901','Dell','dell latitude','intel@i3','zxcfderty','Windows-10','user','0','admin','172.17.12.107',0,'1','2021-01-15','2021-01-16','mc'),(35,'laptop','','Eenadu','MC-201901','Dell','dell latitude','intel@i3','zxcfderty','Windows-10','user','0','admin','172.17.12.107',0,'0','2021-01-01','2021-01-09','mc'),(36,'Servers','','Eenadu','DS-1010','Hp','Prolaint ML G6','intel@i3','zxcfderty','Centos','nap','0','admin','172.17.12.107',0,'','2021-01-07','2021-01-09','mc'),(37,'Servers','','Eenadu','DS-1010','Hp','Prolaint ML G6','intel@i3','zxcfderty','Centos','nap','0','admin','172.17.12.107',NULL,NULL,'2021-01-07','2021-01-09','mc'),(38,'','','','','','','','','','','','','',NULL,NULL,'1970-01-01','1970-01-01',''),(39,'System','1','Eenadu','DS-4956','HCL','Core2Duo','intel@i3','gewghrhrhrh','Windows-10','gopi','1','','172.17.12.107',NULL,NULL,'2021-01-12','2021-01-16','mc'),(40,'System','1','UKML','DS-4955','HCL','Core2Duo','intel@i3','gewghrhrhrh','Windows-7','gopi','1','','172.17.12.107',NULL,NULL,'2021-01-02','2021-01-09','mc'),(41,'System','1','UKML','DS-4955','HCL','Core2Duo','intel@i3','gewghrhrhrh','Windows-7','','1','','172.17.12.107',NULL,NULL,'2021-01-02','2021-01-09','mc'),(42,'System','1','UKML','DS-4955','HCL','Core2Duo','intel@i3','gewghrhrhrh','Windows-7','','1','','172.17.12.107',NULL,NULL,'2021-01-02','2021-01-09','mc'),(43,'System','1','UKML','DS-4955','HCL','Core2Duo','intel@i3','gewghrhrhrh','Windows-7','','1','','172.17.12.107',NULL,NULL,'2021-01-02','2021-01-09','mc');
/*!40000 ALTER TABLE `tbl_assets_td_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_common_fields`
--

DROP TABLE IF EXISTS `tbl_common_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_common_fields` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `category_master` varchar(255) NOT NULL,
  `subcat_belongs` varchar(255) NOT NULL,
  `maketype` varchar(255) NOT NULL,
  `model_maketype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_common_fields`
--

LOCK TABLES `tbl_common_fields` WRITE;
/*!40000 ALTER TABLE `tbl_common_fields` DISABLE KEYS */;
INSERT INTO `tbl_common_fields` VALUES (1,'Servers&Systems','Eenadu','Dell','Dell->7040');
/*!40000 ALTER TABLE `tbl_common_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_desktops`
--

DROP TABLE IF EXISTS `tbl_desktops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_desktops` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `make_type` varchar(255) NOT NULL,
  `is_item_refundable` tinyint(1) NOT NULL,
  `desktop_serial_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_desktops`
--

LOCK TABLES `tbl_desktops` WRITE;
/*!40000 ALTER TABLE `tbl_desktops` DISABLE KEYS */;
INSERT INTO `tbl_desktops` VALUES (5,'',0,''),(6,'',0,''),(7,'',0,''),(8,'',0,''),(9,'',0,''),(10,'',0,''),(11,'HCL',0,''),(12,'HCL',0,''),(13,'lenovo',0,''),(14,'',0,''),(15,'',0,''),(16,'',0,''),(17,'',0,''),(18,'',0,''),(19,'',0,''),(20,'',0,''),(21,'',0,''),(22,'',0,''),(23,'',0,'cxdfgtdvn'),(24,'Hp',0,'reswqi-cn-iiied'),(25,'Hp',0,'reswqi-cn-iiied'),(26,'Hp',0,'reswqi-cn-iiiedqq'),(27,'Hp',0,'reswqi-cn-iiiedqq'),(28,'Hp',0,'HPProdesk6400DT'),(29,'Hp',0,'HPProdesk6400DT'),(30,'Hp',0,'HPProdesk6400Dx'),(31,'Dell',0,'mkjliqwert'),(32,'HCL',1,'mrkjlaqwer'),(33,'Hp',0,'cfwfwf'),(34,'Dell',0,'fffeqfqefqf'),(35,'lenovo',0,'cfwfwf'),(36,'',0,'');
/*!40000 ALTER TABLE `tbl_desktops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_employee_users`
--

DROP TABLE IF EXISTS `tbl_employee_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_employee_users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(255) NOT NULL,
  `emp_username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_employee_users`
--

LOCK TABLES `tbl_employee_users` WRITE;
/*!40000 ALTER TABLE `tbl_employee_users` DISABLE KEYS */;
INSERT INTO `tbl_employee_users` VALUES (1,'9310158','RATNA SUHASINI YELAMANCHILI'),(2,'9310872','V NAGABHUSHANA SARMA SAMAVEDAM'),(3,'9312021','JAYA RAJU BASIPOGULA'),(4,'9312066','SUDHAKAR KANCHIBHOTLA'),(5,'9312357','BHAVANI LINGAMANENI'),(6,'9313241','RAGHU KODALI'),(7,'9313286','SUBBARAGHAVA RAO PAMIDIPATI'),(8,'9313760','JAGADEESH RAMINENI'),(9,'9315082','RAVI KIRAN PILLI'),(10,'9316318','NAISA PRASAD ANIPINDI'),(11,'9317220','PRASAD T'),(12,'9317380','V T H NAGESWARA RAO GRANDHI'),(13,'9318159','SURESH BABU MADUGULA'),(14,'9318985','CHINNA  NAGESWARA RAO KOMMINENI'),(15,'9319429','YADAGIRI PUNNA'),(16,'9319639','ADILAKSHMI KANCHUSTAMBHAM'),(17,'9319710','V RANGANADHAM CHAKRAVARTHULA'),(18,'9319950','CHALAPATHI RAO CHIRUVOLU'),(19,'9320145','BALA SIVA BRAHMAM KANURU'),(20,'9320596','MARAIAH PADASANABOINA'),(21,'9321446','LAKSHMI NARAYANA KANDUKURI'),(22,'9321821','GOPALA KRISHNA BOKKA'),(23,'9323077','SURESH KUMAR THANEERU'),(24,'9324171','SESHA GIRI GOGINENI'),(25,'9324557','MALLESH MADUPATHI'),(26,'9324879','RAVI KIRAN SOMARAJU'),(27,'9325245','SREE VALLI KOLLI'),(28,'9325262','DEEPTHI GOGINENI'),(29,'9325410','VEERA SURYA MANIKANTA YELUGUBANTI'),(30,'9325469','V SURYA PRAKASH KAKARAPALLI'),(31,'9325584','JYOTSHNA MADDALA'),(32,'9325620','KRISHNAGOPALA CHARY THUMOZU'),(33,'9325844','BHUMESWARI BOMMA'),(34,'9325861','KUMARA SWAMY BOGA'),(35,'9325889','KUMARA SWAMY KARNE'),(36,'9325892','GAYATHRI MANDADI'),(37,'9325911','MANOHAR GANUPURU'),(38,'9325925','NAGESWARA RAO NELLURI'),(39,'9326207','VIJAY KUMAR SEEMAKURTHY'),(40,'9326224','RANA PRATHAP KOTAGIRI'),(41,'9326241','RAJESH KUMAR BOPPA'),(42,'9326336','VENKATESH PULAGAM'),(43,'9326340','SRAVANTHI ANKATHI'),(44,'9326353','SRIHARSHA KONERU'),(45,'9326370','AKHILA THUPPARI'),(46,'9326529','SHABABU SHAIK CHAPALA'),(47,'9326532','LAHARI KOLLI'),(48,'9326546','SAI LAKSHMI KAJA'),(49,'9326563','DILIP KUMAR ELISETTY'),(50,'9326658','MADHAVI MARRI'),(51,'9326661','MADHU VANGOORI'),(52,'9326725','JANARDHAN RAO BUDUMURU'),(53,'9326739','CHANDANA GIDUGU'),(54,'9326756','BHAVYA VANKAYALAPATI'),(55,'9326760','HEMANTH HARIBABU'),(56,'9326773','MANASA VULISA'),(57,'9326885','SIVA SUBRAMANYAM KARANAM CHARAN');
/*!40000 ALTER TABLE `tbl_employee_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_new_desktops`
--

DROP TABLE IF EXISTS `tbl_new_desktops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_new_desktops` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(2555) NOT NULL,
  `make_type` varchar(255) NOT NULL,
  `is_item_refundable` tinyint(1) NOT NULL,
  `desktop_serial_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_new_desktops`
--

LOCK TABLES `tbl_new_desktops` WRITE;
/*!40000 ALTER TABLE `tbl_new_desktops` DISABLE KEYS */;
INSERT INTO `tbl_new_desktops` VALUES (1,'Desktops','Hp',0,'HPProdesk6400DT'),(2,'Desktops','Hp',0,'HPProdesk640DFG'),(3,'Desktops','Hp',0,'HPProdesk600DT');
/*!40000 ALTER TABLE `tbl_new_desktops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_search`
--

DROP TABLE IF EXISTS `tbl_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_search` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_dvc_code` varchar(255) DEFAULT NULL,
  `Ast_belongs` varchar(255) DEFAULT NULL,
  `Ast_category` varchar(255) DEFAULT NULL,
  `cat_vendor_type` varchar(255) DEFAULT NULL,
  `cat_vendor_model` varchar(255) DEFAULT NULL,
  `Ast_reg_user` varchar(255) DEFAULT NULL,
  `Ast_dvc_recv` date NOT NULL,
  `Ast_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_search`
--

LOCK TABLES `tbl_search` WRITE;
/*!40000 ALTER TABLE `tbl_search` DISABLE KEYS */;
INSERT INTO `tbl_search` VALUES (1,'DS-1768','Eenadu','UserSysconfig','dell','dell-3040','Etesting','2019-12-11','MC'),(2,'DS-1234','Eenadu','UserSysconfig','dell','dell-7040','Etesting','2019-12-11','MC'),(3,'DS-88856','Eenadu','UserSysconfig','dell','dell-3020','Etesting','2019-12-11','MC');
/*!40000 ALTER TABLE `tbl_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_search_new`
--

DROP TABLE IF EXISTS `tbl_search_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_search_new` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(255) DEFAULT NULL,
  `Ast_belongs` varchar(255) DEFAULT NULL,
  `Ast_dvc_code` varchar(255) DEFAULT NULL,
  `make_type` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `hardware_details` varchar(255) DEFAULT NULL,
  `device_serial_no` varchar(255) DEFAULT NULL,
  `OS` varchar(255) DEFAULT NULL,
  `device_allocated` varchar(255) DEFAULT NULL,
  `is_item_refundable` tinyint(1) DEFAULT NULL,
  `reg_user` varchar(255) DEFAULT NULL,
  `Allocated_ipaddress` tinytext DEFAULT NULL,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_search_new`
--

LOCK TABLES `tbl_search_new` WRITE;
/*!40000 ALTER TABLE `tbl_search_new` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_search_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (101,'admin','admin1'),(103,'gopi','zxcvf'),(104,'mick','mick12'),(109,'micke','micke12');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users1`
--

DROP TABLE IF EXISTS `users1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employeeID` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users1`
--

LOCK TABLES `users1` WRITE;
/*!40000 ALTER TABLE `users1` DISABLE KEYS */;
/*!40000 ALTER TABLE `users1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usersync_tbl`
--

DROP TABLE IF EXISTS `usersync_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usersync_tbl` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `employee_user_id` varchar(255) NOT NULL,
  `Asset_category` varchar(45) NOT NULL,
  `Asset_belongs` varchar(45) NOT NULL,
  `Asset_device_code` varchar(45) NOT NULL,
  `make` varchar(45) NOT NULL,
  `model_type` varchar(45) NOT NULL,
  `Assigned_ipaddress` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`Asset_device_code`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersync_tbl`
--

LOCK TABLES `usersync_tbl` WRITE;
/*!40000 ALTER TABLE `usersync_tbl` DISABLE KEYS */;
INSERT INTO `usersync_tbl` VALUES (1,'9321821','System','Eenadu','DS-4956','Dell','Dell -> 3040','172.17.12.107'),(2,'9321821','System','UKML','DS-1010','Dell','Dell -> 7040','172.17.12.107'),(3,'9321821','System','Eenadu','DS-1010','Hp','Dell -> 3040','172.17.12.107'),(4,'9321821','System','Eenadu','DS-1010','Hp','Dell -> 3040','172.17.12.107'),(5,'9326661','System','MC','22145425','Dell','Dell -> 7040','172.17.12.111'),(6,'9326661','System','MC','22145425','Dell','Dell -> 7040','172.17.12.111'),(7,'9321821','System','Eenadu','DS-1010','Hp','Dell -> 3040','172.17.12.107');
/*!40000 ALTER TABLE `usersync_tbl` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-22 20:36:58
