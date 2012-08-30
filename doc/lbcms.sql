-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: lbcms
-- ------------------------------------------------------
-- Server version	5.5.16

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
-- Table structure for table `lb_channel`
--

DROP TABLE IF EXISTS `lb_channel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lb_channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chname` varchar(20) NOT NULL,
  `chfile` varchar(50) DEFAULT NULL,
  `chparent` tinyint(4) NOT NULL DEFAULT '0',
  `chsort` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lb_channel`
--

LOCK TABLES `lb_channel` WRITE;
/*!40000 ALTER TABLE `lb_channel` DISABLE KEYS */;
INSERT INTO `lb_channel` VALUES (1,'首页','index',0,NULL),(2,'历史','setting',0,NULL),(3,'足底测试','update',0,NULL),(4,'装备指导','dataup',0,NULL),(5,'足部保护','setting1',0,NULL),(6,'训练','setting2',0,NULL),(7,'体验中心','setting3',0,NULL),(8,'专家咨询','setting4',0,NULL),(10,'焦点图','uploadfile',1,NULL),(11,'运动服务','uploadfile',1,NULL),(12,'冠军体验','uploadfile',1,NULL),(13,'专家咨询','uploadfile',1,NULL),(14,'装备测评','uploadfile',1,NULL),(15,'装备指导','uploadfile',1,NULL),(16,'足部保护','uploadfile',1,NULL),(17,'滚动图片','uploadfile',1,NULL),(18,'焦点图','uploadfile',2,NULL),(19,'焦点图','uploadfile',3,NULL),(20,'焦点图','uploadfile',4,NULL),(21,'焦点图','uploadfile',5,NULL),(22,'焦点图','uploadfile',6,NULL),(23,'焦点图','uploadfile',7,NULL),(24,'焦点图','uploadfile',8,NULL),(26,'添加信息','uploadfile',2,NULL),(27,'添加信息','uploadfile',3,NULL),(28,'添加信息','uploadfile',4,NULL),(29,'添加信息','uploadfile',5,NULL),(30,'添加信息','uploadfile',6,NULL),(31,'添加信息','uploadfile',7,NULL),(32,'添加信息','uploadfile',8,NULL),(34,'信息列表',NULL,2,NULL),(35,'信息列表',NULL,3,NULL),(36,'信息列表',NULL,4,NULL),(37,'信息列表',NULL,5,NULL),(38,'信息列表',NULL,6,NULL),(39,'信息列表',NULL,7,NULL),(40,'信息列表',NULL,8,NULL);
/*!40000 ALTER TABLE `lb_channel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lb_data`
--

DROP TABLE IF EXISTS `lb_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lb_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cateId` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `linkUrl` text,
  `images` varchar(50) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `cn_describe` text,
  `en_describe` text,
  `content` text,
  `insertDate` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lb_data`
--

LOCK TABLES `lb_data` WRITE;
/*!40000 ALTER TABLE `lb_data` DISABLE KEYS */;
INSERT INTO `lb_data` VALUES (266,10,NULL,'http://www.hiccer.com','1346254045.jpg','焦点图一','','','',NULL),(267,10,NULL,'http://www.hiccer.com','1346254145.jpg','焦点图二','','','',NULL),(268,10,NULL,'http://www.hiccer.com','1346254157.jpg','焦点图三','','','',NULL),(269,12,NULL,'http://www.hiccer.com','1346255725.png','测试','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(270,12,NULL,'http://www.hiccer.com','1346256161.jpg','再次测试','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(271,17,NULL,'http://www.hiccer.com','1346256462.png','测试','','','',NULL),(272,17,NULL,'http://www.hiccer.com','1346256469.png','测试','','','',NULL),(273,17,NULL,'http://www.hiccer.com','1346256476.png','标题','','','',NULL),(274,17,NULL,'http://www.hiccer.com','1346256484.jpg','标题','','','',NULL),(275,17,NULL,'http://www.hiccer.com','1346256494.png','焦点图','','','',NULL),(276,17,NULL,'http://www.hiccer.com','1346256501.png','爱的发的','','','',NULL),(277,17,NULL,'http://www.hiccer.com','1346256510.png','顶顶顶顶顶顶','','','',NULL),(278,17,NULL,'http://www.hiccer.com','1346256534.png','标题','','','',NULL),(279,17,NULL,'http://www.hiccer.com','1346256541.png','爱的发的','','','',NULL);
/*!40000 ALTER TABLE `lb_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lb_members`
--

DROP TABLE IF EXISTS `lb_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lb_members` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `losttime` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lb_members`
--

LOCK TABLES `lb_members` WRITE;
/*!40000 ALTER TABLE `lb_members` DISABLE KEYS */;
INSERT INTO `lb_members` VALUES (1,'hiccer','1b118a0785063eb3f24ee4fe5a64ac76',NULL);
/*!40000 ALTER TABLE `lb_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lb_settings`
--

DROP TABLE IF EXISTS `lb_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lb_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webHost` char(50) DEFAULT NULL,
  `webName` char(100) DEFAULT NULL,
  `webKey` text,
  `webDescribe` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lb_settings`
--

LOCK TABLES `lb_settings` WRITE;
/*!40000 ALTER TABLE `lb_settings` DISABLE KEYS */;
INSERT INTO `lb_settings` VALUES (1,'http://www.hiccer.com','爱尔思康跑步服务实验室','爱尔思康跑步服务实验室','爱尔思康跑步服务实验室');
/*!40000 ALTER TABLE `lb_settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-08-30  0:18:40
