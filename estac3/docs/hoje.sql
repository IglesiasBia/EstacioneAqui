-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sistema_ge
DROP DATABASE IF EXISTS `sistema_ge`;
CREATE DATABASE IF NOT EXISTS `sistema_ge` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sistema_ge`;

-- Copiando estrutura para tabela sistema_ge.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(50) DEFAULT NULL,
  `cpf_cli` char(11) DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.cliente: ~32 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`id_cli`, `nome_cli`, `cpf_cli`) VALUES
	(33, 'Beatriz', '11111'),
	(34, 'Raphaela', '22222'),
	(35, 'Lethicia', '33333'),
	(36, 'Hugo', '44444'),
	(37, 'Isaac', '55555'),
	(38, 'Jesua', '66666'),
	(41, 'Cliente não declarado', '0'),
	(42, 'Cliente não declarado', '0'),
	(43, 'Cliente não declarado', '0'),
	(44, 'Cliente não declarado', '0'),
	(45, 'Cliente não declarado', '0'),
	(46, 'Cliente não declarado', '0'),
	(47, 'Cliente não declarado', '0'),
	(48, 'Cliente não declarado', '0'),
	(49, 'Cliente não declarado', '0'),
	(50, 'Cliente não declarado', '0'),
	(51, 'Cliente não declarado', '0'),
	(52, 'Cliente não declarado', '0'),
	(53, 'Cliente não declarado', '0'),
	(54, 'Cliente não declarado', '0'),
	(55, 'Cliente não declarado', '0'),
	(56, 'Cliente não declarado', '0'),
	(57, 'Cliente não declarado', '0'),
	(58, 'Cliente não declarado', '0'),
	(59, 'Cliente não declarado', '0'),
	(60, 'Cliente não declarado', '0'),
	(61, 'Cliente não declarado', '0'),
	(62, 'Cliente não declarado', '0'),
	(63, 'Cliente não declarado', '0'),
	(64, 'Cliente não declarado', '0'),
	(65, 'Cliente não declarado', '0'),
	(66, 'Cliente não declarado', '0');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.estacionamento
DROP TABLE IF EXISTS `estacionamento`;
CREATE TABLE IF NOT EXISTS `estacionamento` (
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

-- Copiando dados para a tabela sistema_ge.estacionamento: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `estacionamento` DISABLE KEYS */;
REPLACE INTO `estacionamento` (`id_estac`, `nome_estac`, `cnpj_estac`, `num_estac`, `comp_estac`, `preco_estac`, `frac_hr_estac`, `quant_vaga`) VALUES
	(1, 'Estacione Aqui', '166666', '33', 'sla', 4, 2, '22');
/*!40000 ALTER TABLE `estacionamento` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.funcionario
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(50) DEFAULT NULL,
  `nivel_func` char(1) DEFAULT NULL,
  `email_func` varchar(250) DEFAULT NULL,
  `status_func` char(1) DEFAULT NULL,
  `dt_cadastro_func` datetime DEFAULT NULL,
  `cpf_func` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.funcionario: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
REPLACE INTO `funcionario` (`id_func`, `nome_func`, `nivel_func`, `email_func`, `status_func`, `dt_cadastro_func`, `cpf_func`) VALUES
	(1, 'bia', '2', 'bia@gmail.com', '1', '2022-09-06 06:33:58', '11112'),
	(7, 'Lethicia', '3', 'leth@gmail.com', '1', '2022-06-28 09:09:57', '33333'),
	(8, 'Raphaela', '1', 'rapha@gmail.com', '1', '2022-06-29 05:09:15', '22222'),
	(9, 'Hugo', '3', 'hugo@gmail.com', '0', '2022-06-29 05:10:47', '44444'),
	(10, 'Jesua', '3', 'jesua@gmail.com', '0', '2022-06-29 08:57:46', '66666'),
	(11, 'Isaac', '1', 'isaac@gmail.com', '0', '2022-07-01 07:31:40', '55555'),
	(13, 'Matheus ', '3', 'matheus@gmail.com', '1', '2022-07-08 09:52:34', '66666');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.func_usu
DROP TABLE IF EXISTS `func_usu`;
CREATE TABLE IF NOT EXISTS `func_usu` (
  `senha_func` varchar(12) DEFAULT NULL,
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `func_usu` varchar(30) DEFAULT NULL,
  KEY `id_func` (`id_func`),
  CONSTRAINT `func_usu_ibfk_1` FOREIGN KEY (`id_func`) REFERENCES `funcionario` (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.func_usu: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
REPLACE INTO `func_usu` (`senha_func`, `id_func`, `func_usu`) VALUES
	('bia3', 1, 'bia'),
	('leth3', 7, 'leth'),
	('rapha3', 8, 'rapha'),
	('hugo4', 9, 'hugo'),
	('jesua6', 10, 'jesua'),
	('isaac5', 11, 'isaac'),
	('matheus3', 13, 'matheus');
/*!40000 ALTER TABLE `func_usu` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.ticket
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.ticket: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
REPLACE INTO `ticket` (`id_ticket`, `hr_entrada`, `hr_saida`, `valor_total_ticket`, `chave`, `placa_veic`, `id_vaga`, `status_pg`) VALUES
	(6, '2022-07-01 09:43:58', '2022-07-01 11:43:59', NULL, '1', 'LFL-4486', 2, '0'),
	(7, '2022-07-01 07:44:50', '2022-07-01 09:59:17', NULL, '1', 'LTA-0174', 1, '0'),
	(8, '2022-07-01 09:51:32', '2022-07-01 09:51:32', 0, '', 'LHN0114', 1, '0'),
	(9, '2022-07-01 09:53:28', '2022-07-01 09:53:28', 0, '0', 'LHN0114', 1, '0'),
	(10, '2022-07-01 09:54:12', '2022-07-01 09:54:12', 0, '0', 'LHN0114', 1, '0'),
	(12, '2022-07-01 09:55:47', '2022-07-01 09:55:47', 0, '', 'LHN0114', 1, '0'),
	(13, '2022-07-01 09:56:19', '2022-07-01 09:56:19', 0, '0', 'LHN0114', 1, '0'),
	(15, '2022-07-01 10:03:00', '2022-07-01 10:03:00', 0, '1', 'KWR1635', 1, '0'),
	(16, '2022-07-01 10:06:11', '2022-07-01 10:06:50', 0, '1', 'LUU3196', 3, '0'),
	(17, '2022-07-01 10:07:02', '2022-07-01 10:09:39', 0, '1', 'KUR9257', 1, '0'),
	(18, '2022-07-01 11:39:18', '2022-07-08 09:35:34', 0, '0', 'ABC1234', 2, '0'),
	(19, '2022-07-08 09:17:16', '2022-07-08 09:17:16', 0, '1', 'RRR8888', 1, '0'),
	(20, '2022-07-08 09:19:22', '2022-07-08 09:19:22', 0, '1', 'DDD2222', 1, '0'),
	(21, '2022-07-08 09:21:54', '2022-07-08 09:21:54', 0, '0', 'TTT55555', 1, '0'),
	(22, '2022-07-08 09:24:55', '2022-07-08 09:24:55', 0, '0', 'III9999', 1, '0'),
	(23, '2022-07-08 09:37:29', '2022-07-08 09:37:29', 0, '0', 'RRR3333', 1, '0'),
	(24, '2022-07-08 09:46:37', '2022-07-08 09:47:05', 0, '1', 'JJJ7777', 1, '0'),
	(25, '2022-07-08 09:49:20', '2022-07-08 09:49:20', 0, '0', 'BBB3333', 1, '0');
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.vagas
DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.vagas: ~22 rows (aproximadamente)
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
REPLACE INTO `vagas` (`id_vaga`, `status_vaga`, `pav_vaga`, `tipo_vaga`, `id_estac`, `setor_vaga`, `num_vaga`) VALUES
	(0, '0', '1', '0', 1, 'A', '0'),
	(1, '0', '1', '1', 1, 'A', '1'),
	(2, '1', '1', '0', 1, 'A', '2'),
	(3, '1', '1', '0', 1, 'A', '3'),
	(4, '1', '1', '0', 1, 'A', '4'),
	(5, '1', '1', '0', 1, 'A', '5'),
	(6, '1', '1', '0', 1, 'A', '6'),
	(7, '1', '1', '0', 1, 'A', '7'),
	(8, '1', '1', '0', 1, 'A', '8'),
	(9, '1', '1', '0', 1, 'A', '9'),
	(10, '1', '1', '0', 1, 'A', '10'),
	(11, '1', '1', '0', 1, 'B', '1'),
	(12, '1', '1', '0', 1, 'B', '2'),
	(13, '1', '1', '0', 1, 'B', '3'),
	(14, '1', '1', '0', 1, 'B', '4'),
	(15, '1', '1', '0', 1, 'B', '5'),
	(16, '1', '1', '0', 1, 'B', '5'),
	(17, '1', '1', '0', 1, 'B', '7'),
	(18, '1', '1', '0', 1, 'B', '8'),
	(19, '1', '1', '0', 1, 'B', '9'),
	(20, '1', '1', '0', 1, 'B', '10'),
	(21, '0', '1', '1', 1, 'C', '1');
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.veiculo
DROP TABLE IF EXISTS `veiculo`;
CREATE TABLE IF NOT EXISTS `veiculo` (
  `placa_veic` varchar(8) NOT NULL,
  `tipo_veic` varchar(20) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  `marca_veic` varchar(30) DEFAULT NULL,
  `modelo_veic` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`placa_veic`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.veiculo: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
REPLACE INTO `veiculo` (`placa_veic`, `tipo_veic`, `id_cli`, `marca_veic`, `modelo_veic`) VALUES
	('ABC1234', '1', 54, NULL, NULL),
	('BBB3333', '1', 66, 'Honda', 'Civic'),
	('DDD2222', '1', 59, 'Honda', 'CITY'),
	('III9999', '1', 63, 'Honda', 'CITY'),
	('JJJ7777', '1', 65, 'Honda', 'Civic'),
	('KRZ4605', '0', 37, NULL, NULL),
	('KUR9257', '0', 53, NULL, NULL),
	('KWR1635', '1', 49, NULL, NULL),
	('KWW1656', '0', 36, NULL, NULL),
	('LFL-4486', '1', 34, NULL, NULL),
	('LHN0114', '1', 41, NULL, NULL),
	('LHV5336', '0', 38, NULL, NULL),
	('LSE-4822', '1', 35, NULL, NULL),
	('LTA-0174', '1', 33, NULL, NULL),
	('LUU3196', '1', 52, NULL, NULL),
	('RRR3333', '0', 64, 'Honda', 'MOTO'),
	('RRR8888', '0', 57, 'Honda', 'MOTO'),
	('TTT55555', '1', 61, 'Honda', 'CITY');
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
