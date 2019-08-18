-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2007 at 03:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
`id` int(200) NOT NULL,
  `title` varchar(18) NOT NULL,
  `nav1` varchar(7) NOT NULL,
  `nav2` varchar(7) NOT NULL,
  `nav3` varchar(7) NOT NULL,
  `nav4` varchar(7) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `midle`
--

INSERT INTO `midle` (`id`, `name1`, `name2`, `name3`, `name4`, `namede1`, `namede2`, `namede3`, `namede4`, `nameimg1`, `nameimg2`, `nameimg3`, `nameimg4`, `serv1t`, `serv2t`, `serv3t`, `serv4t`, `serv1d`, `serv2d`, `serv3d`, `serv4d`) VALUES
(1, 'Anas', 'MUFASIL22', 'GAFOOR22', 'ZUBAIR22', 'Programmer', 'Co-Foundeghjh', 'UI/UX Designer 22', 'Concept Coordinator22', '1.jpg', '2.jpg', '3.jpg', '4.jpg', 'APP DEVELOPING', 'WEB DEVELOPING/DESIGNING', 'MEDIA', 'REMOTE TECHNICAL ASSISTANT & CLOUD SOLUT', 'The World is always connected with computers and network. AYE offers most updated Tech Services and Solutions. Always Online for Enterprise and help our clients', 'Website is a media to connect with world wide to spread information .We make it interactive designs using new Technology and make it as per your needs simply and quickly', 'We deliver', 'AYE providing 24x7 Online Technical Support in all IT Services & We also providing Onsite Services');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
