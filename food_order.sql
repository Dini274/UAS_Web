-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 03:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `description`, `images`) VALUES
(1, 'About Us', 'MaemMamam', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus perferendis aliquid non sunt harum iusto quidem? Adipisci vero, reprehenderit magnam laboriosam, corrupti sapiente excepturi eaque ullam ex nam earum amet!', 'bg-about.svg');

-- --------------------------------------------------------

--
-- Table structure for table `company_trusteds`
--

CREATE TABLE `company_trusteds` (
  `id` int(11) NOT NULL,
  `images` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_trusteds`
--

INSERT INTO `company_trusteds` (`id`, `images`, `description`, `updated_at`, `created_at`) VALUES
(1, 'bukalapak.svg', 'Bukalapak', NULL, NULL),
(2, 'shoope.svg', 'Shopee', NULL, NULL),
(3, 'gojek.svg', 'Gojek', NULL, NULL),
(4, 'grab.svg', 'Grab', NULL, NULL),
(5, 'bukalapak.svg', 'Bukalapak', NULL, NULL),
(6, 'gojek.svg', 'Gojek', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comunities`
--

CREATE TABLE `comunities` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(100) NOT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comunities`
--

INSERT INTO `comunities` (`id`, `title`, `subtitle`, `description`, `images`, `updated_at`, `created_at`) VALUES
(1, 'About Us', 'MaemMamam', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus perferendis aliquid non sunt harum iusto quidem? Adipisci vero, reprehenderit magnam laboriosam, corrupti sapiente excepturi eaque ullam ex nam earum amet!', 'bg-about.svg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` int(11) NOT NULL,
  `header` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(100) NOT NULL,
  `link_order` varchar(25) DEFAULT NULL,
  `link_menu` varchar(25) DEFAULT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `header`, `title`, `subtitle`, `description`, `images`, `link_order`, `link_menu`, `updated_at`, `created_at`) VALUES
(1, 'Makes You Satisfied With What You Ordered', 'Best Product', 'Best In The Universe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quae voluptas consequuntur.', 'bg-hero.svg', '/menu', '/menu', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `topping` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `rating` double NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `topping`, `price`, `rating`, `desc`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Best Spaggheti', 'With Saus Hots', 20, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Spaggheti.png', '', ''),
(2, 'Steak Beef Special', 'With Hot Chili', 40, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Steak.png', '', ''),
(3, 'Burger Campur Special', 'With Spich', 20, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Burger.png', '', ''),
(4, 'Potato satu satu', 'With Sausage', 20, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Potato.png', '', ''),
(5, 'Best Spaggheti', 'With Saus Hots', 20, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Spaggheti.png', '', ''),
(6, 'Steak Beef Special', 'With Hot Chili', 40, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Steak.png', '', ''),
(7, 'Burger Campur Special', 'With Spich', 20, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Burger.png', '', ''),
(8, 'Potato satu satu', 'With Sausage', 20, 2.1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum alias quisquam temporibus sapiente sit quidem minus!', 'Potato.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sections`
--

CREATE TABLE `menu_sections` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_sections`
--

INSERT INTO `menu_sections` (`id`, `title`, `subtitle`, `description`, `images`) VALUES
(1, 'Popular Menu', 'Best Popular Menu', 'Find the food you want to buy and get the prize, made from the best ingredients we choose.', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_actions`
--

CREATE TABLE `shop_actions` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shop_actions`
--

INSERT INTO `shop_actions` (`id`, `title`, `subtitle`, `description`, `images`) VALUES
(1, 'MaemMamam Restaurant', 'Fast food and fill your stomach', 'We are a fast food company and we make everyone enjoy any food we serve them because we serve the best for them all.', 'bg-shop.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$kGv9wzDFwvXsN7jTGwqixOgDrAyk3yuA7XdonOWagZYLrf6TqZf7S', NULL, NULL, NULL),
(2, 'coba@gmail.com', '$2y$10$kGv9wzDFwvXsN7jTGwqixOgDrAyk3yuA7XdonOWagZYLrf6TqZf7S', NULL, '2023-01-23 05:36:11', '2023-01-23 05:36:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_trusteds`
--
ALTER TABLE `company_trusteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comunities`
--
ALTER TABLE `comunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_sections`
--
ALTER TABLE `menu_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_actions`
--
ALTER TABLE `shop_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_trusteds`
--
ALTER TABLE `company_trusteds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comunities`
--
ALTER TABLE `comunities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_sections`
--
ALTER TABLE `menu_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop_actions`
--
ALTER TABLE `shop_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
