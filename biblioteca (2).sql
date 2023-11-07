-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2022 às 13:19
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nomeAutor` varchar(150) NOT NULL,
  `ObraPublicada` varchar(150) NOT NULL,
  `dataPublicacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empretimo`
--

CREATE TABLE `empretimo` (
  `id_empretimo` int(11) NOT NULL,
  `nomeEmpretimo` varchar(150) NOT NULL,
  `tituloLivro` varchar(150) NOT NULL,
  `nomeAutorLivro` varchar(150) NOT NULL,
  `dataDoEmpretimo` date NOT NULL,
  `dataEntrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(90) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `volume` varchar(5) NOT NULL,
  `ficheiroPDF` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `editora`, `data`, `volume`, `ficheiroPDF`) VALUES
(1, '', 'Gabriel', 'Porto Editora', '2022-06-21', 'II', '../assets/upload/62b10256bfab2.pdf'),
(2, 'Mundo informatico', 'Milton', 'Porto Editora', '2022-06-21', 'III', '../assets/upload/62b21c691369a.pdf'),
(3, 'TECNOLOGIA DE INFORMAÇÃO', 'Nerio Renato Daniel', 'Porto Editora', '2022-06-22', 'III', '../assets/upload/62b250ca214b2.pdf'),
(4, 'Angola', 'Golmide', 'Porto Editora', '2022-06-22', 'Unica', '../assets/upload/62b3137f8ac0d.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `email` varchar(70) NOT NULL,
  `status` int(5) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `Genero`, `email`, `status`, `senha`, `cidade`) VALUES
(1, 'Vasco Gabriel', 'Professor', 'vascogabriel19@hotmail.com.br', 1, '', NULL),
(2, 'Joao', 'Aluno', 'vascogabriel19@hotmail.com.br', 2, '1345678', NULL),
(3, '', '', '', 0, '', NULL),
(4, 'Tereza Gabriel', '', 'vascogabriel19@hotmail.com.br', 1, '098765431', NULL),
(5, 'Nerio Manuel', 'Masculino', 'vascogabriel19@hotmail.com.br', 4, '5438906541', 'Zango'),
(6, 'Mauro', 'Masculino', 'vascogabriel19@hotmail.com.br', 3, 'kd-,mnd-kffghg', 'Rangel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices para tabela `empretimo`
--
ALTER TABLE `empretimo`
  ADD PRIMARY KEY (`id_empretimo`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empretimo`
--
ALTER TABLE `empretimo`
  MODIFY `id_empretimo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
