-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 01:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fk-edusearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminID` varchar(10) NOT NULL,
  `adminPass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminID`, `adminPass`) VALUES
(1, 'adminFK', 'FK-edusearch2023');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `complaintID` varchar(20) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `complaintDate` date NOT NULL,
  `complaintTime` time NOT NULL,
  `complaintType` varchar(30) NOT NULL,
  `complaintDesc` varchar(150) NOT NULL,
  `complaintStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaintID`, `userID`, `complaintDate`, `complaintTime`, `complaintType`, `complaintDesc`, `complaintStatus`) VALUES
(1, 'C0102', 'CB21108 ', '2023-07-23', '11:05:00', 'Unsatisfied Expert’s Feedback', 'Unhappy with explanation details', 'In Investigation'),
(2, 'C0095', 'CA21066', '2023-07-10', '02:45:00', 'Wrongly Assigned Research Area', 'My post has been assigned to networking areas', 'On Hold');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `expertID` varchar(10) NOT NULL,
  `expertName` varchar(50) NOT NULL,
  `expertEmail` varchar(50) NOT NULL,
  `expertPhoneNo` varchar(15) NOT NULL,
  `expertPass` varchar(30) NOT NULL,
  `expertCourse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `expertID`, `expertName`, `expertEmail`, `expertPhoneNo`, `expertPass`, `expertCourse`) VALUES
(1, 'EA17234', 'Ts. Dr. Nursharifah binti Jamal', 'nursharifahjamal@ump.edu.my', '011-3476611', 'ifah_jamal10', 'BCN'),
(2, 'EB20192 ', 'Dr. Muaz bin Rizal ', 'muazrizal@ump.edu.my', '013-2871912', 'rizalmuaz17@', 'BCS'),
(3, 'ED19322 ', 'Assoc. Prof. Ts. Dr. Aida binti Zaini ', 'aidazaini@ump.edu.my', '019-7786523', 'aida-zaini17', 'BCG'),
(4, 'EB21300 ', 'Dr. Syazana  binti Halim ', 'syazanahalim@ump.edu.my', '019-9982112', 'yanahalim_0304', 'BCS'),
(5, 'ED19232 ', 'Ts. Dr. Zamri bin Ahmad Zafril', 'zamrizafril@ump.edu.my', '010-7009213', 'zamzaf@1809', 'BCG'),
(6, 'EA19085', 'Dr. Ali bin Abdullah', 'aliabdullah@ump.edu.my', '014-7745126', 'aliab5564', 'BCN');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `id` int(11) NOT NULL,
  `expertiseID` varchar(20) NOT NULL,
  `expertResearchArea` varchar(100) NOT NULL,
  `expertPublications` varchar(100) NOT NULL,
  `expertAcademicStatus` varchar(200) NOT NULL,
  `expertCV` varchar(50) NOT NULL,
  `expertSocMed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id`, `expertiseID`, `expertResearchArea`, `expertPublications`, `expertAcademicStatus`, `expertCV`, `expertSocMed`) VALUES
(1, 'EP002', 'Computer System ', 'Developing Walking Assistants for Visually Impaired People: A Review. ', 'Phd In Computer Science\r\nBachelor Of Computer Science \r\n', 'Muaz.link/CV', '@MuazRizal, MuazRiza'),
(2, 'EP004 ', 'Virtual Simulation and Computing ', 'Test case selection for penetration testing in mobile cloud computing application: A proposed techni', 'Phd Of Computer Science (Video Tracking)\r\nBachelor Of Information Technology (Hons.) Multimedia\r\n', ' AidaZaini.link/CV', '@AidaZaini');

-- --------------------------------------------------------

--
-- Table structure for table `generaluser`
--

CREATE TABLE `generaluser` (
  `id` int(11) NOT NULL,
  `userID` varchar(10) NOT NULL,
  `userRole` varchar(15) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPhoneNo` varchar(15) NOT NULL,
  `userPass` varchar(30) NOT NULL,
  `userCourse` varchar(10) NOT NULL,
  `assignedExpert` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generaluser`
--

INSERT INTO `generaluser` (`id`, `userID`, `userRole`, `userName`, `userEmail`, `userPhoneNo`, `userPass`, `userCourse`, `assignedExpert`) VALUES
(1, 'CB21108', 'Student', 'Nurul Najwa binti Hussin', 'nrlnjwa@gmail.com', '011-4124475', '@nrnjw3', 'BCS', 'EB20192  - Dr. Muaz bin Rizal '),
(2, 'SA21012', 'Staff', 'Goh Jin Wei', 'jinweigoh@ump.edu.my', '010-5523123', '123gjh!', 'BCN', 'EA17234 - Ts. Dr. Nursharifah binti Jamal'),
(3, 'CD21012', 'Student', 'Thinaah A/P Sirajaya', 'thinaah@gmail.com', '019-9523015', 'tthnah_11', 'BCG', 'ED19322 - Assoc. Prof. Ts. Dr. Aida binti Zaini'),
(4, 'CB21015', 'Student', 'Muhammad Hafiz bin Asmi', 'hafiz01@gmail.com', '018-1135989', 'Hafiz4252', 'BCS', 'EB21300 - Dr. Syazana binti Halim'),
(5, 'SA21432', 'Staff', 'Solahuddin bin Abdullah', 'solahuddin@ump.edu.my', '017-5493681', 'Solah000', 'BCN', 'EA19085 - Dr. Ali bin Abdullah'),
(6, 'CA21334', 'Student', 'Lailatul binti Asmi', 'lailatulasmi@gmail.com', '018-7745145', 'lailatul2232', 'BCN', 'EA19085 - Dr. Ali bin Abdullah'),
(19, 'SD19456', 'Staff', 'Mohd Azrin bin Mohd Saleh', 'azrinsaleh@ump.edu.my', '016-8845414', 'sdfhhsdh', 'BCG', 'ED19232  - Ts. Dr. Zamri bin Ahmad Zafril');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `postID` varchar(20) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postCategory` varchar(20) NOT NULL,
  `postKeyword` varchar(50) NOT NULL,
  `postContent` varchar(150) NOT NULL,
  `postLikes` int(11) NOT NULL,
  `postComments` int(11) NOT NULL,
  `postStatus` varchar(20) NOT NULL,
  `postDuration` varchar(20) NOT NULL,
  `postRating` int(11) NOT NULL,
  `postFeedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `postID`, `postTitle`, `postCategory`, `postKeyword`, `postContent`, `postLikes`, `postComments`, `postStatus`, `postDuration`, `postRating`, `postFeedback`) VALUES
(1, 'P0001', 'Energy-efficient computer systems', 'BCN', 'Computer systems', 'Networking', 175, 86, 'COMPLETED', '45 ', 5, ' The provided explanation in details.'),
(2, 'P0003', 'Machine learning and artificial intelligence in computer systems', 'BCS', 'AI, computer systems', 'Software engineering', 0, 0, 'REVISED', '12', 0, ' No feedback yet');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `id` int(11) NOT NULL,
  `userProfileID` varchar(10) NOT NULL,
  `userResearchArea` varchar(100) NOT NULL,
  `userAcademicStatus` varchar(30) NOT NULL,
  `userSocMedia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `userProfileID`, `userResearchArea`, `userAcademicStatus`, `userSocMedia`) VALUES
(1, 'UP001', 'Artificial Intelligence, Compu', 'Master in Computer System & Ne', '@jinwei_goh'),
(2, 'UP002', 'Software Engineering, Artifici', 'Bachelor in Software Engineeri', '@nrl_njwa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generaluser`
--
ALTER TABLE `generaluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generaluser`
--
ALTER TABLE `generaluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
