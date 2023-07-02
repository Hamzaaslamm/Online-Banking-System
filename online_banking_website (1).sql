-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 06:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_banking_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountNO` int(11) NOT NULL,
  `AccountStatus` varchar(20) NOT NULL,
  `AccountType` varchar(20) NOT NULL,
  `Balance` float NOT NULL,
  `MLoginID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountNO`, `AccountStatus`, `AccountType`, `Balance`, `MLoginID`) VALUES
(11112, 'Active', 'Saving', 142000, 1001),
(11113, 'Active', 'Current', 30000, 1001),
(11114, 'Non active', 'Saving', 0, 1001),
(11115, 'Non Active', 'Saving', 86000, 1001),
(11116, 'Non active', 'Saving', 20000, 1003);

-- --------------------------------------------------------

--
-- Table structure for table `add_detail`
--

CREATE TABLE `add_detail` (
  `ELoginID` int(11) NOT NULL,
  `CAccount_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_detail`
--

INSERT INTO `add_detail` (`ELoginID`, `CAccount_No`) VALUES
(101, 11112),
(101, 11113),
(101, 11115),
(104, 11116);

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `ATM_ID` int(11) NOT NULL,
  `ATM_BankName` varchar(20) NOT NULL,
  `ATM_Branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`ATM_ID`, `ATM_BankName`, `ATM_Branch`) VALUES
(1, 'Kamal Ashraf Bank', 1),
(2, 'Kamal Ashraf Bank', 1);

-- --------------------------------------------------------

--
-- Table structure for table `belongs_to`
--

CREATE TABLE `belongs_to` (
  `branchNO` int(11) NOT NULL,
  `CAccount_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchNO` int(11) NOT NULL,
  `Location_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchNO`, `Location_ID`) VALUES
(1, 1),
(3, 2),
(4, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CAccount_No` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `PIN` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `AccountNO` int(11) NOT NULL,
  `ATM_ID` int(11) NOT NULL,
  `Request_Type` text DEFAULT NULL,
  `Request_Status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CAccount_No`, `Name`, `PIN`, `id`, `AccountNO`, `ATM_ID`, `Request_Type`, `Request_Status`) VALUES
(11112, 'Memoona', 12346, 1, 11112, 2, NULL, NULL),
(11113, 'Areeba', 12347, 1, 11113, 1, 'Cheque Book', 'Reject'),
(11114, 'Bismah', 1123, 1, 11114, 2, 'ATM', 'Approved'),
(11115, 'kainat', 1235566, 1, 11115, 2, NULL, NULL),
(11116, 'Urooj', 90078601, 1, 11116, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deparments`
--

CREATE TABLE `deparments` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deparments`
--

INSERT INTO `deparments` (`Dept_ID`, `Dept_Name`) VALUES
(1, 'Accountant'),
(2, 'Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Name` varchar(20) NOT NULL,
  `ELoginID` int(11) NOT NULL,
  `Salary` float NOT NULL,
  `Password` varchar(20) NOT NULL,
  `branchNO` int(11) NOT NULL,
  `Dept_ID` int(11) NOT NULL,
  `MLoginID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `ELoginID`, `Salary`, `Password`, `branchNO`, `Dept_ID`, `MLoginID`) VALUES
('Ali', 101, 10000, '1010', 3, 1, 1001),
('Ahmed', 102, 15000, '5334', 3, 2, 1001),
('Bismah', 103, 20000, '1030', 4, 1, 1002),
('Moeez', 104, 20000, '1043', 2, 1, 1003),
('Kinza', 106, 25000, '1060', 1, 1, 1004),
('Esha', 107, 10000, '1070', 4, 2, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `city`, `area`) VALUES
(1, 'Gujranwala', 'Trust Plaza'),
(2, 'Lahore', 'Model Town'),
(3, 'Islamabad', 'Defence'),
(4, 'Gujranwala', 'Awan Chock');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `T_ID` int(11) DEFAULT NULL,
  `CAccount_No` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`T_ID`, `CAccount_No`) VALUES
(23, 11114),
(24, 11114),
(25, 11114),
(26, 11113);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Name` varchar(20) NOT NULL,
  `MLoginID` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Salary` float NOT NULL,
  `branchNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Name`, `MLoginID`, `Password`, `Salary`, `branchNO`) VALUES
('Uzair', 1001, '10010', 50000, 3),
('Umair', 1002, '1135', 30000, 4),
('Hamza', 1003, '1259', 40000, 2),
('Amara', 1004, '10040', 35000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `remove`
--

CREATE TABLE `remove` (
  `ELoginID` int(11) NOT NULL,
  `CAccount_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `save_transaction`
--

CREATE TABLE `save_transaction` (
  `T_ID` int(11) DEFAULT NULL,
  `AccountNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_transaction`
--

INSERT INTO `save_transaction` (`T_ID`, `AccountNO`) VALUES
(23, 11115),
(24, 11115),
(25, 11113),
(26, 11115);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `T_ID` int(11) NOT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`T_ID`, `Amount`) VALUES
(23, 1000),
(24, 1000),
(25, 1000),
(26, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `update_detail`
--

CREATE TABLE `update_detail` (
  `ELoginID` int(11) NOT NULL,
  `CAccount_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_detail`
--

INSERT INTO `update_detail` (`ELoginID`, `CAccount_No`) VALUES
(101, 11115),
(104, 11114);

-- --------------------------------------------------------

--
-- Table structure for table `user_manual`
--

CREATE TABLE `user_manual` (
  `Helping_Guide` varchar(7000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_manual`
--

INSERT INTO `user_manual` (`Helping_Guide`, `id`) VALUES
('Information_Manual', 1);

-- --------------------------------------------------------

--
-- Table structure for table `view_details`
--

CREATE TABLE `view_details` (
  `ELoginID` int(11) NOT NULL,
  `ATM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountNO`),
  ADD KEY `MLoginID` (`MLoginID`);

--
-- Indexes for table `add_detail`
--
ALTER TABLE `add_detail`
  ADD PRIMARY KEY (`ELoginID`,`CAccount_No`),
  ADD KEY `CAccount_No` (`CAccount_No`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`ATM_ID`);

--
-- Indexes for table `belongs_to`
--
ALTER TABLE `belongs_to`
  ADD PRIMARY KEY (`branchNO`,`CAccount_No`),
  ADD KEY `CAccount_No` (`CAccount_No`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchNO`),
  ADD KEY `Location_ID` (`Location_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CAccount_No`),
  ADD KEY `id` (`id`),
  ADD KEY `AccountNO` (`AccountNO`),
  ADD KEY `ATM_ID` (`ATM_ID`);

--
-- Indexes for table `deparments`
--
ALTER TABLE `deparments`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ELoginID`),
  ADD KEY `branchNO` (`branchNO`),
  ADD KEY `Dept_ID` (`Dept_ID`),
  ADD KEY `MLoginID` (`MLoginID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD KEY `T_ID` (`T_ID`),
  ADD KEY `CAccount_No` (`CAccount_No`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`MLoginID`),
  ADD KEY `branchNO` (`branchNO`);

--
-- Indexes for table `remove`
--
ALTER TABLE `remove`
  ADD PRIMARY KEY (`ELoginID`,`CAccount_No`),
  ADD KEY `CAccount_No` (`CAccount_No`);

--
-- Indexes for table `save_transaction`
--
ALTER TABLE `save_transaction`
  ADD KEY `T_ID` (`T_ID`),
  ADD KEY `AccountNO` (`AccountNO`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `update_detail`
--
ALTER TABLE `update_detail`
  ADD PRIMARY KEY (`ELoginID`,`CAccount_No`),
  ADD KEY `CAccount_No` (`CAccount_No`);

--
-- Indexes for table `user_manual`
--
ALTER TABLE `user_manual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_details`
--
ALTER TABLE `view_details`
  ADD PRIMARY KEY (`ELoginID`,`ATM_ID`),
  ADD KEY `ATM_ID` (`ATM_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`MLoginID`) REFERENCES `manager` (`MLoginID`);

--
-- Constraints for table `add_detail`
--
ALTER TABLE `add_detail`
  ADD CONSTRAINT `add_detail_ibfk_1` FOREIGN KEY (`ELoginID`) REFERENCES `employee` (`ELoginID`),
  ADD CONSTRAINT `add_detail_ibfk_2` FOREIGN KEY (`CAccount_No`) REFERENCES `customer` (`CAccount_No`);

--
-- Constraints for table `belongs_to`
--
ALTER TABLE `belongs_to`
  ADD CONSTRAINT `belongs_to_ibfk_1` FOREIGN KEY (`branchNO`) REFERENCES `branch` (`branchNO`),
  ADD CONSTRAINT `belongs_to_ibfk_2` FOREIGN KEY (`CAccount_No`) REFERENCES `customer` (`CAccount_No`);

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_manual` (`id`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`AccountNO`) REFERENCES `account` (`AccountNO`),
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`ATM_ID`) REFERENCES `atm` (`ATM_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`branchNO`) REFERENCES `branch` (`branchNO`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`Dept_ID`) REFERENCES `deparments` (`Dept_ID`),
  ADD CONSTRAINT `employee_ibfk_3` FOREIGN KEY (`MLoginID`) REFERENCES `manager` (`MLoginID`);

--
-- Constraints for table `make`
--
ALTER TABLE `make`
  ADD CONSTRAINT `make_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `transaction` (`T_ID`),
  ADD CONSTRAINT `make_ibfk_2` FOREIGN KEY (`CAccount_No`) REFERENCES `customer` (`CAccount_No`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`branchNO`) REFERENCES `branch` (`branchNO`);

--
-- Constraints for table `remove`
--
ALTER TABLE `remove`
  ADD CONSTRAINT `remove_ibfk_1` FOREIGN KEY (`ELoginID`) REFERENCES `employee` (`ELoginID`),
  ADD CONSTRAINT `remove_ibfk_2` FOREIGN KEY (`CAccount_No`) REFERENCES `customer` (`CAccount_No`);

--
-- Constraints for table `save_transaction`
--
ALTER TABLE `save_transaction`
  ADD CONSTRAINT `save_transaction_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `transaction` (`T_ID`),
  ADD CONSTRAINT `save_transaction_ibfk_2` FOREIGN KEY (`AccountNO`) REFERENCES `account` (`AccountNO`);

--
-- Constraints for table `update_detail`
--
ALTER TABLE `update_detail`
  ADD CONSTRAINT `update_detail_ibfk_1` FOREIGN KEY (`ELoginID`) REFERENCES `employee` (`ELoginID`),
  ADD CONSTRAINT `update_detail_ibfk_2` FOREIGN KEY (`CAccount_No`) REFERENCES `customer` (`CAccount_No`);

--
-- Constraints for table `view_details`
--
ALTER TABLE `view_details`
  ADD CONSTRAINT `view_details_ibfk_1` FOREIGN KEY (`ELoginID`) REFERENCES `employee` (`ELoginID`),
  ADD CONSTRAINT `view_details_ibfk_2` FOREIGN KEY (`ATM_ID`) REFERENCES `atm` (`ATM_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
