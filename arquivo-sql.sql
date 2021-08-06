-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para descart_bd
CREATE DATABASE IF NOT EXISTS `descart_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `descart_bd`;

-- Copiando estrutura para tabela descart_bd.formulario
CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `sobrenome` varchar(150) NOT NULL,
  `tipo` int(2) NOT NULL,
  `data_de_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela descart_bd.formulario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `formulario` DISABLE KEYS */;
INSERT INTO `formulario` (`id`, `email`, `senha`, `nome`, `sobrenome`, `tipo`, `data_de_cadastro`) VALUES
	(1, 'Admin@mailinator.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 'ADM', 2, '2019-04-11 18:20:36'),
	(2, 'hebert_nascimento96@outlook.com', '202cb962ac59075b964b07152d234b70', 'hebert', 'nascimento', 3, '2019-04-11 18:21:15'),
	(3, 'ygordonascimentorampe@gmail.com', '202cb962ac59075b964b07152d234b70', 'ygor', 'maul', 3, '2019-05-08 20:08:13'),
	(5, 'chris@gmail.com', '202cb962ac59075b964b07152d234b70', 'Chris', 'Correa', 3, '2019-05-23 17:04:31');
/*!40000 ALTER TABLE `formulario` ENABLE KEYS */;

-- Copiando estrutura para tabela descart_bd.test
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela descart_bd.test: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`id`, `email`, `senha`, `nome`, `sobrenome`, `data`) VALUES
	(1, 'hebert_nascimento96@outlook.com', '123', 'hebert', 'nascimento', '2019-04-17 10:41:51'),
	(2, 'ygordonascimentorampe@gmail.com', '123', 'ygor', 'nascimento', '2019-04-17 10:42:00'),
	(3, 'Tereza@mailinator.com', '123', 'tereza', 'cristina', '2019-04-17 10:42:11'),
	(4, 'Roberto@tempmail.com', '123', 'roberto', 'almeida', '2019-04-17 10:42:19'),
	(5, 'wanda@hotmail.com', '123', 'wanda', 'millo', '2019-04-17 10:42:27');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
