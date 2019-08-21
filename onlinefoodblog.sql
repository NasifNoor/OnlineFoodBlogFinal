-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 12:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefoodblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloginfos`
--

CREATE TABLE `bloginfos` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `creator` varchar(20) NOT NULL,
  `goal` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` int(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloginfos`
--

INSERT INTO `bloginfos` (`id`, `name`, `creator`, `goal`, `email`, `contact`, `description`) VALUES
(1, 'Online Food Blog', 'Nasif Hasan', 'ss', 'nasif@ofb.org', 111222, 'asdftrjhihh');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `price`) VALUES
(1, 'Biriani', 160);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantmenus`
--

CREATE TABLE `restaurantmenus` (
  `id` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `restaurantid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `menuname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` varchar(25) NOT NULL,
  `goal` varchar(25) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `contact`, `address`, `goal`, `description`) VALUES
(1, 'Kalapata', 1122334455, 'Dhaka', 'Serve Food', 'Be the best'),
(3, 'KFC', 112233445, 'Dhaka', 'provide food', 'Be the best'),
(4, 'BFC', 1122334455, 'Dhaka', 'Serve', 'l;jsfa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `contact`, `email`, `usertype`, `address`, `password`) VALUES
(1, 'Noor', 'Nasif Hasan', 112233445, 'nasifhasan@gmail.com', 'admin', 'Dhaka, Bangladesh', '111'),
(4, 'member', 'Nasif', 1122334455, '11233sdf@ddd.com', 'member', 'Dhaka', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloginfos`
--
ALTER TABLE `bloginfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurantmenus`
--
ALTER TABLE `restaurantmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
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
-- AUTO_INCREMENT for table `bloginfos`
--
ALTER TABLE `bloginfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurantmenus`
--
ALTER TABLE `restaurantmenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
