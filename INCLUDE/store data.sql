-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 05:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Venu Sharma', 'venu@xyz.com', 'venu@123', '5312328748', 'Jaipur', 'Adarsh Nagar, Jaipur'),
(2, 'Shubham', 'shubham@xyz.com', 'shubh#123', '3984031389', 'Mumbai', 'Nehru Rd, Near Jalaram Mandir, Dombivila '),
(3, 'Adarsh', 'adarsh@xyz.com', 'adarsh@1234', '7823908489', 'Delhi', 'Khandsa Road, Gurgaon'),
(4, 'Madhav', 'madhav@xyz.com', 'madhav@123', '9013984909', 'Mumbai', 'Nagadevi Street, Mandevi, Mumbai'),
(5, 'Aryan', 'aryan@xyz.com', 'aryan_123', '0298438930', 'Chennai', 'Narayana Mudali St, Sowcarpet, Chennai'),
(6, 'Haider', 'haider@xyz.com', 'haider*8910', '08382743822', 'Bangalore', '6th Cross, Malleswaram'),
(7, 'Neha', 'neha@xyz,com', 'neha&542#1', '41337468379', 'Mumbai', ' Bhide Comp, Datta Mandir Rd, Bhandup, Mumbai'),
(8, 'Mandira', 'mandira@xyz.com', 'mandira@549', '8912748378', 'Bangalore', 'Sampige Road, Malleshewaram'),
(9, 'Varun Kumar', 'kumarvarun@xyz.com', 'krvarun_123', '452374621', 'Mumbai', 'Datttateray Road, Near Hindu Samashan Bhoomi, Santacruz'),
(10, 'Mahi Kumari', 'mahikri@xyz.com', 'mahikri#578', '3542362153', 'Mumbai', '10th Floor, 208, Regent Chambers, Nariman Point'),
(11, 'Praveen Kumar', 'kumarpraveen@xyz.com', 'krpraveen@432', '4657458079', 'Pune', 'Shivam Shopping Center, Airoli Sector2, Airoli'),
(12, 'Ashmita ', 'ashmita@xyz.com', 'ashmita@6879', '9290778564', 'Mumbai', '442, Somwar Peth'),
(13, 'Surbhi Kumari', 'kumarisurbhi@xyz.com', 'krisurbhi@356', '7847587901', 'Pune', 'Charudatta Apts, Kothrud');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 3, 'Confirmed'),
(2, 3, 4, 'Added to cart'),
(3, 2, 6, 'Added to cart'),
(5, 8, 4, 'Confirmed'),
(7, 11, 11, 'Added to cart'),
(9, 6, 10, 'Added to cart'),
(10, 12, 3, 'Confirmed'),
(11, 13, 8, 'Confirmed'),
(12, 10, 11, 'Added to cart'),
(13, 9, 5, 'Added to cart'),
(14, 5, 12, 'Confirmed'),
(26, 13, 12, 'Confirmed'),
(27, 13, 5, 'Confirmed'),
(28, 13, 5, 'Confirmed'),
(29, 13, 5, 'Confirmed'),
(30, 13, 5, 'Confirmed'),
(31, 13, 5, 'Confirmed'),
(32, 13, 11, 'Confirmed'),
(33, 13, 10, 'Confirmed'),
(34, 13, 11, 'Confirmed'),
(35, 13, 5, 'Confirmed'),
(36, 13, 3, 'Confirmed'),
(37, 1, 8, 'Confirmed'),
(38, 1, 3, 'Confirmed'),
(39, 1, 1, 'Confirmed'),
(40, 1, 6, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
