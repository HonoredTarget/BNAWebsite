-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: bnawebsite
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `messageboard`
--

DROP TABLE IF EXISTS `messageboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messageboard` (
  `idmessageboard` int(11) NOT NULL AUTO_INCREMENT,
  `message` mediumtext NOT NULL,
  `title` varchar(45) NOT NULL,
  `dateSubmited` varchar(45) NOT NULL,
  PRIMARY KEY (`idmessageboard`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='The Main Message Board';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messageboard`
--

LOCK TABLES `messageboard` WRITE;
/*!40000 ALTER TABLE `messageboard` DISABLE KEYS */;
INSERT INTO `messageboard` VALUES (1,'This is the message of the first message.','New Website','10:02 PM 7/18/2018'),(2,'This is the message of the second message','I Should be First','7:15 PM 7/19/2018'),(3,'This is the message of the third message','No, I Should Be First','7:23 PM 7/19/2018'),(4,'This is the message of the fourth message','Look, I Want To Be First','7:39 PM 7/19/2018'),(5,'This Is Dads Message','This is the Title','12:00 AM 7/20/2018'),(6,'Just Another Message','Just Another Title','7:02 AM 7/20/2018'),(7,'Emal Body','Message Title','08:02 pm 07/20/18'),(8,'Text ','Test','08:06 pm 07/20/18'),(9,'Test ','Test','08:08 pm 07/20/18'),(10,'q','q','11:37 pm 07/20/18');
/*!40000 ALTER TABLE `messageboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `optForEmail` varchar(45) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Owen','Oertell','owen@oertell.net','yes'),(2,'Rebecca','Oertell','rebecca@oertell.net','yes'),(3,'Ron','Oertell','ron@oertell.net','yes'),(10,'Chloe','Oertell','chloe@oertell.net','yes'),(11,'Nate','Oertell','nate@oertell.net','no');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websitetext`
--

DROP TABLE IF EXISTS `websitetext`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `websitetext` (
  `idwebsitetext` int(11) NOT NULL AUTO_INCREMENT,
  `identifier` varchar(45) NOT NULL,
  `text` mediumtext NOT NULL,
  PRIMARY KEY (`idwebsitetext`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='The Text of the Website';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websitetext`
--

LOCK TABLES `websitetext` WRITE;
/*!40000 ALTER TABLE `websitetext` DISABLE KEYS */;
INSERT INTO `websitetext` VALUES (1,'homeHead','Hello From John Doe!'),(2,'homeBody','It must be getting early, clocks are running late Paint-by-number morning sky looks so phony Dawn is breaking everywhere, light a candle, curse the glare Draw the curtains, I don\'t care \'cause it\'s alright I will get by I will get by I will get by I will survive I see you\'ve got your list out, say your piece and get out Guess I get the gist of it, but it\'s alright Sorry that you feel that way, the only thing there is to say Every silver lining\'s got a touch of grey I will get by I will get by I will get by I will survive<br>'),(3,'memberHead','Why Should You Join?'),(4,'memberPic','img/pic.jpg'),(5,'homePic','img\\portrait-landscape.jpg'),(6,'memberText','There\'s a lady who\'s sure All that glitters is gold And she\'s buying a stairway to heaven When she gets there she knows If the stores are all closed With a word she can get what she came for Oh oh oh oh and she\'s buying a stairway to heaven There\'s a sign on the wall But she wants to be sure \'Cause you know sometimes words have two meanings In a tree by the brook There\'s a songbird who sings Sometimes all of our thoughts are misgiving Ooh, it makes me wonder Ooh, it makes me wonder There\'s a feeling I get When I look to the west And my spirit is crying for leaving In my thoughts I have seen');
/*!40000 ALTER TABLE `websitetext` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-21  0:45:30
