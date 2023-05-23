-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230412.45c7d30093
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 07:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory_tb`
--

CREATE TABLE `inventory_tb` (
  `item_id` int(11) NOT NULL,
  `item_Name` varchar(255) NOT NULL,
  `item_Cost` decimal(11,0) NOT NULL,
  `item_Quantity` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_tb`
--

INSERT INTO `inventory_tb` (`item_id`, `item_Name`, `item_Cost`, `item_Quantity`, `unit`) VALUES
(1, 'Concrete Blocks', 50, 20, 'kg'),
(2, 'Steel Bar', 50, 20, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `login_db`
--

CREATE TABLE `login_db` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_db`
--

INSERT INTO `login_db` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_tb`
--
ALTER TABLE `inventory_tb`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `login_db`
--
ALTER TABLE `login_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_tb`
--
ALTER TABLE `inventory_tb`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_db`
--
ALTER TABLE `login_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
