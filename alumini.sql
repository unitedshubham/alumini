-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 11:02 AM
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
-- Database: `navodaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_maindesc` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '0-pending,1-accepted,2-rejected,3-deleted',
  `deleted_datetime` datetime NOT NULL,
  `deleted_by` varchar(50) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `blog_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_desc`, `blog_maindesc`, `status`, `deleted_datetime`, `deleted_by`, `created_datetime`, `created_by`, `blog_picture`) VALUES
(6, 'fdsf', 'afafa', 'fadfdsdffsd', 1, '0000-00-00 00:00:00', '', '2020-01-20 12:34:04', '10', ''),
(19, 'sdf', 'sfd', 'sdf', 3, '2020-01-21 01:01:50', '1', '2020-01-21 12:05:25', '1', ''),
(24, 'hello', 'hello', 'hello', 3, '2020-01-22 11:01:30', '1', '2020-01-22 10:39:23', '1', ''),
(25, 'asdas', 'dasd', 'asdasdas', 3, '2020-01-22 12:01:37', '1', '2020-01-22 10:50:59', '1', ''),
(30, 'sdf', 'sfd', 'sdf', 2, '2020-01-21 01:01:50', '1', '2020-01-21 12:05:25', '1', ''),
(31, 'sdf', 'sfd', 'sdf', 2, '2020-01-21 01:01:50', '1', '2020-01-21 12:05:25', '1', ''),
(32, 'sdf', 'sfd', 'sdf', 2, '2020-01-21 01:01:50', '1', '2020-01-21 12:05:25', '1', ''),
(33, 'sdf', 'sfd', 'sdf', 2, '2020-01-21 01:01:50', '1', '2020-01-21 12:05:25', '1', ''),
(35, 'rewr', 'werwer', 'werwerwerwer', 3, '0000-00-00 00:00:00', '', '2020-01-22 11:03:44', '1', ''),
(36, 'rewr', 'werwer', 'werwerwerwer', 1, '0000-00-00 00:00:00', '', '2020-01-22 11:03:46', '1', ''),
(37, 'asasd', 'asd', 'asdasd', 3, '2020-01-23 10:01:28', '1', '2020-01-22 11:11:06', '1', ''),
(38, 'sfsdfs', 'gh g hgh gc ch', 'sdfsdfsfsd', 0, '0000-00-00 00:00:00', '', '2020-01-22 11:59:03', '1', 'undefined'),
(39, 'asd', 'asdasdasd', 'asdasdasdasd', 0, '0000-00-00 00:00:00', '', '2020-01-23 11:00:13', '1', 'upload/23012020120009mobilecompare.jpg'),
(40, 'asdasd', 'asdasd', 'asdasdasd', 0, '0000-00-00 00:00:00', '', '2020-01-23 12:12:11', '1', ''),
(41, 'asdasdsadasd', 'asdasdasdasdasd', 'asdasdasdasdadasd', 0, '0000-00-00 00:00:00', '', '2020-01-23 12:12:16', '1', ''),
(42, 'Navaday Foundation', 'is the best place to get you self busy with the Alumina of Navaday ', 'is the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile \r\nway to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile \r\nway to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile \r\nst place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile \r\nway to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile \r\nway to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express \r\nway to express your profile to get great exposure \r\nis the best place to get you self busy with the Alumina of Navaday, the place is full of best surprises and also the best way to express your profile \r\n\r\n', 1, '0000-00-00 00:00:00', '', '2020-01-29 04:21:10', '1', 'upload/29012020051758nav.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `password1` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `deliver_address` text NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `deliver_phone` varchar(15) NOT NULL,
  `date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `deleted_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `password1`, `email`, `deliver_address`, `phone_no`, `deliver_phone`, `date_of_reg`, `status`, `deleted_date`) VALUES
(1, 'sunit', 'digamber', 'fulari', 'house number 1000 agalli', '', '', 'house number 2000 agalli', '5151', '5151', '0000-00-00 00:00:00', '0', ''),
(2, 'Shailen Naik', '', '', '', '123456', 'shailen', '', '08983197087', '', '2020-01-10 05:15:45', '1', ''),
(4, 'Shailendra', '', '', '', '', 'admin', '', '08983197087', '', '2020-01-10 05:23:15', '0', ''),
(5, 'Shailendra', '', '', '', '123456', 'admin1', '', '08983197087', '', '2020-01-10 05:24:43', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_category` varchar(15) NOT NULL,
  `event_name` varchar(15) NOT NULL,
  `event_desc` varchar(50) NOT NULL,
  `event_note` varchar(50) NOT NULL,
  `event_sdate` date NOT NULL,
  `event_edate` date NOT NULL,
  `event_period` int(2) NOT NULL,
  `event_organiser` varchar(15) NOT NULL,
  `event_place` varchar(50) NOT NULL,
  `event_offer` varchar(50) NOT NULL,
  `event_poster` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 ->pending   1->accepted   2-> rejected  3-> deleted',
  `deleted_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` varchar(10) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_category`, `event_name`, `event_desc`, `event_note`, `event_sdate`, `event_edate`, `event_period`, `event_organiser`, `event_place`, `event_offer`, `event_poster`, `status`, `deleted_datetime`, `deleted_by`, `created_datetime`, `created_by`) VALUES
(14, 'Live Performanc', 'fgsfgh', 'etfrasdf', 'sfaf', '2020-01-12', '2020-01-11', 4, 'asd', 'asfaf', 'gdg', 'C:\\fakepath\\logo.png', 3, '2020-01-24 11:01:16', '7', '2020-01-29 09:35:13', '10'),
(15, 'Charity Events', 'asdasd', 'asdasda', 'asdasd', '2020-01-07', '2020-01-24', 0, 'asfasf', 'asfasf', 'asfasf', 'C:\\fakepath\\logo.png', 3, '2020-01-24 11:01:42', '7', '2020-01-29 09:29:51', '1'),
(16, 'Seminars', 'asfasf', 'asfasf', 'asfasfdsgsd', '2020-01-18', '2020-01-09', 1, 'sdgsd', 'gsdgs', 'dsgdgs', 'C:\\fakepath\\logo.png', 1, '2020-01-22 16:49:15', '', '2020-01-29 09:29:53', '1'),
(17, 'Seminars', 'asfasf', 'asfasf', 'asfasfdsgsd', '2020-01-18', '2020-01-09', 0, 'sdgsd', 'gsdgs', 'dsgdgs', 'C:\\fakepath\\logo.png', 1, '2020-01-22 16:49:25', '', '2020-01-29 09:29:55', '1'),
(18, 'Networking Even', 'asdasf', 'sfasfas', 'fasfasf', '2020-01-12', '2020-01-23', 0, 'afasf', 'asfasf', 'asfasfa', 'C:\\fakepath\\logo.png', 2, '2020-01-22 16:56:46', '', '2020-01-29 09:29:56', '1'),
(19, 'Conventions', 'dgfasf', 'sfaf', 'asfasfa', '2020-01-01', '2020-01-16', 3, 'asfasf', 'asfasf', 'asfasf', 'C:\\fakepath\\logo.png', 2, '2020-01-24 11:01:19', '7', '2020-01-24 10:10:19', '7'),
(20, 'Opening Ceremon', 'asdasfas', 'fasfasfas', 'gtasgasg', '2020-01-09', '2020-01-08', 3, 'hfbcz', 'fasdgas', 'sagasg', 'C:\\fakepath\\logo.png', 3, '2020-01-22 12:01:25', '7', '2020-01-22 11:40:25', '7'),
(21, 'Networking Even', 'awgftqaads', 'ghrjher', 'jerjerjer', '2020-01-01', '2020-01-03', 0, 'rjejdfj', 'erjerjerje', 'erjerjerj', 'C:\\fakepath\\logo.png', 1, '2020-01-23 12:01:56', '7', '2020-01-23 11:30:17', '7'),
(22, 'Product Launche', 'sarvesh', 'sarvesh', 'sarvesh', '2020-01-04', '2020-01-17', 3, 'sarvesh', 'sarvesh', 'sarvesh', 'C:\\fakepath\\logo.png', 1, '2020-01-24 10:01:52', '7', '2020-01-24 09:44:52', '7'),
(23, 'Themed Parties', 'asdasgf', 'agsdhrw4', 'weyweg', '2019-12-31', '2020-01-20', 4, 'dsgfds', 'gdsg', 'sdhsd', 'C:\\fakepath\\logo.png', 1, '2020-01-25 01:01:25', '7', '2020-01-25 12:47:25', '7'),
(24, 'College Event', 'das sdf ', 'dssd f', 'sd fds ', '2020-01-16', '2020-01-19', 3, 'sdf sdf ', 'sdf s', 'sdf', 'C:\\fakepath\\srl.png', 0, '2020-01-29 10:01:09', '10', '2020-01-29 09:36:32', '10');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(11) NOT NULL,
  `invoice_date` varchar(30) NOT NULL,
  `total_amount` varchar(20) NOT NULL,
  `balance_due` varchar(30) NOT NULL,
  `cust_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_no`, `invoice_date`, `total_amount`, `balance_due`, `cust_id`) VALUES
(3, '00001', '18/12/2019', '2400', '', 1),
(4, '00002', '18/12/2019', '2400', '', 1),
(5, '00002', '18/12/2019', '25300', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(500) NOT NULL,
  `job_desc` text NOT NULL,
  `vacancy` varchar(100) NOT NULL,
  `edu_qual` varchar(200) NOT NULL,
  `work_experience` varchar(200) NOT NULL,
  `salary_begin` varchar(20) NOT NULL,
  `salary_end` varchar(20) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `job_enddate` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0' COMMENT '0-pending,1-accepted,2-rejected,3-deleted',
  `deleted_datetime` datetime NOT NULL,
  `deleted_by` varchar(50) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `job_desc`, `vacancy`, `edu_qual`, `work_experience`, `salary_begin`, `salary_end`, `job_type`, `job_enddate`, `status`, `deleted_datetime`, `deleted_by`, `created_datetime`, `created_by`) VALUES
(1, 'adas', 'dasdas', 'dasd', 'asdasd', 'asdasd', 'asdasd', 'adasd', 'asdasd', 'asdasdasd', '1', '0000-00-00 00:00:00', '', '2020-01-21 10:16:02', '1'),
(2, 'sfsdfs', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', 'fsdfsdf', 'sdfsdf', 'sfdsd', 'fsdfsdf', 'sdfsdfsdfsdf', '0', '0000-00-00 00:00:00', '', '2020-01-23 12:42:33', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `product_desc` text NOT NULL,
  `product_note` text NOT NULL,
  `discount_perc` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `disc_price` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL,
  `offer` varchar(30) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `product_date` varchar(30) NOT NULL,
  `user_entry` varchar(30) NOT NULL,
  `deleted_user` varchar(30) NOT NULL,
  `deleted_date` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `product_desc1` text NOT NULL,
  `product_desc2` text NOT NULL,
  `product_desc3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_desc`, `product_note`, `discount_perc`, `price`, `disc_price`, `stock`, `offer`, `image_1`, `image_2`, `image_3`, `image_4`, `status`, `product_date`, `user_entry`, `deleted_user`, `deleted_date`, `category`, `product_desc1`, `product_desc2`, `product_desc3`) VALUES
(11, 'dutch truffle', 'chocolate', 'creamy chocolate dark', '50', '800', '400', 12, '10', 'upload/271120190604172.jpg', 'upload/2711201906050222.jpg', 'upload/2711201909173823.jpg', 'upload/2711201909174224.jpg', '0', '2019-11-27 08:17:44', '', '', '2019-12-03 15:15:15', 'Cakes', '', '', ''),
(12, 'red flowers', 'beautiful red and white mix1', 'roses1', '1000', '50', '500', 10, '10', 'upload/27112019092040red2.jpg', 'upload/27112019092044red3.jpg', 'upload/27112019092047red4.jpg', 'upload/27112019092051red5.jpg', '0', '2019-11-27 08:21:04', '', '', '2019-12-10 14:32:25', 'Flowers', '', '', ''),
(14, 'purple flowers', 'lily', 'with white flowers', '500', '900', '450', 12, '12', 'upload/27112019092532lily2.jpg', 'upload/27112019092535lily3.jpg', 'upload/27112019092538lily5.jpg', 'upload/27112019092542lily6.jpg', '0', '2019-11-27 08:25:43', '', '', '2019-12-10 14:30:46', 'Flowers', '', '', ''),
(15, 'money plant', 'auspicious and wealth', 'bring prosperity', '500', '1500', '750', 20, '10', 'upload/27112019092743luck4.jpg', 'upload/27112019092747lucky.jpg', 'upload/27112019092751lucky1.jpg', 'upload/27112019092754lucky2.jpg', '0', '2019-11-27 08:27:55', '', '', '2019-12-03 15:13:18', 'Gifts', '', '', ''),
(18, 'pink flowers', 'with white', 'mixture2', '500', '120', '100', 121, '101', 'upload/27112019092937pink4.jpg', 'upload/27112019092941pink5.jpg', 'upload/27112019092944pink8.jpg', 'upload/27112019092948pink10.jpg', '0', '2019-11-27 08:29:51', '', '', '2019-12-10 14:30:33', 'Flowers', '', '', ''),
(19, 'blood red flowers', 'dark red', 'pure red', '50', '1000', '500', 12, '12', 'upload/2711201909323862.jpg', 'upload/2711201909324172.jpg', 'upload/2711201909324581.jpg', 'upload/271120190932496.jpg', '0', '2019-11-27 08:32:53', '', '', '2019-12-03 14:59:28', 'Flowers', '', '', ''),
(20, 'yellow flowers', 'green twigs', 'mixture', '50', '1100', '550', 12, '12', 'upload/271120190935404.jpg', 'upload/271120190935449.jpg', 'upload/2711201909354741.jpg', 'upload/2711201909355142.jpg', '0', '2019-11-27 08:35:53', '', '', '', 'Flowers', '', '', ''),
(21, 'purple flowers', 'beautiful flowers', 'mixture', '1200', '700', '600', 12, '12', 'upload/28112019052405lily2.jpg', 'upload/28112019052408lily3.jpg', 'upload/28112019052411lily5.jpg', 'upload/28112019052414lily6.jpg', '0', '2019-11-28 04:24:15', '', '', '2019-12-10 14:32:15', 'Flowers', '', '', ''),
(45, 'pink flowers', 'with white', 'mixture', '1000', '550', '500', 12, '10', 'upload/27112019092937pink4.jpg', 'upload/27112019092941pink5.jpg', 'upload/27112019092944pink8.jpg', 'upload/27112019092948pink10.jpg', '0', '2019-11-29 11:35:01', '', '', '2019-12-03 15:07:00', 'Flowers', '', '', ''),
(47, 'blood red flowers', 'dark red', 'pure red', '1000', '550', '500', 12, '12', 'upload/2711201909323862.jpg', 'upload/2711201909324172.jpg', 'upload/2711201909324581.jpg', 'upload/271120190932496.jpg', '0', '2019-11-29 11:43:07', '', '', '2019-12-03 15:06:56', 'Flowers', '', '', ''),
(57, 'money plant', 'auspicious and wealth', 'bring prosperity', '50', '1500', '750', 20, '10', 'upload/27112019092743luck4.jpg', 'upload/27112019092747lucky.jpg', 'upload/27112019092751lucky1.jpg', 'upload/27112019092754lucky2.jpg', '0', '2019-11-27 08:27:55', '', '', '2019-12-03 15:13:18', 'Plants', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `pd_id` varchar(30) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `order_no` varchar(20) NOT NULL,
  `delivery_no` varchar(20) NOT NULL,
  `delivery_status` varchar(20) NOT NULL,
  `status_date` varchar(30) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `order_quantity` varchar(20) NOT NULL,
  `order_price` varchar(20) NOT NULL,
  `cust_id` varchar(20) NOT NULL,
  `invoice_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `pd_id`, `order_date`, `order_no`, `delivery_no`, `delivery_status`, `status_date`, `status_user`, `order_quantity`, `order_price`, `cust_id`, `invoice_no`) VALUES
(1, '46', '15/02/2019', '12315468', '21653489', 'pending', '10/12/2019', '1', '5', '200', '1', '00002'),
(2, '15', '16/12/2019', '52465351', '52431625', 'outdelivery', '10/12/2019', 'sunit', '3', '300', '1', '00001'),
(3, '47', '16/12/2019', '78945612', '32654511', 'processing', '10/12/2019', 'sunit', '32', '400', '1', '00002'),
(5, '18', '15/12/2019', '25451236', '32654512', 'processing', '10/12/2019', 'snit', '21', '600', '1', '00001'),
(7, '21', '18/12/2019', '78945612', '32456123', 'completed', '10/12/2019', 'snit', '11', '1111', '1', '00002');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `passing_year` varchar(40) NOT NULL,
  `messages` varchar(60) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `accepted_users` varchar(40) NOT NULL,
  `accepted_date` varchar(40) NOT NULL,
  `address` text NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `profile_picture` text NOT NULL,
  `designation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `first_name`, `middle_name`, `last_name`, `email`, `contact_no`, `gender`, `passing_year`, `messages`, `registration_date`, `status`, `accepted_users`, `accepted_date`, `address`, `blood_group`, `company_name`, `country`, `state`, `city`, `profile_picture`, `designation`) VALUES
(1, 'shailendra', 'Ratnakant', 'Naik', 'shailennaik6@gmail.com', '8983197087', 'male', '2020-01', 'testing', '2020-01-18 03:38:04', 0, '', '', '', '', '', '', '', '', '', ''),
(2, 'saisar', 'vesh', 'naik', 'saisarvesh@gmail.com', '8007023761', 'male', '2019-11', 'dasassdasdasda', '2020-01-18 06:09:29', 2, 'lloyd', '2020-01-18 22:28:01', '', '', '', '', '', '', '', ''),
(3, 'Paresh', 'Kust', 'Desai', 'dr.pareshdesai@yahoo.co.in', '9422639458', 'male', '1991-07', 'Am a Doctor.. Interventional Radiologist  working at Magnum ', '2020-01-19 12:01:10', 0, '', '', '', '', '', '', '', '', '', ''),
(7, 'Ishani ', 'Devidas', 'Sahakari ', 'idsahakari05@gmail.com', '7507369467', 'male', '2015-06', 'Proud to be a Navodayan ', '2020-01-19 12:46:05', 0, '', '', '', '', '', '', '', '', '', ''),
(8, 'Alveena', '.', 'Joseph', 'alveenajoseph@gmail.com', '9404485414', 'male', '2013-04', 'Alumni of Navodaya', '2020-01-19 12:52:16', 0, '', '', '', '', '', '', '', '', '', ''),
(9, 'Vijay', 'Ganesh', 'Fal Dessai', 'viju670068@rediffmail.com', '9545476887', 'male', '1994-05', 'Xyz', '2020-01-19 13:01:21', 0, '', '', '', '', '', '', '', '', '', ''),
(10, 'Victor', 'Rosario', 'Fernandes', 'victorieforfrendz@gmail.com', '9970171626', 'male', '1994-03', 'Well done everyone!! ', '2020-01-19 13:10:59', 0, '', '', '', '', '', '', '', '', '', ''),
(11, 'Charudutt ', 'Jayant', 'Sambhaji ', 'maildr.charu@gmail.com', '7745822446', 'male', '1994-04', 'Proud to be a part of the Navodaya culture. It is the integr', '2020-01-19 13:11:09', 0, '', '', '', '', '', '', '', '', '', ''),
(12, 'Rameshwar', 'Piraji', 'Kadam', 'rameshwar.rameshwarkadam.kadam', '7020783827', 'male', '1994-04', 'Hi Friends, Let\'s cherish our Good old friendship', '2020-01-19 13:38:26', 0, '', '', '', '', '', '', '', '', '', ''),
(13, 'Rupali', 'Moneesh', 'Tamuly', 'rupalimoneesh@gmail.com', '9923312775', 'male', '1989-04', 'I am available for career counseling and any sort of logisti', '2020-01-19 13:54:01', 0, '', '', '', '', '', '', '', '', '', ''),
(14, 'Rajendra ', 'Dharamvir', 'Singh', 'rsmitrol1@gmail.com', '9813373750', 'male', '1994-04', 'Proud to be a member of Navodaya family ', '2020-01-19 16:04:34', 0, '', '', '', '', '', '', '', '', '', ''),
(15, 'Deepesh', 'Dilip', 'Faldessai', 'deepesh.faldessai@gmail.com', '9373990033', 'male', '2008-07', 'Hello', '2020-01-19 17:26:35', 0, '', '', '', '', '', '', '', '', '', ''),
(16, 'Soniya', 'Pradeep', 'Dessai', 'dessaisoniya32@gmail.com', '9923583323', 'male', '2008-03', '.. ', '2020-01-19 17:53:40', 0, '', '', '', '', '', '', '', '', '', ''),
(17, 'Trupti', 'Haridas', 'Dessai', 'truptipujad@gmail.com', '9764536791', 'male', '1998-01', 'After completing my 12th from navodaya i did bsc in chemistr', '2020-01-19 18:08:05', 0, '', '', '', '', '', '', '', '', '', ''),
(18, 'TEJASWI', 'CHANDRAKANT', 'NAIK', 'tejasvinaik05@gmail.com', '9922277966', 'male', '2010-04', 'JNV, A second home to me,a place that moulded me to become a', '2020-01-19 18:16:07', 0, '', '', '', '', '', '', '', '', '', ''),
(19, 'Alvin', 'Angelo', 'Fernandes ', 'fed_alwin@yahoo.com', '0467633276', 'male', '1998-05', 'A', '2020-01-19 18:34:28', 0, '', '', '', '', '', '', '', '', '', ''),
(20, 'Deepti', 'Bhiku', 'Gaonkar', 'deeptigaonkar70@gmail.com', '8007804099', 'male', '2008-05', 'Hello friends\nI am Deepti Gaonkar passed out from JNV CANACO', '2020-01-20 07:30:22', 0, '', '', '', '', '', '', '', '', '', ''),
(21, 'Sneha', 'Suresh', 'Dhuri', 'snehadhuri1234@gmail.com', '9158403205', 'male', '2010-05', 'JNV happened to us...n v all created beautiful memories to c', '2020-01-20 08:47:59', 0, '', '', '', '', '', '', '', '', '', ''),
(22, 'Pankaj', 'Dilip', 'Parab', 'pankp09@gmail.com', '9657445739', 'male', '2006-08', 'Hi,\nI am CSIR-Senior Research Fellow at CSIR-National Instit', '2020-01-20 09:23:39', 0, '', '', '', '', '', '', '', '', '', ''),
(23, 'Hemant', 'Jaya', 'chari', 'Charihemant27@gmail.com', '8007833242', 'male', '2005-03', 'We all na visayam students are like a family navoday has giv', '2020-01-21 07:17:19', 0, '', '', '', '', '', '', '', '', '', ''),
(24, 'Atul', 'Shivram', 'Bandekar', 'atulbandekar90@gmail.com', '9923244690', 'male', '2002-04', 'Studying in JNV was the best experience of my life.  Navoday', '2020-01-25 16:28:02', 0, '', '', '', '', '', '', '', '', '', ''),
(25, 'Tejs alias Prajyoti', 'Uday', 'Naik Dessai', 'teja.dessai@gmail.com', '8554046077', 'male', '1992-04', 'First batch', '2020-01-26 16:08:04', 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `status` int(5) NOT NULL,
  `deleted_datetime` datetime(6) NOT NULL,
  `deleted_by` varchar(20) NOT NULL,
  `created_datetime` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `created_by` varchar(20) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `user_type`, `status`, `deleted_datetime`, `deleted_by`, `created_datetime`, `created_by`, `type_id`) VALUES
(1, 'lloyd', '123456', 'admin', 1, '0000-00-00 00:00:00.000000', '', '2020-01-10 09:36:27.353686', '1', 1),
(6, 'yogesh@gmail.com', 'dE4DMq2H', 'student', 0, '0000-00-00 00:00:00.000000', '', '2020-01-17 13:17:48.159498', '', 5),
(7, 'yogesh@gmail.com', 'V5UotFwu', 'student', 0, '0000-00-00 00:00:00.000000', '', '2020-01-17 13:23:08.037658', '', 7),
(8, 'saisarvesh@gmail.com', 'WYQN1u4g', 'student', 0, '0000-00-00 00:00:00.000000', '', '2020-01-18 06:21:06.195072', '', 8),
(9, 'rohit.dessai1@gmail.', 'owCctZiN', 'student', 0, '0000-00-00 00:00:00.000000', '', '2020-01-18 11:52:36.995047', '', 9),
(10, 'sai', 'sai', 'student', 1, '0000-00-00 00:00:00.000000', '', '2020-01-18 11:52:36.995047', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
