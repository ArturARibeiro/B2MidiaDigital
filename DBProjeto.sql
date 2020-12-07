-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Dez-2020 às 21:55
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_b2midiadigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `neighborhood` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `UF` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `address`
--

INSERT INTO `address` (`id`, `sale_id`, `provider_id`, `street`, `neighborhood`, `city`, `number`, `UF`, `CEP`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Rua Quadro Branco', 'Jd. Escola', 'São José ', '201', 'SP', '03123-192', '2020-12-07 21:52:45', '2020-12-07 21:52:45'),
(2, 0, 2, 'Rua Quadro Branco', 'Jd. Escola', 'São José ', '201', 'SP', '03123-192', '2020-12-07 21:52:45', '2020-12-07 21:52:45'),
(3, 0, 3, 'Rua Quadro Branco', 'Jd. Escola', 'São José ', '201', 'SP', '03123-192', '2020-12-07 21:52:45', '2020-12-07 21:52:45'),
(4, 0, 4, 'Rua Quadro Branco', 'Jd. Escola', 'São José ', '201', 'SP', '03123-192', '2020-12-07 21:52:45', '2020-12-07 21:52:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(53, '2020_12_05_174834_create_product_table', 1),
(54, '2020_12_05_175018_create_provider_table', 1),
(55, '2020_12_05_175111_create_sales_table', 1),
(56, '2020_12_05_183354_create_address_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `provider`, `created_at`, `updated_at`) VALUES
(1, 'Produto A', 'produto-a', '200,00', '1', '2020-12-07 21:54:06', '2020-12-07 21:54:06'),
(2, 'Produto B', 'produto-b', '40,00', '2', '2020-12-07 21:54:06', '2020-12-07 21:54:06'),
(3, 'Produto C', 'produto-c', '10,00', '3', '2020-12-07 21:54:06', '2020-12-07 21:54:06'),
(4, 'Produto D', 'produto-d', '100,00', '4', '2020-12-07 21:54:06', '2020-12-07 21:54:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `provider`
--

DROP TABLE IF EXISTS `provider`;
CREATE TABLE IF NOT EXISTS `provider` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `provider`
--

INSERT INTO `provider` (`id`, `name`, `fone`, `emailAddress`, `created_at`, `updated_at`) VALUES
(1, 'Fornecedor A', '(11) 00000-0000', 'FornecedorA@email.com', '2020-12-07 21:51:44', '2020-12-07 21:51:44'),
(2, 'Fornecedor B', '(11) 00000-0000', 'FornecedorB@email.com', '2020-12-07 21:51:44', '2020-12-07 21:51:44'),
(3, 'Fornecedor C', '(11) 00000-0000', 'FornecedorC@email.com', '2020-12-07 21:51:44', '2020-12-07 21:51:44'),
(4, 'Fornecedor D', '(11) 00000-0000', 'FornecedorD@email.com', '2020-12-07 21:51:44', '2020-12-07 21:51:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
