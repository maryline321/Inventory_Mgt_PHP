-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 08:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory_details`
--

CREATE TABLE `inventory_details` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `measurement` text NOT NULL,
  `original_price` int(60) NOT NULL,
  `profit` int(60) NOT NULL,
  `selling_price` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_details`
--

INSERT INTO `inventory_details` (`product_id`, `product_name`, `quantity`, `measurement`, `original_price`, `profit`, `selling_price`) VALUES
(13, 'Office Desks', 10, 'Office equipment', 10000, 5000, 15000),
(14, 'Phone', 7, 'Eletronic', 20000, 6000, 26000),
(15, 'Band saws', 9, 'Machinery', 5000, 2000, 7000),
(16, 'Outbuildings', 3, 'Real estate', 200000, 150000, 350000),
(17, 'Seats', 4, 'Furniture', 10000, 30000, 40000),
(18, 'Books', 30, 'Stationery', 18000, 4000, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `confirm_password`) VALUES
(1, 'chebet', 'chebet@gmail.com', '2063', '2063'),
(2, 'chebetcar', 'jeanyy@gmail.com', '0000', '0000'),
(3, 'sly', 'jeanyy@gmail.com', '1234', '1234'),
(4, 'kate', 'kate@gmail.com', 'qwer', 'qwer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory_details`
--
ALTER TABLE `inventory_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory_details`
--
ALTER TABLE `inventory_details`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
