-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 15. 11 2022 kl. 10:03:37
-- Serverversion: 5.7.36
-- PHP-version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bowties`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `assign_colors_to_products`
--

DROP TABLE IF EXISTS `assign_colors_to_products`;
CREATE TABLE IF NOT EXISTS `assign_colors_to_products` (
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`color_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `assign_colors_to_products`
--

INSERT INTO `assign_colors_to_products` (`product_id`, `color_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(11, 1),
(18, 1),
(18, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`products_id`, `name`, `type`, `description`, `price`) VALUES
(1, 'Solid Black', 1, 'A solid black bowtie', '150'),
(2, 'Solid Faded Pink MORE Unicorns', 1, 'A solid faded pink bowtie', '150'),
(9, 'sanity', 1, '3ijro', '32'),
(11, 'sanitys', 1, 'wer', '213'),
(16, 'iamEvil', 5, ':33', '1'),
(18, 'meep', 1, 'now i have colors!', '123'),
(27, 'im tottally new', 1, '1', '1'),
(43, 'doubleNew', 1, 'meep', '10');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_colors`
--

DROP TABLE IF EXISTS `product_colors`;
CREATE TABLE IF NOT EXISTS `product_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `product_colors`
--

INSERT INTO `product_colors` (`id`, `color`) VALUES
(1, 'Yellow'),
(2, 'Green');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_photos`
--

DROP TABLE IF EXISTS `product_photos`;
CREATE TABLE IF NOT EXISTS `product_photos` (
  `products_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `order_nr` int(11) NOT NULL,
  PRIMARY KEY (`products_id`,`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_types`
--

DROP TABLE IF EXISTS `product_types`;
CREATE TABLE IF NOT EXISTS `product_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `product_types`
--

INSERT INTO `product_types` (`id`, `type`) VALUES
(1, 'Pineapple'),
(5, 'Aaargh');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `spam_prevention`
--

DROP TABLE IF EXISTS `spam_prevention`;
CREATE TABLE IF NOT EXISTS `spam_prevention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `spam_prevention`
--

INSERT INTO `spam_prevention` (`id`, `name`, `time`) VALUES
(1, 'Niclas', '2022-11-13 09:25:26');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `role`) VALUES
(1, 'Niclas', '1234', 1),
(2, 'Nic', '123', 0),
(3, 'Meep', 'Moop', 0),
(5, 'feio', 'gdno', 0),
(6, 'test1', 'test', 0),
(7, 'test2IAmEditted', 'test', 0),
(16, 'pineapple', '1324', 0),
(17, 'newusertest', '1234', 0),
(18, 'isthisworking', 'meep', 0),
(19, 'roletest', '1234', 0),
(20, 'roleShouldWork', '1234', 1),
(21, 'Kim', '1234', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
