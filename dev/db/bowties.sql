-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 09. 12 2022 kl. 13:28:32
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
(2, 1),
(2, 2),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `assign_media_to_products`
--

DROP TABLE IF EXISTS `assign_media_to_products`;
CREATE TABLE IF NOT EXISTS `assign_media_to_products` (
  `product_id` int(11) NOT NULL,
  `media_id` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`product_id`,`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `assign_media_to_products`
--

INSERT INTO `assign_media_to_products` (`product_id`, `media_id`) VALUES
(2, '6380d60fecb10.jpg');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `assign_products_to_sales`
--

DROP TABLE IF EXISTS `assign_products_to_sales`;
CREATE TABLE IF NOT EXISTS `assign_products_to_sales` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `saleType` varchar(1) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`sale_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `assign_products_to_sales`
--

INSERT INTO `assign_products_to_sales` (`sale_id`, `product_id`, `sale`, `saleType`) VALUES
(5, 3, 680, '$'),
(5, 2, 40, '%'),
(1, 2, 120, '$');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `frontpage`
--

DROP TABLE IF EXISTS `frontpage`;
CREATE TABLE IF NOT EXISTS `frontpage` (
  `id` varchar(50) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `frontpage`
--

INSERT INTO `frontpage` (`id`, `text`) VALUES
('aboutUs1', 'The Custom ties was established at the start of 2022. It is a family business where every step in creation of your product is done with utmost passion and love. We strive to bring more colors and personality in everyday life by letting you find a perfect bowtie or even create your own! '),
('aboutUs2', 'The custom ties  products are made to order, making us more sustainable and friendly to our beloved nature. This not only impacts our footprint by minimizing the waste we leave behind making your product, but as well will make it so you have one of a kind product.  Our production approach allows us to make sure you get your bow ties without depending on other distributors as the whole production is done by us. '),
('phone', '+45 53 52 52 39'),
('nav1', 'HOME'),
('nav2', 'PRODUCTS'),
('nav3', 'ABOUT US'),
('nav4', 'CONTACT'),
('productsSubtitle', 'PRODUCTS'),
('productsTitle', 'CHOOSE YOUR FAVORITE BOWTIE'),
('aboutusSubtitle', 'ABOUT US'),
('aboutusTitle', 'THE COUSTUME TIE'),
('aboutusSlogan', 'Unique ties that are made with love'),
('contactSubtitle', 'CONTACT US'),
('contactTitle', 'YOU CAN ASK US ABOUT EVERYTHING'),
('address', 'Esbjerg 6700, Denmark'),
('follow', 'To see the last news about our bowties'),
('email', 'thecostumebowtie@gmail.com');
COMMIT;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `media_id` varchar(250) COLLATE utf8_bin NOT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT '',
  PRIMARY KEY (`media_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `media`
--

INSERT INTO `media` (`media_id`, `name`) VALUES
('63936389e652a.png', 'Danish theme Bowtie'),
('63936392809a3.png', 'Ukraine theme bowtie'),
('6393639d687ca.png', 'White Black');
COMMIT;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `media` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `time`, `media`) VALUES
(1, 'Meeeeeeeeeep!', 'Meep meepi di moop moop meep!', '2022-12-02 11:19:07', NULL),
(7, 'does dis work', 'oer', '2022-12-05 11:27:13', '7380d60fecb10.jpg'),
(6, 'Test', 'i sure hope this works now', '2022-12-02 11:44:58', '6380d60fecb10.jpg');

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
  `primary_image` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`products_id`, `name`, `type`, `description`, `price`, `primary_image`) VALUES
(2, 'Solid Faded Pink MORE Unicorns', 1, 'A solid faded pink bowtie', '150', '7380d60fecb10.jpg'),
(3, 'AAAAAAAA', 5, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAa', '400000', '6380d60fecb10.jpg');

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
-- Struktur-dump for tabellen `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `description` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `sales`
--

INSERT INTO `sales` (`id`, `title`, `start`, `end`) VALUES
(1, 'black friday 2022', '2022-11-25', '2022-11-25'),
(5, 'Pineapple', '2022-12-10', '2022-12-11');

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
(1, 'Niclas', '2022-12-09 10:43:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `role`) VALUES
(1, 'Niclas', '1234', 1),
(2, 'Nic', '123', 0),
(3, 'Meep', 'Moop', 0),
(7, 'test2IAmEditted', 'test', 0),
(16, 'pineapple', '1324', 0),
(17, 'newusertest', '1234', 0),
(18, 'isthisworking', 'meep', 0),
(19, 'roletest', '1234', 0),
(20, 'roleShouldWork', '1234', 1),
(21, 'Kim', '1234', 1),
(22, 'HopeThisWorks', '1324', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
