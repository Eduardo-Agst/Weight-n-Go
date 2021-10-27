-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Out-2021 às 02:53
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weightngo`
--
CREATE DATABASE IF NOT EXISTS `weightngo` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `weightngo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(200) COLLATE utf8_bin NOT NULL,
  `login_usuario` varchar(45) COLLATE utf8_bin NOT NULL,
  `password_usuario` varchar(45) COLLATE utf8_bin NOT NULL,
  `email_usuario` varchar(200) COLLATE utf8_bin NOT NULL,
  `pergunta_usuario` varchar(200) COLLATE utf8_bin NOT NULL,
  `resposta_usuario` varchar(200) COLLATE utf8_bin NOT NULL,
  `acesso_id_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `login_usuario`, `password_usuario`, `email_usuario`, `pergunta_usuario`, `resposta_usuario`, `acesso_id_acesso`) VALUES
(1, 'Patrick Bassan', 'usuario', 'senha123', 'email@email.com', 'A resposta é 123', '123', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
