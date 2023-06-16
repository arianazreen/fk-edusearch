-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 08:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
  `expertPhoneNum` varchar(13) NOT NULL,
  `expertCourse` varchar(10) NOT NULL,
  `expertPass` varchar(30) NOT NULL,
  `expertActiveStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `expertID`, `expertName`, `expertEmail`, `expertPhoneNum`, `expertCourse`, `expertPass`, `expertActiveStatus`) VALUES
(1, 'EB20192 ', 'Dr. Muaz bin Rizal', 'muazrizal@ump.edu.my', '0132871912', 'BCS', 'rizalmuaz17@', '12'),
(2, 'ED19322 ', 'Prof Madya Aida binti Zaini ', 'aidazaini@ump.edu.my', '0197786523', 'BCG', 'aida-zaini17', '3');

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
  `userName` varchar(60) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPhoneNo` varchar(30) NOT NULL,
  `userPass` varchar(30) NOT NULL,
  `userCourse` varchar(10) NOT NULL,
  `assignedExpert` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generaluser`
--

INSERT INTO `generaluser` (`id`, `userID`, `userRole`, `userName`, `userEmail`, `userPhoneNo`, `userPass`, `userCourse`, `assignedExpert`) VALUES
(1, 'CB21108', 'Student', 'Nurul Najwa binti Husin', 'nrlnjwa@gmail.com', '011-4124475', '010812110414', 'BCS', 'EB20192'),
(2, 'SA21012', 'Staff', 'Goh Jin Wei', 'jinweigoh@ump.edu.my', '010-5523123', '810111010315', 'BCN', 'EA20113'),
(4, 'CA21066', 'Student', 'Muhammad Hafiz bin Luqman', 'hafiz1@gmail.com', '018-1135989', '5454654654546', 'BCN', 'EB18052'),
(5, 'sa2222', 'Staff', 'testing name 2', 'email@ump.edu.my', '6656565', 'etetwtt', 'BCN', 'EA20113'),
(6, 'cd21332', 'Staff', 'testing name 3', 'jkjkjkjkjk@gmail.com', '5645644', 'dsfgwhwth', 'BCG', 'ED19232'),
(7, '453455', 'Staff', 'ugh', 'ughhhhhh@gmail.com', '5735368368', 'jtyktiyuul', 'BCG', 'ED19232');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `role`) VALUES
(1, 'ca21867', 'ca218672023', 'genUser'),
(2, 'ea20435', 'ea204352023', 'expert');

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
-- Table structure for table `systemperformancereport`
--

CREATE TABLE `systemperformancereport` (
  `id` int(11) NOT NULL,
  `vulnerability` varchar(100) NOT NULL,
  `impact` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `systemperformancereport`
--

INSERT INTO `systemperformancereport` (`id`, `vulnerability`, `impact`, `description`) VALUES
(1, 'DOS attacks', 'Medium', 'Vulnerabilities that allow for DoS attacks can result in your website becoming unavailable or unresponsive due to excessive traffic or resource exhaustion.\r\n\r\n'),
(2, 'Weak Password Policy', 'High', 'Allowing your users to set weak passwords that are easily guessable or not enforcing password complexity requirements may cause your website to be vulnerable towards hackers.');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemperformancereport`
--
ALTER TABLE `systemperformancereport`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generaluser`
--
ALTER TABLE `generaluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `systemperformancereport`
--
ALTER TABLE `systemperformancereport`
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
