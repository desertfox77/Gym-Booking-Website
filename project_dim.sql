-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 05:07 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_dim`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlocation`
--

CREATE TABLE `addlocation` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(128) NOT NULL,
  `shop_location` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addlocation`
--

INSERT INTO `addlocation` (`id`, `shop_name`, `shop_location`, `user_id`, `location`) VALUES
(1, 'Messi Gym', 'Jalan Fathan no 21', 10, 'southjakarta'),
(7, 'Leo Gym', 'Jalan Fathan no 21', 10, 'depok'),
(13, 'Asyik Gym', 'Jalan Fathan no 25', 9, 'southjakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pay_private`
--

CREATE TABLE `pay_private` (
  `id` int(11) NOT NULL,
  `class_name` varchar(128) NOT NULL,
  `start_hours` varchar(128) NOT NULL,
  `end_hours` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `type_payment` varchar(128) NOT NULL,
  `code_transactions` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code_reservation` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `day` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_private`
--

INSERT INTO `pay_private` (`id`, `class_name`, `start_hours`, `end_hours`, `price`, `location`, `type_payment`, `code_transactions`, `user_id`, `code_reservation`, `date`, `date_created`, `day`) VALUES
(3, 'Weight Lifting', '02:00', '04:00', '300000', 'Messi Gym-depok', 'Dana', 'Wbxq0', 1, 'En22QCFZ', '03:22:08pm', 1578558128, 'monday'),
(4, 'Boxing', '03:00', '06:00', '500000', 'Asyik Gym-southjakarta', 'Dana', 'NETNd', 1, '5ls20930', '05:11:39pm', 1578564699, 'friday'),
(5, 'Yoga', '14:00', '16:00', '200000', 'Leo Gym-depok', 'LinkAja', 'U340b', 2, 'rKwYl3sF', '07:51:47am', 1578703907, 'sunday'),
(7, 'Weight Lifting', '02:00', '04:00', '300000', 'Messi Gym-depok', 'OVO', 'tkPWY', 1, 'UuYeLdj7', '11:47:36pm', 1579020456, 'monday'),
(8, 'Running', '15:00', '18:00', '120000', 'Asyik Gym-southjakarta', 'LinkAja', 'I9sJ9', 1, 'N924A40l', '11:59:42pm', 1579021182, 'tuesday'),
(9, 'Yoga', '08:00', '11:00', '300000', 'Asyik Gym-southjakarta', 'GoPay', '31r8a', 1, 'f0Nkt242', '12:04:45am', 1579021485, 'saturday');

-- --------------------------------------------------------

--
-- Table structure for table `pay_trainer`
--

CREATE TABLE `pay_trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `sessions` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `type_payment` varchar(128) NOT NULL,
  `code_transactions` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code_reservation` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_trainer`
--

INSERT INTO `pay_trainer` (`id`, `name`, `price`, `sessions`, `location`, `type_payment`, `code_transactions`, `user_id`, `code_reservation`, `date`, `date_created`) VALUES
(1, 'Fathan Zidni', '500000', '1sessions', 'Leo Gym-depok', 'LinkAja', 'afsoJ', 2, 'vj502Qrf', '08:23:59am', 1579051439),
(2, 'Paulo Dybala', '800000', '5sessions', 'Asyik Gym-southjakarta', 'OVO', 'tOutw', 1, 'd2SKyKMa', '09:54:27am', 1579056867);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `type_payment` varchar(128) NOT NULL,
  `code_transaction` varchar(128) NOT NULL,
  `total_payment` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `type_payment`, `code_transaction`, `total_payment`, `user_id`, `date`) VALUES
(38, 'GoPay', 'x4xLo', '200000', 1, '07:49:45am'),
(39, 'OVO', 'NEusP', '200000', 1, '01:53:29pm'),
(40, 'Dana', '7MId9', '200000', 1, '02:52:28pm'),
(41, 'LinkAja', 'aP0d3', '200000', 2, '07:51:19am');

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE `private` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `start_hours` varchar(128) NOT NULL,
  `end_hours` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `day` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `private`
--

INSERT INTO `private` (`id`, `name`, `start_hours`, `end_hours`, `price`, `day`, `location`, `user_id`) VALUES
(9, 'Boxing', '08:00', '10:00', '500000', 'friday', 'Asyik Gym-southjakarta', 9),
(10, 'Running', '14:00', '15:00', '250000', 'monday', 'Messi Gym-depok', 10),
(11, 'Yoga', '14:00', '16:00', '200000', 'sunday', 'Leo Gym-depok', 10),
(12, 'Weight Lifting', '02:00', '04:00', '300000', 'monday', 'Messi Gym-depok', 10),
(13, 'Yoga', '14:00', '16:00', '240000', 'tuesday', 'Leo Gym-depok', 10),
(14, 'Running', '15:00', '18:00', '120000', 'tuesday', 'Asyik Gym-southjakarta', 9),
(16, 'Yoga', '08:00', '11:00', '300000', 'saturday', 'Asyik Gym-southjakarta', 9);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_hours` varchar(128) NOT NULL,
  `end_hours` varchar(128) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `total_waktu` varchar(128) NOT NULL,
  `jumlah_biaya` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `date`, `start_hours`, `end_hours`, `lokasi`, `total_waktu`, `jumlah_biaya`, `user_id`, `code`) VALUES
(1, '2019-12-28', '02:00', '04:00', 'Vincent Gym-tangerang', '2', '200000', 2, '4hyc2k21'),
(25, '2019-11-25', '14:00', '16:00', 'Messi Gym-depok', '2', '200000', 1, '9CK2axAW'),
(26, '2019-11-28', '13:00', '15:00', 'Messi Gym-depok', '2', '200000', 1, 'wGehLSBE'),
(28, '2019-12-11', '02:00', '07:00', 'Leo Gym-depok', '5', '500000', 1, 'lPHV3SdK');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(128) NOT NULL,
  `sessions` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `price`, `sessions`, `location`, `user_id`, `image`) VALUES
(1, 'Fathan Zidni', '500000', '1sessions', 'Leo Gym-depok', 10, 'default.jpg'),
(2, 'Lionel Messi', '700000', '5sessions', 'Asyik Gym-southjakarta', 9, '10989477646178.jpg'),
(3, 'Paulo Dybala', '800000', '5sessions', 'Asyik Gym-southjakarta', 9, 'images1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `phone_number` varchar(128) NOT NULL,
  `pay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `phone_number`, `pay_id`) VALUES
(1, 'Fathan Zidni', 'fathan@yahoo.com', '109894776461781.jpg', '$2y$10$g/Ls.X6xiHgt5fFvfr.Fy.EVr/.T/wtTs5iEaOYAcO/ejSS9n2Dgy', 2, 1, 1576124122, '081122223333', 0),
(2, 'michael', 'michael@yahoo.com', '2.jpg', '$2y$10$5qJSbhAxYATLNOxD6/KX9eXd2vmqfZrmUN70J.2JqFktx0e7Z2xRC', 2, 1, 1576146073, '082211113333', 0),
(6, 'Admin', 'admin@gofit.com', 'default.jpg', '$2y$10$zAm0t99aq87/JirzGS/tZewUPvPXclsfQaes19ahjSu5Yg9RMHWce', 1, 1, 1576636821, '083322221111', 0),
(7, 'Michael', 'michaelryanka@gmail.com', 'default.jpg', '$2y$10$p6QNLTnS3A3WYMkU.dHgEut.BbHY1w8TJZsSuRMZCh0QVK1uPZzhy', 2, 1, 1576896532, '087775100008', 0),
(8, 'eva', 'eva@gmail.com', 'default.jpg', '$2y$10$u/cZPCu4Y6khTx4hy2Irpula5ENkYZRQyaP7zLstBJqpx/dATFiii', 2, 1, 1577675193, '082244443333', 0),
(9, 'mitra001', 'mitra001@gofit.com', 'default.jpg', '$2y$10$Pp8OaqqKbDULBqLenNCZY.dnctGO7e7ROdFC8v9/.PmTaukPBl/8.', 3, 1, 1577877061, '082244443333', 0),
(10, 'mitra002', 'mitra002@gofit.com', 'default.jpg', '$2y$10$vlyjCZDX292IuRY7xISp8.p4UQ8BAYWDNPIo.X9V6.HGpAr1HiOcK', 3, 1, 1577888322, '081122223333', 0),
(12, 'leo', 'spektaxiia3@gmail.com', 'default.jpg', '$2y$10$yVLmOE12EreCOJA6hEbvsOIy2Ns.At7kByip2lo88W3AXEqesE7MW', 2, 1, 1579096381, '082244443333', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Partner');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(4, 'spektaxiia3@gmail.com', 'DHWEGr1K+l6Bm9YTO6EO1S+KCv9d3gyfX7zKYMb9q4I=', 1579101665),
(5, 'spektaxiia3@gmail.com', '4va12DvxuSCwLfcxT0hiseiWeY55zQRsAY8lU5+ivNE=', 1579102913);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlocation`
--
ALTER TABLE `addlocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_private`
--
ALTER TABLE `pay_private`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay_trainer`
--
ALTER TABLE `pay_trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addlocation`
--
ALTER TABLE `addlocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pay_private`
--
ALTER TABLE `pay_private`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pay_trainer`
--
ALTER TABLE `pay_trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `private`
--
ALTER TABLE `private`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
