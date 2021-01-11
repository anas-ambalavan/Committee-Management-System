-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2021 at 10:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msf`
--

-- --------------------------------------------------------

--
-- Table structure for table `campuses`
--

CREATE TABLE `campuses` (
  `id` int(11) NOT NULL,
  `campus_id` varchar(250) NOT NULL,
  `campus` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campuses`
--

INSERT INTO `campuses` (`id`, `campus_id`, `campus`, `pass`) VALUES
(1, 'mea17', 'mea', '123'),
(2, 'blosam22', 'blosam', '123'),
(3, 'sursyed11', 'sursyed', '123'),
(4, 'mes45', 'mes', '123'),
(5, 'cet11', 'cet', '123');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `chairman` int(11) NOT NULL,
  `vice_chairman1` int(11) NOT NULL,
  `vice_chairman2` int(11) NOT NULL,
  `general_convenor` int(11) NOT NULL,
  `convenor1` int(11) NOT NULL,
  `convenor2` int(11) NOT NULL,
  `treasurer` int(11) NOT NULL,
  `SIT` int(11) NOT NULL,
  `district_counsellor` int(11) NOT NULL,
  `state_counsellor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `chairman`, `vice_chairman1`, `vice_chairman2`, `general_convenor`, `convenor1`, `convenor2`, `treasurer`, `SIT`, `district_counsellor`, `state_counsellor`) VALUES
(1, 35, 2, 3, 4, 5, 6, 7, 8, 9, 11);

-- --------------------------------------------------------

--
-- Table structure for table `exe_members`
--

CREATE TABLE `exe_members` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `Q1` text NOT NULL,
  `Q2` text NOT NULL,
  `Q3` text NOT NULL,
  `Q4` text NOT NULL,
  `campus` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exe_members`
--

INSERT INTO `exe_members` (`id`, `name`, `Q1`, `Q2`, `Q3`, `Q4`, `campus`) VALUES
(1, '', 'dfg', 'wer', 'we', 'rt', 'mea'),
(2, 'AB+', 'sdfg', 'sdfer\r\n', 'sfggt', 'qwerty', 'mea'),
(3, 'AB-', 'qwe', 'wer', 'ert', 'rty', 'mea'),
(4, 'O-', 'gh', 'rt', '', '', 'mea'),
(5, 'B+', 'wer', 'qwe', 'rty', 'ert', 'mea'),
(6, 'B+', 'hgfgs', 'ggs', 'fsh', 'sfhs', 'mea'),
(7, 's', 's', 's', 's', 's', 'mea'),
(8, 'TEST', 'TEST', 'TEST', 'TEST', 'TEST', 'mea'),
(9, 'Paulina', 'TEST', 'TEST', 'TEST', 'TEST', 'mea'),
(10, 'Mariko', 'testt', 'nbnb jjhjhj kjhkjkj', 'wewe', 'wre', 'mea'),
(11, 'hsfs', 'hsfs', 'hfss', 'hfrr', 'hfee', 'mea');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `campus` varchar(250) NOT NULL,
  `blood` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `course`, `year`, `phone`, `email`, `campus`, `blood`) VALUES
(1, 'a  ', 'as', 'as', 'se', '', 'mea', 'AB+'),
(2, 'Mariko', 'bcom', '1', '07-9997-3366', 'stevie.hallo@hotmail.com', 'mea', 'B+'),
(3, 'Gerardo', 'bca', '2', '08-5558-9019', 'mariko_stayer@hotmail.com', 'mea', 'O+'),
(4, 'Mayra', 'BSC ', '2', '02-6044-4682', 'gerardo_woodka@hotmail.com', 'mea', 'AB-'),
(5, 'Idella', 'physics', '3', '02-1455-6085', 'mayra.bena@gmail.com', 'mea', 'O+'),
(6, 'Sherill', 'math', '3', '08-7868-1355', 'idella@hotmail.com', 'mea', 'A-'),
(7, 'Ena', 'eng', '1', '08-6522-8931', 'sklar@hotmail.com', 'mea', 'O+'),
(8, 'Vince', 'ce', '2', '02-5226-9402', 'ena_desjardiws@desjardiws.com.au', 'mea', 'A-'),
(9, 'Theron', 'cse', '3', '07-3184-9989', 'vince_siena@yahoo.com', 'mea', 'AB+'),
(10, 'Amira', 'eee', '4', '08-6890-4661', 'tjarding@hotmail.com', 'mea', 'B-'),
(11, 'Marica', 'ec', '3', '07-8135-3271', 'amira.chudej@chudej.net.au', 'mea', 'B+'),
(12, 'Shawna', 'B.Arch', '3', '03-1174-6817', 'marica.tarbor@hotmail.com', 'mea', 'B-'),
(13, 'Paulina', 'bcomf', '4', '07-7977-6039', 'shawna.albrough@albrough.com.au', 'mea', 'O+'),
(14, 'Rose', 'mech', '4', '08-8344-8929', 'paulina_maker@maker.net.au', 'mea', 'O-'),
(15, 'Reita', 'bio', '1', '07-4941-9471', 'rose@jebb.net.au', 'mea', 'AB+'),
(16, 'Maybelle', 'Ai', '2', '02-3518-7078', 'rtabar@hotmail.com', 'mea', 'AB-'),
(17, 'Camellia', 'ml', '3', '07-9387-7293', 'mbewley@yahoo.com', 'mea', 'O-'),
(18, 'Roy', 'pg', '4', '02-5171-4345', 'camellia_pylant@gmail.com', 'mea', 'A-'),
(23, 'TEST', 'bcom', '2nd', '9567114147', 'gfhf@gg.c', 'mea', 'A-'),
(24, 'TEST', 'TEST', 'TEST', '9567141000', 'umsi@umich.edu', 'mea', 'B+'),
(25, 'anas', 'bcom', '2nd', '09567141001', 'umsi@umich.edu', 'mea', 'B+'),
(26, '  qqq ', 'bcom', '3rd', '09567141002', 'umsi@umich.edu', 'mea', 'B+'),
(34, 'ada', 'jhsda', '2019', '7684232342', 'fghh@fgf.vpmmsdg', 'mea', 'B-'),
(35, 'hsfs', 'ryer', '2018', '9876549870', 'sw212@wq.vom', 'mea', 'A-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `campusid` (`campus`),
  ADD UNIQUE KEY `campus_id` (`campus_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chairman` (`chairman`),
  ADD KEY `vice1` (`vice_chairman1`),
  ADD KEY `vice2` (`vice_chairman2`),
  ADD KEY `general` (`general_convenor`),
  ADD KEY `con1` (`convenor1`),
  ADD KEY `con2` (`convenor2`),
  ADD KEY `treasurer` (`treasurer`),
  ADD KEY `sit` (`SIT`),
  ADD KEY `district` (`district_counsellor`),
  ADD KEY `state` (`state_counsellor`);

--
-- Indexes for table `exe_members`
--
ALTER TABLE `exe_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campus_exe` (`campus`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `campus` (`campus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exe_members`
--
ALTER TABLE `exe_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `committee`
--
ALTER TABLE `committee`
  ADD CONSTRAINT `chairman` FOREIGN KEY (`chairman`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `con1` FOREIGN KEY (`convenor1`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `con2` FOREIGN KEY (`convenor2`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `district` FOREIGN KEY (`district_counsellor`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `general` FOREIGN KEY (`general_convenor`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `sit` FOREIGN KEY (`SIT`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `state` FOREIGN KEY (`state_counsellor`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `treasurer` FOREIGN KEY (`treasurer`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `vice1` FOREIGN KEY (`vice_chairman1`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `vice2` FOREIGN KEY (`vice_chairman2`) REFERENCES `members` (`id`);

--
-- Constraints for table `exe_members`
--
ALTER TABLE `exe_members`
  ADD CONSTRAINT `campus_exe` FOREIGN KEY (`campus`) REFERENCES `campuses` (`campus`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `campus` FOREIGN KEY (`campus`) REFERENCES `campuses` (`campus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
