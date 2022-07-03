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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (33,'Beatriz','11111'),(34,'Raphaela','22222'),(35,'Lethicia','33333'),(36,'Hugo','44444'),(37,'Isaac','55555'),(38,'Jesua','66666'),(41,'Cliente não declarado','0'),(42,'Cliente não declarado','0'),(43,'Cliente não declarado','0'),(44,'Cliente não declarado','0'),(45,'Cliente não declarado','0'),(46,'Cliente não declarado','0'),(47,'Cliente não declarado','0'),(48,'Cliente não declarado','0'),(49,'Cliente não declarado','0'),(50,'Cliente não declarado','0'),(51,'Cliente não declarado','0'),(52,'Cliente não declarado','0'),(53,'Cliente não declarado','0'),(54,'Cliente não declarado','0');
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
  PRIMARY KEY (`id_estac`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estacionamento`
--

LOCK TABLES `estacionamento` WRITE;
/*!40000 ALTER TABLE `estacionamento` DISABLE KEYS */;
INSERT INTO `estacionamento` VALUES (1,'Estacione Aqui','166666','33','sla',4,2,'20');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `func_usu`
--

LOCK TABLES `func_usu` WRITE;
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
INSERT INTO `func_usu` VALUES ('bia3',1,'bia'),('leth3',7,'leth'),('rapha3',8,'rapha'),('hugo4',9,'hugo'),('jesua6',10,'jesua'),('isaac5',11,'isaac'),('',12,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'bia','1','bia@gmail.com','1','2022-09-06 06:33:58','11112'),(7,'Lethicia','3','leth@gmail.com','1','2022-06-28 09:09:57','33333'),(8,'Raphaela','1','rapha@gmail.com','1','2022-06-29 05:09:15','22222'),(9,'Hugo','3','hugo@gmail.com','0','2022-06-29 05:10:47','44444'),(10,'Jesua','3','jesua@gmail.com','0','2022-06-29 08:57:46','66666'),(11,'Isaac','1','isaac@gmail.com','0','2022-07-01 07:31:40','55555'),(12,'','-','','','2022-07-02 09:27:40','');
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
  PRIMARY KEY (`id_ticket`),
  KEY `placa_veic` (`placa_veic`),
  KEY `id_vaga` (`id_vaga`),
  CONSTRAINT `id_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vagas` (`id_vaga`),
  CONSTRAINT `placa_veic` FOREIGN KEY (`placa_veic`) REFERENCES `veiculo` (`placa_veic`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (6,'2022-07-01 09:43:58','2022-07-01 11:43:59',NULL,'1','LFL-4486',2),(7,'2022-07-01 07:44:50','2022-07-01 09:59:17',NULL,'1','LTA-0174',1),(8,'2022-07-01 09:51:32','2022-07-01 09:51:32',0,'','LHN0114',1),(9,'2022-07-01 09:53:28','2022-07-01 09:53:28',0,'0','LHN0114',1),(10,'2022-07-01 09:54:12','2022-07-01 09:54:12',0,'0','LHN0114',1),(12,'2022-07-01 09:55:47','2022-07-01 09:55:47',0,'','LHN0114',1),(13,'2022-07-01 09:56:19','2022-07-01 09:56:19',0,'0','LHN0114',1),(15,'2022-07-01 10:03:00','2022-07-01 10:03:00',0,'1','KWR1635',1),(16,'2022-07-01 10:06:11','2022-07-01 10:06:50',0,'1','LUU3196',3),(17,'2022-07-01 10:07:02','2022-07-01 10:09:39',0,'1','KUR9257',1),(18,'2022-07-01 11:39:18','2022-07-03 08:06:30',0,'0','ABC1234',2);
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
  `num_vaga` char(3) DEFAULT NULL,
  PRIMARY KEY (`id_vaga`),
  KEY `id_estac` (`id_estac`),
  CONSTRAINT `vagas_ibfk_1` FOREIGN KEY (`id_estac`) REFERENCES `estacionamento` (`id_estac`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (0,'0','1','0',1,'A','0'),(1,'0','1','1',1,'A','1'),(2,'1','1','0',1,'A','2'),(3,'1','1','0',1,'A','3'),(4,'1','1','0',1,'A','4'),(5,'1','1','0',1,'A','5'),(6,'1','1','0',1,'A','6'),(7,'1','1','0',1,'A','7'),(8,'1','1','0',1,'A','8'),(9,'1','1','0',1,'A','9'),(10,'1','1','0',1,'A','10'),(11,'1','1','0',1,'B','1'),(12,'1','1','0',1,'B','2'),(13,'1','1','0',1,'B','3'),(14,'1','1','0',1,'B','4'),(15,'1','1','0',1,'B','5'),(16,'1','1','0',1,'B','5'),(17,'1','1','0',1,'B','7'),(18,'1','1','0',1,'B','8'),(19,'1','1','0',1,'B','9'),(20,'1','1','0',1,'B','10');
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
INSERT INTO `veiculo` VALUES ('ABC1234','1',54),('KRZ4605','0',37),('KUR9257','0',53),('KWR1635','1',49),('KWW1656','0',36),('LFL-4486','1',34),('LHN0114','1',41),('LHV5336','0',38),('LSE-4822','1',35),('LTA-0174','1',33),('LUU3196','1',52);
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

-- Dump completed on 2022-07-03 20:51:18
