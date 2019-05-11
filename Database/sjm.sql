-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2019 at 05:05 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sjm`
--

-- --------------------------------------------------------

--
-- Table structure for table `database_komputer`
--

CREATE TABLE IF NOT EXISTS `database_komputer` (
  `id_kom` int(25) NOT NULL AUTO_INCREMENT,
  `id_komputer` varchar(50) NOT NULL,
  `user` varchar(30) NOT NULL,
  `computer_name` varchar(25) NOT NULL,
  `sistem_operasi` varchar(50) NOT NULL,
  `motherboard` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `hardisk` varchar(25) NOT NULL,
  `ram` varchar(20) NOT NULL,
  `vga_merk` varchar(25) NOT NULL,
  `vga_size` varchar(20) NOT NULL,
  `monitor_merk` varchar(20) NOT NULL,
  `monitor_size` varchar(20) NOT NULL,
  `keyboard` varchar(5) NOT NULL,
  `mouse` varchar(5) NOT NULL,
  `ups` varchar(5) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `tgl_beli` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `database_komputer`
--

INSERT INTO `database_komputer` (`id_kom`, `id_komputer`, `user`, `computer_name`, `sistem_operasi`, `motherboard`, `processor`, `hardisk`, `ram`, `vga_merk`, `vga_size`, `monitor_merk`, `monitor_size`, `keyboard`, `mouse`, `ups`, `ip_address`, `tgl_beli`) VALUES
(1, 'SIM/PC/PL_JB-01', 'Server 1', 'DB_Server', 'Win Server 2008 R2 64-bit', 'S5500BC', 'Xeon E5606 2,13 GHz', '1 TB', '8 GB', 'Intel HD Grapics', '856 MB', 'LG', '19 inc', 'Ada', 'Ada', '', '19216852', '2019-04-16'),
(2, 'SIM/PC/PL_JB-02', 'Server 2', 'Server_Data', '', '', '', '', '', '', '', '', '', '', '', '', '1921685146', ''),
(3, 'SIM/PC/PL_JB-03', 'Server 3', 'Mail_Server', 'Win Server 2008 R2 64-bit\r\n', 'PowerEdge T30', 'Xeon E3-1225 V5 3,3 GHz\r\n', '1 TB\r\n', '8 GB\r\n', '', '', '', '', '', '', '', '1921685170', ''),
(4, 'SIM/PC/PL_JB-04', 'Server 4', 'Server_SJM', '', '', '', '', '', '', '', '', '', '', '', '', '1921685205', ''),
(5, 'SIM/PC/PL_JB-05', 'Server 5', 'WEB_Server', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'SIM/PC/PL_JB-06', 'Rika', 'JB_IT-3', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'SIM/PC/PL_JB-07', 'Septi', 'JB_FInance-1', 'Windows 7 Ultimate 32-bit', 'MSI H61M-P31/W8', 'Intel Core i3', '250 GB Seagate', '2.00 GB-DDR3', 'Intel HD Graphics', '865 MB', 'LG', '19 inc', 'Ada', 'Ada', '', '1921685195', ''),
(8, 'SIM/PC/PL_JB-08', 'Pipit', 'TBN_Finance-2', 'Windows 7 Ultimate 32-bit', 'Gigabyte GA-H61M-DS2', 'i3-3220 3,3 Ghz', '250 GB Seagate', '4 GB DDR3', 'Intel HD Graphics', '1551 MB', '', '', 'Ada', 'Ada', '', '1921685199', ''),
(9, 'SJM/PC/PL_JB-09', 'INTAN', 'TBN_Finance-2', 'Windows 7 Ultimate 32-bit', 'ASRock B75M-DGS', 'i3-3240 3,4 GHz', '500 GB WD', '4 GB DDR3', 'Intel HD Graphics', '1760 MB', '', '', 'Ada', 'Ada', '', '1921685202', ''),
(10, 'SJM/PC/PL_JB-10', 'FEBRINA', 'Finance-6-PC', 'Windows 7 Ultimate 64-bit', 'Gigabyte H81M-DS2', 'i3-4360 3,7 GHz', '320 GB Seagate', '4 GB DDR3', 'Intel HD Graphics', '', '', '', 'Ada', 'Ada', 'Tidak', '192168554', '2019-04-09'),
(11, 'SJM/PC/PL_JB-11', 'ADITYO', 'JB_Finance-PC', 'Windows 7 Ultimate 64-bit', 'ECS H61H2-M2', 'i3-2120 3,3 GHz', '250 Gb Seagate', '4 GB DDR3', 'Intel HD Graphics', '', '', '', 'Ada', 'Ada', 'Ada', '1921685201', ''),
(12, 'SJM/PC/PL_JB-12', 'ANITA', 'JB_HRD-1', 'Windows 7 Ultimate 64-bit', 'MSI B75MA-P45', 'i3-3210 3,2 GHz', '250 GB WD', '4 GB DDR3', 'Intel HD Graphics', '1787 MB', 'LG', '19 inc', 'Ada', 'Ada', '', '1921685198', ''),
(13, 'SJM/PC/PL_JB-13', 'NITA', 'JB_HRD-2', 'Windows 7 Ultimate 32-bit', 'ASRock B75M R2.0', 'i3-3240 3,4 GHz', '500 GB WD', '4 GB DDR3', 'Intel HD Graphics', '1645 MB', 'PHILIPS', '19 inc', 'Ada', 'Ada', '', '1921685197', ''),
(14, 'SJM/PC/PL_JB-14', 'NOVI', 'JB_HRD-3', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-H61M-DS2', 'i5-2400 3,1 GHz', 'Seagate 500 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '', 'Ada\r\n', 'Ada\r\n', '', '1921685241', ''),
(15, 'SJM/PC/PL_JB-15', 'ISYAA', 'HRD1-PC', 'Windows 7 Ultimate 64-bit', 'ASRock B75M R2.0', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '', 'Ada\r\n', 'Ada\r\n', '', '1921685107', ''),
(16, 'SJM/PC/PL_JB-16', 'ZIDANE', 'JB_MKT-2', 'Windows 7 Ultimate 64-bit', 'ASRock B85 Killer', 'i3-4150 3,5 GHz', '500 GB Seagate', '4 GB DDR3', 'Intel HD Graphics', '', 'LG', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685240', ''),
(17, 'SJM/PC/PL_JB-17', 'MAULANA', 'JB_Marketing-3', 'Windows 7 Ultimate 64-bit', 'Gigabyte H55M-S2', 'i3-530 2,93 GHz', 'WD 500 GB', '2 GB DDR3', 'Intel HD Graphics', '1024 MB', 'PHILIPS', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685182', ''),
(18, 'SJM/PC/PL_JB-18', 'AGUNG', 'JB_MKT-4', 'Windows 7 Ultimate 64-bit', 'MSI B75A-G43', 'i3-3240 3,4 GHz', '500 GB WD', '4 GB DDR3', 'Intel HD Graphics', '1696 MB', 'VIEW SONIC', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168587', ''),
(19, 'SJM/PC/PL_JB-19', 'FRISKA', 'JB_MKT-1', 'Windows 7 Ultimate 64-bit', 'MSI B75MA-P45', 'i3-3210 3,2 GHz', '250 GB WD', '4 GB DDR3', 'Intel HD Graphics', '1787 MB', 'LG', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168584', ''),
(20, 'SJM/PC/PL_JB-20', 'ARIF', 'JB_ISO-PC', 'Windows 7 Ultimate 64-bit', 'Gigabyte H110M-DS2-CF', 'i3-6100 3,7 GHz', '320 GB WD', '4 GB DDR4', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685167', ''),
(21, 'SJM/PC/PL_JB-21', 'YESSI', 'JB_PURC-4', 'Windows 7 Ultimate 64-bit', 'ASRock B85 Killer', 'i3-4150 3,5 GHz', '160 GB Seagate', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685192', ''),
(22, 'SJM/PC/PL_JB-22', 'FADEL', 'JB_Purchasing-2', 'Windows 7 Ultimate 64-bit', 'MSI B75A-G43 (MS-7758)', 'i3-3240 3,4 GHz', '500 GB WD', '4 GB DDR3', 'Intel HD Graphics', '', '', '', 'Ada\r\n', 'Ada\r\n', '', '192168581', ''),
(23, 'SJM/PC/PL_JB-23', 'AUREL', 'JB_PURC-2', 'Windows 10 Pro 64-bit', 'Cherry Trail CR/YV16', 'Intel X5-Z8350 1,44 GHz', 'SSD 64 GB', '4 GB', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168576', ''),
(24, 'SJM/PC/PL_JB-24', 'PUTRA', 'JB_PURC-1', 'Windows 7 Ultimate 64-bit', 'ASRock B75M-DGS R2.0', 'i3-3240 3,4 GHz', '250 GB Seagate', '4 GB DDR3', 'Intel HD Graphics', '', '', '', 'Ada\r\n', 'Ada\r\n', '', '192168586', ''),
(25, 'SJM/PC/PL_JB-25', 'RIZKY', 'JB_QA-6', 'Windows 7 Ultimate 64-bit', 'Gigabyte H61M-DS2', 'i5-2400 3,1 GHz', '500 GB Seagate', '4 GB DDR3', 'Ati Radeon HD 6500', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685101', ''),
(26, 'SJM/PC/PL_JB-26', 'VICKY', 'JB_QA-5', 'Windows 7 Ultimate 64-bit', 'ASRock B75M-DGS R2.0', 'i3-3240 3,4 GHz', '500 GB WD', '4 GB DDR3', 'Intel HD Graphics', '1646 MB', 'VIEW SONIC', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168580', ''),
(27, 'SJM/PC/PL_JB-27', 'CECE', 'JB_QA-2', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-DS3H-A', 'i3-4160 3,6 GHz', '320 GB Seagate', '4 GB DDR3', 'Nvidia GeForce 210', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168589', ''),
(28, 'SJM/PC/PL_JB-28', 'BUDI', 'JB_QA-3', 'Windows 7 Ultimate 64-bit', 'Gigabyte B150M-HD3-CF', 'i3-6100 3,7 GHz', '320 GB Seagate', '8(12) GB DDR4', 'Nvidia GeForce GT 730', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685186', ''),
(29, 'SJM/PC/PL_JB-29', 'BAMBANG', 'JB_DSGN-1', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-DS3H-A', 'i5-4460 3,2 GHz', '320 GB SCSI', '8 GB DDR3', 'Nvidia GeForce GTS 450', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168575', ''),
(30, 'SJM/PC/PL_JB-30', 'SRI/ROSYIANA', 'JB_DSGN-9', 'Windows 7 Ultimate 64-bit', 'Gigabyte P55-UD3L', 'i5-760 2,8 GHz', '250 GB Seagate', '6 GB DDR3', 'Nvidia GeForce GT 630', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685219', ''),
(31, 'SJM/PC/PL_JB-31', 'RIDHO', 'JB_DSGN-10', 'Windows 7 Ultimate 64-bit', 'ASRock', 'i5-2500 3,3 GHz', '500 GB WD', '8 (16) GB DDR3', 'Nvidia GeForce GT 430', '4 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168572', ''),
(32, 'SJM/PC/PL_JB-32', 'ZIDNI', 'JB_DSGN-6', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-DS3H-A', 'i5-4460 3,2 GHz', '320 GB Seagate', '4 (8) GB DDR3', 'Nvidia GeForce GT 420', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168573', ''),
(33, 'SJM/PC/PL_JB-33', 'WISNU', 'JB_DSGN-2', 'Windows 7 Ultimate 64-bit', 'Gigabyte H67M-D2-B3', 'i5-2310 2,9 GHz', '500 GB WD', '8 GB DDR3', 'Nvidia GeForce GT 430', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168564', ''),
(34, 'SJM/PC/PL_JB-34', 'AGUS ', 'JB_DSGN-11', 'Windows 7 Ultimate 64-bit', 'MSI Z77A-G43 (MS-7758)', 'i5-3330 3,0 GHz', '250 GB WD', '8 GB DDR3', 'ATI AMD Radeon HD 6570', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168574', ''),
(35, 'SJM/PC/PL_JB-35', 'ISMAIL', 'JB_DSGN-12', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-P55-US3L', 'i5-760 2,8 GHz', '500 GB Seagate', '6 GB DDR3', 'Nvidia GeForce 9800 GT', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168565', ''),
(36, 'SJM/PC/PL_JB-36', 'PURYONO', 'JB_DSGN-3', 'Windows 7 Ultimate 64-bit', 'Gigabyte P55-US3L', 'i5-750 2,67 GHz', '250 GB Seagate', '8 GB DDR3', 'Nvidia GeForce 9800 GT', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168561', ''),
(37, 'SJM/PC/PL_JB-37', 'ADE M', 'JB_DSGN-5', 'Windows 7 Ultimate 64-bit', 'MSI H81M-E33 (MS-7817)', 'i5-4690 3,5 GHz', '500 GB WD', '8 GB DDR3', 'Nvidia GeForce GT 730', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168567', ''),
(38, 'SJM/PC/PL_JB-38', 'ADE K', 'JB_DSGN-15', 'Windows 7 Ultimate 64-bit', 'Gigabyte Z68AP-D3', 'i5-2500 3,3 GHz', '500 GB Seagate', '8 GB DDR3', 'Nvidia GeForce GT 430', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168571', ''),
(39, 'SJM/PC/PL_JB-39', 'KUSNANDI', 'JB_DSGN-7', 'Windows 7 Ultimate 64-bit', 'MSI', 'i5-4690 3,5 GHz', '500 GB WD', '8 GB DDR3', 'ASUS', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168568', ''),
(40, 'SJM/PC/PL_JB-40', 'TRIO', 'JB_DSGN-13', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-P55-US3L', 'i5-750 2,67 GHz', '250 GB Seagate', '8 (16) GB DDR3', 'Nvidia GeForce 9800 GT', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168570', ''),
(41, 'SJM/PC/PL_JB-41', 'FRANS', 'JB_DSGN-8', 'Windows 7 Ultimate 64-bit', 'Dell 0HHV7N', 'Xeon E5 v3 3,5 GHz', '1 TB Toshiba', '16 GB', 'Nvidia Quadro K2200', '4 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168566', ''),
(42, 'SJM/PC/PL_JB-42', 'TUGIO', 'Design-PC', 'Windows 7 Ultimate 64-bit', 'Gigabyte H61M-DS2', 'i5-2500 3,3 GHz', '500 GB Seagate', '12 GB DDR3', 'ATI Radeon RX 560', '4 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168513', ''),
(43, 'SJM/PC/PL_JB-43', 'RAMADANI', 'JB_DSGN-4', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-P55-US3L', 'i5-750 2,67 GHz', '250 GB WD', '8 (16) GB DDR3', 'Nvidia GeForce 9800 GT', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168563', ''),
(44, 'SJM/PC/PL_JB-44', 'TONDI', 'JB_PE-01', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-B85M-DS3H-A', 'i3-4160 3,6 GHz', '360 GB Seagate', '4 GB DDR3', 'Nvidia GeForce 210', '1 GB', 'LG', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168525', ''),
(45, 'SJM/PC/PL_JB-45', 'JAMAL', 'JB_PE-5', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-B85M-DS3H-A', 'i3-4360 3,7 GHz', '500 GB Seagate', '4 GB DDR3', 'Nvidia GeForce GT 420', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168593', ''),
(46, 'SJM/PC/PL_JB-46', 'ANDRIAS', 'JB_PE-2', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-B85M-DS3H-A', 'i3-4160 3,6 GHz', '320 GB Seagate', '4 GB DDR3', 'Nvidia GeForce 210', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168527', ''),
(47, 'SJM/PC/PL_JB-47', 'MALIK', 'JB_PE-04', 'Windows 7 Ultimate 64-bit', 'MSI Z77A-G43', 'i5-3330 3,0 GHz', 'WD 250 GB', '8 GB DDR3', 'Nvidia GeForce GTX 650', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(48, 'SJM/PC/PL_JB-48', 'HILMAN', 'JB_PE-3', 'Windows 7 Ultimate 64-bit', 'Gigabyte H97-HD3', 'i5-4690 3,5 GHz', '500 GB Seagate', '8 GB DDR3', 'Nvidia GeForce GTX 750 Ti', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168523', ''),
(49, 'SJM/PC/PL_JB-49', 'NANDANG', 'Design_3D-PC', 'Windows 7 Professional 64-bit', 'HP 2AF3/HP Envy 700', 'i7-4790 3,6 GHz', '1 TB SCSI', '8 GB DDR3', 'Nvidia GeForce GTX 745', '4 GB', '', '', 'Ada\r\n', 'Ada\r\n', '', '192168518', ''),
(50, 'SJM/PC/PL_JB-50', 'FINA', 'JB_Warehouse-PC', 'Windows 7 Ultimate 64-bit', 'ASRock B75M-DGS R2.0', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168597', ''),
(51, 'SJM/PC/PL_JB-51', 'TIARA', 'JB_Machining-10', 'Windows 7 Ultimate 64-bit', 'Thin Client', '', '', '', '', '', '', '19 inc\r\n', 'Ada\r\n', 'Ada\r\n', '', '1921685139', ''),
(52, 'SJM/PC/PL_JB-52', 'SURYADI', 'JB_Machining-10', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-H170-HD3', 'i3-6100 3,7 GHz', 'Seagate 320 GB', '4 GB DDR4', 'Nvidia GeForce 210', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685139', ''),
(53, 'SJM/PC/PL_JB-53', 'SUROSO', 'JB_Program-2', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-P55-US3L', 'i5-750 2,67 GHz', 'WD 250 GB', '8 GB', 'Nvidia GeForce GT 730', '4 GB', 'SAMSUNG', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168549', ''),
(54, 'SJM/PC/PL_JB-54', 'FAHRI', 'Robocut-PC', 'Windows 7 Ultimate 32-bit', 'Gigabyte GA-B75M-D3V', 'i3-2120 3,3 GHz', 'WD 250 GB', '4 GB', 'Intel HD Graphics', '1,5 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168528', ''),
(55, 'SJM/PC/PL_JB-55', 'ADHYT', 'JB_PROGRAM-3', 'Windows 7 Ultimate 64-bit', 'Asus M5A97', 'AMD Phenom II X4', 'WD 250 GB', '4 GB DDR3', 'ATI Radeon HD 5500', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168548', ''),
(56, 'SJM/PC/PL_JB-56', 'WIDIA', 'JB_ASSY-1', 'Windows 7 Ultimate 64-bit', 'MSI MS-7758', 'i3-3240 3,4 GHz', '320 GB', '4 GB', 'AMD Radeon R7 200', '3 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168556', ''),
(57, 'SJM/PC/PL_JB-57', 'SILVIA', 'JB_PPC_ENG-2', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-B85M-DS3H-A', 'i3-4160 3,6 GHz', 'Seagate 320 GB', '2 GB', 'Nvidia GeForce 210', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168532', ''),
(58, 'SJM/PC/PL_JB-58', 'KUMAEDI', 'JB_PPIC_ENG-4', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-B85M-DS3H-A', 'i3-4160 3,6 GHz', 'Seagate 320 GB', '4 GB', 'Nvidia GeForce 210', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168545', ''),
(59, 'SJM/PC/PL_JB-59', 'SUCI', 'JB_PPC_ENG-3', 'Windows 7 Ultimate 64-bit', 'MSI B75A-G43', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '1,5 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168529', ''),
(60, 'SJM/PC/PL_JB-60', 'HERDIAN', 'JB_PPC_ENG-1', 'Windows 7 Ultimate 32-bit', 'ECS G41T-M16', 'Dual Core 3 GHz', '380 GB', '2 GB DDR3', 'Nvidia GeForce 210', '512 MB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(61, 'SJM/PC/PL_JB-61', 'APRI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 'SJM/PC/PL_JB-62', 'SUYANTO', 'JB_QC-2-PC', 'Windows 7 Ultimate 64-bit', 'Gigabyte P55-US3L', 'i5-750 2,67 GHz', 'Seagate 250 GB', '2 GB DDR3', 'AMD Radeon R7 200', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168555', ''),
(63, 'SJM/PC/PL_JB-63', 'N EKO', 'JB_QC-1-PC', 'Windows 7 Ultimate 64-bit', 'Gigabyte H55M-S2', 'i3-550 3,2 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168599', ''),
(64, 'SJM/PC/PL_JB-64', 'TRIYADI', 'JB_QC_ENG-03', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-HD3-A', 'i5-4460 3,2 GHz', 'Seagate 320 GB', '8 GB DDR3', 'Nvidia GeForce 210', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168547', ''),
(65, 'SJM/PC/PL_JB-65', 'THOHIRIN', 'JB_QC_PROD-3', 'Windows 7 Ultimate 64-bit', 'MSI B75A-G43', 'i3-3240 3,4 GHz', 'WD 250 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168578', ''),
(66, 'SJM/PC/PL_JB-66', 'TRIA', 'JB_QC_PROD-4', 'Windows 7 Ultimate 64-bit', 'Gigabyte B150M-HD3-CF', 'i3-6100 3,7 GHz', 'Seagate 320 GB', '4 GB DDR4', 'Nvidia GeForce 210', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685184', ''),
(67, 'SJM/PC/PL_JB-67', 'RIFQI', 'JB_QC-1-PC', 'Windows 7 Ultimate 64-bit', 'ASRock B75M-DGS R2.0', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168535', ''),
(68, 'SJM/PC/PL_JB-68', 'MUNIR/FAHIRIN', 'JB_PROD_2', 'Windows 7 Ultimate 64-bit', 'MSI B75A-G43', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', '', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685147', ''),
(69, 'SJM/PC/PL_JB-69', 'RIZAL', 'JB_PLANNER', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-H61M-DS2', 'i5-2400 3,1 GHz', 'Seagate 500 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685106', ''),
(70, 'SJM/PC/PL_JB-70', 'YOGA/IRFANO', 'JB_PROD-1-PC', 'Windows 7 Ultimate 64-bit', 'ASRock B75M-DGS R2.0', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168540', ''),
(71, 'SJM/PC/PL_JB-71', 'WAHAB', 'JB_QA-1', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-H61M-DS2', 'i3-2120 3,3 GHz', 'Seagate 250 GB', '2 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168542', ''),
(72, 'SJM/PC/PL_JB-72', 'DIMAS', 'JB_PPIC-3', 'Windows 7 Ultimate 64-bit', 'ASRock B75M-DGS R2.0', 'i3-3240 3,4 GHz', 'WD 500 GB', '4 GB DDR3', 'Intel HD Graphics', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(73, 'SJM/PC/PL_JB-73', 'ADISTY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'SJM/PC/PL_JB-74', 'PPC INCOMING', 'Incoming-PC', 'Windows 7 Ultimate 32-bit', 'ECS G41T-M16', 'E5700 3,0 GHz', 'Seagate 250 GB', '2 GB DDR3', 'Intel G41 Express', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(75, 'SJM/PC/PL_JB-75', 'QC INCOMING', 'JB_QC-5', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-DS3H-A', 'i3-4160 3,6 GHz', 'Seagate 320 GB', '2 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(76, 'SJM/PC/PL_JB-76', 'UCP INCOMING', 'JB_UCP-1', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-B85M-DS3H-A', 'i3-4170 3,7 GHz', 'WD 250 GB', '4 GB DDR3', 'Intel HD Graphics', '2 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(77, 'SJM/PC/PL_JB-77', 'AWEA-1', 'AWEA-1-PC', 'Windows 7 Ultimate 32-bit', 'Gigabyte GA-B75M-HD3', 'i3-3240 3,4 GHz', 'WD 250 GB', '2 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(78, 'SJM/PC/PL_JB-78', 'AWEA-2', 'JB_Machining-7', 'Windows 7 Ultimate 32-bit', 'Gigabyte B85M-DS3H-A', 'i3-4160 3,6 GHz', 'Seagate 320 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(79, 'SJM/PC/PL_JB-79', 'VTEC', 'VTEC-PC', 'Windows 7 Ultimate 64-bit', 'Asus P5K SE', 'Pentium 4 3,0 GHz', 'WD 320 GB', '2 GB DDR2', 'Nvidia GeForce 210', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(80, 'SJM/PC/PL_JB-80', 'VMC', '2RNC-PC', 'Windows 7 Ultimate 64-bit', 'Asus B85 Trooper', 'i3-4360 3,7 GHz', 'Seagate 320 GB', '4 GB DDR3', 'Nvidia GeForce 210', '1 GB', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '1921685215', ''),
(81, 'SJM/PC/PL_JB-81', 'HURCO', 'JB_Machining-2', 'Windows XP 32-bit', 'Gigabyte GA-B75M-D3V', 'i3-2120 3,3 GHz', 'WD 250 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168534', ''),
(82, 'SJM/PC/PL_JB-82', 'MILL TEX VEX 580 B', 'JB_Machining-4', 'Windows XP 32-bit', 'Gigabyte GA-B75M-D3V', 'i3-2120 3,3 GHz', 'WD 250 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(83, 'SJM/PC/PL_JB-83', 'MILL TEX VEX 750 B', 'JB_Machining-3', 'Windows XP 32-bit', 'Gigabyte GA-B75M-D3V', 'i3-2120 3,3 GHz', 'WD 250 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(84, 'SJM/PC/PL_JB-84', 'MILL TEX VEX 580 B', 'Milltex1-PC', 'Windows 7 Ultimate 32-bit', 'Gigabyte GA-B75M-D3V', 'i3-2120 3,3 GHz', 'WD 250 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168538', ''),
(85, 'SJM/PC/PL_JB-85', 'FEELER', 'JB_Machining-1', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-HD3-A', 'i3-4160 3,6 GHz', 'Maxtor 80 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(86, 'SJM/PC/PL_JB-86', 'PE ADMIN', 'JB_PE-10', 'Windows 7 Ultimate 64-bit', 'Gigabyte GA-H61M-DS2', 'i5-2500 3,3 GHz', 'Seagate 500 GB', '8 GB', 'AMD Radeon R7 240', '2 GB', 'LG', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '', ''),
(87, 'SJM/PC/PL_JB-87', 'ALFARHAN', 'JB_PROD-3', 'Windows 7 Ultimate 64-bit', 'Gigabyte B85M-DS3H-A', 'i3-4160 3,6 GHz', 'Seagate 320 GB', '4 GB DDR3', 'Intel HD Graphics', '', '', '19 inc', 'Ada\r\n', 'Ada\r\n', '', '192168537', ''),
(88, 'SJM/PC/PL_JB-88', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'SJM/PC/PL_JB-89', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'SJM/PC/PL_JB-90', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'SJM/PC/PL_JB-91', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 'SJM/PC/PL_JB-92', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'SJM/PC/PL_JB-93', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'SJM/PC/PL_JB-94', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'SJM/PC/PL_JB-95', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluhan`
--

CREATE TABLE IF NOT EXISTS `tbl_keluhan` (
  `id_keluhan` int(20) NOT NULL AUTO_INCREMENT,
  `keluhan` text NOT NULL,
  `penanganan` text NOT NULL,
  `perangkat` varchar(25) NOT NULL,
  PRIMARY KEY (`id_keluhan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `tbl_keluhan`
--

INSERT INTO `tbl_keluhan` (`id_keluhan`, `keluhan`, `penanganan`, `perangkat`) VALUES
(1, 'Cara membersihkan keyboard\r\n', 'Tombol-tombol pada keyboard hanya terpotong, dengan pisau atau benda tipis lainnya, dengan hati-hati melepas kunci, ini akan memungkinkan Anda untuk membersihkan di bawah kunci serta membersihkan kunci sendiri (pastikan Anda ingat ke mana mereka pergi!) .\r\n', 'Hardware'),
(2, 'Cara memulihkan file dari recycle bin\r\n', 'Klik dua kali ikon tempat sampah pada desktop Anda, di sini Anda akan melihat semua file di dalam tempat sampah Anda. Pilih file yang ingin Anda pulihkan, klik kanan dan pilih pulihkan.\r\n', 'Software'),
(3, 'Cara memperbarui komputer Microsoft Windows\r\n', 'Jika Anda menjalankan Microsoft Windows 7, Windows 10, atau versi Microsoft Windows yang lebih baru, Anda berhak memperbarui Microsoft Windows, dan dalam beberapa kasus, perangkat keras komputer Anda dengan driver terbaru melalui situs pembaruan Microsoft, kunjungi http: // windowsupdate .microsoft.com. Dalam kebanyakan kasus, komputer Anda harus disetel untuk memperbarui secara otomatis ketika pembaruan baru tersedia.\r\n', 'Software'),
(4, 'Cara menghapus cookie Internet\r\n', 'Pengguna Microsoft Internet Explorer dapat pergi ke ''Alat'' (atau ikon roda gigi kecil di kiri atas), lalu pergi ke ''Keamanan'' dan pilih ''Hapus riwayat penjelajahan ...'', Anda kemudian dapat memilih untuk menghapus cookie Internet Anda. Di Google Chrome, buka ''Alat Lainnya'' dan pilih ''Hapus data penjelajahan ...''. Pengguna Firefox dapat membuka ''Riwayat'', lalu pilih ''Hapus riwayat terbaru ...''.\r\n', 'Software'),
(5, 'Cara mengetahui nama komputer\r\n', 'Klik kanan Komputer Saya. Klik Properti. Di jendela Properties, klik tab Computer Name. Dalam tab ini Anda akan dapat melihat nama komputer lengkap, kelompok kerja dan juga deskripsi. Jika Anda ingin mengubah nama atau kelompok kerja, klik tombol Ubah.\r\n', 'Software'),
(6, 'Cara memperbaiki kertas macet pada printer\r\n', 'Matikan printer. Periksa lokasi atau baki yang dilontarkan kertas cetak. Jika kertas yang macet terlihat secara manual, lepaskan. Keluarkan semua baki kertas dan kertas apa pun yang mungkin tersangkut di antara baki dan printer. Jika kertas yang macet terlihat secara manual, lepaskan. Buka pintu printer yang memungkinkan Anda mengakses kartrid tinta atau toner printer dan mencari kertas yang macet. Jika kertas yang macet terlihat secara manual, lepaskan. Hidupkan kembali printer.\r\n', 'Hardware'),
(7, 'Cara masuk ke mode aman\r\n', 'Untuk masuk ke mode Aman Windows 7/10, saat komputer memulai tekan dan tahan "Tombol F8" Anda yang akan memunculkan "Windows Advanced Options Menu". Gunakan tombol panah Anda untuk pindah ke "Safe Mode" dan tekan tombol Enter Anda.\r\n', 'Software'),
(8, 'Cara memetakan drive jaringan\r\n', 'Buka Microsoft Explorer. Dari Explorer, klik menu tarik-turun Tools dan klik opsi "Map Network Drive." Tentukan drive jaringan atau komputer jaringan sebagai folder. Jika nama komputer itu harapan, untuk memetakan ke komputer itu, ketik \\\\ hope Jika Anda ingin memetakan ke folder bersama di komputer harapan seperti folder mp3, Anda akan mengetikkan \\\\ hope \\ mp3. Jika nama pengguna atau masuk yang berbeda diperlukan untuk terhubung ke komputer atau drive ini, harus ditentukan di jendela ini sebelum mengklik selesai.\r\n', 'Jaringan'),
(9, 'Tidak dapat mengirim atau menerima email\r\n', 'Verifikasi bahwa komputer Anda dapat melihat Internet dan / atau komputer lain untuk memastikan bahwa komputer Anda tidak mengalami masalah koneksi, yang akan menyebabkan masalah email Anda. Pastikan server e-mail Internet Anda atau server e-mail Jaringan Anda tidak mengalami masalah dengan menghubungi Penyedia Layanan Internet Anda atau administrator Jaringan Anda.\r\n', 'Software'),
(10, 'Tidak dapat terhubung ke drive jaringan\r\n', 'Pastikan kabel jaringan terhubung dengan benar ke bagian belakang komputer. Selain itu, ketika memeriksa koneksi kabel jaringan, pastikan LED di jaringan menyala dengan benar. Misalnya, kartu jaringan dengan LED hijau solid atau lampu biasanya menunjukkan bahwa kartu tersebut terhubung atau menerima sinyal. Catatan: umumnya, ketika lampu hijau berkedip, ini merupakan indikasi data yang dikirim atau diterima.\r\n', 'Jaringan'),
(11, 'Tidak dapat menghapus file karena sedang digunakan oleh Windows\r\n', 'Tutup semua program yang berjalan di komputer dan coba lagi. Jika setelah menutup semua program yang berjalan di komputer Anda masih mengalami masalah yang sama ketika mencoba untuk menghapus file, muat komputer ke Safe Mode dan hapus file.\r\n', 'Software'),
(12, 'Tidak dapat menerima lampiran email apa pun', 'Jika kotak email penuh dengan pesan email lain, dan / atau ruang penyimpanan Anda hanya beberapa megabyte, ada kemungkinan lampiran yang dikirim tidak dapat diterima. Seringkali jika masalah ini terjadi, orang yang mengirim email harus mendapatkan respons kembali dari server email Anda yang menunjukkan bahwa kotak surat Anda penuh dan / atau telah melebihi ukuran yang dialokasikan. Karena virus komputer dan malware lainnya paling baik didistribusikan melalui email, banyak penyedia layanan email, perusahaan, dan program email mencegah jenis ekstensi file tertentu dari didistribusikan atau diterima melalui email. Misalnya, Microsoft Outlook melindungi penggunanya dengan secara otomatis menonaktifkan jenis ekstensi file tertentu agar tidak diterima melalui email.', 'Software'),
(13, 'Mendapatkan tampilan pesan ''no signal input''\r\n', 'Pastikan monitor terhubung dengan benar di bagian belakang monitor dan ke bagian belakang komputer. Jika monitor tampaknya terhubung dengan benar, pastikan kabel tidak longgar dengan melepaskan semua kabel yang dapat dilepas di bagian belakang monitor (umumnya kabel data tidak dapat dilepas). Selanjutnya, lepaskan kabel data yang terhubung ke bagian belakang komputer dan kemudian hubungkan kembali kabel. Saat menghubungkan kabel di bagian belakang komputer, pastikan koneksi kabelnya kencang. Sebagian besar Komputer juga akan memiliki ujung sekrup yang dapat disekrup untuk menahan konektor pada tempatnya.\r\n', 'Software'),
(14, 'Kehilangan disk instalasi printe, Cara menginstal printer\r\n', 'Untungnya disk atau disk instalasi printer yang hilang bukan akhir dari dunia dan tidak akan mengharuskan Anda menunggu sampai disket atau CD baru dapat dikirimkan kepada Anda. Saat ini semua printer dan produsen perangkat keras lainnya menyediakan unduhan di Internet untuk program perangkat lunak dan driver yang disertakan dengan produk mereka.\r\n', 'Hardware'),
(15, 'Memformat atau menghapus hard drive apakah akan menghapus virus\r\n', 'Jika komputer Anda terinfeksi virus yang memformat atau menghapus hard disk drive dan memulai kembali dari awal akan selalu menghapus semua jenis virus. Namun, perlu diingat jika cadangan telah dibuat yang berisi virus, media lain atau drive yang terhubung ke komputer memiliki virus, komputer Anda terhubung ke komputer lain di jaringan dengan virus, dan / atau virus disimpan pada beberapa jenis perangkat lunak lain yang Anda gunakan dengan komputer Anda dapat terinfeksi ulang jika tidak dilindungi dengan benar.\r\n', 'Software'),
(16, 'Mematikan komputer Windows tanpa mematikan komputer\r\n', 'Pengguna seharusnya tidak cukup menekan tombol power atau me-restart komputer saat Windows masih berjalan kecuali ada masalah dengan komputer. Microsoft telah memasukkan fitur mematikan karena memungkinkan komputer untuk melalui semua langkah yang diperlukan yang diperlukan sebelum mematikan komputer. Bahkan banyak versi Microsoft Windows akan memeriksa komputer untuk masalah jika komputer tidak dimatikan dengan benar.\r\n', 'Software'),
(17, 'Komputer tidak menyala', 'Periksa apakah semua kabel terpasang dengan benar ke bagian belakang mesin dan monitor. Periksa apakah kabel daya dicolokkan ke stopkontak listrik dan soket telah dihidupkan. Coba gunakan soket daya yang berbeda atau, jika Anda menggunakan perpanjangan kabel, colokkan kabel daya langsung ke soket daya di dinding. Ganti kabel daya dengan yang Anda tahu berfungsi. Periksa apakah ada lampu menyala di bagian depan mesin: Jika ada lampu pada mesin tetapi bukan monitor, maka itu mungkin masalah monitor. Jika ada lampu pada monitor tetapi bukan mesin, maka itu mungkin masalah mesin. Jika tidak ada lampu pada apa pun, maka mungkin saja ada pemadaman listrik lokal. Dengan laptop, coba lepaskan kabel daya dan baterai. Tahan tombol daya selama sekitar sepuluh detik, lalu colokkan baterai dan kabel daya lagi. Tekan tombol daya untuk melihat apakah itu menyala.', 'Hardware'),
(18, 'Komputer  membeku atau bertingkah aneh\r\n', 'Coba mulai ulang komputer Anda. Banyak masalah dasar dapat diselesaikan dengan mudah dan cepat dengan cara ini. Tekan tombol Ctrl & Alt & Del pada keyboard Anda secara bersamaan. Ini akan memunculkan menu yang memungkinkan Anda menjalankan Task Manager. Di Task Manager, beralih ke tab Aplikasi. Sorot semua program dengan status ''Tidak Menanggapi'' dan pilih Akhiri Tugas. Anda mungkin diminta untuk mengkonfirmasi jika Anda ingin mengakhiri program yang tidak responsif, jadi pilih Ya. Lakukan ini untuk semua program yang tidak merespons. Jika semuanya gagal dan Anda tidak dapat mematikan / menyalakan ulang komputer Anda, maka tahan tombol daya pada mesin sampai mati secara paksa. Tunggu beberapa detik dan nyalakan kembali.\r\n', 'Hardware'),
(19, 'Komputer tidak menyala\r\n', 'Pertama-tama periksa kabel daya komputer untuk memastikan kabelnya benar-benar terhubung ke stopkontak. Jika Anda menggunakan strip plug, pastikan steker sudah benar-benar terhubung ke stopkontak di dinding dan saklar daya pada strip plug dihidupkan. Beberapa strip plug juga memiliki pemutus sirkuit bawaan yang biasanya terlihat seperti tombol hitam atau merah di dekat saklar daya. Tekan tombol untuk mengatur ulang dan melihat apakah itu menyelesaikan masalah.\r\n', 'Hardware'),
(20, 'Printer mencetak halaman yang tercoreng / terdistorsi\r\n', 'Saat mencetak pada kertas yang tidak tradisional, printer Anda mungkin mengalami noda, teks tidak rata atau bengkok, dan / atau teks yang keluar dari tepi kertas. Printer Anda mungkin mencetak teks kabur, buram, dan / atau samar lainnya karena print head kotor. Semua printer modern memiliki beberapa jenis pembersihan printer, swa-uji, dan / atau mode diagnosa yang dapat dilakukan untuk memeriksa dan membersihkan kepala cetak printer dan peralatan internal lainnya yang digunakan untuk mencetak.\r\n', 'Hardware'),
(21, 'tidak ada yang muncul di Monitor\r\n', 'Pastikan komputer dan monitor menyala. Pastikan monitor dicolokkan dengan benar ke komputer. Pastikan kabel daya terpasang dengan benar ke monitor. Beberapa komputer memiliki beberapa port tampilan, jadi pastikan Anda telah menghubungkan monitor ke yang benar. Coba masing-masing secara bergantian, matikan monitor kemudian hidupkan di sela-sela gerakan. Sebagian besar monitor memiliki jendela status yang ditampilkan ketika Anda menyalakannya. Periksa apakah Anda dapat melihat jendela status ini ketika Anda menekan tombol daya pada monitor. Anda juga dapat mencoba ini dengan tombol menu pada monitor, yang akan memunculkan menu opsi di layar. Ini menunjukkan layar berfungsi dengan baik, jadi mungkin ada masalah dengan kabel video dari monitor atau dari mesin itu sendiri. Periksa tingkat kecerahan & kontras monitor melalui tombol menu, untuk memastikan monitor belum disetel terlalu gelap. Gerakkan mouse dan tekan tombol apa saja pada keyboard untuk memastikan screensaver tidak diaktifkan atau bahwa komputer tidak masuk ke mode siaga / hibernasi.\r\n', 'Hardware'),
(22, 'Roda pada mouse tidak berfungsi\r\n', 'Jika Anda menjalankan versi Microsoft Windows dan menghadapi masalah dengan roda mouse, pertama-tama cobalah untuk menyesuaikan pengaturan mouse melalui jendela Mouse Properties. Jendela ini dapat diakses dengan membuka Control Panel dan mengklik dua kali ikon Mouse.\r\n', 'Hardware'),
(23, 'Ada batas hitam di layar\r\n', 'Jika resolusi baru-baru ini diubah, monitor mungkin tidak otomatis menyesuaikan atau beralih ke ukuran yang benar. Jika ini terjadi, resolusi dapat diubah kembali ke pengaturan asli atau Anda dapat secara manual menyesuaikan monitor. Jika ada pembatas hitam pada monitor, umumnya dapat diatasi dengan menyesuaikan lebar horizontal atau vertikal secara manual. Karena setiap monitor berbeda, metode penyesuaian pengaturan ini akan bervariasi; lihat dokumentasi monitor Anda.\r\n', 'Software'),
(24, 'Tidak ada tampilan di monitor\r\n', 'Pastikan monitor menyala. Jika tidak ada lampu daya (lampu hijau atau oranye) yang terlihat pada layar monitor, coba tekan tombol daya hingga menyala. Jika monitor komputer Anda menyala dan Anda menjauh dari komputer dan setelah mengembalikannya berwarna hitam, kemungkinan komputer tersebut tertidur. Coba gerakkan mouse Anda, klik tombol mouse, dan / atau tekan tombol apa saja (spasi) pada keyboard untuk membangunkannya. Pastikan monitor terhubung dengan benar ke bagian belakang komputer.\r\n', 'Hardware'),
(25, 'hard disk gagal dan tidak berfungsi\r\n', 'Seperti kebanyakan kesalahan komputer, langkah pertama Anda adalah mematikan komputer dan menyalakannya kembali. Ini akan membantu Anda menentukan apakah Anda benar-benar memiliki masalah hard disk. Jika disk rusak parah maka komputer Anda mungkin akan gagal untuk memulai kembali dengan benar. Jika demikian, maka hubungi MCWare IT Solutions, ini adalah pekerjaan untuk para profesional.\r\n', 'Hardware'),
(26, 'gambar di layar terdistorsi atau miring\r\n', 'Anda dapat menerima gambar yang terdistorsi saat kabel kendur atau rusak. Lepaskan koneksi kabel video yang keluar dari bagian belakang komputer dan pastikan tidak ada pin yang tertekuk, terbakar atau patah. Setelah diverifikasi sambungkan kembali kabel monitor. Jika kecepatan refresh tidak diatur dengan benar, monitor mungkin memiliki gelombang atau tampilan yang garisnya turun atau melintasi monitor secara perlahan atau cepat, ini juga dapat menyebabkan efek kedipan. Gambar yang terdistorsi dapat disebabkan oleh gangguan magnetik atau jenis lainnya. Pastikan tidak ada speaker, kipas angin, atau perangkat magnetik lain yang dekat dengan monitor.\r\n', 'Hardware'),
(27, 'komputer mogok error\r\n', 'Ada banyak alasan mengapa komputer mungkin berhenti bekerja atau "membeku". Sebagian besar waktu tidak banyak yang bisa kita lakukan tentang hal itu, itu adalah kenyataan hidup bahwa program komputer telah menjadi begitu rumit sehingga kadang-kadang pengguna akan mengalami masalah bahkan ketika melakukan tugas-tugas umum. Saat komputer Anda tidak lagi merespons perintah keyboard, taruhan terbaik Anda adalah memulai ulang komputer.\r\n', 'Hardware'),
(28, 'virus komputer\r\n', 'Virus komputer adalah program perangkat lunak yang sengaja dibuat untuk menyebabkan kesedihan pengguna, menyebar ke komputer lain, atau memusnahkan data pada komputer seseorang. Untuk membantu mencegah komputer agar tidak terinfeksi oleh virus, pengembang perangkat lunak telah mengembangkan program anti virus yang tetap aktif di komputer yang membantu melindunginya. Adalah penting untuk menyadari bahwa banyak komputer tidak datang dengan pre-loaded dengan ini sudah diinstal dan bahwa jika komputer datang dengan program-program ini, program mungkin berakhir dalam waktu 90 hari.\r\n', 'Software'),
(29, 'mouse bertindak tidak menentu\r\n', 'Pengguna yang memiliki mouse mekanik optik (mouse yang paling umum untuk komputer desktop) cenderung mengalami perilaku tidak menentu karena mouse tidak bersih atau kotor. Jika Anda telah membersihkan mouse dan terus mengalami masalah dan mouse ini telah berfungsi dengan baik di masa lalu, sayangnya mouse Anda kemungkinan rusak. Satu tes tambahan yang dapat dilakukan untuk membantu menentukan apakah ini masalahnya atau tidak adalah menghubungkan mouse ke komputer lain. Kalau tidak, kami sarankan mengganti mouse.\r\n', 'Hardware'),
(30, 'Komputer Menyala Tapi Tidak Ada Tampilan Di Layar\r\n', 'Memory / ram kendor atau kotor kaki-kakinya ( yang kuningan ) atau memory mati. Solusi : 1. Lepas lalu pasang kembali 2. Bersihkan kaki-kakinya dengan penghapus pensil hingga bersih 3. Coba ganti dengan yang baru.\r\n', 'Hardware'),
(31, 'Komputer berbunyi TIT tiga kali pendek/cepat, power hidup tapi tdk ada tampilan\r\n', 'kerusakan pada VGA cardnya : 1. Lepas dan tancapkan kembali, 2. Bersihkan kaki-kakinya yang berwarna kekuningan dengan penghapus pensil, 3. Ganti dengan yang baru.\r\n', 'Hardware'),
(32, 'Komputer berbunyi Tit Tit Tit Tit terus dan teratur tidak berhenti sebelum kita matikan\r\n', 'Kerusakan pada memory card / ram. Solusi : 1. Lepas dan tancapkan kembali, 2. Bersihkan kaki-kakinya yang berwarna kekuningan dengan penghapus pensil, 3. Ganti dengan yang baru. Jika tidak berhasil mainboard anda yang rusak.\r\n', 'Hardware'),
(33, 'Komputer keluar TULISAN DISK BOOT FAILURE, INSERT SYSTEM DISK AND PRESS ENTER\r\n', 'Pastikan hardisk dikenal didalam sistem BIOS komputer caranya dengan memperhatikan tampilan awal apakah ada IDE / hardisk yang muncul atau tekan del pada saat awal menyala lalu lihat di standard setting apakah hardisk anda muncul tidak disitu. Jika muncul berarti hardisk bagus hanya systemnya/partisinya yang hilang> lakukan instalasi system lagi, jika tidak muncul hardisk anda yang rusak> Ganti dengan yang baru. Atau coba tepuk secara perlahan badan hardisk lalu nyalakan lagi, jika berhasil segera backup data anda.Kenapa di tepuk pelan? sekedar memberi goncangan sedikit di motor hardisk yang macet agar bergerak lagi.\r\n', 'Hardware'),
(34, 'CD / DVD rom sulit terbuka/terkunci\r\n', 'Ambil sebuah paperclip luruskan lalu tusuk pada bagian pintu cdrom yang ada lubang kecilnya, dorong hingga pintu berhasil terbuka.\r\n', 'Hardware'),
(35, 'Monitor berubah - ubah warna\r\n', 'Kerusakan pada RGB monitor anda, kemungkinan besar ada patrian/solderan yang terlepas/retak atau kabel data monitor tidak terkunci dengan baik ke VGA. Solusi : Reparasi Monitor atau kencangkan kabel data ke vga.\r\n', 'Hardware'),
(36, 'Komputer Tidak Mau Hidup\r\n', '1. Cek koneksi kabel (dari power outletnya ke tombol power pada PC), 2. Cek kabel power pada CPU, 3. Jika masih juga tidak mau hidup permasalahanya mungkin terletak pada power supply atau MB\r\n', 'Hardware'),
(37, 'Komputer Mau Hidup Tetapi Tidak Mau Booting\r\n', 'Beep 1 kali saja Tanda bahwa kondisi komputer baik, Beep 1 kali, panjang Terdapat problem di memory, Beep 1 kali panjang dan 3 kali pendek Kerusakan di VGA card, Beep 1 kali panjang dan 2 kali pendek Kerusakan di DRAM parity, Beep terus menerus Kerusakan dimodul memory atau memory video\r\n', 'Hardware'),
(38, 'Keyboard Tidak Dikenali Oleh Komputer\r\n', 'cek apakah keyboard anda sudah terpasang dengan benar, jika sudah tapi masih juga keyboard tidak terdeteksi maka kemungkinan keyboard anda bermasalah, coba ganti keyboard anda, jika sudah diganti tapi juga masih bermasalah maka kemungkinan besar yang rusak adalah di bagian port keyboard di MB anda, Jika memang Sudah di Ganti Keyboard Baru tapi tetap tidak terdeteksi Juga Coba Ganti dengan Keyboard USB dan apabila tidak terdeteksi juga berarti ada yang salah pada sistem Windows.\r\n', 'Hardware'),
(39, 'Komputer Sering Crash\r\n', 'Cek semua posisi kabel, hardware, dan juga tegangan pada casing, cek suhu pada CPU dan cek RAM, processor dan juga VGA.\r\n', 'Hardware'),
(40, 'Komputer tidak bisa di-install software\r\n', '1. pastikan anda login sebagai administrator dan bukan sebagai user, 2. Cek apakah software yang di-install dalam keadaan baik atau perangkat penyimpan software dalam keadaan baik dan tidak corrupt, 3. Lihat apakah system requirements atau syarat system terpenuhi untuk menginstal software yang akan di-install.\r\n', 'Software'),
(41, 'Komputer lambat pada saat Start Up\r\n', 'Hal ini dikarenakan oleh banyak nya program yang dijalankan sehingga memperlambat komputer : Untuk mengatasinya, masuk ke menu start up. Klik Start > Run, Pada jendela Run ketikan msconfig > OK, Pada jendela System Configuration Utility > klik tab Startup, Matikan program-program yang tidak perlu pada menu Startup > klik Apply > klik Ok.\r\n', 'Hardware'),
(42, 'Data hilang atau terhapus\r\n', 'Periksa data pada kotak sampah atau Recycle Bin , Jika data ada pada Recycle Bin, klik kanan pada data > pilih restore, Jika data tidak ditemukan pada Recycle Bin, gunakan software pengembali data hilang seperti Databack,UnErase, atau EasyRecovery\r\n', 'Software'),
(43, 'Menu Bar dan Tabs pada Task Manager Hilang\r\n', 'Klik dua kali saja pada kotak dialog Task Manager.\r\n', 'Software'),
(44, 'Ikon My Computer tidak ada di desktop\r\n', '1. Klik kanan pada jendela Desktop, lalu pilih Properties, 2. Pilih tabs desktop dan klik Customize desktop, 3. Centang My Computer pada Jendela Desktop item, 4. Klik Apply dan ok\r\n', 'Software'),
(45, 'Terlalu lama membuka program\r\n', '1. Membuat shortcut, 2. Pilih program yang akan dibuat shortcut, 3. Klik kanan,pilih properties, 4. Pilih tabs shortcut dan pada shortcut key, isi sesuai ke inginan, 5. Klik apply, Ok\r\n', 'Software'),
(46, 'Keyboard Tidak Dikenali Oleh Komputer\r\n', '1. Cek apakah keyboard sudah terpasang dengan benar. 2. Jika sudah tapi masih juga keyboard tidak terdeteksi maka kemungkinan keyboard bermasalah. 3. Coba ganti keyboard , jika sudah diganti tapi juga masih bermasalah maka kemungkinan besar yang rusak adalah di bagian port keyboard di matherboard. 5. Jika memang sudah di ganti keyboard Baru tapi tetap tidak terdeteksi Juga Coba Ganti dengan Keyboard USB dan apabila tidak terdeteksi Juga berarti ada yang salah sistem operasi. \r\n', 'Hardware'),
(47, 'Mouse Tidak Dikenali Oleh Komputer\r\n', '1. Cek apakah mouse sudah terpasang dengan benar. 2. Jika sudah tapi masih juga mouse tidak terdeteksi maka kemungkinan mouse bermasalah. 3. Coba ganti mouse , jika sudah diganti tapi juga masih bermasalah maka kemungkinan besar yang rusak adalah di bagian port mouse di matherboard. 5. Jika memang sudah di ganti mouse baru tapi tetap tidak terdeteksi Juga coba ganti dengan mouse USB dan apabila tidak terdeteksi Juga berarti ada yang salah sistem operasi. \r\n', 'Hardware'),
(48, 'Komputer Tidak Mau Hidup\r\n', '1. Cek koneksi kabel (dari power outletnya ke tombol power pada PC), 2. Cek apakah stabilizer berfungsi atau tdak (jika memakai stabilizer), 3. Cek kabel power pada CPU, 3. Jika masih juga tidak mau hidup permasalahanya mungkin terletak pada power supply atau MB (Hubungi IT)\r\n', 'Hardware'),
(49, 'Komputer Mau Booting Tetapi Selalu "Safe Mode"\r\n', '1. restart kembali komputer anda, 2. jika masih trouble intall ulang windows anda, jika masih safe mode juga, berarti Hard Disk anda bermasalah\r\n', 'Hardware'),
(50, 'lupa password bios\r\n', '1. Cabut baterai cmos pada mothetboard. 2. Bila password belum hilang cari jumper clear password lalu hidupkan komputer bila telah ada konfirmasi pada layar password telah hilang,matikan komputer dan kembalikan jumper preposisi normal.\r\n', 'Software'),
(51, 'Menambah Perangkat Hardware Baru, Tapi Tidak Terdeteksi Oleh BIOS\r\n', 'Kemungkinan besar bios anda sudah kuno sehingga tidak dapat mendeteksi hardware yang baru, maka segera update bios anda.\r\n', 'Software'),
(52, 'Pasang Processor Baru Tp Tidak Terdeteksi\r\n', '1. Cek apakah anda sudah memasang processor dengan benar. 2. Cek apakah posisi jumper pada processor sudah benar (tentang jumper pada processor bisa anda periksa pada manual booknya).\r\n', 'Software'),
(53, 'Komputer tidak bisa di-install software\r\n', '1. pastikan anda login sebagai administrator dan bukan sebagai user. 2. Cek apakah software yang di-install dalam keadaan baik atau perangkat penyimpan software dalam keadaan baik dan tidak corrupt.. 3. Lihat apakah system requirements atau syarat system terpenuhi untuk menginstal software yang akan di-install.\r\n', 'Software'),
(54, 'Komputer lambat pada saat Start Up\r\n', '1. Masuk ke menu start up. Klik Start > Run. 2. Pada jendela Run ketikan msconfig > OK. 3. Pada jendela System Configuration Utility > klik tab Startup. 4. Matikan program-program yang tidak perlu pada menu Startup > klik Apply > klik Ok.\r\n', 'Hardware'),
(55, 'Data hilang atau terhapus\r\n', '1. Periksa data pada kotak sampah atau Recycle Bin, 2. Jika data ada pada Recycle Bin, klik kanan pada data > pilih restore. 3. Jika data tidak ditemukan pada Recycle Bin, gunakan software pengembali data hilang seperti Databack,UnErase, atau EasyRecovery \r\n', 'Software'),
(56, 'Pesan Error Unmountable Boot Volume\r\n', '1. Lakukan booting dari CD windows. 2. Setelah sampai pada welcome to set up, tekan tombol R. 3. Pilih windows yang akan diperbaiki. 4. Muncul dos prompt > ketik chkdsk /p > tekan enter.  5. Ketik fixboot > tekan enter.  6. Ketik exit\r\n', 'Software'),
(57, 'Pesan Error NTLDR is not found\r\n', '1. Booting dari CD windows anda. 2. Setelah tiba pada tampilan Welcome to set up, tekan tombol R. 3. Pilih windows yang akan diperbaiki. 4. Copy kan file NTLDR dari CD. 5. Ketik pada dosprompt sesuai dengan drive CD ROM,ketik:COPY H:\\i386\\NTLDR C\\:  6. Tekan enter -> selesai \r\n', 'Software'),
(58, 'Pesan Error NTOSKRNL Missing or Corrupt\r\n', '1. Booting dari CD windows anda. 2. Setelah tiba pada tampilan Welcome to set up, tekan tombol R. 3. Pilih windows yang akan diperbaiki. 4. Pindah pada drive CD ROM pada dos prompt. 5. Masuk kedalam direktori i386. 6. Ketik ntkrnlmp.ex_C:\\Windows\\System32\\ntoskrnl.exe -> exit\r\n', 'Software'),
(59, 'Pesan Error Windows\\System32\\Config\\System Missing or Corrupt\r\n', '1. Booting dari CD windows anda. 2. Setelah tiba pada tampilan Welcome to set up, tekan tombol R. 3. Pilih windows yang akan diperbaiki. 4. Pada dos prompt, ketik : cd\\windows\\sytem32\\config. -> Ren system system.bad -> windows\\repair\\system.\r\n', 'Software'),
(60, 'Disk Checker selalu berjalan saat Start Up\r\n', '1. untuk mematikan fungsi ini, masuk pada dos prompt. 2. Klik Start > Run > ketik cmd > Ok. 3.Ketik: chkntsf /d -> Enter \r\n', 'Software'),
(61, 'Menu Bar dan Tabs pada Task Manager Hilang\r\n', 'Klik du kali saja pada kotak dialog Task Manager.\r\n', 'Software'),
(62, 'Ikon My Computer tidak ada di desktop\r\n', '1. Klik kanan pada jendela Desktop, lalu pilih Properties. 2. Pilih tabs desktop dan klik Customize desktop. 3. Centang My Computer pada Jendela Desktop item. 4. Klik Apply dan ok\r\n', 'Software'),
(63, 'Sulit mencari program atau aplikasi yang dicari\r\n', '1. Pilih program yang akan dibuat shortcut. 2. Klik kanan,pilih properties. 3. Pilih tabs shortcut dan pada shortcut key, isi sesuai ke inginan. 4. Klik apply, Ok\r\n', 'Software'),
(64, 'Klik kanan pada menu atau aplikasi tidak tampil\r\n', '1. Klik kanan pada taskbar Properties. 2. Klik tab start menu > klik tombol Customize. 3. Klik tabs advanced. 4. Pilih atau centang Enable dragging and dropping. 5. Klik ok -> apply -> Ok\r\n', 'Software'),
(65, 'Virtual Memory terlalu sedikit\r\n', '1. Klik start. 2. Klik kanan pada my computer > pilih properties. 3. Klik tab Advanced. 4. Pada bagian performance klik setting. 5. Pilih tab Avanced klik Change. 6. Pada jendela Virtual Memory isi initial size sama dengan maximum size. 7. Klik ok.\r\n', 'Software'),
(66, 'Jam tanggal dan setting BIOS selalu berubah\r\n', 'Batteray cmos sudah lemah tegangannya ganti dengan baterai yang baru\r\n', 'Software'),
(67, 'Crash Setelah Memasang RAM Baru\r\n', 'Kemungkinan ram yang kita pasang tidak kompatibel dengan komputer kita (cabut kembali ram tersebut)\r\n', 'Hardware'),
(68, 'Menambah RAM Tapi Tidak Terdeteksi\r\n', '1. Pastikan memori sesuai dengan tipe motherboard kita. 2. Pastikan slot yang dipakai sesuai dengan tipe memori.\r\n', 'Hardware'),
(69, 'Setelah Menambah RAM Proses Komputer Manjadi Semakin Lambat\r\n', 'Perhatikan tipe sistem operasi kita 32 bit atau 64 bi.. Jika kamu menggunakan komputer yang memiliki RAM lebih dari 4 GB,saran terbaik adalah dengan menggunakan sistem operasi tipe 64 bit.\r\n', 'Hardware'),
(70, 'Monitor Tidak Mau Menyala\r\n', '1. Pastikan semua kabel power maupun konektor yang berhubungan dengan monitor dalam keadaan baik. 2. Pastikan juga pin yang ada pada port VGA masuk dengan sempuran tidak ada yang bengkok apalagi tidak masuk semua/salah satu pin ke port VGA. 3. Pastikan juga VGA card dalam keadaan baik.\r\n', 'Hardware'),
(71, 'Monitor Menjadi Gelap Saat Loading Windows\r\n', 'Lakukan instal ulang driver VGA.\r\n', 'Hardware'),
(72, 'Tampilan Tiba-Tiba Rusak Dan Komputer Manjadi Hang\r\n', 'Periksa sirkulasi udara pada CPU\r\n', 'Hardware'),
(73, 'Monitor Berkedip-kedip Saat Digunakan\r\n', '1. Masuk ke display properties. 2. Tekan tab setting dan klik advance, kemudian klik adapter, pada bagian ini ditampilkan refresh rate sesuaikan dengan penguna komputer.\r\n', 'Hardware'),
(74, 'Pada Monitor keluar tulisan DISK BOOT FAILURE, INSERT SYSTEM DISK AND PRESS ENTER\r\n', 'Caranya dengan memperhatikan tampilan awal apakah ada IDE / SATA hardisk terdeteksi pada tampilan POST atau masuk menu bios pada saat awal menyala lalu lihat di standard setting apakah hardisk terdeteksi atau tidak. Jika muncul, berarti hardisk dalam keadaan bagus.. hanya saja partisinya yang hilang. \r\n', 'Hardware'),
(75, 'Ukuran Tampilan monitor Tidak Sesuai Keinginan\r\n', '1. Masuk ke display propertis (klik kana semabrang tempat pilih propertis). 2. Tekan tab setting dan dan atur ukuran tampilan sesuai dengan keinginan (pada screean area)\r\n', 'Software'),
(76, 'Monitor Seperti Berkedip Saat Digunakan\r\n', '1. Masuk ke display propertis (klik kanan semabarang tempat pilih propertis). 2. Tekan tab setting dan klik advance,kemudian klik adapter, Pada bagian ini ditampilkan refresh raet yang diinginkan\r\n', 'Hardware'),
(77, 'Monitor LCD gambar garis-garis\r\n', '1. Mengganti panel lama dengan panel lain yang masih bagus. 2. Tancapkan kemballi kabel VGA sampai benar-benar rapat. 3. Ganti monitor dengan monitor lain yang bagus\r\n', 'Hardware'),
(78, 'Ada icon Network Connection tapi silang merah\r\n', 'Jaringan secara fisik tidak terhubung ke komputer. Periksa konektor RJ 45 atau kabel UTP atau periksa apakah swith nyala atau tidak.\r\n', 'Jaringan'),
(79, 'Ada icon Network Connection tapi tanda seru kuning\r\n', 'Jaringan secara fisik telah terhubung dengan baik kemungkinan server gagal memberikan IP ke Network atau terjadi IP Conflict (IP sama dengan komputer lain di jaringan). Jika IP diberikan secara manual ganti dengan IP yang lain.\r\n', 'Jaringan'),
(80, 'Ada icon Network Connection tapi berputar-putar terus\r\n', 'Jaringan secara fisik telah terhubung dengan baik kemungkinan server gagal memberikan IP ke Network atau terjadi IP Conflict (IP sama dengan komputer lain di jaringan). Jika IP diberikan secara manual ganti dengan IP yang lain.\r\n', 'Jaringan'),
(81, 'Spyware dan Virus\r\n', '1. Indentifikasi dan analisa process yang sedang berjalan dengan windows task manager. 2. Identifikasi dan non aktifkan service yang bersangkutan melalui management console. 3. Identifikasi dan non aktifkan service yang ada di startup item dengan sistem configuration utilty. 4. Cari dan hapus entry di registry yang ada pada startup. 5. Identifikasi dan hapus file yang mencurigakan. 6. Install dan gunakan spyware detection dan removal.\r\n', 'Software'),
(82, 'Processor Overheating.\r\n', '1. Debu yang menghambat perputaran kipas secara smooth. 2. Fan motor rusak. 3. Bearing fan ada yang doll sehingga fan jiggling. 4. Bersihkan atau ganti fan\r\n', 'Hardware'),
(83, 'Ram yang buruk.\r\n', '1. RAM timing lebih lambat dari spesifikasi mesin yang optimal. 2. RAM yang memiliki nilai minor hanya bisa dilihat setelah melalui beberapa test. 3. RAM terlalu panas.\r\n', 'Hardware'),
(84, 'Sistem mati, tidak ada suara, atau terkunci sebelum mulai proses booting\r\n', 'Cek semua komponen perangkat keras yang terpasang, khususnya pada memori dan VGA Card. Atur kembali dudukan komponen perangkat keras dan socket yang terpasang pada motherboard.\r\n', 'Hardware'),
(85, 'Sering Mengalami Kegagalan Server\r\n', 'Matikan jaringan terlebih dahulu, lalu melakukan pengecekan terhadap server. Bersihkan server anda dari malware dan program lainnya yang mencurigakan, atau bisa juga merestart koneksi dan juga server\r\n', 'Jaringan'),
(86, 'Tidak Bisa Sharing Data\r\n', 'Hal ini sering terjadi dikarenakan sharing pada computer masih di disable jadi kita harus mengaktifkan dengan Jadi klik pada Lalu pilih lalu ceklist lalu apply. Selain itu mungkin sedang terjadi hang pada computer dan yang harus ditempuh adalah merestar komputer. Hal ini juga sering terjadi karena IP yang kita gunakan salah atau sama dengan IP komputer lainnya. Ganti dengan IP yang beda.\r\n', 'Jaringan'),
(87, 'Local Area Connection LAN yang Tidak Muncul\r\n', 'melakukan pembetulan dari proses pemasangan network wireless adapter, ataupun melakukan penginstalan ulang pada driver adapter network tersebut, agar LAN dan juga local area connection bisa dijalankan dengan benar.\r\n', 'Jaringan'),
(88, 'Proses Transmisi Data yang Lambat\r\n', 'Untuk mengatasi hal ini, ada baiknya sebagai user, kita dapat membatasi waktu untuk melakukan akses informasi. Cara lain yang bisa digunakan adalah melakukan upgrade pada server dan juga prangkat keras jarinan, misalnya mengganti kabel jaringan biasa degnan menggunakan kabel jaringan dengan serat optic.\r\n', 'Jaringan'),
(89, 'Koneksi Terputus - Putus\r\n', 'Cek perkabelan (dari KTB sampai Modem)\r\n', 'Jaringan'),
(90, 'Koneksi Lambat\r\n', 'Gunakan Bandwidth management Gunakan antivirus atau anti Spyware\r\n', 'Jaringan'),
(91, 'Koneksi Lambat\r\n', 'Menambah Kecepatan Koneksi Internet Menambah kecepatan akses internet sangat diinginkan para pengguna internet. Ada banyak cara digunakan untuk menambah kecepatan akses koneksi internet, dari cara simpel menonaktifkan loading gambar pada browser hingga penggunaan software tertentu.\r\n', 'Jaringan'),
(92, 'Komputer Tidak Terdeteksi Oleh Komputer Lain\r\n', 'ketik ping > Run > caranya adalah Klik start <> -t. misalnya ping 192.168.0.89. Nanti akan muncul balasan Jika Reply From... berarti komputer sudah terkoneksi dengan baik jika muncul Request Time Out maka komputer kita tidak bisa terkoneksi dengan komputer lain.\r\n', 'Hardware'),
(93, 'Muncul Pesan IP CONFLIG\r\n', 'Melakukan setting ulang alamat IP Address dan subnetmasknya sesuai dengan jaringan yang digunakan.\r\n', 'Jaringan'),
(94, 'Folder / File Tidak Dapat Di Lihat Oleh Komputer Lain\r\n', 'Cara masuk ke windows explorer pilih data atau directory yang akah disharingkan kemudian klik kanan lalu klik sharing\r\n', 'Jaringan'),
(95, 'Printer tidak dapat di akses pada komputer lain\r\n', 'Caranya masuk ke control panel printers and faxes, lalu pilih printer yang akan di sharing lalu klik kanan, pilih sharing, kemudian pilih sharing this printer lalu klik ok.\r\n', 'Hardware'),
(96, 'CD DVD ROM RW dan Floppy Disk Tidak terdeteksi di windows\r\n', 'Periksa kabel data dan kabel tegangan yang masuk ke CD-floppy, perikas di setup bios apakah sudah dideteksi? sebaiknya diset auto. Periksa apakah led menyala, jika tidak kerusakan di Controllernya.\r\n', 'Hardware'),
(97, '"CD DVD ROM RW dan Floppy Disk tidak bisa keluar masuk CD\r\n\r\n"\r\n', 'Kerusakan ada pada mekanik motor atau karet motor.\r\n', 'Hardware'),
(98, 'CD DVD ROM RW dan Floppy Disk tidak bisa membaca/menulis/hanya bisa membaca saja. (CD)\r\n', 'Kerusakan Biasanya pada optik, tetapi ada kemungkinan masih bisa diperbaiki dengan cara men-set ualng optik tersebut.\r\n', 'Hardware'),
(99, 'CD DVD ROM RW dan Floppy Disk tidak bisa membaca/menulis/write protect (Floppy disk)\r\n', 'Head Kotor, bisa dibersihkan menggunakan Cutenbud\r\n', 'Hardware'),
(100, 'CPU mengeluarkan suara Beep beberapa kali di speakernya dan tidak ada tampilan ke layar monitor, padahal monitor tidak bermasalah.\r\n', 'Bunyi Beep menandakan adanya pesan kesalahan tertentu dari BIOS, Bunyi tersebut menunjukan jenis kesalahan apa yang terjadi pada PC, Biasanya kesalahan pada Memory yang tidak terdeteksi, VGA Card, yang tidak terpasang dengan baik, Processor bahkan kabel data Monitor pun bisa jadi penyebabnya.Silahkan anda periksa masalah tersebut.\r\n', 'Hardware'),
(101, 'Bunyi beep 1 kali Panjang\r\n', 'RAM/Memory tidak terpasang dengan Baik atau Rusak,\r\n', 'Hardware'),
(102, 'Bunyi beep 1x Panjang 2x Pendek\r\n', 'Kerusakan Pada Graphic Card (VGA), Periksa bisa juga Pemasangan pada slotnya tidak pas (kurang masuk),\r\n', 'Hardware'),
(103, 'Bunyi beep 1x Panjang 3x Pendek\r\n', 'Keyboard rusak atau tidak terpasang.\r\n', 'Hardware'),
(104, 'Bunyi beep Tidak terputus / bunyi terus menerus\r\n', 'RAM atau Graphic Card tidak terdeteksi.\r\n', 'Hardware'),
(105, 'Kipas yang ada di power supply tidak bekerja atau mengeluarkan suara yang berisik\r\n', 'Lepaskan power supply sebelum nantinya akan dipasang kembali. Bersihkan debu yang menempel pada power supply tersebut menggunakan peralatan yang memang disiapkan untuk membersihkan debu. Dalam kondisi yang bersih maka power supply tidak akan mengeluarkan suara yang berisik dan akan bekerja dengan baik.\r\n', 'Hardware'),
(106, 'instal MS office\r\n', 'Silakan masuk ke surat web dan pergi ke pengaturan -office -install aplikasi- unduh dan instal MS office untuk komputer Anda.\r\n', 'Software'),
(107, 'Komputer tidak dinyalakan\r\n', 'Hubungi dukungan TI.\r\n', 'Hardware'),
(108, 'Sistem hang dengan layar biru saat startup\r\n', 'Tekan tombol F8 pada system start, Pilih safe mode, jika OS memuat kemudian restart os, jika masalah yang sama datang serah ke tim IT\r\n', 'Software'),
(109, 'Akun terkunci, karena 3 upaya salah kata sandi. Bisakah Anda mengatur ulang kata sandi\r\n', 'Tunggu, akan di tangani oleh IT.\r\n', 'Software'),
(110, 'Internet saya tidak berfungsi\r\n', 'Buka tab jaringan dari sudut kanan bawah, pilih jaringan, klik terhubung\r\n', 'Jaringan'),
(111, 'Sistem berperilaku aneh, layar biru muncul di tengah\r\n', 'Tekan tombol F8 pada system start, Pilih safe mode, jika OS memuat kemudian restart os, jika masalah yang sama datang serah ke tim IT\r\n', 'Software'),
(112, 'Desktop tidak berfungsi\r\n', 'Silakan periksa apakah kabel Power sudah terpasang dengan benar, Harap tulis kembali kepada kami jika Masalahnya masih berlanjut.\r\n', 'Hardware'),
(113, 'Instal database postgres di komputer', 'Pergi ke lokasi \\ imfs \\ software \\ postgres, salin database postgresql ke lokal dan instal\r\n', 'Software'),
(114, 'Aplikasi Space QA saya sedang down\r\n', 'Kami menyesal atas ketidaknyamanan yang ditimbulkan. Masalahnya adalah dengan server Host yang di-reboot karena kegagalan daya.\r\n', 'Jaringan'),
(115, 'Diperlukan akses WiFi.\r\n', 'Pertama, sambungkan kabel jaringan ke komputer Anda ke port merah di workstation Anda. Jalankan ipconfig / all pada command prompt Anda. Bagikan WiFi Mac atau alamat Perangkat Keras ke tim TI. Tim IT kemudian menambahkan ID MAC Anda untuk mengaktifkan akses WiFi\r\n', 'Jaringan'),
(116, 'LAN tidak bekerja di VM\r\n', 'mengubah pengaturan jaringan ke Jaringan yang dijalin dan dikonfigurasikan dalam VM.\r\n', 'Jaringan'),
(117, 'Membutuhkan izin akses wifi ke laptop, komputer\r\n', 'Pertama, sambungkan kabel jaringan ke laptop Anda ke port merah di workstation Anda. Jalankan ipconfig / all pada command prompt Anda. Bagikan WiFi Mac atau alamat Perangkat Keras ke tim TI. Tim IT kemudian menambahkan ID MAC Anda untuk mengaktifkan akses WiFi\r\n', 'Jaringan'),
(118, 'Permintaan untuk mengonfigurasi sistem untuk membagikannya di antara pengguna\r\n', 'Mereka tidak akan dapat mengakses profil lain jika mereka masuk dengan akun mereka. Silakan minta pengguna untuk menjangkau IT jika mereka memiliki masalah.\r\n', 'Jaringan'),
(119, 'Internet saya tidak berfungsi\r\n', 'Buka tab jaringan dari sudut kanan bawah, pilih jaringan, klik terhubung\r\n', 'Jaringan'),
(120, 'Desktop tidak berfungsi\r\n', 'Silakan periksa apakah kabel Power sudah terpasang dengan benar, Harap tulis kembali kepada kami jika Masalahnya masih berlanjut.\r\n', 'Hardware'),
(121, 'Server digantung dan perlu restart\r\n', 'Tim TI telah me-restart server dan aksesnya sekarang.\r\n', 'Jaringan'),
(122, 'Permintaan untuk mengonfigurasi sistem untuk membagikannya di antara pengguna\r\n', 'Mereka tidak akan dapat mengakses profil lain jika mereka masuk dengan akun mereka. Silakan minta pengguna untuk menjangkau IT jika mereka memiliki masalah.\r\n', 'Software'),
(123, 'Butuh akses Ethernet\r\n', 'Silakan sambungkan kabel LAN ke port merah di workstation Anda. Harap tulis kembali ke IT jika Anda tidak bisa mendapatkan alamat IP\r\n', 'Jaringan'),
(124, 'Perlu Kabel LAN\r\n', 'Silakan datang ke meja IT dan ambil.\r\n', 'Jaringan'),
(125, 'Butuh Konektor laptop.\r\n', 'Silakan datang ke meja IT dan ambil.\r\n', 'Hardware'),
(126, 'Perlu mouse\r\n', 'Silakan datang ke meja IT dan ambil.\r\n', 'Hardware'),
(127, 'Diperlukan penggantian mouse.\r\n', 'Silakan datang ke meja IT dan ambil.\r\n', 'Hardware'),
(128, 'Install Microsoft outlook\r\n', 'Menginstal prospek micrsoft pada komputer dan ikuti alur yang di arahkan\r\n', 'Software'),
(129, 'Sistem hang dengan layar biru saat startup\r\n', 'Tekan tombol F8 pada system start, Pilih safe mode, jika OS memuat kemudian restart os, jika masalah yang sama datang serah ke tim IT\r\n', 'Hardware'),
(130, 'Kesalahan Impor File\r\n', 'Ukuran file terlalu besar atau type file salah\r\n', 'Software'),
(131, 'Komputer berasap', 'Akan ditangani IT segera', 'Hardware');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE IF NOT EXISTS `tbl_laporan` (
  `id_laporan` int(20) NOT NULL AUTO_INCREMENT,
  `id_pelapor` int(20) NOT NULL,
  `perangkat` varchar(25) NOT NULL,
  `laporan` text NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE IF NOT EXISTS `tbl_operator` (
  `id_operator` int(25) NOT NULL,
  `nama_operator` varchar(50) NOT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trouble`
--

CREATE TABLE IF NOT EXISTS `tbl_trouble` (
  `id_trouble` int(20) NOT NULL AUTO_INCREMENT,
  `no_ticket` varchar(25) NOT NULL,
  `id_keluhan` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `trouble` text NOT NULL,
  `tgl` int(25) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_trouble`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(8) NOT NULL,
  `nm_pegawai` varchar(25) NOT NULL,
  `divisi` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nm_pegawai`, `divisi`, `username`, `password`, `level`) VALUES
(1, '12257', 'Ekho Cahyono', 'IT', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, '12539', 'Restu Budi D', 'IT', 'staff', 'd41d8cd98f00b204e9800998ecf8427e', 'Staff'),
(6, '1035', 'Linda Suhenda', 'Purchasing', 'linda', 'eaf450085c15c3b880c66d0b78f2c041', 'User'),
(7, '1042', 'Bambang Eriadi', 'Design', 'Bambang', 'a9711cbb2e3c2d5fc97a63e45bbe5076', 'User'),
(8, '1079', 'Ardhy Chandra Santoso', 'Marketing', 'ardhy', '26322746f3c653d9cb966fef65e477d8', 'User'),
(9, '1287', 'Yayan Saryandi', 'QC Eng', 'yayan', 'ccbf0a5c0f14f09a68076c4804296a62', 'User'),
(10, '1289', 'Tugio', 'Design', 'gio', '2bb55d712c4dcbda95497e811b696352', 'User'),
(11, '13039', 'Viki Malasari', 'ISO', 'viki', '5819825d46159ca06b3c54b0a0651a3e', 'User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
