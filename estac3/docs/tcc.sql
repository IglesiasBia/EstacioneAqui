-- MySQL dump 10.13  Distrib 8.0.28, for macos11.6 (x86_64)
--
-- Host: 192.168.64.3    Database: sistema_ge
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(50) DEFAULT NULL,
  `cpf_cli` char(11) DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (33,'Beatriz','11111'),(34,'Raphaela','22222'),(35,'Lethicia','33333'),(36,'Hugo','44444'),(37,'Isaac','55555'),(38,'Jesua','66666'),(41,'Cliente não declarado','0'),(42,'Cliente não declarado','0'),(43,'Cliente não declarado','0'),(44,'Cliente não declarado','0'),(45,'Cliente não declarado','0'),(46,'Cliente não declarado','0'),(47,'Cliente não declarado','0'),(48,'Cliente não declarado','0'),(49,'Cliente não declarado','0'),(50,'Cliente não declarado','0'),(51,'Cliente não declarado','0'),(52,'Cliente não declarado','0'),(53,'Paula','8888888'),(54,'Cliente não declarado','0'),(55,'Cliente não declarado','0'),(56,'Cliente não declarado','0'),(57,'Cliente não declarado','0'),(58,'Cliente não declarado','0'),(59,'Cliente não declarado','0'),(60,'Cliente não declarado','0'),(61,'Cliente não declarado','0'),(62,'Cliente não declarado','0'),(63,'Cliente não declarado','0'),(64,'Cliente não declarado','0'),(65,'Cliente não declarado','0'),(66,'Cliente não declarado','0'),(67,'Cliente não declarado','0'),(68,'Cliente não declarado','0'),(69,'Cliente não declarado','0'),(70,'Cliente não declarado','0'),(71,'Cliente não declarado','0'),(72,'Cliente não declarado','0'),(73,'Cliente não declarado','0'),(74,'Cliente não declarado','0'),(75,'Cliente não declarado','0'),(76,'Cliente não declarado','0'),(77,'Cliente não declarado','0'),(78,'Cliente não declarado','0'),(79,'Cliente não declarado','0'),(80,'Cliente não declarado','0'),(81,'Cliente não declarado','0'),(82,'Cliente não declarado','0'),(83,'Cliente não declarado','0'),(84,'Cliente não declarado','0'),(85,'Cliente não declarado','0'),(86,'Cliente não declarado','0'),(87,'Cliente não declarado','0'),(88,'Cliente não declarado','0'),(89,'Cliente não declarado','0'),(90,'Cliente não declarado','0'),(91,'Cliente não declarado','0'),(92,'Cliente não declarado','0'),(93,'Cliente não declarado','0'),(94,'Cliente não declarado','0'),(95,'Cliente não declarado','0'),(96,'Cliente não declarado','0'),(97,'Cliente não declarado','0'),(98,'Cliente não declarado','0'),(99,'Cliente não declarado','0'),(100,'Cliente não declarado','0'),(101,'Cliente não declarado','0'),(102,'Cliente não declarado','0'),(103,'Cliente não declarado','0'),(104,'Cliente não declarado','0'),(105,'Cliente não declarado','0'),(106,'Cliente não declarado','0'),(107,'Cliente não declarado','0'),(108,'Cliente não declarado','0'),(109,'Cliente não declarado','0'),(110,'Cliente não declarado','0'),(111,'Cliente não declarado','0'),(112,'Cliente não declarado','0'),(113,'Cliente não declarado','0'),(114,'Cliente não declarado','0'),(115,'Cliente não declarado','0'),(116,'Cliente não declarado','0'),(117,'Cliente não declarado','0'),(118,'Cliente não declarado','0'),(119,'Cliente não declarado','0'),(120,'Cliente não declarado','0'),(121,'Cliente não declarado','0'),(122,'Cliente não declarado','0'),(123,'Cliente não declarado','0'),(124,'Cliente não declarado','0'),(125,'Cliente não declarado','0'),(126,'Cliente não declarado','0'),(127,'Cliente não declarado','0'),(128,'Cliente não declarado','0'),(129,'Cliente não declarado','0'),(130,'Cliente não declarado','0'),(131,'Cliente não declarado','0'),(132,'Cliente não declarado','0'),(133,'Cliente não declarado','0'),(134,'Cliente não declarado','0'),(135,'Cliente não declarado','0'),(136,'Cliente não declarado','0'),(137,'Cliente não declarado','0'),(138,'Cliente não declarado','0'),(139,'Cliente não declarado','0'),(140,'Cliente não declarado','0'),(141,'Cliente não declarado','0'),(142,'Cliente não declarado','0'),(143,'Cliente não declarado','0'),(144,'Cliente não declarado','0'),(145,'Cliente não declarado','0'),(146,'Cliente não declarado','0'),(147,'Cliente não declarado','0'),(148,'Cliente não declarado','0'),(149,'Cliente não declarado','0'),(150,'Cliente não declarado','0'),(151,'Cliente não declarado','0'),(152,'Cliente não declarado','0'),(153,'Cliente não declarado','0'),(154,'Cliente não declarado','0'),(155,'Cliente não declarado','0'),(156,'Cliente não declarado','0'),(157,'Cliente não declarado','0'),(158,'Cliente não declarado','0'),(159,'Cliente não declarado','0'),(160,'Cliente não declarado','0'),(161,'Cliente não declarado','0'),(162,'Cliente não declarado','0'),(163,'Cliente não declarado','0'),(164,'Cliente não declarado','0'),(165,'Cliente não declarado','0'),(166,'Cliente não declarado','0'),(167,'Cliente não declarado','0'),(168,'Cliente não declarado','0'),(169,'Cliente não declarado','0'),(170,'Cliente não declarado','0'),(171,'Cliente não declarado','0'),(172,'Cliente não declarado','0'),(173,'Cliente não declarado','0'),(174,'Cliente não declarado','0'),(175,'Cliente não declarado','0'),(176,'Cliente não declarado','0'),(177,'Cliente não declarado','0'),(178,'Cliente não declarado','0'),(179,'Cliente não declarado','0'),(180,'Cliente não declarado','0'),(181,'Cliente não declarado','0'),(182,'Cliente não declarado','0'),(183,'Cliente não declarado','0'),(184,'Cliente não declarado','0'),(185,'Cliente não declarado','0'),(186,'Cliente não declarado','0'),(187,'Cliente não declarado','0');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estacionamento`
--

DROP TABLE IF EXISTS `estacionamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estacionamento` (
  `id_estac` int(11) NOT NULL AUTO_INCREMENT,
  `nome_estac` varchar(50) DEFAULT NULL,
  `cnpj_estac` char(14) DEFAULT NULL,
  `num_estac` char(5) DEFAULT NULL,
  `comp_estac` varchar(20) DEFAULT NULL,
  `preco_estac` float DEFAULT NULL,
  `frac_hr_estac` float DEFAULT NULL,
  `quant_vaga` char(5) DEFAULT NULL,
  `preco_pernoite` float DEFAULT NULL,
  `quant_pavimento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estac`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estacionamento`
--

LOCK TABLES `estacionamento` WRITE;
/*!40000 ALTER TABLE `estacionamento` DISABLE KEYS */;
INSERT INTO `estacionamento` VALUES (1,'Estacione Aqui','166666','33','sla',4,2,'26',50.2,2);
/*!40000 ALTER TABLE `estacionamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `func_usu`
--

DROP TABLE IF EXISTS `func_usu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `func_usu` (
  `senha_func` varchar(12) DEFAULT NULL,
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `func_usu` varchar(30) DEFAULT NULL,
  KEY `id_func` (`id_func`),
  CONSTRAINT `func_usu_ibfk_1` FOREIGN KEY (`id_func`) REFERENCES `funcionario` (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `func_usu`
--

LOCK TABLES `func_usu` WRITE;
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
INSERT INTO `func_usu` VALUES ('bia3',1,'bia'),('leth3',7,'leth'),('rapha3',8,'rapha'),('hugo4',9,'hugo'),('jesua6',10,'jesua'),('isaac5',11,'isaac'),('matheus3',13,'matheus'),('',14,'');
/*!40000 ALTER TABLE `func_usu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionario` (
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(50) DEFAULT NULL,
  `nivel_func` char(1) DEFAULT NULL,
  `email_func` varchar(250) DEFAULT NULL,
  `status_func` char(1) DEFAULT NULL,
  `dt_cadastro_func` datetime DEFAULT NULL,
  `cpf_func` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'bia','2','bia@gmail.com','1','2022-09-06 06:33:58','11112'),(7,'Lethicia','3','leth@gmail.com','1','2022-06-28 09:09:57','33333'),(8,'Raphaela','1','rapha@gmail.com','1','2022-06-29 05:09:15','22222'),(9,'Hugo','3','hugo@gmail.com','0','2022-06-29 05:10:47','44444'),(10,'Jesua','3','jesua@gmail.com','0','2022-06-29 08:57:46','66666'),(11,'Isaac','1','isaac@gmail.com','0','2022-07-01 07:31:40','55555'),(13,'Matheus ','3','matheus@gmail.com','1','2022-07-08 09:52:34','66666'),(14,'teste','3','','0','2022-10-21 11:02:32','18181818');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `hr_entrada` datetime DEFAULT NULL,
  `hr_saida` datetime DEFAULT NULL,
  `valor_total_ticket` float DEFAULT NULL,
  `chave` char(4) DEFAULT NULL,
  `placa_veic` varchar(8) DEFAULT NULL,
  `id_vaga` int(11) DEFAULT NULL,
  `status_pg` char(3) DEFAULT NULL,
  `forma_pagamento` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_ticket`),
  KEY `placa_veic` (`placa_veic`),
  KEY `id_vaga` (`id_vaga`),
  CONSTRAINT `id_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vagas` (`id_vaga`),
  CONSTRAINT `placa_veic` FOREIGN KEY (`placa_veic`) REFERENCES `veiculo` (`placa_veic`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (13,'2022-07-01 09:56:19','2022-07-12 21:59:39',0,'0','LHN0114',0,'1',NULL),(15,'2022-07-01 10:03:00','2022-07-01 10:03:00',0,'1','KWR1635',0,'0',NULL),(16,'2022-07-01 10:06:11','2022-07-01 10:06:50',0,'1','LUU3196',0,'0',NULL),(17,'2022-07-01 10:07:02','2022-07-13 20:08:25',0,'1','KUR9257',0,'0',NULL),(18,'2022-07-01 11:39:18','2022-10-02 21:30:49',0,'0','ABC1234',0,'1',NULL),(19,'2022-07-08 09:17:16','2022-07-08 09:17:16',0,'1','RRR8888',0,'0',NULL),(20,'2022-07-08 09:19:22','2022-07-08 09:19:22',0,'1','DDD2222',0,'0',NULL),(21,'2022-07-08 09:21:54','2022-07-08 09:21:54',0,'0','TTT55555',0,'0',NULL),(22,'2022-07-08 09:24:55','2022-07-08 09:24:55',0,'0','III9999',0,'0',NULL),(23,'2022-07-08 09:37:29','2022-07-08 09:37:29',0,'0','RRR3333',0,'0',NULL),(24,'2022-07-08 09:46:37','2022-10-02 21:31:53',0,'1','JJJ7777',0,'0',NULL),(25,'2022-07-08 09:49:20','2022-07-08 09:49:20',0,'0','BBB3333',0,'0',NULL),(26,'2022-07-08 08:53:38','2022-07-08 08:59:31',0,'0','LLL7777',0,'1',NULL),(27,'2022-07-10 12:17:47','2022-11-22 22:58:36',0,'0','BIA3333',0,'0',NULL),(28,'2022-07-12 08:17:26','2022-10-02 21:38:42',0,'0','YYY4444',0,'1',NULL),(29,'2022-07-12 12:17:47','2022-07-12 20:21:16',0,'0','GGG7777',0,'0',NULL),(30,'2022-08-05 21:02:18','2022-08-05 21:02:18',0,'0','GGG1111',0,'0',NULL),(31,'2022-08-06 08:37:41','2022-10-02 22:03:13',0,'0','GGG5555',0,'1',NULL),(32,'2022-08-06 08:40:19','2022-10-02 22:03:13',0,'0','GGG5555',0,'0',NULL),(33,'2022-08-06 08:53:41','2022-11-22 22:58:36',803.2,'0','BIA3333',0,'0','3'),(59,'2022-09-30 03:07:46','2022-09-30 03:10:11',4,'0','OOO3333',0,'1',NULL),(60,'2022-09-30 03:10:32','2022-09-30 03:10:32',0,'0','OOO3333',0,'0',NULL),(61,'2022-10-02 22:14:55','2022-11-16 23:10:21',2,'0','TES1333',0,'1','0'),(62,'2022-10-02 22:16:43','2022-11-16 23:10:21',953,'0','TES1333',0,'1','0'),(63,'2022-10-21 20:40:21','2022-11-16 23:10:21',6,'0','TES1333',5687,'1','0'),(64,'2022-10-21 21:19:52','2022-11-16 23:10:21',-251,'1','TES1333',5693,'0','1'),(65,'2022-11-16 22:31:06','2022-11-16 22:35:32',4,'0','REL9999',0,'1','1'),(66,'2022-11-16 22:35:26','2022-11-16 22:35:32',4,'0','REL9999',0,'1','1'),(67,'2022-11-16 22:37:36','2022-11-16 23:17:27',4,'0','MOT9999',0,'1','1'),(68,'2022-11-16 22:47:50','2022-11-16 23:17:27',4,'0','MOT9999',0,'1','1'),(69,'2022-11-22 22:48:39','2022-11-23 01:04:47',50,'0','TES7777',5692,'1','2'),(70,'2022-11-22 23:00:48','2022-11-22 23:29:04',4,'0','TEST777',0,'1','3'),(71,'2022-11-22 23:01:27','2022-11-22 23:29:04',4,'0','TEST777',0,'0','3'),(72,'2022-11-20 21:20:39','2022-11-20 23:31:01',8,'0','HOV-3711',5690,'1','2'),(73,'2022-11-23 23:29:53','2022-11-23 23:29:59',4,'1','GIG8888',0,'0','0'),(74,'2022-11-23 17:32:25','2022-11-23 23:32:46',14,'0','HXU-7337',0,'1','2'),(75,'2022-10-20 12:34:00','2022-10-20 23:46:06',26,'0','MYZ-4395',0,'1','1'),(76,'2022-10-17 15:35:12','2022-10-17 23:46:22',20,'0','MZY-5645',0,'1','2'),(77,'2022-10-23 19:39:50','2022-09-23 23:46:33',12,'0','HTD-7279',0,'1','3'),(78,'2022-09-23 16:40:43','2022-09-23 23:46:42',18,'0','OPE-0672',0,'1','2'),(79,'2022-10-23 15:41:07','2022-11-23 23:46:54',20,'1','PUT-6699',0,'1','1'),(80,'2022-11-10 15:41:45','2022-11-23 23:47:03',20,'0','KUC-5659',0,'1','1'),(81,'2022-11-10 22:42:00','2022-11-23 23:47:12',6,'1','IPV-0771',0,'1','2'),(82,'2022-11-10 19:42:26','2022-11-23 23:47:19',12,'0','MHZ-0026',0,'1','3'),(83,'2022-11-23 18:56:26','2022-11-24 00:04:41',50,'0','NYP-2051',0,'1','3'),(84,'2022-11-23 17:56:51','2022-11-24 00:05:19',50,'1','RIL-4042',0,'1','3'),(85,'2022-11-23 21:58:58','2022-11-24 00:05:30',50,'0','FWW-8339',0,'1','1'),(86,'2022-11-24 15:01:07','2022-11-24 00:07:26',34,'0','KAD-9096',0,'1','1'),(87,'2022-11-24 16:01:30','2022-11-24 00:05:40',36,'0','BNL-7851',0,'1','2'),(88,'2022-11-24 15:03:10','2022-11-24 00:05:50',34,'0','OWO-2541',0,'1','1'),(89,'2022-11-24 00:03:33','2022-11-24 00:07:39',4,'1','JEE-7521',0,'1','3'),(90,'2022-11-24 22:20:39','2022-11-24 00:26:51',48,'0','DIM-7982',0,'1','3'),(91,'2022-11-24 19:21:04','2022-11-24 00:27:01',42,'1','BTS-4448',0,'1','1'),(92,'2022-11-24 14:21:25','2022-11-24 00:27:11',32,'1','EPH-3164',0,'1','3'),(93,'2022-11-24 23:21:44','2022-11-24 00:27:21',50,'0','RYQ-8807',0,'1','3'),(94,'2022-11-24 20:22:03','2022-11-24 00:27:55',10,'1','QTV-9868',0,'1','1'),(95,'2022-11-23 19:22:37','2022-11-24 00:30:54',50,'0','HOG-9735',0,'1','3'),(96,'2022-11-23 21:22:55','2022-11-24 00:33:09',50.2,'1','MJG-7903',0,'0','0'),(97,'2022-11-24 21:23:13','2022-11-24 00:23:13',0,'0','ODJ-0654',0,'0','0'),(98,'2022-11-24 18:23:31','2022-11-24 00:23:31',0,'1','KDS-4434',0,'0','0'),(99,'2022-11-24 05:23:53','2022-11-24 00:23:53',0,'0','RVD-0919',0,'0','0'),(100,'2022-11-24 06:24:16','2022-11-24 00:24:16',0,'1','KEI-1942',0,'0','0'),(101,'2022-11-24 00:24:34','2022-11-24 00:24:34',0,'0','QHO-6743',0,'0','0'),(102,'2022-11-23 00:25:12','2022-11-24 00:25:12',0,'1','HQL-5594',0,'0','0');
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vagas`
--

DROP TABLE IF EXISTS `vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vagas` (
  `id_vaga` int(11) NOT NULL AUTO_INCREMENT,
  `status_vaga` char(1) DEFAULT NULL,
  `pav_vaga` char(2) DEFAULT NULL,
  `tipo_vaga` char(1) DEFAULT NULL,
  `id_estac` int(11) DEFAULT NULL,
  `setor_vaga` char(2) DEFAULT NULL,
  `num_vaga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vaga`),
  KEY `id_estac` (`id_estac`),
  CONSTRAINT `vagas_ibfk_1` FOREIGN KEY (`id_estac`) REFERENCES `estacionamento` (`id_estac`)
) ENGINE=InnoDB AUTO_INCREMENT=5814 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (0,'0','0','0',1,'B',0),(5682,'0','1','0',1,'A',1),(5683,'0','1','0',1,'A',2),(5684,'0','1','0',1,'A',3),(5685,'0','1','0',1,'A',4),(5686,'0','1','0',1,'A',5),(5687,'0','1','0',1,'A',6),(5688,'0','1','0',1,'A',7),(5689,'0','1','0',1,'A',8),(5690,'0','1','0',1,'A',9),(5691,'0','1','0',1,'A',10),(5692,'0','1','0',1,'A',11),(5693,'0','1','0',1,'A',12),(5694,'3','1','3',1,'A',13),(5695,'3','1','3',1,'A',14),(5696,'3','1','3',1,'A',15),(5697,'3','1','3',1,'A',16),(5698,'3','1','3',1,'A',17),(5699,'3','1','3',1,'A',18),(5700,'3','1','3',1,'A',19),(5701,'3','1','3',1,'A',20),(5702,'3','1','3',1,'A',21),(5703,'3','1','3',1,'A',22),(5704,'3','1','3',1,'A',23),(5705,'3','1','3',1,'A',24),(5706,'4','1','4',1,'A',25),(5707,'0','1','0',1,'A',26),(5708,'3','1','3',1,'A',27),(5709,'0','1','0',1,'A',28),(5710,'3','1','3',1,'A',29),(5711,'0','1','0',1,'A',30),(5712,'4','1','4',1,'A',31),(5713,'4','1','4',1,'A',32),(5714,'4','1','4',1,'A',33),(5715,'4','1','4',1,'A',34),(5716,'4','1','4',1,'A',35),(5717,'4','1','4',1,'A',36),(5718,'4','1','4',1,'A',37),(5719,'0','1','0',1,'A',38),(5720,'3','1','3',1,'A',39),(5721,'0','1','0',1,'A',40),(5722,'3','1','3',1,'A',41),(5723,'0','1','0',1,'A',42),(5724,'4','1','4',1,'A',43),(5725,'4','1','4',1,'A',44),(5726,'4','1','4',1,'A',45),(5727,'4','1','4',1,'A',46),(5728,'4','1','4',1,'A',47),(5729,'4','1','4',1,'A',48),(5730,'4','1','4',1,'A',49),(5731,'0','1','0',1,'A',50),(5732,'3','1','3',1,'A',51),(5733,'0','1','0',1,'A',52),(5734,'3','1','3',1,'A',53),(5735,'0','1','0',1,'A',54),(5736,'4','1','4',1,'A',55),(5737,'4','1','4',1,'A',56),(5738,'4','1','4',1,'A',57),(5739,'4','1','4',1,'A',58),(5740,'4','1','4',1,'A',59),(5741,'4','1','4',1,'A',60),(5742,'4','1','4',1,'A',61),(5743,'0','1','0',1,'A',62),(5744,'3','1','3',1,'A',63),(5745,'4','1','4',1,'A',64),(5746,'3','1','3',1,'A',65),(5747,'0','1','0',1,'A',66),(5748,'4','1','4',1,'A',67),(5749,'4','1','4',1,'A',68),(5750,'4','1','4',1,'A',69),(5751,'4','1','4',1,'A',70),(5752,'4','1','4',1,'A',71),(5753,'4','1','4',1,'A',72),(5754,'4','1','4',1,'A',73),(5755,'0','1','0',1,'A',74),(5756,'3','1','3',1,'A',75),(5757,'4','1','4',1,'A',76),(5758,'3','1','3',1,'A',77),(5759,'0','1','0',1,'A',78),(5760,'4','1','4',1,'A',79),(5761,'4','1','4',1,'A',80),(5762,'4','1','4',1,'A',81),(5763,'4','1','4',1,'A',82),(5764,'4','1','4',1,'A',83),(5765,'4','1','4',1,'A',84),(5766,'4','1','4',1,'A',85),(5767,'4','1','4',1,'A',86),(5768,'4','1','4',1,'A',87),(5769,'4','1','4',1,'A',88),(5770,'4','1','4',1,'A',89),(5771,'4','1','4',1,'A',90),(5772,'4','1','4',1,'A',91),(5773,'4','1','4',1,'A',92),(5774,'4','1','4',1,'A',93),(5775,'4','1','4',1,'A',94),(5776,'4','1','4',1,'A',95),(5777,'4','1','4',1,'A',96),(5778,'4','1','4',1,'A',97),(5779,'4','1','4',1,'A',98),(5780,'4','1','4',1,'A',99),(5781,'4','1','4',1,'A',100),(5782,'4','1','4',1,'A',101),(5783,'4','1','4',1,'A',102),(5784,'4','1','4',1,'A',103),(5785,'4','1','4',1,'A',104),(5786,'4','1','4',1,'A',105),(5787,'4','1','4',1,'A',106),(5788,'4','1','4',1,'A',107),(5789,'4','1','4',1,'A',108),(5790,'4','1','4',1,'A',109),(5791,'4','1','4',1,'A',110),(5792,'4','1','4',1,'A',111),(5793,'4','1','4',1,'A',112),(5794,'4','1','4',1,'A',113),(5795,'4','1','4',1,'A',114),(5796,'4','1','4',1,'A',115),(5797,'4','1','4',1,'A',116),(5798,'4','1','4',1,'A',117),(5799,'4','1','4',1,'A',118),(5800,'4','1','4',1,'A',119),(5801,'4','1','4',1,'A',120),(5802,'4','1','4',1,'A',121),(5803,'4','1','4',1,'A',122),(5804,'4','1','4',1,'A',123),(5805,'4','1','4',1,'A',124),(5806,'4','1','4',1,'A',125),(5807,'4','1','4',1,'A',126),(5808,'4','1','4',1,'A',127),(5809,'4','1','4',1,'A',128),(5810,'4','1','4',1,'A',129),(5811,'4','1','4',1,'A',130),(5812,'4','1','4',1,'A',131),(5813,'4','1','4',1,'A',132);
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veiculo`
--

DROP TABLE IF EXISTS `veiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `veiculo` (
  `placa_veic` varchar(8) NOT NULL,
  `tipo_veic` varchar(20) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  `marca_veic` varchar(30) DEFAULT NULL,
  `modelo_veic` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`placa_veic`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veiculo`
--

LOCK TABLES `veiculo` WRITE;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` VALUES ('','---------',138,'',''),('ABC1234','1',54,'',''),('BBB3333','1',66,'Honda','Civic'),('BIA3333','1',83,'Honda','Civic'),('BNL-7851','0',172,'FORD','ROYALE'),('BTS-4448','0',176,'JAC','J2'),('DDD2222','1',59,'Honda','CITY'),('DIM-7982','0',175,'RENAULT','SANDERO'),('EPH-3164','0',177,'CHEVROLET','CHEVETTE'),('FWW-8339','0',170,'CHEVROLET','CRUZE'),('GGG1111','1',71,'Citroen','C3'),('GGG5555','1',81,'Honda','CRV'),('GGG7777','1',70,'Citroen','C3'),('GIG8888','0',157,'CITROEN','C4'),('HOG-9735','0',180,'CHEVROLET','CELTA'),('HOV-3711','0',156,'FORD','FIESTA SEDAN 1.0 8V FLEX 4P'),('HQL-5594','0',187,'HONDA','ACCORD COUPE'),('HTD-7279','0',162,'FORD','FIESTA'),('HXU-7337','0',158,'CADILLAC','SEVILLE 4.6'),('III9999','1',63,'Honda','CITY'),('IPV-0771','0',166,'FIAT','DOBLO'),('JEE-7521','0',174,'VOLKSWAGEN','CROSSFOX'),('JJJ7777','1',65,'Honda','Civic'),('KAD-9096','0',171,'FORD','RANGER'),('KDS-4434','0',183,'CITROëN','ZX CUPê '),('KEI-1942','0',185,'FIAT','PALIO'),('KRZ4605','0',37,NULL,NULL),('KUC-5659','0',165,'VOLKSWAGEN','GOLF'),('KUR9257','0',53,'Hyundai','HB20'),('KWR1635','1',49,NULL,NULL),('KWW1656','0',36,NULL,NULL),('LFL-4486','1',34,NULL,NULL),('LHN0114','1',41,NULL,NULL),('LHV5336','0',38,NULL,NULL),('LLL7777','1',67,'Citroen','C3'),('LSE-4822','1',35,NULL,NULL),('LTA-0174','1',33,NULL,NULL),('LUU3196','1',52,NULL,NULL),('MHZ-0026','0',167,'FIAT','PALIO'),('MJG-7903','0',181,'NISSAN','AX'),('MOT9999','1',152,'HONDA','MOTO'),('MYZ-4395','0',159,'HONDA','CIVIC COUP'),('MZY-5645','0',161,'CITROEN','UNO'),('NYP-2051','0',168,'CHEVROLET','MONTANA'),('ODJ-0654','0',182,'FIAT','TORO VOLCANO '),('OOO3333','0',134,'CITROEN','C4'),('OPE-0672','0',163,'JEEP','RENEGADE'),('OWO-2541','0',173,'KIA MOTORS','BONGO'),('PUT-6699','0',164,'VOLKSWAGEN','VOYAGE'),('QHO-6743','0',186,'HYUNDAI','SANTA Fé'),('QTV-9868','0',179,'VOLKSWAGEN','GRAND SAVEIRO'),('REL9999','0',150,'FIAT','UNO'),('RIL-4042','0',169,'PEUGEOT','207'),('RRR3333','0',64,'Honda','MOTO'),('RRR8888','0',57,'Honda','MOTO'),('RVD-0919','0',184,'PEUGEOT','306'),('RYQ-8807','0',178,'VOLKSWAGEN','PASSAT'),('TES1333','0',146,'FIAT','UNO'),('TES7777','0',153,'CITROEN','C4'),('TEST777','0',155,'CITROEN','C4'),('TTT55555','1',61,'Honda','CITY'),('TTT6666','0',84,'FIAT','UNO'),('YYY4444','1',69,'Citroen','C3');
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-24  0:44:05
