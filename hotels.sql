-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 02:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_info`
--

CREATE TABLE `additional_info` (
  `id` int(250) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `additional_req` text DEFAULT NULL,
  `dietary_req` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional_info`
--

INSERT INTO `additional_info` (`id`, `booking_id`, `details`, `additional_req`, `dietary_req`, `created_at`, `updated_at`) VALUES
(8, 22, 'jkdfghdfkghdf', 'fdkgfdjkgjdf', 'fdkndfkjdkkl', '2021-07-09 03:16:35', '2021-07-09 03:16:35'),
(9, 23, 'dfsdfsdfsf', 'dsfsdfsd', 'dfdd', '2021-07-09 03:25:10', '2021-07-09 03:25:10'),
(10, 25, 'cdscdscdc', 'dcdcdcdcd', 'dcdcdcdc', '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(11, 26, 'jhdscjhsdc', 'kdjscdskjcd', 'dsjnsdjkndjks', '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(12, 27, 'hhjkl', 'gvjhbjknkm', 'jhkl', '2021-07-09 06:46:50', '2021-07-09 06:46:50'),
(13, 28, 'hjklm', 'jkklm', 'hjk', '2021-07-09 07:00:50', '2021-07-09 07:00:50'),
(14, 29, 'tyuijiko', 'tyuguhj', 'fthjk', '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(15, 30, 'hgvjhbjnkm', 'ffghjk', 'ftfhjk', '2021-07-09 07:24:43', '2021-07-09 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(250) NOT NULL,
  `traveling_from` varchar(500) DEFAULT NULL,
  `arrivel_at` varchar(500) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `travellers` varchar(250) DEFAULT NULL,
  `adult` int(250) DEFAULT NULL,
  `children` int(250) DEFAULT NULL,
  `room` int(250) DEFAULT NULL,
  `child1_age` int(250) DEFAULT NULL,
  `child2_age` int(250) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `traveling_from`, `arrivel_at`, `check_in`, `travellers`, `adult`, `children`, `room`, `child1_age`, `child2_age`, `total_price`, `created_at`, `updated_at`) VALUES
(8, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:23:57', '2021-07-09 01:23:57'),
(9, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:28:58', '2021-07-09 01:28:58'),
(10, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:43:39', '2021-07-09 01:43:39'),
(11, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:44:35', '2021-07-09 01:44:35'),
(12, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:48:03', '2021-07-09 01:48:03'),
(13, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:49:34', '2021-07-09 01:49:34'),
(14, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:50:10', '2021-07-09 01:50:10'),
(15, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:55:39', '2021-07-09 01:55:39'),
(16, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:59:09', '2021-07-09 01:59:09'),
(17, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 01:59:50', '2021-07-09 01:59:50'),
(18, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 02:01:36', '2021-07-09 02:01:36'),
(19, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 02:03:24', '2021-07-09 02:03:24'),
(20, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 02:09:07', '2021-07-09 02:09:07'),
(21, 'Afghanistan', 'London City', '1970-01-01', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 02:09:39', '2021-07-09 02:09:39'),
(22, 'Afghanistan', 'London City', '2021-09-07', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 03:16:35', '2021-07-09 03:16:35'),
(23, 'Afghanistan', 'London City', '2021-09-07', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 03:25:10', '2021-07-09 03:25:10'),
(24, 'Brazil', 'London City', '2021-07-23', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 05:02:11', '2021-07-09 05:02:11'),
(25, 'Brazil', 'London City', '2021-07-23', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(26, 'Brazil', 'London City', '2021-07-23', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(27, 'Argentina', 'London Heathrow', '2021-07-09', '1 Room(1 Adults,2 Children)', 1, 2, 1, 6, 9, NULL, '2021-07-09 06:46:49', '2021-07-09 06:46:49'),
(28, 'Dominican Republic', 'London Heathrow', '2021-07-09', '1 Room(2 Adults,2 Children)', 2, 2, 1, 10, 10, NULL, '2021-07-09 07:00:50', '2021-07-09 07:00:50'),
(29, 'Afghanistan', 'Bristol', '2021-07-16', '1 Room(2 Adults,1 Children)', 2, 1, 1, 10, 10, NULL, '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(30, 'Botswana', 'Edinburgh', '2021-07-16', '1 Room(2 Adults,2 Children)', 2, 2, 1, 7, 6, NULL, '2021-07-09 07:24:43', '2021-07-09 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(250) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `address1` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `postal_code` char(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `booking_id`, `address1`, `address2`, `city`, `postal_code`, `email`, `phone`, `title`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(4, 8, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'jowar', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:23:57', '2021-07-09 01:23:57'),
(5, 9, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'jowar', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:28:58', '2021-07-09 01:28:58'),
(6, 10, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfghfhg', 'Bunair', '19260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:43:39', '2021-07-09 01:43:39'),
(7, 11, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfghfhg', 'Bunair', '19260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:44:35', '2021-07-09 01:44:35'),
(8, 12, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'nvmhb', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:48:03', '2021-07-09 01:48:03'),
(9, 13, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'nvmhb', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:49:34', '2021-07-09 01:49:34'),
(10, 14, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'nvmhb', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:50:10', '2021-07-09 01:50:10'),
(11, 15, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfdfgdhghfgf', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:55:39', '2021-07-09 01:55:39'),
(12, 16, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfdfgdhghfgf', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:59:09', '2021-07-09 01:59:09'),
(13, 17, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfdfgdhghfgf', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 01:59:50', '2021-07-09 01:59:50'),
(14, 18, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfdfgdhghfgf', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 02:01:36', '2021-07-09 02:01:36'),
(15, 19, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfgfnhj', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 02:03:24', '2021-07-09 02:03:24'),
(16, 20, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfgfnhj', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 02:09:07', '2021-07-09 02:09:07'),
(17, 21, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'gfgfnhj', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 02:09:39', '2021-07-09 02:09:39'),
(18, 22, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'dhjgfjdfjhdf', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 03:16:35', '2021-07-09 03:16:35'),
(19, 23, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'ndfbhdfj', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 03:25:10', '2021-07-09 03:25:10'),
(20, 24, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'djkhsdjk', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 05:02:11', '2021-07-09 05:02:11'),
(21, 25, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'djkhsdjk', 'Bunair', '260', 'umarwahab672@gmail.com', '3459161916', NULL, 'Umar', 'Wahab', '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(22, 26, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'jhdsbcjsd', 'Bunair', '260', 'umarwahab672@gmail.com', '+933459161916', NULL, 'Umar', 'Wahab', '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(23, 27, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'nbbvjh', 'Bunair', '260', 'umarwahab672@gmail.com', '+933459161916', NULL, 'Umar', 'Wahab', '2021-07-09 06:46:49', '2021-07-09 06:46:49'),
(24, 28, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'fghgjhjk', 'Bunair', '260', 'umarwahab672@gmail.com', '+933459161916', NULL, 'Umar', 'Wahab', '2021-07-09 07:00:50', '2021-07-09 07:00:50'),
(25, 29, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'ghfgxjshfj', 'Bunair', '260', 'umarwahab672@gmail.com', '+933459161916', NULL, 'Umar', 'Wahab', '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(26, 30, 'Village Katkala district Buner po dagger tahsil daggar  countr', 'ghdjdfkl', 'Bunair', '260', 'umarwahab672@gmail.com', '+933459161916', NULL, 'Umar', 'Wahab', '2021-07-09 07:24:43', '2021-07-09 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(250) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `passport_number` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `booking_id`, `title`, `first_name`, `last_name`, `passport_number`, `created_at`, `updated_at`) VALUES
(3, 10, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 01:43:39', '2021-07-09 01:43:39'),
(4, 11, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 01:44:36', '2021-07-09 01:44:36'),
(5, 22, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 03:16:35', '2021-07-09 03:16:35'),
(6, 22, 'MR', 'Umafdf', 'fdfdff', 'pak432423', '2021-07-09 03:16:35', '2021-07-09 03:16:35'),
(7, 23, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 03:25:11', '2021-07-09 03:25:11'),
(8, 23, 'MR', 'dfds', 'fsdfsdf', 'pak432423', '2021-07-09 03:25:11', '2021-07-09 03:25:11'),
(9, 25, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(10, 25, 'MR', 'sdcsd', 'dcdscsd', 'pak432423', '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(11, 26, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(12, 26, 'MR', 'dcsd', 'ddsd', 'pak432423', '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(13, 27, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 06:46:50', '2021-07-09 06:46:50'),
(14, 28, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 07:00:51', '2021-07-09 07:00:51'),
(15, 28, 'MR', 'hgjk', 'vhjk', 'pak432423', '2021-07-09 07:00:51', '2021-07-09 07:00:51'),
(16, 29, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(17, 29, 'MR', 'jhvjk', 'jkdfvkdf', 'pak432423', '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(18, 30, 'MR', 'Umar', 'Wahab', 'd4545', '2021-07-09 07:24:44', '2021-07-09 07:24:44'),
(19, 30, 'MR', 'hgfhjkl', 'ghjj', 'pak432423', '2021-07-09 07:24:44', '2021-07-09 07:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(250) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `card_number` varchar(500) DEFAULT NULL,
  `expiry_date` varchar(500) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `booking_id`, `card_number`, `expiry_date`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(4, 8, '4545 4214 5466 4646', NULL, 'Umar', 'Wahab', '2021-07-09 01:23:57', '2021-07-09 01:23:57'),
(5, 9, '4545 4214 5466 4646', NULL, 'Umar', 'Wahab', '2021-07-09 01:28:59', '2021-07-09 01:28:59'),
(6, 10, '3131 3212 3123 123', NULL, 'Umar', 'Wahab', '2021-07-09 01:43:39', '2021-07-09 01:43:39'),
(7, 11, '3131 3212 3123 123', NULL, 'Umar', 'Wahab', '2021-07-09 01:44:35', '2021-07-09 01:44:35'),
(8, 12, '5454 5612 4512 1547', NULL, 'Umar', 'Wahab', '2021-07-09 01:48:03', '2021-07-09 01:48:03'),
(12, 22, '5444 5414 1234 5678', '2/21', 'Umar', 'Wahab', '2021-07-09 03:16:35', '2021-07-09 03:16:35'),
(13, 23, '4565 6465 4564 6464', '2/21', 'Umar', 'Wahab', '2021-07-09 03:25:10', '2021-07-09 03:25:10'),
(14, 25, '4564 5645 6456 4654', '1/21', 'Umar', 'Wahab', '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(15, 26, '5456 4564 5641 5564', '1/21', 'Umar', 'Wahab', '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(16, 27, '5654 5156 1446 5156', '7/21', 'Umar', 'Wahab', '2021-07-09 06:46:50', '2021-07-09 06:46:50'),
(17, 28, '4665 4654 6564 6456', '2/23', 'Umar', 'Wahab', '2021-07-09 07:00:50', '2021-07-09 07:00:50'),
(18, 29, '5565 6456 4566 1646', '1/22', 'Umar', 'Wahab', '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(19, 30, '5454 6468 4841 5646', '4/23', 'Umar', 'Wahab', '2021-07-09 07:24:43', '2021-07-09 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(250) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `budget` float DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `platform` varchar(500) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `start_date`, `end_date`, `budget`, `type`, `status`, `platform`, `details`, `created_at`, `updated_at`) VALUES
(3, 'airoplane', '1970-01-13', '1970-01-06', 555.66, 'Fixed Price', 'Pending', 'Upwork', 'about travel', '2021-06-28 06:57:38', '2021-07-03 01:26:03'),
(5, 'E-commerce', '1970-01-01', '1970-01-01', 10000, 'Fixed Price', 'Pending', 'Upwork', 'it is all about ecommerce project you should need to developed a g0od ecommerce platform world wide and then to break', '2021-06-29 06:46:05', '2021-07-02 04:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(250) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `flight_number` varchar(500) DEFAULT NULL,
  `terminal_number` varchar(500) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `booking_id`, `flight_number`, `terminal_number`, `arrival_date`, `arrival_time`, `created_at`, `updated_at`) VALUES
(21, 25, '15gh', 'cfg86', '2021-07-16', '12:22:00', '2021-07-09 05:02:34', '2021-07-09 05:02:34'),
(22, 26, '15gh', 'cfg86', '2021-07-13', '12:32:00', '2021-07-09 05:24:15', '2021-07-09 05:24:15'),
(23, 27, '15gh', 'cfg86', '2021-07-13', '12:22:00', '2021-07-09 06:46:50', '2021-07-09 06:46:50'),
(24, 28, '15gh', 'cfg86', '2021-07-11', '12:34:00', '2021-07-09 07:00:50', '2021-07-09 07:00:50'),
(25, 29, '15gh', 'cfg86', '2021-07-19', '12:34:00', '2021-07-09 07:20:46', '2021-07-09 07:20:46'),
(26, 30, '15gh', 'cfg86', '2021-07-12', '12:34:00', '2021-07-09 07:24:43', '2021-07-09 07:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(500) NOT NULL,
  `role_access` text DEFAULT NULL,
  `access` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_title`, `role_access`, `access`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', 'admin/employee,admin/saveemployee,admin/employees,admin/employeedetail', '2019-06-20 07:24:54', '2019-10-11 11:43:55'),
(2, 'Employee', '[\"roleaccess\",\"saveroleaccess\",\"employee\",\"saveemployee\",\"employee\",\"usaveemployee\",\"deleteemployee\",\"employees\",\"employeedetail\",\"employeeaccident\",\"saveemployeeaccident\",\"employeeaccidents\",\"subcontractor\",\"savesubcontractor\",\"subcontractors\",\"subcontractordetail\",\"client\",\"saveclient\",\"client\",\"usaveclient\",\"deleteclient\",\"clients\",\"clientdetail\",\"filterclients\",\"primary_tab\",\"balancesheet\",\"getbalancesheet\",\"roster\",\"saveroster\",\"saveshift\",\"updateshift\",\"addshift\",\"deleteshift\",\"shiftaction\",\"copyroster\",\"individualsheet\",\"shiftaction\",\"getindividualsheet\",\"updateshift\",\"updateemployeehours\",\"rostersummary\",\"getrostersummary\",\"site\",\"savesite\",\"sites\",\"dashboard\",\"emailreminders\",\"sendreminders\"]', '0', '2019-06-24 02:25:30', '2020-08-04 03:20:55'),
(11, 'SuperUser', NULL, NULL, '2019-09-19 04:15:00', '2019-09-19 04:15:00'),
(12, 'asfd', NULL, NULL, '2020-08-05 01:12:18', '2020-08-05 01:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `dp` text DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `passport_no` varchar(500) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `insurance_no` varchar(500) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `home_address` text DEFAULT NULL,
  `contact_no` varchar(500) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `doc` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `dp`, `username`, `first_name`, `last_name`, `name`, `email`, `employee_id`, `password`, `status`, `remember_token`, `desc`, `passport_no`, `start_date`, `end_date`, `insurance_no`, `dob`, `home_address`, `contact_no`, `notes`, `doc`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'ben', 'Ben', NULL, 'admin', 'admin@gmail.com', NULL, '$2y$10$OhGQe0tpoLpfpH9c0Ak.2Oz5viZBnnoJOq2NOlGjHHcWnfJQD..Li', 0, 'cXuthNF2CMlSyyQg9jaSCAi65EcmIkbInrIFLx6OTOPqjxYB8jTnN9xHn3Vq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[]', '2020-01-06 06:26:48', '2021-07-05 06:45:06'),
(9, 11, NULL, NULL, 'Qaiser', NULL, 'Qaiser Abbas', 'qaiser@igtech.com', NULL, '$2y$10$htfmk4KXBcCi8zMhhishMO.mLvafIqQ6nOktbyHwB/vdI12Xvj3BS', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-06 06:26:48', '2020-01-09 12:47:03'),
(10, 11, 'public/uploads/employee/profile/1562223225-IMG_20180319_093241.jpg', 'pkatiraei@gmail.com', 'test', 'Customer', '', 'be2n@ozlandsecurity.com.au', NULL, '$2y$10$hdgzitXyIJWNIDMHY/Tod.3xvKR56uUv99zZkJIo60Mmj5tGIjJ9m', 0, NULL, 'sdf', 'asf', '2018-03-16', '2018-03-26', '444444', '1990-02-07', '4, ADFAS', '0347422273', 'dg', '[]', '2020-01-06 05:45:24', '2020-01-06 05:56:09'),
(12, 2, NULL, 'Employee', 'Employee', 'one', 'Employee', 'employee@booris.com', NULL, '$2y$10$GbaFb6db7dyOeUTUQRU.V.73D.1JTDPc/UoEmF4PRmOJW3TyKnAwK', 1, 'ou7MV0RofBuTkBxKyX99kPAdcDucOMu0HkK18nXCw4kOEcp5BenPY0d1rxcA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-23 17:52:10', '2020-06-24 04:41:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_info`
--
ALTER TABLE `additional_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_info`
--
ALTER TABLE `additional_info`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_info`
--
ALTER TABLE `additional_info`
  ADD CONSTRAINT `additional_info_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD CONSTRAINT `contact_info_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `guest_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
  ADD CONSTRAINT `remarks_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
