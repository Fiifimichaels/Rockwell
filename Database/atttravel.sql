-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 12:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atttravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'Michael', 'Quaicoe', 'admin', 'admin', 'uploads/favicon.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `keyu` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Residence` varchar(100) DEFAULT NULL,
  `pob` varchar(100) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`keyu`, `fname`, `sname`, `lname`, `Gender`, `Birthday`, `Residence`, `pob`, `Department`, `mobile`, `email`, `thumbnail`, `password`, `id`, `date`) VALUES
(1, 'Michael', 'F', 'Quaicoe', 'Male', '1998-04-25', 'Michel Camp', 'Anaji', 'IT Tech', '0243762748', 'mike', 'uploads/images.jpg', 'admin', '0243762748', '2022-08-08 16:52:41'),
(2, 'Elijah', 'A', 'Afidenyo', 'Male', '1997-05-26', 'New Town', 'Ho', 'Warehouse', '0577101157', 'elijah@gmail.com', 'uploads/none.png', 'admin', '0577101157', '2022-08-08 16:54:33'),
(3, 'Christiana', 'J', 'Arkorful', 'Female', '1996-10-02', 'Tema', 'Mankesem', 'Marketing', '0559784562', 'admin@gmail.com', 'uploads/Christiana.JPG', 'admin', '0559784562', '2022-08-08 17:02:20');


-- --------------------------------------------------------

--
-- Table structure for table `requestbus`
--

CREATE TABLE `requestbus` (
  `id` int(11) NOT NULL,
  `fname` varchar(110) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `seatnum` int(5) NOT NULL,
  `level` varchar(15) NOT NULL,
  `pickup` varchar(25) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `gmobile` int(15) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestbus`
--

INSERT INTO `requestbus` (`id`, `fname`, `lname`, `Status`, `time`, `seatnum`, `level`, `pickup`, `destination`, `gmobile`, `amount`) VALUES
(1, 'Michael', 'Quaicoe', 'Pending', '2023-04-02 10:11:33', 27, 'Level 200', 'Parade grounds', 'Accra & Tema', 243762748, 190),
(2, 'Michael', 'Quaicoe', 'Pending', '2023-04-02 18:10:36', 55, 'Level 400', 'Evandy (Newsite)', 'Kasoa, Cape Or Takoradi', 243762748, 190),
(3, 'Michael', 'Quaicoe', 'Pending', '2023-04-02 21:54:47', 54, 'Level 300', 'Ayeduase gate', 'Sehwi', 243762748, 190);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`keyu`);

--
-- Indexes for table `requestbus`
--
ALTER TABLE `requestbus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `keyu` int(10) NOT NULL AUTO_INCREMENT = 1;

--
-- AUTO_INCREMENT for table `requestbus`
--
ALTER TABLE `requestbus`
ALTER TABLE requestbus AUTO_INCREMENT = 1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
