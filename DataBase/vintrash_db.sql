-- MmoviesmoviesySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: vintrash_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_avatar` varchar(150) NOT NULL,
  `user_date` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_UNIQUE` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COMMENT='			';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Emilia','emilia@brai.com.ar','$2y$10$QuhEMB50.bs63JvXxL8/A.8qvZAexkjcBzbjKe','',''),(2,'joaquin','joaquin@brai.com','$2y$10$H.n8GcfcOa2EjbVAArmzd.xyTYh1gWuOKJtWSj','5cf2c6e8e9b29.jpg','1994'),(3,'Lulitus!','cavagnalucia@gmail.com','$2y$10$.nlwFcLqUnLhFiT7e6vDh.F5d3ZxmPwXt5Hsoq','5cf3129fe75c0.jpeg','1985'),(4,'Brai!','brai@brai.com','$2y$10$nat.YFk8mx3oseEpNvz.2e/vc78Iec5k1x8j7/','5cf427bb6aaf4.jpeg','1995'),(5,'Luvi','luvi@luvi.com.ar','$2y$10$8N4wUb8mcTvtUdeZloEYeOFk1OW0SNQ/RZZ/dO','5cf432f024332.jpeg','1985'),(6,'Cecilia','ceci@pio.com.ar','$2y$10$xnXJFzDiK6Yh0xk0Z3aLeuAXmnCJOe71cz2.s1','5cf440959a651.jpeg','1991'),(7,'Facu','facu@facu.com.ar','$2y$10$l4fTbKSla0t/XujUzeW6VewfcHS9N/wmUIc6cI','5cf44963ab752.jpeg','1996');
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

-- Dump completed on 2019-06-02 19:27:10
