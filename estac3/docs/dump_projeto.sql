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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
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
INSERT INTO `estacionamento` VALUES (1,'Estacione Aqui','166666','33','sla',4,2,'51');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `func_usu`
--

LOCK TABLES `func_usu` WRITE;
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
INSERT INTO `func_usu` VALUES ('bia3',1,NULL),('bia3',2,NULL),('rapha3',3,'rapha'),('leth3',7,'leth');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'bia','2','bia@gmail.com','1','2022-09-06 06:33:58',NULL),(2,'bia',NULL,NULL,NULL,NULL,NULL),(3,'Raphaela','1','rapha@gmail.com','1','2022-06-28 08:50:15','18181818'),(4,'Raphaela','1','rapha@gmail.com','1','2022-06-28 08:51:32','18181818'),(5,'Raphaela','1','rapha@gmail.com','1','2022-06-28 08:52:40','18181818'),(7,'Lethicia','3','leth@gmail.com','1','2022-06-28 09:09:57','18181818');
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
  CONSTRAINT `id_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vagas` (`id_vagas`),
  CONSTRAINT `placa_veic` FOREIGN KEY (`placa_veic`) REFERENCES `veiculo` (`placa_veic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vagas`
--

DROP TABLE IF EXISTS `vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vagas` (
  `id_vagas` int(11) NOT NULL AUTO_INCREMENT,
  `status_vaga` char(1) DEFAULT NULL,
  `pav_vaga` char(2) DEFAULT NULL,
  `tipo_vaga` char(1) DEFAULT NULL,
  `id_estac` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vagas`),
  KEY `id_estac` (`id_estac`),
  CONSTRAINT `vagas_ibfk_1` FOREIGN KEY (`id_estac`) REFERENCES `estacionamento` (`id_estac`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
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

-- Dump completed on 2022-06-28 21:44:57
