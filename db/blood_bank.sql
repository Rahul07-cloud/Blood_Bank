-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 09:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AREA_ID` int(11) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `AREA_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AREA_ID`, `CITY_ID`, `STATE_ID`, `AREA_NAME`) VALUES
(1, 1, 1, 'Banashankari'),
(2, 1, 1, 'Basavanagudi'),
(3, 1, 1, 'Bannerghatta Road'),
(4, 1, 1, 'Bellandur'),
(5, 1, 1, 'BTM Layout'),
(6, 1, 1, 'Electronic City'),
(7, 1, 1, 'Hebbal'),
(8, 1, 1, 'HSR Layout'),
(9, 1, 1, 'Indiranagar'),
(10, 1, 1, 'Jayanagar'),
(11, 1, 1, 'Kammanahalli'),
(12, 1, 1, 'Koramangala'),
(13, 1, 1, 'KR Puram'),
(14, 1, 1, 'Malleswaram'),
(15, 1, 1, 'Marathahalli'),
(16, 1, 1, 'M.G Road'),
(17, 1, 1, 'Richmond Town'),
(18, 1, 1, 'Sarjapur'),
(19, 1, 1, 'Whitefield'),
(20, 1, 1, 'Yelehanka');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `DONOR_ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FATHER_NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BODY_WEIGHT` int(11) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `ADDRESS` text NOT NULL,
  `AREA` varchar(150) NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PINCODE` int(6) NOT NULL,
  `STATE` varchar(150) NOT NULL,
  `COUNTRY` varchar(150) NOT NULL,
  `CONTACT` varchar(150) NOT NULL,
  `VOLUNTARY` text NOT NULL,
  `VOLUNTARY_GROUP` text NOT NULL,
  `NEW_DONOR` varchar(150) NOT NULL,
  `LAST_D_DATE` date NOT NULL,
  `DONOR_PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`DONOR_ID`, `NAME`, `FATHER_NAME`, `GENDER`, `DOB`, `BLOOD`, `BODY_WEIGHT`, `EMAIL`, `ADDRESS`, `AREA`, `CITY`, `PINCODE`, `STATE`, `COUNTRY`, `CONTACT`, `VOLUNTARY`, `VOLUNTARY_GROUP`, `NEW_DONOR`, `LAST_D_DATE`, `DONOR_PIC`, `STATUS`) VALUES
(36, 'pincy', 'Poulose', 'Female', '2001-02-06', 'B+', 52, 'pincypoulose007@gmail.com', 'xyz', 'Electronic City', 'Bangalore', 343435, 'Karnataka', 'india', '2345678999', '', '', 'No', '2019-03-05', 'donor_image/464images.jpg', 1),
(37, 'Rohit', 'Ganagaraju', 'Male', '1997-01-30', 'B+', 91, 'rohithg@gmail.com', 'Electronic City', 'Electronic City', 'Bangalore', 560004, 'Karnataka', 'india', '9874561234', '', '', 'Yes', '0000-00-00', 'donor_image/560noimage.jpg', 1),
(38, 'Vishal', 'B', 'Male', '1998-04-27', 'AB+', 70, 'rajaivishal41@gmail.com', 'Dwarkanagar', 'Banashankari', 'Bangalore', 560063, 'Karnataka', 'India', '8141912584', '', '', 'Yes', '0000-00-00', 'donor_image/6873659636532.jpg', 1),
(39, 'Piyush', 'A', 'Male', '1998-12-21', 'O+', 72, 'piyushkant36@gmail.com', 'Abcd', 'Banashankari', 'Bangalore', 560004, 'Karnataka', 'India', '8141985667', '', '', 'Yes', '0000-00-00', 'donor_image/noimage.jpg', 1),
(40, 'Maya', 'Vignesh', 'Female', '1992-01-16', 'O-', 58, 'dilnathomas511@gmail.com', 'dffdf', 'Kammanahalli', 'Bangalore', 560098, 'Karnataka', 'India', '9876543213', '', '', 'Yes', '0000-00-00', 'donor_image/825p5.jpg', 0),
(41, 'devi', 'prakash', 'Female', '2001-11-30', 'AB-', 50, 'devi@gmail.com', 'kattigenahalli,thyamma layout,yelahanka', 'Koramangala', 'Bangalore', 789877, 'Karnataka', 'India', '9876543210', '', '', 'Yes', '2021-08-26', 'donor_image/776blood-types-adobestock_75619142-converted-1024x885.png', 1),
(43, 'gadha', 'sam', 'Female', '1998-02-11', 'A-', 60, 'gadha@gmail.com', 'abc', 'Banashankari', 'Bangalore', 432567, 'Karnataka', 'India', '6536547545', '', '', 'Yes', '0000-00-00', 'donor_image/151106Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_stock`
--

CREATE TABLE `blood_stock` (
  `id` int(10) NOT NULL,
  `A+VE` int(10) DEFAULT NULL,
  `A-VE` int(10) DEFAULT NULL,
  `B+VE` int(10) DEFAULT NULL,
  `B-VE` int(10) DEFAULT NULL,
  `AB+VE` int(10) DEFAULT NULL,
  `AB-VE` int(10) DEFAULT NULL,
  `O+VE` int(10) DEFAULT NULL,
  `O-VE` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_stock`
--

INSERT INTO `blood_stock` (`id`, `A+VE`, `A-VE`, `B+VE`, `B-VE`, `AB+VE`, `AB-VE`, `O+VE`, `O-VE`) VALUES
(1, 0, 13, 31, 14, 15, 13, 14, 15);

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `CAMP_ID` int(10) NOT NULL,
  `TITLE` varchar(150) NOT NULL,
  `PLACE` varchar(150) NOT NULL,
  `CAMP_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`CAMP_ID`, `TITLE`, `PLACE`, `CAMP_DATE`) VALUES
(8, 'lmnop', 'yelehanka', '2021-01-01'),
(9, 'zampppoo', 'hbr layout', '2020-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CITY_ID` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `CITY_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CITY_ID`, `STATE_ID`, `CITY_NAME`) VALUES
(13, 20, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `COUNTRY_ID` int(11) NOT NULL,
  `COUNTRY_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRY_ID`, `COUNTRY_NAME`) VALUES
(4, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `CONTACT` varchar(50) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `MESSAGE` text NOT NULL,
  `STATUS` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `NAME`, `CONTACT`, `EMAIL`, `MESSAGE`, `STATUS`, `LOGS`) VALUES
(19, 'Rajith', '9874561234', 'rajith@gmail.com', 'Need A-ve blood', '0', '2021-01-15 11:06:12'),
(20, 'aparna', '9877898889', 'aparna@gmail.com', 'urgent', '0', '2021-08-26 13:28:07'),
(21, 'gfdd', '7654354545', 'dilnathomas511@gmail.com', 'urgent', '0', '2021-08-27 10:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BUNIT` int(11) NOT NULL,
  `HOSP` text NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PIN` int(6) NOT NULL,
  `DOC` varchar(150) NOT NULL,
  `RDATE` date NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CADDRESS` text NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `CON1` varchar(12) NOT NULL,
  `REASON` text NOT NULL,
  `PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `CDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`ID`, `NAME`, `GENDER`, `BLOOD`, `BUNIT`, `HOSP`, `CITY`, `PIN`, `DOC`, `RDATE`, `CNAME`, `CADDRESS`, `EMAIL`, `CON1`, `REASON`, `PIC`, `STATUS`, `CDATE`) VALUES
(8, 'Anusha', 'Female', 'B+', 4, 'lmnop', '13', 987654, 'sudeep', '2006-09-05', 'ajay', 'xyzz', 'pincypoulose007@gmail.com', '9876789987', 'accidient', 'request_image/544images.jpg', 1, '0000-00-00'),
(9, 'dilna', 'Female', 'A+', 2, 'asd', '13', 435464, 'raj', '2020-12-31', 'pincy', 'bnjj', 'dilnathomas511@gmail.com', '9496307651', 'surgery', 'request_image/6603659636532.jpg', 2, '2020-12-31'),
(10, 'ponnu', 'Female', 'B+', 3, 'dsaf', '13', 645343, 'rose', '2020-12-31', 'kavya', 'lmnopq', 'pincypoulose007@gmail.com', '8675644334', 'accident', 'request_image/470images.jpg', 1, '0000-00-00'),
(11, 'Ananya', 'Female', 'B+', 0, 'Baptist Hospital,Hebbal', '13', 560054, 'renu', '2021-01-14', 'arun', 'Shelton apartment,Dwarkanagar, bangalore-560063', 'arun@gmail.com', '9784587548', 'Accident ', 'request_image/993noimage.jpg', 2, '2019-06-01'),
(12, 'Rohit', 'Male', 'A+', 1, 'Electronic City', '13', 560004, 'hjjkl', '2021-01-15', 'rohit', 'bbb', 'rohithg@gmail.com', '8879797984', 'A+', 'request_image/6823659636532.jpg', 0, '0000-00-00'),
(13, 'deva', 'Male', 'A+', 2, 'qwert', '13', 560089, 'raju', '2021-01-14', 'joyal', 'asdfg', 'dilnathomas511@gmail.com', '9897867894', 'surgery', 'request_image/6923659636532.jpg', 1, '2021-01-14'),
(14, 'Maya', 'Female', 'O-', 4, 'dffdf', '13', 560098, 'pratheesh', '2021-01-28', 'Trisul', 'ASDDFF', 'dilnathomas511@gmail.com', '9876543212', 'surgery', 'request_image/830p5.jpg', 2, '2021-01-29'),
(15, 'DONAL', 'Male', 'B+', 2, 'LIFE CARE HOSPITAL  BTM LAYOUT', '13', 560098, 'D', '2021-03-02', 'D', 'STAR LAYOUT DWARAKANAGAR', 'dilnathomas511@gmail.com', '9496307581', 'FOR URGENT SURGERY', 'request_image/304noimage.jpg', 0, '2021-03-26'),
(16, 'anjali', 'Female', 'B+', 6, 'valance hospital\r\nkattigenahalli', '13', 876543, 'prashanth', '2021-08-26', 'appu', 'swanthanam (h)\r\ntiruvananthapurem', 'appu@gmail.com', '8778655876', 'emergency', 'request_image/566images.jpg', 2, '2021-06-26'),
(17, 'tara', 'Female', 'A-', 4, 'valens hospital,dwarakanagar', '13', 560063, 'yas', '2021-08-28', 'appu', 'adgfd', 'appu@gmail.com', '6546567876', 'emergency', 'request_image/8723659636532.jpg', 1, '2021-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `STATE_ID` int(11) NOT NULL,
  `STATE_NAME` varchar(150) NOT NULL,
  `COUNTRY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`STATE_ID`, `STATE_NAME`, `COUNTRY_ID`) VALUES
(20, 'Karnataka', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AREA_ID`),
  ADD UNIQUE KEY `AREA_NAME` (`AREA_NAME`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`DONOR_ID`);

--
-- Indexes for table `blood_stock`
--
ALTER TABLE `blood_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`CAMP_ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CITY_ID`),
  ADD UNIQUE KEY `CITY_NAME` (`CITY_NAME`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`COUNTRY_ID`),
  ADD UNIQUE KEY `COUNTRY_NAME` (`COUNTRY_NAME`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`STATE_ID`) USING BTREE,
  ADD UNIQUE KEY `STATE_NAME` (`STATE_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AREA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `DONOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `blood_stock`
--
ALTER TABLE `blood_stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `CAMP_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CITY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `COUNTRY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `STATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
