-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 06:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `hallbooking`
--

CREATE TABLE `hallbooking` (
  `id` int(7) NOT NULL,
  `user` text NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `price` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `capacity` text NOT NULL,
  `services` text NOT NULL,
  `booking_date` text NOT NULL,
  `persons` text NOT NULL,
  `book_name` text NOT NULL,
  `contact` text NOT NULL,
  `occuption` text NOT NULL,
  `book_services` text NOT NULL,
  `un_id` int(7) NOT NULL,
  `time_t` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hallbooking`
--

INSERT INTO `hallbooking` (`id`, `user`, `name`, `location`, `price`, `phone`, `email`, `capacity`, `services`, `booking_date`, `persons`, `book_name`, `contact`, `occuption`, `book_services`, `un_id`, `time_t`) VALUES
(796343437, 'anki', 'A.C.Seminar Hall', 'Near Bandra Railway Station,Hemant lokhnde Road,Bandra West-400066', '16000', '8282928465', 'xyz@gmail.com', '500', 'Wifi, Refreshments', '2020-09-19', '500', 'Umesh Kesarkar', '965704820', 'conference', 'Wifi, ', 12, '2020-09-17 14:06:54'),
(766185830, 'aabc', 'A.A.Seminar Hall', 'Near Andheri Railway Station,N,M,Road,Anderi West-400066', '20000', '8282928465', 'xyz@gmail.com', '800', 'Wifi, Refreshments', '2020-09-25', '100', 'aabc', '965704820', 'sdcx', 'Wifi, ', 13, '2020-09-17 14:09:57'),
(526726884, 'aabc', 'A.C.Seminar Hall', 'Near Bandra Railway Station,Hemant lokhnde Road,Bandra West-400066', '16000', '8282928465', 'xyz@gmail.com', '500', 'Wifi, Refreshments', '2020-09-20', '500', 'aabc', '987456321', 'sdcx', 'Wifi', 14, '2020-09-17 14:24:23'),
(1283786634, 'anki', 'A.A.Seminar Hall', 'Near Andheri Railway Station,N,M,Road,Anderi West-400066', '20000', '8282928465', 'xyz@gmail.com', '800', 'Wifi, Refreshments', '2020-09-27', '500', 'anki', '32453246234', 'conference', 'dfger', 15, '2020-09-17 14:27:45'),
(1460647041, 'aabc', 'A.F.Seminar Hall', 'Near Andheri Railway Station,Teli Road,Anderi east-400066', '5000', '8282928465', 'xyz@gmail.com', '300', 'Wifi, Refreshments', '2020-09-19', '1000', 'aabc', '965704820', 'sdcx', 'Wifi', 16, '2020-09-17 15:46:01'),
(5916517, 'aabc', 'A.E.Seminar Hall', 'Near Bandra Railway Station,Rahul patil Road,Bandra West-400066', '25000', '8282928465', 'xyz@gmail.com', '1000', 'Wifi, Refreshments', '2020-09-20', '500', 'aabc', '987456321', 'sdcx', 'Wifi, AC', 17, '2020-09-18 03:12:48'),
(1619707473, 'aabc', 'A.E.Seminar Hall', 'Near Bandra Railway Station,Rahul patil Road,Bandra West-400066', '25000', '8282928465', 'xyz@gmail.com', '1000', 'Wifi, Refreshments', '2020-09-19', '1000', 'ankita', '9763825671', 'Meeting', 'WiFi', 18, '2020-09-18 03:35:19'),
(1205472503, 'aabc', 'A.C.Seminar Hall', 'Near Bandra Railway Station,Hemant lokhnde Road,Bandra West-400066', '16000', '8282928465', 'xyz@gmail.com', '500', 'Wifi, Refreshments', '2020-09-24', '1000', 'ankita', '9475725648', 'Meeting', 'WiFI', 19, '2020-09-18 05:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'Deva', 'deva@mail.com', '5b369dd8eefbc60ac2880e9538448121'),
(7, 'la', 'la@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'anki', 'umesh.kes123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'jack', 'jack123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'aabc', 'abc@gmail.com', 'c33367701511b4f6020ec61ded352059'),
(11, 'abcd', 'abcd@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallbooking`
--
ALTER TABLE `hallbooking`
  ADD UNIQUE KEY `un_id` (`un_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallbooking`
--
ALTER TABLE `hallbooking`
  MODIFY `un_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
