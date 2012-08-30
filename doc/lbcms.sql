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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lb_channel`
--

LOCK TABLES `lb_channel` WRITE;
/*!40000 ALTER TABLE `lb_channel` DISABLE KEYS */;
INSERT INTO `lb_channel` VALUES (1,'首页','index',0,NULL),(2,'历史','setting',0,NULL),(3,'足底测试','update',0,NULL),(4,'装备指导','dataup',0,NULL),(5,'足部保护','setting1',0,NULL),(6,'训练','setting2',0,NULL),(7,'体验中心','setting3',0,NULL),(8,'专家咨询','setting4',0,NULL),(10,'焦点图','uploadfile',1,NULL),(11,'运动服务','uploadfile',1,NULL),(12,'冠军体验','uploadfile',1,NULL),(13,'专家咨询','uploadfile',1,NULL),(14,'装备测评','uploadfile',1,NULL),(15,'装备指导','uploadfile',1,NULL),(16,'足部保护','uploadfile',1,NULL),(17,'滚动图片','uploadfile',1,NULL),(18,'焦点图','uploadfile',2,NULL),(19,'焦点图','uploadfile',3,NULL),(20,'焦点图','uploadfile',4,NULL),(21,'焦点图','uploadfile',5,NULL),(22,'焦点图','uploadfile',6,NULL),(23,'焦点图','uploadfile',7,NULL),(24,'焦点图','uploadfile',8,NULL),(26,'添加信息','uploadfile',2,NULL),(27,'添加信息','uploadfile',3,NULL),(28,'添加信息','uploadfile',4,NULL),(29,'添加信息','uploadfile',5,NULL),(30,'添加信息','uploadfile',6,NULL),(31,'添加信息','uploadfile',7,NULL),(32,'添加信息','uploadfile',8,NULL),(41,'配置','webset',0,NULL),(42,'网站配置','webset',41,NULL),(43,'友情链接','uploadfile',41,NULL),(44,'留言','uploadfile',1,NULL),(45,'联系我们','uploadfile',1,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=313 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lb_data`
--

LOCK TABLES `lb_data` WRITE;
/*!40000 ALTER TABLE `lb_data` DISABLE KEYS */;
INSERT INTO `lb_data` VALUES (266,10,NULL,'http://www.hiccer.com','1346254045.jpg','焦点图一','','','',NULL),(267,10,NULL,'http://www.hiccer.com','1346254145.jpg','焦点图二','','','',NULL),(268,10,NULL,'http://www.hiccer.com','1346254157.jpg','焦点图三','','','',NULL),(269,12,NULL,'http://www.hiccer.com','1346255725.png','测试','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(270,12,NULL,'http://www.hiccer.com','1346256161.jpg','再次测试','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(271,17,NULL,'http://www.hiccer.com','1346256462.png','测试','','','',NULL),(272,17,NULL,'http://www.hiccer.com','1346256469.png','测试','','','',NULL),(273,17,NULL,'http://www.hiccer.com','1346256476.png','标题','','','',NULL),(274,17,NULL,'http://www.hiccer.com','1346256484.jpg','标题','','','',NULL),(275,17,NULL,'http://www.hiccer.com','1346256494.png','焦点图','','','',NULL),(276,17,NULL,'http://www.hiccer.com','1346256501.png','爱的发的','','','',NULL),(277,17,NULL,'http://www.hiccer.com','1346256510.png','顶顶顶顶顶顶','','','',NULL),(278,17,NULL,'http://www.hiccer.com','1346256534.png','标题','','','',NULL),(279,17,NULL,'http://www.hiccer.com','1346256541.png','爱的发的','','','',NULL),(289,14,NULL,'http://www.hiccer.com','','装备测评','','','http://player.youku.com/player.php/Type/Folder/Fid/16972133/Ob/1/sid/XMzQxNjMzOTcy/v.swf<br />',NULL),(290,11,NULL,'http://www.hiccer.com','','运动服务','','','http://player.youku.com/player.php/Type/Folder/Fid/16972133/Ob/1/sid/XMzQxNjMzOTcy/v.swf<br />',NULL),(291,13,NULL,'http://www.hiccer.com','1346341260.png','专家咨询','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(292,15,NULL,'http://www.hiccer.com','1346341300.png','装备指导','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(294,16,NULL,'http://www.hiccer.com','1346341812.png','足部保护','在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右； ','Uitgebreid gamma functionele schoenen, technische loopkledij, hartslag- en afstandsmeters, sportvoeding en compressie kleding. ','',NULL),(295,43,NULL,'http://www.hiccer.com','','最新软件游戏','','','',NULL),(296,43,NULL,'http://www.baidu.com','','百度','','','',NULL),(297,44,NULL,'http://www.baidu.com','1346343023.png','留言','','','',NULL),(298,45,NULL,'http://www.hiccer.com','1346343264.png','联系我们','','','',NULL),(299,18,NULL,'http://www.hiccer.com','1346345739.jpg','二级页面','','','',NULL),(300,19,NULL,'http://www.hiccer.com','1346347050.jpg','标题','','','',NULL),(301,20,NULL,'http://www.hiccer.com','1346347069.jpg','爱的发的','','','',NULL),(302,21,NULL,'http://www.baidu.com','1346347091.jpg','爱的发的','','','',NULL),(303,22,NULL,'http://www.hiccer.com','1346347106.jpg','顶顶顶顶顶顶','','','',NULL),(304,23,NULL,'http://www.hiccer.com','1346347120.jpg','测试','','','',NULL),(305,24,NULL,'http://www.baidu.com','1346347128.jpg','测试','','','',NULL),(306,26,NULL,'http://www.baidu.com','1346347462.png','中华文明的历史','中华文明的历史来啦。。。。','afads alfgjadsofijasdof j aldgk jaofiasd ','斯蒂芬个梵蒂冈舒服多干活afg阿飞是鬼斧神工是梵蒂冈是大法官双方各和规范化是大法官放松放松个富商大贾富商大贾双方各是梵蒂冈双方各松岛枫该是梵蒂冈松岛枫硅酸钙松岛枫<br />',NULL),(307,26,NULL,'http://www.hiccer.com','1346348940.png','再来个历史','阿东加咖啡了空间阿东阿道夫啊阿道夫啊发地方阿道夫的按时发送到爱的色放奥德赛飞','adsfa dfad fadsf asdf adsf asgfghdfghjfjkkfsflkja asjdhf ajsd fasd f','asdf鬼斧神工阿斯蒂芬发给发电公司合肥广东话是特瑞生日该死的风格十多个松岛枫和大是大非松岛枫阿斯蒂芬阿斯顿阿斯蒂芬阿斯蒂芬阿斯蒂芬阿斯顿<br />',NULL),(308,26,NULL,'http://www.baidu.com','1346349045.png','历史','阿道夫阿道夫阿凡达','gsfg fsd gasd fasf','adsf a广发刚阿斯顿发达爱的色放阿斯蒂芬<br />',NULL),(309,26,NULL,'http://www.baidu.com','1346349078.png','重来历史','阿斯蒂芬爱的风格啊奥德赛爱的色放啊','adf ad afg ths haeeradfad caf ad ','&nbsp;asdf奋斗刚发的sdFADASF ADS DASF ADF ASD adf a阿道夫苟富贵规范是史蒂夫阿东<br />',NULL),(310,28,NULL,'adfasf','1346350280.png','爱的发的','地方爱的色放是','fasd fasdf ds f','fasdf dsf放大师傅的说法随碟附送<br />',NULL),(311,28,NULL,'http://www.hiccer.com','1346350580.png','测试帖','做个测试用','this is a test ','一、引言 <br />\r\n　　电子商务和微博应该说都是时下互联网界的热点。说到微博，是无人不知无人不晓。而电子商务则正在全国范围内快速地开展，并逐渐走进网民的视野中，是<a href=\"http://www.studa.net/company/\">企业</a>做买卖必不可少的一个<a href=\"http://www.studa.net/network/\">网络</a>途径，也是被众多互联网人士极为看好的一个产业。 <br />\r\n　　微博虽然刚兴起不久，但其简练、互动、便捷的特性，已然吸引了<a href=\"http://www.studa.net/china/\">中国</a>数亿网民的使用。电子商务网站让专人来策划并定期更新品牌微博，通过各类焦点话题、个性文章、特色活动，来吸引众多网民。微博就像“碧玉刀”一样，需要用智慧和感觉去驾驭。 <br />\r\n　据易观智库近日发布的报告：2009年我国微博注册用户只有800万，而2010年已经超过7500万，增速高达837.5%，而明后两年这一数字预计\r\n将分别达到1.45亿和2.4亿。微博，作为Web2.0的突出应用，已成为各大互联网大鳄新的争夺目标，也将是未来盈利的爆发点，俨然成为一个电子商务\r\n的新战场。 <br />\r\n　　二、解读微博 <br />\r\n　　微博，即微博客（MicroBlog）的简称，是一个基于用户关系的信息分享、传播以及获取平台，用\r\n户可以通过WEB、WAP以及各种客户端组件个人社区，以140字左右的文字更新信息，并实现即时分享。它的特点是简单便捷，随时随地，可以实现实时交流\r\n的一种网络沟通方式。 <br />\r\n　　那么电子商务和微博的交接点是什么呢？推广或者说营销，微博是广大网民沟通的即时平台，它本身所具有的特点就决定了如\r\n果利用微博做推广，一旦成功则产生的效果将是强烈的。如果将微博所带来的人际传播、口碑营销的效应引入到商业应用中，则能够给企业网络营销效果添柴加火。 <br />\r\n　　目前，国内主要网络平台都已经开通了微博服务，微博用户量与日剧增，这一<a href=\"http://www.studa.net/fazhan/\">发展</a>趋\r\n势对于电子商务利用微博做推广无疑是有利的。人多的地方就有市场的存在，也就有商业机会在等着我们去挖掘，广大做网络交易的企业岂可错过？所以说，做电子\r\n商务的企业有必要去开个微博，最好各大平台都开一个，在第一时间发布最新的企业动态。想方设法地让更多的人来关注自己的微博，并且更大范围地传播出去是我\r\n们做微博营销的目标，针对这个目标，策划方案，发什么样的内容比较适合，怎样通过发布内容将企业宣传出去……通过微博，不仅是为博得商业交易，还可以传播\r\n企业思想，企业文化等，使用微薄，对于做电子商务的企业很有必要。 <br />\r\n　　三、企业怎样运用微博 <br />\r\n　　2010年，随着新浪、腾讯、网易、搜狐等四大门户加入微博大战后，微博成为社交媒体中用户最炙手可热、活跃的平台，同时彻底改变了媒体和信息传播模式，调查发现，80%以上的用户使用微博进行过信息搜索，而微博上的热议话题也能变为社会焦点话题。 <br />\r\n　从微博上“抢人、抢地盘”已经不仅限于各大门户，微博正在被越来越多的电子商务企业所重视，当各家电子商务还停留在比拼价格、物流战时，已经有不少聪明\r\n的商家先瞄准了“微博”这个天然的“土壤”。如淘宝商城、1号店、中粮我买网、趣玩网等B2C商城都纷纷入驻微博，并建立了自己的微群。而从第一条微博的\r\n发布时间来看，凭借创意百货出名的趣玩网是第一家入驻微博这块宝地的企业。 <br />\r\n　　微博，正凭借其势不可挡的发展势头，开启了电子商务“微营销”的一扇新门。 <br />\r\n　　一般来说，企业开微博，都有好几个账号，最主要的账号有两个，一个是企业名称或者品牌的微博，比如“阿里巴巴”这个账号，另外一个是企业负责人的账号。所以，不一定非常适合非常非常忙，创业艰难期的朋友。 <br />\r\n　企业品牌账号，不可以一上来就发广告，要先定位，依据你所在的行业，多谈你的行业，人、事、产品，甚至一些公益的事情，比如转发下需要捐款的病人的信\r\n息，不涉及反动言论的一些新闻事件等。企业的账号，除了发布企业的新闻外，还可以做成你这个行业的知识库，比如你是做服装批发的，把服装批发的一些东西写\r\n出来，甚至是不伤大雅的一些“内幕”，都可以。 <span>转贴于 中国论文下载中心 http://www.studa.ne</span><br />',NULL),(312,32,NULL,'http://www.hiccer.com','1346352395.png','专家咨询','咨询自诩咨询','ads;flsad\r\nf ;aglnaiodjf;asid f;alds ','松岛枫嘎斯的发地方个后您回复进一步看反倒是噶尔ＡＥＤａｓ　阿凡达爱的安抚阿斯蒂芬爱的发地方艾丝凡安抚安抚阿发放到啊发飞舒服啊飞<br />',NULL);
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

-- Dump completed on 2012-08-31  2:54:36
