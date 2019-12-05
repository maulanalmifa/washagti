-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2019 at 01:12 PM
-- Server version: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `washagti`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getjenis` ()  NO SQL
BEGIN
DECLARE harga_jenis BIGINT(20); DECLARE jenis VARCHAR(255);
IF pesanan.jenis='Cuci Basah' THEN SET harga_jenis=3000;
ELSEIF pesanan.jenis='Cuci Kering' THEN SET harga_jenis=3500;
ELSEIF pesanan.jenis='Cuci Kering Setrika' THEN SET harga_jenis=4000;
ELSEIF pesanan.jenis='Setrika' THEN SET harga_jenis=2000;
ELSE SET harga_jenis=10000;
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `updated_at` timestamp NOT NULL,
  `id` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`updated_at`, `id`, `nama`, `harga`) VALUES
('2019-12-01 16:58:03', 1, 'None', 0),
('2019-12-01 16:57:57', 2, 'Antar', 3000),
('2019-11-29 07:19:06', 3, 'Antar Jemput', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `updated_at` timestamp NOT NULL,
  `id` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`updated_at`, `id`, `nama`, `harga`) VALUES
('2019-12-01 09:29:58', 1, 'Cuci Basah Standar', 3300),
('2019-11-30 00:57:20', 2, 'Cuci Basah Kilat', 7000),
('2019-11-30 00:57:20', 3, 'Cuci Kering Standar', 3500),
('2019-11-30 00:57:20', 4, 'Cuci Kering Kilat', 8000),
('2019-11-30 00:57:21', 5, 'Cuci Kering Setrika Standar', 4000),
('2019-11-30 00:57:21', 6, 'Cuci Kering Setrika Kilat', 9000),
('2019-11-30 00:57:21', 7, 'Cuci Sepatu', 11000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_18_132221_create_sessions_table', 1),
(5, '2019_11_23_001922_pesanan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lanal.fahmi27@gmail.com', '$2y$10$9ceATp5M98Jk.EDIPWxlgeuaEi9T5WbI98QGBiJL0J1Eh6XBjfZDK', '2019-12-03 18:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_do` int(11) NOT NULL,
  `jenis` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kg` int(11) NOT NULL DEFAULT '0',
  `harga_jenis` bigint(20) NOT NULL DEFAULT '0',
  `harga_do` bigint(20) NOT NULL DEFAULT '0',
  `total` bigint(20) NOT NULL DEFAULT '0',
  `status` char(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`created_at`, `updated_at`, `id`, `name`, `telpon`, `alamat`, `id_jenis`, `id_do`, `jenis`, `do`, `kg`, `harga_jenis`, `harga_do`, `total`, `status`) VALUES
('2019-12-03 22:30:21', '2019-12-04 20:00:43', 11, 'efti', '0821', 'tegalgondo ikip malang 1p/7', 6, 1, 'Cuci Kering Setrika Kilat', 'None', 3, 9000, 0, 22500, 'Selesai'),
('2019-12-04 05:37:56', '2019-12-04 20:00:37', 12, 'Pradita Candrani', '0813', 'Sepanjang gondanglegi', 3, 3, 'Cuci Kering Standar', 'Antar Jemput', 3, 3500, 5000, 15500, 'Selesai'),
('2019-12-04 20:25:46', '2019-12-04 20:25:46', 14, 'Pradita Candrani', '0813', 'Koreyah', 1, 1, 'Cuci Basah Standar', 'None', 0, 0, 0, 0, 'Proses'),
('2019-12-04 20:34:23', '2019-12-04 20:37:40', 15, 'Balqiesee', '082233445566', 'Jl. Terusan Surabaya', 1, 2, 'Cuci Basah Standar', 'Antar', 2, 3300, 3000, 9600, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pradita Candrani', 'pradita.c@gmail.com', NULL, '$2y$10$3hbRwhqc1jcxEHrbnFtGpeiyyrB8b98g4pi.o66mLlCzw2OTe73YK', NULL, '2019-11-28 06:09:58', '2019-11-28 06:09:58'),
(4, 'Ahmad Maulanal Fahmi', 'lanal.fahmi27@gmail.com', NULL, '$2y$10$1U/vDC8l7mHW4q2KyUVbpufeU9WAkCjoPYLIsZx2AObZf9f7XsZgC', NULL, '2019-12-02 22:07:53', '2019-12-02 22:07:53'),
(5, 'admin', 'admin@washagti.com', NULL, '$2y$10$2VGesBDur2FqkGuLqhRA0uMVSeOxhGxrED3Mtoy1Tgy5zY7/CL8Aq', NULL, '2019-12-03 17:32:27', '2019-12-03 17:32:27'),
(6, 'efti', 'efti@gmail.com', NULL, '$2y$10$.wFLv/ZCjELOTxT5fzLfU.uIGuj1CzH.6gYnTKbAE.8Fw/4PSnFWi', NULL, '2019-12-03 22:27:11', '2019-12-03 22:27:11'),
(7, 'Balqiesee', 'bivina0611@gmail.com', NULL, '$2y$10$qh6nA03lHvhPianuEoBB9uBEpTxpEOwXzu7Ok4rVfFBKkmwGBNlsC', NULL, '2019-12-04 20:32:49', '2019-12-04 20:32:49'),
(8, 'Balqiesee', 'bivinaaa@gmail.com', NULL, '$2y$10$KwWJtc9g9sch7IVLezZotuTQp6FgORKFwR2XkYE0ZlGEuwKIqcz92', NULL, '2019-12-04 20:33:10', '2019-12-04 20:33:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_do` (`id_do`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_do`) REFERENCES `delivery` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
