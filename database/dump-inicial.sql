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
-- Dumping data for table `avaliacao`
--

LOCK TABLES `avaliacao` WRITE;
/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
INSERT INTO `avaliacao` VALUES ('CAN','Cancelamento'),('CNB','Canais bloqueados'),('CNT','Canais travando'),('DVB','Devolução de backup'),('DVP','Devolução Preventiva'),('EOK','Equipamento ok'),('EPD','Equipamento danificado'),('EPQ','Equipamento Queimado'),('EPR','Equipamento reiniciando'),('ETV','Equipamento travado'),('LLA','LED LOSS não apaga'),('MGT','Migração de tecnologia'),('MPC','Mudança de plano do cliente'),('NAI','Não aparece imagem'),('NAP','Não autentica na plataforma'),('NAT','Não atualiza'),('NAU','Não autorizado'),('NCT','Não conecta'),('NDS','Não desabilita do sistema'),('NFF','Não funciona porta fast'),('NFG','Não funciona porta giga'),('NFL','Não funciona porta(s) LAN'),('NFV','NÃO FUNCIONA PORTAS VOIP'),('NHS','Não habilita no sistema'),('NIR','Não identifica rede'),('NNA','Não navega'),('NSC','Não salva configuração'),('NSL','Não sobe link'),('NVC','Não atinge velocidade contratada'),('PCE','Problema com canais especificos'),('PDA','Problema de audio'),('PDR','Problema de resolução'),('PLP','Problema - LED POWER'),('PVT','Problema VLAN de IPTV'),('PVV','Problema VLAN de VOIP'),('PWF','Problema no Wi-Fi'),('QDC','Quedas de conexão'),('REG','Reagendamento'),('RTS','Retornando sinal'),('SAC','Sem acesso'),('SID','Sem Identificação'),('SSH','Sem sinal de video HDMI'),('SSL','Sem sinal porta LAN'),('SSR','Sem sinal de video RCA');
/*!40000 ALTER TABLE `avaliacao` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conserto`
--

LOCK TABLES `conserto` WRITE;
/*!40000 ALTER TABLE `conserto` DISABLE KEYS */;
/*!40000 ALTER TABLE `conserto` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devolucao`
--

LOCK TABLES `devolucao` WRITE;
/*!40000 ALTER TABLE `devolucao` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa_conserto`
--

LOCK TABLES `empresa_conserto` WRITE;
/*!40000 ALTER TABLE `empresa_conserto` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipamento`
--

LOCK TABLES `equipamento` WRITE;
/*!40000 ALTER TABLE `equipamento` DISABLE KEYS */;
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
INSERT INTO `funcionario` VALUES ('050111','Flavio Nunes','Rede Interna','2018-08-27 21:52:20','2018-08-27 21:52:31'),('050165','Vinicius Souza','Administrador','2018-08-27 21:50:37','2018-11-11 19:45:36'),('050170','Caio Barbosa','Teste','2018-08-27 21:50:51','2018-08-27 21:50:51'),('050188','William Ferreira','Estoque','2018-08-27 21:51:03','2018-08-27 21:51:03'),('050190','Kaio Affonso','Sup. Estoque','2018-08-27 21:51:12','2018-08-27 21:51:12'),('050250','Leandro Oliveira','Rede Externa','2018-08-27 21:52:03','2018-08-27 21:52:03'),('050410','Rafael Guijo','Rede Interna','2018-11-11 19:15:42','2018-11-11 19:15:42');
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
  `tipo` varchar(45) NOT NULL,
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
INSERT INTO `modelo` VALUES ('00010','NANOSTATION','UBIQUITI','NANO5','RADIO','2018-09-03 20:07:08','2018-08-30 21:57:30'),('00015','SWITCH','OVERTEK','OT-2208SIW+/UX','GERAL','2018-09-03 20:07:31','2018-08-30 21:57:41'),('00057','ROUTERBOARD','UBIQUITI','RB750','RADIO','2018-10-02 20:53:29','0000-00-00 00:00:00'),('00097','CONVERSOR','CIANET','CTS600E-F-LXA','DADOS','2018-10-02 20:53:39','0000-00-00 00:00:00'),('00134','GATEWAY','GRANDSTREAM','SYST-GXW-4108','TELEFONIA','2018-10-02 20:53:45','0000-00-00 00:00:00'),('00217','ONU 4 PORTAS','LIFE','SON8368MVWG2','DADOS','2018-09-03 20:11:34','2018-09-03 20:11:34'),('00316','GATEWAY','GRANDSTREAM','SYST-GXW-4104','TELEFONIA','2018-10-02 20:53:51','0000-00-00 00:00:00'),('00516','ONU 2 PORTAS','CIANET','CTS2702B','DADOS','2018-09-03 20:09:09','2018-09-03 20:09:09'),('00517','ONU 4 PORTAS','CIANET','CTS2742BW','DADOS','2018-09-03 20:11:05','2018-09-03 20:11:05'),('00518','ONU 2 PORTAS','CIANET','CTS2702','DADOS','2018-09-03 20:08:50','2018-09-03 20:08:50'),('00519','ONU 2 PORTAS','CIANET','CTS2702D','DADOS','2018-09-03 20:09:50','2018-09-03 20:09:50'),('00521','CONVERSOR','CIANET','CTS500E-F-LXA','DADOS','2018-10-02 20:53:56','0000-00-00 00:00:00'),('00522','ATA','GRADSTREAM','HT502','TELEFONIA','2018-10-02 20:54:01','0000-00-00 00:00:00'),('00523','ATA','LINKSYS','SPA2102','TELEFONIA','2018-10-02 20:54:07','0000-00-00 00:00:00'),('00524','ATA','CISCO','CISCO 122','TELEFONIA','2018-10-02 20:54:12','0000-00-00 00:00:00'),('00549','ONU 4 PORTAS','OVERTEK','OT4020VW','DADOS','2018-09-03 20:12:12','2018-09-03 20:12:12'),('00811','ATA','INTELBRAS','GKM2210T','TELEFONIA','2018-10-02 20:54:18','0000-00-00 00:00:00'),('00831','ONU 2 PORTAS','CIANET','CTS2702C','DADOS','2018-09-03 20:09:31','2018-09-03 20:09:31'),('00832','CONVERSOR','CIANET','CTS600E-F-LXB','DADOS','2018-10-02 20:54:24','0000-00-00 00:00:00'),('00835','ROCKET','UBIQUITI','RocketM5','RADIO','2018-10-02 20:54:29','0000-00-00 00:00:00'),('00906','SET-TOP-BOX','ALBIS','MICRO8083','TV','2018-09-03 20:13:10','2018-09-03 20:13:10'),('00907','SET-TOP-BOX','LIFE','Z121','TV','2018-09-03 20:13:51','2018-09-03 20:13:51'),('00909','CONVERSOR','CIANET','CTS500E-F-LXB','DADOS','2018-10-02 20:54:35','0000-00-00 00:00:00'),('00952','CONVERSOR','LIFE','STE-FMC','DADOS','2018-09-03 20:06:54','2018-08-30 21:55:20'),('01001','SET-TOP-BOX','CIANET','CTS5330','TV','2018-09-03 20:13:33','2018-09-03 20:13:33'),('01056','ONU 2 PORTAS','FURUKAWA','FKONU20L','DADOS','2018-09-03 20:10:37','2018-09-03 20:10:37'),('01067','CONVERSOR','OTECH','HOE3013B','DADOS','2018-10-02 20:54:40','0000-00-00 00:00:00'),('01210','ONU 1 PORTA','E4L','E4L-EPON-1G','DADOS','2018-11-11 19:17:08','2018-11-11 18:53:14');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste`
--

LOCK TABLES `teste` WRITE;
/*!40000 ALTER TABLE `teste` DISABLE KEYS */;
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

-- Dump completed on 2018-11-13 19:29:06
