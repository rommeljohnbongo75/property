-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2024 at 06:52 PM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_property_list_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `adults` int NOT NULL,
  `children` int NOT NULL,
  `listing_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_listing_id_foreign` (`listing_id`),
  KEY `contacts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_number`, `description`, `start`, `start_date`, `end_date`, `adults`, `children`, `listing_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Test test', 'testingBYDev@gmail.com', '6235261525', 'property', '2024-03-18', '0000-00-00', '0000-00-00', 0, 0, 5, 1, '2024-03-18 04:29:32', '2024-03-18 04:29:32'),
(2, 'Coby Estrada', 'sudogoqyq@mailinator.com', '7845123060', 'asdasdsadsad', '2024-03-19', '0000-00-00', '0000-00-00', 0, 0, 4, 3, '2024-03-19 00:49:36', '2024-03-19 00:49:36'),
(3, NULL, NULL, NULL, 'sdfsdffsdf', '2024-03-20', '2024-03-21', '2024-03-31', 2, 2, 4, 1, '2024-03-19 23:39:43', '2024-03-19 23:39:43'),
(4, NULL, NULL, NULL, 'asdasdasdsad', '2024-03-20', '2024-03-22', '2024-04-05', 3, 3, 5, 1, '2024-03-19 23:41:58', '2024-03-19 23:41:58'),
(5, NULL, NULL, NULL, 'booking', '2024-03-20', '2024-03-20', '2024-04-30', 1, 1, 4, NULL, '2024-03-20 12:34:22', '2024-03-20 12:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'sasdasdsad', '2024-03-07', '2024-03-08', '2024-03-16 13:11:40', '2024-03-16 13:11:40'),
(2, 'asdsadsad', '2024-03-14', '2024-03-15', '2024-03-16 13:22:01', '2024-03-16 13:22:01'),
(3, 'test-1', '2024-03-07', '2024-03-08', '2024-03-16 13:22:09', '2024-03-16 13:22:09'),
(4, 'Booking new', '2024-03-18', '2024-03-19', '2024-03-18 04:28:55', '2024-03-18 04:28:55'),
(5, 'new-title', '2024-03-20', '2024-03-21', '2024-03-18 07:06:18', '2024-03-18 07:06:18'),
(6, 'dsadasasdad', '2024-03-19', '2024-03-20', '2024-03-18 22:21:20', '2024-03-18 22:21:20'),
(7, 'display', '2024-03-19', '2024-03-20', '2024-03-18 22:23:32', '2024-03-18 22:23:32'),
(8, 'new-dispaly', '2024-03-20', '2024-03-21', '2024-03-18 22:24:49', '2024-03-18 22:24:49'),
(9, 'asdasd', '2024-03-19', '2024-03-20', '2024-03-18 22:25:49', '2024-03-18 22:25:49'),
(10, 'dfsdfsd', '2024-03-19', '2024-03-20', '2024-03-18 22:26:06', '2024-03-18 22:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

DROP TABLE IF EXISTS `listings`;
CREATE TABLE IF NOT EXISTS `listings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `square_feet` double(10,2) NOT NULL,
  `lot_size` double(10,2) NOT NULL,
  `bedroom` int NOT NULL,
  `garage` int NOT NULL,
  `bathroom` int NOT NULL,
  `status` int NOT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_0` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_5` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_6` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `realtor_id` bigint UNSIGNED DEFAULT NULL,
  `is_published` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `listings_realtor_id_foreign` (`realtor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `title`, `description`, `price`, `square_feet`, `lot_size`, `bedroom`, `garage`, `bathroom`, `status`, `city`, `country`, `thumbnail_0`, `thumbnail_1`, `thumbnail_2`, `thumbnail_3`, `thumbnail_4`, `thumbnail_5`, `thumbnail_6`, `created_at`, `updated_at`, `realtor_id`, `is_published`) VALUES
(4, 'Shneller 3 Bedroom 00-800', 'The ideal Apartment for your stay in Israel!\r\n\r\nAbout the Apartment:\r\n\r\nThis new and modern 1 bedroom apartment is situated on the 5th floor. It has a big, bright open plan kitchen and dining room, 1 bathroom and a balcony facing the inner side of Jerusalem Estates.\r\n\r\nAbout the project:\r\n\r\nJerusalem Estates is a unique architectural jewel! It is currently the highest-class project in Jerusalem.  Each building boasts its own private luscious green gardens and a fabulous grand lobby entrance. Additionally there is 24 hour security on site.\r\n\r\nThis exclusive project is located right near Geula, close by to all amenities such as, restaurants, bakeries and a wide variety of shops.  It is in walking distance to the Kosel and surrounded by all different neighbourhoods.\r\n\r\nClearly it is the ideal choice to enhance your stay .\r\n\r\nThe Brud Group will ensure you arrive to a fresh clean apartment.   Upon arrival, there will be a welcome package awaiting you which will include all basic amenities such as toiletries, coffee, milk, sugar and all disposables.  Additionally, you will be provided with towels and linen. There is WiFi throughout the apartment. Upon request, we can provide a pack and play for this apartment.', 58700.00, 2500.00, 2500.00, 1, 1, 1, 1, 'Jerusalem', 'Israel', 'images/listing/1710828208.IMG-20240307-WA0007.jpg.jpg', 'images/listing/1709141246.b4-1-410x270.jpg.jpg', 'images/listing/1709141246.23-410x270.jpg.jpg', 'images/listing/1709141246.31-410x270.jpg.jpg', 'images/listing/1709141246.castillo-de-disneyland-410x270.jpg.jpg', 'images/listing/1709141246.13-410x270.jpg.jpg', 'images/listing/1709141246.los-angeles-winter-2016-410x270.jpg.jpg', '2024-02-28 11:57:26', '2024-03-19 00:36:17', 1, '1'),
(5, 'Shneller 3 Bedroom 00-759', 'The ideal Apartment for your stay\r\n\r\nAbout the Apartment:\r\n\r\nThis new and modern 1 bedroom apartment is situated on the 5th floor. It has a big, bright open plan kitchen and dining room, 1 bathroom and a balcony facing the inner side of Jerusalem Estates.\r\n\r\nAbout the project:\r\n\r\nJerusalem Estates is a unique architectural jewel! It is currently the highest-class project in Jerusalem.  Each building boasts its own private luscious green gardens and a fabulous grand lobby entrance. Additionally there is 24 hour security on site.\r\n\r\nThis exclusive project is located right near Geula, close by to all amenities such as, restaurants, bakeries and a wide variety of shops.  It is in walking distance to the Kosel and surrounded by all different neighbourhoods.\r\n\r\nClearly it is the ideal choice to enhance your stay in Israel.\r\n\r\nThe Brud Group will ensure you arrive to a fresh clean apartment.   Upon arrival, there will be a welcome package awaiting you which will include all basic amenities such as toiletries, coffee, milk, sugar and all disposables.  Additionally, you will be provided with towels and linen. There is WiFi throughout the apartment. Upon request, we can provide a pack and play for this apartment.', 2500.00, 2500.00, 2500.00, 11, 11, 11, 2, 'Jerusalem', 'Israel', 'images/listing/1710828174.IMG-20240307-WA0008.jpg.jpg', 'images/listing/1709232368.t3-410x270.jpg.jpg', 'images/listing/1709232368.6-2-410x270.jpg.jpg', 'images/listing/1709232368.goldengatebridge-001-410x270.jpg.jpg', 'images/listing/1709232368.q1-410x270.jpg.jpg', 'images/listing/1709232368.5-2-410x270.jpg.jpg', 'images/listing/1709232368.2009-0726-ca-bakersfield-truxtontower-410x270.jpg.jpg', '2024-02-29 13:16:08', '2024-03-19 00:35:59', 1, '1'),
(6, 'Shneller 3 Bedroom 00-750', 'The ideal Apartment for your stay in Israel! About the Apartment: This new and modern 1 bedroom apartment is situated on the 5th floor. It has a big, bright open plan kitchen and dining room, 1 bathroom and a balcony facing the inner side of Jerusalem Estates. About the project: Jerusalem Estates is a unique architectural jewel! It is currently the highest-class project in Jerusalem. Each building boasts its own private luscious green gardens and a fabulous grand lobby entrance. Additionally there is 24 hour security on site. This exclusive project is located right near Geula, close by to all amenities such as, restaurants, bakeries and a wide variety of shops. It is in walking distance to the Kosel and surrounded by all different neighbourhoods. Clearly it is the ideal choice to enhance your stay . The Brud Group will ensure you arrive to a fresh clean apartment. Upon arrival, there will be a welcome package awaiting you which will include all basic amenities such as toiletries, coffee, milk, sugar and all disposables. Additionally, you will be provided with towels and linen. There is WiFi throughout the apartment. Upon request, we can provide a pack and play for this apartment.', 5820.00, 2500.00, 2500.00, 2, 5, 3, 2, 'Jerusalem', 'Israel', 'images/listing/1710959579.IMG-20240307-WA0012.jpg.jpg', 'images/listing/1710959562.IMG-20240307-WA0008.jpg.jpg', 'images/listing/1710959562.IMG-20240307-WA0025.jpg.jpg', 'images/listing/1710959562.IMG-20240307-WA0026.jpg.jpg', 'images/listing/1710959562.IMG-20240307-WA0027.jpg.jpg', 'images/listing/1710959562.IMG-20240307-WA0029.jpg.jpg', 'images/listing/1710959562.IMG-20240307-WA0030.jpg.jpg', '2024-03-20 13:02:42', '2024-03-20 13:02:59', 1, '1'),
(7, 'Shneller 3 Bedroom 00-802', 'The ideal Apartment for your stay in Israel! About the Apartment: This new and modern 1 bedroom apartment is situated on the 5th floor. It has a big, bright open plan kitchen and dining room, 1 bathroom and a balcony facing the inner side of Jerusalem Estates. About the project: Jerusalem Estates is a unique architectural jewel! It is currently the highest-class project in Jerusalem. Each building boasts its own private luscious green gardens and a fabulous grand lobby entrance. Additionally there is 24 hour security on site. This exclusive project is located right near Geula, close by to all amenities such as, restaurants, bakeries and a wide variety of shops. It is in walking distance to the Kosel and surrounded by all different neighbourhoods. Clearly it is the ideal choice to enhance your stay . The Brud Group will ensure you arrive to a fresh clean apartment. Upon arrival, there will be a welcome package awaiting you which will include all basic amenities such as toiletries, coffee, milk, sugar and all disposables. Additionally, you will be provided with towels and linen. There is WiFi throughout the apartment. Upon request, we can provide a pack and play for this apartment.', 8500.00, 2000.00, 2000.00, 5, 2100, 4, 1, 'Jerusalem', 'Israel', 'images/listing/1710959678.IMG-20240307-WA0019.jpg.jpg', 'images/listing/1710959678.IMG-20240307-WA0020.jpg.jpg', 'images/listing/1710959678.IMG-20240307-WA0029.jpg.jpg', 'images/listing/1710959678.IMG-20240307-WA0024.jpg.jpg', 'images/listing/1710959678.IMG-20240307-WA0030.jpg.jpg', 'images/listing/1710959678.IMG-20240307-WA0017.jpg.jpg', 'images/listing/1710959678.IMG-20240307-WA0005.jpg.jpg', '2024-03-20 13:04:38', '2024-03-20 13:04:38', 1, '1'),
(8, 'Shneller 3 Bedroom 00-900', 'The ideal Apartment for your stay in Israel! About the Apartment: This new and modern 1 bedroom apartment is situated on the 5th floor. It has a big, bright open plan kitchen and dining room, 1 bathroom and a balcony facing the inner side of Jerusalem Estates. About the project: Jerusalem Estates is a unique architectural jewel! It is currently the highest-class project in Jerusalem. Each building boasts its own private luscious green gardens and a fabulous grand lobby entrance. Additionally there is 24 hour security on site. This exclusive project is located right near Geula, close by to all amenities such as, restaurants, bakeries and a wide variety of shops. It is in walking distance to the Kosel and surrounded by all different neighbourhoods. Clearly it is the ideal choice to enhance your stay . The Brud Group will ensure you arrive to a fresh clean apartment. Upon arrival, there will be a welcome package awaiting you which will include all basic amenities such as toiletries, coffee, milk, sugar and all disposables. Additionally, you will be provided with towels and linen. There is WiFi throughout the apartment. Upon request, we can provide a pack and play for this apartment.', 9800.00, 2500.00, 20.00, 5, 2099, 2, 1, 'Jerusalem', 'Israel', 'images/listing/1710959748.IMG-20240307-WA0025.jpg.jpg', 'images/listing/1710959748.IMG-20240307-WA0027.jpg.jpg', 'images/listing/1710959748.IMG-20240307-WA0029.jpg.jpg', 'images/listing/1710959748.IMG-20240307-WA0030.jpg.jpg', 'images/listing/1710959748.IMG-20240307-WA0017.jpg.jpg', 'images/listing/1710959748.IMG-20240307-WA0006.jpg.jpg', 'images/listing/1710959748.IMG-20240307-WA0009.jpg.jpg', '2024-03-20 13:05:48', '2024-03-20 13:05:48', 1, '1'),
(9, 'Shneller 3 Bedroom 00-900', 'The ideal Apartment for your stay in Israel! About the Apartment: This new and modern 1 bedroom apartment is situated on the 5th floor. It has a big, bright open plan kitchen and dining room, 1 bathroom and a balcony facing the inner side of Jerusalem Estates. About the project: Jerusalem Estates is a unique architectural jewel! It is currently the highest-class project in Jerusalem. Each building boasts its own private luscious green gardens and a fabulous grand lobby entrance. Additionally there is 24 hour security on site. This exclusive project is located right near Geula, close by to all amenities such as, restaurants, bakeries and a wide variety of shops. It is in walking distance to the Kosel and surrounded by all different neighbourhoods. Clearly it is the ideal choice to enhance your stay . The Brud Group will ensure you arrive to a fresh clean apartment. Upon arrival, there will be a welcome package awaiting you which will include all basic amenities such as toiletries, coffee, milk, sugar and all disposables. Additionally, you will be provided with towels and linen. There is WiFi throughout the apartment. Upon request, we can provide a pack and play for this apartment.', 3600.00, 200.00, 2.00, 5, 250, 8, 1, 'Jerusalem', 'Israel', 'images/listing/1710959820.IMG-20240307-WA0012.jpg.jpg', 'images/listing/1710959820.IMG-20240307-WA0013.jpg.jpg', 'images/listing/1710959820.IMG-20240307-WA0028.jpg.jpg', 'images/listing/1710959820.IMG-20240307-WA0028.jpg.jpg', 'images/listing/1710959820.IMG-20240307-WA0018.jpg.jpg', 'images/listing/1710959820.IMG-20240307-WA0025.jpg.jpg', 'images/listing/1710959820.IMG-20240307-WA0023.jpg.jpg', '2024-03-20 13:07:00', '2024-03-20 13:07:00', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_14_115201_create_realtors_table', 1),
(5, '2020_09_14_115249_create_listings_table', 1),
(6, '2020_09_14_115344_create_soms_table', 1),
(7, '2020_09_20_101500_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `realtors`
--

DROP TABLE IF EXISTS `realtors`;
CREATE TABLE IF NOT EXISTS `realtors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `realtors`
--

INSERT INTO `realtors` (`id`, `name`, `address`, `email`, `contact_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 'sadsad', 'sadsajdbvsahjdhj', 'sadsad@dsasgahdc.com', '7845123060', 'images/realtor/sadsad.1708755542.jpg', '2024-02-24 00:49:02', '2024-02-24 00:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `soms`
--

DROP TABLE IF EXISTS `soms`;
CREATE TABLE IF NOT EXISTS `soms` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `realtor_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `soms_realtor_id_foreign` (`realtor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('0','1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'test', 'demo123', 'demo@gmail.com', '0', NULL, '$2y$10$UKWTVfY.oEK586Fq6GKdruJxiBL9sU.YPfkSsHHG56OV3Zg.wV.3q', NULL, '2024-02-24 00:43:50', '2024-02-24 00:43:50'),
(2, 'sdfds', 'dsfdsf', 'sdfdsf', 'demo1@demo.com', '2', NULL, '$2y$12$SU9sOGX9QW9wnpoT5FBXZ.dfuUVTlw5okA5ADyar.cJPNzMLsK6na', NULL, '2024-03-15 06:00:10', '2024-03-15 06:00:10'),
(3, 'Coby', 'Estrada', 'ledizuku', 'sudogoqyq@mailinator.com', '2', NULL, '$2y$12$KGAsPgvDEuJ69a.MrRX.ieixREAb0K3I9WbOqBapTiqUlrfu4Osba', NULL, '2024-03-19 00:49:23', '2024-03-19 00:49:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
