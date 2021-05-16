-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 12:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservicesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `image`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'adminnn', '5464.jpg', 'admin@gmail.com', '$2y$10$jLDPcBTCPooFsQ/WbKDcrODIMWtfm970TBiuc5TqFsoAfSBI0V612', '2021-03-13 18:07:36', '2021-03-15 02:36:59'),
(4, 'Benchill Well', '52173.jpg', 'ben@gmail.com', '$2y$10$ndMzVIbCFIUTSzL0IWXLK.TUeXyGAdYhLXQ4A94IIWuE4.KRerEry', '2021-03-16 12:57:01', '2021-03-16 12:57:01'),
(6, 'Dum', '24638.png', 'kimphung11499@gmail.com', '$2y$10$6yFgkfMMFcLFVCVgm8L6cO7ipAG6A6xm/5YuVV6MoencsC3yHOqbK', '2021-05-13 00:35:23', '2021-05-13 00:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `customer_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Chat luong Tot, nhan vien  nhiet tinh', 0, '2021-05-13 07:56:31', '2021-05-13 07:56:31'),
(2, 2, 'Abc', 0, '2021-05-13 07:57:12', '2021-05-13 07:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_reorder` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_password`, `customer_reorder`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Benchill Well', 'ben@gmail.com', '0976517103', 'Binh Duong', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, '2021-05-11 20:27:04', '2021-05-11 20:27:04'),
(2, 'Khanh', 'khanhnguyenkt102@gmai.com', '123456789', 'Bimnh duong', '45f9dcfcb8210b4f858e89851804a358', 0, 0, '2021-05-13 07:25:53', '2021-05-13 07:25:53'),
(3, '1', 'kimphung11499@gmail.com', '123', '123', '4efe677fb191a78901f3958f4ca10475', 0, 0, '2021-05-13 10:15:25', '2021-05-13 10:15:25'),
(4, 'khanh', 'khanhnv100398@gmail.com', '123456789', 'Binh Duong', '291b53ef662e7af0ca98a55d53fd40c2', 0, 0, '2021-05-13 13:29:40', '2021-05-13 13:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worklist` int(11) NOT NULL,
  `majobId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `image`, `email`, `password`, `idcard`, `birth`, `address`, `phone`, `salary`, `worklist`, `majobId`, `status`, `created_at`, `updated_at`) VALUES
(12, 'khanh', '77731.png', 'khanhnguyenkt102@gmai.com', '$2y$10$H2Kx3vChG3uOQRa34GKmE.1JiBlioabIYtqEebTsWkaRmTP1/WZgG', '123', '2021-05-10', 'Binh Duong', '0976517102', '20000', 0, '1,3,5', 1, '2021-05-13 06:02:16', '2021-05-13 06:02:16'),
(16, 'Benchill Well', '37901.png', 'ben@gmail.com', '$2y$10$KtdTfqaQ8N/tUscd.FNqi.ybGSXlcMUwzaFWWQ6tKprdTroC/QnYq', '123456', '2021-05-11', 'Binh Duong', '0976517102', '20000', 0, '1,3,4', 2, '2021-05-13 18:09:33', '2021-05-13 18:09:33'),
(17, 'khanh 2', '10629.png', 'khanhnv100398@gmail.com', '$2y$10$18ld9hBiwEE4OGEHcagpguPvNFqYaRnVBX5Lm.iCXyPTagsOgD3/O', '285576050', '2021-05-04', 'HCM', '0976517103', '10000', 0, '2,3,5', 1, '2021-05-13 18:11:21', '2021-05-13 18:11:21'),
(18, 'Iron Man', '21611.png', 'ironman@gmail.com', '$2y$10$HpNji.s0Mxe/u6dVkmUlauFXVPe3C0fRlf/wpvcBlOqKnhk0J1/1q', '1234567', '2021-05-11', 'Phu Hoa', '12345678910', '700000', 0, '1,2,5', 2, '2021-05-13 18:13:35', '2021-05-13 18:13:35');

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `select_service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL,
  `paid_status` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `select_service_name`, `service_price`, `admin_id`, `employee_id`, `payment_type`, `paid_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'khanh', 'khanh@gmail.com', '0976517102', 'Binh duong', '5', '70000', 1, NULL, 2, 2, 2, '2021-04-07 10:42:36', '2021-04-07 10:42:36'),
(2, 'khah', 'khanh@gmail.com', '131321', 'Binh Duong', '1,2,3', '20000,50000,90000', 1, NULL, 1, 1, 1, '2021-04-08 01:44:12', '2021-04-08 01:44:12'),
(5, 'khah', 'khanh@gmail.com', '131321', 'Binh Duong', '1,3,6', '5000,10000,69996', 1, NULL, 1, 2, 2, '2021-04-26 19:43:53', '2021-04-26 19:43:53'),
(6, 'khah', 'khanh@gmail.com', '131321', 'Binh Duong', '1,3,6', '50000,23000,48000', 1, NULL, 1, 1, 1, '2021-04-26 20:36:56', '2021-04-26 20:36:56'),
(13, '1', 'khanh@gmail.com', '3', '4', '1,2,3,4', '100,200,300,398', 6, '13,12,15', 2, 2, 2, '2021-05-13 10:08:16', '2021-05-13 10:08:16'),
(14, 'Khanh E', 'khanhnv100398@gmail.com', '0976517102', 'Binh Duong', '2,4', '50000,99999', 1, '17,16', 2, 1, 1, '2021-05-13 18:27:31', '2021-05-13 18:27:31'),
(15, 'khanh', 'khanhnv100398@gmail.com', '123456789', 'Binh Duong', '3', '2000', 1, '17', 2, 1, 1, '2021-05-13 19:07:12', '2021-05-13 19:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `majobs`
--

CREATE TABLE `majobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majobs`
--

INSERT INTO `majobs` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Dọn nhà', 'donnha', NULL, NULL),
(2, 'Diệt con trùng', 'dietcontrung', NULL, NULL),
(3, 'Sửa đồ gia dụng', 'suadogiadung', NULL, NULL),
(4, 'Bảo Dưỡng Máy Lạnh', 'baoduongmaylanh', NULL, NULL),
(5, 'Giặc Thảm, Ghé, Sofa', 'giacthamghe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_link`, `menu_desc`, `menu_status`, `created_at`, `updated_at`) VALUES
(1, 'Đặt Dịch Vụ', 'http://abc', 'đặt dịch vụ', 0, '2021-03-17 07:19:32', '2021-03-23 18:51:39'),
(2, 'Giới Thiệuuuu', 'http://gioithieu', 'Giới thiệu', 1, '2021-03-17 07:22:27', '2021-03-23 18:31:20'),
(5, 'Giới Thiệu', 'http://abc', 'dvf', 0, '2021-03-23 19:04:13', '2021-03-23 19:04:13'),
(6, 'asd', 'http://abc', 'asd', 0, '2021-03-23 19:05:18', '2021-03-23 19:05:18');

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
(4, '2021_03_13_091130_create_admins_table', 1),
(5, '2021_03_16_085042_create_employees_table', 2),
(6, '2021_03_16_210259_create_services_table', 3),
(7, '2021_03_17_124531_create_menus_table', 4),
(8, '2021_03_18_091653_create_orders_table', 5),
(9, '2021_03_18_093258_create_orders_table', 6),
(10, '2021_03_28_073344_create_employees_table', 7),
(11, '2021_03_29_060906_create_majobs_table', 8),
(12, '2021_03_29_080454_create_employees_table', 9),
(13, '2021_03_29_080615_create_majobs_table', 10),
(14, '2021_03_29_095819_create_employees_table', 11),
(15, '2021_04_07_155722_create_invoices_table', 12),
(16, '2021_05_03_034747_create_work_lists_table', 13),
(17, '2021_05_12_024802_create_customers_table', 14),
(18, '2021_05_13_145006_create_comments_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `order_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `service`, `emp_id`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 'khanh', 'khanh@gmail.com', '0976517102', 'Binh duong', '5', NULL, 2, '2021-03-18 03:22:40', '2021-04-08 04:29:02'),
(2, 'Khanh', 'khanh@gmail.com', '1231', 'aaa', '2,4', NULL, 2, '2021-04-06 08:37:56', '2021-04-07 10:39:55'),
(3, 'khah', 'khanh@gmail.com', '131321', 'Binh Duong', '1,3,6', NULL, 2, '2021-04-06 08:38:54', '2021-04-26 20:36:56'),
(4, 'Dum', 'dum@gmail.com', '1234568', 'Binh Duong', '1,4', NULL, 2, '2021-04-26 20:14:19', '2021-05-01 08:07:43'),
(5, 'Khanh Nguyen', 'khanhnguyen@gmail.com', '0976517102', 'HCM city', '2,5', NULL, 2, '2021-04-27 09:08:00', '2021-05-02 20:25:41'),
(6, 'Shisedo', 'shisedo@gmail.com', '0976517102', 'HCM city', '2,5', NULL, 1, '2021-04-27 09:10:20', '2021-05-02 20:45:09'),
(7, 'Benchill Well', 'benchill@gmail.com', '0976517102', 'Binh Duong', '1,6', NULL, 2, '2021-04-27 09:21:01', '2021-05-03 01:23:29'),
(8, 'Ankantara', 'ankan@gmail.com', '0697512543', 'Dalas', '2,4', NULL, 2, '2021-04-27 09:24:55', '2021-05-04 00:22:25'),
(9, 'Shin', 'shin@gmail.com', '0976517102', 'Ha Noi', '2,5', NULL, 2, '2021-04-27 09:34:28', '2021-05-05 02:40:31'),
(10, 'aron man', 'aron@gmail.com', '12345648', 'HCM', '2,4', NULL, 0, '2021-04-27 10:26:42', '2021-04-27 10:26:42'),
(11, 'Catona', 'catona@gmail.com', '123456448', 'Da Nang', '1,6', NULL, 0, '2021-04-27 10:37:22', '2021-04-27 10:37:22'),
(12, 'Akali', 'akali@gmail.com', '976517102', 'Vung Tau City', '2,6', NULL, 0, '2021-04-27 19:04:54', '2021-04-27 19:04:54'),
(13, 'Spider', 'spider@gmail.com', '0976517102', 'Binh Phuoc', '1,5', NULL, 0, '2021-04-27 19:30:57', '2021-04-27 19:30:57'),
(14, '1', 'khanh@gmail.com', '3', '4', '1,2,3,4', NULL, 1, '2021-05-04 00:15:35', '2021-05-13 10:08:16'),
(15, '1', '12@gmail.com', '3', '4', '4,5,6', NULL, 0, '2021-05-06 01:33:47', '2021-05-06 01:33:47'),
(16, 'Nguyen Van Khanh', 'khanhnguyenkt102@gmail.com', '0976517120', 'Binh Duong', '3,4', NULL, 0, '2021-05-06 18:43:34', '2021-05-06 18:43:34'),
(17, 'Nguyen Van Khanh', 'khanh@gmail.com', '123456789', 'Binh duong', '3,4', NULL, 0, '2021-05-10 23:39:11', '2021-05-10 23:39:11'),
(18, 'Benchill Well', 'benchill@gmail.com', '0976517102', 'HCM', '5', 5, 0, '2021-05-11 19:45:49', '2021-05-11 19:45:49'),
(19, 'Dum', 'dum@gmail.com', '123456789', 'Binh Duong', '2,4', NULL, 0, '2021-05-12 22:12:29', '2021-05-12 22:12:29'),
(20, 'Khanh', 'khanhnguyenkt102@gmai.com', '123456789', 'Bimnh duong', '3,5', NULL, 0, '2021-05-13 07:39:05', '2021-05-13 07:39:05'),
(21, 'Khanh', 'khanhnguyenkt102@gmai.com', '123456789', 'Bimnh duong', '1,2,3,4', NULL, 0, '2021-05-13 10:12:59', '2021-05-13 10:12:59'),
(22, 'Khanh', 'khanhnguyenkt102@gmai.com', '123456789', 'Bimnh duong', '5', 13, 0, '2021-05-13 10:13:42', '2021-05-13 10:13:42'),
(23, '1', 'kimphung11499@gmail.com', '123', '123', '5', 12, 0, '2021-05-13 10:16:01', '2021-05-13 10:16:01'),
(24, 'Khanh E', 'khanhnv100398@gmail.com', '0976517102', 'Binh Duong', '2,4', NULL, 2, '2021-05-13 18:25:34', '2021-05-13 18:27:31'),
(25, 'khanh', 'khanhnv100398@gmail.com', '123456789', 'Binh Duong', '3', 16, 2, '2021-05-13 19:04:23', '2021-05-13 19:07:12');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_image`, `service_icon`, `service_desc`, `service_detail`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 'Dọn Nhà Theo Giờ', '84225.jpg', 'fa fa-calendar-check-o', 'Vệ sinh tại nhà với các gói dịch vụ và thời gian linh hoạt', 'Vệ sinh tại nhà với các gói dịch vụ và thời gian linh hoạt', 1, '2021-03-16 17:40:48', '2021-04-10 21:23:34'),
(2, 'Diệt Côn Trùng', '48568.jpg', 'fa fa-bug', 'Tiêu diệt các loại côn trùng gây hại phổ biến như: muỗi, gián, dĩn...', NULL, 0, '2021-03-16 17:58:20', '2021-03-16 19:47:24'),
(3, 'Sửa Đồ Gia Dụng', '11030.jpg', 'fa fa-legal', 'Sửa chữa tại nhà các thiết bị gia dụng, đồ dùng gia đình', 'Sửa chữa tại nhà các thiết bị gia dụng, đồ dùng gia đình', 1, '2021-03-16 18:02:56', '2021-03-16 18:02:56'),
(4, 'Bảo Dưỡng Máy Lạnh', '46112.jpg', 'fab fa-envira', 'Bảo dưỡng hệ thống điều hòa gia đình, kiểm tra, vệ sinh dàn nóng lạnh', 'Bảo dưỡng hệ thống điều hòa gia đình, kiểm tra, vệ sinh dàn nóng lạnh', 1, '2021-03-16 18:11:40', '2021-05-11 21:26:58'),
(5, 'Giặc Thảm, Ghé, Sofa', '28618.jpg', 'fa fa-home', 'Vệ sinh ghế sofa, thảm tại nhà bằng các máy móc chuyên dụng', 'Vệ sinh ghế sofa, thảm tại nhà bằng các máy móc chuyên dụng', 1, '2021-03-16 18:19:08', '2021-03-16 18:19:08'),
(9, 'Vệ Sinh Công Nghiệp', '42209.jpg', 'far fa-building', 'Vệ sinh công trình vừa hoàn thành', 'Vệ sinh công trình vừa hoàn thành', 1, '2021-05-13 18:22:08', '2021-05-13 18:22:08');

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

-- --------------------------------------------------------

--
-- Table structure for table `work_lists`
--

CREATE TABLE `work_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_lists`
--

INSERT INTO `work_lists` (`id`, `employee_id`, `service_id`, `time_end`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, '2,5', '', 1, 'Binh Duong', '2021-05-02 22:25:13', '2021-05-03 00:43:03'),
(2, 3, '2,5', '', 0, 'Binh Duong', '2021-05-02 22:25:13', '2021-05-02 22:25:13'),
(3, 2, '2,4', '', 0, 'HCM', '2021-05-02 22:50:36', '2021-05-02 22:50:36'),
(4, 5, '1,6', '', 1, 'Binh Duong', '2021-05-03 01:23:29', '2021-05-03 01:27:06'),
(5, 5, '2,4', '', 0, 'Dalas', '2021-05-04 00:22:25', '2021-05-04 00:22:25'),
(6, 5, '2,5', '', 0, 'Ha Noi', '2021-05-05 02:40:31', '2021-05-05 02:40:31'),
(7, 13, '1,2,3,4', '', 1, '4', '2021-05-13 10:08:16', '2021-05-13 10:12:12'),
(8, 12, '1,2,3,4', '', 0, '4', '2021-05-13 10:08:16', '2021-05-13 10:08:16'),
(9, 15, '1,2,3,4', '', 0, '4', '2021-05-13 10:08:16', '2021-05-13 10:08:16'),
(10, 17, '2,4', '', 1, 'Binh Duong', '2021-05-13 18:27:31', '2021-05-13 18:48:01'),
(11, 16, '2,4', '', 0, 'Binh Duong', '2021-05-13 18:27:31', '2021-05-13 18:27:31'),
(12, 17, '3', '', 1, 'Binh Duong', '2021-05-13 19:07:12', '2021-05-13 19:08:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `majobs`
--
ALTER TABLE `majobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_lists`
--
ALTER TABLE `work_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `majobs`
--
ALTER TABLE `majobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_lists`
--
ALTER TABLE `work_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
