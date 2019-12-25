-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(222) NOT NULL,
  `admin_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_id`, `name`, `surname`, `password`) VALUES
(1, 'admin11', 'abdulsalam', 'mohammed', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(222) NOT NULL,
  `patient_id` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient_id`, `appointment_date`, `appointment_time`) VALUES
(1, 'HMS1956', '2019-12-15', '13:00:00.000000'),
(2, 'HMS1951', '2019-12-25', '06:50:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(222) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_id`, `name`, `surname`, `email`, `password`) VALUES
(1, 'staff122', 'SALISU', 'mohammed', 'abdulsalam@yahoo.com', '123456'),
(2, 'staff11', 'khaleed', 'bello', 'khaleed@gmail.com', '123456'),
(3, 'aliyu11', 'aliyu', 'sherif', 'aliyu@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(222) NOT NULL,
  `patient_id` varchar(10) NOT NULL,
  `fname` text NOT NULL,
  `surname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_id`, `fname`, `surname`, `email`, `password`) VALUES
(2, 'HMS1965', 'abdulsalam', 'abdulsalam', 'abdulsalamm@yahoo.com', '12345'),
(3, 'HMS1919', 'danmama', 'bakale', 'salami@gmail.com', '123456'),
(4, 'HMS1956', 'mohammed', 'abdulsalam', 'mohammed@gmail.com', '123456'),
(6, 'HMS1951', 'sherif', 'aliyu', 'aliyu@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(222) NOT NULL,
  `patient_id` varchar(222) NOT NULL,
  `drug_categories` varchar(222) NOT NULL,
  `drug_categories1` varchar(222) NOT NULL,
  `drug_categories2` varchar(222) NOT NULL,
  `drug_name` varchar(222) NOT NULL,
  `drug_name1` varchar(222) NOT NULL,
  `drug_name2` varchar(222) NOT NULL,
  `drug_quantity` varchar(222) NOT NULL,
  `drug_quantity1` varchar(222) NOT NULL,
  `drug_quantity2` varchar(222) NOT NULL,
  `drug_prescription` varchar(222) NOT NULL,
  `drug_prescription1` varchar(222) NOT NULL,
  `drug_prescription2` varchar(222) NOT NULL,
  `drug_days` varchar(222) NOT NULL,
  `drug_days1` varchar(222) NOT NULL,
  `drug_days2` varchar(222) NOT NULL,
  `injection_name` varchar(222) NOT NULL,
  `injection_name1` varchar(222) NOT NULL,
  `injection_name2` varchar(222) NOT NULL,
  `injection_dosage` varchar(222) NOT NULL,
  `injection_dosage1` varchar(222) NOT NULL,
  `injection_dosage2` varchar(222) NOT NULL,
  `injection_start` varchar(222) NOT NULL,
  `injection_start1` varchar(222) NOT NULL,
  `injection_start2` varchar(222) NOT NULL,
  `injection_continue` varchar(222) NOT NULL,
  `injection_continue1` varchar(222) NOT NULL,
  `injection_continue2` varchar(222) NOT NULL,
  `injection_days` varchar(222) NOT NULL,
  `injection_days1` varchar(222) NOT NULL,
  `injection_days2` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `patient_id`, `drug_categories`, `drug_categories1`, `drug_categories2`, `drug_name`, `drug_name1`, `drug_name2`, `drug_quantity`, `drug_quantity1`, `drug_quantity2`, `drug_prescription`, `drug_prescription1`, `drug_prescription2`, `drug_days`, `drug_days1`, `drug_days2`, `injection_name`, `injection_name1`, `injection_name2`, `injection_dosage`, `injection_dosage1`, `injection_dosage2`, `injection_start`, `injection_start1`, `injection_start2`, `injection_continue`, `injection_continue1`, `injection_continue2`, `injection_days`, `injection_days1`, `injection_days2`) VALUES
(1, 'HMS1965', 'Tablet,syrup,capsule', '', '', 'paracetamol,de coffe,apllicluse', '', '', '2,1,4', '', '', '2morning, 2afternoon, 2evening', '', '', '10days', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'HMS1956', 'Tablet', 'Capsule', 'Syrup', 'paracetamole', 'amplicluse', 'codellin', '2', '2', '1', '1 morning 1 evening', '2morning 2evening', '1 daily', '5', '10', '10', 'injection line', 'rabis', 'maleria', '4', '8', '4', '2ml', '4ml', '3ml', '1ml', '2ml', '2ml', '3', '4', '1'),
(4, 'HMS1951', 'Tablet', '', '', 'paracetamole', '', '', '2', '', '', '1morning 1 afternoon 1 evening', '', '', '3', '', '', 'injection lineen', '', '', '2', '', '', '2ml', '', '', '1ml', '', '', '4', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
