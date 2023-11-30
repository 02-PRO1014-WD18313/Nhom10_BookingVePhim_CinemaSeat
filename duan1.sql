-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2023 lúc 04:51 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `album`
--

CREATE TABLE `album` (
  `id` int(10) NOT NULL,
  `name_sp` varchar(255) NOT NULL,
  `img1` int(11) NOT NULL,
  `img2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `date` date NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_user`, `id_pro`, `noidung`, `date`, `star`) VALUES
(1, 2, 1, 'hay', '2023-11-09', 4),
(2, 2, 1, 'ddepj', '2023-11-16', 5),
(3, 2, 1, 'ajhsgd', '2023-11-22', 5),
(8, 2, 1, 'hay qaus', '2023-11-23', 4),
(19, 2, 1, 'tuyet', '2023-11-24', 3),
(20, 2, 1, 'tuyet', '2023-11-24', 3),
(21, 2, 1, '7 nguoi', '2023-11-24', 5),
(22, 2, 2, 'san pham 2', '2023-11-24', 5),
(23, 2, 2, 'tiep sp 2', '2023-11-24', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`id`, `id_dh`, `id_sp`, `soluong`, `gia_ban`, `img`, `name`, `thanhtien`) VALUES
(32, 57, 2, 1, 500000, 'dongho2.jpeg', 'Đồng hồ Orient', 530000),
(33, 58, 15, 1, 750000, '1700576346_Citizen BM7256-50E.jpeg', 'Citizen BM7256-50E', 780000),
(34, 59, 4, 1, 3000000, 'dongho4.jpeg', 'Đồng Hồ Seiko', 3030000),
(35, 60, 14, 1, 500000, '1700576274_Citizen NH8363-14H.jpeg', 'Citizen NH8363-14H', 530000),
(36, 61, 4, 1, 3000000, 'dongho4.jpeg', 'Đồng Hồ Seiko', 3030000),
(37, 62, 2, 1, 500000, 'dongho2.jpeg', 'Đồng hồ Orient', 530000),
(38, 63, 4, 2, 3000000, 'dongho4.jpeg', 'Đồng Hồ Seiko', 6030000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `img`) VALUES
(1, 'Casio', '1700298355_casio.jpeg'),
(2, 'Orient', '1700298369_Orient.jpeg'),
(3, 'Citizen', '1700298381_Citizen.jpeg'),
(4, 'Seiko', '1700298391_Seiko.jpeg'),
(5, 'Tissot', '1700299147_Tissot.jpeg'),
(6, 'Longines', '1700299572_Longines.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nguoi_nhan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `ghi_chu` varchar(255) DEFAULT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `id_user`, `nguoi_nhan`, `email`, `tel`, `address`, `ghi_chu`, `trangthai`) VALUES
(57, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Hà Tĩnh', NULL, 0),
(58, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0987654321', 'Hà Nội', NULL, 0),
(59, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Trịnh Văn Bô', NULL, 0),
(60, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Trịnh Văn Bô', NULL, 0),
(61, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Trịnh Văn Bô', NULL, 0),
(62, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Trịnh Văn Bô', NULL, 0),
(63, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Trịnh Văn Bô', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `gia_new` int(11) NOT NULL,
  `mota` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `xuatxu` varchar(100) NOT NULL,
  `kieumay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `iddm`, `name`, `img`, `img2`, `img3`, `gia`, `gia_new`, `mota`, `soluong`, `xuatxu`, `kieumay`) VALUES
(1, 1, 'Đồng Hồ Casio', 'dongho1.jpeg', NULL, NULL, 1200000, 890000, 'sản phẩm oke\"', 20, 'Thụy Sỹ', 'Cơ/Automatic'),
(2, 2, 'Đồng hồ Orient', 'dongho2.jpeg', NULL, NULL, 2300000, 500000, 'hay', 12, '', ''),
(3, 3, 'Đồng hồ Citizen', 'dongho3.jpeg', NULL, NULL, 500, 250, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore, laborum deleniti veniam in, commodi debitis harum corporis dolor voluptates ipsa dicta totam odio tenetur a odit sint assumenda expedita.\"', 20, 'Thụy Sỹ', 'Cơ/Automatic'),
(4, 4, 'Đồng Hồ Seiko', 'dongho4.jpeg', NULL, NULL, 3500000, 3000000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore, laborum deleniti veniam in, commodi debitis harum corporis dolor voluptates ipsa dicta totam odio tenetur a odit sint assumenda expedita.', 15, '1323', '123123'),
(13, 5, 'Tissot T006.407.16.033.00', '1700576058_Tissot T006.407.16.033.00.jpeg', NULL, NULL, 1200000, 890000, 'đẹp', 10, 'Hàn Quốc', 'Kiểu mạ vàng ấy'),
(14, 3, 'Citizen NH8363-14H', '1700576274_Citizen NH8363-14H.jpeg', NULL, NULL, 750000, 500000, 'hay', 5, 'Việt Nam', 'Kiểu mạ vàng ấy'),
(15, 3, 'Citizen BM7256-50E', '1700576346_Citizen BM7256-50E.jpeg', NULL, NULL, 950000, 750000, 'đẹp', 12, 'Nhật Bản', 'Mạ Kim Cương'),
(16, 6, 'Longines L2.321.4.87.2', '1700576415_Longines L2.321.4.87.2.jpeg', NULL, NULL, 2200000, 1500000, 'Ngon', 8, 'Trung Quốc', 'Mạ Bạc'),
(17, 6, 'Longines L3.742.4.96.6', '1700576490_Longines L3.742.4.96.6.jpeg', NULL, NULL, 550000, 490000, 'Cứng', 15, 'Ấn Độ', 'Bọc Thép'),
(18, 1, 'Orient RA-AR0003L10B', '1700576568_Orient RA-AR0003L10B.jpeg', NULL, NULL, 650000, 450000, 'Hợp Phết', 20, 'Iran', 'Mạ Non'),
(19, 2, 'Orient FAG02005W0', '1700576653_Orient FAG02005W0.jpeg', NULL, NULL, 1500000, 1000000, 'Hơi Mỏng', 10, 'Irac', 'Bọc Giấy'),
(20, 2, 'Orient FAG02005W1', '1700576720_Orient FAG02005W1.jpeg', NULL, NULL, 630000, 540000, 'Chất Lượng Kém', 16, 'Hàn Quốc', 'Bọc Ni Lông'),
(21, 2, 'Orient SK RA-AA0B02R19B', '1700576815_Orient SK RA-AA0B02R19B.jpeg', NULL, NULL, 3600000, 2500000, 'Trơn Quá', 15, 'Việt Nam', 'Pha Nhớt'),
(22, 4, 'Seiko 42mm SUR211P1', '1700576974_Seiko 42mm SUR211P1.jpeg', NULL, NULL, 790000, 520000, 'Dễ Rách', 18, 'Ý', 'Giấy Ăn '),
(23, 4, 'Seiko 42.5mm SRPD76K1', '1700577362_Seiko 42.5mm SRPD76K1.jpeg', NULL, NULL, 1200000, 950000, 'Nói ít thôi', 5, 'Nhật Bản', 'Khó Nói'),
(24, 4, 'Seiko 42mm SNZG13J1', '1700577470_Seiko 42mm SNZG13J1.jpeg', NULL, NULL, 520000, 350000, 'Trơn', 20, 'Trung Quốc', 'Dầu mỡ'),
(25, 4, 'Seiko 38mm SNKD99K1-5', '1700577580_Seiko 38mm SNKD99K1-5.jpeg', NULL, NULL, 1450000, 1200000, 'Cháy năng', 13, 'Ấn Độ', 'Da đen'),
(26, 1, 'Casio 42mm MTP-1375L', '1700577643_Casio 42mm MTP-1375L.jpeg', NULL, NULL, 1250000, 950000, 'Ngon quá ko đến lượt', 12, 'Hàn Quốc', 'Cơ/Automatic'),
(27, 1, 'Casio G-Shock GA-2100', '1700577701_Casio G-Shock GA-2100.jpeg', NULL, NULL, 950000, 630000, 'Ngạc Nhiên', 7, 'Nga', 'Ôi Dồi Ôi'),
(28, 1, 'Casio 43.5mm MTP-1374L', '1700577758_Casio 43.5mm MTP-1374L.jpeg', NULL, NULL, 850000, 620000, 'Siêu bền', 9, 'Na Uy', 'Cứng Cáp'),
(29, 1, 'Casio AE-1200WHD', '1700577843_Casio AE-1200WHD.jpeg', NULL, NULL, 690000, 550000, 'Đẹp Xuất Sắc', 10, 'Thụy Sỹ', 'Very Good');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `checkname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `tel`, `address`, `role`, `checkname`) VALUES
(1, 'daiadmin', 'Dai123456', 'admin@gmail.com.vn', NULL, NULL, 1, 0),
(2, 'dai123123', 'Qa123123', 'dai@gmail.com', NULL, NULL, 0, 0),
(4, 'datgin2k4', '11052004Dat', 'dnguyentien145@gmail.com', '0964305701', 'Chương mỹ', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tk_bl` (`id_user`),
  ADD KEY `fk_pro_bl` (`id_pro`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_cart` (`idsp`),
  ADD KEY `fk_user_cart` (`iduser`);

--
-- Chỉ mục cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctdh_dh` (`id_dh`),
  ADD KEY `fk_ctdh_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_tk` (`id_user`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc_sanpham` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_sp_cart` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_user_cart` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_dh_tk` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc_sanpham` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
