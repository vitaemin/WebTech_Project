CREATE TABLE `staff`(
    `staff_id` int primary key not null auto_increment,
    `name` varchar(256) not null ,
    `phone` varchar(64) not null ,
    `password` varchar(256) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `event`(
    `event_id` int not null primary key auto_increment,
    `event_name` varchar(256) not null ,
    `description` varchar(512) not null ,
    `poster` varchar(512),
    `status` int not null ,
    `time_start` date not null ,
    `time_end` date not null ,
    `discount_rate` int
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `dish`(
    `dish_id` int not null primary key auto_increment,
    `category` varchar(256),
    `description` varchar(512),
    `create_time` date not null ,
    `name` varchar(256) not null ,
    `price` int not null ,
    `image` varchar(512)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `bill`(
    `bill_id` int not null primary key auto_increment,
    `event_id` int,
    `date` DATETIME not null ,
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


INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-01 21:50:38', '200000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-02 21:17:17', '100000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-04 21:17:17', '400000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-06 21:17:17', '100000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-9 21:17:17', '900000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-13 21:17:17', '2000000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-17 21:17:17', '500000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-16 21:17:17', '800000', '1');
INSERT INTO `bill` (`bill_id`, `event_id`, `time_create`, `total`, `status`) VALUES (NULL, NULL, '2022-07-18 21:17:17', '700000', '1');