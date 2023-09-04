-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2023 at 09:59 AM
-- Server version: 8.0.33
-- PHP Version: 8.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_animals`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specie` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `genre` tinyint(1) NOT NULL,
  `owner` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `specie`, `date_of_birth`, `genre`, `owner`, `note`, `created_at`, `updated_at`) VALUES
(26, 'Pallina', 'Cane', '2023-09-01', 0, 'Ugo', 'eseguire Sverminazione', '2023-09-04 07:43:14', '2023-09-04 07:43:14'),
(27, 'Pivot', 'Serpente', '2023-01-02', 1, 'Roberto', 'eseguita vaccinazione', '2023-09-04 07:44:45', '2023-09-04 07:44:45'),
(28, 'Stella', 'Gatto', NULL, 1, 'Sara', 'eseguire sterilizzazione - vaccinazione eseguita', '2023-09-04 07:45:46', '2023-09-04 07:45:46'),
(29, 'Fiocco', 'Gatto', '2023-09-14', 0, 'Stefano', 'da sverminare', '2023-09-04 07:48:27', '2023-09-04 07:48:27'),
(30, 'Zuma', 'Iguana', '2022-05-09', 1, 'Fabrizio', 'controllare la produzione eccessiva di uova non fecondate', '2023-09-04 07:49:50', '2023-09-04 07:55:30'),
(31, 'Dandel', 'Drago di Komodo', '2023-03-29', 1, 'Matteo', 'eseguire vaccinazione', '2023-09-04 07:51:34', '2023-09-04 07:51:54'),
(32, 'Wishiwashi', 'Pesce', '2023-09-20', 0, 'Diana', 'checkout generale', '2023-09-04 07:53:01', '2023-09-04 07:53:01'),
(33, 'Anacleto', 'Gufo', '2023-09-21', 0, 'Aniello', 'Checkout generale', '2023-09-04 07:56:45', '2023-09-04 07:56:45'),
(34, 'Santana', 'Criceto', '2023-09-14', 1, 'Joseph', 'eseguita vaccinazione', '2023-09-04 07:57:41', '2023-09-04 07:57:41'),
(35, 'Rex', 'Cane', '2023-09-20', 0, 'Silvia', 'controllo vermi', '2023-09-04 07:58:33', '2023-09-04 07:58:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
