-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 02, 2022 at 01:16 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4140_A2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clients923`
--

CREATE TABLE `Clients923` (
  `clientId923` int(11) NOT NULL,
  `clientName923` varchar(255) NOT NULL,
  `clientCity923` varchar(255) NOT NULL,
  `clientPassword923` varchar(255) NOT NULL,
  `MoneyOwed923` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Clients923`
--

INSERT INTO `Clients923` (`clientId923`, `clientName923`, `clientCity923`, `clientPassword923`, `MoneyOwed923`) VALUES
(1, 'Foo Bar', 'Toronto', '1234Falafel', '10'),
(2, 'Jason Derulo', 'Miami', 'Jas0nD', '42'),
(3, 'Bruce Wayne', 'Gotham', 'ImBatman', '11');

-- --------------------------------------------------------

--
-- Table structure for table `Lines923`
--

CREATE TABLE `Lines923` (
  `poNo923` int(11) NOT NULL,
  `lineNo923` int(11) NOT NULL,
  `partNo923` int(11) NOT NULL,
  `qty923` int(11) NOT NULL,
  `priceOrdered923` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Parts923`
--

CREATE TABLE `Parts923` (
  `partNo923` int(11) NOT NULL,
  `partName923` varchar(255) NOT NULL,
  `currentPrice923` decimal(2,0) NOT NULL,
  `qoh923` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Parts923`
--

INSERT INTO `Parts923` (`partNo923`, `partName923`, `currentPrice923`, `qoh923`) VALUES
(1, 'Wire', '10', 3),
(2, 'Steel', '9', 3),
(3, 'Rod', '8', 2),
(4, 'Nut', '7', 5),
(5, 'Bolt', '6', 6),
(6, 'Wrench', '5', 3),
(7, 'Wood', '4', 7),
(8, 'Saw', '3', 11),
(9, 'Light', '2', 32),
(10, 'Potato', '1', 100);

-- --------------------------------------------------------

--
-- Table structure for table `POs923`
--

CREATE TABLE `POs923` (
  `poNo923` int(11) NOT NULL,
  `ClientCompID923` int(11) NOT NULL,
  `dateOfP923` date NOT NULL,
  `status923` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `POs923`
--

INSERT INTO `POs923` (`poNo923`, `ClientCompID923`, `dateOfP923`, `status923`) VALUES
(0, 10, '2022-11-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clients923`
--
ALTER TABLE `Clients923`
  ADD PRIMARY KEY (`clientId923`),
  ADD UNIQUE KEY `clientId923` (`clientId923`);

--
-- Indexes for table `Lines923`
--
ALTER TABLE `Lines923`
  ADD PRIMARY KEY (`poNo923`);

--
-- Indexes for table `Parts923`
--
ALTER TABLE `Parts923`
  ADD PRIMARY KEY (`partNo923`),
  ADD UNIQUE KEY `partNo923` (`partNo923`);

--
-- Indexes for table `POs923`
--
ALTER TABLE `POs923`
  ADD PRIMARY KEY (`poNo923`),
  ADD UNIQUE KEY `poNo923` (`poNo923`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
