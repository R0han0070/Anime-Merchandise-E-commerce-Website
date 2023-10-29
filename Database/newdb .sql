-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 11:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_data`
--

DROP TABLE IF EXISTS `cart_data`;
CREATE TABLE `cart_data` (
  `c_id` int(11) NOT NULL,
  `ses` varchar(40) NOT NULL,
  `i_id` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL DEFAULT 'M',
  `code` varchar(10) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_data`
--

INSERT INTO `cart_data` (`c_id`, `ses`, `i_id`, `size`, `code`, `price`) VALUES
(174, '45effb1b55fe018f02159d40be8b5952', '42', 'M', '', '260'),
(175, '45effb1b55fe018f02159d40be8b5952', '42', 'M', '', '260'),
(176, '45effb1b55fe018f02159d40be8b5952', '41', 'M', '', '250'),
(177, '45effb1b55fe018f02159d40be8b5952', '41', 'M', '', '250');

-- --------------------------------------------------------

--
-- Table structure for table `productdb`
--

DROP TABLE IF EXISTS `productdb`;
CREATE TABLE `productdb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `rating` int(5) NOT NULL,
  `style` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `sleeve_length` varchar(20) NOT NULL,
  `material` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `collar` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `j_anime` varchar(30) NOT NULL,
  `a_character` varchar(20) NOT NULL,
  `pagecode` varchar(25) NOT NULL,
  `dimension` varchar(30) NOT NULL,
  `descri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productdb`
--

INSERT INTO `productdb` (`id`, `product_name`, `product_price`, `product_desc`, `product_image`, `rating`, `style`, `color`, `sleeve_length`, `material`, `gender`, `collar`, `type`, `j_anime`, `a_character`, `pagecode`, `dimension`, `descri`) VALUES
(0, 'Naruto Notebook Set', 600, 'Set of 4 hardcover Naruto notebooks', 'Naruto_notebook.jpeg', 5, '', 'Multicolor', '', '', '', '', 'Notebook', 'Naruto', 'Naruto', 'stationery', '29.7 x 21 cm', 'Type of ruling: Single Line\r\nCover: hardcover\r\nPages:172 per notebook\r\nQuantity: 4'),
(1, 'Kageyama Tshirt', 500, 'Haikyu!! Tobio Kageyama short-sleeved bl', 'Kageyama_tshirt.jpeg', 5, 'Casual', 'Black', 'Short', 'Cotton', 'Unisex', ')-neck', 'T-shirt', 'Haikyu!!', 'Tobio Kageyama', 'apparel', '', ''),
(2, 'Gojo Meme T-shirt', 399, 'Gojo White \'I\'ll kill you\' meme t-shirt.', 'gojo_tshirt.jpeg', 4, 'Casual', 'White', 'Short', 'Cotton', 'Unisex', 'O-neck', 'T-shirt', 'Jujutsu kaisen', 'Gojo Satoru', 'apparel', '', ''),
(3, 'BNHA Tshirt', 500, 'BNHA Yellow Unisex half sleeved t-shirt', 'BNHA_tshirt.jpeg', 5, 'Casual', 'Yellow', 'Half', 'Cotton', ' Unisex', 'O-Neck', 'T-shirt', 'My Hero Academia', '', 'apparel', '', ''),
(4, 'Pink Haikyu!! top', 400, 'Womens Light Pink Haikyu!! t-shirt', 'Haikyu_pink_tshirt.jpeg', 5, 'Casual', '', 'Half', 'Cotton', 'Female', 'O-neck', 'T-shirt', 'Haikyu!!', '', 'apparel', '', ''),
(5, 'Itachi Comic Print T-shirt', 399, 'Itachi comic print cotton Black T-shirt', 'Itachi_tshirt.jpeg', 5, 'Casual', 'Black', 'Half', 'Cotton', 'Unisex', 'O-Neck', 'T-shirt', 'Naruto', 'Itachi Uchiha', 'apparel', '', ''),
(6, 'Izuku Midoriya White T-shirt', 300, '', 'midoriya_tshirt.jpg', 4, 'Casual', 'White', 'Short', 'Cotton', 'Unisex', 'O-Neck', 'T-shirt', 'My Hero Academia', 'Izuku Midoriya', 'apparel', '', ''),
(7, 'Bleach Hoodie', 1000, 'Bleach ICHIGO Color-block Hoodie', 'Bleach_hoodie.jpeg', 5, 'Casual', 'White & Mint', 'Full', 'polyester', '', 'O-Neck', 'Hoodie', 'Bleach', 'Ichigo', 'apparel', '', ''),
(8, 'Black Tanjiro top', 300, 'Womens Black Tanjiro t-shirt', 'tanjiro_top.jpeg', 5, 'Casual', 'Black', 'full', 'cotton', 'Female', '', 'O-Neck', 'Demaon Slayer', 'Tanjiro Kamado', 'apparel', '', ''),
(9, 'Tokyo Ghoul Off Shoulder Hoodie', 899, 'Women\'s Tokyo Ghoul Anime Printed Casual Off Shoulder Hoodie.', 'TokyoGhoul_hoodie.jpeg', 4, 'Casual', 'Black', '', 'Cotton', 'Female', '', 'O-Neck', 'Tokyo Ghoul', 'Kaneki', 'apparel', '', ''),
(10, 'Men\'s Attack On Titan Hoo', NULL, 'Men\'s Attack On Titans Cotton Hooded Sweatshirt', 'AOT_hoodie.jpeg', 5, '', '', 'FULL', 'COTTON', 'MALE', '', 'HOODIE', 'ATTACK ON TITANS', '', 'apparel', '', ''),
(11, 'Death Note L Hoodie', 899, 'Death Note Unisex Pullover L Hoodie', 'DeathNote_hoodie.jpg', 4, 'CASUAL', 'DARK GREY', 'FULL', 'POLYESTER', 'UNISEX', 'O-Neck', 'HOODIE', 'DEATH NOTE', 'L', 'apparel', '', ''),
(12, 'Haikyu!! white t-shirt', 400, 'Unisex White half sleeved Haikyu!! t-shirt', 'Haikyu_tshirt.jpeg', 5, 'Casual', 'WHITE', 'Half', 'COTTON', 'UNISEX', 'O-Neck', 'T-SHIRT', 'HAIKYU!!', '', 'apparel', '', ''),
(15, 'Pink Bakugo T-shirt', 399, 'Womens Pink short-sleeved Bakugo t-shirt', 'Bakugo_tshirt.jpg', 4, 'Casual', 'LIGHT PINK', 'Half', 'COTTON', 'Female', 'O-Neck', 'T-SHIRT', 'BNHA', 'Bakugo', 'apparel', '', ''),
(16, 'Killua Zoldyck Purple Hoodie', 1000, 'Killua Zoldyck Purple Hoodie', 'HunterXHunter_hoodie.jpg', 4, 'Casual', 'PURPLE', 'FULL', 'COTTON', ' Unisex', 'O-Neck', 'HOODIE', 'HUNTERXHUNTER', 'KILLUA ZOLDYCK', 'apparel', '', ''),
(17, 'Attack On Titans Hoodie', 1000, 'White Attack On Titans logo pullover Hoodie', 'AttackOnTitan_Hoodie.jpeg', 5, 'CASUAL', 'White', 'FULL', 'POLYESTER', 'UNISEX', 'O-NECK', 'HOODIE', 'ATTACK ON TITANS', '', 'apparel', '', ''),
(18, 'Naruto Black Jutsu It Sweatshirt', 700, 'Naruto Unisex Jutsu It Pullover Sweatshirt', 'Naruto_JutsuIt_sweatshirt.jpeg', 5, 'Casual', 'Black', 'FULL', 'COTTON', ' Unisex', 'O-Neck', 'sweatshirt', 'Naruto', '', 'apparel', '', ''),
(19, 'Nezuko Kamado Purple Hood', 449, 'Demon Slayer Nezuko Kamado Pullover Hoodie', 'Nezuko_Hoodie.jpeg', 5, 'Casual', 'PURPLE', 'FULL', 'polyester', 'UNISEX', 'O-Neck', 'HOODIE', 'Demon Slayer', 'Nezuko Kamado', 'apparel', '', ''),
(20, 'Attack On Titans pant', 490, 'Black Attack On Titans pant', 'AttackOnTitan_pant.jpeg', 4, 'Casual', 'Black', '', 'COTTON', 'UNISEX', '', 'Pants', 'ATTACK ON TITANS', '', 'apparel', '', ''),
(21, 'Nezuko Action Figure', 300, 'Demon Slayer Nezuko Kamado Vinyl Figure Collectible\n', 'nezuko_actionfigure.png', 4, '', '', '', '', '', '', '', ' Demon Slayer: Kimet', 'Nezuko Kamado', 'actionfigure', '', ''),
(22, 'Demon Slayer Pen Set', 170, '4 piece demon slayer ball pen set.', 'DemonSlayer_pen.jpeg', 4, '', ' Multicolor', '', 'Plastic', '', '', 'Ball Pen', 'Demon Slayer', '', 'stationery', '14 cm', ' Ink: Blue\r\n Ink: Blue'),
(23, 'Bleach Sword Pen', 170, 'Bleach sword pen', 'Bleach_Pen.jpeg', 5, '', 'Black', '', 'Plastic', '', '', 'Ball Pen', 'Bleach', '', 'stationery', '14cm', 'Ink: Black'),
(24, 'Ken Kaneki Sketchbook', 300, 'White Tokyo Ghoul Kaneki Wire-o-Bound sketchbook', 'TokyoGhoul_notebook.jpeg', 5, '', ' White', '', '90 gsm paper', '', '', 'Notebook', 'Tokyo Ghoul', 'kaneki ken', 'stationery', '22 x 14 cm', 'Type of ruling: Blank\r\nBinding: Wire-o-Bound\r\nPages:250'),
(25, 'Purple Nezuko Kamado Wire-o-Bound Notebook', 250, 'Purple Nezuko Kamado Wire-o-Bound notebook', 'NezukoKamado_notebook.jpg', 4, '', 'Purple', '', '70 gsm paper', '', '', 'Notebook', '', '', 'stationery', '22 x 14 cm', 'Type of ruling: Single Line\r\nBinding: Wire-o-Bound'),
(26, 'ATTACK ON TITAN BRACELET', 500, 'LEATHER ATTACKO ON TITANS BRACELET', 'AttackOnTitan_bracelet.jpeg', 5, '', 'BLACK WHITE', '', 'LEATHER,METAL', 'UNISEX', '', 'BRACELET', 'ATTACK ON TITANS', '', 'accessory', '17cm', ''),
(27, 'Tanjiro Earring', 289, '', 'demonslayer_earring.jpeg', 4, '', 'BLUE', '', 'METAL', 'UNISEX', '', 'EARRINGS', 'DEMON SLAYER', 'TANjIRO', 'accessory', '', ''),
(28, 'Hatake Kakashi Action Figure', 400, 'Action Figure Hatake Kakashi PVC Figure Toy.', 'kakashiaf.jpeg', 5, '', '', '', 'PVC (Polyvinyl Chloride)', '', '', 'Action figure', 'NARUTO', 'Hatake kakashi', 'actionfigure', '6 inch x 18 inch', 'Non Battery Operated'),
(29, 'Katsuki Bakugo Action Fig', 499, 'My Hero Academia (Boku no Hero Academia) Action Figure Katsuki Bakugo Vinyl Figure Collectible PVC chibi Figure Toy.', 'Bakugochibi_actionfigure.jpeg', 5, '', '', '', ' PVC (Polyvinyl Chlo', '', '', 'action figure', 'BNHA', 'Katsuki Bakugo', 'actionfigure', '6 inch x 18 inch', ''),
(30, 'My Hero Academia Poster Pack', 770, 'BNHA posters set of 6', 'MyHeroAcademia_poster.jpeg', 3, '', 'multicolor', '', 'Plastic', '', '', 'poster', 'BNHA', '', 'poster', '29.7 x 21 cm', ''),
(31, 'Hinata Action figure', 499, 'NARUTO Hinata Hyuga PVC action figure', 'Hinata_actionfigure.jpeg', 5, '', '', '', 'PVC (Polyvinyl Chloride)', '', '', 'Action Figure', 'Naruto', 'Hinata Hyuga', 'actionfigure', '6 inch x 18 inch', ''),
(32, 'Sasuke Action Figure', 499, 'Sasuke Uchiha PVC Action figure', 'Sasuke_actionfigure.jpeg', 5, '', '', '', ' PVC (Polyvinyl Chloride)', '', '', 'action figure', 'Naruto', 'Sasuke Uchiha', 'actionfigure', '6 inch x 18 inch', ''),
(33, 'Tanjiro Chibi Action Figure', 300, 'Demon Slayer Tanjiro PVC Action Figure', 'tanjirouaf.jpg', 5, '', '', '', '', '', '', 'Action Figure', 'Demon Slayer', 'Tanjiro Kamado', 'actionfigure', '6 inch x 18 inch', ''),
(34, 'Zenitsu Action figure', 400, '', 'Zenitsu_actionfigure.jpg', 4, '', '', '', ' PVC (Polyvinyl Chloride)', '', '', 'action figure', 'DEMON SLAYER', 'Zenitsu Agatsuma', 'actionfigure', '6 inch x 18 inch', ''),
(35, 'Fullmetal Alchemists Locket', 400, 'Metal fullmetal alchemists locket', 'FullmetalAlchemist_lockets.jpeg', 4, '', 'Bronze', '', 'Metal,Leather', 'UNISEX', '', 'Locket', 'FullMetal Alchemist', '', 'accessory', ' 26 cm', ''),
(36, 'Jujustsu Kaisen Keychain', 399, 'Jujutsu Kaisen keychain set', 'JujutsuKaisen_keychain.jpeg', 5, '', 'Multicolor', '', 'Plastic,PVC', '', '', 'keychain', 'Jujutsu kaisen', 'Gojo,nobara', 'accessory', '14 cm', ''),
(37, 'Haikyu!! Bracelet', 399, 'Black Haikyu!! Wrist Band', 'Haikyu_bracelet.jpg', 5, '', 'Black', '', 'Rubber', 'UNISEX', '', 'wristband', 'HAIKYU!!', 'karasuno', 'accessory', '16cm x 3cm', ''),
(38, 'Detective Conan eraser set', 70, '4 piece long eraser set', 'DetectiveConan_eraser.jpeg', 3, '', 'Multicolor', '', 'Eraser', '', '', 'Eraser', 'Detective Conan', 'Conan', 'stationery', '3inchx2inch', ''),
(39, 'HunterXHunter pin set', 500, '6 units HunterXhunter pins set', 'HunterXhunter_pins.jpeg', 5, '', 'Multicolor', '', 'metal steel', 'UNISEX', '', 'Pins', 'HUNTERXHUNTER', 'gon,killua,hisoka..', 'accessory', '5 cm r', ''),
(40, 'Tokyo Ghoul Poster', 199, 'kaneki tokyo ghoul poster', 'tokyoghoul_poster.jpg', 5, '', 'Red &black', '', 'Plastic', '', '', 'poster', 'Tokyo Ghoul', 'kaneki ken', 'poster', '24x36 cm', ''),
(41, 'Levi Poster', 250, 'Levi big poster', 'levi_poster.jpg', 5, '', 'multicolor', '', 'Plastic', '', '', 'poster', 'ATTACK ON TITANS', 'Levi', 'poster', '30x40cm', ''),
(42, 'Demon Slayer Poster', 260, 'Demon Slayer big poster', 'demonslayer_poster.jpg', 5, '', 'Multicolor', '', 'Plastic', '', '', 'poster', 'Demon Slayer', '', 'poster', '30x45 cm', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup` (
  `Username` varchar(20) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `Contact` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Zip` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `Name`, `Contact`, `Address`, `Zip`, `Email`, `password`) VALUES
('user1', 'manasi', 10293848, 'panvel navi mumbai Maharashtra India', 410206, 'petrovaevelinka07@gmail.com', 1234),
('user2', 'manasi', 2147483647, 'hzgdfdghehuj', 1663, 'hshd@ajd', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_data`
--
ALTER TABLE `cart_data`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `productdb`
--
ALTER TABLE `productdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Contact` (`Contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_data`
--
ALTER TABLE `cart_data`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `productdb`
--
ALTER TABLE `productdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
