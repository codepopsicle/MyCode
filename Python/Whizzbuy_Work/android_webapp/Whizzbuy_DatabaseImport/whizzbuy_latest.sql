-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: whizzbuy_latest
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
  PRIMARY KEY (`advertid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advertlist`
--

LOCK TABLES `advertlist` WRITE;
/*!40000 ALTER TABLE `advertlist` DISABLE KEYS */;
INSERT INTO `advertlist` VALUES (1,'vfv ','http://google/jvndjk','2','123456','2015-12-09','2016-01-28',34,65,56,'75675675ghbujhnk','2','hhjnj','kjnkjnmk',1,'nkjnk',123,342,34,34,'cgfv hjb mb mn , mn m nm b ','gvbjhb','fvhgbjk,','2','jn kjmn','2015-12-31 09:30:25','2015-12-30 09:00:00',NULL),(3,'NATU1','http://localhost/whizzbuy/images/a539db2548cb974a15d14b080e312b5c.png','1','123456','2015-11-09','2016-01-01',0,0,0,NULL,'5',NULL,NULL,0,NULL,5,5,0,0,'the description','small description','big description','1','TheEvent','0000-00-00 00:00:00','0000-00-00 00:00:00','lolu'),(4,'NATU1','http://localhost/whizzbuy/images/28d0633002cd49991afccdf186bb5d20.jpg','2','11447852','2015-11-11','2016-01-18',0,0,0,NULL,'5',NULL,NULL,0,'Engineering',14,14,0,0,'1',NULL,NULL,'1',NULL,'2015-11-01 00:00:00','0000-00-00 00:00:00','lllll');
/*!40000 ALTER TABLE `advertlist` ENABLE KEYS */;
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
  `Gender` tinyint(4) DEFAULT NULL,
  `EmailID` varchar(500) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `LifeStyle` varchar(500) DEFAULT NULL,
  `CustomerAddress` varchar(500) DEFAULT NULL,
  `CheckedIn` int(11) DEFAULT NULL,
  `TypeMarker` enum('1','2') DEFAULT NULL,
  `ProfileImage` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CustomerID`),
  CONSTRAINT `CustomerList_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerlist`
--

LOCK TABLES `customerlist` WRITE;
/*!40000 ALTER TABLE `customerlist` DISABLE KEYS */;
INSERT INTO `customerlist` VALUES (1,'Abdul','Kalam',NULL,'abdul@gmail.com','1994-12-01','1','nji, bujnjkn',1,'1','c:\\file\\api.png'),(2,'Johny','Depp',NULL,'depp@gmail.com','0000-00-00','1,2','California, USA',2,'2',NULL),(19,'jnk','dscdvfdv',NULL,'vfdv@gmail.com','2000-12-01','1,3','',0,'1',NULL),(20,'fatema','saifee',NULL,'fsaifee@gmail.com','1994-01-01','1,2,3',NULL,NULL,NULL,NULL),(21,'jnk','dscdvfdv',NULL,'vfdv@gmail.com','2000-12-01','2,3',NULL,NULL,'1',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customermaster`
--

LOCK TABLES `customermaster` WRITE;
/*!40000 ALTER TABLE `customermaster` DISABLE KEYS */;
INSERT INTO `customermaster` VALUES (1,'8989898989','1'),(2,'898989898','2'),(10,'56878712','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(11,'568787121','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(12,'56878712112','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(13,'568787121122','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(14,'5687871211221','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(16,'23454378','6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c0'),(17,'2345437812','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a'),(18,'23454378121','2e2b24f8ee40bb847fe85bb23336a39ef5948e6b49d897419c'),(19,'2345437812112','c913bb9299e6a709ba676ae47a923c09357deabcd59adfd8cc'),(20,'234','c913bb9299e6a709ba676ae47a923c09357deabcd59adfd8cc'),(21,'234234','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a');
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
INSERT INTO `customersession` VALUES (18,NULL,NULL,NULL,NULL,'2015-12-22 08:30:14',NULL,NULL,NULL),(19,'','0000-00-00 00:00:00','6780',0,'2015-12-20 16:44:24',0,'0000-00-00 00:00:00',0),(20,NULL,NULL,'1111',0,'2015-12-22 02:50:31',1,'2015-12-22 21:40:58',1),(21,NULL,NULL,'9952',0,'2015-12-24 14:06:13',1,NULL,NULL);
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
  PRIMARY KEY (`CustID`,`TranID`,`Mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customertrannotification`
--

LOCK TABLES `customertrannotification` WRITE;
/*!40000 ALTER TABLE `customertrannotification` DISABLE KEYS */;
/*!40000 ALTER TABLE `customertrannotification` ENABLE KEYS */;
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
INSERT INTO `lifestylelist` VALUES (1,'Royal','ghnfg vnvjkjf'),(2,'Cool','ghkjhjklkjl'),(3,'fcdfv','');
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
  `contactnum` varchar(15) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `outlatitude` varchar(50) DEFAULT NULL,
  `outlongitude` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`outletid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outletlist`
--

LOCK TABLES `outletlist` WRITE;
/*!40000 ALTER TABLE `outletlist` DISABLE KEYS */;
INSERT INTO `outletlist` VALUES (1,'Nature\'s Basket','\"Address String\"','NATU1','NATU1000001','400062','Image','Church123','Church123','Churchgate','Mumbai','','','','45.452154','154.1654121'),(2,'sumat1234','some address','sum4','','474022',NULL,'111','111','GKM','Gwalior','','','','12.45154','-14.16121'),(3,'sumat1234','some address','sum4','sum','474022',NULL,NULL,NULL,'GKM','Gwalior','','','','-12.4154','21.16121'),(4,'sumat1234','some address','sum4','sum4','474022',NULL,'111','111','GKM','Gwalior','','','newoutlet','142.4154','56.1648521'),(5,'sumat1234','some address','sum4','sum5','474022',NULL,'111','111','GKM','Gwalior','','','','-142.4154','-56.1648521'),(6,'Nature\'s Basket','the address','NATU1','Nat6','123456',NULL,'111','111','bokaro','sktn','','','','18.9941792','72.824207'),(7,'Nature\'s Basket','','NATU1','Nat7','',NULL,'111','111','','','','','','98.4154','36.48521'),(8,'Nature\'s Basket','','NATU1','Nat8','',NULL,'111','111','','','','','','36.4154','-89.48921'),(9,'Nature\'s Basket','asasasas','NATU1','Nat9','125478',NULL,NULL,NULL,'sadsadsad','sadsadsadsad','','','','-36.4154','189.48921'),(10,'Nature\'s Basket','hehehehe','NATU1','Nat10','145236',NULL,NULL,NULL,'gole ka mandir','gwalior','','','superoutlet','78.4154','19.48921');
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
  `StarRating` tinyint(4) DEFAULT NULL,
  `TransactionID` int(11) DEFAULT NULL,
  `CustomerName` varchar(500) DEFAULT NULL,
  `Locality` varchar(500) DEFAULT NULL,
  `ProductReviewID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ProductReviewID`),
  KEY `TransactionID` (`TransactionID`),
  KEY `CustomerID` (`CustomerID`),
  CONSTRAINT `ProdReviewList_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`),
  CONSTRAINT `ProdReviewList_ibfk_2` FOREIGN KEY (`TransactionID`) REFERENCES `transactionlist` (`transactionid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodreviewlist`
--

LOCK TABLES `prodreviewlist` WRITE;
/*!40000 ALTER TABLE `prodreviewlist` DISABLE KEYS */;
INSERT INTO `prodreviewlist` VALUES (19,'qwqwqw','cool',4,3,'jnk dscdvfdv','GKM',1),(20,'abababababa','nice',4,1,'fatema saifee','Churchgate',2),(21,'qwqwqw','not so bad',3,3,'jnk dscdvfdv','GKM',3),(20,'34354656456','too good',5,1,'Fatema','Rajwada',4);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportissue`
--

LOCK TABLES `reportissue` WRITE;
/*!40000 ALTER TABLE `reportissue` DISABLE KEYS */;
INSERT INTO `reportissue` VALUES (1,'(u\'jnk dscdvfdv\',)','aditya','234234',NULL),(2,'(u\'jnk dscdvfdv\',)','aditya','234234',NULL),(3,'(u\'fatema saifee\',)','adit','234',NULL),(4,'(u\'fatema saifee\',)','Bad app','234',NULL),(5,'(u\'fatema saifee\',)','Bad app','234',NULL);
/*!40000 ALTER TABLE `reportissue` ENABLE KEYS */;
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
INSERT INTO `shoppinglist` VALUES ('234','C,D','A,B','New'),('2341','0','0','test45'),('234234','test10','test11','test12'),('2345','C,D','A,B','New'),('4561235896','asd','opc','test52'),('5645784214','false','false','test42'),('7845782234','true','false','test32');
/*!40000 ALTER TABLE `shoppinglist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `BarcodeNum` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Weight` int(11) DEFAULT NULL,
  `ProdName` text,
  `Quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (22,150,40,'Maggi',52),(2454,600,15,'Pizza',78),(30546,15000,20,'Mobile',45);
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
  `itembarcode` int(11) NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `itemvalue` float NOT NULL,
  `transactiondate` datetime DEFAULT NULL,
  `itemdesc` varchar(1000) NOT NULL,
  `quantity` varchar(10) NOT NULL,
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
INSERT INTO `transactionlist` VALUES (1,'NATU1',1,0,20,1000,'2015-10-08 12:24:09','very usefull for you','3'),(3,'NATU1',2,9999,20,0,'2015-11-24 00:00:00','vdjmlvkm vmld','1'),(1,'SUMMIT',4,324342,20,12345,'2015-12-24 00:00:00','wow!!','123'),(1,'cfkdnk',2,809,20,678,'2015-12-17 00:00:00','very Bad','1');
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
  `TransactionDate` datetime DEFAULT NULL,
  `TranCity` varchar(500) DEFAULT NULL,
  `Locality` varchar(500) DEFAULT NULL,
  `CompanyName` varchar(500) DEFAULT NULL,
  `TotItems` int(11) DEFAULT NULL,
  PRIMARY KEY (`TransactionID`),
  KEY `OutletID` (`OutletID`,`CustomerID`),
  KEY `CustomerID` (`CustomerID`),
  CONSTRAINT `TransactionMasterList_ibfk_1` FOREIGN KEY (`OutletID`) REFERENCES `outletlist` (`outletid`),
  CONSTRAINT `TransactionMasterList_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customermaster` (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactionmasterlist`
--

LOCK TABLES `transactionmasterlist` WRITE;
/*!40000 ALTER TABLE `transactionmasterlist` DISABLE KEYS */;
INSERT INTO `transactionmasterlist` VALUES (1,'NATU1',1,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,100000,'2015-12-29 05:00:00','Mumbai','Churchgate','Big Bazaar',0),(2,'SUMMIt',2,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,5426.46,'2015-12-30 12:00:00','Pune','Ganghi Nagar','Pizza Hut',0),(3,'NATU1',4,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,1111.11,'2015-12-30 00:00:41','Delhi','Parliament House','Dominos',0),(5,'NATU1',5,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,2222.22,'2015-12-25 00:00:00','Mumbai','Bhindi Bazaar','pizza hut',0),(6,'SUMMIT',5,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',21,5555.9,'2015-12-16 00:00:00','Pune','MG Road','Monginis',0),(7,'SUMMIT',1,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,99999,'2016-01-28 00:00:00','Mumbai','Churchgate','Big Bazaar',11),(8,'FHNHN',1,'{\r\n    \"receiptString\": {\r\n        \"ID\": [\r\n            {\"TransactionID\":1}\r\n        ],\r\n        \"Date\": [\r\n            {\"TransactionDate\":\"12-12-2015\"}\r\n        ],\r\n		\"Items\": [\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000},\r\n            {\"Item\":1, \"Price\":1000, \"Quantity\":\"standard\", \"TotalValue\":1000}\r\n        ],\r\n		\"Total\": [\r\n            {\"Gross\":2000}\r\n        ],\r\n		\"ItemCount\": [\r\n            {\"TotalItems\":2}\r\n        ]\r\n    }\r\n}',20,45623.1,'2016-01-26 00:00:00','Mumbai','Churchgate','Big Bazaar',7);
/*!40000 ALTER TABLE `transactionmasterlist` ENABLE KEYS */;
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
-- Dumping routines for database 'whizzbuy_latest'
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetCustomerId`(IN `c_mobile` VARCHAR(13), OUT `c_id` INT)
    NO SQL
BEGIN
    SELECT CustomerId INTO c_id FROM CustomerMaster where MobileNO = c_mobile;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spCheckVerified`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	
	select * from CustomerSession 
		
		where 
			CustomerId=(SELECT `CustomerId` FROM CustomerMaster WHERE MobileNO = mobile) and isVerified is null;
	
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spCreateCustomer`(IN `mobile` VARCHAR(13), IN `password` VARCHAR(500), IN `firstname` VARCHAR(500), IN `lastname` VARCHAR(500), IN `email` VARCHAR(500), IN `lifestyle` VARCHAR(500), IN `dob` DATE, IN `otp` INT(4), IN `time` TIMESTAMP, IN `platform` ENUM('1','2'))
    NO SQL
BEGIN
    DECLARE v_id int;
    CALL spCreateMaster(mobile, password);
    CALL GetCustomerId(mobile, v_id);
	CALL spCreateCustomerSession(v_id, otp, time);
    INSERT INTO `CustomerList`(`CustomerID`, `FirstName`, `LastName`, `EmailID`, `LifeStyle`, `DOB`, `TypeMarker`)
	VALUES (v_id, firstname, lastname, email, lifestyle , dob, platform);
   
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spCreateCustomerSession`(IN `c_id` INT(11), IN `otp` INT(4), IN `time` TIMESTAMP)
    NO SQL
BEGIN

INSERT INTO `CustomerSession`
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spCreateMaster`(IN `p_mobile` VARCHAR(50), IN `p_Password` VARCHAR(50))
BEGIN

if ( select exists (select 1 from CustomerMaster where MobileNO = p_mobile) ) THEN

    select 'User With This Mobile Number Exists !!';

ELSE

insert into CustomerMaster
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spGetOtp`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	DECLARE c_id int;
	
    SELECT `CustomerId` INTO c_id FROM CustomerMaster WHERE MobileNO = mobile;
	SELECT `OTP` FROM `CustomerSession` WHERE `CustomerID` = c_id;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spGetOtpCounter`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	DECLARE c_id int;
    SELECT CustomerId INTO c_id FROM CustomerMaster where MobileNO = mobile;
	SELECT `OTPCounter` FROM `CustomerSession` WHERE `CustomerID`=c_id;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spIncrOtpCounter`(IN `mobile` VARCHAR(13), IN `otpcounter` INT(11))
    NO SQL
BEGIN
	
	update CustomerSession 
		set 
			OTPCounter = otpcounter 
		where 
			CustomerId=(SELECT `CustomerId` FROM CustomerMaster WHERE MobileNO = mobile);
	select * from CustomerSession where 
			CustomerId=(SELECT `CustomerId` FROM CustomerMaster WHERE MobileNO = mobile);
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spSetIsVerified`(IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	DECLARE c_id int;
	
    SELECT `CustomerId` INTO c_id FROM CustomerMaster WHERE MobileNO = mobile;
	UPDATE `CustomerSession` SET `isVerified`= 1 WHERE `CustomerID` = c_id;
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateCustomer`(IN `firstname` VARCHAR(500), IN `lastname` VARCHAR(500), IN `email` VARCHAR(500), IN `dob` DATE, IN `gender` TINYINT, IN `lifestyle` VARCHAR(50), IN `mobile` VARCHAR(13))
    NO SQL
BEGIN
	
	UPDATE `CustomerList` 
	SET 
		`FirstName`=firstname,`LastName`=lastname,`EmailID`=email,`DOB`=dob,`LifeStyle`=lifestyle 

	WHERE 
		CustomerId=(SELECT `CustomerId` FROM CustomerMaster WHERE MobileNO = mobile);
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `spUpdateOtp`(IN `mobile` VARCHAR(13), IN `otp` INT(4), IN `time` TIMESTAMP)
    NO SQL
BEGIN
	
	update CustomerSession 
		set 
			OTP = otp,OTPCounter=0, SetTime=time 
		where 
			CustomerId=(SELECT `CustomerId` FROM CustomerMaster WHERE MobileNO = mobile);
	select * from CustomerSession where 
			CustomerId=(SELECT `CustomerId` FROM CustomerMaster WHERE MobileNO = mobile);
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

-- Dump completed on 2016-01-15  0:07:39
