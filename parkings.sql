-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2015 at 04:47 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parkings`
--

-- --------------------------------------------------------
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `level` int(11) NOT NULL,
  `plate_no` text NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `level`, `status`,`plate_no`,`id`) VALUES
('ibrahim maina', 'ibrahimond75@yahoo.com', 'ondabu', '0729667794', 1, '', '', 5)
-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `street` text NOT NULL,
  `plot` text NOT NULL,
  `status` text NOT NULL,
  `model` text NOT NULL,
  `vehicle` text NOT NULL,
  `platenumber` text NOT NULL,
  `email` text NOT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`street`, `plot`, `status`, `model`, `vehicle`, `platenumber`, `email`, `d1`, `d2`, `charge`, `id`) VALUES
('Lane-1', 'PL 001', 'RESERVED', 'TOYOTA', 'volvo', 'BMW 600H', 'ibrahimond75@gmail.com','02.11.2014 11:05AM', '02.11.2014 12:05AM',3)
--
-- Indexes for dumped tables
--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
 ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
