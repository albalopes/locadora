-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Set-2018 às 20:52
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE `ator` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ator`
--

INSERT INTO `ator` (`id`, `nome`, `sobrenome`) VALUES
(1, 'Leonardo', 'DiCaprio'),
(2, 'Chris', 'Evans'),
(3, 'Robert', 'Downey JR'),
(4, 'Silvester', 'Stallone'),
(5, 'Leonardo', 'Dicaprio'),
(6, 'Scarlet', 'Johassen'),
(7, 'Mary', 'Streep'),
(8, 'Chris', 'Hemswort');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `anodelancamento` int(11) NOT NULL,
  `duracao` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `capa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id`, `titulo`, `descricao`, `anodelancamento`, `duracao`, `categoria`, `capa`) VALUES
(1, 'O Discurso do Rei', 'o filme conta a história do rei Jorge VI, que contrata Lionel Logue, um fonoaudiólogo, para lhe ajudar a superar a gagueira. Os dois homens tornam-se amigos enquanto trabalham juntos e, depois que seu irmão abdica, o rei confia em Logue para ajudá-lo a fazer um importante discurso no rádio no começo da Segunda Guerra Mundial.', 2010, 120, 'drama', 'assets/media/filme/odiscursodorei.jpg'),
(2, 'A Lista de Schindler', 'O filme começa em 1939 com os alemães iniciando a relocação dos judeus poloneses para o Gueto de Cracóvia, pouco tempo depois do início da Segunda Guerra Mundial. Enquanto isso, Oskar Schindler, um empresário alemão de Morávia, chega na cidade com a esperança de fazer uma fortuna lucrando com a guerra. Schindler, um membro do Partido Nazista, prodigaliza subornos para oficiais da Wehrmacht e da SS em troca de contratos', 1993, 195, 'documentario', 'assets/media/filme/alistadeschindler.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gerente` tinyint(4) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `email`, `gerente`, `foto`) VALUES
(3, 'Julia Cavalcante Soares', 'julia', 'senhajulia', 'juliacavalcante@email.com', 0, 'assets/media/usuario/juliacavalcante.png'),
(4, 'Janaina Carla da Silva Freitas', 'janaina', 'senhajanaina', 'janainafreitas@email.com', 1, 'assets/media/usuario/janainafreitas.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ator`
--
ALTER TABLE `ator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ator`
--
ALTER TABLE `ator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
