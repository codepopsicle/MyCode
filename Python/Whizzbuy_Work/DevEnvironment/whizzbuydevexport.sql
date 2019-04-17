-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: whizzbuydev.c1vkqotq7mru.us-west-2.rds.amazonaws.com    Database: whizzbuydev
-- ------------------------------------------------------
-- Server version	5.6.27-log

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
-- Table structure for table `adcount`
--

DROP TABLE IF EXISTS `adcount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adcount` (
  `Type` enum('1','2') NOT NULL,
  `Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adcount`
--

LOCK TABLES `adcount` WRITE;
/*!40000 ALTER TABLE `adcount` DISABLE KEYS */;
INSERT INTO `adcount` VALUES ('1',200),('2',500);
/*!40000 ALTER TABLE `adcount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adlikelist`
--

DROP TABLE IF EXISTS `adlikelist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adlikelist` (
  `advertid` varchar(20) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `inserttime` varchar(45) DEFAULT NULL,
  `isLiked` int(11) DEFAULT NULL,
  PRIMARY KEY (`advertid`,`MobileNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adlikelist`
--

LOCK TABLES `adlikelist` WRITE;
/*!40000 ALTER TABLE `adlikelist` DISABLE KEYS */;
INSERT INTO `adlikelist` VALUES ('5','7506091276','2016-02-27 22:47:19',1),('6','7506091276','2016-02-27 22:47:19',1);
/*!40000 ALTER TABLE `adlikelist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `advertlist`
--

DROP TABLE IF EXISTS `advertlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advertlist` (
  `advertid` int(11) NOT NULL AUTO_INCREMENT,
  `merchantcode` varchar(40) NOT NULL,
  `adimage` varchar(200) NOT NULL,
  `pricingmarker` enum('1','2') NOT NULL,
  `advertproductcode` varchar(40) DEFAULT '123456',
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `viewcount` int(11) NOT NULL DEFAULT '0',
  `clickcount` int(11) NOT NULL DEFAULT '0',
  `purchasecount` int(11) NOT NULL DEFAULT '0',
  `purchaselist` varchar(200) DEFAULT NULL,
  `isactive` enum('0','1','2','3','4','5','6') NOT NULL DEFAULT '0',
  `clicklist` varchar(200) DEFAULT NULL,
  `adlocation` varchar(60) DEFAULT NULL,
  `adlifestyle` int(11) NOT NULL,
  `advertprodname` varchar(60) DEFAULT NULL,
  `adruntime` int(11) NOT NULL,
  `adruntimecount` int(11) NOT NULL,
  `vcperday` int(11) NOT NULL DEFAULT '0',
  `ccperday` int(11) NOT NULL DEFAULT '0',
  `addesc` varchar(1000) NOT NULL,
  `notiftext` varchar(255) DEFAULT NULL,
  `notiftextdisplay` varchar(1000) DEFAULT NULL,
  `adtype` enum('1','2') NOT NULL,
  `adverteventname` varchar(255) DEFAULT NULL,
  `interdate` datetime NOT NULL,
  `duration` datetime NOT NULL,
  `rejectreason` varchar(255) DEFAULT NULL,
  `likecount` int(11) DEFAULT NULL,
  `adtitle` varchar(100) DEFAULT NULL,
  `parentbrand` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`advertid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertlist`
--

LOCK TABLES `advertlist` WRITE;
/*!40000 ALTER TABLE `advertlist` DISABLE KEYS */;
INSERT INTO `advertlist` VALUES (1,'vfv ','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/95007-dingo-medium-pack-p.jpg','2','123456','2016-01-16','2016-01-19',34,65,56,'75675675ghbujhnk','2','hhjnj','kjnkjnmk',1,'nkjnk',123,342,34,34,'cgfv hjb mb mn , mn m nm b ','gvbjhb','fvhgbjk,','2','jn kjmn','2015-12-31 09:30:25','2015-12-30 09:00:00',NULL,NULL,NULL,NULL),(3,'NATU1','https://whizzbuydemo.s3.amazonaws.com/Premium_Ad/lavera-special-offer-free-mango-hair-treatment-zoom.jpg','1','123456','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,NULL,0,NULL,5,5,0,0,'the description','small description','big description','1','TheEvent','0000-00-00 00:00:00','0000-00-00 00:00:00','lolu',NULL,NULL,NULL),(4,'NATU1','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/500-520102-894__1%20%281%29.jpg','2','11447852','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,NULL,0,'Engineering',14,14,0,0,'1',NULL,NULL,'1',NULL,'2015-11-01 00:00:00','0000-00-00 00:00:00','lllll',NULL,NULL,NULL),(5,'NATU1','https://whizzbuydemo.s3.amazonaws.com/Premium_Ad/stanley-bostitch-shoplet-giveaway.jpg','1','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,12,'50 % off at Natures Basket','Godrej'),(6,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Premium_Ad/rock.jpg','1','123','2016-01-16','2016-01-19',0,0,0,NULL,'3',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(7,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Premium_Ad/pedigree-healthy_joints.jpg','1','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(8,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/lavera-special-offer-free-mango-hair-treatment-zoom.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(9,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/Invite-500x500.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(10,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/images.jpeg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(11,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/combo_offer_36.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(12,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/biotech-usa_pro-protein-bar-60-g_1.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(13,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/Adidas-Outdoor-070_2.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(14,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/ac89306d9562dd092a6f125aec60eccb.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL),(15,'NATU2','https://whizzbuydemo.s3.amazonaws.com/Standard_Ad/9556001132093_5.jpg','2','123','2016-01-16','2016-01-19',0,0,0,NULL,'2',NULL,'Mumbai',1,'Pet',5,5,0,0,'abcd','abcd','abcd','1',NULL,'2016-01-05 00:00:00','0000-00-00 00:00:00',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `advertlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clicklist`
--

DROP TABLE IF EXISTS `clicklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clicklist` (
  `MobileNumber` varchar(20) DEFAULT NULL,
  `Advertid` varchar(45) DEFAULT NULL,
  `Inserttime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clicklist`
--

LOCK TABLES `clicklist` WRITE;
/*!40000 ALTER TABLE `clicklist` DISABLE KEYS */;
INSERT INTO `clicklist` VALUES ('7506091276','5','2016-02-26 00:28:36'),('7506091276','5','2016-02-27 00:06:03'),('7506091276','5','2016-02-27 00:09:01'),('7506091276','5','2016-03-04 19:52:08'),('7506091276','5','2016-03-07 15:20:40');
/*!40000 ALTER TABLE `clicklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `MobileNumber` varchar(10) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `EmailID` varchar(45) DEFAULT NULL,
  `Message` varchar(200) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES ('3216549870','Malay Satapathy','hello@gmail.com','(1062, \"Duplicate entry \'8984682823\' for key \'PRIMARY\'\")','2016-03-07 03:32:21'),('7506091276','Pritish Kumar','pritishkishore.mec@gmail.com','The app works well','2016-02-21 15:09:44'),('8984682823','Malay Satapathy','satapathymalay.21@gmail.com','','2016-03-07 03:18:54'),('7506091276','Pritish Kumar','pritishkishore.mec@gmail.com','','2016-03-07 19:22:01'),('7506091276','Pritish','test@gmail.com','','2016-03-07 19:25:56'),('7506091276','Pritish','Hi@gmail.com','','2016-03-07 19:30:12'),('1234567891','Guy','Fg@gmail.com','','2016-03-07 19:31:20');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countdowntimer`
--

DROP TABLE IF EXISTS `countdowntimer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countdowntimer` (
  `PreLaunchDescription` text,
  `PostLaunchDescription` text,
  `LaunchDate` text,
  `TargetAppVersion` text,
  `isDisplayed` int(11) DEFAULT NULL,
  `RunPeriod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countdowntimer`
--

LOCK TABLES `countdowntimer` WRITE;
/*!40000 ALTER TABLE `countdowntimer` DISABLE KEYS */;
INSERT INTO `countdowntimer` VALUES ('This app is in with agreement with teansferret','https://play.google.com/store/apps/details?id=com.whatsapp&hl=en','0000-00-00','https://play.google.com/store/apps/details?id=com.whatsapp&hl=en',1,0),('hgjkng hdfvdjn jndkmvkld','https://play.google.com/store/apps/details?id=com.whatsapp&hl=en','2015-12-17','https://play.google.com/store/apps/details?id=com.whatsapp&hl=en',1,0),('','','0000-00-00','',0,0),('ded','fref','2015-12-09','rfes',1,0),('fr4er','tr5tf','2090-09-09','adswed',0,0),('trial','trial','2020-09-09','dsvccd',1,0),('trial','trial','2020-09-09','dsvccd',1,0),('trial','trial','2020-09-09','dsvccd',1,0),('silly','silly','2019-02-01','dsfs',0,0),('cdfv','vffdv','0000-00-00','vfvf',0,0),('bgngh','nhgnh','0000-00-00','nghn h ',0,0),('asdfg','asdfg','0000-00-00','asdfg',0,0),('','','0000-00-00','',0,0),('cdsc','cdsc','0000-00-00','csdcd',0,0),('vxdv','vxdfv','0000-00-00','vdxv',0,0),('fghn','gfhn','0000-00-00','hfghng',1,0),('m','mhbm','0000-00-00','mhb',0,0),('f','f','0000-00-00','f',0,0),('a','a','0000-00-00','a',0,0),('ht','ht','2000-09-19','ht',0,0),('final','final','0000-00-00','final',0,0),('as','as','0000-00-00','as',0,0),('','','1984-05-15','',0,0),('','','2015-12-18','',0,0);
/*!40000 ALTER TABLE `countdowntimer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerlist`
--

DROP TABLE IF EXISTS `customerlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customerlist` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Auto_Increement',
  `FirstName` varchar(500) DEFAULT NULL,
  `LastName` varchar(500) DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `EmailID` varchar(500) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `LifeStyle` varchar(500) DEFAULT NULL,
  `CustomerAddress` varchar(500) DEFAULT NULL,
  `CheckedIn` int(11) DEFAULT NULL,
  `TypeMarker` enum('1','2') DEFAULT NULL,
  `ProfileImage` varchar(500) DEFAULT NULL,
  `SavedAd` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CustomerID`),
  CONSTRAINT `CustomerList_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerlist`
--

LOCK TABLES `customerlist` WRITE;
/*!40000 ALTER TABLE `customerlist` DISABLE KEYS */;
INSERT INTO `customerlist` VALUES (1,'Abdul','Kalam',NULL,'abdul@gmail.com','1994-12-01','1','nji, bujnjkn',1,'1','c:\\file\\api.png',NULL),(2,'Johny','Depp',NULL,'depp@gmail.com','0000-00-00','1,2','California, USA',2,'2',NULL,NULL),(19,'jnk','dscdvfdv',NULL,'vfdv@gmail.com','2000-12-01','1,3','',0,'1',NULL,NULL),(20,'fatema','saifee',NULL,'fsaifee@gmail.com','1994-01-01','1,2,3',NULL,NULL,NULL,'C://Blah/Blah',NULL),(21,'jnk','dscdvfdv',NULL,'vfdv@gmail.com','2000-12-01','2,3',NULL,NULL,'1',NULL,NULL),(165,'Jacob','John',NULL,'jj@gmail.com','1990-12-11','1,0,1',NULL,NULL,'1',NULL,NULL),(167,'dubious','woof',NULL,'pinkwink@gmail.com','2016-01-07',NULL,NULL,NULL,'1',NULL,NULL),(169,'hellooo','mee',NULL,'qwerry@gmail.com','2016-01-06',NULL,NULL,NULL,'1',NULL,NULL),(171,'Malay','Satapathy',NULL,'hello@gmail.com','1995-02-21','1,3',NULL,NULL,'1',NULL,NULL),(172,'Cody','Brian',NULL,'cody@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(173,'Droo','Lius',NULL,'droo@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(174,'Jack','Doe',NULL,'pritishkishore.mec@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(175,'Blah','Blah',NULL,'blahblah@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(177,'Jay','Cutler',NULL,'jay@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(178,'Die','Hard',NULL,'diehard@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(179,'G Kishore','Kumar',NULL,'kishore@gmail.com','2016-01-30',NULL,NULL,NULL,'1',NULL,NULL),(180,'jyoti','jhaaa',NULL,'1335@gmail.com','2016-07-06',NULL,NULL,NULL,'1',NULL,NULL),(181,'Bruce ','Wayne',NULL,'bruce@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(182,'Minnie','Mouse',NULL,'mnm@gmail.con','2016-01-15',NULL,NULL,NULL,'1',NULL,NULL),(183,'4c','i',NULL,'h@gmail.com','2016-01-20',NULL,NULL,NULL,'1',NULL,NULL),(185,'Ample','Sample',NULL,'assam@gmail.com','2015-12-07',NULL,NULL,NULL,'1',NULL,NULL),(189,'Sheddi','Pooran',NULL,'pritishkishore.mec@gmail.com','1990-12-11','1,0,1',NULL,NULL,'1',NULL,NULL),(191,'Vinay ','Singh',NULL,'vnsngh070@gmail.com','1994-03-20',NULL,NULL,NULL,'1',NULL,NULL),(194,'Pritish','Kumar',NULL,'pritishkishore.mec@gmail.com','1990-12-11','1,0,1',NULL,NULL,'1',NULL,NULL),(198,'dddd','ffff',NULL,'ccff@gg.jj','1994-01-06',NULL,NULL,NULL,'1',NULL,NULL),(201,'raghu','sharma',NULL,'raghu@gmail.com','1995-05-10','2',NULL,NULL,'2',NULL,NULL),(203,'fcc','fff',NULL,'fgg@ggg.hhj','2016-02-18',NULL,NULL,NULL,'1',NULL,NULL),(204,'Jacob','John',1,'jj@gmail.com','1990-12-11','1,0,1',NULL,NULL,'1',NULL,NULL),(205,'Jacob','John',2,'jj@gmail.com','1990-12-11','1,0,1',NULL,NULL,'1',NULL,NULL),(206,'Blah','Blah',1,'blah@gmail.com','2016-02-19',NULL,NULL,NULL,'1',NULL,NULL),(208,'Pritish','Kumar',1,'pritishkishore.mec@gmail.com','2016-02-19','0,1,3',NULL,NULL,'1',NULL,NULL),(209,'Malay','Satapathy',1,'satapathymalay.21@gmail.com','1995-02-21','0,2',NULL,NULL,'1',NULL,NULL),(210,'Snehah','Merchant',2,'snehamerchant07@gmail.com','2015-12-07','1,2,6,9,13',NULL,NULL,'1',NULL,NULL),(211,'Vishal','Mishra',1,'vishalmishra357@gmail.com','2016-02-19',NULL,NULL,NULL,'1',NULL,NULL),(214,'Rahim','Kabani',1,'rahimkabani@hotmail.com','2016-03-04','6,10',NULL,NULL,'1',NULL,NULL),(215,'Supratik','Majumdar',1,'supratikmajumdar94@gmail.com','1994-04-02','1,2,9',NULL,NULL,'1',NULL,NULL),(216,'Supratik','Makjumdar',NULL,'supratikmajumdar94@gmail.com','1994-04-02',NULL,NULL,NULL,NULL,NULL,NULL),(217,'Supratik','Makjumdar',NULL,'supratikmajumdar94@gmail.com','1994-04-02',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `customerlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customermaster`
--

DROP TABLE IF EXISTS `customermaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customermaster` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `MobileNO` varchar(13) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  KEY `MobileNO` (`MobileNO`)
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customermaster`
--

LOCK TABLES `customermaster` WRITE;
/*!40000 ALTER TABLE `customermaster` DISABLE KEYS */;
INSERT INTO `customermaster` VALUES (1,'8989898989','1'),(2,'898989898','2'),(10,'56878712','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(11,'568787121','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(12,'56878712112','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(13,'568787121122','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(14,'5687871211221','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(16,'23454378','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(17,'2345437812','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a'),(18,'23454378121','2e2b24f8ee40bb847fe85bb23336a39ef5948e6b49d897419c'),(19,'2345437812112','c913bb9299e6a709ba676ae47a923c09357deabcd59adfd8cc'),(20,'234','c913bb9299e6a709ba676ae47a923c09357deabcd59adfd8cc'),(21,'234234','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a'),(165,'123456009','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c'),(167,'9632587410','ee79976c9380d5e337fc1c095ece8c8f22f91f306ceeb161fa51fecede2c4ba1'),(169,'5874123690','a17444550e2c127b02ea1c197bcffa422c21713040f53d5c2ca7925419bccf7f'),(171,'3216549870','a17444550e2c127b02ea1c197bcffa422c21713040f53d5c2ca7925419bccf7f'),(172,'7506091275','6b5c67ccd47383cc15d868ef01e3c818dd45ecaf6c101ff8117c41aced06d750'),(173,'7506091274','dbd92b61a7be33eb56e429837fccea1a5ebbc4dbc8d96a3edf509caca96fb63b'),(174,'1234567891','f71e4c368ee364e33ea4524c631c6f08391e3ca6b1866fa6e0a6da6369d192b4'),(175,'7894561237','40b1bbb5445fc021a312315379f4633284851e14d1db83fb0730f58872d6033b'),(177,'1472583691','de3ed9abd056667e74d3fef401c8b8ea50bd4c90e06e7d2a77f64a1d9d4a9d53'),(178,'7506091270','360c7141fc07e557eeed389687fe900ccfba05d67b531d8d56f970d3c16aa4a5'),(179,'9947066665','b49e9fbdc3bdede224d8f36d7d4f53c256702e6431b98e477981a44123c2c39b'),(180,'9638527412','5c80565db6f29da0b01aa12522c37b32f121cbe47a861ef7f006cb22922dffa1'),(181,'7506091272','bb1e6527a5c95ce0774f02fe57a85c9aef0cbfb2174fe51a77d563408db45fd9'),(182,'2342342340','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),(183,'1234567898','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),(185,'9987890234','ee79976c9380d5e337fc1c095ece8c8f22f91f306ceeb161fa51fecede2c4ba1'),(189,'8105163623','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c'),(191,'9631732580','a8dd42784f05e96cb533018cce07595c86a1d731bf2628e5b3dea32cde6b8c5a'),(194,'7506091279','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c'),(198,'8875306750','8fafbdfb32bbf48e6b4f480b1e9d57f5685d20f7636862c14eb0070eeee5ca2b'),(201,'6547821452','47612ce52e4b1c5ac125ba4ffbb96053bbbe2c109f321e823106e41372f6548a'),(203,'8875306751','8fafbdfb32bbf48e6b4f480b1e9d57f5685d20f7636862c14eb0070eeee5ca2b'),(204,'123456786','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c'),(205,'1234567832','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c'),(206,'1472581473','40b1bbb5445fc021a312315379f4633284851e14d1db83fb0730f58872d6033b'),(208,'7506091276','bb1e6527a5c95ce0774f02fe57a85c9aef0cbfb2174fe51a77d563408db45fd9'),(209,'8984682823','a17444550e2c127b02ea1c197bcffa422c21713040f53d5c2ca7925419bccf7f'),(210,'9920712205','ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f'),(211,'9479302889','28def0116931f46d81adf52062908d3f184a196d49de1cfcaa7d38122cd13327'),(214,'9920917815','c8e7f8973f75301f03fe793f3d95ec27c71bb8a57574db9a6034b0025e546a3a'),(215,'9051216105','8f0e2f76e22b43e2855189877e7dc1e1e7d98c226c95db247cd1d547928334a9'),(216,'9051216107','8f0e2f76e22b43e2855189877e7dc1e1e7d98c226c95db247cd1d547928334a9'),(217,'9051216109','8f0e2f76e22b43e2855189877e7dc1e1e7d98c226c95db247cd1d547928334a9');
/*!40000 ALTER TABLE `customermaster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customersession`
--

DROP TABLE IF EXISTS `customersession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customersession` (
  `CustomerID` int(11) NOT NULL,
  `Session` varchar(40) DEFAULT NULL,
  `SetOn` datetime DEFAULT NULL,
  `OTP` varchar(50) DEFAULT NULL,
  `OTPCounter` int(11) DEFAULT NULL,
  `SetTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `isVerified` int(1) DEFAULT NULL,
  `LoggedOutOn` datetime DEFAULT NULL,
  `isLoggedIn` int(2) DEFAULT NULL,
  PRIMARY KEY (`CustomerID`),
  CONSTRAINT `CustomerSession_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customersession`
--

LOCK TABLES `customersession` WRITE;
/*!40000 ALTER TABLE `customersession` DISABLE KEYS */;
INSERT INTO `customersession` VALUES (1,NULL,NULL,'1375',0,'2016-01-16 14:55:12',NULL,NULL,NULL),(18,NULL,NULL,NULL,NULL,'2015-12-22 08:30:14',NULL,NULL,NULL),(19,'','0000-00-00 00:00:00','6780',0,'2015-12-20 16:44:24',0,'0000-00-00 00:00:00',0),(20,NULL,NULL,'1111',0,'2015-12-22 02:50:31',1,'2015-12-22 21:40:58',1),(21,NULL,NULL,'9952',0,'2015-12-24 14:06:13',1,NULL,NULL),(165,NULL,NULL,'8667',0,'2016-01-19 17:52:21',1,NULL,NULL),(167,NULL,'2016-01-19 19:14:26','7418',0,'2016-01-19 17:58:27',1,NULL,1),(169,NULL,NULL,'9155',0,'2016-01-19 18:31:29',NULL,NULL,NULL),(171,NULL,'2016-03-01 23:30:00','1344',0,'2016-01-19 18:53:08',1,'2016-03-01 23:31:26',1),(172,NULL,'2016-01-19 19:07:42','5489',0,'2016-01-19 19:06:46',1,NULL,1),(173,NULL,'2016-01-19 19:10:45','6221',0,'2016-01-19 19:10:16',1,NULL,1),(174,NULL,'2016-01-19 19:52:37','7521',0,'2016-01-19 19:50:36',1,NULL,1),(175,NULL,NULL,'7383',0,'2016-01-20 04:46:05',NULL,NULL,NULL),(177,NULL,'2016-01-20 04:50:15','2702',0,'2016-01-20 04:49:32',1,NULL,1),(178,NULL,'2016-01-20 05:10:25','5586',0,'2016-01-20 05:09:43',1,NULL,1),(179,NULL,'2016-01-20 07:27:48','5387',0,'2016-01-20 07:27:13',1,NULL,1),(180,NULL,'2016-01-20 13:38:41','6296',0,'2016-01-20 13:35:45',1,NULL,1),(181,NULL,'2016-02-02 13:44:45','6986',0,'2016-01-20 14:22:14',1,'2016-02-02 13:44:31',1),(182,NULL,'2016-01-20 15:07:50','3573',0,'2016-01-20 15:07:18',1,NULL,1),(183,NULL,NULL,'2063',0,'2016-01-21 12:43:36',NULL,NULL,NULL),(185,NULL,NULL,'7546',0,'2016-01-21 17:05:42',NULL,NULL,NULL),(189,NULL,NULL,'5498',0,'2016-01-25 08:06:41',1,NULL,NULL),(191,NULL,'2016-01-25 12:36:54','7190',0,'2016-01-25 12:35:34',1,NULL,1),(194,NULL,NULL,'8537',0,'2016-01-25 19:05:05',1,NULL,NULL),(198,NULL,'2016-01-30 15:49:52','4089',0,'2016-01-30 09:09:34',1,'2016-01-30 15:42:58',1),(201,NULL,NULL,'9205',0,'2016-02-13 08:57:25',NULL,NULL,NULL),(203,NULL,NULL,'4978',0,'2016-02-18 06:35:07',1,NULL,NULL),(204,NULL,NULL,'8966',0,'2016-02-19 10:55:00',NULL,NULL,NULL),(205,NULL,NULL,'2894',0,'2016-02-19 10:55:41',NULL,NULL,NULL),(206,NULL,NULL,'7446',0,'2016-02-19 11:11:39',1,NULL,NULL),(208,NULL,'2016-03-15 00:44:14','8015',0,'2016-02-28 10:08:19',1,'2016-03-15 01:07:41',1),(209,NULL,'2016-03-16 18:03:31','7031',0,'2016-02-27 18:59:57',1,'2016-03-16 18:03:21',2),(210,NULL,'2016-03-15 21:57:51','8830',0,'2016-02-19 15:13:25',1,'2016-03-15 01:10:05',2),(211,NULL,NULL,'1115',0,'2016-02-19 15:30:57',NULL,NULL,NULL),(214,NULL,'2016-03-05 00:53:26','4863',0,'2016-03-05 00:52:47',1,'2016-03-05 04:21:45',1),(215,NULL,'2016-03-15 04:58:24','7140',0,'2016-03-10 15:12:28',1,'2016-03-15 04:25:15',2),(216,NULL,'2016-03-12 01:58:24','4020',0,'2016-03-12 01:53:46',1,NULL,2),(217,NULL,'2016-03-15 03:14:24','3041',0,'2016-03-12 02:13:39',1,'2016-03-15 03:11:04',2);
/*!40000 ALTER TABLE `customersession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customertrannotification`
--

DROP TABLE IF EXISTS `customertrannotification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customertrannotification` (
  `CustID` varchar(45) NOT NULL,
  `TranID` varchar(45) NOT NULL,
  `Amt` decimal(5,0) DEFAULT NULL,
  `isViewed` int(11) DEFAULT NULL,
  `Mobile` varchar(45) NOT NULL,
  `TransactionVerified` int(11) DEFAULT NULL,
  PRIMARY KEY (`CustID`,`TranID`,`Mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customertrannotification`
--

LOCK TABLES `customertrannotification` WRITE;
/*!40000 ALTER TABLE `customertrannotification` DISABLE KEYS */;
INSERT INTO `customertrannotification` VALUES ('10','12',155,1,'56878712',NULL),('10','13',155,1,'56878712',NULL),('10','14',155,1,'56878712',NULL),('10','15',155,1,'56878712',NULL),('10','28',155,1,'56878712',NULL),('10','52',300,1,'7506091276',NULL),('10','53',100,1,'7506091276',NULL),('10','55',70,1,'56878712',NULL),('10','56',70,1,'56878712',NULL),('10','57',70,1,'56878712',NULL),('10','61',70,1,'56878712',NULL),('10','62',70,1,'56878712',NULL),('11','10',155,1,'56878712',NULL),('171','100',80,1,'3216549870',0),('171','101',80,1,'3216549870',0),('171','102',80,1,'3216549870',0),('171','103',235,1,'3216549870',0),('171','104',80,1,'3216549870',0),('171','105',80,1,'3216549870',0),('171','106',315,1,'3216549870',0),('171','107',270,1,'3216549870',0),('171','115',80,1,'3216549870',0),('171','32',70,2,'3216549870',NULL),('171','35',70,2,'3216549870',NULL),('171','38',70,2,'3216549870',NULL),('171','39',35,2,'3216549870',NULL),('171','40',115,2,'3216549870',NULL),('171','41',80,2,'3216549870',NULL),('171','46',665,2,'3216549870',NULL),('171','47',665,2,'3216549870',NULL),('171','58',430,2,'3216549870',NULL),('171','63',235,2,'3216549870',NULL),('171','65',350,2,'3216549870',NULL),('171','67',430,2,'3216549870',NULL),('171','70',430,2,'3216549870',NULL),('171','71',315,2,'3216549870',NULL),('187','42',70,2,'9920712205',NULL),('187','43',70,2,'9920712205',NULL),('187','44',70,2,'9920712205',NULL),('187','45',35,2,'9920712205',NULL),('187','48',70,2,'9920712205',NULL),('187','49',70,2,'9920712205',NULL),('187','68',35,2,'9920712205',NULL),('187','69',35,2,'9920712205',NULL),('187','72',35,2,'9920712205',NULL),('20','7',800,2,'234',NULL),('20','8',30,2,'234',NULL),('200','50',300,2,'7506091276',NULL),('200','51',400,2,'7506091276',NULL),('200','59',400,2,'7506091276',NULL),('200','60',300,2,'7506091276',NULL),('200','64',400,2,'7506091276',NULL),('200','66',300,2,'7506091276',NULL),('200','76',500,2,'7506091276',NULL),('200','78',500,2,'7506091276',NULL),('200','79',500,2,'7506091276',NULL),('208','118',100,1,'7506091276',0),('208','119',100,1,'7506091276',0),('208','120',100,1,'7506091276',0),('208','121',100,1,'7506091276',0),('208','122',100,1,'7506091276',0),('208','123',100,1,'7506091276',0),('208','124',100,1,'7506091276',0),('208','125',100,1,'7506091276',0),('208','126',100,1,'7506091276',0),('208','127',100,1,'7506091276',0),('208','128',100,1,'7506091276',0),('208','129',100,1,'7506091276',0),('208','130',100,1,'7506091276',0),('208','136',100,1,'7506091276',0),('208','138',100,1,'7506091276',0),('208','139',100,1,'7506091276',0),('208','140',100,1,'7506091276',0),('208','141',100,1,'7506091276',0),('208','142',100,1,'7506091276',0),('208','144',100,1,'7506091276',0),('208','145',100,1,'7506091276',0),('208','146',100,1,'7506091276',0),('208','147',100,1,'7506091276',0),('208','148',100,1,'7506091276',0),('208','149',100,1,'7506091276',0),('208','150',100,1,'7506091276',0),('208','151',100,1,'7506091276',0),('208','152',100,1,'7506091276',0),('208','153',100,1,'7506091276',0),('208','154',100,1,'7506091276',0),('208','155',100,1,'7506091276',0),('208','156',100,2,'7506091276',1),('208','157',100,1,'7506091276',0),('208','159',100,2,'7506091276',1),('208','160',100,1,'7506091276',0),('208','161',100,2,'7506091276',1),('208','162',100,2,'7506091276',1),('208','164',100,1,'7506091276',0),('208','165',100,1,'7506091276',0),('208','166',100,2,'7506091276',1),('208','167',100,2,'7506091276',1),('208','168',100,1,'7506091276',0),('208','169',100,1,'7506091276',0),('208','170',100,1,'7506091276',0),('208','173',100,1,'7506091276',0),('208','174',100,1,'7506091276',0),('208','175',100,1,'7506091276',0),('208','176',100,1,'7506091276',0),('208','177',100,1,'7506091276',0),('208','178',100,1,'7506091276',0),('208','179',100,1,'7506091276',0),('208','180',100,2,'7506091276',1),('208','181',100,2,'7506091276',1),('208','182',100,1,'7506091276',0),('208','183',100,1,'7506091276',0),('208','184',100,2,'7506091276',1),('208','185',100,1,'7506091276',0),('208','187',100,1,'7506091276',0),('208','188',100,2,'7506091276',1),('208','189',100,2,'7506091276',1),('208','190',100,2,'7506091276',1),('208','191',100,1,'7506091276',0),('208','192',100,1,'7506091276',0),('208','193',100,2,'7506091276',1),('208','194',100,1,'7506091276',0),('208','196',500,2,'7506091276',1),('208','197',100,2,'7506091276',1),('208','206',100,2,'7506091276',1),('208','207',100,2,'7506091276',1),('208','208',300,2,'7506091276',1),('208','211',100,2,'7506091276',1),('208','212',100,1,'7506091276',1),('208','213',200,1,'7506091276',1),('208','216',100,1,'7506091276',1),('208','231',100,1,'7506091276',1),('208','232',100,1,'7506091276',1),('208','233',100,1,'7506091276',1),('208','236',100,1,'7506091276',1),('208','237',300,1,'7506091276',1),('208','80',500,2,'7506091276',NULL),('208','81',300,2,'7506091276',NULL),('208','84',200,2,'7506091276',1),('208','85',500,1,'7506091276',0),('208','86',500,1,'7506091276',0),('208','87',500,1,'7506091276',0),('208','88',500,1,'7506091276',0),('208','89',500,1,'7506091276',0),('208','90',500,1,'7506091276',0),('208','91',500,1,'7506091276',0),('208','92',500,1,'7506091276',0),('208','93',500,1,'7506091276',0),('208','94',500,1,'7506091276',0),('208','96',500,1,'7506091276',0),('208','97',500,1,'7506091276',0),('208','98',500,1,'7506091276',0),('209','108',35,1,'8984682823',0),('209','109',35,1,'8984682823',0),('209','110',35,1,'8984682823',0),('209','111',235,1,'8984682823',0),('209','112',235,1,'8984682823',0),('209','113',235,1,'8984682823',0),('209','116',80,1,'8984682823',0),('209','117',80,1,'8984682823',0),('209','131',80,1,'8984682823',0),('209','132',80,1,'8984682823',0),('209','135',80,1,'8984682823',0),('209','163',160,1,'8984682823',0),('209','171',80,1,'8984682823',0),('209','186',80,2,'8984682823',1),('209','195',80,2,'8984682823',1),('209','209',80,1,'8984682823',0),('209','239',160,1,'8984682823',0),('210','114',105,1,'9920712205',0),('210','133',175,1,'9920712205',0),('210','134',105,1,'9920712205',0),('210','137',105,1,'9920712205',0),('210','143',105,1,'9920712205',0),('210','158',105,2,'9920712205',1),('210','172',100,1,'9920712205',0),('210','198',35,2,'9920712205',1),('210','199',335,2,'9920712205',1),('210','200',35,2,'9920712205',1),('210','201',35,1,'9920712205',0),('210','202',35,1,'9920712205',0),('210','203',35,2,'9920712205',1),('210','204',35,2,'9920712205',1),('210','210',200,1,'9920712205',0),('210','238',100,2,'9920712205',1),('210','240',100,1,'9920712205',0),('210','241',100,2,'9920712205',1),('210','82',35,1,'9920712205',0),('210','83',70,1,'9920712205',0),('210','99',105,1,'9920712205',0),('214','205',135,1,'9920917815',0);
/*!40000 ALTER TABLE `customertrannotification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exceptionlog`
--

DROP TABLE IF EXISTS `exceptionlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exceptionlog` (
  `API` varchar(50) DEFAULT NULL,
  `Exception` varchar(45) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exceptionlog`
--

LOCK TABLES `exceptionlog` WRITE;
/*!40000 ALTER TABLE `exceptionlog` DISABLE KEYS */;
INSERT INTO `exceptionlog` VALUES ('FetchSavedAd','%d format: a number is required, not str','2016-02-28 23:35:24');
/*!40000 ALTER TABLE `exceptionlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lifestylelist`
--

DROP TABLE IF EXISTS `lifestylelist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lifestylelist` (
  `id` int(11) DEFAULT NULL,
  `lifestyle` text,
  `lifestyledesc` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lifestylelist`
--

LOCK TABLES `lifestylelist` WRITE;
/*!40000 ALTER TABLE `lifestylelist` DISABLE KEYS */;
INSERT INTO `lifestylelist` VALUES (0,'Health Freak','Health Freak'),(1,'Sweettooth','Sweettooth'),(2,'Pet lover','Pet lover'),(3,'Baby needs','Baby needs'),(4,'Culinary needs','Culinry needs'),(5,'Household','Household'),(6,'Hair & Body','Hair & Body'),(7,'Wellbeing & Healthcare','Wellbeing & Healthcare'),(8,'Gifting ideas','Gifting ideas'),(9,'Gadgets & Electronics','Gadgets & Electronics'),(10,'Sports & Fitness','Sports & Fitness'),(11,'Imported & Gourmet','Imported & Gourmet'),(12,'Office needs','Office needs'),(13,'Fashionista','Fashionista');
/*!40000 ALTER TABLE `lifestylelist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outletlist`
--

DROP TABLE IF EXISTS `outletlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outletlist` (
  `outletid` int(11) NOT NULL AUTO_INCREMENT,
  `parentmerchant` varchar(255) DEFAULT NULL,
  `outletaddr` varchar(2000) DEFAULT NULL,
  `merchantcode` varchar(40) DEFAULT NULL,
  `uniqueoutletcode` varchar(40) DEFAULT NULL,
  `outpincode` varchar(8) DEFAULT NULL,
  `qrcode` varchar(50) DEFAULT NULL,
  `apname` varchar(50) DEFAULT NULL,
  `appass` varchar(32) DEFAULT NULL,
  `locality` varchar(25) DEFAULT NULL,
  `outletcity` varchar(60) DEFAULT NULL,
  `storemanager` varchar(255) DEFAULT NULL,
  `MobileNumber` varchar(15) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `outlatitude` varchar(50) DEFAULT NULL,
  `outlongitude` varchar(50) DEFAULT NULL,
  `isLoggedIn` int(11) DEFAULT NULL,
  `isVerified` int(11) DEFAULT NULL,
  `LoggedOutOn` varchar(45) DEFAULT NULL,
  `SetTime` varchar(45) DEFAULT NULL,
  `OTP` varchar(45) DEFAULT NULL,
  `OTPCounter` int(11) DEFAULT '0',
  `LastLoggedIn` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `landmark` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`outletid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outletlist`
--

LOCK TABLES `outletlist` WRITE;
/*!40000 ALTER TABLE `outletlist` DISABLE KEYS */;
INSERT INTO `outletlist` VALUES (1,'Natures Basket','\"Address String\"','WB123','NATU1000001','400062','Image','Church123','Church123','Churchgate','Mumbai','','','','23.222112','21.33445',NULL,NULL,NULL,NULL,NULL,0,NULL,'Grocery',NULL),(2,'Natures Basket','Plot No.29, 56 Hill Road, Next to Bank of India, Bandra West, Mumbai, Maharashtra 400050','WB123','','474022',NULL,'111','111','Bandra','Mumbai','','7506091276','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c','26.9339208','75.922669',2,NULL,'2016-03-10 00:10:28','2016-03-01 15:09:33','8877',0,'2016-03-10 00:49:28','Grocery','Mehboob Studio'),(3,'Natures Basket','Shop No. 27,No 198,Khetan Bhavan, Jamshedji Tata Road, Churchgate, Mumbai, Maharashtra 400020','WB123','sum','474022',NULL,NULL,NULL,'Churchgate','Mumbai','','','','18.9311260','72.8266950',NULL,NULL,NULL,NULL,NULL,0,NULL,'Grocery',NULL),(4,'Foodhall','Level 3, Palladium Mall, High Street Phoenix, Senapati Bapat Marg, Lower Parel West, Palladium Mall, Mumbai, Maharashtra 400013','WB123','sum4','474022',NULL,'111','111','Lower Parel','Mumbai','','','newoutlet','18.9981730','72.8274690',NULL,NULL,NULL,NULL,NULL,0,NULL,'Hypermarket',NULL),(5,'Foodhall','R City Mall, Lal Bahadur Shastri Marg, Ghatkopar West, Mumbai, Maharashtra 400086','WB123','sum5','474022',NULL,'111','111','Ghatkopar','Mumbai','','','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c','26.9339208','75.922669',1,NULL,'2016-03-01 13:40:42','2016-03-01 14:37:24','9313',0,'2016-02-18 08:08:25','Hypermarket',NULL),(6,'Natures Basket','the address','WB123','Nat6','123456',NULL,'111','111','bokaro','sktn','','','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c','26.9339099','75.922681',1,NULL,'2016-02-17 02:31:36','2016-03-01 12:42:47','2115',0,NULL,'Hypermarket',NULL),(7,'Natures Basket','','WB123','Nat7','',NULL,'111','111','','','','','13d249f2cb4127b40cfa757866850278793f814ded3c587fe5889e889a7a9f6c','26.9339198','75.9226698',1,NULL,'2016-02-18 10:06:18','2016-03-01 15:08:02','7926',0,'2016-02-18 07:29:07','Consumer',NULL),(8,'Natures Basket','','WB123','Nat8','',NULL,'111','111','','','','','65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5','26.9333133','75.9225531',1,NULL,'2016-02-18 07:57:33','2016-02-18 07:56:45','3887',0,'2016-02-18 07:57:20','Consumer',NULL),(9,'Natures Basket','asasasas','WB123','Nat9','125478',NULL,NULL,NULL,'sadsadsad','sadsadsadsad','','','b6196f7784bc3acc076eef7dbe22b39d7c8efd5be804685de6d5488013df79f8','26.9348279','75.9232789',1,NULL,'2016-02-18 08:06:24',NULL,NULL,0,'2016-02-18 08:03:16','Departmental',NULL),(10,'Zara','Palladium Mall, Ground Floor & First Floor, Lower Parel, Mumbai - 400013, High Street Phoenix','WB123','Nat10','145236',NULL,NULL,NULL,'Lower Parel','Mumbai','','','superoutlet','33.6758660','-111.9650600',NULL,NULL,NULL,NULL,NULL,0,NULL,'Departmental',NULL);
/*!40000 ALTER TABLE `outletlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodreviewlist`
--

DROP TABLE IF EXISTS `prodreviewlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodreviewlist` (
  `CustomerID` int(11) NOT NULL,
  `Barcode` varchar(500) DEFAULT NULL,
  `Review` varchar(1000) DEFAULT NULL,
  `StarRating` varchar(10) DEFAULT NULL,
  `TransactionID` int(11) DEFAULT NULL,
  `CustomerName` varchar(500) DEFAULT NULL,
  `Locality` varchar(500) DEFAULT NULL,
  `ProductReviewID` int(11) NOT NULL AUTO_INCREMENT,
  `DateTime` varchar(45) DEFAULT NULL,
  `ProductName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ProductReviewID`),
  KEY `TransactionID` (`TransactionID`),
  KEY `CustomerID` (`CustomerID`),
  CONSTRAINT `ProdReviewList_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`),
  CONSTRAINT `ProdReviewList_ibfk_2` FOREIGN KEY (`TransactionID`) REFERENCES `transactionlist` (`transactionid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodreviewlist`
--

LOCK TABLES `prodreviewlist` WRITE;
/*!40000 ALTER TABLE `prodreviewlist` DISABLE KEYS */;
INSERT INTO `prodreviewlist` VALUES (19,'qwqwqw','cool','4',3,'jnk dscdvfdv','GKM',1,NULL,NULL),(20,'abababababa','nice','4',1,'fatema saifee','Churchgate',2,NULL,NULL),(21,'qwqwqw','not so bad','3',3,'jnk dscdvfdv','GKM',3,NULL,NULL),(20,'34354656456','too good','5',1,'Fatema','Rajwada',4,NULL,NULL),(208,'12345678','Very good','3',190,'Pritish Kumar','Bandra',5,'2016-02-29 14:09:02',NULL),(208,'12345678','Damn good','3',157,'Pritish Kumar',NULL,6,'2016-02-27 14:05:25',NULL),(208,'12345678','Damn good','3',158,'Pritish Kumar',NULL,7,'2016-02-27 14:09:02',NULL),(208,'12345678','Awesome','3',159,'Pritish Kumar',NULL,8,'2016-02-27 14:30:12',NULL),(209,'2147483647','heya','3',186,'Malay Satapathy',NULL,9,'2016-03-01 23:35:50',NULL),(209,'2147483647','hshshshs','3',186,'Malay Satapathy',NULL,10,'2016-03-01 23:35:50',NULL),(208,'2147483647','Good product','3',197,'Pritish Kumar',NULL,11,'2016-03-02 00:25:14',NULL),(208,'2147483647','Very exciting ','2',206,'Pritish Kumar',NULL,12,'2016-03-05 11:10:32',NULL),(208,'2147483647','Energizing ','2.0',197,'Pritish Kumar',NULL,13,'2016-03-02 00:25:14',NULL),(208,'2147483647','Too energizing ','2.0',197,'Pritish Kumar',NULL,14,'2016-03-02 00:25:14',NULL),(209,'8901262150378','Awesome taste !','2.5',186,'Malay Satapathy',NULL,15,'2016-03-01 23:35:50',NULL),(208,'8902080527021','Good item','2.0',211,'Pritish Kumar',NULL,16,'2016-03-10 00:06:35',NULL),(210,'5000159461122','Good','4.5',158,'Sneha Merchant',NULL,17,'2016-02-27 14:09:02',NULL),(208,'8901499007728','Good stuff','4.0',237,'Pritish Kumar',NULL,18,'2016-03-15 00:59:49',NULL),(210,'8901030343698','Satisfactory','3.0',241,'Snehah Merchant',NULL,19,'2016-03-15 01:12:26',NULL);
/*!40000 ALTER TABLE `prodreviewlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportissue`
--

DROP TABLE IF EXISTS `reportissue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reportissue` (
  `IssueID` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) DEFAULT NULL,
  `Message` varchar(500) NOT NULL,
  `Mobile` varchar(500) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IssueID`,`Mobile`,`Message`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportissue`
--

LOCK TABLES `reportissue` WRITE;
/*!40000 ALTER TABLE `reportissue` DISABLE KEYS */;
INSERT INTO `reportissue` VALUES (1,'(u\'jnk dscdvfdv\',)','aditya','234234',NULL),(2,'(u\'jnk dscdvfdv\',)','aditya','234234',NULL),(3,'(u\'fatema saifee\',)','adit','234',NULL),(4,'(u\'fatema saifee\',)','Bad app','234',NULL),(5,'(u\'fatema saifee\',)','Bad app','234',NULL),(6,'(u\'fatema saifee\',)','good','234',NULL),(7,'(u\'fatema saifee\',)','good','234',NULL),(8,'(u\'fatema saifee\',)','Bad app','234',NULL),(9,'(u\'fatema saifee\',)','Bad app','234',NULL),(10,'','test','2345615454',NULL),(11,'','test','2345615454',NULL);
/*!40000 ALTER TABLE `reportissue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sendreceipt`
--

DROP TABLE IF EXISTS `sendreceipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sendreceipt` (
  `ReceiptBody` varchar(5000) DEFAULT NULL,
  `EmailID` varchar(45) DEFAULT NULL,
  `MobileNumber` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sendreceipt`
--

LOCK TABLES `sendreceipt` WRITE;
/*!40000 ALTER TABLE `sendreceipt` DISABLE KEYS */;
INSERT INTO `sendreceipt` VALUES ('<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"></meta><title>Whizzbuy Receipt</title><link rel=\"stylesheet\" href=\"style.css\"></link></head><body><div class=\"box-shape\"><img class=\"logo\" src=\"logo.png\" /><img class=\"icon\" src=\"ico_android.jpg\" /><img class=\"icon\" src=\"ico_apple.jpg\" /><div class=\"space40\" /><div class=\"hline\" /><h4>Natures Basket<span style=\"float:right;font-size:20px\">Rs 100.0</span></h4><p>Store Address:</p><p>Plot No.29, 56 Hill Road, Next to Bank of India, Bandra West, Mumbai, Maharashtra 400050<span style=\"float:right;\"><b>Transaction ID :</b>233</span></p><p><strong>Landmark: </strong>Mehboob Studio<span style=\"float:right;\"><b>2016-03-12 19:16:26</b></span></p><div class=\"space40\" /><div class=\"hline\" /><div class=\"space40\" /><div class=\"ptext\">Purchase Details</div><div class=\"space40\" /><p><span style=\"float:right; margin-right:80px;\">Sub Total</span></p><p>1 x Gatorade 6 Pack<br /><span style=\"color:#999999\">1 x 100.0</span><span style=\"float:right; font-weight:bold; margin-right:70px; margin-bottom:5px\">100.0</span></p><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>CART TOTAL :   </b>100.0</span></p><div class=\"space40\" /><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>DISCOUNT :    </b>0</span></p><p><span style=\"float:right;\"><b>TOTAL :   </b>100.0</span></p><div class=\"space40\" /><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>VAT :   </b>0</span></p><div class=\"space40\" /><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>GRAND TOTAL:   </b>100.0</span></p><div class=\"ntext\">Note : This is an electronically generated invoice and does not require signature. All<br /> terms and conditions are as given on <a href=\"www.whizzbuy.com\"><www.whizzbuy.com /></a></div><div class=\"space40\" /><div class=\"vtext\">  VAT : 27351110939C / MVAT : 27351110939V <br />Contact Address : Mumbai, India</div><div class=\"space30\" /></div><div class=\"footer\" /><div class=\"space30\" /><div id=\"navcontainer\"><ul><li><a href=\"#\"><a src=\"unnamed.jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(1).jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(2).jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(3).jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(4).jpg\" /></a></li></ul></div><div><div class=\"stext\">You have received this email from Whizzbuy. You can always<br /> unsubscribe. For any assistance, visit our Help Center or write to us at<br /> support@whizzbuy.com.<br /><br /><a href=\"www.whizzbuy.com\">www.whizzbuy.com</a></div></div></body></html>','pritishkishor.mec@gmail.com','7506091276'),('<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"><html xmlns=\"http://www.w3.org/1999/xhtml\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\"></meta><title>Whizzbuy Receipt</title><link rel=\"stylesheet\" href=\"style.css\"></link></head><body><div class=\"box-shape\"><img src=\"logo.png\" class=\"logo\" /><img src=\"ico_android.jpg\" class=\"icon\" /><img src=\"ico_apple.jpg\" class=\"icon\" /><div class=\"space40\" /><div class=\"hline\" /><h4>Natures Basket<span style=\"float:right;font-size:20px\">Rs 100.0</span></h4><p>Store Address:</p><p>Plot No.29, 56 Hill Road, Next to Bank of India, Bandra West, Mumbai, Maharashtra 400050<span style=\"float:right;\"><b>Transaction ID :</b>236</span></p><p><strong>Landmark: </strong>Mehboob Studio<span style=\"float:right;\"><b>2016-03-15 00:49:29</b></span></p><div class=\"space40\" /><div class=\"hline\" /><div class=\"space40\" /><div class=\"ptext\">Purchase Details</div><div class=\"space40\" /><p><span style=\"float:right; margin-right:80px;\">Sub Total</span></p><p>1 x Gatorade 6 Pack<br /><span style=\"color:#999999\">1 x 100.0</span><span style=\"float:right; font-weight:bold; margin-right:70px; margin-bottom:5px\">100.0</span></p><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>CART TOTAL :   </b>100.0</span></p><div class=\"space40\" /><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>DISCOUNT :    </b>0</span></p><p><span style=\"float:right;\"><b>TOTAL :   </b>100.0</span></p><div class=\"space40\" /><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>VAT :   </b>0</span></p><div class=\"space40\" /><div class=\"space40\" /><div class=\"hline\" /><p><span style=\"float:right;\"><b>GRAND TOTAL:   </b>100.0</span></p><div class=\"ntext\">Note : This is an electronically generated invoice and does not require signature. All<br /> terms and conditions are as given on <a href=\"www.whizzbuy.com\"><www.whizzbuy.com /></a></div><div class=\"space40\" /><div class=\"vtext\">  VAT : 27351110939C / MVAT : 27351110939V <br />Contact Address : Mumbai, India</div><div class=\"space30\" /></div><div class=\"footer\" /><div class=\"space30\" /><div id=\"navcontainer\"><ul><li><a href=\"#\"><a src=\"unnamed.jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(1).jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(2).jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(3).jpg\" /></a></li><li><a href=\"#\"><a src=\"unnamed(4).jpg\" /></a></li></ul></div><div><div class=\"stext\">You have received this email from Whizzbuy. You can always<br /> unsubscribe. For any assistance, visit our Help Center or write to us at<br /> support@whizzbuy.com.<br /><br /><a href=\"www.whizzbuy.com\">www.whizzbuy.com</a></div></div></body></html>','pritishkishor.mec@gmail.com','7506091276');
/*!40000 ALTER TABLE `sendreceipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppinglist`
--

DROP TABLE IF EXISTS `shoppinglist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppinglist` (
  `MobNum` varchar(500) NOT NULL,
  `Unchecked` varchar(500) NOT NULL,
  `Checked` varchar(500) NOT NULL,
  `Title` varchar(500) NOT NULL,
  PRIMARY KEY (`MobNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppinglist`
--

LOCK TABLES `shoppinglist` WRITE;
/*!40000 ALTER TABLE `shoppinglist` DISABLE KEYS */;
INSERT INTO `shoppinglist` VALUES ('234','[\"bnkvc\", \"nvdsn\", \"vfsdj\", \"nvvbj\"]','[\"vfsdf\", \"dfgh\", \"saaw\", \"blah\"]','New'),('2341','Grape,Jackfruit','Apple,Orange','Awesome'),('234234','test10','test11','test12'),('2345','C,D','A,B','New'),('3216549870','[\"Beer\"]','[]','New'),('4561235896','asd','opc','test52'),('5645784214','false','false','test42'),('7506091272','[\"bnkvc\", \"nvdsn\", \"vfsdj\", \"nvvbj\"]','[\"vfsdf\", \"dfgh\", \"saaw\", \"blah\"]','New'),('7506091276','[\"Apple\"]','[\"Orange\"]','New'),('7845782234','true','false','test32'),('887506750','[\"dfsdf\", \"sdasd\"]','[\"fsdfds\"]','gfdg'),('887530675','[\"qws\", \"fgg\", \"aa\"]','[\"abcd\", \"dfgh\", \"swed\"]','hhgh'),('887530675, \"\": \"\", \"Checked\": , \"Unchecked\": [\"qws\", \"fgg\", \"aa\"]}','[\"qws\", \"fgg\", \"aa\"]','[\"abcd\", \"dfgh\", \"swed\", \"saaw\"]','hhgh'),('8875306750','[\"dcdwq\"]','[\"ddsvds\", \"dsvsd\"]','name'),('9819472417','[]','[\"Oranges\", \"Apples\"]','Title'),('9920712205','[\"1 kg apple\", \"3 mangos\", \"4 cartons milk\", \"1 kg rice\"]','[\"Staplers\", \"Post it papers\", \"1 kg tea\"]','New'),('9947066666','[\"bnkvc\", \"nvdsn\", \"vfsdj\", \"nvvbj\"]','[\"vfsdf\", \"dfgh\", \"saaw\", \"blah\"]','New');
/*!40000 ALTER TABLE `shoppinglist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supportus`
--

DROP TABLE IF EXISTS `supportus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supportus` (
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supportus`
--

LOCK TABLES `supportus` WRITE;
/*!40000 ALTER TABLE `supportus` DISABLE KEYS */;
/*!40000 ALTER TABLE `supportus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `BarcodeNum` varchar(20) NOT NULL DEFAULT '100000',
  `Price` int(11) DEFAULT NULL,
  `Weight` varchar(10) DEFAULT NULL,
  `ProdName` varchar(30) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL,
  PRIMARY KEY (`BarcodeNum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES ('5000159461122',35,'50g','Snickers',1),('690225103626',100,'1Kg','India Gate Basmati Rice',1),('8901030343698',100,'100g','Vaseline Cocoa Butter',1),('8901030553868',100,'250g','Lipton Tea',1),('8901052087426',100,'100g','Tetley Green Tea',1),('8901262150101',100,'200ml','Amul Fresh Cream',1),('8901262150378',80,'1L','Amul Lite Milk',1),('8901499007728',200,'1kg','Kellogs Oats',1),('8901526206803',100,'100g','Fructis Hair Serum',1),('8901571000043',100,'200g','Boost',1),('8902080527021',100,'300g','Gatorade 6 Pack',1),('8902710500059',200,'400g','Bagrrys Muesli',1),('8906000210291',100,'1Kg','Pillsbury Atta',1),('8906002004454',235,'1kg','Peanut Butter',1),('8906010261078',100,'1L','GoldWinner Oil',1),('8906012890061',100,'100g','Bakers Corn Flour',1),('8906012890160',100,'85g','Jelly Crystals',1),('8906012890863',100,'100g','Bakers Baking Soda',1),('8906059635014',35,'100g','Epigamia Mango',1);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactionlist`
--

DROP TABLE IF EXISTS `transactionlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactionlist` (
  `transactionid` int(11) NOT NULL,
  `merchantcode` varchar(50) DEFAULT NULL,
  `outletid` int(50) DEFAULT NULL,
  `itembarcode` varchar(20) NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `itemvalue` float NOT NULL,
  `transactiondate` datetime DEFAULT NULL,
  `itemdesc` varchar(1000) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `TransactionVerified` int(11) DEFAULT NULL,
  KEY `outletid` (`outletid`),
  KEY `customerid` (`customerid`),
  KEY `transactionid` (`transactionid`),
  CONSTRAINT `transactionlist_ibfk_1` FOREIGN KEY (`outletid`) REFERENCES `outletlist` (`outletid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactionlist`
--

LOCK TABLES `transactionlist` WRITE;
/*!40000 ALTER TABLE `transactionlist` DISABLE KEYS */;
INSERT INTO `transactionlist` VALUES (1,'NATU1',1,'0',20,1000,'2015-10-08 12:24:09','very usefull for you','3',NULL),(3,'NATU1',2,'9999',20,0,'2015-11-24 00:00:00','vdjmlvkm vmld','1',NULL),(1,'SUMMIT',4,'324342',20,12345,'2015-12-24 00:00:00','wow!!','123',NULL),(1,'cfkdnk',2,'809',20,678,'2015-12-17 00:00:00','very Bad','1',NULL),(9,'ABC2121',5,'578901',20,40,'2016-01-27 18:53:55','Nutties','2',NULL),(9,'ABC2121',5,'45127',20,25,'2016-01-27 18:53:55','DairyMilk','3',NULL),(10,'ABC2121',5,'578901',20,40,'2016-01-27 19:46:30','Nutties','2',NULL),(10,'ABC2121',5,'45127',20,25,'2016-01-27 19:46:30','DairyMilk','3',NULL),(9,'ABC2122',5,'45127',20,50,'2016-02-08 18:53:55','Cornflakes','2',NULL),(7,'ABC2121',5,'578901',10,40,'2016-02-14 23:12:52','Nutties','2',NULL),(7,'ABC2121',5,'45127',10,25,'2016-02-14 23:12:52','DairyMilk','3',NULL),(7,'ABC2121',5,'578901',10,40,'2016-02-14 23:18:29','Nutties','2',NULL),(7,'ABC2121',5,'45127',10,25,'2016-02-14 23:18:29','DairyMilk','3',NULL),(13,'ABC2121',5,'578901',10,40,'2016-02-15 10:24:38','Nutties','2',NULL),(13,'ABC2121',5,'45127',10,25,'2016-02-15 10:24:38','DairyMilk','3',NULL),(14,'ABC2121',5,'578901',10,40,'2016-02-15 10:25:07','Nutties','2',NULL),(14,'ABC2121',5,'45127',10,25,'2016-02-15 10:25:07','DairyMilk','3',NULL),(15,'ABC2121',5,'578901',10,40,'2016-02-16 00:16:36','Nutties','2',NULL),(15,'ABC2121',5,'45127',10,25,'2016-02-16 00:16:36','DairyMilk','3',NULL),(28,'ABC2121',5,'578901',10,40,'2016-02-16 02:25:55','Nutties','2',NULL),(28,'ABC2121',5,'45127',10,25,'2016-02-16 02:25:55','DairyMilk','3',NULL),(32,'ABC123',3,'578901',171,40,'2016-02-16 02:29:33','Nutties','2',NULL),(32,'ABC123',3,'45127',171,25,'2016-02-16 02:29:33','DairyMilk','3',NULL),(35,'ABC123',3,'578901',171,40,'2016-02-16 02:31:46','Nutties','2',NULL),(38,'ABC123',3,'500',171,35,'2016-02-16 02:33:15','Snickers','2',NULL),(39,'ABC123',3,'2147483647',171,35,'2016-02-16 02:40:18','Snickers','1',NULL),(40,'WB123',3,'2147483647',171,35,'2016-02-16 03:16:19','Snickers','1',NULL),(40,'WB123',3,'2147483647',171,80,'2016-02-16 03:16:19','Amul Lite Milk','1',NULL),(41,'WB123',3,'2147483647',171,80,'2016-02-16 03:25:41','Amul Lite Milk','1',NULL),(46,'WB123',3,'2147483647',171,80,'2016-02-18 14:12:32','Amul Lite Milk','2',NULL),(46,'WB123',3,'2147483647',171,235,'2016-02-18 14:12:32','Peanut Butter','2',NULL),(46,'WB123',3,'2147483647',171,35,'2016-02-18 14:12:32','Snickers','1',NULL),(47,'WB123',3,'2147483647',171,80,'2016-02-18 14:12:49','Amul Lite Milk','2',NULL),(47,'WB123',3,'2147483647',171,235,'2016-02-18 14:12:49','Peanut Butter','2',NULL),(47,'WB123',3,'2147483647',171,35,'2016-02-18 14:12:49','Snickers','1',NULL),(55,'ABC2121',5,'5000159',10,35,'2016-02-19 00:20:18','Snickers','2',NULL),(56,'ABC2121',5,'5000159',10,35,'2016-02-19 00:48:11','Snickers','2',NULL),(57,'ABC2121',5,'5000159',10,35,'2016-02-19 00:49:22','Snickers','2',NULL),(58,'ABC2121',3,'2147483647',171,80,'2016-02-19 00:54:22','Amul Lite Milk','2',NULL),(58,'ABC2121',3,'2147483647',171,35,'2016-02-19 00:54:22','Snickers','1',NULL),(58,'ABC2121',3,'2147483647',171,235,'2016-02-19 00:54:22','Peanut Butter','1',NULL),(61,'ABC2121',5,'5000159',10,35,'2016-02-19 01:07:23','Snickers','2',NULL),(62,'ABC2121',5,'5000159',10,35,'2016-02-19 01:27:13','Snickers','2',NULL),(63,'ABC2121',3,'2147483647',171,235,'2016-02-19 01:44:23','Peanut Butter','1',NULL),(65,'ABC2121',3,'2147483647',171,235,'2016-02-19 01:45:01','Peanut Butter','1',NULL),(65,'ABC2121',3,'2147483647',171,35,'2016-02-19 01:45:01','Snickers','1',NULL),(65,'ABC2121',3,'2147483647',171,80,'2016-02-19 01:45:01','Amul Lite Milk','1',NULL),(67,'ABC2121',3,'2147483647',171,80,'2016-02-19 01:49:03','Amul Lite Milk','2',NULL),(67,'ABC2121',3,'2147483647',171,35,'2016-02-19 01:49:03','Snickers','1',NULL),(67,'ABC2121',3,'2147483647',171,235,'2016-02-19 01:49:03','Peanut Butter','1',NULL),(70,'ABC2121',3,'2147483647',171,80,'2016-02-19 01:59:55','Amul Lite Milk','2',NULL),(70,'ABC2121',3,'2147483647',171,35,'2016-02-19 01:59:55','Snickers','1',NULL),(70,'ABC2121',3,'2147483647',171,235,'2016-02-19 01:59:55','Peanut Butter','1',NULL),(71,'ABC2121',3,'2147483647',171,80,'2016-02-19 02:04:27','Amul Lite Milk','1',NULL),(71,'ABC2121',3,'2147483647',171,235,'2016-02-19 02:04:27','Peanut Butter','1',NULL),(80,'MerchantID',2,'8902710500059',208,200,'2016-02-19 12:37:41','Bagrrys Muesli','2',NULL),(80,'MerchantID',2,'8902080527021',208,100,'2016-02-19 12:37:41','Gatorade 6 Pack','1',NULL),(81,'MerchantID',2,'8902710500059',208,200,'2016-02-19 12:37:58','Bagrrys Muesli','1',NULL),(81,'MerchantID',2,'8902080527021',208,100,'2016-02-19 12:37:58','Gatorade 6 Pack','1',NULL),(82,'MerchantID',2,'5000159461122',210,35,'2016-02-23 15:43:17','Snickers','1',0),(83,'MerchantID',2,'5000159461122',210,35,'2016-02-23 16:50:37','Snickers','2',0),(84,'MerchantID',2,'8902080527021',208,100,'2016-02-23 19:52:36','Gatorade 6 Pack','2',1),(85,'MerchantID',2,'8902080527021',208,100,'2016-02-23 21:52:41','Gatorade 6 Pack','1',0),(85,'MerchantID',2,'8902710500059',208,200,'2016-02-23 21:52:41','Bagrrys Muesli','1',0),(85,'MerchantID',2,'8901499007728',208,200,'2016-02-23 21:52:41','Kellogs Oats','1',0),(86,'MerchantID',2,'8902080527021',208,100,'2016-02-23 21:58:31','Gatorade 6 Pack','1',0),(86,'MerchantID',2,'8902710500059',208,200,'2016-02-23 21:58:31','Bagrrys Muesli','1',0),(86,'MerchantID',2,'8901499007728',208,200,'2016-02-23 21:58:31','Kellogs Oats','1',0),(87,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:01:14','Gatorade 6 Pack','1',0),(87,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:01:14','Bagrrys Muesli','1',0),(87,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:01:14','Kellogs Oats','1',0),(88,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:10:03','Gatorade 6 Pack','1',0),(88,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:10:03','Bagrrys Muesli','1',0),(88,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:10:03','Kellogs Oats','1',0),(89,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:13:09','Gatorade 6 Pack','1',0),(89,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:13:09','Bagrrys Muesli','1',0),(89,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:13:09','Kellogs Oats','1',0),(90,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:14:48','Gatorade 6 Pack','1',0),(90,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:14:48','Bagrrys Muesli','1',0),(90,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:14:48','Kellogs Oats','1',0),(91,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:17:39','Gatorade 6 Pack','1',0),(91,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:17:39','Bagrrys Muesli','1',0),(91,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:17:39','Kellogs Oats','1',0),(92,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:21:38','Gatorade 6 Pack','1',0),(92,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:21:38','Bagrrys Muesli','1',0),(92,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:21:38','Kellogs Oats','1',0),(93,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:25:49','Gatorade 6 Pack','1',0),(93,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:25:49','Bagrrys Muesli','1',0),(93,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:25:49','Kellogs Oats','1',0),(94,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:31:24','Gatorade 6 Pack','1',0),(94,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:31:24','Bagrrys Muesli','1',0),(94,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:31:24','Kellogs Oats','1',0),(96,'MerchantID',2,'8902080527021',208,100,'2016-02-23 22:57:39','Gatorade 6 Pack','1',0),(96,'MerchantID',2,'8902710500059',208,200,'2016-02-23 22:57:39','Bagrrys Muesli','1',0),(96,'MerchantID',2,'8901499007728',208,200,'2016-02-23 22:57:39','Kellogs Oats','1',0),(97,'MerchantID',2,'8902080527021',208,100,'2016-02-23 23:03:01','Gatorade 6 Pack','1',0),(97,'MerchantID',2,'8902710500059',208,200,'2016-02-23 23:03:01','Bagrrys Muesli','1',0),(97,'MerchantID',2,'8901499007728',208,200,'2016-02-23 23:03:01','Kellogs Oats','1',0),(98,'MerchantID',2,'8902080527021',208,100,'2016-02-23 23:07:16','Gatorade 6 Pack','1',0),(98,'MerchantID',2,'8902710500059',208,200,'2016-02-23 23:07:16','Bagrrys Muesli','1',0),(98,'MerchantID',2,'8901499007728',208,200,'2016-02-23 23:07:16','Kellogs Oats','1',0),(99,'MerchantID',2,'5000159461122',210,35,'2016-02-23 23:19:30','Snickers','3',0),(100,'ABC2121',3,'8901262150378',171,80,'2016-02-24 18:48:00','Amul Lite Milk','1',0),(101,'ABC2121',3,'8901262150378',171,80,'2016-02-24 19:00:46','Amul Lite Milk','1',0),(102,'ABC2121',3,'8901262150378',171,80,'2016-02-24 19:18:16','Amul Lite Milk','1',0),(103,'ABC2121',3,'8906002004454',171,235,'2016-02-24 19:31:56','Peanut Butter','1',0),(104,'ABC2121',3,'8901262150378',171,80,'2016-02-24 19:44:00','Amul Lite Milk','1',0),(105,'ABC2121',3,'8901262150378',171,80,'2016-02-24 19:47:18','Amul Lite Milk','1',0),(106,'ABC2121',3,'8901262150378',171,80,'2016-02-24 19:51:42','Amul Lite Milk','1',0),(106,'ABC2121',3,'8906002004454',171,235,'2016-02-24 19:51:42','Peanut Butter','1',0),(107,'ABC2121',3,'8906002004454',171,235,'2016-02-24 19:56:35','Peanut Butter','1',0),(107,'ABC2121',3,'5000159461122',171,35,'2016-02-24 19:56:35','Snickers','1',0),(108,'ABC2121',3,'5000159461122',209,35,'2016-02-25 00:34:03','Snickers','1',0),(109,'ABC2121',3,'5000159461122',209,35,'2016-02-25 00:38:55','Snickers','1',0),(110,'ABC2121',3,'5000159461122',209,35,'2016-02-25 00:41:54','Snickers','1',0),(111,'ABC2121',3,'8906002004454',209,235,'2016-02-25 01:01:45','Peanut Butter','1',0),(112,'ABC2121',3,'8906002004454',209,235,'2016-02-25 01:08:05','Peanut Butter','1',0),(113,'ABC2121',3,'8906002004454',209,235,'2016-02-25 02:27:31','Peanut Butter','1',0),(114,'MerchantID',2,'5000159461122',210,35,'2016-02-25 11:40:23','Snickers','3',0),(115,'ABC2121',3,'8901262150378',171,80,'2016-02-25 14:24:41','Amul Lite Milk','1',0),(116,'ABC2121',3,'8901262150378',209,80,'2016-02-25 14:26:40','Amul Lite Milk','1',0),(117,'ABC2121',3,'8901262150378',209,80,'2016-02-25 20:08:07','Amul Lite Milk','1',0),(118,'MerchantID',2,'8902080527021',208,100,'2016-02-25 20:11:05','Gatorade 6 Pack','1',0),(119,'MerchantID',2,'8902080527021',208,100,'2016-02-25 20:32:33','Gatorade 6 Pack','1',0),(120,'MerchantID',2,'8902080527021',208,100,'2016-02-25 20:42:13','Gatorade 6 Pack','1',0),(121,'MerchantID',2,'8902080527021',208,100,'2016-02-25 20:47:56','Gatorade 6 Pack','1',0),(122,'MerchantID',2,'8902080527021',208,100,'2016-02-25 22:37:59','Gatorade 6 Pack','1',0),(123,'MerchantID',2,'8902080527021',208,100,'2016-02-25 22:42:43','Gatorade 6 Pack','1',0),(124,'MerchantID',2,'8902080527021',208,100,'2016-02-25 22:47:17','Gatorade 6 Pack','1',0),(125,'MerchantID',2,'8902080527021',208,100,'2016-02-25 22:56:44','Gatorade 6 Pack','1',0),(126,'MerchantID',2,'8902080527021',208,100,'2016-02-25 23:02:33','Gatorade 6 Pack','1',0),(127,'MerchantID',2,'8902080527021',208,100,'2016-02-25 23:23:02','Gatorade 6 Pack','1',0),(128,'MerchantID',2,'8902080527021',208,100,'2016-02-25 23:43:14','Gatorade 6 Pack','1',0),(129,'MerchantID',2,'8902080527021',208,100,'2016-02-26 00:36:17','Gatorade 6 Pack','1',0),(130,'MerchantID',2,'8902080527021',208,100,'2016-02-26 00:39:48','Gatorade 6 Pack','1',0),(131,'ABC2121',3,'8901262150378',209,80,'2016-02-26 02:50:01','Amul Lite Milk','1',0),(132,'ABC2121',3,'8901262150378',209,80,'2016-02-26 23:59:05','Amul Lite Milk','1',0),(133,'MerchantID',2,'5000159461122',210,35,'2016-02-27 00:07:07','Snickers','5',0),(134,'MerchantID',2,'5000159461122',210,35,'2016-02-27 00:08:55','Snickers','3',0),(135,'ABC2121',3,'8901262150378',209,80,'2016-02-27 00:14:04','Amul Lite Milk','1',0),(136,'MerchantID',2,'8902080527021',208,100,'2016-02-27 00:21:41','Gatorade 6 Pack','1',0),(137,'MerchantID',2,'5000159461122',210,35,'2016-02-27 00:21:53','Snickers','3',0),(138,'MerchantID',2,'8902080527021',208,100,'2016-02-27 00:30:05','Gatorade 6 Pack','1',0),(139,'MerchantID',2,'8902080527021',208,100,'2016-02-27 00:35:42','Gatorade 6 Pack','1',0),(140,'MerchantID',2,'8902080527021',208,100,'2016-02-27 00:37:03','Gatorade 6 Pack','1',0),(141,'MerchantID',2,'8902080527021',208,100,'2016-02-27 00:41:26','Gatorade 6 Pack','1',0),(142,'MerchantID',2,'8902080527021',208,100,'2016-02-27 00:45:37','Gatorade 6 Pack','1',0),(143,'MerchantID',2,'5000159461122',210,35,'2016-02-27 00:55:20','Snickers','3',0),(144,'MerchantID',2,'8902080527021',208,100,'2016-02-27 01:41:05','Gatorade 6 Pack','1',0),(145,'MerchantID',2,'8902080527021',208,100,'2016-02-27 01:45:26','Gatorade 6 Pack','1',0),(146,'MerchantID',2,'8902080527021',208,100,'2016-02-27 01:56:15','Gatorade 6 Pack','1',0),(147,'MerchantID',2,'8902080527021',208,100,'2016-02-27 02:07:07','Gatorade 6 Pack','1',0),(148,'MerchantID',2,'8902080527021',208,100,'2016-02-27 02:16:40','Gatorade 6 Pack','1',0),(149,'MerchantID',2,'8902080527021',208,100,'2016-02-27 02:21:48','Gatorade 6 Pack','1',0),(150,'MerchantID',2,'8902080527021',208,100,'2016-02-27 02:24:38','Gatorade 6 Pack','1',0),(151,'MerchantID',2,'8902080527021',208,100,'2016-02-27 02:33:48','Gatorade 6 Pack','1',0),(152,'MerchantID',2,'8902080527021',208,100,'2016-02-27 02:36:32','Gatorade 6 Pack','1',0),(153,'MerchantID',2,'8902080527021',208,100,'2016-02-27 13:05:40','Gatorade 6 Pack','1',0),(154,'MerchantID',2,'8902080527021',208,100,'2016-02-27 13:08:29','Gatorade 6 Pack','1',1),(155,'MerchantID',2,'8902080527021',208,100,'2016-02-27 13:26:50','Gatorade 6 Pack','1',1),(156,'MerchantID',2,'8902080527021',208,100,'2016-02-27 14:03:19','Gatorade 6 Pack','1',1),(157,'MerchantID',2,'8902080527021',208,100,'2016-02-27 14:05:25','Gatorade 6 Pack','1',0),(158,'MerchantID',2,'5000159461122',210,35,'2016-02-27 14:09:02','Snickers','3',1),(159,'MerchantID',2,'8902080527021',208,100,'2016-02-27 14:30:12','Gatorade 6 Pack','1',1),(160,'MerchantID',2,'8902080527021',208,100,'2016-02-27 14:32:19','Gatorade 6 Pack','1',0),(161,'MerchantID',2,'8902080527021',208,100,'2016-02-27 15:14:27','Gatorade 6 Pack','1',1),(162,'MerchantID',2,'8902080527021',208,100,'2016-02-29 19:35:30','Gatorade 6 Pack','1',1),(163,'ABC2121',3,'8901262150378',209,80,'2016-02-29 20:20:08','Amul Lite Milk','2',0),(164,'MerchantID',2,'8902080527021',208,100,'2016-02-29 21:32:21','Gatorade 6 Pack','1',0),(165,'MerchantID',2,'8902080527021',208,100,'2016-02-29 23:22:11','Gatorade 6 Pack','1',0),(166,'MerchantID',2,'8902080527021',208,100,'2016-02-29 23:24:50','Gatorade 6 Pack','1',1),(167,'MerchantID',2,'8902080527021',208,100,'2016-02-29 23:31:03','Gatorade 6 Pack','1',1),(168,'MerchantID',2,'8902080527021',208,100,'2016-03-01 00:29:49','Gatorade 6 Pack','1',0),(169,'MerchantID',2,'8902080527021',208,100,'2016-03-01 00:35:02','Gatorade 6 Pack','1',0),(170,'MerchantID',2,'8902080527021',208,100,'2016-03-01 00:55:27','Gatorade 6 Pack','1',0),(171,'ABC2121',3,'8901262150378',209,80,'2016-03-01 01:09:33','Amul Lite Milk','1',0),(172,'MerchantID',2,'8901526206803',210,100,'2016-03-01 01:11:41','Fructis Hair Serum','1',0),(173,'MerchantID',2,'8902080527021',208,100,'2016-03-01 19:42:26','Gatorade 6 Pack','1',0),(174,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:01:02','Gatorade 6 Pack','1',0),(175,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:06:35','Gatorade 6 Pack','1',0),(176,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:10:00','Gatorade 6 Pack','1',0),(177,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:14:07','Gatorade 6 Pack','1',0),(178,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:23:06','Gatorade 6 Pack','1',0),(179,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:28:10','Gatorade 6 Pack','1',0),(180,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:41:14','Gatorade 6 Pack','1',1),(181,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:48:16','Gatorade 6 Pack','1',1),(182,'MerchantID',2,'8902080527021',208,100,'2016-03-01 20:51:03','Gatorade 6 Pack','1',0),(183,'MerchantID',2,'8902080527021',208,100,'2016-03-01 22:30:43','Gatorade 6 Pack','1',0),(184,'MerchantID',2,'8902080527021',208,100,'2016-03-01 22:43:17','Gatorade 6 Pack','1',1),(185,'MerchantID',2,'8902080527021',208,100,'2016-03-01 23:30:43','Gatorade 6 Pack','1',0),(186,'ABC2121',3,'8901262150378',209,80,'2016-03-01 23:35:50','Amul Lite Milk','1',1),(187,'MerchantID',2,'8902080527021',208,100,'2016-03-01 23:51:55','Gatorade 6 Pack','1',0),(188,'MerchantID',2,'8902080527021',208,100,'2016-03-01 23:57:18','Gatorade 6 Pack','1',1),(189,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:02:01','Gatorade 6 Pack','1',1),(190,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:06:57','Gatorade 6 Pack','1',1),(191,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:09:49','Gatorade 6 Pack','1',0),(192,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:10:51','Gatorade 6 Pack','1',0),(193,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:13:29','Gatorade 6 Pack','1',1),(194,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:17:30','Gatorade 6 Pack','1',0),(195,'ABC2121',3,'8901262150378',209,80,'2016-03-02 00:20:24','Amul Lite Milk','1',1),(196,'MerchantID',2,'8901499007728',208,200,'2016-03-02 00:21:49','Kellogs Oats','2',1),(196,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:21:49','Gatorade 6 Pack','1',1),(197,'MerchantID',2,'8902080527021',208,100,'2016-03-02 00:25:14','Gatorade 6 Pack','1',1),(198,'MerchantID',2,'5000159461122',210,35,'2016-03-02 00:26:34','Snickers','1',1),(199,'MerchantID',2,'8901030343698',210,100,'2016-03-02 02:23:13','Vaseline Cocoa Butter','1',1),(199,'MerchantID',2,'8901052087426',210,100,'2016-03-02 02:23:13','Tetley Green Tea','1',1),(199,'MerchantID',2,'5000159461122',210,35,'2016-03-02 02:23:13','Snickers','1',1),(199,'MerchantID',2,'8901526206803',210,100,'2016-03-02 02:23:13','Fructis Hair Serum','1',1),(200,'MerchantID',2,'5000159461122',210,35,'2016-03-02 04:26:35','Snickers','1',1),(201,'MerchantID',2,'5000159461122',210,35,'2016-03-02 05:24:22','Snickers','1',0),(202,'MerchantID',2,'5000159461122',210,35,'2016-03-02 05:25:15','Snickers','1',0),(203,'MerchantID',2,'5000159461122',210,35,'2016-03-02 05:26:20','Snickers','1',1),(204,'MerchantID',2,'5000159461122',210,35,'2016-03-03 14:20:49','Snickers','1',1),(205,'MerchantID',2,'5000159461122',214,35,'2016-03-05 01:02:33','Snickers','1',0),(205,'MerchantID',2,'8901526206803',214,100,'2016-03-05 01:02:33','Fructis Hair Serum','1',0),(206,'MerchantID',2,'8902080527021',208,100,'2016-03-05 11:10:32','Gatorade 6 Pack','1',1),(207,'MerchantID',2,'8902080527021',208,100,'2016-03-05 21:47:03','Gatorade 6 Pack','1',1),(208,'MerchantID',2,'8902080527021',208,100,'2016-03-05 21:52:27','Gatorade 6 Pack','1',1),(208,'MerchantID',2,'8901499007728',208,200,'2016-03-05 21:52:27','Kellogs Oats','1',1),(209,'ABC2121',3,'8901262150378',209,80,'2016-03-05 21:56:48','Amul Lite Milk','1',0),(210,'MerchantID',2,'8901052087426',210,100,'2016-03-05 22:39:27','Tetley Green Tea','1',0),(210,'MerchantID',2,'8901526206803',210,100,'2016-03-05 22:39:27','Fructis Hair Serum','1',0),(211,'MerchantID',2,'8902080527021',208,100,'2016-03-10 00:06:35','Gatorade 6 Pack','1',1),(212,'MerchantID',2,'8902080527021',208,100,'2016-03-10 00:09:34','Gatorade 6 Pack','1',1),(213,'MerchantID',2,'8902710500059',208,200,'2016-03-10 07:19:36','Bagrrys Muesli','1',1),(216,'MerchantID',2,'8902080527021',208,100,'2016-03-12 15:16:39','Gatorade 6 Pack','1',1),(231,'MerchantID',2,'8902080527021',208,100,'2016-03-12 18:43:38','Gatorade 6 Pack','1',1),(232,'MerchantID',2,'8902080527021',208,100,'2016-03-12 18:56:44','Gatorade 6 Pack','1',1),(233,'MerchantID',2,'8902080527021',208,100,'2016-03-12 19:16:26','Gatorade 6 Pack','1',1),(236,'MerchantID',2,'8902080527021',208,100,'2016-03-15 00:49:29','Gatorade 6 Pack','1',1),(237,'MerchantID',2,'8902080527021',208,100,'2016-03-15 00:59:49','Gatorade 6 Pack','1',1),(237,'MerchantID',2,'8901499007728',208,200,'2016-03-15 00:59:49','Kellogs Oats','1',1),(238,'MerchantID',2,'8902080527021',210,100,'2016-03-15 01:08:32','Gatorade 6 Pack','1',1),(239,'ABC2121',3,'8901262150378',209,80,'2016-03-15 01:10:12','Amul Lite Milk','2',0),(240,'MerchantID',2,'8901030343698',210,100,'2016-03-15 01:10:48','Vaseline Cocoa Butter','1',0),(241,'MerchantID',2,'8901030343698',210,100,'2016-03-15 01:12:26','Vaseline Cocoa Butter','1',1);
/*!40000 ALTER TABLE `transactionlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactionmasterlist`
--

DROP TABLE IF EXISTS `transactionmasterlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactionmasterlist` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  `MerchantCode` varchar(600) DEFAULT NULL,
  `OutletID` int(11) DEFAULT NULL,
  `Receipt` varchar(1000) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `RcptAmount` float DEFAULT NULL,
  `TransactionDate` varchar(50) DEFAULT NULL,
  `TranCity` varchar(500) DEFAULT NULL,
  `Locality` varchar(500) DEFAULT NULL,
  `CompanyName` varchar(500) DEFAULT NULL,
  `TotItems` int(11) DEFAULT NULL,
  `TransactionVerified` int(11) DEFAULT NULL,
  `CitrusID` varchar(100) DEFAULT NULL,
  `CitrusStatusDesc` varchar(100) DEFAULT NULL,
  `TransactionStatus` int(11) DEFAULT NULL,
  `CitrusStatus` int(11) DEFAULT NULL,
  PRIMARY KEY (`TransactionID`),
  KEY `OutletID` (`OutletID`,`CustomerID`),
  KEY `CustomerID` (`CustomerID`),
  CONSTRAINT `TransactionMasterList_ibfk_1` FOREIGN KEY (`OutletID`) REFERENCES `outletlist` (`outletid`),
  CONSTRAINT `TransactionMasterList_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactionmasterlist`
--

LOCK TABLES `transactionmasterlist` WRITE;
/*!40000 ALTER TABLE `transactionmasterlist` DISABLE KEYS */;
INSERT INTO `transactionmasterlist` VALUES (1,'NATU1',1,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,100000,'2015-12-29 05:00:00','Mumbai','Churchgate','Big Bazaar',0,NULL,NULL,NULL,NULL,NULL),(2,'SUMMIt',2,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,5426.46,'2015-12-30 12:00:00','Pune','Ganghi Nagar','Pizza Hut',0,NULL,NULL,NULL,NULL,NULL),(3,'NATU1',4,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,1111.11,'2015-12-30 00:00:41','Delhi','Parliament House','Dominos',0,NULL,NULL,NULL,NULL,NULL),(5,'NATU1',5,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,2222.22,'2016-02-11 00:00:00','Mumbai','Bhindi Bazaar','pizza hut',0,NULL,NULL,NULL,NULL,NULL),(6,'SUMMIT',5,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',21,5555.9,'2016-02-11 00:00:00','Pune','MG Road','Monginis',0,NULL,NULL,NULL,NULL,NULL),(7,'SUMMIT',1,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,99999,'2016-01-28 00:00:00','Mumbai','Churchgate','Big Bazaar',11,NULL,NULL,NULL,NULL,NULL),(8,'FHNHN',1,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,45623.1,'2016-01-26 00:00:00','Mumbai','Churchgate','Big Bazaar',7,NULL,NULL,NULL,NULL,NULL),(9,'ABC2121',5,'{\"ItemCount\": 5, \"Total\": 155, \"Items\": [{\"ProductName\": \"Nutties\", \"Quantity\": 2, \"TotalPrice\": 80, \"Barcode\": 578901, \"Price\": 40}, {\"ProductName\": \"DairyMilk\", \"Quantity\": 3, \"TotalPrice\": 75, \"Barcode\": 45127, \"Price\": 25}]}',10,155,'2016-02-11 00:00:00','Gwalior','GKM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'ABC2121',5,'{\"Items\": [{\"Price\": 40, \"ProductName\": \"Nutties\", \"Quantity\": 2, \"TotalPrice\": 80, \"Barcode\": 578901}, {\"Price\": 25, \"ProductName\": \"DairyMilk\", \"Quantity\": 3, \"TotalPrice\": 75, \"Barcode\": 45127}], \"ItemCount\": 5, \"Total\": 155}',20,155,'2016-02-11 00:00:00','Gwalior','GKM',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'ABC2121',5,'{\"ItemCount\": 5, \"Total\": 155, \"Items\": [{\"ProductName\": \"Nutties\", \"TotalPrice\": 80, \"Price\": 40, \"Barcode\": 578901, \"Quantity\": 2}, {\"ProductName\": \"DairyMilk\", \"TotalPrice\": 75, \"Price\": 25, \"Barcode\": 45127, \"Quantity\": 3}]}',10,155,'2016-02-14 23:12:52','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'ABC2121',5,'{\"Total\": 155, \"ItemCount\": 5, \"Items\": [{\"Barcode\": 578901, \"Price\": 40, \"ProductName\": \"Nutties\", \"TotalPrice\": 80, \"Quantity\": 2}, {\"Barcode\": 45127, \"Price\": 25, \"ProductName\": \"DairyMilk\", \"TotalPrice\": 75, \"Quantity\": 3}]}',10,155,'2016-02-14 23:18:29','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'ABC2121',5,'{\"ItemCount\": 5, \"Items\": [{\"TotalPrice\": 80, \"ProductName\": \"Nutties\", \"Quantity\": 2, \"Barcode\": 578901, \"Price\": 40}, {\"TotalPrice\": 75, \"ProductName\": \"DairyMilk\", \"Quantity\": 3, \"Barcode\": 45127, \"Price\": 25}], \"Total\": 155}',10,155,'2016-02-15 10:24:38','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'ABC2121',5,'{\"ItemCount\": 5, \"Items\": [{\"TotalPrice\": 80, \"ProductName\": \"Nutties\", \"Quantity\": 2, \"Barcode\": 578901, \"Price\": 40}, {\"TotalPrice\": 75, \"ProductName\": \"DairyMilk\", \"Quantity\": 3, \"Barcode\": 45127, \"Price\": 25}], \"Total\": 155}',10,155,'2016-02-15 10:25:07','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'ABC2121',5,'{\"Items\": [{\"Price\": 40, \"ProductName\": \"Nutties\", \"Quantity\": 2, \"TotalPrice\": 80, \"Barcode\": 578901}, {\"Price\": 25, \"ProductName\": \"DairyMilk\", \"Quantity\": 3, \"TotalPrice\": 75, \"Barcode\": 45127}], \"ItemCount\": 5, \"Total\": 155}',10,155,'2016-02-16 00:16:36','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70.0, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:12:23','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'ABC123',5,'{\"ItemCount\": 2, \"Total\": 70.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70.0, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:17:11','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70.0, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:18:42','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70.0, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',10,70,'2016-02-16 02:19:56','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:20:53','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:23:17','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35.0, \"Barcode\": \"500015946\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:23:41','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:23:58','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',10,70,'2016-02-16 02:24:07','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'C123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:24:33','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159\", \"Quantity\": 2}]}',10,70,'2016-02-16 02:25:00','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'ABC2121',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159\", \"Quantity\": 2}]}',10,70,'2016-02-16 02:25:41','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'ABC2121',5,'{\"ItemCount\": 5, \"Total\": 155, \"Items\": [{\"ProductName\": \"Nutties\", \"TotalPrice\": 80, \"Price\": 40, \"Barcode\": 578901, \"Quantity\": 2}, {\"ProductName\": \"DairyMilk\", \"TotalPrice\": 75, \"Price\": 25, \"Barcode\": 45127, \"Quantity\": 3}]}',10,155,'2016-02-16 02:25:55','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'ABC2121',5,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159\", \"Quantity\": 2}]}',10,70,'2016-02-16 02:26:53','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159461122\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:27:09','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"500\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:28:03','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Nutties\", \"TotalPrice\": 80, \"Price\": 40, \"Barcode\": 578901, \"Quantity\": 2}, {\"ProductName\": \"DairyMilk\", \"TotalPrice\": 75, \"Price\": 25, \"Barcode\": 45127, \"Quantity\": 3}]}',171,70,'2016-02-16 02:29:33','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"500\", \"Quantity\": 2}, {\"ProductName\": \"Nutties\", \"TotalPrice\": 80, \"Price\": 40, \"Barcode\": 578901, \"Quantity\": 2}]}',171,70,'2016-02-16 02:31:17','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'ABC2121',5,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159\", \"Quantity\": 2}, {\"ProductName\": \"DairyMilk\", \"TotalPrice\": 75, \"Price\": 25, \"Barcode\": 45127, \"Quantity\": 3}]}',10,70,'2016-02-16 02:31:40','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Nutties\", \"TotalPrice\": 80, \"Price\": 40, \"Barcode\": 578901, \"Quantity\": 2}]}',171,70,'2016-02-16 02:31:46','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 7, \"Price\": 35, \"Barcode\": \"500\", \"Quantity\": 2}]}',171,70,'2016-02-16 02:32:19','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'ABC2121',5,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Price\": 35, \"Barcode\": \"5000159\", \"Quantity\": 2}, {\"ProductName\": \"DairyMilk\", \"TotalPrice\": 75, \"Price\": 25, \"Barcode\": 45127, \"Quantity\": 3}]}',10,70,'2016-02-16 02:33:05','Mumbai','Ghatkopar',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'ABC123',3,'{\"ItemCount\": 2, \"Total\": 70, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 7, \"Price\": 35, \"Barcode\": 500, \"Quantity\": 2}]}',171,70,'2016-02-16 02:33:15','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'ABC123',3,'{\"ItemCount\": 1, \"Total\": 35.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 35.0, \"Price\": 35.0, \"Barcode\": 5000159461122, \"Quantity\": 1}]}',171,35,'2016-02-16 02:40:18','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'WB123',3,'{\"ItemCount\": 2, \"Total\": 115.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 35.0, \"Price\": 35.0, \"Barcode\": 5000159461122, \"Quantity\": 1}, {\"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Price\": 80.0, \"Barcode\": 8901262150378, \"Quantity\": 1}]}',171,115,'2016-02-16 03:16:19','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'WB123',3,'{\"ItemCount\": 1, \"Total\": 80.0, \"Items\": [{\"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Price\": 80.0, \"Barcode\": 8901262150378, \"Quantity\": 1}]}',171,80,'2016-02-16 03:25:41','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,'WB123',3,'{\"Total\": 665.0, \"Items\": [{\"Price\": 80.0, \"Barcode\": 8901262150378, \"TotalPrice\": 160.0, \"ProductName\": \"Amul Lite Milk\", \"Quantity\": 2}, {\"Price\": 235.0, \"Barcode\": 8906002004454, \"TotalPrice\": 470.0, \"ProductName\": \"Peanut Butter\", \"Quantity\": 2}, {\"Price\": 35.0, \"Barcode\": 5000159461122, \"TotalPrice\": 35.0, \"ProductName\": \"Snickers\", \"Quantity\": 1}], \"ItemCount\": 5}',171,665,'2016-02-18 14:12:32','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47,'WB123',3,'{\"Total\": 665.0, \"Items\": [{\"Price\": 80.0, \"Barcode\": 8901262150378, \"TotalPrice\": 160.0, \"ProductName\": \"Amul Lite Milk\", \"Quantity\": 2}, {\"Price\": 235.0, \"Barcode\": 8906002004454, \"TotalPrice\": 470.0, \"ProductName\": \"Peanut Butter\", \"Quantity\": 2}, {\"Price\": 35.0, \"Barcode\": 5000159461122, \"TotalPrice\": 35.0, \"ProductName\": \"Snickers\", \"Quantity\": 1}], \"ItemCount\": 5}',171,665,'2016-02-18 14:12:49','Mumbai','Churchgate',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,NULL,5,'{\"ItemCount\": 2, \"Items\": [{\"Price\": 35, \"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Barcode\": \"5000159\", \"Quantity\": 2}], \"Total\": 70}',10,70,'2016-02-19 00:19:59','Mumbai','Ghatkopar','Foodhall',NULL,NULL,NULL,NULL,NULL,NULL),(55,NULL,5,'{\"ItemCount\": 2, \"Items\": [{\"Price\": 35, \"ProductName\": \"Snickers\", \"TotalPrice\": 70, \"Barcode\": 5000159, \"Quantity\": 2}], \"Total\": 70}',10,70,'2016-02-19 00:20:18','Mumbai','Ghatkopar','Foodhall',NULL,NULL,NULL,NULL,NULL,NULL),(56,NULL,5,'{\"Total\": 70, \"ItemCount\": 2, \"Items\": [{\"Barcode\": 5000159, \"Price\": 35, \"TotalPrice\": 70.0, \"ProductName\": \"Snickers\", \"Quantity\": 2}]}',10,70,'2016-02-19 00:48:11','Mumbai','Ghatkopar','Foodhall',NULL,NULL,NULL,NULL,NULL,NULL),(57,NULL,5,'{\"Total\": 70.0, \"ItemCount\": 2, \"Items\": [{\"Barcode\": 5000159, \"Price\": 35, \"TotalPrice\": 70.0, \"ProductName\": \"Snickers\", \"Quantity\": 2}]}',10,70,'2016-02-19 00:49:22','Mumbai','Ghatkopar','Foodhall',NULL,NULL,NULL,NULL,NULL,NULL),(58,NULL,3,'{\"Total\": 430.0, \"ItemCount\": 4, \"Items\": [{\"Barcode\": 8901262150378, \"Price\": 80.0, \"TotalPrice\": 160.0, \"ProductName\": \"Amul Lite Milk\", \"Quantity\": 2}, {\"Barcode\": 5000159461122, \"Price\": 35.0, \"TotalPrice\": 35.0, \"ProductName\": \"Snickers\", \"Quantity\": 1}, {\"Barcode\": 8906002004454, \"Price\": 235.0, \"TotalPrice\": 235.0, \"ProductName\": \"Peanut Butter\", \"Quantity\": 1}]}',171,430,'2016-02-19 00:54:22','Mumbai','Churchgate','Natures Basket',NULL,NULL,NULL,NULL,NULL,NULL),(61,NULL,5,'{\"ItemCount\": 2, \"Items\": [{\"Price\": 35, \"ProductName\": \"Snickers\", \"TotalPrice\": 70.0, \"Barcode\": 5000159, \"Quantity\": 2}], \"Total\": 70.0}',10,70,'2016-02-19 01:07:23','Mumbai','Ghatkopar','Foodhall',NULL,NULL,NULL,NULL,NULL,NULL),(62,NULL,5,'{\"ItemCount\": 2, \"Items\": [{\"Price\": 35, \"ProductName\": \"Snickers\", \"TotalPrice\": 70.0, \"Barcode\": 5000159, \"Quantity\": 2}], \"Total\": 70.0}',10,70,'2016-02-19 01:27:13','Mumbai','Ghatkopar','Foodhall',NULL,NULL,NULL,NULL,NULL,NULL),(63,NULL,3,'{\"ItemCount\": 1, \"Items\": [{\"Price\": 235.0, \"ProductName\": \"Peanut Butter\", \"TotalPrice\": 235.0, \"Barcode\": 8906002004454, \"Quantity\": 1}], \"Total\": 235.0}',171,235,'2016-02-19 01:44:23','Mumbai','Churchgate','Natures Basket',NULL,NULL,NULL,NULL,NULL,NULL),(65,NULL,3,'{\"ItemCount\": 3, \"Items\": [{\"Price\": 235.0, \"ProductName\": \"Peanut Butter\", \"TotalPrice\": 235.0, \"Barcode\": 8906002004454, \"Quantity\": 1}, {\"Price\": 35.0, \"ProductName\": \"Snickers\", \"TotalPrice\": 35.0, \"Barcode\": 5000159461122, \"Quantity\": 1}, {\"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Barcode\": 8901262150378, \"Quantity\": 1}], \"Total\": 350.0}',171,350,'2016-02-19 01:45:01','Mumbai','Churchgate','Natures Basket',NULL,NULL,NULL,NULL,NULL,NULL),(67,NULL,3,'{\"ItemCount\": 4, \"Items\": [{\"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 160.0, \"Barcode\": 8901262150378, \"Quantity\": 2}, {\"Price\": 35.0, \"ProductName\": \"Snickers\", \"TotalPrice\": 35.0, \"Barcode\": 5000159461122, \"Quantity\": 1}, {\"Price\": 235.0, \"ProductName\": \"Peanut Butter\", \"TotalPrice\": 235.0, \"Barcode\": 8906002004454, \"Quantity\": 1}], \"Total\": 430.0}',171,430,'2016-02-19 01:49:03','Mumbai','Churchgate','Natures Basket',NULL,NULL,NULL,NULL,NULL,NULL),(70,NULL,3,'{\"ItemCount\": 4, \"Items\": [{\"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 160.0, \"Barcode\": \"8901262150378\", \"Quantity\": 2}, {\"Price\": 35.0, \"ProductName\": \"Snickers\", \"TotalPrice\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 1}, {\"Price\": 235.0, \"ProductName\": \"Peanut Butter\", \"TotalPrice\": 235.0, \"Barcode\": \"8906002004454\", \"Quantity\": 1}], \"Total\": 430.0}',171,430,'2016-02-19 01:59:55','Mumbai','Churchgate','Natures Basket',NULL,NULL,NULL,NULL,NULL,NULL),(71,NULL,3,'{\"ItemCount\": 2, \"Items\": [{\"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Barcode\": \"8901262150378\", \"Quantity\": 1}, {\"Price\": 235.0, \"ProductName\": \"Peanut Butter\", \"TotalPrice\": 235.0, \"Barcode\": \"8906002004454\", \"Quantity\": 1}], \"Total\": 315.0}',171,315,'2016-02-19 02:04:27','Mumbai','Churchgate','Natures Basket',NULL,NULL,NULL,NULL,NULL,NULL),(80,NULL,2,'{\"Total\": 500.0, \"ItemCount\": 3, \"Items\": [{\"Barcode\": \"8902710500059\", \"Quantity\": 2, \"ProductName\": \"Bagrrys Muesli\", \"Price\": 200.0, \"TotalPrice\": 400.0}, {\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"TotalPrice\": 100.0}]}',208,500,'2016-02-19 12:37:41','Mumbai','Bandra','Natures Basket',3,NULL,NULL,NULL,NULL,NULL),(81,NULL,2,'{\"Total\": 300.0, \"ItemCount\": 2, \"Items\": [{\"Barcode\": \"8902710500059\", \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\", \"Price\": 200.0, \"TotalPrice\": 200.0}, {\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"TotalPrice\": 100.0}]}',208,300,'2016-02-19 12:37:58','Mumbai','Bandra','Natures Basket',2,NULL,NULL,NULL,NULL,NULL),(82,NULL,2,'{\"Total\": 35.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"5000159461122\", \"TotalPrice\": 35.0, \"Quantity\": 1, \"Price\": 35.0, \"ProductName\": \"Snickers\"}]}',210,35,'2016-02-23 15:43:17','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(83,NULL,2,'{\"Items\": [{\"Price\": 35.0, \"Barcode\": \"5000159461122\", \"TotalPrice\": 70.0, \"Quantity\": 2, \"ProductName\": \"Snickers\"}], \"Total\": 70.0, \"ItemCount\": 2}',210,70,'2016-02-23 16:50:37','Mumbai','Bandra','Natures Basket',2,0,NULL,NULL,0,NULL),(84,NULL,2,'{\"Items\": [{\"Quantity\": 2, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 200.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 200.0, \"ItemCount\": 2}',208,200,'2016-02-23 19:52:36','Mumbai','Bandra','Natures Basket',2,1,NULL,NULL,0,NULL),(85,NULL,2,'{\"ItemCount\": 3, \"Total\": 500.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}, {\"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0, \"Price\": 200.0, \"Barcode\": \"8902710500059\", \"Quantity\": 1}, {\"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0, \"Price\": 200.0, \"Barcode\": \"8901499007728\", \"Quantity\": 1}]}',208,500,'2016-02-23 21:52:41','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(86,NULL,2,'{\"ItemCount\": 3, \"Total\": 500.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}, {\"Quantity\": 1, \"TotalPrice\": 200.0, \"Barcode\": \"8902710500059\", \"Price\": 200.0, \"ProductName\": \"Bagrrys Muesli\"}, {\"Quantity\": 1, \"TotalPrice\": 200.0, \"Barcode\": \"8901499007728\", \"Price\": 200.0, \"ProductName\": \"Kellogs Oats\"}]}',208,500,'2016-02-23 21:58:31','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(87,NULL,2,'{\"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}, {\"Price\": 200.0, \"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0, \"Barcode\": \"8902710500059\", \"Quantity\": 1}, {\"Price\": 200.0, \"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0, \"Barcode\": \"8901499007728\", \"Quantity\": 1}], \"Total\": 500.0, \"ItemCount\": 3}',208,500,'2016-02-23 22:01:14','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(88,NULL,2,'{\"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\", \"Price\": 100.0}, {\"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0, \"Quantity\": 1, \"Barcode\": \"8902710500059\", \"Price\": 200.0}, {\"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0, \"Quantity\": 1, \"Barcode\": \"8901499007728\", \"Price\": 200.0}], \"ItemCount\": 3, \"Total\": 500.0}',208,500,'2016-02-23 22:10:03','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(89,NULL,2,'{\"Total\": 500.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}, {\"Barcode\": \"8902710500059\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0}, {\"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0}], \"ItemCount\": 3}',208,500,'2016-02-23 22:13:09','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(90,NULL,2,'{\"Total\": 500.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}, {\"Barcode\": \"8902710500059\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0}, {\"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0}], \"ItemCount\": 3}',208,500,'2016-02-23 22:14:48','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(91,NULL,2,'{\"Total\": 500.0, \"ItemCount\": 3, \"Items\": [{\"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}, {\"Barcode\": \"8902710500059\", \"TotalPrice\": 200.0, \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\", \"Price\": 200.0}, {\"Barcode\": \"8901499007728\", \"TotalPrice\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\", \"Price\": 200.0}]}',208,500,'2016-02-23 22:17:39','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(92,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\"}, {\"TotalPrice\": 200.0, \"Barcode\": \"8902710500059\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\"}, {\"TotalPrice\": 200.0, \"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\"}], \"Total\": 500.0, \"ItemCount\": 3}',208,500,'2016-02-23 22:21:38','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(93,NULL,2,'{\"ItemCount\": 3, \"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Price\": 100.0, \"Barcode\": \"8902080527021\"}, {\"TotalPrice\": 200.0, \"ProductName\": \"Bagrrys Muesli\", \"Quantity\": 1, \"Price\": 200.0, \"Barcode\": \"8902710500059\"}, {\"TotalPrice\": 200.0, \"ProductName\": \"Kellogs Oats\", \"Quantity\": 1, \"Price\": 200.0, \"Barcode\": \"8901499007728\"}], \"Total\": 500.0}',208,500,'2016-02-23 22:25:49','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(94,NULL,2,'{\"ItemCount\": 3, \"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Price\": 100.0, \"Barcode\": \"8902080527021\"}, {\"TotalPrice\": 200.0, \"ProductName\": \"Bagrrys Muesli\", \"Quantity\": 1, \"Price\": 200.0, \"Barcode\": \"8902710500059\"}, {\"TotalPrice\": 200.0, \"ProductName\": \"Kellogs Oats\", \"Quantity\": 1, \"Price\": 200.0, \"Barcode\": \"8901499007728\"}], \"Total\": 500.0}',208,500,'2016-02-23 22:31:24','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(95,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\"}, {\"TotalPrice\": 200.0, \"Barcode\": \"8902710500059\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\"}, {\"TotalPrice\": 200.0, \"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\"}], \"Total\": 500.0, \"ItemCount\": 3}',208,500,'2016-02-23 22:54:11','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(96,NULL,2,'{\"Total\": 500.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}, {\"Barcode\": \"8902710500059\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0}, {\"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0}], \"ItemCount\": 3}',208,500,'2016-02-23 22:57:39','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(97,NULL,2,'{\"Total\": 500.0, \"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}, {\"Quantity\": 1, \"Barcode\": \"8902710500059\", \"TotalPrice\": 200.0, \"Price\": 200.0, \"ProductName\": \"Bagrrys Muesli\"}, {\"Quantity\": 1, \"Barcode\": \"8901499007728\", \"TotalPrice\": 200.0, \"Price\": 200.0, \"ProductName\": \"Kellogs Oats\"}], \"ItemCount\": 3}',208,500,'2016-02-23 23:03:01','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(98,NULL,2,'{\"ItemCount\": 3, \"Total\": 500.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1}, {\"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0, \"Barcode\": \"8902710500059\", \"Price\": 200.0, \"Quantity\": 1}, {\"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0, \"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1}]}',208,500,'2016-02-23 23:07:16','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(99,NULL,2,'{\"ItemCount\": 3, \"Total\": 105.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 105.0, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"Quantity\": 3}]}',210,105,'2016-02-23 23:19:30','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(100,NULL,3,'{\"Items\": [{\"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Quantity\": 1, \"Barcode\": \"8901262150378\"}], \"ItemCount\": 1, \"Total\": 80.0}',171,80,'2016-02-24 18:48:00','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(101,NULL,3,'{\"Items\": [{\"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Quantity\": 1, \"Barcode\": \"8901262150378\"}], \"ItemCount\": 1, \"Total\": 80.0}',171,80,'2016-02-24 19:00:46','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(102,NULL,3,'{\"Items\": [{\"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Quantity\": 1, \"Barcode\": \"8901262150378\"}], \"ItemCount\": 1, \"Total\": 80.0}',171,80,'2016-02-24 19:18:16','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(103,NULL,3,'{\"Items\": [{\"TotalPrice\": 235.0, \"ProductName\": \"Peanut Butter\", \"Price\": 235.0, \"Quantity\": 1, \"Barcode\": \"8906002004454\"}], \"ItemCount\": 1, \"Total\": 235.0}',171,235,'2016-02-24 19:31:56','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(104,NULL,3,'{\"Items\": [{\"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Quantity\": 1, \"Barcode\": \"8901262150378\"}], \"ItemCount\": 1, \"Total\": 80.0}',171,80,'2016-02-24 19:44:00','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(105,NULL,3,'{\"Items\": [{\"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Quantity\": 1, \"Barcode\": \"8901262150378\"}], \"ItemCount\": 1, \"Total\": 80.0}',171,80,'2016-02-24 19:47:18','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(106,NULL,3,'{\"Items\": [{\"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Quantity\": 1, \"Barcode\": \"8901262150378\"}, {\"TotalPrice\": 235.0, \"ProductName\": \"Peanut Butter\", \"Price\": 235.0, \"Quantity\": 1, \"Barcode\": \"8906002004454\"}], \"ItemCount\": 2, \"Total\": 315.0}',171,315,'2016-02-24 19:51:42','Mumbai','Churchgate','Natures Basket',2,0,NULL,NULL,0,NULL),(107,NULL,3,'{\"Items\": [{\"TotalPrice\": 235.0, \"ProductName\": \"Peanut Butter\", \"Price\": 235.0, \"Quantity\": 1, \"Barcode\": \"8906002004454\"}, {\"TotalPrice\": 35.0, \"ProductName\": \"Snickers\", \"Price\": 35.0, \"Quantity\": 1, \"Barcode\": \"5000159461122\"}], \"ItemCount\": 2, \"Total\": 270.0}',171,270,'2016-02-24 19:56:35','Mumbai','Churchgate','Natures Basket',2,0,NULL,NULL,0,NULL),(108,NULL,3,'{\"Items\": [{\"Quantity\": 1, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"TotalPrice\": 35.0, \"ProductName\": \"Snickers\"}], \"Total\": 35.0, \"ItemCount\": 1}',209,35,'2016-02-25 00:34:03','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(109,NULL,3,'{\"ItemCount\": 1, \"Items\": [{\"ProductName\": \"Snickers\", \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"TotalPrice\": 35.0, \"Quantity\": 1}], \"Total\": 35.0}',209,35,'2016-02-25 00:38:55','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(110,NULL,3,'{\"Total\": 35.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"5000159461122\", \"Quantity\": 1, \"ProductName\": \"Snickers\", \"Price\": 35.0, \"TotalPrice\": 35.0}]}',209,35,'2016-02-25 00:41:54','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(111,NULL,3,'{\"Items\": [{\"TotalPrice\": 235.0, \"Price\": 235.0, \"Barcode\": \"8906002004454\", \"Quantity\": 1, \"ProductName\": \"Peanut Butter\"}], \"Total\": 235.0, \"ItemCount\": 1}',209,235,'2016-02-25 01:01:45','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(112,NULL,3,'{\"Items\": [{\"TotalPrice\": 235.0, \"Price\": 235.0, \"Barcode\": \"8906002004454\", \"Quantity\": 1, \"ProductName\": \"Peanut Butter\"}], \"Total\": 235.0, \"ItemCount\": 1}',209,235,'2016-02-25 01:08:05','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(113,NULL,3,'{\"Total\": 235.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8906002004454\", \"Price\": 235.0, \"ProductName\": \"Peanut Butter\", \"TotalPrice\": 235.0, \"Quantity\": 1}]}',209,235,'2016-02-25 02:27:31','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(114,NULL,2,'{\"Total\": 105.0, \"ItemCount\": 3, \"Items\": [{\"Barcode\": \"5000159461122\", \"TotalPrice\": 105.0, \"Price\": 35.0, \"ProductName\": \"Snickers\", \"Quantity\": 3}]}',210,105,'2016-02-25 11:40:23','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(115,NULL,3,'{\"ItemCount\": 1, \"Total\": 80.0, \"Items\": [{\"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Price\": 80.0, \"Barcode\": \"8901262150378\", \"Quantity\": 1}]}',171,80,'2016-02-25 14:24:41','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(116,NULL,3,'{\"ItemCount\": 1, \"Total\": 80.0, \"Items\": [{\"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Price\": 80.0, \"Barcode\": \"8901262150378\", \"Quantity\": 1}]}',209,80,'2016-02-25 14:26:40','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(117,NULL,3,'{\"Items\": [{\"Quantity\": 1, \"Price\": 80.0, \"Barcode\": \"8901262150378\", \"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\"}], \"Total\": 80.0, \"ItemCount\": 1}',209,80,'2016-02-25 20:08:07','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(118,NULL,2,'{\"Items\": [{\"Quantity\": 1, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-02-25 20:11:05','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(119,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}]}',208,100,'2016-02-25 20:32:33','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(120,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-25 20:42:13','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(121,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-25 20:47:56','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(122,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1}]}',208,100,'2016-02-25 22:37:59','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(123,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}]}',208,100,'2016-02-25 22:42:43','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(124,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"TotalPrice\": 100.0}]}',208,100,'2016-02-25 22:47:17','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(125,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"TotalPrice\": 100.0}]}',208,100,'2016-02-25 22:56:44','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(126,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-25 23:02:33','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(127,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-25 23:23:02','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(128,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-25 23:43:14','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(129,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}]}',208,100,'2016-02-26 00:36:17','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(130,NULL,9,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}]}',208,100,'2016-02-26 00:39:48','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(131,NULL,3,'{\"Total\": 80.0, \"Items\": [{\"Barcode\": \"8901262150378\", \"Price\": 80.0, \"Quantity\": 1, \"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0}], \"ItemCount\": 1}',209,80,'2016-02-26 02:50:01','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(132,NULL,3,'{\"Items\": [{\"Quantity\": 1, \"Barcode\": \"8901262150378\", \"Price\": 80.0, \"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\"}], \"Total\": 80.0, \"ItemCount\": 1}',209,80,'2016-02-26 23:59:05','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(133,NULL,2,'{\"Items\": [{\"Quantity\": 5, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"TotalPrice\": 175.0, \"ProductName\": \"Snickers\"}], \"Total\": 175.0, \"ItemCount\": 5}',210,175,'2016-02-27 00:07:07','Mumbai','Bandra','Natures Basket',5,0,NULL,NULL,0,NULL),(134,NULL,2,'{\"ItemCount\": 3, \"Items\": [{\"Quantity\": 3, \"TotalPrice\": 105.0, \"ProductName\": \"Snickers\", \"Price\": 35.0, \"Barcode\": \"5000159461122\"}], \"Total\": 105.0}',210,105,'2016-02-27 00:08:55','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(135,NULL,3,'{\"ItemCount\": 1, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 80.0, \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0, \"Barcode\": \"8901262150378\"}], \"Total\": 80.0}',209,80,'2016-02-27 00:14:04','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(136,NULL,9,'{\"ItemCount\": 1, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\"}], \"Total\": 100.0}',208,100,'2016-02-27 00:21:41','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(137,NULL,2,'{\"ItemCount\": 3, \"Items\": [{\"Quantity\": 3, \"TotalPrice\": 105.0, \"ProductName\": \"Snickers\", \"Price\": 35.0, \"Barcode\": \"5000159461122\"}], \"Total\": 105.0}',210,105,'2016-02-27 00:21:53','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(138,NULL,9,'{\"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\", \"Price\": 100.0}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 00:30:05','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(139,NULL,9,'{\"Total\": 100.0, \"Items\": [{\"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-27 00:35:42','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(140,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-27 00:37:03','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(141,NULL,2,'{\"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 00:41:26','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(142,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}]}',208,100,'2016-02-27 00:45:37','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(143,NULL,2,'{\"ItemCount\": 3, \"Total\": 105.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 105.0, \"Price\": 35.0, \"Barcode\": \"5000159461122\", \"Quantity\": 3}]}',210,105,'2016-02-27 00:55:20','Mumbai','Bandra','Natures Basket',3,0,NULL,NULL,0,NULL),(144,NULL,7,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-27 01:41:05','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(145,NULL,7,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-02-27 01:45:26','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(146,NULL,7,'{\"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-02-27 01:56:15','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(147,NULL,7,'{\"Total\": 100.0, \"Items\": [{\"Price\": 100.0, \"Barcode\": \"8902080527021\", \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1}], \"ItemCount\": 1}',208,100,'2016-02-27 02:07:07','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(148,NULL,7,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}]}',208,100,'2016-02-27 02:16:40','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(149,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-27 02:21:48','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(150,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 02:24:38','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(151,NULL,5,'{\"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 02:33:48','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(152,NULL,5,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}], \"ItemCount\": 1}',208,100,'2016-02-27 02:36:32','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(153,NULL,5,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}]}',208,100,'2016-02-27 13:05:40','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(154,NULL,5,'{\"Items\": [{\"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 13:08:29','Mumbai','Bandra','Natures Basket',1,1,'145655873473770','SUCCESS',1,0),(155,NULL,5,'{\"Items\": [{\"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-02-27 13:26:50','Mumbai','Bandra','Natures Basket',1,1,'145655983354504','SUCCESS',1,0),(156,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1}]}',208,100,'2016-02-27 14:03:19','Mumbai','Bandra','Natures Basket',1,1,'145656201845082','SUCCESS',1,0),(157,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1}]}',208,100,'2016-02-27 14:05:25','Mumbai','Bandra','Natures Basket',1,0,'145656214788942',NULL,0,NULL),(158,NULL,2,'{\"ItemCount\": 3, \"Total\": 105.0, \"Items\": [{\"ProductName\": \"Snickers\", \"TotalPrice\": 105.0, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"Quantity\": 3}]}',210,105,'2016-02-27 14:09:02','Mumbai','Bandra','Natures Basket',3,1,'145656239516852','SUCCESS',1,0),(159,NULL,2,'{\"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 14:30:12','Mumbai','Bandra','Natures Basket',1,1,'145656363382120','SUCCESS',1,0),(160,NULL,2,'{\"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-27 14:32:19','Mumbai','Bandra','Natures Basket',1,0,'145656375998565','CANCELED',1,3),(161,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}]}',208,100,'2016-02-27 15:14:27','Mumbai','Bandra','Natures Basket',1,1,'145656630315954','SUCCESS',1,0),(162,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-29 19:35:30','Mumbai','Bandra','Natures Basket',1,1,'145675474974587','SUCCESS',1,0),(163,NULL,3,'{\"Total\": 160.0, \"Items\": [{\"Quantity\": 2, \"TotalPrice\": 160.0, \"Barcode\": \"8901262150378\", \"ProductName\": \"Amul Lite Milk\", \"Price\": 80.0}], \"ItemCount\": 2}',209,160,'2016-02-29 20:20:08','Mumbai','Churchgate','Natures Basket',2,0,NULL,NULL,0,NULL),(164,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}]}',208,100,'2016-02-29 21:32:21','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(165,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-02-29 23:22:11','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(166,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-02-29 23:24:50','Mumbai','Bandra','FoodHall',1,1,'145676851370981','SUCCESS',1,0),(167,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-02-29 23:31:03','Mumbai','Bandra','FoodHall',1,1,'145676888425193','SUCCESS',1,0),(168,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-03-01 00:29:49','Mumbai','Bandra','FoodHall',1,0,NULL,NULL,0,NULL),(169,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 00:35:02','Mumbai','Bandra','FoodHall',1,0,NULL,NULL,0,NULL),(170,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 00:55:27','Mumbai','Bandra','Natures Basket',1,0,'1456773952100838',NULL,0,NULL),(171,NULL,3,'{\"ItemCount\": 1, \"Total\": 80.0, \"Items\": [{\"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Barcode\": \"8901262150378\", \"Price\": 80.0, \"Quantity\": 1}]}',209,80,'2016-03-01 01:09:33','Mumbai','Churchgate','Natures Basket',1,0,'145677573938016',NULL,0,NULL),(172,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Fructis Hair Serum\", \"TotalPrice\": 100.0, \"Barcode\": \"8901526206803\", \"Price\": 100.0, \"Quantity\": 1}]}',210,100,'2016-03-01 01:11:41','Mumbai','Bandra','Natures Basket',1,0,'1456774935104495',NULL,0,NULL),(173,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 19:42:26','Mumbai','Bandra','Natures Basket',1,0,'145684156831091',NULL,0,NULL),(174,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 20:01:02','Mumbai','Bandra','Natures Basket',1,0,'145684268238096',NULL,0,NULL),(175,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 20:06:35','Mumbai','Bandra','Natures Basket',1,0,'145684301723430',NULL,0,NULL),(176,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 20:10:00','Mumbai','Bandra','Natures Basket',1,0,'145684321690972',NULL,0,NULL),(177,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 20:14:07','Mumbai','Bandra','Natures Basket',1,0,'145684346766309',NULL,0,NULL),(178,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 20:23:06','Mumbai','Bandra','Natures Basket',1,0,'145684400714847',NULL,0,NULL),(179,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2015-10-19 12:37:41','Mumbai','Bandra','Nilgiris',1,0,'145684430677377','SUCCESS',2,0),(180,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2015-10-19 12:37:41','Mumbai','Bandra','Nilgiris',1,1,'145684509598727','SUCCESS',1,0),(181,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2015-10-19 12:37:41','Mumbai','Bandra','Nilgiris',1,1,'1456845514109415','SUCCESS',1,0),(182,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-01 20:51:03','Mumbai','Bandra','Natures Basket',1,0,'145684568112443',NULL,0,NULL),(183,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-03-01 22:30:43','Mumbai','Bandra','Natures Basket',1,0,'1456851660101789',NULL,0,NULL),(184,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-03-01 22:43:17','Mumbai','Bandra','Natures Basket',1,1,'145685242131724','SUCCESS',1,0),(185,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-01 23:30:43','Mumbai','Bandra','Natures Basket',1,0,'145685541354123',NULL,0,NULL),(186,NULL,3,'{\"Total\": 80.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 80.0, \"Barcode\": \"8901262150378\", \"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\"}], \"ItemCount\": 1}',209,80,'2016-03-01 23:35:50','Mumbai','Churchgate','Natures Basket',1,1,'145685557915005',NULL,0,NULL),(187,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-01 23:51:55','Mumbai','Bandra','Natures Basket',1,0,'145685653477173',NULL,0,NULL),(188,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-01 23:57:18','Mumbai','Bandra','Natures Basket',1,1,'145685686794255','SUCCESS',1,0),(189,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:02:01','Mumbai','Bandra','Natures Basket',1,1,'145685713685585','SUCCESS',1,0),(190,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:06:57','Mumbai','Bandra','Natures Basket',1,1,'145685743266024','SUCCESS',1,0),(191,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:09:49','Mumbai','Bandra','Landmark',1,0,NULL,NULL,0,NULL),(192,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:10:51','Mumbai','Bandra','Landmark',1,0,'145685766755439',NULL,0,NULL),(193,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:13:29','Mumbai','Bandra','Landmark',1,1,'145685783773553','SUCCESS',1,0),(194,NULL,4,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:17:30','Mumbai','Bandra','Landmark',1,0,'145685807989395',NULL,0,NULL),(195,NULL,3,'{\"Total\": 80.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 80.0, \"Barcode\": \"8901262150378\", \"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\"}], \"ItemCount\": 1}',209,80,'2016-03-02 00:20:24','Mumbai','Churchgate','Natures Basket',1,1,'1456858461101450','SUCCESS',1,0),(196,NULL,4,'{\"Total\": 500.0, \"Items\": [{\"Quantity\": 2, \"TotalPrice\": 400.0, \"Barcode\": \"8901499007728\", \"Price\": 200.0, \"ProductName\": \"Kellogs Oats\"}, {\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 3}',208,500,'2016-03-02 00:21:49','Mumbai','Bandra','Landmark',3,1,'145685832896514','SUCCESS',1,0),(197,NULL,4,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-02 00:25:14','Mumbai','Bandra','Natures Basket',1,1,'145685853879355','SUCCESS',1,0),(198,NULL,2,'{\"Total\": 35.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 35.0, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"ProductName\": \"Snickers\"}], \"ItemCount\": 1}',210,35,'2016-03-02 00:26:34','Mumbai','Bandra','Natures Basket',1,1,'145685874649808','SUCCESS',1,0),(199,NULL,2,'{\"Total\": 335.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8901030343698\", \"Price\": 100.0, \"ProductName\": \"Vaseline Cocoa Butter\"}, {\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8901052087426\", \"Price\": 100.0, \"ProductName\": \"Tetley Green Tea\"}, {\"Quantity\": 1, \"TotalPrice\": 35.0, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"ProductName\": \"Snickers\"}, {\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8901526206803\", \"Price\": 100.0, \"ProductName\": \"Fructis Hair Serum\"}], \"ItemCount\": 4}',210,335,'2016-03-02 02:23:13','Mumbai','Bandra','Natures Basket',4,1,'145686562463740','SUCCESS',1,0),(200,NULL,2,'{\"Total\": 35.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 35.0, \"Barcode\": \"5000159461122\", \"Price\": 35.0, \"ProductName\": \"Snickers\"}], \"ItemCount\": 1}',210,35,'2016-03-02 04:26:35','Mumbai','Bandra','Natures Basket',1,1,'145687306820130','SUCCESS',1,0),(201,NULL,2,'{\"Total\": 35.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"5000159461122\", \"Price\": 35.0, \"Quantity\": 1, \"ProductName\": \"Snickers\", \"TotalPrice\": 35.0}]}',210,35,'2016-03-02 05:24:22','Mumbai','Bandra','Natures Basket',1,0,'145687655213738',NULL,0,NULL),(202,NULL,2,'{\"Total\": 35.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"5000159461122\", \"Price\": 35.0, \"Quantity\": 1, \"ProductName\": \"Snickers\", \"TotalPrice\": 35.0}]}',210,35,'2016-03-02 05:25:15','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(203,NULL,2,'{\"Total\": 35.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"5000159461122\", \"Price\": 35.0, \"Quantity\": 1, \"ProductName\": \"Snickers\", \"TotalPrice\": 35.0}]}',210,35,'2016-03-02 05:26:20','Mumbai','Bandra','Natures Basket',1,1,'145687660726194','SUCCESS',1,0),(204,NULL,2,'{\"Items\": [{\"TotalPrice\": 35.0, \"ProductName\": \"Snickers\", \"Price\": 35.0, \"Quantity\": 1, \"Barcode\": \"5000159461122\"}], \"ItemCount\": 1, \"Total\": 35.0}',210,35,'2016-03-03 14:20:49','Mumbai','Bandra','Natures Basket',1,1,'145699508476419','SUCCESS',1,0),(205,NULL,2,'{\"ItemCount\": 2, \"Total\": 135.0, \"Items\": [{\"Barcode\": \"5000159461122\", \"TotalPrice\": 35.0, \"Price\": 35.0, \"ProductName\": \"Snickers\", \"Quantity\": 1}, {\"Barcode\": \"8901526206803\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Fructis Hair Serum\", \"Quantity\": 1}]}',214,135,'2016-03-05 01:02:33','Mumbai','Bandra','Natures Basket',2,0,NULL,NULL,0,NULL),(206,NULL,2,'{\"ItemCount\": 1, \"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\", \"Price\": 100.0}], \"Total\": 100.0}',208,100,'2016-03-05 11:10:32','Mumbai','Bandra','Natures Basket',1,1,'145715644894667','SUCCESS',1,0),(207,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}]}',208,100,'2016-03-05 21:47:03','Mumbai','Bandra','Natures Basket',1,1,'1457194646105269','SUCCESS',1,0),(208,NULL,3,'{\"ItemCount\": 2, \"Total\": 300.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}, {\"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0, \"Price\": 200.0, \"Barcode\": \"8901499007728\", \"Quantity\": 1}]}',208,300,'2016-03-05 21:52:27','Mumbai','Bandra','Natures Basket',2,1,'145719496453421','SUCCESS',1,0),(209,NULL,3,'{\"ItemCount\": 1, \"Total\": 80.0, \"Items\": [{\"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 80.0, \"Price\": 80.0, \"Barcode\": \"8901262150378\", \"Quantity\": 1}]}',209,80,'2016-03-05 21:56:48','Mumbai','Churchgate','Natures Basket',1,0,NULL,NULL,0,NULL),(210,NULL,3,'{\"ItemCount\": 2, \"Total\": 200.0, \"Items\": [{\"ProductName\": \"Tetley Green Tea\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8901052087426\", \"Quantity\": 1}, {\"ProductName\": \"Fructis Hair Serum\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"Barcode\": \"8901526206803\", \"Quantity\": 1}]}',210,200,'2016-03-05 22:39:27','Mumbai','Bandra','Natures Basket',2,0,NULL,NULL,0,NULL),(211,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"TotalPrice\": 100.0}]}',208,100,'2016-03-10 00:06:35','Mumbai','Bandra','Natures Basket',1,1,'145754861214385','SUCCESS',1,0),(212,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"TotalPrice\": 100.0}]}',208,100,'2016-03-10 00:09:34','Mumbai','Bandra','Natures Basket',1,1,'145754879170409','SUCCESS',1,0),(213,NULL,2,'{\"Total\": 200.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902710500059\", \"Quantity\": 1, \"Price\": 200.0, \"ProductName\": \"Bagrrys Muesli\", \"TotalPrice\": 200.0}]}',208,200,'2016-03-10 07:19:36','Mumbai','Bandra','FoodHall',1,1,'145757459554186','SUCCESS',1,0),(214,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-12 15:11:25','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(215,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',208,100,'2016-03-12 15:14:23','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(216,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',208,100,'2016-03-12 15:16:39','Mumbai','Bandra','Natures Basket',1,1,'1457776023103555','SUCCESS',1,0),(217,NULL,2,'{\"ItemCount\": 1, \"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}], \"Total\": 100.0}',208,100,'2016-03-12 18:22:36','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(218,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-03-12 18:25:55','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(219,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-03-12 18:26:05','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(220,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-03-12 18:26:28','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(221,NULL,2,'{\"Items\": [{\"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Quantity\": 1, \"Barcode\": \"8902080527021\"}], \"ItemCount\": 1, \"Total\": 100.0}',208,100,'2016-03-12 18:28:00','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(222,NULL,2,'{\"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-03-12 18:32:20','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(223,NULL,2,'{\"Items\": [{\"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-03-12 18:33:11','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(224,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}]}',208,100,'2016-03-12 18:35:31','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(225,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}]}',208,100,'2016-03-12 18:35:52','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(226,NULL,2,'{\"Items\": [{\"Quantity\": 1, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"Total\": 100.0, \"ItemCount\": 1}',208,100,'2016-03-12 18:37:30','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(227,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0}]}',208,100,'2016-03-12 18:39:10','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(228,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-12 18:41:18','Mumbai','Bandra','Natures Basket',NULL,0,NULL,NULL,0,NULL),(229,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-12 18:41:27','Mumbai','Bandra','Shoppers Stop',NULL,0,NULL,NULL,0,NULL),(230,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1}]}',208,100,'2016-03-12 18:41:44','Mumbai','Bandra','Shoppers Stop',NULL,0,NULL,NULL,0,NULL),(231,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"Quantity\": 1, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}]}',208,100,'2016-03-12 18:43:38','Mumbai','Bandra','Shoppers Stop',1,1,'145778844190901','SUCCESS',1,0),(232,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Quantity\": 1, \"TotalPrice\": 100.0, \"Barcode\": \"8902080527021\", \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}], \"ItemCount\": 1}',208,100,'2016-03-12 18:56:44','Mumbai','Bandra','Natures Basket',1,1,'145778922491627','SUCCESS',1,0),(233,NULL,2,'{\"ItemCount\": 1, \"Total\": 100.0, \"Items\": [{\"TotalPrice\": 100.0, \"ProductName\": \"Gatorade 6 Pack\", \"Price\": 100.0, \"Barcode\": \"8902080527021\", \"Quantity\": 1}]}',208,100,'2016-03-12 19:16:26','Mumbai','Bandra','Natures Basket',1,1,'145779040522657','SUCCESS',1,0),(234,NULL,3,'{\"Total\": 160.0, \"ItemCount\": 2, \"Items\": [{\"Barcode\": \"8901262150378\", \"TotalPrice\": 160.0, \"Quantity\": 2, \"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\"}]}',209,160,'2016-03-15 00:35:38','Mumbai','Churchgate','Natures Basket',NULL,0,NULL,NULL,0,NULL),(235,NULL,3,'{\"Total\": 160.0, \"ItemCount\": 2, \"Items\": [{\"Barcode\": \"8901262150378\", \"TotalPrice\": 160.0, \"Quantity\": 2, \"Price\": 80.0, \"ProductName\": \"Amul Lite Milk\"}]}',209,160,'2016-03-15 00:35:43','Mumbai','Churchgate','Natures Basket',NULL,0,NULL,NULL,0,NULL),(236,NULL,2,'{\"Total\": 100.0, \"ItemCount\": 1, \"Items\": [{\"Barcode\": \"8902080527021\", \"TotalPrice\": 100.0, \"Quantity\": 1, \"Price\": 100.0, \"ProductName\": \"Gatorade 6 Pack\"}]}',208,100,'2016-03-15 00:49:29','Mumbai','Bandra','Natures Basket',1,1,'145798318931195','SUCCESS',1,0),(237,NULL,2,'{\"Total\": 300.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}, {\"Barcode\": \"8901499007728\", \"Price\": 200.0, \"Quantity\": 1, \"ProductName\": \"Kellogs Oats\", \"TotalPrice\": 200.0}], \"ItemCount\": 2}',208,300,'2016-03-15 00:59:49','Mumbai','Bandra','Natures Basket',2,1,'145798380935186','SUCCESS',1,0),(238,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8902080527021\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Gatorade 6 Pack\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',210,100,'2016-03-15 01:08:32','Mumbai','Bandra','Natures Basket',1,1,'1457984334105343','SUCCESS',1,0),(239,NULL,3,'{\"Total\": 160.0, \"Items\": [{\"Barcode\": \"8901262150378\", \"Price\": 80.0, \"Quantity\": 2, \"ProductName\": \"Amul Lite Milk\", \"TotalPrice\": 160.0}], \"ItemCount\": 2}',209,160,'2016-03-15 01:10:12','Mumbai','Churchgate','Natures Basket',2,0,NULL,NULL,0,NULL),(240,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8901030343698\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Vaseline Cocoa Butter\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',210,100,'2016-03-15 01:10:48','Mumbai','Bandra','Natures Basket',1,0,NULL,NULL,0,NULL),(241,NULL,2,'{\"Total\": 100.0, \"Items\": [{\"Barcode\": \"8901030343698\", \"Price\": 100.0, \"Quantity\": 1, \"ProductName\": \"Vaseline Cocoa Butter\", \"TotalPrice\": 100.0}], \"ItemCount\": 1}',210,100,'2016-03-15 01:12:26','Mumbai','Bandra','Natures Basket',1,1,'145798456213113','SUCCESS',1,0);
/*!40000 ALTER TABLE `transactionmasterlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verifyqueue`
--

DROP TABLE IF EXISTS `verifyqueue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verifyqueue` (
  `OutletID` int(11) DEFAULT NULL,
  `MobileNumber` bigint(20) DEFAULT NULL,
  `FinalQuantity` int(11) DEFAULT NULL,
  `ItemName` text,
  `TransactionID` int(11) DEFAULT NULL,
  `IsVerified` int(11) DEFAULT NULL,
  `TransactionVerified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verifyqueue`
--

LOCK TABLES `verifyqueue` WRITE;
/*!40000 ALTER TABLE `verifyqueue` DISABLE KEYS */;
INSERT INTO `verifyqueue` VALUES (3,7854698524,10,'Nexus5X',50,1,NULL),(6,45334535,10,'fsdfs',47,0,NULL),(6,465454,10,'ffs',47,0,NULL),(2,45334535,10,'fsdfs',47,0,NULL),(2,465454,10,'ffs',47,0,NULL),(5,45334535,10,'fsdfs',47,1,NULL),(5,465454,10,'ffs',47,1,NULL),(7,45334535,10,'fsdfs',47,0,NULL),(7,465454,10,'ffs',47,0,NULL),(8,45334535,10,'fsdfs',47,0,NULL),(8,465454,10,'ffs',47,0,NULL),(4,45334535,10,'fsdfs',46,0,NULL),(4,465454,10,'ffs',49,0,NULL),(4,3216549870,1,'Amul Lite Milk',35,0,NULL),(4,3216549870,1,'Amul Lite Milk',80,0,NULL),(10,45334535,10,'fsdfs',50,0,NULL),(10,465454,10,'ffs',50,0,NULL),(10,45334535,10,'fsdfs',51,0,NULL),(10,465454,10,'ffs',51,0,NULL),(10,45334535,10,'fsdfs',52,0,NULL),(10,465454,10,'ffs',52,0,NULL),(11,45334535,10,'fsdfs',53,0,NULL),(11,465454,10,'ffs',53,0,NULL),(11,45334535,10,'fsdfs',54,0,NULL),(11,465454,10,'ffs',54,0,NULL),(11,45334535,10,'fsdfs',55,0,NULL),(11,465454,10,'ffs',55,0,NULL),(12,45334535,10,'fsdfs',56,0,NULL),(12,465454,10,'ffs',56,0,NULL),(12,45334535,10,'fsdfs',57,0,NULL),(12,465454,10,'ffs',57,0,NULL),(12,45334535,10,'fsdfs',58,0,NULL),(12,465454,10,'ffs',58,0,NULL),(4,7506091276,1,'Gatorade 6 Pack',60,0,NULL),(3,3216549870,1,'Peanut Butter',65,0,NULL),(2,7506091276,1,'Bagrrys Muesli',81,0,NULL),(2,7506091276,1,'Bagrrys Muesli',98,0,0),(2,9920712205,3,'Snickers',114,0,0),(2,9920712205,3,'Snickers',134,0,0),(2,9920712205,3,'Snickers',137,0,0),(2,9920712205,3,'Snickers',143,0,0),(2,9920712205,3,'Snickers',158,1,1),(2,7506091276,2,'Kellogs Oats',196,1,1),(2,7506091276,1,'Gatorade 6 Pack',196,1,1),(2,7506091276,1,'Gatorade 6 Pack',197,1,1),(2,9920712205,1,'Fructis Hair Serum',199,1,1),(2,9920712205,1,'Tetley Green Tea',199,1,1),(2,9920712205,1,'Vaseline Cocoa Butter',199,1,1),(2,9920712205,0,'Fructis Hair Serum',204,1,1),(2,9920712205,1,'Snickers',204,1,1),(2,7506091276,1,'Gatorade 6 Pack',206,1,1),(2,7506091276,1,'Gatorade 6 Pack',212,1,1),(3,8984682823,2,'Amul Lite Milk',239,0,0);
/*!40000 ALTER TABLE `verifyqueue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viewlist`
--

DROP TABLE IF EXISTS `viewlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `viewlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advertid` int(11) NOT NULL,
  `customerid` varchar(40) NOT NULL,
  `city` varchar(100) NOT NULL,
  `advertproductcode` varchar(40) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewlist`
--

LOCK TABLES `viewlist` WRITE;
/*!40000 ALTER TABLE `viewlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `viewlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `websitecounter`
--

DROP TABLE IF EXISTS `websitecounter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `websitecounter` (
  `Counter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Counter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `websitecounter`
--

LOCK TABLES `websitecounter` WRITE;
/*!40000 ALTER TABLE `websitecounter` DISABLE KEYS */;
/*!40000 ALTER TABLE `websitecounter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `whizzbuycommission`
--

DROP TABLE IF EXISTS `whizzbuycommission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `whizzbuycommission` (
  `MerchantCode` varchar(20) NOT NULL,
  `Commission` int(11) DEFAULT NULL,
  `ServiceTax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`MerchantCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `whizzbuycommission`
--

LOCK TABLES `whizzbuycommission` WRITE;
/*!40000 ALTER TABLE `whizzbuycommission` DISABLE KEYS */;
/*!40000 ALTER TABLE `whizzbuycommission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'whizzbuydev'
--
/*!50003 DROP PROCEDURE IF EXISTS `GetCustomerId` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `GetCustomerId`(IN `c_mobile` VARCHAR(13), OUT `c_id` INT)
    NO SQL
BEGIN
    SELECT CustomerId INTO c_id FROM customermaster where MobileNO = c_mobile;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spCheckVerified` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spCheckVerified`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	
	select * from customersession 
		
		where 
			CustomerId=(SELECT `CustomerId` FROM customermaster WHERE MobileNO = mobile) and isVerified is null;
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spCreateCustomer` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spCreateCustomer`(IN `mobile` VARCHAR(13), IN `password` VARCHAR(500), IN `firstname` VARCHAR(500), IN `lastname` VARCHAR(500), IN `email` VARCHAR(500), IN `lifestyle` VARCHAR(500), IN `dob` DATE, IN `otp` INT(4), IN `time` TIMESTAMP, IN `platform` ENUM('1','2'), IN `gender` ENUM('1','2'))
    NO SQL
BEGIN
    DECLARE v_id int;
    CALL spCreateMaster(mobile, password);
    CALL GetCustomerId(mobile, v_id);
	CALL spCreateCustomerSession(v_id, otp, time);
    INSERT INTO `customerlist`(`CustomerID`, `FirstName`, `LastName`, `EmailID`, `LifeStyle`, `DOB`, `TypeMarker`, `Gender`)
	VALUES (v_id, firstname, lastname, email, lifestyle , dob, platform, gender);
   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spCreateCustomerSession` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spCreateCustomerSession`(IN `c_id` INT(11), IN `otp` INT(4), IN `time` TIMESTAMP)
    NO SQL
BEGIN

INSERT INTO `customersession`
(`CustomerID`, `OTP`, `OTPCounter`, `SetTime`, `isVerified`)
VALUES 
(c_id,otp,0,time,NULL);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spCreateMaster` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spCreateMaster`(IN `p_mobile` VARCHAR(50), IN `p_Password` VARCHAR(100))
BEGIN

if ( select exists (select 1 from customermaster where MobileNO = p_mobile) ) THEN

    select 'User With This Mobile Number Exists !!';

ELSE

insert into customermaster
(
    MobileNO,
    Password
)
values
(
    p_mobile,
    p_Password
);




END IF;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spGetOtp` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spGetOtp`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	DECLARE c_id int;
	
    SELECT `CustomerId` INTO c_id FROM customermaster WHERE MobileNO = mobile;
	SELECT `OTP` FROM `customersession` WHERE `CustomerID` = c_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spGetOtpCounter` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spGetOtpCounter`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	DECLARE c_id int;
    SELECT CustomerId INTO c_id FROM customermaster where MobileNO = mobile;
	SELECT `OTPCounter` FROM `customersession` WHERE `CustomerID`=c_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spIncrOtpCounter` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spIncrOtpCounter`(IN `mobile` VARCHAR(13), IN `otpcounter` INT(11))
    NO SQL
BEGIN
	
	update customersession 
		set 
			OTPCounter = otpcounter 
		where 
			CustomerId=(SELECT `CustomerId` FROM customermaster WHERE MobileNO = mobile);
	select * from customersession where 
			CustomerId=(SELECT `CustomerId` FROM customermaster WHERE MobileNO = mobile);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spSetIsVerified` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spSetIsVerified`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	DECLARE c_id int;
	
    SELECT `CustomerId` INTO c_id FROM customermaster WHERE MobileNO = mobile;
	UPDATE `customersession` SET `isVerified`= 1, isLoggedIn = 1 WHERE `CustomerID` = c_id;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spUpdateCustomer` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spUpdateCustomer`(IN `firstname` VARCHAR(500), IN `lastname` VARCHAR(500), IN `email` VARCHAR(500), IN `dob` DATE, IN `gender` TINYINT, IN `lifestyle` VARCHAR(50), IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	
	UPDATE `customerlist` 
	SET 
		`FirstName`=firstname,`LastName`=lastname,`EmailID`=email,`DOB`=dob,`LifeStyle`=lifestyle 

	WHERE 
		CustomerId=(SELECT `CustomerId` FROM customermaster WHERE MobileNO = mobile);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `spUpdateOtp` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`whizzbuydev`@`%` PROCEDURE `spUpdateOtp`(IN `mobile` VARCHAR(13), IN `otp` INT(4), IN `time` TIMESTAMP)
    NO SQL
BEGIN
	
	update customersession 
		set 
			OTP = otp,OTPCounter=0, SetTime=time 
		where 
			CustomerId=(SELECT `CustomerId` FROM customermaster WHERE MobileNO = mobile);
	select * from customersession where 
			CustomerId=(SELECT `CustomerId` FROM customermaster WHERE MobileNO = mobile);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-17  0:15:54
