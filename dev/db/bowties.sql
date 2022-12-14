

DROP DATABASE IF EXISTS bowties;
CREATE DATABASE bowties;
USE bowties;

DROP TABLE IF EXISTS products;
CREATE TABLE IF NOT EXISTS products (
    products_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(30) NOT NULL,
    `type` int(11) NOT NULL,
    `description` varchar(250) NOT NULL,
    price decimal(10, 0) NOT NULL,
    primary_image varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4;

INSERT INTO products (products_id, `name`, `type`, `description`, price, primary_image) VALUES
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


DROP TABLE IF EXISTS order_counters;
CREATE TABLE IF NOT EXISTS order_counters (
    `name` varchar(20) NOT NULL PRIMARY KEY,
    `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB;

INSERT INTO order_counters (`name`, `count`) VALUES
('total', 0),
('new', 0);


DROP TABLE IF EXISTS media;
CREATE TABLE IF NOT EXISTS media (
    media_id varchar(250) NOT NULL PRIMARY KEY,
    `name` varchar(50) NOT NULL
) ENGINE=InnoDB; 

INSERT INTO media (media_id, `name`) VALUES
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


DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    user_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(20) NOT NULL,
    `password` varchar(100) NOT NULL,
    `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=23;

INSERT INTO users (user_id, `name`, `password`, `role`) VALUES
(1, 'Niclas', '1234', 1),
(21, 'Kim', '1234', 1),
(24, 'Behdin', '$2y$05$aD0uCVDRFJIfjN.8TIeRb.K9FlNEs1UeIl9QTlyvqh86PkWRKD4w2', 1);


DROP TABLE IF EXISTS purchases;
CREATE TABLE IF NOT EXISTS purchases (
    purchases_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    country varchar(100) NOT NULL,
    fname varchar(100) NOT NULL,
    lname varchar(100) NOT NULL,
    `address` varchar(150) NOT NULL,
    `appartment` varchar(150) NOT NULL,
    city varchar(100) NOT NULL,
    `state` varchar(100) NOT NULL,
    postcode varchar(50) NOT NULL,
    email varchar(100) NOT NULL,
    phone varchar(20) NOT NULL,
    company varchar(100) NOT NULL,
    payed int(11) NOT NULL DEFAULT '0',
    `user_id` int(11) DEFAULT NULL,
    `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `send` int(11) NOT NULL DEFAULT '0',
    note text
) ENGINE=InnoDB AUTO_INCREMENT=33;


DROP TABLE IF EXISTS product_colors;
CREATE TABLE IF NOT EXISTS product_colors (
    color_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    color varchar(100) NOT NULL
 ) ENGINE=InnoDB AUTO_INCREMENT=3;

 INSERT INTO product_colors (color_id, color) VALUES
(1, 'Yellow'),
(2, 'Green');


DROP TABLE IF EXISTS products_assigned_to_purchases;
CREATE TABLE IF NOT EXISTS products_assigned_to_purchases (
    purchases_id int(11) NOT NULL,
    products_id int(11) NOT NULL,
    user varchar(100) NOT NULL,
    quantity int(11) NOT NULL,
    price int(11) NOT NULL,
    CONSTRAINT PK_products_assigned_to_purchases PRIMARY KEY (purchases_id, products_id),
    FOREIGN KEY (purchases_id) REFERENCES purchases (purchases_id),
    FOREIGN KEY (products_id) REFERENCES products (products_id)
) ENGINE=InnoDB;


DROP TABLE IF EXISTS assign_colors_to_products; 
CREATE TABLE IF NOT EXISTS assign_colors_to_products (
    products_id int(11) NOT NULL,
    color_id int(11) NOT NULL,
    CONSTRAINT PK_assign_colors_to_products PRIMARY KEY (products_id, color_id),
    FOREIGN KEY (products_id) REFERENCES products (products_id),
    FOREIGN KEY (color_id) REFERENCES product_colors (color_id) 
) ENGINE=InnoDB;

INSERT INTO assign_colors_to_products (products_id, color_id) VALUES
(2, 1),
(2, 2),
(3, 1),
(3, 2);

DROP TABLE IF EXISTS assign_media_to_products;
CREATE TABLE IF NOT EXISTS assign_media_to_products(
    products_id int(11) NOT NULL,
    media_id varchar(250) NOT NULL,
    CONSTRAINT PK_assign_media_to_products PRIMARY KEY (products_id, media_id),
    FOREIGN KEY (products_id) REFERENCES products (products_id),
    FOREIGN KEY (media_id) REFERENCES media (media_id)
) ENGINE=InnoDB;

INSERT INTO assign_media_to_products (products_id, media_id) VALUES
(2,'6395d097c6943.png');


DROP TABLE IF EXISTS sales;
CREATE TABLE IF NOT EXISTS sales (
    sale_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(100) NOT NULL,
    `start` date NOT NULL,
    `end` date NOT NULL,
    `description` text
) ENGINE=InnoDB AUTO_INCREMENT=6;

INSERT INTO sales (sale_id, title, `start`, `end`) VALUES
(1, 'black friday 2022', '2022-11-25', '2022-11-25'),
(5, 'Pineapple', '2022-12-10', '2022-12-11');


DROP TABLE IF EXISTS assign_products_to_sales;
CREATE TABLE IF NOT EXISTS assign_products_to_sales (
    sale_id int(11) NOT NULL,
    products_id int(11) NOT NULL,
    sale int(11) NOT NULL,
    saleType varchar(1) NOT NULL,
    CONSTRAINT PK_assign_products_to_sales PRIMARY KEY (sale_id, products_id),
    FOREIGN KEY (sale_id) REFERENCES sales (sale_id),
    FOREIGN KEY (products_id) REFERENCES products (products_id)
) ENGINE=InnoDB;

INSERT INTO assign_products_to_sales (sale_id, products_id, sale, saleType)VALUES
(5, 3, 680, '$'),
(5, 2, 40, '$'),
(1, 2, 120, '$');



DROP TABLE IF EXISTS product_types;
CREATE TABLE IF NOT EXISTS product_types (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `type` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6;

INSERT INTO product_types (id, `type`) VALUES
(1, 'Normal'),
(3, 'Special theme'),
(5, 'Costumized');


DROP TABLE IF EXISTS news;
CREATE TABLE IF NOT EXISTS news (
    news_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(45) NOT NULL,
    `description` text NOT NULL,
    `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    media varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8;

INSERT INTO news (news_id, title, `description`, `time`, media) VALUES
(1, 'About 2023 ', 'It is that time of the year when we reflect on things we have done and look forwards. In March of 2023 we will celebrate our one year anniversary, stay tuned for some surprises from us to you!  We promise to grow even more this upcoming year ', '2022-12-02 11:19:07', '6395d2ada2be0.png'),
(7, 'New Fabric! ', 'We have some great news! From this day and onwards we are partnered with a new supplier for our fabrics used for the bow ties. This supplier is not only nature friendly, but also provides jobs to some of our community members that might find it hard otherwise. ', '2022-12-05 11:27:13', '6395d07c24500.png'),
(6, 'New Collection', 'Winter is already here, and may the new year have not dropped yet, but we want to introduce our new collection for the 2023 valentines day. It is a great time to look for a perfect bow tie for the occasion now and be ready for the special day ahead of  time. ', '2022-12-02 11:44:58', '6395d097c6943.png');


DROP TABLE IF EXISTS frontpage;
CREATE TABLE IF NOT EXISTS frontpage (
    id varchar(50) NOT NULL PRIMARY KEY,
    `text` text
) ENGINE=InnoDB;

INSERT INTO frontpage (id, `text`) VALUES
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
('bannerImageOne', ''),

('bannerSubtitle2', 'Professional edition'),
('bannerTitle2', 'Your bowties'),
('banner2Slogan1', 'Sustainable mindset '),
('banner2Slogan2', 'Quality oriented approach'),
('banner2Slogan3', 'Made to be unique '),
('banner2Text1', 'The Custom ties was established at the start of 2022. It is a family business where every step in creation of your product is done with utmost passion and love. We strive to bring more colors and personality in everyday life by letting you find a perfect bowtie or even create your own! ');


DROP TABLE IF EXISTS `spam_prevention`;
CREATE TABLE IF NOT EXISTS `spam_prevention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2;

INSERT INTO `spam_prevention` (`id`, `name`, `time`) VALUES
(1, 'Niclas', '2022-12-09 10:43:37');


DROP TRIGGER IF EXISTS `increaseTotalSales`;
DELIMITER $$
CREATE TRIGGER `increaseTotalSales` AFTER INSERT ON `purchases` FOR EACH ROW UPDATE `order_counters` SET `count` = `count` + 1 WHERE `name` = 'total'
$$
DELIMITER ;


DROP TRIGGER IF EXISTS `increaseNewSales`;
DELIMITER $$
CREATE TRIGGER `increaseNewSales` AFTER INSERT ON `purchases` FOR EACH ROW UPDATE `order_counters` SET `count` = `count` + 1 WHERE `name` = 'new'
$$
DELIMITER ;