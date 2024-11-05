-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2024 at 08:13 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_loadswift`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) NOT NULL auto_increment,
  `admin_name` varchar(20) NOT NULL,
  `admin_contact` varchar(12) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(10) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_contact`, `admin_email`, `admin_password`) VALUES
(18, 'Beatrice Mathew', '9445678776', 'bm@gmail.com', 'Beatrice@0'),
(19, 'Sruthi Reji', '7560824132', 'sruthi@gmail.com', 'Sruthi@04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent`
--

CREATE TABLE `tbl_agent` (
  `agent_id` int(10) NOT NULL auto_increment,
  `agent_status` int(50) NOT NULL default '0',
  `agent_name` varchar(20) NOT NULL,
  `agent_gender` varchar(10) NOT NULL,
  `agent_address` varchar(50) NOT NULL,
  `agent_contact` varchar(15) NOT NULL,
  `agent_email` varchar(20) NOT NULL,
  `agent_photo` varchar(200) NOT NULL,
  `agent_idproof` varchar(200) NOT NULL,
  `agent_password` varchar(10) NOT NULL,
  `place_id` int(10) NOT NULL,
  PRIMARY KEY  (`agent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_agent`
--

INSERT INTO `tbl_agent` (`agent_id`, `agent_status`, `agent_name`, `agent_gender`, `agent_address`, `agent_contact`, `agent_email`, `agent_photo`, `agent_idproof`, `agent_password`, `place_id`) VALUES
(23, 1, 'Parthiv Binish', 'Male', 'Vadakekoyithurutil House', '9946732110', 'parthiv@gmail.com', 'abstract.avif', 'premium.jpeg', 'parthiv123', 6),
(24, 2, 'Arun Biju', 'Female', 'Melekudiyil House', '9446824152', 'arunbiju@gmail.com', 'premium.jpeg', 'abstract.avif', 'arunbiju', 7),
(25, 0, 'Jasmin Mathew', 'Female', 'Pothanamuzhiyil House', '9447212621', 'jasmin@gmail.com', 'abstract.avif', 'premium.jpeg', 'JM2000', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignorder`
--

CREATE TABLE `tbl_assignorder` (
  `assignorder_id` int(10) NOT NULL auto_increment,
  `assignorder_date` date NOT NULL,
  `userorder_id` int(10) NOT NULL,
  `agent_id` int(10) NOT NULL,
  `lorryowner_id` int(10) NOT NULL,
  `assignorder_status` varchar(50) NOT NULL,
  PRIMARY KEY  (`assignorder_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_assignorder`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL auto_increment,
  `booking_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_status` int(11) NOT NULL default '0',
  `booking_amount` varchar(50) NOT NULL,
  `total_amount` varchar(20) NOT NULL,
  `place_id` int(11) NOT NULL,
  `booking_km` int(11) NOT NULL,
  `booking_todate` varchar(50) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `lorryowner_id` int(11) NOT NULL,
  `booking_address` varchar(100) NOT NULL,
  PRIMARY KEY  (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `user_id`, `booking_status`, `booking_amount`, `total_amount`, `place_id`, `booking_km`, `booking_todate`, `agent_id`, `lorryowner_id`, `booking_address`) VALUES
(12, '2024-10-30', 5, 5, '50.00', '5050', 6, 100, '2024-11-01', 0, 0, 'Moolamattom'),
(13, '2024-10-30', 7, 7, '50.00', '550', 6, 10, '2024-10-31', 23, 0, 'Moolamattom'),
(14, '2024-11-02', 8, 1, '50.00', '5050', 6, 100, '2024-11-15', 24, 0, 'korangi kunnu'),
(15, '2024-11-02', 8, 1, '50.00', '25050', 9, 500, '2024-11-08', 25, 0, 'Moolamattom'),
(16, '2024-11-02', 8, 1, '50.00', '10010', 6, 199, '2024-11-29', 0, 15, 'kkppvz'),
(17, '2024-11-02', 8, 1, '50.00', '', 0, 0, '', 0, 0, ''),
(18, '2024-11-02', 6, 3, '30.00', '25060', 6, 500, '2024-11-04', 0, 0, 'Moolamattom'),
(19, '2024-11-02', 6, 6, '30.00', '7730', 6, 77, '2024-11-05', 0, 16, 'Moolamattom'),
(20, '2024-11-05', 9, 1, '50.00', '2050', 7, 40, '2024-11-06', 0, 0, 'munnar P.O idduki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL auto_increment,
  `cart_quantity` int(11) NOT NULL default '1',
  `booking_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL default '0',
  `product_id` int(11) NOT NULL,
  PRIMARY KEY  (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_quantity`, `booking_id`, `cart_status`, `product_id`) VALUES
(9, 1, 12, 1, 25),
(10, 1, 13, 1, 25),
(11, 1, 14, 1, 25),
(13, 2, 15, 1, 25),
(14, 1, 16, 1, 25),
(15, 1, 16, 1, 26),
(16, 1, 17, 1, 25),
(17, 1, 18, 1, 26),
(18, 1, 19, 1, 17),
(19, 1, 20, 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) NOT NULL auto_increment,
  `category_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(4, 'Fruits'),
(5, 'Vegitables'),
(6, 'Living Things');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(10) NOT NULL auto_increment,
  `complaint_date` date NOT NULL,
  `complaint_typeid` int(200) NOT NULL,
  `complaint_details` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `complaint_reply` varchar(100) NOT NULL,
  `complaint_status` int(50) NOT NULL default '0',
  `booking_id` int(11) NOT NULL,
  PRIMARY KEY  (`complaint_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_date`, `complaint_typeid`, `complaint_details`, `user_id`, `complaint_reply`, `complaint_status`, `booking_id`) VALUES
(1, '2024-11-01', 1, 'it damaged one', 8, 'good', 0, 11),
(2, '2024-11-01', 1, 'it damaged one', 8, 'bad', 0, 11),
(3, '2024-11-01', 1, 'kunji', 8, 'kanji', 0, 11),
(4, '2024-11-01', 1, 'kunji', 8, 'yes', 0, 13),
(5, '2024-11-02', 1, 'bad', 8, 'good', 0, 15),
(6, '2024-11-02', 1, 'not good', 6, 'sorry', 0, 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complainttype`
--

CREATE TABLE `tbl_complainttype` (
  `complaint_typeid` int(11) NOT NULL auto_increment,
  `type_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`complaint_typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_complainttype`
--

INSERT INTO `tbl_complainttype` (`complaint_typeid`, `type_name`) VALUES
(1, 'product issue');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(10) NOT NULL auto_increment,
  `district_name` varchar(20) NOT NULL,
  `state_id` int(10) NOT NULL,
  PRIMARY KEY  (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `state_id`) VALUES
(11, 'Idukki', 2),
(12, 'Ernakulam', 2),
(13, 'Palakkadu', 2),
(14, 'Chennai', 3),
(15, 'Erode', 3),
(16, 'Theni', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL auto_increment,
  `feedback_date` date NOT NULL,
  `feedback_content` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `lorryowner_id` int(11) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `feedback_content`, `user_id`, `seller_id`, `agent_id`, `lorryowner_id`) VALUES
(16, '0000-00-00', 'it very nice', 0, 0, 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `grade_id` int(10) NOT NULL auto_increment,
  `grade_name` varchar(20) NOT NULL,
  `category_id` int(10) NOT NULL,
  PRIMARY KEY  (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`grade_id`, `grade_name`, `category_id`) VALUES
(9, 'First', 4),
(10, 'Second', 5),
(11, 'First', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lorryowner`
--

CREATE TABLE `tbl_lorryowner` (
  `lorryowner_id` int(10) NOT NULL auto_increment,
  `lorryowner_name` varchar(20) NOT NULL,
  `lorryowner_gender` varchar(10) NOT NULL,
  `lorryowner_address` varchar(50) NOT NULL,
  `lorryowner_contact` varchar(20) NOT NULL,
  `lorryowner_email` varchar(20) NOT NULL,
  `lorryowner_photo` varchar(200) NOT NULL,
  `lorryowner_idproof` varchar(200) NOT NULL,
  `place_id` int(10) NOT NULL,
  `lorryowner_status` varchar(50) NOT NULL default '0',
  `lorryowner_password` varchar(10) NOT NULL,
  PRIMARY KEY  (`lorryowner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_lorryowner`
--

INSERT INTO `tbl_lorryowner` (`lorryowner_id`, `lorryowner_name`, `lorryowner_gender`, `lorryowner_address`, `lorryowner_contact`, `lorryowner_email`, `lorryowner_photo`, `lorryowner_idproof`, `place_id`, `lorryowner_status`, `lorryowner_password`) VALUES
(14, 'Sreya Rajeev', 'Female', 'Kuzhukattil H Moolamattom po', '6539024570', 'Sreya68@gmail.com', 'premium.jpeg', 'abstract.avif', 6, '1', 'Sreya54'),
(15, 'Busthana Sakeer', 'Female', 'Kuzhimandapathil House', '8790653421', 'busthu1@gmail.com', 'best-product-birds.jpg', 'premium.jpeg', 7, '0', 'busthu12'),
(16, 'Ananya Sunil', 'Female', 'Puthanpurakal House', '9087452030', 'ananya@gmail.com', 'premium.jpeg', 'abstract.avif', 8, '2', 'ananya7689');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderpayment`
--

CREATE TABLE `tbl_orderpayment` (
  `orderpayment_id` int(10) NOT NULL auto_increment,
  `orderpayment_date` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `orderpayment_status` int(50) NOT NULL,
  PRIMARY KEY  (`orderpayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_orderpayment`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(10) NOT NULL auto_increment,
  `place_name` varchar(20) NOT NULL,
  `place_pincode` int(6) NOT NULL,
  `district_id` int(10) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `place_pincode`, `district_id`) VALUES
(6, 'Thodupuzha', 685581, 11),
(7, 'Muvattupuzha', 686670, 12),
(8, 'Attappadi', 678582, 13),
(9, 'Anna Nagar', 600040, 14),
(10, 'Kasipalayam', 638009, 15),
(11, 'Upvan Lake', 400606, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) NOT NULL auto_increment,
  `product_name` varchar(20) NOT NULL,
  `grade_id` int(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `product_date` date NOT NULL,
  `place_id` int(10) NOT NULL,
  `product_locationaddress` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_status` int(11) NOT NULL default '0',
  `product_price` int(11) NOT NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `grade_id`, `seller_id`, `product_date`, `place_id`, `product_locationaddress`, `product_image`, `product_status`, `product_price`) VALUES
(16, 'Tomato', 10, 0, '2024-09-05', 6, 'Moolammatom', 'images.jpeg', 0, 0),
(17, 'Tomato', 10, 3, '2024-09-04', 6, 'Moolamattom', 'images.jpeg', 1, 30),
(18, 'Tomato', 10, 0, '2024-09-04', 6, 'Moolamattom', 'images.jpeg', 0, 0),
(19, 'Potato', 11, 0, '2024-09-13', 7, 'Vazhakulam', 'potato.jpeg', 0, 0),
(20, 'arya', 10, 0, '2024-09-05', 6, 'ffffff', 'potato.jpeg', 0, 0),
(21, 'Potato', 11, 0, '2024-09-05', 7, 'Vazhakulam', 'potato.jpeg', 0, 0),
(22, 'Potato', 11, 3, '2024-09-12', 8, 'Vazhakulam', 'potato.jpeg', 1, 0),
(25, 'pinapple', 9, 4, '2024-10-09', 6, 'Mollamattom', 'fruite-item-p.jpg', 0, 50),
(26, 'tomato', 10, 4, '2024-10-17', 6, 'thodupuzha', 'fruite-item-t.jpg', 0, 60);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_value` int(11) NOT NULL,
  `rating_content` varchar(500) NOT NULL,
  `rating_datetime` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY  (`rating_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `seller_id` int(10) NOT NULL auto_increment,
  `seller_name` varchar(20) NOT NULL,
  `seller_gender` varchar(10) NOT NULL,
  `seller_address` varchar(50) NOT NULL,
  `seller_contact` varchar(20) NOT NULL,
  `seller_email` varchar(20) NOT NULL,
  `seller_photo` varchar(200) NOT NULL,
  `seller_idproof` varchar(200) NOT NULL,
  `place_id` int(10) NOT NULL,
  `seller_password` varchar(20) NOT NULL,
  `seller_status` int(50) NOT NULL default '0',
  `amount_km` varchar(50) NOT NULL,
  PRIMARY KEY  (`seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`seller_id`, `seller_name`, `seller_gender`, `seller_address`, `seller_contact`, `seller_email`, `seller_photo`, `seller_idproof`, `place_id`, `seller_password`, `seller_status`, `amount_km`) VALUES
(3, 'Saniya Sunny', 'Female', 'Kalapurakal House', '9780402341', 'saniya@gmail.com', 'premium.jpeg', 'abstract.avif', 6, 'Sani2004', 1, '100\n'),
(4, 'Vismaya Sony', 'Female', 'Kuttikattil House', '6740824152', 'vismaya@gmail.com', 'fruite-item-ch.jpg', 'abstract.avif', 7, 'visz@01', 1, '50'),
(5, 'Ron Rojen', ' Male', 'Puthedathu House', '6579024165', 'ron@gmail.com', 'abstract.avif', 'premium.jpeg', 8, 'Ron2002', 1, '200'),
(6, 'Shama', 'Female', 'Kumbukal', '6579084532', 'Shama@gmail.com', 'premium.jpeg', 'abstract.avif', 9, '1234', 1, '120');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(10) NOT NULL auto_increment,
  `state_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`) VALUES
(2, 'Kerala'),
(3, 'Tamilnadu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_quantity` varchar(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `stock_id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_quantity`, `product_id`, `stock_id`) VALUES
('67', 26, 1),
('67', 25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) NOT NULL auto_increment,
  `user_name` varchar(20) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_address` varchar(30) NOT NULL,
  `user_contact` varchar(15) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_photo` varchar(200) NOT NULL,
  `user_idproof` varchar(200) NOT NULL,
  `user_status` int(50) NOT NULL default '0',
  `place_id` int(10) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_address`, `user_contact`, `user_email`, `user_password`, `user_photo`, `user_idproof`, `user_status`, `place_id`) VALUES
(5, 'Bibin Siby', ' Male', 'Narimattathil House', '8241506034', 'bibinsiby@gmail.com', 'Bibin2356', 'premium.jpeg', 'abstract.avif', 1, 6),
(6, 'Irin Babu', 'Female', 'Velamkuzhiyil House', '6045824152', 'irinsrababu@gmail.co', 'irin65', 'premium.jpeg', 'abstract.avif', 0, 7),
(7, 'Devapriya s', 'Female', 'Melekudiyil House', '8281279407', 'devapriya@gmail.com', 'devu2002', 'premium.jpeg', 'abstract.avif', 2, 8),
(8, 'user', 'Female', 'korangu veetil kunji', '6282038574', 'user@gmail.com', 'user', 'picc.jpg', 'pic.jpg', 0, 6),
(9, 'User', ' Male', 'User', '9778383910', 'user@gmail.com', 'User@123', 'download.jfif', 'beijing-china-january-28-2017-260nw-627951437.webp', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userorder`
--

CREATE TABLE `tbl_userorder` (
  `userorder_id` int(10) NOT NULL auto_increment,
  `product_id` int(10) NOT NULL,
  `userorder_quantity` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `userorder_date` date NOT NULL,
  `userorder_to_date` date NOT NULL,
  `userorder_location` int(100) NOT NULL,
  `userorder_location address` int(100) NOT NULL,
  `userorder_status` int(50) NOT NULL,
  `userorder_rate` int(10) NOT NULL,
  `userorder_total amount` int(20) NOT NULL,
  PRIMARY KEY  (`userorder_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_userorder`
--

