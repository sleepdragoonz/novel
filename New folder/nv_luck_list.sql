-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 09:18 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `nv_luck_list`
--

CREATE TABLE `nv_luck_list` (
  `nv_id` int(11) UNSIGNED NOT NULL,
  `nv_name` varchar(500) NOT NULL,
  `nv_ch` varchar(500) NOT NULL,
  `nv_cover` varchar(500) NOT NULL,
  `nv_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nv_luck_list`
--

INSERT INTO `nv_luck_list` (`nv_id`, `nv_name`, `nv_ch`, `nv_cover`, `nv_link`) VALUES
(1, 'High School DxD', 'เล่ม 13', 'http://www.luckpim.com/upproduct/5a0ba020b8232.jpg', 'http://www.luckpim.com/show/2452/'),
(2, 'Hidan no Aria', 'เล่ม 11', 'http://www.luckpim.com/upproduct/5a090b330cb47.jpg', 'http://www.luckpim.com/show/2446/'),
(3, 'องค์ชายจิตป่วนกับน้องเหมียวยิ้มยาก', 'เ่ล่ม 10', 'http://www.luckpim.com/upproduct/59ffce4231f28.jpg', 'http://www.luckpim.com/show/2433/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nv_luck_list`
--
ALTER TABLE `nv_luck_list`
  ADD PRIMARY KEY (`nv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nv_luck_list`
--
ALTER TABLE `nv_luck_list`
  MODIFY `nv_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
