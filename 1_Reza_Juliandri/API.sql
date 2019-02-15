-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2019 at 10:02 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks_reza`
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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `image_path` varchar(32) NOT NULL,
  `description` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `latitude`, `longitude`, `x`, `y`, `image_path`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Tangerang', 6.2032, 20.442, 1, 2, 'm1cHk5umJuipcfzLOnK5cYd3oMR.jpg', NULL, '2019-02-13 08:43:07', '2019-02-14 08:48:47'),
(6, 'Tangerang', 6.2032, 20.442, 1, 2, '7sMuvx0BfxFmiVFFJHPu8y1Aj4d.jpg', NULL, '2019-02-13 08:54:18', '2019-02-13 08:54:18'),
(7, 'Tangerang', 6.2032, 20.442, 1, 2, 'LcJ19P5NLPC7mlJjTZQ8sUcMFjV.jpg', NULL, '2019-02-14 01:04:52', '2019-02-14 01:04:52'),
(8, 'Tangerang', 6.2032, 20.442, 1, 2, 'bGghYYoOWnv2OXdhseUGlAQvg5v.jpg', NULL, '2019-02-14 01:06:23', '2019-02-14 01:06:23'),
(9, 'Tangerang', 6.2032, 20.442, 1, 2, 'OVXLKd8n1RXyxeKEkgryYSNBDCk.jpg', NULL, '2019-02-14 01:07:02', '2019-02-14 01:07:02'),
(10, 'Jogjakarta', 100.29993, 22.29993, 3, 5, 'rGDgT031H1noUpCEJc2XhvOxEWJ.jpg', NULL, '2019-02-14 04:49:33', '2019-02-14 04:49:33'),
(11, 'Jogjakarta', 100.29993, 22.29993, 3, 5, 'KtsGZJGgy2qy24XN6w3nfGVRRGq.jpg', NULL, '2019-02-14 04:49:54', '2019-02-14 04:49:54'),
(12, 'Jogjakarta', 100.29993, 22.29993, 3, 5, 'XdeBpoRIjHTgYGGJKU3JNznJuau.jpg', NULL, '2019-02-14 06:16:00', '2019-02-14 06:16:00'),
(13, 'Jayapura', 100.29993, 22.29993, 3, 5, 'RGIzSoQ9CcMVlpg9yFn0mIUafUI.jpg', NULL, '2019-02-14 06:16:43', '2019-02-14 06:16:43'),
(14, 'Jogjakarta', 100.29993, 22.29993, 3, 5, 'SaGP45G66qWrQZbqLdBNuejT2NS.jpg', NULL, '2019-02-14 08:47:34', '2019-02-14 08:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `from_place_id` int(11) NOT NULL,
  `to_place_id` int(11) NOT NULL,
  `schedule_id` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `from_place_id`, `to_place_id`, `schedule_id`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 4, 5, '[1,2]', 1, '2019-02-14 01:49:20', '2019-02-14 01:49:20'),
(2, 4, 5, '[1,2]', 1, '2019-02-14 01:50:27', '2019-02-14 01:50:27'),
(3, 11, 9, '[2,1]', 1, '2019-02-14 05:57:21', '2019-02-14 05:57:21'),
(4, 11, 9, '[2]', 1, '2019-02-14 05:58:06', '2019-02-14 05:58:06'),
(5, 11, 9, '[2]', 3, '2019-02-14 08:50:48', '2019-02-14 08:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `type` enum('bus','train') NOT NULL,
  `line` varchar(20) NOT NULL,
  `from_place_id` int(11) NOT NULL,
  `to_place_id` int(11) NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `type`, `line`, `from_place_id`, `to_place_id`, `departure_time`, `arrival_time`, `distance`, `speed`, `created_at`, `updated_at`) VALUES
(2, 'bus', '1', 11, 9, '08:00:00', '10:00:00', 100, 120, '2019-02-14 04:56:25', '2019-02-14 04:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `permission`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Reza Juliandri', 'ppabcd', 'rezajuliandri20@gmail.com', NULL, '$2y$10$3EV6We876oQqyFbQXX8JaOhC0xUmSuBdNsP46151qRQ.eXwwkyqRG', 'dudc5GnyQHpKuuAzS3wip8EPMXxbkYmIBJMB5v3gRMEfUE3QfXjdI9ERUNSi', 'admin', 'd1eRgrUub6YJmU8cYgjmpd5AMlvSKRwL', '2019-02-12 19:42:14', '2019-02-13 23:11:41'),
(3, 'Admin', 'admin', 'admin@mail.com', NULL, '$2y$10$GQtQBRDnAmN.2k1DELE.H.DbuSlGvkRl4VBH9sDBpr0J9kjCjhbMW', 'u1RyCdVVeHGzraDMb8Bdg3k1fnIMdOlGzROtLFYOADGe8flxtkKic1xLakKM', 'admin', 'VgVw9De5CLQCLums7X1RSchcHqYoiEKv', '2019-02-13 23:13:43', '2019-02-14 01:45:30'),
(4, 'User1', 'user1', 'user1@mail.com', NULL, '$2y$10$HZUwXnQiydY4.qsOQ1LS0.Vz.WyWXblZzZs0wJSuw/zUoXSyC4B7.', '0g0l2Es68l3XV4aIGaNib0mQ5NbYk7aMF3V0JZLdUJE4uwAGVakG1zNeoORk', 'user', NULL, '2019-02-13 23:14:05', '2019-02-14 01:44:49'),
(5, 'User2', 'user2', 'user2@mail.com', NULL, '$2y$10$/.teSGhpbjCTd7W3wWEV2u5twb1pjOERToU4a0FthANiult0qVQz.', 'S7MVleB9eyCxOAYMIDLWcyNCilS39rGxIE8qzfFDnYOrHusG2CG650ovTjYI', 'user', NULL, '2019-02-13 23:14:42', '2019-02-13 23:14:42');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_place_id` (`from_place_id`),
  ADD KEY `to_place_id` (`to_place_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_place_id` (`from_place_id`),
  ADD KEY `to_place_id` (`to_place_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`to_place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`from_place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
