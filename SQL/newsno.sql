-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 02:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsno`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company_header_ka` longtext NOT NULL,
  `company_header_en` longtext NOT NULL,
  `company_header_ru` longtext NOT NULL,
  `company_header_image` varchar(255) NOT NULL,
  `company_sveti_pirveli_ka` longtext NOT NULL,
  `company_sveti_pirveli_en` longtext NOT NULL,
  `company_sveti_meore_ru` longtext NOT NULL,
  `company_mizani_ka` longtext NOT NULL,
  `company_mizani_en` longtext NOT NULL,
  `company_mizani_ru` longtext NOT NULL,
  `company_sawarmo_piveli_ka` longtext NOT NULL,
  `company_sawarmo_piveli_en` longtext NOT NULL,
  `company_sawarmo_piveli_ru` longtext NOT NULL,
  `company_sawarmo_meore_ka` longtext NOT NULL,
  `company_sawarmo_meore_ru` longtext NOT NULL,
  `company_sawarmo_meore_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sno_likage`
--

CREATE TABLE `sno_likage` (
  `sno_likage_id` int(111) NOT NULL,
  `sno_likage_text_pirveli_ka` longtext NOT NULL,
  `sno_likage_text_pirveli_en` longtext NOT NULL,
  `sno_likage_text_pirveli_ru` longtext NOT NULL,
  `sno_likage_text_meore_ka` longtext NOT NULL,
  `sno_likage_text_meore_en` longtext NOT NULL,
  `sno_likage_text_meore_ru` longtext NOT NULL,
  `sno_likage_text_mesame_ka` longtext NOT NULL,
  `sno_likage_text_mesame_ru` longtext NOT NULL,
  `sno_likage_text_mesame_en` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sno_mineral`
--

CREATE TABLE `sno_mineral` (
  `sno_mineral_id` int(111) NOT NULL,
  `sno_mineral_pirveli_ka` longtext NOT NULL,
  `sno_mineral_pirveli_en` longtext NOT NULL,
  `sno_mineral_pirveli_ru` longtext NOT NULL,
  `sno_mineral_meore_ka` longtext NOT NULL,
  `sno_mineral_meore_en` longtext NOT NULL,
  `sno_mineral_meore_ru` longtext NOT NULL,
  `sno_mineral_mesame_ka` longtext NOT NULL,
  `sno_mineral_mesame_ru` longtext NOT NULL,
  `sno_mineral_mesame_en` longtext NOT NULL,
  `sno_mineral_meotxe_ka` longtext NOT NULL,
  `sno_mineral_meotxe_en` longtext NOT NULL,
  `sno_mineral_meotxe_ru` longtext NOT NULL,
  `sno_mineral_mexute_ka` longtext NOT NULL,
  `sno_mineral_mexute_en` longtext NOT NULL,
  `sno_mineral_mexute_ru` longtext NOT NULL,
  `sno_mineral_image1` varchar(244) NOT NULL,
  `sno_mineral_image2` varchar(244) NOT NULL,
  `sno_mineral_image3` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Administrator', 'admin@sno.ge', NULL, '$2y$10$GXaQgaCbu/nbw/9jqEIsjeS0NgrT6dXvbUdC97ZF3dLlb/cJbNwEu', NULL, '2020-06-10 17:38:31', '2020-06-10 17:38:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `sno_likage`
--
ALTER TABLE `sno_likage`
  ADD PRIMARY KEY (`sno_likage_id`);

--
-- Indexes for table `sno_mineral`
--
ALTER TABLE `sno_mineral`
  ADD PRIMARY KEY (`sno_mineral_id`);

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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sno_likage`
--
ALTER TABLE `sno_likage`
  MODIFY `sno_likage_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sno_mineral`
--
ALTER TABLE `sno_mineral`
  MODIFY `sno_mineral_id` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
