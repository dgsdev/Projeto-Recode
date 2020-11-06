-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06/11/2020 às 15:46
-- Versão do servidor: 8.0.21
-- Versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jump`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `postagens`
--

DROP TABLE IF EXISTS `postagens`;
CREATE TABLE IF NOT EXISTS `postagens` (
  `idpostagens` int NOT NULL AUTO_INCREMENT,
  `videoprincipal` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `imagemcard` varchar(150) NOT NULL,
  `videolibras` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fk_usuario` int NOT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpostagens`),
  KEY `fk_usuario` (`fk_usuario`)
) ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `conf_senha` varchar(32) NOT NULL,
  `situacao` varchar(50) NOT NULL,
  `grau` varchar(50) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(30) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idusuarios`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nome`, `apelido`, `imagem`, `email`, `senha`, `conf_senha`, `situacao`, `grau`, `sexo`, `nascimento`, `endereco`, `bairro`, `cidade`, `estado`, `cep`, `pais`, `data`) VALUES
(1, 'Paulo', 'Paulinho', NULL, 'paulo@ongbr.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Surdo', 'Leve', 'Masculino', '2016-09-13', 'Rua B, 258', 'Palmares', 'Santo André', 'SP', '05555-333', 'Brasil', NULL),
(2, 'douglas', 'dgs', '', 'dgs@dgsdev.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Ouvinte', 'Leve', 'Masculino', '0000-00-00', 'Rua K', 'Vila Mariana', 'São Paulo', 'SP', '09582-289', 'Brasil', NULL),
(3, 'mateus', 'mateus', '', 'mateus@dgsdev.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Surdo', 'Outro', 'Masculino', '0000-00-00', 'Rua K', 'Vila Mariana', 'São Paulo', 'SP', '09582-289', 'Brasil', '0000-00-00 00:00:00'),
(4, 'juca', 'juca', '', 'juca@dgsdev.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Ouvinte', 'Leve', 'Masculino', '0000-00-00', 'Rua K', 'Vila Mariana', 'São Paulo', 'SP', '09582-289', 'Brasil', '2020-11-06 00:32:27'),
(5, 'joão', 'jo', '', 'joao@dgsdev.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'Ouvinte', 'Leve', 'Masculino', '0000-00-00', 'Rua K', 'Vila Mariana', 'São Paulo', 'SP', '09582-289', 'Brasil', '2020-11-06 00:36:47'),
(6, 'paulo p', 'paulinho', 'https://images.pexels.com/photos/358532/pexels-photo-358532.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'paulinho@dgsdev.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-06 04:05:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
