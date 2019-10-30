-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 02:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controlpv`
--

-- --------------------------------------------------------

--
-- Table structure for table `controls`
--

CREATE TABLE `controls` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_control` date NOT NULL,
  `amount` double NOT NULL,
  `comment` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `controls`
--

INSERT INTO `controls` (`id`, `date_control`, `amount`, `comment`, `created_at`, `updated_at`) VALUES
(1, '2019-07-15', 6106710, NULL, '2019-10-29 23:01:12', '2019-10-29 23:01:12'),
(2, '2019-07-16', 5226500, NULL, '2019-10-29 23:01:38', '2019-10-29 23:01:38'),
(3, '2019-07-17', 2959500, NULL, '2019-10-29 23:02:03', '2019-10-29 23:02:03'),
(4, '2019-07-18', 6139400, NULL, '2019-10-29 23:02:24', '2019-10-29 23:02:24'),
(5, '2019-07-19', 8067500, NULL, '2019-10-29 23:03:17', '2019-10-29 23:03:17'),
(6, '2019-07-20', 2883500, NULL, '2019-10-29 23:19:55', '2019-10-29 23:19:55'),
(7, '2019-07-22', 10207520, NULL, '2019-10-29 23:20:10', '2019-10-29 23:20:10'),
(8, '2019-07-23', 10873000, NULL, '2019-10-29 23:20:50', '2019-10-29 23:20:50'),
(9, '2019-07-23', 762500, NULL, '2019-10-29 23:21:04', '2019-10-29 23:21:04'),
(10, '2019-07-24', 8783500, NULL, '2019-10-29 23:21:19', '2019-10-29 23:21:19'),
(11, '2019-07-25', 3329500, NULL, '2019-10-29 23:21:49', '2019-10-29 23:21:49'),
(12, '2019-07-26', 7166500, NULL, '2019-10-29 23:22:01', '2019-10-29 23:22:01'),
(13, '2019-07-27', 13273000, NULL, '2019-10-29 23:22:20', '2019-10-29 23:22:20'),
(14, '2019-07-28', 20439500, NULL, '2019-10-29 23:24:01', '2019-10-29 23:26:02'),
(15, '2019-07-29', 14822000, NULL, '2019-10-29 23:25:02', '2019-10-29 23:26:35'),
(16, '2019-07-29', 86000, NULL, '2019-10-29 23:25:11', '2019-10-29 23:26:23'),
(17, '2019-07-30', 6854500, NULL, '2019-10-29 23:26:55', '2019-10-29 23:26:55'),
(18, '2019-07-30', 258200, NULL, '2019-10-29 23:27:10', '2019-10-29 23:27:10'),
(19, '2019-07-31', 8728300, NULL, '2019-10-29 23:27:33', '2019-10-29 23:27:33'),
(20, '2019-08-01', 8337000, NULL, '2019-10-29 23:27:45', '2019-10-29 23:27:45'),
(21, '2019-08-02', 14997000, NULL, '2019-10-29 23:27:55', '2019-10-29 23:27:55'),
(22, '2019-08-03', 13726500, NULL, '2019-10-29 23:28:14', '2019-10-29 23:28:14'),
(23, '2019-08-04', 4324000, NULL, '2019-10-29 23:28:26', '2019-10-29 23:28:26'),
(24, '2019-08-05', 3772000, NULL, '2019-10-29 23:29:14', '2019-10-29 23:29:14'),
(25, '2019-08-05', 14624600, NULL, '2019-10-29 23:29:27', '2019-10-29 23:29:27'),
(26, '2019-08-06', 1885000, NULL, '2019-10-29 23:29:37', '2019-10-29 23:29:37'),
(27, '2019-08-06', 13964100, NULL, '2019-10-29 23:29:48', '2019-10-29 23:29:48'),
(28, '2019-08-07', 4290020, NULL, '2019-10-29 23:30:00', '2019-10-29 23:30:00'),
(29, '2019-08-07', 1054000, NULL, '2019-10-29 23:30:13', '2019-10-29 23:30:13'),
(30, '2019-08-08', 12985000, NULL, '2019-10-29 23:30:27', '2019-10-29 23:30:27'),
(31, '2019-08-08', 1556000, NULL, '2019-10-29 23:30:34', '2019-10-29 23:30:34'),
(32, '2019-08-09', 8805010, NULL, '2019-10-29 23:30:45', '2019-10-29 23:30:45'),
(33, '2019-08-10', 15601000, NULL, '2019-10-29 23:30:55', '2019-10-29 23:33:36'),
(34, '2019-08-11', 8350000, NULL, '2019-10-29 23:31:06', '2019-10-29 23:33:47'),
(35, '2019-08-12', 8310000, NULL, '2019-10-29 23:31:58', '2019-10-29 23:34:51'),
(36, '2019-08-13', 4403000, NULL, '2019-10-29 23:32:08', '2019-10-29 23:35:16'),
(37, '2019-08-14', 5678000, NULL, '2019-10-29 23:35:31', '2019-10-29 23:35:31'),
(38, '2019-08-15', 15080000, NULL, '2019-10-29 23:35:46', '2019-10-29 23:35:46'),
(39, '2019-08-15', 396000, NULL, '2019-10-29 23:35:55', '2019-10-29 23:35:55'),
(40, '2019-08-16', 3561000, NULL, '2019-10-29 23:36:13', '2019-10-29 23:36:13'),
(41, '2019-08-16', 14754500, NULL, '2019-10-29 23:36:29', '2019-10-29 23:36:29'),
(42, '2019-08-17', 15380000, NULL, '2019-10-29 23:37:45', '2019-10-29 23:37:45'),
(43, '2019-08-17', 3558000, NULL, '2019-10-29 23:37:52', '2019-10-29 23:37:52'),
(44, '2019-08-18', 6146000, NULL, '2019-10-29 23:38:05', '2019-10-29 23:38:05'),
(45, '2019-08-19', 1079000, NULL, '2019-10-29 23:38:37', '2019-10-29 23:38:37'),
(46, '2019-08-19', 18042000, NULL, '2019-10-29 23:38:46', '2019-10-29 23:38:46'),
(47, '2019-08-20', 9791000, NULL, '2019-10-29 23:38:56', '2019-10-29 23:38:56'),
(48, '2019-08-21', 10954000, NULL, '2019-10-29 23:39:14', '2019-10-29 23:39:14'),
(49, '2019-08-22', 9300000, NULL, '2019-10-29 23:39:31', '2019-10-29 23:39:31'),
(50, '2019-08-23', 14662000, NULL, '2019-10-29 23:39:42', '2019-10-29 23:39:42'),
(51, '2019-08-24', 8531500, NULL, '2019-10-29 23:40:06', '2019-10-29 23:40:06'),
(52, '2019-08-25', 2385000, NULL, '2019-10-29 23:40:18', '2019-10-29 23:40:18'),
(53, '2019-08-26', 10887000, NULL, '2019-10-29 23:40:41', '2019-10-29 23:40:41'),
(54, '2019-08-27', 9298010, NULL, '2019-10-29 23:40:49', '2019-10-29 23:40:49'),
(55, '2019-08-28', 13465500, NULL, '2019-10-29 23:40:59', '2019-10-29 23:40:59'),
(56, '2019-08-29', 16834000, NULL, '2019-10-29 23:41:09', '2019-10-29 23:41:09'),
(57, '2019-08-30', 23873500, NULL, '2019-10-29 23:41:21', '2019-10-29 23:41:21'),
(58, '2019-08-23', 6383000, NULL, '2019-10-29 23:41:33', '2019-10-29 23:41:33'),
(59, '2019-08-31', 6267000, NULL, '2019-10-29 23:41:52', '2019-10-29 23:41:52'),
(60, '2019-08-31', 29860000, NULL, '2019-10-29 23:42:05', '2019-10-29 23:42:05'),
(61, '2019-09-02', 33314000, NULL, '2019-10-29 23:42:22', '2019-10-29 23:42:22'),
(62, '2019-09-03', 18895000, NULL, '2019-10-29 23:42:56', '2019-10-29 23:42:56'),
(63, '2019-09-04', 11869000, NULL, '2019-10-29 23:43:24', '2019-10-29 23:43:24'),
(64, '2019-09-05', 26982000, NULL, '2019-10-29 23:43:36', '2019-10-29 23:43:36'),
(65, '2019-09-06', 20604000, NULL, '2019-10-29 23:43:50', '2019-10-29 23:43:50'),
(66, '2019-09-07', 27160000, NULL, '2019-10-29 23:44:18', '2019-10-29 23:44:18'),
(67, '2019-09-07', 14522500, NULL, '2019-10-29 23:44:40', '2019-10-29 23:44:40'),
(68, '2019-09-09', 26468500, NULL, '2019-10-29 23:45:03', '2019-10-29 23:45:03'),
(69, '2019-09-10', 28514000, NULL, '2019-10-29 23:45:56', '2019-10-29 23:45:56'),
(70, '2019-09-10', 12537000, NULL, '2019-10-29 23:46:29', '2019-10-29 23:46:29'),
(71, '2019-09-11', 22008000, NULL, '2019-10-29 23:46:43', '2019-10-29 23:46:43'),
(72, '2019-09-12', 20655000, NULL, '2019-10-29 23:46:52', '2019-10-29 23:46:52'),
(73, '2019-09-13', 26425000, NULL, '2019-10-29 23:47:04', '2019-10-29 23:47:04'),
(74, '2019-09-14', 28455000, NULL, '2019-10-29 23:47:44', '2019-10-29 23:47:44'),
(75, '2019-09-16', 9699000, NULL, '2019-10-29 23:48:19', '2019-10-29 23:48:19'),
(76, '2019-09-17', 21603000, NULL, '2019-10-29 23:48:34', '2019-10-29 23:48:34'),
(77, '2019-09-18', 19046000, NULL, '2019-10-29 23:48:44', '2019-10-29 23:48:58'),
(78, '2019-09-19', 8275000, NULL, '2019-10-29 23:49:10', '2019-10-29 23:49:10'),
(79, '2019-09-20', 15838000, NULL, '2019-10-29 23:49:24', '2019-10-29 23:49:24'),
(80, '2019-09-21', 20035000, NULL, '2019-10-29 23:50:10', '2019-10-29 23:50:51'),
(81, '2019-09-23', 16647000, NULL, '2019-10-29 23:51:12', '2019-10-29 23:51:12'),
(82, '2019-09-24', 20199000, NULL, '2019-10-29 23:51:44', '2019-10-29 23:52:21'),
(83, '2019-09-25', 11331000, NULL, '2019-10-29 23:52:38', '2019-10-29 23:52:38'),
(84, '2019-09-26', 8628000, NULL, '2019-10-29 23:53:00', '2019-10-29 23:53:00'),
(85, '2019-08-27', 8496000, NULL, '2019-10-29 23:53:16', '2019-10-29 23:53:16'),
(86, '2019-09-28', 14789500, NULL, '2019-10-29 23:54:07', '2019-10-29 23:54:07'),
(87, '2019-09-30', 14552000, NULL, '2019-10-29 23:54:26', '2019-10-29 23:54:26'),
(88, '2019-10-01', 1876000, NULL, '2019-10-29 23:54:42', '2019-10-29 23:54:42'),
(89, '2019-10-05', 12889500, NULL, '2019-10-29 23:55:05', '2019-10-29 23:55:05'),
(90, '2019-10-07', 16284000, NULL, '2019-10-29 23:55:21', '2019-10-29 23:55:21'),
(91, '2019-10-08', 17494500, NULL, '2019-10-29 23:55:40', '2019-10-29 23:55:40'),
(92, '2019-10-09', 8746000, NULL, '2019-10-29 23:55:57', '2019-10-29 23:55:57'),
(93, '2019-10-04', 367000, NULL, '2019-10-29 23:56:18', '2019-10-29 23:56:18'),
(94, '2019-10-15', 820000, NULL, '2019-10-29 23:56:30', '2019-10-29 23:56:30'),
(95, '2019-10-23', 14707000, NULL, '2019-10-29 23:56:45', '2019-10-29 23:56:45'),
(96, '2019-10-24', 22808000, NULL, '2019-10-29 23:57:40', '2019-10-29 23:57:40'),
(97, '2019-10-25', 18311000, NULL, '2019-10-29 23:57:57', '2019-10-29 23:57:57'),
(98, '2019-10-26', 12337010, NULL, '2019-10-29 23:58:08', '2019-10-29 23:58:08'),
(99, '2019-10-28', 16327000, NULL, '2019-10-29 23:58:49', '2019-10-29 23:58:49');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_25_154054_create_controls_table', 1);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `controls`
--
ALTER TABLE `controls`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controls`
--
ALTER TABLE `controls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
