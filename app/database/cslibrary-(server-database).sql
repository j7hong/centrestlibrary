CREATE DATABASE  IF NOT EXISTS `cslibrary` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cslibrary`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 72.167.233.103    Database: cslibrary
-- ------------------------------------------------------
-- Server version	5.5.37-35.0-log

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
-- Table structure for table `Books`
--

DROP TABLE IF EXISTS `Books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Books` (
  `Books_Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ISBN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Books_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Books`
--

LOCK TABLES `Books` WRITE;
/*!40000 ALTER TABLE `Books` DISABLE KEYS */;
INSERT INTO `Books` VALUES (1,'Web Developer\'s Cookbook','Robin Nixon','978-0-07-179431-2','Technology','Paperback'),(2,'Don\'t Make Me Think!','Steve Krug','0-321-34475-8','Technology','Paperback'),(3,'PHP, MySQL & JavaScript','Robin Nixon','978-0-596-15713-5','Technology','Paperback'),(4,'HTML and CSS','Elizabeth Castro, Bruce Hyslop','978-0-321-92883-2','Technology','Paperback');
/*!40000 ALTER TABLE `Books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_06_16_174151_create_books_table_on_server_DB',1),('2014_06_12_112722_create_Books_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'james','password'),(3,'tester','pass'),(4,'teacher','yes'),(5,'NewName','$2y$10$6X3sF4aVIpjGfsnp3E9cl.dIUYWYE8rVZ2pUcwemEiZqlSDKOIBFq'),(6,'foo','$2y$10$C/eHq8UgZeGvUye8DNhzyuC79LbaMM.Z4vpPyCDgOloNZFk6KV3yy'),(7,'foobar3','$2y$10$YuNTT63aiorda9uS5ttI/eeM81fzsuFI35dgf5kTqNzYqLA160U8G'),(8,'bob','joe'),(9,'bob','$2y$10$pCNTgH5kEfmP8GaFPDPUTerJsDkWZcj26wtOxRCiTDDp0QmuLGbdW'),(10,'timhortons','coffee'),(11,'timhortons','$2y$10$.BU1rWKW4SgNW464hNKhruCFtk5QMl36CFRb2pYnxRvjwFOL6zjp2'),(12,'barry','white'),(13,'jack','$2y$10$Cq//ivZQyv8eiQHy.kFWue/Ba7ZR75zZ7zNBkIHHbSMgLpkCuvxTO'),(14,'NewUser','$2y$10$rtNTpjd5aYrL0gbYTlKAo.Y1Lj0t1bgZI5NzdAe8KItOaRzG1ngPi'),(15,'NewUser','$2y$10$s.pGB2uwXheE7xP4PAHQaOthF3dPPcdsAn618DxUqHrfqk9Q43R8K'),(16,'AnotherUser','$2y$10$sRAb.rbfCCRZ5hVfEnOvUuwzbJBa.jweiILq/nJ0G2uB60dSNSN8i');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-16 22:34:31
