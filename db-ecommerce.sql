CREATE DATABASE  IF NOT EXISTS `db_ecommerce`;
USE `db_ecommerce`;

DROP TABLE IF EXISTS `db_ecommerce`.`tb_cliente`;

CREATE TABLE `db_ecommerce`.`tb_cliente` (
  `login` varchar(50) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`login`)
);

DROP TABLE IF EXISTS `db_ecommerce`.`tb_produtos`;

CREATE TABLE `db_ecommerce`.`tb_produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(64) NOT NULL,
  `precoProduto` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idproduto`)
);

INSERT INTO `db_ecommerce`.`tb_produtos` VALUES (1,'TAPIOCA',06.00),(2,'BOLO',03.00),(3,'HAMBUGUER',12.00),(4,'PIZZA FATIA',05.00),(5,'SALGADO',04.00),(6,'OMELETE',06.00),(7,'BATATA FRITA',05.00),(8,'PASTEL',04.00),(9,'SANDUICHE',05.00),(10,'HOT-DOG',06.00),(11,'COCA-COLA LATA',04.00),(12,'FANTA LARANJA LATA',04.00),(13,'MILK-SHAKE',10.00),(14,'SUCO',05.00),(15,'LIMONADA',08.00);

DROP TABLE IF EXISTS `db_ecommerce`.`tb_carrinho`;

CREATE TABLE `db_ecommerce`.`tb_carrinho` (
  `idcart` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `lanche` varchar(50) NOT NULL,
  `bebida` varchar(50) NOT NULL,
  `valorTotal` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idcart`)
);



