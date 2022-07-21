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


CREATE TABLE `dish`(
    `dish_id` int not null primary key auto_increment,
    `category` varchar(256),
    `name` varchar(256) not null ,
    `description` varchar(512),
    `price` int not null ,
    `image_url` varchar(512)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Database: `cn_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL primary key auto_increment,
  `discount_rate` int(11) DEFAULT NULL,
  `time_create` datetime NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_phone` varchar(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--
INSERT INTO `staff` (`staff_id`, `name`, `phone`, `password`) VALUES (NULL, 'Admin', '0123', '0123');

INSERT INTO `bill` (`discount_rate`, `time_create`, `guest_name`, `guest_phone`, `total`, `status`) VALUES
( NULL, '2022-07-21 00:00:00', 'Nguyễn Văn Biển', '1542342340', 190000, 1),
( NULL, '2022-07-21 04:27:04', 'Nguyễn Văn Minh', '1257623500', 100000, 1),
( NULL, '2022-07-21 04:29:39', 'Nguyễn Văn Minh', '1532342300', 120000, 1),
( 20, '2022-07-21 00:00:00', 'Nguyễn Văn Biển', '234207111', 1500000, 1),
( 10, '2022-07-21 04:50:56', 'Nguyễn Văn Biển', '0778788112', 240000, 1),
( 10, '2022-07-21 04:53:16', 'Nguyễn Văn Biển', '068768112', 240000, 1);

-- --------------------------------------------------------



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
-- dish
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`) VALUES (NULL, ''mon_chinh'', ''Bò BeafSteak'', ''Bò Beaf Steak được chế biến từ đầu bếp đẳng cấp nhất Việt Nam. Thơm ngon mời bạn ăn nha'', ''
299000'', ''https://naturallyvietnam.com/wp-content/uploads/2020/05/a54-1024x1024.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''mon_chinh'', ''Mực hấp bia'', ''Bia hấp với mực sao lại hòa hợp đến vậy,
        món mực hấp bia không hề còn bị tanh một chút nào,
        cực kỳ phù hợp với vị ngọt ngào của mực. Cái hay của món mực hấp bia chính là sự thơm ngon và bổ dưỡng khi giữu được cho mực không ra nước.'',
        ''99000 '', ''https://yummyday.vn/uploads/images/muc-hap-bia-4.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''mon_chinh'', ''Gà nướng cơm lam'',
        ''Gà nướng Cơm Lam vốn là món ăn đặc trưng của miền Tây Bắc và cả núi rừng Tây Nguyên. Cơm lam món cơm dẻo mềm quyện trong cái mùi ngai ngái của ống nứa non.'',
        ''699000 '', ''https://i.pinimg.com/736x/bb/bc/51/bbbc5138f0523010786d97c614387f8f.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''mon_chinh'', ''Trâu gác bếp'', ''Thịt Trâu Gác Bếp do anh chị em chúng tôi ngả trâu, tự tay tẩm ướp,
        gác bếp và cung cấp đến tận tay các bác.'', ''299000 '',
        ''https://th.bing.com/th/id/OIP.8F2GVrhmHOkLInnyQYlYQwHaHa?pid=ImgDet&rs=1'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''mon_chinh'', ''Cá măng gác bếp'', ''Cá Măng Sông Đà tự nhiên 100%, Thái miếng, tẩm ướp Mắc Khén, Ớt,
        Muối và gác bếp theo đúng phong vị ẩm thực Tây Bắc. Sản phẩm số lượng hạn chế, khi đặt hàng,
        rất mong quý anh chị vui lòng kiên nhẫn chờ đến lượt nhận hàng.'', ''169000 '',
        ''https://huongrungtaybac.vn/cdn1/images/202106/goods_img/ca-mang-gac-bep-P1357-1623229769838.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''mon_chinh'', ''Tôm nướng phô mai'',
        ''Tôm hùm Baby nướng phô mai với hương vị được giữ nguyên trọn vẹn từ thịt tôm trắng muốt dai ngon,
        được phủ đầy lớp kem phô mai đặc biệt mang đến hương vị rất Tây.'', ''269000 '',
        ''https://product.hstatic.net/1000166699/product/104_cbb05cf5edd04f3abfb8227951d240d5_master.png'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''mon_chinh'', ''Bạch tuộc sả ớt'', ''Bạch tuộc nướng sa tế luôn là món ăn giòn rụm,
        cay ngon được lòng tất cả mọi người kể cả người khó tính nhất. Tuy nhiên bạn có biết món ăn này có rất nhiều cách làm và mỗi cách làm lại mang đến một vị rất riêng.'',
        ''139000 '', ''https://haisanxanh.com/uploads/images/bach-tuoc-nuong-sa-te(2).jpg'');


INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''khai_vi'', ''Súp gà ngô nấm'', ''Súp gà nấm hương thanh đạm từ nước dùng từ gà,
        với hương thơm đặc trưng của nấm hương quyện với ngô ngon ngọt.'', ''129000 '',
        ''https://tinnhanhtaynguyen.com/wp-content/uploads/2021/05/sup-ga-nam-huong-mon-an-thom-ngon-boi-duong-cho-ca-nha-sup_ga_han_quoc_an_lien_75ca28bf4e414881a9fc66c57fbecf73-768x768.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''khai_vi'', ''Súp bào ngư hải sâm'',
        ''Súp bào ngư có tác dụng bồi bổ sức khỏe và phòng chống nhiều căn bệnh nguy hiểm như ung thư, bệnh đường huyết,
        tăng cường miễn dịch. Vì thế, món ăn này được nhiều người ưa chuộng sử dụng.'', ''1999000 '',
        ''https://th.bing.com/th/id/OIP.jT_L7f4c0OeN3iXeQu3awQHaHa?pid=ImgDet&rs=1'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''khai_vi'', ''Salad dưa chuột củ cải ướp lạnh'',
        ''Món salad dưa chuột củ cải tươi mát này chính là thứ bạn cần trong một ngày hè nóng nực. Nó bao gồm dưa chuột tươi lạnh,
        củ cải giòn ngọt cùng nước sốt chanh dầu ô liu thơm dịu. Món salad đơn giản nhưng hương vị lại rất cuốn hút.'',
        ''39000 '', ''https://s.meta.com.vn/img/thumb.ashx/Data/image/2021/03/20/salad-dua-chuot-2.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''khai_vi'', ''Salad đậu bắp'',
        ''Salad đậu bắp – Bạn sẽ thấy thích thú và ngon miệng với món salad đậu bắp này. Với vị chua ngọt rất thích hợp cho mùa hè,
        hợp với những bạn muốn giữ dáng.\r\n'', ''69000 '',
        ''https://tandoorvietnam.com/wp-content/uploads/2020/06/Chana-salad-600x600.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''khai_vi'', ''Gỏi nộp tai heo'',
        ''Thử một miếng gỏi bạn sẽ lập tức cảm nhận được độ giòn và vị ngọt của đu đủ, cà rốt, tai heo nhai sựt sựt,
        đẫm trong nước sốt trộn chua, cay, mặn, ngọt, đậm đà, khó cưỡng.'', ''69000 '',
        ''https://th.bing.com/th/id/OIP.FX71KNWvFLVJIsaliHEslAHaHa?pid=ImgDet&rs=1'');

INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''trang_mieng'', ''Chè vải hạt sen'', ''Chè vải hạt sen thơm ngon, thanh mát, ngọt dịu,
        giải nhiệt mùa hè trên đây, chúc bạn có những bữa ăn ngon miệng'', ''29000 '',
        ''https://cdn.tgdd.vn/2021/07/CookRecipe/GalleryStep/thanh-pham-681.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''trang_mieng'', ''Trà sữa coi'',
        ''Singapore là đất nước đã hình thành nên loại trà sữa thần thánh này. Vì được hình thành nên từ Singapore nên loại trà sữa này không quá ngọt,
        hơi thanh thanh và có nhiều hương vị trộn lẫn.'', ''49000 '',
        ''https://s1.storage.5giay.vn/image/2019/01/20190119_e3e8bb92d465ad9099f2ad5b8601e328_1547892340.jpg'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''trang_mieng'', ''Sữa chua hoa quả dầm'', ''Sữa chua hoa quả dầm là món tráng miệng tuyệt vời,
        một trong những món tráng miệng thích hợp cho mùa hè nóng bức'', ''25000 '',
        ''https://th.bing.com/th/id/R.fa4530671aaf1e3cc00801396ab3fbca?rik=wEZO3M%2f3%2f3vgEg&pid=ImgRaw&r=0'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''trang_mieng'', ''Sinh tố bơ'', ''Sinh tố bơ là món giải khát thơm ngon,
        dồi dào dưỡng chất và cực kỳ “hợp cạ” với khí hậu nóng ẩm ở Việt Nam.'', ''36000 '',
        ''https://th.bing.com/th/id/R.478fe063d24cc84ab15f81b53bff72d5?rik=wNTFA8s5gab2fA&riu=http%3a%2f%2fcoffee.eruco.vn%2fupload%2fsanpham%2fsinhtobo_eruco-9726.jpg&ehk=mzact0evNR6ngJ2CMJaqvm9JvZGptOQtolaa5lB3anU%3d&risl=&pid=ImgRaw&r=0'');
INSERT INTO `dish` (`dish_id`, `category`, `name`, `description`, `price`, `image_url`)
VALUES (NULL, ''trang_mieng'', ''Bánh cuộn tinh than tre'',
        ''Bột tinh than tre chứa rất nhiều khoáng chất cần thiết cho cơ thể con người như Natri, Sắt, Canxi…nên được
        giới chuyên môn gọi là “dược phẩm vàng” cho sức khỏe.Sử dụng loại bột này không những giúp tăng vẻ đẹp cho món
        ăn mà còn bồi bổ thêm những dưỡng chất thiết yếu cho con người.'', ''46000 '',
        ''https://huyenhashop.com/wp-content/uploads/2018/05/B%E1%BB%99t-tinh-than-tre-l%C3%A0m-b%C3%A1nh-300x300.jpg'');


