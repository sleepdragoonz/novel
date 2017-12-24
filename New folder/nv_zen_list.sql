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
-- Table structure for table `nv_zen_list`
--

CREATE TABLE `nv_zen_list` (
  `nv_id` int(11) UNSIGNED NOT NULL,
  `nv_name` varchar(500) NOT NULL,
  `nv_ch` varchar(500) NOT NULL,
  `nv_cover` varchar(500) NOT NULL,
  `nv_link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nv_zen_list`
--

INSERT INTO `nv_zen_list` (`nv_id`, `nv_name`, `nv_ch`, `nv_cover`, `nv_link`) VALUES
(1, 'มันผิดรึไงถ้าใจอยากจะพบรักในดันเจี้ยน', 'เล่ม 8', 'http://dr.lnwfile.com/_/dr/_raw/dh/iy/m9.jpg', 'http://www.zenshushop.com/product/1409/%E0%B8%A1%E0%B8%B1%E0%B8%99%E0%B8%9C%E0%B8%B4%E0%B8%94%E0%B8%A3%E0%B8%B6%E0%B9%84%E0%B8%87%E0%B8%96%E0%B9%89%E0%B8%B2%E0%B9%83%E0%B8%88%E0%B8%AD%E0%B8%A2%E0%B8%B2%E0%B8%81%E0%B8%88%E0%B8%B0%E0%B8%9E%E0%B8%9A%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B9%83%E0%B8%99%E0%B8%94%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%88%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%99-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1-8'),
(2, 'Steins;Gate สไตน์เกท อ็อคเตทแห่งปริภูมิที่ผกผัน', 'เล่ม 2 (จบ)', 'http://dr.lnwfile.com/_/dr/_raw/r6/jl/jd.jpg', 'http://www.zenshushop.com/product/1431/steinsgate-%E0%B8%AA%E0%B9%84%E0%B8%95%E0%B8%99%E0%B9%8C%E0%B9%80%E0%B8%81%E0%B8%97-%E0%B8%AD%E0%B9%87%E0%B8%AD%E0%B8%84%E0%B9%80%E0%B8%95%E0%B8%97%E0%B9%81%E0%B8%AB%E0%B9%88%E0%B8%87%E0%B8%9B%E0%B8%A3%E0%B8%B4%E0%B8%A0%E0%B8%B9%E0%B8%A1%E0%B8%B4%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%9C%E0%B8%81%E0%B8%9C%E0%B8%B1%E0%B8%99-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1-2-%E0%B8%88%E0%B8%9A'),
(3, 'Sword Art Online', 'เล่ม 15', 'http://dr.lnwfile.com/_/dr/_raw/mt/3s/u0.jpg', 'http://www.zenshushop.com/product/1395/sword-art-online-%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%A1-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nv_zen_list`
--
ALTER TABLE `nv_zen_list`
  ADD PRIMARY KEY (`nv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nv_zen_list`
--
ALTER TABLE `nv_zen_list`
  MODIFY `nv_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
