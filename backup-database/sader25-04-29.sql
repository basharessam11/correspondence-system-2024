-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: sader
-- ------------------------------------------------------
-- Server version 	10.4.28-MariaDB
-- Date: Tue, 29 Apr 2025 21:11:31 +0300

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `backup_db`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backup_db` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backup_db`
--

LOCK TABLES `backup_db` WRITE;
/*!40000 ALTER TABLE `backup_db` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `backup_db` VALUES (4,'myphp-backup-sader-20240609_023418.sql'),(5,'myphp-backup-sader-20240609_025536.sql'),(6,'myphp-backup-sader-20240609_025655.sql'),(7,'myphp-backup-sader-20240609_025840.sql'),(8,'myphp-backup-sader-20240609_025840.sql'),(9,'myphp-backup-sader-20240609_025847.sql'),(10,'myphp-backup-sader-20240609_025903.sql');
/*!40000 ALTER TABLE `backup_db` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `backup_db` with 7 row(s)
--

--
-- Table structure for table `company`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `address_en` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `company` VALUES (1,'مؤسسة الرعاية المتكاملة لذوي الإعاقة ‐ فرع غرناطة','Integrated Care Foundation for People with Disabilities - Granada Branch','Granada, Block 1, 100th Street, next to Al-Jahra Bridge','01064696894','01064696894','icankuwait@info.com','http://localhost/sader/','غرناطة ق1شارع 100 بجوار جسر الجهراء',1,'2024-06-02 17:41:05','file2591716980923.JPG'),(6,'ahmed','sdfghj1111','sdfgdhfhj111111','633 307 05','01064696894','test@test.com','http://localhost/sader/','egypt',1,'2024-06-19 11:57:46','file5321716982727.png');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `company` with 2 row(s)
--

--
-- Table structure for table `confidentiality`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confidentiality` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confidentiality`
--

LOCK TABLES `confidentiality` WRITE;
/*!40000 ALTER TABLE `confidentiality` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `confidentiality` VALUES (1,'سري','aa');
/*!40000 ALTER TABLE `confidentiality` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `confidentiality` with 1 row(s)
--

--
-- Table structure for table `dialect`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dialect` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dialect`
--

LOCK TABLES `dialect` WRITE;
/*!40000 ALTER TABLE `dialect` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `dialect` VALUES (2,'aa','aa');
/*!40000 ALTER TABLE `dialect` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `dialect` with 1 row(s)
--

--
-- Table structure for table `file`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `outgoing_id` int(1) NOT NULL DEFAULT 0,
  `incoming_id` int(1) NOT NULL DEFAULT 0,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`outgoing_id`)
) ENGINE=InnoDB AUTO_INCREMENT=464 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `file` VALUES (250,8228,0,'file3761716134193.jpg'),(251,6316,0,'file4731716136236.jpg'),(252,6316,0,'file5301716136236.jpg'),(253,6316,0,'file2021716136236.jpg'),(254,6317,0,'file4651716136310.jpg'),(255,6317,0,'file8961716136310.jpg'),(256,6317,0,'file4111716136310.jpg'),(257,8247,0,'file7931716298127.png'),(262,8249,0,'file3811716318162.png'),(263,8249,0,'file7951716318162.png'),(264,8249,0,'file6031716318162.png'),(265,8249,0,'file4001716318162.png'),(266,8249,0,'file9491716318162.png'),(267,8249,0,'file11716318162.png'),(278,8251,0,'file1861716900717.pdf'),(279,8251,0,'file4001716900717.pdf'),(282,8255,0,'file1461716976703.jpeg'),(286,0,8255,'file9641716980800.jpg'),(287,0,8255,'file9381716980800.jpg'),(288,0,8255,'file921716980800.jpg'),(289,0,8255,'file5841716980800.jpg'),(290,8256,0,'file5271716981468.jpg'),(291,8256,0,'file651716981468.jpg'),(414,0,8,'file8231717904264.jpg'),(415,0,8,'file6891717904264.jpg'),(421,0,9,'file1271717904358.png'),(438,0,10,'file6941718055030.png'),(439,0,10,'file411718055030.png'),(440,0,10,'file5981718055030.png'),(441,0,10,'file6681718055030.png'),(442,55,0,'file6441718986997.png'),(443,74,0,'file1131721844344.JPG'),(444,74,0,'file9871721844344.JPG'),(445,75,0,'file9491725873667.png'),(446,75,0,'file9261725873667.png'),(447,75,0,'file9301725873667.png'),(448,75,0,'file8971725873667.png'),(449,76,0,'file1501726433138.png'),(450,76,0,'file3991726433138.png'),(451,76,0,'file4271726433138.png'),(452,76,0,'file2311726433138.png'),(453,73,0,'file3451729153593.png'),(454,73,0,'file5221729153593.png'),(455,73,0,'file81729153593.png'),(456,73,0,'file8701729153593.png'),(457,77,0,'file4611745950048.png'),(458,77,0,'file5541745950048.jpg'),(459,77,0,'file5171745950048.png'),(460,0,14,'file981745950112.jpg'),(461,0,14,'file8921745950112.png'),(462,0,14,'file7591745950112.jpg'),(463,78,0,'file4351745950153.jpg');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `file` with 52 row(s)
--

--
-- Table structure for table `importance`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `importance` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `importance`
--

LOCK TABLES `importance` WRITE;
/*!40000 ALTER TABLE `importance` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `importance` VALUES (1,'هام','Ebaa','2024-05-30 20:13:31'),(10,'ertry','tfhgjkl;','2024-06-05 23:57:53');
/*!40000 ALTER TABLE `importance` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `importance` with 2 row(s)
--

--
-- Table structure for table `incoming`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incoming` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `num_id` int(11) NOT NULL,
  `tarmez` varchar(20) DEFAULT NULL,
  `transaction_type_id` int(1) NOT NULL,
  `importance_id` int(1) NOT NULL,
  `confidentiality_id` int(1) NOT NULL,
  `subject` longtext NOT NULL,
  `subject_en` text NOT NULL,
  `dialect_id` int(1) NOT NULL DEFAULT 0,
  `company_sender_id` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `incoming_date` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `incoming_ibfk_1` (`importance_id`),
  KEY `incoming_ibfk_2` (`confidentiality_id`),
  KEY `incoming_ibfk_4` (`transaction_type_id`),
  KEY `company_sender_id` (`company_sender_id`),
  KEY `incoming_ibfk_5` (`dialect_id`),
  CONSTRAINT `incoming_ibfk_1` FOREIGN KEY (`company_sender_id`) REFERENCES `company` (`id`),
  CONSTRAINT `incoming_ibfk_2` FOREIGN KEY (`confidentiality_id`) REFERENCES `confidentiality` (`id`),
  CONSTRAINT `incoming_ibfk_3` FOREIGN KEY (`dialect_id`) REFERENCES `dialect` (`id`),
  CONSTRAINT `incoming_ibfk_4` FOREIGN KEY (`importance_id`) REFERENCES `importance` (`id`),
  CONSTRAINT `incoming_ibfk_5` FOREIGN KEY (`transaction_type_id`) REFERENCES `transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incoming`
--

LOCK TABLES `incoming` WRITE;
/*!40000 ALTER TABLE `incoming` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `incoming` VALUES (12,2,'2024/',11,1,1,'wkldfgh','Fgjfhjfg',2,1,6,'2024-06-23',1),(13,3,'2024/',11,1,1,'q2edjk','Dfgf',2,1,6,'2024-06-23',0),(14,1,'2025/',11,1,1,'aaaaaaaaaaa','Aaaaaaaaaaaaaa',2,1,6,'2025-04-29',0);
/*!40000 ALTER TABLE `incoming` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `incoming` with 3 row(s)
--

--
-- Table structure for table `lang`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lang` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `ar` varchar(255) NOT NULL,
  `en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lang`
--

LOCK TABLES `lang` WRITE;
/*!40000 ALTER TABLE `lang` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `lang` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `lang` with 0 row(s)
--

--
-- Table structure for table `notifications`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(1) NOT NULL,
  `page` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `page_en` varchar(255) NOT NULL,
  `des_en` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=637 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `notifications` VALUES (425,6,'إضافة صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة صادر ','Add outgoing','Bashar Essam (Admin) added an outgoing. ',1,'2025-06-23 03:19:25'),(459,0,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ   () ﺑﺘﺴﺠﻴﻞ الخروج','logout',' () has logged out.',1,'2024-06-24 04:12:11'),(564,6,'حذف  وارد','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بحذف  وارد ','Delete incoming ','Bashar Essam   deleted an incoming . ',1,'2024-06-24 11:36:08'),(565,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-24 11:38:00'),(566,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-26 07:34:08'),(567,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-06-26 07:34:20'),(568,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-26 07:37:16'),(569,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-26 07:39:34'),(570,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-06-26 07:39:43'),(571,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-26 07:42:16'),(572,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-26 07:54:49'),(573,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-06-26 07:55:02'),(574,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-26 07:57:16'),(575,6,'وقت  إضافي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل  وقت إضافي','Overtime','Bashar Essam (Admin) modified the overtime. ',1,'2024-06-26 07:58:07'),(576,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-27 12:20:34'),(577,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-06-27 04:03:16'),(578,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-07-01 03:13:52'),(579,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-07-01 03:16:11'),(580,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-07-02 01:30:24'),(581,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-07-24 09:04:18'),(582,6,'إضافة صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة صادر ','Add outgoing','Bashar Essam (Admin) added an outgoing. ',1,'2024-07-24 09:05:44'),(583,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-08-14 01:56:46'),(584,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-08-14 10:49:47'),(585,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-08-14 10:50:03'),(586,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-08-14 02:38:18'),(587,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-08-14 02:47:21'),(588,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-08-23 06:36:59'),(589,6,'وقت  إضافي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل  وقت إضافي','Overtime','Bashar Essam (Admin) modified the overtime. ',1,'2024-08-23 06:38:42'),(590,6,'وقت  إضافي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل  وقت إضافي','Overtime','Bashar Essam (Admin) modified the overtime. ',1,'2024-08-23 06:38:55'),(591,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-08-23 06:38:55'),(592,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-08-23 06:39:05'),(593,6,'وقت  إضافي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل  وقت إضافي','Overtime','Bashar Essam (Admin) modified the overtime. ',1,'2024-08-23 06:39:20'),(594,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-08-23 06:40:38'),(595,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-09 12:20:10'),(596,6,'إضافة صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة صادر ','Add outgoing','Bashar Essam (Admin) added an outgoing. ',1,'2024-09-09 12:21:07'),(597,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-09 12:22:19'),(598,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-15 11:42:48'),(599,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-15 11:44:30'),(600,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-15 11:44:41'),(601,6,'إضافة صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة صادر ','Add outgoing','Bashar Essam (Admin) added an outgoing. ',1,'2024-09-15 11:45:38'),(602,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-15 11:46:43'),(603,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-15 11:46:43'),(604,0,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ   () ﺑﺘﺴﺠﻴﻞ الخروج','logout',' () has logged out.',1,'2024-09-15 11:46:43'),(605,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-15 11:46:58'),(606,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-15 11:47:58'),(607,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-18 09:32:52'),(608,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-18 09:33:52'),(609,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-28 06:51:34'),(610,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-28 06:52:34'),(611,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-29 12:53:21'),(612,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-09-29 12:54:22'),(613,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-29 12:54:41'),(614,6,'وقت  إضافي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل  وقت إضافي','Overtime','Bashar Essam (Admin) modified the overtime. ',1,'2024-09-29 12:55:00'),(615,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-09-29 09:48:31'),(616,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-02 12:07:54'),(617,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-03 03:12:41'),(618,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-06 08:27:50'),(619,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-07 07:35:07'),(620,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-17 11:19:11'),(621,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-10-17 11:26:33'),(622,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-26 03:19:54'),(623,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-28 12:48:34'),(624,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2024-10-28 08:12:39'),(625,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-10-29 12:26:00'),(626,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-11-17 01:52:55'),(627,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-11-30 05:52:10'),(628,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2025-01-05 05:29:50'),(629,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2025-02-04 03:57:57'),(630,6,'ﺗﺴﺠﻴﻞ الخروج','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ الخروج','logout','Bashar Essam (Admin) has logged out.',1,'2025-02-04 03:58:40'),(631,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2025-03-28 03:52:37'),(632,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2025-04-29 09:01:35'),(633,6,'إضافة صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة صادر ','Add outgoing','Bashar Essam (Admin) added an outgoing. ',1,'2025-04-29 09:07:28'),(634,6,'إضافة وارد','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة وارد ','Add incoming','Bashar Essam (Admin) added an incoming. ',1,'2025-04-29 09:08:32'),(635,6,'إضافة صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإضافة صادر ','Add outgoing','Bashar Essam (Admin) added an outgoing. ',1,'2025-04-29 09:09:13'),(636,6,'نسخ إحتياطي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإجراء نسخة احتياطية.','backup','Bashar Essam (Admin) performed a backup. ',0,'2025-04-29 09:11:31');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `notifications` with 75 row(s)
--

--
-- Table structure for table `outgoing`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outgoing` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `num_id` int(11) NOT NULL,
  `tarmez` varchar(20) DEFAULT NULL,
  `transaction_type_id` int(1) NOT NULL,
  `importance_id` int(1) NOT NULL,
  `confidentiality_id` int(1) NOT NULL,
  `subject` longtext NOT NULL,
  `subject_en` text NOT NULL,
  `letter` longtext NOT NULL,
  `dialect_id` int(1) NOT NULL DEFAULT 0,
  `company_sender_id` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `outgoing_date` date NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `outgoing_ibfk_1` (`importance_id`),
  KEY `outgoing_ibfk_2` (`confidentiality_id`),
  KEY `outgoing_ibfk_4` (`transaction_type_id`),
  KEY `company_sender_id` (`company_sender_id`),
  KEY `outgoing_ibfk_5` (`dialect_id`),
  CONSTRAINT `outgoing_ibfk_1` FOREIGN KEY (`company_sender_id`) REFERENCES `company` (`id`),
  CONSTRAINT `outgoing_ibfk_2` FOREIGN KEY (`confidentiality_id`) REFERENCES `confidentiality` (`id`),
  CONSTRAINT `outgoing_ibfk_3` FOREIGN KEY (`dialect_id`) REFERENCES `dialect` (`id`),
  CONSTRAINT `outgoing_ibfk_4` FOREIGN KEY (`importance_id`) REFERENCES `importance` (`id`),
  CONSTRAINT `outgoing_ibfk_5` FOREIGN KEY (`transaction_type_id`) REFERENCES `transaction_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outgoing`
--

LOCK TABLES `outgoing` WRITE;
/*!40000 ALTER TABLE `outgoing` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `outgoing` VALUES (73,1,'2024/',11,1,1,'fffffffffff','Fffffffffffff','<p><strong>السادة / مؤسسة الرعاية المتكاملة&nbsp;</strong></p>\r\n<p><strong>تحية طيبة وبعد...</strong></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong><span style=\"text-decoration: underline;\">الموضوع الطاقة الاستعابية الجديدة لمؤسستكم</span></strong></span></p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; تهنيكم الهيئة العامة لشئون ذوي الإعاقة خالص التحية والتقدير متمنين لكم دوام التطور والرقي وبالإشارة للموضوع أعلاه , وإلي اجتماع لجنة المتابعة والرقابة علي المدارس والمراكز والحضانات والمؤسسات التأهيلية لذوي الإعاقة السابع بتاريخ 27/11/2019 .</p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; نحيطكم علماً بأنه تم تحديد الطاقة الإستيعابية لمؤسستكم <strong><span style=\"text-decoration: underline;\">إعتباراً من بداية العام الدراسي 2020/2019 وهي كالآتي:</span></strong></p>\r\n<p style=\"text-align: right;\"><strong>&nbsp; &nbsp; &nbsp;<span style=\"text-decoration: underline;\">- فصول الاحتياجات : 338 طالب لعدد31 فصل و 18 ورشة .</span></strong></p>\r\n<p style=\"text-align: right;\">وعلي الجهة تقديمم آخر ميزانية معتمدة لإعادةإحتساب الرسوم .</p>\r\n<p style=\"text-align: right;\">علماً بأن أي&nbsp; تجاوز للطاقة المسموح بها لا يحمل الهيئة أي مسئولية مالية أو&nbsp; قانونية.</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"><strong>وتفضلوا بقبول فائق الاحترام ....</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 14pt;\"><strong>مدير عام الهيئة العامة لشئون ذوي الإعاقة&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></p>',2,1,6,'2024-06-24',0),(74,2,'2024/',11,1,1,'yh','Hcd','hncv',2,1,6,'2024-07-24',0),(75,3,'2024/',11,1,1,'jgujkhk','Uiguigui','f7yfyiy',2,1,6,'2024-09-09',0),(76,4,'2024/',11,1,1,'werwrw','Wewew','',2,1,6,'2024-09-15',0),(77,1,'2025/',11,1,1,'aaaaaaaa','Aaaaaaaaaaaaaa','<p><strong>السادة / مؤسسة الرعاية المتكاملة&nbsp;</strong></p>\r\n<p><strong>تحية طيبة وبعد...</strong></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong><span style=\"text-decoration: underline;\">الموضوع الطاقة الاستعابية الجديدة لمؤسستكم</span></strong></span></p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; تهنيكم الهيئة العامة لشئون ذوي الإعاقة خالص التحية والتقدير متمنين لكم دوام التطور والرقي وبالإشارة للموضوع أعلاه , وإلي اجتماع لجنة المتابعة والرقابة علي المدارس والمراكز والحضانات والمؤسسات التأهيلية لذوي الإعاقة السابع بتاريخ 27/11/2019 .</p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; نحيطكم علماً بأنه تم تحديد الطاقة الإستيعابية لمؤسستكم <strong><span style=\"text-decoration: underline;\">إعتباراً من بداية العام الدراسي 2020/2019 وهي كالآتي:</span></strong></p>\r\n<p style=\"text-align: right;\"><strong>&nbsp; &nbsp; &nbsp;<span style=\"text-decoration: underline;\">- فصول الاحتياجات : 338 طالب لعدد31 فصل و 18 ورشة .</span></strong></p>\r\n<p style=\"text-align: right;\">وعلي الجهة تقديمم آخر ميزانية معتمدة لإعادةإحتساب الرسوم .</p>\r\n<p style=\"text-align: right;\">علماً بأن أي&nbsp; تجاوز للطاقة المسموح بها لا يحمل الهيئة أي مسئولية مالية أو&nbsp; قانونية.</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"><strong>وتفضلوا بقبول فائق الاحترام ....</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 14pt;\"><strong>مدير عام الهيئة العامة لشئون ذوي الإعاقة&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></p>',2,1,6,'2025-04-29',0),(78,2,'2025/',11,1,1,'bbbbbb','Bbbbbbbbbb','<p><strong>السادة / مؤسسة الرعاية المتكاملة&nbsp;</strong></p>\r\n<p><strong>تحية طيبة وبعد...</strong></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong><span style=\"text-decoration: underline;\">الموضوع الطاقة الاستعابية الجديدة لمؤسستكم</span></strong></span></p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; تهنيكم الهيئة العامة لشئون ذوي الإعاقة خالص التحية والتقدير متمنين لكم دوام التطور والرقي وبالإشارة للموضوع أعلاه , وإلي اجتماع لجنة المتابعة والرقابة علي المدارس والمراكز والحضانات والمؤسسات التأهيلية لذوي الإعاقة السابع بتاريخ 27/11/2019 .</p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; نحيطكم علماً بأنه تم تحديد الطاقة الإستيعابية لمؤسستكم <strong><span style=\"text-decoration: underline;\">إعتباراً من بداية العام الدراسي 2020/2019 وهي كالآتي:</span></strong></p>\r\n<p style=\"text-align: right;\"><strong>&nbsp; &nbsp; &nbsp;<span style=\"text-decoration: underline;\">- فصول الاحتياجات : 338 طالب لعدد31 فصل و 18 ورشة .</span></strong></p>\r\n<p style=\"text-align: right;\">وعلي الجهة تقديمم آخر ميزانية معتمدة لإعادةإحتساب الرسوم .</p>\r\n<p style=\"text-align: right;\">علماً بأن أي&nbsp; تجاوز للطاقة المسموح بها لا يحمل الهيئة أي مسئولية مالية أو&nbsp; قانونية.</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"><strong>وتفضلوا بقبول فائق الاحترام ....</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 14pt;\"><strong>مدير عام الهيئة العامة لشئون ذوي الإعاقة&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></p>',2,1,6,'2025-04-29',0);
/*!40000 ALTER TABLE `outgoing` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `outgoing` with 6 row(s)
--

--
-- Table structure for table `settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `time` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `settings` VALUES (1,'ican','file4411716149412.jpg',0,1000);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `settings` with 1 row(s)
--

--
-- Table structure for table `transaction_type`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaction_type` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_type`
--

LOCK TABLES `transaction_type` WRITE;
/*!40000 ALTER TABLE `transaction_type` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `transaction_type` VALUES (11,'اجازة','aa','2024-05-30 20:58:48');
/*!40000 ALTER TABLE `transaction_type` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `transaction_type` with 1 row(s)
--

--
-- Table structure for table `user`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(155) NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `address_en` text NOT NULL,
  `company_id` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `permissions` int(1) NOT NULL DEFAULT 1,
  `file` varchar(255) NOT NULL,
  `almuahal` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_in` datetime NOT NULL,
  `log_error` int(1) NOT NULL DEFAULT 0,
  `outgoing` int(1) NOT NULL DEFAULT 0,
  `outgoing1` int(1) NOT NULL DEFAULT 0,
  `incoming` int(1) NOT NULL DEFAULT 0,
  `transaction_type` int(1) NOT NULL DEFAULT 0,
  `importance` int(1) NOT NULL DEFAULT 0,
  `confidentiality` int(1) NOT NULL DEFAULT 0,
  `company` int(1) NOT NULL DEFAULT 0,
  `user` int(1) NOT NULL DEFAULT 0,
  `settings` int(1) NOT NULL DEFAULT 0,
  `add1` int(1) NOT NULL DEFAULT 0,
  `edit1` int(1) NOT NULL DEFAULT 0,
  `delete1` int(1) NOT NULL DEFAULT 0,
  `print` int(1) NOT NULL DEFAULT 0,
  `dialect` int(1) NOT NULL DEFAULT 0,
  `all1` int(1) NOT NULL DEFAULT 0,
  `notifications` int(1) NOT NULL DEFAULT 0,
  `histore_outging` int(1) NOT NULL DEFAULT 0,
  `histore_incoming` int(1) NOT NULL DEFAULT 0,
  `backup` int(1) NOT NULL DEFAULT 0,
  `time` int(1) NOT NULL DEFAULT 0,
  `forgot` varchar(255) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'basharessam1111','25d55ad283aa400af464c76d713c07ad','احمد','bashar essam','basharessam4@gmail.com','064696894','egypt','Sdfgjhjhfdsadsfg',1,1,2,'file771718055427.png','sdsc','2024-06-09','2024-06-09 06:58:54',0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'67c3a6fbad98b51cfa2e17c7a06c0e30','2024-06-24 19:10:31'),(6,'admin1','25d55ad283aa400af464c76d713c07ad','بشار عصام','Bashar Essam','example@example.com','01064696894','sdd','wasdgfghjk',1,1,1,'file6431716980943.jpg','sds','2024-05-18','2024-05-18 19:07:31',0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'','2024-06-24 20:27:26'),(41,'basharessam1','25d55ad283aa400af464c76d713c07ad','bashar essam','bashar essam','basharessam9@gmail.com','01064696894','egypt','dfvs',6,1,2,'file8731718055406.png','fjjgjg','2024-05-18','2024-05-18 20:22:33',0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,1,1,'','2024-06-24 20:00:27');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `user` with 3 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Tue, 29 Apr 2025 21:11:31 +0300
