-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 04:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(5) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`) VALUES
(1, 'mustafa', 'abdou'),
(2, 'ahmad', 'abdou'),
(3, 'jehad', 'abdou'),
(4, 'hassan', 'dngor'),
(5, 'samo', 'hmo');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `isbn_code` int(5) NOT NULL,
  `id` int(5) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `discription` varchar(200) DEFAULT NULL,
  `type` enum('CD','BOOK','DVD') DEFAULT NULL,
  `status` enum('AVAILABLE','RESERVED') DEFAULT NULL,
  `fk_author_id` int(5) DEFAULT NULL,
  `fk_publisher_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`isbn_code`, `id`, `image`, `discription`, `type`, `status`, `fk_author_id`, `fk_publisher_id`) VALUES
(3, NULL, 'https://cdn.pixabay.com/photo/2018/01/18/20/43/literature-3091212__340.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'CD', 'AVAILABLE', 1, 1),
(4, NULL, 'https://cdn.pixabay.com/photo/2016/11/29/07/22/bible-1868070__340.jpg', ' uiiu', 'BOOK', 'RESERVED', 1, 1),
(5, NULL, 'https://cdn.pixabay.com/photo/2015/04/03/18/56/font-705667__340.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'DVD', 'RESERVED', 1, 1),
(6, NULL, 'https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717__340.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'CD', 'AVAILABLE', 1, 1),
(7, NULL, 'https://cdn.pixabay.com/photo/2015/07/27/20/16/book-863418__340.jpg', 'Lorem Ipsum is simply dummy text0s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'CD', 'AVAILABLE', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `size` enum('big','medium','small') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `address`, `size`) VALUES
(1, 'saw', 'vienna', 'big'),
(2, 'jehad', 'linz', 'medium'),
(3, 'ahjad', 'love', 'small'),
(4, 'dngor', 'swden', 'small'),
(5, 'ahmad', 'salzburg', 'big');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`isbn_code`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `isbn_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
