-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2018 at 06:08 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `cartcusem` varchar(30) DEFAULT NULL,
  `cartpname` varchar(30) DEFAULT NULL,
  `cartpprice` double NOT NULL,
  `cartpquantity` int(11) DEFAULT NULL,
  `cartdatetime` timestamp NULL DEFAULT NULL,
  `cartptprice` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `cartcusem`, `cartpname`, `cartpprice`, `cartpquantity`, `cartdatetime`, `cartptprice`) VALUES
(115, 'b@g.com', 'Ice Creame', 3.49, 1, '2018-01-03 12:57:05', 3.49),
(113, 'b@g.com', 'Fettuccine Alfredo', 9.99, 1, '2018-01-03 12:56:59', 9.99),
(109, 'talha@gmail.com', 'Lasagna', 12.99, 1, '2018-01-03 12:32:03', 12.99),
(114, 'b@g.com', 'Fettuccine Alfredo', 9.99, 1, '2018-01-03 12:57:02', 9.99),
(107, 'talha@gmail.com', 'Chicken Chow Mein', 9.99, 1, '2018-01-03 12:31:34', 9.99),
(106, 'talha@gmail.com', 'Fish Fillet', 11.99, 2, '2018-01-03 12:31:30', 23.98),
(108, 'talha@gmail.com', 'Fettuccine Alfredo', 9.99, 1, '2018-01-03 12:32:01', 9.99);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` int(100) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cem` varchar(30) NOT NULL,
  `cphno` int(11) NOT NULL,
  `ccity` varchar(20) NOT NULL,
  `caddr` varchar(100) NOT NULL,
  `csub` varchar(40) NOT NULL,
  `cmsg` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cid`, `cname`, `cem`, `cphno`, `ccity`, `caddr`, `csub`, `cmsg`) VALUES
(1, 'Waleed', 'w@g.com', 123, 'islamabad', 'H10', 'Great experience!', 'The food was yummmmmms!\r\n'),
(2, 'a', 'g@g.com', 11, 'islamabad', '', 'AAAAA', ''),
(3, 'a', 'g@g.com', 12, 'islamabad', '', 'asdasd', ''),
(4, 'a', 'i@g.com', 1, 'islamabad', '', 'asd', ''),
(5, 'q', 'q@h.com', 12, 'islamabad', 'asd', 'as', ''),
(6, 's', 's@g.com', 12, 'islamabad', 'as', 'as', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(20) NOT NULL,
  `fn` varchar(15) NOT NULL,
  `ln` varchar(15) NOT NULL,
  `em` varchar(20) NOT NULL,
  `ph` int(15) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `addr` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fn`, `ln`, `em`, `ph`, `city`, `addr`, `pass`) VALUES
(1, 'Waleed', 'Yousaf', 'waleed@gmail.com', 1234, NULL, 'asdfk', '123'),
(2, 'Saim', 'Khan', 'saim@gmail.com', 1234, NULL, 'asdfk', '123'),
(3, 'Talha', 'Khan', 'talha@gmail.com', 1234, NULL, 'asdfk', '123'),
(4, 'a', 'aa', 'a@g.com', 1234, 'islamabad', 'H10', '12'),
(5, 'b', 'bb', 'b@g.com', 1234, 'islamabad', 'H11', '12'),
(6, 'c', 'cc', 'c@g.com', 123, 'islamabad', 'H12', '12'),
(7, 'd', 'dd', 'd@g.com', 123, 'islamabad', 'h13', '123'),
(8, 'e', 'ee', 'e@g.com', 123, 'islamabad', 'h14', '12'),
(9, 'f', 'ff', 'f@g.com', 123, 'islamabad', 'asd', '123'),
(10, 'g', 'gg', 'g@g.com', 123, 'islamabad', 'asd', '12'),
(11, 'Waleed Yousaf', 'Yousaf', 'w2@g.com', 12345, 'islamabad', 'h13', '12'),
(12, '1', '2', 'tannugb@gmial.com', 1112344, 'lahore', 'H10 ISB', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(40) NOT NULL,
  `itemprice` double NOT NULL,
  `itemdesc` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `itemname`, `itemprice`, `itemdesc`) VALUES
(1, 'Zinger Burger', 6.99, 'If you like it hot and spicy, a...'),
(3, 'Beef Steak', 8.99, 'If you like it hot and spicy, a...'),
(4, 'Lasagna', 12.99, 'If you like it hot and spicy, a...'),
(5, 'Fettuccine Alfredo', 9.99, 'If you like it hot and spicy, a...'),
(6, 'Chicken Chow Mein', 9.99, 'If you like it hot and spicy, a...'),
(7, 'Fish Burger', 8.99, 'If you like it hot and spicy, a...'),
(8, 'Fish Fillet', 11.99, 'If you like it hot and spicy, a...'),
(9, 'Ice Creame', 3.49, 'If you like it hot and spicy, a...'),
(10, 'Gol Gappay', 2.49, 'If you like it hot and spicy, a...');

-- --------------------------------------------------------

--
-- Table structure for table `ordertab`
--

CREATE TABLE `ordertab` (
  `oid` int(11) NOT NULL,
  `ocusem` varchar(30) NOT NULL,
  `ocusname` varchar(20) DEFAULT NULL,
  `oqty` varchar(40) DEFAULT NULL,
  `otimedate` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertab`
--

INSERT INTO `ordertab` (`oid`, `ocusem`, `ocusname`, `oqty`, `otimedate`) VALUES
(27, 'b@g.com', 'b', '23.47', '2018-01-03 13:03:17'),
(25, 'talha@gmail.com', 'Talha', '56.95', '2018-01-03 12:34:15'),
(26, 'a@g.com', 'a', '29.97', '2018-01-03 12:56:22'),
(23, 'waleed@gmail.com', 'Waleed', '42.43', '2018-01-03 12:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fn` varchar(40) NOT NULL,
  `ln` varchar(40) NOT NULL,
  `em` varchar(40) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `cnic` int(17) NOT NULL,
  `ph` int(17) NOT NULL,
  `pic` varchar(200) DEFAULT NULL,
  `cm` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fn`, `ln`, `em`, `pass`, `cnic`, `ph`, `pic`, `cm`) VALUES
(25, 'd', 'dd', 'd@g.com', '123', 12312, 213123, '20170727_1402001.jpg', 'sakdasjkdjasf'),
(23, 'b', 'bb', 'b@g.com', '123', 12312, 213123, '20170727_1402001.jpg', 'sakdasjkdjasf'),
(24, 'c', 'cc', 'c@g.com', '123', 12312, 213123, '20170727_1402001.jpg', 'sakdasjkdjasf'),
(22, 'a', 'aa', 'a@g.com', '123', 12312, 213123, '20170727_1402001.jpg', 'sakdasjkdjasf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(7) NOT NULL,
  `user_Name` varchar(40) NOT NULL,
  `user_Email` varchar(25) NOT NULL,
  `user_CNIC` varchar(16) NOT NULL,
  `user_Comments` varchar(100) NOT NULL,
  `user_Picture` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `cartcusem` (`cartcusem`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `ordertab`
--
ALTER TABLE `ordertab`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `ocusem` (`ocusem`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ordertab`
--
ALTER TABLE `ordertab`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(7) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
