-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 02:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `barangay_id` int(50) NOT NULL,
  `barangay_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`barangay_id`, `barangay_name`) VALUES
(2345, 'Lower Loboc'),
(4564, 'Canubay');

-- --------------------------------------------------------

--
-- Table structure for table `captain`
--

CREATE TABLE `captain` (
  `captain_id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `barangay_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `captain`
--

INSERT INTO `captain` (`captain_id`, `firstname`, `middlename`, `lastname`, `barangay_id`) VALUES
(5678, 'Mario', 'Agora', 'Caban', 4564);

-- --------------------------------------------------------

--
-- Table structure for table `cedula`
--

CREATE TABLE `cedula` (
  `cedula_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `amount` int(50) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cedula`
--

INSERT INTO `cedula` (`cedula_id`, `date`, `amount`, `place`) VALUES
(6785, '2019-03-07', 20, 'oroquieta city'),
(9999, '2019-03-06', 23, 'oroquieta city');

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clearance_id` int(50) NOT NULL,
  `persons_id` int(50) DEFAULT NULL,
  `barangay_id` int(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `cedula_id` int(50) DEFAULT NULL,
  `captain_id` int(50) DEFAULT NULL,
  `staff_id` int(50) DEFAULT NULL,
  `purpose` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clearance_id`, `persons_id`, `barangay_id`, `date`, `amount`, `cedula_id`, `captain_id`, `staff_id`, `purpose`) VALUES
(4353, 6677, 2345, '2019-03-06', 23, 6785, 5678, 6643, 'scholarship');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `persons_id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `barangay_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`persons_id`, `first_name`, `middle_name`, `last_name`, `status`, `address`, `birth_date`, `barangay_id`) VALUES
(6677, 'Shaira', 'Bigcas', 'Sepe', 'single', 'oroquieta city', '2019-03-06', 2345),
(45543, 'JD', 'Maisling', 'Carpo', 'married', 'oroquieta city', '2019-03-07', 4564);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `barangay_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `Firstname`, `Middlename`, `Lastname`, `barangay_id`) VALUES
(6643, 'Charlie', 'Valles', 'Cruz', 2345),
(7871, 'Ann', 'Pasco', 'Castro', 4564);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`barangay_id`);

--
-- Indexes for table `captain`
--
ALTER TABLE `captain`
  ADD PRIMARY KEY (`captain_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `cedula`
--
ALTER TABLE `cedula`
  ADD PRIMARY KEY (`cedula_id`);

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clearance_id`),
  ADD KEY `persons_id` (`persons_id`),
  ADD KEY `barangay_id` (`barangay_id`),
  ADD KEY `cedula_id` (`cedula_id`),
  ADD KEY `captain_id` (`captain_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`persons_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `captain`
--
ALTER TABLE `captain`
  ADD CONSTRAINT `captain_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `clearance_ibfk_1` FOREIGN KEY (`persons_id`) REFERENCES `person` (`persons_id`),
  ADD CONSTRAINT `clearance_ibfk_2` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`),
  ADD CONSTRAINT `clearance_ibfk_3` FOREIGN KEY (`cedula_id`) REFERENCES `cedula` (`cedula_id`),
  ADD CONSTRAINT `clearance_ibfk_4` FOREIGN KEY (`captain_id`) REFERENCES `captain` (`captain_id`),
  ADD CONSTRAINT `clearance_ibfk_5` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`barangay_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
