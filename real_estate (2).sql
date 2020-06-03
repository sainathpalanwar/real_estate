-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 05:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'sainath', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `property_id` varchar(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `property_id`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(12, '9', 'sainath palanwar', 'palanwars@gmail.cpm', 'nice', '8381099576', 'nice property'),
(13, '9', 'komal', 'girlsontop26@gmail.com', 'nice', '9860388909', 'rty'),
(14, '10', 'komal', 'girlsontop26@gmail.com', 'jeoifj', '9860388909', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `message` varchar(30000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(20, 'sainath palanwar', 'palanwars@gmail.cpm', 'nice', 2147483647, 'jkhgfhjk,m');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image1`, `image2`, `image3`, `image4`, `property_id`) VALUES
(12, 'WhatsApp Image 2020-05-13 at 10.29.08 PM.jpeg', 'WhatsApp Image 2020-05-13 at 10.29.22 PM.jpeg', 'WhatsApp Image 2020-05-13 at 10.29.22 PM (1).jpeg', 'WhatsApp Image 2020-05-14 at 12.26.21 AM (2).jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `bedroom` varchar(11) NOT NULL,
  `hall` varchar(11) NOT NULL,
  `kichan` varchar(11) NOT NULL,
  `bathroom` varchar(11) NOT NULL,
  `balcony` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `sqr_price` varchar(11) NOT NULL,
  `address` varchar(10000) NOT NULL,
  `video` varchar(10000) NOT NULL,
  `image` text NOT NULL,
  `description` varchar(30000) NOT NULL,
  `location` varchar(10000) NOT NULL,
  `property_owner` varchar(20) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `lot_size` varchar(20) NOT NULL,
  `sold` varchar(12) NOT NULL,
  `land_area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `bedroom`, `hall`, `kichan`, `bathroom`, `balcony`, `price`, `sqr_price`, `address`, `video`, `image`, `description`, `location`, `property_owner`, `property_type`, `lot_size`, `sold`, `land_area`) VALUES
(1, 'Mansarwar-A', '2', '1', '1', '2', '3', '250000', '2000', 'nanded', 'https://www.youtube.com/embed/L4D-kbPR_qs', 'WhatsApp Image 2020-05-14 at 12.26.21 AM (3).jpeg', '* Ceramic tile flooring in all rooms\r\n* Internal walls treated with acrylic emulsion paint\r\n* Powder coated aluminium sliding windows\r\n* DTH/Cable points and telephone points in living room and master bedroom\r\n* Concealed copper wiring\r\n* Standard, good quality MCBs and ELCBs\r\n* Good quality main door and safety door\r\n* Landscaped area\r\n* Paved car park space', 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15071.659424677304!2d77.26169226365465!3d19.198920841886814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sChinmay%20Venkatesh%20Balaji%20Mandir%2C%20Near%20D&#39;Mart%20%2C%20Canal%20Road%2C%20Puyani%2C%20Nanded%20-%20431%20605!5e0!3m2!1sen!2sin!4v1590592938704!5m2!1sen!2sin', 'Ashish Badalwad', 'Row House', '4500', 'yes', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `property_plan`
--

CREATE TABLE `property_plan` (
  `plan_id` int(100) NOT NULL,
  `property_id` int(100) NOT NULL,
  `plan` varchar(300) NOT NULL,
  `height` varchar(11) NOT NULL,
  `length` varchar(11) NOT NULL,
  `free_area` varchar(11) NOT NULL,
  `wall_siize` varchar(11) NOT NULL,
  `slab_size` varchar(20) NOT NULL,
  `window` varchar(20) NOT NULL,
  `ventilation` varchar(10) NOT NULL,
  `floor_no` varchar(10) NOT NULL,
  `kitchen` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_plan`
--

INSERT INTO `property_plan` (`plan_id`, `property_id`, `plan`, `height`, `length`, `free_area`, `wall_siize`, `slab_size`, `window`, `ventilation`, `floor_no`, `kitchen`) VALUES
(18, 1, 'Mansorovar-A.jpg', '12 feet', '20 feet', '4 feet', '0.7 feet', '0.8 feet', '7', 'yes', 'G+1', '* Hard stone platform with SS sink * Dado tiles up to 2ft, above platform * Provision for water purifier and chimney * Exhaust fan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_plan`
--
ALTER TABLE `property_plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `property_plan`
--
ALTER TABLE `property_plan`
  MODIFY `plan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
