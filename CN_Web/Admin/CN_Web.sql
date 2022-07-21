-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 04:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


<<<<<<< HEAD
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
=======
CREATE TABLE `dish`(
    `dish_id` int not null primary key auto_increment,
    `category` varchar(256),
    `name` varchar(256) not null ,
    `description` varchar(512),
    `price` int not null ,
    `image_url` varchar(512)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
>>>>>>> tiencm

--
-- Database: `cn_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `discount_rate` int(11) DEFAULT NULL,
  `time_create` datetime NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_phone` varchar(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

<<<<<<< HEAD
--
-- Dumping data for table `bill`
--
INSERT INTO `staff` (`staff_id`, `name`, `phone`, `password`) VALUES (NULL, 'Admin', '0123', '0123');

INSERT INTO `bill` (`bill_id`, `event_id`, `discount_rate`, `time_create`, `guest_name`, `guest_phone`, `total`, `status`) VALUES
(13, NULL, NULL, '2022-07-21 00:00:00', 'thit bo', '150', 190, 1),
(14, NULL, NULL, '2022-07-21 04:27:04', 'thit rua', '1200', 100, 1),
(18, NULL, NULL, '2022-07-21 04:29:39', 'thit cho', '1500', 120, 1),
(21, NULL, 20, '0000-00-00 00:00:00', 'thit baba', '111', 0, 1),
(26, NULL, 0, '2022-07-21 04:50:56', 'thit cuu', '112', 240, 1),
(27, NULL, 0, '2022-07-21 04:53:16', 'thit cuu', '112', 240, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bill_dish`
--

CREATE TABLE `bill_dish` (
  `bill_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `dish_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `dish_id` int(11) NOT NULL,
  `category` varchar(256) DEFAULT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image_url` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `description` varchar(2048) NOT NULL,
  `image_link` varchar(256) NOT NULL,
  `title` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `description`, `image_link`, `title`) VALUES
(1, 'Nhân dịp Ngày của Mẹ, King BBQ xin gửi đến những ai đã, đang và sẽ làm mẹ những lời yêu thương ngọt ngào nhất.', 'https://kingbbq.vn/wp-content/uploads/2022/05/post-happy-mother-day-1-900x900.jpg', 'Chúc mừng ngày của mẹ'),
(2, 'Shop tặng bạn ưu đãi hấp dẫn để thưởng thức trọn vẹn món ngon của ẩm thực Hàn: MIỄN PHÍ 1 SUẤT BUFFET cho nhóm 4 người.', 'https://kingbbq.vn/wp-content/uploads/2022/06/king-bf_-di-4-tinh-tien-3-90x90.jpg', 'Ngập tràn ưu đãi - xèo xèo thỏa thuê'),
(3, 'Dự tiệc King BBQ cùng hàng trăm món nướng cực đã và có cơ hội nhận ngay vé xem phim CGV cực phê. Ưu đãi chất với quy cách đổi vé siêu đơn giản.', 'https://kingbbq.vn/wp-content/uploads/2022/04/redplus-900-x-900-i-ve-cgv-900x844.jpg', 'Tiệc nướng cực đã');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `table_id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `customer_name` varchar(256) DEFAULT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `time_reserve` datetime DEFAULT NULL,
  `number_people` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES
(1, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, NULL, 2, 0, NULL, NULL, NULL, NULL),
(3, NULL, 3, 0, NULL, NULL, NULL, NULL),
(4, NULL, 4, 0, NULL, NULL, NULL, NULL),
(5, NULL, 5, 0, NULL, NULL, NULL, NULL),
(6, NULL, 6, 0, NULL, NULL, NULL, NULL),
(7, NULL, 7, 0, NULL, NULL, NULL, NULL),
(8, NULL, 8, 1, 'Nguyễn Văn Biển', '0123455433', '2022-07-18 21:17:17', 4),
(9, NULL, 9, 2, 'Nguyễn Văn Minh', '0123455433', '2022-07-12 21:17:17', 4),
(10, NULL, 10, 2, 'Nguyễn Văn Biển', '0123455433', '2022-07-12 21:17:17', 4),
(11, NULL, 11, 2, 'Nguyễn Văn Biển', '0123455433', '2022-07-12 21:17:17', 4),
(12, NULL, 12, 1, 'Nguyễn Văn Minh', '01234556733', '2022-07-14 21:17:17', 4),
(13, NULL, 13, 1, 'Nguyễn Văn Biển', '0123455433', '2022-07-18 21:17:17', 4);

-- --------------------------------------------------------

--
-- Table structure for table `table_reserve_customer`
--

CREATE TABLE `table_reserve_customer` (
  `table_customer_reserve_id` int(11) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `time_reserve` datetime NOT NULL,
  `number_people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `bill_dish`
--
ALTER TABLE `bill_dish`
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `dish_id` (`dish_id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`table_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Indexes for table `table_reserve_customer`
--
ALTER TABLE `table_reserve_customer`
  ADD PRIMARY KEY (`table_customer_reserve_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_reserve_customer`
--
ALTER TABLE `table_reserve_customer`
  MODIFY `table_customer_reserve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `bill_dish`
--
ALTER TABLE `bill_dish`
  ADD CONSTRAINT `bill_dish_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`),
  ADD CONSTRAINT `bill_dish_ibfk_2` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`dish_id`);

--
-- Constraints for table `table`
--
ALTER TABLE `table`
  ADD CONSTRAINT `table_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`bill_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- table
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '1', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '2', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '3', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '4', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '5', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '6', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '7', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '8', '1', "Nguyễn Văn Biển", "0123455433", "2022-07-18 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '9', '1', "Nguyễn Văn Minh", "0123455433", "2022-07-14 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '10', '1', "Nguyễn Văn Biển", "0123455433", "2022-07-18 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '11', '1', "Nguyễn Văn Biển", "0123455433", "2022-07-18 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '12', '1', "Nguyễn Văn Minh", "01234556733", "2022-07-14 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '13', '1', "Nguyễn Văn Biển", "0123455433", "2022-07-18 21:17:17", "4");
=======
-- dish
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`) VALUES (NULL, 'mon_chinh', 'Bò BeafSteak', 'Bò Beaf Steak được chế biến từ đầu bếp đẳng cấp nhất Việt Nam. Thơm ngon mời bạn ăn nha', '299000', 'https://naturallyvietnam.com/wp-content/uploads/2020/05/a54-1024x1024.jpg');




>>>>>>> tiencm
