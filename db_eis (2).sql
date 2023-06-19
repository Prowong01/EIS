-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 06:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `p_id` int(11) NOT NULL,
  `p_code` varchar(200) DEFAULT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_image` varchar(200) DEFAULT NULL,
  `p_ctg` int(100) NOT NULL,
  `p_desc` text DEFAULT NULL,
  `p_price` float DEFAULT NULL,
  `p_sellPrice` float NOT NULL,
  `p_stock` int(11) NOT NULL,
  `p_supplierID` int(100) NOT NULL,
  `p_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`p_id`, `p_code`, `p_name`, `p_image`, `p_ctg`, `p_desc`, `p_price`, `p_sellPrice`, `p_stock`, `p_supplierID`, `p_status`) VALUES
(124, 'BS614TX', 'HP Pavillion 15', NULL, 1, NULL, 70, 80, 3, 1, 2),
(125, 'BT-CR2032', 'CMOS BATTERY CR2032', NULL, 1, NULL, 100, 120, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_productscategory`
--

CREATE TABLE `tb_productscategory` (
  `ctg_id` int(100) NOT NULL,
  `ctg_desc` varchar(200) NOT NULL,
  `ctg_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_productscategory`
--

INSERT INTO `tb_productscategory` (`ctg_id`, `ctg_desc`, `ctg_text`) VALUES
(1, 'Electronics', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_productstatus`
--

CREATE TABLE `tb_productstatus` (
  `ps_id` int(100) NOT NULL,
  `ps_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_productstatus`
--

INSERT INTO `tb_productstatus` (`ps_id`, `ps_desc`) VALUES
(1, 'No stock'),
(2, 'Low stock'),
(3, 'In stock');

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaseorders`
--

CREATE TABLE `tb_purchaseorders` (
  `po_id` int(100) NOT NULL,
  `po_no` varchar(50) DEFAULT NULL,
  `po_cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `po_prID` int(100) NOT NULL,
  `po_paymentTerm` int(11) NOT NULL,
  `po_buyer` int(11) DEFAULT NULL,
  `po_deliveryTo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaseorders`
--

INSERT INTO `tb_purchaseorders` (`po_id`, `po_no`, `po_cdate`, `po_prID`, `po_paymentTerm`, `po_buyer`, `po_deliveryTo`) VALUES
(1, 'PO23060001', '2023-06-18 08:03:26', 1, 30, NULL, 'TSK SYNERGY SDN BHD\r\nNO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.'),
(2, 'PO2306606e7f', '2023-06-18 05:57:58', 2, 30, NULL, 'TSK SYNERGY SDN BHD\r\nNO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaserequests`
--

CREATE TABLE `tb_purchaserequests` (
  `pr_id` int(100) NOT NULL,
  `pr_no` varchar(50) NOT NULL,
  `pr_cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `pr_ddate` date NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `pr_uom` int(11) NOT NULL,
  `pr_supplierID` int(100) NOT NULL,
  `pr_subtot` float NOT NULL,
  `pr_tax` float NOT NULL,
  `pr_total` float NOT NULL,
  `pr_prodID` int(100) NOT NULL,
  `pr_status` int(100) NOT NULL,
  `pr_requestedBy` int(11) DEFAULT NULL,
  `pr_approvedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaserequests`
--

INSERT INTO `tb_purchaserequests` (`pr_id`, `pr_no`, `pr_cdate`, `pr_ddate`, `pr_qty`, `pr_uom`, `pr_supplierID`, `pr_subtot`, `pr_tax`, `pr_total`, `pr_prodID`, `pr_status`, `pr_requestedBy`, `pr_approvedBy`) VALUES
(1, 'PR23060001', '2023-06-18 10:23:01', '2023-06-25', 1, 1, 1, 70, 0, 74.9, 124, 2, NULL, NULL),
(2, 'PR23060002', '2023-06-18 12:25:20', '2023-06-25', 1, 1, 2, 101, 0, 101, 125, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaserequeststatus`
--

CREATE TABLE `tb_purchaserequeststatus` (
  `ps_id` int(100) NOT NULL,
  `ps_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaserequeststatus`
--

INSERT INTO `tb_purchaserequeststatus` (`ps_id`, `ps_desc`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suppliers`
--

CREATE TABLE `tb_suppliers` (
  `sup_id` int(100) NOT NULL,
  `sup_name` varchar(200) NOT NULL,
  `sup_shop` varchar(200) NOT NULL,
  `sup_address` text DEFAULT NULL,
  `sup_phone` varchar(100) DEFAULT NULL,
  `sup_fax` varchar(100) DEFAULT NULL,
  `sup_email` varchar(100) DEFAULT NULL,
  `sup_shippingFee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suppliers`
--

INSERT INTO `tb_suppliers` (`sup_id`, `sup_name`, `sup_shop`, `sup_address`, `sup_phone`, `sup_fax`, `sup_email`, `sup_shippingFee`) VALUES
(1, 'IT.CEO', 'Shopee', NULL, NULL, NULL, NULL, 4.9),
(2, 'KB TOY SHOP', 'Shopee', NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_supplierID` (`p_supplierID`),
  ADD KEY `p_ctg` (`p_ctg`),
  ADD KEY `p_status` (`p_status`);

--
-- Indexes for table `tb_productscategory`
--
ALTER TABLE `tb_productscategory`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `tb_productstatus`
--
ALTER TABLE `tb_productstatus`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `po_prID` (`po_prID`,`po_buyer`);

--
-- Indexes for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `pr_supplierID` (`pr_supplierID`,`pr_prodID`,`pr_status`,`pr_requestedBy`,`pr_approvedBy`),
  ADD KEY `pr_status` (`pr_status`),
  ADD KEY `pr_prodID` (`pr_prodID`);

--
-- Indexes for table `tb_purchaserequeststatus`
--
ALTER TABLE `tb_purchaserequeststatus`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `tb_suppliers`
--
ALTER TABLE `tb_suppliers`
  ADD PRIMARY KEY (`sup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tb_productscategory`
--
ALTER TABLE `tb_productscategory`
  MODIFY `ctg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_productstatus`
--
ALTER TABLE `tb_productstatus`
  MODIFY `ps_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  MODIFY `po_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  MODIFY `pr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_purchaserequeststatus`
--
ALTER TABLE `tb_purchaserequeststatus`
  MODIFY `ps_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_suppliers`
--
ALTER TABLE `tb_suppliers`
  MODIFY `sup_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD CONSTRAINT `tb_products_ibfk_1` FOREIGN KEY (`p_ctg`) REFERENCES `tb_productscategory` (`ctg_id`),
  ADD CONSTRAINT `tb_products_ibfk_2` FOREIGN KEY (`p_supplierID`) REFERENCES `tb_suppliers` (`sup_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_products_ibfk_3` FOREIGN KEY (`p_status`) REFERENCES `tb_productstatus` (`ps_id`);

--
-- Constraints for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  ADD CONSTRAINT `tb_purchaseorders_ibfk_1` FOREIGN KEY (`po_prID`) REFERENCES `tb_purchaserequests` (`pr_id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  ADD CONSTRAINT `tb_purchaserequests_ibfk_1` FOREIGN KEY (`pr_status`) REFERENCES `tb_purchaserequeststatus` (`ps_id`),
  ADD CONSTRAINT `tb_purchaserequests_ibfk_2` FOREIGN KEY (`pr_supplierID`) REFERENCES `tb_suppliers` (`sup_id`),
  ADD CONSTRAINT `tb_purchaserequests_ibfk_3` FOREIGN KEY (`pr_prodID`) REFERENCES `tb_products` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
