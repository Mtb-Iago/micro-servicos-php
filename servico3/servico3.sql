-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 11-Maio-2022 às 03:46
-- Versão do servidor: 8.0.28
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `servico3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos_loterias`
--

CREATE TABLE `jogos_loterias` (
  `id` int NOT NULL,
  `loteria` enum('lotofacil','mega-sena','quina','lotomania','timemania','dupla-sena','loteria-federal','dia-de-sorte','super-sete') DEFAULT NULL,
  `campo1` varchar(20) DEFAULT NULL,
  `campo2` varchar(20) DEFAULT NULL,
  `campo3` varchar(20) DEFAULT NULL,
  `campo4` varchar(20) DEFAULT NULL,
  `campo5` varchar(20) DEFAULT NULL,
  `campo6` varchar(20) DEFAULT NULL,
  `campo7` varchar(20) DEFAULT NULL,
  `campo8` varchar(20) DEFAULT NULL,
  `campo9` varchar(20) DEFAULT NULL,
  `campo10` varchar(20) DEFAULT NULL,
  `campo11` varchar(20) DEFAULT NULL,
  `campo12` varchar(20) DEFAULT NULL,
  `campo13` varchar(20) DEFAULT NULL,
  `campo14` varchar(20) DEFAULT NULL,
  `campo15` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogos_loterias`
--
ALTER TABLE `jogos_loterias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos_loterias`
--
ALTER TABLE `jogos_loterias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
