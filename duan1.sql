-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 06:11 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

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
-- Cấu trúc bảng cho bảng `chat_lieu_day`
--

CREATE TABLE `chat_lieu_day` (
  `id` int(11) NOT NULL,
  `thongso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chat_lieu_day`
--

INSERT INTO `chat_lieu_day` (`id`, `thongso`) VALUES
(1, 'Dây kim loại'),
(2, 'Dây da');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat_lieu_vo`
--

CREATE TABLE `chat_lieu_vo` (
  `id` int(11) NOT NULL,
  `thongso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chat_lieu_vo`
--

INSERT INTO `chat_lieu_vo` (`id`, `thongso`) VALUES
(1, 'Thép không gỉ mạ vàng PVD'),
(2, 'Vỏ thép không gỉ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chongnuoc`
--

CREATE TABLE `chongnuoc` (
  `id` int(11) NOT NULL,
  `thongso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chongnuoc`
--

INSERT INTO `chongnuoc` (`id`, `thongso`) VALUES
(1, '5'),
(2, '10'),
(3, '15'),
(4, '50');

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
-- Cấu trúc bảng cho bảng `kieumay`
--

CREATE TABLE `kieumay` (
  `id` int(11) NOT NULL,
  `thongso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `kieumay`
--

INSERT INTO `kieumay` (`id`, `thongso`) VALUES
(1, 'Cơ/Automatic'),
(2, 'Pin/Quazt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `iddm` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `gia` int(10) NOT NULL,
  `gia_new` int(10) NOT NULL,
  `mota` text NOT NULL,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `iddm`, `name`, `anh`, `gia`, `gia_new`, `mota`, `soluong`) VALUES
(1, 1, 'Đồng Hồ Casio', 'casio', 1200000, 1000000, 'đẹp vãi', 20),
(2, 2, 'Đồng hồ Orient', 'Orient', 2300000, 500000, 'hay', 12),
(3, 3, 'Đồng hồ Citizen', 'Citizen', 500000, 250000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore, laborum deleniti veniam in, commodi debitis harum corporis dolor voluptates ipsa dicta totam odio tenetur a odit sint assumenda expedita.', 20),
(4, 4, 'Đồng Hồ Seiko', 'Seiko', 3500000, 3000000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolore, laborum deleniti veniam in, commodi debitis harum corporis dolor voluptates ipsa dicta totam odio tenetur a odit sint assumenda expedita.', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatxu`
--

CREATE TABLE `xuatxu` (
  `id` int(11) NOT NULL,
  `thongso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `xuatxu`
--

INSERT INTO `xuatxu` (`id`, `thongso`) VALUES
(1, 'Thụy Sỹ'),
(2, 'Nhật Bản'),
(3, 'Mỹ'),
(4, 'Trung Quốc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chat_lieu_day`
--
ALTER TABLE `chat_lieu_day`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chat_lieu_vo`
--
ALTER TABLE `chat_lieu_vo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chongnuoc`
--
ALTER TABLE `chongnuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kieumay`
--
ALTER TABLE `kieumay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc_sanpham` (`iddm`);

--
-- Chỉ mục cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chat_lieu_day`
--
ALTER TABLE `chat_lieu_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chat_lieu_vo`
--
ALTER TABLE `chat_lieu_vo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chongnuoc`
--
ALTER TABLE `chongnuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `kieumay`
--
ALTER TABLE `kieumay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc_sanpham` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
