-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 06:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hindi_utsav`
--

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `id` bigint(20) NOT NULL,
  `heading` longtext NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `total_like` bigint(20) NOT NULL,
  `comment` longtext NOT NULL,
  `writerimg` longtext NOT NULL,
  `writername` longtext NOT NULL,
  `category` longtext NOT NULL,
  `tags` longtext NOT NULL,
  `summary` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`id`, `heading`, `content`, `date`, `total_like`, `comment`, `writerimg`, `writername`, `category`, `tags`, `summary`) VALUES
(29, 'kjdfsbfv', 'vsdfvdfv', '2020-07-11 22:15:54', 10, 'comment', 'img/29', 'name', 'Storytime', 'a,mdsfn a', ''),
(33, 'Title of the Post', 'What is Lorem Ipsum', '2020-07-05 10:31:54', 10, 'comment', '', 'name', 'Journey', 'Developers', 'What is Lorem Ipsum Lorem Ipsum is simply '),
(34, 'Title Name', 'What is Lorem Ipsum Lorem Ipsum is simply dummy te,msdnf a,sdmfn as,dnc sxt of the printing and ', '2020-07-05 20:06:21', 10, 'comment', '', 'name', 'Leadership', 'Developers', 'Know About Developers and Designer'),
(35, 'Title of the Post', 'What is Lorem Ipsum', '2020-07-11 22:08:53', 10, 'comment', '', 'name', 'Journey', 'Developers', 'What is Lorem Ipsum Lorem Ipsum is simply ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
