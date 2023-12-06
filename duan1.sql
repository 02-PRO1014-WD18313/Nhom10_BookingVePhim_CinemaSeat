-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- MÃ¡y chá»§: 127.0.0.1
-- Thá»i gian Ä‘Ã£ táº¡o: Th12 06, 2023 lÃºc 03:15 PM
-- PhiÃªn báº£n mÃ¡y phá»¥c vá»¥: 10.4.28-MariaDB
-- PhiÃªn báº£n PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- CÆ¡ sá»Ÿ dá»¯ liá»‡u: `duan1`
--

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `binhluan`
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
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `binhluan`
--

INSERT INTO `binhluan` (`id`, `id_user`, `id_pro`, `noidung`, `date`, `star`) VALUES
(59, 4, 17, 'ráº¥t xinh', '2023-12-03', 5),
(61, 4, 15, 'phÃ¹ há»£p vá»›i giÃ¡ tiá»n', '2023-12-04', 5),
(62, 10, 27, 'sÃ¡n pháº©m Ä‘Ãºng vá»›i mÃ´ táº£', '2023-12-06', 3),
(63, 6, 29, 'sáº£n pháº©m Ä‘Ãºng mÃ´ táº£', '2023-12-06', 5),
(64, 6, 38, 'sáº£n pháº©m tá»‘t, sáº½ giÃ³i thiá»‡u thÃªm', '2023-12-06', 5),
(65, 6, 39, 'Ä‘áº¹p', '2023-12-06', 5);

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`id`, `id_dh`, `id_sp`, `soluong`, `gia_ban`, `img`, `name`) VALUES
(22, 48, 29, 1, 1090000, '1700577843_Casio AE-1200WHD.jpeg', 'Casio AE-1200WHD'),
(23, 48, 17, 2, 7560000, '1700576490_Longines L3.742.4.96.6.jpeg', 'Longines L3.742.4.96.6'),
(26, 51, 15, 1, 3700000, '1700576346_Citizen BM7256-50E.jpeg', 'Citizen BM7256-50E'),
(27, 52, 29, 1, 1090000, '1700577843_Casio AE-1200WHD.jpeg', 'Casio AE-1200WHD'),
(28, 53, 15, 1, 3700000, '1700576346_Citizen BM7256-50E.jpeg', 'Citizen BM7256-50E'),
(29, 54, 27, 1, 2650000, '1700577701_Casio G-Shock GA-2100.jpeg', 'Casio G-Shock GA-2100'),
(30, 55, 26, 1, 1250000, '1700577643_Casio 42mm MTP-1375L.jpeg', 'Casio 42mm MTP-1375L'),
(31, 56, 22, 1, 4120000, '1700576974_Seiko 42mm SUR211P1.jpeg', 'Seiko 42mm SUR211P1'),
(32, 57, 19, 1, 5090000, '1700576653_Orient FAG02005W0.jpeg', 'Orient FAG02005W0'),
(33, 58, 22, 1, 4120000, '1700576974_Seiko 42mm SUR211P1.jpeg', 'Seiko 42mm SUR211P1'),
(34, 59, 27, 1, 2650000, '1700577701_Casio G-Shock GA-2100.jpeg', 'Casio G-Shock GA-2100'),
(35, 60, 29, 1, 1090000, '1700577843_Casio AE-1200WHD.jpeg', 'Casio AE-1200WHD'),
(36, 60, 38, 1, 10890000, '1701335850_T099.429.11.038.00-1-1657079694916.jpeg', 'Tissot - Nam T099.429.11.038.00 Size'),
(37, 60, 39, 1, 9100000, '1701335970_T086.407.11.061.00-1-1657164340779.jpeg', 'Tissot - Nam T086.407.11.061.00');

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `danhmuc`
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
-- Cáº¥u trÃºc báº£ng cho báº£ng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nguoi_nhan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `ghi_chu` varchar(255) DEFAULT NULL,
  `thanhtien` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `donhang`
--

INSERT INTO `donhang` (`id`, `id_user`, `nguoi_nhan`, `email`, `tel`, `address`, `date`, `ghi_chu`, `thanhtien`, `trangthai`) VALUES
(48, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0987654321', 'HÃ  Ná»™i', '2023-11-03', '', 16240000, 3),
(51, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Trá»‹nh VÄƒn BÃ´', '2023-11-03', '', 3730000, 3),
(52, 6, 'khanh123', ' datntph36689@fpt.edu.vn', '0964305701', 'HÃ  TÄ©nh', '2023-10-04', '', 1120000, 3),
(53, 4, 'datgin2004', ' dnguyentien145@gmail.com', '0964305701', 'ChÆ°Æ¡ng Má»¹', '2023-10-04', '', 3730000, 3),
(54, 4, 'datgin2004', ' dnguyentien145@gmail.com', '0964305701', 'Trá»‹nh VÄƒn BÃ´', '2023-12-04', '', 2680000, 3),
(55, 6, 'khanh123', ' datntph36689@fpt.edu.vn', '0999999999', 'HÆ¯NG YÃŠN', '2023-12-05', NULL, 1280000, 3),
(56, 8, 'khanhtdi', ' KHANHPRO199X@GMAIL.COM', '0989999999', 'Cáº§u Giáº¥y, HÃ  Ná»™i', '2023-12-05', NULL, 4150000, 3),
(57, 9, 'test123', ' trankhanhhy1997x@gmail.com', '0999999999', 'Cáº§u Giáº¥y, HÃ  Ná»™i', '2023-12-05', NULL, 5120000, 3),
(58, 10, 'demo001', ' demo001@gmail.com', '0999999999', 'Cáº§u Giáº¥y, HÃ  Ná»™i', '2023-12-06', 'khÃ¡ch hÃ ng khÃ´ng thÃ­ch sp', 4150000, 4),
(59, 10, 'demo002', ' demo001@gmail.com', '0989999999', 'Cáº§u Giáº¥y, HÃ  Ná»™i', '2023-12-06', 'Shipper Ä‘ang Ä‘áº¿n Ä‘Æ°á»ng giao sáº£n pháº©m', 2680000, 3),
(60, 6, 'khanh6/12', ' datntph36689@fpt.edu.vn', '0989999777', 'Cáº§u Giáº¥y, HÃ  Ná»™i', '2023-12-06', 'Ä‘Ã£ giao thÃ nh cÃ´ng', 21080000, 3);

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `sanpham`
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
  `kieumay` varchar(100) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `sanpham`
--

INSERT INTO `sanpham` (`id`, `iddm`, `name`, `img`, `img2`, `img3`, `gia`, `gia_new`, `mota`, `soluong`, `xuatxu`, `kieumay`, `luotxem`, `trangthai`) VALUES
(1, 2, 'Orient FAG02003W0 Size 41mm', 'dongho1.jpeg', '1701335200_dong-ho-orient--fag02003w0_2-ims.jpeg', '1701335200_dong-ho-orient--fag02003w0_4-ims.jpeg', 4500000, 3890000, 'Orient FAG02003W0 khÃ´ng chá»‰ lÃ  máº«u Ä‘á»“ng há»“ thuá»™c kiá»ƒu Semi Skeleton (lá»™ cÆ¡) Ä‘á»™c Ä‘Ã¡o mÃ  cÃ²n lÃ  sá»± káº¿t há»£p hoÃ n háº£o giá»¯a cá»— mÃ¡y bá»n bá»‰ cá»§a Nháº­t Báº£n vÃ  Ã¢m hÆ°á»Ÿng truyá»n thá»‘ng Ä‘áº­m phong cÃ¡ch Thá»¥y SÄ©. Chi tiáº¿t má»™t cá»­a sá»• \"Ä‘á»™c nhÃ£n\" (Open Heart) á»Ÿ vá»‹ trÃ­ 7h - 10h táº¡o nÃªn váº» khÃ¡c biá»‡t cho sáº£n pháº©m khi giÃºp ngÆ°á»i dÃ¹ng cÃ³ tráº£i nghiá»‡m thÃº vá»‹, khÃ´ng cáº£m tháº¥y rá»‘i máº¯t má»—i láº§n nhÃ¬n ngáº¯m chuyá»ƒn Ä‘á»™ng cá»§a bá»™ mÃ¡y F6T22.', 20, 'Nháº­t Báº£n', 'Pin/Quazt', 100, 0),
(2, 2, 'Orient - Nam FAG00003W043', 'dongho2.jpeg', '1701335333_FAG00003W0-2.jpeg', '1701335333_FAG00003W0-3.jpeg', 8050000, 6500000, 'Orient lÃ  má»™t trong nhá»¯ng thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ ná»•i tiáº¿ng trÃªn tháº¿ giá»›i. Äá»ƒ Ä‘Ã¡p á»©ng nhu cáº§u vá» Ä‘a dáº¡ng khÃ¡ch hÃ ng, Orient luÃ´n sáºµn hÃ ng nÃ¢ng cao, cáº£i tiáº¿n vÃ  cho ra Ä‘á»i nhá»¯ng sáº£n pháº©m Ä‘á»™c láº¡. Má»™t trong cÃ¡c máº«u Ä‘á»“ng há»“ nam Orient ráº¥t Ä‘Æ°á»£c ngÆ°á»i tiÃªu dÃ¹ng Æ°a chuá»™ng Ä‘Ã³ lÃ  máº«u Orient FAG00003W0. Sáº£n pháº©m cÅ©ng lÃ  má»™t trong nhá»¯ng bá»™ sÆ°u táº­p Ä‘áº¯t giÃ¡ cá»§a nhÃ  Orient. Náº¿u lÃ  má»™t tÃ­n Ä‘á»“ cá»§a Ä‘á»“ng há»“, báº¡n khÃ´ng thá»ƒ bá» qua cÆ¡ há»™i sá»Ÿ há»¯u dÃ²ng Orient FAG00003W0 nÃ y.', 12, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 98, 0),
(3, 2, 'Orient - RA-AR0004S10B', 'dongho3.jpeg', '1701335463_dong-ho-orient-ra-ar0004s10b_2-ims.jpeg', '1701335463_dong-ho-orient-ra-ar0004s10b_3-ims.jpeg', 8970000, 6700000, 'Vá»›i cÃ¡ch â€œnhÃ¡ hÃ ngâ€ cáº¥u táº¡o má»™t pháº§n bá»™ mÃ¡y bÃªn trong, Ä‘á»“ng há»“ Orient RA-AR0004S10B Open Heart Ä‘Ã£ khÆ¡i dáº­y trÃ­ tÃ² mÃ² cá»§a báº¥t cá»© ai tá»«ng chiÃªm ngÆ°á»¡ng. Sáº£n pháº©m káº¿t há»£p hÃ i hÃ²a giá»¯a phong cÃ¡ch hiá»‡n Ä‘áº¡i vÃ  cá»• Ä‘iá»ƒn giÃºp tÃ´n lÃªn váº» sang trá»ng vÃ  thá»i thÆ°á»£ng cho nam giá»›i', 20, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 17, 0),
(4, 2, 'Orient - FAG03002B0 38.5', 'dongho4.jpeg', '1701335643_dong-ho-orient-fag03002b0_2-ims.jpeg', '1701335643_dong-ho-orient-fag03002b0_4-ims.jpeg', 7050000, 5700000, 'Äá»“ng há»“ Orient FAG03002B0 Ä‘Æ°á»£c xem lÃ  má»™t siÃªu pháº©m Ä‘á»™c Ä‘Ã¡o, káº¿t há»£p giá»¯a lá»‘i thiáº¿t káº¿ cá»• Ä‘iá»ƒn nhÆ°ng váº«n mang Ä‘áº­m phong cÃ¡ch thá»i thÆ°á»£ng cá»§a thÆ°Æ¡ng hiá»‡u Ä‘áº¿n tá»« Nháº­t Báº£n. DÆ°á»›i sá»± trau chuá»‘t vÃ  tá»‰ má»‰ cá»§a cÃ¡c Designer nhÃ  Orient, model ná»n máº·t sá»‘ mÃ u Ä‘en phá»‘i vá»›i dÃ¢y kim loáº¡i mÃ u báº¡c nÃ y Ä‘Ã£ táº¡o Ä‘Æ°á»£c sá»©c hÃºt riÃªng biá»‡t khiáº¿n nhiá»u ngÆ°á»i mong muá»‘n sá»Ÿ há»¯u. ', 15, 'Nháº­t Báº£n', 'NÄƒng lÆ°á»£ng máº·t trá»i', 43, 0),
(13, 5, 'Tissot T006.407.16.033.00', '1700576058_Tissot T006.407.16.033.00.jpeg', '1701335063_dong-ho-tissot-t006.407.16.033.00_2-ims.jpeg', '1701335063_dong-ho-tissot-t006.407.16.033.00_3-ims.jpeg', 14500000, 11290000, 'Tissot lÃ  thÆ°Æ¡ng hiá»‡u cá»§a Thá»¥y Sá»¹ Ä‘Æ°á»£c thÃ nh láº­p vÃ o nÄƒm 1853. ÄÆ°á»£c thÃ nh láº­p bá»Ÿi Charles-FÃ©licien Tissot vÃ  ngÆ°á»i con trai Charles-Ã‰mile Tissot. CÃ¡c dÃ²ng sáº£n pháº©m tiÃªu biá»ƒu: â€œTissot Prx, Tissot Le Locle, Tissot Luxury, Tissot Chemin Des Tourelles, Tissot 18K Gold, Tissot T-Waveâ€¦â€', 10, 'Thá»¥y Sá»¹', 'CÆ¡/Automatic', 35, 0),
(14, 3, 'Citizen NH8363-14H', '1700576274_Citizen NH8363-14H.jpeg', '1701333399_dong-ho-citizen-nh8363-14h_2-ims.jpeg', '1701333399_dong-ho-citizen-nh8363-14h_3-ims.jpeg', 5500000, 4230000, 'Äá»“ng há»“ Citizen lÃ  thÆ°Æ¡ng hiá»‡u cá»§a Nháº­t Báº£n ra Ä‘á»i nÄƒm 1918 bá»Ÿi viá»‡n nghiÃªn cá»©u Ä‘á»“ng há»“ Shokosha. Citizen tiáº¿ng nháº­t cÃ³ Ã½ nghÄ©a Ä‘Ã³ lÃ  â€œngÆ°á»i dÃ¢nâ€ hÃ m Ã½ lÃ  báº¥t ká»³ ai cÅ©ng cÃ³ thá»ƒ sá»Ÿ há»¯u Ä‘Æ°á»£c Ä‘á»“ng há»“ cá»§a thÆ°Æ¡ng hiá»‡u nÃ y\"', 5, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 34, 0),
(15, 3, 'Citizen BM7256-50E', '1700576346_Citizen BM7256-50E.jpeg', '1701333294_BM7256-50E-4.jpeg', '1701333294_BM7256-50E-7.jpeg', 4590000, 3700000, 'Äá»“ng há»“ Citizen lÃ  thÆ°Æ¡ng hiá»‡u cá»§a Nháº­t Báº£n ra Ä‘á»i nÄƒm 1918 bá»Ÿi viá»‡n nghiÃªn cá»©u Ä‘á»“ng há»“ Shokosha. Citizen tiáº¿ng nháº­t cÃ³ Ã½ nghÄ©a Ä‘Ã³ lÃ  â€œngÆ°á»i dÃ¢nâ€ hÃ m Ã½ lÃ  báº¥t ká»³ ai cÅ©ng cÃ³ thá»ƒ sá»Ÿ há»¯u Ä‘Æ°á»£c Ä‘á»“ng há»“ cá»§a thÆ°Æ¡ng hiá»‡u nÃ y', 20, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 50, 0),
(16, 6, 'Longines L2.321.4.87.2', '1700576415_Longines L2.321.4.87.2.jpeg', '1701333589_L2.321.4.87.2-3-1664953295253.jpeg', '1701333589_L2.321.4.87.2-1-1664953287371.jpeg', 6500000, 5900000, '- Longines lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Thá»¥y Sá»¹ ra Ä‘á»i vÃ o nÄƒm 1832. ÄÆ°á»£c sÃ¡ng láº­p bá»Ÿi Auguste Agassiz. CÃ³ nhá»¯ng dÃ²ng sáº£n pháº©m tiÃªu biá»ƒu: â€œElegance, Watchmaking Tradition, Avigation, Diving, Performanceâ€.', 8, 'Thá»¥y Sá»¹', 'CÆ¡/Automatic', 63, 0),
(17, 6, 'Longines L3.742.4.96.6', '1700576490_Longines L3.742.4.96.6.jpeg', '1701333711_L3.742.4.96.6-3-1649732654576.jpeg', '1701333711_L3.742.4.96.6-2-1649732648365.jpeg', 8900000, 7560000, '- Longines lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Thá»¥y Sá»¹ ra Ä‘á»i vÃ o nÄƒm 1832. ÄÆ°á»£c sÃ¡ng láº­p bá»Ÿi Auguste Agassiz. CÃ³ nhá»¯ng dÃ²ng sáº£n pháº©m tiÃªu biá»ƒu: â€œElegance, Watchmaking Tradition, Avigation, Diving, Performanceâ€.\"\"\"', 15, 'Thá»¥y Sá»¹', 'CÆ¡/Automatic', 54, 0),
(18, 2, 'Orient RA-AR0003L10B', '1700576568_Orient RA-AR0003L10B.jpeg', '1701334240_RA-AR0003L10B-3-1678181761610.jpeg', '1701334240_RA-AR0003L10B-5-1678181767893.jpeg', 8900000, 7240000, 'ÄÃºng vá»›i tÃªn gá»i Orient RA-AR0003L10B Open Heart, chiáº¿c Ä‘á»“ng há»“ nam nÃ y Ä‘Æ°á»£c hÃ£ng lá»“ng ghÃ©p chi tiáº¿t â€œhá»Ÿ timâ€ vÃ´ cÃ¹ng tinh táº¿ á»Ÿ cáº£ hai máº·t. á»ž phÃ­a trÆ°á»›c, pháº§n lá»™ mÃ¡y Ä‘áº·t táº¡i vá»‹ trÃ­ 9h thu hÃºt vÃ  cÃ³ viá»n báº±ng kim loáº¡i mÃ u báº¡c bao bá»c xung quanh. PhÃ­a sau sáº£n pháº©m cÅ©ng cÃ³ má»™t â€œcá»­a sá»•â€ lá»›n giÃºp ngÆ°á»i dÃ¹ng chiÃªm ngÆ°á»¡ng Ä‘Æ°á»£c bá»™ mÃ¡y cÆ¡ há»c.\"', 20, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 72, 0),
(19, 2, 'Orient FAG02005W0', '1700576653_Orient FAG02005W0.jpeg', '1701333807_dong-ho-orient-fag02005w0_2-ims.jpeg', '1701333807_dong-ho-orient-fag02005w0_3-ims.jpeg', 6790000, 5090000, 'Nhá»¯ng máº«u Ä‘á»“ng há»“ cÆ¡ Open Heart luÃ´n chiáº¿m Ä‘Æ°á»£c cáº£m tÃ¬nh cá»§a ngÆ°á»i sá»­ dá»¥ng. KhÃ´ng chá»‰ cÃ³ tÃ¡c dá»¥ng táº¡o Ä‘iá»ƒm nháº¥n mÃ  Ä‘á»“ng há»“ cÆ¡ lá»™ mÃ¡y cÃ²n giÃºp ngÆ°á»i dÃ¹ng quan sÃ¡t Ä‘Æ°á»£c nhá»¯ng chuyá»ƒn Ä‘á»™ng nhá» nháº¥t cá»§a mÃ¡y. DÃ²ng Ä‘á»“ng há»“ Orient FAG02005W0 sá»Ÿ há»¯u Ä‘áº·c trÆ°ng nÃ y káº¿t há»£p vá»›i váº» ngoÃ i hoÃ n háº£o. SiÃªu pháº©m khiáº¿n báº¥t cá»© tÃ­n Ä‘á»“ thá»i trang nÃ o cÅ©ng pháº£i mÃª Ä‘áº¯m.', 10, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 94, 0),
(20, 2, 'Orient FAG02005W1', '1700576720_Orient FAG02005W1.jpeg', '', '1701334124_Orient-RA-KA0003S00B-3.jpeg', 5600000, 4890000, 'Orient lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Nháº­t Báº£n thÃ nh láº­p nÄƒm 1950. HÃ£ng Ä‘Æ°á»£c sÃ¡ng láº­p bá»Ÿi Shogoro Yoshida. CÃ¡c dÃ²ng sáº£n pháº©m lÃ m nÃªn tÃªn tuá»•i cá»§a Orient Ä‘Ã³ lÃ  â€œOrient Star, Orient Sun and Moon, Orient SK,...â€', 16, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 240, 0),
(21, 2, 'Orient SK RA-AA0B02R19B', '1700576815_Orient SK RA-AA0B02R19B.jpeg', '1701334389_RA-AA0B02R19B-3.jpeg', '1701334389_RA-AA0B02R19B-2.jpeg', 7890000, 5800000, 'Cho Ä‘áº¿n hiá»‡n táº¡i chiáº¿c Ä‘á»“ng há»“ Nháº­t Báº£n Orient SK RA-AA0B02R19B váº«n Ä‘ang Ä‘Æ°á»£c nhiá»u ngÆ°á»i sÄƒn lÃ¹ng bá»Ÿi váº» Ä‘áº¹p vÆ°á»£t thá»i gian cÅ©ng nhÆ° nhá»¯ng bÃ­ áº©n Ä‘áº±ng sau cá»— mÃ¡y thá»i gian nÃ y. Sáº£n pháº©m khÃ´ng chá»‰ cÃ³ thiáº¿t káº¿ máº·t sá»‘ lá»›n Ä‘áº§y nam tÃ­nh vÃ  Ä‘áº¹p máº¯t mÃ  sá»Ÿ há»¯u cÃ¡c tÃ­nh nÄƒng ráº¥t Æ°u viá»‡t.', 15, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 162, 0),
(22, 4, 'Seiko 42mm SUR211P1', '1700576974_Seiko 42mm SUR211P1.jpeg', '1701334835_SUR211P1-5.jpeg', '1701334835_SUR211P1-6.jpeg', 4890000, 4120000, 'Seiko lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Nháº­t Ä‘Æ°á»£c sÃ¡ng láº­p nÄƒm 1881. NgÆ°á»i sÃ¡ng láº­p nÃªn thÆ°Æ¡ng hiá»‡u Ä‘Ã³ lÃ  Seiko Kintaro Hattori. Nhá»¯ng bá»™ sÆ°u táº­p tiÃªu biá»ƒu khi nháº¯c Ä‘áº¿n Ä‘á»“ng há»“ Seiko Ä‘Ã³ lÃ  â€œSeiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...â€', 18, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 0, 0),
(23, 4, 'Seiko 42.5mm SRPD76K1', '1700577362_Seiko 42.5mm SRPD76K1.jpeg', '1701334656_dong-ho-seiko-srpd76k1_3-ims.jpeg', '1701334656_dong-ho-seiko-srpd76k1_4-ims.jpeg', 10890000, 8600000, 'Seiko lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Nháº­t Ä‘Æ°á»£c sÃ¡ng láº­p nÄƒm 1881. NgÆ°á»i sÃ¡ng láº­p nÃªn thÆ°Æ¡ng hiá»‡u Ä‘Ã³ lÃ  Seiko Kintaro Hattori. Nhá»¯ng bá»™ sÆ°u táº­p tiÃªu biá»ƒu khi nháº¯c Ä‘áº¿n Ä‘á»“ng há»“ Seiko Ä‘Ã³ lÃ  â€œSeiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...â€', 5, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 74, 0),
(24, 4, 'Seiko 42mm SNZG13J1', '1700577470_Seiko 42mm SNZG13J1.jpeg', '1701334742_dong-ho-seiko-snzg13j1_2-ims.jpeg', '1701334742_dong-ho-seiko-snzg13j1_3-ims.jpeg', 5780000, 4500000, 'Seiko lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Nháº­t Ä‘Æ°á»£c sÃ¡ng láº­p nÄƒm 1881. NgÆ°á»i sÃ¡ng láº­p nÃªn thÆ°Æ¡ng hiá»‡u Ä‘Ã³ lÃ  Seiko Kintaro Hattori. Nhá»¯ng bá»™ sÆ°u táº­p tiÃªu biá»ƒu khi nháº¯c Ä‘áº¿n Ä‘á»“ng há»“ Seiko Ä‘Ã³ lÃ  â€œSeiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...â€', 20, 'Thá»¥y Sá»¹', 'CÆ¡/Automatic', 58, 0),
(25, 4, 'Seiko 38mm SNKD99K1-5', '1700577580_Seiko 38mm SNKD99K1-5.jpeg', '1701334540_SNKD99K1-3.jpeg', '1701334540_SNKD99K1-1.jpeg', 4500000, 4000000, 'Seiko lÃ  thÆ°Æ¡ng hiá»‡u Ä‘á»“ng há»“ Nháº­t Ä‘Æ°á»£c sÃ¡ng láº­p nÄƒm 1881. NgÆ°á»i sÃ¡ng láº­p nÃªn thÆ°Æ¡ng hiá»‡u Ä‘Ã³ lÃ  Seiko Kintaro Hattori. Nhá»¯ng bá»™ sÆ°u táº­p tiÃªu biá»ƒu khi nháº¯c Ä‘áº¿n Ä‘á»“ng há»“ Seiko Ä‘Ã³ lÃ  â€œSeiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...â€', 33, 'Nháº­t Báº£n', 'Pin/Quazt', 24, 0),
(26, 1, 'Casio 42mm MTP-1375L', '1700577643_Casio 42mm MTP-1375L.jpeg', '1701332638_dong-ho-casio-mtp-1375l-7a_5-ims.jpeg', '1701332638_dong-ho-casio-mtp-1375l-7a_3-ims.jpeg', 2000000, 1250000, 'LÃ  cÃ¡i tÃªn ná»•i báº­t trong series Enticer, máº«u Ä‘á»“ng há»“ Casio MTP-1375L-7AVDF Ä‘Æ°á»£c Ä‘Ã´ng Ä‘áº£o nam giá»›i Ä‘Ã³n nháº­n ná»“ng nhiá»‡t. CÃ¡ch phá»‘i mÃ u kinh Ä‘iá»ƒn - dÃ¢y da Ä‘en, ná»n máº·t tráº¯ng - khiáº¿n sáº£n pháº©m Ä‘Æ°á»£c tÃ´n thÃªm váº» sang trá»ng Ä‘á»ƒ káº¿t há»£p vá»›i nhiá»u bá»™ trang phá»¥c khÃ¡c nhau cá»§a cÃ¡c quÃ½ Ã´ng', 12, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 73, 0),
(27, 1, 'Casio G-Shock GA-2100', '1700577701_Casio G-Shock GA-2100.jpeg', '1701333135_GA-2100-1A1-3.jpeg', '1701333135_GA-2100-1A1-20.jpeg', 3270000, 2650000, 'Äá»“ng há»“ Casio chÃ­nh hÃ£ng cÃ³ Ä‘á»™ bá»n cá»±c cao vá»›i viá»‡c sá»Ÿ há»¯u máº·t kÃ­nh khoÃ¡ng hay kÃ­nh sapphire chá»‘ng xÆ°á»›c cao, trÃ¡nh Ä‘Æ°á»£c nhá»¯ng thÆ°Æ¡ng tá»•n khi va cháº¡m.\r\nDÃ¢y Ä‘eo Ä‘Æ°á»£c lÃ m tá»« cÃ¡c cháº¥t liá»‡u nhÆ° nhá»±a cao cáº¥p, da tháº­t, cao su, titan, thÃ©p chá»‘ng gá»‰,... Bá»n bá»‰ theo thá»i gian báº¥t cháº¥p má»i Ä‘iá»u kiá»‡n thá»i tiáº¿t, mÃ´i trÆ°á»ng.\r\nCÃ³ má»™t sá»‘ dÃ²ng Ä‘á»“ng há»“ Casio cÃ²n Ä‘Æ°á»£c trang bá»‹ chá»©c nÄƒng ngÄƒn cháº·n xÃ¢m nháº­p cá»§a cÃ¡t, bÃ¹n, bá»¥i,... Äáº£m báº£o sáº£n pháº©m luÃ´n hoáº¡t Ä‘á»™ng trong tráº¡ng thÃ¡i bÃ¬nh thÆ°á»ng', 7, 'Thá»¥y Sá»¹', 'Äiá»‡n tá»­', 99, 0),
(28, 1, 'Casio 43.5mm MTP-1374L', '1700577758_Casio 43.5mm MTP-1374L.jpeg', '1701332755_CASIO-MTP-1374L-1AVDF-3.jpeg', '1701332755_CASIO-MTP-1374L-1AVDF-2.jpeg', 2100000, 1590000, 'Tráº» trung, cÃ¡ tÃ­nh nhÆ°ng khÃ´ng kÃ©m pháº§n thanh lá»‹ch vÃ  sang trá»ng; Ä‘Ã³ lÃ  4 cá»¥m tá»« mÃ´ táº£ chÃ­nh xÃ¡c vá» diá»‡n máº¡o cá»§a Ä‘á»“ng há»“ Casio MTP-1374L-1AVDF. Sáº£n pháº©m Ä‘iá»‡n tá»­ Ä‘Æ°á»£c má»‡nh danh lÃ  â€œlá»±a chá»n má»›i cho phÃ¢n khÃºc giÃ¡ ráº»â€ nÃ y ráº¥t Ä‘Ã¡ng Ä‘á»ƒ báº¥t cá»© ai tráº£i nghiá»‡m.\"', 9, 'Nháº­t Báº£n', 'CÆ¡/Automatic', 22, 0),
(29, 1, 'Casio AE-1200WHD', '1700577843_Casio AE-1200WHD.jpeg', '1701332943_AE-1200WHD-1AVDF-6.jpeg', '1701332943_AE-1200WHD-1AVDF-7.jpeg', 1580000, 1090000, 'KhÃ´ng quÃ¡ khi nháº­n Ä‘á»‹nh ráº±ng Ä‘á»“ng há»“ Casio AE-1200WHD-1AVDF lÃ  má»™t trong sá»‘ nhá»¯ng máº«u â€œÄƒn khÃ¡châ€ nháº¥t Viá»‡t Nam. Bá»Ÿi sáº£n pháº©m chá»‰ cÃ³ má»©c giÃ¡ táº§m trung nhÆ°ng sá»Ÿ há»¯u Ä‘a chá»©c nÄƒng tiá»‡n lá»£i vÃ  Ä‘á»™ bá»n â€œkhá»§ngâ€ Ä‘áº¿n khÃ³ tin cÃ¹ng thiáº¿t káº¿ cá»±c â€œngáº§uâ€ vá»›i phÃ¡i máº¡nh.\r\nVá»›i nhá»¯ng chiáº¿c Ä‘á»“ng há»“ thuá»™c Series Casio AE1200 truyá»n thá»‘ng, NSX Ä‘Ã£ thá»±c hiá»‡n Ä‘Ãºng phÆ°Æ¡ng chÃ¢m â€œliÃªn tá»¥c táº¡o ra nhá»¯ng thá»© quan trá»ng nháº¥t Ä‘á»‘i vá»›i ngÆ°á»i dÃ¹ngâ€. VÃ¬ sáº£n pháº©m giÃºp báº¡n táº­p trung tá»‘t hÆ¡n vÃ o viá»‡c xÃ¡c Ä‘á»‹nh giá» giáº¥c siÃªu chuáº©n, cá»¥ thá»ƒ Ä‘áº¿n tá»«ng giÃ¢y.', 10, 'Nháº­t Báº£n', 'Äiá»‡n tá»­', 1, 0),
(38, 5, 'Tissot - Nam T099.429.11.038.00 Size', '1701335850_T099.429.11.038.00-1-1657079694916.jpeg', '1701335850_T099.429.11.038.00-3-1657079697907.jpeg', '1701335850_T099.429.11.038.00-6-1657079706150.jpeg', 13000000, 10890000, 'Tissot lÃ  thÆ°Æ¡ng hiá»‡u cá»§a Thá»¥y Sá»¹ Ä‘Æ°á»£c thÃ nh láº­p vÃ o nÄƒm 1853. ÄÆ°á»£c thÃ nh láº­p bá»Ÿi Charles-FÃ©licien Tissot vÃ  ngÆ°á»i con trai Charles-Ã‰mile Tissot. CÃ¡c dÃ²ng sáº£n pháº©m tiÃªu biá»ƒu: â€œTissot Prx, Tissot Le Locle, Tissot Luxury, Tissot Chemin Des Tourelles, Tissot 18K Gold, Tissot T-Waveâ€¦â€', 6, 'Thá»¥y Sá»¹', 'Pin/Quazt', 4, 0),
(39, 5, 'Tissot - Nam T086.407.11.061.00', '1701335970_T086.407.11.061.00-1-1657164340779.jpeg', '1701335970_T086.407.11.061.00-3-1657164343193.jpeg', '1701335970_T086.407.11.061.00-6-1657164351579.jpeg', 10900000, 9100000, 'Äá»“ng há»“ 3 kim 1 lá»‹ch Tissot T086.407.11.061.00 cÃ³ size máº·t 41mm náº±m gá»n trÃªn cá»• tay nam vá»«a vÃ  to tá»« 16 - 19cm. Thiáº¿t káº¿ chiáº¿c Ä‘á»“ng há»“ Tissot 1853 nÃ y Ä‘Æ¡n giáº£n nhÆ°ng sang trá»ng, tÃ´n lÃªn khÃ­ cháº¥t cá»§a cÃ¡c doanh nhÃ¢n tráº» tuá»•i hoáº·c anh em vÄƒn phÃ²ng thanh lá»‹ch', 15, 'Thá»¥y Sá»¹', 'Pin/Quazt', 8, 0);

-- --------------------------------------------------------

--
-- Cáº¥u trÃºc báº£ng cho báº£ng `taikhoan`
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
-- Äang Ä‘á»• dá»¯ liá»‡u cho báº£ng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `tel`, `address`, `role`, `checkname`) VALUES
(1, 'admin123', 'Admin123123', 'admin@gmail.com.vn', NULL, NULL, 1, 0),
(2, 'dai123123', 'Dai123123', 'dai@gmail.com', NULL, NULL, 0, 0),
(4, 'datgin2004', '28062004Dat', 'dnguyentien145@gmail.com', '0964305701', 'ChÆ°Æ¡ng má»¹', 0, 1),
(6, 'khanh123', 'Khanh123', 'datntph36689@fpt.edu.vn', NULL, NULL, 0, 0),
(7, 'taikhoan1', 'Taikhoan1', 'datntph36687@fpt.edu.vn', NULL, NULL, 0, 0),
(8, 'khanhtdi', 'Khanh123123', 'KHANHPRO199X@GMAIL.COM', NULL, NULL, 0, 0),
(9, 'test123', 'Qa123123', 'trankhanhhy1997x@gmail.com', NULL, NULL, 0, 0),
(10, 'demo002', 'Aq123123', 'demo001@gmail.com', '0999999999', 'Cáº§u Giáº¥y, HÃ  Ná»™i', 0, 1);

--
-- Chá»‰ má»¥c cho cÃ¡c báº£ng Ä‘Ã£ Ä‘á»•
--

--
-- Chá»‰ má»¥c cho báº£ng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tk_bl` (`id_user`),
  ADD KEY `fk_pro_bl` (`id_pro`);

--
-- Chá»‰ má»¥c cho báº£ng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_cart` (`idsp`),
  ADD KEY `fk_user_cart` (`iduser`);

--
-- Chá»‰ má»¥c cho báº£ng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ctdh_dh` (`id_dh`),
  ADD KEY `fk_ctdh_sp` (`id_sp`);

--
-- Chá»‰ má»¥c cho báº£ng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chá»‰ má»¥c cho báº£ng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_tk` (`id_user`);

--
-- Chá»‰ má»¥c cho báº£ng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc_sanpham` (`iddm`);

--
-- Chá»‰ má»¥c cho báº£ng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho cÃ¡c báº£ng Ä‘Ã£ Ä‘á»•
--

--
-- AUTO_INCREMENT cho báº£ng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho báº£ng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT cho báº£ng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho báº£ng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho báº£ng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho báº£ng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho báº£ng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- CÃ¡c rÃ ng buá»™c cho cÃ¡c báº£ng Ä‘Ã£ Ä‘á»•
--

--
-- CÃ¡c rÃ ng buá»™c cho báº£ng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_sp_cart` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_user_cart` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- CÃ¡c rÃ ng buá»™c cho báº£ng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `fk_ctdh_sp` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- CÃ¡c rÃ ng buá»™c cho báº£ng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_dh_tk` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id`);

--
-- CÃ¡c rÃ ng buá»™c cho báº£ng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_danhmuc_sanpham` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
