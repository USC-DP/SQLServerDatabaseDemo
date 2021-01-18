-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2020 at 10:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Store`
--

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `ProductName` varchar(64) NOT NULL,
  `Price` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`ProductName`, `Price`, `Quantity`, `Id`) VALUES
('6mm Screws x40', 3.49, 1432, 1),
('8mm Screws x40', 3.49, 242, 2),
('12mm Screws x20', 4.09, 574, 3),
('16mm Screws x20', 4.09, 270, 4),
('20mm Screws x20 ', 4.09, 634, 5),
('12V Power Drill', 24.99, 17, 6),
('Claw Hammer', 5, 19, 7),
('0.3\" Chisel', 2.99, 20, 8),
('0.5\" Chisel', 3.5, 24, 9),
('1.0\" Chisel', 3.99, 30, 10),
('1.5\" Chisel', 5, 10, 11),
('5x Paint Brushes', 7.99, 8, 12),
('3x Paint Brushes', 1, 7, 13),
('5mm Nails x100', 3.49, 4, 14),
('7mm Nails x100', 3.49, 34, 15),
('9mm Nails x100', 3.49, 24, 16),
('15mm Nails x100', 4.09, 13, 17),
('Sledge Hammer', 20.49, 3, 18),
('Garden Spade', 9.99, 12, 19),
('Garden Fork', 9.99, 13, 20),
('Garden Hoe', 8.99, 8, 21),
('1000W Lawn Mower', 109.99, 2, 22),
('500W Hedge Trimmer', 49.99, 4, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Inventory`
--
ALTER TABLE `Inventory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
