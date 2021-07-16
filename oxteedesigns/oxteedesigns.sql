-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 05:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxteedesigns`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `email` char(225) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'abdo', 'abdelfattah.elfazazi@gmail.com', 'ABDOabdo123'),
(9, 'abdo', 'abdelfattah.elfazazi@gmail.com', 'ABDOabdo123'),
(10, 'abdelfattah12', 'abdelfatahfazazi@gmail.com', 'qgggqg'),
(11, 'abdelfattah12', 'abdelfatahfazazi@gmail.com', 'qgggqg'),
(12, 'abdelfattah12', 'abdelfatahfazazi@gmail.com', 'qgggqg'),
(13, 'abdelfattah', 'abdelfattah.elfazazi@gmail.com', 'ahsihc'),
(14, 'snnsns', 'abdelfatahfazazi@gmail.com', 'sssfsf'),
(17, '<script>alert\"test\"<', 'abdelfattah.elfazazi@gmail.com', 'qnnqqnq'),
(18, 'badro', 'hhhhhhhh@gmail.com', 'badro'),
(19, 'ggggg', 'gggggg@gmail.com', 'aa'),
(20, 'abdo', 'abdelfattah.elfazazi@gmail.com', 'rrrr'),
(21, 'othman', 'abdelfatah_fizazi@hotmail.com', '12345'),
(22, 'ouas', 'dede@gmail.com', '123jyyt'),
(23, 'ajhgedy', 'abdo@gmail.com', 'tzytfs'),
(24, 'aoiiai', 'GGG@QJJQ.com', 'aijaiia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
