-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2024 at 04:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`, `desc`) VALUES
(20, 'Laptop Asus', ''),
(21, 'Laptop Acer', ''),
(22, 'Laptop MSI', ''),
(23, 'Laptop HP', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int NOT NULL,
  `userID` int NOT NULL,
  `productID` int NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentAt` timestamp NOT NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `userID`, `productID`, `content`, `commentAt`) VALUES
(1, 1, 1, 'comment 1 update', '2024-06-05 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int NOT NULL,
  `categoryID` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitPrice` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createAt` date NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `special` int NOT NULL DEFAULT '0',
  `desc` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `unitPrice`, `discount`, `thumbnail`, `createAt`, `views`, `special`, `desc`) VALUES
(1, 22, 'Laptop MSI Cyborg 15 A12VE-240VN', '28000000.00', '20.00', '360ba9d77700bbc0f2eb98af02367b21.jpg.webp', '2024-06-06', 201, 0, 'Thông số kỹ thuật\r\n\r\n• CPU Intel Core i7-12650H 2.3GHz up to 4.7GHz 24MB\r\n\r\n• RAM 8GB (8x1) DDR5 4800MHz (2x SO-DIMM socket, up to 64GB SDRAM)\r\n\r\n• Ổ cứng 512GB NVMe PCIe SSD Gen4x4 (1 slot)\r\n\r\n• Card đồ họa NVIDIA GeForce RTX 4050 6GB Up to 1605MHz Boost Clock 40W Maximum Graphics Power with Dynamic Boost\r\n\r\n• Màn hình 15.6\" FHD (1920x1080), 144Hz, IPS-Level, 45% NTSC, 65% sRGB\r\n\r\n• Cổng giao tiếp 1x Type-C (USB3.2 Gen1 / DP)\r\n\r\n• 2x Type-A USB3.2 Gen1\r\n\r\n• 1x HDMI 2.1 (4K @ 60Hz)\r\n\r\n• 1x RJ45\r\n\r\n• 1x Mic-in/Headphone-out Combo Jack\r\n\r\n• Led-Keyboard Single Backlit Keyboard (Blue)\r\n\r\n• Audio 2x 2W Speaker\r\n\r\n• Đọc thẻ nhớ None\r\n\r\n• Chuẩn LAN Gb LAN\r\n\r\n• Chuẩn WIFI Intel Wi-Fi 6 AX201 (2x2)\r\n\r\n• Bluetooth v5.2\r\n\r\n• Webcam HD type (30fps@720p)\r\n\r\n• Pin 3 Cell 53.5WHr\r\n\r\n• Trọng lượng 1.98 kg\r\n\r\n• Màu sắc Translucent Black\r\n\r\n• Kích thước 359.36 x 250.34 x 21.95~22.9 mm\r\n\r\n• Bảo hành 24 tháng chính hãng\r\n\r\n• Xuất xứ: Trung Quốc\r\n\r\n• Bảo hành chính hãng 24 tháng tại TTBH của MSI\r\n\r\n• Sản phẩm full box (Sản phẩm + sạc + hướng dẫn sử dụng )'),
(33, 21, 'Laptop Acer Nitro 5 Tiger AN515-58-52SP', '24000000.00', '0.00', 'acer-nitro-5.webp', '2024-07-21', 45, 0, 'Laptop Acer Nitro 5 Tiger AN515-58-52SP thống trị thế giới trò chơi với sức mạnh tổng hợp của bộ xử lý Intel Core i5 thế hệ thứ 12 mới nhất và GPU NVIDIA GeForce RTX 30 Series (được tối ưu hóa hoàn toàn cho MGP tối đa). Nâng cấp cấu hình máy tính xách tay của bạn để có tốc độ cao nhất và bộ nhớ lớn với hai khe cắm cho GEN 4 M.2 PCIe và lên đến 32 GB RAM DDR4 3200.'),
(34, 21, 'Laptop Acer Nitro Gaming AN515-58-773Y', '30000000.00', '8.00', 'acer-nitro-an515.webp', '2024-07-21', 0, 1, 'Laptop Acer Nitro 5 Tiger AN515 58 773Y Thông số kỹ thuật: CPU: Intel Core i7-12700H up to 4.7GHz, 25MB Cache Ram: 8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM) Ổ cứng: 512GB PCIe NVMe SED SSD (Còn trống 1 khe SSD M.2 PCIE và 1 khe 2.5\" SATA) Card đồ họa: NVIDIA GeForce RTX 3050Ti 4GB GDDR6 Màn hình: 15.6 inch FHD(1920 x 1080) IPS 144Hz SlimBezel Cổng giao tiếp: 1x USB 3.2 Gen 2 Type-C Ports (supporting: USB 3.2 Gen 2 (up to 10 Gbps); DisplayPort over USB-C; Thunderbolt 4; USB charging 5 V; 3 A; DC-in port 20 V; 65 W) 1x USB 3.2 Gen 2 port featuring power-off USB charging 1x USB 3.2 Gen 2 port 1x USB 3.2 Gen 1 port 1x Ethernet (RJ-45) port 1x HDMI2.1 port with HDCP support 1x 3.5 mm headphone/speaker jack, supporting headsets with built-in microphone 1x DC-in jack for AC adapter Ổ quang: None Audio: DTS X:Ultra Bàn phím: RGB 4 vùng Đọc thẻ nhớ: None Chuẩn LAN: KillerTM Ethernet E2600 Chuẩn WIFI: KillerTM Wi-Fi 6 AX 1650i (2x2) Bluetooth: Bluetooth 5.1 Webcam: 720p HD audio/video recording Hệ điều hành: Windows 11 Home Pin: 4 Cell 57.5WHr Trọng lượng: 2.5 kg Màu sắc: Obsidian Black Kích thước: 360.4 x 271.09 x 25.9 mm Đánh giá chi tiết laptop gaming Acer Nitro 5 Tiger AN515 58 773Y Laptop ngày nay được xem như vật bất ly thân của rất nhiều người từ học sinh - sinh viên, nhân viên văn phòng đến các game thủ. Acer Nitro 5 Tiger AN515 58 773Y là chiếc laptop gaming có cấu hình cực mạnh, thiết kế đầy phong cách mà các tín đồ yêu công nghệ không thể nào bỏ qua.  Ngoại hình đẹp mắt trên laptop gaming Acer Nitro 5 Tiger AN515 58 773Y Laptop gaming Acer Nitro 5 Tiger AN515 có thiết kế trông khá mạnh mẽ và có phần hầm hố hơn những chiếc laptop văn phòng. Lấy màu Obsidian Black làm chủ đạo kết hợp cùng những đường cắt xén vuông vắn thể hiện sự đồ sộ của một chiếc laptop gaming mà ai cũng muốn sở hữu từ dòng Acer Nitro 5.  Bàn phím Nitro 5 Tiger AN515 nổi bật hơn khi được trang bị LED RGB bốn vùng rực rỡ tạo không gian đẹp mắt cho các game thủ mỗi lần tham chiến game đầy máu lửa. Các phím được sắp xếp vô cùng hợp lý với độ nhạy khi nhấn nhanh cho những lần thao tác êm tay và chính xác.  Cấu hình mạnh mẽ không ngại xông pha Laptop Acer Nitro 5 Tiger AN515 sở hữu bộ vi xử lý Intel Core i7 thế hệ thứ 12 mới nhất và GPU NVIDIA GeForce RTX 30 Series mang đến hiệu suất làm việc vượt trội. Người dùng có thể tha hồ thưởng thức các tựa game cấu hình cao, livestream thoải mái, mọi nhu cầu đồ họa cũng được xử lý gọn gàng cho những giây phút thăng hoa đắm chìm khi sử dụng.  Bộ nhớ Ram 8GB cho phép Acer Nitro 5 Tiger AN515 load các tựa game nặng, xử lý đa nhiệm mượt mà cho nhiều thao tác cùng lúc. Việc nâng cấm Ram theo nhu cầu sử dụng cũng dễ dàng hơn với 2 khe cắm cho GEN 4 M.2 PCIe lên đến 32 GB RAM DDR4 3200. Kho lưu trữ khổng lồ với ổ cứng SSD 512GB để người dùng tự do sao lưu các dữ liệu, tải các trò chơi yêu thích trên Acer Nitro 5 Tiger AN515. Hệ thống làm mát vượt trội từ Acer Nitro 5 Tiger AN515 58 773Y Acer Nitro 5 Tiger AN515 có phần khung gầm được tinh chỉnh hợp lý hỗ trợ khả năng làm mát hiệu quả trên máy. Với hệ thống quạt tản nhiệt kép, cửa hút kép trên và dưới cùng cổng bốn ống xả dễ dàng lưu thông lưu lượng gió, dẫn nhiệt ra khỏi các thiết bị bên trong máy dễ dàng hơn. Kèm theo là phần mềm NitroSense để người dùng có thể theo dõi và hiệu chỉnh các thông số về tốc độ quạt, ánh sáng và các tùy chọn khác.  Chất lượng hình ảnh và âm thanh hoàn hảo Màn hình Acer Nitro 5 Tiger AN515 có kích thước 15.6 inch với độ phân giải Full HD. Hình ảnh và video được trình xuất qua màn ảnh vô cùng sắc nét, màu sắc sặc sỡ, độ tưởng phản cao nhờ tấm nền màn hình IPS.  Audio của Acer Nitro 5 Tiger AN515 được trang bị loa kép cho âm thanh phát ra tốt hơn. DTS: X Ultra hỗ trợ chất lượng âm thanh độ nét cao, khi chơi game với khung cảnh không gian 3D các game thủ sẽ được những trải nghiệm chân thật đến từng chi tiết để có những hành động chính xác hạ gục đối thủ.  Nhiều cổng kết nối  Tương tự như những chiếc laptop gaming 25 đến 35 triệu khác, Acer Nitro 5 Tiger AN515 cũng được trang bị nhiều cổng kết nối hỗ trợ nhu cầu sử dụng của người dùng. Bao gồm HDMI 2.1, Intel Thunderbolt 4 và tiêu chuẩn USB 3.2 mới nhất với hỗ trợ Gen 1 và 2. Giờ đây, các game thủ có thể liên kết các thiết bị ngoại vi như chuột máy tính, loa, tai nghe, cùng laptop Acer cho nhu cầu hoạt động của bản thân.'),
(35, 22, 'Laptop MSI Thin GF63 12UCX 841VN ', '15900000.00', '5.00', '1c6ef61e56543eb7816cbbaf67f694d4.png.webp', '2024-07-21', 5, 0, 'MSI Thin GF63 12UCX-841VN là một trong những dòng laptop gaming đáng chú ý, đặc biệt dành cho những người dùng có ngân sách hạn chế nhưng vẫn muốn trải nghiệm sức mạnh của máy tính gaming. Nhà sản xuất MSI đã đặt ra mục tiêu này và thành công với việc trang bị cho GF63 12UCX-841VN một loạt tính năng và hiệu năng ấn tượng. '),
(36, 20, 'Laptop ASUS TUF Gaming A15 FA507NV-LP061W', '28000000.00', '22.00', '7552e362149a3b24355248e8aa40eea3.png.webp', '2024-07-21', 0, 0, 'Laptop Asus TUF Gaming A15 FA507NV-LP061W hiện đang là một chiếc laptop Gaming khá hot mà Asus đem đến với chi phí hợp lý mà Asus đem đến ở thời điểm hiện tại, sở hữu sức mạnh cân mọi tác vụ cùng card đồ họa 4000 series và hình ảnh đắm chìm trong mỗi các tựa game yêu thích cho bạn, Cùng tìm hiểu thêm về chiếc laptop gaming này với An Khang trong bài viết dưới đây nhé!'),
(37, 23, 'Laptop HP VICTUS 15-fa1139TX 8Y6W3PA', '20000000.00', '10.00', 'd10d5b78417bbace1284a0df7b288bf2.png.webp', '2024-07-21', 0, 0, 'Nhắc đến HP Victus, dòng laptop này không chỉ dành cho game thủ mà hiện đang trở thành lựa chọn của nhiều content creator và graphic designer nhờ đáp ứng được hiệu năng cao trong xử lý tác vụ và tính cơ động so với máy tính bàn. Trong đó, HP Victus 15 là một trong số ít các laptop hiện nay có khả năng đáp ứng toàn diện các nhu cầu của một chiếc laptop vừa chơi game vừa học tập, làm việc thường ngày trong một mức giá khá dễ chịu. HP Gaming VICTUS 15 fa1139TX i5 12450H (8Y6W3PA) được trang bị chip H mạnh mẽ cùng card đồ họa rời NVIDIA GeForce RTX và màn hình 144 Hz. Với những điểm nổi trội trên, chiếc laptop không chỉ hứa hẹn cho bạn một trải nghiệm làm việc hiệu quả mà còn đem đến cảm giác thăng hoa không ngừng trong thế giới giải trí đa dạng và ấn tượng.'),
(38, 23, 'Laptop Gaming HP Victus 16-r0129TX 8C5N4PA', '31000000.00', '10.00', '768c284808d2ad67d8cebe7825e2d9c5.png.webp', '2024-07-29', 0, 0, 'Bộ xử lý Intel Core i7-13700H Raptor Lake với tốc độ lên đến 5.0 GHz, hiệu năng mạnh mẽ.\r\nblue-check\r\nCard đồ họa Nvidia GeForce RTX 3050 6GB GDDR6, trải nghiệm chơi game mượt mà và đồ họa tuyệt vời.\r\nblue-check\r\nMàn hình 15.6 inch Full HD với tần số quét 144Hz, hình ảnh sắc nét và mượt mà.'),
(39, 23, 'Laptop HP ProBook 450 G8 51X30PA', '36340000.00', '10.00', 'f4e584b86cd56cad8d1843b1859e75bd.jpg.webp', '2024-07-29', 20, 0, 'Laptop HP ProBook 450 G8 51X30PA (i7-1165G7/ 8GB/ 512GB SSD/ 15.6FHD/ VGA ON/ Win10/ Silver/ LEB_KB/ Vỏ nhôm)'),
(40, 23, 'Laptop HP ENVY x360 13-bf0092TU 76V59PA ', '29950000.00', '20.00', '6b18aceb81150004b07ae378174a3193.png.webp', '2024-07-29', 90, 0, 'Laptop HP ENVY x360 13-bf0092TU 76V59PA (Core i7-1250U | 8GB | 512GB | Iris Xᵉ Graphics | 13.3 inch 2.8K | Windows 11 | Space Blue) - Hàng Chính Hãng'),
(41, 23, 'Laptop HP 240 G9 6L1Y2PA', '29000000.00', '5.00', '45d4d3d96c6d2e0079ae4672329e61d2.jpg.webp', '2024-07-29', 9, 0, 'Laptop HP 240 G9 6L1Y2PA (i5-1235U/RAM 8GB/512GB SSD/ Windows 11) - Hàng chính hãng'),
(42, 23, 'Laptop HP Pavilion 15-eg3094TU 8C5L5PA', '28000000.00', '20.00', 'cb9da62bd53967c08862ceee3d91cc0b.png.webp', '2024-07-29', 45, 0, 'Laptop HP Pavilion 15-eg3094TU 8C5L5PA (Core i5-1335U | 8GB | 512GB | Intel Iris Xe | 15.6 inch FHD | Windows 11) - Hàng Chính Hãng'),
(43, 23, 'Laptop HP 14-DV2032TU', '28000000.00', '10.00', '1c547a75a7def0dfe38961252f546030.jpg.webp', '2024-07-29', 10, 0, 'Laptop HP 14-DV2032TU i7-1255U/8GB/512GB/Win11 6K768PA - Hàng chính hãng'),
(44, 22, 'Laptop MSI Modern 14 B11MOU 851VN Gray', '18000000.00', '5.00', 'bc0d48d4659e0d2bb24b9920e737a018.jpg.webp', '2024-07-29', 10, 0, 'Laptop MSI Modern 14 B11MOU 851VN Gray (i3 1115G4/ 8GB/ 256GB SSD/ W10) Hàng Chính Hãng'),
(45, 22, 'Laptop MSI Katana 15 B13VEK-252VN', '34000000.00', '2.00', '030644cddd4480c59e0a7dd4e3f4fd15.jpg.webp', '2024-07-29', 20, 0, 'Laptop MSI Katana 15 B13VEK-252VN (i7-13620H | 8GB | 512GB | RTX 4050 6GB | 15.6\' FHD 144Hz | Win 11) Hàng chính hãng'),
(46, 22, 'Laptop MSI Cyborg 15 A12VE-240VN', '28900000.00', '12.00', '360btrthrt0bbc0f2eb98af02367b21.jpg.webp', '2024-07-29', 30, 0, 'Laptop MSI Cyborg 15 A12VE-240VN (i7-12650H | 8GB | 512GB | GeForce RTX 4050 6GB | 15.6\' FHD 144Hz | Win 11) Hàng chính hãng'),
(47, 22, 'Máy Tính Xách Tay Laptop MSI GF63 ', '29000000.00', '12.00', '31fa634784e91004778549ee9f7915a9.jpg.webp', '2024-07-29', 45, 0, 'Máy Tính Xách Tay Laptop MSI GF63 Thin 11UC-444VN (i5 11400H/8GB/512GB/15.6\"FHD/NVIDIA GeForce RTX 3050 4GB/Win10_ Đen) - Hàng Chính Hãng'),
(48, 22, 'Laptop MSI Modern 15 B13M-297VN', '25900000.00', '12.00', 'b7ee7e05912e72fbc5aa1e6b2964717d.jpg.webp', '2024-07-29', 57, 0, 'Laptop MSI Modern 15 B13M-297VN i7-1355U | 16GB | 512GB | 15.6\' FHD | Win 11 Hàng chính hãng'),
(49, 21, 'Laptop Acer Aspire 3 A314', '15000000.00', '13.00', '455cd70b893a01f4fa432dc2db2ec80c.jpg.webp', '2024-07-29', 97, 0, 'Laptop Acer Aspire 3 A314 35 P3G9 N6000/4GB/256GB/Win11 - Hàng Chính Hãng'),
(50, 21, 'Lptop Gaming Acer Nitro 5 Tiger', '28000000.00', '9.00', '78f078320fb49ab07441497c4af20d98.jpg.webp', '2024-07-29', 79, 0, 'Laptop Gaming Acer Nitro 5 Tiger AN515-58-52SP  i5-12500H/RAM 8GB/512GB SSD/3050 4GB Hàng Chính Hãng'),
(51, 20, 'Laptop Asus ExpertBook B1500', '23000000.00', '12.00', 'cfff91976895e204dcce199ba67fbcec.png.webp', '2024-07-29', 59, 0, 'Laptop Asus ExpertBook B1500 (Chip Intel Core i5-1235U | RAM 8GB | SSD 512GB NVMe | 15.6\' Full HD | Bảo mật vân tay | Bảo mật TPM 2.0 | Độ bền chuẩn quân đội US) - Hàng Chính Hãng'),
(52, 21, 'Laptop Gaming Acer Nitro 5 Tiger AN515-58-52SP', '22000000.00', '10.00', '94c2fb2bc9dc7aa9e4504b21bd4ff0fa.png.webp', '2024-07-29', 12, 0, 'Laptop Gaming Acer Nitro 5 Tiger AN515-58-52SP NH.QFHSV.001 (Core i5-12500H | RTX 3050 4GB| 8GB | 512GB | 15.6 inch FHD | Win 11 | Đen) - HÀNG CHÍNH HÃNG'),
(53, 21, 'Laptop Acer Nitro Gaming AN515-58-769J', '33000000.00', '8.00', '98604bb4e11ac677bece857080aa39de.jpeg.webp', '2024-07-29', 89, 0, 'Laptop Acer Nitro Gaming AN515-58-769J i7 12700H/8GB/512GB/15.6\"FHD/GeForce RTX 3050 4GB/Win11 - Hàng Chính Hãng'),
(54, 20, 'Laptop ASUS ExpertBook B1 B1402 - B1402CV', '19000000.00', '8.00', '4734fddbc7ddvdvdde2a8abf079.png', '2024-07-29', 12, 0, 'Laptop ASUS ExpertBook B1 B1402 - B1402CV (Intel Core i7-1355U | RAM 16GB | 512GB SSD | 14 inch Full HD | Win 11 bản quyền) - Hàng Chính Hãng'),
(55, 20, 'Laptop ASUS TUF Gaming F15 FX507VV-LP157W', '35000000.00', '10.00', '5cb36cbd4e53292d419e88ca31c57601.png.webp', '2024-07-29', 6454, 0, 'Laptop ASUS TUF Gaming F15 FX507VV-LP157W (Intel Core i7-13620H | 16GB | 512GB | RTX 4060 | 15.6 inch FHD | Win 11 | Xám) - Hàng Chính Hãng - Bảo Hành 24 Tháng'),
(56, 20, 'Laptop ASUS TUF Gaming A15 FA507NV-LP061W', '31000000.00', '9.00', '7552e3bgbfaa40eea3.png.webp', '2024-07-29', 678, 0, 'Laptop ASUS TUF Gaming A15 FA507NV-LP061W (Ryzen 7-7735HS | 16GB | 1TB | RTX 4060 8GB | 15.6 inch FHD | Win 11 | Xám) - Hàng Chính Hãng - Bảo Hành 24 Tháng');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fullname`, `email`, `password`, `avatar`, `status`, `role`) VALUES
(1, 'Mai the ', 'thenam2kx@gmail.com', '12345', 'file_type_vscode_icon_130084.webp', 0, '0'),
(31, 'Nam', 'svfvdfbdfvf@gmail.com', 'Viet Nam', 'logo@3x.png', 1, '0'),
(32, 'thenam2kx', 'ejtyrer@gmail.com', 'jrhtrhyr', NULL, 1, '0'),
(38, 'thenam2kx', 'test@example.us', 'ersvev', NULL, 1, '0'),
(40, 'thenam2020', 'testrethrvfds@example.us', 'vergrwg', NULL, 1, '0'),
(42, 'thenam2020', 'teste434@exemplo.us', 'svdvsvd', NULL, 1, '0'),
(45, 'Thenam2kx', 'vwr@gmail.com', 'avsd', NULL, 1, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
