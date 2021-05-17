-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 05:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmeeting`
--

CREATE TABLE `tbmeeting` (
  `no` int(99) NOT NULL,
  `image` varchar(999) NOT NULL,
  `judul` varchar(999) NOT NULL,
  `image_pembuat` varchar(999) NOT NULL,
  `nama_pembuat` varchar(999) NOT NULL,
  `deskripsi` varchar(9999) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `link_meeting` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmeeting`
--

INSERT INTO `tbmeeting` (`no`, `image`, `judul`, `image_pembuat`, `nama_pembuat`, `deskripsi`, `tanggal`, `waktu`, `link_meeting`) VALUES
(1, 'Thumbnail.png', 'Gimana Cara Menjawab Quiz Dengan Cepat?', 'profile2.jpg', 'Horsea', 'pada sesi kali ini saya akan membagikan bagaimana cara menjawab qui dan berpikir secara cepat dan tangap. info ini bisa sangat berguna bagi kalian yang kesulitan untuk menjawab quiz secara langsung.', '2021-05-21', '13:00:00', ''),
(2, 'Thumbnail.png', 'Akhirnya', 'profile.jpg', 'evo', 'Bisa tidok', '2021-05-04', '03:00:00', 'Ini link ya wkwkwkwk.html.php.py.css'),
(3, 'Thumbnail.png', 'Mari bobo', 'profile.jpg', 'evo', 'Dan mimpi indah', '2021-05-04', '03:01:00', 'Bobogemink123pronoob.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `no` int(99) NOT NULL,
  `profile_image` mediumtext NOT NULL,
  `nama` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`no`, `profile_image`, `nama`, `email`, `password`) VALUES
(1, 'profile.jpg', 'evo', 'evo@gmail.com', 'evo'),
(2, 'profile.jpg', 'Suzuka', 'suzuka@gmail.com', 'suzuka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmeeting`
--
ALTER TABLE `tbmeeting`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmeeting`
--
ALTER TABLE `tbmeeting`
  MODIFY `no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `no` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
