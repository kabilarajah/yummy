-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 07:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_23_045500_create_products_table', 1),
(4, '2017_08_25_201952_create_orders_table', 1),
(5, '2017_11_03_102042_create_sellers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `cart`, `seller`, `name`) VALUES
(1, '2018-01-11 12:45:14', '2018-01-11 12:45:14', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:13;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:700;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:13;s:10:\"created_at\";s:19:\"2018-01-11 23:16:11\";s:10:\"updated_at\";s:19:\"2018-01-11 23:16:11\";s:5:\"title\";s:5:\"McD_1\";s:7:\"sellers\";i:2;s:9:\"imagepath\";s:13:\"images/13.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:700;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:13;s:10:\"created_at\";s:19:\"2018-01-11 23:16:11\";s:10:\"updated_at\";s:19:\"2018-01-11 23:16:11\";s:5:\"title\";s:5:\"McD_1\";s:7:\"sellers\";i:2;s:9:\"imagepath\";s:13:\"images/13.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:700;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:700;}', '0', 'Kabilarajah Yuvarajah'),
(2, '2018-01-11 12:46:43', '2018-01-11 12:46:43', 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:3:{i:14;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:1000;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:14;s:10:\"created_at\";s:19:\"2018-01-11 23:17:39\";s:10:\"updated_at\";s:19:\"2018-01-11 23:17:39\";s:5:\"title\";s:5:\"McD_2\";s:7:\"sellers\";i:2;s:9:\"imagepath\";s:13:\"images/14.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:1000;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:14;s:10:\"created_at\";s:19:\"2018-01-11 23:17:39\";s:10:\"updated_at\";s:19:\"2018-01-11 23:17:39\";s:5:\"title\";s:5:\"McD_2\";s:7:\"sellers\";i:2;s:9:\"imagepath\";s:13:\"images/14.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:1000;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:19;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:250;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:19;s:10:\"created_at\";s:19:\"2018-01-11 23:21:16\";s:10:\"updated_at\";s:19:\"2018-01-11 23:21:16\";s:5:\"title\";s:5:\"KFC_6\";s:7:\"sellers\";i:1;s:9:\"imagepath\";s:13:\"images/19.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:250;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:19;s:10:\"created_at\";s:19:\"2018-01-11 23:21:16\";s:10:\"updated_at\";s:19:\"2018-01-11 23:21:16\";s:5:\"title\";s:5:\"KFC_6\";s:7:\"sellers\";i:1;s:9:\"imagepath\";s:13:\"images/19.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:250;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:4;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:1000;s:4:\"item\";O:11:\"App\\Product\":25:{s:11:\"\0*\0fillable\";a:4:{i:0;s:9:\"imagepath\";i:1;s:5:\"title\";i:2;s:11:\"description\";i:3;s:5:\"price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";N;s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:4;s:10:\"created_at\";s:19:\"2018-01-11 22:56:04\";s:10:\"updated_at\";s:19:\"2018-01-11 22:56:04\";s:5:\"title\";s:10:\"Pizza_four\";s:7:\"sellers\";i:3;s:9:\"imagepath\";s:12:\"images/4.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:1000;}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:4;s:10:\"created_at\";s:19:\"2018-01-11 22:56:04\";s:10:\"updated_at\";s:19:\"2018-01-11 22:56:04\";s:5:\"title\";s:10:\"Pizza_four\";s:7:\"sellers\";i:3;s:9:\"imagepath\";s:12:\"images/4.jpg\";s:11:\"description\";s:72:\"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\";s:5:\"price\";i:1000;}s:8:\"\0*\0casts\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:9:\"\0*\0events\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:3;s:10:\"totalPrice\";i:2250;}', '0', 'Kabilarajah Yuvarajah');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sellers` int(11) NOT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `title`, `sellers`, `imagepath`, `description`, `price`) VALUES
(1, '2018-01-11 17:23:15', '2018-01-11 17:23:16', 'Pizza_one', 3, 'images/1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 800),
(2, '2018-01-11 17:24:37', '2018-01-11 17:24:38', 'Pizza_two', 3, 'images/2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1200),
(3, '2018-01-11 17:25:12', '2018-01-11 17:25:14', 'Pizza_three', 3, 'images/3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 900),
(4, '2018-01-11 17:26:04', '2018-01-11 17:26:04', 'Pizza_four', 3, 'images/4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1000),
(5, '2018-01-11 17:26:39', '2018-01-11 17:26:40', 'Pizza_five', 3, 'images/5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1500),
(6, '2018-01-11 17:27:12', '2018-01-11 17:27:13', 'Pizza_six', 3, 'images/6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1100),
(7, '2018-01-11 17:27:54', '2018-01-11 17:27:55', 'Pizza_seven', 3, 'images/7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1300),
(8, '2018-01-11 17:32:03', '2018-01-11 17:32:03', 'KFC_1', 1, 'images/8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 500),
(9, '2018-01-11 17:32:53', '2018-01-11 17:32:53', 'KFC_2', 1, 'images/9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 600),
(10, '2018-01-11 17:33:25', '2018-01-11 17:33:26', 'KFC_3', 1, 'images/10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 700),
(11, '2018-01-11 17:45:04', '2018-01-11 17:45:04', 'KFC_4', 1, 'images/11.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 800),
(12, '2018-01-11 17:45:42', '2018-01-11 17:45:43', 'KFC_5', 1, 'images/12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1000),
(13, '2018-01-11 17:46:11', '2018-01-11 17:46:11', 'McD_1', 2, 'images/13.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 700),
(14, '2018-01-11 17:47:39', '2018-01-11 17:47:39', 'McD_2', 2, 'images/14.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1000),
(15, '2018-01-11 17:48:14', '2018-01-11 17:48:14', 'McD_3', 2, 'images/15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1200),
(16, '2018-01-11 17:48:46', '2018-01-11 17:48:46', 'McD_4', 2, 'images/16.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 750),
(17, '2018-01-11 17:49:46', '2018-01-11 17:49:47', 'McD_5', 2, 'images/17.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 650),
(18, '2018-01-11 17:50:33', '2018-01-11 17:50:33', 'McD_6', 2, 'images/18.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1350),
(19, '2018-01-11 17:51:16', '2018-01-11 17:51:16', 'KFC_6', 1, 'images/19.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 250);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagepath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `created_at`, `updated_at`, `name`, `imagepath`) VALUES
(1, '2018-01-11 17:14:53', '2018-01-11 17:14:54', 'KFC', 'images/kfc.jpg'),
(2, '2018-01-11 17:15:22', '2018-01-11 17:15:23', 'Mc.Donald\'s', 'images/mcd.jpg'),
(3, '2018-01-11 17:16:15', '2018-01-11 17:16:17', 'Pizza Hut', 'images/pizzahut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kabilarajah Yuvarajah', 'kabilarajahy@gmail.com', '$2y$10$RLSVethfT8FjaAr44LkwzOQTG/39.x51ZikWTCx4SdHPV5seKQqRS', NULL, '2018-01-11 11:27:02', '2018-01-11 11:27:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
