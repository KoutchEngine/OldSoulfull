-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 08:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soulfulldbnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `badgeId` int(11) NOT NULL,
  `badgeName` text NOT NULL,
  `offSale` tinyint(1) NOT NULL,
  `gameId` int(11) NOT NULL,
  `creatorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `browsertrackerids`
--

CREATE TABLE `browsertrackerids` (
  `userid` int(11) NOT NULL,
  `ip` text NOT NULL,
  `id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `datastore`
--

CREATE TABLE `datastore` (
  `placeId` int(11) NOT NULL,
  `key` text NOT NULL,
  `target` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `startPlace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` text NOT NULL,
  `placeid` int(11) NOT NULL,
  `port` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owneditems`
--

CREATE TABLE `owneditems` (
  `userId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `gamename` text NOT NULL,
  `description` text NOT NULL,
  `gameId` int(11) NOT NULL,
  `creatorId` int(11) NOT NULL,
  `placeVersion` int(11) NOT NULL,
  `createdTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `joindate` date NOT NULL DEFAULT current_timestamp(),
  `activated` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `bantype` int(11) NOT NULL,
  `moderatortype` text NOT NULL,
  `moderateditem` int(11) NOT NULL,
  `robux` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `siteType` text NOT NULL,
  `userstatus` text NOT NULL,
  `aboutme` text NOT NULL,
  `messagesenabled` tinyint(1) NOT NULL,
  `inventoryprivate` tinyint(1) NOT NULL,
  `gamestatus` text NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` text NOT NULL,
  `authticket` text NOT NULL,
  `R15Enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
