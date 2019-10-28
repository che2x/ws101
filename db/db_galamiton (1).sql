-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 07:27 PM
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
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `b_id` int(11) NOT NULL,
  `Content` varchar(25) DEFAULT NULL,
  `img` varchar(25) DEFAULT NULL,
  `Title` varchar(25) DEFAULT NULL,
  `Contact` varchar(25) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `price` float(11,2) NOT NULL,
  `tprice` float(11,2) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `price`, `tprice`, `shop_id`) VALUES
(4, 0.00, 0.00, 30);

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
(5, 'ddd', '2019-10-24 15:37:26', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `shop_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `price` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shop`
--

INSERT INTO `tbl_shop` (`shop_id`, `img`, `des`, `price`) VALUES
(21, 'assets/img/1.jpg', 'Nikon Black Camera', 1000.00),
(22, 'assets/img/5.jpg', 'Nikon Flash Black Camera', 1200.00),
(23, 'assets/img/9.jpg', 'Fuji Camera Black 3 in 1', 2000.00),
(24, 'assets/img/19.jpg', 'Fuji Flash Camera Black', 1200.00),
(25, 'assets/img/8.jpg', 'SanDisk 16gb', 300.00),
(26, 'assets/img/11.jpg', 'SanDisk 32gb', 550.00),
(27, 'assets/img/13.png', 'Smart Watch Gold', 800.00),
(28, 'assets/img/14.png', 'Smart Watch White ', 1000.00),
(29, 'assets/img/16.jpg', 'Boots Brown', 500.00),
(30, 'assets/img/17.jpg', 'Boots Blue', 600.00),
(32, 'assets/img/1.JPG', 'projector', 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `u_id` int(11) NOT NULL,
  `Fname` varchar(25) DEFAULT NULL,
  `Nickname` varchar(25) DEFAULT NULL,
  `Age` varchar(25) DEFAULT NULL,
  `Gender` varchar(25) DEFAULT NULL,
  `Status` varchar(25) DEFAULT NULL,
  `Fcolor` varchar(25) DEFAULT NULL,
  `Ffood` varchar(25) DEFAULT NULL,
  `Religion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(25, 'admin', '0192023a7bbd73250516f069df18b500'),
(28, 'root', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`b_id`);

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
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tbl_useraccount`
--
ALTER TABLE `tbl_useraccount`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cmt_blog`
--
ALTER TABLE `tbl_cmt_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_useraccount`
--
ALTER TABLE `tbl_useraccount`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
