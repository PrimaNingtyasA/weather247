-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 11:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `temp_graph`
--

CREATE TABLE IF NOT EXISTS `temp_graph` (
`temp_id` int(11) NOT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `weather` varchar(30) DEFAULT NULL,
  `temp` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_graph`
--

INSERT INTO `temp_graph` (`temp_id`, `jam`, `weather`, `temp`) VALUES
(1, '1 PM', 'Cerah', 20),
(2, '2 PM', 'Cerah', 10),
(3, '3 PM', 'Cerah', 30),
(4, '4 PM', 'Cerah', 40),
(5, '5 PM', 'Cerah', 5),
(6, '6 PM', 'Hujan', 10),
(7, '7 PM', 'Hujan', 20),
(8, '8 PM', 'Hujan', 10),
(9, '9 PM', 'Hujan', 50),
(10, '10 PM', 'Berawan', 10),
(11, '11 PM', 'Berawan', 30),
(12, '12 PM', 'Hujan Ringan', 30),
(13, '1 AM', 'Hujan Ringan', 10),
(14, '2 AM', 'Hujan Ringan', 10),
(15, '3 AM', 'Hujan Ringan', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_graph`
--
ALTER TABLE `temp_graph`
 ADD PRIMARY KEY (`temp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temp_graph`
--
ALTER TABLE `temp_graph`
MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
