-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jun-2022 às 09:39
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodevjr`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idCliente` bigint(20) UNSIGNED NOT NULL,
  `idPlano` bigint(20) UNSIGNED NOT NULL,
  `fidelidadeInicio` date NOT NULL,
  `fidelidadeFim` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `idCliente`, `idPlano`, `fidelidadeInicio`, `fidelidadeFim`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '2022-06-07', NULL, '2022-06-05 14:56:41', '2022-06-05 14:56:41'),
(8, 3, 2, '2022-06-21', NULL, '2022-06-06 13:19:30', '2022-06-06 13:19:30'),
(15, 2, 3, '2022-06-15', '2023-06-15', '2022-06-07 09:19:07', '2022-06-07 09:19:07'),
(16, 3, 1, '2022-06-07', '2023-06-07', '2022-06-07 09:39:08', '2022-06-07 09:39:08'),
(17, 3, 2, '2022-08-10', '2023-08-10', '2022-06-07 09:53:10', '2022-06-07 09:53:10'),
(18, 1, 2, '2022-11-07', '2023-11-07', '2022-06-07 09:53:55', '2022-06-07 09:53:55');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cadastros_idcliente_foreign` (`idCliente`),
  ADD KEY `cadastros_idplano_foreign` (`idPlano`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD CONSTRAINT `cadastros_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `cadastros_idplano_foreign` FOREIGN KEY (`idPlano`) REFERENCES `planos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
