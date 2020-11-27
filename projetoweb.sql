-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2020 às 21:11
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitor`
--

CREATE TABLE `monitor` (
  `nome` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `termo` int(10) NOT NULL,
  `materia` varchar(200) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `sala` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `monitor`
--

INSERT INTO `monitor` (`nome`, `curso`, `termo`, `materia`, `telefone`, `data`, `hora`, `sala`, `id`) VALUES
('Bruno Carvalho', 'ADMINISTRAÇÃO', 5, 'Logica e Programação ', '14997526714', '2020-10-30', '11:37', 'https://meet.google.com/pjs-jtnp-hwh', 17),
('Eduardo Vianna', 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS', 5, 'Banco de Dados', '14997889988', '2020-10-30', '14:06', 'https://meet.google.com/pjs-jtnp-hwh', 18),
('Bruno Carvalho', 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS', 5, 'Logica e Programação ', '14997526714', '2020-10-30', '14:30', 'Videoconferencia', 19),
('João Bento', 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS', 5, 'Logica e Programação ', '14997889988', '2020-10-30', '14:40', 'Videoconferencia', 20),
('Chico Bento ', 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS', 1, 'Java', '149984445555', '2020-11-05', '18:52', 'Videoconferencia', 21),
('Chico Bento ', 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS', 4, 'Java', '11997856666', '2020-11-05', '19:25', 'Videoconferencia', 22),
('teste', 'ADMINISTRAÇÃO', 10, 'teste', '14991955390', '2020-11-26', '14:48', 'Videoconferencia', 23),
('123456', 'AGRONOMIA', 2, 'czczcxzxczc', '145555555555', '1997-08-07', '15:45', 'Videoconferencia', 24),
('sfasfsd', 'ADMINISTRAÇÃO', 1, 'sdfsafasfd', '1231231', '1997-08-07', '15:23', 'Videoconferencia', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usur` int(11) NOT NULL,
  `nomeuser` varchar(200) NOT NULL,
  `rauser` int(6) NOT NULL,
  `senhauser` varchar(50) NOT NULL,
  `niveluser` int(2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `curso_usu` varchar(45) DEFAULT NULL,
  `materia_user` varchar(45) DEFAULT NULL,
  `telefone_user` varchar(45) DEFAULT NULL,
  `sala_user` varchar(80) DEFAULT NULL,
  `termo_user` varchar(45) DEFAULT NULL,
  `data_moni` date DEFAULT NULL,
  `hora_moni` time DEFAULT NULL,
  `status_moni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usur`, `nomeuser`, `rauser`, `senhauser`, `niveluser`, `status`, `curso_usu`, `materia_user`, `telefone_user`, `sala_user`, `termo_user`, `data_moni`, `hora_moni`, `status_moni`) VALUES
(3, 'Bruno ', 56296, '601f1889667efaebb33b8c12572835da3f027f78', 0, 'Inativo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Alan', 252525, '601f1889667efaebb33b8c12572835da3f027f78', 0, 'Inativo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Guilherme Cruz', 55810, '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Inativo', 'ADMINISTRAÇÃO', 'PROGRAMAÇÃO', '14356955', 'Videoconferencia', '1', '2020-12-12', '16:45:00', 1),
(6, 'TESTE1', 123456, '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, 'Inativo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'GUILHERME FELIPE RAMOS CRUZ', 55810, '8a38231f964a73d71277eef0893f9fcb3700b8b5', 0, 'Inativo', 'ADMINISTRAÇÃO', 'PROGRAMAÇÃO', '14356955', 'Videoconferencia', '1', '2020-12-12', '16:45:00', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usur`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
