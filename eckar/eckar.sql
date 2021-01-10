-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 10:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eckar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(255) NOT NULL,
  `about_icon_img` varchar(255) NOT NULL,
  `about_icon_title` varchar(255) NOT NULL,
  `about_icon_desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_icon_img`, `about_icon_title`, `about_icon_desc`, `status`) VALUES
(3, 'images/home-cybersecurity-contact-bg-image4.png', 'Boost Sales', '<p>Attract your customer to your shop with ecommerce mobile application. Send them push notifications on daily discount coupons ,deals and new arrivals.</p>\r\n', 1),
(4, 'images/home-cybersecurity-contact-bg-image2.png', 'cnv,mcnv', '', 0),
(5, 'images/home-cybersecurity-contact-bg-image3.png', 'kkkkkmmmmmm', '', 0),
(6, 'images/pexels-photo-106399_-_Copy.jpeg', 'Retain your Customers', '<p>Facilitate your customers to browse your product catalog, submit orders and make payments instantly. Let them take your shop along wherever they go.</p>\r\n', 1),
(7, 'images/download_(3)_-_Copy.jpg', 'Know your Customers', '<p>Gather feedback, product reviews, track customer behaviour and interests and plan your next campaign with confidence.</p>\r\n', 1),
(8, 'images/pexels-photo-1080696.jpeg', 'Ease of Doing Business', '<p>No need to take order over phone or manually. No need to maintain book of accounts for debtors. Get detailed order reports and receive payments instantly in your bank account.</p>\r\n', 1),
(9, 'images/download_(2)_-_Copy5.jpg', 'nmcnvmv', '<p>ncvmn,mnc,vvncvm,bnmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'shweta gaikwad', 'shweta330@gmail.com', 589658965, '202cb962ac59075b964b07152d234b70'),
(5, 'dhiraj Jadhav', 'jadhavdhiraj@gmail.com', 2147483647, '68053af2923e00204c3ca7c6a3150cf7');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_owner` varchar(255) NOT NULL,
  `blog_desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_img`, `blog_title`, `blog_owner`, `blog_desc`, `status`) VALUES
(2, 'images/download_(1)4.jpg', 'cnmnc', 'mmn,xcn', '<p>nvcmnv,m</p>\r\n', 0),
(3, 'images/blog2.jpg', 'bbvncvbcn', 'poonam', '<p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>\r\n', 1),
(4, 'images/download_(2)3.jpg', 'nbvcnbc', 'shweta', '<p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>\r\n', 1),
(5, 'images/download1.jpg', 'bmnbmnfb', 'sonam', '<p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>\r\n', 1),
(6, 'images/download.png', 'nbnbfmnbd', 'dhiraj', '<p>Quis autem velis etis reprehender etid quiste voluptate velite esse quam nihis etsa illum sedit varias netsum.</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_mobile` varchar(255) NOT NULL,
  `contact_msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_mobile` int(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`contact_id`, `contact_name`, `contact_email`, `contact_mobile`, `contact_message`, `status`) VALUES
(1, 'shweta gaikwad', 'shweta@gmail.com', 2147483647, 'nnbncbnmcbnvbcn', 1),
(2, 'shiva mogal', 'shiva@gmail.com', 2147483647, 'vbncbv bnbvmnvbmcvbmc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `feature_icon_img` varchar(255) NOT NULL,
  `feature_icon_title` varchar(255) NOT NULL,
  `feature_icon_desc` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `feature_icon_img`, `feature_icon_title`, `feature_icon_desc`, `status`) VALUES
(2, 'images/blog24.jpg', 'bbmnb', '<p>gghkfgflk</p>\r\n', 0),
(3, 'images/download_(2)_-_Copy3.jpg', 'nmfn', 'nvmcvn', 0),
(4, 'images/eco-green-machine-icon-32-183455.png', 'nmdfmdn', '<p>ndmdm,dn,m</p>\r\n', 0),
(5, 'images/eco-green-machine-icon-32-1834551.png', 'anmn', '<p>sskj</p>\r\n', 1),
(6, 'images/eco-green-machine-icon-32-1834552.png', '', '', 0),
(7, 'images/eco-green-machine-icon-32-1834553.png', 'mn', '<p>cxmnxm</p>\r\n', 1),
(8, 'images/eco-green-machine-icon-32-1834554.png', 'bnb', '<p>xnmxn,mz</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(255) NOT NULL,
  `gallery_latest_app_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_latest_app_image`, `status`) VALUES
(2, 'images/blog25.jpg', 0),
(3, 'images/download_(2)1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_app_img` varchar(255) NOT NULL,
  `home_desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_app_img`, `home_desc`, `status`) VALUES
(2, 'images/slider-cybersecurity-slide-01-image-018.png', '<ul>\r\n	<li><strong><em>bnbmnbmnbnbm</em></strong></li>\r\n	<li><strong><em>cvcnvbncnbn</em></strong></li>\r\n	<li><strong><em>vncmvn</em></strong></li>\r\n	<li><strong><em>vmcv</em></strong></li>\r\n</ul>\r\n', 1),
(3, 'images/download_(2)2.jpg', '', 0),
(4, 'images/download_(2)_-_Copy4.jpg', '<p>bnbgmfdn</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `office_contact_details`
--

CREATE TABLE `office_contact_details` (
  `id` int(255) NOT NULL,
  `office_address` int(255) NOT NULL,
  `office_mobile` int(255) NOT NULL,
  `office_map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `pricing_id` int(255) NOT NULL,
  `pricing_title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pricing_desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`pricing_id`, `pricing_title`, `price`, `pricing_desc`, `status`) VALUES
(2, 'STARTER', '50K', '<ul>\r\n	<li>1 Android App</li>\r\n	<li>Default App Future</li>\r\n	<li>Secure Payment Geteway</li>\r\n	<li>1 Month Free Support</li>\r\n	<li>Custom color choice</li>\r\n	<li>Attractive design</li>\r\n	<li>Support all Android Mobile</li>\r\n</ul>\r\n', 1),
(3, 'VENTURE', '60K', '<ul>\r\n	<li>All STARTER Features Plus,</li>\r\n	<li>1 PWA App</li>\r\n	<li>Secure Payment Geteway</li>\r\n	<li>3 Month Free Support</li>\r\n	<li>Choice for 10 + design and layout</li>\r\n	<li>Support all Android Mobile</li>\r\n</ul>\r\n', 1),
(4, 'SPECIAL', '95k', '<ul>\r\n	<li>All VENTURE Features Plus,</li>\r\n	<li>1 ios app</li>\r\n	<li>6 month free support</li>\r\n	<li>Free create your social media presence</li>\r\n	<li>Free 1 month facebook marketing</li>\r\n	<li>Free list your bussiness to google</li>\r\n	<li>Provided exper', 1),
(5, 'BUSINESS', '980k ', '<ul>\r\n	<li>All VENTURE SPECIAL Plus,</li>\r\n	<li>1 Responsive website</li>\r\n	<li>1 delivery and vendor app(android and ios)</li>\r\n	<li>Manage customer managment and marketing</li>\r\n	<li>Multi vendor, multi lang, multi payment getway</li>\r\n</ul>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `email_newsletter_id` int(11) NOT NULL,
  `email_newsletter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`email_newsletter_id`, `email_newsletter`) VALUES
(1, 'xbnbc@gmail.com'),
(2, ''),
(3, 'Shweta@gmail.com'),
(4, ''),
(5, 'Shweta@gmail.com'),
(6, 'fnjn@gmi.com'),
(7, 'Shweta@gmail.com'),
(8, 'Shweta@gmail.com'),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, ''),
(14, '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(255) NOT NULL,
  `team_title` varchar(255) NOT NULL,
  `team_sub_title` varchar(255) NOT NULL,
  `team_member_img` varchar(255) NOT NULL,
  `team_mem_desig` varchar(255) NOT NULL,
  `team_mem_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_enquiry`
--

CREATE TABLE `user_enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `enquiry_name` varchar(255) NOT NULL,
  `enquiry_email` varchar(255) NOT NULL,
  `enquiry_mobile` varchar(255) NOT NULL,
  `enquiry_message` varchar(255) NOT NULL,
  `enquiry_about` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `office_contact_details`
--
ALTER TABLE `office_contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`pricing_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`email_newsletter_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user_enquiry`
--
ALTER TABLE `user_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `office_contact_details`
--
ALTER TABLE `office_contact_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `pricing_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `email_newsletter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_enquiry`
--
ALTER TABLE `user_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
