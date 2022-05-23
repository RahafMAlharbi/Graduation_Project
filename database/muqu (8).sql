-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 مايو 2022 الساعة 00:09
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1004, 'mouse'),
(1004, 'screen'),
(1005, 'keyboard'),
(1005, 'mouse'),
(1005, 'screen'),
(1006, 'keyboard'),
(1006, 'mouse'),
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
(2002, 'keyboard'),
(2002, 'mouse'),
(2002, 'screen'),
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
(2019, 'screen'),
(3000, 'keyboard'),
(3000, 'mouse'),
(3000, 'screen'),
(3001, 'keyboard'),
(3001, 'mouse'),
(3001, 'screen'),
(3002, 'keyboard'),
(3002, 'mouse'),
(3002, 'screen'),
(3004, 'keyboard'),
(3004, 'mouse'),
(3004, 'screen'),
(3005, 'keyboard'),
(3005, 'mouse'),
(3005, 'screen'),
(3006, 'keyboard'),
(3006, 'mouse'),
(3006, 'screen'),
(3007, 'keyboard'),
(3007, 'mouse'),
(3007, 'screen'),
(3008, 'keyboard'),
(3008, 'mouse'),
(3008, 'screen'),
(3009, 'keyboard'),
(3009, 'mouse'),
(3009, 'screen'),
(3010, 'keyboard'),
(3010, 'mouse'),
(3010, 'screen'),
(3011, 'keyboard'),
(3011, 'mouse'),
(3011, 'screen'),
(3012, 'keyboard'),
(3012, 'mouse'),
(3012, 'screen'),
(3013, 'keyboard'),
(3013, 'mouse'),
(3013, 'screen'),
(3014, 'keyboard'),
(3014, 'mouse'),
(3014, 'screen'),
(3015, 'keyboard'),
(3015, 'mouse'),
(3015, 'screen'),
(3016, 'keyboard'),
(3016, 'mouse'),
(3016, 'screen'),
(3017, 'keyboard'),
(3017, 'mouse'),
(3017, 'screen'),
(3018, 'keyboard'),
(3018, 'mouse'),
(3018, 'screen'),
(3019, 'keyboard'),
(3019, 'mouse'),
(3019, 'screen'),
(3101, 'keyboard'),
(3101, 'mouse'),
(3101, 'screen'),
(3102, 'keyboard'),
(3102, 'mouse'),
(3102, 'screen'),
(3103, 'keyboard'),
(3103, 'mouse'),
(3103, 'screen'),
(3104, 'keyboard'),
(3104, 'mouse'),
(3104, 'screen'),
(3105, 'keyboard'),
(3105, 'mouse'),
(3105, 'screen'),
(3106, 'keyboard'),
(3106, 'mouse'),
(3106, 'screen'),
(3107, 'keyboard'),
(3107, 'mouse'),
(3107, 'screen'),
(3108, 'keyboard'),
(3108, 'mouse'),
(3108, 'screen'),
(3109, 'keyboard'),
(3109, 'mouse'),
(3109, 'screen'),
(3110, 'keyboard'),
(3110, 'mouse'),
(3110, 'screen'),
(3111, 'keyboard'),
(3111, 'mouse'),
(3111, 'screen'),
(3112, 'keyboard'),
(3112, 'mouse'),
(3112, 'screen'),
(3113, 'keyboard'),
(3113, 'mouse'),
(3113, 'screen'),
(3114, 'keyboard'),
(3114, 'mouse'),
(3114, 'screen'),
(3115, 'keyboard'),
(3115, 'mouse'),
(3115, 'screen'),
(3116, 'keyboard'),
(3116, 'mouse'),
(3116, 'screen'),
(3117, 'keyboard'),
(3117, 'mouse'),
(3117, 'screen'),
(3118, 'keyboard'),
(3118, 'mouse'),
(3118, 'screen'),
(3119, 'keyboard'),
(3119, 'mouse'),
(3119, 'screen'),
(3801, 'keyboard'),
(3801, 'mouse'),
(3801, 'screen'),
(3802, 'keyboard'),
(3802, 'mouse'),
(3802, 'screen'),
(3803, 'keyboard'),
(3803, 'mouse'),
(3803, 'screen'),
(3804, 'keyboard'),
(3804, 'mouse'),
(3804, 'screen'),
(3805, 'keyboard'),
(3805, 'mouse'),
(3805, 'screen'),
(3806, 'keyboard'),
(3806, 'mouse'),
(3806, 'screen'),
(3807, 'keyboard'),
(3807, 'mouse'),
(3807, 'screen'),
(3808, 'keyboard'),
(3808, 'mouse'),
(3808, 'screen'),
(3809, 'keyboard'),
(3809, 'mouse'),
(3809, 'screen'),
(3810, 'keyboard'),
(3810, 'mouse'),
(3810, 'screen'),
(3811, 'keyboard'),
(3811, 'mouse'),
(3811, 'screen'),
(3812, 'keyboard'),
(3812, 'mouse'),
(3812, 'screen'),
(3813, 'keyboard'),
(3813, 'mouse'),
(3813, 'screen'),
(3814, 'keyboard'),
(3814, 'mouse'),
(3814, 'screen'),
(3815, 'keyboard'),
(3815, 'mouse'),
(3815, 'screen'),
(3816, 'keyboard'),
(3816, 'mouse'),
(3816, 'screen'),
(3817, 'keyboard'),
(3817, 'mouse'),
(3817, 'screen'),
(3818, 'keyboard'),
(3818, 'mouse'),
(3818, 'screen'),
(3819, 'keyboard'),
(3819, 'mouse'),
(3819, 'screen'),
(3901, 'keyboard'),
(3901, 'mouse'),
(3901, 'screen'),
(3902, 'keyboard'),
(3902, 'mouse'),
(3902, 'screen'),
(3903, 'keyboard'),
(3903, 'mouse'),
(3903, 'screen'),
(3904, 'keyboard'),
(3904, 'mouse'),
(3904, 'screen'),
(3905, 'keyboard'),
(3905, 'mouse'),
(3905, 'screen'),
(3906, 'keyboard'),
(3906, 'mouse'),
(3906, 'screen'),
(3907, 'keyboard'),
(3907, 'mouse'),
(3907, 'screen'),
(3908, 'keyboard'),
(3908, 'mouse'),
(3908, 'screen'),
(3909, 'keyboard'),
(3909, 'mouse'),
(3909, 'screen'),
(3910, 'keyboard'),
(3910, 'mouse'),
(3910, 'screen'),
(3911, 'keyboard'),
(3911, 'mouse'),
(3911, 'screen'),
(3912, 'keyboard'),
(3912, 'mouse'),
(3912, 'screen'),
(3913, 'keyboard'),
(3913, 'mouse'),
(3913, 'screen'),
(3914, 'keyboard'),
(3914, 'mouse'),
(3914, 'screen'),
(3915, 'keyboard'),
(3915, 'mouse'),
(3915, 'screen'),
(3916, 'keyboard'),
(3916, 'mouse'),
(3916, 'screen'),
(3917, 'keyboard'),
(3917, 'mouse'),
(3917, 'screen'),
(3918, 'keyboard'),
(3918, 'mouse'),
(3918, 'screen'),
(3919, 'keyboard'),
(3919, 'mouse'),
(3919, 'screen'),
(4001, 'keyboard'),
(4001, 'mouse'),
(4001, 'screen'),
(4002, 'keyboard'),
(4002, 'mouse'),
(4002, 'screen'),
(4003, 'keyboard'),
(4003, 'mouse'),
(4003, 'screen'),
(4004, 'keyboard'),
(4004, 'mouse'),
(4004, 'screen'),
(4005, 'keyboard'),
(4005, 'mouse'),
(4005, 'screen'),
(4006, 'keyboard'),
(4006, 'mouse'),
(4006, 'screen'),
(4007, 'keyboard'),
(4007, 'mouse'),
(4007, 'screen'),
(4008, 'keyboard'),
(4008, 'mouse'),
(4008, 'screen'),
(4009, 'keyboard'),
(4009, 'mouse'),
(4009, 'screen'),
(4010, 'keyboard'),
(4010, 'mouse'),
(4010, 'screen'),
(4011, 'keyboard'),
(4011, 'mouse'),
(4011, 'screen'),
(4012, 'keyboard'),
(4012, 'mouse'),
(4012, 'screen'),
(4013, 'keyboard'),
(4013, 'mouse'),
(4013, 'screen'),
(4014, 'keyboard'),
(4014, 'mouse'),
(4014, 'screen'),
(4015, 'keyboard'),
(4015, 'mouse'),
(4015, 'screen'),
(4016, 'keyboard'),
(4016, 'mouse'),
(4016, 'screen'),
(4017, 'keyboard'),
(4017, 'mouse'),
(4017, 'screen'),
(4018, 'keyboard'),
(4018, 'mouse'),
(4018, 'screen'),
(4019, 'keyboard'),
(4019, 'mouse'),
(4019, 'screen'),
(31101, 'keyboard'),
(31101, 'mouse'),
(31101, 'screen'),
(31102, 'keyboard'),
(31102, 'mouse'),
(31102, 'screen'),
(31103, 'keyboard'),
(31103, 'mouse'),
(31103, 'screen'),
(31104, 'keyboard'),
(31104, 'mouse'),
(31104, 'screen'),
(31105, 'keyboard'),
(31105, 'mouse'),
(31105, 'screen'),
(31106, 'keyboard'),
(31106, 'mouse'),
(31106, 'screen'),
(31107, 'keyboard'),
(31107, 'mouse'),
(31107, 'screen'),
(31108, 'keyboard'),
(31108, 'mouse'),
(31108, 'screen'),
(31109, 'keyboard'),
(31109, 'mouse'),
(31109, 'screen'),
(31110, 'keyboard'),
(31110, 'mouse'),
(31110, 'screen'),
(31111, 'keyboard'),
(31111, 'mouse'),
(31111, 'screen'),
(31112, 'keyboard'),
(31112, 'mouse'),
(31112, 'screen'),
(31113, 'keyboard'),
(31113, 'mouse'),
(31113, 'screen'),
(31114, 'keyboard'),
(31114, 'mouse'),
(31114, 'screen'),
(31115, 'keyboard'),
(31115, 'mouse'),
(31115, 'screen'),
(31116, 'keyboard'),
(31116, 'mouse'),
(31116, 'screen'),
(31117, 'keyboard'),
(31117, 'mouse'),
(31117, 'screen'),
(31118, 'keyboard'),
(31118, 'mouse'),
(31118, 'screen'),
(31119, 'keyboard'),
(31119, 'mouse'),
(31119, 'screen'),
(31200, 'keyboard'),
(31200, 'mouse'),
(31200, 'screen'),
(31201, 'keyboard'),
(31201, 'mouse'),
(31201, 'screen'),
(31202, 'keyboard'),
(31202, 'mouse'),
(31202, 'screen'),
(31203, 'keyboard'),
(31203, 'mouse'),
(31203, 'screen'),
(31204, 'keyboard'),
(31204, 'mouse'),
(31204, 'screen'),
(31205, 'keyboard'),
(31205, 'mouse'),
(31205, 'screen'),
(31206, 'keyboard'),
(31206, 'mouse'),
(31206, 'screen'),
(31207, 'keyboard'),
(31207, 'mouse'),
(31207, 'screen'),
(31208, 'keyboard'),
(31208, 'mouse'),
(31208, 'screen'),
(31209, 'keyboard'),
(31209, 'mouse'),
(31209, 'screen'),
(31210, 'keyboard'),
(31210, 'mouse'),
(31210, 'screen'),
(31211, 'keyboard'),
(31211, 'mouse'),
(31211, 'screen'),
(31212, 'keyboard'),
(31212, 'mouse'),
(31212, 'screen'),
(31213, 'keyboard'),
(31213, 'mouse'),
(31213, 'screen'),
(31214, 'keyboard'),
(31214, 'mouse'),
(31214, 'screen'),
(31215, 'keyboard'),
(31215, 'mouse'),
(31215, 'screen'),
(31216, 'keyboard'),
(31216, 'mouse'),
(31216, 'screen'),
(31217, 'keyboard'),
(31217, 'mouse'),
(31217, 'screen'),
(31218, 'keyboard'),
(31218, 'mouse'),
(31218, 'screen'),
(31219, 'keyboard'),
(31219, 'mouse'),
(31219, 'screen'),
(31300, 'keyboard'),
(31300, 'mouse'),
(31300, 'screen'),
(31301, 'keyboard'),
(31301, 'mouse'),
(31301, 'screen'),
(31302, 'keyboard'),
(31302, 'mouse'),
(31302, 'screen'),
(31303, 'keyboard'),
(31303, 'mouse'),
(31303, 'screen'),
(31304, 'keyboard'),
(31304, 'mouse'),
(31304, 'screen'),
(31305, 'keyboard'),
(31305, 'mouse'),
(31305, 'screen'),
(31306, 'keyboard'),
(31306, 'mouse'),
(31306, 'screen'),
(31307, 'keyboard'),
(31307, 'mouse'),
(31307, 'screen'),
(31308, 'keyboard'),
(31308, 'mouse'),
(31308, 'screen'),
(31309, 'keyboard'),
(31309, 'mouse'),
(31309, 'screen'),
(31310, 'keyboard'),
(31310, 'mouse'),
(31310, 'screen'),
(31311, 'keyboard'),
(31311, 'mouse'),
(31311, 'screen'),
(31312, 'keyboard'),
(31312, 'mouse'),
(31312, 'screen'),
(31313, 'keyboard'),
(31313, 'mouse'),
(31313, 'screen'),
(31314, 'keyboard'),
(31314, 'mouse'),
(31314, 'screen'),
(31315, 'keyboard'),
(31315, 'mouse'),
(31315, 'screen'),
(31316, 'keyboard'),
(31316, 'mouse'),
(31316, 'screen'),
(31317, 'keyboard'),
(31317, 'mouse'),
(31317, 'screen'),
(31318, 'keyboard'),
(31318, 'mouse'),
(31318, 'screen'),
(31319, 'keyboard'),
(31319, 'mouse'),
(31319, 'screen'),
(31400, 'keyboard'),
(31400, 'mouse'),
(31400, 'screen'),
(31401, 'keyboard'),
(31401, 'mouse'),
(31401, 'screen'),
(31402, 'keyboard'),
(31402, 'mouse'),
(31402, 'screen'),
(31403, 'keyboard'),
(31403, 'mouse'),
(31403, 'screen'),
(31404, 'keyboard'),
(31404, 'mouse'),
(31404, 'screen'),
(31405, 'keyboard'),
(31405, 'mouse'),
(31405, 'screen'),
(31406, 'keyboard'),
(31406, 'mouse'),
(31406, 'screen'),
(31407, 'keyboard'),
(31407, 'mouse'),
(31407, 'screen'),
(31408, 'keyboard'),
(31408, 'mouse'),
(31408, 'screen'),
(31409, 'keyboard'),
(31409, 'mouse'),
(31409, 'screen'),
(31410, 'keyboard'),
(31410, 'mouse'),
(31410, 'screen'),
(31411, 'keyboard'),
(31411, 'mouse'),
(31411, 'screen'),
(31412, 'keyboard'),
(31412, 'mouse'),
(31412, 'screen'),
(31413, 'keyboard'),
(31413, 'mouse'),
(31413, 'screen'),
(31414, 'keyboard'),
(31414, 'mouse'),
(31414, 'screen'),
(31415, 'keyboard'),
(31415, 'mouse'),
(31415, 'screen'),
(31416, 'keyboard'),
(31416, 'mouse'),
(31416, 'screen'),
(31417, 'keyboard'),
(31417, 'mouse'),
(31417, 'screen'),
(31418, 'keyboard'),
(31418, 'mouse'),
(31418, 'screen'),
(31419, 'keyboard'),
(31419, 'mouse'),
(31419, 'screen'),
(31500, 'keyboard'),
(31500, 'mouse'),
(31500, 'screen'),
(31501, 'keyboard'),
(31501, 'mouse'),
(31501, 'screen'),
(31502, 'keyboard'),
(31502, 'mouse'),
(31502, 'screen'),
(31503, 'keyboard'),
(31503, 'mouse'),
(31503, 'screen'),
(31504, 'keyboard'),
(31504, 'mouse'),
(31504, 'screen'),
(31505, 'keyboard'),
(31505, 'mouse'),
(31505, 'screen'),
(31506, 'keyboard'),
(31506, 'mouse'),
(31506, 'screen'),
(31507, 'keyboard'),
(31507, 'mouse'),
(31507, 'screen'),
(31508, 'keyboard'),
(31508, 'mouse'),
(31508, 'screen'),
(31509, 'keyboard'),
(31509, 'mouse'),
(31509, 'screen'),
(31510, 'keyboard'),
(31510, 'mouse'),
(31510, 'screen'),
(31511, 'keyboard'),
(31511, 'mouse'),
(31511, 'screen'),
(31512, 'keyboard'),
(31512, 'mouse'),
(31512, 'screen'),
(31513, 'keyboard'),
(31513, 'mouse'),
(31513, 'screen'),
(31514, 'keyboard'),
(31514, 'mouse'),
(31514, 'screen'),
(31515, 'keyboard'),
(31515, 'mouse'),
(31515, 'screen'),
(31516, 'keyboard'),
(31516, 'mouse'),
(31516, 'screen'),
(31517, 'keyboard'),
(31517, 'mouse'),
(31517, 'screen'),
(31518, 'keyboard'),
(31518, 'mouse'),
(31518, 'screen'),
(31519, 'keyboard'),
(31519, 'mouse'),
(31519, 'screen');

-- --------------------------------------------------------

--
-- بنية الجدول `assign`
--

CREATE TABLE `assign` (
  `userId` int(4) NOT NULL,
  `compliantId` int(11) NOT NULL,
  `saved` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `assign`
--

INSERT INTO `assign` (`userId`, `compliantId`, `saved`) VALUES
(201, 387, 1),
(201, 388, 1),
(201, 389, 1),
(201, 390, 1),
(201, 395, 1),
(201, 396, 1),
(201, 397, 1),
(201, 398, 1),
(201, 399, 1),
(201, 401, 1),
(201, 402, 1),
(201, 403, 1),
(202, 387, 0),
(202, 388, 1),
(203, 390, 1),
(203, 391, 1),
(203, 392, 1),
(203, 393, 1),
(203, 394, 1),
(203, 400, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `classroom`
--

CREATE TABLE `classroom` (
  `roomNumber` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `floor` char(3) CHARACTER SET utf8mb4 NOT NULL,
  `building` char(2) CHARACTER SET utf8mb4 NOT NULL,
  `roomType` varchar(15) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('B102', 'G', 'B', 'Physics Lab'),
('B103', 'G', 'B', 'Physics Lab'),
('B105', 'G', 'B', 'Biology Lab'),
('B106', 'G', 'B', 'Biology Lab'),
('B107', 'G', 'B', 'Chemistry Lab'),
('B108', 'G', 'B', 'Chemistry Lab'),
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
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Processed',
  `description` varchar(500) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `roomNum` varchar(8) NOT NULL,
  `idofuser` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `complaint`
--

INSERT INTO `complaint` (`complaintId`, `date`, `category`, `status`, `description`, `images`, `roomNum`, `idofuser`) VALUES
(387, '2022-04-27 22:00:26', 'Needs an inspection visit', 'Under Processing', '1', NULL, '105', 101),
(388, '2022-04-27 22:00:34', 'Needs an inspection visit', 'solved', '2', NULL, '109', 101),
(389, '2022-04-27 22:00:42', 'Needs an inspection visit', 'solved', '3', NULL, '110', 101),
(390, '2022-05-08 16:14:55', 'Needs an inspection visit', 'solved', 'hi', NULL, '107', 101),
(391, '2022-05-08 16:21:37', 'Needs an inspection visit', 'solved', 'new', NULL, '107', 101),
(392, '2022-05-08 16:21:46', 'Needs an inspection visit', 'solved', 'newww', NULL, '105', 101),
(393, '2022-05-08 16:21:56', 'Needs an inspection visit', 'solved', 'neeeeeeee', NULL, '105', 101),
(394, '2022-05-08 16:22:08', 'Needs an inspection visit', 'solved', 'llllllllllll', NULL, '104', 101),
(395, '2022-05-08 16:31:54', 'Needs an inspection visit', 'solved', '1', NULL, '103', 101),
(396, '2022-05-08 16:32:04', 'Needs an inspection visit', 'Under Processing', '2', NULL, '115', 101),
(397, '2022-05-08 16:32:13', 'Needs an inspection visit', 'Under Processing', '3', NULL, '112', 101),
(398, '2022-05-08 16:32:23', 'Needs an inspection visit', 'Under Processing', '444', NULL, '116', 101),
(399, '2022-05-08 16:32:30', 'Needs an inspection visit', 'Under Processing', '.', NULL, '113', 101),
(400, '2022-05-08 16:32:38', 'Needs an inspection visit', 'Under Processing', '21', NULL, '114', 101),
(401, '2022-05-08 16:32:48', 'Needs an inspection visit', 'solved', '212222', NULL, '114', 101),
(402, '2022-05-08 16:32:58', 'Needs an inspection visit', 'solved', '2222222222', NULL, '116', 101),
(403, '2022-05-08 16:33:07', 'Needs an inspection visit', 'solved', '7', NULL, '117', 101),
(404, '2022-05-15 16:38:42', 'Needs an inspection visit', 'Not Processed', '12', NULL, '105', 101),
(405, '2022-05-15 17:55:32', 'Needs an inspection visit,Air conditiong', 'Not Processed', '233', NULL, '104', 101),
(406, '2022-05-23 20:38:40', 'Needs an inspection visit', 'Not Processed', 'hi', NULL, '106', 101),
(407, '2022-05-23 21:22:34', 'Needs an inspection visit', 'Not Processed', 'hi', NULL, '104', 101),
(408, '2022-05-23 21:22:43', 'Needs an inspection visit', 'Not Processed', 'ji', NULL, '107', 101);

-- --------------------------------------------------------

--
-- بنية الجدول `complaintpcid`
--

CREATE TABLE `complaintpcid` (
  `compID` int(11) NOT NULL,
  `pcID` int(4) NOT NULL
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
(1108, '108'),
(2108, '108'),
(4108, '108'),
(5108, '108'),
(6108, '108'),
(7108, '108'),
(8108, '108'),
(9108, '108'),
(10108, '108'),
(11108, '108'),
(12108, '108'),
(13108, '108'),
(14108, '108'),
(15108, '108'),
(16108, '108'),
(17108, '108'),
(18108, '108'),
(19108, '108'),
(20108, '108'),
(30108, '108'),
(1124, '124'),
(2124, '124'),
(3124, '124'),
(4124, '124'),
(5124, '124'),
(6124, '124'),
(7124, '124'),
(8124, '124'),
(9124, '124'),
(10124, '124'),
(11124, '124'),
(12124, '124'),
(13124, '124'),
(14124, '124'),
(15124, '124'),
(16124, '124'),
(17124, '124'),
(18124, '124'),
(19124, '124'),
(100124, '124'),
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
  `completeness` varchar(15) NOT NULL,
  `reason` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `deal`
--

INSERT INTO `deal` (`userId`, `complaintId`, `completeness`, `reason`) VALUES
(201, 389, 'Completed', ''),
(201, 398, 'Uncompleted', 'I don\'t have any equipment‏');

-- --------------------------------------------------------

--
-- بنية الجدول `facultymember`
--

CREATE TABLE `facultymember` (
  `userId` int(4) NOT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userEmail` varchar(25) NOT NULL,
  `userAddress` varchar(45) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `usertype` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `facultymember`
--

INSERT INTO `facultymember` (`userId`, `userPassword`, `userName`, `userEmail`, `userAddress`, `phone`, `dateOfBirth`, `usertype`) VALUES
(101, 'Fc1145451831', 'Dr.Bayadir', 'Bayadir.2022@gmail.com', 'Makkah', '0558782833', '1995-01-08', 1),
(102, 'Fc1165489987', 'Dr.Khaled', 'kmbishre@uqu.edu.sa', 'Makkah', '0504322678', '1990-01-01', 1),
(103, 'Fc1104556743', 'Dr.Tarik', 'tkafif@uqu.edu.sa', 'Jeddah', '0599533987', '1995-01-10', 1),
(104, 'Fc1109855654', 'Dr.Zainab', 'zyhakami@uqu.edu.sa', 'Jeddah', '0588544923', '1990-01-10', 1),
(105, 'Fc1105487665', 'Dr.Areej', 'aaathama@uqu.edu.sa', 'Makkah', '0557766987', '1990-11-01', 1),
(106, 'Fc1103456677', 'Lecturer Manar', 'majohani@uqu.edu.sa', 'Makkah', '0577644987', '1995-04-04', 1),
(107, 'Fc1109665443', 'Lecturer Nusaibah', 'nmrtta@uqu.edu.sa', 'Jeddah', '0588733789', '1990-10-11', 1),
(108, 'Fc1105051531', 'Dr.Arwa', 'aafitni@uqu.edu.sa', 'Jeddah', '0544366789', '1993-01-10', 1),
(109, 'Fc1105445678', 'Lecturer Amal', 'adshomrani@uqu.edu.s', 'Makkah', '0544988543', '1994-05-20', 1),
(110, 'Fc1105041731', 'Dr.Hussam', 'hjshareef@uqu.edu.sa', 'Jeddah', '0544988654', '1990-11-11', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `manager`
--

CREATE TABLE `manager` (
  `userId` int(4) NOT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `userAdress` varchar(45) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `usertype` int(1) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `manager`
--

INSERT INTO `manager` (`userId`, `userPassword`, `userName`, `userEmail`, `userAdress`, `phone`, `dateOfBirth`, `usertype`) VALUES
(301, 'Ma1105435564', 'Manager Abdullah', 'abdull@ma.uqu.edu.sa', 'Makkah', '0599878843', '1985-01-11', 3),
(302, 'Ma1154667543', 'Manager Mohammed', 'mohamm@ma.uqu.edu.sa', 'Jeddah', '0514748367', '1988-01-12', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `worker`
--

CREATE TABLE `worker` (
  `userId` int(4) NOT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `userAddress` varchar(45) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `usertype` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `worker`
--

INSERT INTO `worker` (`userId`, `userPassword`, `userName`, `userEmail`, `userAddress`, `phone`, `dateOfBirth`, `salary`, `specialist`, `usertype`) VALUES
(201, 'Wo1105445678', 'Worker Sultan', 'sultt@wo.uqu.edu.sa', 'Makkah', '0599554567', '1980-01-11', 4500, 'Electronic technician', 2),
(202, 'Wo1187655789', 'Worker Thamer', 'thaa@wo.uqu.edu.sa', 'Jeddah', '0545667832', '1990-02-02', 4500, 'Electronic technician', 2),
(203, 'Wo1194334567', 'Worker Saad', 'saad@wo.uqu.edu.sa', 'Makkah', '0554678546', '1995-10-11', 5000, 'Mechanic', 2),
(204, 'Wo1105455632', 'Worker Mazen', 'maz@wo.uqu.edu.sa', 'Makkah', '0505436789', '1990-01-11', 5000, 'Mechanic', 2),
(205, 'Wo1176550766', 'Worker Yasser', 'yass@wo.uqu.edu.sa', 'Jeddah', '0558764357', '1990-02-11', 4000, 'Facilities technician', 2);

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
  ADD KEY `fk8` (`roomNum`),
  ADD KEY `fk7` (`idofuser`);

--
-- Indexes for table `complaintpcid`
--
ALTER TABLE `complaintpcid`
  ADD PRIMARY KEY (`compID`,`pcID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaintId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

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
  ADD CONSTRAINT `fk7` FOREIGN KEY (`idofuser`) REFERENCES `facultymember` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk8` FOREIGN KEY (`roomNum`) REFERENCES `classroom` (`roomNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `complaintpcid`
--
ALTER TABLE `complaintpcid`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`compID`) REFERENCES `complaint` (`complaintId`) ON DELETE CASCADE ON UPDATE CASCADE;

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
