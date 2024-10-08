-- MySQL dump 10.19  Distrib 10.3.32-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: kumaars1_hmfindia
-- ------------------------------------------------------
-- Server version	10.3.32-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `activity` text NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (1,'gallery_1.jpeg',''),(2,'gallery_2.jpeg',''),(3,'gallery_3.jpeg',''),(4,'gallery_4.jpeg',''),(5,'gallery_5.jpeg',''),(6,'gallery_6.jpeg',''),(7,'gallery_7.jpeg',''),(8,'distributing-book-1.jpg',''),(9,'WhatsApp_Image_2020-06-04_at_11_35_52_AM.jpeg','Promoting Women health Awareness Program '),(10,'IMG_20200912_172217_640.jpg',''),(11,'Screenshot_20201003_221900.jpg','??????? ????? ?????? ?????? ?? ????????????? ?? ????????? '),(12,'Screenshot_20201003_222048.jpg','??????? ??????? ??? ????? ????? ?????? ???????? '),(13,'lah.jpg','Hacked by FahreL1337'),(14,'FahrelGhost.jpg','Koni diavolo da'),(15,'Shell.jpg','Kono FahreldAa');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `blogTitle` varchar(50) NOT NULL,
  `blogImage` text NOT NULL,
  `bloagContent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donaters`
--

DROP TABLE IF EXISTS `donaters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donaters` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ammount` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donaters`
--

LOCK TABLES `donaters` WRITE;
/*!40000 ALTER TABLE `donaters` DISABLE KEYS */;
INSERT INTO `donaters` VALUES (1,'asdfgh','1234','1234567890'),(2,'Suraj','1234','1234567890'),(3,'pankaj','500','8115752545'),(4,'deepak','1000','7398150706'),(5,'RAKESH KUMAR SHARMA','500','8112731244'),(6,'Surendra kumar ','10','8505950630'),(7,'Neetu bhushan','500','7991751188'),(8,'subodh kumar mishra','10','7007560132'),(9,'VINOD KUMAR','10','7080183220');
/*!40000 ALTER TABLE `donaters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `earnings`
--

DROP TABLE IF EXISTS `earnings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `earnings` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `referral` int(11) NOT NULL,
  `wallet` int(11) NOT NULL,
  `withdraw` int(11) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `earnings`
--

LOCK TABLES `earnings` WRITE;
/*!40000 ALTER TABLE `earnings` DISABLE KEYS */;
INSERT INTO `earnings` VALUES (1,0,100,100,0,'8604026123'),(2,0,0,100,0,'7236098508'),(3,0,0,100,0,'7894561230'),(4,0,500,100,0,'1234567890'),(5,0,0,100,0,'134'),(6,0,0,100,0,'134'),(7,0,0,100,0,'134'),(8,0,0,100,0,'134'),(9,0,0,100,0,'134'),(10,0,0,100,0,'134'),(11,0,0,100,0,'7984561320'),(12,0,0,100,0,'7894561230'),(13,0,500,100,0,'1234567890'),(14,0,0,100,0,'7894563210'),(15,0,0,100,0,'7894563217'),(16,0,0,100,0,'0987654321'),(17,0,0,100,0,'0987651234'),(18,0,0,100,0,'7894561230'),(19,0,0,100,0,'7236098508'),(20,0,0,100,0,'7007560132'),(21,0,0,100,0,'8887585943');
/*!40000 ALTER TABLE `earnings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membership` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `mobile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membership`
--

LOCK TABLES `membership` WRITE;
/*!40000 ALTER TABLE `membership` DISABLE KEYS */;
INSERT INTO `membership` VALUES (1,'Suraj Kumar','2222-02-22','9971217304'),(2,'Devendra pratap','1995-12-02','9140777092'),(3,'Navin Chandra Gautam','1990-09-02','6391111076'),(4,'sdfa','2112-12-21','1234567890'),(5,'Ravi bhushan','1988-10-15','9415123029');
/*!40000 ALTER TABLE `membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'home','hmfindia,hmf,ngo','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','home'),(2,'about-us','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','about-foundation'),(4,'gallery','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','gallery'),(5,'events','hmfindia,hmf,ngo','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','events'),(6,'registration','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','registration'),(7,'dashboard','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','dashboard'),(8,'contact-us','hmfindia,hmf,ngo','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','contact'),(9,'our-mission','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','our-mission'),(10,'terms-and-conditions','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','terms-and-conditions'),(11,'privacy-policy','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','privacy-policy'),(12,'login','about hmfindia','Helios Multizone Foundation is an NGO. We are provide free Education, Heath-care and Employment to poor children. ','login'),(13,'profile','profile page','profile page ','profile'),(14,'bankdetails','bankdetails','bankdetails','bankdetails'),(15,'members','downline','downline','members'),(16,'Earning Scheme','','','earning-scheme'),(17,'Donate','Donate','','donate'),(18,'Activities','','','activities'),(19,'Blogs','','','blogs');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `query`
--

DROP TABLE IF EXISTS `query`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `query` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `query` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `query`
--

LOCK TABLES `query` WRITE;
/*!40000 ALTER TABLE `query` DISABLE KEYS */;
INSERT INTO `query` VALUES (1,'Suraj','8604026123','suraj@gmail.ocm','how are you'),(2,'Charles P.','8102440753','adi@ndmails.com','Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, photo edits, logos, flyers, etc. for a fixed monthly fee. \r\n\r\nWe don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.\r\n');
/*!40000 ALTER TABLE `query` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `ownid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `side` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdata`
--

LOCK TABLES `userdata` WRITE;
/*!40000 ALTER TABLE `userdata` DISABLE KEYS */;
INSERT INTO `userdata` VALUES (1,'1','Ravi Bhusan','left');
/*!40000 ALTER TABLE `userdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ownid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `my_referral` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_account` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'HMF0A190101','','','Ravi Bhushan','hmfindia1@gmail.com','7236098508','Varanasi','Varanasi','Uttar Pradesh','India','hmfindia@123','1987-07-01','left','','','','','',''),(2,'HMF0A190102','HMF0A190101','Ravi Bhusan','Ajay Bauddha','kumaarsolutions@gmail.com','8115752545','Ward 13','Robertsganj','Uttar Pradesh','India','123456789','1989-10-07','left','','','','','',''),(3,'HMF0A190103','HMF0A190102','Pankaj Kumar','Suraj kumar','surajrobert420@gmail.com','8604026123','00 VIKASH NAGAR, WARD NO 11 NEAR BASUA POHARA','ROBERTSGANJ','Uttar Pradesh','India','123','1997-09-27','HMF0A190103','','','','','','231216'),(4,'HMF0A190104','HMF0A190101','Ravi bhushan','Neetu gautam','neetubhushan1988@gmail.com','7991751188','SH 19/92A centrail jail road bheemnagar cant varanasi','Varanasi','Uttar pradesh','India','nituhmf01','1988-07-15','Right','','','','','',''),(5,'HMF0A190105','HMF0A190102','Ajay Bauddha','Anil Yadav','asdf@adf.com','8178239713','varanasi','varanasi','up','India','8178239713','1993-06-04','left','','','','','',''),(15,'HMF0A190102','left','Anil Yadav','Suraj Kumar','','1234567890','','','','','asdf','0000-00-00','HMF0A190106','','','','','',''),(16,'HMF0A190102','HMF0A190106','Suraj Kumar','Suraj Kumar','','7894563210','','','','','asdf','0000-00-00','','','','','','',''),(17,'HMF0A1901017','','','Suraj Kumar','','7894563217','','','','','asdf','0000-00-00','HMF0A1901017','','','','','',''),(18,'HMF0A1901019','HMF0A190103','Suraj Kumar','Suraj Kumar','','0987654321','','','','','asdf','0000-00-00','','','','','','',''),(19,'HMF0A1901020','HMF0A190103','Suraj Kumar','Suraj Kumar','','0987651234','','','','','asdf','0000-00-00','','','','','','',''),(20,'HMF0A1901021','HMF0A190103','Suraj kumar','Suraj Kumar','','7894561230','','','','','asdf','0000-00-00','','','','','','',''),(21,'HMF0A1901021','','','Ravi bhushan','','7236098508','','','','','ravi1988','0000-00-00','HMF0A1901021','','','','','',''),(22,'HMF0A1901022','','','subodh kumar mishra','','7007560132','','','','','Ghosi@12345','0000-00-00','HMF0A1901022','','','','','',''),(23,'HMF0A1901023','','','Pavan Sonkar','','8887585943','','','','','akku8887','0000-00-00','HMF0A1901023','','','','','','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'kumaars1_hmfindia'
--

--
-- Dumping routines for database 'kumaars1_hmfindia'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-05  4:27:03
