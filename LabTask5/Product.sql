-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 04:22 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Product`
--

-- --------------------------------------------------------

--
-- Table structure for table `Product_info`
--

CREATE TABLE `Product_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Price` varchar(40) NOT NULL,
  `Quantity` varchar(40) NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product_info`
--

INSERT INTO `Product_info` (`ID`, `Name`, `Price`, `Quantity`,  `image`) VALUES
(2, 'James', 'Hannigan', 'jimmy',  NULL),
(3, 'jim1', 'jim', 'jim1',  NULL),
(4, 'jim2', 'jim', 'jim2',  NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Product_info`
--
ALTER TABLE `Product_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Product_info`
--
ALTER TABLE `Product_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
