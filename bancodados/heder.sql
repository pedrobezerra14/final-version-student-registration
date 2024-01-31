-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/10/2023 às 15:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `heder`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadalunos`
--

CREATE TABLE `cadalunos` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(250) NOT NULL,
  `ENDERECO` varchar(250) NOT NULL,
  `BAIRRO` varchar(100) NOT NULL,
  `CIDADE` varchar(100) NOT NULL,
  `ESTADO` char(2) NOT NULL,
  `SEXO` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadalunos`
--

INSERT INTO `cadalunos` (`ID`, `NOME`, `ENDERECO`, `BAIRRO`, `CIDADE`, `ESTADO`, `SEXO`) VALUES
(1, 'kljnn', 'jjoul', 'jnjkol', 'joao pessopa', 'RJ', 'M');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadusuario`
--

CREATE TABLE `cadusuario` (
  `ID` int(11) NOT NULL,
  `LOGINN` varchar(250) NOT NULL,
  `SENHA` varchar(250) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `CSENHA` varchar(250) NOT NULL,
  `EMAIL` varchar(250) NOT NULL,
  `STATUSS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadusuario`
--

INSERT INTO `cadusuario` (`ID`, `LOGINN`, `SENHA`, `CPF`, `CSENHA`, `EMAIL`, `STATUSS`) VALUES
(11, 'Clodoaldo', '8fa320c67dfe645e9bc862d5852c2e334e80f7092a107b85a8cf13475086dd1b9c46a9c5cba679279e5678983bfcfea72daa0fe8243655fd3ee796c05192cfcf', '15416220490', '8fa320c67dfe645e9bc862d5852c2e334e80f7092a107b85a8cf13475086dd1b9c46a9c5cba679279e5678983bfcfea72daa0fe8243655fd3ee796c05192cfcf', '12oasjdosj@gmail.com', 'ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadalunos`
--
ALTER TABLE `cadalunos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `cadusuario`
--
ALTER TABLE `cadusuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadalunos`
--
ALTER TABLE `cadalunos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadusuario`
--
ALTER TABLE `cadusuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
