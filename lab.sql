-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2025 at 02:30 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `product_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Transformer', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(2, 2, 'Circuit Breaker', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(3, 3, 'Fuse', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(4, 4, 'Cable', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(5, 5, 'Switchgear', '2025-04-12 19:50:51', '2025-04-12 19:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `cpri`
--

DROP TABLE IF EXISTS `cpri`;
CREATE TABLE IF NOT EXISTS `cpri` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `status` enum('Approved','Rejected','Pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `approval_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cpri_product_id_foreign` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cpri`
--

INSERT INTO `cpri` (`id`, `product_id`, `status`, `remarks`, `approval_date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Rejected', 'CPRI remarks for product 1', '2023-12-20 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(2, 2, 'Rejected', 'CPRI remarks for product 2', '2023-10-27 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(3, 3, 'Rejected', 'CPRI remarks for product 3', '2023-05-02 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(4, 4, 'Approved', 'CPRI remarks for product 4', '2023-02-20 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52'),
(5, 5, 'Approved', 'CPRI remarks for product 5', '2023-04-24 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52'),
(6, 6, 'Approved', 'CPRI remarks for product 6', '2023-02-20 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52'),
(7, 7, 'Rejected', 'CPRI remarks for product 7', '2023-06-21 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52'),
(8, 8, 'Approved', 'CPRI remarks for product 8', '2023-05-23 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52'),
(9, 9, 'Rejected', 'CPRI remarks for product 9', '2023-08-01 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52'),
(10, 10, 'Pending', 'CPRI remarks for product 10', '2023-03-31 19:00:00', '2025-04-12 19:50:52', '2025-04-12 19:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_12_095957_create_products_table', 1),
(5, '2025_04_12_100009_create_categories_table', 1),
(6, '2025_04_12_100016_create_testers_table', 1),
(7, '2025_04_12_151239_create_cpris_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mfg_date` date DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `status` enum('Pending','Fail','Pass','Send to CPRI') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_product_id_unique` (`product_id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `mfg_date`, `image`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PROD000001', 'Power Sur', '2023-11-10', 'product/img1.jfif', 1, 'Pending', '2025-04-12 19:50:50', '2025-04-22 09:53:58'),
(2, 'PROD000002', 'Voltage Stabilizer', '2022-03-15', 'product/img2.jpg', 2, 'Pass', '2025-04-12 19:50:50', '2025-04-18 14:19:39'),
(3, 'PROD000003', 'Industrial Circuit Breaker', '2022-10-26', 'product/img3.jpg', 3, 'Fail', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(4, 'PROD000004', 'Smart Plug Controller', '2022-01-06', 'product/img4.jpg', 4, 'Pending', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(5, 'PROD000005', 'Digital Wattmeter', '2022-05-31', 'product/img5.jpg', 5, 'Send to CPRI', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(6, 'PROD000006', 'High Voltage Transformer', '2023-02-09', 'product/img6.jpg', 1, 'Pending', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(7, 'PROD000007', 'Electric Fuse Box', '2022-01-06', 'product/img7.jpg', 2, 'Pass', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(8, 'PROD000008', 'Thermal Overload Relay', '2023-03-17', 'product/img8.jpg', 3, 'Fail', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(9, 'PROD000009', 'Automatic Voltage Regulator', '2022-12-11', 'product/img1.jfif', 4, 'Pending', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(10, 'PROD000010', 'AC Motor Starter', '2023-05-03', 'product/img2.jpg', 5, 'Send to CPRI', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(11, 'PROD000011', 'Lightning Arrester', '2022-09-20', 'product/img3.jpg', 1, 'Pending', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(12, 'PROD000012', 'Electric Panel Board', '2023-09-01', 'product/img4.jpg', 2, 'Pass', '2025-04-12 19:50:50', '2025-04-12 19:50:50'),
(13, 'PROD000013', 'Energy Monitoring System', '2022-01-06', 'product/img5.jpg', 3, 'Fail', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(14, 'PROD000014', 'Control Relay Module', '2022-07-24', 'product/img6.jpg', 4, 'Pending', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(15, 'PROD000015', 'Smart Energy Meter', '2024-01-19', 'product/img7.jpg', 5, 'Send to CPRI', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(16, 'PROD000016', 'Electric Motor Drive', '2022-04-30', 'product/img8.jpg', 1, 'Pending', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(17, 'PROD000017', 'Solar Inverter System', '2024-03-07', 'product/img1.jfif', 2, 'Pass', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(18, 'PROD000018', 'Load Break Switch', '2024-03-04', 'product/img2.jpg', 3, 'Fail', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(19, 'PROD000019', 'Residual Current Circuit Breaker (RCCB)', '2023-10-11', 'product/img3.jpg', 4, 'Pending', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(20, 'PROD000020', 'Capacitor Bank Controller', '2022-06-09', 'product/img4.jpg', 5, 'Send to CPRI', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(21, 'PRO0000033', 'Voltage Stabilizer aaaa', '2025-04-03', 'product/urZ0DiKJmwE2RUiHING7CXowqZKPELEbh8GapY7Y.png', 1, 'Pending', '2025-04-19 06:26:35', '2025-04-19 06:26:35'),
(22, 'PRO0000035', 'Abusu', '2025-04-10', 'product/eEInNebFYmDawSCyFF4dfS49DbElmf5wHHaZCMwn.png', 2, 'Pending', '2025-04-19 07:08:30', '2025-04-19 07:08:30'),
(23, 'PRO0000036', 'Power Surge', '2025-04-02', 'product/zoG7vuzc9qG6pTUmH2h7RWRlG6GMDWsXOihJqlxx.png', 4, 'Pending', '2025-04-19 07:09:54', '2025-04-19 07:09:54'),
(25, 'PROD000024', 'Voltage Stabilizer aaaa', '2025-04-24', 'product/product/BiE6X6nFgwfI2H2j2bPfjMPPIX4gjWVXFTdVaJgu.png', 5, 'Pending', '2025-04-20 15:09:57', '2025-04-20 15:35:02'),
(26, 'PROD000025', 'Power Surge', '2025-04-19', 'product/wkABQbwDXI7GyoPPqsEsZKHHwcTZk44B8WqIB5jo.png', 4, 'Pending', '2025-04-20 15:13:44', '2025-04-22 09:54:30'),
(27, 'PROD000026', 'Voltage Stabilizer aaaa', '2025-04-04', 'product/ZHFlib6E6zENFsR7Ub6Kok7ykUv6UdntNqzipmCu.png', 2, 'Pending', '2025-04-20 15:23:59', '2025-04-20 15:29:18'),
(28, 'PROD000027', 'asdf', '2025-04-09', 'product/C:\\wamp64\\tmp\\php8E8F.tmp', 4, 'Pending', '2025-04-20 15:32:46', '2025-04-20 15:32:46'),
(29, 'PROD000028', 'Power Surge', '2025-04-11', 'product/product/ofOc2Un1tlqU6640U37wx6Wetp5M5ToXYeIgVIo2.png', 4, 'Pending', '2025-04-22 09:52:58', '2025-04-22 09:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HeZOBKqP3KZ3OaprUylio7VaW4oopGLYzYbAluP7', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHhuTTlhNzhCd1pjUzVEMW5zbVVRQUVwMEprWXRDeWE1MkRUUW9aOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1745416432);

-- --------------------------------------------------------

--
-- Table structure for table `testers`
--

DROP TABLE IF EXISTS `testers`;
CREATE TABLE IF NOT EXISTS `testers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `test_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tested_by` bigint UNSIGNED NOT NULL,
  `results` enum('Pass','Fail','Pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `tested_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `testers_test_id_unique` (`test_id`),
  KEY `testers_product_id_foreign` (`product_id`),
  KEY `testers_tested_by_foreign` (`tested_by`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testers`
--

INSERT INTO `testers` (`id`, `test_id`, `product_id`, `test_type`, `tested_by`, `results`, `remarks`, `tested_at`, `created_at`, `updated_at`) VALUES
(1, 'TEST000001', 1, 'Test Type 1', 4, 'Fail', 'Test remarks for product 1', '2023-10-20 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(2, 'TEST000002', 2, 'Test Type 2', 1, 'Fail', 'Test remarks for product 2', '2023-08-29 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(3, 'TEST000003', 3, 'Test Type 3', 4, 'Fail', 'Test remarks for product 3', '2023-07-31 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(4, 'TEST000004', 4, 'Test Type 4', 4, 'Fail', 'Test remarks for product 4', '2023-08-06 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(5, 'TEST000005', 5, 'Test Type 5', 1, 'Fail', 'Test remarks for product 5', '2023-08-14 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(6, 'TEST000006', 6, 'Test Type 6', 4, 'Pending', 'Test remarks for product 6', '2023-08-14 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(7, 'TEST000007', 7, 'Test Type 7', 2, 'Fail', 'Test remarks for product 7', '2023-03-21 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(8, 'TEST000008', 8, 'Test Type 8', 5, 'Pending', 'Test remarks for product 8', '2023-06-08 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(9, 'TEST000009', 9, 'Test Type 9', 3, 'Pending', 'Test remarks for product 9', '2023-03-06 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(10, 'TEST000010', 10, 'Test Type 10', 4, 'Pending', 'Test remarks for product 10', '2023-12-09 19:00:00', '2025-04-12 19:50:51', '2025-04-12 19:50:51'),
(11, 'TST00000001', 1, 'Electrical', 1, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(12, 'TST00000002', 2, 'Thermal', 2, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(13, 'TST00000003', 3, 'Voltage', 3, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(14, 'TST00000004', 4, 'Load', 4, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(15, 'TST00000005', 5, 'Pressure', 5, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(16, 'TST00000006', 6, 'Electrical', 6, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(17, 'TST00000007', 7, 'Thermal', 7, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(18, 'TST00000008', 8, 'Voltage', 8, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(19, 'TST00000009', 9, 'Load', 9, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(20, 'TST00000010', 10, 'Pressure', 10, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(21, 'TST00000011', 11, 'Electrical', 11, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(22, 'TST00000012', 12, 'Thermal', 12, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(23, 'TST00000013', 13, 'Voltage', 13, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(24, 'TST00000014', 14, 'Load', 14, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(25, 'TST00000015', 15, 'Pressure', 15, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(26, 'TST00000016', 16, 'Electrical', 16, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(27, 'TST00000017', 17, 'Thermal', 17, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(28, 'TST00000018', 18, 'Voltage', 18, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(29, 'TST00000019', 19, 'Load', 19, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22'),
(30, 'TST00000020', 20, 'Pressure', 20, 'Pending', NULL, NULL, '2025-04-13 20:54:22', '2025-04-13 20:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '2',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'AbuSufiyan', 'abusufiyan968@gmail.com', 0, '2025-04-13 21:00:18', '$2y$12$vV7CGPnY5aA7UUHPPednH.mLmJRC1hVzj2hGUK8I07hFoK9rBW1Ia', NULL, '2025-04-12 14:56:36', '2025-04-12 14:56:36'),
(3, 'AbuSufiyan', 'sufyan2404f@aptechgdn.net', 2, '2025-04-13 21:00:18', '$2y$12$TLZxBFdVywLeGhEtFZ212OBWKPyojspLUKp4bBojS0PKSuDYxFIyS', NULL, '2025-04-13 08:19:31', '2025-04-13 08:19:31'),
(4, 'Ali Tester', 'ali.tester1@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(5, 'Sara Khan', 'sara.khan@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(6, 'Ahmed Raza', 'ahmed.raza@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(7, 'Fatima Zain', 'fatima.zain@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(8, 'Bilal Arif', 'bilal.arif@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(9, 'Zoya Ali', 'zoya.ali@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(11, 'Ayesha Noor', 'ayesha.noor@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(12, 'Usman Tariq', 'usman.tariq@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(13, 'Mehwish Mir', 'mehwish.mir@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(14, 'Tahir Nadeem', 'tahir.nadeem@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(15, 'Hira Qureshi', 'hira.qureshi@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(16, 'Kashif Ali', 'kashif.ali@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(17, 'Sana Haroon', 'sana.haroon@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(18, 'Fahad Zubair', 'fahad.zubair@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(19, 'Nimra Shah', 'nimra.shah@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(20, 'Hassan Malik', 'hassan.malik@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(21, 'Mariam Ansari', 'mariam.ansari@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(22, 'Rehan Javed', 'rehan.javed@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(23, 'Mahnoor Fatima', 'mahnoor.fatima@example.com', 1, '2025-04-13 21:00:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaD6EcWbBiH0H2e1uS7Yk5j8Di.', NULL, '2025-04-13 20:53:30', '2025-04-13 20:53:30'),
(24, 'AbuSufiyan', 'khanowais713@gmail.com', 2, '2025-04-14 14:18:23', '$2y$12$ox78JBu61HvrrmB8OyuFxeaHHcwQe9L1NgGoatjfNIZrqwBea/PZi', NULL, '2025-04-14 14:11:19', '2025-04-14 14:18:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
