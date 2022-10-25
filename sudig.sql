-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 08:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sudig`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0', '7da99ed1b8bfb7fbee20960e334cad42', '2022-04-18 07:58:44'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '922a0e9bd145f8f2cfe8b42ce2ae7a91', '2022-04-21 00:35:10'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '6eb76dcb648af722dc1e57d8d48de775', '2022-06-28 15:49:09'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36', '26de06968443a22ebfde918d6029b0fb', '2022-07-07 15:37:15'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36', '544097b254590ad04bc5fea57bb582cf', '2022-07-07 16:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Web Admin'),
(2, 'user', 'User biasa');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 9),
(2, 10),
(2, 31);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'cheator08@gmail.com', NULL, '2022-04-16 16:01:29', 0),
(2, '::1', 'cheator08@gmail.com', NULL, '2022-04-16 16:01:42', 0),
(3, '::1', 'cheator08@gmail.com', 1, '2022-04-16 16:02:51', 1),
(4, '::1', 'cheator08@gmail.com', 1, '2022-04-16 22:59:42', 1),
(5, '::1', 'cheator08@gmail.com', 1, '2022-04-16 23:03:27', 1),
(6, '::1', 'cheator08@gmail.com', 1, '2022-04-16 23:06:41', 1),
(7, '::1', 'cheator08@gmail.com', 1, '2022-04-16 23:08:34', 1),
(8, '::1', 'cheator08@gmail.com', 1, '2022-04-17 00:37:35', 1),
(9, '::1', 'cheator08@gmail.com', 1, '2022-04-17 00:47:39', 1),
(10, '::1', 'cheator08@gmail.com', 1, '2022-04-17 00:49:03', 1),
(11, '::1', 'cheator08@gmail.com', 1, '2022-04-17 00:56:46', 1),
(12, '::1', 'cheator08@gmail.com', 1, '2022-04-17 01:00:35', 1),
(13, '::1', 'cheator08@gmail.com', 1, '2022-04-17 01:01:42', 1),
(14, '::1', 'cheator08@gmail.com', 1, '2022-04-17 01:03:02', 1),
(15, '::1', 'cheator08@gmail.com', 1, '2022-04-17 02:03:52', 1),
(16, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 02:07:25', 1),
(17, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 02:20:24', 1),
(18, '::1', 'cheator08@gmail.com', 1, '2022-04-17 02:24:46', 1),
(19, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 02:30:04', 1),
(20, '::1', 'cheator08@gmail.com', 1, '2022-04-17 02:48:44', 1),
(21, '::1', 'cheator08@gmail.com', 1, '2022-04-17 02:58:48', 1),
(22, '::1', 'cheator08@gmail.com', 1, '2022-04-17 03:02:45', 1),
(23, '::1', 'cheator08@gmail.com', 1, '2022-04-17 03:03:24', 1),
(24, '::1', 'cheator08@gmail.com', 1, '2022-04-17 03:05:59', 1),
(25, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 03:06:48', 1),
(26, '::1', 'cheator08@gmail.com', 1, '2022-04-17 03:17:04', 1),
(27, '::1', 'cheator08@gmail.com', 1, '2022-04-17 03:26:57', 1),
(28, '::1', 'cheator08@gmail.com', 1, '2022-04-17 03:27:43', 1),
(29, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 04:35:28', 1),
(30, '::1', 'cheator08@gmail.com', 1, '2022-04-17 04:35:45', 1),
(31, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 04:56:16', 1),
(32, '::1', 'cheator08@gmail.com', 1, '2022-04-17 07:13:46', 1),
(33, '::1', 'cheator08@gmail.com', 1, '2022-04-17 15:23:10', 1),
(34, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 15:23:24', 1),
(35, '::1', 'cheator08@gmail.com', 1, '2022-04-17 15:23:43', 1),
(36, '::1', 'spamdcbot@gmail.com', 2, '2022-04-17 17:45:43', 1),
(37, '::1', 'cheator08@gmail.com', 1, '2022-04-17 17:59:54', 1),
(38, '::1', 'spamdcbot@gmail.com', 2, '2022-04-18 01:23:57', 1),
(39, '::1', 'cheator08@gmail.com', 1, '2022-04-18 04:29:56', 1),
(40, '::1', 'spamdcbot@gmail.com', 2, '2022-04-18 04:35:19', 1),
(41, '::1', 'barangaja933@gmail.com', 9, '2022-04-18 07:58:27', 0),
(42, '::1', 'barangaja933@gmail.com', 9, '2022-04-18 07:59:07', 1),
(43, '::1', 'barangaja933@gmail.com', 9, '2022-04-18 15:23:37', 1),
(44, '::1', 'barangaja933@gmail.com', 9, '2022-04-18 15:24:13', 1),
(45, '::1', 'barangaja933@gmail.com', 9, '2022-04-18 16:54:17', 1),
(46, '::1', 'barangaja933@gmail.com', 9, '2022-04-18 18:49:45', 1),
(47, '::1', 'cheator08', NULL, '2022-04-18 18:50:27', 0),
(48, '::1', 'cheator08@gmail.com', 1, '2022-04-18 18:50:42', 1),
(49, '::1', 'cheator08@gmail.com', 1, '2022-04-18 22:41:26', 1),
(50, '::1', 'cheator08@gmail.com', 1, '2022-04-18 23:01:10', 1),
(51, '::1', 'barangaja933@gmail.com', 9, '2022-04-20 04:28:48', 1),
(52, '::1', 'cheator08@gmail.com', 1, '2022-04-20 04:29:54', 1),
(53, '::1', 'cheator08@gmail.com', 1, '2022-04-20 22:33:15', 1),
(54, '::1', 'zaenabdul03@gmail.com', 10, '2022-04-21 00:35:28', 1),
(55, '::1', 'cheator08@gmail.com', 1, '2022-04-21 00:36:12', 1),
(56, '::1', 'cheator08@gmail.com', 1, '2022-04-30 04:21:20', 1),
(57, '::1', 'cheator08@gmail.com', 1, '2022-05-07 22:00:23', 1),
(58, '::1', 'cheator08@gmail.com', 1, '2022-05-08 05:37:40', 1),
(59, '::1', 'barangaja933@gmail.com', 9, '2022-06-02 03:29:23', 1),
(60, '::1', 'cheator08@gmail.com', 1, '2022-06-03 19:58:22', 1),
(61, '::1', 'cheator08@gmail.com', 1, '2022-06-03 20:09:09', 1),
(62, '::1', 'cheator08@gmail.com', 1, '2022-06-03 20:11:12', 1),
(63, '::1', 'cheator08@gmail.com', 1, '2022-06-03 20:31:10', 1),
(64, '::1', 'cheator08@gmail.com', 1, '2022-06-06 01:33:47', 1),
(65, '::1', 'cheator08@gmail.com', 1, '2022-06-06 03:43:02', 1),
(66, '::1', 'barangaja933@gmail.com', 9, '2022-06-06 18:03:25', 1),
(67, '::1', 'barangaja933@gmail.com', 9, '2022-06-06 18:10:10', 1),
(68, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 03:11:40', 1),
(69, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 03:12:27', 1),
(70, '::1', 'cheator08@gmail.com', 1, '2022-06-11 06:01:13', 1),
(71, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 06:01:53', 1),
(72, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 06:03:20', 1),
(73, '::1', 'cheator08@gmail.com', 1, '2022-06-11 06:34:05', 1),
(74, '::1', 'cheator08@gmail.com', 1, '2022-06-11 06:56:25', 1),
(75, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 06:57:42', 1),
(76, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 07:21:10', 1),
(77, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 12:51:43', 1),
(78, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 18:26:25', 1),
(79, '::1', 'barangaja933@gmail.com', 9, '2022-06-11 20:02:56', 1),
(80, '::1', 'barangaja933@gmail.com', 9, '2022-06-12 05:48:41', 1),
(81, '::1', 'cheator08@gmail.com', 1, '2022-06-12 07:37:32', 1),
(82, '::1', 'cheator08@gmail.com', 1, '2022-06-12 16:53:36', 1),
(83, '::1', 'barangaja933@gmail.com', 9, '2022-06-12 20:13:23', 1),
(84, '::1', 'cheator08@gmail.com', 1, '2022-06-12 20:18:20', 1),
(85, '::1', 'cheator08@gmail.com', 1, '2022-06-13 16:04:33', 1),
(86, '::1', 'barangaja933@gmail.com', 9, '2022-06-13 21:54:52', 1),
(87, '::1', 'barangaja933@gmail.com', 9, '2022-06-14 06:30:29', 1),
(88, '::1', 'barangaja933@gmail.com', 9, '2022-06-14 18:31:19', 1),
(89, '::1', 'barangaja933@gmail.com', 9, '2022-06-15 01:20:28', 1),
(90, '::1', 'barangaja933@gmail.com', 9, '2022-06-18 02:17:01', 1),
(91, '::1', 'barangaja933@gmail.com', 9, '2022-06-18 11:20:54', 1),
(92, '::1', 'barangaja933@gmail.com', 9, '2022-06-18 21:39:39', 1),
(93, '::1', 'barangaja933@gmail.com', 9, '2022-06-19 10:15:37', 1),
(94, '::1', 'barangaja933@gmail.com', 9, '2022-06-19 16:38:40', 1),
(95, '::1', 'barangaja933@gmail.com', 9, '2022-06-20 03:42:37', 1),
(96, '::1', 'cheator08@gmail.com', 1, '2022-06-20 03:43:30', 1),
(97, '::1', 'barangaja933@gmail.com', 9, '2022-06-20 07:10:55', 1),
(98, '::1', 'barangaja933@gmail.com', 9, '2022-06-20 14:04:46', 1),
(99, '::1', 'spamdcbot@gmail.com', 2, '2022-06-20 16:40:46', 1),
(100, '::1', 'cheator08@gmail.com', 1, '2022-06-20 17:34:27', 1),
(101, '::1', 'barangaja933@gmail.com', 9, '2022-06-20 17:34:47', 1),
(102, '::1', 'cheator08@gmail.com', 1, '2022-06-21 00:35:09', 1),
(103, '::1', 'barangaja933@gmail.com', 9, '2022-06-21 00:45:19', 1),
(104, '::1', 'cheator08@gmail.com', 1, '2022-06-21 04:26:38', 1),
(105, '::1', 'barangaja933@gmail.com', 9, '2022-06-21 04:28:03', 1),
(106, '::1', 'cheator08@gmail.com', 1, '2022-06-21 06:10:19', 1),
(107, '::1', 'barangaja933@gmail.com', 9, '2022-06-21 06:11:20', 1),
(108, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:25:56', 1),
(109, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:27:49', 1),
(110, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:29:19', 1),
(111, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:29:52', 1),
(112, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:32:09', 1),
(113, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:32:24', 1),
(114, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:33:02', 1),
(115, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:33:52', 1),
(116, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:34:13', 1),
(117, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:38:12', 1),
(118, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:39:21', 1),
(119, '::1', 'barangaja933@gmail.com', 9, '2022-06-21 06:39:45', 1),
(120, '::1', 'barangaja933@gmail.com', 9, '2022-06-21 06:39:53', 1),
(121, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 06:45:05', 1),
(122, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 08:57:36', 1),
(123, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 11:22:08', 1),
(124, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 16:40:37', 1),
(125, '::1', 'cheator08@gmail.com', 1, '2022-06-21 16:41:06', 1),
(126, '::1', 'spamdcbot@gmail.com', 2, '2022-06-21 16:58:03', 1),
(127, '::1', 'barangaja933@gmail.com', 9, '2022-06-21 17:10:38', 1),
(128, '::1', 'barangaja933@gmail.com', 9, '2022-06-22 00:02:21', 1),
(129, '::1', 'barangaja933@gmail.com', 9, '2022-06-22 03:40:59', 1),
(130, '::1', 'barangaja933@gmail.com', NULL, '2022-06-22 03:43:00', 0),
(131, '::1', 'barangaja', NULL, '2022-06-22 03:44:44', 0),
(132, '::1', 'barangaja933@gmail.com', NULL, '2022-06-22 03:45:04', 0),
(133, '::1', 'barangaja', NULL, '2022-06-22 03:45:14', 0),
(134, '::1', 'barangaja933@gmail.com', NULL, '2022-06-22 03:45:35', 0),
(135, '::1', 'spamdcbot@gmail.com', 2, '2022-06-22 03:45:52', 1),
(136, '::1', 'barangaja933@gmail.com', NULL, '2022-06-22 15:20:44', 0),
(137, '::1', 'barangaja933@gmail.com', 9, '2022-06-22 15:20:57', 1),
(138, '::1', 'spamdcbot@gmail.com', 2, '2022-06-23 09:53:22', 1),
(139, '::1', 'spamdcbot@gmail.com', 2, '2022-06-23 16:55:12', 1),
(140, '::1', 'spamdcbot@gmail.com', 2, '2022-06-24 01:25:40', 1),
(141, '::1', 'spamdcbot', NULL, '2022-06-24 05:55:57', 0),
(142, '::1', 'spamdcbot@gmail.com', 2, '2022-06-24 05:56:10', 1),
(143, '::1', 'spamdcbot@gmail.com', 2, '2022-06-24 12:52:33', 1),
(144, '::1', 'spamdcbot@gmail.com', 2, '2022-06-24 19:59:08', 1),
(145, '::1', 'spamdcbot@gmail.com', 2, '2022-06-25 02:54:19', 1),
(146, '::1', 'spamdcbot', NULL, '2022-06-25 06:40:11', 0),
(147, '::1', 'spamdcbot@gmail.com', 2, '2022-06-25 06:41:03', 1),
(148, '::1', 'spamdcbot@gmail.com', 2, '2022-06-25 09:05:27', 1),
(149, '::1', 'spamdcbot@gmail.com', 2, '2022-06-25 16:12:22', 1),
(150, '::1', 'spamdcbot@gmail.com', 2, '2022-06-26 08:19:33', 1),
(151, '::1', 'spamdcbot@gmail.com', 2, '2022-06-26 17:03:42', 1),
(152, '::1', 'spamdcbot@gmail.com', 2, '2022-06-26 21:41:02', 1),
(153, '::1', 'barangaja933@gmail.com', NULL, '2022-06-27 09:14:30', 0),
(154, '::1', 'barangaja933@gmail.com', 9, '2022-06-27 09:16:14', 1),
(155, '::1', 'cheator08@gmail.com', 1, '2022-06-27 09:16:49', 1),
(156, '::1', 'spamdcbot@gmail.com', 2, '2022-06-27 17:01:57', 1),
(157, '::1', 'spamdcbot@gmail.com', 2, '2022-06-27 17:02:12', 1),
(158, '::1', 'spamdcbot@gmail.com', 2, '2022-06-28 01:07:20', 1),
(159, '::1', 'yaahnue8@gmail.com', 12, '2022-06-28 01:09:07', 0),
(160, '::1', 'spamdcbot@gmail.com', 2, '2022-06-28 01:11:06', 1),
(161, '::1', 'barangaja933@gmail.com', NULL, '2022-06-28 01:18:50', 0),
(162, '::1', 'barangaja933@gmail.com', 9, '2022-06-28 01:18:59', 1),
(163, '::1', 'cheator08@gmail.com', 1, '2022-06-28 01:19:22', 1),
(164, '::1', 'devoners9@gmail.com', 20, '2022-06-28 15:48:57', 0),
(165, '::1', 'devoners9@gmail.com', 20, '2022-06-28 15:49:23', 1),
(166, '::1', 'zaenabdul03@gmail.com', 10, '2022-06-28 18:37:01', 1),
(167, '::1', 'barangaja933@gmail.com', NULL, '2022-06-28 19:51:13', 0),
(168, '::1', 'spamdcbot@gmail.com', 2, '2022-06-28 19:51:27', 1),
(169, '::1', 'cheator08@gmail.com', 1, '2022-06-28 19:54:12', 1),
(170, '::1', 'cheator08@gmail.com', 1, '2022-06-29 06:36:06', 1),
(171, '::1', 'cheator08@gmail.com', 1, '2022-06-29 06:51:29', 1),
(172, '::1', 'spamdcbot@gmail.com', 2, '2022-06-29 06:56:29', 1),
(173, '::1', 'cheator08@gmail.com', 1, '2022-06-29 06:56:51', 1),
(174, '::1', 'devoners9@gmail.com', NULL, '2022-06-29 07:48:54', 0),
(175, '::1', 'devoners9@gmail.com', NULL, '2022-06-29 07:49:10', 0),
(176, '::1', 'devoners9@gmail.com', 21, '2022-06-29 07:49:21', 1),
(177, '::1', 'cheator08@gmail.com', 1, '2022-06-29 07:52:53', 1),
(178, '::1', 'cheator08@gmail.com', 1, '2022-06-29 13:26:10', 1),
(179, '::1', 'cheator08@gmail.com', NULL, '2022-06-29 13:42:17', 0),
(180, '::1', 'cheator08@gmail.com', 1, '2022-06-29 13:42:37', 1),
(181, '::1', 'minato', NULL, '2022-06-29 16:42:02', 0),
(182, '::1', 'minato', NULL, '2022-06-29 16:42:14', 0),
(183, '::1', 'devoners9@gmail.com', NULL, '2022-06-29 16:42:35', 0),
(184, '::1', 'cheator08@gmail.com', 1, '2022-06-29 16:42:43', 1),
(185, '::1', 'devoners9@gmail.com', 25, '2022-06-29 17:55:47', 1),
(186, '::1', 'cheator08@gmail.com', NULL, '2022-06-29 18:06:06', 0),
(187, '::1', 'cheator08@gmail.com', NULL, '2022-06-29 18:06:15', 0),
(188, '::1', 'cheator', NULL, '2022-06-29 18:06:40', 0),
(189, '::1', 'devoners9@gmail.com', NULL, '2022-06-29 18:06:48', 0),
(190, '::1', 'spamdcbot@gmail.com', 2, '2022-06-29 18:07:13', 1),
(191, '::1', 'spamdcbot', NULL, '2022-06-29 18:08:09', 0),
(192, '::1', 'cheator08@gmail.com', 1, '2022-06-29 18:09:50', 1),
(193, '::1', 'cheator08@gmail.com', NULL, '2022-06-29 19:51:53', 0),
(194, '::1', 'cheator08@gmail.com', 1, '2022-06-29 19:52:02', 1),
(195, '::1', 'devoners9@gmail.com', NULL, '2022-06-29 19:52:52', 0),
(196, '::1', 'devoners9@gmail.com', 25, '2022-06-29 20:11:29', 1),
(197, '::1', 'devoners9@gmail.com', NULL, '2022-06-29 20:13:00', 0),
(198, '::1', 'devoners9@gmail.com', 25, '2022-06-29 20:13:08', 1),
(199, '::1', 'cheator08@gmail.com', NULL, '2022-06-30 02:21:49', 0),
(200, '::1', 'cheator08@gmail.com', 1, '2022-06-30 02:21:59', 1),
(201, '::1', 'spamdcbot@gmail.com', 2, '2022-06-30 02:36:06', 1),
(202, '::1', 'cheator08@gmail.com', NULL, '2022-06-30 04:20:31', 0),
(203, '::1', 'cheator08@gmail.com', 1, '2022-06-30 04:20:38', 1),
(204, '::1', 'cheator08@gmail.com', NULL, '2022-07-01 21:55:36', 0),
(205, '::1', 'cheator08@gmail.com', 1, '2022-07-01 21:55:50', 1),
(206, '::1', 'cheator08@gmail.com', 1, '2022-07-02 01:22:46', 1),
(207, '::1', 'cheator08@gmail.com', 1, '2022-07-02 01:57:49', 1),
(208, '::1', 'devoners9@gmail.com', NULL, '2022-07-02 02:19:34', 0),
(209, '::1', 'devoners9@gmail.com', 25, '2022-07-02 02:19:44', 1),
(210, '::1', 'devoners9@gmail.com', NULL, '2022-07-02 05:15:40', 0),
(211, '::1', 'devoners9@gmail.com', 25, '2022-07-02 05:15:51', 1),
(212, '::1', 'cheator08@gmail.com', 1, '2022-07-02 12:54:43', 1),
(213, '::1', 'devoners9@gmail.com', NULL, '2022-07-02 13:13:15', 0),
(214, '::1', 'devoners9@gmail.com', NULL, '2022-07-02 13:13:31', 0),
(215, '::1', 'devoners9@gmail.com', NULL, '2022-07-02 13:13:39', 0),
(216, '::1', 'cheator08@gmail.com', 1, '2022-07-02 13:13:56', 1),
(217, '::1', 'devoners9@gmail.com', 25, '2022-07-02 13:16:53', 1),
(218, '::1', 'cheator08@gmail.com', 1, '2022-07-02 13:36:21', 1),
(219, '::1', 'devoners9@gmail.com', 25, '2022-07-02 20:56:34', 1),
(220, '::1', 'cheator08@gmail.com', 1, '2022-07-02 21:30:45', 1),
(221, '::1', 'cheator08@gmail.com', 1, '2022-07-03 22:45:22', 1),
(222, '::1', 'cheator08@gmail.com', NULL, '2022-07-03 22:45:35', 0),
(223, '::1', 'devoners9@gmail.com', 25, '2022-07-03 22:45:45', 1),
(224, '::1', 'cheator08@gmail.com', 1, '2022-07-03 22:58:43', 1),
(225, '::1', 'devoners9@gmail.com', 25, '2022-07-03 23:22:00', 1),
(226, '::1', 'cheator08@gmail.com', 1, '2022-07-04 03:24:37', 1),
(227, '::1', 'devoners9@gmail.com', 25, '2022-07-04 09:50:07', 1),
(228, '::1', 'cheator08@gmail.com', 1, '2022-07-04 10:00:02', 1),
(229, '::1', 'devoners9@gmail.com', 25, '2022-07-04 22:55:49', 1),
(230, '::1', 'devoners9@gmail.com', 25, '2022-07-04 23:00:35', 1),
(231, '::1', 'cheator08@gmail.com', 1, '2022-07-05 05:16:30', 1),
(232, '::1', 'devoners9@gmail.com', 25, '2022-07-05 07:47:04', 1),
(233, '::1', 'barangaja933@gmail.com', NULL, '2022-07-06 15:00:18', 0),
(234, '::1', 'devoners9@gmail.com', 25, '2022-07-06 15:00:28', 1),
(235, '::1', 'devoners9@gmail.com', 25, '2022-07-07 12:23:15', 1),
(236, '::1', 'devoners9@gmail.com', 25, '2022-07-07 14:21:38', 1),
(237, '::1', 'elfitra033@gmail.com', 26, '2022-07-07 15:37:44', 1),
(238, '::1', 'elfitra033@gmail.com', 31, '2022-07-07 16:05:59', 1),
(239, '::1', 'cheator08@gmail.com', 1, '2022-09-02 15:41:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'Manage All user'),
(2, 'manage-profile', 'Manage User Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'barangaja933@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0', '469279ff77c59a6de2365ba5b8e27874', '2022-04-18 15:23:06'),
(2, 'barangaja933@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0', '469279ff77c59a6de2365ba5b8e27874', '2022-04-18 15:23:20'),
(3, 'zaenabdul03@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'f25d2125afa7db4e5adc4f82b53a6469', '2022-06-28 18:36:00'),
(4, 'zaenabdul03@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'f25d2125afa7db4e5adc4f82b53a6469', '2022-06-28 18:36:16'),
(5, 'cheator08@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36', '388fe1f59e17082473f420a519828913', '2022-06-29 18:09:41'),
(6, 'devoners9@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36', '5523ac61ae58167c53df6baa24116d62', '2022-06-29 20:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `format_surat`
--

CREATE TABLE `format_surat` (
  `idformat` int(11) NOT NULL,
  `kop_img` varchar(255) DEFAULT NULL,
  `kop_img2` varchar(255) DEFAULT NULL,
  `kop_judul` varchar(255) DEFAULT NULL,
  `kop_judul2` varchar(255) DEFAULT NULL,
  `kop_alamat` varchar(255) DEFAULT NULL,
  `kop_telp` varchar(20) DEFAULT NULL,
  `kop_email` varchar(255) DEFAULT NULL,
  `kop_website` varchar(255) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nosurat` varchar(50) DEFAULT NULL,
  `hal` varchar(50) DEFAULT NULL,
  `pembuka` text DEFAULT NULL,
  `isinama` varchar(255) DEFAULT NULL,
  `isilahir` varchar(255) DEFAULT NULL,
  `isijenis` varchar(50) DEFAULT NULL,
  `isiktp` varchar(50) DEFAULT NULL,
  `isipekerjaan` varchar(255) DEFAULT NULL,
  `isiagama` varchar(25) DEFAULT NULL,
  `isialamat` varchar(255) DEFAULT NULL,
  `isitanggal` date DEFAULT NULL,
  `isitempat` varchar(255) DEFAULT NULL,
  `isiparagraf2` text DEFAULT NULL,
  `isiket` text DEFAULT NULL,
  `isiket2` text DEFAULT NULL,
  `isiket3` text DEFAULT NULL,
  `isiket4` text DEFAULT NULL,
  `penutup` text DEFAULT NULL,
  `nmpengesah` varchar(255) DEFAULT NULL,
  `ttdpengesah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `format_surat`
--

INSERT INTO `format_surat` (`idformat`, `kop_img`, `kop_img2`, `kop_judul`, `kop_judul2`, `kop_alamat`, `kop_telp`, `kop_email`, `kop_website`, `tempat`, `tanggal`, `nosurat`, `hal`, `pembuka`, `isinama`, `isilahir`, `isijenis`, `isiktp`, `isipekerjaan`, `isiagama`, `isialamat`, `isitanggal`, `isitempat`, `isiparagraf2`, `isiket`, `isiket2`, `isiket3`, `isiket4`, `penutup`, `nmpengesah`, `ttdpengesah`) VALUES
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pelaihari', '2022-07-13', NULL, NULL, 'Yang bertanda tangan dibawah ini :', 'Abdul Ghoni Zaen', 'Martapura, 14 September 2002', 'Laki - Laki', NULL, 'Programmer', 'Islam', 'JL. Tiang Aji RT 17B', NULL, NULL, 'Dengan ini menyatakan bahwa saya : :', 'Tidak Merokok', 'Tidak Narkoba', '', '', 'Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh kesadaran, tanpa paksaan dan tekanan dari pihak manapun. Apabila dikemudian hari terdapat sesuatu yang tidak sesuai dengan isi pernyataan ini, maka saya bersedia mendapatkan sanksi sesuai hukum yang berlaku.', 'zaen', NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pelaihari', '2022-07-08', NULL, NULL, 'Yang bertanda tangan dibawah ini :', 'Abdul Ghoni Zaen', 'Martapura, 14 September 2002', 'Laki - Laki', NULL, 'Programmer', 'Islam', 'JL. Tiang Aji RT 17B', NULL, NULL, 'Dengan ini menyatakan bahwa saya mengundurkan diri dari Politeknik Negeri Tanah Laut:', ' ', ' ', '', '', 'Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh kesadaran, tanpa paksaan dan tekanan dari pihak manapun. Apabila dikemudian hari terdapat sesuatu yang tidak sesuai dengan isi pernyataan ini, maka saya bersedia mendapatkan sanksi sesuai hukum yang berlaku.', 'zaen', NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pelaihari', '2022-07-14', NULL, NULL, 'Yang bertanda tangan dibawah ini :', 'Abdul Ghoni Zaen', 'Martapura, 14 September 2002', 'Laki - Laki', NULL, 'Programmer', 'Islam', 'JL. Tiang Aji RT 17B', NULL, NULL, 'Dengan ini menyatakan bahwa saya : :', 'Tidak Merokok', 'Tidak Narkoba', '', '', 'Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dengan penuh kesadaran, tanpa paksaan dan tekanan dari pihak manapun. Apabila dikemudian hari terdapat sesuatu yang tidak sesuai dengan isi pernyataan ini, maka saya bersedia mendapatkan sanksi sesuai hukum yang berlaku.', 'zaen', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id_jenis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nm_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id_jenis`, `id_kategori`, `nm_jenis`) VALUES
(1, 1, 'Surat Pernyataan Diri'),
(2, 1, 'Surat Keterangan Penghasilan Orang Tua'),
(3, 1, 'Surat Pernyataan Cerai'),
(4, 1, 'Surat Kematian'),
(5, 1, 'Surat Permohonan Pemblokiran Rekening Bank'),
(6, 2, 'Surat Keterangan Usaha (SKU)'),
(7, 2, 'Surat Perjanjian Karyawan Tidak Mengulangi Kesalahan'),
(8, 2, 'Surat Permohonan Izin Cuti Kerja'),
(9, 2, 'Surat Pengalihan Hak Cipta'),
(10, 2, 'Surat Peringatan (SP)'),
(11, 3, 'Surat Undangan Rapat Sekolah'),
(12, 3, 'Surat Permohonan Dana Kegiatan'),
(13, 3, 'Surat Keterangan Penghasilan Orang Tua'),
(14, 3, 'Surat Keterangan Aktif Sekolah'),
(15, 3, 'Surat Peringatan (SP)');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_surat`
--

CREATE TABLE `kategori_surat` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_surat`
--

INSERT INTO `kategori_surat` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Surat Umum'),
(2, 'Surat Bisnis dan Pekerjaan'),
(3, 'Surat Sekolah & Kampus');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1650060884, 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idformat` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_jenis`, `id`, `idformat`, `created_at`, `updated_at`) VALUES
(14, 1, 25, 14, '2022-07-02 02:21:44', '2022-07-02 02:21:44'),
(15, 1, 26, 15, '2022-07-07 15:40:00', '2022-07-07 15:40:00'),
(16, 1, 31, 16, '2022-07-07 16:07:09', '2022-07-07 16:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_img` varchar(255) NOT NULL DEFAULT 'default.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_img`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'cheator08@gmail.com', 'cheator', 'Abdul Ghoni Zaen', 'default_1.png', '$2y$10$0AkWyrIz28EBm8t8oMgmEO8VxY2c5IyUElLM3k/ZskHdaWg5Jk4TG', NULL, '2022-06-29 18:09:42', NULL, NULL, NULL, NULL, 1, 0, '2022-04-16 16:02:40', '2022-07-02 13:14:21', NULL),
(2, 'spamdcbot@gmail.com', 'spamdcbot', 'Khaical', 'default.png', '$2y$10$uob4zb17IlnIj09Dfr1MQOGIZlDzhgMn9Bq976NpjgdQrgMA.ZCI6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-04-17 02:07:11', '2022-06-30 04:38:57', NULL),
(9, 'barangaja933@gmail.com', 'barangaja', 'Akbar', 'default.png', '$2y$10$j0fcOFrre6vc2CsEiY7bv.TgXX328tj99osCGQmTZDlzdxQ.5XlL6', '4c8af6f4784ff85fa1ae49d3bb7658d0', '2022-04-18 15:23:21', '2022-07-02 18:24:19', NULL, NULL, NULL, 1, 0, '2022-04-18 07:58:02', '2022-07-02 17:24:19', NULL),
(10, 'zaenabdul03@gmail.com', 'Abdul Zaen', '', 'nasi.jpg', '$2y$10$AhQLWQBSKqZxblJyWkHUHOIYlchmkfQi85cTYMhrd3Jsc7WvK.DaO', NULL, '2022-06-28 18:36:18', NULL, NULL, NULL, NULL, 1, 0, '2022-04-21 00:34:14', '2022-07-03 23:16:29', NULL),
(31, 'elfitra033@gmail.com', 'hakim', NULL, 'default.png', '$2y$10$HDimeYWNocRmqZxYMB0EUO6gaolx7u.p9Bi2WnFq79WtnBJrHPkd.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-07 16:05:19', '2022-07-07 16:05:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `format_surat`
--
ALTER TABLE `format_surat`
  ADD PRIMARY KEY (`idformat`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `fk_id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `fk_id_jenis` (`id_jenis`),
  ADD KEY `fk_id_format` (`idformat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `format_surat`
--
ALTER TABLE `format_surat`
  MODIFY `idformat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_surat` (`id_kategori`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `fk_id_format` FOREIGN KEY (`idformat`) REFERENCES `format_surat` (`idformat`),
  ADD CONSTRAINT `fk_id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_surat` (`id_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
