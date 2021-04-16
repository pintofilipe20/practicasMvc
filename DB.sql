-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 16-Abr-2021 às 10:44
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `praticamvc`
--
CREATE DATABASE IF NOT EXISTS `praticamvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `praticamvc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `nome`, `telefone`) VALUES
(1, 'evaristo mande', '9871234'),
(2, 'Rafael Vindula', '9985764'),
(3, 'Pablo', '89812'),
(4, 'Edvandra', '12132'),
(5, 'Goncalvez da Jesus', '3433'),
(6, 'LuÃ­s de Jesus', '1121'),
(8, '', ''),
(9, 'Fernando', '1234'),
(10, 'Emanuel', '45'),
(11, 'Vivaldo', '23'),
(12, 'Fabrioc Gonga', '923454455');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `acesso` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `endereco`, `email`, `senha`, `acesso`) VALUES
(1, 'pinto', 'são joão', 'pinto@gmail.com', 'senha', 0),
(2, 'vanda', 'luanda', 'vanda@gmail.com', 'vanda', 0),
(3, 'Rafael Vindula', 'catumbela', 'rafa@gmail.com', 'pinto', 0),
(4, 'Adminisrador', '----', 'central', 'central1', 1),
(5, 'Vivaldo', 'Lobito', 'vival@gmail.com', 'senhavivaldo', 0),
(6, 'Alexandre Congos', 'Alto EsperanÃ§a', 'congos@hotmail.com', 'congossenha1234', 0),
(7, 'Nataniel', 'morro da radio', 'nataniel@gmail.com', 'nati', 0),
(8, 'Fabrioc Gonga', 'liro', 'fabricio@gmail.com', 'padrao1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
