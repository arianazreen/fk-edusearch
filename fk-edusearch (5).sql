-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 04:04 PM
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
(1, 'adminFK', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `complaintID` varchar(20) NOT NULL,
  `postID` varchar(20) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `complaintDate` date NOT NULL,
  `complaintTime` time NOT NULL,
  `complaintType` varchar(30) NOT NULL,
  `complaintDesc` varchar(150) NOT NULL,
  `complaintStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaintID`, `postID`, `userID`, `complaintDate`, `complaintTime`, `complaintType`, `complaintDesc`, `complaintStatus`) VALUES
(1, 'C0102', 'P0001', 'CB21108 ', '2023-07-23', '11:05:00', 'Unsatisfied Expert’s Feedback', 'Unhappy with explanation details', 'In Investigation'),
(2, 'C0095', 'P0454', 'CA21334', '2023-07-10', '02:45:00', 'Wrongly Assigned Research Area', 'My post has been assigned to networking areas', 'Resolved');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generaluser`
--

INSERT INTO `generaluser` (`id`, `userID`, `userRole`, `userName`, `userEmail`, `userPhoneNo`, `userPass`, `userCourse`, `assignedExpert`) VALUES
(1, 'CB21108', 'Student', 'Nurul Najwa Binti Hussin', 'nrlnjwa@gmail.com', '011-4124475', '@nrnjw3', 'BCS', 'EB20192  - Dr. Muaz bin Rizal '),
(2, 'SA21012', 'Staff', 'Goh Jin Wei', 'jinweigoh@ump.edu.my', '010-5523123', '123gjh!', 'BCN', 'EA17234 - Ts. Dr. Nursharifah binti Jamal'),
(3, 'CD21012', 'Student', 'Thinaah A/P Sirajaya', 'thinaah@gmail.com', '019-9523015', 'tthnah_11', 'BCG', 'ED19322 - Assoc. Prof. Ts. Dr. Aida binti Zaini'),
(4, 'CB21015', 'Student', 'Muhammad Hafiz Bin Asmi', 'hafiz01@gmail.com', '018-1135989', 'Hafiz4252', 'BCS', 'EB21300 - Dr. Syazana binti Halim'),
(5, 'SA21432', 'Staff', 'Solahuddin Bin Abdullah', 'solahuddin@ump.edu.my', '017-5493681', 'Solah000', 'BCN', 'EA19085 - Dr. Ali bin Abdullah'),
(6, 'CA21334', 'Student', 'Lailatul Binti Asmi', 'lailatulasmi@gmail.com', '018-7745145', 'lailatul2232', 'BCN', 'EA19085 - Dr. Ali bin Abdullah'),
(19, 'SD19456', 'Staff', 'Mohd Azrin Bin Mohd Saleh', 'azrinsaleh@ump.edu.my', '016-8845414', 'sdfhhsdh', 'BCG', 'ED19232  - Ts. Dr. Zamri bin Ahmad Zafril'),
(22, 'CB21151', 'Student', 'Fatin Faiqah Binti Yusof', 'ftn.faiqah@gmail.com', '010-8060157', 'dokleh', 'BCS', 'EB21300 - Dr. Syazana binti Halim'),
(23, 'SB19012', 'Staff', 'Ng Tze Yong', 'tzeyong@ump.com', '019-6543213', 'tzeyong_19', 'BCS', 'EB20192  - Dr. Muaz bin Rizal '),
(24, 'CD22022', 'Student', 'Irdina Dania Binti Roslan', 'irdina.roslan@gmail.com', '012-9876231', 'irdinaD@nia', 'BCG', 'ED19322 - Assoc. Prof. Ts. Dr. Aida binti Zaini'),
(25, 'SD19157', 'Staff', 'Sarveesh Kumar A/L Vijaya Kumar', 'sarveesh@ump.com', '010-9087432', 'sarveesh1223', 'BCG', 'ED19232  - Ts. Dr. Zamri bin Ahmad Zafril');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `postID` varchar(20) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postDate` date DEFAULT NULL,
  `postTime` time DEFAULT NULL,
  `postCategory` varchar(20) NOT NULL,
  `postKeyword` varchar(50) NOT NULL,
  `postContent` varchar(150) NOT NULL,
  `postLikes` int(11) NOT NULL,
  `postComments` int(11) NOT NULL,
  `postStatus` varchar(20) NOT NULL,
  `postDuration` varchar(20) NOT NULL,
  `postRating` int(11) NOT NULL,
  `postFeedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `postID`, `userID`, `postTitle`, `postDate`, `postTime`, `postCategory`, `postKeyword`, `postContent`, `postLikes`, `postComments`, `postStatus`, `postDuration`, `postRating`, `postFeedback`) VALUES
(1, 'P0001', 'CA21334', 'Energy-efficient computer systems', '2023-06-18', '16:41:00', 'BCN', 'Computer systems', 'Networking', 175, 86, 'COMPLETED', '45 ', 5, ' The provided explanation in details.'),
(2, 'P0002', 'CB21108', 'Machine learning and artificial intelligence in computer systems', '2023-05-18', '09:40:00', 'BCS', 'AI, computer systems', 'Software engineering', 0, 0, 'REVISED', '12', 0, ' No feedback yet'),
(3, 'P0003', 'SA21432 ', 'OCI not allowing subnet as 10.0.0.0/17 or 10.0.1.0/1 within a virtual network 10.0.0.0/16', '2023-06-23', '12:30:00', 'BCN', 'Network', 'I have VCN with address space 10.0.0.0/16 in OCI. I wanted to create a subnet with CIDR notation as 10.0.0.0/17 and is not allowed. I tried 10.0.1.0/1', 45, 12, 'COMPLETED', '15', 4, 'None'),
(4, 'P0004', 'CA21334 ', 'How many subnets can be created without using bits in the interface ID space?\r\n ', '2022-10-09', '16:35:00', 'BCN', 'Network', 'The IPv6 address block 2001:db8:0:ca00::/56 is assigned to an organization. How many subnets can be created without using bits in the interface ID spa', 14, 8, 'COMPLETED', '15', 4, 'None'),
(5, 'P0005', 'CD22022', 'Why is my OpenGL code displayed as a different coloration and lose some details when I use the mouse', '2023-06-18', '19:15:00', 'BCG', 'Graphics', 'So, I\'m still a newbie in OpenGL. I wrote this code to make some scenery of mountain campfire, sea, sky, tree, etc. Everything looked fine until I cli', 3, 0, 'REVISED', '15', 0, 'None'),
(6, 'P0006', 'SD19456', 'I have a problem with the blending of 2 textures depending on the angle of PoV\r\n ', '2023-05-25', '07:58:00', 'BCG', 'Graphics', 'I am trying to blend 2 textures to simulate a lenticular surface effect, i.e., as I gradually change the angle of the pov, the one texture should prev', 8, 5, 'COMPLETED', '15', 3, 'None'),
(7, 'P0007', 'CB21151', 'What is sustaining software engineering?', '2023-05-20', '07:58:00', 'BCS', 'Software', 'I\'ve come across the phrase \'sustaining software engineering\' but don\'t know exactly what it means. There seems to be some...\r\n ', 12, 5, 'COMPLETED', '15', 5, 'None'),
(8, 'P0008', 'CB21108', 'What is the difference between Computer Science and Software Engineering?', '2023-06-17', '14:30:00', 'BCS', 'Software', 'Software Engineering and Computer Science are very different disciplines. … Some have said this is a duplicate, but Computer...', 0, 0, 'REVISED', '15', 0, 'None'),
(9, 'P0009', 'SB19012 ', 'PowerShell says \"Execution of scripts is disabled on this system.\"', '2023-05-05', '11:57:00', 'BCS', 'Software', 'When you are done, you can set the policy back to its default value with Set-ExecutionPolicy Restricted You may see an error...', 25, 19, 'COMPLETED', '15', 3, 'None');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
