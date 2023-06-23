-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 01:42 AM
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
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `admin_role` int(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `name`, `email`, `pwd`, `mobile`, `admin_role`, `status`) VALUES
(1, 'shweta', 'shweta.spitertech@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', '', 2, 1),
(3, 'priya', 'priya@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', '', 1, 1),
(4, 'sonam', 'sonam@gmail.com', '698d51a19d8a121ce581499d7b701668', '', 3, 0),
(5, 'monal', 'monal@gmail.com', '202cb962ac59075b964b07152d234b70', '', 1, 1),
(6, 'punam', 'shweta.spitertech@gmail.com', '698d51a19d8a121ce581499d7b701668', '', 1, 1),
(7, 'shweta gaikwad', 'shwetagaikwad330@gmail.com', '698d51a19d8a121ce581499d7b701668', '', 1, 1),
(8, 'shweta gaikwad', 'shwetagaikwad330@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, 1),
(9, 'shweta jadhav', 'shweta330@gmail.com', '698d51a19d8a121ce581499d7b701668', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `agent_desc` varchar(255) NOT NULL,
  `agent_img` varchar(255) NOT NULL,
  `agent_email` varchar(255) NOT NULL,
  `agent_mobile` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `agent_name`, `agent_desc`, `agent_img`, `agent_email`, `agent_mobile`, `status`) VALUES
(1, 'anagha', '<span style=\"color: rgb(34, 34, 34); font-family: helvetica, &quot;Segoe UI&quot;, Arial, sans-serif;\">You’ve heard the chant. You may not have heard of the sport, but you’ve heard the chant. The chant - one that a billion people once lived by; one that w', 'images/images_(1).jpg', 'anagha@gmail.com', '8524785266', 1),
(2, 'Tushar dixit', '<span style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 16px;\">The search for qualified employees is a challenging but necessary task. Creating a job posting with a compelling description can make it a little eas.</span><h4 id', 'images/images_(3).jpg', 'tushar@gmail.com', '8524785214', 1),
(3, 'soham', '<p><span style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, sans-serif; font-size: 16px;\">The search for qualified employees is a challenging but necessary task. Creating a job posting with a compelling description can make it a little easier</span><', 'images/images.jpg', 'soham@gmil.com', '85475825145', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_content` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_date` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `seo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_name`, `blog_content`, `blog_img`, `blog_date`, `status`, `seo_url`) VALUES
(6, 'WPBeginner Business Name Generator', '<p><span style=\"color: rgb(57, 57, 57); font-family: sofia-pro, Arial, sans-serif; font-size: 18px; letter-spacing: 0.09px;\">Zyro is originally a website builder for creating beautiful blogs using simple drag and drop. But they also offer free tools to he', 'images/images_(1)4.jpg', '2022-12-20 04:29:54', 1, 'wpbeginner-business-name-generator'),
(7, '', '<p>v ,cv</p>', 'images/images9.jpg', '0000-00-00 00:00:00', 0, ''),
(8, 'mnn', '<p>vncnv</p>', 'images/images10.jpg', '0000-00-00 00:00:00', 0, ''),
(9, 'Blog Name Generator by ThemeIsle', '<p><span style=\"color: rgb(57, 57, 57); font-family: sofia-pro, Arial, sans-serif; font-size: 18px; letter-spacing: 0.09px;\">dd any other domain name that you already own to the cart. Subsequently, you can check out the domain names from the cart page, pu', 'images/images5.jpg', '2022-12-20 04:30:37', 1, 'blog-name-generator-by-themeisle'),
(10, 'DomainWheel', '<p><span style=\"color: rgb(57, 57, 57); font-family: sofia-pro, Arial, sans-serif; font-size: 18px; letter-spacing: 0.09px;\">Wordoid is an intelligent naming tool that helps you choose quality names using no more than 15 letters. Type in your keyword, sel', 'images/images_(2)1.jpg', '2022-12-20 04:30:41', 1, 'domainwheel'),
(11, 'Zyro Business Name Generator', '<p><span style=\"color: rgb(57, 57, 57); font-family: sofia-pro, Arial, sans-serif; font-size: 18px; letter-spacing: 0.09px;\">Just describe your idea in two words and click Search in Panabee. You’ll have a list of available names based on the words. To hel', 'images/images_(1)5.jpg', '2022-12-20 04:30:46', 1, 'zyro-business-name-generator');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone_no`, `email`, `msg`) VALUES
(1, 'shweta gaikwad', 5464646, 'dmnn', 'ffb ht'),
(2, 'shweta gaikwad', 5464646, 'dmnn', 'ffb ht');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(255) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_slider_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `property_id`, `property_slider_img`) VALUES
(1, 159, 'images/photo-1559966303-99414caa494a1.jpg'),
(2, 159, 'images/photo-1560184897-ae75f418493e_(1)1.jpg'),
(3, 159, 'images/photo-1560185127-2d06c6d08d3d3.jpg'),
(4, 160, 'images/download_(3)_-_Copy30.jpg'),
(41, 164, 'images/download24.jpg'),
(43, 164, 'images/pexels-photo-28022115.jpeg'),
(44, 164, 'images/pexels-photo-1080696_-_Copy.jpeg'),
(45, 164, 'images/pexels-photo-108069617.jpeg'),
(47, 165, 'images/download26.jpg'),
(48, 165, 'images/download27.jpg'),
(49, 165, 'images/download28.jpg'),
(50, 165, 'images/download29.jpg'),
(51, 165, 'images/download30.jpg'),
(52, 1, 'images/download_(2)95.jpg'),
(53, 1, 'images/download_(3)_-_Copy39.jpg'),
(54, 1, 'images/download31.jpg'),
(55, 1, 'images/pexels-photo-10639948.jpeg'),
(56, 1, 'images/pexels-photo-16452222.jpeg'),
(57, 1, 'images/pexels-photo-28022117.jpeg'),
(58, 2, 'images/download_(1)96.jpg'),
(59, 2, 'images/download_(2)96.jpg'),
(60, 2, 'images/pexels-photo-106399_-_Copy21.jpeg'),
(61, 2, 'images/pexels-photo-10639949.jpeg'),
(62, 2, 'images/pexels-photo-16452223.jpeg'),
(63, 2, 'images/pexels-photo-28022118.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_description` varchar(255) NOT NULL,
  `page_img` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_url`, `page_description`, `page_img`, `status`) VALUES
(1, 'Business Background', 'Business Background', 'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.', 'images/images4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `property_price` int(255) NOT NULL,
  `property_kitchen` int(255) NOT NULL,
  `property_living_room` int(255) NOT NULL,
  `property_bedroom` int(255) NOT NULL,
  `property_parking` int(255) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `property_details` varchar(255) NOT NULL,
  `property_main_img` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `seo_url` varchar(255) NOT NULL,
  `agent_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_price`, `property_kitchen`, `property_living_room`, `property_bedroom`, `property_parking`, `property_address`, `property_details`, `property_main_img`, `property_type`, `status`, `seo_url`, `agent_id`) VALUES
(1, 'Free Square Feet', 50000, 2, 4, 5, 2, '', 'ipspan-stylefont-family-sofia-pro-regularto-be-completed-in-4-phases-the-1st-amp-2nd-phase-comprising-of-13-buildings-of-12-storey-each-21-row-villas-and-2-club-houses-it-will-offer-houses-of-2-bhk-compact-2-bhk-cozy-3-bhk-4-bhk-apartments-4-bhk-river-fro', 'images/download_(1)_-_Copy_-_Copy24.jpg', '', 1, 'free-square-feet', 0),
(2, 'Oberoi Realty', 20000, 1, 4, 8, 3, 'Cidco', 'ipspan-stylefont-family-sofia-pro-regularnbspa-spectacular-view-of-the-tranquil-river-and-lush-green-forest-welcomes-every-resident-of-suyojit-viridian-vallis-being-surrounded-by-a-kilometer-long-waterfront-promenade-adds-to-the-heavenly-bliss-accompanyin', 'images/download39.png', 'Office Space', 1, 'oberoi-realty', 0),
(3, 'Godrej Properties', 30000, 4, 10, 6, 4, 'Indore', 'pspan-stylefont-family-sofia-pro-regularidesigned-by-hok-singapore-the-internationally-acclaimed-architects-suyojit-viridian-vallis-carves-a-niche-place-in-the-real-estate-industry-of-nashik-here-you-will-find-a-balanced-mix-of-tastefully-designed-landsca', 'images/photo-1560184897-ae75f418493e_(1)2.jpg', 'Mall', 1, 'godrej-properties', 0),
(4, ' Indiabulls', 10000, 1, 4, 6, 2, 'Indira Nagar', 'pspan-stylefont-family-sofia-pro-regularito-be-completed-in-4-phases-the-1st-amp-2nd-phase-comprising-of-13-buildings-of-12-storey-each-21-row-villas-and-2-club-houses-it-will-offer-houses-of-2-bhk-compact-2-bhk-cozy-3-bhk-4-bhk-apartments-4-bhk-river-fro', 'images/photo-1577920231835-c232d76c46622.jpg', 'Bunglow', 1, '-indiabulls', 0),
(5, 'Prestige Estates', 15000, 2, 4, 7, 1, 'Rane Nagar', 'pspan-stylefont-family-sofia-pro-regularithe-changing-moods-and-shades-of-nature-at-suyojit-viridian-vallis-keeps-giving-you-pleasant-surprises-at-the-same-time-refreshes-your-soul-and-mind-with-its-fresh-and-peaceful-environment-not-just-nature-but-it-de', 'images/photo-1560185127-2d06c6d08d3d4.jpg', 'Building', 1, 'prestige-estates', 0),
(6, 'Brigade Enterprises', 60000, 2, 6, 8, 4, 'Nashik Road', 'pspan-stylefont-family-sofia-pro-regularicular-view-of-the-tranquil-river-and-lush-green-forest-welcomes-every-resident-of-suyojit-viridian-vallis-being-surrounded-by-a-kilometer-long-waterfront-promenade-adds-to-the-heavenly-bliss-accompanying-you-everyw', 'images/photo-1516455590571-18256e5bb9ff1.jpg', 'Office Space', 1, 'brigade-enterprises', 0),
(7, 'Brigade Enterprises', 140000, 2, 6, 8, 4, '', 'pspan-stylefont-family-sofia-pro-regularicular-view-of-the-tranquil-river-and-lush-green-forest-welcomes-every-resident-of-suyojit-viridian-vallis-being-surrounded-by-a-kilometer-long-waterfront-promenade-adds-to-the-heavenly-bliss-accompanying-you-everyw', 'images/photo-1592595896551-12b371d546d52.jpg', '', 1, 'brigade-enterprises', 0),
(8, 'Sunteck Realty Ltd', 40000, 4, 4, 8, 2, '', 'pspan-stylefont-family-sofia-pro-regularianquil-river-and-lush-green-forest-welcomes-every-resident-of-suyojit-viridian-vallis-being-surrounded-by-a-kilometer-long-waterfront-promenade-adds-to-the-heavenly-bliss-accompanying-you-everywhere-in-this-the-cha', 'images/pexels-photo-10639947.jpeg', '', 1, 'sunteck-realty-ltd', 0),
(9, 'Virifian valley', 80000, 8, 6, 7, 5, '', 'pspan-stylefont-family-sofia-pro-regularidesigned-by-hok-singapore-the-internationally-acclaimed-architects-suyojit-viridian-vallis-carves-a-niche-place-in-the-real-estate-industry-of-nashik-here-you-will-find-a-balanced-mix-of-tastefully-designed-landsca', 'images/photo-1502005229762-cf1b2da7c5d6.jpg', '', 1, 'virifian-valley', 0),
(42, 'Suyojit', 80000, 2, 4, 6, 2, '', 'phdgfhjg-jhkfheknbsp-hkhek-kjlnbsp-khkkkkkkkkkkkkkkkk-jkllllllllllllllllllllllllllllll-jkljklllllllllllllllllllllllllllppnbspjkljlr-jrlp', 'images/pexels-photo-28022116.jpeg', '', 1, 'suyojit', 0),
(43, 'Ashoka', 900000, 8, 6, 5, 8, '', 'pbf-jjdhkjhkkkkkkkkkkkkkkkkkksl-kjkjdfffffff-jkjjjjjjjjjjjjjjjjjjjjjjjjjj-k-jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjp', 'images/photo-1516455590571-18256e5bb9ff2.jpg', '', 1, 'ashoka', 0),
(44, 'Bhujbal builders', 450000, 6, 2, 8, 1, '', 'pnk-jjhfkkkkkkkkkkkkkkkkk-jkkkkkk-kjjjjjj-klkkkkkkkllllllllllllllp', 'images/pexels-photo-16452221.jpeg', '', 1, 'bhujbal-builders', 0),
(112, 'Chordia Builders', 500000, 5, 3, 1, 2, '', '', 'images/photo-1592595896551-12b371d546d53.jpg', '', 1, 'chordia-builders', 0),
(159, 'Chordia Builders123', 50000, 2, 7, 4, 4, 'Nashik Road', 'pghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-hjjjjjjjjjjjjjp', '', '', 0, 'chordia-builders123', 2),
(160, 'Brigade Enterprises', 200000, 3, 1, 5, 3, 'Rane Nagar', 'pjcnvvvvvvvvvvvvvvvvvvmp', '', '', 0, 'brigade-enterprises', 2),
(161, 'mncmnx', 399996, 1, 2, 1, 2, 'Nashik Road', 'pjjjjjjjjjjjjjjjjjjjjjjjjjjp', 'images/download_-_Copy_-_Copy44.jpg', '', 1, 'mncmnx', 2),
(162, 'vxvb', 0, 0, 0, 0, 0, '', '', 'images/download_-_Copy56.jpg', '', 1, 'vxvb', 1),
(163, 'Brigade Enterprises', 69998, 1, 2, 2, 2, 'Cidco', 'pfgggggfp', 'images/download_(3)_-_Copy31.jpg', '', 1, 'brigade-enterprises', 3),
(164, 'Gaikwad Builders', 100000, 2, 2, 2, 2, '', 'pggggggggggggggggggggp', 'images/pexels-photo-17324143.jpeg', '', 1, 'gaikwad-builders', 0),
(165, 'Mogal Builders', 90000, 2, 7, 4, 2, 'Indira Nagar', 'pdiygiunbsp-i-iooiunbsp-ioutoup', 'images/download25.jpg', 'Bunglow', 1, 'mogal-builders', 2);

-- --------------------------------------------------------

--
-- Table structure for table `property_enquiry`
--

CREATE TABLE `property_enquiry` (
  `enquiry_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_enquiry`
--

INSERT INTO `property_enquiry` (`enquiry_id`, `property_id`, `property_name`, `name`, `email`, `mobile`, `msg`) VALUES
(1, 8, '', 'shweta gaikwad', 'shweta330@gmail.com', 2147483647, 'dd'),
(2, 8, '', 'shweta gaikwad', 'shweta330@gmail.com', 2147483647, 'xx'),
(3, 8, '', 'shweta gaikwad', 'shwetagaikwad330@gmail.com', 2147483647, 'xfd'),
(4, 8, '', 'bj', 'shweta330@gmail.com', 2147483647, 'zzcz'),
(5, 4, '', 'shweta gaikwad', 'shweta330@gmail.com', 2147483647, 'zcxc'),
(6, 4, ' Indiabulls', 'Shweta		', 'shweta330@gmail.com', 2147483647, 'dsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `stud_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `admin_role` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`stud_id`, `name`, `email`, `pwd`, `gender`, `admin_role`) VALUES
(1, 'shweta', 'shweta.spitertech@gmail.com', '123', 'Female', 0),
(2, 'pritam', 'pritam@gmail.com', '134', 'Male', 0),
(3, 'Sonal pawar', 'sonal@gmail.com', '134', 'Female', 0),
(4, 'Sonal pawar', 'sonal@gmail.com', '134', 'Female', 0),
(5, 'jyoti', 'jyoti@gmail.com', '567', 'Female', 0),
(6, 'jyoti', 'jyoti@gmail.com', '567', 'Female', 0),
(7, 'jyoti', 'jyoti@gmail.com', '567', 'Female', 0),
(8, 'divya', 'divya@gmail.com', '234', 'Female', 0),
(9, 'arati', 'arti@gmail.com', '1234', 'Female', 0),
(10, 'harish', 'harish@gmail.com', '345', 'Male', 0),
(11, 'rohan desai', 'rohan@gmail.com', '123', 'Male', 0),
(12, 'neha', 'neha@gmail.com', '289dff07669d7a23de0ef88d2f7129e7', 'Female', 0),
(14, 'punam', 'punam@gmail.com', '202cb962ac59075b964b07152d234b70', 'Female', 0),
(15, 'rohini', 'rohini@gmail.com', '123', '', 1),
(16, 'qqqqqqq', 'qqqqqq@gmail.com', '289dff07669d7a23de0ef88d2f7129e7', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `property_enquiry`
--
ALTER TABLE `property_enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `property_enquiry`
--
ALTER TABLE `property_enquiry`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `stud_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
