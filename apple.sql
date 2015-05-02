-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2015 at 06:55 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apple`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
`id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `position`, `image`, `title`, `order`, `status`) VALUES
(1, 0, '3.jpg', 'Banner 1', 0, 1),
(3, 0, '41.jpg', 'Banner 2', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`id` int(11) NOT NULL,
  `from` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tour` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tour_id` int(11) NOT NULL,
  `departure` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `from`, `to`, `tour`, `tour_id`, `departure`, `destination`, `adult`, `children`, `email`, `phone`, `content`, `status`) VALUES
(3, '09/12/2014', '', '', 0, 'New York', 'Ha Noi', 10, 2, 'doanngocninh@gmail.com', '84936627738', 'Test \n', 0),
(5, '', '', 'Halong Pelican Cruise 2days/1night', 25, '0', '0', 0, 0, 'dunghq87@gmail.com', '0916864369', 'sdfgasdfs', 0),
(6, '05/01/2015', '', '0', 0, 'abc', 'xyz', 1, 2, 'doanngocninh@gmail.com', '0936627738', 'testasdasd', 0),
(7, '02/02/2015', '06/02/2015', '0', 0, 'hanoi', 'hoian', 2, 2, 'tienluonvangay@gmail.com', '0913091133', 'hello tonny ', 0),
(8, '02/02/2015', '', '0', 0, 'hanoi', 'hoian', 2, 2, 'tienluonvangay@gmail.com', '0913091133', 'hello tonny ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `parent`, `type`, `status`) VALUES
(1, 'Time City', 'Screen_Shot_2015-03-26_at_22.11_.46_.png', '', 1, 0, 1),
(2, 'Royal City', 'Screen_Shot_2015-03-26_at_22.11_.38_.png', '', 0, 0, 1),
(3, 'Time City 2', 'DSC_0002.jpg', '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `category_id`, `title`, `image`, `order`, `status`) VALUES
(1, 1, 'Bikini 1', '1.jpg', 0, 1),
(2, 3, 'Bikini 2', '2.jpg', 0, 1),
(3, 1, 'Bikini 3', '3.jpg', 0, 1),
(4, 1, 'Bikini 4', '4.jpg', 0, 1),
(5, 1, 'Bikini 5', '5.jpg', 0, 1),
(6, 3, 'Bikini 6', '6.jpg', 0, 1),
(7, 0, 'Bikini 7', '7.jpg', 0, 1),
(8, 1, 'Bikini 8', '8.jpg', 0, 1),
(9, 1, 'Bikini 9', '9.jpg', 0, 1),
(10, 1, 'Bikini 10', '10.jpg', 0, 1),
(11, 1, 'Bikini 11', '11.jpg', 0, 1),
(12, 1, 'Bikini 12', '12.jpg', 0, 1),
(13, 1, 'Bikini 13', '13.jpg', 0, 1),
(14, 1, 'Bikini 14', '14.jpg', 0, 1),
(15, 1, 'Bikini 15', '15.jpg', 0, 1),
(16, 1, 'Bikini 16', '16.jpg', 0, 1),
(17, 2, 'Cô đơn 1', '17.jpg', 0, 1),
(18, 2, 'Cô đơn 2', '21.jpg', 0, 1),
(19, 2, 'Cô đơn 3', '31.jpg', 0, 1),
(20, 2, 'Cô đơn 4', '41.jpg', 0, 1),
(21, 2, 'Cô đơn 5', '51.jpg', 0, 1),
(22, 2, 'Cô đơn 6', '61.jpg', 0, 1),
(23, 2, 'Cô đơn 7', '71.jpg', 0, 1),
(24, 2, 'Cô đơn 8', '81.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `image`, `description`, `status`, `order`) VALUES
(2, 'Hoàng Dũng', '2961_4687197597023_2145431549_n.jpg', 'Developer', 1, 0),
(3, 'Quang Trần', '10264908_719234141461852_7078893181152255002_n.jpg', 'Design', 1, 0),
(4, 'Lưu Vĩnh Lộc', '39173_412770658861_3755971_n.jpg', 'PM', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `hot_news` tinyint(4) NOT NULL,
  `home_news` tinyint(4) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `key` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'about', '{"name":"Hanoi5","description":"M\\u1edf \\u0111\\u1ea7u bu\\u1ed5i h\\u1ecdp b\\u00e1o, Ph\\u00f3 ch\\u1ee7 t\\u1ecbch Nguy\\u1ec5n Qu\\u1ed1c H\\u00f9ng cho hay th\\u00e0nh ph\\u1ed1 lu\\u00f4n l\\u1eafng nghe, c\\u1ea7u th\\u1ecb, ti\\u1ebfp thu \\u00fd ki\\u1ebfn ng\\u01b0\\u1eddi d\\u00e2n, c\\u00e1c nh\\u00e0 khoa h\\u1ecdc \\u0111\\u1ec3 x\\u00e2y d\\u1ef1ng Th\\u1ee7 \\u0111\\u00f4 ng\\u00e0y c\\u00e0ng v\\u0103n minh. \\"H\\u00e0 N\\u1ed9i t\\u1eebng c\\u00f3 nh\\u1eefng quy\\u1ebft \\u0111\\u1ecbnh r\\u1ea5t kh\\u00f3 kh\\u0103n nh\\u01b0ng \\u0111em l\\u1ea1i s\\u1ef1 h\\u01b0\\u1edfng \\u1ee9ng c\\u1ee7a ng\\u01b0\\u1eddi d\\u00e2n nh\\u01b0 quy\\u1ebft \\u0111\\u1ecbnh kh\\u00f4ng x\\u00e2y kh\\u00e1ch s\\u1ea1n SAS t\\u1ea1i c\\u00f4ng vi\\u00ean Th\\u1ed1ng Nh\\u1ea5t, kh\\u00f4ng x\\u00e2y d\\u1ef1ng trung t\\u00e2m th\\u01b0\\u01a1ng m\\u1ea1i t\\u1ea1i ch\\u1ee3 19\\/12... Ti\\u1ebfp thu \\u00fd ki\\u1ebfn c\\u00f4ng lu\\u1eadn, Ch\\u1ee7 t\\u1ecbch th\\u00e0nh ph\\u1ed1 \\u0111\\u00e3 c\\u00f3 quy\\u1ebft \\u0111\\u1ecbnh d\\u1eebng vi\\u1ec7c ch\\u1eb7t h\\u1ea1, thay th\\u1ebf c\\u00e2y\\", \\u00f4ng H\\u00f9ng n\\u00f3i.","image":"logo1.png","detail":false}'),
(2, 'phone', '{"name":"Phone","description":"0916287899\\/ 0915698083"}'),
(3, 'email', '{"name":"email","description":"NOITHATHN5@GMAIL.COM","image":"15651506796_19d7dd0844_z.jpg"}'),
(4, 'address', '{"name":"address","description":"S\\u1ed0 33 NG\\u00d5 28 NG\\u1ee4Y NH\\u01af CON TUM - THANH XU\\u00c2N - H\\u00c0 N\\u1ed8I","image":"chuong.jpg"}'),
(5, 'facebook', '{"name":"facebook","description":"FACEBOOK.COM\\/HNFIVE","image":"131_7158.JPG"}'),
(6, 'contact', '{"name":"contact","description":"Li\\u00ean h\\u1ec7","image":"","detail":false}');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE IF NOT EXISTS `supports` (
`id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `reply` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `email`, `phone`, `content`, `reply`, `status`) VALUES
(1, 'dunghq87@gmail.com', '', 'Hoang Dung', '', 0),
(2, 'dunghq87@gmail.com', '', 'CLGTalskdjf;', '', 0),
(3, 'dunghq87@gmail.com', '0916864369', 'gdfgsdf', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `status`) VALUES
(1, 'dunghq87@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
