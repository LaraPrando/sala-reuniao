-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2023 às 12:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_reuniao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crud_reuniao`
--

CREATE TABLE `crud_reuniao` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `crud_reuniao`
--

INSERT INTO `crud_reuniao` (`id`, `nome`, `email`, `telefone`, `empresa`, `data`, `hora`) VALUES
(10, 'Veronica', 'veronica@gmail.com', '(46)9987665', 'Veroniquete', '2023-06-30', '16:30:00'),
(13, 'Karina', 'kaka@gmail.com', '11111111111', 'JUnior', '2023-04-13', '03:53:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crud_reuniao`
--
ALTER TABLE `crud_reuniao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crud_reuniao`
--
ALTER TABLE `crud_reuniao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
