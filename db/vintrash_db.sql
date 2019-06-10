-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: vintrash_db
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilepic` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date NOT NULL,
  `registerdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modificationdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Pepote','pepote2@pepote.com','Pepelin5421','/images/pepe.jpg','2019-06-06','2019-06-09 19:17:07','2019-06-09 19:23:35'),(4,'Manolito','a@b.com','adgasdg','images/pepefoto','2019-06-07','2019-06-09 19:17:07','2019-06-09 19:22:21'),(5,'Juancito','c@d.com','124sdgasdg','images/pepefoto','2019-06-07','2019-06-09 19:17:07','2019-06-09 19:22:21'),(6,'Ricardito','q@s.com','sdgas1asdg','images/pepefoto','2019-06-07','2019-06-09 19:17:07','2019-06-09 19:22:21'),(7,'Mocolin','z@w.com','54654asfasf','images/pepefoto','2019-06-07','2019-06-09 19:17:07','2019-06-09 19:22:21'),(8,'Taradin','q@k.com','sdgasd2','images/pepefoto','2019-06-07','2019-06-09 19:17:07','2019-06-09 19:22:21'),(9,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(10,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(11,'Osvaldete','pepe@pepe.com','$2y$10$8gldyjY9xqBJ9csKP00eIOZo/cc5ZGDNGav.fA','userimages/5cfbd80e801f5.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(12,'Sabadabada','saba@saba.com','$2y$10$pMfQQlJMiX9zB/r7LCJHIuhVmeK8a0pNyiza8K','userimages/5cfbd8b1b432d.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(13,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(14,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(15,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(16,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(17,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(18,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(19,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(20,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(21,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(22,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(23,'Ricardete','bluelachrymologist@gmail.com','$2y$10$hXPVHbFDZ77U8GDLWLjiBudmwBfQZh44Af56JB','userimages/5cfbdd2155331.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(24,'memememe','Pearp@pepe.com','$2y$10$cMk6quNcYLtlRJ4lO88ller3fOivV2o0WpPv5Q','userimages/5cfbddee56b3f.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(25,'mimama','mimama@tuvieja.com','$2y$10$pBio6MBrwJyVvsQ4YsIyUOGTX8BFVZYG7xg2mi','userimages/5cfbdf2ca43db.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(26,'tuvieja','tuvieja@mimama.com','$2y$10$IQi5LxeqgOh3yhSJvZi6BOg9SDpRgsVwwnr1PZ','userimages/5cfbdfbf5fde0.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(27,'dfgjdj','sdfas@fhghrt.com','$2y$10$R5z.lAmvEa4Qqg.GeuZzDeLbZ7MtMarMao88XB','userimages/5cfbdffdbeaad.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(28,'Facundo Fierro','facuy2k@hotmail.com','facuy2k@hotmail.com','images/pepe.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(29,'Sabadabada1','Pepe201@pepe20.com','$2y$10$wgGmjG/p/u2GK14V1cNYwu4iDtqxjmayQakAI7','userimages/5cfbe11623039.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(30,'Sabadabada11','Pepe201@pepe230.com','$2y$10$vEvPUQhFDNrzSs9ZcpDfOOK1JIdyz/GWQzMd/A','userimages/5cfbe18230872.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(31,'Sabadabada123','gafasdgh@32twesdg.com','$2y$10$RWaA21Xvv6WWV4KnVENWre/eXvHny5ks4wdFiC','userimages/5cfbe331a557e.jpg','0000-00-00','2019-06-09 19:17:07','2019-06-09 19:22:21'),(32,'Sabadabada432','sdhsdf@dhsdh.com','$2y$10$NuqjdFajNLL9ikfHhiJmCeAI/29hp6oEa4i7jY','userimages/5cfbe3bd93ff6.jpg','1931-11-18','2019-06-09 19:17:07','2019-06-09 19:22:21'),(33,'Fakars','fakuy2k@gmail.com','$2y$10$FVMAU3XHZ/rBZtt2/1HXreIKoitMQVfw4kLw/c','userimages/5cfbe4438b44e.jpg','1985-09-18','2019-06-09 19:17:07','2019-06-09 19:22:21'),(34,'arsfak','fak@fak.com','$2y$10$zwlorccM4K/SiAK3kQhW6OB3cPtxQnr.bynLe9x96HR7D60hpKDqe','userimages/5cfbe6c37cc17.jpg','1956-08-18','2019-06-09 19:17:07','2019-06-09 19:22:21'),(35,'facu123','facu123@opasf.com','$2y$10$AyW5ek0UsvP.d4Jn9rxoQeev.OF0z1H/Xs8fy7kwjUfVqTscb/e3e','userimages/5cfbec055bd07.jpg','1947-07-16','2019-06-09 19:17:07','2019-06-09 19:22:21'),(36,'Awarawazu','pe@ue.com','$2y$10$QqUo6rx/g2.jWlXmAQtCjubiYm0obBZATM5OBl3eH3J39lWW8w6KG','userimages/5cfd2a9e79e40.jpg','1968-11-16','2019-06-09 19:17:07','2019-06-09 19:22:21'),(37,'TestTimeStamp','test@test.com','$2y$10$uNlMez0fhd7pnHzxzmOmMuW/xvSZB0Rhj0akqg8gVFAPu4NTqUwtK','userimages/5cfd85990db5c.jpg','1966-12-17','2019-06-09 19:18:01','2019-06-09 19:22:21'),(38,'TestFecha','testfecha@test.com','$2y$10$Y0LXC/jdcbytNYESc7tIF.a7afIONhWNrQJKWC10SDSBy0P59yDha','userimages/5cfd8bf9da909.jpg','2001-06-08','2019-06-09 19:45:13','2019-06-09 19:45:13'),(39,'testfecha2','testfecha2@test.com','$2y$10$.GT3slh745qFpjdy/pexou..c84RHlAygxf0AmCNszSGEAy05eMki','userimages/5cfd8cb89cfff.jpg','1985-02-28','2019-06-09 19:48:24','2019-06-09 19:48:24');
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

-- Dump completed on 2019-06-09 21:56:19
