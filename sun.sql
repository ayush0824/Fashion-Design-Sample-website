-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2017 at 06:59 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sun`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(5) NOT NULL,
  `abouttext` text NOT NULL,
  `aimg` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `abouttext`, `aimg`, `date`) VALUES
(1, 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. <p>Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. <p>Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem.', '187769pic05.jpg', '2008-01-01 11:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(5) NOT NULL,
  `bcategory` varchar(255) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bcontent` varchar(255) NOT NULL,
  `bimg` varchar(100) DEFAULT NULL,
  `bsummary` text NOT NULL,
  `bvisible` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `bcategory`, `btitle`, `bcontent`, `bimg`, `bsummary`, `bvisible`, `date`) VALUES
(1, '1', 'Mauris convallis dignissim', 'Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.', '193915news_image_03.jpg', 'Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.', 1, '2008-01-01 22:57:17'),
(2, '2', 'Venenatis turpis mattis quam', 'Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.', '198310news_image_02.jpg', 'Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes.', 1, '2008-01-01 22:58:37'),
(3, '1', 'Sunflower Theme ', 'Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.', '193165pic05.jpg', 'Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. ', 1, '2008-01-01 22:58:54'),
(5, '4', 'Mauris convallis dignissim tellus', 'Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.', '199506blog_image_03.jpg', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. ', 0, '2008-01-01 22:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `id` int(5) NOT NULL,
  `bcategory` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`id`, `bcategory`, `date`) VALUES
(1, 'Anita', '2008-01-02 01:32:48'),
(2, 'Education', '2008-01-02 05:07:00'),
(3, 'Sunflower', '2008-01-02 05:07:14'),
(4, 'Tour', '2008-01-01 09:19:01'),
(5, 'Winter', '2016-12-23 10:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(5) NOT NULL,
  `cperson` varchar(50) NOT NULL,
  `mnumber` varchar(20) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `cperson`, `mnumber`, `pnumber`, `address`, `pincode`, `fax`, `email`, `date`) VALUES
(1, 'Pulak', '9530181513', '+91-0291-xxxxxxx', '52-A, Ansari Nagar Basni_1st Phase, Maduban-Kudi Link Road, Jodhpur(Raj.)', '342005', '0291-xxxxxxx', 'kishorpulak@gmail.com', '2008-01-01 08:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(5) NOT NULL,
  `cperson` varchar(50) NOT NULL,
  `contactno` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cmessage` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `cperson`, `contactno`, `email`, `caddress`, `cmessage`, `date`) VALUES
(1, 'Anita', '9530181513', 'kishorpulak@gmail.com', '52-A, Rameshwar Nagar, Jodhpur(Raj.)', 'My work complete on monday.I am very busy person.', '2008-01-02 04:37:31'),
(2, 'Anita', '9530181513', 'kishorpulak@gmail.com', '52-A, Rameshwar Nagar, Jodhpur(Raj.)', 'My work complete on monday.I am very busy person.', '2008-01-02 04:37:47'),
(3, 'Anita', '9530181513', 'kishorpulak@gmail.com', '52-A, Rameshwar Nagar, Jodhpur(Raj.)', 'My work complete on monday.I am very busy person.', '2008-01-02 04:52:37'),
(4, 'Anay', '96603036365', 'anay@gmail.com', '52A', 'my birthday', '2016-12-26 06:53:19'),
(5, 'durgesh', '9461808707', 'narayand4@gmail.com', '52A', 'my son birthday', '2016-12-26 06:54:12'),
(8, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 11:59:01'),
(9, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 12:17:15'),
(10, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 12:24:02'),
(11, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 12:28:14'),
(12, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 12:31:18'),
(13, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:02:13'),
(14, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:03:18'),
(15, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:04:51'),
(16, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:05:03'),
(17, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:06:13'),
(18, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:06:35'),
(19, 'avc', '4554623344333222', 'erwerewrw@fdf.com', 'dfsdfs', 'fsdgsfdg', '2016-12-28 15:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `gtitle` varchar(100) NOT NULL,
  `gimg` varchar(50) DEFAULT NULL,
  `gvisible` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gtitle`, `gimg`, `gvisible`, `date`) VALUES
(1, 'Surendra Solanki', '108863pic05.jpg', 1, '2008-01-02 04:01:51'),
(2, 'Ayush', '159632image_04_l.jpg', 1, '2008-01-02 00:48:01'),
(5, 'Dmatics', '65413image_02_l.jpg', 0, '2008-01-02 00:52:25'),
(6, 'Quisque nulla quis sem', '15015902.jpg', 1, '2008-01-01 17:33:29'),
(7, 'Credits go to Free Photos ', '19755304.jpg', 1, '2008-01-01 17:39:52'),
(8, 'Sunflower Theme', '7455605.jpg', 1, '2008-01-01 17:40:40'),
(10, ' Quisque in diam', '11397image_04_l.jpg', 1, '2008-01-01 17:55:46'),
(11, 'Vivamus leo velit', '104908image_08_s.jpg', 1, '2008-01-01 17:56:17'),
(12, 'Ut sodales libero', '35243image_07_s.jpg', 1, '2008-01-01 17:56:49'),
(13, 'Vivamus molestie', '97737image_04_l.jpg', 1, '2008-01-01 17:57:32'),
(14, 'Class aptent taciti ', '22945image_03_l.jpg', 1, '2008-01-01 17:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(5) NOT NULL,
  `htext1` text NOT NULL,
  `htext2` text NOT NULL,
  `himg` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `htext1`, `htext2`, `himg`, `date`) VALUES
(1, 'This is my updated page. Ut faucibus massa nec ligula facilisis ac commodo diam porta. Sed volutpat suscipit nunc nec tempus. Duis leo libero, iaculis nec sed. Pellentesque congue viverra mauris, a semper elit viverra malesuada. Suspendisse pellentesque est et enim tincidunt sed facilisis libero dapibus.', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. \r\n\r\nVivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. \r\n\r\nQuisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate.\r\n\r\nCredits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. \r\n\r\nSunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. \r\n\r\nQuisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. ', '109150pic02.jpg', '2008-01-01 11:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `ntitle` varchar(100) NOT NULL,
  `ndescr` text NOT NULL,
  `nimg` varchar(255) DEFAULT NULL,
  `nvisible` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `ntitle`, `ndescr`, `nimg`, `nvisible`, `date`) VALUES
(10, 'Venenatis turpis mattis', 'Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes.', '68403puk.jpg', 1, '2008-01-01 08:11:20'),
(11, 'Ut faucibus massa', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat.', '27772185486blog_image_03.jpg', 1, '2008-01-01 08:28:43'),
(12, 'Mauris quis nulla sed', 'Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio.', '16880676930news_image_04.jpg', 1, '2008-01-01 08:29:44'),
(13, 'Condimentum molestie', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis.', '15043422291news_image_01.jpg', 1, '2008-01-01 08:30:44'),
(14, 'Ut faucibus massa', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. ', '33638news_image_01.jpg', 1, '2008-01-01 08:31:34'),
(15, 'oj', 'hgcghcg', '8949401.jpg', 1, '2017-01-23 07:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(5) NOT NULL,
  `stitle` varchar(50) NOT NULL,
  `sdescr` text NOT NULL,
  `simg` varchar(50) DEFAULT NULL,
  `svisible` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `stitle`, `sdescr`, `simg`, `svisible`, `date`) VALUES
(3, 'Online Advertising', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '139576onebit_16.png', 1, '2008-01-01 09:39:03'),
(5, 'Sunflower Theme ', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes.', '106989blog_image_03.jpg', 1, '2008-01-01 18:39:19'),
(8, 'Online Marketing', 'Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Validate XHTML and CSS. Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes.', '149506girl.png', 1, '2008-01-01 08:18:23'),
(9, 'Quisque in diam', 'Sunflower Theme is free website template by tooplate. Credits go to Free Photos for photos and forty-winks for Photoshop brushes. Quisque in diam a justo condimentum molestie. Vivamus a velit. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis.', '124256banner-students.jpg', 1, '2008-01-01 08:25:04'),
(10, 'Ut faucibus massa', 'This is my updated page. Ut faucibus massa nec ligula facilisis ac commodo diam porta. Sed volutpat suscipit nunc nec tempus. Duis leo libero, iaculis nec sed. Pellentesque congue viverra mauris, a semper elit viverra malesuada. Suspendisse pellentesque est et enim tincidunt sed facilisis libero dapibus.', '1681711974.jpg', 1, '2008-01-01 08:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(5) NOT NULL,
  `sltitle` varchar(250) NOT NULL,
  `slimg` varchar(100) DEFAULT NULL,
  `slvisible` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `sltitle`, `slimg`, `slvisible`, `date`) VALUES
(3, 'Ut faucibus massa', '1843022.jpg', 1, '2008-01-01 08:22:54'),
(4, 'Second Slider', '60719image_01_l.jpg', 1, '2008-01-01 09:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `upass`) VALUES
(1, 'admin', 'admin'),
(2, 'demo', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
