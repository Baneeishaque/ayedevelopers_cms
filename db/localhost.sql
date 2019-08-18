-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2015 at 01:33 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desaign`
--
CREATE DATABASE IF NOT EXISTS `desaign` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `desaign`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `address4` varchar(50) NOT NULL,
  `address5` varchar(50) NOT NULL,
  `address6` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `dribble` varchar(50) NOT NULL,
  `google+` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address1`, `address2`, `address3`, `address4`, `address5`, `address6`, `phone`, `email`, `facebook`, `twitter`, `dribble`, `google+`) VALUES
(1, 'aAYE Developers', 'aIncubated at Startup Village', 'Kinfra Hi -Tech Park', 'aOpp Co-operative Medical College', 'aKalamassery ', 'aKerala, 683503', 'a( 91) 8606-220500', 'ainfo@ayedevelopers.in', 'ahttp://www.facebook.com/ayedevelopers', 'ahttps://twitter.com/ayedevelopers', 'htatps://dribbble.com/ayedevelopers', 'https://plusa.google.com/105195869860414524171');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
`id` int(11) NOT NULL,
  `copyright` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copyright`) VALUES
(1, 'sdDDSlopers');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
`id` int(200) NOT NULL,
  `title` varchar(18) NOT NULL,
  `nav1` varchar(7) NOT NULL,
  `nav2` varchar(7) NOT NULL,
  `nav3` varchar(7) NOT NULL,
  `nav4` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `title`, `nav1`, `nav2`, `nav3`, `nav4`) VALUES
(2, 'Total IT24', 'Home', 'About', 'Contact', 'jo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`no` int(200) NOT NULL,
  `id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `id`, `pass`) VALUES
(1, '1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `midle`
--

CREATE TABLE IF NOT EXISTS `midle` (
`id` int(10) NOT NULL,
  `name1` varchar(20) NOT NULL,
  `name2` varchar(20) NOT NULL,
  `name3` varchar(20) NOT NULL,
  `name4` varchar(20) NOT NULL,
  `namede1` varchar(40) NOT NULL,
  `namede2` varchar(40) NOT NULL,
  `namede3` varchar(40) NOT NULL,
  `namede4` varchar(40) NOT NULL,
  `nameimg1` varchar(200) NOT NULL,
  `nameimg2` varchar(200) NOT NULL,
  `nameimg3` varchar(200) NOT NULL,
  `nameimg4` varchar(200) NOT NULL,
  `serv1t` varchar(40) NOT NULL,
  `serv2t` varchar(40) NOT NULL,
  `serv3t` varchar(40) NOT NULL,
  `serv4t` varchar(40) NOT NULL,
  `serv1d` varchar(200) NOT NULL,
  `serv2d` varchar(200) NOT NULL,
  `serv3d` varchar(200) NOT NULL,
  `serv4d` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midle`
--

INSERT INTO `midle` (`id`, `name1`, `name2`, `name3`, `name4`, `namede1`, `namede2`, `namede3`, `namede4`, `nameimg1`, `nameimg2`, `nameimg3`, `nameimg4`, `serv1t`, `serv2t`, `serv3t`, `serv4t`, `serv1d`, `serv2d`, `serv3d`, `serv4d`) VALUES
(1, 'Anas', 'MUFASIL22', 'GAFOOR22', 'ZUBAIR22', 'Programmer', 'Co-Foundeghjh', 'UI/UX Designer 22', 'Concept Coordinator22', '1.jpg', '2.jpg', '3.jpg', '4.jpg', 'APP DEVELOPING1', 'WEB DEVELOPING/DE1SIGNING', 'MEDIA2', 'REMOTE TECHNIC2AL ASSISTANT ', 'aaThe World is always connected with computers and network. AYE offers most updated Tech Services and Solutions. Always Online for Enterprise and help our clients', 'aaWebsite is a media to connect with world wide to spread information .We make it interactive designs using new Technology and make it as per your needs simply and quickly', 'aaWe deliver', 'aaAYE providing 24x7 Online Technical Support in all IT Services ');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE IF NOT EXISTS `style` (
`id` int(11) NOT NULL,
  `top-nav-collapse-background` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `style`
--

INSERT INTO `style` (`id`, `top-nav-collapse-background`) VALUES
(1, '#A8B5EC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `midle`
--
ALTER TABLE `midle`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `style`
--
ALTER TABLE `style`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `no` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `midle`
--
ALTER TABLE `midle`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `style`
--
ALTER TABLE `style`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
