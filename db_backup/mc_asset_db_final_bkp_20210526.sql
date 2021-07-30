-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: mc_asset
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
-- Table structure for table `tbl_application_server_master`
--

DROP TABLE IF EXISTS `tbl_application_server_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_application_server_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appli_server` varchar(45) NOT NULL,
  `appli_praticular_server` varchar(45) DEFAULT NULL,
  `appli_server_name` varchar(45) NOT NULL,
  `appli_server_serialno` varchar(255) NOT NULL,
  `appli_server_ipaddress` varchar(45) NOT NULL,
  `appli_server_sec_ipaddress` varchar(155) NOT NULL,
  `appli_server_project_main_db` varchar(255) NOT NULL,
  `appli_project_handledby` varchar(255) NOT NULL,
  `Remarks` varchar(45) NOT NULL,
  `server_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_application_server_master`
--

LOCK TABLES `tbl_application_server_master` WRITE;
/*!40000 ALTER TABLE `tbl_application_server_master` DISABLE KEYS */;
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
  `Applicable` varchar(65) DEFAULT NULL,
  `device_allocated` varchar(255) NOT NULL,
  `Ast_belongs` varchar(45) NOT NULL,
  `Ast_dvc_code` varchar(45) NOT NULL,
  `hardware_details` varchar(255) NOT NULL,
  `device_serial_no` varchar(255) NOT NULL,
  `OS` varchar(45) NOT NULL,
  `is_item_refundable` varchar(45) NOT NULL,
  `Allocated_ipaddress` varchar(255) DEFAULT NULL,
  `laptopwithacc` varchar(45) DEFAULT NULL,
  `laptopoptions` varchar(45) DEFAULT NULL,
  `dvc_recv` varchar(45) NOT NULL,
  `dvc_put_to_user` varchar(45) NOT NULL,
  `Ast_location` varchar(45) NOT NULL,
  `ast_current_status` varchar(45) NOT NULL,
  PRIMARY KEY (`asset_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asset_details`
--

LOCK TABLES `tbl_asset_details` WRITE;
/*!40000 ALTER TABLE `tbl_asset_details` DISABLE KEYS */;
INSERT INTO `tbl_asset_details` VALUES (1,'System','Userpc','9326885','Eenadu','DS-5054','ProDesk 6200 G4 MT','INA846TNHY','Windows-10','yes','172.17.12.128',NULL,NULL,'2021-05-18','2021-05-18','mc','Deployed'),(2,'System','Server','toll free server','Eenadu','DS-1099','Dell->7070','1Z1P9W2','Centos','no','172.17.15.212',NULL,NULL,'2021-05-18','2021-05-18','3RD floor server room','Deployed'),(3,'System','Server','tds','Eenadu','DS-9999','Dell->7040','FG0QXH2','RHEL','no','172.17.23.251',NULL,NULL,'2021-05-18','2021-05-18','mc','Pending'),(4,'','','','','','','','','','',NULL,NULL,'1970-01-01','1970-01-01','',''),(5,'','','','','','','','','','',NULL,NULL,'1970-01-01','1970-01-01','','');
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
  `ast_monitoring_particular_server` varchar(45) DEFAULT NULL,
  `ast_monitoring_name` varchar(255) DEFAULT NULL,
  `ast_monitoring_type` varchar(255) DEFAULT NULL,
  `ast_monitoring_hw_model` varchar(45) DEFAULT NULL,
  `ast_monitoring_ipaddress` varchar(255) NOT NULL,
  `ast_monitoring_serialnum` varchar(255) NOT NULL,
  `ast_monitoring_hw_issue` varchar(45) NOT NULL,
  `ast_monitoring_sw_issue` varchar(45) NOT NULL,
  `ast_monitoring_change_purpose` varchar(255) NOT NULL,
  `ast_monitoring_backup_server_in` varchar(255) NOT NULL,
  `ast_monitoring_changed_date` date DEFAULT NULL,
  `ast_monitoring_location` varchar(45) NOT NULL,
  `ast_monitoring_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ast_mointoring_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asset_monitoring`
--

LOCK TABLES `tbl_asset_monitoring` WRITE;
/*!40000 ALTER TABLE `tbl_asset_monitoring` DISABLE KEYS */;
INSERT INTO `tbl_asset_monitoring` VALUES (1,'Pendrive','','admin','Regular Mointoring','Ultra Dual','','qpsk02cvfgt','no','0','databackup','','2021-06-18','mc','Pending');
/*!40000 ALTER TABLE `tbl_asset_monitoring` ENABLE KEYS */;
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
-- Table structure for table `tbl_hardwaredetails_master_new`
--

DROP TABLE IF EXISTS `tbl_hardwaredetails_master_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_hardwaredetails_master_new` (
  `hw_id` int(11) NOT NULL AUTO_INCREMENT,
  `hw_category_type` varchar(45) NOT NULL,
  `server_type` varchar(45) NOT NULL,
  `hw_manufacture` varchar(45) NOT NULL,
  `hw_model` varchar(45) NOT NULL,
  `hw_processor` varchar(255) DEFAULT NULL,
  `hw_ram` varchar(45) NOT NULL,
  `hw_Hdd` varchar(45) NOT NULL,
  `hw_serial_number` varchar(255) DEFAULT NULL,
  `hw_status` varchar(45) NOT NULL,
  `hw_date_of_recv` date DEFAULT NULL,
  PRIMARY KEY (`hw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_hardwaredetails_master_new`
--

LOCK TABLES `tbl_hardwaredetails_master_new` WRITE;
/*!40000 ALTER TABLE `tbl_hardwaredetails_master_new` DISABLE KEYS */;
INSERT INTO `tbl_hardwaredetails_master_new` VALUES (1,'System','','Hp','ProDesk 6200 G4 MT','Intel®core(TM)I5-8500','8GB','1TB','INA846TNHY','Deployed',NULL),(2,'System','','Dell','Dell->7040','Intel®core(TM)I5-6600','4GB','500GB','FG0QXH2','Deployed',NULL),(3,'System','','Dell','Dell->7070','Intel®core(TM) i5-9500 CPU @ 3.00GHz','8GB','1TB','1Z1P9W2','Deployed',NULL),(4,'System','','Dell','Dell->7040','Intel®core(TM)I5-6600','8GB','1TB','FZ0MKL2','Pending',NULL),(5,'Pendrive','','Hp','Ultra Dual','','','32GB','qpsk02cvfgt','Pending',NULL);
/*!40000 ALTER TABLE `tbl_hardwaredetails_master_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_software_ast_master`
--

DROP TABLE IF EXISTS `tbl_software_ast_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_software_ast_master` (
  `sw_id` int(30) NOT NULL AUTO_INCREMENT,
  `sw_ast_category` varchar(45) NOT NULL,
  `sw_ast_licensr_name` varchar(255) NOT NULL,
  `sw_ast_license_key` varchar(255) NOT NULL,
  `sw_ast_license_validity` varchar(45) NOT NULL,
  `sw_ast_status` varchar(45) NOT NULL,
  `sw_ast_description` varchar(255) NOT NULL,
  PRIMARY KEY (`sw_id`),
  UNIQUE KEY `sw_id_UNIQUE` (`sw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_software_ast_master`
--

LOCK TABLES `tbl_software_ast_master` WRITE;
/*!40000 ALTER TABLE `tbl_software_ast_master` DISABLE KEYS */;
INSERT INTO `tbl_software_ast_master` VALUES (1,'Office Suite','OpenOffice','QPCFW-JI9YF-CB07D--88K69-CTTG9','lifelong validity','Successful','');
/*!40000 ALTER TABLE `tbl_software_ast_master` ENABLE KEYS */;
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
-- Table structure for table `tbl_user_login_details`
--

DROP TABLE IF EXISTS `tbl_user_login_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user_login_details` (
  `asset_user_id` int(20) NOT NULL AUTO_INCREMENT,
  `asset_user_empid` varchar(100) NOT NULL,
  `asset_emp_username` varchar(255) NOT NULL,
  `asset_user_passwd` varchar(255) NOT NULL,
  PRIMARY KEY (`asset_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user_login_details`
--

LOCK TABLES `tbl_user_login_details` WRITE;
/*!40000 ALTER TABLE `tbl_user_login_details` DISABLE KEYS */;
INSERT INTO `tbl_user_login_details` VALUES (1,'9321821','Gopi','f1c9718f6976122e5899f62093697d2e'),(2,'9326885','Subramanyam','38ac060ee3b22f95fcfa17f031ae5aa7');
/*!40000 ALTER TABLE `tbl_user_login_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-25 12:21:52
