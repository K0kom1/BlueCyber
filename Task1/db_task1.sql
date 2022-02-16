-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2022 at 02:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_task`
--

CREATE TABLE `tb_task` (
  `id` int(11) NOT NULL,
  `task` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_task`
--

INSERT INTO `tb_task` (`id`, `task`) VALUES
(5, 'Thanh'),
(7, 'Hello Word'),
(11, 'Nguyễn Quang Hà'),
(12, 'Nguyễn Quang Hà'),
(13, 'Nguyễn Quang Hà'),
(14, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Quang Ha', 'username', 'hanq@gmail.com', '12'),
(2, 'Son', 'username', 'son@gmail.com', '1234'),
(3, 'Mai Duc Giang', 'giang', 'giang@gmail.com', '1234'),
(4, '', '', '', ''),
(5, 'Quang Tien', 'tien', 'tien@gmail.com', 'tien'),
(6, 'Thanh', 'Thanh', 'thanh@gmail.com', 'abc'),
(7, 'abc', 'a', 'a@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
