-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immnewsnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articleLink` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `title`, `author`, `content`, `articleLink`) VALUES
(1, 'Test', 'Test', 'Testing. Nearly nine out of 10 Canadians who have made a career change say they\'re happier since switching paths, a recent survey has found.', 'https://www.cbc.ca/news/business/canadian-career-change-1.5370391');

-- --------------------------------------------------------

--
-- Table structure for table `contactsubmission`
--

CREATE TABLE `contactsubmission` (
  `submissionId` int(11) NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `career` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `memberRole` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactsubmission`
--

INSERT INTO `contactsubmission` (`submissionId`, `name`, `emailAddress`, `technical`, `industry`, `career`, `memberRole`) VALUES
(1, 'test', 'test@test.com', '0', '0', '0', ''),
(36, 'lana', 'admin@admin.com', ' ', 'industry', ' ', ''),
(37, 'lana', 'admin@admin.com', ' ', 'industry', ' ', ''),
(38, 'yougmin', 'youngmin@ko.com', 'technical', ' ', ' ', ''),
(39, 'yougmin', 'youngmin@ko.com', 'technical', ' ', ' ', ''),
(40, 'yougmin', 'youngmin@ko.com', 'technical', ' ', ' ', ''),
(41, 'alana lee', 'alana@lee.com', 'technical', 'industry', 'career', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `userId` int(11) NOT NULL,
  `fName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` datetime NOT NULL,
  `userType` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='collects member info from signup. includes edits';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`userId`, `fName`, `lName`, `emailAddress`, `password`, `DOB`, `userType`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '123456', '2020-10-07 22:24:51', 'admin'),
(2, 'emily', 'hamster', 'emily@hamster.com', 'abcdef', '1900-10-07 22:00:00', 'member'),
(3, 'TEST', 'TEST', 'TEST@TEST.COM', 'zyxwv', '2020-09-01 12:00:00', 'member'),
(4, 'Alana', 'Lee', 'alanalee@gmail.com', '1234567', '1995-03-18 12:00:00', 'member'),
(5, 'mason', 'ko', 'mason@ko.com', '123456', '1997-03-18 00:00:00', 'member'),
(6, 'aaaa', 'aaaaa', 'aaaaa@gmail.com', 'aaaaa', '0000-00-00 00:00:00', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `member-article`
--

CREATE TABLE `member-article` (
  `memberId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membertypes`
--

CREATE TABLE `membertypes` (
  `roleId` int(11) NOT NULL,
  `memberType` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membertypes`
--

INSERT INTO `membertypes` (`roleId`, `memberType`) VALUES
(1, 'writer'),
(2, 'contributor'),
(3, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`);

--
-- Indexes for table `contactsubmission`
--
ALTER TABLE `contactsubmission`
  ADD PRIMARY KEY (`submissionId`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `membertypes`
--
ALTER TABLE `membertypes`
  ADD PRIMARY KEY (`roleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactsubmission`
--
ALTER TABLE `contactsubmission`
  MODIFY `submissionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membertypes`
--
ALTER TABLE `membertypes`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
