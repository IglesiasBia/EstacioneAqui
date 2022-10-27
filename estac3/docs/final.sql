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
CREATE DATABASE IF NOT EXISTS `sistema_ge` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `sistema_ge`;

-- Copiando estrutura para tabela sistema_ge.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(50) DEFAULT NULL,
  `cpf_cli` char(11) DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.cliente: ~115 rows (aproximadamente)
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
	(53, 'Paula', '8888888'),
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
	(66, 'Cliente não declarado', '0'),
	(67, 'Cliente não declarado', '0'),
	(68, 'Cliente não declarado', '0'),
	(69, 'Cliente não declarado', '0'),
	(70, 'Cliente não declarado', '0'),
	(71, 'Cliente não declarado', '0'),
	(72, 'Cliente não declarado', '0'),
	(73, 'Cliente não declarado', '0'),
	(74, 'Cliente não declarado', '0'),
	(75, 'Cliente não declarado', '0'),
	(76, 'Cliente não declarado', '0'),
	(77, 'Cliente não declarado', '0'),
	(78, 'Cliente não declarado', '0'),
	(79, 'Cliente não declarado', '0'),
	(80, 'Cliente não declarado', '0'),
	(81, 'Cliente não declarado', '0'),
	(82, 'Cliente não declarado', '0'),
	(83, 'Cliente não declarado', '0'),
	(84, 'Cliente não declarado', '0'),
	(85, 'Cliente não declarado', '0'),
	(86, 'Cliente não declarado', '0'),
	(87, 'Cliente não declarado', '0'),
	(88, 'Cliente não declarado', '0'),
	(89, 'Cliente não declarado', '0'),
	(90, 'Cliente não declarado', '0'),
	(91, 'Cliente não declarado', '0'),
	(92, 'Cliente não declarado', '0'),
	(93, 'Cliente não declarado', '0'),
	(94, 'Cliente não declarado', '0'),
	(95, 'Cliente não declarado', '0'),
	(96, 'Cliente não declarado', '0'),
	(97, 'Cliente não declarado', '0'),
	(98, 'Cliente não declarado', '0'),
	(99, 'Cliente não declarado', '0'),
	(100, 'Cliente não declarado', '0'),
	(101, 'Cliente não declarado', '0'),
	(102, 'Cliente não declarado', '0'),
	(103, 'Cliente não declarado', '0'),
	(104, 'Cliente não declarado', '0'),
	(105, 'Cliente não declarado', '0'),
	(106, 'Cliente não declarado', '0'),
	(107, 'Cliente não declarado', '0'),
	(108, 'Cliente não declarado', '0'),
	(109, 'Cliente não declarado', '0'),
	(110, 'Cliente não declarado', '0'),
	(111, 'Cliente não declarado', '0'),
	(112, 'Cliente não declarado', '0'),
	(113, 'Cliente não declarado', '0'),
	(114, 'Cliente não declarado', '0'),
	(115, 'Cliente não declarado', '0'),
	(116, 'Cliente não declarado', '0'),
	(117, 'Cliente não declarado', '0'),
	(118, 'Cliente não declarado', '0'),
	(119, 'Cliente não declarado', '0'),
	(120, 'Cliente não declarado', '0'),
	(121, 'Cliente não declarado', '0'),
	(122, 'Cliente não declarado', '0'),
	(123, 'Cliente não declarado', '0'),
	(124, 'Cliente não declarado', '0'),
	(125, 'Cliente não declarado', '0'),
	(126, 'Cliente não declarado', '0'),
	(127, 'Cliente não declarado', '0'),
	(128, 'Cliente não declarado', '0'),
	(129, 'Cliente não declarado', '0'),
	(130, 'Cliente não declarado', '0'),
	(131, 'Cliente não declarado', '0'),
	(132, 'Cliente não declarado', '0'),
	(133, 'Cliente não declarado', '0'),
	(134, 'Cliente não declarado', '0'),
	(135, 'Cliente não declarado', '0'),
	(136, 'Cliente não declarado', '0'),
	(137, 'Cliente não declarado', '0'),
	(138, 'Cliente não declarado', '0'),
	(139, 'Cliente não declarado', '0'),
	(140, 'Cliente não declarado', '0'),
	(141, 'Cliente não declarado', '0'),
	(142, 'Cliente não declarado', '0'),
	(143, 'Cliente não declarado', '0'),
	(144, 'Cliente não declarado', '0'),
	(145, 'Cliente não declarado', '0'),
	(146, 'Cliente não declarado', '0'),
	(147, 'Cliente não declarado', '0'),
	(148, 'Cliente não declarado', '0'),
	(149, 'Cliente não declarado', '0');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.estacionamento
CREATE TABLE IF NOT EXISTS `estacionamento` (
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

-- Copiando dados para a tabela sistema_ge.estacionamento: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `estacionamento` DISABLE KEYS */;
REPLACE INTO `estacionamento` (`id_estac`, `nome_estac`, `cnpj_estac`, `num_estac`, `comp_estac`, `preco_estac`, `frac_hr_estac`, `quant_vaga`, `preco_pernoite`, `quant_pavimento`) VALUES
	(1, 'Estacione Aqui', '166666', '33', 'sla', 4, 2, '26', 50.2, 2);
/*!40000 ALTER TABLE `estacionamento` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `nome_func` varchar(50) DEFAULT NULL,
  `nivel_func` char(1) DEFAULT NULL,
  `email_func` varchar(250) DEFAULT NULL,
  `status_func` char(1) DEFAULT NULL,
  `dt_cadastro_func` datetime DEFAULT NULL,
  `cpf_func` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.funcionario: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
REPLACE INTO `funcionario` (`id_func`, `nome_func`, `nivel_func`, `email_func`, `status_func`, `dt_cadastro_func`, `cpf_func`) VALUES
	(1, 'bia', '2', 'bia@gmail.com', '1', '2022-09-06 06:33:58', '11112'),
	(7, 'Lethicia', '3', 'leth@gmail.com', '1', '2022-06-28 09:09:57', '33333'),
	(8, 'Raphaela', '1', 'rapha@gmail.com', '1', '2022-06-29 05:09:15', '22222'),
	(9, 'Hugo', '3', 'hugo@gmail.com', '0', '2022-06-29 05:10:47', '44444'),
	(13, 'Matheus ', '3', 'matheus@gmail.com', '1', '2022-07-08 09:52:34', '66666');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.func_usu
CREATE TABLE IF NOT EXISTS `func_usu` (
  `senha_func` varchar(12) DEFAULT NULL,
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `func_usu` varchar(30) DEFAULT NULL,
  KEY `id_func` (`id_func`),
  CONSTRAINT `func_usu_ibfk_1` FOREIGN KEY (`id_func`) REFERENCES `funcionario` (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.func_usu: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
REPLACE INTO `func_usu` (`senha_func`, `id_func`, `func_usu`) VALUES
	('bia3', 1, 'bia'),
	('leth3', 7, 'leth'),
	('rapha3', 8, 'rapha'),
	('hugo4', 9, 'hugo'),
	('jesua6', 10, 'jesua'),
	('isaac5', 11, 'isaac'),
	('matheus3', 13, 'matheus'),
	('', 14, ''),
	('', 15, '');
/*!40000 ALTER TABLE `func_usu` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.ticket
CREATE TABLE IF NOT EXISTS `ticket` (
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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.ticket: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
REPLACE INTO `ticket` (`id_ticket`, `hr_entrada`, `hr_saida`, `valor_total_ticket`, `chave`, `placa_veic`, `id_vaga`, `status_pg`, `forma_pagamento`) VALUES
	(13, '2022-07-01 09:56:19', '2022-07-12 21:59:39', 0, '0', 'LHN0114', 0, '1', NULL),
	(15, '2022-07-01 10:03:00', '2022-07-01 10:03:00', 0, '1', 'KWR1635', 0, '0', NULL),
	(16, '2022-07-01 10:06:11', '2022-07-01 10:06:50', 0, '1', 'LUU3196', 0, '0', NULL),
	(17, '2022-07-01 10:07:02', '2022-07-13 20:08:25', 0, '1', 'KUR9257', 0, '0', NULL),
	(18, '2022-07-01 11:39:18', '2022-10-02 21:30:49', 0, '0', 'ABC1234', 0, '1', NULL),
	(19, '2022-07-08 09:17:16', '2022-07-08 09:17:16', 0, '1', 'RRR8888', 0, '0', NULL),
	(20, '2022-07-08 09:19:22', '2022-07-08 09:19:22', 0, '1', 'DDD2222', 0, '0', NULL),
	(21, '2022-07-08 09:21:54', '2022-07-08 09:21:54', 0, '0', 'TTT55555', 0, '0', NULL),
	(22, '2022-07-08 09:24:55', '2022-07-08 09:24:55', 0, '0', 'III9999', 0, '0', NULL),
	(23, '2022-07-08 09:37:29', '2022-07-08 09:37:29', 0, '0', 'RRR3333', 0, '0', NULL),
	(24, '2022-07-08 09:46:37', '2022-10-02 21:31:53', 0, '1', 'JJJ7777', 0, '0', NULL),
	(25, '2022-07-08 09:49:20', '2022-07-08 09:49:20', 0, '0', 'BBB3333', 0, '0', NULL),
	(26, '2022-07-08 08:53:38', '2022-07-08 08:59:31', 0, '0', 'LLL7777', 0, '1', NULL),
	(27, '2022-07-10 12:17:47', '2022-10-27 08:36:36', 0, '0', 'BIA3333', 0, '1', NULL),
	(28, '2022-07-12 08:17:26', '2022-10-02 21:38:42', 0, '0', 'YYY4444', 0, '1', NULL),
	(29, '2022-07-12 12:17:47', '2022-07-12 20:21:16', 0, '0', 'GGG7777', 0, '0', NULL),
	(30, '2022-08-05 21:02:18', '2022-08-05 21:02:18', 0, '0', 'GGG1111', 0, '0', NULL),
	(31, '2022-08-06 08:37:41', '2022-10-02 22:03:13', 0, '0', 'GGG5555', 0, '1', NULL),
	(32, '2022-08-06 08:40:19', '2022-10-02 22:03:13', 0, '0', 'GGG5555', 0, '0', NULL),
	(33, '2022-08-06 08:53:41', '2022-10-27 08:36:36', 1054.2, '0', 'BIA3333', 0, '0', '2'),
	(59, '2022-09-30 03:07:46', '2022-09-30 03:10:11', 4, '0', 'OOO3333', 0, '1', NULL),
	(60, '2022-09-30 03:10:32', '2022-09-30 03:10:32', 0, '0', 'OOO3333', 0, '0', NULL),
	(61, '2022-10-02 22:14:55', '2022-10-22 00:50:10', 2, '0', 'TES1333', 0, '1', '0'),
	(62, '2022-10-02 22:16:43', '2022-10-22 00:50:10', 953, '0', 'TES1333', 0, '1', '0'),
	(63, '2022-10-21 20:40:21', '2022-10-22 00:50:10', 6, '0', 'TES1333', 5687, '1', '0'),
	(64, '2022-10-21 21:19:52', '2022-10-22 00:50:10', 50.2, '1', 'TES1333', 5693, '0', '2'),
	(65, '2022-10-27 08:13:46', '2022-10-27 08:20:27', 4, '0', 'HHHH999', 5685, '1', '3'),
	(66, '2022-10-27 08:20:44', '2022-10-27 08:20:44', 0, '0', 'HHHH999', 0, '0', '0');
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.vagas
CREATE TABLE IF NOT EXISTS `vagas` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5946 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.vagas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
REPLACE INTO `vagas` (`id_vaga`, `status_vaga`, `pav_vaga`, `tipo_vaga`, `id_estac`, `setor_vaga`, `num_vaga`) VALUES
	(0, '0', '0', '0', 1, 'B', 0);
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.veiculo
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

-- Copiando dados para a tabela sistema_ge.veiculo: ~29 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
REPLACE INTO `veiculo` (`placa_veic`, `tipo_veic`, `id_cli`, `marca_veic`, `modelo_veic`) VALUES
	('', '---------', 138, '', ''),
	('ABC1234', '1', 54, '', ''),
	('BBB3333', '1', 66, 'Honda', 'Civic'),
	('BIA3333', '1', 83, 'Honda', 'Civic'),
	('DDD2222', '1', 59, 'Honda', 'CITY'),
	('GGG1111', '1', 71, 'Citroen', 'C3'),
	('GGG5555', '1', 81, 'Honda', 'CRV'),
	('GGG7777', '1', 70, 'Citroen', 'C3'),
	('HHHH999', '0', 149, 'TESTE', 'TESTE'),
	('III9999', '1', 63, 'Honda', 'CITY'),
	('JJJ7777', '1', 65, 'Honda', 'Civic'),
	('KRZ4605', '0', 37, NULL, NULL),
	('KUR9257', '0', 53, 'Hyundai', 'HB20'),
	('KWR1635', '1', 49, NULL, NULL),
	('KWW1656', '0', 36, NULL, NULL),
	('LFL-4486', '1', 34, NULL, NULL),
	('LHN0114', '1', 41, NULL, NULL),
	('LHV5336', '0', 38, NULL, NULL),
	('LLL7777', '1', 67, 'Citroen', 'C3'),
	('LSE-4822', '1', 35, NULL, NULL),
	('LTA-0174', '1', 33, NULL, NULL),
	('LUU3196', '1', 52, NULL, NULL),
	('OOO3333', '0', 134, 'CITROEN', 'C4'),
	('RRR3333', '0', 64, 'Honda', 'MOTO'),
	('RRR8888', '0', 57, 'Honda', 'MOTO'),
	('TES1333', '0', 146, 'FIAT', 'UNO'),
	('TTT55555', '1', 61, 'Honda', 'CITY'),
	('TTT6666', '0', 84, 'FIAT', 'UNO'),
	('YYY4444', '1', 69, 'Citroen', 'C3');
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
