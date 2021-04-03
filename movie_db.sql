-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 08:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbls`
--

CREATE TABLE `comment_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_comment_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_comment_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_comment_date` datetime NOT NULL,
  `movie_comment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_tbls`
--

INSERT INTO `comment_tbls` (`id`, `movie_id`, `movie_name`, `movie_comment`, `movie_comment_user_id`, `movie_comment_user`, `movie_comment_date`, `movie_comment_status`, `admin_user_id`, `created_at`, `updated_at`) VALUES
(1, '530801', 'Harry Potter', 'best 1', '2', 'Nuwan Athukorala', '2021-04-03 12:54:51', 'Agree', '2', '2021-04-03 07:24:51', '2021-04-03 11:01:12'),
(2, '838082', 'Doom 3', 'best hindi movie', '2', 'Nuwan Athukorala', '2021-04-03 16:33:56', 'Agree', '2', '2021-04-03 11:03:56', '2021-04-03 12:12:12'),
(3, '530801', 'Harry Potter', 'best 23', '3', 'Sunth Rajapaksha', '2021-04-03 17:41:41', 'Agree', '2', '2021-04-03 12:11:41', '2021-04-03 12:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2021_03_30_173433_create_movie_tbls_table', 2),
(5, '2021_04_03_123145_create_comment_tbls_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `movie_tbls`
--

CREATE TABLE `movie_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_summery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_genres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `movie_image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insert_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insert_user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie_tbls`
--

INSERT INTO `movie_tbls` (`id`, `movie_id`, `movie_name`, `movie_year`, `movie_summery`, `movie_genres`, `movie_image_path`, `insert_user_id`, `insert_user_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '530801', 'Harry Potter', '2002', 'best movie', 'Crime,History,Action,Horror', 'img/movie_img/img-91083533.jpg', '1', 'Heshan Silva', '1', '2021-03-30 12:57:53', '2021-04-02 12:27:41'),
(2, '838082', 'Doom 3', '2010', 'best action movie', 'Crime,Action', 'img/movie_img/img-1324693423.jpg', '1', 'Heshan Silva', '1', '2021-03-30 13:02:23', '2021-04-02 12:27:05');

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
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `email_verified_at`, `password`, `permission`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Heshan', 'Silva', 'Heshan Silva', 'heshan@gmail.com', NULL, '$2y$10$A1MXRwuSj6XHun9.n11vJ.BUbKU/hNpik.DqVjbKgZiwQYpkQkIU2', 'admin', '1', NULL, '2021-03-29 12:58:07', '2021-04-03 12:40:57'),
(2, 'Nuwan', 'Athukorala', 'Nuwan Athukorala', 'nuwanthikshana@gmail.com', NULL, '$2y$10$bDR9vWHQEiBVcKnCmB7pqe4l6wIo/Divq8E/y/wPHG9TpP8tT3YQ2', 'admin', '1', NULL, '2021-03-30 09:16:41', '2021-04-03 12:35:30'),
(3, 'Sunth', 'Rajapaksha', 'Sunth Rajapaksha', 'suneth@gmail.com', NULL, '$2y$10$x4c0xB.ZX19czaIpaEEj2eVRRMIhEVj9IGdQWPJUZxipS1Rqwx2r2', 'defualt', '1', NULL, '2021-04-03 12:08:15', '2021-04-03 12:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_tbls`
--
ALTER TABLE `comment_tbls`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `movie_tbls`
--
ALTER TABLE `movie_tbls`
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
-- AUTO_INCREMENT for table `comment_tbls`
--
ALTER TABLE `comment_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie_tbls`
--
ALTER TABLE `movie_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
