-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 01:51 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nishat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbarea`
--

CREATE TABLE `tbarea` (
  `area` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbarea`
--

INSERT INTO `tbarea` (`area`) VALUES
('Agrabad'),
('Boddarhat'),
('Chandgao'),
('Chawkbazar'),
('CMB'),
('Dawanhat'),
('EPZ'),
('GEC'),
('Hamzarbag'),
('Jamalkhan'),
('kalamiaBazar'),
('Lalkhan Bazar'),
('New Market'),
('Notun Bridge'),
('Shadarkhar ');

-- --------------------------------------------------------

--
-- Table structure for table `tbbooks`
--

CREATE TABLE `tbbooks` (
  `bookTitile` varchar(500) NOT NULL,
  `class` varchar(50) NOT NULL,
  `bookpath` varchar(500) NOT NULL,
  `year` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbooks`
--

INSERT INTO `tbbooks` (`bookTitile`, `class`, `bookpath`, `year`) VALUES
('Bangla 2nd Paper', 'HSC', 'Recurrent Convolutional Neural Networks for Text Classification.pdf', '2020'),
('Biology', 'HSC', 'Job-Preview.pdf', '2021'),
('chemistry 1st paper', 'HSC', 'COMPILER-LAB-REPORT-FORMATE.pdf', '2021'),
('English 1st Paper', 'HSC', 'Proposal Presentation_Dipu.pdf', '2020'),
('English 1st Paper', 'Eight', 'COMPILER-LAB-REPORT-FORMATE.pdf', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`name`, `email`, `subject`, `message`, `dateTime`) VALUES
('Akash Kumar Sushil', 'lionaks884@gmail.com', 'add new school ', 'add new school ', '0000-00-00 00:00:00'),
('Nishat Anjum', 'nishat@gmail.com', 'add new school ', 'please add some school which is located in patenga ', '2021-04-28 19:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbinstitutions`
--

CREATE TABLE `tbinstitutions` (
  `district` varchar(500) NOT NULL,
  `area` varchar(500) NOT NULL,
  `institutionsTypes` varchar(500) NOT NULL,
  `i_name` varchar(500) NOT NULL,
  `totalTeachers` varchar(500) NOT NULL,
  `y1` varchar(500) NOT NULL,
  `yp1` varchar(500) NOT NULL,
  `yA1` varchar(500) NOT NULL,
  `y2` bigint(20) NOT NULL,
  `yp2` bigint(20) NOT NULL,
  `yA2` bigint(20) NOT NULL,
  `y3` bigint(20) NOT NULL,
  `yp3` bigint(20) NOT NULL,
  `yA3` bigint(20) NOT NULL,
  `image` varchar(500) NOT NULL,
  `mapUrl` varchar(500) NOT NULL,
  `areadetails` varchar(500) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `dateTime` datetime NOT NULL,
  `number1` varchar(50) NOT NULL,
  `tstd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbinstitutions`
--

INSERT INTO `tbinstitutions` (`district`, `area`, `institutionsTypes`, `i_name`, `totalTeachers`, `y1`, `yp1`, `yA1`, `y2`, `yp2`, `yA2`, `y3`, `yp3`, `yA3`, `image`, `mapUrl`, `areadetails`, `details`, `dateTime`, `number1`, `tstd`) VALUES
('Chittagong', 'Chawkbazar', 'School', 'Bakalia Adarsha Girls High School ', '30', '2017', '50', '40', 2018, 55, 45, 2019, 65, 50, 'bakalia girl.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.926987786339!2d91.84053771454006!3d22.356385546507145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad276f9f133123%3A0x4707a42d2a291199!2zQmFrYWxpYSBBZGFyc2hhIEdpcmxzJyBIaWdoIFNjaG9vbCDgpqzgpr7gppXgprLgpr_gpq_gprzgpr4g4KaG4Kam4Kaw4KeN4Ka2IOCmrOCmvuCmsuCmv-CmleCmviDgpongpprgp43gppog4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4Kav4Ka8!5e0!3m2!1sen!2sbd!4v1619545949707!5m2!1sen!2sbd', 'Chawk Bazar, Kapasgola Rd, Chattogram 4203', ' best school', '2021-04-27 19:55:52', 'Array', 'Array'),
('Chittagong', 'Chawkbazar', 'School', 'Bakalia Government High School', '40', '2017', '80', '70', 2018, 80, 70, 2019, 60, 50, 'bakalia.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.9342388568157!2d91.8425370149557!3d22.356111785294612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad276ef76cfac7%3A0x9177e8d0a2b00d08!2sBakolia%20Government%20High%20School!5e0!3m2!1sen!2sbd!4v1619109609163!5m2!1sen!2sbd\r\n', 'Boro mia mosjid', ' best school in world.', '2021-04-22 18:41:30', '01839591164', '12000'),
('Chittagong', 'Boddarhat', 'School', 'CDA Public School', '30', '2017', '65', '30', 2018, 78, 52, 2019, 70, 80, 'cda.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.353730539229!2d91.84555961495606!3d22.378018585283243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad279938b6d8b3%3A0x6099ebbc37d6f89d!2sCDA%20Public%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1619105470125!5m2!1sen!2sbd', 'B-Block, Chandgaon R/A', ' Great school and best SSC result in every year. our school teacher are good in teaching side, they care about all student in our school. our school performance is great.', '2021-04-22 17:36:17', '01839591164', '2000'),
('Chittagong', 'Chawkbazar', 'College', 'Chittagong College', '50', '2017', '80', '50', 2018, 95, 60, 2020, 65, 70, 'Chittagong College.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35793.328514184686!2d91.80408730107476!3d22.332348914221583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8af0132f1d9%3A0x779796a93d955f21!2sChittagong%20Collegiate%20School!5e0!3m2!1sen!2sbd!4v1619103459624!5m2!1sen!2sbd', 'à¦•à¦²à§‡à¦œ à¦°à§‹à¦¡, Chattogram 4203', ' Chittagong College is a government college in Chittagong, Bangladesh. It is the second college established in Bangladesh after Dhaka College.', '2021-04-24 13:51:53', '01839591164', '5000'),
('Chittagong', 'New Market', 'School', 'Collegiate Government High School', '40', '2017', '90', '50', 2018, 80, 77, 2019, 90, 84, 'Chittagong_Collegiate_School_Gate.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.353730539229!2d91.84555961495606!3d22.378018585283243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad279938b6d8b3%3A0x6099ebbc37d6f89d!2sCDA%20Public%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1619105470125!5m2!1sen!2sbd', 'Ice Factory Road, Chittagong', ' Chittagong Collegiate School and College is a government educational institution in Chittagong, the southern port city in Bangladesh.It provides education from 5th to 12th grade. Established in 1836, it is one of the oldest and the best educational institutes in Chittagong and one of the in country.', '2021-04-22 18:36:26', '01839591164', '3000'),
('Chittagong', 'Chawkbazar', 'Madrasha', 'Darul Ulum Alia Madrasah', '25', '2017', '65', '50', 2018, 55, 30, 2019, 52, 22, 'Darul Ulum.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.105849008256!2d91.83505471495556!3d22.34963178529796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27672f87f473%3A0x72646107d9c7183f!2sDarul%20Ulum%20Alia%20Madrasah!5e0!3m2!1sen!2sbd!4v1619269683871!5m2!1sen!2sbd', 'Darul Ulum Rd, Chattogram 4000', ' à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡ à¦®à¦¾à¦¦à¦°à¦¾à¦¸à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾à¦Ÿà¦¿ à¦¸à¦®à¦—à§à¦° à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦° à¦à¦•à¦Ÿà¦¿ à¦…à¦¬à¦¿à¦šà§à¦›à§‡à¦¦à§à¦¯ à¦…à¦‚à¦¶à¥¤ à¦à¦‡ à¦à¦¤à¦¿à¦¹à§à¦¯à¦¬à¦¾à¦¹à§€ à¦¦à¦¾à¦°à§à¦² à¦‰à¦²à§‚à¦® à¦†à¦²à¦¿à§Ÿà¦¾ à¦®à¦¾à¦¦à¦°à¦¾à¦¸à¦¾ à¦ à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¾à¦¦à¦°à¦¾à¦¸à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸à§‡à¦° à§§à¦® à¦¸à§à¦¤à¦°à§‡à¦° à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤ à¦¬à§€à¦° à¦šà¦Ÿà§à¦Ÿà¦²à¦¾à¦° à¦¬à¦¿à¦¶à¦¿à¦·à§à¦Ÿ à¦§à¦°à§à¦®à¦ªà§à¦°à¦¾à¦£, à¦¶à¦¿à¦•à§à¦·à¦¾à¦£à§à¦°à¦¾à¦—à§€, à¦¸à¦®à¦¾à¦œà¦¸à§‡à¦¬à§€ à¦“ à¦¬à¦¿à¦¤à§à¦¤à¦¶à¦¾à¦²à§€ à¦–à§à¦¯à¦¾à¦¤à¦¨à¦¾à¦®à¦¾ à¦¬à§à¦¯à¦¾à¦•à§à¦¤à¦¿ à¦®à¦°à¦¹à§à¦® à¦†à¦²à¦¹à¦¾à¦œà§à¦œ à¦šà¦¾à¦¨à§à¦¦à¦®à¦¿à§Ÿà¦¾ à¦¸à¦“à¦¦à¦¾à¦—à¦° à¦•à¦°à§à¦¤à§ƒà¦• à§§à§¯à§§à§© à¦‡à¦‚à¦°à§‡à¦œà¦¿ à¦¸à¦¾à¦²à§‡ à¦à¦Ÿà¦¿ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà§‡ à¦¸à§à¦¦à§€à¦°à§à¦˜ à§§à§¦à§¦ à¦¬à¦›à¦°à§‡à¦°à¦“ à¦¬à§‡à¦¶à¦¿ à¦¸à¦®à§Ÿ à¦§à¦°à§‡ à¦¸à¦®à¦—à§à¦° à¦¦à§‡à¦¶ à¦¤à¦¥à¦¾ à¦¸à¦¾à¦°à¦¾ à¦¬à¦¿à¦¶à§à¦¬à¦¬à§à¦¯à¦¾à¦ªà§€ à¦œà§à¦žà¦¾à¦¨à§‡à¦° à¦†à¦²à§‹ à¦¬à¦¿à¦¤à¦°à¦£à§‡ à¦à¦Ÿà¦¿ à¦…à¦¨à¦¬à¦¦à§à¦¯ à¦­à§‚à¦®à¦¿à¦•à¦¾ à¦°à§‡à¦–à§‡ à¦šà¦²à§‡à¦›à§‡à¥¤ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€, à¦¦à¦¾à¦–à¦¿à¦², à¦†à¦²à¦¿à¦®, à¦«à¦¾à¦¯à¦¿à¦² (à¦ªà¦¾à¦¸ à¦“ à¦…à¦¨à¦¾à¦°à§à¦¸) à¦à¦¬à¦‚ à¦•à¦¾à¦®à¦¿à¦² à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦ à§«à¦Ÿà¦¿ à¦¸à§à¦¤à¦° à¦à¦–à¦¾à¦¨à§‡ à¦šà¦²à¦®à¦¾à¦¨ à¦°à§Ÿà§‡à¦›à§‡', '2021-04-24 15:09:38', '01839591164', '5000'),
('Chittagong', 'Jamalkhan', 'School', 'Dr. Khastagir Government Girls High School', '50', '2017', '80', '50', 2018, 90, 50, 2019, 95, 50, 'Khastagir.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.152789933057!2d91.83223561495555!3d22.347858985298966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad276086416063%3A0x780365fe85c629ee!2sDr.%20Khastagir%20Government%20Girls&#39;%20High%20School!5e0!3m2!1sen!2sbd!4v1619456844947!5m2!1sen!2sbd', 'Jamal Khan Road', ' Dr. Khastagir Government Girls High School is a secondary school in Chittagong, Bangladesh. It is near Jamal Khan, in the central part of the city. It is a large girls school, established by Annadacharan Khastagir, a pioneer in womens education in Chittagong during the late 19th century', '2021-04-26 19:08:27', '01839591164', '1200'),
('Chittagong', 'kalamiaBazar', 'Madrasha', 'Kamale Ishq-e Mustafa (SM) Alim Madrasah', '30', '2017', '65', '50', 2018, 70, 30, 2019, 75, 90, 'Kamale Ishq-e Mustafa (SM) Alim Madrasah.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.353730539229!2d91.84555961495606!3d22.378018585283243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad279938b6d8b3%3A0x6099ebbc37d6f89d!2sCDA%20Public%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1619105470125!5m2!1sen!2sbd', 'kalamiabazar, new connecting road', ' its one of the best Religious school in Chittagong', '2021-04-24 13:57:50', '01839591164', '700'),
('Chittagong', 'Chawkbazar', 'School', 'Kapasgola City Corporation Girls High School', '30', '2017', '62', '40', 2018, 65, 45, 2019, 70, 50, 'kapashgola.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7379.634208066937!2d91.83830053690708!3d22.360533773627797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad276fff8f3ced%3A0x55ee81ccc79b6892!2sKapasgola%20City%20Corporation%20Woman%20College!5e0!3m2!1sen!2sbd!4v1619544775557!5m2!1sen!2sbd', 'Chawk Bazar, Kapasgola Rd, Chattogram 4203', ' This the best girls high school in chittagong. We provide best teaching in the city', '2021-04-27 19:46:58', '0185485234', '800'),
('Chittagong', 'Chawkbazar', 'College', 'Govt. Hazi Muhammad Mohsin College', '300', '2018', '69', '70', 2019, 82, 80, 2020, 87, 67, 'download (1).jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.031675782211!2d91.83308296495565!3d22.352432785296532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad2761658e6149%3A0xcab8ee462aa6c588!2sGovt.%20Hazi%20Muhammad%20Mohsin%20College%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1619669175459!5m2!1sen!2sbd', 'College Rd, Chattogram 4000', ' Government Hazi Mohammad Mohsin College is a government-run college located in Chittagong, Bangladesh. Named after Muhammad Mohsin, a 19th-century philanthropist, it is one of the oldest educational institutions in the country.', '2021-04-29 06:07:22', '031-614690', '1200'),
('Chittagong', 'Chawkbazar', 'College', 'Chattagram Biggan College', '45', '2018', '79', '56', 2019, 67, 31, 2020, 86, 29, 'bigganclg.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.9152158262145!2d91.83441741495568!3d22.35682998529418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad27618020c6e3%3A0xde15b94d6c6ad3ee!2sChattagram%20Biggan%20College!5e0!3m2!1sen!2sbd!4v1619682356955!5m2!1sen!2sbd', 'à¦—à§à¦²à¦œà¦¾â€Œà¦°à§‡à¦° à¦ªâ€Œà¦¶à§à¦šà¦¿â€Œà¦®à§‡, à¦®à§â€Œà¦•à§à¦¤à¦¿ à¦­à¦¬à¦¨, Chattogram 4203', ' Chattagram Biggan College(CBC) fully digitalized college in chittagong. CBC is located in the separate area in the college building with air conditioned â€¦ standard way of studies through a fully digitalized(visualized) classrooms.', '2021-04-29 09:47:39', '031-614690', '2000'),
('Chittagong', 'Lalkhan Bazar', 'Madrasha', 'Jamiatul-Ulum-al-Islamia Madrasa', '56', '2018', '56', '15', 2019, 70, 23, 2020, 65, 21, 'jl.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29518.13119804011!2d91.83060479170727!3d22.362447667260128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89396072b3d%3A0x800b661589eba486!2sJamiatul-Ulum-al-Islamia%20Madrasa%2C%20Lalkhan%20Bazar!5e0!3m2!1sen!2sbd!4v1619701337221!5m2!1sen!2sbd', '79 Chanmari Rd, Chattogram', ' Jamiatul Uloom Al-Islamia Lalkhan Bazar, popularly known as Lalkhan Bazar Madrasah, is a well-known Qawmi madrasah situated in the Lalkhan Bazar area of port city Chittagong. ', '2021-04-29 15:05:27', '01823424841', '7000'),
('Chittagong', 'GEC', 'School', 'Ispahani Public School and College', '12', '2018', '85', '56', 2019, 90, 70, 2020, 87, 85, 'ispahani.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2193.9840032467514!2d91.8127271569877!3d22.360176568887947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd88df3569215%3A0xfe865ac331e0b6d3!2sIspahani%20Public%20School%20and%20College!5e0!3m2!1sen!2sbd!4v1619792319868!5m2!1sen!2sbd', 'GEC', ' Ispahani Public School & College, Chittagong commonly referred to as IPSC is a private educational institution on Zakir Hossain Road in Chittagong, Bangladesh. This college is one of the top 5 colleges of Chittagong', '2021-04-30 16:19:49', '88031616323', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `tbnotice`
--

CREATE TABLE `tbnotice` (
  `titile` varchar(500) NOT NULL,
  `id` bigint(20) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `filepath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbnotice`
--

INSERT INTO `tbnotice` (`titile`, `id`, `date`, `filepath`) VALUES
('à§¨à§¦à§§à§® à¦¸à¦¾à¦²à§‡à¦° à¦à¦¸.à¦à¦¸.à¦¸à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦ªà§à¦¨à¦ƒà¦¨à¦¿à¦°à§€à¦•à§à¦·à¦£à§‡à¦° à¦«à¦²', 5, '2021-05-01', 'Lexical-Analysis.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbratings`
--

CREATE TABLE `tbratings` (
  `tblocation` varchar(500) NOT NULL DEFAULT '',
  `tbimage` varchar(500) NOT NULL DEFAULT '',
  `i_name` varchar(500) NOT NULL DEFAULT '',
  `tbratting` decimal(50,0) NOT NULL,
  `types` varchar(500) NOT NULL,
  `tbabout` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbratings`
--

INSERT INTO `tbratings` (`tblocation`, `tbimage`, `i_name`, `tbratting`, `types`, `tbabout`) VALUES
('Chawkbazar', 'bakalia girl.jpg', 'Bakalia Adarsha Girls High School ', '65', 'School', 'best school'),
('Chawkbazar', 'bakalia.jpg', 'Bakalia Government High School', '60', 'School', 'best school in world.'),
('Boddarhat', 'cda.jpg', 'CDA Public School', '90', 'School', 'Great school and best SSC result in every year. our school teacher are good in teaching side, they care about all student in our school. our school performance is great.'),
('Chawkbazar', 'Chittagong College.jpg', 'Chittagong College', '65', 'College', 'Chittagong College is a government college in Chittagong, Bangladesh. It is the second college established in Bangladesh after Dhaka College.'),
('New Market', 'Chittagong_Collegiate_School_Gate.jpg', 'Collegiate Government High School', '90', 'School', 'Chittagong Collegiate School and College is a government educational institution in Chittagong, the southern port city in Bangladesh.It provides education from 5th to 12th grade. Established in 1836, it is one of the oldest and the best educational institutes in Chittagong and one of the in country.'),
('Chawkbazar', 'Darul Ulum.jpg', 'Darul Ulum Alia Madrasah', '52', 'Madrasha', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡ à¦®à¦¾à¦¦à¦°à¦¾à¦¸à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾à¦Ÿà¦¿ à¦¸à¦®à¦—à§à¦° à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦° à¦à¦•à¦Ÿà¦¿ à¦…à¦¬à¦¿à¦šà§à¦›à§‡à¦¦à§à¦¯ à¦…à¦‚à¦¶à¥¤ à¦à¦‡ à¦à¦¤à¦¿à¦¹à§à¦¯à¦¬à¦¾à¦¹à§€ à¦¦à¦¾à¦°à§à¦² à¦‰à¦²à§‚à¦® à¦†à¦²à¦¿à§Ÿà¦¾ à¦®à¦¾à¦¦à¦°à¦¾à¦¸à¦¾ à¦ à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¾à¦¦à¦°à¦¾à¦¸à¦¾ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸à§‡à¦° à§§à¦® à¦¸à§à¦¤à¦°à§‡à¦° à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤ à¦¬à§€à¦° à¦šà¦Ÿà§à¦Ÿà¦²à¦¾à¦° à¦¬à¦¿à¦¶à¦¿à¦·à§à¦Ÿ à¦§à¦°à§à¦®à¦ªà§à¦°à¦¾à¦£, à¦¶à¦¿à¦•à§à¦·à¦¾à¦£à§à¦°à¦¾à¦—à§€, à¦¸à¦®à¦¾à¦œà¦¸à§‡à¦¬à§€ à¦“ à¦¬à¦¿à¦¤à§à¦¤à¦¶à¦¾à¦²à§€ à¦–à§à¦¯à¦¾à¦¤à¦¨à¦¾à¦®à¦¾ à¦¬à§à¦¯à¦¾à¦•à§à¦¤à¦¿ à¦®à¦°à¦¹à§à¦® à¦†à¦²à¦¹à¦¾à¦œà§à¦œ à¦šà¦¾à¦¨à§à¦¦à¦®à¦¿à§Ÿà¦¾ à¦¸à¦“à¦¦à¦¾à¦—à¦° à¦•à¦°à§à¦¤à§ƒà¦• à§§à§¯à§§à§© à¦‡à¦‚à¦°à§‡à¦œà¦¿ à¦¸à¦¾à¦²à§‡ à¦à¦Ÿà¦¿ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦¹à§Ÿà§‡ à¦¸à§à¦¦à§€à¦°à§à¦˜ à§§à§¦à§¦ à¦¬à¦›à¦°à§‡à¦°à¦“ à¦¬à§‡à¦¶à¦¿ à¦¸à¦®à§Ÿ à¦§à¦°à§‡ à¦¸à¦®à¦—à§à¦° à¦¦à§‡à¦¶ à¦¤à¦¥à¦¾ à¦¸à¦¾à¦°à¦¾ à¦¬à¦¿à¦¶à§à¦¬à¦¬à§à¦¯à¦¾à¦ªà§€ à¦œà§à¦žà¦¾à¦¨à§‡à¦° à¦†à¦²à§‹ à¦¬à¦¿à¦¤à¦°à¦£à§‡ à¦à¦Ÿà¦¿ à¦…à¦¨à¦¬à¦¦à§à¦¯ à¦­à§‚à¦®à¦¿à¦•à¦¾ à¦°à§‡à¦–à§‡ à¦šà¦²à§‡à¦›à§‡à¥¤ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€, à¦¦à¦¾à¦–à¦¿à¦², à¦†à¦²à¦¿à¦®, à¦«à¦¾à¦¯à¦¿à¦² (à¦ªà¦¾à¦¸ à¦“ à¦…à¦¨à¦¾à¦°à§à¦¸) à¦à¦¬à¦‚ à¦•à¦¾à¦®à¦¿à¦² à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦ à§«à¦Ÿà¦¿ à¦¸à§à¦¤à¦° à¦à¦–à¦¾à¦¨à§‡ à¦šà¦²à¦®à¦¾à¦¨ à¦°à§Ÿà§‡à¦›à§‡'),
('Jamalkhan', 'Khastagir.jpg', 'Dr. Khastagir Government Girls High School', '95', 'School', 'Dr. Khastagir Government Girls High School is a secondary school in Chittagong, Bangladesh. It is near Jamal Khan, in the central part of the city. It is a large girls school, established by Annadacharan Khastagir, a pioneer in womens education in Chittagong during the late 19th century'),
('kalamiaBazar', 'Kamale Ishq-e Mustafa (SM) Alim Madrasah.jpg', 'Kamale Ishq-e Mustafa (SM) Alim Madrasah', '75', 'Madrasha', 'one of the best Religious school in Chittagong'),
('Chawkbazar', 'kapashgola.jpg', 'Kapasgola City Corporation Girls High School', '70', 'School', 'This the best girls high school in chittagong. We provide best teaching in the city'),
('Chawkbazar', 'download (1).jpg', 'Govt. Hazi Muhammad Mohsin College', '87', 'College', 'Government Hazi Mohammad Mohsin College is a government-run college located in Chittagong, Bangladesh. Named after Muhammad Mohsin, a 19th-century philanthropist, it is one of the oldest educational institutions in the country.'),
('Chawkbazar', 'bigganclg.jpg', 'Chattagram Biggan College', '86', 'College', 'Chattagram Biggan College(CBC) fully digitalized college in chittagong. CBC is located in the separate area in the college building with air conditioned â€¦ standard way of studies through a fully digitalized(visualized) classrooms.'),
('Lalkhan Bazar', 'jl.jpg', 'Jamiatul-Ulum-al-Islamia Madrasa', '65', 'Madrasha', 'Jamiatul Uloom Al-Islamia Lalkhan Bazar, popularly known as Lalkhan Bazar Madrasah, is a well-known Qawmi madrasah situated in the Lalkhan Bazar area of port city Chittagong. '),
('GEC', 'ispahani.jpg', 'Ispahani Public School and College', '87', 'School', 'Ispahani Public School & College, Chittagong commonly referred to as IPSC is a private educational institution on Zakir Hossain Road in Chittagong, Bangladesh. This college is one of the top 5 colleges of Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`fname`, `lname`, `pass`, `email`, `mobile`) VALUES
('Saimon', 'Akram', '054396ecf5a1526d3350cd73d563cf43', 'anika@gmail.com', '1832801156'),
('Akash', 'Kumar Sushil', '054396ecf5a1526d3350cd73d563cf43', 'hasan@gmail.com', '1832801156'),
('Saimon', 'Akram', '054396ecf5a1526d3350cd73d563cf43', 'hasan@gmail.coM1', '183280115'),
('Saimon', 'Akram', '054396ecf5a1526d3350cd73d563cf43', 'saimon@gmail.com', '1832801156'),
('Saimon', 'Akram', '054396ecf5a1526d3350cd73d563cf43', 'Umair@gmail.com', '183280115');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbarea`
--
ALTER TABLE `tbarea`
  ADD UNIQUE KEY `area` (`area`);

--
-- Indexes for table `tbbooks`
--
ALTER TABLE `tbbooks`
  ADD PRIMARY KEY (`bookTitile`,`year`);

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD KEY `subject` (`subject`);

--
-- Indexes for table `tbnotice`
--
ALTER TABLE `tbnotice`
  ADD PRIMARY KEY (`titile`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbnotice`
--
ALTER TABLE `tbnotice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
