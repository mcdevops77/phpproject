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
  `appli_server_sec_ipaddress` varchar(155) NOT NULL,
  `appli_server_project_main_db` varchar(255) NOT NULL,
  `appli_project_handledby` varchar(255) NOT NULL,
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
INSERT INTO `tbl_application_server_master` VALUES (1,'localserver','etvbnap','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','122.15.10.200','','etvbnap,etvbharatfa,etvbharatstores,fa,etvbharat_test','madhu,raghava,naisaprasad','ntg','on'),(2,'localserver','stores','Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz','172.17.15.106','','eenadustores, storesfa','lakshminarayana','ntg','on');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asset_details`
--

LOCK TABLES `tbl_asset_details` WRITE;
/*!40000 ALTER TABLE `tbl_asset_details` DISABLE KEYS */;
INSERT INTO `tbl_asset_details` VALUES (1,'Servers','','nap-etvb','EtvB','','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','41XDHY2','Centos','0','122.15.10.200',NULL,NULL,'2019-08-20','2019-08-30','etvbharat'),(2,'Servers','','stores','Eenadu','DS-3860','Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz','asdfgzxcvf','Centos','0','172.17.15.106',NULL,NULL,'2019-09-10','2019-09-17','rfc'),(3,'System','1','9319429','Eenadu','DS-3860','IntelÂ®core I5','zxcvfbng','Windows-10','1','172.17.12.123',NULL,NULL,'2020-06-01','2020-06-10','mc');
/*!40000 ALTER TABLE `tbl_asset_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_asset_monitoring`
--

DROP TABLE IF EXISTS `tbl_asset_monitoring`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_asset_monitoring` (
  `ast_mointoring_id` int(11) NOT NULL AUTO_INCREMENT,
  `ast_monitoring_category` varchar(45) NOT NULL,
  `ast_monitoring_significante` varchar(45) NOT NULL,
  `ast_monitoring_hwdetails` varchar(255) DEFAULT NULL,
  `ast_monitoring_type` varchar(255) DEFAULT NULL,
  `ast_monitoring_ipaddress` varchar(255) NOT NULL,
  `ast_monitoring_hw_issue` varchar(45) NOT NULL,
  `ast_monitoring_sw_issue` varchar(45) NOT NULL,
  `ast_monitoring_change_purpose` varchar(255) NOT NULL,
  `ast_monitoring_changed_date` datetime(6) DEFAULT NULL,
  `ast_monitoring_location` varchar(45) NOT NULL,
  `ast_monitoring_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ast_mointoring_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asset_monitoring`
--

LOCK TABLES `tbl_asset_monitoring` WRITE;
/*!40000 ALTER TABLE `tbl_asset_monitoring` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_asset_monitoring` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_assets_new_old`
--

DROP TABLE IF EXISTS `tbl_assets_new_old`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_assets_new_old` (
  `master_id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(255) NOT NULL,
  `Ast_belongs` varchar(255) NOT NULL,
  `Ast_dvc_code` varchar(255) NOT NULL,
  `make_type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `hardware_details` varchar(255) NOT NULL,
  `device_serial_no` varchar(255) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `device_allocated` varchar(255) NOT NULL,
  `is_item_refundable` tinyint(1) NOT NULL,
  `Allocated_ipaddress` varchar(50) NOT NULL,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(10) NOT NULL,
  PRIMARY KEY (`master_id`),
  UNIQUE KEY `id_UNIQUE` (`master_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_assets_new_old`
--

LOCK TABLES `tbl_assets_new_old` WRITE;
/*!40000 ALTER TABLE `tbl_assets_new_old` DISABLE KEYS */;
INSERT INTO `tbl_assets_new_old` VALUES (2,'System','MC','DS-10556','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe','Windows-10','user',1,'172.17.12.107,192.168.22.212','2020-12-24','2020-12-24','RFC'),(3,'System','Eenadu','DS-10556','lenovo','Core2Duo','i5-5th Gen','zxcdwqe','Centos','user',1,'172.17.12.107','2020-12-24','2020-12-24','RFC'),(4,'Servers','MC','DS-10558','Dell','Dell -> 7070','i5-5th Gen','zxcdwqe','RHEL','user',0,'172.17.12.107','2020-12-24','2020-12-24','RFC'),(22,'Servers','Eenadu','DS-1020','Hp','Core2Duo','intel@i7','asdfg22','centos','usr',0,'172.17.12.10','2020-12-05','2020-12-12','mc'),(23,'System','Eenadu','DS-3867','Dell','Dell -> 7040','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcvfdsa','Windows-10','devp',0,'172.17.12.128','2020-12-25','2020-12-18','mc'),(24,'System','Eenadu','DS-3867','Dell','Dell -> 7040','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcvfdsa','Windows-10','devp',0,'172.17.12.128','2020-12-25','2020-12-18','mc'),(25,'Servers','Eenadu','DS-10200','Hp','Core2Duo','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcqwert','Fedora','Nap',0,'172.17.20.124','2020-12-21','2020-12-29','mc'),(26,'Servers','Eenadu','DS-10200','Hp','Core2Duo','Intel(R)Core(TM)i5@3.30GHz,4GB,500GB','zxcqwert','Fedora','Nap',0,'172.17.20.124','2020-12-21','2020-12-29','mc'),(27,'Servers','MC','DS-10208','HCL','Core2Duo','intel@i3','zxcqwert','Windows-7','sync',0,'172.17.12.123','2020-12-19','2020-12-05','mc'),(28,'System','MC','DS-1245','HCL','Core2Duo','intel@i3,8GB,500GB','qedfgbn-cjklio-mnhy6','Fedora','network',0,'172.17.12.1','2021-01-02','2021-01-07','Mc'),(29,'System','MC','DS-1245','HCL','Core2Duo','intel@i3,8GB,500GB','qedfgbn-cjklio-mnhy6','Fedora','network',0,'172.17.12.1','2021-01-02','2021-01-07','Mc'),(30,'System','Eenadu','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devp',0,'172.17.12.133','2021-01-09','2021-01-16','rfc'),(31,'System','Eenadu','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'172.17.12.133','2021-01-09','2021-01-16','rfc'),(32,'System','Eenadu','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'172.17.12.133','2021-01-09','2021-01-16','rfc'),(33,'System','Eenadu','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'172.17.12.133','2021-01-09','2021-01-16','rfc'),(34,'System','Eenadu','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'172.17.12.133','2021-01-09','2021-01-16','rfc'),(35,'System','Eenadu','DS-124599','Dell','Dell -> 7040','intel@i3,8GB,500GB','cn-aaafe33-iiop','Windows-7','devplor',0,'172.17.12.133','2021-01-09','2021-01-16','rfc'),(36,'System','MC','DS-1056','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe112','Windows-10','network',0,'172.17.12.128','2020-12-24','2020-12-24','RFC'),(37,'System','MC','DS-1056','Dell','Dell -> 3020','i5-5th Gen','zxcdwqe112','Windows-10','network',0,'172.17.12.128','2020-12-24','2020-12-24','RFC'),(39,'Servers','Eenadu','DS-10567','Hp','Prolaint ML G5','i5-5th Gen','zxcdwqe112','Windows-10','network',0,'172.17.12.128','2020-12-24','2020-12-24','RFC'),(40,'Servers','UKML','DS-3098','Hp','Core2Duo','intel@i3,8GB,500GB','cn-aaafe33-iiop','Ubuntu','Soc test',0,'172.17.12.133','2021-01-16','2021-01-23','rfc'),(41,'System','Eenadu','DS-7070','Dell','Dell -> 7070','intel@i5, 8GB Ram, 1TB HDD','eertyuiop','Centos','maya live',0,'172.17.12.103','2021-02-01','2021-02-06','mc');
/*!40000 ALTER TABLE `tbl_assets_new_old` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_desktops`
--

LOCK TABLES `tbl_desktops` WRITE;
/*!40000 ALTER TABLE `tbl_desktops` DISABLE KEYS */;
INSERT INTO `tbl_desktops` VALUES (5,'','',0,''),(6,'','',0,''),(7,'','',0,''),(8,'','',0,''),(9,'','',0,''),(10,'','',0,''),(11,'Desktops','HCL',0,''),(12,'Desktops','HCL',0,''),(13,'Desktops','lenovo',0,''),(14,'','',0,''),(15,'','',0,''),(16,'','',0,''),(17,'','',0,''),(18,'','',0,''),(19,'Desktops','',0,''),(20,'Desktops','',0,''),(21,'Desktops','',0,''),(22,'Desktops','',0,''),(23,'Desktops','',0,'cxdfgtdvn'),(24,'Desktops','Hp',0,'reswqi-cn-iiied'),(25,'Desktops','Hp',0,'reswqi-cn-iiied'),(26,'Desktops','Hp',0,'reswqi-cn-iiiedqq'),(27,'Desktops','Hp',0,'reswqi-cn-iiiedqq'),(28,'Desktops','Hp',0,'HPProdesk6400DT'),(29,'Desktops','Hp',0,'HPProdesk6400DT'),(30,'Desktops','Hp',0,'HPProdesk6400Dx'),(31,'Desktops','Dell',0,'mkjliqwert'),(32,'Desktops','HCL',1,'mrkjlaqwer');
/*!40000 ALTER TABLE `tbl_desktops` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_hardwaredetails_master`
--

LOCK TABLES `tbl_hardwaredetails_master` WRITE;
/*!40000 ALTER TABLE `tbl_hardwaredetails_master` DISABLE KEYS */;
INSERT INTO `tbl_hardwaredetails_master` VALUES (1,'Dell','PowerEdge R540','Intel(R)Xeon(R)Silver 4114 CPU @ 2.20GHz','16GB','3TB','Server'),(2,'Hp','ProLiant DL380 Gen9','Intel(R)Xeon(R)CPU E5-2620 v3 @ 2.40GHz','16GB','2TB','Server'),(3,'Hp','ProDesk 6200 G4 MT','IntelÂ®core I5','8GB','1TB','System'),(4,'Dell','Dell->7040','IntelÂ®core I5','4GB','500GB','System');
/*!40000 ALTER TABLE `tbl_hardwaredetails_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_master_hardwaredetails_backup`
--

DROP TABLE IF EXISTS `tbl_master_hardwaredetails_backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_master_hardwaredetails_backup` (
  `hw_id` int(11) NOT NULL AUTO_INCREMENT,
  `hw_make` varchar(45) NOT NULL,
  `hw_model` varchar(45) NOT NULL,
  `hw_processor` varchar(45) NOT NULL,
  `hw_ram` varchar(45) NOT NULL,
  `hw_Hdd` varchar(45) NOT NULL,
  `hw_type` varchar(45) NOT NULL,
  PRIMARY KEY (`hw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_master_hardwaredetails_backup`
--

LOCK TABLES `tbl_master_hardwaredetails_backup` WRITE;
/*!40000 ALTER TABLE `tbl_master_hardwaredetails_backup` DISABLE KEYS */;
INSERT INTO `tbl_master_hardwaredetails_backup` VALUES (1,'Dell','Dell 7040','intel@corei5','4GB','500GB',''),(2,'Dell','Dell 7040','intel@corei5','8gb','1tb','system'),(3,'hp','ProLiant DL380 G6','intel@corei5','16gb','1tb','server');
/*!40000 ALTER TABLE `tbl_master_hardwaredetails_backup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_new_asset_oldtable`
--

DROP TABLE IF EXISTS `tbl_new_asset_oldtable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_new_asset_oldtable` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `Ast_category` varchar(45) NOT NULL,
  `Applicable` varchar(45) NOT NULL,
  `Ast_belongs` varchar(45) NOT NULL,
  `Ast_dvc_code` varchar(255) NOT NULL,
  `make_type` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `hardware_details` varchar(255) NOT NULL,
  `device_serial_no` varchar(255) NOT NULL,
  `OS` varchar(45) NOT NULL,
  `device_allocated` varchar(45) NOT NULL,
  `is_item_refundable` varchar(45) NOT NULL,
  `Allocated_ipaddress` varchar(45) NOT NULL,
  `laptopwithacc` tinyint(10) DEFAULT NULL,
  `laptopoptions` varchar(255) DEFAULT NULL,
  `dvc_recv` date NOT NULL,
  `dvc_put_to_user` date NOT NULL,
  `Ast_location` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_new_asset_oldtable`
--

LOCK TABLES `tbl_new_asset_oldtable` WRITE;
/*!40000 ALTER TABLE `tbl_new_asset_oldtable` DISABLE KEYS */;
INSERT INTO `tbl_new_asset_oldtable` VALUES (1,'Servers','','Eenadu','DS-3860','Hp','Prolaint ML G6','intel@i5, 8GB Ram, 1TB HDD','qwertyasdf','Centos','call center live ','0','172.17.12.103',NULL,NULL,'2021-02-04','2021-02-06','rfc'),(2,'System','1','Eenadu','DS-4911','Dell','Dell -> 3020','intel@i5, 8GB Ram, 1TB HDD','qwertgfds','Windows-10','gopi','1','172.17.12.127',NULL,NULL,'2021-01-28','2021-02-02','mc');
/*!40000 ALTER TABLE `tbl_new_asset_oldtable` ENABLE KEYS */;
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
-- Table structure for table `tbl_test_ipaddress`
--

DROP TABLE IF EXISTS `tbl_test_ipaddress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_test_ipaddress` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `tbl_ref` varchar(255) NOT NULL,
  `tbl_agent` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `tracking_page_code` varchar(145) DEFAULT NULL,
  `tracking_page_name` varchar(145) DEFAULT NULL,
  `dt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_test_ipaddress`
--

LOCK TABLES `tbl_test_ipaddress` WRITE;
/*!40000 ALTER TABLE `tbl_test_ipaddress` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_test_ipaddress` ENABLE KEYS */;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_user_id` varchar(45) NOT NULL,
  `Asset_category` varchar(45) NOT NULL,
  `Asset_belongs` varchar(45) NOT NULL,
  `Asset_device_code` varchar(255) NOT NULL,
  `make` varchar(45) NOT NULL,
  `model_type` varchar(45) NOT NULL,
  `Assigned_ipaddress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersync_tbl`
--

LOCK TABLES `usersync_tbl` WRITE;
/*!40000 ALTER TABLE `usersync_tbl` DISABLE KEYS */;
INSERT INTO `usersync_tbl` VALUES (1,'9321821','System','Eenadu','DS-4911','Dell','Dell->3020','172.17.12.127'),(2,'9321446','','0','','','','');
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

-- Dump completed on 2021-03-13 16:32:03
