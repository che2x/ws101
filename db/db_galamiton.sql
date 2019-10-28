-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 12:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_galamiton`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `shop_id`) VALUES
(25, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cmt_blog`
--

CREATE TABLE `tbl_cmt_blog` (
  `blog_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cmt_blog`
--

INSERT INTO `tbl_cmt_blog` (`blog_id`, `fname`, `date`, `msg`) VALUES
(4, 'Louie cagas', '2019-10-01 06:51:13', 'haahhaa'),
(5, 'akjsdbjk', '2019-10-04 05:41:57', 'asjdk'),
(6, 'asd', '2019-10-19 08:46:22', 'asd'),
(7, 'nakdnkadn', '2019-10-20 07:21:07', '<script>alert(hack);</script>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shop_id`, `img`, `des`, `price`) VALUES
(16, 'assets/img/3.PNG', 'sdf', 23),
(17, 'assets/img/Capture.PNG', 'sample', 234),
(18, 'assets/img/Capture.PNG', 'hahahahahah', 234),
(19, 'assets/img/Capture.PNG', 'casdasd', 234),
(20, 'assets/img/converter.php', 'asdfa', 23),
(21, 'assets/img/20190313_122614.jpg', 'ajdshghj', 200),
(22, 'assets/img/20190313_122614.jpg', 'akjsd', 200),
(23, 'assets/img/20190313_122614.jpg', 'adhj', 1),
(24, 'assets/img/facebookwallscript.jpg', 'sample', 200),
(25, 'assets/img/53078675_2271163673153611_2356759481435553792_n.jpg', 'asdhkh', 23),
(26, 'assets/img/RESULT.docx', '21', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccount`
--

CREATE TABLE `tbl_useraccount` (
  `a_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `paswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_useraccount`
--

INSERT INTO `tbl_useraccount` (`a_id`, `uname`, `paswd`) VALUES
(22, 'root', '76d80224611fc919a5d54f0ff9fba446'),
(23, 'sample', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_cmt_blog`
--
ALTER TABLE `tbl_cmt_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `tbl_useraccount`
--
ALTER TABLE `tbl_useraccount`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_cmt_blog`
--
ALTER TABLE `tbl_cmt_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_useraccount`
--
ALTER TABLE `tbl_useraccount`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
