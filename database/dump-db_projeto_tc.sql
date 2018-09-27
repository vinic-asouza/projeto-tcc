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
-- Table structure for table `concerto`
--

DROP TABLE IF EXISTS `concerto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concerto` (
  `id` int(11) NOT NULL,
  `qntd` int(11) NOT NULL,
  `num_nota` int(11) NOT NULL,
  `data_envio` date NOT NULL,
  `previsao_chegada` date NOT NULL,
  `empresa_conserto_id` int(11) NOT NULL,
  `modelo_id` varchar(12) NOT NULL,
  PRIMARY KEY (`id`,`empresa_conserto_id`,`modelo_id`),
  KEY `fk_concerto_empresa_conserto1_idx` (`empresa_conserto_id`),
  KEY `fk_concerto_modelo1_idx` (`modelo_id`),
  CONSTRAINT `fk_concerto_empresa_conserto1` FOREIGN KEY (`empresa_conserto_id`) REFERENCES `empresa_conserto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_concerto_modelo1` FOREIGN KEY (`modelo_id`) REFERENCES `modelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concerto`
--

LOCK TABLES `concerto` WRITE;
/*!40000 ALTER TABLE `concerto` DISABLE KEYS */;
/*!40000 ALTER TABLE `concerto` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `descarte`
--

LOCK TABLES `descarte` WRITE;
/*!40000 ALTER TABLE `descarte` DISABLE KEYS */;
/*!40000 ALTER TABLE `descarte` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devolucao`
--

LOCK TABLES `devolucao` WRITE;
/*!40000 ALTER TABLE `devolucao` DISABLE KEYS */;
INSERT INTO `devolucao` VALUES (7,'2018-09-03',20359,'RETIRADA','CANCELAMENTO','CAN','2018-09-03 20:37:05','2018-09-03 20:37:05','050111',14),(8,'2018-09-03',20310,'RETIRADA','CANCELAMENTO','CAN','2018-09-03 20:37:24','2018-09-03 20:37:24','050111',15),(9,'2018-09-03',20111,'RETIRADA','CANCELAMENTO','CAN','2018-09-03 20:37:55','2018-09-03 20:37:55','050111',16),(10,'2018-09-03',20222,'','','SIG','2018-09-03 20:38:14','2018-09-03 20:38:14','050111',17),(11,'2018-09-03',20333,'','','SIG','2018-09-03 20:38:48','2018-09-03 20:38:48','050111',18),(12,'2018-09-03',20444,'TROCA','Problema no WIFI','PWF','2018-09-03 20:39:35','2018-09-03 20:39:35','050111',19),(13,'2018-09-03',20555,'TROCA','Queimado','EQD','2018-09-03 20:40:20','2018-09-03 20:40:20','050111',20),(14,'2018-09-03',20666,'TROCA','','SIG','2018-09-03 20:41:00','2018-09-03 20:41:00','050111',21),(15,'2018-09-03',20777,'TROCA','NÃ£o funciona porta giga','NFG','2018-09-03 20:42:00','2018-09-03 20:42:00','050111',22),(16,'2018-09-03',20888,'RETIRADA','CANCELAMENTO','CAN','2018-09-03 20:42:21','2018-09-03 20:42:21','050111',23);
/*!40000 ALTER TABLE `devolucao` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `empresa_conserto`
--

LOCK TABLES `empresa_conserto` WRITE;
/*!40000 ALTER TABLE `empresa_conserto` DISABLE KEYS */;
INSERT INTO `empresa_conserto` VALUES (1,'Consertos LTDA','14 3425-4912','Marilia','Rua 9 de Julho, 255','Jorge Peixoto','jorgedoconserto@gmail.com','2018-08-27 21:56:23','2018-08-27 21:56:23'),(2,'Deskhelp','14 99819-6348','GarÃ§a','Rua da GraÃ§a','Joao Alves','jao@gmail.com','2018-08-27 21:57:30','2018-08-27 21:57:30'),(3,'Alou','14 3400-0015','SÃ£o Paulo','Rua SP','Fernando Abreu','ferab@hotmail.com','2018-08-27 21:58:05','2018-08-27 21:58:05');
/*!40000 ALTER TABLE `empresa_conserto` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
INSERT INTO `equipamento` VALUES (14,'0C565C6E432C','Z12103101723000007226156','','2018-09-03 20:22:53','2018-09-03 20:22:53','00907'),(15,'0C565C6E43D7','Z12103101723000007226327','','2018-09-03 20:23:16','2018-09-03 20:23:16','00907'),(16,'0C565C41E59C','Z12100201526000004318620','','2018-09-03 20:23:38','2018-09-03 20:23:38','01001'),(17,'0C565C41E836','Z12100201526000004319286','','2018-09-03 20:23:55','2018-09-03 20:23:55','01001'),(18,'001946133FF8','2702D56081','','2018-09-03 20:24:35','2018-09-03 20:24:35','00519'),(19,'78303B923304','CNSZCMSON83681801241156','','2018-09-03 20:24:59','2018-09-03 20:24:59','00217'),(20,'78303B96C0B4','CNSZCMSON83681805220014','','2018-09-03 20:25:18','2018-09-03 20:25:18','00217'),(21,'78303BE8D700','CNSZOT4020VW1606260637','','2018-09-03 20:25:40','2018-09-03 20:25:40','00549'),(22,'78303B88E850','CNSZOT4020VW1703083775','','2018-09-03 20:26:19','2018-09-03 20:26:19','00549'),(23,'001946100B00','2742BW19940','','2018-09-03 20:28:06','2018-09-03 20:28:06','00517');
/*!40000 ALTER TABLE `equipamento` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES ('050111','Flavio Nunes','Rede Interna','2018-08-27 21:52:20','2018-08-27 21:52:31'),('050165','Vinicius Souza','Teste','2018-08-27 21:50:37','2018-08-27 21:50:37'),('050170','Caio Barbosa','Teste','2018-08-27 21:50:51','2018-08-27 21:50:51'),('050188','William Ferreira','Estoque','2018-08-27 21:51:03','2018-08-27 21:51:03'),('050190','Kaio Affonso','Sup. Estoque','2018-08-27 21:51:12','2018-08-27 21:51:12'),('050250','Leandro Oliveira','Rede Externa','2018-08-27 21:52:03','2018-08-27 21:52:03'),('050300','Edmar Adami','Gerente Op.','2018-08-27 21:51:34','2018-08-27 21:51:34');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

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
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo`
--

LOCK TABLES `modelo` WRITE;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
INSERT INTO `modelo` VALUES ('00010','NANOSTATION','UBIQUITI','NANO5','2018-09-03 20:07:08','2018-08-30 21:57:30'),('00015','SWITCH','OVERTEK','OT-2208SIW+/UX','2018-09-03 20:07:31','2018-08-30 21:57:41'),('00217','ONU 4 PORTAS','LIFE','SON8368MVWG2','2018-09-03 20:11:34','2018-09-03 20:11:34'),('00516','ONU 2 PORTAS','CIANET','CTS2702B','2018-09-03 20:09:09','2018-09-03 20:09:09'),('00517','ONU 4 PORTAS','CIANET','CTS2742BW','2018-09-03 20:11:05','2018-09-03 20:11:05'),('00518','ONU 2 PORTAS','CIANET','CTS2702','2018-09-03 20:08:50','2018-09-03 20:08:50'),('00519','ONU 2 PORTAS','CIANET','CTS2702D','2018-09-03 20:09:50','2018-09-03 20:09:50'),('00549','ONU 4 PORTAS','OVERTEK','OT4020VW','2018-09-03 20:12:12','2018-09-03 20:12:12'),('00831','ONU 2 PORTAS','CIANET','CTS2702C','2018-09-03 20:09:31','2018-09-03 20:09:31'),('00906','SET-TOP-BOX','ALBIS','MICRO8083','2018-09-03 20:13:10','2018-09-03 20:13:10'),('00907','SET-TOP-BOX','LIFE','Z121','2018-09-03 20:13:51','2018-09-03 20:13:51'),('00952','CONVERSOR','LIFE','STE-FMC','2018-09-03 20:06:54','2018-08-30 21:55:20'),('01001','SET-TOP-BOX','CIANET','CTS5330','2018-09-03 20:13:33','2018-09-03 20:13:33'),('01056','ONU 2 PORTAS','FURUKAWA','FKONU20L','2018-09-03 20:10:37','2018-09-03 20:10:37');
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste`
--

LOCK TABLES `teste` WRITE;
/*!40000 ALTER TABLE `teste` DISABLE KEYS */;
INSERT INTO `teste` VALUES (4,'OK','','050165',14,'EOK','2018-09-03 20:42:51','2018-09-03 20:42:51'),(5,'OK','','050165',15,'EOK','2018-09-03 20:43:00','2018-09-03 20:43:00'),(6,'OK','','050165',16,'EOK','2018-09-03 20:43:10','2018-09-03 20:43:10'),(7,'OK','','050165',17,'EOK','2018-09-03 20:43:20','2018-09-03 20:43:20'),(8,'DEFEITO','Download nÃ£o ultrapassa 100MB','050165',18,'NVC','2018-09-03 20:43:39','2018-09-03 20:43:39'),(9,'DEFEITO','NÃ£o funciona wireless','050165',19,'PWF','2018-09-03 20:43:53','2018-09-03 20:43:53'),(10,'OK','','050165',20,'EOK','2018-09-03 20:44:03','2018-09-03 20:44:03'),(11,'OK','','050165',21,'EOK','2018-09-03 20:44:12','2018-09-03 20:44:12'),(12,'DEFEITO','Canais travando','050165',22,'CNT','2018-09-03 20:44:40','2018-09-03 20:44:40'),(13,'OK','','050165',23,'EOK','2018-09-03 20:44:47','2018-09-03 20:44:47');
/*!40000 ALTER TABLE `teste` ENABLE KEYS */;
UNLOCK TABLES;

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

-- Dump completed on 2018-09-03 20:49:38
