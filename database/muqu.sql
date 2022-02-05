-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 فبراير 2022 الساعة 18:53
-- إصدار الخادم: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muqu`
--

-- --------------------------------------------------------

--
-- بنية الجدول `appedinx`
--

CREATE TABLE `appedinx` (
  `computerId` int(4) NOT NULL,
  `computerAppedinx` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `appedinx`
--

INSERT INTO `appedinx` (`computerId`, `computerAppedinx`) VALUES
(1000, 'keyboard'),
(1000, 'mouse'),
(1000, 'screen'),
(1001, 'keyboard'),
(1001, 'mouse'),
(1001, 'screen'),
(1002, 'keyboard'),
(1002, 'mouse'),
(1002, 'screen'),
(1003, 'keyboard'),
(1003, 'mouse'),
(1003, 'screen'),
(1004, 'keyboard'),
(1005, 'mouse'),
(1006, 'screen'),
(1007, 'keyboard'),
(1007, 'mouse'),
(1007, 'screen'),
(1008, 'keyboard'),
(1008, 'mouse'),
(1008, 'screen'),
(1009, 'keyboard'),
(1009, 'mouse'),
(1009, 'screen'),
(1010, 'keyboard'),
(1010, 'mouse'),
(1010, 'screen'),
(1011, 'keyboard'),
(1011, 'mouse'),
(1011, 'screen'),
(1012, 'keyboard'),
(1012, 'mouse'),
(1012, 'screen'),
(1013, 'keyboard'),
(1013, 'mouse'),
(1013, 'screen'),
(1014, 'keyboard'),
(1014, 'mouse'),
(1014, 'screen'),
(1015, 'keyboard'),
(1015, 'mouse'),
(1015, 'screen'),
(1016, 'keyboard'),
(1016, 'mouse'),
(1016, 'screen'),
(1017, 'keyboard'),
(1017, 'mouse'),
(1017, 'screen'),
(1018, 'keyboard'),
(1018, 'mouse'),
(1018, 'screen'),
(1019, 'keyboard'),
(1019, 'mouse'),
(1019, 'screen'),
(2000, 'keyboard'),
(2000, 'mouse'),
(2000, 'screen'),
(2001, 'keyboard'),
(2001, 'mouse'),
(2001, 'screen'),
(2003, 'keyboard'),
(2003, 'mouse'),
(2003, 'screen'),
(2004, 'keyboard'),
(2004, 'mouse'),
(2004, 'screen'),
(2005, 'keyboard'),
(2005, 'mouse'),
(2005, 'screen'),
(2006, 'keyboard'),
(2006, 'mouse'),
(2006, 'screen'),
(2007, 'keyboard'),
(2007, 'mouse'),
(2007, 'screen'),
(2008, 'keyboard'),
(2008, 'mouse'),
(2008, 'screen'),
(2009, 'keyboard'),
(2009, 'mouse'),
(2009, 'screen'),
(2010, 'keyboard'),
(2010, 'mouse'),
(2010, 'screen'),
(2011, 'keyboard'),
(2011, 'mouse'),
(2011, 'screen'),
(2012, 'keyboard'),
(2012, 'mouse'),
(2012, 'screen'),
(2013, 'keyboard'),
(2013, 'mouse'),
(2013, 'screen'),
(2014, 'keyboard'),
(2014, 'mouse'),
(2014, 'screen'),
(2015, 'keyboard'),
(2015, 'mouse'),
(2015, 'screen'),
(2016, 'keyboard'),
(2016, 'mouse'),
(2016, 'screen'),
(2017, 'keyboard'),
(2017, 'mouse'),
(2017, 'screen'),
(2018, 'keyboard'),
(2018, 'mouse'),
(2018, 'screen'),
(2019, 'keyboard'),
(2019, 'mouse'),
(2019, 'screen');

-- --------------------------------------------------------

--
-- بنية الجدول `assign`
--

CREATE TABLE `assign` (
  `userId` int(4) NOT NULL,
  `compliantId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `classroom`
--

CREATE TABLE `classroom` (
  `roomNumber` varchar(8) NOT NULL,
  `floor` char(3) NOT NULL,
  `building` char(2) NOT NULL,
  `roomType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `classroom`
--

INSERT INTO `classroom` (`roomNumber`, `floor`, `building`, `roomType`) VALUES
('1', '1', 'A', 'Lab'),
('101', '1', 'A', 'Classroom'),
('102', '1', 'A', 'Classroom'),
('103', '1', 'A', 'Classroom'),
('104', '1', 'A', 'Classroom'),
('105', '1', 'A', 'Classroom'),
('106', '1', 'A', 'Classroom'),
('107', '1', 'A', 'Classroom'),
('108', '1', 'A', 'Lab'),
('109', '1', 'A', 'Classroom'),
('110', '1', 'A', 'Classroom'),
('111', '1', 'A', 'Classroom'),
('112', '1', 'A', 'Classroom'),
('113', '1', 'A', 'Classroom'),
('114', '1', 'A', 'Classroom'),
('115', '1', 'A', 'Classroom'),
('116', '1', 'A', 'Classroom'),
('117', '1', 'A', 'Classroom'),
('118', '1', 'A', 'Classroom'),
('119', '1', 'A', 'Classroom'),
('120', '1', 'A', 'Classroom'),
('121', '1', 'A', 'Classroom'),
('122', '1', 'A', 'Classroom'),
('123', '1', 'A', 'Classroom'),
('124', '1', 'A', 'Lab'),
('2', '1', 'A', 'Lab'),
('201', '1', 'B', 'Classroom'),
('202', '1', 'B', 'Classroom'),
('203', '1', 'B', 'Classroom'),
('204', '1', 'B', 'Classroom'),
('205', '1', 'B', 'Classroom'),
('206', '1', 'B', 'Classroom'),
('207', '1', 'B', 'Classroom'),
('208', '1', 'B', 'Classroom'),
('209', '1', 'B', 'Classroom'),
('210', '1', 'B', 'Classroom'),
('211', '1', 'B', 'Classroom'),
('212', '1', 'B', 'Classroom'),
('213', '1', 'B', 'Classroom'),
('214', '1', 'B', 'Classroom'),
('215', '1', 'B', 'Classroom'),
('216', '1', 'B', 'Classroom'),
('217', '1', 'B', 'Classroom'),
('3', '1', 'A', 'Lab'),
('301', '2', 'B', 'Classroom'),
('302', '2', 'B', 'Classroom'),
('303', '2', 'B', 'Classroom'),
('304', '2', 'B', 'Classroom'),
('305', '2', 'B', 'Classroom'),
('306', '2', 'B', 'Classroom'),
('307', '2', 'B', 'Classroom'),
('308', '2', 'B', 'Lab'),
('309', '2', 'B', 'Lab'),
('310', '2', 'B', 'Lab'),
('311', '2', 'B', 'Lab'),
('312', '2', 'B', 'Lab'),
('313', '2', 'B', 'Lab'),
('314', '2', 'B', 'Lab'),
('315', '2', 'B', 'Lab'),
('4', '1', 'A', 'Lab'),
('B102', 'G', 'B', 'Lab'),
('B103', 'G', 'B', 'Lab'),
('B105', 'G', 'B', 'Lab'),
('B106', 'G', 'B', 'Lab'),
('B107', 'G', 'B', 'Lab'),
('B108', 'G', 'B', 'Lab'),
('M1', '1', 'A', 'Classroom'),
('M2', '1', 'A', 'Classroom'),
('M3', '1', 'A', 'Classroom'),
('M4', '2', 'B', 'Classroom');

-- --------------------------------------------------------

--
-- بنية الجدول `complaint`
--

CREATE TABLE `complaint` (
  `complaintId` int(11) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `roomNum` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `computer`
--

CREATE TABLE `computer` (
  `computerId` int(4) NOT NULL,
  `roomN` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `computer`
--

INSERT INTO `computer` (`computerId`, `roomN`) VALUES
(1000, '1'),
(1001, '1'),
(1002, '1'),
(1003, '1'),
(1004, '1'),
(1005, '1'),
(1006, '1'),
(1007, '1'),
(1008, '1'),
(1009, '1'),
(1010, '1'),
(1011, '1'),
(1012, '1'),
(1013, '1'),
(1014, '1'),
(1015, '1'),
(1016, '1'),
(1017, '1'),
(1018, '1'),
(1019, '1'),
(2000, '2'),
(2001, '2'),
(2002, '2'),
(2003, '2'),
(2004, '2'),
(2005, '2'),
(2006, '2'),
(2007, '2'),
(2008, '2'),
(2009, '2'),
(2010, '2'),
(2011, '2'),
(2012, '2'),
(2013, '2'),
(2014, '2'),
(2015, '2'),
(2016, '2'),
(2017, '2'),
(2018, '2'),
(2019, '2'),
(3000, '3'),
(3001, '3'),
(3002, '3'),
(3003, '3'),
(3004, '3'),
(3005, '3'),
(3006, '3'),
(3007, '3'),
(3008, '3'),
(3009, '3'),
(3010, '3'),
(3011, '3'),
(3012, '3'),
(3013, '3'),
(3014, '3'),
(3015, '3'),
(3016, '3'),
(3017, '3'),
(3018, '3'),
(3019, '3'),
(3801, '308'),
(3802, '308'),
(3803, '308'),
(3804, '308'),
(3805, '308'),
(3806, '308'),
(3807, '308'),
(3808, '308'),
(3809, '308'),
(3810, '308'),
(3811, '308'),
(3812, '308'),
(3813, '308'),
(3814, '308'),
(3815, '308'),
(3816, '308'),
(3817, '308'),
(3818, '308'),
(3819, '308'),
(3901, '309'),
(3902, '309'),
(3903, '309'),
(3904, '309'),
(3905, '309'),
(3906, '309'),
(3907, '309'),
(3908, '309'),
(3909, '309'),
(3910, '309'),
(3911, '309'),
(3912, '309'),
(3913, '309'),
(3914, '309'),
(3915, '309'),
(3916, '309'),
(3917, '309'),
(3918, '309'),
(3919, '309'),
(3101, '310'),
(3102, '310'),
(3103, '310'),
(3104, '310'),
(3105, '310'),
(3106, '310'),
(3107, '310'),
(3108, '310'),
(3109, '310'),
(3110, '310'),
(3111, '310'),
(3112, '310'),
(3113, '310'),
(3114, '310'),
(3115, '310'),
(3116, '310'),
(3117, '310'),
(3118, '310'),
(3119, '310'),
(31101, '311'),
(31102, '311'),
(31103, '311'),
(31104, '311'),
(31105, '311'),
(31106, '311'),
(31107, '311'),
(31108, '311'),
(31109, '311'),
(31110, '311'),
(31111, '311'),
(31112, '311'),
(31113, '311'),
(31114, '311'),
(31115, '311'),
(31116, '311'),
(31117, '311'),
(31118, '311'),
(31119, '311'),
(31200, '312'),
(31201, '312'),
(31202, '312'),
(31203, '312'),
(31204, '312'),
(31205, '312'),
(31206, '312'),
(31207, '312'),
(31208, '312'),
(31209, '312'),
(31210, '312'),
(31211, '312'),
(31212, '312'),
(31213, '312'),
(31214, '312'),
(31215, '312'),
(31216, '312'),
(31217, '312'),
(31218, '312'),
(31219, '312'),
(31300, '313'),
(31301, '313'),
(31302, '313'),
(31303, '313'),
(31304, '313'),
(31305, '313'),
(31306, '313'),
(31307, '313'),
(31308, '313'),
(31309, '313'),
(31310, '313'),
(31311, '313'),
(31312, '313'),
(31313, '313'),
(31314, '313'),
(31315, '313'),
(31316, '313'),
(31317, '313'),
(31318, '313'),
(31319, '313'),
(31400, '314'),
(31401, '314'),
(31402, '314'),
(31403, '314'),
(31404, '314'),
(31405, '314'),
(31406, '314'),
(31407, '314'),
(31408, '314'),
(31409, '314'),
(31410, '314'),
(31411, '314'),
(31412, '314'),
(31413, '314'),
(31414, '314'),
(31415, '314'),
(31416, '314'),
(31417, '314'),
(31418, '314'),
(31419, '314'),
(31500, '315'),
(31501, '315'),
(31502, '315'),
(31503, '315'),
(31504, '315'),
(31505, '315'),
(31506, '315'),
(31507, '315'),
(31508, '315'),
(31509, '315'),
(31510, '315'),
(31511, '315'),
(31512, '315'),
(31513, '315'),
(31514, '315'),
(31515, '315'),
(31516, '315'),
(31517, '315'),
(31518, '315'),
(31519, '315'),
(4001, '4'),
(4002, '4'),
(4003, '4'),
(4004, '4'),
(4005, '4'),
(4006, '4'),
(4007, '4'),
(4008, '4'),
(4009, '4'),
(4010, '4'),
(4011, '4'),
(4012, '4'),
(4013, '4'),
(4014, '4'),
(4015, '4'),
(4016, '4'),
(4017, '4'),
(4018, '4'),
(4019, '4');

-- --------------------------------------------------------

--
-- بنية الجدول `deal`
--

CREATE TABLE `deal` (
  `userId` int(4) NOT NULL,
  `complaintId` int(11) NOT NULL,
  `statusComplete` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `facultymember`
--

CREATE TABLE `facultymember` (
  `userId` int(4) NOT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `userAddress` varchar(45) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `facultymember`
--

INSERT INTO `facultymember` (`userId`, `userPassword`, `userName`, `userEmail`, `userAddress`, `phone`, `dateOfBirth`) VALUES
(101, 'Fc1145451831', 'Dr.ahmed', 'afsubahi@uqu.edu.sa', 'Makkah', 558782833, '1995-01-08'),
(102, 'Fc1165489987', 'Dr.khaled', 'kmbishre@uqu.edu.sa', 'Makkah', 504322678, '1990-01-01'),
(103, 'Fc1104556743', 'Dr.tarik', 'tkafif@uqu.edu.sa', 'Jeddah', 599533987, '1995-01-10'),
(104, 'Fc1109855654', 'Dr.zainab', 'zyhakami@uqu.edu.sa', 'Jeddah', 588544923, '1990-01-10'),
(105, 'Fc1105487665', 'Dr.areej', 'aaathama@uqu.edu.sa', 'Makkah', 57766987, '1990-11-01'),
(106, 'Fc1103456677', 'Lecturer Manar', 'majohani@uqu.edu.sa', 'Makkah', 577644987, '1995-04-04'),
(107, 'Fc1109665443', 'Lecturer Nusaibah', 'nmrtta@uqu.edu.sa', 'Jeddah', 588733789, '1990-10-11'),
(108, 'Fc1105051531', 'Dr.arwa', 'aafitni@uqu.edu.sa', 'Jeddah', 544366789, '1993-01-10'),
(109, 'Fc1105445678', 'Lecturer Amal', 'adshomrani@uqu.edu.s', 'Makkah', 544988543, '1994-05-20'),
(110, 'Fc1105041731', 'Dr.hussam', 'hjshareef@uqu.edu.sa', 'Jeddah', 544988654, '1990-11-11');

-- --------------------------------------------------------

--
-- بنية الجدول `manager`
--

CREATE TABLE `manager` (
  `userId` int(4) NOT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userAdress` varchar(45) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `manager`
--

INSERT INTO `manager` (`userId`, `userPassword`, `userName`, `userAdress`, `phone`, `dateOfBirth`) VALUES
(301, 'Ma1105435564', 'Manager Abdullah', 'Makkah', 599878843, '1985-01-11'),
(302, 'Ma1154667543', 'Manager Mohammed', 'Jeddah', 2147483647, '1988-01-12');

-- --------------------------------------------------------

--
-- بنية الجدول `worker`
--

CREATE TABLE `worker` (
  `userId` int(4) NOT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userAddress` varchar(45) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `specialist` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `worker`
--

INSERT INTO `worker` (`userId`, `userPassword`, `userName`, `userAddress`, `phone`, `dateOfBirth`, `salary`, `specialist`) VALUES
(201, 'Wo1105445678', 'Worker Sultan', 'Makkah', 599554567, '1980-01-11', 4500, 'Electronic'),
(202, 'Wo1187655789', 'Worker Thamer', 'Jeddah', 545667832, '1990-02-02', 4500, 'Electronic'),
(203, 'Wo1194334567', 'Worker Saad', 'Makkah', 554678546, '1995-10-11', 5000, 'Mechanic'),
(204, 'Wo1105455632', 'Worker Mazen', 'Makkah', 505436789, '1990-01-11', 5000, 'Mechanic'),
(205, 'Wo1176550766', 'Worker Yasser', 'Jeddah', 558764357, '1990-02-11', 4000, 'Facilities');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appedinx`
--
ALTER TABLE `appedinx`
  ADD PRIMARY KEY (`computerId`,`computerAppedinx`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`userId`,`compliantId`),
  ADD KEY `fk2` (`compliantId`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`roomNumber`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaintId`),
  ADD KEY `foreign key` (`roomNum`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`computerId`),
  ADD KEY `fk` (`roomN`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`userId`,`complaintId`),
  ADD KEY `fk4` (`complaintId`);

--
-- Indexes for table `facultymember`
--
ALTER TABLE `facultymember`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`userId`);

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `appedinx`
--
ALTER TABLE `appedinx`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`computerId`) REFERENCES `computer` (`computerId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`compliantId`) REFERENCES `complaint` (`complaintId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`userId`) REFERENCES `worker` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`roomNum`) REFERENCES `classroom` (`roomNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `computer`
--
ALTER TABLE `computer`
  ADD CONSTRAINT `fk` FOREIGN KEY (`roomN`) REFERENCES `classroom` (`roomNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `deal`
--
ALTER TABLE `deal`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`complaintId`) REFERENCES `complaint` (`complaintId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk5` FOREIGN KEY (`userId`) REFERENCES `worker` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
