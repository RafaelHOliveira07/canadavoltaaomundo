-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2023 às 20:14
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
-- Banco de dados: `canada`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagems`
--

CREATE TABLE `tb_mensagems` (
  `id_mensagem` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_mensagems`
--

INSERT INTO `tb_mensagems` (`id_mensagem`, `nome`, `email`, `assunto`, `mensagem`, `status`) VALUES
(9, 'rafael', 'rafaelhenriquetrooll@gmail.com', 'prova 2 ', 'Junior me da uma nota 10 neste projeto?', ''),
(10, 'etevaldo', 'adria.cruz@gmail.com', 'quaiquwew', 'alooooooooooooooooooooooooo', 'respondido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_respostas`
--

CREATE TABLE `tb_respostas` (
  `id_resposta` int(11) NOT NULL,
  `resposta` text DEFAULT NULL,
  `id_mensagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_respostas`
--

INSERT INTO `tb_respostas` (`id_resposta`, `resposta`, `id_mensagem`) VALUES
(20, 'Claro seu trabalho esta perfetio!', 9),
(22, 'olaaaaaaaaaaaaaaaaaaa', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(2) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`) VALUES
(29, 'admin', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_mensagems`
--
ALTER TABLE `tb_mensagems`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Índices para tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD PRIMARY KEY (`id_resposta`),
  ADD KEY `id_mensagem` (`id_mensagem`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_mensagems`
--
ALTER TABLE `tb_mensagems`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_respostas`
--
ALTER TABLE `tb_respostas`
  ADD CONSTRAINT `tb_respostas_ibfk_1` FOREIGN KEY (`id_mensagem`) REFERENCES `tb_mensagems` (`id_mensagem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
