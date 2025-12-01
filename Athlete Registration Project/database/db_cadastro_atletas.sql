-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2025 às 12:22
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cadastro_atletas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atletas`
--

CREATE TABLE `atletas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data_nasc` date NOT NULL,
  `morada` varchar(45) NOT NULL,
  `nivel_equipa` enum('cadete','junior','senior') DEFAULT NULL,
  `id_clube` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `atletas`
--

INSERT INTO `atletas` (`id`, `nome`, `data_nasc`, `morada`, `nivel_equipa`, `id_clube`) VALUES
(1, 'Timmy', '2012-12-12', 'Benfica', 'cadete', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clubes`
--

CREATE TABLE `clubes` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `contador_de_vagas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clubes`
--

INSERT INTO `clubes` (`id`, `nome`, `municipio`, `contador_de_vagas`) VALUES
(1, 'LOS', 'Luanda', 25),
(2, 'CZG', 'Cazenga', 25),
(3, 'CAK', 'Cacuaco', 25),
(4, 'KLB', 'Kilamba', 25),
(5, 'BEN', 'Benfica', 24),
(6, 'MAI', 'Maianga', 25),
(7, 'CAM', 'Camama', 25),
(8, 'VIA', 'Viana', 25),
(9, 'NOV', 'Nova Vida', 25),
(10, 'MUT', 'Mutamba', 25);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atletas`
--
ALTER TABLE `atletas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_clube` (`id_clube`);

--
-- Índices para tabela `clubes`
--
ALTER TABLE `clubes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atletas`
--
ALTER TABLE `atletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `clubes`
--
ALTER TABLE `clubes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atletas`
--
ALTER TABLE `atletas`
  ADD CONSTRAINT `atletas_ibfk_1` FOREIGN KEY (`id_clube`) REFERENCES `clubes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
