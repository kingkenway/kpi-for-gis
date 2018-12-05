-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 04:37 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `overall`
--

CREATE TABLE `overall` (
  `id` int(6) UNSIGNED NOT NULL,
  `head` varchar(256) NOT NULL,
  `taskid` varchar(256) NOT NULL,
  `usersection` varchar(256) NOT NULL,
  `task` varchar(256) NOT NULL,
  `solution` varchar(256) NOT NULL,
  `thestatus` varchar(256) NOT NULL,
  `complete` varchar(256) NOT NULL,
  `priority` varchar(256) NOT NULL,
  `dateofentry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timeofentry` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estimatedtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dateoftaskacceptance` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timeoftaskacceptance` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timeresponse` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dueday` text NOT NULL,
  `taskexpirydate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `alertnotification` text NOT NULL,
  `lengthofresponse` text NOT NULL,
  `resourcesused` text NOT NULL,
  `constraints` text NOT NULL,
  `assignedto` text NOT NULL,
  `timedelivery` text NOT NULL,
  `comments` text NOT NULL,
  `total` text NOT NULL,
  `correctnessoftask` text NOT NULL,
  `commentbysupervisor` text NOT NULL,
  `overalltotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overall`
--

INSERT INTO `overall` (`id`, `head`, `taskid`, `usersection`, `task`, `solution`, `thestatus`, `complete`, `priority`, `dateofentry`, `timeofentry`, `estimatedtime`, `dateoftaskacceptance`, `timeoftaskacceptance`, `timeresponse`, `dueday`, `taskexpirydate`, `alertnotification`, `lengthofresponse`, `resourcesused`, `constraints`, `assignedto`, `timedelivery`, `comments`, `total`, `correctnessoftask`, `commentbysupervisor`, `overalltotal`) VALUES
(1, 'HOD Balogun', 'GIS01', 'Field Survey', '', '', 'In Progress', 'Completed but not tested', '', '2018-12-05 03:22:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '', 'Low', '', '', '', '', '', 0),
(2, 'HOD Balogun', 'GIS02', 'Data Editor', 'AJIRAN_OFFSET.gdb.zip, FOLA_OSIBO_OFFSET.gdb.zip, and LADI_ALAKIJA_OFFSET.gdb.zip', 'Work on Fola Osio Offset has begun. It started yesterday due to inadequate imagery to carry out the task. ', 'Completed', 'Completed', 'High', '2018-12-04 15:42:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'FOUR DAYS', '0000-00-00 00:00:00', '', '7', '(1) ArcMap Software (2) Google Earth Pro Software (3) Digital  Imagery for the field area ', '(1) Inadequate Imagery (2) Power failure (3) Over saturated wrong data', 'Highest', '', '', '', '', '', 0),
(3, 'HOD Balogun', 'GIS02', 'Server Manager', 'AJIRAN_OFFSET.gdb.zip, FOLA_OSIBO_OFFSET.gdb.zip, and LADI_ALAKIJA_OFFSET.gdb.zip', 'Work on Fola Osio Offset has begun. It started yesterday due to inadequate imagery to carry out the task. ', 'Completed', 'Completed', 'High', '2018-12-04 15:42:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'FOUR DAYS', '0000-00-00 00:00:00', '', '7', '(1) ArcMap Software (2) Google Earth Pro Software (3) Digital  Imagery for the field area ', '(1) Inadequate Imagery (2) Power failure (3) Over saturated wrong data', 'Highest', '', '', '', '', '', 0),
(4, 'CTO', 'GIS03', 'Data Analyst', 'X', 'XX', 'Cancelled', 'Midway', 'Low', '2018-12-05 01:39:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'FOUR DAYS', '0000-00-00 00:00:00', '', '7', '(1) ArcMap Software (2) Google Earth Pro Software (3) Digital  Imagery for the field area ', '(1) Inadequate Imagery (2) Power failure (3) Over saturated wrong data', 'Urgent', '', '', '', '', '', 0),
(5, 'CTO', 'GIS03', 'Field Survery', 'X', 'XX', 'Cancelled', 'Midway', 'Low', '2018-12-04 15:41:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'FOUR DAYS', '0000-00-00 00:00:00', '', '7', '(1) ArcMap Software (2) Google Earth Pro Software (3) Digital  Imagery for the field area ', '(1) Inadequate Imagery (2) Power failure (3) Over saturated wrong data', 'Urgent', '', '', '', '', '', 0),
(6, 'CTO', 'GIS03', 'Field Survery', 'X', 'XX', 'Cancelled', 'Midway', 'Low', '2018-12-04 15:53:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'FOUR DAYS', '0000-00-00 00:00:00', '', '7', '(1) ArcMap Software (2) Google Earth Pro Software (3) Digital  Imagery for the field area ', '(1) Inadequate Imagery (2) Power failure (3) Over saturated wrong data', 'Urgent', '', '', '', '', '', 0),
(7, 'CTO', 'GIS04', 'Carthography', 'aaa bbb ccc', 'qqq www eee rrr ttt yyy uuu', 'In Progress', 'Midway', 'Urgent', '2018-12-05 01:41:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'TWO DAYS', '0000-00-00 00:00:00', '', '6', 'Google Earth Pro Software', 'Digital  Imagery for the field area ', 'Urgent', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `overall`
--
ALTER TABLE `overall`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `overall`
--
ALTER TABLE `overall`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
