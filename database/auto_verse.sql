-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2025 lúc 07:31 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `auto_verse`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `auto_type` varchar(255) DEFAULT NULL,
  `engine` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `mo_men_xoan` varchar(50) DEFAULT NULL,
  `hop_so` varchar(50) DEFAULT NULL,
  `dan_dong` varchar(50) DEFAULT NULL,
  `trong_luong` varchar(50) DEFAULT NULL,
  `chieu_dai` varchar(50) DEFAULT NULL,
  `chieu_rong` varchar(50) DEFAULT NULL,
  `chieu_cao` varchar(50) DEFAULT NULL,
  `dung_tich_nhien_lieu` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `auto`
--

INSERT INTO `auto` (`id`, `name`, `title`, `description`, `image`, `auto_type`, `engine`, `power`, `mo_men_xoan`, `hop_so`, `dan_dong`, `trong_luong`, `chieu_dai`, `chieu_rong`, `chieu_cao`, `dung_tich_nhien_lieu`) VALUES
(7, 'Bugatti Chiron', 'Hypercar', 'Mẫu xe flagship của Bugatti với thiết kế sang trọng và hiệu suất cao.', 'Chiron.jpg', 'sport', '8.0L W16', '1.500 HP', NULL, '7 cấp ly hợp kép', 'AWD', '1.996 kg', '4.544 mm', '2.038 mm', '1.212 mm', NULL),
(8, 'Bugatti Veyron 16.4', 'Legendary Speed', 'Chiếc xe nổi tiếng từng giữ kỷ lục tốc độ thế giới.', 'Veyron.webp', 'sport', '8.0L W16', '1.001 HP', NULL, '7 cấp ly hợp kép', 'AWD', '1.888 kg', '4.462 mm', '1.998 mm', '1.204 mm', NULL),
(10, 'Bugatti Centodieci', 'Tribute Edition', 'Phiên bản giới hạn tri ân mẫu EB110 huyền thoại.', 'Centodieci.webp', 'sport', '8.0L W16', '1.600 HP', NULL, '7 cấp ly hợp kép', 'AWD', '1.976 kg', '4.544 mm', '2.038 mm', '1.212 mm', NULL),
(11, 'Bugatti La Voiture Noire', 'Luxury One-Off', 'Chiếc xe đắt nhất thế giới từng được bán ra.', '', 'sport', '8.0L W16', '1.500 HP', NULL, '7 cấp ly hợp kép', 'AWD', '', '', '', '', NULL),
(12, 'Bugatti Bolide', 'Extreme Track Car', 'Chiếc hypercar nhẹ nhất và mạnh nhất Bugatti từng chế tạo.', 'Bolide.jpg', '', '8.0L W16', '1.578 HP', '1.600 Nm', '7 cấp ly hợp kép', 'AWD', '1.240 kg', '4.835 mm', '2.100 mm', '1.047 mm', NULL),
(13, 'Bugatti EB110 Super Sport', '90s Legend', 'Mẫu xe hiệu suất cao đầu những năm 90, động cơ V12.', NULL, 'new', '3.5L V12', '603 HP', NULL, '6 cấp tay', 'AWD', '1.418 kg', '4.400 mm', '1.940 mm', '1.125 mm', NULL),
(14, 'Bugatti Type 35B232', 'Classic Racer', 'Xe đua biểu tượng của thập niên 1920.', '', 'sport', '2.3L I8', '138 HP', NULL, '4 cấp tay', 'RWD', '750 kg', '4.544 mm', '2.038 mm', '1.125 mm', NULL),
(15, 'Bugatti Type 57SC Atlantic', 'Art Deco Icon', 'Một trong những mẫu xe cổ đắt giá và hiếm nhất.', '', 'sport', '3.3L I8 Supercharged', '210 HP', NULL, '4 cấp tay', 'RWD', '950 kg', '4.544 mm', '2.038 mm', '1.212 mm', NULL),
(16, 'Bugatti Chiron Super Sport 300+', 'Speed Record Holder', 'Mẫu xe đầu tiên vượt mốc 300 dặm/giờ.', NULL, 'sport', '8.0L W16', '1.578 HP', NULL, '7 cấp ly hợp kép', 'AWD', '1.977 kg', '4.744 mm', '2.038 mm', '1.212 mm', NULL),
(21, 'Bugatti Chiron Super Sport 300+', 'Speed Record Holder', 'Mẫu xe đầu tiên vượt mốc 300 dặm/giờ.', '', 'sport', '8.0L W16', '1.578 HP', NULL, '7 cấp ly hợp kép', 'AWD', '1.977 kg', '4.744 mm', '2.038 mm', '1.212 mm', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `image_id`, `url`) VALUES
(1, 7, 'Chiron.jpg'),
(2, 7, 'Chiron1.jpg'),
(3, 7, 'Chiron2.jpg'),
(4, 7, 'Chiron3.jpg'),
(5, 7, 'Chiron4.jpg'),
(6, 7, 'Chiron5.jpg'),
(7, 7, 'Chiron6.jpg'),
(8, 8, 'Veyron.webp'),
(9, 8, 'Veyron1.webp'),
(10, 8, 'Veyron2.webp'),
(11, 8, 'Veyron3.webp'),
(12, 8, 'Veyron4.webp'),
(13, 8, 'Veyron5.webp'),
(14, 8, 'Veyron6.webp'),
(15, 8, 'Veyron7.webp'),
(16, 9, 'Divo.avif'),
(17, 9, 'Divo1.avif'),
(18, 9, 'Divo2.avif'),
(19, 9, 'Divo3.avif'),
(20, 9, 'Divo4.avif'),
(21, 9, 'Divo5.avif'),
(22, 9, 'Divo7.avif'),
(23, 9, 'Divo8.avif'),
(24, 10, 'Centodieci.webp'),
(25, 10, 'Centodieci1.webp'),
(26, 10, 'Centodieci2.webp'),
(27, 10, 'Centodieci3.webp'),
(28, 10, 'Centodieci4.webp'),
(29, 10, 'Centodieci5.webp'),
(30, 11, 'Noire.jpg'),
(31, 11, 'Noire1.jpg'),
(32, 11, 'Noire2.jpg'),
(33, 12, 'Bolide.jpg'),
(34, 12, 'Bolide1.jpg'),
(35, 12, 'Bolide2.jpg'),
(36, 12, 'Bolide3.jpg'),
(37, 12, 'Bolide4.jpg'),
(38, 12, 'Bolide5.jpg'),
(39, 12, 'Bolide6.jpg'),
(40, 12, 'Bolide7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Phan Anh A', '$2y$10$VtMx5vj41posimVS1dsDt.fnW/5PhqaKWFmKGSE5aULYBEDshuuua', 'pavu@gmail.com', '2024-11-23 12:53:06', '2025-05-08 17:28:24'),
(100, 'Phan Anh B', '$2y$10$bV2NAJ/nGydJN8uzUTKi0egIMnTMBMBb8cqpxIj6PO4TDjBSso5WO', 'bac@gmail.com', '2025-04-02 20:39:51', '2025-05-08 17:28:30'),
(101, 'Phan Anh C', '$2y$10$xbI5.FdpFxF/CT1DRqXp.uKIRZ2cWQjqsWp/qZv6XJfKIziiBbffG', 'Quang@gmai.com', '2025-04-03 01:18:30', '2025-05-08 17:28:35'),
(115, 'Phan Anh D', '$2y$10$rss3ejJ9ndUHJyaMIwwkX.kTjh0AY5ahVJHhl2opqUvLDMQuS.PBO', 'pavu2701@gmail.com', '2025-05-10 18:00:07', '2025-05-10 18:00:07'),
(116, 'Phan Anh G', '$2y$10$Ib5OZIH40vb/iIanoTdghuaFWbc3hVE1hE3k.6nkHUQ/XpfiAiev.', 'pavu2701@gmail.com', '2025-05-10 18:00:34', '2025-05-10 18:00:34'),
(117, 'Phan Anh E', '$2y$10$vD0.rLznywFUYBN59ylDju80cOfAqI6O3EYz7eEZpygxh8PSAAtG6', 'pavu2701@gmail.com', '2025-05-10 18:00:51', '2025-05-10 18:00:51'),
(119, 'anhvu_2701', '$2y$10$uZSMyPSx8SCywAtcgA.QJ.iSQ6RT.cLuVNKc.nmSq2P0k.O16PWiG', 'pavu2701@gmail.com', '2025-05-13 05:43:30', '2025-05-13 05:43:30'),
(120, 'anhvu_2701', '$2y$10$DztIk.VUfueoSkRRZEC6n.m/JoPTu5o4ZIkg0bbkzMGkGLaPt1hx.', 'pavu2701@gmail.com', '2025-05-24 05:18:45', '2025-05-24 05:18:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
