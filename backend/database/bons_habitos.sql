-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jul-2020 às 22:00
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `habitos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bons_habitos`
--

CREATE TABLE `bons_habitos` (
  `idHabito` int(11) NOT NULL,
  `naoFumar` tinyint(4) NOT NULL,
  `naoBeber` tinyint(4) NOT NULL,
  `acordarCedo` tinyint(4) NOT NULL,
  `musculacao` tinyint(4) NOT NULL,
  `ler` tinyint(4) NOT NULL,
  `estudar` tinyint(4) NOT NULL,
  `correr` tinyint(4) NOT NULL,
  `beberAgua` tinyint(4) NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bons_habitos`
--
ALTER TABLE `bons_habitos`
  ADD PRIMARY KEY (`idHabito`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bons_habitos`
--
ALTER TABLE `bons_habitos`
  MODIFY `idHabito` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
