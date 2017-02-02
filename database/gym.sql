-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 02:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@mail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `email` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`email`, `name`, `image_name`) VALUES
('admin@mail.com', 'Muhammad Harun-Or-Roshid', '14859482961105891c5882e80d7965123456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image_list`
--

CREATE TABLE `gallery_image_list` (
  `id` int(32) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_image_list`
--

INSERT INTO `gallery_image_list` (`id`, `image_name`) VALUES
(8, '14859664932786858920c9d31c652258.jpg'),
(9, '1485966493530658920c9d32a0b4334.jpg'),
(6, '1485966493964858920c9d2e4637480.jpg'),
(11, '1485967722140295892116a1386d9684.jpg'),
(12, '1485967722252355892116a1540b9072.jpg'),
(13, '1485968523170305892148b84fa07136.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(11, 'jashim@yahoo.com', '123456'),
(12, 'firoj@hotmail.com', '123456'),
(14, 'nila@live.com', '123456'),
(19, 'sudip@gmail.com', '123456'),
(34, 'tuni@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users_information`
--

CREATE TABLE `users_information` (
  `email` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `contact_number` varchar(14) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `image_name` varchar(100) NOT NULL DEFAULT 'default.png',
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_information`
--

INSERT INTO `users_information` (`email`, `name`, `contact_number`, `date_of_birth`, `gender`, `image_name`, `address`) VALUES
('firoj@hotmail.com', 'Firoj Khan', '01749999444', '1990-01-01', 'Male', 'person_3.jpg', 'House 543, Road 12, Rome, Italy'),
('jashim@yahoo.com', 'Jashim Uddin', '01821666333', '1971-01-01', 'Male', 'person_2.jpg', 'House 3, Road 34, Berlin, Germany'),
('nila@live.com', 'Nilanjona Nila', '01991144888', '1996-01-01', 'Female', 'person_5.jpg', 'House 35, Road 1, Rangpur, Bangladesh'),
('sudip@gmail.com', 'Sudip Sarker', '01771155999', '1992-01-01', 'Male', 'person_4.jpg', 'House 32, Road 5, London, UK'),
('tuni@gmail.com', 'Tun Tuni', '01711122211', '1994-01-01', 'Female', 'person_1.jpg', 'House 5, Road 2, Washington, D.C., USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `image_name` (`image_name`);

--
-- Indexes for table `gallery_image_list`
--
ALTER TABLE `gallery_image_list`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `image_name` (`image_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`);

--
-- Indexes for table `users_information`
--
ALTER TABLE `users_information`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `image_path` (`image_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery_image_list`
--
ALTER TABLE `gallery_image_list`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
