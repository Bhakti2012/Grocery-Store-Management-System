-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 12:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocerydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `grocerytb`
--

CREATE TABLE `grocerytb` (
  `id` int(10) NOT NULL,
  `Item_name` varchar(30) NOT NULL,
  `Item_Quantity` int(100) NOT NULL,
  `Item_status` varchar(20) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocerytb`
--

INSERT INTO `grocerytb` (`id`, `Item_name`, `Item_Quantity`, `Item_status`, `Date`) VALUES
(108, 'Pasta', 7, '1', '2023-02-03'),
(111, 'Rice', 10, '2', '2023-02-10'),
(112, 'Rice', 8, '1', '2023-02-02'),
(114, 'Lays', 10, '1', '2023-02-09'),
(115, 'maggi', 7, '1', '2023-02-02'),
(116, 'egg', 2, '1', '2023-02-01'),
(122, 'egg', 7, '1', '2023-02-26'),
(123, 'egg', 10, '2', '2023-02-26'),
(124, 'egg', 4, '1', '2023-02-01'),
(125, 'egg', 10, '1', '2023-02-01'),
(126, 'egg', 1, '2', '2023-02-26'),
(127, 'chocopie', 10, '1', '2023-02-15'),
(128, 'chocopie', 2, '1', '2023-02-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grocerytb`
--
ALTER TABLE `grocerytb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grocerytb`
--
ALTER TABLE `grocerytb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
