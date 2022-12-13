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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
('aboutPageTitle1', 'Nicklas, Developer'),
('aboutPageText1', 'The creative mind behind the system that we use for our website. Bringing the technical solutions to the table to ensure a smooth shopping experience.'),
('aboutPageTitle2', 'Behdin, Developer'),
('aboutPageText2', 'The creative mind behind user experience on the site. Not only are they responsible for bringing the spirit of the brand to the site, but also the team workflow here in The Custom Ties.'),
('aboutPageTitle3', 'Renata , Developer'),
('aboutPageText3', 'Creative mind behind creative writing. Working with testing the features and making sure users have the best and fastest experience.'),
('aboutusSubtitle', 'ABOUT US'),
('aboutusTitle', 'THE COUSTUME TIE'),
('aboutusSlogan', 'Unique ties that are made with love'),
('contactSubtitle', 'CONTACT US'),
('contactTitle', 'YOU CAN ASK US ABOUT EVERYTHING'),
('address', 'Esbjerg 6700, Denmark'),
('follow', 'To see the last news about our bowties'),
('email', 'thecostumebowtie@gmail.com'),

('bannerSubtitle1', 'Professional edition'),
('bannerTitle1', 'Your bowties'),
('banner1Slogan1', 'Costumize your own design and order'),
('banner1Slogan2', 'Huge range to choose from'),
('banner1Slogan3', 'Easy communication with our live chat'),
('bannerText1', 'We strive to offer our customers the lowest possible prices, the best available selection while giving them a chance to bring their own ideas, and the utmost convenience. All this while keeping to on demand production making us as sustainable as we can. '),
('bannerImageOne', '6395d097c6943.png'),

('bannerSubtitle2', 'Professional edition'),
('bannerTitle2', 'Your bowties'),
('banner2Slogan1', 'Sustainable mindset '),
('banner2Slogan2', 'Quality oriented approach'),
('banner2Slogan3', 'Made to be unique '),
('banner2Text1', 'The Custom ties was established at the start of 2022. It is a family business where every step in creation of your product is done with utmost passion and love. We strive to bring more colors and personality in everyday life by letting you find a perfect bowtie or even create your own! '),
('bannerImageTwo', '6395d0ce8fc84.png');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `media`
--

INSERT INTO `media` (`media_id`, `name`) VALUES
('6395d07c24500.png', 'Danish theme Bowtie'),
('6395d0849b67e.png', 'Ukraine theme bowtie'),
('6395d097c6943.png', 'colorfull bowtie'),
('6395d0a62e813.png', '4 colors bowtie'),
('6395d0b7d6c49.png', '3 color bowtie'),
('6395d0c039466.png', 'Bear bowtie'),
('6395d0ce8fc84.png', 'forrest1 bowtie'),
('6395d0e8794f2.png', 'cartoon bowtie'),
('6395d102ecfc9.png', 'forrest2 bowtie'),
('6395d110561b8.png', 'forrest3 bowtie'),
('6395d11b9a0d6.png', 'White black bowtie'),
('6395d131e2d08.png', 'smarties bowtie'),
('6395d143ec140.png', 'Blue edition bowtie'),
('6395d162c3654.png', 'Blue white red edition bowtie'),
('6395d181babdf.png', 'Red and white edition bowtie'),
('6395d190c5741.png', 'Blue and white edition bowtie'),
('6395d19eb3b13.png', 'white 3d bowtie'),
('6395d1adde5ff.png', 'Blue 3d bowtie'),
('6395d1c1d5507.png', 'Purple bowtie'),
('6395d223c4c60.png', 'Cartoon2 bowtie'),
('6395d2599109c.png', 'White and black pattern bowtie'),
('6395d2ada2be0.png', 'Black rythm bowtie'),
('6395d2d637da5.png', 'Black lemon edition bowtie');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`, `time`, `media`) VALUES
(1, 'About 2023 ', 'It is that time of the year when we reflect on things we have done and look forwards. In March of 2023 we will celebrate our one year anniversary, stay tuned for some surprises from us to you!  We promise to grow even more this upcoming year ', '2022-12-02 11:19:07', '6395d2ada2be0.png'),
(7, 'New Fabric! ', 'We have some great news! From this day and onwards we are partnered with a new supplier for our fabrics used for the bow ties. This supplier is not only nature friendly, but also provides jobs to some of our community members that might find it hard otherwise. ', '2022-12-05 11:27:13', '6395d190c5741.png'),
(6, 'New Collection', 'Winter is already here, and may the new year have not dropped yet, but we want to introduce our new collection for the 2023 valentines day. It is a great time to look for a perfect bow tie for the occasion now and be ready for the special day ahead of  time. ', '2022-12-02 11:44:58', '6395d097c6943.png');
COMMIT;

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
(2, 'Denmark bowtie', 3, 'Denmark bow tie for adult, custom hand made ', '150', '6395d07c24500.png'),
(3, 'Ukraine bowtie', 3, 'Ukraine bow tie for adult, custom hand made', '150', '6395d0849b67e.png'),
(4, 'Lemon bowtie', 5, 'Lemon pattern bow tie for men, custom hand made ', '150', '6395d2d637da5.png'),
(5, 'Transgender bowtie', 3, 'Transgender pride flag bowtie, lgbtq+, custom hand made', '150', '6395d0b7d6c49.png'),
(6, 'Pansexual bowtie', 3, 'Pansexual pride flag bow tie, lgbtq+, custom hand made', '150', '6395d0a62e813.png'),
(7, 'Feather bowtie', 1, 'Feather pattern bow tie for adult, custom hand made ', '150', '6395d0ce8fc84.png'),
(8, 'Odd shapes bowtie', 1, 'Odd shapes pattern bow tie for adult, custom hand made ', '150', '6395d2599109c.png'),
(9, 'Leaf pattern bowtie', 1, 'Leaf pattern bow tie for adult, custom hand made', '150', '6395d102ecfc9.png'),
(10, 'Colorful dots bowtie', 5, 'Colorful dots pattern bow tie for adult, custom hand made ', '150', '6395d131e2d08.png'),
(11, 'Green leaf ', 1, 'Green leaf pattern bow tie for adult, custom hand made ', '150', '6395d110561b8.png'),
(12, 'Guitar pattern', 5, 'Guitar pattern bow tie for adult, custom hand made', '150', '6395d11b9a0d6.png'),
(13, 'Cute bear bowtie', 5, 'Cute bear pattern bow tie for adult, custom hand made ', '150', '6395d0c039466.png'),
(14, 'Colorful bowtie', 1, 'Colorful bowtie, custom hand made', '150', '6395d097c6943.png'),
(15, 'Cartoon patern bowtie', 5, 'Cartoon patern bowtie, custom hand made ', '150', '6395d0e8794f2.png'),
(16, 'Blue 3d patern bowtie', 1, 'Blue 3d patern bowtie, custom hand made ', '150', '6395d143ec140.png'),
(17, 'Red blue and white bowtie', 1, 'Red blue and white bowtie, custom hand made ', '150', '6395d162c3654.png'),
(18, 'Red and white pattern bowtie', 1, 'Red and white pattern bowtie, custom hand made ', '150', '6395d181babdf.png'),
(19, 'blue and white pattern bowtie', 1, 'blue and white pattern bowtie, custom hand made ', '150', '6395d190c5741.png'),
(20, 'white 3d bowtie', 1, 'White 3d bowtie, custom hand made ', '150', '6395d19eb3b13.png'),
(21, 'Blue 3d bowtie', 1, 'Blue 3d bowtie, custom hand made ', '150', '6395d1adde5ff.png'),
(22, 'Black cartoon patern bowtie', 5, 'Black cartoon patern, custom hand made ', '150', '6395d223c4c60.png'),
(23, 'Black and white bowtie', 5, 'Black and white bowtie, custom hand made ', '150', '6395d2ada2be0.png');
COMMIT;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `product_colors`
--

DROP TABLE IF EXISTS `product_colors`;
CREATE TABLE IF NOT EXISTS `product_colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `product_types`
--

INSERT INTO `product_types` (`id`, `type`) VALUES
(1, 'Normal'),
(3, 'Special theme'),
(5, 'Costumized');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(23, 'HopeThisWorks', '1324', 1),
(24, 'Behdin', '$2y$05$aD0uCVDRFJIfjN.8TIeRb.K9FlNEs1UeIl9QTlyvqh86PkWRKD4w2', 1);
COMMIT;




-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products_assigned_to_purchases`
--

DROP TABLE IF EXISTS `products_assigned_to_purchases`;
CREATE TABLE IF NOT EXISTS `products_assigned_to_purchases` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8_bin NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`purchase_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `products_assigned_to_purchases`
--

INSERT INTO `products_assigned_to_purchases` (`purchase_id`, `product_id`, `user`, `quantity`, `price`) VALUES
(32, 5, '1', 1, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(100) COLLATE utf8_bin NOT NULL,
  `fname` varchar(100) COLLATE utf8_bin NOT NULL,
  `lname` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(150) COLLATE utf8_bin NOT NULL,
  `appartment` varchar(50) COLLATE utf8_bin DEFAULT '',
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `state` varchar(100) COLLATE utf8_bin NOT NULL,
  `postcode` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `company` varchar(100) COLLATE utf8_bin DEFAULT '',
  `payed` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `send` int(11) NOT NULL DEFAULT '0',
  `note` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Data dump for tabellen `purchases`
--

INSERT INTO `purchases` (`id`, `country`, `fname`, `lname`, `address`, `appartment`, `city`, `state`, `postcode`, `email`, `phone`, `company`, `payed`, `user_id`, `time`, `send`, `note`) VALUES
(23, 'denmark', 'plz', 'plzzz', 'plzzz', 'plzzz', 'plzzzzz', 'plzzzzz', '1234', 'plzzz@plzzzzz.please', '13241432', 'plzzzzzzzzzzzzzz', 0, 1, '2022-12-12 16:29:18', 0, ''),
(24, 'denmark', 'plz', 'plzzz', 'plzzz', 'plzzz', 'plzzzzz', 'plzzzzz', '1234', 'plzzz@plzzzzz.please', '13241432', 'plzzzzzzzzzzzzzz', 1, 1, '2022-12-12 16:29:59', 1, ''),
(19, 'denmark', 'plz', 'plzzz', 'plzzz', 'plzzz', 'plzzzzz', 'plzzzzz', '1234', 'plzzz@plzzzzz.please', '13241432', 'plzzzzzzzzzzzzzz', 0, 1, '2022-12-12 16:27:32', 0, ''),
(25, 'denmark', 'plz', 'plzzz', 'plzzz', 'plzzz', 'plzzzzz', 'plzzzzz', '1234', 'plzzz@plzzzzz.please', '13241432', 'plzzzzzzzzzzzzzz', 0, 1, '2022-12-12 14:40:31', 0, ''),
(26, 'denmark', 'plz', 'plzzz', 'plzzz', 'plzzz', 'plzzzzz', 'plzzzzz', '1234', 'plzzz@plzzzzz.please', '13241432', 'plzzzzzzzzzzzzzz', 0, 1, '2022-12-12 14:40:49', 0, ''),
(27, 'denmark', 'plz', 'plzzz', 'plzzz', 'plzzz', 'plzzzzz', 'plzzzzz', '1234', 'plzzz@plzzzzz.please', '13241432', 'plzzzzzzzzzzzzzz', 1, 1, '2022-12-12 15:38:37', 0, ''),
(32, 'atlantis', '11', '1', '21', '2', '2', '1', '1', '1', '1', '1', 1, 1, '2022-12-12 16:26:05', 0, '');

-- --------------------------------------------------------
