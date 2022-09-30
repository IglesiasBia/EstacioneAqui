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
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (33,'Beatriz','11111'),(34,'Raphaela','22222'),(35,'Lethicia','33333'),(36,'Hugo','44444'),(37,'Isaac','55555'),(38,'Jesua','66666'),(41,'Cliente não declarado','0'),(42,'Cliente não declarado','0'),(43,'Cliente não declarado','0'),(44,'Cliente não declarado','0'),(45,'Cliente não declarado','0'),(46,'Cliente não declarado','0'),(47,'Cliente não declarado','0'),(48,'Cliente não declarado','0'),(49,'Cliente não declarado','0'),(50,'Cliente não declarado','0'),(51,'Cliente não declarado','0'),(52,'Cliente não declarado','0'),(53,'Paula','8888888'),(54,'Cliente não declarado','0'),(55,'Cliente não declarado','0'),(56,'Cliente não declarado','0'),(57,'Cliente não declarado','0'),(58,'Cliente não declarado','0'),(59,'Cliente não declarado','0'),(60,'Cliente não declarado','0'),(61,'Cliente não declarado','0'),(62,'Cliente não declarado','0'),(63,'Cliente não declarado','0'),(64,'Cliente não declarado','0'),(65,'Cliente não declarado','0'),(66,'Cliente não declarado','0'),(67,'Cliente não declarado','0'),(68,'Cliente não declarado','0'),(69,'Cliente não declarado','0'),(70,'Cliente não declarado','0'),(71,'Cliente não declarado','0'),(72,'Cliente não declarado','0'),(73,'Cliente não declarado','0'),(74,'Cliente não declarado','0'),(75,'Cliente não declarado','0'),(76,'Cliente não declarado','0'),(77,'Cliente não declarado','0'),(78,'Cliente não declarado','0'),(79,'Cliente não declarado','0'),(80,'Cliente não declarado','0'),(81,'Cliente não declarado','0'),(82,'Cliente não declarado','0'),(83,'Cliente não declarado','0'),(84,'Cliente não declarado','0'),(85,'Cliente não declarado','0'),(86,'Cliente não declarado','0'),(87,'Cliente não declarado','0'),(88,'Cliente não declarado','0'),(89,'Cliente não declarado','0'),(90,'Cliente não declarado','0'),(91,'Cliente não declarado','0'),(92,'Cliente não declarado','0'),(93,'Cliente não declarado','0'),(94,'Cliente não declarado','0'),(95,'Cliente não declarado','0'),(96,'Cliente não declarado','0'),(97,'Cliente não declarado','0'),(98,'Cliente não declarado','0'),(99,'Cliente não declarado','0'),(100,'Cliente não declarado','0'),(101,'Cliente não declarado','0'),(102,'Cliente não declarado','0'),(103,'Cliente não declarado','0'),(104,'Cliente não declarado','0'),(105,'Cliente não declarado','0'),(106,'Cliente não declarado','0'),(107,'Cliente não declarado','0'),(108,'Cliente não declarado','0'),(109,'Cliente não declarado','0'),(110,'Cliente não declarado','0'),(111,'Cliente não declarado','0'),(112,'Cliente não declarado','0'),(113,'Cliente não declarado','0'),(114,'Cliente não declarado','0'),(115,'Cliente não declarado','0'),(116,'Cliente não declarado','0'),(117,'Cliente não declarado','0'),(118,'Cliente não declarado','0'),(119,'Cliente não declarado','0'),(120,'Cliente não declarado','0'),(121,'Cliente não declarado','0'),(122,'Cliente não declarado','0'),(123,'Cliente não declarado','0'),(124,'Cliente não declarado','0'),(125,'Cliente não declarado','0'),(126,'Cliente não declarado','0'),(127,'Cliente não declarado','0'),(128,'Cliente não declarado','0'),(129,'Cliente não declarado','0'),(130,'Cliente não declarado','0'),(131,'Cliente não declarado','0'),(132,'Cliente não declarado','0'),(133,'Cliente não declarado','0'),(134,'Cliente não declarado','0'),(135,'Cliente não declarado','0');
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
INSERT INTO `estacionamento` VALUES (1,'Estacione Aqui','166666','33','sla',4,2,'1',50.2,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `func_usu`
--

LOCK TABLES `func_usu` WRITE;
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
INSERT INTO `func_usu` VALUES ('bia3',1,'bia'),('leth3',7,'leth'),('rapha3',8,'rapha'),('hugo4',9,'hugo'),('jesua6',10,'jesua'),('isaac5',11,'isaac'),('matheus3',13,'matheus');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (1,'bia','2','bia@gmail.com','1','2022-09-06 06:33:58','11112'),(7,'Lethicia','3','leth@gmail.com','1','2022-06-28 09:09:57','33333'),(8,'Raphaela','1','rapha@gmail.com','1','2022-06-29 05:09:15','22222'),(9,'Hugo','3','hugo@gmail.com','0','2022-06-29 05:10:47','44444'),(10,'Jesua','3','jesua@gmail.com','0','2022-06-29 08:57:46','66666'),(11,'Isaac','1','isaac@gmail.com','0','2022-07-01 07:31:40','55555'),(13,'Matheus ','3','matheus@gmail.com','1','2022-07-08 09:52:34','66666');
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
  PRIMARY KEY (`id_ticket`),
  KEY `placa_veic` (`placa_veic`),
  KEY `id_vaga` (`id_vaga`),
  CONSTRAINT `id_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vagas` (`id_vaga`),
  CONSTRAINT `placa_veic` FOREIGN KEY (`placa_veic`) REFERENCES `veiculo` (`placa_veic`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket`
--

LOCK TABLES `ticket` WRITE;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` VALUES (13,'2022-07-01 09:56:19','2022-07-12 21:59:39',0,'0','LHN0114',0,'1'),(15,'2022-07-01 10:03:00','2022-07-01 10:03:00',0,'1','KWR1635',0,'0'),(16,'2022-07-01 10:06:11','2022-07-01 10:06:50',0,'1','LUU3196',0,'0'),(17,'2022-07-01 10:07:02','2022-07-13 20:08:25',0,'1','KUR9257',0,'0'),(18,'2022-07-01 11:39:18','2022-08-05 20:50:14',0,'0','ABC1234',0,'1'),(19,'2022-07-08 09:17:16','2022-07-08 09:17:16',0,'1','RRR8888',0,'0'),(20,'2022-07-08 09:19:22','2022-07-08 09:19:22',0,'1','DDD2222',0,'0'),(21,'2022-07-08 09:21:54','2022-07-08 09:21:54',0,'0','TTT55555',0,'0'),(22,'2022-07-08 09:24:55','2022-07-08 09:24:55',0,'0','III9999',0,'0'),(23,'2022-07-08 09:37:29','2022-07-08 09:37:29',0,'0','RRR3333',0,'0'),(24,'2022-07-08 09:46:37','2022-07-08 09:47:05',0,'1','JJJ7777',0,'0'),(25,'2022-07-08 09:49:20','2022-07-08 09:49:20',0,'0','BBB3333',0,'0'),(26,'2022-07-08 08:53:38','2022-07-08 08:59:31',0,'0','LLL7777',0,'1'),(27,'2022-07-10 12:17:47','2022-09-29 22:46:48',0,'0','BIA3333',0,'1'),(28,'2022-07-12 08:17:26','2022-08-06 10:24:36',0,'0','YYY4444',0,'1'),(29,'2022-07-12 12:17:47','2022-07-12 20:21:16',0,'0','GGG7777',0,'0'),(30,'2022-08-05 21:02:18','2022-08-05 21:02:18',0,'0','GGG1111',0,'0'),(31,'2022-08-06 08:37:41','2022-08-06 08:39:29',0,'0','GGG5555',0,'1'),(32,'2022-08-06 08:40:19','2022-08-06 08:40:19',0,'0','GGG5555',0,'0'),(33,'2022-08-06 08:53:41','2022-09-29 22:46:48',0,'0','BIA3333',0,'0'),(59,'2022-09-30 03:07:46','2022-09-30 03:10:11',4,'0','OOO3333',0,'1'),(60,'2022-09-30 03:10:32','2022-09-30 03:10:32',0,'0','OOO3333',0,'0');
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
) ENGINE=InnoDB AUTO_INCREMENT=3174 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (0,'0','0','0',1,'B',0),(3053,'0','2','0',1,'E',1),(3054,'0','2','1',1,'E',2),(3055,'0','2','0',1,'E',3),(3056,'0','2','0',1,'D',4),(3057,'0','2','0',1,'D',5),(3058,'0','2','0',1,'D',6),(3059,'0','2','1',1,'C',7),(3060,'0','2','0',1,'C',8),(3061,'0','2','0',1,'C',9),(3062,'0','2','0',1,'E',10),(3063,'0','2','1',1,'E',11),(3064,'3','2','3',1,'A',12),(3065,'3','2','3',1,'A',13),(3066,'3','2','3',1,'A',14),(3067,'3','2','3',1,'A',15),(3068,'3','2','3',1,'A',16),(3069,'3','2','3',1,'A',17),(3070,'3','2','3',1,'A',18),(3071,'3','2','3',1,'A',19),(3072,'3','2','3',1,'A',20),(3073,'3','2','3',1,'A',21),(3074,'3','2','3',1,'A',22),(3075,'3','2','3',1,'A',23),(3076,'3','2','3',1,'A',24),(3077,'3','2','3',1,'A',25),(3078,'3','2','3',1,'A',26),(3079,'0','2','0',1,'B',27),(3080,'3','2','3',1,'A',28),(3081,'3','2','3',1,'A',29),(3082,'3','2','3',1,'A',30),(3083,'3','2','3',1,'A',31),(3084,'3','2','3',1,'A',32),(3085,'3','2','3',1,'A',33),(3086,'3','2','3',1,'A',34),(3087,'3','2','3',1,'A',35),(3088,'3','2','3',1,'A',36),(3089,'3','2','3',1,'A',37),(3090,'0','2','0',1,'B',38),(3091,'3','2','3',1,'A',39),(3092,'3','2','3',1,'A',40),(3093,'3','2','3',1,'A',41),(3094,'3','2','3',1,'A',42),(3095,'3','2','3',1,'A',43),(3096,'3','2','3',1,'A',44),(3097,'3','2','3',1,'A',45),(3098,'3','2','3',1,'A',46),(3099,'3','2','3',1,'A',47),(3100,'3','2','3',1,'A',48),(3101,'0','2','0',1,'B',49),(3102,'3','2','3',1,'A',50),(3103,'3','2','3',1,'A',51),(3104,'3','2','3',1,'A',52),(3105,'3','2','3',1,'A',53),(3106,'3','2','3',1,'A',54),(3107,'3','2','3',1,'A',55),(3108,'3','2','3',1,'A',56),(3109,'3','2','3',1,'A',57),(3110,'3','2','3',1,'A',58),(3111,'3','2','3',1,'A',59),(3112,'0','2','0',1,'A',60),(3113,'3','2','3',1,'A',61),(3114,'3','2','3',1,'A',62),(3115,'3','2','3',1,'A',63),(3116,'3','2','3',1,'A',64),(3117,'3','2','3',1,'A',65),(3118,'3','2','3',1,'A',66),(3119,'3','2','3',1,'A',67),(3120,'3','2','3',1,'A',68),(3121,'3','2','3',1,'A',69),(3122,'3','2','3',1,'A',70),(3123,'0','2','0',1,'A',71),(3124,'3','2','3',1,'A',72),(3125,'3','2','3',1,'A',73),(3126,'3','2','3',1,'A',74),(3127,'3','2','3',1,'A',75),(3128,'3','2','3',1,'A',76),(3129,'3','2','3',1,'A',77),(3130,'3','2','3',1,'A',78),(3131,'3','2','3',1,'A',79),(3132,'3','2','3',1,'A',80),(3133,'3','2','3',1,'A',81),(3134,'0','2','0',1,'A',82),(3135,'3','2','3',1,'A',83),(3136,'3','2','3',1,'A',84),(3137,'3','2','3',1,'A',85),(3138,'3','2','3',1,'A',86),(3139,'3','2','3',1,'A',87),(3140,'3','2','3',1,'A',88),(3141,'3','2','3',1,'A',89),(3142,'3','2','3',1,'A',90),(3143,'3','2','3',1,'A',91),(3144,'3','2','3',1,'A',92),(3145,'0','2','0',1,'A',93),(3146,'3','2','3',1,'A',94),(3147,'3','2','3',1,'A',95),(3148,'3','2','3',1,'A',96),(3149,'3','2','3',1,'A',97),(3150,'3','2','3',1,'A',98),(3151,'3','2','3',1,'A',99),(3152,'3','2','3',1,'A',100),(3153,'3','2','3',1,'A',101),(3154,'3','2','3',1,'A',102),(3155,'3','2','3',1,'A',103),(3156,'3','2','3',1,'A',104),(3157,'3','2','3',1,'A',105),(3158,'3','2','3',1,'A',106),(3159,'3','2','3',1,'A',107),(3160,'3','2','3',1,'A',108),(3161,'3','2','3',1,'A',109),(3162,'3','2','3',1,'A',110),(3163,'0','2','1',1,'C',111),(3164,'0','2','0',1,'C',112),(3165,'0','2','0',1,'C',113),(3166,'0','2','0',1,'E',114),(3167,'0','2','1',1,'E',115),(3168,'0','2','1',1,'B',116),(3169,'0','2','0',1,'B',117),(3170,'0','2','0',1,'B',118),(3171,'0','2','0',1,'A',119),(3172,'0','2','0',1,'A',120),(3173,'0','2','1',1,'E',121);
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
INSERT INTO `veiculo` VALUES ('ABC1234','1',54,'',''),('BBB3333','1',66,'Honda','Civic'),('BIA3333','1',83,'Honda','Civic'),('DDD2222','1',59,'Honda','CITY'),('GGG1111','1',71,'Citroen','C3'),('GGG5555','1',81,'Honda','CRV'),('GGG7777','1',70,'Citroen','C3'),('III9999','1',63,'Honda','CITY'),('JJJ7777','1',65,'Honda','Civic'),('KRZ4605','0',37,NULL,NULL),('KUR9257','0',53,'Hyundai','HB20'),('KWR1635','1',49,NULL,NULL),('KWW1656','0',36,NULL,NULL),('LFL-4486','1',34,NULL,NULL),('LHN0114','1',41,NULL,NULL),('LHV5336','0',38,NULL,NULL),('LLL7777','1',67,'Citroen','C3'),('LSE-4822','1',35,NULL,NULL),('LTA-0174','1',33,NULL,NULL),('LUU3196','1',52,NULL,NULL),('OOO3333','0',134,'CITROEN','C4'),('RRR3333','0',64,'Honda','MOTO'),('RRR8888','0',57,'Honda','MOTO'),('TTT55555','1',61,'Honda','CITY'),('TTT6666','0',84,'FIAT','UNO'),('YYY4444','1',69,'Citroen','C3');
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

-- Dump completed on 2022-09-30  3:50:57
