-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 05:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_table1`
--

CREATE TABLE `donation_table1` (
  `Id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Company` varchar(15) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Phone_number` varchar(15) NOT NULL,
  `Payment_method` varchar(50) NOT NULL,
  `Cheque_no` varchar(50) NOT NULL,
  `Draw_on` varchar(15) NOT NULL,
  `Payable_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_table1`
--

INSERT INTO `donation_table1` (`Id`, `Name`, `Company`, `Email`, `Phone_number`, `Payment_method`, `Cheque_no`, `Draw_on`, `Payable_at`) VALUES
(1, 'Edward kenwey', 'AC Black Flag', 'abc@gmail.com', '0313-1234567', 'Cheque', '42111-102030-01', 'Local Bank', 'Donaion'),
(2, 'Waiz Ali', 'Ibex', 'waiz@gmail.com', '0313-1234567', 'Cash', '42111-102030-01', 'Local Bank', 'Donaion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_table1`
--
ALTER TABLE `donation_table1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_table1`
--
ALTER TABLE `donation_table1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
