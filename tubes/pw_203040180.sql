-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 12:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040180`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Adam Berdi', 203040180, 'adamberdi46@gmail.com', 'Teknik Informatika', 'pp.jpg'),
(2, 'Bae Irene', 203040181, 'irenerv@gmail.com', 'Teknik Industri', 'irene.jpg'),
(3, 'Im Yoon Ah', 203040187, 'yoonalim@gmail.com', 'Farmasi', 'yoona.jpg'),
(4, 'Kendall', 203040186, 'kendaal@gmai.com', 'Farmasi', 'kendal.jpg'),
(11, 'Bae Suzy', 203040190, 'suzyyy@gmail.com', 'Teknik Pangan', 'suzy.jpg'),
(13, 'Reza Rahardian ', 203040190, 'rezaa123@gmail.com', 'Ilmu Komunikasi', 'reza.jpeg'),
(14, 'Sean ', 203040196, 'seanopry@gmail.com', 'Hukum', '6070bc114838d.jpg'),
(15, 'wulan', 0, 'zhucinarie@gmail.com', 'Farmasi', 'nophoto1.jpeg'),
(16, 'Barbara', 203040789, 'blvinmodel@gmail.com', 'Farmasi', '6070ccc7061d5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'adamberdi', '203040180'),
(4, 'admin', '$2y$10$aT9PHJeR6gtplR88WVuAQe7D07Id9nR8QBDp/uyVGL4AuJLfbEtMi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
