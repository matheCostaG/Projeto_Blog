-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.17.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(32) NOT NULL,
  `login` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (7,'Matheus','d37eb50d868361ea729bb4147eb3c1d8','Matheus','matheuscosta12535@gmail.com'),(9,'Matheus costa','0747b9be4f90056c30eb5241f06bfe9b','mths','matheuscosta12535@hotmail.com'),(10,'Mayquel','269efc0384256ed26a4f1bc2c6d72758','Mayquel','mayquelphilipe@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicacao`
--

DROP TABLE IF EXISTS `publicacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `texto` text,
  `img_postagem` varchar(12) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`),
  CONSTRAINT `publicacao_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacao`
--

LOCK TABLES `publicacao` WRITE;
/*!40000 ALTER TABLE `publicacao` DISABLE KEYS */;
INSERT INTO `publicacao` VALUES (17,'ESSENTIAL PHONE: CONHEÃ‡A O SMARTPHONE FUTURISTA','O Essential Phone (ou PH-1) Ã© o smartphone lanÃ§ado na Ãºltima quinta-feira (24) pela Essential, empresa do criador do sistema operacional Android, Andy Rubin.\r\n\r\nO Essential Phone promete bater de frente com os celulares de elite, como as novas versÃµes do iPhone e o Galaxy S8. O display Ã© parecido com o gadget da Samsung e ocupa quase todo o painel frontal. AlÃ©m disso, Ã© possÃ­vel acoplar uma cÃ¢mera 360Âº de forma modular ao smartphone.\r\n\r\nApesar de ainda nÃ£o sabermos nada muito concreto a respeito das funcionalidades e desempenho do aparelho, alguns sites americanos jÃ¡ receberam seus modelos para reviews. Mesmo assim, sabemos que sÃ³ o fato do software ser absolutamente limpo jÃ¡ agradou quem pegou o aparelho em mÃ£os. O Ãºnico ponto negativo da tela â€œinfinitaâ€ Ã© que a maioria dos aplicativos ainda nÃ£o estÃ£o atualizados para ocupar todo o espaÃ§o disponÃ­vel.','17.jpg',7,'2017-09-07'),(18,'Rumo ao Brasil? Galaxy Note 8 chegarÃ¡ Ã  Ãndia semana que vem, veja o preÃ§o','Mesmo quem nÃ£o tem planos de comprar um Galaxy Note 8 pode estar ansioso para a chegada do aparelho no Brasil, puramente pela curiosidade em saber quanto a Samsung cobrarÃ¡ pelo modelo. Na prÃ³xima semana, pelo menos os indianos serÃ£o capazes de sanar essa dÃºvida.','18.jpg',7,'2017-09-14'),(19,'Galaxy Note 8 x V30: briga acirrada entre as melhores cÃ¢meras duplas','Agosto de 2017 marcou o lanÃ§amento de uma dupla que estÃ¡ sendo considerada como a melhor do mercado: Galaxy Note 8, o novo titÃ£ da Samsung, e o V30, a forma de reparar pelos erros do LG G6. Talvez o que mais entre em destaque no par de telefones seja suas.\r\n\r\nAmbos possuem um sistema de cÃ¢meras duplas de respeito, mas serÃ¡ que uma coreana acertou mais do que a outra? Para tentar achar a resposta para essa questÃ£o, o canal de Danny Winget no YouTube colocou o Galaxy Note 8 e o V30 em uma disputa, lado a lado, assista abaixo:','19.jpg',9,'2017-09-07');
/*!40000 ALTER TABLE `publicacao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-07 21:26:47
