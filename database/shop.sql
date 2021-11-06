-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 10:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shirt_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trouser_length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shoe_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `gender`, `height`, `d_birth`, `color`, `w_size`, `shirt_size`, `trouser_length`, `shoe_size`, `created_at`, `updated_at`) VALUES
(1, 'Male', '175', '11/10/1999', 'blue', '20', 'S(42/44)', '90', '8.5', '2021-11-05 20:13:27', '2021-11-05 20:13:27'),
(2, 'Male', '175', '11/10/1999', 'blue', '20', 'S(38/40)', '90', '9.5', '2021-11-05 20:36:51', '2021-11-05 20:36:51'),
(3, 'Male', '175', '11/10/1999', 'blue', '20', 'S(38/40)', '90', '10', '2021-11-05 19:52:27', '2021-11-05 19:52:27'),
(4, 'Male', '175', '11/10/1999', 'blue', '20', 'S(38/40)', '90', '10.5', '2021-11-05 20:04:24', '2021-11-05 20:04:24'),
(5, 'Male', '160', '11/10/1999', 'pink', '19', 'S(46/48)', '85', '11', '2021-11-05 20:14:36', '2021-11-05 20:14:36'),
(6, 'Male', '160', '11/10/1999', 'pink', '12', 'S(38/40)', '60', '12', '2021-11-05 20:26:21', '2021-11-05 20:26:21'),
(7, 'Male', '175', '11/10/1999', 'blue', '20', 'S(38/40)', '85', '11', '2021-11-05 20:33:37', '2021-11-05 20:33:37'),
(8, 'Male', '175', '11/10/1999', 'blue', '19', 'S(38/40)', '60', '10.5', '2021-11-05 19:49:56', '2021-11-05 19:49:56'),
(9, 'Male', '175', '11/10/1999', 'blue', '20', 'M(36/38)', '85', '10', '2021-11-05 20:19:01', '2021-11-05 20:19:01');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2021_11_06_090446_create_products_table', 1),
(15, '2021_11_06_091654_create_orders_table', 1),
(16, '2021_11_06_092641_create_order_items_table', 1),
(17, '2021_11_06_093619_create_details_table', 1),
(19, '2021_11_06_090025_create_raffles_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','processing','completed','declined') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `grand_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `payment_method` enum('cash_on_delivery','card','stripe','paypal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash_on_delivery',
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `shipping_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_name`, `order_number`, `status`, `grand_total`, `item_count`, `payment_method`, `is_paid`, `shipping_fullname`, `shipping_address`, `shipping_city`, `shipping_state`, `shipping_zipcode`, `shipping_phone`, `notes`, `billing_fullname`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_phone`, `created_at`, `updated_at`) VALUES
(1, 'box2', 'order_number61864755e7c94', 'pending', 800.00, 2, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', '2021-11-05 20:13:57', '2021-11-05 20:13:57'),
(2, 'box1', 'order_number61864ce001572', 'pending', 400.00, 1, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 20:37:36', '2021-11-05 20:37:36'),
(3, 'box2', 'order_number6186425debe7e', 'pending', 850.00, 2, 'cash_on_delivery', 0, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 19:52:46', '2021-11-05 19:52:46'),
(4, 'box2', 'order_number618642beeed35', 'pending', 0.00, 0, 'cash_on_delivery', 0, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 19:54:23', '2021-11-05 19:54:23'),
(5, 'box2', 'order_number61864373a3e65', 'pending', 0.00, 0, 'cash_on_delivery', 0, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 19:57:23', '2021-11-05 19:57:23'),
(6, 'box1', 'order_number61864529b354b', 'pending', 400.00, 1, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', '2021-11-05 20:04:41', '2021-11-05 20:04:41'),
(7, 'box1', 'order_number6186478cd03b0', 'pending', 400.00, 1, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 20:14:52', '2021-11-05 20:14:52'),
(8, 'box1', 'order_number61864a4e9289c', 'pending', 1300.00, 1, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', '2021-11-05 20:26:38', '2021-11-05 20:26:38'),
(9, 'box1', 'order_number61864c067cc9f', 'pending', 350.00, 1, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 20:33:58', '2021-11-05 20:33:58'),
(10, 'box1', 'order_number618641e0546f5', 'pending', 450.00, 1, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 19:50:40', '2021-11-05 19:50:40'),
(11, 'box1', 'order_number618648a52cf36', 'pending', 0.00, 0, 'cash_on_delivery', 0, 'Ativor Nelson', 'Dabala E.P basic school, box 3', 'Dabala', 'sogakope', 'GA105', '0248011187', NULL, 'nelly', 'kasoa', 'Accra', 'Ghana', 'GA105', '0248011187', '2021-11-05 20:19:33', '2021-11-05 20:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `price`, `name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 350.00, 'Nike Air Red', 1, NULL, NULL),
(2, 1, 4, 450.00, 'Nike Air Dunk', 1, NULL, NULL),
(3, 2, 3, 400.00, 'Nike Air Blue', 1, NULL, NULL),
(4, 3, 3, 400.00, 'Nike Air Blue', 1, '2021-11-05 19:52:46', '2021-11-05 19:52:46'),
(5, 3, 4, 450.00, 'Nike Air Dunk', 1, '2021-11-05 19:52:46', '2021-11-05 19:52:46'),
(6, 6, 1, 400.00, 'Nike Air Black', 1, '2021-11-05 20:04:41', '2021-11-05 20:04:41'),
(7, 7, 3, 400.00, 'Nike Air Blue', 1, '2021-11-05 20:14:53', '2021-11-05 20:14:53'),
(8, 8, 8, 1300.00, 'Box4', 1, '2021-11-05 20:26:38', '2021-11-05 20:26:38'),
(9, 9, 2, 350.00, 'Nike Air Red', 1, '2021-11-05 20:33:58', '2021-11-05 20:33:58'),
(10, 10, 4, 450.00, 'Nike Air Dunk', 1, '2021-11-05 19:50:40', '2021-11-05 19:50:40');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `path`, `created_at`, `updated_at`) VALUES
(1, 'Nike Air Black', 400, 'New sneakers for your occasions', 'ni3_1636189716.jpg', 'public/images/ni3_1636189716.jpg', '2021-11-05 20:08:36', '2021-11-05 20:08:36'),
(2, 'Nike Air Red', 350, 'Get the new experience of sneakers', 'ni2_1636189784.jpg', 'public/images/ni2_1636189784.jpg', '2021-11-05 20:09:44', '2021-11-05 20:09:44'),
(3, 'Nike Air Blue', 400, 'shop now and rock the new nike Air', 'ni5_1636189854.jpg', 'public/images/ni5_1636189854.jpg', '2021-11-05 20:10:54', '2021-11-05 20:10:54'),
(4, 'Nike Air Dunk', 450, 'Shop the best of nike now', 'ni4_1636189928.jpg', 'public/images/ni4_1636189928.jpg', '2021-11-05 20:12:08', '2021-11-05 20:12:08'),
(5, 'Box1', 1000, 'Get a mystery box and allow your shopping done for you in style', 'myst1_1636188687.jpg', 'public/images/myst1_1636188687.jpg', '2021-11-05 19:51:27', '2021-11-05 19:51:27'),
(6, 'Box2', 1200, 'experience the new way of shopping', 'myst2_1636188898.jpg', 'public/images/myst2_1636188898.jpg', '2021-11-05 19:54:58', '2021-11-05 19:54:58'),
(7, 'box3', 1500, 'Get your shopping ectasy to a new level', 'myst3_1636189005.jpg', 'public/images/myst3_1636189005.jpg', '2021-11-05 19:56:45', '2021-11-05 19:56:45'),
(8, 'Box4', 1300, 'Shop a mystery box today and experience the thrilling experience of shopping', 'myst4_1636189067.jpg', 'public/images/myst4_1636189067.jpg', '2021-11-05 19:57:47', '2021-11-05 19:57:47'),
(9, 'Box1', 1000, 'shop a box now', 'myst3_1636190532.jpg', 'public/images/myst3_1636190532.jpg', '2021-11-05 20:22:14', '2021-11-05 20:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `raffles`
--

CREATE TABLE `raffles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `raffles`
--

INSERT INTO `raffles` (`id`, `name`, `amount`, `slot`, `ig_handle`, `created_at`, `updated_at`) VALUES
(1, 'Nelly', '15', '1', 'nelkidgh', NULL, NULL),
(2, 'Ray', '15', '1', 'Venunye', '2021-11-05 20:14:59', '2021-11-05 20:14:59');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ativor Nelson', 'ativornelson2@gmail.com', NULL, '$2y$10$M//AvUsJv3eVS5D6e33llukF0q.u24kCQeEogIkGbuDxw6/4EV5Te', NULL, '2021-11-05 20:43:42', '2021-11-05 20:43:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

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
-- Indexes for table `raffles`
--
ALTER TABLE `raffles`
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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `raffles`
--
ALTER TABLE `raffles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
