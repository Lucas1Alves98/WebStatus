-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2020 às 22:48
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webstatus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cpf` int(20) NOT NULL,
  `nascimento` int(11) NOT NULL,
  `sexo` text NOT NULL,
  `endereco` varchar(20) NOT NULL,
  `cep` int(20) NOT NULL,
  `telefone` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `comentarios` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `cpf`, `nascimento`, `sexo`, `endereco`, `cep`, `telefone`, `celular`, `email`, `senha`, `comentarios`) VALUES
(15, 'c', 123, 2103, 'Masculino', 'adsw', 34, 234, 123456, 'carloseduardozero0@g', '123', '                 pegou\r\n                '),
(16, 'Lucas Alves De Carvalho', 2147483647, 21122000, 'Masculino', 'xesquelededodereguej', 21122112, 123456789, 123456789, 'ainhaaaa@gmail.com', '123456789', '                     Comente aqui...\r\n  '),
(25, 'jamal', 742, 7417441, 'Masculino', '741741', 74, 7417417, 7417417, 'lucas2@gmail.com', '741741741', '                     7417417441\r\n       '),
(26, 'jose', 456789, 12211221, 'Masculino', 'wewqeqwewq', 55, 456854651, 564854984, 'we@ewe', '987654321', '                \r\n             pegou   \r'),
(27, 'Mike', 789456, 21, 'Masculino', 'fdsafsdfdsaf', 30, 123456, 0, 'lucas2@gmail.com', '121212', '        Testando 123        \r\n          '),
(28, 'jonatas', 456, 456123, 'Masculino', 'rua11demaio', 46, 456123, 456123, 'lucas2@gmail.com', '456123', '                \r\n               Testand');

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `email`, `senha`) VALUES
(1, 'webstatus@gmail.com', 40028922);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisos`
--

CREATE TABLE `avisos` (
  `id` int(11) NOT NULL,
  `comentarios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avisos`
--

INSERT INTO `avisos` (`id`, `comentarios`) VALUES
(3, '                     \r\n                \r\n                 teste 2 '),
(5, '                     \r\n                \r\n      Importante , prova dia ..... '),
(6, '                     \r\n                \r\n                  Testando 123'),
(7, '                     \r\n                \r\n                 ATENÇÃO AMANHA SERÁ O PFC, BOA SORTE '),
(8, '                     \r\n                \r\n       Testando 123           ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cpf` int(11) NOT NULL,
  `renach` varchar(20) NOT NULL,
  `comentarios` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `solicitacao`
--

INSERT INTO `solicitacao` (`id`, `nome`, `cpf`, `renach`, `comentarios`) VALUES
(6, 'Lucas Alves De Carvalho', 888888, '1000000000', '               Solicito o cancelamento da inscrição\r\n                \r\n                  '),
(7, 'jonatas', 456123, '123456', '                     \r\n                \r\n          Testando 123        '),
(8, 'Leandro Alves', 999999, '9999999999', '                     \r\n                \r\n         Solicito o Cancelamento de matrícula         ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE `teste` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `cpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`id`, `nome`, `cpf`) VALUES
(1, 'Xolinha', 888888),
(2, 'jamal', 888888),
(3, 'dsadasdsa', 1000),
(4, 'anderson', 777777);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
