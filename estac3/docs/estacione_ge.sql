-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.cliente: ~20 rows (aproximadamente)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id_cli`, `nome_cli`, `cpf_cli`) VALUES
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
	(54, 'Cliente não declarado', '0');
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
DELETE FROM `estacionamento`;
/*!40000 ALTER TABLE `estacionamento` DISABLE KEYS */;
INSERT INTO `estacionamento` (`id_estac`, `nome_estac`, `cnpj_estac`, `num_estac`, `comp_estac`, `preco_estac`, `frac_hr_estac`, `quant_vaga`) VALUES
	(1, 'Estacione Aqui', '166666', '33', 'sla', 4, 2, '51');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.funcionario: ~6 rows (aproximadamente)
DELETE FROM `funcionario`;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` (`id_func`, `nome_func`, `nivel_func`, `email_func`, `status_func`, `dt_cadastro_func`, `cpf_func`) VALUES
	(1, 'bia', '2', 'bia@gmail.com', '1', '2022-09-06 06:33:58', '11111'),
	(7, 'Lethicia', '3', 'leth@gmail.com', '1', '2022-06-28 09:09:57', '33333'),
	(8, 'Raphaela', '1', 'rapha@gmail.com', '1', '2022-06-29 05:09:15', '22222'),
	(9, 'Hugo', '3', 'hugo@gmail.com', '0', '2022-06-29 05:10:47', '44444'),
	(10, 'Jesua', '3', 'jesua@gmail.com', '0', '2022-06-29 08:57:46', '66666'),
	(11, 'Isaac', '1', 'isaac@gmail.com', '0', '2022-07-01 07:31:40', '55555');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.func_usu
DROP TABLE IF EXISTS `func_usu`;
CREATE TABLE IF NOT EXISTS `func_usu` (
  `senha_func` varchar(12) DEFAULT NULL,
  `id_func` int(11) NOT NULL AUTO_INCREMENT,
  `func_usu` varchar(30) DEFAULT NULL,
  KEY `id_func` (`id_func`),
  CONSTRAINT `func_usu_ibfk_1` FOREIGN KEY (`id_func`) REFERENCES `funcionario` (`id_func`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.func_usu: ~6 rows (aproximadamente)
DELETE FROM `func_usu`;
/*!40000 ALTER TABLE `func_usu` DISABLE KEYS */;
INSERT INTO `func_usu` (`senha_func`, `id_func`, `func_usu`) VALUES
	('bia3', 1, 'bia'),
	('leth3', 7, 'leth'),
	('rapha3', 8, 'rapha'),
	('hugo4', 9, 'hugo'),
	('jesua6', 10, 'jesua'),
	('isaac5', 11, 'isaac');
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
  PRIMARY KEY (`id_ticket`),
  KEY `placa_veic` (`placa_veic`),
  KEY `id_vaga` (`id_vaga`),
  CONSTRAINT `id_vaga` FOREIGN KEY (`id_vaga`) REFERENCES `vagas` (`id_vagas`),
  CONSTRAINT `placa_veic` FOREIGN KEY (`placa_veic`) REFERENCES `veiculo` (`placa_veic`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.ticket: ~11 rows (aproximadamente)
DELETE FROM `ticket`;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` (`id_ticket`, `hr_entrada`, `hr_saida`, `valor_total_ticket`, `chave`, `placa_veic`, `id_vaga`) VALUES
	(6, '2022-07-01 09:43:58', '2022-07-01 11:43:59', NULL, '1', 'LFL-4486', 2),
	(7, '2022-07-01 07:44:50', '2022-07-01 09:59:17', NULL, '1', 'LTA-0174', 1),
	(8, '2022-07-01 09:51:32', '2022-07-01 09:51:32', 0, '', 'LHN0114', 1),
	(9, '2022-07-01 09:53:28', '2022-07-01 09:53:28', 0, '0', 'LHN0114', 1),
	(10, '2022-07-01 09:54:12', '2022-07-01 09:54:12', 0, '0', 'LHN0114', 1),
	(12, '2022-07-01 09:55:47', '2022-07-01 09:55:47', 0, '', 'LHN0114', 1),
	(13, '2022-07-01 09:56:19', '2022-07-01 09:56:19', 0, '0', 'LHN0114', 1),
	(15, '2022-07-01 10:03:00', '2022-07-01 10:03:00', 0, '1', 'KWR1635', 1),
	(16, '2022-07-01 10:06:11', '2022-07-01 10:06:50', 0, '1', 'LUU3196', 1),
	(17, '2022-07-01 10:07:02', '2022-07-01 10:09:39', 0, '1', 'KUR9257', 1),
	(18, '2022-07-01 11:39:18', '2022-07-01 11:39:58', 0, '0', 'ABC1234', 1);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nivel` char(1) DEFAULT NULL,
  `ativo` char(1) DEFAULT NULL,
  `cadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela sistema_ge.usuarios: ~13 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `cadastro`) VALUES
	(1, 'bia', 'bia', 'bia2', 'bia@mail.com', '2', '1', '2022-06-11'),
	(2, 'raphaela', 'rapha', 'rapha1', 'rapha@mail.com', '1', '1', '2022-06-11'),
	(3, 'leth', 'leth', 'leth1', 'leth@mail.com', '1', '1', '2022-06-11'),
	(4, 'isaac', 'isaac', 'isaac1', 'isaac@mail.com', '1', '0', '2022-06-11'),
	(5, 'jesua', 'jesua', 'jesua2', 'jesua@mail.com', '2', '0', '2022-06-11'),
	(6, 'hugo', 'hugo', 'hugo3', 'hugo@mail.com', '3', '0', '2022-06-11'),
	(7, 'matheus', 'matheus', 'matheus2', 'matheus@mail.com', '2', '1', '2022-06-11'),
	(8, 'Freitas', 'Freitas', 'freitas', 'freitas@mail.com', '2', '1', '0000-00-00'),
	(9, 'Guilherme', 'guilherme', 'guilherme', 'guilherme@mail.com', '1', '1', '0000-00-00'),
	(10, 'vanessa', 'vanessa', 'vanessa', 'vanessa@mail.com', '1', '0', '0000-00-00'),
	(11, 'Maria', 'Maria', 'Maria', 'maria@mail.com', '3', '1', '0000-00-00'),
	(12, 'Renata', 'renata', 'renata', 'renata@mail.com', '1', '1', '0000-00-00'),
	(13, 'roberto', 'roberto', 'roberto', 'roberto@mail.com', '1', '0', '0000-00-00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.vagas
DROP TABLE IF EXISTS `vagas`;
CREATE TABLE IF NOT EXISTS `vagas` (
  `id_vagas` int(11) NOT NULL AUTO_INCREMENT,
  `status_vaga` char(1) DEFAULT NULL,
  `pav_vaga` char(2) DEFAULT NULL,
  `tipo_vaga` char(1) DEFAULT NULL,
  `id_estac` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vagas`),
  KEY `id_estac` (`id_estac`),
  CONSTRAINT `vagas_ibfk_1` FOREIGN KEY (`id_estac`) REFERENCES `estacionamento` (`id_estac`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.vagas: ~2 rows (aproximadamente)
DELETE FROM `vagas`;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` (`id_vagas`, `status_vaga`, `pav_vaga`, `tipo_vaga`, `id_estac`) VALUES
	(1, '1', '0', '0', 1),
	(2, '1', '0', '0', 1);
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_ge.veiculo
DROP TABLE IF EXISTS `veiculo`;
CREATE TABLE IF NOT EXISTS `veiculo` (
  `placa_veic` varchar(8) NOT NULL,
  `tipo_veic` varchar(20) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  PRIMARY KEY (`placa_veic`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela sistema_ge.veiculo: ~11 rows (aproximadamente)
DELETE FROM `veiculo`;
/*!40000 ALTER TABLE `veiculo` DISABLE KEYS */;
INSERT INTO `veiculo` (`placa_veic`, `tipo_veic`, `id_cli`) VALUES
	('ABC1234', '1', 54),
	('KRZ4605', '0', 37),
	('KUR9257', '0', 53),
	('KWR1635', '1', 49),
	('KWW1656', '0', 36),
	('LFL-4486', '1', 34),
	('LHN0114', '1', 41),
	('LHV5336', '0', 38),
	('LSE-4822', '1', 35),
	('LTA-0174', '1', 33),
	('LUU3196', '1', 52);
/*!40000 ALTER TABLE `veiculo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
