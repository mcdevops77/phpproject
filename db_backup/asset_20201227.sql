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
  `Ast_reg_user_ipaddress` text,
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
  `Allocated_ipaddress` tinytext,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets_new`
--

LOCK TABLES `tbl_assets_new` WRITE;
/*!40000 ALTER TABLE `tbl_assets_new` DISABLE KEYS */;
INSERT INTO `tbl_assets_new` VALUES (2,'Eenadu','System','DS-10556','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe','Windows-10','user',1,'siva','172.17.12.107','2020-12-24','2020-12-24','RFC'),(3,'Eenadu','System','DS-10556','lenovo','Core2Duo','i5-5th Gen','zxcdwqe','Centos','user',1,'siva','172.17.12.107','2020-12-24','2020-12-24','RFC'),(4,'MC','Servers','DS-10558','Dell','Dell -> 7070','i5-5th Gen','zxcdwqe','RHEL','user',0,'siva','172.17.12.107','2020-12-24','2020-12-24','RFC'),(7,'Eenadu','System','DS-10556','lenovo','Core2Duo','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12.107','2020-12-24','2020-12-24','RFC'),(8,'Eenadu','System','DS-10556','Dell','Dell -> 3040','i5-5th Gen','zxcdwqe','Windows-10','user',0,'siva','172.17.12..107','2020-12-24','2020-12-24','RFC'),(9,'Eenadu','System','DS-10556','Hp','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..107','2020-12-24','2020-12-24','RFC'),(10,'Eenadu','System','DS-10556','Hp','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..107','2020-12-24','2020-12-24','RFC'),(11,'Eenadu','System','DS-10556','Hp','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..07','2020-12-24','2020-12-24','RFC'),(12,'Eenadu','','DS-10556','Hp','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..07','2020-12-24','2020-12-24','RFC'),(13,'Eenadu','','DS-10556','Hp','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..07','2020-12-24','2020-12-24','RFC'),(14,'Eenadu','System','DS-10556','Dell','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..07','2020-12-24','2020-12-24','RFC'),(15,'Eenadu','System','DS-10556','Dell','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','user',0,'siva','172.17.12..07','2020-12-24','2020-12-24',''),(16,'Eenadu','System','DS-10556','Dell','Dell -> 7040','i5-5th Gen','zxcdwqe','Windows-7','',0,'siva','172.17.12..07','2020-12-24','2020-12-24',''),(17,'','','','','','','','','',0,'','','0000-00-00','0000-00-00',''),(18,'','','','','','','','','',0,'','','0000-00-00','0000-00-00',''),(19,'','','','','','','','','',0,'','','0000-00-00','0000-00-00','');
/*!40000 ALTER TABLE `tbl_assets_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_desktops`
--

DROP TABLE IF EXISTS `tbl_desktops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_desktops` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Category` varchar(255) DEFAULT NULL,
  `make_type` varchar(255) DEFAULT NULL,
  `is_item_refundable` tinyint(1) DEFAULT NULL,
  `desktop_serial_no` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_desktops`
--

LOCK TABLES `tbl_desktops` WRITE;
/*!40000 ALTER TABLE `tbl_desktops` DISABLE KEYS */;
INSERT INTO `tbl_desktops` VALUES (1,'','',0,''),(2,'','',0,''),(3,'','',0,''),(4,'','',0,''),(5,'','',0,''),(6,'','',0,''),(7,'','',0,''),(8,'','',0,''),(9,'','',0,''),(10,'','',0,''),(11,'Desktops','HCL',0,''),(12,'Desktops','HCL',0,''),(13,'Desktops','lenovo',0,''),(14,'','',0,''),(15,'','',0,''),(16,'','',0,''),(17,'','',0,''),(18,'','',0,''),(19,'Desktops','',0,''),(20,'Desktops','',0,''),(21,'Desktops','',0,''),(22,'Desktops','',0,''),(23,'Desktops','',0,'cxdfgtdvn');
/*!40000 ALTER TABLE `tbl_desktops` ENABLE KEYS */;
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
  `Allocated_ipaddress` tinytext,
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-27 23:25:43
