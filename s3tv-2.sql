-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 11:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s3tv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass1` varchar(25) NOT NULL,
  `pass2` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass1`, `pass2`) VALUES
(1, 'diya@gmail.com', 'diya', 'diya'),
(2, 'nency@gmail.com', 'nency', 'nency'),
(3, 'meet@gmail.com', 'meet', 'meet');

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(700) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `image`, `name`, `url`, `price`) VALUES
(1, 'a1', 'Akram Express', 'https://drive.google.com/file/d/1GtC6uZDufIsjSnw1H7hljCAHin-PQx2W/view', 20),
(2, 'a2', 'AutoCar', 'https://drive.google.com/file/d/1HHibHg_3oR18qI83X8CAnK0UGI-VDIJh/view', 55),
(3, 'a3', 'India Today', 'https://drive.google.com/file/d/17oz_hPOyOU-MsME6b2JLDHrEgBFmEvqU/view', 60),
(4, 'a4', 'India Today', 'https://drive.google.com/file/d/1_daUELQK9UAYOZglCUtXvMbVFRiefBT2/view', 60),
(5, 'ed', 'GreyCaps', 'https://drive.google.com/file/d/1DFqgxFnGbU-Kz0Zds9pAYuJJ2_Gf5drA/view', 45),
(6, 'a6', 'Cosmopolitan', 'https://drive.google.com/file/d/1xmbSsL3qXrHI9LdG6lhzgWC2cRAxM3WK/view', 50),
(7, 'a7', 'Knowledge Tribe', 'https://drive.google.com/file/d/1gadnBYh_6NH07NEIKCgKEK476nU3n8gF/view', 60);


-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(700) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `image`, `name`, `url`, `price`) VALUES
(1, 'ironman', 'Iron man', 'https://www.youtube.com/embed/oYSD2VQagc4', 500),
(2, 'pirates', 'Pirates', 'https://www.youtube.com/embed/Hgeu5rhoxxY', 250),
(4, 'avengers', 'Avengers', 'https://www.youtube.com/embed/TcMBFSGVi1c', 500),
(5, 'justice', 'Justice League', 'https://www.youtube.com/embed/PXrgvNXfN7M', 450),
(6, 'batman', 'Batman', 'https://www.youtube.com/embed/-FZ-pPFAjYY', 500),
(7, 'joker', 'Joker', 'https://www.youtube.com/embed/-_DJEzZk2pc', 500),
(8, 'logan', 'Logan', 'https://www.youtube.com/embed/RH3OxVFvTeg', 350);


-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `email`, `contact`, `payment`) VALUES
(1, 'meet123@gmail.com', 2147483647, '300'),
(2, 'nency123@gmail.com', 9925460414, '600'),
(3, 'shahdiya194@gmail.com', 9876543218, '300'),
(4, 'rezul.rajat.goswami.31@gmail.com', 8077859483, '60');

-- --------------------------------------------------------

--
-- Table structure for table `tvseries`
--

CREATE TABLE `tvseries` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(700) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvseries`
--

INSERT INTO `tvseries` (`id`, `image`, `name`, `url`, `price`) VALUES
(9, 'got', 'Game Of Thrones', 'https://www.youtube.com/embed/KPLWWIOCOOQ', 500),
(10, 'mirza', 'Mirzapur', 'https://www.youtube.com/embed/ZNeGF-PvRHY', 599),
(11, 'robot', 'MR. Robot', 'https://www.youtube.com/embed/xIBiJ_SzJTA', 500),
(12, 'luci', 'Lucifer', 'https://www.youtube.com/embed/6w_lSAOpFTQ', 500),
(13, 'twd', 'The Walking Dead', 'https://www.youtube.com/embed/sfAc2U20uyg', 599),
(14, 'suits', 'Suits', 'https://www.youtube.com/embed/85z53bAebsI', 500),
(15, 'vikng', 'VIKINGS', 'https://www.youtube.com/embed/Auzs95InJzo', 499);
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(10) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `pass1` varchar(20) NOT NULL,
  `pass2` varchar(20) NOT NULL,
  `bought` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `dob`, `contact`, `nationality`, `pass1`, `pass2`, `bought`) VALUES
(1, 'meet', 'shastri', 'meet123@gmail.com', '2002-09-23', 9876543210, 'india', 'meetmeet', 'meetmeet', 300),
(2, 'nency', 'sojitra', 'nency123@gmail.com', '2002-08-16', 9925460414, 'india', '1234567890', '1234567890', 600),
(3, 'Diya', 'Shah', 'shahdiya194@gmail.com', '2002-10-19', 9876543218, 'indian', 'diyashah184', 'diyashah184', 300),
(4, 'Rajat', 'Goswami', 'rezul.rajat.goswami.31@gmail.com', '1997-05-31', 8077859483, 'indian', 'rajat1840', 'rajat1840', 60);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvseries`
--
ALTER TABLE `tvseries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tvseries`
--
ALTER TABLE `tvseries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
