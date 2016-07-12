-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2016 at 06:47 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('erica.lety@hotmail.com', '6c41bc2f48232a722b37d3bdba0565caf1b611c9640375c7fb2594ce21f6412f', '2016-03-24 07:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `sintegra`
--

CREATE TABLE IF NOT EXISTS `sintegra` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `resultado_json` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sintegra`
--

INSERT INTO `sintegra` (`id`, `idusuario`, `cnpj`, `resultado_json`, `created_at`) VALUES
(1, 1, '31.804.115-0002-43', '{"CNPJ":"31.804.115\\/0002-43","inscricao":"082.254.28-1","razao_social":"CEREAIS DO NICO LTDA","endereco":"RUA IPE","numero":"10","complemento":"","bairro":"MOVELAR","municipio":"LINHARES","uf":"ES","cep":"29906-120","telefone":"        ","atividade":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","inicio_atividade":"26\\/03\\/2004","situacao_cadastral_vigente":"HABILITADO","data_desta_situacao":"26\\/03\\/2004","regime_de_apuracao":"ORDINARIO","emitente_de_nfe_desde":"31\\/08\\/2009","obrigada_a_nfe_em":"01\\/09\\/2009"}', '2016-07-12 06:23:27'),
(2, 1, '31.804.115-0002-43', '{"CNPJ":"31.804.115\\/0002-43","inscricao":"082.254.28-1","razao_social":"CEREAIS DO NICO LTDA","endereco":"RUA IPE","numero":"10","complemento":"","bairro":"MOVELAR","municipio":"LINHARES","uf":"ES","cep":"29906-120","telefone":"        ","atividade":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","inicio_atividade":"26\\/03\\/2004","situacao_cadastral_vigente":"HABILITADO","data_desta_situacao":"26\\/03\\/2004","regime_de_apuracao":"ORDINARIO","emitente_de_nfe_desde":"31\\/08\\/2009","obrigada_a_nfe_em":"01\\/09\\/2009"}', '2016-07-12 06:38:31'),
(3, 1, '31.804.115-0002-43', '{"CNPJ":"31.804.115\\/0002-43","inscricao":"082.254.28-1","razao_social":"CEREAIS DO NICO LTDA","endereco":"RUA IPE","numero":"10","complemento":"","bairro":"MOVELAR","municipio":"LINHARES","uf":"ES","cep":"29906-120","telefone":"        ","atividade":"COMERCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADAS","inicio_atividade":"26\\/03\\/2004","situacao_cadastral_vigente":"HABILITADO","data_desta_situacao":"26\\/03\\/2004","regime_de_apuracao":"ORDINARIO","emitente_de_nfe_desde":"31\\/08\\/2009","obrigada_a_nfe_em":"01\\/09\\/2009"}', '2016-07-12 06:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'José Claudio', 'jclaudio.castro@hotmail.com', '$2y$10$O0NtGwn7cqRHCY3kXEBHSu6AHiAWPjPbt.TFtQ6THdj2ACQBYsYAy', 'T9JLiYDPvZfFh2Xo0RqSOQdzNVcDX1Ck31ir5cqzRXtsoKhhp2QafFlRuY29', '2016-03-24 07:25:33', '2016-04-06 09:25:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `sintegra`
--
ALTER TABLE `sintegra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sintegra`
--
ALTER TABLE `sintegra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
