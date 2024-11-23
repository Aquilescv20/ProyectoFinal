-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: mass_motos_srl
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `cat_desc` varchar(45) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categoria`
--

LOCK TABLES `tb_categoria` WRITE;
/*!40000 ALTER TABLE `tb_categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_deta_venta`
--

DROP TABLE IF EXISTS `tb_deta_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_deta_venta` (
  `id_venta` int NOT NULL AUTO_INCREMENT,
  `id_produ` int NOT NULL,
  `id_user` int NOT NULL,
  `cantidad` int NOT NULL,
  `precio_compra` int NOT NULL,
  `IGV` double NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_pro_idx` (`id_produ`),
  KEY `id_user_idx` (`id_user`),
  CONSTRAINT `id_produ` FOREIGN KEY (`id_produ`) REFERENCES `tb_producto` (`id_producto`),
  CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_deta_venta`
--

LOCK TABLES `tb_deta_venta` WRITE;
/*!40000 ALTER TABLE `tb_deta_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_deta_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_producto`
--

DROP TABLE IF EXISTS `tb_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_producto` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `pro_nom` varchar(45) NOT NULL,
  `pro_desc` varchar(45) NOT NULL,
  `pro_prec` double NOT NULL,
  `pro_prove` int NOT NULL,
  `pro_stock` int NOT NULL,
  `pro_tip_cat` int NOT NULL,
  `pro_marca` varchar(45) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `pro_preve_idx` (`pro_prove`),
  KEY `pro_tip_cat_idx` (`pro_tip_cat`),
  CONSTRAINT `pro_preve` FOREIGN KEY (`pro_prove`) REFERENCES `tb_proveedor` (`id_proveedor`),
  CONSTRAINT `pro_tip_cat` FOREIGN KEY (`pro_tip_cat`) REFERENCES `tb_categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_producto`
--

LOCK TABLES `tb_producto` WRITE;
/*!40000 ALTER TABLE `tb_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_proveedor`
--

DROP TABLE IF EXISTS `tb_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_proveedor` (
  `id_proveedor` int NOT NULL AUTO_INCREMENT,
  `ruc` int DEFAULT NULL,
  `prove_nom` varchar(45) NOT NULL,
  `prove_direc` varchar(45) NOT NULL,
  `prove_celular` varchar(45) NOT NULL,
  `prove_ruc` int NOT NULL,
  `prove_tipo` int NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `prove_tipo_idx` (`prove_tipo`),
  CONSTRAINT `prove_tipo` FOREIGN KEY (`prove_tipo`) REFERENCES `tb_tipo_proveedor` (`id_prove`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_proveedor`
--

LOCK TABLES `tb_proveedor` WRITE;
/*!40000 ALTER TABLE `tb_proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipo_proveedor`
--

DROP TABLE IF EXISTS `tb_tipo_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_tipo_proveedor` (
  `id_prove` int NOT NULL AUTO_INCREMENT,
  `prov_desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_prove`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipo_proveedor`
--

LOCK TABLES `tb_tipo_proveedor` WRITE;
/*!40000 ALTER TABLE `tb_tipo_proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tipo_proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipo_user`
--

DROP TABLE IF EXISTS `tb_tipo_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_tipo_user` (
  `id_tipo_user` int NOT NULL AUTO_INCREMENT,
  `tip_user` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipo_user`
--

LOCK TABLES `tb_tipo_user` WRITE;
/*!40000 ALTER TABLE `tb_tipo_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tipo_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user_nombre` varchar(45) NOT NULL,
  `user_apellido` varchar(45) NOT NULL,
  `user_celular` varchar(45) NOT NULL,
  `user_correo` varchar(45) NOT NULL,
  `user_pass` varchar(45) NOT NULL,
  `user_tipo` int NOT NULL,
  `user_DNI` varchar(45) DEFAULT NULL,
  `user_Direccion` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_tipo_user_idx` (`user_tipo`),
  CONSTRAINT `user_tipo` FOREIGN KEY (`user_tipo`) REFERENCES `tb_tipo_user` (`id_tipo_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_venta`
--

DROP TABLE IF EXISTS `tb_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_venta` (
  `id_vennta` int NOT NULL,
  `id_prove` int NOT NULL,
  `date` date NOT NULL,
  `num_fac` int NOT NULL,
  `factura` varchar(45) NOT NULL,
  `date_factura` date NOT NULL,
  PRIMARY KEY (`id_vennta`),
  KEY `id_prove_idx` (`id_prove`),
  CONSTRAINT `id_prove` FOREIGN KEY (`id_prove`) REFERENCES `tb_proveedor` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_venta`
--

LOCK TABLES `tb_venta` WRITE;
/*!40000 ALTER TABLE `tb_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-20 20:09:23
