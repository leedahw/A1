-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 01:09 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `aboutId` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`aboutId`, `content`) VALUES
(1, 'MM News is your best interactive source of news. At IMM News Network, you get the latest updates and know about the latest trends in the industry, get career-related, and be the first to know about the technological innovations in the field. We are here to deliver an insightful look into the industry in a simple interface! ');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(20) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `author` varchar(50) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `articleLink` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) NOT NULL,
  `featured` varchar(10) NOT NULL DEFAULT 'no',
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `title`, `author`, `content`, `articleLink`, `category`, `featured`, `img`) VALUES
(4, 'How Frontend Developers Can Empower Designer’s Work', 'Sandrina Pereira', 'This article is mostly directed at you, dear Frontend Developer, who enjoys implementing user interfaces but struggles in aligning expectations with designers you work with. Perhaps you are referred to as the “UI Developer” or “UX Engineer.” Regardless of the title that you carry around, your job (and as well as mine) consists of more than breathing life into design files. We are also responsible for filling the gap between the design and development workflows. However, when crossing that bridge, we are faced with multiple challenges.', 'https://www.smashingmagazine.com/2019/10/frontend-developers-empower-designers-work/', 'industry', 'no', 'Skills Every Business Development Pro Should Have.jpg'),
(5, 'Most Canadians who switch careers are happier for it, survey finds', 'Brandie Weikle', 'Nearly nine out of 10 Canadians who have made a career change say they\'re happier since switching paths, a recent survey has found.', 'https://www.cbc.ca/news/business/canadian-career-change-1.5370391', 'career', 'no', 'navarre-bailey-career-change.png'),
(6, 'Why more and more Torontonians are shelling out $10K for coding crash courses', 'Kate McGillivray', 'A growing number of people in Toronto are spending up to $10,500 to learn digital skills, such as computer coding and web design, in the hopes that they will land jobs in the tech sector.And new schools are opening to meet the demand. ', 'https://www.cbc.ca/news/canada/toronto/toronto-tech-bootcamps-growing-1.3956891', 'industry', 'no', 'web-dev-bootcamp.png'),
(8, 'Software Developer Trends of 2020 and Beyond', 'The Educative Team at Medium', 'The new decade is upon us and with it comes a flood of excitement for the changes and trends we will see in tech. Software development has become more integral to nearly every sector of the world, so developments and changes in software development have a vast impact on our lives. While we cannot always accurately predict what lies ahead for tech, there are some trends that we expect to continue into the new decade. Let’s discuss eight software development trends that we expect to see in 2020 and beyond.', 'https://medium.com/better-programming/software-developer-trends-of-2020-and-beyond-d1b955bc46b8', 'tech', 'no', '1_OnmmrbR0-ahop5ksySMntQ.jpeg'),
(9, 'State of the API 2020: Investments remain strong despite challenges', 'Ryan Daws', 'Postman’s State of the API report for 2020 suggests that investments have remained strong despite the challenging economic climate.  The report is the most comprehensive survey of the API industry—surveying a total of 13,586 developers, testers, executives, and others. Almost half of the respondents claim that investment and resources into APIs will increase over the next 12 months. Another third say that investments will remain about the same—which is still heartening given the wider economic and social devastation reaped by the ongoing pandemic.', 'https://developer-tech.com/news/2020/sep/29/state-of-the-api-2020-investments-strong-challenges/', 'tech', 'no', 'postman-state-of-the-api-2020-report-research-developer-study-2.jpg'),
(15, 'Mastering Design Critiques', 'Jonny Czar', 'Critique is not a trivial thing Getting design feedback isn’t a simple task. Designers in small teams struggle due lack of structure, maturity, and time in product development sprint. Designers in large teams struggle with silos, disconnected projects, and bureaucracy. By applying Design Critique in our design roadmap, it was possible to connect projects, improve design quality and handoff, and empower a positive feedback culture in the team. I led the Design Critique sessions at Itaú, working side by side the Design Team. But it’d be unfair to say that I’m the only responsible for this, since the team has actively participated in the sessions and we went through this journey together. So, I wrote down this article to tell you how we ran effective Design Critique in Itaú’s Design team, sharing framework, experiences and learnings.', 'https://uxdesign.cc/design-critique-design-better-products-through-team-collaboration-4c4f26a7be5f', 'career', 'yes', 'mastering critiques.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `contactsubmission`
--

CREATE TABLE `contactsubmission` (
  `submissionId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `interests` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `userRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactsubmission`
--

INSERT INTO `contactsubmission` (`submissionId`, `name`, `emailAddress`, `interests`, `userRole`) VALUES
(1, 'user', 'user@gmail.com', 'career', 'administrator'),
(2, 'test', 'test@test.com', 'industry,career', 'contributor'),
(3, 'test2', 'test2@test.com', 'tech', 'writer'),
(8, 'myk', 'myk@gmail.com', 'industry,career', 'writer'),
(9, 'Alana Dahwoon Lee', 'lenalee.9520@gmail.com', 'tech,industry,career', 'writer');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `articleId` int(11) NOT NULL,
  `likeicon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeId`, `userId`, `articleId`, `likeicon`) VALUES
(10, 1, 5, ''),
(978, 1, 4, 'likeicon.png'),
(979, 1, 6, 'likeicon.png'),
(981, 2, 4, 'likeicon.png'),
(982, 7, 4, 'likeicon.png'),
(1161, 7, 5, 'likeicon.png'),
(1162, 7, 15, 'likeicon.png'),
(1163, 7, 6, 'likeicon.png'),
(1164, 7, 8, 'likeicon.png'),
(1166, 2, 5, 'likeicon.png'),
(1167, 2, 8, 'likeicon.png'),
(1168, 2, 6, 'likeicon.png'),
(1169, 2, 15, 'likeicon.png'),
(1170, 6, 4, 'likeicon.png'),
(1171, 6, 15, 'likeicon.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `DOB` datetime NOT NULL,
  `userType` text NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `fName`, `lName`, `emailAddress`, `password`, `DOB`, `userType`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '123456', '1995-03-18 12:00:00', 'admin'),
(2, 'alana', 'lee', 'alana@lee.com', 'aaaaaa', '1997-03-18 00:00:00', 'member'),
(6, 'mason', 'Ko', 'mason@ko.com', '123456', '1993-03-18 00:00:00', 'member'),
(7, 'Lana', 'Lee', 'lana@lee.com', '123456', '1995-01-01 00:00:00', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`aboutId`);

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `aboutId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactsubmission`
--
ALTER TABLE `contactsubmission`
  MODIFY `submissionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1172;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
