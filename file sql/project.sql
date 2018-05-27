-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 11:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountNo` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Balance` float NOT NULL,
  `TypeAccountID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BranchID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdentificationNo` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountNo`, `Balance`, `TypeAccountID`, `BranchID`, `IdentificationNo`) VALUES
('50000000001', 8500, '1', '500', '2834472271400'),
('50000000002', 11499, '2', '500', '6244224571223'),
('50000000003', 10999, '3', '500', '2667314867659'),
('50000000004', 11000, '4', '500', '1882167227885'),
('50500000001', 10031, '1', '505', '2786441755211'),
('50500000002', 6380, '2', '505', '2786441755211'),
('50500000003', 4630, '3', '505', '2786441755211'),
('50500000004', 10000, '4', '505', '3531853232238'),
('50500000005', 4560, '5', '505', '7217452223867'),
('50500000006', 10000, '6', '505', '6284258412268'),
('56500000001', 8670, '1', '565', '6337771402140'),
('56500000002', 8810, '2', '565', '6337771402140'),
('56500000003', 10000, '3', '565', '1340287431326'),
('56500000004', 10000, '4', '565', '1340287431326'),
('56500000005', 10000, '5', '565', '3813040836371'),
('56500000011', 6986, '6', '565', '6337771402140'),
('57000000001', 10000, '1', '570', '1687467521751'),
('57000000002', 10000, '2', '570', '1883087075451'),
('57000000003', 10000, '3', '570', '4765057042137'),
('57000000004', 10000, '4', '570', '4288740360734'),
('57000000005', 10000, '5', '570', '3807844675036'),
('59000000001', 7055, '1', '590', '1201644702751'),
('59000000002', 10000, '2', '590', '2113170464669'),
('59000000003', 10000, '3', '590', '7865374382217'),
('59000000004', 10000, '4', '590', '7865374382217'),
('59000000005', 10000, '5', '590', '7865374382217'),
('59000000006', 10000, '6', '590', '7641336008514'),
('59000000007', 10000, '1', '590', '7641336008514'),
('60500000001', 11295, '1', '605', '6796423630766'),
('60500000002', 11750, '2', '605', '6796423630766'),
('60500000003', 10666, '3', '605', '6796423630766'),
('62000000001', 10000, '1', '620', '1119700030447'),
('62000000002', 10000, '2', '620', '1119700030447'),
('62000000003', 10000, '6', '620', '1119700030447');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `BankID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BankName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`BankID`, `BankName`, `Fee`) VALUES
('000', 'My Bank', 0),
('001', 'Bangkok Bank', 15),
('002', 'KASIKORNBANK', 15),
('003', 'Krungthai Bank', 15),
('004', 'TMB Bank', 15),
('005', 'Siam Commercial Bank', 15),
('006', 'Bank of Ayudhya', 15),
('007', 'Kiatnakin Bank', 15);

-- --------------------------------------------------------

--
-- Table structure for table `billinfo`
--

CREATE TABLE `billinfo` (
  `PaymentCode` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Amount` float NOT NULL,
  `CompanyName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billinfo`
--

INSERT INTO `billinfo` (`PaymentCode`, `Amount`, `CompanyName`) VALUES
('00000000001', 150, 'MARVEL'),
('00000000002', 299, 'STEAM'),
('00000000003', 690, 'BLIZZARD'),
('00000000004', 250, 'BNK48'),
('00000000005', 1080, 'NVIDIA');

-- --------------------------------------------------------

--
-- Table structure for table `branchinfo`
--

CREATE TABLE `branchinfo` (
  `BranchID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BranchName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BranchAddress` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ZIPCode` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BranchTel` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branchinfo`
--

INSERT INTO `branchinfo` (`BranchID`, `BranchName`, `BranchAddress`, `ZIPCode`, `BranchTel`) VALUES
('500', 'Samphanthawong', 'A001/1 Toronto Raptors road', '10100', '0200000001'),
('505', 'Wattana', 'B001/1 Boston Celtics road', '10110', '0200000002'),
('510', 'Yannawa', 'C001/1 Philadelphia 76ers road', '10120', '0020000003'),
('515', 'Thung Khru', 'D001/1 Cleveland Cavaliers road', '10140', '0200000004'),
('520', 'Bang Khun Thian', 'E001/1 Indiana Pacers road', '10150', '0200000005'),
('525', 'Bang Khae', 'F001/1 Miami Heat road', '10160', '0200000006'),
('530', 'Thawi Wattana', 'G001/1 Milwaukee Bucks road', '10170', '0200000007'),
('535', 'Phra Nakhon', 'H001/1 Washington Wizardss road', '10200', '0200000008'),
('540', 'Lak Si', 'I001/1 Detroit Pistons road', '10210', '0200000009'),
('545', 'Bang Khen', 'J001/1 Washington Wizards road', '10220', '0200000010'),
('550', 'Lat Phrao', 'K001/1 New York Knicks road', '10230', '0200000011'),
('555', 'Bung Kum', 'L001/1 New Brooklyn Nets road', '10240', '0200000012'),
('560', 'Pra Vet', 'M001/1 Chicago Bulls road', '10250', '0200000013'),
('565', 'Phra Khanong', 'N001/1 Houston Rockets road', '10260', '0200000014'),
('570', 'Dusit', 'O001/1 Golden State Warriors road', '10300', '0200000015'),
('575', 'Wangthong Lang', 'P001/1 Portland Trail Blazers road', '10310', '0200000016'),
('580', 'Huai Khwang', 'Q001/1 Oklahoma City Thunder road', '10320', '0200000017'),
('585', 'Pathum Wan', 'R001/1 Utah Jazz road', '10330', '0200000018'),
('590', 'Din Daeng', 'S001/1 New Orleans Pelicans road', '10400', '0020000019'),
('595', 'Bang Rak', 'T001/1 San Antonio Spurs', '10500', '0200000020'),
('600', 'Min Buri', 'U001/1 Minnesota Timberwolves road', '10510', '0020000021'),
('605', 'Lat Krabang', 'V001/1 Denver Nuggets road', '10520', '0200000022'),
('610', 'Nong Chok', 'W001/1 LA Clippers road', '10530', '0200000023'),
('615', 'Bangkok Yai', 'X001/1 Sacramento Kings road', '10600', '0200000024'),
('620', 'Bangkok Noi', 'Y001/1 Dallas Mavericks road', '10700', '0200000025');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `StatementNo` int(10) NOT NULL,
  `AccountNo` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `SenderAccountNo` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ReceiveAccountNo` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PaymentCode` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BankID` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Amount` float NOT NULL,
  `Total` float NOT NULL,
  `CurrentBalance` float NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Note` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TransactionCode` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`StatementNo`, `AccountNo`, `SenderAccountNo`, `ReceiveAccountNo`, `PaymentCode`, `BankID`, `Amount`, `Total`, `CurrentBalance`, `DateTime`, `Note`, `TransactionCode`) VALUES
(1, '50000000001', NULL, '50000000002', NULL, '000', 999, 999, 9001, '2018-01-02 20:16:50', 'Ufabet !!', 'A001'),
(2, '50000000002', '50000000001', NULL, NULL, '000', 999, 999, 10999, '2018-01-02 20:16:51', 'Ufabet !!', 'A003'),
(3, '50000000001', NULL, '50000000003', NULL, '000', 999, 999, 8002, '2018-01-06 20:17:48', 'Ufabet!!', 'A001'),
(4, '50000000003', '50000000001', NULL, NULL, '000', 999, 999, 10999, '2018-01-06 20:17:48', 'Ufabet!!', 'A003'),
(5, '50000000001', NULL, '50000000004', NULL, '000', 500, 500, 7502, '2018-01-10 20:18:51', '', 'A001'),
(6, '50000000004', '50000000001', NULL, NULL, '000', 500, 500, 10500, '2018-01-10 20:18:52', '', 'A003'),
(7, '50000000001', NULL, '50500000001', NULL, '000', 502, 502, 7000, '2018-01-18 20:20:58', '', 'A001'),
(8, '50500000001', '50000000001', NULL, NULL, '000', 502, 502, 10502, '2018-01-18 20:20:58', '', 'A003'),
(9, '50500000001', NULL, NULL, '00000000001', NULL, 150, 150, 10352, '2018-01-27 20:23:16', 'ThaNos', 'A002'),
(10, '50500000001', NULL, NULL, '00000000002', NULL, 299, 299, 10053, '2018-01-27 20:23:31', 'Dota2', 'A002'),
(11, '50500000001', NULL, NULL, '00000000003', NULL, 690, 690, 9363, '2018-01-31 20:24:02', 'Overwatch', 'A002'),
(12, '50500000001', NULL, NULL, '00000000004', NULL, 250, 250, 9113, '2018-02-02 20:24:27', 'PhotoSet', 'A002'),
(13, '50500000001', NULL, NULL, '00000000005', NULL, 1080, 1080, 8033, '2018-02-07 20:24:52', 'GTX 1080', 'A002'),
(14, '56500000001', NULL, NULL, '00000000005', NULL, 1080, 1080, 8920, '2018-02-11 20:29:22', '1080ti', 'A002'),
(15, '56500000002', NULL, '50000000004', NULL, '000', 500, 500, 9500, '2018-02-12 20:29:58', 'comp', 'A001'),
(16, '50000000004', '56500000002', NULL, NULL, '000', 500, 500, 11000, '2018-02-12 20:29:58', 'comp', 'A003'),
(17, '56500000011', NULL, '12365970324', NULL, '003', 500, 515, 9485, '2018-02-14 20:30:46', 'for donation', 'A001'),
(18, '56500000011', NULL, '50500000001', NULL, '000', 999, 999, 8486, '2018-02-15 20:32:03', 'vote', 'A001'),
(19, '50500000001', '56500000011', NULL, NULL, '000', 999, 999, 9032, '2018-02-15 20:32:03', 'vote', 'A003'),
(20, '56500000002', NULL, NULL, '00000000003', NULL, 690, 690, 8810, '2018-02-16 20:34:43', 'overwatch', 'A002'),
(21, '56500000001', NULL, NULL, '00000000004', NULL, 250, 250, 8670, '2018-03-08 20:35:55', 'Photoset', 'A002'),
(22, '56500000011', NULL, '50000000001', NULL, '000', 1500, 1500, 6986, '2018-03-09 20:36:37', 'vote for cher', 'A001'),
(23, '50000000001', '56500000011', NULL, NULL, '000', 1500, 1500, 8500, '2018-03-09 20:36:37', 'vote for cher', 'A003'),
(24, '60500000001', NULL, NULL, '00000000003', NULL, 690, 690, 9310, '2018-03-14 20:39:54', 'overwatch key', 'A002'),
(25, '60500000001', NULL, '98765432105', NULL, '006', 2500, 2515, 6795, '2018-03-21 20:41:21', 'T-Shirt', 'A001'),
(26, '50500000002', NULL, '85665970324', NULL, '005', 1750, 1765, 8235, '2018-03-22 20:46:59', 'KILL BOSS!!!', 'A001'),
(27, '50500000002', NULL, '55764320324', NULL, '007', 690, 705, 7530, '2018-03-23 20:48:46', 'Dinner', 'A001'),
(28, '50500000002', NULL, '50500456781', NULL, '002', 436, 451, 7079, '2018-03-25 20:50:03', 'Crate show me the money', 'A001'),
(29, '50500000002', NULL, NULL, '00000000002', NULL, 299, 299, 6780, '2018-03-27 20:51:05', 'UserID = \'$UserID\'', 'A002'),
(30, '50500000002', NULL, NULL, '00000000001', NULL, 150, 150, 6630, '2018-03-27 20:52:10', 'Movie2free', 'A002'),
(31, '50500000002', NULL, NULL, '00000000004', NULL, 250, 250, 6380, '2018-03-31 20:52:33', 'JN.', 'A002'),
(32, '50500000003', NULL, NULL, '00000000003', NULL, 690, 690, 9310, '2018-04-03 20:53:19', '', 'A002'),
(33, '50500000003', NULL, NULL, '00000000004', NULL, 250, 250, 9060, '2018-04-08 20:53:44', 'JJJ', 'A002'),
(34, '50500000003', NULL, '50500000001', NULL, '000', 999, 999, 8061, '2018-04-10 20:54:57', 'LOVE YOU', 'A001'),
(35, '50500000001', '50500000003', NULL, NULL, '000', 999, 999, 10031, '2018-04-10 20:54:57', 'LOVE YOU', 'A003'),
(36, '50500000003', NULL, '60500000002', NULL, '000', 1750, 1750, 6311, '2018-04-20 20:55:36', '', 'A001'),
(37, '60500000002', '50500000003', NULL, NULL, '000', 1750, 1750, 11750, '2018-04-20 20:55:37', '', 'A003'),
(38, '50500000003', NULL, '60500000003', NULL, '000', 666, 666, 5645, '2018-04-25 20:56:18', '', 'A001'),
(39, '60500000003', '50500000003', NULL, NULL, '000', 666, 666, 10666, '2018-04-25 20:56:18', '', 'A003'),
(42, '50500000003', NULL, '59000000005', NULL, '001', 1000, 1015, 4630, '2018-05-06 20:58:15', '', 'A001'),
(43, '59000000001', NULL, NULL, '00000000001', NULL, 150, 150, 9850, '2018-05-07 21:00:21', 'Black Panter', 'A002'),
(44, '59000000001', NULL, '50000000003', NULL, '002', 1200, 1215, 8635, '2018-05-08 21:01:44', 'GG', 'A001'),
(45, '59000000001', NULL, NULL, '00000000005', NULL, 1080, 1080, 7555, '2018-05-12 21:02:37', 'Graphic Card', 'A002'),
(46, '59000000001', NULL, '50000000002', NULL, '000', 500, 500, 7055, '2018-05-18 21:03:08', 'DD', 'A001'),
(47, '50000000002', '59000000001', NULL, NULL, '000', 500, 500, 11499, '2018-05-18 21:03:08', 'DD', 'A003'),
(48, '50500000005', NULL, '60500000001', NULL, '000', 4500, 4500, 5500, '2018-05-24 21:05:46', 'UFABet', 'A001'),
(49, '60500000001', '50500000005', NULL, NULL, '000', 4500, 4500, 11295, '2018-05-24 21:05:46', 'UFABet', 'A003'),
(50, '50500000005', NULL, NULL, '00000000004', NULL, 250, 250, 5250, '2018-05-28 21:06:14', 'Phoset', 'A002'),
(51, '50500000005', NULL, NULL, '00000000003', NULL, 690, 690, 4560, '2018-05-30 21:07:46', 'Overwatch Key Gen', 'A002');

-- --------------------------------------------------------

--
-- Table structure for table `transactioncode`
--

CREATE TABLE `transactioncode` (
  `TransactionCode` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TransactionType` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactioncode`
--

INSERT INTO `transactioncode` (`TransactionCode`, `TransactionType`) VALUES
('A001', 'Transfer'),
('A002', 'Bill Payment'),
('A003', 'Receive'),
('A004', 'Interest');

-- --------------------------------------------------------

--
-- Table structure for table `typeaccount`
--

CREATE TABLE `typeaccount` (
  `TypeAccountID` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TypeAccount` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IntRate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typeaccount`
--

INSERT INTO `typeaccount` (`TypeAccountID`, `TypeAccount`, `IntRate`) VALUES
('1', 'Saving', 0.5),
('2', 'Fixed Deposit 3', 0.9),
('3', 'Fixed Deposit 6', 1.1),
('4', 'Fixed Deposit 12', 1.3),
('5', 'Fixed Deposit 24', 1.5),
('6', 'Current', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE `userid` (
  `UserID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AccountNo` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`UserID`, `AccountNo`, `Password`) VALUES
('Chanin', '57000000004', '81dc9bdb52d04dc20036dbd8313ed055'),
('Chatchai ', '57000000003', '81dc9bdb52d04dc20036dbd8313ed055'),
('CHERPRANG', '50000000001', '0ff89de99d4a8f4b04cb162bcb5740cf'),
('gerrard8', '60500000001', '4ebac1ea54c153b89443867fa57e106c'),
('JENNIS', '50500000001', '639fc2398fd45606ada087e30168287b'),
('JENNIS', '50500000002', '639fc2398fd45606ada087e30168287b'),
('JENNIS', '50500000003', '639fc2398fd45606ada087e30168287b'),
('JETSUPA', '57000000002', '772a12a3721c69f0abc363824e6cf1b6'),
('Kamonporn ', '59000000001', '827ccb0eea8a706c4c34a16891f84e7b'),
('Kanin', '50000000004', '827ccb0eea8a706c4c34a16891f84e7b'),
('Kuljira', '57000000001', '827ccb0eea8a706c4c34a16891f84e7b'),
('Kunapot', '56500000005', '827ccb0eea8a706c4c34a16891f84e7b'),
('Kunuch', '59000000002', '827ccb0eea8a706c4c34a16891f84e7b'),
('messi10', '50500000005', '731c110542108947840060ad7d996c38'),
('N3V4L0ZT', '56500000001', '7ff1b2771924ca37deb7f657ed87ba97'),
('N3V4L0ZT', '56500000002', '7ff1b2771924ca37deb7f657ed87ba97'),
('N3V4L0ZT', '56500000011', '7ff1b2771924ca37deb7f657ed87ba97'),
('NAPAPHAT', '56500000003', '7aa03c3c187aa873b6f20d687ff5c92a'),
('NAYIKA', '50500000004', '4dde77cd192e5101fe0a317e00ba3827'),
('nicha23', '57000000005', '827ccb0eea8a706c4c34a16891f84e7b'),
('Nutsuda', '50000000002', '81dc9bdb52d04dc20036dbd8313ed055'),
('prayut44', '50000000003', '83e6f2ccad3cd8f664caa0f553faca35'),
('Tammanoon', '50500000006', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `UserID` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdentificationNo` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PassportNo` varchar(13) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DateofBirth` date NOT NULL,
  `Nationality` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HighestEducation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `Occupation` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaritalStatus` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ResidentialStatus` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `MobileNo` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TelNo` varchar(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ZIPCode` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `IdentificationNo`, `PassportNo`, `Name`, `DateofBirth`, `Nationality`, `Gender`, `HighestEducation`, `Occupation`, `MaritalStatus`, `ResidentialStatus`, `MobileNo`, `TelNo`, `Email`, `Address`, `ZIPCode`) VALUES
('Chanin', '4288740360734', '', 'Chanin Chongtanapaitoon', '2000-02-21', 'Thai', 'male', 'secondary', 'fisherman', 'single', 'condo', '0618800222', '', 'jojojj2012@hotmail.com', '126 Prachautit Road, Bangmod, Thung Khru, Bangkok 10140 Thailand', '10140'),
('Chatchai ', '4765057042137', '', 'Chatchai Kanjanamala', '1999-11-12', 'Thai', 'male', 'primary', 'Trader', 'married', 'condo', '0846476039', '026978114', 'familyfriendstv@gmail.com', '153/92', '10500'),
('CHERPRANG', '2834472271400', '-', 'CHERPRANG AREEKUL', '1991-03-10', 'Thai', 'female', 'doctorate', 'Teacher', 'single', 'home', '0200000001', '-', 'CHERPRANG_AREEKUL@hotmail.com', '2606/1', '10140'),
('gerrard8', '6796423630766', '', 'Steven Gerrard', '1980-12-08', 'Thai', 'male', 'doctorate', 'Chef', 'single', 'condo', '085182236', '021854923', 'sg8@hotmail.com', '126/52 andfield road', '10120'),
('JENNIS', '2786441755211', '-', 'JENNIS OPRASERT', '1988-02-05', 'Thai', 'male', 'master', 'Soilder', 'married', 'townhouse', '0200000002', '-', 'JENNIS_OPRASERT@hotmail.com', '2606/2', '10160'),
('JETSUPA', '1883087075451', '-', 'JETSUPA KRUETANG', '1980-06-29', 'Thailand', 'male', 'master', 'Hotline', 'single', 'home', '0905165166', '086422638', 'JETSUPA_KRUETANG@hotmail.com', '126 Prachautit Road, Bangmod, Thung Khru, Bangkok 10140 Thailand', '10700'),
('Kamonporn ', '1201644702751', '-', 'Kamonporn Hanthanunchai', '1996-06-06', 'Thai', 'male', 'master', 'Teacher', 'married', 'townhouse', '0851533799', '-', 'Kamonporn Hanthanunchai@hotmail.com', '2909/1', '10220'),
('Kanin', '1882167227885', '-', 'Kanin Ngamsanlerd', '1980-01-01', 'Thailand', 'female', 'doctorate', 'acrobat', 'single', 'home', '0958753630', '-', 'Kanin_Ngamsanlerd@hotmail.com', '45/6', '10140'),
('Kuljira', '1687467521751', '-', 'Kuljira Jamying', '1980-03-08', 'Thai', 'male', 'bachelor', 'accountant', 'single', 'home', '0863243074', '', 'Kuljira_Jamying@hotmail.com', '998/9', '10250'),
('Kunapot', '3813040836371', '-', 'Kunapot Porngrasae', '1982-12-08', 'Thai', 'female', 'bachelor', 'adman', 'divorce', 'other', '0971351188', '-', 'sitthisak_u_nick@hotmail.com', '126/7', '10500'),
('Kunuch', '2113170464669', '-', 'Kunuch Terdtinwitid', '1999-06-07', 'Thai', 'male', 'master', 'actor', 'married', 'townhouse', '0829769764', '-', 'Kunuch Terdtinwitid@hotmail.com', '12345/7', '10600'),
('messi10', '7217452223867', '', 'Lionel Messi', '1987-03-10', 'Thai', 'male', 'master', 'Football Player', 'married', 'home', '0875019227', '021584192', 'messi10@gmail.com', '53/311', '10140'),
('N3V4L0ZT', '6337771402140', '', 'Jaruwat Arunpai', '1997-03-10', 'Thai', 'male', 'bachelor', 'Student', 'single', 'home', '0815597570', '024632290', 'jaruwat197@hotmail.com', '53/311 bangkru ', '10140'),
('NAPAPHAT', '1340287431326', '-', 'NAPAPHAT WORRAPHUTTANON', '1994-12-04', 'Thai', 'female', 'doctorate', 'Administer', 'single', 'home', '0200000004', '086422638', 'NAPAPHAT_WORRAPHUTTANON@hotmail.com', '126 Prachautit Road, Bangmod, Thung Khru, Bangkok 10140 Thailand', '10510'),
('NAYIKA', '3531853232238', '-', 'NAYIKA SRINIAN', '1993-06-09', 'Thai', 'female', 'secondary', 'Chef', 'single', 'condo', '0864226383', '-', 'NAYIKA_SRINIAN@hotmail.com', '2606/3', '10220'),
('nicha23', '3807844675036', '', 'Nichaphat', '1998-05-24', 'Thai', 'female', 'secondary', 'Gamer', 'single', 'condo', '0832541701', '024701711', 'nichapat.bie@gmail.com', '100/118 bangkurat bangbuathong nonthaburi', '10300'),
('Nutsuda', '6244224571223', '', 'Nutsuda Rachasik', '1997-02-08', 'Thai', 'female', 'bachelor', 'freelance', 'single', 'townhouse', '0892653935', '028479652', 'nutsuda.aingly@gmail.com', '179/55', '10520'),
('prayut44', '2667314867659', '', 'Prayut Chan-O-Cha', '1958-04-12', 'Thai', 'male', 'doctorate', 'Soilder', 'married', 'home', '0914536978', '024444444', 'TU44@gmail.com', 'Thai Army', '10520'),
('Tammanoon', '6284258412268', '', 'Tammanoon Jonjaturong', '1994-02-05', 'Thai', 'male', 'secondary', 'engineer', 'divorce', 'townhouse', '0993639853', '028421760', 'maxsayr5@gmail.com', 'KMUTT', '10140');

-- --------------------------------------------------------

--
-- Table structure for table `zip`
--

CREATE TABLE `zip` (
  `ZIPCode` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `District` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Province` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zip`
--

INSERT INTO `zip` (`ZIPCode`, `District`, `Province`) VALUES
('10100', 'Samphanthawong', 'Bangkok'),
('10110', 'Wattana', 'Bangkok'),
('10120', 'Yannawa', 'Bangkok'),
('10140', 'Thung Khru', 'Bangkok'),
('10150', 'Bang Khun Thian', 'Bangkok'),
('10160', 'Bang Khae', 'Bangkok'),
('10170', 'Thawi Wattana', 'Bangkok'),
('10200', 'Phra Nakhon', 'Bangkok'),
('10210', 'Lak Si', 'Bangkok'),
('10220', 'Bang Khen', 'Bangkok'),
('10230', 'Lat Phrao', 'Bangkok'),
('10240', 'Bung Kum', 'Bangkok'),
('10250', 'Pra Vet', 'Bangkok'),
('10260', 'Phra Khanong', 'Bangkok'),
('10300', 'Dusit', 'Bangkok'),
('10310', 'Wangthong Lang', 'Bangkok'),
('10320', 'Huai Khwang', 'Bangkok'),
('10330', 'Pathum Wan', 'Bangkok'),
('10400', 'Din Daeng', 'Bangkok'),
('10500', 'Bang Rak', 'Bangkok'),
('10510', 'Min Buri', 'Bangkok'),
('10520', 'Lat Krabang', 'Bangkok'),
('10530', 'Nong Chok', 'Bangkok'),
('10600', 'Bangkok Yai', 'Bangkok'),
('10700', 'Bangkok Noi', 'Bangkok'),
('10800', 'Bang Sue', 'Bangkok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountNo`),
  ADD KEY `BranchID` (`BranchID`) USING BTREE,
  ADD KEY `TypeAccountID` (`TypeAccountID`) USING BTREE;

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`BankID`);

--
-- Indexes for table `billinfo`
--
ALTER TABLE `billinfo`
  ADD PRIMARY KEY (`PaymentCode`);

--
-- Indexes for table `branchinfo`
--
ALTER TABLE `branchinfo`
  ADD PRIMARY KEY (`BranchID`),
  ADD KEY `ZIP` (`ZIPCode`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`StatementNo`),
  ADD KEY `PaymentCode` (`PaymentCode`),
  ADD KEY `BankID` (`BankID`),
  ADD KEY `TransactionCode` (`TransactionCode`),
  ADD KEY `Account No.` (`AccountNo`);

--
-- Indexes for table `transactioncode`
--
ALTER TABLE `transactioncode`
  ADD PRIMARY KEY (`TransactionCode`);

--
-- Indexes for table `typeaccount`
--
ALTER TABLE `typeaccount`
  ADD PRIMARY KEY (`TypeAccountID`);

--
-- Indexes for table `userid`
--
ALTER TABLE `userid`
  ADD PRIMARY KEY (`UserID`,`AccountNo`),
  ADD UNIQUE KEY `AccountNo` (`AccountNo`) USING BTREE,
  ADD KEY `UserID` (`UserID`) USING BTREE;

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `ZIPCode` (`ZIPCode`);

--
-- Indexes for table `zip`
--
ALTER TABLE `zip`
  ADD PRIMARY KEY (`ZIPCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `StatementNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `BranchID` FOREIGN KEY (`BranchID`) REFERENCES `branchinfo` (`BranchID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `TypeAccountID` FOREIGN KEY (`TypeAccountID`) REFERENCES `typeaccount` (`TypeAccountID`) ON UPDATE CASCADE;

--
-- Constraints for table `branchinfo`
--
ALTER TABLE `branchinfo`
  ADD CONSTRAINT `ZIP` FOREIGN KEY (`ZIPCode`) REFERENCES `zip` (`ZIPCode`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `AccountNo1` FOREIGN KEY (`AccountNo`) REFERENCES `account` (`AccountNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `BankID` FOREIGN KEY (`BankID`) REFERENCES `bank` (`BankID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `PaymentCode` FOREIGN KEY (`PaymentCode`) REFERENCES `billinfo` (`PaymentCode`) ON UPDATE CASCADE,
  ADD CONSTRAINT `TransactionCode` FOREIGN KEY (`TransactionCode`) REFERENCES `transactioncode` (`TransactionCode`) ON UPDATE CASCADE;

--
-- Constraints for table `userid`
--
ALTER TABLE `userid`
  ADD CONSTRAINT `AccountNo` FOREIGN KEY (`AccountNo`) REFERENCES `account` (`AccountNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `UserID` FOREIGN KEY (`UserID`) REFERENCES `userinfo` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `ZIPCode` FOREIGN KEY (`ZIPCode`) REFERENCES `zip` (`ZIPCode`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
