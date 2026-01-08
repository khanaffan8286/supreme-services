-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2026 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supreme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'Super Admin', 'admin@supremeservice.com', '$2y$10$ZQ2BxSCtptQs9LrxGVDRJO4/DzxOMruR0yX5EdakuUUQ/aoY5Fa92', 1, '2026-01-07 07:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(11) NOT NULL,
  `page_slug` varchar(150) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `og_title` varchar(255) DEFAULT NULL,
  `og_description` text DEFAULT NULL,
  `og_image` varchar(255) DEFAULT NULL,
  `og_type` varchar(50) DEFAULT NULL,
  `twitter_title` varchar(255) DEFAULT NULL,
  `twitter_description` text DEFAULT NULL,
  `twitter_image` varchar(255) DEFAULT NULL,
  `robots` varchar(50) DEFAULT 'index, follow',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `page_slug`, `meta_title`, `meta_description`, `meta_keywords`, `canonical_url`, `og_title`, `og_description`, `og_image`, `og_type`, `twitter_title`, `twitter_description`, `twitter_image`, `robots`, `created_at`, `updated_at`) VALUES
(1, 'washing-machine-repair-in-mumbai', 'Washing Machine Repair in Mumbai | Same Day Service – Supreme Service', 'Looking for washing machine repair in Mumbai? Supreme Service provides same-day doorstep repair for front load, top load & fully automatic washing machines. Call now.\r\n', 'washing machine repair in mumbai,\r\nwashing machine service near me,\r\nwashing machine repair mumbai,\r\nwashing machine repair shop near me,\r\nwashing machine repair vashi,\r\nwashing machine repair nerul,\r\nwashing machine repair kharghar,\r\nwashing machine technician near me\r\n', 'https://localhost/supreme-services/washing-machine-repair-in-mumbai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'index, follow', '2026-01-07 08:03:00', '2026-01-08 10:25:01'),
(3, 'washing-machine-repair-in-mumbai-2', 'Washing Machine Repair in Mumbai | Same Day Service – Supreme Service', 'Looking for washing machine repair in Mumbai? Supreme Service provides same-day doorstep repair for front load, top load & fully automatic washing machines. Call now.\r\n', 'washing machine repair in mumbai,\nwashing machine service near me,\nwashing machine repair mumbai,\nwashing machine repair shop near me,\nwashing machine repair vashi,\nwashing machine repair nerul,\nwashing machine repair kharghar,\nwashing machine technician near me\n', 'http://localhost/supreme-services/washing-machine-repair-in-mumbai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'index, follow', '2026-01-08 10:35:45', '2026-01-08 12:14:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_slug` (`page_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
