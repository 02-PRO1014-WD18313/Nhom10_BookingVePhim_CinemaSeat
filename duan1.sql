-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 01:49 PM
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
(27, 4, 13, 'Tuyệt vời', '2023-12-01', 5),
(29, 4, 2, 'đẹp xuất sắc', '2023-12-01', 5);

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

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idsp`, `soluong`) VALUES
(193, 4, 1, 10),
(194, 4, 17, 6);

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
(4, 32, 16, 1, 1500000, '1700576415_Longines L2.321.4.87.2.jpeg', 'Longines L2.321.4.87.2', 2420000),
(5, 32, 13, 1, 890000, '1700576058_Tissot T006.407.16.033.00.jpeg', 'Tissot T006.407.16.033.00', 2420000),
(6, 33, 13, 1, 890000, '1700576058_Tissot T006.407.16.033.00.jpeg', 'Tissot T006.407.16.033.00', 920000),
(10, 36, 2, 1, 500000, 'dongho2.jpeg', 'Đồng hồ Orient', 530000),
(11, 37, 3, 1, 6700000, 'dongho3.jpeg', 'Orient - RA-AR0004S10B', 6730000),
(12, 38, 2, 1, 6500000, 'dongho2.jpeg', 'Orient - Nam FAG00003W043', 6530000);

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
  `date` date DEFAULT NULL,
  `ghi_chu` varchar(255) DEFAULT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `id_user`, `nguoi_nhan`, `email`, `tel`, `address`, `date`, `ghi_chu`, `trangthai`) VALUES
(32, 4, 'datgin2004', ' dnguyentien145@gmail.com', '0964305701', 'Trịnh Văn Bô', NULL, '', 4),
(33, 4, 'datgin2004', ' dnguyentien145@gmail.com', '0964305701', 'Chương Mỹ', NULL, '', 3),
(36, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0999999999', 'Trịnh Văn Bô', NULL, '', 3),
(37, 4, 'datgin2k4', ' dnguyentien145@gmail.com', '0964305701', 'Hà Tĩnh', '2023-12-01', NULL, 4),
(38, 4, 'datgin2k5', ' dnguyentien145@gmail.com', '0987654321', 'Trịnh Văn Bô', '2023-12-01', NULL, 4);

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
(1, 2, 'Orient FAG02003W0 Size 41mm', 'dongho1.jpeg', '1701335200_dong-ho-orient--fag02003w0_2-ims.jpeg', '1701335200_dong-ho-orient--fag02003w0_4-ims.jpeg', 4500000, 3890000, 'Orient FAG02003W0 không chỉ là mẫu đồng hồ thuộc kiểu Semi Skeleton (lộ cơ) độc đáo mà còn là sự kết hợp hoàn hảo giữa cỗ máy bền bỉ của Nhật Bản và âm hưởng truyền thống đậm phong cách Thụy Sĩ. Chi tiết một cửa sổ \"độc nhãn\" (Open Heart) ở vị trí 7h - 10h tạo nên vẻ khác biệt cho sản phẩm khi giúp người dùng có trải nghiệm thú vị, không cảm thấy rối mắt mỗi lần nhìn ngắm chuyển động của bộ máy F6T22.', 20, 'Nhật Bản', 'Pin/Quazt'),
(2, 2, 'Orient - Nam FAG00003W043', 'dongho2.jpeg', '1701335333_FAG00003W0-2.jpeg', '1701335333_FAG00003W0-3.jpeg', 8050000, 6500000, 'Orient là một trong những thương hiệu đồng hồ nổi tiếng trên thế giới. Để đáp ứng nhu cầu về đa dạng khách hàng, Orient luôn sẵn hàng nâng cao, cải tiến và cho ra đời những sản phẩm độc lạ. Một trong các mẫu đồng hồ nam Orient rất được người tiêu dùng ưa chuộng đó là mẫu Orient FAG00003W0. Sản phẩm cũng là một trong những bộ sưu tập đắt giá của nhà Orient. Nếu là một tín đồ của đồng hồ, bạn không thể bỏ qua cơ hội sở hữu dòng Orient FAG00003W0 này.', 12, 'Nhật Bản', 'Cơ/Automatic'),
(3, 2, 'Orient - RA-AR0004S10B', 'dongho3.jpeg', '1701335463_dong-ho-orient-ra-ar0004s10b_2-ims.jpeg', '1701335463_dong-ho-orient-ra-ar0004s10b_3-ims.jpeg', 8970000, 6700000, 'Với cách “nhá hàng” cấu tạo một phần bộ máy bên trong, đồng hồ Orient RA-AR0004S10B Open Heart đã khơi dậy trí tò mò của bất cứ ai từng chiêm ngưỡng. Sản phẩm kết hợp hài hòa giữa phong cách hiện đại và cổ điển giúp tôn lên vẻ sang trọng và thời thượng cho nam giới', 20, 'Nhật Bản', 'Cơ/Automatic'),
(4, 2, 'Orient - FAG03002B0 38.5', 'dongho4.jpeg', '1701335643_dong-ho-orient-fag03002b0_2-ims.jpeg', '1701335643_dong-ho-orient-fag03002b0_4-ims.jpeg', 7050000, 5700000, 'Đồng hồ Orient FAG03002B0 được xem là một siêu phẩm độc đáo, kết hợp giữa lối thiết kế cổ điển nhưng vẫn mang đậm phong cách thời thượng của thương hiệu đến từ Nhật Bản. Dưới sự trau chuốt và tỉ mỉ của các Designer nhà Orient, model nền mặt số màu đen phối với dây kim loại màu bạc này đã tạo được sức hút riêng biệt khiến nhiều người mong muốn sở hữu. ', 15, 'Nhật Bản', 'Năng lượng mặt trời'),
(13, 5, 'Tissot T006.407.16.033.00', '1700576058_Tissot T006.407.16.033.00.jpeg', '1701335063_dong-ho-tissot-t006.407.16.033.00_2-ims.jpeg', '1701335063_dong-ho-tissot-t006.407.16.033.00_3-ims.jpeg', 14500000, 11290000, 'Tissot là thương hiệu của Thụy Sỹ được thành lập vào năm 1853. Được thành lập bởi Charles-Félicien Tissot và người con trai Charles-Émile Tissot. Các dòng sản phẩm tiêu biểu: “Tissot Prx, Tissot Le Locle, Tissot Luxury, Tissot Chemin Des Tourelles, Tissot 18K Gold, Tissot T-Wave…”', 10, 'Thụy Sỹ', 'Cơ/Automatic'),
(14, 3, 'Citizen NH8363-14H', '1700576274_Citizen NH8363-14H.jpeg', '1701333399_dong-ho-citizen-nh8363-14h_2-ims.jpeg', '1701333399_dong-ho-citizen-nh8363-14h_3-ims.jpeg', 5500000, 4230000, 'Đồng hồ Citizen là thương hiệu của Nhật Bản ra đời năm 1918 bởi viện nghiên cứu đồng hồ Shokosha. Citizen tiếng nhật có ý nghĩa đó là “người dân” hàm ý là bất kỳ ai cũng có thể sở hữu được đồng hồ của thương hiệu này\"', 5, 'Nhật Bản', 'Cơ/Automatic'),
(15, 3, 'Citizen BM7256-50E', '1700576346_Citizen BM7256-50E.jpeg', '1701333294_BM7256-50E-4.jpeg', '1701333294_BM7256-50E-7.jpeg', 4590000, 3700000, 'Đồng hồ Citizen là thương hiệu của Nhật Bản ra đời năm 1918 bởi viện nghiên cứu đồng hồ Shokosha. Citizen tiếng nhật có ý nghĩa đó là “người dân” hàm ý là bất kỳ ai cũng có thể sở hữu được đồng hồ của thương hiệu này', 20, 'Nhật Bản', 'Cơ/Automatic'),
(16, 6, 'Longines L2.321.4.87.2', '1700576415_Longines L2.321.4.87.2.jpeg', '1701333589_L2.321.4.87.2-3-1664953295253.jpeg', '1701333589_L2.321.4.87.2-1-1664953287371.jpeg', 6500000, 5900000, '- Longines là thương hiệu đồng hồ Thụy Sỹ ra đời vào năm 1832. Được sáng lập bởi Auguste Agassiz. Có những dòng sản phẩm tiêu biểu: “Elegance, Watchmaking Tradition, Avigation, Diving, Performance”.', 8, 'Thụy Sỹ', 'Cơ/Automatic'),
(17, 6, 'Longines L3.742.4.96.6', '1700576490_Longines L3.742.4.96.6.jpeg', '1701333711_L3.742.4.96.6-3-1649732654576.jpeg', '1701333711_L3.742.4.96.6-2-1649732648365.jpeg', 8900000, 7560000, '- Longines là thương hiệu đồng hồ Thụy Sỹ ra đời vào năm 1832. Được sáng lập bởi Auguste Agassiz. Có những dòng sản phẩm tiêu biểu: “Elegance, Watchmaking Tradition, Avigation, Diving, Performance”.\"\"\"', 15, 'Thụy Sỹ', 'Cơ/Automatic'),
(18, 2, 'Orient RA-AR0003L10B', '1700576568_Orient RA-AR0003L10B.jpeg', '1701334240_RA-AR0003L10B-3-1678181761610.jpeg', '1701334240_RA-AR0003L10B-5-1678181767893.jpeg', 8900000, 7240000, 'Đúng với tên gọi Orient RA-AR0003L10B Open Heart, chiếc đồng hồ nam này được hãng lồng ghép chi tiết “hở tim” vô cùng tinh tế ở cả hai mặt. Ở phía trước, phần lộ máy đặt tại vị trí 9h thu hút và có viền bằng kim loại màu bạc bao bọc xung quanh. Phía sau sản phẩm cũng có một “cửa sổ” lớn giúp người dùng chiêm ngưỡng được bộ máy cơ học.\"', 20, 'Nhật Bản', 'Cơ/Automatic'),
(19, 2, 'Orient FAG02005W0', '1700576653_Orient FAG02005W0.jpeg', '1701333807_dong-ho-orient-fag02005w0_2-ims.jpeg', '1701333807_dong-ho-orient-fag02005w0_3-ims.jpeg', 6790000, 5090000, 'Những mẫu đồng hồ cơ Open Heart luôn chiếm được cảm tình của người sử dụng. Không chỉ có tác dụng tạo điểm nhấn mà đồng hồ cơ lộ máy còn giúp người dùng quan sát được những chuyển động nhỏ nhất của máy. Dòng đồng hồ Orient FAG02005W0 sở hữu đặc trưng này kết hợp với vẻ ngoài hoàn hảo. Siêu phẩm khiến bất cứ tín đồ thời trang nào cũng phải mê đắm.', 10, 'Nhật Bản', 'Cơ/Automatic'),
(20, 2, 'Orient FAG02005W1', '1700576720_Orient FAG02005W1.jpeg', '', '1701334124_Orient-RA-KA0003S00B-3.jpeg', 5600000, 4890000, 'Orient là thương hiệu đồng hồ Nhật Bản thành lập năm 1950. Hãng được sáng lập bởi Shogoro Yoshida. Các dòng sản phẩm làm nên tên tuổi của Orient đó là “Orient Star, Orient Sun and Moon, Orient SK,...”', 16, 'Nhật Bản', 'Cơ/Automatic'),
(21, 2, 'Orient SK RA-AA0B02R19B', '1700576815_Orient SK RA-AA0B02R19B.jpeg', '1701334389_RA-AA0B02R19B-3.jpeg', '1701334389_RA-AA0B02R19B-2.jpeg', 7890000, 5800000, 'Cho đến hiện tại chiếc đồng hồ Nhật Bản Orient SK RA-AA0B02R19B vẫn đang được nhiều người săn lùng bởi vẻ đẹp vượt thời gian cũng như những bí ẩn đằng sau cỗ máy thời gian này. Sản phẩm không chỉ có thiết kế mặt số lớn đầy nam tính và đẹp mắt mà sở hữu các tính năng rất ưu việt.', 15, 'Nhật Bản', 'Cơ/Automatic'),
(22, 4, 'Seiko 42mm SUR211P1', '1700576974_Seiko 42mm SUR211P1.jpeg', '1701334835_SUR211P1-5.jpeg', '1701334835_SUR211P1-6.jpeg', 4890000, 4120000, 'Seiko là thương hiệu đồng hồ Nhật được sáng lập năm 1881. Người sáng lập nên thương hiệu đó là Seiko Kintaro Hattori. Những bộ sưu tập tiêu biểu khi nhắc đến đồng hồ Seiko đó là “Seiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...”', 18, 'Nhật Bản', 'Cơ/Automatic'),
(23, 4, 'Seiko 42.5mm SRPD76K1', '1700577362_Seiko 42.5mm SRPD76K1.jpeg', '1701334656_dong-ho-seiko-srpd76k1_3-ims.jpeg', '1701334656_dong-ho-seiko-srpd76k1_4-ims.jpeg', 10890000, 8600000, 'Seiko là thương hiệu đồng hồ Nhật được sáng lập năm 1881. Người sáng lập nên thương hiệu đó là Seiko Kintaro Hattori. Những bộ sưu tập tiêu biểu khi nhắc đến đồng hồ Seiko đó là “Seiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...”', 5, 'Nhật Bản', 'Cơ/Automatic'),
(24, 4, 'Seiko 42mm SNZG13J1', '1700577470_Seiko 42mm SNZG13J1.jpeg', '1701334742_dong-ho-seiko-snzg13j1_2-ims.jpeg', '1701334742_dong-ho-seiko-snzg13j1_3-ims.jpeg', 5780000, 4500000, 'Seiko là thương hiệu đồng hồ Nhật được sáng lập năm 1881. Người sáng lập nên thương hiệu đó là Seiko Kintaro Hattori. Những bộ sưu tập tiêu biểu khi nhắc đến đồng hồ Seiko đó là “Seiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...”', 20, 'Thụy Sỹ', 'Cơ/Automatic'),
(25, 4, 'Seiko 38mm SNKD99K1-5', '1700577580_Seiko 38mm SNKD99K1-5.jpeg', '1701334540_SNKD99K1-3.jpeg', '1701334540_SNKD99K1-1.jpeg', 4500000, 4000000, 'Seiko là thương hiệu đồng hồ Nhật được sáng lập năm 1881. Người sáng lập nên thương hiệu đó là Seiko Kintaro Hattori. Những bộ sưu tập tiêu biểu khi nhắc đến đồng hồ Seiko đó là “Seiko 5, Seiko Solar, Seiko Kinetic, Seiko Chronograph,...”', 33, 'Nhật Bản', 'Pin/Quazt'),
(26, 1, 'Casio 42mm MTP-1375L', '1700577643_Casio 42mm MTP-1375L.jpeg', '1701332638_dong-ho-casio-mtp-1375l-7a_5-ims.jpeg', '1701332638_dong-ho-casio-mtp-1375l-7a_3-ims.jpeg', 2000000, 1250000, 'Là cái tên nổi bật trong series Enticer, mẫu đồng hồ Casio MTP-1375L-7AVDF được đông đảo nam giới đón nhận nồng nhiệt. Cách phối màu kinh điển - dây da đen, nền mặt trắng - khiến sản phẩm được tôn thêm vẻ sang trọng để kết hợp với nhiều bộ trang phục khác nhau của các quý ông', 12, 'Nhật Bản', 'Cơ/Automatic'),
(27, 1, 'Casio G-Shock GA-2100', '1700577701_Casio G-Shock GA-2100.jpeg', '1701333135_GA-2100-1A1-3.jpeg', '1701333135_GA-2100-1A1-20.jpeg', 3270000, 2650000, 'Đồng hồ Casio chính hãng có độ bền cực cao với việc sở hữu mặt kính khoáng hay kính sapphire chống xước cao, tránh được những thương tổn khi va chạm.\r\nDây đeo được làm từ các chất liệu như nhựa cao cấp, da thật, cao su, titan, thép chống gỉ,... Bền bỉ theo thời gian bất chấp mọi điều kiện thời tiết, môi trường.\r\nCó một số dòng đồng hồ Casio còn được trang bị chức năng ngăn chặn xâm nhập của cát, bùn, bụi,... Đảm bảo sản phẩm luôn hoạt động trong trạng thái bình thường', 7, 'Thụy Sỹ', 'Điện tử'),
(28, 1, 'Casio 43.5mm MTP-1374L', '1700577758_Casio 43.5mm MTP-1374L.jpeg', '1701332755_CASIO-MTP-1374L-1AVDF-3.jpeg', '1701332755_CASIO-MTP-1374L-1AVDF-2.jpeg', 2100000, 1590000, 'Trẻ trung, cá tính nhưng không kém phần thanh lịch và sang trọng; đó là 4 cụm từ mô tả chính xác về diện mạo của đồng hồ Casio MTP-1374L-1AVDF. Sản phẩm điện tử được mệnh danh là “lựa chọn mới cho phân khúc giá rẻ” này rất đáng để bất cứ ai trải nghiệm.\"', 9, 'Nhật Bản', 'Cơ/Automatic'),
(29, 1, 'Casio AE-1200WHD', '1700577843_Casio AE-1200WHD.jpeg', '1701332943_AE-1200WHD-1AVDF-6.jpeg', '1701332943_AE-1200WHD-1AVDF-7.jpeg', 1580000, 1090000, 'Không quá khi nhận định rằng đồng hồ Casio AE-1200WHD-1AVDF là một trong số những mẫu “ăn khách” nhất Việt Nam. Bởi sản phẩm chỉ có mức giá tầm trung nhưng sở hữu đa chức năng tiện lợi và độ bền “khủng” đến khó tin cùng thiết kế cực “ngầu” với phái mạnh.\r\nVới những chiếc đồng hồ thuộc Series Casio AE1200 truyền thống, NSX đã thực hiện đúng phương châm “liên tục tạo ra những thứ quan trọng nhất đối với người dùng”. Vì sản phẩm giúp bạn tập trung tốt hơn vào việc xác định giờ giấc siêu chuẩn, cụ thể đến từng giây.', 10, 'Nhật Bản', 'Điện tử'),
(38, 5, 'Tissot - Nam T099.429.11.038.00 Size', '1701335850_T099.429.11.038.00-1-1657079694916.jpeg', '1701335850_T099.429.11.038.00-3-1657079697907.jpeg', '1701335850_T099.429.11.038.00-6-1657079706150.jpeg', 13000000, 10890000, 'Tissot là thương hiệu của Thụy Sỹ được thành lập vào năm 1853. Được thành lập bởi Charles-Félicien Tissot và người con trai Charles-Émile Tissot. Các dòng sản phẩm tiêu biểu: “Tissot Prx, Tissot Le Locle, Tissot Luxury, Tissot Chemin Des Tourelles, Tissot 18K Gold, Tissot T-Wave…”', 6, 'Thụy Sỹ', 'Pin/Quazt'),
(39, 5, 'Tissot - Nam T086.407.11.061.00', '1701335970_T086.407.11.061.00-1-1657164340779.jpeg', '1701335970_T086.407.11.061.00-3-1657164343193.jpeg', '1701335970_T086.407.11.061.00-6-1657164351579.jpeg', 10900000, 9100000, 'Đồng hồ 3 kim 1 lịch Tissot T086.407.11.061.00 có size mặt 41mm nằm gọn trên cổ tay nam vừa và to từ 16 - 19cm. Thiết kế chiếc đồng hồ Tissot 1853 này đơn giản nhưng sang trọng, tôn lên khí chất của các doanh nhân trẻ tuổi hoặc anh em văn phòng thanh lịch', 15, 'Thụy Sỹ', 'Pin/Quazt');

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
(1, 'admin123', 'Admin123123', 'admin@gmail.com.vn', NULL, NULL, 1, 0),
(2, 'dai123123', 'Dai123123', 'dai@gmail.com', NULL, NULL, 0, 0),
(4, 'datgin2k4', '28062004Dat', 'dnguyentien145@gmail.com', '0964305701', 'Chương mỹ', 0, 1),
(6, 'khanh123', 'Khanh123', 'datntph36689@fpt.edu.vn', NULL, NULL, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `fk_ctdh_dh` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `fk_ctdh_sp` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

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
