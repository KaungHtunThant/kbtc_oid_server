-- MySQL dump 10.13  Distrib 5.7.40, for Linux (x86_64)
--
-- Host: localhost    Database: kbtc_oid
-- ------------------------------------------------------
-- Server version	5.7.40-0ubuntu0.18.04.1

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
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `deptID` int(11) NOT NULL AUTO_INCREMENT,
  `deptName` varchar(255) DEFAULT NULL,
  `deptStatus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`deptID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `empID` varchar(255) NOT NULL,
  `empName` varchar(255) DEFAULT NULL,
  `empNRC` varchar(255) DEFAULT NULL,
  `empPositionID` int(11) DEFAULT NULL,
  `empDeptID` int(11) DEFAULT NULL,
  `empJoinDate` varchar(255) DEFAULT NULL,
  `empKey` varchar(255) DEFAULT NULL,
  `empStatus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES ('KBTC-1234','Hello','a.scno98',1,1,'alsvos9e','RandomBullPoopString',1),('Mark','Otto','12a;scevev',5,2,'alqsnvoid ','RandomBullshitString',1),('Mark-1','Otto','12/AhSaNa(N)234310',3,1,'1-1-2023','RandomBullshitString',1),('Mark-11','ReadMe','alsinhla',87,56,'019274hkv','RandomBullshitString',1),('Mark-123','Otto','wfhoefe',2,2,'019234','RandomBullshitString',1),('Mark-2','Sebbas','12a;scevev',4,10,'dshiuol b','RandomBullshitString',1),('Mark-3','Eugene','12a;scevev',5,8,'1235.sdv','RandomBullshitString',1),('Mark-30','Otto','asd',1,7,'alnsoo ov','RandomBullshitString',1),('Mark-31','Eugene','12/ASN(N)234310',3,1,'alsvos9e','RandomBullPoopString',1),('Mark-32','Mono','mono12',12,21,'21120921','RandomBullshitString',1),('Mark-35','Otto-45','35',1,1,'asihdev','RandomBullPoopString',1),('Mark-4','GG','onofhiq s',9,7,'0127jvnv','RandomBullshitString',1),('Mark-43','Loco','loco3219',32,12,'192131','RandomBullshitString',1),('Mark-49','Otto49','49',2,5,'49','RandomBullPoopString',1),('Mark-50','Otto-3','a.scno98',4,33,'123zaczxvb','RandomBullPoopString',1),('Mark-6','HH','0917247',99,5,'siunhi voen','RandomBullshitString',1),('Mark-75','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-76','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-77','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-78','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-79','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-80','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-81','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-85','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-87','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1),('Mark-89','FF','a.scno98',77,1,'alsvos9e','RandomBullshitString',1);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `posID` int(11) NOT NULL AUTO_INCREMENT,
  `posName` varchar(255) DEFAULT NULL,
  `posStatus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`posID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-09 14:07:19
