-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 07:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `at02_rafael_ribeiro`
--

-- --------------------------------------------------------

--
-- Table structure for table `gpgs`
--

CREATE TABLE `gpgs` (
  `playerID` int(10) NOT NULL,
  `consistencyToken` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `language` varchar(150) NOT NULL,
  `maxResults` int(2) NOT NULL,
  `pageToken` int(2) NOT NULL,
  `alt` varchar(4) NOT NULL DEFAULT 'json',
  `fields` varchar(150) NOT NULL,
  `apiKey` varchar(300) NOT NULL,
  `oauth_token` varchar(300) NOT NULL,
  `prettyPrint` tinyint(1) NOT NULL DEFAULT '1',
  `quotaUser` text NOT NULL,
  `userIp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpgs`
--

INSERT INTO `gpgs` (`playerID`, `consistencyToken`, `language`, `maxResults`, `pageToken`, `alt`, `fields`, `apiKey`, `oauth_token`, `prettyPrint`, `quotaUser`, `userIp`) VALUES
(1262076, '2017-07-02 03:07:54', 'english', 50, 1262076, 'json', 'all', '1262076', '1262076', 40, '121324646884761321651', '127.0.0.1'),
(123456, '2017-07-02 04:29:00', 'portuguese', 40, 30, 'json', '123456', '123456', '123456', 1, '12345', '192.168.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `temp_key` varchar(128) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `bearer_token` varchar(1024) NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
