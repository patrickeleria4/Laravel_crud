-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 10:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `activity2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_26_120318_create_products_table', 1),
(6, '2023_09_26_234657_modify_products_table', 2),
(7, '2023_09_27_014312_add_total_price_to_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` decimal(10,2) DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `item_name`, `item_price`, `item_quantity`, `created_at`, `updated_at`, `total_price`) VALUES
(22, 'tea', 'friench fries', 5100.00, 100, '2023-09-27 01:09:46', '2023-09-27 18:45:36', 510000.00),
(24, 'beverage', 'Coca-cola', 100.00, 70, '2023-09-27 01:32:29', '2023-09-27 03:48:59', 7000.00),
(27, 'beverage', 'goldilocks', 550.00, 70, '2023-09-27 04:10:28', '2023-09-27 17:55:07', 38500.00),
(30, 'beverage', 'shawarma rice', 5789.00, 14, '2023-09-27 18:41:05', '2023-09-28 17:29:33', 81046.00),
(34, 'Food', 'Halo-Halo', 567.00, 43, '2023-09-28 21:07:07', '2023-09-29 04:27:28', 24381.00),
(35, 'Beverage', 'pepsi', 34.00, 50, '2023-09-28 21:07:31', '2023-09-29 04:35:31', 1700.00),
(36, 'Food', 'Milktea', 56.00, 34, '2023-09-28 21:07:55', '2023-09-29 04:54:10', 1904.00),
(37, 'Tea', 'Red hORSE', 80.00, 6789, '2023-09-29 04:36:05', '2023-09-29 04:55:40', 543120.00),
(38, 'Food', 'Lonngganisa', 56.00, 90, '2023-09-29 18:15:42', '2023-09-29 19:05:48', 5040.00),
(39, 'Dessert', 'Red Ribbon', 56.00, 89, '2023-09-29 18:16:17', '2023-09-29 19:39:03', 4984.00),
(40, 'Food', 'chowking', 456.00, 78, '2023-09-29 18:34:40', '2023-09-29 19:05:40', 35568.00),
(41, 'Dessert', 'Halo-Halo', 69.00, 54, '2023-10-02 00:40:41', '2023-10-02 00:41:16', 3726.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'brix', 'brix@example.com', NULL, '$2y$10$d/2frFgXOEJkoJ05oBmwYerVIa3PklrQqB7lc6sa3fgLqHNR/n6ua', NULL, '2023-09-26 20:45:35', '2023-09-26 20:45:35'),
(2, 'PAT', 'pat@example.com', NULL, '$2y$10$c8bxcUyIvUA56NqVC8uSCuj50EAU/STDy/vZEd6rrTEqlv1SI5Jqm', NULL, '2023-09-26 20:47:52', '2023-09-26 20:47:52'),
(3, 'shane', 'shane@example.com', NULL, '$2y$10$sth2dDTjTZmh3INbg4roDOn33ZZQfm2fojeWRc9cydjKSdbp49/Se', NULL, '2023-09-27 01:31:09', '2023-09-27 01:31:09'),
(4, 'Brad Prit', 'Brad@example.com', NULL, '$2y$10$69hRwYUb0iNcor/CpGTbzuMyB/9PwoNHVWs2iEQQGspurZ9i7stN.', NULL, '2023-09-27 03:19:09', '2023-09-27 03:19:09'),
(5, 'chunks', 'chunks@example.com', NULL, '$2y$10$2E27GJ6buyTgRHTZZFVjsO70WLCjBEsITps2Z9hV5a3nxAVKfL1kO', NULL, '2023-09-29 04:38:34', '2023-09-29 04:38:34'),
(6, 'Chris', 'chris@example.com', NULL, '$2y$10$lpHAxJz1a4lUQGn0CX7yruhYuMef0yEuwdT2PW02xpeLULcTQasBe', NULL, '2023-09-29 20:08:55', '2023-09-29 20:08:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
