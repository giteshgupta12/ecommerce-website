-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 02:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musical`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcat`
--

CREATE TABLE `addcat` (
  `cid` int(255) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcat`
--

INSERT INTO `addcat` (`cid`, `cname`) VALUES
(1, 'Guitar'),
(3, 'Harmonium'),
(4, 'Dhol'),
(5, 'Tabla'),
(6, 'Stand');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `pid` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`pid`, `cid`, `name`, `price`, `pic`) VALUES
(1, 1, 'Electronic guitar', 6500, 'upload/1.jpg'),
(2, 1, 'Electronic guitar', 6500, 'upload/2.jpg'),
(3, 1, 'Electronic guitar', 6500, 'upload/3.jpg'),
(4, 1, 'Electronic guitar', 6500, 'upload/4.jpg'),
(5, 1, 'Electronic guitar', 6500, 'upload/5.jpg'),
(6, 1, 'Electronic guitar', 6500, 'upload/H79039000002000-00-220x220.jpg'),
(7, 1, 'Electronic guitar', 6500, 'upload/1.jpg'),
(8, 1, 'Electronic guitar', 6500, 'upload/2.jpg'),
(9, 1, 'Electronic guitar', 6500, 'upload/3.jpg'),
(10, 1, 'Electronic guitar', 6500, 'upload/4.jpg'),
(11, 1, 'Electronic guitar', 6500, 'upload/5.jpg'),
(12, 1, 'Electronic guitar', 6500, 'upload/H79039000002000-00-220x220.jpg'),
(13, 1, 'Acaustic Guitar', 3200, 'upload/7.jpg'),
(14, 1, 'Acaustic Guitar', 3200, 'upload/8.jpg'),
(15, 1, 'Acaustic Guitar', 3200, 'upload/9.jpg'),
(16, 1, 'Acaustic Guitar', 3200, 'upload/10.jpg'),
(17, 1, 'Acaustic Guitar', 3200, 'upload/11.jpg'),
(18, 1, 'Acaustic Guitar', 3200, 'upload/12.jpg'),
(19, 1, 'Acaustic Guitar', 3200, 'upload/product-250x250.jpeg'),
(20, 1, 'Bacha Guitar', 3600, 'upload/13.jpg'),
(21, 1, 'Bacha Guitar', 3600, 'upload/14.jpg'),
(22, 1, 'Bacha Guitar', 3600, 'upload/15.jpg'),
(23, 1, 'Jambo Guitar', 1900, 'upload/16.jpg'),
(24, 1, 'Jambo Guitar', 1900, 'upload/17.jpg'),
(25, 1, 'Jambo Guitar', 1900, 'upload/18.jpg'),
(26, 1, 'Jambo Guitar', 1900, 'upload/19.jpg'),
(27, 1, 'Jambo Guitar', 1900, 'upload/20.jpg'),
(28, 1, 'Jambo Guitar', 1900, 'upload/21.jpg'),
(29, 3, '7 Stopper', 4500, 'upload/7stopper.jpg'),
(30, 3, '7 Stopper', 4500, 'upload/23.jpg'),
(31, 3, '7 Stopper', 4500, 'upload/24.jpg'),
(32, 3, '7 Stopper', 4500, 'upload/25.jpg'),
(33, 3, '7 Stopper', 4500, 'upload/22.jpg'),
(34, 3, '7 Stopper', 4500, 'upload/26.jpg'),
(35, 3, ' 7 fold', 4900, 'upload/82.jpg'),
(36, 3, ' 7 fold', 4900, 'upload/83.jpg'),
(37, 3, ' 7 fold', 4900, 'upload/84.jpg'),
(38, 0, '', 0, 'upload/'),
(39, 3, '7 fold', 4900, 'upload/85.jpg'),
(40, 3, '7 fold', 4900, 'upload/86.jpg'),
(41, 3, '7 fold', 4900, 'upload/87.jpg'),
(42, 3, '7 fold', 4900, 'upload/88.jpg'),
(43, 3, '3.5 cuplar', 6200, 'upload/81BR0ZtkSuL._SX463_.jpg'),
(44, 3, '3.5 cuplar', 6200, 'upload/90.jpg'),
(45, 3, '3.5 cuplar', 6200, 'upload/91.jpg'),
(46, 3, '3.5 cuplar', 6200, 'upload/92.jpg'),
(47, 3, '3.5 cuplar', 6200, 'upload/93.jpg'),
(48, 3, '3.5 cuplar', 6200, 'upload/94.jpg'),
(49, 3, 'Box Harmonium', 6700, 'upload/3_1024x1024.jpg'),
(50, 3, 'Box Harmonium', 6700, 'upload/95.jpg'),
(51, 3, 'Box Harmonium', 6700, 'upload/96.jpg'),
(52, 3, 'Box Harmonium', 6700, 'upload/97.jpg'),
(53, 3, 'Box Harmonium', 6700, 'upload/98.jpg'),
(54, 3, 'Box Harmonium', 6700, 'upload/772263582.jpg'),
(55, 3, 'Box khari kangi', 8500, 'upload/99.jpg'),
(56, 3, 'Box khari kangi', 8500, 'upload/100.jpg'),
(57, 3, 'Box khari kangi', 8500, 'upload/101.jpg'),
(58, 3, 'Box khari kangi', 8500, 'upload/102.jpg'),
(59, 3, 'Box khari kangi', 8500, 'upload/6001424082963.png'),
(60, 3, 'Box khari kangi', 8500, 'upload/Harm_Bina23bMini__02127.1444252435.350.350.jpg'),
(61, 3, 'Box khari kangi', 8500, 'upload/nm-063-03-500x500.jpg'),
(62, 3, 'Box khari kangi', 8500, 'upload/scale-changer-harmonium-250x250.jpg'),
(63, 3, ' khari kangi 3set', 13600, 'upload/103.jpg'),
(64, 3, ' khari kangi 3set', 13600, 'upload/104.jpg'),
(65, 3, ' khari kangi 3set', 13600, 'upload/105.jpg'),
(66, 3, ' khari kangi 3set', 13600, 'upload/106.jpg'),
(67, 3, ' khari kangi 3set', 13600, 'upload/107.jpeg'),
(68, 3, ' khari kangi 3set', 13600, 'upload/108.jpg'),
(69, 3, 'Scale changer', 28000, 'upload/scale ch.jpg'),
(70, 3, 'Scale changer', 28000, 'upload/scale changer.jpg'),
(71, 3, 'Scale changer', 28000, 'upload/scale zoom.jpg'),
(72, 3, 'Scale changer', 28000, 'upload/scale.jpg'),
(73, 4, 'Sheesham dhol', 4200, 'upload/A.jpg'),
(74, 4, 'Sheesham dhol', 4200, 'upload/B.jpg'),
(75, 4, 'Sheesham dhol', 4200, 'upload/C.jpg'),
(76, 4, 'Sheesham dhol', 4200, 'upload/D.jpg'),
(77, 4, 'Sheesham dhol', 4200, 'upload/x.jpg'),
(78, 4, 'Sheesham dhol', 4200, 'upload/y.jpg'),
(79, 4, 'Sheesham dhol', 4200, 'upload/z.jpg'),
(80, 4, 'Aam dhol', 2800, 'upload/27.jpg'),
(81, 4, 'Aam dhol', 2800, 'upload/28.jpg'),
(82, 4, 'Aam dhol', 2800, 'upload/32.jpg'),
(83, 4, 'Aam dhol', 2800, 'upload/34.jpg'),
(84, 4, 'Bacha dhol', 700, 'upload/30.jpg'),
(87, 0, 'Stagy dhol', 1900, 'upload/56.jpg'),
(88, 0, 'Stagy dhol', 1900, 'upload/57.jpg'),
(90, 4, 'Stagy dhol', 1900, 'upload/59.jpg'),
(91, 4, 'Stagy dhol', 1900, 'upload/58.jpg'),
(92, 4, 'Stagy dhol', 1900, 'upload/60.jpg'),
(93, 4, 'Stagy dhol', 1900, 'upload/61.jpg'),
(94, 4, 'Sheesham dholak', 1900, 'upload/61.jpg'),
(95, 4, 'Sheesham dholak', 3500, 'upload/41ybm9CrEHL.jpg'),
(96, 4, 'Sheesham dholak', 3500, 'upload/62.jpg'),
(97, 4, 'Sheesham dholak', 3500, 'upload/63.jpg'),
(98, 4, 'Sheesham dholak', 3500, 'upload/c1.jpg'),
(99, 4, 'Sheesham dholak', 3500, 'upload/ABI5_1024x1024.jpg'),
(100, 4, ' Dholak Aam', 950, 'upload/61THCEELa0L._SL1000_.jpg'),
(101, 4, 'Dholak Aam', 950, 'upload/65.jpg'),
(102, 4, 'Dholak Aam', 950, 'upload/66.jpg'),
(103, 4, 'Dholak Aam', 950, 'upload/67.jpg'),
(104, 4, 'Dholak Aam', 950, 'upload/68.jpg'),
(105, 4, 'Dholak Aam', 950, 'upload/81hQefIOOgL._SX425_.jpg'),
(106, 4, 'Dholak Aam', 950, 'upload/dnt1004-nsr-traders-original-imaez7s2uz4h3agg.jpeg'),
(107, 6, 'Dhol Stand', 2900, 'upload/31oApJYe-BL._SY450_.jpg'),
(108, 6, 'Dhol Stand', 2900, 'upload/7758DHOL-STAND_3.jpg'),
(109, 6, 'Dhol Stand', 2900, 'upload/E.jpg'),
(110, 6, 'Dhol Stand', 2900, 'upload/F.jpg'),
(111, 6, 'Dhol Stand', 2900, 'upload/G.jpg'),
(112, 6, 'Dhol Stand', 2900, 'upload/s-l300.jpg'),
(113, 6, 'Guitar Stand', 450, 'upload/41uZGZdSCtL._SX355_.jpg'),
(114, 6, 'Guitar Stand', 450, 'upload/G.jpg'),
(115, 6, 'Guitar Stand', 450, 'upload/H.jpg'),
(116, 6, 'Guitar Stand', 450, 'upload/I.jpg'),
(117, 6, 'Guitar Stand', 450, 'upload/L.jpg'),
(118, 6, 'Guitar Stand', 450, 'upload/J.jpg'),
(119, 6, 'Guitar Stand', 450, 'upload/K.jpg'),
(120, 6, 'Casio stand', 950, 'upload/M.jpg'),
(121, 6, 'Casio stand', 950, 'upload/N.jpg'),
(122, 6, 'Casio stand', 950, 'upload/O.jpg'),
(123, 6, 'Casio stand', 950, 'upload/P.jpg'),
(124, 6, 'Casio stand', 950, 'upload/Q.jpg'),
(125, 6, 'Book stand', 900, 'upload/bookstand_illustration2.jpg'),
(126, 6, 'Book stand', 900, 'upload/S.jpg'),
(127, 6, 'Book stand', 900, 'upload/T.jpg'),
(128, 6, 'Book stand', 900, 'upload/U.jpg'),
(129, 6, 'Book stand', 900, 'upload/V.jpg'),
(130, 5, 'Steel Tabla', 3400, 'upload/70.jpg'),
(131, 5, 'Steel Tabla', 3400, 'upload/71.jpg'),
(132, 5, 'Steel Tabla', 3400, 'upload/71.jpg'),
(133, 5, 'Steel Tabla', 3400, 'upload/72.jpg'),
(134, 5, 'Steel Tabla', 3400, 'upload/73.jpg'),
(135, 5, 'Steel Tabla', 3400, 'upload/74.jpg'),
(136, 5, 'Steel Tabla', 3400, 'upload/steel tabla.jpg'),
(137, 5, 'Electronic Tabla', 6500, 'upload/75.jpg'),
(138, 5, 'Electronic Tabla', 6500, 'upload/76.jpg'),
(139, 5, 'Electronic Tabla', 6500, 'upload/77.jpg'),
(140, 5, 'Electronic Tabla', 6500, 'upload/78.jpg'),
(141, 5, 'Electronic Tabla', 6500, 'upload/79.jpg'),
(142, 5, 'Electronic Tabla', 6500, 'upload/80.jpg'),
(143, 5, ' Tabla Braas', 4800, 'upload/download (1).jpg'),
(144, 5, ' Tabla Braas', 4800, 'upload/download.jpg'),
(145, 5, ' Tabla Braas', 4800, 'upload/images (1).jpg'),
(146, 5, ' Tabla Braas', 4800, 'upload/images (2).jpg'),
(147, 5, ' Tabla Braas', 4800, 'upload/images.jpg'),
(148, 5, ' Tabla Braas', 4800, 'upload/images (3).jpg'),
(150, 10, 'fluteeee', 1500, 'upload/cc.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

CREATE TABLE `finalorder` (
  `oid` int(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalorder`
--

INSERT INTO `finalorder` (`oid`, `payment`, `address`, `city`, `pincode`, `email`, `date`, `service`, `total`, `status`) VALUES
(1, 'COD', ' bus stand', 'jal', '144002', 'x@gmail.com', '27/07/18', '0,31', '4500', 'Approved'),
(2, 'Credit Card', ' kartarpur', 'jal', '144002', 'f@gmail.com', '28/07/18', '0,3', '6500', 'Approved'),
(3, 'Credit Card', ' kartarpur', 'jal', '144002', 'f@gmail.com', '28/07/18', '0', '0', 'Approved'),
(4, 'COD', ' bus stand', 'jalandhar', '144002', 'x@gmail.com', '03/08/18', '0,1', '6500', 'Pending'),
(5, 'COD', ' kartarpur', 'jalandhar', '144801', 'x@gmail.com', '03/08/18', '0,1', '6500', 'Pending'),
(6, 'COD', ' kartarpur', 'jalandhar', '144801', 'x@gmail.com', '03/08/18', '0', '0', 'Pending'),
(7, 'Debit Card', '304 Adarsh Nagar, Jalandhar\r\n304 Adarsh Nagar, Jalandhar', 'Jalandhar', '144001', '', '17/12/20', '0,139', '19500', 'Pending'),
(8, 'Debit Card', ' ', '', '', '', '17/12/20', '0,132', '3400', 'Approved'),
(9, 'COD', ' 87 himachal ut', 'kiss nagar', '169169', 'h@gmail.com', '17/12/20', '0,34', '22500', 'Approved'),
(10, 'Debit Card', 'Hardev Nagar', 'Jalandhar', '144001', 'h@gmail.com', '17/12/20', '0,31', '4500', 'Approved'),
(11, 'Credit Card', 'Hardev Nagar', 'Jalandhar', '144001', 'h@gmail.com', '17/12/20', '0,31', '4500', 'Pending'),
(12, 'Credit Card', 'Hardev Nagar', 'Jalandhar', '144001', 'h@gmail.com', '17/12/20', '0', '0', 'Approved'),
(13, 'COD', '1643 Phase 3b2 sector 60', 'Mohali', '160059', '', '31/03/21', '0,74', '8400', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `mobile`, `address`) VALUES
('', '', '', 0, ''),
('anita', 'anita@gmail.com', 'anita', 9876543210, 'jal'),
('pooja', 'f@gmail.com', '123', 7536936741, 'kartarpur'),
('harman', 'h@gmail.com', '123', 9896374938, '304, Adarsh Nagar'),
('manpreet', 'm@gmail.com', '12345', 8699799181, '334tagore nagar'),
('Taran', 't@gmail.com', '123', 1234567890, 'jalandhar'),
('x', 'x@gmail.com', 'x', 9876543210, 'jal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcat`
--
ALTER TABLE `addcat`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pid` (`pid`,`cid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `finalorder`
--
ALTER TABLE `finalorder`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `oid` (`oid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcat`
--
ALTER TABLE `addcat`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `finalorder`
--
ALTER TABLE `finalorder`
  MODIFY `oid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
