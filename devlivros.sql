-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 05:02
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `devlivros`
--
CREATE DATABASE IF NOT EXISTS `devlivros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `devlivros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

DROP TABLE IF EXISTS `emprestimos`;
CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `nomeLivro` varchar(100) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  `telefoneDestinatario` varchar(13) NOT NULL,
  `dataDevolucao` date NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `datadevolvido` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `nomeLivro`, `destinatario`, `telefoneDestinatario`, `dataDevolucao`, `idusuario`, `status`, `datadevolvido`) VALUES
(28, 'História do Brasil', 'Joao Pedro', '41944445555', '2022-12-16', 12, 'Devolvido', '2022-11-27'),
(33, 'História Medieval', 'Joao Silva', '419666555', '2020-12-10', 13, 'Devolvido', '2022-11-28'),
(34, 'História do Comercio', 'Ricardo Camargo', '4198884444', '2022-12-15', 1, 'Devolvido', '2022-11-28'),
(35, 'Design de interiores', 'Izabel de Freitas', '4196663333', '2022-12-02', 1, 'Emprestado', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `email`, `senha`) VALUES
(1, 'JOAO PEDRO OTTO LESKO', '4199998888', 'joaolesko@hotmail.com', '1234'),
(12, 'Karina Gonçalves', '41966663333', 'karina@hotmail.com', '1234'),
(14, 'Joao Pedro', '4198885555', 'joaolesko@gmail.com', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
