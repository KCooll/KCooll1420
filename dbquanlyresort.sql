-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 01:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbquanlyresort`
--

-- --------------------------------------------------------

--
-- Table structure for table `thongtindatphong`
--

CREATE TABLE `thongtindatphong` (
  `id` int(4) NOT NULL,
  `hoten` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `sodienthoai` int(15) NOT NULL,
  `cmnd` int(15) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `songuoi` int(2) NOT NULL,
  `loaiphong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhan` date NOT NULL,
  `ngaytra` date NOT NULL,
  `dichvuthem` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nganhang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sotaikhoan` int(30) NOT NULL,
  `sotien` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thongtindatphong`
--
ALTER TABLE `thongtindatphong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thongtindatphong`
--
ALTER TABLE `thongtindatphong`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
