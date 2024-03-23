-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: xyt
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `adminID` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=1023 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1016,'iraauy','iraa12','iraauy12345@gmail.com','c20ad4d76fe97759aa27a0c99bff6710','c20ad4d76fe97759aa27a0c99bff6710','Ceo','Purchasing Department','Active'),(1017,'Wimple ','wimple2','wimple1218@gmail.com','c20ad4d76fe97759aa27a0c99bff6710','c20ad4d76fe97759aa27a0c99bff6710','Head','Purchasing Department','Active'),(1021,'Wimple Aira Umaoeng','wimple123','wimple123@gmail.com','c20ad4d76fe97759aa27a0c99bff6710','c20ad4d76fe97759aa27a0c99bff6710','Head','Sales Department','Active'),(1022,'Wimple Aira Umaoeng ','wimpee','wimpee1218@gmail.com','c20ad4d76fe97759aa27a0c99bff6710','c20ad4d76fe97759aa27a0c99bff6710','Ceo','Purchasing Department','Active');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `costumer`
--

DROP TABLE IF EXISTS `costumer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `costumer` (
  `customerID` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `new_address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=11024 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `costumer`
--

LOCK TABLES `costumer` WRITE;
/*!40000 ALTER TABLE `costumer` DISABLE KEYS */;
/*INSERT INTO `costumer` VALUES (11021,'Wimple Aira Umaoeng ','wimple123','wimple@gmail.com','9272938801','Boston City','Davao City','Active','2021-05-06 09:59:00'),(11023,'Felven Cidro','felv1234','felv123@gmail.com','9272938801','Surigao City','Davao City ','Active','2021-05-11 07:30:00');
/*!40000 ALTER TABLE `costumer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_list`
--

DROP TABLE IF EXISTS `order_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_list` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `subtotal` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cart_id` varchar(10) DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_list`
--

LOCK TABLES `order_list` WRITE;
/*!40000 ALTER TABLE `order_list` DISABLE KEYS */;
/*INSERT INTO `order_list` VALUES (1,'10015 7000 12',7000,2,0,'2021-05-12 11:45:19',NULL,NULL),(10,'Battery',4000,3,12000,'2021-05-18 15:53:15','6bxvPt6vNI',10012),(11,'Brakes',3000,3,9000,'2021-05-18 15:53:34','6bxvPt6vNI',10014),(14,'Isuzu',350,3,1050,'2021-05-18 16:31:55','6bxvPt6vNI',10016),(33,'Brakes',3000,1,3000,'2021-05-18 18:44:54','UuhH82GIox',10014),(34,'TOYOTA',650,2,1300,'2021-05-18 18:45:07','UuhH82GIox',10017),(35,'A/C',7000,3,21000,'2021-05-18 18:45:11','UuhH82GIox',10015),(36,'Battery',4000,1,4000,'2021-05-18 18:48:14','wfbGVor0zJ',10012),(37,'A/C',7000,2,14000,'2021-05-18 18:48:20','wfbGVor0zJ',10015),(38,'TOYOTA',650,1,650,'2021-05-18 18:48:24','wfbGVor0zJ',10017),(39,'Battery',4000,3,12000,'2021-05-18 19:09:59','aRT7d58wKq',10012),(40,'TOYOTA',650,1,650,'2021-05-18 19:10:10','aRT7d58wKq',10017),(41,'Brakes',3000,1,3000,'2021-05-18 21:59:20','3SL4ssAofk',10014),(42,'A/C',7000,1,7000,'2021-05-18 21:59:29','3SL4ssAofk',10015),(43,'Brakes',3000,1,3000,'2021-05-18 22:01:33','RVqHp4GnpT',10014),(44,'TOYOTA',650,5,3250,'2021-05-18 22:01:40','RVqHp4GnpT',10017),(45,'Brakes',3000,1,3000,'2021-05-18 22:12:13','PdTJWPpoU3',10014),(46,'Isuzu',350,3,1050,'2021-05-18 22:12:19','PdTJWPpoU3',10016),(47,'Isuzu',350,6,2100,'2021-05-18 22:19:06','TMWEN1NF5A',10016),(49,'TOYOTA',650,5,3250,'2021-05-18 22:19:39','TMWEN1NF5A',10017),(50,'Isuzu',350,5,1750,'2021-05-18 22:20:30','ugsvM8omis',10016),(51,'TOYOTA',650,5,3250,'2021-05-18 22:20:36','ugsvM8omis',10017);
/*!40000 ALTER TABLE `order_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset`
--

DROP TABLE IF EXISTS `password_reset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset` (
  `resetPassID` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`resetPassID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset`
--

LOCK TABLES `password_reset` WRITE;
/*!40000 ALTER TABLE `password_reset` DISABLE KEYS */;
/*INSERT INTO `password_reset` VALUES (4,'iraauy12345@gmail.com','1609ca380ca793','0000-00-00'),(5,'iraauy12345@gmail.com','1609ca52baf015','0000-00-00'),(6,'iraauy12345@gmail.com','1609ca6c9a418b','0000-00-00'),(7,'iraauy12345@gmail.com','1609ca720c0b99','0000-00-00'),(8,'iraauy12345@gmail.com','1609ca72c7b96d','0000-00-00'),(9,'iraauy12345@gmail.com','1609ca7370498a','0000-00-00'),(10,'iraauy12345@gmail.com','1609ca75a52b14','0000-00-00'),(11,'iraauy12345@gmail.com','1609ca7e3c3d7a','0000-00-00'),(12,'iraauy12345@gmail.com','1609ca7f70b859','0000-00-00'),(13,'iraauy12345@gmail.com','1609ca818835b7','0000-00-00'),(14,'iraauy12345@gmail.com','1609ca87029c79','0000-00-00'),(15,'iraauy12345@gmail.com','1609ca8848b989','0000-00-00');
/*!40000 ALTER TABLE `password_reset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `productID` int NOT NULL AUTO_INCREMENT,
  `productCode` varchar(25) DEFAULT NULL,
  `productName` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productDetails` varchar(255) NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `unitPrice` double DEFAULT NULL,
  `quantity` int NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=10018 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*INSERT INTO `product` VALUES (10012,'prod-2','Battery','Motor Battery','12-volt battery, AC power','Alfa Romeo: Stellantis.',4000,96,'Active'),(10014,'prod-3','Brakes','Motor parts hand brake','Sizes 5-35, AC solenoid/linkage brakes','Audi: Volkswagen Group.',3000,97,'Active'),(10015,'prod-4','A/C Compressor','A/C Motor',' Volts  220V, Hertz   60Hz, LRA 65','BMW: BMW Group.',7000,97,'Active'),(10016,'prod-1','Isuzu Radiator Cap 1.1',' Motor Parts',' 1.1 kg/cm2 (equivalent to 108kPa)','Acura: Honda Motor Company.',350,89,'Active'),(10017,'prod-5','TOYOTA DIESEL ','Injector Cleaner',' DIESEL 250ML,Toyota','Buick: General Motors.',650,83,'Active');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_in`
--

DROP TABLE IF EXISTS `stock_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stock_in` (
  `stockinID` int NOT NULL AUTO_INCREMENT,
  `productCode` varchar(255) DEFAULT NULL,
  `productName` varchar(255) NOT NULL,
  `Supplier` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`stockinID`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_in`
--

LOCK TABLES `stock_in` WRITE;
/*!40000 ALTER TABLE `stock_in` DISABLE KEYS */;
/*INSERT INTO `stock_in` VALUES (93,'prod-1','Isuzu Radiator Cap 1.1','Acura: Honda Motor Company.',5,'2021-05-11 07:21:26'),(94,'prod-1','Isuzu Radiator Cap 1.1','Acura: Honda Motor Company.',1,'2021-05-12 08:53:57');
/*!40000 ALTER TABLE `stock_in` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supplier` (
  `supplierID` int NOT NULL AUTO_INCREMENT,
  `supplierName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNumber` varchar(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`supplierID`)
  --  KEY `product_id` (`supplierID`),
  -- CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`supplierID`) REFERENCES `product` (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=1011 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
/*INSERT INTO `supplier` VALUES (1006,'Acura: Honda Motor Company.','acura@gmail.com','9272938801','Davao Branch','Active','2021-05-11 07:18:00'),(1007,'Alfa Romeo: Stellantis.','alfa@gmail.com','9272938801','Boston Branch','Active','2021-05-11 07:18:33'),(1008,'Audi: Volkswagen Group.','audi@gmail.com','9272938801','Carmen Branch','Active','2021-05-11 07:19:00'),(1009,'BMW: BMW Group.','bmw@gmail.com','9272938801','123 Mawab Branch','Active','2021-05-11 07:19:35'),(1010,'Buick: General Motors.','buick@gmail.com','9272938801','Manila Branch','Active','2021-05-11 07:20:12');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction` (
  `transID` int NOT NULL AUTO_INCREMENT,
  `cashierID` int NOT NULL,
  `orderID` int NOT NULL,
  `productID` int NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `unitPrice` double DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `subtotal` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `discount` int DEFAULT '0',
  `cart_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`transID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
/*INSERT INTO `transaction` VALUES (22,1016,36,10012,'Battery',4000,1,4000,'2021-05-18 18:53:48',20,'wfbGVor0zJ'),(23,1016,37,10015,'A/C',7000,2,14000,'2021-05-18 18:53:48',20,'wfbGVor0zJ'),(24,1016,38,10017,'TOYOTA',650,1,650,'2021-05-18 18:53:48',20,'wfbGVor0zJ'),(25,1016,39,10012,'Battery',4000,3,12000,'2021-05-18 19:10:13',20,'aRT7d58wKq'),(26,1016,40,10017,'TOYOTA',650,1,650,'2021-05-18 19:10:13',20,'aRT7d58wKq'),(27,1016,41,10014,'Brakes',3000,1,3000,'2021-05-18 21:59:32',0,'3SL4ssAofk'),(28,1016,42,10015,'A/C',7000,1,7000,'2021-05-18 21:59:32',0,'3SL4ssAofk'),(29,1016,43,10014,'Brakes',3000,1,3000,'2021-05-18 22:01:48',0,'RVqHp4GnpT'),(30,1016,44,10017,'TOYOTA',650,5,3250,'2021-05-18 22:01:48',0,'RVqHp4GnpT'),(31,1016,47,10016,'Isuzu',350,6,2100,'2021-05-18 22:19:44',0,'TMWEN1NF5A'),(32,1016,49,10017,'TOYOTA',650,5,3250,'2021-05-18 22:19:44',0,'TMWEN1NF5A'),(33,1016,50,10016,'Isuzu',350,5,1750,'2021-05-18 22:20:43',20,'ugsvM8omis'),(34,1016,51,10017,'TOYOTA',650,5,3250,'2021-05-18 22:20:43',20,'ugsvM8omis');
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password1` varchar(255) NOT NULL,
  `password2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (24,'iraa uy','iraauy@gmail.com','Iraa12 ','User','c20ad4d76fe97759aa27a0c99bff6710','c20ad4d76fe97759aa27a0c99bff6710','Active'),(25,'wimple uy','wimple12@gmail.com','wimple12','User','c20ad4d76fe97759aa27a0c99bff6710','c20ad4d76fe97759aa27a0c99bff6710','Active');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-19  9:00:57
