-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 09:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javaProject`
--

-- --------------------------------------------------------

--
-- Table structure for table `AOFAS`
--

CREATE TABLE `AOFAS` (
  `P1` int(11) DEFAULT NULL,
  `F1` int(11) DEFAULT NULL,
  `F2` int(11) DEFAULT NULL,
  `F3` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `AOS`
--

CREATE TABLE `AOS` (
  `P1` int(11) DEFAULT NULL,
  `P2` int(11) DEFAULT NULL,
  `P3` int(11) DEFAULT NULL,
  `P4` int(11) DEFAULT NULL,
  `P5` int(11) DEFAULT NULL,
  `P6` int(11) DEFAULT NULL,
  `P7` int(11) DEFAULT NULL,
  `P8` int(11) DEFAULT NULL,
  `P9` int(11) DEFAULT NULL,
  `D1` int(11) DEFAULT NULL,
  `D2` int(11) DEFAULT NULL,
  `D3` int(11) DEFAULT NULL,
  `D4` int(11) DEFAULT NULL,
  `D5` int(11) DEFAULT NULL,
  `D6` int(11) DEFAULT NULL,
  `D7` int(11) DEFAULT NULL,
  `D8` int(11) DEFAULT NULL,
  `D9` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date NOT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ATRS`
--

CREATE TABLE `ATRS` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `BackAndLegPain`
--

CREATE TABLE `BackAndLegPain` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `BOSTON`
--

CREATE TABLE `BOSTON` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date NOT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `COFAS`
--

CREATE TABLE `COFAS` (
  `P1` int(11) DEFAULT NULL,
  `P2` int(11) DEFAULT NULL,
  `P5` int(11) DEFAULT NULL,
  `D1` int(11) DEFAULT NULL,
  `D3` int(11) DEFAULT NULL,
  `D6` int(11) DEFAULT NULL,
  `D7` int(11) DEFAULT NULL,
  `D9` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date NOT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EQ5D`
--

CREATE TABLE `EQ5D` (
  `hospitalNumber` int(11) DEFAULT NULL,
  `howIsHealth` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EQ5D3`
--

CREATE TABLE `EQ5D3` (
  `Mobility` int(11) DEFAULT NULL,
  `Self-Care` int(11) DEFAULT NULL,
  `Usual Activities` int(11) DEFAULT NULL,
  `Pain / Discomfort` int(11) DEFAULT NULL,
  `Anxiety / Depression` int(11) DEFAULT NULL,
  `hospitalNumber` varchar(100) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EQ5D5`
--

CREATE TABLE `EQ5D5` (
  `Mobility` int(11) DEFAULT NULL,
  `Self Care` int(11) DEFAULT NULL,
  `Usual Activities` int(11) DEFAULT NULL,
  `Pain/Discomfort` int(11) DEFAULT NULL,
  `Anxiety/Depression` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `footAndAnkelOutcome`
--

CREATE TABLE `footAndAnkelOutcome` (
  `Q1` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iHOT12`
--

CREATE TABLE `iHOT12` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `IKDC`
--

CREATE TABLE `IKDC` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9a` int(11) DEFAULT NULL,
  `Q9b` int(11) DEFAULT NULL,
  `Q9c` int(11) DEFAULT NULL,
  `Q9d` int(11) DEFAULT NULL,
  `Q9e` int(11) DEFAULT NULL,
  `Q9f` int(11) DEFAULT NULL,
  `Q9g` int(11) DEFAULT NULL,
  `Q9h` int(11) DEFAULT NULL,
  `Q9i` int(11) DEFAULT NULL,
  `Q10a` int(11) DEFAULT NULL,
  `Q10b` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keenOutcome`
--

CREATE TABLE `keenOutcome` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` varchar(100) DEFAULT NULL,
  `Q3` varchar(100) DEFAULT NULL,
  `Q4` varchar(100) DEFAULT NULL,
  `Q5` varchar(100) DEFAULT NULL,
  `Q6` varchar(100) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `KOOS`
--

CREATE TABLE `KOOS` (
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `P1` int(11) DEFAULT NULL,
  `P2` int(11) DEFAULT NULL,
  `P3` int(11) DEFAULT NULL,
  `P4` int(11) DEFAULT NULL,
  `P5` int(11) DEFAULT NULL,
  `P6` int(11) DEFAULT NULL,
  `P7` int(11) DEFAULT NULL,
  `P8` int(11) DEFAULT NULL,
  `P9` int(11) DEFAULT NULL,
  `A1` int(11) DEFAULT NULL,
  `A2` int(11) DEFAULT NULL,
  `A3` int(11) DEFAULT NULL,
  `A4` int(11) DEFAULT NULL,
  `A5` int(11) DEFAULT NULL,
  `A6` int(11) DEFAULT NULL,
  `A7` int(11) DEFAULT NULL,
  `A8` int(11) DEFAULT NULL,
  `A9` int(11) DEFAULT NULL,
  `A10` int(11) DEFAULT NULL,
  `A11` int(11) DEFAULT NULL,
  `A12` int(11) DEFAULT NULL,
  `A13` int(11) DEFAULT NULL,
  `A14` int(11) DEFAULT NULL,
  `A15` int(11) DEFAULT NULL,
  `A16` int(11) DEFAULT NULL,
  `A17` int(11) DEFAULT NULL,
  `SP1` int(11) DEFAULT NULL,
  `SP2` int(11) DEFAULT NULL,
  `SP3` int(11) DEFAULT NULL,
  `SP4` int(11) DEFAULT NULL,
  `SP5` int(11) DEFAULT NULL,
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KOOS`
--

INSERT INTO `KOOS` (`S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `A11`, `A12`, `A13`, `A14`, `A15`, `A16`, `A17`, `SP1`, `SP2`, `SP3`, `SP4`, `SP5`, `Q1`, `Q2`, `Q3`, `Q4`, `hospitalNumber`, `answeredDate`, `code`, `comment`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 123, '1996-11-11', NULL, NULL),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 153174978, '0000-00-02', NULL, NULL),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 22, 2, 1234, '0000-00-00', NULL, NULL),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 789789, '0000-00-00', NULL, NULL),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 789789, '0000-00-00', 154, NULL),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 234234, '0000-00-00', 142, '2dadadsasd'),
(9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 789, '2018-00-02', 142, 'asdbjk');

-- --------------------------------------------------------

--
-- Table structure for table `MDI`
--

CREATE TABLE `MDI` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MDI`
--

INSERT INTO `MDI` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `hospitalNumber`, `answeredDate`, `code`, `comment`) VALUES
(3, 3, 3, 3, 3, 3, 2, 2, 1, 2, 153174978, '1955-06-09', NULL, NULL),
(3, 2, 1, 1, 0, 1, 2, 1, 3, 2, 1234, '2015-00-00', NULL, NULL),
(3, 2, 1, 2, 2, 3, 2, 2, 3, 2, 0, '2018-06-05', NULL, NULL),
(2, 2, 2, 3, 2, 3, 2, 3, 2, 3, 234234, '2015-00-00', NULL, NULL),
(3, 2, 1, 1, 2, 3, 1, 3, 0, 2, 789789, '2015-00-00', 154, NULL),
(2, 1, 3, 1, 1, 3, 1, 1, 3, 0, 234234, '2015-00-00', 142, 'jjhjghjgjhh'),
(3, 0, 3, 0, 3, 0, 3, 0, 3, 0, 789, '2019-00-03', 142, 'askdlj');

-- --------------------------------------------------------

--
-- Table structure for table `MOXFQ`
--

CREATE TABLE `MOXFQ` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `Q13` int(11) DEFAULT NULL,
  `Q14` int(11) DEFAULT NULL,
  `Q15` int(11) DEFAULT NULL,
  `Q16` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MOXFQ`
--

INSERT INTO `MOXFQ` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `hospitalNumber`, `answeredDate`, `code`, `comment`) VALUES
(4, 3, 4, 3, 4, 1, 4, 3, 1, 3, 2, 4, 3, 4, 2, 4, 153174978, '1955-02-03', NULL, NULL),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 456, '1953-08-04', NULL, NULL),
(4, 2, 2, 2, 2, 4, 2, 2, 3, 3, 3, 3, 3, 4, 2, 2, 5678, '2015-04-05', NULL, NULL),
(4, 3, 2, 1, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 1234, '2015-00-00', NULL, NULL),
(4, 3, 2, 1, 3, 2, 1, 3, 3, 3, 3, 3, 3, 3, 4, 3, 1234, '2015-00-00', NULL, NULL),
(4, 2, 2, 3, 2, 1, 1, 2, 2, 2, 2, 2, 3, 2, 2, 0, 789789, '2015-00-00', NULL, NULL),
(4, 2, 2, 3, 2, 1, 1, 2, 2, 2, 2, 2, 3, 2, 2, 0, 789789, '2015-00-00', 154, NULL),
(4, 1, 4, 0, 1, 0, 0, 1, 4, 0, 2, 4, 2, 2, 3, 1, 234234, '2015-00-00', 142, 'vnvnvvnb'),
(4, 2, 1, 1, 1, 4, 0, 3, 1, 3, 2, 1, 4, 1, 4, 0, 888, '2015-02-04', 248, 'adskjl'),
(0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 789, '2018-00-03', 142, 'adâ‰¤jk');

-- --------------------------------------------------------

--
-- Table structure for table `NAHSR`
--

CREATE TABLE `NAHSR` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `Q13` int(11) DEFAULT NULL,
  `Q14` int(11) DEFAULT NULL,
  `Q15` int(11) DEFAULT NULL,
  `Q16` int(11) DEFAULT NULL,
  `Q17` int(11) DEFAULT NULL,
  `Q18` int(11) DEFAULT NULL,
  `Q19` int(11) DEFAULT NULL,
  `Q20` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NAHSR`
--

INSERT INTO `NAHSR` (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `hospitalNumber`, `answeredDate`, `code`, `comment`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 123, '1996-11-11', NULL, NULL),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 123, '1996-11-11', NULL, NULL),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 123, '1996-11-11', NULL, NULL),
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 153174978, '2015-00-00', NULL, NULL),
(0, 2, 2, 2, 0, 4, 3, 1, 1, 0, 2, 2, 3, 3, 4, 0, 2, 0, 2, 0, 1234, '2018-00-00', NULL, NULL),
(2, 4, 2, 0, 3, 4, 0, 0, 4, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 3, 789789, '2015-00-00', 154, NULL),
(3, 3, 1, 3, 0, 4, 2, 0, 4, 4, 0, 3, 1, 0, 3, 3, 3, 0, 4, 3, 234234, '2015-00-00', 142, 'nnvnbvnbvbvnbv'),
(4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 4, 0, 789, '2018-02-03', 142, 'jkhkj');

-- --------------------------------------------------------

--
-- Table structure for table `NAHSRpatientSatisfaction`
--

CREATE TABLE `NAHSRpatientSatisfaction` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` varchar(100) DEFAULT NULL,
  `Q3` varchar(100) DEFAULT NULL,
  `Q4` varchar(100) DEFAULT NULL,
  `Q5` varchar(100) DEFAULT NULL,
  `Q6` varchar(100) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `NDI`
--

CREATE TABLE `NDI` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `NeckAndArmPain`
--

CREATE TABLE `NeckAndArmPain` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ODI`
--

CREATE TABLE `ODI` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OES`
--

CREATE TABLE `OES` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OHS`
--

CREATE TABLE `OHS` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OKSandAandP`
--

CREATE TABLE `OKSandAandP` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OPERATION`
--

CREATE TABLE `OPERATION` (
  `PROCUDURE` varchar(200) DEFAULT NULL,
  `CODE` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OPERATION`
--

INSERT INTO `OPERATION` (`PROCUDURE`, `CODE`) VALUES
('First metatarsal osteotomy - Chevron', 256),
('First metatarsal osteotomy - Scarf', 303),
('First metatarsal osteotomy - Other', 305),
('Akin osteotomy of proximal phalanx great toe', 596),
('First MTPJ soft tissue correction', 259),
('First MTPJ arthrodesis', 257),
('First MTPJ excision arthroplasty', 258),
('First MTPJ replacement arthroplasty (silastic or other)', 347),
('First MTPJ cheilectomy', 602),
('Gastrocnemius lengthening', 582),
('GPS Injection for plantar fasciitis', 612),
('Arthroplasty ankle', 245),
('Ankle cheilectomy', 593),
('Arthrodesis ankle - open', 246),
('Arthrodesis ankle - arthroscopic', 579),
('Tibia or fibula malunion correction or other deformity', 327),
('Ankle - lateral ligament repair (Bostrom\'s)', 342),
('Arthroscopy ankle therapeutic', 248),
('Tibialis posterior reconstruction', 591),
('Tendo achilles reconstruction', 581),
('Irrigation and debridement prosthesis for infection - ankle', 397),
('Irrigation and debridement native joint for infection - ankle', 398),
('Arthroscopy diagnostic - shoulder', 162),
('Arthroscopic therapeutic procedure other than ASD or repair', 164),
('Arthroscopic subacromial decompression', 163),
('Arthroscopic arthrolysis for capsulitis of shoulder', 407),
('Arthroscopic biceps tenodesis', 543),
('Rotator cuff repair (arthroscopic) +/- acromioplasty', 409),
('Acromioclavicular joint excision - arthroscopic / open / lateral clavicle', 158),
('Acromioplasty open', 157),
('Rotator cuff repair (open) +/- acromioplasty', 408),
('Anterior repair for instability open including capsular shift', 160),
('Anterior repair for instability arthroscopic', 161),
('Posterior repair for instability including capsular shift', 166),
('Hemiarthroplasty shoulder (elective)', 165),
('Total Shoulder replacement', 169),
('Shoulder replacement revision', 335),
('Reverse polarity (Inverse) shoulder replacement', 544),
('Endoprosthetic replacement for malignant bone tumour - humerus', 546),
('Irrigation and debridement prosthesis for infection - shoulder', 372),
('Arthrolysis elbow (open/arthroscopic)', 171),
('Arthroscopy elbow diagnostic', 172),
('Arthroscopy elbow therapeutic', 173),
('Arthrotomy elbow', 174),
('Excision radial head +/- synovectomy', 175),
('OK procedure', 368),
('Tennis / Golfer elbow release', 177),
('Total Elbow replacement', 178),
('Total elbow replacement - aseptic revision', 353),
('Total elbow replacement revision 1st stage', 354),
('Total elbow replacement revision 2nd stage', 355),
('Total elbow replacement for trauma', 356),
('Irrigation and debridement prosthesis for infection - elbow', 448),
('Trapezium excision or replacement', 199),
('Dupuytrens contracture operation -other', 191),
('Dupuytrens contracture operation - dermofasciectomy', 336),
('Dupuytren\'s contracture operation - primary single digit', 559),
('Dupuytren\'s contracture operation - primary multiple digits', 560),
('Dupuytren\'s contracture operation - recurrent single digit ', 561),
('Dupuytren\'s contracture operation - recurrent multiple digits', 562),
('MCPJ replacement', 194),
('PIPJ replacement - hand (silastic)', 556),
('PIPJ replacement - hand (other)', 557),
('Carpal tunnel decompression', 183),
('Proximal row carpectomy ', 411),
('Arthrodesis wrist (includes partial arthrodesis)', 182),
('Latarjet procedure', 540),
('Irrigation and debridement native joint for infection - shoulder', 373),
('Balloon Arthroplasty', 11),
('Osteotomy hip - pelvic for DDH', 210),
('Arthroscopy hip - therapeutic', 206),
('Anterior decompression +/- fixation / fusion (C2 - C7)', 138),
('Posterior decompression +/- fixation / fusion (C2 - C7)', 142),
('Cervical disc replacement', 510),
('Revision cervical disectomy', 511),
('Cervical vertebrectomy for myelopathy', 517),
('Biopsy thoracic spine', 147),
('Vertebroplasty thoracic spine', 427),
('Decompression lumbar spine with fusion +/- fixation', 154),
('TLIF', 532),
('PLIF', 533),
('ALIF', 534),
('XLIF', 10),
('Discectomy open / micro lumbar spine', 152),
('Decompression lumbar spine without fusion (not discectomy alone)', 153),
('Vertebroplasty lumbar spine', 431),
('Revision lumbar discectomy', 529),
('Lumbar disc replacement', 531),
('Coccygectomy', 536),
('Osteotomy distal femoral', 234),
('Osteotomy proximal tibial', 235),
('Arthroscopy knee diagnostic', 228),
('Abrasion arthroplasty / microfracture - knee', 422),
('Acute haemarthrosis arthroscopy', 95),
('Meniscal repair (arthroscopic)', 392),
('Arthroscopic menisectomy', 229),
('Arthroscopic removal loose bodies knee', 230),
('Arthroscopic lateral release', 231),
('Arthroscopic synovectomy', 232),
('Arthroscopy knee other therapeutic procedure', 233),
('Arthroscopic excision of Hoffa\'s fat pad', 585),
('Osteochondral allografting - knee', 419),
('Mosaicplasty - knee', 421),
('ACL reconstruction', 227),
('Revision ACL reconstruction', 589),
('ACL thermal shrinkage', 590),
('PCL reconstruction', 416),
('Acute ligament repair', 96),
('Quadriceps tendon repair', 104),
('Patella tendon repair', 103),
('Meniscal repair (open)', 391),
('TKR', 240),
('Unicompartmental knee replacement', 241),
('Patello-femoral joint replacement', 418),
('Patella resurfacing alone', 239),
('Single stage revision TKR', 236),
('1 stg of 2 stg rev infected TKR - removal of prosthesis +_ insertion of cement spacer / antibiotic beads', 423),
('2 stg of 2 stg rev infected TKR - removal of spacer/beads, insertion of prosthesis', 424),
('Revision TKR for periprosthetic fracture of knee', 396),
('Irrigation and debridement prosthesis for infection - knee', 393),
('THR cemented', 218),
('THR uncemented', 219),
('THR hybrid', 220),
('THR surface replacement', 221),
('Intracapsular fracture THR', 82),
('Dislocated total hip replacement - closed reduction', 86),
('Dislocated total hip replacement - open reduction', 360),
('Irrigation and debridement prosthesis for infection - hip', 387),
('Single stage revision THR femoral component', 213),
('Single stage revision THR acetabular component', 214),
('Single stage revision THR both components', 215),
('Revision THR for periprosthetic fracture of hip', 386),
('1 stg of 2 stg rev infected THR - removal of prosthesis +_ insertion of cement spacer / antibiotic beads', 414),
('2 stg of 2 stg rev infected THR - removal of spacer/beads, insertion of prosthesis', 415),
('Excision arthroplasty hip', 208),
('Irrigation and debridement native joint for infection - hip', 388);

-- --------------------------------------------------------

--
-- Table structure for table `OSI`
--

CREATE TABLE `OSI` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OSS`
--

CREATE TABLE `OSS` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OxfordKeenScore`
--

CREATE TABLE `OxfordKeenScore` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `Q12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `painVAS`
--

CREATE TABLE `painVAS` (
  `Q1` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientINFO`
--

CREATE TABLE `patientINFO` (
  `title` varchar(20) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `hospitalNumber` varchar(100) NOT NULL,
  `nhsNumber` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `dateOfOperation` date DEFAULT NULL,
  `operation` varchar(100) DEFAULT NULL,
  `side` varchar(100) DEFAULT NULL,
  `forename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PEM`
--

CREATE TABLE `PEM` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `QDASH` text,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PEMpost`
--

CREATE TABLE `PEMpost` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `POST1` int(11) DEFAULT NULL,
  `POST2` int(11) DEFAULT NULL,
  `POST3` int(11) DEFAULT NULL,
  `POST4` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `QDASH`
--

CREATE TABLE `QDASH` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `Q10` int(11) DEFAULT NULL,
  `Q11` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RELATION`
--

CREATE TABLE `RELATION` (
  `NUHNUMBER` varchar(30) DEFAULT NULL,
  `CODE` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RELATION2`
--

CREATE TABLE `RELATION2` (
  `CODE` varchar(100) DEFAULT NULL,
  `PREQUESTION` varchar(30) DEFAULT NULL,
  `numberOfAsking` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RELATION2`
--

INSERT INTO `RELATION2` (`CODE`, `PREQUESTION`, `numberOfAsking`) VALUES
('257', 'painVAS', NULL),
('257', 'MOXFQ', NULL),
('257', 'EQ5D3', NULL),
('257', 'EQ5D', NULL),
('259', 'footAndAnkelOutcome', NULL),
('259', 'painVAS', NULL),
('259', 'MOXFQ', NULL),
('259', 'EQ5D3', NULL),
('259', 'EQ5D', NULL),
('596', 'MOXFQ', NULL),
('596', 'painVAS', NULL),
('596', 'footAndAnkelOutcome', NULL),
('305', 'footAndAnkelOutcome', NULL),
('596', 'EQ5D3', NULL),
('596', 'EQ5D', NULL),
('596', 'painVAS', NULL),
('305', 'EQ5D3', NULL),
('305', 'EQ5D', NULL),
('305', 'painVAS', NULL),
('305', 'MOXFQ', NULL),
('303', 'footAndAnkelOutcome', NULL),
('303', 'MOXFQ', NULL),
('303', 'painVAS', NULL),
('303', 'EQ5D', NULL),
('303', 'EQ5D3', NULL),
('258', 'EQ5D3', NULL),
('258', 'EQ5D', NULL),
('257', 'footAndAnkelOutcome', NULL),
('256', 'footAndAnkelOutcome', NULL),
('256', 'MOXFQ', NULL),
('256', 'painVAS', NULL),
('256', 'EQ5D3', NULL),
('256', 'EQ5D', NULL),
('258', 'MOXFQ', NULL),
('258', 'painVAS', NULL),
('258', 'footAndAnkelOutcome', NULL),
('347', 'EQ5D', NULL),
('347', 'EQ5D3', NULL),
('347', 'MOXFQ', NULL),
('347', 'painVAS', NULL),
('347', 'footAndAnkelOutcome', NULL),
('602', 'EQ5D', NULL),
('602', 'EQ5D3', NULL),
('602', 'MOXFQ', NULL),
('602', 'painVAS', NULL),
('602', 'footAndAnkelOutcome', NULL),
('582', 'EQ5D', NULL),
('582', 'EQ5D3', NULL),
('582', 'MOXFQ', NULL),
('582', 'painVAS', NULL),
('582', 'footAndAnkelOutcome', NULL),
('612', 'EQ5D', NULL),
('612', 'EQ5D3', NULL),
('612', 'MOXFQ', NULL),
('612', 'painVAS', NULL),
('612', 'footAndAnkelOutcome', NULL),
('162', 'EQ5D', NULL),
('162', 'EQ5D3', NULL),
('162', 'OSS', NULL),
('162', 'QDASH', NULL),
('164', 'EQ5D', NULL),
('164', 'EQ5D3', NULL),
('164', 'OSS', NULL),
('164', 'QDASH', NULL),
('163', 'EQ5D', NULL),
('163', 'EQ5D3', NULL),
('163', 'OSS', NULL),
('163', 'QDASH', NULL),
('407', 'EQ5D', NULL),
('407', 'EQ5D3', NULL),
('407', 'OSS', NULL),
('407', 'QDASH', NULL),
('543', 'EQ5D', NULL),
('543', 'EQ5D3', NULL),
('543', 'OSS', NULL),
('543', 'QDASH', NULL),
('409', 'EQ5D', NULL),
('409', 'EQ5D3', NULL),
('409', 'OSS', NULL),
('409', 'QDASH', NULL),
('158', 'EQ5D', NULL),
('158', 'EQ5D3', NULL),
('158', 'OSS', NULL),
('158', 'QDASH', NULL),
('157', 'EQ5D', NULL),
('157', 'EQ5D3', NULL),
('157', 'OSS', NULL),
('157', 'QDASH', NULL),
('408', 'EQ5D', NULL),
('408', 'EQ5D3', NULL),
('408', 'OSS', NULL),
('408', 'QDASH', NULL),
('160', 'EQ5D', NULL),
('160', 'EQ5D3', NULL),
('160', 'OSI', NULL),
('160', 'QDASH', NULL),
('161', 'EQ5D', NULL),
('161', 'EQ5D3', NULL),
('161', 'OSI', NULL),
('161', 'QDASH', NULL),
('166', 'EQ5D', NULL),
('166', 'EQ5D3', NULL),
('166', 'OSI', NULL),
('166', 'QDASH', NULL),
('165', 'OSS', NULL),
('165', 'EQ5D3', NULL),
('165', 'EQ5D', NULL),
('169', 'QDASH', NULL),
('169', 'OSS', NULL),
('169', 'EQ5D3', NULL),
('169', 'EQ5D', NULL),
('165', 'QDASH', NULL),
('335', 'EQ5D', NULL),
('335', 'EQ5D3', NULL),
('335', 'OSS', NULL),
('335', 'QDASH', NULL),
('544', 'EQ5D', NULL),
('544', 'EQ5D3', NULL),
('544', 'OSS', NULL),
('544', 'QDASH', NULL),
('546', 'EQ5D', NULL),
('546', 'EQ5D3', NULL),
('546', 'OSS', NULL),
('546', 'QDASH', NULL),
('372', 'EQ5D', NULL),
('372', 'EQ5D3', NULL),
('372', 'OSS', NULL),
('372', 'QDASH', NULL),
('171', 'EQ5D', NULL),
('171', 'EQ5D3', NULL),
('171', 'OES', NULL),
('171', 'QDASH', NULL),
('172', 'EQ5D', NULL),
('172', 'EQ5D3', NULL),
('172', 'OES', NULL),
('172', 'QDASH', NULL),
('173', 'EQ5D', NULL),
('173', 'EQ5D3', NULL),
('173', 'OES', NULL),
('173', 'QDASH', NULL),
('174', 'EQ5D', NULL),
('174', 'EQ5D3', NULL),
('174', 'OES', NULL),
('174', 'QDASH', NULL),
('175', 'EQ5D', NULL),
('175', 'EQ5D3', NULL),
('175', 'OES', NULL),
('175', 'QDASH', NULL),
('368', 'EQ5D', NULL),
('368', 'EQ5D3', NULL),
('368', 'OES', NULL),
('368', 'QDASH', NULL),
('177', 'EQ5D', NULL),
('177', 'EQ5D3', NULL),
('177', 'OES', NULL),
('177', 'QDASH', NULL),
('178', 'EQ5D', NULL),
('178', 'EQ5D3', NULL),
('178', 'OES', NULL),
('178', 'QDASH', NULL),
('353', 'EQ5D', NULL),
('353', 'EQ5D3', NULL),
('353', 'OES', NULL),
('353', 'QDASH', NULL),
('354', 'EQ5D', NULL),
('354', 'EQ5D3', NULL),
('353', 'OES', NULL),
('354', 'QDASH', NULL),
('355', 'EQ5D', NULL),
('355', 'EQ5D3', NULL),
('353', 'OES', NULL),
('355', 'QDASH', NULL),
('356', 'EQ5D', NULL),
('356', 'EQ5D3', NULL),
('356', 'OES', NULL),
('356', 'QDASH', NULL),
('448', 'EQ5D', NULL),
('448', 'EQ5D3', NULL),
('448', 'OES', NULL),
('448', 'QDASH', NULL),
('199', 'EQ5D', NULL),
('199', 'EQ5D3', NULL),
('199', 'PEM', NULL),
('199', 'QDASH', NULL),
('191', 'EQ5D', NULL),
('191', 'EQ5D3', NULL),
('191', 'PEM', NULL),
('191', 'URAM', NULL),
('191', 'QDASH', NULL),
('336', 'EQ5D', NULL),
('336', 'EQ5D3', NULL),
('336', 'PEM', NULL),
('336', 'URAM', NULL),
('336', 'QDASH', NULL),
('559', 'EQ5D', NULL),
('559', 'EQ5D3', NULL),
('559', 'PEM', NULL),
('559', 'URAM', NULL),
('559', 'QDASH', NULL),
('560', 'EQ5D', NULL),
('560', 'EQ5D3', NULL),
('560', 'PEM', NULL),
('560', 'URAM', NULL),
('560', 'QDASH', NULL),
('561', 'EQ5D', NULL),
('561', 'EQ5D3', NULL),
('561', 'PEM', NULL),
('561', 'URAM', NULL),
('561', 'QDASH', NULL),
('562', 'EQ5D', NULL),
('562', 'EQ5D3', NULL),
('562', 'PEM', NULL),
('562', 'URAM', NULL),
('562', 'QDASH', NULL),
('194', 'EQ5D', NULL),
('194', 'EQ5D3', NULL),
('194', 'PEM', NULL),
('194', 'QDASH', NULL),
('556', 'EQ5D', NULL),
('556', 'EQ5D3', NULL),
('556', 'PEM', NULL),
('556', 'QDASH', NULL),
('557', 'EQ5D', NULL),
('557', 'EQ5D3', NULL),
('557', 'PEM', NULL),
('557', 'QDASH', NULL),
('411', 'EQ5D', NULL),
('411', 'EQ5D3', NULL),
('411', 'PEM', NULL),
('411', 'QDASH', NULL),
('182', 'EQ5D', NULL),
('182', 'EQ5D3', NULL),
('182', 'PEM', NULL),
('182', 'QDASH', NULL),
('183', 'EQ5D', NULL),
('183', 'EQ5D3', NULL),
('183', 'BOSTON', NULL),
('183', 'QDASH', NULL),
('540', 'EQ5D', NULL),
('540', 'EQ5D3', NULL),
('540', 'OSI', NULL),
('540', 'QDASH', NULL),
('373', 'EQ5D', NULL),
('373', 'EQ5D3', NULL),
('373', 'OSS', NULL),
('373', 'QDASH', NULL),
('11', 'EQ5D', NULL),
('11', 'EQ5D3', NULL),
('11', 'OSS', NULL),
('11', 'QDASH', NULL),
('210', 'EQ5D', NULL),
('210', 'EQ5D5', NULL),
('210', 'iHOT12', NULL),
('210', 'NAHSRpatientSatisfaction', NULL),
('210', 'UCLAactivity', NULL),
('210', 'NAHSR', NULL),
('206', 'EQ5D', NULL),
('206', 'EQ5D5', NULL),
('206', 'iHOT12', NULL),
('206', 'NAHSRpatientSatisfaction', NULL),
('206', 'UCLAactivity', NULL),
('206', 'NAHSR', NULL),
('234', 'EQ5D', NULL),
('234', 'EQ5D5', NULL),
('234', 'KOOS', NULL),
('234', 'OxfordKeenScore', NULL),
('234', 'OKSandAandP', NULL),
('234', 'keenOutcome', NULL),
('235', 'EQ5D', NULL),
('235', 'EQ5D5', NULL),
('235', 'KOOS', NULL),
('235', 'OxfordKeenScore', NULL),
('235', 'OKSandAandP', NULL),
('234', 'keenOutcome', NULL),
('228', 'EQ5D', NULL),
('228', 'EQ5D5', NULL),
('228', 'KOOS', NULL),
('228', 'OxfordKeenScore', NULL),
('228', 'OKSandAandP', NULL),
('228', 'keenOutcome', NULL),
('422', 'EQ5D', NULL),
('422', 'EQ5D5', NULL),
('422', 'KOOS', NULL),
('422', 'OxfordKeenScore', NULL),
('422', 'OKSandAandP', NULL),
('422', 'keenOutcome', NULL),
('95', 'EQ5D', NULL),
('95', 'EQ5D3', NULL),
('95', 'KOOS', NULL),
('95', 'keenOutcome', NULL),
('392', 'EQ5D', NULL),
('392', 'EQ5D3', NULL),
('392', 'KOOS', NULL),
('392', 'keenOutcome', NULL),
('228', 'EQ5D', NULL),
('228', 'EQ5D3', NULL),
('228', 'KOOS', NULL),
('228', 'keenOutcome', NULL),
('229', 'EQ5D', NULL),
('229', 'EQ5D3', NULL),
('229', 'KOOS', NULL),
('229', 'keenOutcome', NULL),
('230', 'EQ5D', NULL),
('230', 'EQ5D3', NULL),
('230', 'KOOS', NULL),
('230', 'keenOutcome', NULL),
('231', 'EQ5D', NULL),
('231', 'EQ5D3', NULL),
('231', 'KOOS', NULL),
('231', 'keenOutcome', NULL),
('232', 'EQ5D', NULL),
('232', 'EQ5D3', NULL),
('232', 'KOOS', NULL),
('232', 'keenOutcome', NULL),
('233', 'EQ5D', NULL),
('233', 'EQ5D3', NULL),
('233', 'KOOS', NULL),
('233', 'keenOutcome', NULL),
('585', 'EQ5D', NULL),
('585', 'EQ5D3', NULL),
('585', 'KOOS', NULL),
('585', 'keenOutcome', NULL),
('419', 'EQ5D', NULL),
('419', 'EQ5D3', NULL),
('419', 'KOOS', NULL),
('419', 'keenOutcome', NULL),
('421', 'EQ5D', NULL),
('421', 'EQ5D3', NULL),
('421', 'KOOS', NULL),
('421', 'keenOutcome', NULL),
('422', 'EQ5D', NULL),
('422', 'EQ5D3', NULL),
('422', 'KOOS', NULL),
('422', 'keenOutcome', NULL),
('589', 'TegnerActivity', NULL),
('589', 'EQ5D5', NULL),
('589', 'EQ5D', NULL),
('227', 'keenOutcome', NULL),
('227', 'KOOS', NULL),
('227', 'IKDC', NULL),
('227', 'TegnerActivity', NULL),
('227', 'EQ5D5', NULL),
('227', 'EQ5D', NULL),
('589', 'IKDC', NULL),
('589', 'KOOS', NULL),
('589', 'keenOutcome', NULL),
('590', 'EQ5D', NULL),
('590', 'EQ5D5', NULL),
('590', 'TegnerActivity', NULL),
('590', 'IKDC', NULL),
('590', 'KOOS', NULL),
('590', 'keenOutcome', NULL),
('96', 'EQ5D3', NULL),
('96', 'EQ5D', NULL),
('416', 'keenOutcome', NULL),
('416', 'KOOS', NULL),
('416', 'IKDC', NULL),
('416', 'TegnerActivity', NULL),
('416', 'EQ5D5', NULL),
('416', 'EQ5D', NULL),
('96', 'KOOS', NULL),
('96', 'keenOutcome', NULL),
('104', 'EQ5D', NULL),
('104', 'EQ5D3', NULL),
('104', 'KOOS', NULL),
('104', 'keenOutcome', NULL),
('103', 'EQ5D', NULL),
('103', 'EQ5D3', NULL),
('103', 'KOOS', NULL),
('103', 'keenOutcome', NULL),
('391', 'EQ5D', NULL),
('391', 'EQ5D3', NULL),
('391', 'KOOS', NULL),
('391', 'keenOutcome', NULL),
('138', 'EQ5D', NULL),
('138', 'EQ5D5', NULL),
('138', 'NDI', NULL),
('138', 'NeckAndArmPain', NULL),
('138', 'MDI', NULL),
('138', 'spineOutcome', NULL),
('142', 'EQ5D', NULL),
('142', 'EQ5D5', NULL),
('142', 'NDI', NULL),
('142', 'NeckAndArmPain', NULL),
('142', 'MDI', NULL),
('142', 'spineOutcome', NULL),
('510', 'EQ5D', NULL),
('510', 'EQ5D5', NULL),
('510', 'NDI', NULL),
('510', 'NeckAndArmPain', NULL),
('510', 'MDI', NULL),
('510', 'spineOutcome', NULL),
('511', 'EQ5D', NULL),
('511', 'EQ5D5', NULL),
('511', 'NDI', NULL),
('511', 'NeckAndArmPain', NULL),
('511', 'MDI', NULL),
('511', 'spineOutcome', NULL),
('517', 'EQ5D', NULL),
('517', 'EQ5D5', NULL),
('517', 'NDI', NULL),
('517', 'NeckAndArmPain', NULL),
('517', 'MDI', NULL),
('517', 'spineOutcome', NULL),
('147', 'EQ5D', NULL),
('147', 'EQ5D5', NULL),
('147', 'NDI', NULL),
('147', 'NeckAndArmPain', NULL),
('147', 'MDI', NULL),
('147', 'spineOutcome', NULL),
('427', 'EQ5D', NULL),
('427', 'EQ5D5', NULL),
('427', 'NDI', NULL),
('427', 'NeckAndArmPain', NULL),
('427', 'MDI', NULL),
('427', 'spineOutcome', NULL),
('154', 'EQ5D', NULL),
('154', 'EQ5D5', NULL),
('154', 'ODI', NULL),
('154', 'BackAndLegPain', NULL),
('154', 'spineOutcome', NULL),
('532', 'EQ5D', NULL),
('532', 'EQ5D5', NULL),
('532', 'ODI', NULL),
('532', 'BackAndLegPain', NULL),
('532', 'spineOutcome', NULL),
('533', 'EQ5D', NULL),
('533', 'EQ5D5', NULL),
('533', 'ODI', NULL),
('533', 'BackAndLegPain', NULL),
('533', 'spineOutcome', NULL),
('534', 'EQ5D', NULL),
('534', 'EQ5D5', NULL),
('534', 'ODI', NULL),
('534', 'BackAndLegPain', NULL),
('534', 'spineOutcome', NULL),
('010', 'EQ5D', NULL),
('010', 'EQ5D5', NULL),
('010', 'ODI', NULL),
('010', 'BackAndLegPain', NULL),
('010', 'spineOutcome', NULL),
('152', 'EQ5D', NULL),
('152', 'EQ5D5', NULL),
('152', 'ODI', NULL),
('152', 'BackAndLegPain', NULL),
('152', 'spineOutcome', NULL),
('153', 'EQ5D', NULL),
('153', 'EQ5D5', NULL),
('153', 'ODI', NULL),
('153', 'BackAndLegPain', NULL),
('153', 'spineOutcome', NULL),
('431', 'EQ5D', NULL),
('431', 'EQ5D5', NULL),
('431', 'ODI', NULL),
('431', 'BackAndLegPain', NULL),
('431', 'spineOutcome', NULL),
('529', 'EQ5D', NULL),
('529', 'EQ5D5', NULL),
('529', 'ODI', NULL),
('529', 'BackAndLegPain', NULL),
('529', 'spineOutcome', NULL),
('531', 'EQ5D', NULL),
('531', 'EQ5D5', NULL),
('531', 'ODI', NULL),
('531', 'BackAndLegPain', NULL),
('531', 'spineOutcome', NULL),
('536', 'EQ5D', NULL),
('536', 'EQ5D5', NULL),
('536', 'ODI', NULL),
('536', 'BackAndLegPain', NULL),
('536', 'spineOutcome', NULL),
('240', 'EQ5D', NULL),
('240', 'EQ5D5', NULL),
('240', 'EQ5D3', NULL),
('240', 'OxfordKeenScore', NULL),
('240', 'keenOutcome', NULL),
('241', 'EQ5D', NULL),
('241', 'EQ5D5', NULL),
('241', 'EQ5D3', NULL),
('241', 'OxfordKeenScore', NULL),
('241', 'keenOutcome', NULL),
('418', 'EQ5D', NULL),
('418', 'EQ5D5', NULL),
('418', 'EQ5D3', NULL),
('418', 'OxfordKeenScore', NULL),
('418', 'keenOutcome', NULL),
('239', 'EQ5D', NULL),
('239', 'EQ5D5', NULL),
('239', 'EQ5D3', NULL),
('239', 'OxfordKeenScore', NULL),
('239', 'keenOutcome', NULL),
('236', 'EQ5D', NULL),
('236', 'EQ5D5', NULL),
('236', 'EQ5D3', NULL),
('236', 'OxfordKeenScore', NULL),
('236', 'keenOutcome', NULL),
('423', 'EQ5D', NULL),
('423', 'EQ5D5', NULL),
('423', 'EQ5D3', NULL),
('423', 'OxfordKeenScore', NULL),
('423', 'keenOutcome', NULL),
('424', 'EQ5D', NULL),
('424', 'EQ5D5', NULL),
('424', 'EQ5D3', NULL),
('424', 'OxfordKeenScore', NULL),
('424', 'keenOutcome', NULL),
('396', 'EQ5D', NULL),
('396', 'EQ5D5', NULL),
('396', 'EQ5D3', NULL),
('396', 'OxfordKeenScore', NULL),
('396', 'keenOutcome', NULL),
('393', 'EQ5D', NULL),
('393', 'EQ5D5', NULL),
('393', 'EQ5D3', NULL),
('393', 'OxfordKeenScore', NULL),
('393', 'keenOutcome', NULL),
('218', 'EQ5D', NULL),
('218', 'EQ5D5', NULL),
('218', 'EQ5D3', NULL),
('218', 'OHS', NULL),
('218', 'NAHSRpatientSatisfaction', NULL),
('219', 'EQ5D', NULL),
('219', 'EQ5D5', NULL),
('219', 'EQ5D3', NULL),
('219', 'OHS', NULL),
('219', 'NAHSRpatientSatisfaction', NULL),
('220', 'EQ5D', NULL),
('220', 'EQ5D5', NULL),
('220', 'EQ5D3', NULL),
('220', 'OHS', NULL),
('220', 'NAHSRpatientSatisfaction', NULL),
('221', 'EQ5D', NULL),
('221', 'EQ5D5', NULL),
('221', 'EQ5D3', NULL),
('221', 'OHS', NULL),
('221', 'NAHSRpatientSatisfaction', NULL),
('82', 'EQ5D', NULL),
('82', 'EQ5D5', NULL),
('82', 'EQ5D3', NULL),
('82', 'OHS', NULL),
('82', 'NAHSRpatientSatisfaction', NULL),
('86', 'EQ5D', NULL),
('86', 'EQ5D5', NULL),
('86', 'EQ5D3', NULL),
('86', 'OHS', NULL),
('86', 'NAHSRpatientSatisfaction', NULL),
('360', 'EQ5D', NULL),
('360', 'EQ5D5', NULL),
('360', 'EQ5D3', NULL),
('360', 'OHS', NULL),
('360', 'NAHSRpatientSatisfaction', NULL),
('387', 'EQ5D', NULL),
('387', 'EQ5D5', NULL),
('387', 'EQ5D3', NULL),
('387', 'OHS', NULL),
('387', 'NAHSRpatientSatisfaction', NULL),
('213', 'EQ5D', NULL),
('213', 'EQ5D5', NULL),
('213', 'EQ5D3', NULL),
('213', 'OHS', NULL),
('213', 'NAHSRpatientSatisfaction', NULL),
('214', 'EQ5D', NULL),
('214', 'EQ5D5', NULL),
('214', 'EQ5D3', NULL),
('214', 'OHS', NULL),
('214', 'NAHSRpatientSatisfaction', NULL),
('215', 'EQ5D', NULL),
('215', 'EQ5D5', NULL),
('215', 'EQ5D3', NULL),
('215', 'OHS', NULL),
('215', 'NAHSRpatientSatisfaction', NULL),
('386', 'EQ5D', NULL),
('386', 'EQ5D5', NULL),
('386', 'EQ5D3', NULL),
('386', 'OHS', NULL),
('386', 'NAHSRpatientSatisfaction', NULL),
('414', 'EQ5D', NULL),
('414', 'EQ5D5', NULL),
('414', 'EQ5D3', NULL),
('414', 'OHS', NULL),
('414', 'NAHSRpatientSatisfaction', NULL),
('415', 'EQ5D', NULL),
('415', 'EQ5D5', NULL),
('415', 'EQ5D3', NULL),
('415', 'OHS', NULL),
('415', 'NAHSRpatientSatisfaction', NULL),
('208', 'EQ5D', NULL),
('208', 'EQ5D5', NULL),
('208', 'EQ5D3', NULL),
('208', 'OHS', NULL),
('208', 'NAHSRpatientSatisfaction', NULL),
('388', 'EQ5D', NULL),
('388', 'EQ5D5', NULL),
('388', 'EQ5D3', NULL),
('388', 'OHS', NULL),
('388', 'NAHSRpatientSatisfaction', NULL),
('245', 'EQ5D', NULL),
('245', 'EQ5D3', NULL),
('245', 'MOXFQ', NULL),
('245', 'painVAS', NULL),
('245', 'AOS', NULL),
('245', 'AOFAS', NULL),
('245', 'footAndAnkelOutcome', NULL),
('245', 'COFAS-AOS', NULL),
('593', 'EQ5D', NULL),
('593', 'EQ5D3', NULL),
('593', 'MOXFQ', NULL),
('593', 'painVAS', NULL),
('593', 'AOS', NULL),
('593', 'AOFAS', NULL),
('593', 'footAndAnkelOutcome', NULL),
('593', 'COFAS-AOS', NULL),
('246', 'EQ5D', NULL),
('246', 'EQ5D3', NULL),
('246', 'MOXFQ', NULL),
('246', 'painVAS', NULL),
('246', 'AOS', NULL),
('246', 'AOFAS', NULL),
('246', 'footAndAnkelOutcome', NULL),
('246', 'COFAS-AOS', NULL),
('579', 'EQ5D', NULL),
('579', 'EQ5D3', NULL),
('579', 'MOXFQ', NULL),
('579', 'painVAS', NULL),
('579', 'AOS', NULL),
('579', 'AOFAS', NULL),
('579', 'footAndAnkelOutcome', NULL),
('579', 'COFAS-AOS', NULL),
('327', 'EQ5D', NULL),
('327', 'EQ5D3', NULL),
('327', 'MOXFQ', NULL),
('327', 'painVAS', NULL),
('327', 'AOS', NULL),
('327', 'AOFAS', NULL),
('327', 'footAndAnkelOutcome', NULL),
('327', 'COFAS-AOS', NULL),
('248', 'SAFAS', NULL),
('248', 'painVAS', NULL),
('248', 'MOXFQ', NULL),
('248', 'EQ5D3', NULL),
('248', 'EQ5D', NULL),
('342', 'footAndAnkelOutcome', NULL),
('342', 'AOFAS', NULL),
('342', 'SAFAS', NULL),
('342', 'painVAS', NULL),
('342', 'MOXFQ', NULL),
('342', 'EQ5D3', NULL),
('342', 'EQ5D', NULL),
('248', 'AOFAS', NULL),
('248', 'footAndAnkelOutcome', NULL),
('397', 'COFAS-AOS', NULL),
('397', 'painVAS', NULL),
('397', 'MOXFQ', NULL),
('397', 'EQ5D3', NULL),
('397', 'EQ5D', NULL),
('591', 'footAndAnkelOutcome', NULL),
('398', 'MOXFQ', NULL),
('398', 'EQ5D3', NULL),
('398', 'EQ5D', NULL),
('397', 'AOS', NULL),
('397', 'AOFAOS', NULL),
('581', 'footAndAnkelOutcome', NULL),
('581', 'ATRS', NULL),
('581', 'painVAS', NULL),
('581', 'MOXFQ', NULL),
('581', 'EQ5D3', NULL),
('581', 'EQ5D', NULL),
('591', 'painVAS', NULL),
('591', 'MOXFQ', NULL),
('591', 'EQ5D3', NULL),
('591', 'EQ5D', NULL),
('581', 'VISSA', NULL),
('398', 'painVAS', NULL),
('398', 'COFAS-AOS', NULL),
('398', 'AOFAOS', NULL),
('398', 'AOS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `RELATION3`
--

CREATE TABLE `RELATION3` (
  `CODE` int(11) DEFAULT NULL,
  `POSTQUESTION` varchar(30) DEFAULT NULL,
  `numberOfAsking` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RELATION3`
--

INSERT INTO `RELATION3` (`CODE`, `POSTQUESTION`, `numberOfAsking`) VALUES
(257, 'painVAS', NULL),
(257, 'MOXFQ', NULL),
(257, 'EQ5D3', NULL),
(257, 'EQ5D', NULL),
(259, 'footAndAnkelOutcome', NULL),
(259, 'painVAS', NULL),
(259, 'MOXFQ', NULL),
(259, 'EQ5D3', NULL),
(259, 'EQ5D', NULL),
(305, 'footAndAnkelOutcome', NULL),
(305, 'painVAS', NULL),
(305, 'MOXFQ', NULL),
(305, 'EQ5D3', NULL),
(305, 'EQ5D', NULL),
(303, 'footAndAnkelOutcome', NULL),
(303, 'painVAS', NULL),
(303, 'MOXFQ', NULL),
(303, 'EQ5D3', NULL),
(303, 'EQ5D', NULL),
(256, 'footAndAnkelOutcome', NULL),
(256, 'painVAS', NULL),
(256, 'EQ5D3', NULL),
(256, 'MOXFQ', NULL),
(256, 'EQ5D', NULL),
(596, 'footAndAnkelOutcome\'', NULL),
(596, 'MOXFQ', NULL),
(596, 'EQ5D', NULL),
(596, 'painVAS', NULL),
(596, 'footAndAnkelOutcome', NULL),
(257, 'footAndAnkelOutcome', NULL),
(258, 'EQ5D', NULL),
(258, 'EQ5D3', NULL),
(258, 'MOXFQ', NULL),
(258, 'painVAS', NULL),
(258, 'footAndAnkelOutcome', NULL),
(347, 'EQ5D', NULL),
(347, 'EQ5D3', NULL),
(347, 'MOXFQ', NULL),
(347, 'painVAS', NULL),
(347, 'footAndAnkelOutcome', NULL),
(602, 'EQ5D', NULL),
(602, 'EQ5D3', NULL),
(602, 'MOXFQ', NULL),
(602, 'painVAS', NULL),
(602, 'footAndAnkelOutcome', NULL),
(582, 'EQ5D', NULL),
(582, 'EQ5D3', NULL),
(582, 'MOXFQ', NULL),
(582, 'painVAS', NULL),
(582, 'footAndAnkelOutcome', NULL),
(612, 'EQ5D', NULL),
(612, 'EQ5D3', NULL),
(612, 'MOXFQ', NULL),
(612, 'painVAS', NULL),
(612, 'footAndAnkelOutcome', NULL),
(162, 'EQ5D', NULL),
(162, 'EQ5D3', NULL),
(162, 'OSS', NULL),
(162, 'QDASH', NULL),
(164, 'EQ5D', NULL),
(164, 'EQ5D3', NULL),
(164, 'OSS', NULL),
(164, 'QDASH', NULL),
(163, 'EQ5D', NULL),
(163, 'EQ5D3', NULL),
(163, 'OSS', NULL),
(163, 'QDASH', NULL),
(407, 'EQ5D', NULL),
(407, 'EQ5D3', NULL),
(407, 'OSS', NULL),
(407, 'QDASH', NULL),
(543, 'EQ5D', NULL),
(543, 'EQ5D3', NULL),
(543, 'OSS', NULL),
(543, 'QDASH', NULL),
(409, 'EQ5D', NULL),
(409, 'EQ5D3', NULL),
(409, 'OSS', NULL),
(409, 'QDASH', NULL),
(158, 'EQ5D', NULL),
(158, 'EQ5D3', NULL),
(158, 'OSS', NULL),
(158, 'QDASH', NULL),
(157, 'EQ5D', NULL),
(157, 'EQ5D3', NULL),
(157, 'OSS', NULL),
(157, 'QDASH', NULL),
(408, 'EQ5D', NULL),
(408, 'EQ5D3', NULL),
(408, 'OSS', NULL),
(408, 'QDASH', NULL),
(160, 'EQ5D', NULL),
(160, 'EQ5D3', NULL),
(160, 'OSI', NULL),
(160, 'QDASH', NULL),
(161, 'EQ5D', NULL),
(161, 'EQ5D3', NULL),
(161, 'OSI', NULL),
(161, 'QDASH', NULL),
(166, 'EQ5D', NULL),
(166, 'EQ5D3', NULL),
(166, 'OSI', NULL),
(166, 'QDASH', NULL),
(165, 'EQ5D', NULL),
(165, 'EQ5D3', NULL),
(165, 'OSS', NULL),
(165, 'QDASH', NULL),
(169, 'EQ5D', NULL),
(169, 'EQ5D3', NULL),
(169, 'OSS', NULL),
(169, 'QDASH', NULL),
(335, 'EQ5D', NULL),
(335, 'EQ5D3', NULL),
(335, 'OSS', NULL),
(335, 'QDASH', NULL),
(544, 'EQ5D', NULL),
(544, 'EQ5D3', NULL),
(544, 'OSS', NULL),
(544, 'QDASH', NULL),
(546, 'EQ5D', NULL),
(546, 'EQ5D3', NULL),
(546, 'OSS', NULL),
(546, 'QDASH', NULL),
(372, 'EQ5D', NULL),
(372, 'EQ5D3', NULL),
(372, 'OSS', NULL),
(372, 'QDASH', NULL),
(171, 'EQ5D', NULL),
(171, 'EQ5D3', NULL),
(171, 'OES', NULL),
(171, 'QDASH', NULL),
(172, 'EQ5D', NULL),
(172, 'EQ5D3', NULL),
(172, 'OES', NULL),
(172, 'QDASH', NULL),
(173, 'EQ5D', NULL),
(173, 'EQ5D3', NULL),
(173, 'OES', NULL),
(173, 'QDASH', NULL),
(174, 'EQ5D', NULL),
(174, 'EQ5D3', NULL),
(174, 'OES', NULL),
(174, 'QDASH', NULL),
(175, 'EQ5D', NULL),
(175, 'EQ5D3', NULL),
(175, 'OES', NULL),
(175, 'QDASH', NULL),
(368, 'EQ5D', NULL),
(368, 'EQ5D3', NULL),
(368, 'OES', NULL),
(368, 'QDASH', NULL),
(177, 'EQ5D', NULL),
(177, 'EQ5D3', NULL),
(177, 'OES', NULL),
(177, 'QDASH', NULL),
(178, 'EQ5D', NULL),
(178, 'EQ5D3', NULL),
(178, 'OES', NULL),
(178, 'QDASH', NULL),
(353, 'EQ5D', NULL),
(353, 'EQ5D3', NULL),
(353, 'OES', NULL),
(353, 'QDASH', NULL),
(354, 'EQ5D', NULL),
(354, 'EQ5D3', NULL),
(354, 'OES', NULL),
(354, 'QDASH', NULL),
(355, 'EQ5D', NULL),
(355, 'EQ5D3', NULL),
(355, 'OES', NULL),
(355, 'QDASH', NULL),
(356, 'EQ5D', NULL),
(356, 'EQ5D3', NULL),
(356, 'OES', NULL),
(356, 'QDASH', NULL),
(448, 'EQ5D', NULL),
(448, 'EQ5D3', NULL),
(448, 'OES', NULL),
(448, 'QDASH', NULL),
(177, 'EQ5D', NULL),
(177, 'EQ5D3', NULL),
(177, 'PEMpost', NULL),
(177, 'QDASH', NULL),
(191, 'EQ5D', NULL),
(191, 'EQ5D3', NULL),
(191, 'PEMpost', NULL),
(191, 'URAM', NULL),
(191, 'QDASH', NULL),
(336, 'EQ5D', NULL),
(336, 'EQ5D3', NULL),
(336, 'PEMpost', NULL),
(336, 'URAM', NULL),
(336, 'QDASH', NULL),
(559, 'EQ5D', NULL),
(559, 'EQ5D3', NULL),
(559, 'PEMpost', NULL),
(559, 'URAM', NULL),
(559, 'QDASH', NULL),
(560, 'EQ5D', NULL),
(560, 'EQ5D3', NULL),
(560, 'PEMpost', NULL),
(560, 'URAM', NULL),
(560, 'QDASH', NULL),
(561, 'EQ5D', NULL),
(561, 'EQ5D3', NULL),
(561, 'PEMpost', NULL),
(561, 'URAM', NULL),
(561, 'QDASH', NULL),
(562, 'EQ5D', NULL),
(562, 'EQ5D3', NULL),
(562, 'PEMpost', NULL),
(562, 'URAM', NULL),
(562, 'QDASH', NULL),
(194, 'EQ5D', NULL),
(194, 'EQ5D3', NULL),
(194, 'PEMpost', NULL),
(194, 'QDASH', NULL),
(556, 'EQ5D', NULL),
(556, 'EQ5D3', NULL),
(556, 'PEMpost', NULL),
(556, 'QDASH', NULL),
(557, 'EQ5D', NULL),
(557, 'EQ5D3', NULL),
(557, 'PEMpost', NULL),
(557, 'QDASH', NULL),
(411, 'EQ5D', NULL),
(411, 'EQ5D3', NULL),
(411, 'PEMpost', NULL),
(411, 'QDASH', NULL),
(182, 'EQ5D', NULL),
(182, 'EQ5D3', NULL),
(182, 'PEMpost', NULL),
(182, 'QDASH', NULL),
(183, 'EQ5D', NULL),
(183, 'EQ5D3', NULL),
(183, 'BOSTON', NULL),
(183, 'QDASH', NULL),
(540, 'EQ5D', NULL),
(540, 'EQ5D3', NULL),
(540, 'OSI', NULL),
(540, 'QDASH', NULL),
(373, 'EQ5D', NULL),
(373, 'EQ5D3', NULL),
(373, 'OSS', NULL),
(373, 'QDASH', NULL),
(11, 'EQ5D', NULL),
(11, 'EQ5D3', NULL),
(11, 'OSS', NULL),
(11, 'QDASH', NULL),
(210, 'EQ5D', NULL),
(210, 'EQ5D5', NULL),
(210, 'iHOT12', NULL),
(210, 'NAHSRpatientSatisfaction', NULL),
(210, 'UCLAactivity', NULL),
(210, 'NAHSR', NULL),
(206, 'EQ5D', NULL),
(206, 'EQ5D5', NULL),
(206, 'iHOT12', NULL),
(206, 'NAHSRpatientSatisfaction', NULL),
(206, 'UCLAactivity', NULL),
(206, 'NAHSR', NULL),
(234, 'EQ5D', NULL),
(234, 'EQ5D5', NULL),
(234, 'KOOS', NULL),
(234, 'OxfordKeenScore', NULL),
(234, 'OKSandAandP', NULL),
(234, 'keenOutcome', NULL),
(235, 'EQ5D', NULL),
(235, 'EQ5D5', NULL),
(235, 'KOOS', NULL),
(235, 'OxfordKeenScore', NULL),
(235, 'OKSandAandP', NULL),
(234, 'keenOutcome', NULL),
(228, 'EQ5D', NULL),
(228, 'EQ5D5', NULL),
(228, 'KOOS', NULL),
(228, 'OxfordKeenScore', NULL),
(228, 'OKSandAandP', NULL),
(228, 'keenOutcome', NULL),
(422, 'EQ5D', NULL),
(422, 'EQ5D5', NULL),
(422, 'KOOS', NULL),
(422, 'OxfordKeenScore', NULL),
(422, 'OKSandAandP', NULL),
(422, 'keenOutcome', NULL),
(95, 'EQ5D', NULL),
(95, 'EQ5D3', NULL),
(95, 'KOOS', NULL),
(95, 'keenOutcome', NULL),
(392, 'EQ5D', NULL),
(392, 'EQ5D3', NULL),
(392, 'KOOS', NULL),
(392, 'keenOutcome', NULL),
(228, 'EQ5D', NULL),
(228, 'EQ5D3', NULL),
(228, 'KOOS', NULL),
(228, 'keenOutcome', NULL),
(229, 'EQ5D', NULL),
(229, 'EQ5D3', NULL),
(229, 'KOOS', NULL),
(229, 'keenOutcome', NULL),
(230, 'EQ5D', NULL),
(230, 'EQ5D3', NULL),
(230, 'KOOS', NULL),
(230, 'keenOutcome', NULL),
(231, 'EQ5D', NULL),
(231, 'EQ5D3', NULL),
(231, 'KOOS', NULL),
(231, 'keenOutcome', NULL),
(232, 'EQ5D', NULL),
(232, 'EQ5D3', NULL),
(232, 'KOOS', NULL),
(232, 'keenOutcome', NULL),
(233, 'EQ5D', NULL),
(233, 'EQ5D3', NULL),
(233, 'KOOS', NULL),
(233, 'keenOutcome', NULL),
(585, 'EQ5D', NULL),
(585, 'EQ5D3', NULL),
(585, 'KOOS', NULL),
(585, 'keenOutcome', NULL),
(419, 'EQ5D', NULL),
(419, 'EQ5D3', NULL),
(419, 'KOOS', NULL),
(419, 'keenOutcome', NULL),
(421, 'EQ5D', NULL),
(421, 'EQ5D3', NULL),
(421, 'KOOS', NULL),
(421, 'keenOutcome', NULL),
(422, 'EQ5D', NULL),
(422, 'EQ5D3', NULL),
(422, 'KOOS', NULL),
(422, 'keenOutcome', NULL),
(227, 'KOOS', NULL),
(227, 'IKDC', NULL),
(227, 'EQ5D5', NULL),
(227, 'TegnerActivity', NULL),
(590, 'IKDC', NULL),
(227, 'EQ5D', NULL),
(590, 'TegnerActivity', NULL),
(590, 'EQ5D5', NULL),
(227, 'keenOutcome', NULL),
(590, 'EQ5D', NULL),
(589, 'keenOutcome', NULL),
(589, 'KOOS', NULL),
(589, 'IKDC', NULL),
(589, 'TegnerActivity', NULL),
(589, 'EQ5D5', NULL),
(589, 'EQ5D', NULL),
(590, 'KOOS', NULL),
(590, 'keenOutcome', NULL),
(416, 'EQ5D', NULL),
(416, 'EQ5D5', NULL),
(416, 'TegnerActivity', NULL),
(416, 'IKDC', NULL),
(416, 'KOOS', NULL),
(416, 'keenOutcome', NULL),
(96, 'EQ5D', NULL),
(96, 'EQ5D3', NULL),
(96, 'KOOS', NULL),
(96, 'keenOutcome', NULL),
(104, 'EQ5D', NULL),
(104, 'EQ5D3', NULL),
(104, 'KOOS', NULL),
(104, 'keenOutcome', NULL),
(103, 'EQ5D', NULL),
(103, 'EQ5D3', NULL),
(103, 'KOOS', NULL),
(103, 'keenOutcome', NULL),
(391, 'EQ5D', NULL),
(391, 'EQ5D3', NULL),
(391, 'KOOS', NULL),
(391, 'keenOutcome', NULL),
(138, 'EQ5D', NULL),
(138, 'EQ5D5', NULL),
(138, 'NDI', NULL),
(138, 'NeckAndArmPain', NULL),
(138, 'MDI', NULL),
(138, 'spineOutcome', NULL),
(142, 'EQ5D', NULL),
(142, 'EQ5D5', NULL),
(142, 'NDI', NULL),
(142, 'NeckAndArmPain', NULL),
(142, 'MDI', NULL),
(142, 'spineOutcome', NULL),
(510, 'EQ5D', NULL),
(510, 'EQ5D5', NULL),
(510, 'NDI', NULL),
(510, 'NeckAndArmPain', NULL),
(510, 'MDI', NULL),
(510, 'spineOutcome', NULL),
(511, 'EQ5D', NULL),
(511, 'EQ5D5', NULL),
(511, 'NDI', NULL),
(511, 'NeckAndArmPain', NULL),
(511, 'MDI', NULL),
(511, 'spineOutcome', NULL),
(517, 'EQ5D', NULL),
(517, 'EQ5D5', NULL),
(517, 'NDI', NULL),
(517, 'NeckAndArmPain', NULL),
(517, 'MDI', NULL),
(517, 'spineOutcome', NULL),
(147, 'EQ5D', NULL),
(147, 'EQ5D5', NULL),
(147, 'NDI', NULL),
(147, 'NeckAndArmPain', NULL),
(147, 'MDI', NULL),
(147, 'spineOutcome', NULL),
(427, 'EQ5D', NULL),
(427, 'EQ5D5', NULL),
(427, 'NDI', NULL),
(427, 'NeckAndArmPain', NULL),
(427, 'MDI', NULL),
(427, 'spineOutcome', NULL),
(154, 'EQ5D', NULL),
(154, 'EQ5D5', NULL),
(154, 'ODI', NULL),
(154, 'BackAndLegPain', NULL),
(154, 'spineOutcome', NULL),
(532, 'EQ5D', NULL),
(532, 'EQ5D5', NULL),
(532, 'ODI', NULL),
(532, 'BackAndLegPain', NULL),
(532, 'spineOutcome', NULL),
(533, 'EQ5D', NULL),
(533, 'EQ5D5', NULL),
(533, 'ODI', NULL),
(533, 'BackAndLegPain', NULL),
(533, 'spineOutcome', NULL),
(534, 'EQ5D', NULL),
(534, 'EQ5D5', NULL),
(534, 'ODI', NULL),
(534, 'BackAndLegPain', NULL),
(534, 'spineOutcome', NULL),
(10, 'EQ5D', NULL),
(10, 'EQ5D5', NULL),
(10, 'ODI', NULL),
(10, 'BackAndLegPain', NULL),
(10, 'spineOutcome', NULL),
(152, 'EQ5D', NULL),
(152, 'EQ5D5', NULL),
(152, 'ODI', NULL),
(152, 'BackAndLegPain', NULL),
(152, 'spineOutcome', NULL),
(153, 'EQ5D', NULL),
(153, 'EQ5D5', NULL),
(153, 'ODI', NULL),
(153, 'BackAndLegPain', NULL),
(153, 'spineOutcome', NULL),
(431, 'EQ5D', NULL),
(431, 'EQ5D5', NULL),
(431, 'ODI', NULL),
(431, 'BackAndLegPain', NULL),
(431, 'spineOutcome', NULL),
(529, 'EQ5D', NULL),
(529, 'EQ5D5', NULL),
(529, 'ODI', NULL),
(529, 'BackAndLegPain', NULL),
(529, 'spineOutcome', NULL),
(531, 'EQ5D', NULL),
(531, 'EQ5D5', NULL),
(531, 'ODI', NULL),
(531, 'BackAndLegPain', NULL),
(531, 'spineOutcome', NULL),
(536, 'EQ5D', NULL),
(536, 'EQ5D5', NULL),
(536, 'ODI', NULL),
(536, 'BackAndLegPain', NULL),
(536, 'spineOutcome', NULL),
(240, 'EQ5D', NULL),
(240, 'EQ5D5', NULL),
(240, 'EQ5D3', NULL),
(240, 'OxfordKeenScore', NULL),
(240, 'keenOutcome', NULL),
(241, 'EQ5D', NULL),
(241, 'EQ5D5', NULL),
(241, 'EQ5D3', NULL),
(241, 'OxfordKeenScore', NULL),
(241, 'keenOutcome', NULL),
(418, 'EQ5D', NULL),
(418, 'EQ5D5', NULL),
(418, 'EQ5D3', NULL),
(418, 'OxfordKeenScore', NULL),
(418, 'keenOutcome', NULL),
(239, 'EQ5D', NULL),
(239, 'EQ5D5', NULL),
(239, 'EQ5D3', NULL),
(239, 'OxfordKeenScore', NULL),
(239, 'keenOutcome', NULL),
(236, 'EQ5D', NULL),
(236, 'EQ5D5', NULL),
(236, 'EQ5D3', NULL),
(236, 'OxfordKeenScore', NULL),
(236, 'keenOutcome', NULL),
(423, 'EQ5D', NULL),
(423, 'EQ5D5', NULL),
(423, 'EQ5D3', NULL),
(423, 'OxfordKeenScore', NULL),
(423, 'keenOutcome', NULL),
(424, 'EQ5D', NULL),
(424, 'EQ5D5', NULL),
(424, 'EQ5D3', NULL),
(424, 'OxfordKeenScore', NULL),
(424, 'keenOutcome', NULL),
(396, 'EQ5D', NULL),
(396, 'EQ5D5', NULL),
(396, 'EQ5D3', NULL),
(396, 'OxfordKeenScore', NULL),
(396, 'keenOutcome', NULL),
(393, 'EQ5D', NULL),
(393, 'EQ5D5', NULL),
(393, 'EQ5D3', NULL),
(393, 'OxfordKeenScore', NULL),
(393, 'keenOutcome', NULL),
(218, 'EQ5D', NULL),
(218, 'EQ5D5', NULL),
(218, 'EQ5D3', NULL),
(218, 'OHS', NULL),
(218, 'NAHSRpatientSatisfaction', NULL),
(219, 'EQ5D', NULL),
(219, 'EQ5D5', NULL),
(219, 'EQ5D3', NULL),
(219, 'OHS', NULL),
(219, 'NAHSRpatientSatisfaction', NULL),
(220, 'EQ5D', NULL),
(220, 'EQ5D5', NULL),
(220, 'EQ5D3', NULL),
(220, 'OHS', NULL),
(220, 'NAHSRpatientSatisfaction', NULL),
(221, 'EQ5D', NULL),
(221, 'EQ5D5', NULL),
(221, 'EQ5D3', NULL),
(221, 'OHS', NULL),
(221, 'NAHSRpatientSatisfaction', NULL),
(82, 'EQ5D', NULL),
(82, 'EQ5D5', NULL),
(82, 'EQ5D3', NULL),
(82, 'OHS', NULL),
(82, 'NAHSRpatientSatisfaction', NULL),
(86, 'EQ5D', NULL),
(86, 'EQ5D5', NULL),
(86, 'EQ5D3', NULL),
(86, 'OHS', NULL),
(86, 'NAHSRpatientSatisfaction', NULL),
(360, 'EQ5D', NULL),
(360, 'EQ5D5', NULL),
(360, 'EQ5D3', NULL),
(360, 'OHS', NULL),
(360, 'NAHSRpatientSatisfaction', NULL),
(387, 'EQ5D', NULL),
(387, 'EQ5D5', NULL),
(387, 'EQ5D3', NULL),
(387, 'OHS', NULL),
(387, 'NAHSRpatientSatisfaction', NULL),
(213, 'EQ5D', NULL),
(213, 'EQ5D5', NULL),
(213, 'EQ5D3', NULL),
(213, 'OHS', NULL),
(213, 'NAHSRpatientSatisfaction', NULL),
(214, 'EQ5D', NULL),
(214, 'EQ5D5', NULL),
(214, 'EQ5D3', NULL),
(214, 'OHS', NULL),
(214, 'NAHSRpatientSatisfaction', NULL),
(215, 'EQ5D', NULL),
(215, 'EQ5D5', NULL),
(215, 'EQ5D3', NULL),
(215, 'OHS', NULL),
(215, 'NAHSRpatientSatisfaction', NULL),
(386, 'EQ5D', NULL),
(386, 'EQ5D5', NULL),
(386, 'EQ5D3', NULL),
(386, 'OHS', NULL),
(386, 'NAHSRpatientSatisfaction', NULL),
(414, 'EQ5D', NULL),
(414, 'EQ5D5', NULL),
(414, 'EQ5D3', NULL),
(414, 'OHS', NULL),
(414, 'NAHSRpatientSatisfaction', NULL),
(415, 'EQ5D', NULL),
(415, 'EQ5D5', NULL),
(415, 'EQ5D3', NULL),
(415, 'OHS', NULL),
(415, 'NAHSRpatientSatisfaction', NULL),
(208, 'EQ5D', NULL),
(208, 'EQ5D5', NULL),
(208, 'EQ5D3', NULL),
(208, 'OHS', NULL),
(208, 'NAHSRpatientSatisfaction', NULL),
(388, 'EQ5D', NULL),
(388, 'EQ5D5', NULL),
(388, 'EQ5D3', NULL),
(388, 'OHS', NULL),
(388, 'NAHSRpatientSatisfaction', NULL),
(245, 'EQ5D', NULL),
(245, 'EQ5D3', NULL),
(245, 'MOXFQ', NULL),
(245, 'painVAS', NULL),
(245, 'AOS', NULL),
(245, 'AOFAS', NULL),
(245, 'footAndAnkelOutcome', NULL),
(245, 'COFAS-AOS', NULL),
(593, 'EQ5D', NULL),
(593, 'EQ5D3', NULL),
(593, 'MOXFQ', NULL),
(593, 'painVAS', NULL),
(593, 'AOS', NULL),
(593, 'AOFAS', NULL),
(593, 'footAndAnkelOutcome', NULL),
(593, 'COFAS-AOS', NULL),
(246, 'EQ5D', NULL),
(246, 'EQ5D3', NULL),
(246, 'MOXFQ', NULL),
(246, 'painVAS', NULL),
(246, 'AOS', NULL),
(246, 'AOFAS', NULL),
(246, 'footAndAnkelOutcome', NULL),
(246, 'COFAS-AOS', NULL),
(579, 'EQ5D', NULL),
(579, 'EQ5D3', NULL),
(579, 'MOXFQ', NULL),
(579, 'painVAS', NULL),
(579, 'AOS', NULL),
(579, 'AOFAS', NULL),
(579, 'footAndAnkelOutcome', NULL),
(579, 'COFAS-AOS', NULL),
(327, 'EQ5D', NULL),
(327, 'EQ5D3', NULL),
(327, 'MOXFQ', NULL),
(327, 'painVAS', NULL),
(327, 'AOS', NULL),
(327, 'AOFAS', NULL),
(327, 'footAndAnkelOutcome', NULL),
(327, 'COFAS-AOS', NULL),
(248, 'SAFAS', NULL),
(248, 'painVAS', NULL),
(248, 'MOXFQ', NULL),
(248, 'EQ5D3', NULL),
(248, 'EQ5D', NULL),
(342, 'footAndAnkelOutcome', NULL),
(342, 'AOFAS', NULL),
(342, 'SAFAS', NULL),
(342, 'painVAS', NULL),
(342, 'MOXFQ', NULL),
(342, 'EQ5D3', NULL),
(342, 'EQ5D', NULL),
(248, 'AOFAS', NULL),
(248, 'footAndAnkelOutcome', NULL),
(397, 'COFAS-AOS', NULL),
(397, 'painVAS', NULL),
(397, 'MOXFQ', NULL),
(397, 'EQ5D3', NULL),
(397, 'EQ5D', NULL),
(591, 'footAndAnkelOutcome', NULL),
(398, 'MOXFQ', NULL),
(398, 'EQ5D3', NULL),
(398, 'EQ5D', NULL),
(397, 'AOS', NULL),
(397, 'AOFAOS', NULL),
(581, 'footAndAnkelOutcome', NULL),
(581, 'ATRS', NULL),
(581, 'painVAS', NULL),
(581, 'MOXFQ', NULL),
(581, 'EQ5D3', NULL),
(581, 'EQ5D', NULL),
(591, 'painVAS', NULL),
(591, 'MOXFQ', NULL),
(591, 'EQ5D3', NULL),
(591, 'EQ5D', NULL),
(581, 'VISSA', NULL),
(398, 'painVAS', NULL),
(398, 'COFAS-AOS', NULL),
(398, 'AOFAOS', NULL),
(398, 'AOS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `SAFAS`
--

CREATE TABLE `SAFAS` (
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL,
  `S9` int(11) DEFAULT NULL,
  `P1` int(11) DEFAULT NULL,
  `P2` int(11) DEFAULT NULL,
  `P3` int(11) DEFAULT NULL,
  `P4` int(11) DEFAULT NULL,
  `P5` int(11) DEFAULT NULL,
  `P6` int(11) DEFAULT NULL,
  `P7` int(11) DEFAULT NULL,
  `P8` int(11) DEFAULT NULL,
  `P9` int(11) DEFAULT NULL,
  `P10` int(11) DEFAULT NULL,
  `P11` int(11) DEFAULT NULL,
  `P12` int(11) DEFAULT NULL,
  `P13` int(11) DEFAULT NULL,
  `DL1` int(11) DEFAULT NULL,
  `DL2` int(11) DEFAULT NULL,
  `DL3` int(11) DEFAULT NULL,
  `DL4` int(11) DEFAULT NULL,
  `DL5` int(11) DEFAULT NULL,
  `DL6` int(11) DEFAULT NULL,
  `DL7` int(11) DEFAULT NULL,
  `DL8` int(11) DEFAULT NULL,
  `SS1` int(11) DEFAULT NULL,
  `SS2` int(11) DEFAULT NULL,
  `SS3` int(11) DEFAULT NULL,
  `SS4` int(11) DEFAULT NULL,
  `SS5` int(11) DEFAULT NULL,
  `SS6` int(11) DEFAULT NULL,
  `SS7` int(11) DEFAULT NULL,
  `SS8` int(11) DEFAULT NULL,
  `SS9` int(11) DEFAULT NULL,
  `SS10` int(11) DEFAULT NULL,
  `SS11` int(11) DEFAULT NULL,
  `SS12` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spineOutcome`
--

CREATE TABLE `spineOutcome` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` varchar(100) DEFAULT NULL,
  `Q3` varchar(100) DEFAULT NULL,
  `Q4` varchar(100) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TegnerActivity`
--

CREATE TABLE `TegnerActivity` (
  `activityLevelBeforeInjury` int(11) DEFAULT NULL,
  `currentActivityLevel` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UCLAacticity`
--

CREATE TABLE `UCLAacticity` (
  `CurrentActivityLevel` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `URAM`
--

CREATE TABLE `URAM` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8` int(11) DEFAULT NULL,
  `Q9` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(58, 'ronglong', 'ronglongke@outlook.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `VISAA`
--

CREATE TABLE `VISAA` (
  `Q1` int(11) DEFAULT NULL,
  `Q2` int(11) DEFAULT NULL,
  `Q3` int(11) DEFAULT NULL,
  `Q4` int(11) DEFAULT NULL,
  `Q5` int(11) DEFAULT NULL,
  `Q6` int(11) DEFAULT NULL,
  `Q7` int(11) DEFAULT NULL,
  `Q8A` int(11) DEFAULT NULL,
  `Q8B` int(11) DEFAULT NULL,
  `Q8C` int(11) DEFAULT NULL,
  `hospitalNumber` int(11) DEFAULT NULL,
  `answeredDate` date DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OPERATION`
--
ALTER TABLE `OPERATION`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `patientINFO`
--
ALTER TABLE `patientINFO`
  ADD PRIMARY KEY (`hospitalNumber`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
