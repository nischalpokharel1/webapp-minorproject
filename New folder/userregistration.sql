-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2019 at 09:54 AM
-- Server version: 5.7.21
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
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `idea` varchar(255) NOT NULL,
  `cost` varchar(6) NOT NULL,
  `category` varchar(100) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `lname`, `email`, `title`, `idea`, `cost`, `category`, `keyword`) VALUES
(1, 'nischal', 'pokharel', 'pokharelnischal789@gmail.com', 'student', 'about robotics', '500', 'robotics', ''),
(2, 'nischal', 'pokharel12', 'ppp@gmail.com', 'student', 'about animation', '1000$', 'animationn', ''),
(3, 'ravi', 'gautam', 'gautam@linkedin.com', 'software developer', 'internet security manager', '200$', 'web', ''),
(4, 'xyz', 'abc', 'xyz@gmail,com', 'student', 'music copmresor', '50$', 'music', ''),
(5, 'shyam', 'rai', 'rai@gmail.com', 'student', 'zyx', '20', 'gaming', ''),
(6, 'pramod', 'subedi', 'subedipramod@gmail.com', 'business analyst', 'about animation', '300$', 'gaming', ''),
(7, 'krishna', 'thapa', 'tapa@gmail.com', 'businessman', 'baseball animation', '150$', 'animationn', ''),
(8, 'rabi', 'lamichane', 'rl45@gmail.com', 'teacher', 'about the category of design and animation', '200$', 'design', ''),
(9, 'ankit', 'kc', 'kcankit@gamil.com', 'student', 'economy generated through gaming', '100$', 'gaming', ''),
(10, 'aadi', 'sharma', 'sharma45@gmail.com', 'businessman', 'about animation', '200$', 'animationn', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `category`) VALUES
(1, 'animationn'),
(2, 'software'),
(3, 'drones'),
(4, 'apps'),
(5, 'animationn'),
(6, 'animationn'),
(7, 'electronics'),
(8, 'electronics'),
(9, 'gaming'),
(10, 'gaming'),
(11, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `innovator`
--

DROP TABLE IF EXISTS `innovator`;
CREATE TABLE IF NOT EXISTS `innovator` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `idea` varchar(255) NOT NULL,
  `cost` varchar(6) NOT NULL,
  `category` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `innovator`
--

INSERT INTO `innovator` (`id`, `name`, `lname`, `email`, `profession`, `idea`, `cost`, `category`) VALUES
(1, 'pramod', 'subedi', 'subedipramod@gmail.com', 'student', 'about animation', '200$', 'gaming');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

DROP TABLE IF EXISTS `investor`;
CREATE TABLE IF NOT EXISTS `investor` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`id`, `name`, `lname`, `email`, `title`, `category`, `keyword`) VALUES
(12, 'ram', 'sapkota', 'ppp@gmail.com', 'Startup', 'animationn', 'annimation'),
(11, 'pramod', 'subedi', 'subedipramod@gmail.com', 'Annayest', 'animationn', 'web'),
(2, 'nischal', 'pokharel', 'pokharelnischal789@gmail.com', 'Annimation', 'animationn', 'design'),
(1, 'anush', 'pokharel', 'pokharelanush@gmail.com', 'Web development', 'web', 'web');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Name`, `Password`) VALUES
('hemant', '12345'),
('deepa', '1234'),
('shyam', 'a700a003121cf11b2aefeb17dfc82e39206a9ac7'),
('abi', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
('hari', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
('sharmaji', '4295513cec81c483f3938bf24c207aa20fe5a944'),
('shyam pokharel', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
