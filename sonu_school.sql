-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 01:47 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonu_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `fname`, `lname`, `number`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Sonu', 'kumar', '8699636718', '87JWCY.jpeg', '2020-06-07 03:33:59', '2020-06-07 05:32:11'),
(4, 'Dayanand', 'parsad', '2254423654', 'O6TE5K.jpeg', '2020-06-07 05:04:06', '2020-06-07 05:04:06'),
(5, 'Anurag', 'navik', '254552225252', 'RTLN37.png', '2020-06-07 05:04:30', '2020-06-07 05:04:30'),
(6, 'Deepak', 'kumar', '20000895222', 'EBG4XK.png', '2020-06-07 05:04:51', '2020-06-07 05:04:51'),
(7, 'Sonu', 'kumar', '1111111111', 'BK3ZO5.jpeg|NLCYOM.jpeg|KLJR7T.png', '2020-06-08 23:59:07', '2020-06-08 23:59:07'),
(8, 'qsaxsc', 'sscsC', '3333333333', '7ZVTGR.jpeg|ZDGO32.jpeg|5Y923G.png', '2020-06-09 00:11:57', '2020-06-09 00:11:57'),
(9, 'Anurag', 'navik', '6666666666', 'K7CZJW.jpeg|O3CW96.png', '2020-06-09 00:15:03', '2020-06-09 00:15:03'),
(10, 'Sonu', 'kumar', '0000000000', 'Z54FO0.jpeg|W5IENM.jpeg|83JPSY.png', '2020-06-09 00:26:21', '2020-06-09 00:26:21'),
(11, 'Sonu', 'kumar', '3333333333', 'D46TAK.jpeg|4SEDLB.jpeg|2FMNOI.png', '2020-06-09 00:36:20', '2020-06-09 00:36:20'),
(12, 'qqqqqqq', 'wwwwwwwwww', '4444444444', 'VIMR9Q.jpeg|M3I17U.png', '2020-06-09 00:37:46', '2020-06-09 00:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `excel_test2s`
--

CREATE TABLE `excel_test2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excel_test2s`
--

INSERT INTO `excel_test2s` (`id`, `country`, `number`, `created_at`, `updated_at`) VALUES
(1, 'pange', 233, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(2, 'Abril', 1562, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(3, 'Hashimoto', 1582, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(4, 'Gent', 2587, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(5, 'Hanner', 3549, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(6, 'Magwood', 2468, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(7, 'Brumm', 2554, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(8, 'Hurn', 3598, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(9, 'Melgar', 2456, '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(10, 'Weiland', 6548, '2020-04-02 19:30:34', '2020-04-02 19:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `excel_tests`
--

CREATE TABLE `excel_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `excel_tests`
--

INSERT INTO `excel_tests` (`id`, `firstname`, `lastname`, `created_at`, `updated_at`) VALUES
(41, 'pange', 'Age', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(42, 'Abril', '32', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(43, 'Hashimoto', '25', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(44, 'Gent', '36', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(45, 'Hanner', '25', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(46, 'Magwood', '58', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(47, 'Brumm', '24', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(48, 'Hurn', '56', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(49, 'Melgar', '27', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(50, 'Weiland', '40', '2020-04-02 18:35:37', '2020-04-02 18:35:37'),
(51, 'pange', 'Age', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(52, 'Abril', '32', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(53, 'Hashimoto', '25', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(54, 'Gent', '36', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(55, 'Hanner', '25', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(56, 'Magwood', '58', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(57, 'Brumm', '24', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(58, 'Hurn', '56', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(59, 'Melgar', '27', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(60, 'Weiland', '40', '2020-04-02 19:23:21', '2020-04-02 19:23:21'),
(61, 'pange', 'Age', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(62, 'Abril', '32', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(63, 'Hashimoto', '25', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(64, 'Gent', '36', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(65, 'Hanner', '25', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(66, 'Magwood', '58', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(67, 'Brumm', '24', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(68, 'Hurn', '56', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(69, 'Melgar', '27', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(70, 'Weiland', '40', '2020-04-02 19:23:52', '2020-04-02 19:23:52'),
(71, 'pange', 'Age', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(72, 'Abril', '32', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(73, 'Hashimoto', '25', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(74, 'Gent', '36', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(75, 'Hanner', '25', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(76, 'Magwood', '58', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(77, 'Brumm', '24', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(78, 'Hurn', '56', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(79, 'Melgar', '27', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(80, 'Weiland', '40', '2020-04-02 19:25:24', '2020-04-02 19:25:24'),
(81, 'pange', 'Age', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(82, 'Abril', '32', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(83, 'Hashimoto', '25', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(84, 'Gent', '36', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(85, 'Hanner', '25', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(86, 'Magwood', '58', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(87, 'Brumm', '24', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(88, 'Hurn', '56', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(89, 'Melgar', '27', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(90, 'Weiland', '40', '2020-04-02 19:25:50', '2020-04-02 19:25:50'),
(91, 'pange', 'Age', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(92, 'Abril', '32', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(93, 'Hashimoto', '25', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(94, 'Gent', '36', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(95, 'Hanner', '25', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(96, 'Magwood', '58', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(97, 'Brumm', '24', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(98, 'Hurn', '56', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(99, 'Melgar', '27', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(100, 'Weiland', '40', '2020-04-02 19:28:29', '2020-04-02 19:28:29'),
(101, 'pange', 'Age', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(102, 'Abril', '32', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(103, 'Hashimoto', '25', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(104, 'Gent', '36', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(105, 'Hanner', '25', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(106, 'Magwood', '58', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(107, 'Brumm', '24', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(108, 'Hurn', '56', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(109, 'Melgar', '27', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(110, 'Weiland', '40', '2020-04-02 19:29:53', '2020-04-02 19:29:53'),
(111, 'pange', 'Age', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(112, 'Abril', '32', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(113, 'Hashimoto', '25', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(114, 'Gent', '36', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(115, 'Hanner', '25', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(116, 'Magwood', '58', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(117, 'Brumm', '24', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(118, 'Hurn', '56', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(119, 'Melgar', '27', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(120, 'Weiland', '40', '2020-04-02 19:30:22', '2020-04-02 19:30:22'),
(121, 'pange', 'Age', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(122, 'Abril', '32', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(123, 'Hashimoto', '25', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(124, 'Gent', '36', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(125, 'Hanner', '25', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(126, 'Magwood', '58', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(127, 'Brumm', '24', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(128, 'Hurn', '56', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(129, 'Melgar', '27', '2020-04-02 19:30:34', '2020-04-02 19:30:34'),
(130, 'Weiland', '40', '2020-04-02 19:30:34', '2020-04-02 19:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `feestructures`
--

CREATE TABLE `feestructures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` int(255) NOT NULL,
  `groupfee` int(255) NOT NULL,
  `otherfee` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feestructures`
--

INSERT INTO `feestructures` (`id`, `class`, `fee`, `groupfee`, `otherfee`, `created_at`, `updated_at`) VALUES
(1, '1st', 500, 400, 400, '2020-03-31 23:34:39', '2020-03-31 23:34:39'),
(2, '2nd', 600, 120, 120, '2020-03-31 23:34:40', '2020-03-31 23:34:40'),
(3, '3rd', 500, 500, 500, '2020-03-31 23:34:40', '2020-03-31 23:34:40'),
(4, '4th', 420, 450, 450, '2020-03-31 23:34:40', '2020-03-31 23:34:40'),
(5, '5th', 458, 458, 458, '2020-03-31 23:34:40', '2020-03-31 23:34:40'),
(6, '6th', 456, 250, 250, '2020-03-31 23:34:40', '2020-03-31 23:34:40');

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
(3, '2020_03_23_064742_add_role_to_users_table', 2),
(4, '2020_03_24_123435_create_userdata_table', 3),
(5, '2020_03_28_110635_create_students_table', 4),
(6, '2020_04_01_070522_create_months_table', 5),
(7, '2020_04_01_095305_create_feestructures_table', 6),
(8, '2020_04_01_102929_create_feestructures_table', 7),
(9, '2020_04_02_202446_create_excel_tests_table', 8),
(10, '2020_04_03_060853_create_excel_test2s_table', 9),
(11, '2020_06_06_054243_creat_crud_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month`, `created_at`, `updated_at`) VALUES
(1, 'January', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(2, 'February', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(3, 'March', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(4, 'April', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(5, 'May', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(6, 'June', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(7, 'July', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(8, 'August', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(9, 'September', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(10, 'October', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(11, 'November', '2020-03-31 20:49:29', '2020-03-31 20:49:29'),
(12, 'December', '2020-03-31 20:49:29', '2020-03-31 20:49:29');

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `class`, `roll`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sonu', '1st', '164', '1585470246.jpeg', '2020-03-28 01:02:48', '2020-03-28 21:24:06'),
(4, 'rahul', '2nd', '000', '1585397170.jpeg', '2020-03-28 01:06:10', '2020-03-28 01:06:10'),
(5, 'hello', 'hello', 'hello', 'hello', '2020-04-27 14:24:30', '2020-04-27 14:24:30'),
(6, 'hi', 'hi', 'hi', 'hi', '2020-04-27 14:29:22', '2020-04-27 14:29:22'),
(7, 'sonu', '5th', '5th', '5th', '2020-04-27 14:30:22', '2020-04-27 14:30:22'),
(8, 'sonu', '5th', '5th', '5th', '2020-04-27 14:46:20', '2020-04-27 14:46:20'),
(9, 'sonu', '5th', '5th', 'image not uploaded successfully', '2020-04-27 14:51:41', '2020-04-27 14:51:41'),
(11, 'kajal', 'kajal', '24022', 'image not uploaded successfully', '2020-04-27 15:31:25', '2020-04-27 15:31:25'),
(12, 'gcgbca', 'sacsd', '142', 'image not uploaded successfully', '2020-04-27 15:34:47', '2020-04-27 15:34:47'),
(13, 'sonu', '8th', '24022', 'image not uploaded successfully', '2020-04-27 15:36:17', '2020-04-27 15:36:17'),
(14, 'sonu', '5th', '24022', 'image not uploaded successfully', '2020-04-27 15:37:50', '2020-04-27 15:37:50'),
(15, 'asdf', 'asdf', '123', 'image not uploaded successfully', '2020-04-28 01:05:56', '2020-04-28 01:05:56'),
(16, 'qwer', 'qwe', '123', 'image not uploaded successfully', '2020-04-28 01:07:01', '2020-04-28 01:07:01'),
(17, 'zxc', 'zxc', '96', 'image not uploaded successfully', '2020-04-28 01:09:18', '2020-04-28 01:09:18'),
(18, 'd', 'cxs', '21', 'image not uploaded', '2020-04-28 01:42:07', '2020-04-28 07:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `userdatas`
--

CREATE TABLE `userdatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userdatas`
--

INSERT INTO `userdatas` (`id`, `username`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'naveen', '1585053707.jpeg', 1, NULL, NULL),
(2, 'naveen', '1585056446.jpeg', 1, '2020-03-24 02:27:26', '2020-03-24 02:27:26'),
(3, 'naveen', '1585056457.jpeg', 1, '2020-03-24 02:27:37', '2020-03-24 02:27:37'),
(4, 'naveen', '1585056476.jpeg', 1, '2020-03-24 02:27:56', '2020-03-24 02:27:56'),
(5, 'naveen', '1585228374.jpeg', 0, '2020-03-26 02:12:54', '2020-03-26 02:12:54'),
(6, 'naveen', '1585228381.jpeg', 0, '2020-03-26 02:13:01', '2020-03-26 02:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'sonu', 'sonu98gupta@gmail.com', NULL, '$2y$10$VXLysGJ.UmxctoK874OexOQlTBiHRaF9oLfG51YMIPpESFwn6Ylje', 'd25sqqbp0YJGcK0snpq2iHJG9aCvrjLnQ2QVcWVFTtup2slDOnrZosQG1H6g', '2020-03-22 20:32:19', '2020-03-22 20:32:19'),
(3, 1, 'naveen', 'naveen@gmail.com', NULL, '$2y$10$/Wy7ZP1k4tve9I8/c4K.mOC.eTr135q4qSuT.nkwI8biD1CjFvmgK', 'utBKLT3EbYtxSC3EsqbsDWQzSkvmBgNWS864P9fUt87DKlH8i5qBVawHXf3e', '2020-03-22 21:48:45', '2020-03-22 21:48:45'),
(4, NULL, 'curl', 'sonu@gmail.com', NULL, '$2y$10$VxWPAYHjfIraBwaORuNLmuMLQXG639PBqtKiw.suDT06ISdlTjNMS', NULL, '2020-08-16 01:37:33', '2020-08-16 01:37:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_test2s`
--
ALTER TABLE `excel_test2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excel_tests`
--
ALTER TABLE `excel_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feestructures`
--
ALTER TABLE `feestructures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdatas`
--
ALTER TABLE `userdatas`
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
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `excel_test2s`
--
ALTER TABLE `excel_test2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `excel_tests`
--
ALTER TABLE `excel_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `feestructures`
--
ALTER TABLE `feestructures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userdatas`
--
ALTER TABLE `userdatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
