-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2019 às 04:37
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--
CREATE DATABASE IF NOT EXISTS `banco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `historia` varchar(900) DEFAULT NULL,
  `objetivo` varchar(900) DEFAULT NULL,
  `metodologia` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` varchar(50) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(900) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `quantidade` int(50) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `preco`, `quantidade`, `imagem`) VALUES
('1', 'Casa com varanda', 'Essa casinha possui uma área extra na sua frente, caso seu cachorro queira apreciar sua varanda. É feita de plástico, mas não deixa de ser confortável por conta disso, o seu pet irá amar!', '60.00', 7, 'casa_cachorro_01.jpg'),
('2', 'TudoJunto', 'Para melhor conforto do seu cachorro essa casinha conta com dois potes, destinados a ração e água, já embutidos ao lado dela; local onde também se encontra uma pequena caixa para que sejam armazenados todos os objetos do pet.', '90.00', 8, 'casa_cachorro_02.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nomeUsuario` varchar(50) DEFAULT NULL,
  `sobrenomeUsuario` varchar(75) DEFAULT NULL,
  `telefoneUsuario` varchar(15) DEFAULT NULL,
  `cpfUsuario` char(14) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `cepUsuario` char(11) DEFAULT NULL,
  `estadoUsuario` varchar(50) DEFAULT NULL,
  `cidadeUsuario` varchar(75) DEFAULT NULL,
  `bairroUsuario` varchar(75) DEFAULT NULL,
  `logradouroUsuario` varchar(75) DEFAULT NULL,
  `numeroUsuario` varchar(5) DEFAULT NULL
) CHARACTER SET utf8 COLLATE utf8_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
