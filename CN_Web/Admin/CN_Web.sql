CREATE TABLE `staff`(
    `staff_id` int primary key not null auto_increment,
    `name` varchar(256) not null ,
    `phone` varchar(64) not null ,
    `password` varchar(256) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `event`(
    `event_id` int not null primary key auto_increment,
    `description` varchar(2048) not null,
    `image_link` varchar(256) not null,
    `title` varchar(1024) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `dish`(
    `dish_id` int not null primary key auto_increment,
    `category` varchar(256),
    `name` varchar(256) not null ,
    `description` varchar(512),
    `price` int not null ,
    `image_url` varchar(512)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `bill`(
    `bill_id` int not null primary key auto_increment,
    `event_id` int,
    `time_create` DATETIME not null ,
    `total` int not null ,
    `status` int not null,
    FOREIGN KEY (`event_id`) REFERENCES event(`event_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `table`(
    `table_id` int not null primary key auto_increment,
    `bill_id`int ,
    `number` int not null ,
    `status` int not null ,
    `customer_name` varchar(256),
    `phone` varchar(64),
    `time_reserve` DATETIME,
    `number_people` int,
    FOREIGN KEY (`bill_id`) REFERENCES bill(`bill_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `table_reserve_customer`(
    `table_customer_reserve_id` int not null primary key auto_increment,
    `customer_name` varchar(256) not null,
    `phone` varchar(64) not null,
    `time_reserve` DATETIME not null,
    `number_people` int not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `bill_dish`(
    `bill_id` int not null ,
    `dish_id` int not null ,
    `dish_quantity` int not null ,
    FOREIGN KEY (`bill_id`) REFERENCES bill(`bill_id`),
    FOREIGN KEY (`dish_id`) REFERENCES dish(`dish_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `staff` (`staff_id`, `name`, `phone`, `password`) VALUES (NULL, 'Admin', '0123', '0123');

INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-01 21:50:38', '200000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-02 21:17:17', '100000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-04 21:17:17', '400000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-06 21:17:17', '100000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-9 21:17:17', '900000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-13 21:17:17', '2000000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-17 21:17:17', '500000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-16 21:17:17', '800000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-18 21:17:17', '700000', '1');

INSERT INTO `event` (`event_id`, `image_link`, `description`, `title`) VALUES (NULL, 'https://kingbbq.vn/wp-content/uploads/2022/05/post-happy-mother-day-1-900x900.jpg', 'Nhân dịp Ngày của Mẹ, King BBQ xin gửi đến những ai đã, đang và sẽ làm mẹ những lời yêu thương ngọt ngào nhất.', 'Chúc mừng ngày của mẹ');
INSERT INTO `event` (`event_id`, `image_link`, `description`, `title`) VALUES (NULL, 'https://kingbbq.vn/wp-content/uploads/2022/06/king-bf_-di-4-tinh-tien-3-90x90.jpg', 'Shop tặng bạn ưu đãi hấp dẫn để thưởng thức trọn vẹn món ngon của ẩm thực Hàn: MIỄN PHÍ 1 SUẤT BUFFET cho nhóm 4 người.', 'Ngập tràn ưu đãi - xèo xèo thỏa thuê');
INSERT INTO `event` (`event_id`, `image_link`, `description`, `title`) VALUES (NULL, 'https://kingbbq.vn/wp-content/uploads/2022/04/redplus-900-x-900-i-ve-cgv-900x844.jpg', 'Dự tiệc King BBQ cùng hàng trăm món nướng cực đã và có cơ hội nhận ngay vé xem phim CGV cực phê. Ưu đãi chất với quy cách đổi vé siêu đơn giản.', 'Tiệc nướng cực đã');


-- table
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '1', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '2', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '3', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '4', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '5', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '6', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '7', '0', NULL, NULL, NULL, NULL);
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '8', '1', "Nguyễn Văn Biển", "0123455433", "2022-07-18 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '9', '2', "Nguyễn Văn Minh", "0123455433", "2022-07-12 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '10', '2', "Nguyễn Văn Biển", "0123455433", "2022-07-12 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '11', '2', "Nguyễn Văn Biển", "0123455433", "2022-07-12 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '12', '1', "Nguyễn Văn Minh", "01234556733", "2022-07-14 21:17:17", "4");
INSERT INTO `table` (`table_id`, `bill_id`, `number`, `status`, `customer_name`, `phone`, `time_reserve`, `number_people`) VALUES (NULL, NULL, '13', '1', "Nguyễn Văn Biển", "0123455433", "2022-07-18 21:17:17", "4");