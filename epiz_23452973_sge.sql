-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jun-2019 às 04:42
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_23452973_sge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria_evento`
--

CREATE TABLE `tb_categoria_evento` (
  `cat_eve_id` int(11) NOT NULL,
  `cat_eve_nome` varchar(255) NOT NULL,
  `cat_eve_descricao` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco_evento`
--

CREATE TABLE `tb_endereco_evento` (
  `end_eve_id` int(11) NOT NULL,
  `end_eve_pais` varchar(255) NOT NULL,
  `end_eve_local` varchar(255) NOT NULL,
  `end_eve_cep` varchar(255) NOT NULL,
  `end_eve_estado` varchar(255) NOT NULL,
  `end_eve_cidade` varchar(25) NOT NULL,
  `end_eve_bairro` varchar(255) NOT NULL,
  `end_eve_endereco` varchar(255) NOT NULL,
  `end_eve_num` int(5) NOT NULL,
  `end_eve_coordenada` text NOT NULL,
  `end_evento_id_fk` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

CREATE TABLE `tb_evento` (
  `eve_id` int(11) NOT NULL,
  `eve_nome` varchar(255) NOT NULL,
  `eve_imagem` varchar(255) NOT NULL,
  `eve_subtitulo` varchar(255) NOT NULL,
  `eve_descricao` varchar(255) NOT NULL,
  `eve_categoria_fk` int(11) NOT NULL,
  `eve_email` varchar(255) NOT NULL,
  `eve_datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eve_data_inicio` date NOT NULL,
  `eve_hora_inicio` time NOT NULL,
  `eve_data_fim` date NOT NULL,
  `eve_hora_fim` time NOT NULL,
  `eve_responsavel_fk` int(11) NOT NULL,
  `eve_aberto` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_evento`
--

INSERT INTO `tb_evento` (`eve_id`, `eve_nome`, `eve_imagem`, `eve_subtitulo`, `eve_descricao`, `eve_categoria_fk`, `eve_email`, `eve_datacadastro`, `eve_data_inicio`, `eve_hora_inicio`, `eve_data_fim`, `eve_hora_fim`, `eve_responsavel_fk`, `eve_aberto`) VALUES
(1, 'Evento1', '', '', '', 0, '', '2019-06-27 02:34:52', '2019-06-28', '00:00:00', '2019-06-28', '00:00:00', 0, 0),
(5, 'Evento Alterado', '', '', 'Descrição Alterada', 0, '', '2019-04-19 15:00:19', '2019-04-20', '00:00:00', '2019-04-21', '00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscricao`
--

CREATE TABLE `tb_inscricao` (
  `ins_id` int(11) NOT NULL,
  `ins_qtd_limite` int(11) NOT NULL,
  `ins_data_inicio` date NOT NULL,
  `ins_hora_inicio` time NOT NULL,
  `ins_data_fim` date NOT NULL,
  `ins_hora_fim` time NOT NULL,
  `ins_aberto` int(11) NOT NULL,
  `ins_eve_fk` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscrito_evento`
--

CREATE TABLE `tb_inscrito_evento` (
  `ins_eve_id` int(11) NOT NULL,
  `ins_eve_usuario_fk` int(11) NOT NULL,
  `ins_eve_evento_fk` int(11) NOT NULL,
  `ins_eve_credencial` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_inscrito_programacao`
--

CREATE TABLE `tb_inscrito_programacao` (
  `ins_prog_id` int(11) NOT NULL,
  `ins_prog_usu_fk` int(11) NOT NULL,
  `ins_prog_progr_fk` int(11) NOT NULL,
  `ins_prog_even_fk` int(11) NOT NULL,
  `ins_prog_datahora` int(11) NOT NULL,
  `ins_prog_compareceu` int(11) NOT NULL,
  `ins_prog_certificado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_minicursos`
--

CREATE TABLE `tb_minicursos` (
  `min_id` int(11) NOT NULL,
  `min_titulo` varchar(255) NOT NULL,
  `min_subtitulo` varchar(255) NOT NULL,
  `min_descricao` text NOT NULL,
  `min_categoria` int(11) NOT NULL,
  `min_duracao` varchar(255) NOT NULL,
  `min_data_inicio` date NOT NULL,
  `min_hora_inicio` time NOT NULL,
  `min_data_fim` date NOT NULL,
  `min_hora_fim` time NOT NULL,
  `min_responsavel_id` int(11) NOT NULL,
  `min_eve_fk` int(11) NOT NULL,
  `min_vagas` int(11) NOT NULL,
  `min_aberto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ministrante`
--

CREATE TABLE `tb_ministrante` (
  `mini_id` int(11) NOT NULL,
  `mini_nome` text NOT NULL,
  `mini_email` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_min_categorias`
--

CREATE TABLE `tb_min_categorias` (
  `min_cat_id` int(11) NOT NULL,
  `min_cat_nome` varchar(255) NOT NULL,
  `min_cat_descricao` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_min_oficina`
--

CREATE TABLE `tb_min_oficina` (
  `min_ofi_id` int(11) NOT NULL,
  `min_ofi_nome` text NOT NULL,
  `min_ofi_email` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_oficinas`
--

CREATE TABLE `tb_oficinas` (
  `ofi_id` int(11) NOT NULL,
  `ofi_titulo` varchar(255) NOT NULL,
  `ofi_subtitulo` varchar(255) NOT NULL,
  `ofi_descricao` text NOT NULL,
  `ofi_categoria` int(11) NOT NULL,
  `ofi_duracao` varchar(255) NOT NULL,
  `ofi_data_inicio` date NOT NULL,
  `ofi_hora_inicio` time NOT NULL,
  `ofi_data_fim` date NOT NULL,
  `ofi_hora_fim` time NOT NULL,
  `ofi_responsavel_id` int(11) NOT NULL,
  `ofi_eve_fk` int(11) NOT NULL,
  `ofi_vagas` int(11) NOT NULL,
  `ofi_aberto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_organizacao_usuario`
--

CREATE TABLE `tb_organizacao_usuario` (
  `org_usu_id` int(11) NOT NULL,
  `org_usu_nome` varchar(255) NOT NULL,
  `org_usu_email` varchar(255) NOT NULL,
  `org_usu_senha` varchar(255) NOT NULL,
  `org_usu_datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `org_usu_confirmacao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_org_evento`
--

CREATE TABLE `tb_org_evento` (
  `org_eve_id` int(11) NOT NULL,
  `org_eve_usu_fk` int(11) NOT NULL,
  `org_eve_privilegio` int(11) NOT NULL,
  `org_evento_fk` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_palestrante`
--

CREATE TABLE `tb_palestrante` (
  `pale_id` int(11) NOT NULL,
  `pale_nome` text NOT NULL,
  `pale_email` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_palestras`
--

CREATE TABLE `tb_palestras` (
  `pal_id` int(11) NOT NULL,
  `pal_titulo` varchar(255) NOT NULL,
  `pal_subtitulo` varchar(255) NOT NULL,
  `pal_descricao` text NOT NULL,
  `pal_categoria` int(11) NOT NULL,
  `pal_duracao` varchar(255) NOT NULL,
  `pal_data_inicio` date NOT NULL,
  `pal_hora_inicio` time NOT NULL,
  `pal_data_fim` date NOT NULL,
  `pal_hora_fim` time NOT NULL,
  `pal_responsavel_id` int(11) NOT NULL,
  `pal_eve_fk` int(11) NOT NULL,
  `pal_vagas` int(11) NOT NULL,
  `pal_aberto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pal_categorias`
--

CREATE TABLE `tb_pal_categorias` (
  `min_pal_id` int(11) NOT NULL,
  `min_pal_nome` varchar(255) NOT NULL,
  `min_pal_descricao` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nome` varchar(255) NOT NULL,
  `usu_email` varchar(200) NOT NULL,
  `usu_senha` varchar(255) NOT NULL,
  `usu_data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_privilegio` int(11) NOT NULL,
  `usu_confirmacao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usu_id`, `usu_nome`, `usu_email`, `usu_senha`, `usu_data_cadastro`, `usu_privilegio`, `usu_confirmacao`) VALUES
(1, 'nn', 'lkjklj', 'nlkjlk', '2019-03-13 20:02:51', 9, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_categoria_evento`
--
ALTER TABLE `tb_categoria_evento`
  ADD PRIMARY KEY (`cat_eve_id`);

--
-- Indexes for table `tb_endereco_evento`
--
ALTER TABLE `tb_endereco_evento`
  ADD PRIMARY KEY (`end_eve_id`);

--
-- Indexes for table `tb_evento`
--
ALTER TABLE `tb_evento`
  ADD PRIMARY KEY (`eve_id`);

--
-- Indexes for table `tb_inscrito_evento`
--
ALTER TABLE `tb_inscrito_evento`
  ADD PRIMARY KEY (`ins_eve_id`);

--
-- Indexes for table `tb_inscrito_programacao`
--
ALTER TABLE `tb_inscrito_programacao`
  ADD PRIMARY KEY (`ins_prog_id`);

--
-- Indexes for table `tb_min_categorias`
--
ALTER TABLE `tb_min_categorias`
  ADD PRIMARY KEY (`min_cat_id`);

--
-- Indexes for table `tb_organizacao_usuario`
--
ALTER TABLE `tb_organizacao_usuario`
  ADD PRIMARY KEY (`org_usu_id`);

--
-- Indexes for table `tb_org_evento`
--
ALTER TABLE `tb_org_evento`
  ADD PRIMARY KEY (`org_eve_id`);

--
-- Indexes for table `tb_pal_categorias`
--
ALTER TABLE `tb_pal_categorias`
  ADD PRIMARY KEY (`min_pal_id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_categoria_evento`
--
ALTER TABLE `tb_categoria_evento`
  MODIFY `cat_eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_endereco_evento`
--
ALTER TABLE `tb_endereco_evento`
  MODIFY `end_eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_evento`
--
ALTER TABLE `tb_evento`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_inscrito_evento`
--
ALTER TABLE `tb_inscrito_evento`
  MODIFY `ins_eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_inscrito_programacao`
--
ALTER TABLE `tb_inscrito_programacao`
  MODIFY `ins_prog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_min_categorias`
--
ALTER TABLE `tb_min_categorias`
  MODIFY `min_cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_organizacao_usuario`
--
ALTER TABLE `tb_organizacao_usuario`
  MODIFY `org_usu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_org_evento`
--
ALTER TABLE `tb_org_evento`
  MODIFY `org_eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pal_categorias`
--
ALTER TABLE `tb_pal_categorias`
  MODIFY `min_pal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
