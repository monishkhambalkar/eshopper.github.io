-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 06:11 AM
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
-- Database: `eshopper1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `email`, `password`) VALUES
(3, 'monish', 'monish@gmail.com', 'monish'),
(4, 'payal', 'payal@gmail.com', 'payal');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `categories`, `status`) VALUES
(1, 'KIDS', 1),
(2, 'MAN', 1),
(3, 'WOMEN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `query`, `mobile`, `date`) VALUES
(1, 'monish', 'monish@gmail.com', 'not ', '9960791240', '2021-02-23 01:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `custmer_detail`
--

CREATE TABLE `custmer_detail` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custmer_detail`
--

INSERT INTO `custmer_detail` (`id`, `username`, `name`, `mobile`, `address`, `city`, `zip`) VALUES
(124, 'monish@gmail.com', 'karan', '2323232323', 'patel', 'ngp', '525656'),
(125, 'monish@gmail.com', 'karan', '2323232323', 'patel', 'ngp', '525656'),
(126, 'monish@gmail.com', 'monish', '9960791240', 'itwari', 'nagpur', '440002'),
(127, 'monish@gmail.com', 'monish', '9960791240', 'itwari', 'nagpur', '440002'),
(128, 'monish@gmail.com', 'monish', '9960791240', 'itwari', 'ngp', '440002'),
(129, 'monish@gmail.com', 'monish', '9960791240', 'itwari', 'ngp', '440002'),
(130, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002'),
(131, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002'),
(132, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002'),
(133, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002'),
(134, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002'),
(135, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002'),
(136, 'monish@gmail.com', 'rahil', '9960791240', 'itwari', 'nagpur', '440002');

-- --------------------------------------------------------

--
-- Table structure for table `custmer_user`
--

CREATE TABLE `custmer_user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custmer_user`
--

INSERT INTO `custmer_user` (`id`, `name`, `password`, `email`, `mobile`, `status`) VALUES
(1, 'monish', 'monish', 'monish@gmail.com', '9960791240', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `paymentid` varchar(255) NOT NULL,
  `pprice` double NOT NULL,
  `qty` float NOT NULL,
  `total` double NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pname`, `paymentid`, `pprice`, `qty`, `total`, `date`) VALUES
(1, 'white shirt', '2845668745', 500, 1, 500, '2021-02-24 01:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_categories` int(11) NOT NULL,
  `p_sub_categories` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_categories`, `p_sub_categories`, `name`, `price`, `qty`, `image`, `description`, `status`) VALUES
(93, 1, 9, 'kids wdding dhoti', 4000, 1, 'upload/kids18.jpg', 'kids wedding special dhoti ', 1),
(94, 1, 9, 'rajshtani dress', 2000, 1, 'upload/kids16 (2).jpg', 'rajshani look dress ', 1),
(95, 1, 9, 'modi dress', 1500, 1, 'upload/kids19.jpg', 'modi pattern for festiwal', 1),
(96, 1, 9, 'wedding suit', 2500, 1, 'upload/kids25.jpg', 'wedding special suit', 1),
(97, 1, 9, 'boys t-shirt', 1000, 1, 'upload/kids26.jpg', 'boys t-shirt for kids', 1),
(98, 1, 9, 'kids shirt', 1500, 1, 'upload/kids4.jpg', 'kids shirt for summer', 1),
(99, 1, 9, 'kids jeans shirt', 2000, 1, 'upload/kids55.jpg', 'kids jeans shirt for special vocatiion', 1),
(100, 1, 9, 'boy kids night dress', 1200, 1, 'upload/kids27.jpg', 'kids boys night dress', 1),
(101, 1, 9, 'kids shirt pant', 1800, 1, 'upload/kids28.jpg', 'kids shirt pant for  casual use', 1),
(102, 1, 10, 'girl fork', 1500, 1, 'upload/kids9.jpg', 'net  fork for girl', 1),
(103, 1, 10, 'girl scut', 1500, 1, 'upload/kids7.jpg', 'red white dress for girl', 1),
(104, 1, 10, 'lahenga', 2000, 1, 'upload/kids13.jpg', 'lahenga for girl', 1),
(105, 1, 10, 'one pic', 1500, 1, 'upload/kids8.jpg', 'one pic for girl special', 1),
(106, 1, 10, 'girl night dress', 1500, 1, 'upload/kids32.jpg', 'kids girl night dress', 1),
(107, 1, 10, 'jeans t-shirt', 2000, 1, 'upload/kids37.jpg', 'jeans t-shirt for girl', 1),
(108, 1, 10, 'pink short dress', 5000, 1, 'upload/kids36.jpg', 'pink short dress for wedding special', 1),
(109, 1, 10, 'kids girl patialal', 1500, 1, 'upload/kids34.jpg', 'patial for girl', 1),
(110, 1, 10, 'white queen dress', 3000, 1, 'upload/kids29.jpg', 'white queen dress for baby girl', 1),
(111, 2, 1, 'pink shirt', 1500, 1, 'upload/formal22.jpg', 'pink formal for oofice use', 1),
(112, 2, 1, 'light blue shiet', 1500, 1, 'upload/formal.jpg', 'light blue shirt for formal use', 1),
(113, 2, 1, 'dark  gray color shirt', 1500, 1, 'upload/formal12.jpg', 'dark gray color shirt for formal use', 1),
(114, 2, 1, 'plane purpal color shirt', 1500, 1, 'upload/formal10.jpg', 'plane purpal color shirt ', 1),
(115, 2, 1, 'strate  line shirt', 1500, 1, 'upload/formal20.jpg', 'strate line shirt for office use', 1),
(116, 2, 1, 'plane blue color shrt', 1500, 1, 'upload/formal14.jpg', 'plane blue color shrt', 1),
(117, 2, 1, 'dark red ', 1500, 1, 'upload/formal2.jpg', 'dark red shirt', 1),
(118, 2, 1, 'red shirt', 1500, 1, 'upload/formal8.jpg', 'red shirt', 1),
(119, 2, 1, 'print shirt', 1500, 1, 'upload/formal7.jpg', 'print shirt in light color', 1),
(120, 2, 3, 'white and blue colller', 1000, 1, 'upload/t3.jpg', 'white and blue colller', 1),
(121, 2, 3, 'sport t- shirt', 700, 1, 'upload/t2.jpg', 'sport t- shirt', 1),
(122, 2, 3, 'coller t- shirt multicolor', 1800, 1, 'upload/t11.jpg', 'coller t- shirt multicolor', 1),
(123, 2, 3, '4 t-shirt v neck', 4000, 1, 'upload/t4.jpg', '4 t-shirt v neck', 1),
(124, 2, 3, '9 t-shirt pack ', 6000, 1, 'upload/t13.jpg', '9 t-shirt pack  in muticolor', 1),
(125, 2, 3, 'plane t-shirts', 9000, 1, 'upload/t7.jpg', 'plane t-shirts 9 pack', 1),
(126, 2, 3, 'two color t-shirt ', 1200, 1, 'upload/t5.jpg', 'round neck  two color t-shirt ', 1),
(127, 2, 3, 'printed black t-shirt', 1500, 1, 'upload/t14.jpg', 'printed black t-shirt', 1),
(128, 2, 3, 'plane brown t-shirt', 1200, 1, 'upload/t-shirt.jpg', 'plane brown t-shirt', 1),
(129, 2, 2, 'simpe plane jeans', 2000, 1, 'upload/jeans7.jpg', 'simpe plane jeans', 1),
(130, 2, 2, 'rip jeans', 2000, 1, 'upload/jeans1.jpg', 'rip jeans', 1),
(131, 2, 2, 'long jeans', 1500, 1, 'upload/jeans9.jpg', 'long jeans', 1),
(132, 2, 2, 'dark blue jeans', 1800, 1, 'upload/jeans2.jpg', 'dark blue jeans', 1),
(133, 2, 2, 'slim jeans', 1500, 1, 'upload/jeans.jpg', 'slim jeans', 1),
(134, 2, 2, 'light jeans', 1900, 1, 'upload/jeans10.jpg', 'light jeans', 1),
(135, 2, 2, 'old fashion jeans', 1500, 1, 'upload/jeans4.jpg', 'old fashion jeans', 1),
(136, 2, 2, 'dark slim jeans', 1800, 1, 'upload/jeans8.jpg', 'dark slim jeans', 1),
(137, 2, 2, 'jeans', 1500, 1, 'upload/jeans4.jpg', 'jeans', 1),
(138, 3, 6, 'bandhani saree', 2000, 1, 'upload/saree4.jpg', 'bandhani saree ', 1),
(139, 3, 6, 'silk saree', 1500, 1, 'upload/saree13.jpg', 'silk plane saree', 1),
(140, 3, 6, 'white plane saree', 2500, 1, 'upload/saree12.jpg', 'white plane saree', 1),
(141, 3, 6, 'cotton sare', 2500, 1, 'upload/saree2.jpg', 'cotton sare', 1),
(142, 3, 6, 'kanjivaram saree', 1500, 1, 'upload/saree5.jpg', 'kanjivaram saree', 1),
(143, 3, 6, 'black plane saree', 1500, 1, 'upload/saree.jpg', 'black plane saree', 1),
(144, 3, 6, 'net saree', 1500, 1, 'upload/saree11.jpg', 'net saree', 1),
(145, 3, 6, 'muticolor print saree', 2000, 1, 'upload/saree20.jpg', 'muticolor print saree', 1),
(146, 3, 6, 'back white saree', 1500, 1, 'upload/saree19.jpg', 'back white saree', 1),
(147, 3, 7, 'balck t- shirt jeans', 1500, 1, 'upload/jt4.jpg', 'balck t- shirt jeans', 1),
(148, 3, 7, 'full t-shirt', 1500, 1, 'upload/jt8.jpg', 'full t-shirt', 1),
(149, 3, 7, 'jeans jacket', 1500, 1, 'upload/jt2.jpg', 'jeans jacket', 1),
(150, 3, 7, 'white t- shirt', 1500, 1, 'upload/jt1.jpg', 'white t- shirt', 1),
(151, 3, 7, 'white shirt', 1500, 1, 'upload/jt10.jpg', 'white shirt', 1),
(152, 3, 7, 'half t- shirt', 1000, 1, 'upload/jt6.jpg', 'half t- shirt', 1),
(153, 3, 7, 'ladies jeans', 1500, 1, 'upload/jt5.jpg', 'ladies jeans', 1),
(154, 3, 7, 'full t- shirt jeans', 1500, 1, 'upload/jt3.jpg', 'full t- shirt jeans', 1),
(155, 3, 7, 'two color t- shirt', 1000, 1, 'upload/jt9.jpg', 'two color t- shirt', 1),
(156, 3, 8, 'plane orange', 1500, 1, 'upload/salwar2.jpg', 'plane orange', 1),
(157, 3, 8, 'printed salwar', 1200, 1, 'upload/salwar10.jpg', 'printed salwar', 1),
(158, 3, 8, 'plane salwar', 1500, 1, 'upload/salwar5.jpg', 'plane salwar', 1),
(159, 3, 8, 'patiyala salwar', 1500, 1, 'upload/salwar3.jpg', 'patiyala salwar', 1),
(160, 3, 8, 'net salwar', 1500, 1, 'upload/salwar4.jpg', 'net salwar', 1),
(161, 3, 8, 'long salwar', 1500, 1, 'upload/salwar.jpg', 'long salwar', 1),
(162, 3, 8, 'cotton salwar', 1500, 1, 'upload/salwar1.jpg', 'cotton salwar', 1),
(163, 3, 8, 'white salwar', 1500, 1, 'upload/salwar8.jpg', 'white salwar', 1),
(164, 3, 8, 'green salwar', 1520, 1, 'upload/salwar6.jpg', 'green salwar', 1),
(165, 1, 9, 'army pant', 1500, 1, 'upload/kidsboy.jpg', 'kida boy army jeans and white t-sirt', 1),
(166, 1, 10, 'girl capry', 1500, 1500, 'upload/kidsgirl.jpeg', 'girl capry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(255) NOT NULL,
  `c_categories` int(255) NOT NULL,
  `sub_categories` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `c_categories`, `sub_categories`, `status`) VALUES
(1, 2, 'formal', 1),
(2, 2, 'jeans', 1),
(3, 2, 't-shirt', 1),
(6, 3, 'saree', 1),
(7, 3, 'jeans t-shirt', 1),
(8, 3, 'salwar', 1),
(9, 1, 'boy', 1),
(10, 1, 'girl', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custmer_detail`
--
ALTER TABLE `custmer_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custmer_user`
--
ALTER TABLE `custmer_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custmer_detail`
--
ALTER TABLE `custmer_detail`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `custmer_user`
--
ALTER TABLE `custmer_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
