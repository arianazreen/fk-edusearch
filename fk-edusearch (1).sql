-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 03:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `complaintID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `complaintDate` date NOT NULL,
  `complaintTime` time NOT NULL,
  `complaintType` varchar(30) NOT NULL,
  `complaintDesc` varchar(1000) NOT NULL,
  `complaintStatus` varchar(20) NOT NULL,
  `totalComplaints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaintID`, `userID`, `postID`, `complaintDate`, `complaintTime`, `complaintType`, `complaintDesc`, `complaintStatus`, `totalComplaints`) VALUES
(3, 9, 4, '2023-07-23', '11:05:00', 'Unsatisfied Expert’s Feedback', 'Unhappy with explanation details', 'In Investigation', 10),
(4, 8, 3, '2023-07-10', '14:45:00', 'Wrongly Assigned Research Area', 'My post has been assigned to networking areas', 'In Investigation', 0),
(5, 10, 5, '2023-06-19', '09:30:00', 'Unanswered Question', 'I have been posting the question for a week, and no expert has replied', 'On Hold', 2);

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `ExpertID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `expertiseID` int(11) NOT NULL,
  `postID` int(11) NOT NULL,
  `expertName` varchar(60) NOT NULL,
  `expertEmail` varchar(30) NOT NULL,
  `expertPhoneNo` varchar(30) NOT NULL,
  `expertCourse` varchar(10) NOT NULL,
  `expertPass` varchar(50) NOT NULL,
  `expertActiveStatus` int(11) NOT NULL,
  `expertTotalRatings` float NOT NULL,
  `expertTotalPublications` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`ExpertID`, `userID`, `expertiseID`, `postID`, `expertName`, `expertEmail`, `expertPhoneNo`, `expertCourse`, `expertPass`, `expertActiveStatus`, `expertTotalRatings`, `expertTotalPublications`) VALUES
(3, 8, 1, 3, 'Dr. Muaz bin Rizal', 'muazrizal@ump.edu.my', '0132871912', 'BCN', 'rizalmuaz17@', 12, 4.3, 8),
(4, 9, 3, 4, 'Prof Madya Aida binti Zaini ', 'aidazaini@ump.edu.my', '0197786523', 'BCS', 'aida-zaini17', 3, 2.3, 4),
(5, 10, 2, 5, 'Ts. Zamri bin Ahmad Zafril', 'zamrizamril@ump.edu.my', '0107009213', 'BCG', 'zamzaf@1809', 17, 4.7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `expertiseID` int(11) NOT NULL,
  `expertResearchArea` varchar(40) NOT NULL,
  `expertPublications` varchar(250) NOT NULL,
  `expertAcademicStatus` varchar(40) NOT NULL,
  `expertCV` varchar(100) NOT NULL,
  `expertSocMed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`expertiseID`, `expertResearchArea`, `expertPublications`, `expertAcademicStatus`, `expertCV`, `expertSocMed`) VALUES
(1, 'Computer System', 'Developing Walking Assistants for Visually Impaired People: A Review.', 'Phd In Computer Science Bachelor Of Comp', 'Muaz.link/CV', '@MuazRizal,\r\nMuazRizal15\r\n'),
(2, 'Virtual Simulation and Computing ', 'Test case selection for penetration testing in mobile cloud computing application: A proposed technique', 'Phd Of Computer Science (Video Tracking)', 'AidaZaini.link/CV', '@AidaZaini'),
(3, 'Machine Intelligence ', 'Fuzzy adaptive teaching learning-based optimization strategy for GUI functional test case generation.', 'Master Of Science (Intelligent System) B', 'Sharifah.link/CV', '@ifahJamal');

-- --------------------------------------------------------

--
-- Table structure for table `expertreport`
--

CREATE TABLE `expertreport` (
  `expertReportID` int(11) NOT NULL,
  `expertID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expertreport`
--

INSERT INTO `expertreport` (`expertReportID`, `expertID`) VALUES
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `generaluser`
--

CREATE TABLE `generaluser` (
  `userID` int(11) NOT NULL,
  `userRole` varchar(15) NOT NULL,
  `matricNum` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPhoneNo` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `userCourse` varchar(10) NOT NULL,
  `totalPosts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generaluser`
--

INSERT INTO `generaluser` (`userID`, `userRole`, `matricNum`, `username`, `userEmail`, `userPhoneNo`, `password`, `userCourse`, `totalPosts`) VALUES
(8, 'student', 'CA21015', 'Nurul Najwa bin', 'nrlnjwa@gmail.com', '011123456', '@nrnjw3', 'BCN', 2),
(9, 'student', 'CB21108', 'Thinaah A/P Sir', 'thinaah@gmail.com', '0199523015', 'tthnah_11', 'BCS', 1),
(10, 'student', 'CD21001', 'Muhammad Hafiz ', 'hafiz1@gmail.com', '0181135989', 'Hafiz4252', 'BCG', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `postID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `postTitle` varchar(50) NOT NULL,
  `postCategory` varchar(20) NOT NULL,
  `postKeyword` varchar(15) NOT NULL,
  `postLikes` int(11) NOT NULL,
  `postComments` int(11) NOT NULL,
  `postStatus` varchar(10) NOT NULL,
  `postDuration` varchar(25) NOT NULL,
  `postRating` varchar(25) NOT NULL,
  `postFeedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `userID`, `postTitle`, `postCategory`, `postKeyword`, `postLikes`, `postComments`, `postStatus`, `postDuration`, `postRating`, `postFeedback`) VALUES
(3, 8, 'Energy-efficient computer systems', 'BCN', 'Computer system', 175, 86, 'COMPLETED', '45 days', 'Networking', 'The provided explanation in details'),
(4, 9, 'Machine learning and artificial intelligence in co', 'BCS', 'AI, computer sy', 0, 0, 'REVISED', '12 hours', 'Software engineering', 'No feedback yet'),
(5, 10, 'Virtualization and containerization', 'BCG', 'Virtual reality', 1, 0, 'ACCEPTED', '7 hours', 'Graphic', 'No feedback yet');

-- --------------------------------------------------------

--
-- Table structure for table `systemperformancereport`
--

CREATE TABLE `systemperformancereport` (
  `systemPerfReportID` int(11) NOT NULL,
  `vulnerability` varchar(100) NOT NULL,
  `impact` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemperformancereport`
--

INSERT INTO `systemperformancereport` (`systemPerfReportID`, `vulnerability`, `impact`, `description`) VALUES
(1, 'DOS attacks', 'Medium', 'Vulnerabilities that allow for DoS attacks can result in your website becoming unavailable or unresponsive due to excessive traffic or resource exhaustion.'),
(2, 'Missing Security Header', 'Low', 'Not including important security headers, such as Content Security Policy (CSP), Strict-Transport-Security (HSTS), or X-Frame-Options, which can enhance protection against certain types of attacks.');

-- --------------------------------------------------------

--
-- Table structure for table `useractivityreport`
--

CREATE TABLE `useractivityreport` (
  `userActReportID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `complaintID` int(11) NOT NULL,
  `totalLikes` int(11) NOT NULL,
  `totalComments` int(11) NOT NULL,
  `totalReport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useractivityreport`
--

INSERT INTO `useractivityreport` (`userActReportID`, `userID`, `complaintID`, `totalLikes`, `totalComments`, `totalReport`) VALUES
(1, 8, 4, 145, 96, 0),
(2, 9, 3, 4672, 3267, 5),
(3, 10, 5, 267, 207, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `userProfileID` int(11) NOT NULL,
  `userResearchArea` varchar(30) NOT NULL,
  `userAcademicStatus` varchar(50) NOT NULL,
  `userSocMed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`userProfileID`, `userResearchArea`, `userAcademicStatus`, `userSocMed`) VALUES
(1, 'Artificial Intelligence, Compu', 'Master in Computer System & Networking', '@jinwei_goh'),
(2, 'Software Engineering, Artifici', 'Bachelor in Software Engineering', '@nrl_njwa'),
(3, 'Augmented Reality', 'Bachelor in Multimedia & Graphic', '@thinaah_01');

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
  ADD PRIMARY KEY (`complaintID`),
  ADD KEY `complaint_ibfk_1` (`userID`),
  ADD KEY `complaint_ibfk_2` (`postID`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`ExpertID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `expertiseID` (`expertiseID`),
  ADD KEY `postID` (`postID`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`expertiseID`);

--
-- Indexes for table `expertreport`
--
ALTER TABLE `expertreport`
  ADD PRIMARY KEY (`expertReportID`),
  ADD KEY `expertID` (`expertID`);

--
-- Indexes for table `generaluser`
--
ALTER TABLE `generaluser`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `systemperformancereport`
--
ALTER TABLE `systemperformancereport`
  ADD PRIMARY KEY (`systemPerfReportID`);

--
-- Indexes for table `useractivityreport`
--
ALTER TABLE `useractivityreport`
  ADD PRIMARY KEY (`userActReportID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `complaintID` (`complaintID`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`userProfileID`);

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
  MODIFY `complaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `ExpertID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `expertiseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expertreport`
--
ALTER TABLE `expertreport`
  MODIFY `expertReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `generaluser`
--
ALTER TABLE `generaluser`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `systemperformancereport`
--
ALTER TABLE `systemperformancereport`
  MODIFY `systemPerfReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useractivityreport`
--
ALTER TABLE `useractivityreport`
  MODIFY `userActReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `userProfileID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `generaluser` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expert`
--
ALTER TABLE `expert`
  ADD CONSTRAINT `expert_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `generaluser` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expert_ibfk_2` FOREIGN KEY (`expertiseID`) REFERENCES `expertise` (`expertiseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expert_ibfk_3` FOREIGN KEY (`postID`) REFERENCES `post` (`postID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expertreport`
--
ALTER TABLE `expertreport`
  ADD CONSTRAINT `expertreport_ibfk_1` FOREIGN KEY (`expertID`) REFERENCES `expert` (`ExpertID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `generaluser` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `useractivityreport`
--
ALTER TABLE `useractivityreport`
  ADD CONSTRAINT `useractivityreport_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `generaluser` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useractivityreport_ibfk_2` FOREIGN KEY (`complaintID`) REFERENCES `complaint` (`complaintID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
