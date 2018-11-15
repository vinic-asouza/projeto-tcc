CREATE DATABASE  IF NOT EXISTS `db_projeto_tc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_projeto_tc`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_projeto_tc
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacao` (
  `id` varchar(3) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `conserto`
--

DROP TABLE IF EXISTS `conserto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conserto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qntd` int(11) NOT NULL,
  `num_nota` int(11) NOT NULL,
  `data_envio` date NOT NULL,
  `previsao_chegada` date NOT NULL,
  `empresa_conserto_id` int(11) NOT NULL,
  `modelo_id` varchar(12) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`empresa_conserto_id`,`modelo_id`),
  KEY `fk_concerto_empresa_conserto1_idx` (`empresa_conserto_id`),
  KEY `fk_concerto_modelo1_idx` (`modelo_id`),
  CONSTRAINT `fk_concerto_empresa_conserto1` FOREIGN KEY (`empresa_conserto_id`) REFERENCES `empresa_conserto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_concerto_modelo1` FOREIGN KEY (`modelo_id`) REFERENCES `modelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `descarte`
--

DROP TABLE IF EXISTS `descarte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descarte` (
  `id_descarte` int(12) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `funcionario_id` varchar(45) NOT NULL,
  `equipamento_id` int(12) NOT NULL,
  PRIMARY KEY (`id_descarte`,`funcionario_id`,`equipamento_id`),
  KEY `fk_descarte_funcionario1_idx` (`funcionario_id`),
  KEY `fk_descarte_equipamento1_idx` (`equipamento_id`),
  CONSTRAINT `fk_descarte_equipamento1` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_descarte_funcionario1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `devolucao`
--

DROP TABLE IF EXISTS `devolucao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devolucao` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `servico` varchar(45) DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `avaliacao` varchar(3) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `funcionario_id` varchar(45) NOT NULL,
  `equipamento_id` int(12) NOT NULL,
  PRIMARY KEY (`id`,`funcionario_id`,`equipamento_id`),
  KEY `fk_devolucao_funcionario1_idx` (`funcionario_id`),
  KEY `fk_devolucao_equipamento1_idx` (`equipamento_id`),
  CONSTRAINT `fk_devolucao_equipamento1` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_devolucao_funcionario1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `empresa_conserto`
--

DROP TABLE IF EXISTS `empresa_conserto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa_conserto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(45) NOT NULL,
  `telefone_empresa` varchar(20) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `responsavel` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `equipamento`
--

DROP TABLE IF EXISTS `equipamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipamento` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `mac_address` varchar(12) DEFAULT NULL,
  `num_serie` varchar(45) DEFAULT NULL,
  `observacao` varchar(45) DEFAULT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modelo_id` varchar(12) NOT NULL,
  PRIMARY KEY (`id`,`modelo_id`),
  UNIQUE KEY `num_serie_UNIQUE` (`num_serie`),
  UNIQUE KEY `mac_address_UNIQUE` (`mac_address`),
  KEY `fk_equipamento_modelo1_idx` (`modelo_id`),
  CONSTRAINT `fk_equipamento_modelo` FOREIGN KEY (`modelo_id`) REFERENCES `modelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `id` varchar(45) NOT NULL,
  `nome_funcionario` varchar(45) NOT NULL,
  `setor_func` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `modelo`
--

DROP TABLE IF EXISTS `modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelo` (
  `id` varchar(12) NOT NULL,
  `nome_equip` varchar(45) NOT NULL,
  `marca_equip` varchar(45) NOT NULL,
  `modelo_equip` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `teste`
--

DROP TABLE IF EXISTS `teste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teste` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `situacao` enum('OK','DEFEITO') NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `funcionario_id` varchar(45) NOT NULL,
  `equipamento_id` int(12) NOT NULL,
  `avaliacao` varchar(3) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`,`funcionario_id`,`equipamento_id`),
  KEY `fk_teste_funcionario1_idx` (`funcionario_id`),
  KEY `fk_teste_equipamento1_idx` (`equipamento_id`),
  CONSTRAINT `fk_teste_equipamento1` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_teste_funcionario1` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'db_projeto_tc'
--

--
-- Dumping routines for database 'db_projeto_tc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-11 19:32:23
