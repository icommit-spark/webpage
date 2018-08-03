-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 11:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icommit`
--

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pledge` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'False',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completion_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`id`, `username`, `category`, `pledge`, `status`, `creation_date`, `completion_date`) VALUES
(1, 'swarnim1994', 'Home', 'I will make sure that none of the lights are switched on when not in use.', 'True', '2018-05-15 06:22:39', '2018-05-16 15:01:30'),
(2, 'swarnim1994', 'Home', 'I won\'t waste water', 'True', '2018-05-15 06:35:21', '2018-05-24 06:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `pledges_list`
--

CREATE TABLE `pledges_list` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pledgeText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledges_list`
--

INSERT INTO `pledges_list` (`id`, `category`, `pledgeText`) VALUES
(1, 'politics', 'Call state senators about issues you care about.'),
(2, 'politcs', 'Participate in a protest or a rally for a cause.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `bio` text,
  `location` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email_address`, `bio`, `location`, `gender`, `password`, `last_login`) VALUES
(1, 'swarnim1994', 'swarnimsinha1994@gmail.com', 'testasdafafajk', 'SF', 'Male', '123456', '2018-04-07 19:26:30'),
(3, 'keval', 'kevalk@gmail.com', NULL, NULL, NULL, '123456', '2018-04-07 21:31:26'),
(4, 'testuser', 'testuser@test.com', NULL, NULL, NULL, '1234', '2018-04-28 20:54:40'),
(5, 'test', 'test@gmail.com', NULL, NULL, NULL, 'test123', '2018-04-28 21:16:14'),
(6, 'check', 'check@gmail.com', NULL, NULL, NULL, '1234', '2018-04-28 21:49:40'),
(7, 'fangshi', 'fangshi123@gmail.com', NULL, NULL, NULL, '1234', '2018-04-28 21:50:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pledges_list`
--
ALTER TABLE `pledges_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pledges_list`
--
ALTER TABLE `pledges_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
