-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 05:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agric`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_02_04_000616_create_properties_table', 1),
(3, '2020_02_12_171802_create_ordered_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_items`
--

CREATE TABLE `ordered_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `p_id` int(10) UNSIGNED NOT NULL,
  `p_specs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordered_items`
--

INSERT INTO `ordered_items` (`id`, `c_id`, `p_id`, `p_specs`, `p_quantity`, `email`, `tel`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Trowel', '1', 'max@yahoo.com', '444444', '2020-02-13 01:47:56', '2020-02-13 01:47:56'),
(4, 1, 1, 'Trowel', '3', 'val@gmail.com', '0247635185', '2020-02-13 04:35:12', '2020-02-13 04:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `c_id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_image` text COLLATE utf8mb4_unicode_ci,
  `p_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_specs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `c_id`, `c_name`, `p_price`, `p_status`, `p_image`, `p_type`, `p_specs`, `p_address`, `p_city`, `p_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'MAX', 'GHS 5000', 'For Sale', '\"[\\\"1581528458.920642136.jpg\\\",\\\"1581528458.122237505.jpg\\\",\\\"1581528458.463929780.jpg\\\",\\\"1581528458.306442371.jpg\\\",\\\"1581528458.438675125.jpg\\\",\\\"1581528458.623623829.jpg\\\",\\\"1581528458.1008918375.jpg\\\"]\"', 'Tool', 'Trowel', 'Kotei', 'Kumasi', 'this is just the description', '2020-02-13 01:27:38', '2020-02-13 01:27:38'),
(4, 3, 'VAL', 'GHS 5000', 'For Rent', '\"[\\\"1581539887.1806134812.jpg\\\",\\\"1581539887.1638911117.jpg\\\",\\\"1581539887.269511479.jpg\\\",\\\"1581539887.1911179366.jpg\\\",\\\"1581539887.1183076231.jpg\\\"]\"', 'Tool', 'Trowel', 'Kotei', 'Kumasi', 'This is an advanced trowel', '2020-02-13 04:38:07', '2020-02-13 04:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MAX', 'max@yahoo.com', NULL, '$2y$10$Yi72UcK.XoiWpmgsPytzbuM.E2UVd9QeIUUzYqVgBMgfx14n4doDi', NULL, '2020-02-13 01:26:00', '2020-02-13 01:26:00'),
(2, 'KOD', 'kwescon@yahoo.com', NULL, '$2y$10$FYcenCyEYnlxSu/z413H8.lH9daIQ.LhZkyI3n0N3pmB65uBSFxS.', NULL, '2020-02-13 02:42:23', '2020-02-13 02:42:23'),
(3, 'VAL', 'val@gmail.com', NULL, '$2y$10$7Hh3OwABLLIkinL0dwhSf.lyFOBajTeJfFAgzqwF4A7EcS8a0CMry', NULL, '2020-02-13 04:21:41', '2020-02-13 04:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordered_items_c_id_foreign` (`c_id`),
  ADD KEY `ordered_items_p_id_foreign` (`p_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_c_id_foreign` (`c_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordered_items`
--
ALTER TABLE `ordered_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordered_items`
--
ALTER TABLE `ordered_items`
  ADD CONSTRAINT `ordered_items_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ordered_items_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
