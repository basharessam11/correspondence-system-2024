-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: sader
-- ------------------------------------------------------
-- Server version 	10.4.28-MariaDB
-- Date: Fri, 21 Jun 2024 19:33:45 +0300

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
) ENGINE=InnoDB AUTO_INCREMENT=443 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `file` VALUES (250,8228,0,'file3761716134193.jpg'),(251,6316,0,'file4731716136236.jpg'),(252,6316,0,'file5301716136236.jpg'),(253,6316,0,'file2021716136236.jpg'),(254,6317,0,'file4651716136310.jpg'),(255,6317,0,'file8961716136310.jpg'),(256,6317,0,'file4111716136310.jpg'),(257,8247,0,'file7931716298127.png'),(262,8249,0,'file3811716318162.png'),(263,8249,0,'file7951716318162.png'),(264,8249,0,'file6031716318162.png'),(265,8249,0,'file4001716318162.png'),(266,8249,0,'file9491716318162.png'),(267,8249,0,'file11716318162.png'),(278,8251,0,'file1861716900717.pdf'),(279,8251,0,'file4001716900717.pdf'),(282,8255,0,'file1461716976703.jpeg'),(286,0,8255,'file9641716980800.jpg'),(287,0,8255,'file9381716980800.jpg'),(288,0,8255,'file921716980800.jpg'),(289,0,8255,'file5841716980800.jpg'),(290,8256,0,'file5271716981468.jpg'),(291,8256,0,'file651716981468.jpg'),(362,45,0,'file8231717903902.jpg'),(363,45,0,'file8451717903902.jpg'),(414,0,8,'file8231717904264.jpg'),(415,0,8,'file6891717904264.jpg'),(421,0,9,'file1271717904358.png'),(431,46,0,'file9651717904451.jpg'),(432,46,0,'file2481717904451.jpg'),(434,47,0,'file7541718054815.png'),(435,47,0,'file9091718054815.png'),(436,47,0,'file4281718054815.png'),(437,47,0,'file9191718054815.png'),(438,0,10,'file6941718055030.png'),(439,0,10,'file411718055030.png'),(440,0,10,'file5981718055030.png'),(441,0,10,'file6681718055030.png'),(442,55,0,'file6441718986997.png');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `file` with 39 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incoming`
--

LOCK TABLES `incoming` WRITE;
/*!40000 ALTER TABLE `incoming` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `incoming` VALUES (1,'2024/',11,1,1,'مرحبا1','welcome1',2,1,6,'2024-06-07',0),(4,'2024/',11,1,1,'مرحبا1	','SDAFVDSss',2,1,6,'2024-06-05',0),(7,'2024/',11,10,1,'سيسيسييسيسيسيسيييي','Ddddddddddddfffff',2,1,6,'2024-06-08',0),(8,'2024/',11,10,1,'rfgh','Dsfg',2,1,6,'2024-06-09',0),(9,'2024/',11,10,1,'rgefwds','Trefdsa',2,1,6,'2024-06-09',0),(10,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً،  ','Volunteer work is providing assistance, assistance and effort in order to work towards achieving good in society in general and for its individuals in particular.',2,1,6,'2024-06-11',1);
/*!40000 ALTER TABLE `incoming` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `incoming` with 6 row(s)
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
) ENGINE=InnoDB AUTO_INCREMENT=365 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `notifications` VALUES (338,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 07:33:14'),(339,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 08:03:40'),(340,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 08:05:53'),(341,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 08:13:02'),(342,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 08:15:54'),(343,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 08:59:13'),(344,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 09:54:03'),(345,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 09:58:21'),(346,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 10:12:54'),(347,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 10:57:20'),(348,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 10:57:34'),(349,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 11:54:18'),(350,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 11:54:41'),(351,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 11:55:07'),(352,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 11:59:20'),(353,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-20 11:59:38'),(354,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-06-21 01:49:56'),(355,6,'ﺗﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) ﺑﺘﺴﺠﻴﻞ اﻟﺪﺧﻮﻝ','login','Bashar Essam (Admin) has logged in.',1,'2024-06-21 04:35:57'),(356,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 04:37:43'),(357,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 04:44:59'),(358,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 04:56:22'),(359,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 05:15:24'),(360,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 05:18:03'),(361,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 07:23:02'),(362,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 07:23:17'),(363,6,'تعديل صادر','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بتعديل صادر ','Edit outgoing','Bashar Essam (Admin) Edited an outgoing. ',1,'2024-06-21 07:26:51'),(364,6,'نسخ إحتياطي','  ﻗﺎﻡ  بشار عصام (ﻣﺪﻳﺮ) بإجراء نسخة احتياطية.','backup','Bashar Essam (Admin) performed a backup. ',0,'2024-06-21 07:33:45');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `notifications` with 27 row(s)
--

--
-- Table structure for table `outgoing`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outgoing` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outgoing`
--

LOCK TABLES `outgoing` WRITE;
/*!40000 ALTER TABLE `outgoing` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `outgoing` VALUES (2,'2024/',11,1,1,'مرحبا1','welcom1','',2,1,6,'2024-05-30',0),(4,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-06-07',0),(10,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(11,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(12,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(13,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(14,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(15,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(16,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(17,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(18,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(19,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(20,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(21,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(22,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(23,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(24,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(25,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(26,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(27,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(28,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(29,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(30,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(31,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(32,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(33,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(34,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(35,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.\r\n\r\n ','dfdbfdasdf\r\nwwwwwwwwwwww','',2,1,6,'2024-05-30',0),(36,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.	','العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً، وأُطلقَ عليه مُسمّى عملٍ تطوعيّ لأنّ الإنسان يقومُ به طواعيةً دون إجبارٍ من الآخرين على فعله، فهو إرادةٌ داخليّة، وغَلَبةٌ لِسُلطة الخير على جانبِ الشرّ، ودليلٌ على ازدهارِ المُجتمع، فكلّما زاد عددُ العناصر الإيجابيّة والبنَاءة في مجتمعٍ ما، أدّى ذلك إلى تطوّره ونمّوه.	','',2,1,6,'2024-06-05',0),(43,'2024/',11,1,1,'etjhyk','ertryjtkk','',2,1,6,'2024-06-08',0),(44,'2024/',11,1,1,'ءؤرلا','Sdjfhksdijklbاvx','',2,1,6,'2024-06-08',0),(45,'2024/',11,10,1,'يبللىةى','Dfghgjhj','',2,1,6,'2024-06-09',0),(46,'2024/',11,10,1,'sdfgfd','Dsfgd','',2,1,6,'2024-06-09',0),(47,'2024/',11,1,1,'العمل التطوعيّ هو تقديمُ المساعدةِ والعون والجهد مِن أجل العمل على تحقيقِ الخير في المُجتمعِ عُموماً ولأفراده خصوصاً،  ','Volunteer work is providing assistance, assistance and effort in order to work towards achieving good in society in general and for its individuals in particular.','',2,1,6,'2024-06-11',1),(48,'2024/',11,1,1,'','Dss','',2,1,6,'2024-06-12',0),(49,'2024/',11,10,1,'Quill Rich Text EditorCupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.','Sdfsd','',2,1,6,'2024-06-12',0),(50,'2024/',11,1,1,'&lt;h2&gt;Quill Rich Text Editor&lt;/h2&gt;&lt;p&gt;Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie macaroon bear claw. Souffl&eacute; I love candy canes I love cotton candy I love.&lt;/p&gt;','Fff','',2,1,6,'2024-06-12',0),(51,'2024/',11,1,1,'dfdf\r\n','<p>sdgdsdsdgds sdgdsgsdgd</p>','',2,1,6,'2024-06-12',0),(52,'2024/',11,1,1,'&lt;h1&gt;sdfgsdgfsdgsdgs&lt;/h1&gt;\r\n&lt;p&gt;dsgsdgsdgsdgdggsd&lt;/p&gt;','sdgdsdsdgds\r\nsdgdsgsdgd','',2,1,6,'2024-06-12',0),(53,'2024/',11,1,1,'sdfgsdgfsdgsdgs\r\ndsgsdgsdgsdgdggsd','sdgdsdsdgds\r\nsdgdsgsdgd','',2,1,6,'2024-06-12',0),(54,'2024/',11,1,1,'sdsssss','<p>gfdddd</p>','<p><strong>السادة / مؤسسة الرعاية المتكاملة&nbsp;</strong></p>\n<p><strong>تحية طيبة وبعد...</strong></p>\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong><span style=\"text-decoration: underline;\">الموضوع الطاقة الاستعابية الجديدة لمؤسستكم</span></strong></span></p>\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; تهنيكم الهيئة العامة لشئون ذوي الإعاقة خالص التحية والتقدير متمنين لكم دوام التطور والرقي وبالإشارة للموضوع أعلاه , وإلي اجتماع لجنة المتابعة والرقابة علي المدارس والمراكز والحضانات والمؤسسات التأهيلية لذوي الإعاقة السابع بتاريخ 27/11/2019 .</p>\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; نحيطكم علماً بأنه تم تحديد الطاقة الإستيعابية لمؤسستكم <strong><span style=\"text-decoration: underline;\">إعتباراً من بداية العام الدراسي 2020/2019 وهي كالآتي:</span></strong></p>\n<p style=\"text-align: right;\"><strong>&nbsp; &nbsp; &nbsp;<span style=\"text-decoration: underline;\">- فصول الاحتياجات : 338 طالب لعدد31 فصل و 18 ورشة .</span></strong></p>\n<p style=\"text-align: right;\">وعلي الجهة تقديمم آخر ميزانية معتمدة لإعادةإحتساب الرسوم .</p>\n<p style=\"text-align: right;\">علماً بأن أي&nbsp; تجاوز للطاقة المسموح بها لا يحمل الهيئة أي مسئولية مالية أو&nbsp; قانونية.</p>\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"><strong>وتفضلوا بقبول فائق الاحترام ....</strong></span></p>\n<p style=\"text-align: center;\">&nbsp;</p>\n<p style=\"text-align: left;\"><span style=\"font-size: 14pt;\"><strong>مدير عام الهيئة العامة لشئون ذوي الإعاقة&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></p>',2,1,6,'2024-06-13',0),(55,'2024/',11,1,1,'ggggg','Ewfgre','<p style=\"text-align: right;\"><strong>السادة / مؤسسة الرعاية المتكاملة&nbsp;</strong></p>\r\n<p style=\"text-align: right;\"><strong>تحية طيبة وبعد...</strong></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong><span style=\"text-decoration: underline;\">الموضوع الطاقة الاستعابية الجديدة لمؤسستكم</span></strong></span></p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; تهنيكم الهيئة العامة لشئون ذوي الإعاقة خالص التحية والتقدير متمنين لكم دوام التطور والرقي وبالإشارة للموضوع أعلاه , وإلي اجتماع لجنة المتابعة والرقابة علي المدارس والمراكز والحضانات والمؤسسات التأهيلية لذوي الإعاقة السابع بتاريخ 27/11/2019 .</p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; نحيطكم علماً بأنه تم تحديد الطاقة الإستيعابية لمؤسستكم <strong><span style=\"text-decoration: underline;\">إعتباراً من بداية العام الدراسي 2020/2019 وهي كالآتي:</span></strong></p>\r\n<p style=\"text-align: right;\"><strong>&nbsp; &nbsp; &nbsp;<span style=\"text-decoration: underline;\">- فصول الاحتياجات : 338 طالب لعدد31 فصل و 18 ورشة .</span></strong></p>\r\n<p style=\"text-align: right;\">وعلي الجهة تقديمم آخر ميزانية معتمدة لإعادةإحتساب الرسوم .</p>\r\n<p style=\"text-align: right;\">علماً بأن أي&nbsp; تجاوز للطاقة المسموح بها لا يحمل الهيئة أي مسئولية مالية أو&nbsp; قانونية.</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"><strong>وتفضلوا بقبول فائق الاحترام ....</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 14pt;\"><strong>مدير عام الهيئة العامة لشئون ذوي الإعاقة</strong></span></p>',2,1,6,'2024-06-13',0),(56,'2024/',11,1,1,'','','<p style=\"text-align: right;\"><strong>السادة / مؤسسة الرعاية المتكاملة</strong></p>\r\n<p style=\"text-align: right;\"><strong>تحية طيبة وبعد...</strong></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\"><strong><span style=\"text-decoration: underline;\">الموضوع الطاقة الاستعابية الجديدة لمؤسستكم</span></strong></span></p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; تهنيكم الهيئة العامة لشئون ذوي الإعاقة خالص التحية والتقدير متمنين لكم دوام التطور والرقي وبالإشارة للموضوع أعلاه , وإلي اجتماع لجنة المتابعة والرقابة علي المدارس والمراكز والحضانات والمؤسسات التأهيلية لذوي الإعاقة السابع بتاريخ 27/11/2019 .</p>\r\n<p style=\"text-align: right;\">&nbsp; &nbsp; &nbsp; &nbsp; نحيطكم علماً بأنه تم تحديد الطاقة الإستيعابية لمؤسستكم <strong><span style=\"text-decoration: underline;\">إعتباراً من بداية العام الدراسي 2020/2019 وهي كالآتي:</span></strong></p>\r\n<p style=\"text-align: right;\"><strong>&nbsp; &nbsp; &nbsp;<span style=\"text-decoration: underline;\">- فصول الاحتياجات : 338 طالب لعدد31 فصل و 18 ورشة .</span></strong></p>\r\n<p style=\"text-align: right;\">وعلي الجهة تقديمم آخر ميزانية معتمدة لإعادةإحتساب الرسوم .</p>\r\n<p style=\"text-align: right;\">علماً بأن أي&nbsp; تجاوز للطاقة المسموح بها لا يحمل الهيئة أي مسئولية مالية أو&nbsp; قانونية.</p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 14pt;\"><strong>وتفضلوا بقبول فائق الاحترام ....</strong></span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 14pt;\"><strong>مدير عام الهيئة العامة لشئون ذوي الإعاقة&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></span></p>',2,1,6,'2024-06-13',0);
/*!40000 ALTER TABLE `outgoing` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `outgoing` with 43 row(s)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `settings` VALUES (1,'ican','file4411716149412.jpg',0);
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
  `id` int(1) NOT NULL,
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
  `forgot` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `user` VALUES (1,'basharessam1111','25d55ad283aa400af464c76d713c07ad','احمد','bashar essam','basharessam4@gmail.com','064696894','egypt','Sdfgjhjhfdsadsfg',1,1,2,'file771718055427.png','sdsc','2024-06-09','2024-06-09 06:58:54',0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'67c3a6fbad98b51cfa2e17c7a06c0e30'),(6,'admin1','25d55ad283aa400af464c76d713c07ad','بشار عصام','Bashar Essam','example@example.com','01064696894','sdd','wasdgfghjk',1,1,1,'file6431716980943.jpg','sds','2024-05-18','2024-05-18 19:07:31',0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,''),(41,'basharessam1','25d55ad283aa400af464c76d713c07ad','bashar essam','bashar essam','basharessam9@gmail.com','01064696894','egypt','dfvs',6,1,2,'file8731718055406.png','fjjgjg','2024-05-18','2024-05-18 20:22:33',0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,1,'');
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

-- Dump completed on: Fri, 21 Jun 2024 19:33:46 +0300
