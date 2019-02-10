-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2019 at 12:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(19, 'Nazim'),
(20, 'Freelancing');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 17, 1, 'well done', 'uylab', '2019-04-06 18:00:00', '2018-12-22 13:20:10'),
(4, 24, 1, 'your site is beautiful', 'approved', '2019-01-06 05:17:31', '2019-01-06 05:18:11'),
(5, 24, 1, 'nice', 'unapproved', '2019-01-07 08:30:05', '2019-01-07 08:30:05');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2018_12_11_190901_create_users_table', 1),
(3, '2018_12_12_101703_create_category_table', 2),
(4, '2018_12_12_103526_create_categories_table', 3),
(5, '2018_12_14_105753_create_posts_table', 4),
(6, '2018_12_18_145100_create_comments_table', 5);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `Post_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2018-12-10',
  `category_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `features_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Post_date`, `category_id`, `user_id`, `title`, `description`, `features_image`, `status`) VALUES
(17, '2018-12-10', 20, 0, 'samsung note -yu', 'djay', '1546614422.jpg', 1),
(18, '2018-12-10', 20, 0, 'Israt Jahan Denika', 'good girl', '1546613923.PNG', 0),
(19, '2018-12-10', 20, 0, 'Apple N90', 'Awesome', '1545714496.jpg', 1),
(20, '2018-12-10', 19, 0, 'samsung', 'samsung is good phone', '1546534226.jpg', 1),
(21, '2018-12-10', 20, 0, 'grameen', 'Grameen is better sim', '1546613934.PNG', 1),
(22, '2018-12-10', 19, 0, 'samsung note -3', 'smooth', '1546611015.PNG', 1),
(23, '2018-12-10', 20, 0, 'samsung note -3', 'description', '1546614277.jpg', 1),
(24, '2018-12-10', 20, 0, 'samsung note -3', 'description', '1546614387.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
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

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nazim', 'admin', 'nazim@gmail.com', NULL, '$2y$10$owga4zSp2FNbf2DslLOxiu5xScjT/x9oZZZyK5zNkNgoKA4tbUjLS', 'ZxErHhTthc29ImD2KI9FRBB5bvDxyFt5AANJ3SaMT1DnHBh9bB4zLaxMh1yn', '2018-12-12 01:45:56', '2018-12-12 01:45:56'),
(2, 'Nazim', 'admin', 'vpnazem@gmail.com', NULL, '$2y$10$yO6ENFV9s1d1S2eFDrcegurzSEcwjP/zBLd3.kTbJrvmC3xCRl08m', NULL, '2019-01-03 10:49:01', '2019-01-03 10:49:01'),
(3, 'Plabon', 'user', 'plabon@gmail.com', NULL, '$2y$10$NfRKlt8bker53JnTxylT6Oao4Qk8GNIQEGZbmORKiCu/j76dPIPWy', 'PD3GIJGt2lp7IBbXi0mNbaONE0aUWpTSpszqxdvn614EdPMKJQOJRRkqJ1dT', '2019-01-06 09:46:43', '2019-01-06 09:46:43'),
(4, 'Arif', 'user', 'arif@gmail.com', NULL, '$2y$10$8x5egxZsE0eNP4.WVfStwu1ZiDDswM7wYHMdUZnIvHfgjn15o4o3y', NULL, '2019-01-06 10:03:10', '2019-01-06 10:03:10'),
(5, 'saddam', 'user', 'saddam@gmail.com', NULL, '$2y$10$x/8oHIltmnuccQp1YtlXIe4NanZ1AM0lmdnRfLpMBeORVcuXY2ZMi', NULL, '2019-01-07 04:11:47', '2019-01-07 04:11:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
