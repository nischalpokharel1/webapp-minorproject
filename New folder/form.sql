-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2019 at 01:08 AM
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
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `idea` varchar(255) NOT NULL,
  `cost` varchar(6) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `lname`, `email`, `profession`, `idea`, `cost`, `category`) VALUES
('nischal', 'pokharel', 'pokharelnischal789@gmail.com', 'student', 'about robotics', '500', 'robotics'),
('nischal', 'pokharel12', 'ppp@gmail.com', 'student', 'about animation', '1000$', 'animationn'),
('ravi', 'gautam', 'gautam@linkedin.com', 'software developer', 'internet security manager', '200$', 'web'),
('xyz', 'abc', 'xyz@gmail,com', 'student', 'music copmresor', '50$', 'music'),
('shyam', 'rai', 'rai@gmail.com', 'student', 'zyx', '20', 'gaming'),
('pramod', 'subedi', 'subedipramod@gmail.com', 'business analyst', 'about animation', '300$', 'gaming'),
('krishna', 'thapa', 'tapa@gmail.com', 'businessman', 'baseball animation', '150$', 'animationn'),
('', '', '', '', '', '', 'gaming'),
('rabi', 'lamichane', 'rl45@gmail.com', 'teacher', 'about the category of design and animation', '200$', 'design');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
